<!DOCTYPE html> 
<html lang="fr"> 
	<head> 
		<meta charset="iso-8859-1" /> 
		<link rel="stylesheet" href="design/style.css" /> 
		<title>Exo Prog : Le site où on vous propose des exercices de programmation</title> 
	</head> 
	
	<body> 
        <div id="header"> 
            <a href="index.php"><div id="logo"></div></a> 
 
            <div id="menu">
                <p><a href="#">Accueil</a><a href="#">Exercices</a><a href="#">Membres</a></p>
            </div>
            
            <div id="connexion"> 
                <form method="post" name="connexion" action="#"> 
                    <a href="" id="input_submit" onclick="connexion.submit(); return false;">Connexion</a>
                    <input type="text" value="Pseudonyme" name="pseudo" id="input_pseudo" onfocus="if(this.value=='Pseudonyme') {this.value = '';}" onblur="if(this.value == ''){this.value='Pseudonyme';}"  size="15"/> 
                    <input type="password" name="mdp" id="input_password" value="Mot de passe" size="15"  onfocus="if(this.value=='Mot de passe') {this.value = '';}" onblur="if(this.value == ''){this.value='Mot de passe';}"/> 
                    <a href="inscription.php" id="input_inscription">Inscription</a>
                </form> 
            </div> 
        </div>
        
        <div id="menu_droite"> 
            <h5>Langages</h5> 
            <ul> 
                <li><a href="#">HTML/CSS</a></li>
                <li><a href="#">JavaScript</a></li> 
                <li><a href="#">PHP/MySQL</a></li> 
                <li><a href="#">Langage C</a></li> 
                <li><a href="#">Langage C++</a></li> 
                <li><a href="#">Java</a></li> 
                <li><a href="#">Python</a></li> 
                <li><a href="#">VB .NET</a></li> 
            </ul> 
        </div> 
        
        <div id="contenu"> 
            <p>Bienvenue sur ExoProg, le site où vous trouverez nombre d'exercices de programmation.</p>
            <!-- Ici doit se trouver le contenu. -->
            <table id="accueil" width="100%">
                <tr>
                    <td width="40%" id="about">
                        
                            <p>Qu'est ce que c'est qu'ExoProg ?</p>
                            <ul>
                                <li>Venez lire des exercices dans votre langage de prédilection.</li>
                                <li>Vous pouvez devenir rédacteur d'exercice sur le site.</li>
                                <li>Discutez des exercices dans les commentaires pour demander de l'aide ou les améliorer.</li>
                            </ul>
                        
                    </td>  
                    
                    <td width="55%" id="caroussel">
                            <p>Ici se se trouve un caroussel !</p>
                    </td>
                </tr>    
            </table>    
        </div> 
        <div id="footer">
            <div id="footer_top"></div>
            <p style="color: White">Footer !</p>
        </div>	
    </body> 
</html> 
