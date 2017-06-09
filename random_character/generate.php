<?php
require_once("base.php");

function slugfy($text) {
	// replace non letter or digits by -
	$text = preg_replace('~[^\pL\d]+~u', '-', $text);

	// transliterate
	$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

	// remove unwanted characters
	$text = preg_replace('~[^-\w]+~', '', $text);

	// trim
	$text = trim($text, '-');

	// remove duplicate -
	$text = preg_replace('~-+~', '-', $text);

	// lowercase
	$text = strtolower($text);

	if (empty($text)){
		return 'n-a';
	}

	return $text;
}

class Character{
    public $level;
    public $race;
    public $classes;
    public $skills = [];
    public $alignment;
    public $atributes = [];
    public $bba = 0;
    public $sex;
    public $age = 0;
    public $pvs = 0;
    public $racasEnabled = [];
    public $classesEnabled = [];
    public $atributeSinergy = [];
    
    public function run(){
        $base = new Base();
        
        if(isset($_POST['racasEnabled']))
            $this->racasEnabled = $_POST['racasEnabled'];
        
        if(isset($_POST['classesEnabled']))
            $this->classesEnabled = $_POST['classesEnabled'];
        
        if(isset($_POST['level']) && $_POST['level'] > 0 && $_POST['level'] <= 20)
            $this->level = $_POST['level'];
        else if(isset($_POST['level']) && $_POST['level'] > 20)
            $this->level = 20;
        else
            $this->level = rand(1, 20);
        
        $this->selectRace();
        $this->setAtributes();
        $this->alignment = [rand(0, 2), rand(0, 2)];
        $this->selectClasses();
        
        $this->atributesSinergy = $this->classes[0]->atributesSinergy;
        
        $this->adjustAtributeSinergy();
        $this->adjustAtributoRaca();
        
        $this->adjustAlignment();
        $this->adjustBba();
        $this->setSex();
        $this->setAge();
        $this->setPvs();
        
        $this->ca = 10 + $this->atributes[1]->modifier + floor($this->level/2) + $this->race->ca;
        $this->ataquecc = $this->bba + $this->atributes[0]->modifier + $this->race->tamanho + $this->race->tamanho;
        $this->ataquedi = $this->bba + $this->atributes[1]->modifier + $this->race->tamanho;
        
        $modInt = $this->atributes[3]->modifier > 0 ? $this->atributes[3]->modifier : 0;
        $qtdSkills = $modInt + $this->classes[0]->skills;
        
        $this->selectSkills($qtdSkills, $this->classes[0]->classSkills);
        
        if($this->race->skillsTrained > 0){
            $skillsGen = [];
            
            foreach($base->genSkills() as $key => $skillGen){
                $skillsGen[] = $key;
            }
            
            $this->selectSkills($this->race->skillsTrained, $skillsGen);
        }
    }
    
    public function selectRace(){
        $base = new Base();
        
        $race = rand(0, (count($base->genRaces())) - 1);
        
        if(count($this->racasEnabled) > 0){
            while(!in_array($race, $this->racasEnabled))
                $race = rand(0, (count($base->genRaces())) - 1);
        }
        
        $this->race = $base->genRaces()[$race];
    }
    
    public function selectClasses(){
        $base = new Base();
        
        $niveis = $this->level;
        $classes = $base->genClasses();
        $classesBase = [];
        
        while($niveis > 0){
            $levels = rand(1, $niveis);
            $classe = rand(0, (count($classes) - 1));
            
            if(count($this->classesEnabled) > 0){
                while(!in_array($classe, $this->classesEnabled))
                    $classe = rand(0, (count($classes) - 1));
            }
            
            $classe = $classes[$classe];
            
            
            if(count($this->classesEnabled) != 1){
                if($classe->alignmentCannot && ($classe->alignmentCannot[0] === $this->alignment[0] || $classe->alignmentCannot[1] === $this->alignment[1])){
                    continue;
                }

                if($classe->alignment && ($classe->alignment[0] !== $this->alignment[0] || $classe->alignment[1] !== $this->alignment[1])){
                    continue;
                }
            }
            
            else{
                if($classe->alignment && $classe->alignment[0] !== false)
                    $this->alignment[0] = $classe->alignment[0];
                
                if($classe->alignment && $classe->alignment[1] !== false)
                    $this->alignment[1] = $classe->alignment[1];
                
                
                
                if($classe->alignmentCannot && $classe->alignmentCannot[0] !== false){
                    while($this->alignment[0] == $classe->alignmentCannot[0])
                        $this->alignment[0] = rand(0, 2);
                }
                
                if($classe->alignmentCannot && $classe->alignmentCannot[1] !== false){
                    while($this->alignment[1] == $classe->alignmentCannot[1])
                        $this->alignment[1] = rand(0, 2);
                }
            }
            
            
            
            if(count($this->classesEnabled) != 1){
                $atributesMatch = true;

                foreach($this->atributes as $key => $atribute){
                    if($this->atributes[$key]->value < $classe->atributes[$key])
                        $atributesMatch = false;
                }

                if(!$atributesMatch)
                    continue;
            }

            else{
                $atributesMatch = false;
                
                while(!$atributesMatch){
                    $atributesMatch = true;
                    
                    foreach($this->atributes as $key => $atribute){
                        while($this->atributes[$key]->value < $classe->atributes[$key]){
                            $atributesMatch = false;
                            
                            $this->atributes[$key]->value++;

                            $randAttr = rand(0, 5);

                            while($randAttr == $key || $this->atributes[$randAttr]->value <= $classe->atributes[$randAttr])
                                $randAttr = rand(0, 5);

                            $this->atributes[$randAttr]->value--;
                        }
                    }
                }
                
                $this->ajustaModifiers();
            }
            
            
            
            if(!in_array($classe->base, $classesBase)){
                $classe->level = $levels;
                $this->classes[] = $classe;
                $classesBase[] = $classe->base;
            }
            
            else{
                foreach($this->classes as $key => $class){
                    if($class->base == $classe->base)
                        $this->classes[$key]->level += $levels;
                }
            }
            
            $niveis -= $levels;
        }
    }
    
    public function adjustAtributeSinergy(){
        asort($this->atributesSinergy);
            
        $atributes = [];
        for($i = 0; $i < 6; $i++){
            $atributes[] = $this->atributes[$i]->value;
        }

        arsort($atributes);
        $newatributes = [];

        foreach($atributes as $at){
            $newatributes[] = $at;
        }

        $i = 0;
        foreach($this->atributesSinergy as $key => $as){
            $this->atributes[$key]->value = $newatributes[$i];
            $i++;
        }

        $this->ajustaModifiers();
    }
    
    public function selectSkills($qtdSkills, $skillList){
        $base = new Base();
        $skills = $base->genSkills();
        
        $characterSkills = [];
        
        for($i = 0; $i < $qtdSkills; $i++){
            $value = rand(0, (count($skillList)) - 1);
            
            $skillValue = $skills[$skillList[$value]];
            
            $skill = new Skills();
            $skill->name = $skillValue->name;
            
            if($skillValue->subs !== false){
                $valueSub = rand(0, (count($skillValue->subs) - 1));
                $skill->subs[] = $skillValue->subs[$valueSub];
            }
            
            $skillGoes = true;
            
            foreach($this->skills as $skillCharacter){
                if($skillCharacter->name == $skillValue->name){
                    $skillGoes = false;
                    
                    
                    if($skillCharacter->subs !== false){
                        if(in_array($skillValue->subs[$valueSub], $skillCharacter->subs)){
                            $i--;
                            break;
                        }

                        else{
                            $skillCharacter->subs[] = $skillValue->subs[$valueSub];
                        }
                    }
                    
                    else
                        $i--;
                    
                    
                    break;
                }
            }
            
            if($skillGoes)
                $this->skills[] = $skill;
            
            unset($skill);
        }
        
        usort($this->skills, function($a, $b){
            return strcmp(slugfy($a->name), slugfy($b->name));
        });

        foreach($this->skills as $skill){
            if($skill->subs !== false){
                usort($skill->subs, function($a, $b){
                    return strcmp(slugfy($a), slugfy($b));
                });
            }
        }
    }
    
    public function setMinAtribute($min){
        foreach($this->atributes as $key => $atribute){
            while($this->atributes[$key]->value < $min){
                $atribute = rand(0, 5);
                
                if($atribute != $key && $this->atributes[$atribute]->value > $min){
                    $this->atributes[$atribute]->value--;
                    $this->atributes[$key]->value++;
                }
            }
        }
    }
    
    public function setAtributes(){
        $base = new Base();
        
        $this->atributes = $base->genAtributes();
        
        $fracasso = 0;
        while(true){
            for($i = 0; $i < 6; $i++){
                $this->atributes[$i]->value = [];

                for($j = 0; $j < 4; $j++){
                    $this->atributes[$i]->value[] = rand(1, 6);
                }

                asort($this->atributes[$i]->value);
                unset($this->atributes[$i]->value[0]);
                $this->atributes[$i]->value = array_sum($this->atributes[$i]->value);
            }
            
            $totalAtr = 0;
            foreach($this->atributes as $atribute){
                $modifier = floor(($atribute->value - 10)/2);
                $totalAtr += $modifier;
            }
            
            if($totalAtr > 0)
                break;
            
            else
                $fracasso++;
        }
        
        $this->fracasso = $fracasso;
        
        //$qtdAtributes = 80;
        
//        while($qtdAtributes > 0){
//            $value = rand(0, 20);
//            $atribute = rand(0, 5);
//            
//            if($qtdAtributes - $value < 0)
//                $value = $qtdAtributes;
//            
//            if($this->atributes[$atribute]->value + $value < 20){
//                $this->atributes[$atribute]->value += $value;
//                $qtdAtributes -= $value;
//            }
//        }
        
        //$this->setMinAtribute(6);
        
        $bonusAtributes = floor($this->level/2);
        while($bonusAtributes > 0){
            $atribute = rand(0, 5);
            $value = rand(0, $bonusAtributes);
            $bonusAtributes -= $value;
            
            $this->atributes[$atribute]->value += $value;
        }
        
        if($this->race->randomAtributesQuantity !== false){
            $fstAtr = -1;
            
            for($i = 0; $i < $this->race->randomAtributesQuantity; $i++){
                $atribute = rand(0, 5);
                
                if($fstAtr != $atribute && ($this->race->randomAtributesCannot === false || !in_array($atribute, $this->race->randomAtributesCannot))){
                    $this->atributes[$atribute]->value += 2;
                    
                    $fstAtr = $atribute;
                }
                
                else
                    $i--;
            }
        }
        
        $this->ajustaModifiers();
    }
    
    public function adjustAtributoRaca(){
        foreach($this->atributes as $key => $atribute){
            $this->atributes[$key]->value += $this->race->atributes[$key];
        }
        
        $this->ajustaModifiers();
    }
    
    public function adjustAlignment(){
        $alinhamentos = [
            ["Bom", "Neutro", "Maligno"],
            ["Leal", "Neutro", "Caótico"]
        ];
        
        $this->alignment = [$alinhamentos[0][$this->alignment[0]], $alinhamentos[1][$this->alignment[1]]];
        
        $this->alignment = implode($this->alignment, " e ");
        
        if($this->alignment == "Neutro e Neutro")
            $this->alignment = "Neutro";
    }
    
    public function adjustBba(){
        foreach($this->classes as $class){
            $this->bba += floor($class->bba * $class->level);
        }
    }
    
    public function setSex(){
        $sex = $this->race->sex !== false ? $this->race->sex : rand(0, 1);
        
        $this->sex = $sex == 1 ? "Masculino" : "Feminino";
    }
    
    public function setAge(){
        $this->age = rand(15, ($this->race->age * 70));
    }
    
    public function setPvs(){
        $this->pvs += 4 * $this->classes[0]->pvs;
        $this->pvs += ($this->classes[0]->level - 1) * $this->classes[0]->pvs;
        
        foreach($this->classes as $key => $class){
            if($key > 0)
                $this->pvs += $class->level * $class->pvs;
        }
        
        $modCon = $this->atributes[2]->modifier > 0 ? $this->atributes[2]->modifier : 0;
        $this->pvs += $modCon * $this->level;
    }
    
    public function ajustaModifiers(){
        foreach($this->atributes as $key => $atribute){
            $this->atributes[$key]->modifier = floor(($atribute->value - 10)/2);
        }
    }
}

class Races{
    public $name;
    public $atributes = [0, 0, 0, 0, 0, 0];
    public $age = 1;
    public $randomAtributesQuantity = false;
    public $randomAtributesCannot = false;
    public $skillsTrained = 0;
    public $sex = false;
    public $tamanho = 0;
    public $tamanhoNome = "Médio";
    public $ataque = 0;
    public $ca = 0;
    public $bonusPericia;
}

class Classes{
    public $name;
    public $bba;
    public $pvs;
    public $skills;
    public $classSkills;
    public $alignment = false;
    public $alignmentCannot = false;
    public $level = 0;
    public $base;
    public $atributes = [0, 0, 0, 0, 0, 0];
    public $atributesSinergy = [0, 0, 0, 0, 0, 0];
}

class Atributes{
    public $name;
    public $value;
    public $modifier;
}

class Skills{
    public $name;
    public $subs = false;
    public $atribute;
}

$character = new Character();
$character->run();