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