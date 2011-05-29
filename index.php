<!DOCTYPE html> 
<!-- test avec ordi 1 !!-->
<html lang="fr"> 
	<head> 
		<meta charset="iso-8859-1" /> 
		<link rel="stylesheet" href="design/style.css" /> 
		<title>Exo Prog : Le site où on vous propose des exercices de programmation</title> 
	</head> 
	<!--test-->
	<body> 
        <?php include('includes/header.php');?>
        
        <p style="font-size: 0.7em" id="barre_nav">><a href="index.php">ExoProg</a>>Accueil</p>
        
        <?php include('includes/menu_droite.php');?>
        
        <div id="contenu"> 
            
            <p>Bienvenue sur ExoProg, le site où vous trouverez nombre d'exercices de programmation.</p>
            <!-- Ici doit se trouver le contenu. -->
                    
            <div id="about">
                <div class="titre">  
                    <h4>Que propose ExoProg ?</h4>
                </div>  
                
                <div class="content">
                    <ul>
                        <li>Venez lire des exercices dans votre langage de prédilection.</li>
                        <li>Vous pouvez devenir rédacteur d'exercice sur le site.</li>
                        <li>Discutez des exercices dans les commentaires pour demander de l'aide ou les améliorer.</li>
                    </ul>   
                </div>
            </div>
                    
            <div id="caroussel">
                <p>Ici se se trouve un caroussel !</p>
            </div>
            
            <div id="derniers_exos">
                <h5>Derniers exos :</h5>
                <ul>
                    <li>Créer une page en HTML avec zenCoding. [Dans HTML/CSS par adilefebvre69]</li>
                    <li>Créer une page en HTML avec zenCoding. [Dans HTML/CSS par adilefebvre69]</li>
                    <li>Créer une page en HTML avec zenCoding. [Dans HTML/CSS par adilefebvre69]</li>
                    <li>Créer une page en HTML avec zenCoding. [Dans HTML/CSS par adilefebvre69]</li>
                    <li>Créer une page en HTML avec zenCoding. [Dans HTML/CSS par adilefebvre69]</li>
                </ul>
            </div>
                    
            <div id="dernieres_news">
                <h5>Les news :</h5>
                <ul>
                    <li>Exoprog est de sortie !</li>
                    <li>Exoprog est de sortie !</li>
                    <li>Exoprog est de sortie !</li>
                    <li>Exoprog est de sortie !</li>
                    <li>Exoprog est de sortie !</li>
                </ul>
            </div>
            
            <div id="meilleurs_exos">
                <h5>Les exos les plus vus :</h5>
                <ul>
                    <li>HTML5 : Votre première page avec &lt;canvas&gt; ! [Dans PHP/MySQL par Spoodx]</li>
                    <li>HTML5 : Votre première page avec &lt;canvas&gt; ! [Dans PHP/MySQL par Spoodx]</li>
                    <li>HTML5 : Votre première page avec &lt;canvas&gt; ! [Dans PHP/MySQL par Spoodx]</li>
                    <li>HTML5 : Votre première page avec &lt;canvas&gt; ! [Dans PHP/MySQL par Spoodx]</li>
                    <li>HTML5 : Votre première page avec &lt;canvas&gt; ! [Dans PHP/MySQL par Spoodx]</li>
                </ul>
            </div>  
        </div> 
        
<?php include('includes/footer.php');?>
    </body> 
</html> 