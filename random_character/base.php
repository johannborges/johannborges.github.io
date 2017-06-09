<?php
class Base{
    public function genClasses(){
        $classes = [];
        
        // Abençoado
        $class = new Classes();
        $class->name = "Abençoado";
        $class->base = "Abençoado";
        $class->bba = .75;
        $class->skills = 2;
        $class->pvs = 4;
        $class->classSkills = [5, 6, 10, 11, 13, 17, 18];
        $class->atributesSinergy = [2, 2, 2, 2, 1, 2];
        
        $classes[] = $class;
        unset($class);
        
        // Bárbaro
        $class = new Classes();
        $class->name = "Bárbaro";
        $class->base = "Bárbaro";
        $class->bba = 1;
        $class->skills = 4;
        $class->pvs = 6;
        $class->classSkills = [1, 2, 4, 11, 12, 17, 18, 19];
        $class->alignmentCannot = [false, 0];
        $class->atributesSinergy = [1, 3, 2, 5, 4, 6];
        
        $classes[] = $class;
        unset($class);
        
        $class = new Classes();
        $class->name = "Bárbaro da Tribo do Machado de Pedra";
        $class->base = "Bárbaro";
        $class->bba = 1;
        $class->skills = 3;
        $class->pvs = 6;
        $class->classSkills = [1, 2, 4, 11, 12, 17, 18, 19];
        $class->alignmentCannot = [false, 0];
        $class->atributesSinergy = [1, 3, 2, 5, 4, 6];
        
        $classes[] = $class;
        unset($class);
        
        $class = new Classes();
        $class->name = "Bárbaro da Tribo do Totem";
        $class->base = "Bárbaro";
        $class->bba = 1;
        $class->skills = 4;
        $class->pvs = 6;
        $class->classSkills = [1, 2, 4, 11, 12, 17, 18, 19];
        $class->alignmentCannot = [false, 0];
        $class->atributes = [0, 0, 0, 0, 13, 0];
        $class->atributesSinergy = [1, 3, 2, 5, 4, 6];
        
        $classes[] = $class;
        unset($class);
        
        $class = new Classes();
        $class->name = "Bárbaro da Tribo da Savana";
        $class->base = "Bárbaro";
        $class->bba = 1;
        $class->skills = 4;
        $class->pvs = 6;
        $class->classSkills = [1, 2, 11, 12, 17, 18, 19];
        $class->alignmentCannot = [false, 0];
        $class->atributes = [0, 13, 0, 0, 0, 0];
        $class->atributesSinergy = [3, 1, 2, 5, 4, 6];
        
        $classes[] = $class;
        unset($class);
        
        // Bardo
        $class = new Classes();
        $class->name = "Bardo";
        $class->base = "Bardo";
        $class->bba = .75;
        $class->skills = 6;
        $class->pvs = 3;
        $class->classSkills = [0, 2, 3, 4, 5, 7, 8, 9, 10, 12, 14, 16, 18];
        $class->alignmentCannot = [false, 0];
        $class->atributesSinergy = [4, 2, 4, 2, 3, 1];
        
        $classes[] = $class;
        unset($class);
        
        // Cavaleiro
        $class = new Classes();
        $class->name = "Cavaleiro";
        $class->base = "Cavaleiro";
        $class->bba = 1;
        $class->skills = 2;
        $class->pvs = 5;
        $class->classSkills = [1, 2, 4, 5, 7, 11, 12, 18];
        $class->atributesSinergy = [1, 6, 2, 5, 4, 3];
        
        $classes[] = $class;
        unset($class);
        
        // Clérigo
        $class = new Classes();
        $class->name = "Clérigo";
        $class->base = "Clérigo";
        $class->bba = .75;
        $class->skills = 2;
        $class->pvs = 4;
        $class->classSkills = [5, 6, 7, 10, 13, 17];
        $class->atributesSinergy = [2, 4, 2, 3, 1, 2];
        
        $classes[] = $class;
        unset($class);
        
        // Druida
        $class = new Classes();
        $class->name = "Druida";
        $class->base = "Druida";
        $class->bba = .75;
        $class->skills = 4;
        $class->pvs = 4;
        $class->classSkills = [1, 2, 4, 5, 7, 10, 17, 18, 19];
        $class->atributesSinergy = [2, 2, 2, 3, 1, 3];
        
        $classes[] = $class;
        unset($class);
        
        // Feiticeiro
        $class = new Classes();
        $class->name = "Feiticeiro de Linhagem Elemental";
        $class->base = "Feiticeiro";
        $class->bba = .5;
        $class->skills = 2;
        $class->pvs = 2;
        $class->classSkills = [5, 8, 10, 12, 17];
        $class->atributesSinergy = [5, 3, 5, 2, 4, 1];
        
        $classes[] = $class;
        unset($class);
        
        $class = new Classes();
        $class->name = "Feiticeiro de Linhagem Dracônica";
        $class->base = "Feiticeiro";
        $class->bba = .5;
        $class->skills = 2;
        $class->pvs = 2;
        $class->classSkills = [5, 8, 10, 12, 17];
        $class->atributesSinergy = [5, 3, 5, 2, 4, 1];
        
        $classes[] = $class;
        unset($class);
        
        $class = new Classes();
        $class->name = "Feiticeiro de Linhagem Aberrante";
        $class->base = "Feiticeiro";
        $class->bba = .5;
        $class->skills = 2;
        $class->pvs = 2;
        $class->classSkills = [5, 8, 10, 12, 17];
        $class->atributesSinergy = [5, 3, 5, 2, 4, 1];
        
        $classes[] = $class;
        unset($class);
        
        $class = new Classes();
        $class->name = "Feiticeiro de Linhagem Caótica";
        $class->base = "Feiticeiro";
        $class->bba = .5;
        $class->skills = 2;
        $class->pvs = 2;
        $class->classSkills = [5, 8, 10, 12, 17];
        $class->alignment = [false, 0];
        $class->atributesSinergy = [5, 3, 5, 2, 4, 1];
        
        $classes[] = $class;
        unset($class);
        
        $class = new Classes();
        $class->name = "Feiticeiro de Linhagem Celestial";
        $class->base = "Feiticeiro";
        $class->bba = .5;
        $class->skills = 2;
        $class->pvs = 2;
        $class->classSkills = [5, 8, 10, 12, 17];
        $class->alignment = [0, false];
        $class->atributesSinergy = [5, 3, 5, 2, 4, 1];
        
        $classes[] = $class;
        unset($class);
        
        $class = new Classes();
        $class->name = "Feiticeiro de Linhagem Demoníaca";
        $class->base = "Feiticeiro";
        $class->bba = .5;
        $class->skills = 2;
        $class->pvs = 2;
        $class->classSkills = [5, 8, 10, 12, 17];
        $class->alignmentCannot = [0, 0];
        $class->atributesSinergy = [5, 3, 5, 2, 4, 1];
        
        $classes[] = $class;
        unset($class);
        
        $class = new Classes();
        $class->name = "Feiticeiro de Linhagem Diabólica";
        $class->base = "Feiticeiro";
        $class->bba = .5;
        $class->skills = 2;
        $class->pvs = 2;
        $class->classSkills = [5, 8, 10, 12, 17];
        $class->alignment = [2, false];
        $class->alignmentCannot = [false, 2];
        $class->atributesSinergy = [5, 3, 5, 2, 4, 1];
        
        $classes[] = $class;
        unset($class);
        
        $class = new Classes();
        $class->name = "Feiticeiro de Linhagem Feérica";
        $class->base = "Feiticeiro";
        $class->bba = .5;
        $class->skills = 2;
        $class->pvs = 2;
        $class->classSkills = [5, 8, 10, 12, 17];
        $class->atributesSinergy = [5, 3, 5, 2, 4, 1];
        
        $classes[] = $class;
        unset($class);
        
        $class = new Classes();
        $class->name = "Feiticeiro de Linhagem Ofídica";
        $class->base = "Feiticeiro";
        $class->bba = .5;
        $class->skills = 2;
        $class->pvs = 2;
        $class->classSkills = [5, 8, 10, 12, 17];
        $class->alignmentCannot = [0, false];
        $class->atributesSinergy = [5, 3, 5, 2, 4, 1];
        
        $classes[] = $class;
        unset($class);
        
        $class = new Classes();
        $class->name = "Feiticeiro de Linhagem Ordeira";
        $class->base = "Feiticeiro";
        $class->bba = .5;
        $class->skills = 2;
        $class->pvs = 2;
        $class->classSkills = [5, 8, 10, 12, 17];
        $class->alignment = [false, 0];
        $class->atributesSinergy = [5, 3, 5, 2, 4, 1];
        
        $classes[] = $class;
        unset($class);
        
        $class = new Classes();
        $class->name = "Feiticeiro de Linhagem Primordial";
        $class->base = "Feiticeiro";
        $class->bba = .5;
        $class->skills = 2;
        $class->pvs = 2;
        $class->classSkills = [5, 8, 10, 12, 17];
        $class->atributesSinergy = [5, 3, 5, 2, 4, 1];
        
        $classes[] = $class;
        unset($class);
        
        // Guerreiro
        $class = new Classes();
        $class->name = "Guerreiro";
        $class->base = "Guerreiro";
        $class->bba = 1;
        $class->skills = 2;
        $class->pvs = 5;
        $class->classSkills = [1, 2, 4, 11, 12, 17, 18];
        $class->atributesSinergy = [1, 3, 2, 4, 4, 4];
        
        $classes[] = $class;
        unset($class);
        
        $class = new Classes();
        $class->name = "Guerreiro Estilo Colosso";
        $class->base = "Guerreiro";
        $class->bba = 1;
        $class->skills = 2;
        $class->pvs = 6;
        $class->classSkills = [2, 11, 12, 17, 18];
        $class->atributesSinergy = [2, 3, 1, 4, 4, 4];
        
        $classes[] = $class;
        unset($class);
        
        $class = new Classes();
        $class->name = "Guerreiro Estilo Escolástico";
        $class->base = "Guerreiro";
        $class->bba = 1;
        $class->skills = 2;
        $class->pvs = 5;
        $class->classSkills = [2, 4, 11, 12, 17, 18];
        $class->atributesSinergy = [1, 3, 2, 4, 4, 4];
        
        $classes[] = $class;
        unset($class);
        
        $class = new Classes();
        $class->name = "Guerreiro Estilo Inovador";
        $class->base = "Guerreiro";
        $class->bba = 1;
        $class->skills = 2;
        $class->pvs = 5;
        $class->classSkills = [1, 2, 4, 11, 12, 17, 18];
        $class->atributes = [0, 0, 0, 0, 0, 13];
        $class->atributesSinergy = [1, 3, 2, 4, 4, 4];
        
        $classes[] = $class;
        unset($class);
        
        // Ladino
        $class = new Classes();
        $class->name = "Ladino";
        $class->base = "Ladino";
        $class->bba = .75;
        $class->skills = 8;
        $class->pvs = 3;
        $class->classSkills = [0, 2, 3, 4, 5, 7, 8, 9, 11, 12, 13, 14, 15, 16, 17, 18];
        $class->atributesSinergy = [5, 1, 4, 2, 3, 2];
        
        $classes[] = $class;
        unset($class);
        
        // Lutador
        $class = new Classes();
        $class->name = "Lutador";
        $class->base = "Lutador";
        $class->bba = 1;
        $class->skills = 4;
        $class->pvs = 5;
        $class->classSkills = [0, 1, 2, 8, 9, 11, 12, 17, 18];
        $class->atributesSinergy = [1, 3, 2, 4, 4, 4];
        
        $classes[] = $class;
        unset($class);
        
        // Mago
        $class = new Classes();
        $class->name = "Mago";
        $class->base = "Mago";
        $class->bba = .5;
        $class->skills = 2;
        $class->pvs = 2;
        $class->classSkills = [5, 10, 17, 18];
        $class->atributesSinergy = [4, 2, 3, 1, 3, 3];
        
        $classes[] = $class;
        unset($class);
        
        // Monge
        $class = new Classes();
        $class->name = "Monge";
        $class->base = "Monge";
        $class->bba = 1;
        $class->skills = 4;
        $class->pvs = 4;
        $class->classSkills = [0, 2, 5, 6, 7, 9, 11, 13, 17, 18];
        $class->alignment = [false, 0];
        $class->atributesSinergy = [2, 2, 2, 3, 1, 3];
        
        $classes[] = $class;
        unset($class);
        
        // Ninja
        $class = new Classes();
        $class->name = "Ninja";
        $class->base = "Ninja";
        $class->bba = .75;
        $class->skills = 6;
        $class->pvs = 3;
        $class->classSkills = [0, 2, 3, 4, 6, 8, 9, 15, 16, 11, 13, 18, 19];
        $class->atributesSinergy = [4, 1, 3, 2, 3, 3];
        
        $classes[] = $class;
        unset($class);
        
        // Nobre
        $class = new Classes();
        $class->name = "Nobre";
        $class->base = "Nobre";
        $class->bba = .75;
        $class->skills = 6;
        $class->pvs = 4;
        $class->classSkills = [1, 3, 4, 5, 7, 8, 11, 12, 13, 16, 17, 18];
        $class->atributesSinergy = [3, 3, 2, 3, 3, 1];
        
        $classes[] = $class;
        unset($class);
        
        // Paladino
        $class = new Classes();
        $class->name = "Paladino";
        $class->base = "Paladino";
        $class->bba = 1;
        $class->skills = 2;
        $class->pvs = 5;
        $class->classSkills = [1, 2, 4, 5, 6, 7, 11, 13, 17];
        $class->alignment = [0, 0];
        $class->atributesSinergy = [1, 3, 1, 3, 2, 1];
        
        $classes[] = $class;
        unset($class);
        
        // Ranger
        $class = new Classes();
        $class->name = "Ranger";
        $class->base = "Ranger";
        $class->bba = 1;
        $class->skills = 6;
        $class->pvs = 4;
        $class->classSkills = [1, 2, 4, 5, 6, 9, 11, 17, 18, 19];
        $class->atributesSinergy = [2, 1, 2, 3, 1, 3];
        
        $classes[] = $class;
        unset($class);
        
        // Samaritano
        $class = new Classes();
        $class->name = "Samaritano";
        $class->base = "Samaritano";
        $class->bba = .5;
        $class->skills = 4;
        $class->pvs = 4;
        $class->classSkills = [1, 5, 6, 7, 11, 13, 17, 18, 19];
        $class->alignment = [0, false];
        $class->atributesSinergy = [2, 2, 2, 2, 1, 2];
        
        $classes[] = $class;
        unset($class);
        
        // Samurai
        $class = new Classes();
        $class->name = "Samurai";
        $class->base = "Samurai";
        $class->bba = 1;
        $class->skills = 4;
        $class->pvs = 5;
        $class->classSkills = [0, 1, 2, 3, 4, 5, 7, 11, 12, 13, 17, 18];
        $class->alignment = [false, 0];
        $class->atributesSinergy = [1, 3, 2, 4, 2, 4];
        
        $classes[] = $class;
        unset($class);
        
        // Swashbuckler
        $class = new Classes();
        $class->name = "Swashbuckler";
        $class->base = "Swashbuckler";
        $class->bba = 1;
        $class->skills = 4;
        $class->pvs = 4;
        $class->classSkills = [0, 1, 2, 3, 7, 8, 8, 11, 12, 14, 16, 17, 18];
        $class->atributesSinergy = [3, 1, 2, 2, 3, 1];
        
        $classes[] = $class;
        unset($class);
        
        return $classes;
    }
    
    
    
    public function genRaces(){
        $races = [];
        
        // Anão
        $race = new Races();
        $race->name = "Anão";
        $race->atributes = [0, -2, 4, 0, 2, 0];
        $race->age = 3;
        
        $races[] = $race;
        unset($race);
        
        // Aggelus
        $race = new Races();
        $race->name = "Aggelus";
        $race->atributes = [0, 0, 0, 0, 4, 2];
        $race->age = 2;
        
        $races[] = $race;
        unset($race);
        
        // Bugbear
        $race = new Races();
        $race->name = "Bugbear";
        $race->atributes = [4, 2, 0, 0, 0, -2];
        $race->tamanho = -1;
        $race->tamanhoNome = "Grande";
        $race->bonusPericia[9] = 4;
        $race->bonusPericia[12] = 4;
        
        $races[] = $race;
        unset($race);
        
        // Centauro
        $race = new Races();
        $race->name = "Centauro";
        $race->atributes = [4, 0, 0, -2, 2, 0];
        $race->tamanho = -1;
        $race->tamanhoNome = "Grande";
        $race->bonusPericia[20] = 4;
        
        $races[] = $race;
        unset($race);
        
        // Elfo
        $race = new Races();
        $race->name = "Elfo";
        $race->atributes = [0, 4, -2, 2, 0, 0];
        $race->age = 10;
        $race->bonusPericia[10] = 4;
        $race->bonusPericia[19] = 4;
        
        $races[] = $race;
        unset($race);
        
        // Elfo do Céu
        $race = new Races();
        $race->name = "Elfo do Céu";
        $race->atributes = [0, 4, -2, 0, 0, 2];
        $race->age = 10;
        $race->bonusPericia[19] = 4;
        
        $races[] = $race;
        unset($race);
        
        // Elfo do Mar
        $race = new Races();
        $race->name = "Elfo do Mar";
        $race->atributes = [0, 4, 2, -2, 0, 0];
        $race->age = 10;
        
        $races[] = $race;
        unset($race);
        
        // Elfo Sombrio
        $race = new Races();
        $race->name = "Elfo Sombrio";
        $race->atributes = [0, 2, -2, 4, 0, 0];
        $race->age = 10;
        $race->bonusPericia[10] = 4;
        $race->bonusPericia[19] = 4;
        
        $races[] = $race;
        unset($race);
        
        // Finntroll
        $race = new Races();
        $race->name = "Finntroll";
        $race->atributes = [-2, 0, 2, 4, 0, 0];
        $race->age = 10;
        $race->bonusPericia[10] = 4;
        $race->bonusPericia[12] = 4;
        
        $races[] = $race;
        unset($race);
        
        // Feithnari
        $race = new Races();
        $race->name = "Feithnari";
        $race->atributes = [0, 2, 0, 0, 4, -2];
        $race->age = 8;
        $race->bonusPericia[19] = 4;
        
        $races[] = $race;
        unset($race);
        
        // Gnoll
        $race = new Races();
        $race->name = "Gnoll";
        $race->atributes = [0, 0, 4, -2, 2, 0];
        $race->ca = 1;
        
        $races[] = $race;
        unset($race);
        
        // Gnomo
        $race = new Races();
        $race->name = "Gnomo";
        $race->atributes = [-2, 0, 2, 4, 0, 0];
        $race->age = 3;
        $race->tamanho = +1;
        $race->tamanhoNome = "Pequeno";
        $race->bonusPericia[13] = 4;
        $race->bonusPericia[18] = 4;
        
        $races[] = $race;
        unset($race);
        
        // Goblin
        $race = new Races();
        $race->name = "Goblin";
        $race->atributes = [0, 4, 2, 0, 0, -2];
        $race->tamanho = 1;
        $race->tamanhoNome = "Pequeno";
        $race->bonusPericia[15] = 4;
        $race->bonusPericia[18] = 4;
        
        $races[] = $race;
        unset($race);
        
        // Halfling
        $race = new Races();
        $race->name = "Halfling";
        $race->atributes = [-2, 4, 0, 0, 0, 2];
        $race->age = 2;
        $race->tamanho = 1;
        $race->tamanhoNome = "Pequeno";
        $race->bonusPericia[8] = 4;
        
        $races[] = $race;
        unset($race);
        
        // Hengeyokai
        $race = new Races();
        $race->name = "Hengeyokai";
        $race->age = 3;
        $race->randomAtributesQuantity = 2;
        $race->randomAtributesBonus = 2;
        $race->randomAtributesCannot = [4];
        
        $races[] = $race;
        unset($race);
        
        // Hobgoblin
        $race = new Races();
        $race->name = "Hobgoblin";
        $race->atributes = [0, 2, 4, 0, 0, -2];
        $race->bonusPericia[9] = 4;
        $race->bonusPericia[18] = 4;
        
        $races[] = $race;
        unset($race);
        
        // Homem Lagarto
        $race = new Races();
        $race->name = "Homem Lagarto";
        $race->atributes = [0, 0, 4, -2, 2, 0];
        $race->bonusPericia[3] = 4;
        
        $races[] = $race;
        unset($race);
        
        // Humano
        $race = new Races();
        $race->name = "Humano";
        $race->skillsTrained = 2;
        $race->randomAtributesQuantity = 2;
        $race->randomAtributesBonus = 2;
        
        $races[] = $race;
        unset($race);
        
        // Lefou
        $race = new Races();
        $race->name = "Lefou";
        $race->randomAtributesQuantity = 2;
        $race->randomAtributesBonus = 2;
        $race->randomAtributesCannot = [5];
        
        $races[] = $race;
        unset($race);
        
        // Kobold
        $race = new Races();
        $race->name = "Kobold";
        $race->age = .5;
        $race->atributes = [-2, 4, 0, 0, 0, 0];
        $race->tamanho = 1;
        $race->tamanhoNome = "Pequeno";
        $race->ca = 1;
        
        // Medusa
        $race = new Races();
        $race->name = "Medusa";
        $race->atributes = [-2, 2, 0, 0, 0, 4];
        
        $races[] = $race;
        unset($race);
        
        // Meio Dríade
        $race = new Races();
        $race->name = "Meio Dríade";
        $race->atributes = [0, 2, 0, -2, 4, 0];
        $race->age = 2;
        $race->bonusPericia[19] = 4;
        $race->bonusPericia[20] = 4;
        
        $races[] = $race;
        unset($race);
        
        // Meio Elfo
        $race = new Races();
        $race->name = "Meio Elfo";
        $race->atributes = [0, 2, 0, 0, 0, 0];
        $race->randomAtributesCannot = [1, 2];
        $race->age = 2;
        $race->skillsTrained = 1;
        $race->randomAtributesQuantity = 1;
        $race->randomAtributesBonus = 2;
        $race->bonusPericia[10] = 2;
        $race->bonusPericia[19] = 2;
        
        $races[] = $race;
        unset($race);
        
        // Meio Elfo do Mar
        $race = new Races();
        $race->name = "Meio Elfo do Mar";
        $race->atributes = [0, 2, 0, 0, 0, 0];
        $race->age = 2;
        $race->skillsTrained = 1;
        $race->randomAtributesQuantity = 1;
        $race->randomAtributesBonus = 2;
        $race->bonusPericia[19] = 2;
        $race->bonusPericia[20] = 2;
        
        $races[] = $race;
        unset($race);
        
        // Meio Orc
        $race = new Races();
        $race->name = "Meio Orc";
        $race->atributes = [2, 0, 0, 0, 0, 0];
        $race->randomAtributesCannot = [0];
        $race->randomAtributesQuantity = 1;
        $race->randomAtributesBonus = 2;
        $race->bonusPericia[12] = 4;
        
        $races[] = $race;
        unset($race);
        
        // Minaque
        $race = new Races();
        $race->name = "Minaque";
        $race->atributes = [4, -2, 0, 0, 2, 0];
        $race->ca = 1;
        $race->tamanho = -1;
        $race->tamanhoNome = "Grande";
        $race->bonusPericia[3] = [4];
        $race->bonusPericia[20] = [4];
        
        $races[] = $race;
        unset($race);
        
        // Minauro
        $race = new Races();
        $race->name = "Minauro";
        $race->atributes = [2, 0, 0, 0, 0, 0];
        $race->skillsTrained = 1;
        $race->randomAtributesQuantity = 1;
        $race->randomAtributesBonus = 2;
        $race->randomAtributesCannot = [0, 5];
        
        $races[] = $race;
        unset($race);
        
        // Minotauro
        $race = new Races();
        $race->name = "Minotauro";
        $race->atributes = [4, 0, 2, 0, 0, -2];
        $race->sex = 1;
        $race->ca = 1;
        
        $races[] = $race;
        unset($race);
        
        // Moreau
        $race = new Races();
        $race->name = "Moreau";
        $race->skillsTrained = 1;
        $race->randomAtributesQuantity = 1;
        $race->randomAtributesBonus = 2;
        
        $races[] = $race;
        unset($race);
        
        // Nimbus
        $race = new Races();
        $race->name = "Nimbus";
        $race->age = 2;
        $race->randomAtributesQuantity = 1;
        $race->randomAtributesBonus = 4;
        
        $races[] = $race;
        unset($race);
        
        // Nagah (Macho)
        $race = new Races();
        $race->name = "Nagah (Macho)";
        $race->atributes = [2, 2, 2, 0, 0, 0];
        $race->sex = 1;
        $race->age = 2;
        $race->tamanho = -1;
        $race->tamanhoNome = "Grande";
        $race->ca = 2;
        $race->bonusPericia[8] = 4;
        
        $races[] = $race;
        unset($race);
        
        // Nagah (Fêmea)
        $race = new Races();
        $race->name = "Nagah (Fêmea)";
        $race->atributes = [0, 0, 0, 2, 2, 2];
        $race->sex = 0;
        $race->age = 2;
        $race->tamanho = -1;
        $race->tamanhoNome = "Grande";
        $race->ca = 2;
        $race->bonusPericia[8] = 4;
        
        $races[] = $race;
        unset($race);
        
        // Orc
        $race = new Races();
        $race->name = "Orc";
        $race->atributes = [4, 0, 2, -4, 0, 0];
        $race->ataque = 1;
        $race->bonusPericia[12] = 4;
        $race->bonusPericia[18] = 4;
        
        $races[] = $race;
        unset($race);
        
        // Dragoa Caçadora
        $race = new Races();
        $race->name = "Povo Trovão: Dragoa Caçadora";
        $race->atributes = [0, 4, 2, -2, 0, 0];
        $race->age = .5;
        $race->bonusPericia[2] = 4;
        $race->bonusPericia[20] = 4;
        
        $races[] = $race;
        unset($race);
        
        // Ceratops
        $race = new Races();
        $race->name = "Povo Trovão: Ceratops";
        $race->atributes = [2, 0, 4, -2, 0, 0];
        $race->tamanho = -1;
        $race->tamanhoNome = "Grande";
        $race->ca = 2;
        
        $races[] = $race;
        unset($race);
        
        // Pteros
        $race = new Races();
        $race->name = "Povo Trovão: Pteros";
        $race->atributes = [0, 2, 0, -2, 4, 0];
        $race->bonusPericia[20] = 2;
        
        $races[] = $race;
        unset($race);
        
        // Velocis
        $race = new Races();
        $race->name = "Povo Trovão: Velocis";
        $race->atributes = [-2, 4, 2, 0, 0, 0];
        $race->bonusPericia[20] = 2;
        
        $races[] = $race;
        unset($race);
        
        // Qareen
        $race = new Races();
        $race->name = "Qareen";
        $race->atributes = [0, 0, 0, 2, -2, 4];
        $race->age = 6;
        $race->bonusPericia[10] = 4;
        
        $races[] = $race;
        unset($race);
        
        // Sklirynei
        $race = new Races();
        $race->name = "Sklirynei";
        $race->atributes = [-2, 0, 0, 4, 0, 2];
        
        $races[] = $race;
        unset($race);
        
        // Sprite
        $race = new Races();
        $race->name = "Sprite";
        $race->atributes = [-4, 4, -2, 0, 0, 2];
        $race->age = 10;
        $race->tamanho = +2;
        $race->tamanhoNome = "Mínimo";
        
        $races[] = $race;
        unset($race);
        
        // Sulfure
        $race = new Races();
        $race->name = "Sulfure";
        $race->atributes = [0, 4, 0, 2, 0, -2];
        $race->age = 2;
        $race->bonusPericia[8] = 2;
        $race->bonusPericia[9] = 2;
        
        $races[] = $race;
        unset($race);
        
        // Troglodita
        $race = new Races();
        $race->name = "Troglodita";
        $race->atributes = [2, 0, 4, -2, 0, 0];
        $race->age = .5;
        $race->ca = 2;
        $race->bonusPericia[9] = 4;
        
        $races[] = $race;
        unset($race);
        
        return $races;
    }
    
    
    
    public function genAtributes(){
        $atributes = [];
        
        // Força
        $atribute = new Atributes();
        $atribute->name = "Força";
        
        $atributes[] = $atribute;
        unset($atribute);
        
        // Destreza
        $atribute = new Atributes();
        $atribute->name = "Destreza";
        
        $atributes[] = $atribute;
        unset($atribute);
        
        // Constituição
        $atribute = new Atributes();
        $atribute->name = "Constituição";
        
        $atributes[] = $atribute;
        unset($atribute);
        
        // Inteligência
        $atribute = new Atributes();
        $atribute->name = "Inteligência";
        
        $atributes[] = $atribute;
        unset($atribute);
        
        // Sabedoria
        $atribute = new Atributes();
        $atribute->name = "Sabedoria";
        
        $atributes[] = $atribute;
        unset($atribute);
        
        // Carisma
        $atribute = new Atributes();
        $atribute->name = "Carisma";
        
        $atributes[] = $atribute;
        unset($atribute);
        
        return $atributes;
    }
    
    
    
    public function genSkills(){
        $skills = [];
        
        // Acrobacia
        $skill = new Skills();
        $skill->name = "Acrobacia";
        $skill->atribute = 1;
        
        $skills[] = $skill;
        unset($skill);
        
        // Adestrar Animais
        $skill = new Skills();
        $skill->name = "Adestrar Animais";
        $skill->atribute = 5;
        
        $skills[] = $skill;
        unset($skill);
        
        // Atletismo
        $skill = new Skills();
        $skill->name = "Atletismo";
        $skill->atribute = 0;
        
        $skills[] = $skill;
        unset($skill);
        
        // Atuação
        $skill = new Skills();
        $skill->name = "Atuação";
        $skill->subs = [
            "Dramaturgia",
            "Dança",
            "Música",
            "Oratória"
        ];
        $skill->atribute = 5;
        
        $skills[] = $skill;
        unset($skill);
        
        // Cavalgar
        $skill = new Skills();
        $skill->name = "Cavalgar";
        $skill->atribute = 1;
        
        $skills[] = $skill;
        unset($skill);
        
        // Conhecimento
        $skill = new Skills();
        $skill->name = "Conhecimento";
        $skill->subs = [
            "Arcano",
            "Engenharia",
            "Geografia",
            "História",
            "Local",
            "Natureza",
            "Nobreza",
            "Religião"
        ];
        $skill->atribute = 3;
        
        $skills[] = $skill;
        unset($skill);
        
        // Cura
        $skill = new Skills();
        $skill->name = "Cura";
        $skill->atribute = 4;
        
        $skills[] = $skill;
        unset($skill);
        
        // Diplomacia
        $skill = new Skills();
        $skill->name = "Diplomacia";
        $skill->atribute = 5;
        
        $skills[] = $skill;
        unset($skill);
        
        // Enganação
        $skill = new Skills();
        $skill->name = "Enganação";
        $skill->atribute = 5;
        
        $skills[] = $skill;
        unset($skill);
        
        // Furtividade
        $skill = new Skills();
        $skill->name = "Furtividade";
        $skill->atribute = 1;
        
        $skills[] = $skill;
        unset($skill);
        
        // Identificar Magia
        $skill = new Skills();
        $skill->name = "Identificar Magia";
        $skill->atribute = 3;
        
        $skills[] = $skill;
        unset($skill);
        
        // Iniciativa
        $skill = new Skills();
        $skill->name = "Iniciativa";
        $skill->atribute = 1;
        
        $skills[] = $skill;
        unset($skill);
        
        // Intimidação
        $skill = new Skills();
        $skill->name = "Intimidação";
        $skill->atribute = 5;
        
        $skills[] = $skill;
        unset($skill);
        
        // Intuição
        $skill = new Skills();
        $skill->name = "Intuição";
        $skill->atribute = 4;
        
        $skills[] = $skill;
        unset($skill);
        
        // Jogatina
        $skill = new Skills();
        $skill->name = "Jogatina";
        $skill->atribute = 5;
        
        $skills[] = $skill;
        unset($skill);
        
        // Ladinagem
        $skill = new Skills();
        $skill->name = "Ladinagem";
        $skill->atribute = 1;
        
        $skills[] = $skill;
        unset($skill);
        
        // Meditação
        $skill = new Skills();
        $skill->name = "Meditação";
        $skill->atribute = 4;
        
        $skills[] = $skill;
        unset($skill);
        
        // Obter Informação
        $skill = new Skills();
        $skill->name = "Obter Informação";
        $skill->atribute = 5;
        
        $skills[] = $skill;
        unset($skill);
        
        // Ofício
        $skill = new Skills();
        $skill->name = "Ofício";
        $skill->subs = [
            "Administração",
            "Alquimia",
            "Alvenaria",
            "Armas de Cerco",
            "Carpintaria",
            "Joalheria",
            "Metalurgia",
            "Uma arte",
            "Uma profissão"
        ];
        $skill->atribute = 3;
        
        $skills[] = $skill;
        unset($skill);
        
        // Percepção
        $skill = new Skills();
        $skill->name = "Percepção";
        $skill->atribute = 4;
        
        $skills[] = $skill;
        unset($skill);
        
        // Sobrevivência
        $skill = new Skills();
        $skill->name = "Sobrevivência";
        $skill->atribute = 4;
        
        $skills[] = $skill;
        unset($skill);
        
        return $skills;
    }
}