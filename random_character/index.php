<?php
require("generate.php");

$base = new Base();

$skillList = $base->genSkills();
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>Random Character Generator</title>

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        
        <link href='https://fonts.googleapis.com/css?family=Open Sans:400,700' rel='stylesheet' type='text/css'>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css" rel="stylesheet" type='text/css'>
        
        <link rel="stylesheet" href="assets/css/theme.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <div id="main" class="container">
            <h1>Gerador de personagem aleatório para TormentaRPG</h1>

			<h2>O sistema TormentaRPG é licenciado na plataforma Open Game License, o que significa que seu conteúdo é aberto para fins não lucrativos, portanto, não qualifica este fansite como pirataria.</h2>
          
           
           
            <ul class="infos">
                <li class="info_item">
                    <div class="title">Raça:</div>
                    
                    <div class="value"><?php echo $character->race->name; ?></div>
                </li>
                
                <li class="info_item">
                    <div class="title">Tamanho:</div>
                    
                    <div class="value"><?php echo $character->race->tamanhoNome; ?></div>
                </li>
                
                <li class="info_item">
                    <div class="title">Classe:</div>
                    
                    <div class="value"><?php
                        foreach($character->classes as $class){
                            echo "<span>";
                            
                            echo $class->name;
                            echo " (";
                            echo $class->level;
                            echo ")";
                            
                            echo "</span>";
                        }
                    ?></div>
                </li>
                
                <li class="info_item">
                    <div class="title">Nível:</div>
                    
                    <div class="value"><?php echo $character->level; ?></div>
                </li>
                
                <li class="info_item">
                    <div class="title">Atributos:</div>
                    
                    <div class="value">
                        <?php
                        foreach($character->atributes as $atribute){
                            echo "<span>";
                            
                            echo substr($atribute->name, 0, 1);
                            echo ": ";
                            echo $atribute->value;
                            echo " (";
                            echo $atribute->modifier > 0 ? "+" : "";
                            echo $atribute->modifier;
                            echo ")";
                            
                            echo "</span>";
                        }
                        ?>
                    </div>
                </li>
                
                <li class="info_item">
                    <div class="title">Fracasso:</div>
                    
                    <div class="value">A rolagem de atributos desse personagem determinou que ele foi um fracassado <?php echo $character->fracasso; ?> vezes</div>
                </li>
                
                <li class="info_item">
                    <div class="title">Alinhamento:</div>
                    
                    <div class="value"><?php echo $character->alignment; ?></div>
                </li>
                
                <li class="info_item">
                    <div class="title">Sexo:</div>
                    
                    <div class="value"><?php echo $character->sex; ?></div>
                </li>
                
                <li class="info_item">
                    <div class="title">Idade:</div>
                    
                    <div class="value"><?php echo $character->age; ?> anos</div>
                </li>
                
                <li class="info_item">
                    <div class="title">PVs:</div>
                    
                    <div class="value"><?php echo $character->pvs; ?></div>
                </li>
                
                <li class="info_item">
                    <div class="title">Classe de Armadura:</div>
                    
                    <div class="value"><?php echo $character->ca + $character->race->tamanho; ?></div>
                </li>
                
                <li class="info_item">
                    <div class="title">Bônus Base de Ataque:</div>
                    
                    <div class="value"><?php echo $character->bba; ?></div>
                </li>
                
                <li class="info_item ident">
                    <div class="title">Ataque corpo-a-corpo:</div>
                    
                    <div class="value"><?php echo $character->ataquecc; ?></div>
                </li>
                
                <li class="info_item ident">
                    <div class="title">Ataque a distância:</div>
                    
                    <div class="value"><?php echo $character->ataquedi; ?></div>
                </li>
                
                <li class="info_item">
                    <div class="title">Perícias treinadas:</div>
                    
                    <div class="value"><?php
                        foreach($character->skills as $skill){
                            echo "<span>";
                            echo $skill->name;
                            
                            if($skill->subs !== false){
                                $subSep = "";
                                echo " (";
                                
                                foreach($skill->subs as $sub){
                                    echo $subSep;
                                    echo $sub;
                                    
                                    $subSep = ", ";
                                }
                                
                                echo ")";
                            }
                            
                            echo "</span>";
                        }
                    ?></div>
                </li>
                
                <li class="info_item ident">
                    <div class="title">Lista de perícias:</div>
                    
                    <div class="value"><?php
                        foreach($skillList as $key => $skill){
                            $graduacao = floor($character->level/2);
                            
                            foreach($character->skills as $charSkill){
                                if($charSkill->name == $skill->name)
                                    $graduacao = $character->level + 3;
                            }
                            
                            $skillValue = $graduacao + $character->atributes[$skill->atribute]->modifier;
                            if($skill->name == "Furtividade")
                                $skillValue += $character->race->tamanho * 4;
                            
                            if(isset($character->race->bonusPericia[$key]))
                                $skillValue += $character->race->bonusPericia[$key];
                            
                            echo "<div>";
                            echo $skill->name;
                            
                            echo " (";
                            echo $skillValue;
                            echo ")";
                            
                            echo "</div>";
                        }
                    ?></div>
                </li>
            </ul>
            
            
            
            <form action="" method="post" id="form">
                <div class="title">Criar outro personagem</div>
               
                <ul class="infos">
                    <li class="info_item">
                        <div class="title">Raças permitidas:</div>
                        
                        <div class="value">
                            <div class="option_list">
                                <?php
                                foreach($base->genRaces() as $key => $race):
                                ?>
                                <label>
                                    <?php
                                    $checked = "";
                                    
                                    if(isset($_POST['racasEnabled']) && in_array($key, $_POST['racasEnabled']))
                                        $checked = " checked";
                                    ?>
                                    
                                    <input type="checkbox" name="racasEnabled[]" value="<?php echo $key; ?>"<?php echo $checked; ?> />
                                    
                                    <i></i>
                                    
                                    <span class="text"><?php echo $race->name; ?></span>
                                    
                                    <span class="bg"></span>
                                </label>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </li>
                    
                    <li class="info_item">
                        <div class="title">Classes permitidas:</div>
                        
                        <div class="value">
                            <div class="option_list">
                                <?php
                                foreach($base->genClasses() as $key => $classe):
                                ?>
                                <label<?php echo $classe->base != $classe->name && $classe->name != "Feiticeiro de Linhagem Elemental" ? " isVariante" : ""; ?>>
                                    <?php
                                    $checked = "";
                                    
                                    if(isset($_POST['classesEnabled']) && in_array($key, $_POST['classesEnabled']))
                                        $checked = " checked";
                                    ?>
                                    
                                    <input type="checkbox" name="classesEnabled[]" value="<?php echo $key; ?>"<?php echo $checked; ?> />
                                    
                                    <i></i>
                                    
                                    <span class="text"><?php echo $classe->name; ?></span>
                                    
                                    <span class="bg"></span>
                                </label>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </li>
                    
                    <li class="info_item">
                        <label class="title" for="showVariantes">Exibir classes variantes</label>
                        
                        <label class="value">
                            <input type="checkbox" id="showVariantes" checked />
                            <i></i>
                        </label>
                    </li>
                    
                    <li class="info_item">
                        <div class="title">Nível do personagem:</div>
                    
                        <div class="value">
                            <?php
                            $value = "";
                            
                            if(isset($_POST['level']))
                                $value = " value=\"{$_POST['level']}\"";
                            ?>
                           
                            <input type="text" placeholder="1 ~ 20 (Deixe em branco se não quiser)" name="level" pattern="^[0-9]{0,2}$"<?php echo $value; ?>/>
                            
                            <div class="observacao">Para gerar personagem de qualquer raça ou classe, não marque nenhuma opção</div>
                            
                            <div class="observacao">Ao atualizar a página, ou gerar novo personagem, as opções marcadas continuarão marcadas</div>
                        </div>
                    </li>
                    
                    <li class="info_item">
                        <button type="submit">Recriar personagem</button>
                    </li>
                </ul>
            </form>
        </div>
        
        
        
        <footer id="footer">
			<div class="container">
				<div class="links">
					<div class="title">Outras coisas que eu ando trabalhando (ou já larguei de mão):</div>

					<ul class="links_list">
						<li class="link_item">
							<a href="http://tavernaculo.com/meetdown/login" target="_blank">Projeto de rede social que nunca terminei</a>
						</li>

						<li class="link_item">
							<a href="http://tavernaculo.com/tormenta" target="_blank">Projeto de ficha automática pra Tormenta RPG que um dia hei de terminar</a>
						</li>

						<li class="link_item">
							<a href="http://tavernaculo.com/talentos" target="_blank">Lista de todos os talentos de TormentaRPG (falta só cadastrar, mas funfa)</a>
						</li>
					</ul>
				</div>

				<a href="http://jamboeditora.com.br/categoria/tormenta/" class="logo" target="_blank">
					<img src="img/tormenta_logo.png">
				</a>

				<div class="creator">Mais um projeto inacabado (esse quase acabado!) da Fábrica de Sonhos de <a href="mailto:johannborges@hotmail.com">Johann Borges</a></div>
			</div>
		</footer>
   
   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>