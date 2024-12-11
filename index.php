<?php
    include "headerG.php";
?>

    <div class="box  ">
        <div class="flex ">
            <div class=" flex10  height4 gradientDouble bulgatti bigFont bold "
            data-aos="flip-down">
                <h1  class="center ">ReaDB ookS</h1>
            </div>
           
        </div>
        <div class="flex  ">
            <div class="milieu flex5"
            data-aos="flip-right">
                <div class="gradientinv milieuG silkserif inscription center bigFont bold ">
                    <b class="silkserif  bold ">Inscription</b> <br>
                    <div class="Font">  
                    
                            <pre class="silkserif left"> <input class="silkserif   "  type="text"     name="fInscriptionNom"       id="fInscriptionNom" value="Mathis" required> Nom  </pre> 
                            <pre class="silkserif left"> <input class="silkserif   " type="text"     name="fInscriptionPrenom"    id="fInscriptionPrenom" value="Knoll" required> Prénom  </pre>   
                            <pre class="silkserif left"> <input class="silkserif   " type="text"     name="fInscriptionTel"       id="fInscriptionTel" value="0607229383" required> Téléphone  </pre>   
                            <pre class="silkserif left"> <input class="silkserif   " type="email"    name="fInscriptionEmail"     id="fInscriptionEmail" value="mathis.gouygou@gmx.fr" required> Email </pre>   
                            <pre class="silkserif left"> <input class="silkserif   " type="password" name="fInscriptionPass"      id="fInscriptionPass" value="alicia46" required> Mot de passe  </pre>    
                            <pre class="silkserif left"> <input class="silkserif   " type="password" name="fInscriptionPassVerif" id="fInscriptionPassVerif" value="alicia46" required> Vérification de Mot de passe </pre>   
                                    <input type="text"     name="action"    value="inscription" hidden>
                            <button onclick="inscription()"  class=" silkserif button1middle mediumBigFont" id="finscription" type="submit"  >S'inscrire</button>
                            <b id="msginscription">...</b>
                    
                    </div>
                </div>
            </div>
            <div class="  flex5 "
            data-aos="flip-left"
                     >
                <div class="gradient milieuD silkserif connexion center bigFont bold ">

                    <b class="silkserif  bold ">Connexion</b> <br>
                    <div class="Font " >
                    <pre>             </pre>
                    <pre>             </pre>
                        

                            <pre class="silkserif  right " >Email <input class="silkserif" type="email" name="fConnexionEmail" value="mathis.gouygou@gmx.fr"    id="fConnexionEmail" required></pre> 
                            <pre class="silkserif  right ">Mot de passe <input class="silkserif" type="password" name="fConnexionPass"   value="alicia46"   id="fConnexionPass"  required></pre>
                            <input  type="text"     name="action"    value="connexion" hidden>
                            <button onclick="connexion()" class="silkserif button2middle  mediumBigFont"  id="fconnexion" type="submit" >Se Connecter</button>
                            <pre>             </pre>
                    <pre>             </pre>
                    <pre>             </pre>     
                    </div>
                </div>
            </div>
        </div>
        <div class="flex  "
        data-aos="flip-right">
            <div class="flex10  milieuG gradientinv bigFont bold ">
            <h2 class="center ">A propos de  <b class="bulgatti">ReaDB ookS</b></h2>
                <h4 class="center  ">Les<b class="bulgatti">RegleS</b><b class="bulgatti"> D</b> 'utilisation<b class="bulgatti">S</b></h4>
            </div>
        </div>
        <div class="flex  "
        data-aos="flip-right">
            <div class="flex10  milieuD gradient bigFont bold ">
            <h2 class="center ">La <b class="bulgatti">ReaD</b>epêche</h2>
            </div>
        </div>
        <div class="flex  "
        data-aos="flip-right">
            <div class="flex10  milieuG gradientinv bigFont bold ">
                <h2 class="center ">La <b class="bulgatti">ReaD</b>action</h2>
                <h4 class="center bulgatti">Mrs Mathis Knoll & Vincent Gouygou</h4>
            </div>
        </div>
    </div>

<script charset="utf-8">

    function inscription() {
                    
        // j'assigne à l'id #envoyer, une fonction qui s'exécutera quand la div de l'id sera cliquée
            // dans cette fonction, je mets dans la variable message la valeur du text html contenu dans l'id #fmessage, soit l'id de l'input.
        let nom =       $('#fInscriptionNom').val();
        let prenom =    $('#fInscriptionPrenom').val();
        let telephone = $('#fInscriptionTel').val();
        let email =     $('#fInscriptionEmail').val();
        let pass =      $('#fInscriptionPass').val();
        let passVerif=  $('#fInscriptionPassVerif').val();
        let action ='inscription';
            // on prépare les données qui vont être envoyées par Ajax au fichier PHP
            // je mets ce message dans un tableau json (clé: valeur) 
        console.log(nom+" "+prenom+" "+email+" "+pass);
        let myData =  { "nom": nom,
                        "prenom": prenom,
                        "telephone": telephone,
                        "email": email,
                        "pass" : pass,
                        "passVerif": passVerif,
                        "action": "inscription"};                    
            // fonction Ajax de jQuery
            // j'appelle ajax sur le fichier ajaxmessage.php avec la méthode GET pour lui envoyer en json myData
        $.ajax({
            url: "server.php", // Url appelée
            method: "POST",              // la méthode GET ou POST
            data: myData,
            dataType: "JSON",
            // si l'envoi est réussi 
            success: function(response) {
                
                console.log(response);
                
                if (response.action=="les mots de passe ne sont pas similaires"){
                    $('#msginscription').html(response.action);
                }

                if (response.action=="Vous êtes dèjà inscrit  ! ! ! "){
                    $('#msginscription').html(response.action);

                
                }
                if (response.action=="Error inserting:"){
                    $('#msginscription').html(response.action+" "+response.error);

                
                }
                if (response.action=="0 inscription results"){
                    $('#msginscription').html("contactez l'administrateur");

                
                }
                
                if (response.action=='inscrit') {
                    let urll='rechercheLivre.php?prenom='+response.prenom +"&nom="+response.nom+"&email="+response.email+"&userid="+response.userId;
                    window.location.href=urll;
                }
            
            },
            // s il y a une erreur je l'affiche en console et dans la div #messageID
            error: function(error) {
                console.log("errrrror"+error.statusText);
                
            }
        });
    } // fin inscription

    function connexion() {
        let email =   $('#fConnexionEmail').val();
        let pass =    $('#fConnexionPass').val();
        let action ='connexion';
                     // on prépare les données qui vont être envoyées par Ajax au fichier PHP
                       // je mets ce message dans un tableau json (clé: valeur) 
        let myData =  { "email": email,
                        "pass" : pass,
                        "action": "connexion"};
                    
        $.ajax({
                            url: "server.php", // Url appelée
                            method: "POST",              // la méthode GET ou POST
                            data:myData,
                            dataType: "JSON",

                             // si l'envoi est réussi 
                            success: function(response) {
                                
                                console.log(response);
                                console.log(response.nom);
                                if (response.action=='connected') {
                                    let urll='rechercheLivre.php?prenom='+response.prenom+"&nom="+response.nom+"&email="+response.email+"&userid="+response.userId;
                                    window.location.href=urll;
                                }
                            
                            },
                            // s il y a une erreur je l'affiche en console et dans la div #messageID
                            error: function(error) {
                                console.log("errrrroreuuuu"+error.statusText);
                            
                            }
        });

    }
</script>
    
<?php
    include "footer.php";

?>
