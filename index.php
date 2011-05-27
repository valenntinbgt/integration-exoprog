<!DOCTYPE html> 
<!-- test avec ordi 1 !!-->
<html lang="fr"> 
	<head> 
		<meta charset="iso-8859-1" /> 
		<link rel="stylesheet" href="design/style.css" /> 
		<title>Exo Prog : Le site où on vous propose des exercices de programmation</title> 
	</head> 
	
	<body> 
        <?php include('includes/header.php');?>
        
        <p style="font-size: 0.7em" id="barre_nav">><a href="index.php">ExoProg</a>>Accueil</p>
        
        <?php include('includes/menu_droite.php');?>
        
        <div id="contenu"> 
            
            <p>Bienvenue sur ExoProg, le site où vous trouverez nombre d'exercices de programmation.</p>
            <!-- Ici doit se trouver le contenu. -->
            <table id="accueil" width="100%">
                <tr>
                    
                    <td width="40%" id="about" style="vertical-align: top">
                        
                            <p>Qu'est ce que c'est qu'ExoProg ?</p>
                            <ul>
                                <li>Venez lire des exercices dans votre langage de prédilection.</li>
                                <li>Vous pouvez devenir rédacteur d'exercice sur le site.</li>
                                <li>Discutez des exercices dans les commentaires pour demander de l'aide ou les améliorer.</li>
                            </ul>
                    </td>  
                    
                    <td width="3%"></td>
                    
                    <td width="57%" id="caroussel" style="vertical-align: top" colspan="3">
                            <p>Ici se se trouve un caroussel !</p>
                    </td>
                    
                </tr>
                
                <tr>
                    <td colspan="5" id="derniers_exos">
                        <h5>Derniers exos :</h5>
                        <ul>
                            <li>Créer une page en HTML avec zenCoding. [Dans HTML/CSS par adilefebvre69]</li>
                            <li>Créer une page en HTML avec zenCoding. [Dans HTML/CSS par adilefebvre69]</li>
                            <li>Créer une page en HTML avec zenCoding. [Dans HTML/CSS par adilefebvre69]</li>
                            <li>Créer une page en HTML avec zenCoding. [Dans HTML/CSS par adilefebvre69]</li>
                            <li>Créer une page en HTML avec zenCoding. [Dans HTML/CSS par adilefebvre69]</li>
                        </ul>
                    </td>
                </tr>
                
                <!-- Reste à faire "dernières news" et "meilleurs exos" et "derniers commentaires" -->
                <tr>
                    
                    <td id="dernieres_news" width="35%" style="vertical-align:top">
                        <h5>Les news :</h5>
                        <ul>
                            <li>Exoprog est de sortie !</li>
                            <li>Exoprog est de sortie !</li>
                            <li>Exoprog est de sortie !</li>
                            <li>Exoprog est de sortie !</li>
                            <li>Exoprog est de sortie !</li>
                        </ul>
                    </td>
                    <td width="10%"></td>
                    <td id="meilleurs_exos" width="35%" style="vertical-align:top">
                        <h5>Les exos les plus vus :</h5>
                        <ul>
                            <li>HTML5 : Votre première page avec &lt;canvas&gt; ! [Dans PHP/MySQL par Spoodx]</li>
                            <li>HTML5 : Votre première page avec &lt;canvas&gt; ! [Dans PHP/MySQL par Spoodx]</li>
                            <li>HTML5 : Votre première page avec &lt;canvas&gt; ! [Dans PHP/MySQL par Spoodx]</li>
                            <li>HTML5 : Votre première page avec &lt;canvas&gt; ! [Dans PHP/MySQL par Spoodx]</li>
                            <li>HTML5 : Votre première page avec &lt;canvas&gt; ! [Dans PHP/MySQL par Spoodx]</li>
                        </ul>
                    </td>
                </tr>
            </table>    
        </div> 
        
<?php include('includes/footer.php');?>
    </body> 
</html> 
