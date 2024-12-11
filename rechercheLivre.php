<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="teste4.png">
    <link rel="stylesheet" href="styleRecherche.css">
 
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReaDBookS</title>
</head>
<body>
<div class="box  ">
        <div  class="deroul ">
            <div style="justify-content:  right;" id="header"> 
                <!-- Flèches -->
                <img id="arrowUp" src="double flèche haut.png" alt="Flèche vers le haut">
                <img id="arrowDown" src="double flèche bas.png" alt="Flèche vers le bas">

                <!-- Bouton Menu -->
                <button id="nav-bar">Menu</button>

                <!-- Contenu du menu déroulant -->
                <div id="deroulant">
                    <ol>
                        <li><a href="">Mon compte</a></li>
                        <li><a href="">Ajoute ton bouquin</a></li>
                        <li><a href="sessionlogout.php">Déconnexion</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="flex ">
            <div class=" flex10  height4 gradientDouble bulgatti bigFont bold "
            data-aos="flip-down">
                <h1  class="center ">ReaDB ookS</h1>
            </div>
        </div>
       

       <div class="flex ">
        <div class="flex10">
            <div class="salut height2"> Bienvenue <b id="nom" >dfgdg</b> !!! </div>
                <div  class="gradient milieuD silkserif    superBigFont bold ">
                        <pre class="silkserif bigFont right">votre recherche <input type="text"     name="frecherche"       id="frecherche"   required> <button class="silkserif right " id="search"> Go !!!</button> </pre> 
                         
                </div>
                <div  class="gradientinv milieuG silkserif    superBigFont bold ">
                        <pre class="silkserif bigFont left">  Ajoutes ton livre ! ! !  <button class="silkserif left Font " id="addbook" onclick="addbook()">Ajouter un livre</button> Si tu ne le trouves pas</pre>
                     
                </div>
                <div  class="gradient milieuD silkserif center  BigFont bold ">
                         <pre class="silkserif  BigFont right" id="bookslist"> Listes des bouquins <br> </pre>

                </div>
           
        </div>
            
       </div>

</div>



 <script>  
 //----------------------------------- chargement list livres----------------------
 function godetail(idlivre){
    window.location.href="bookdetails.php?idlivre="+idlivre;
 };
 $(document).ready(function(){
    let myData =  {"action": "listlivres"};
                    
        $.ajax({
                            url: "serverbooks.php", // Url appelée
                            method: "POST",              // la méthode GET ou POST
                            data:myData,
                            dataType: "JSON",

                             // si l'envoi est réussi 
                            success: function(response) {
                                let listbooks=[];
                                
                                for (let index = 0; index < response.listlivres.length; index++) {
                                    listbooks[index]= "<button onclick='godetail("+response.listlivres[index].idLivre+")'"+">Go</button> "+"<b> "+ 
                                    response.listlivres[index].idLivre+" "+
                                    response.listlivres[index].titre+" "+
                                    response.listlivres[index].auteur+" "+
                                    response.listlivres[index].themes+" "+
                                    // response.listlivres[index].synopsis+" "+
                                    response.listlivres[index].nbrPages+" "+
                                    response.listlivres[index].format+" "+
                                    response.listlivres[index].dispo+" "+
                                    response.listlivres[index].note+" "+
                                    response.listlivres[index].format+" "+
                                    // response.listlivres[index].couvThumbnail+" "+
                                    response.listlivres[index].prixCaution+"</b> <br>";
                                     
                                }
                                $('#bookslist').html(listbooks);
                              
                            },
                            
                            // s il y a une erreur je l'affiche en console et dans la div #messageID
                            error: function(error) {
                                console.log("errrrroreuuuu"+error.statusText);
                            
                            }
        });

});
var tabparam=[];
tabparam=window.location.search
    .substr(1)
    .split('&')
    .reduce(
        function(accumulator, currentValue) {
            var pair = currentValue
                .split('=')
                .map(function(value) {
                    return decodeURIComponent(value);
                });

            accumulator[pair[0]] = pair[1];

            return accumulator;
        },
        {}
    );
    console.log(tabparam);
    $('#nom').html(tabparam['nom']+" "+tabparam['prenom']);

    function addbook() {
    var email=tabparam['email'];
    var nom=tabparam['nom'];
    var prenom=tabparam['prenom'];
    var action ='getuserinfo';
    var userid = tabparam['userid'];
    let urll='addbook.php?prenom='+prenom+"&nom="+nom+"&email="+email+"&userid="+userid;
                            
    window.location.href=urll;
    }   
    //    var myData =  { "nom":  nom,
    //                    "id" : id,
    //                    "action": 'getuserinfo',
    //                    "prenom": prenom,
    //                     "email": email};
                   
    //    $.ajax({
    //                        url: "addbook.php", // Url appelée
    //                        method: "POST",              // la méthode GET ou POST
    //                        data:myData,
                          
    //                        // si l'envoi est réussi 
    //                        success: function(response) {
                               
    //                            console.log(response);
    //                         //    console.log(response['connected']) ;
    //                         //    let urll='addbook.php?connected='+response.connected+"&nom="+response.nom+"&id="+response.id+"&email="+response.email;
    //                         //    if (response.connected!==null) {
    //                         //       window.location.href=urll;
                               
                             
    //                        },
    //                        // s il y a une erreur je l'affiche en console et dans la div #messageID
    //                        error: function(error) {
    //                            console.log("errrrroreu"+error.statusText);
                            
    //                        }
    //                    });

   

 </script>
 
 <script>
        const navBarButton = document.getElementById('nav-bar');
        const deroulant = document.getElementById('deroulant');
        const boutonUp = document.getElementById("arrowUp");
        const boutonDown = document.getElementById("arrowDown");

        boutonUp.style.display = 'none';
        boutonDown.style.display = 'block';

        navBarButton.addEventListener('click', () => {
            if (deroulant.style.display === 'none' || deroulant.style.display === '') {
                deroulant.style.display = 'block';
                boutonDown.style.display = 'none';
                boutonUp.style.display = 'block';
            } else {
                deroulant.style.display = 'none';
                boutonDown.style.display = 'block';
                boutonUp.style.display = 'none';
            }
        });

        document.addEventListener('click', (event) => {
            if (!navBarButton.contains(event.target) && !deroulant.contains(event.target)) {
                deroulant.style.display = 'none';
                boutonDown.style.display = 'block';
                boutonUp.style.display = 'none';
            }
        });
        
    </script>
 <link rel="stylesheet" href="styleRecherche.css">


<?php
 include 'footer.php'
?>


