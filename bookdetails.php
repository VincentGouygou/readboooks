<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reaDbooks add book</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <div class="box  ">

            <div  class="deroul ">
                    <div class="gradientDoubleH" style="justify-content:  right;" id="header"> 
                        <!-- Flèches -->
                        <img id="arrowUp" src="double flèche haut.png" alt="Flèche vers le haut">
                        <img id="arrowDown" src="double flèche bas.png" alt="Flèche vers le bas">

                        <!-- Bouton Menu -->
                        <button  class="gradientDoubleH" id="nav-bar">Menu</button>

                        <!-- Contenu du menu déroulant -->
                        <div id="deroulant" class="gradientDoubleH">
                            <ol>
                                <li><a href="">Mon compte</a></li>
                                <li><a href="">Ajoute ton bouquin</a></li>
                                <li><a href="sessionlogout.php">Déconnexion</a></li>
                            </ol>
                        </div>
                    </div>
            </div>

            <div class="flex ">
                <div class=" flex10    gradientDouble bulgatti bigFont bold "
                data-aos="flip-down">
                    <h1  class="center ">ReaDB ookS</h1>
                </div>
            </div>
    

  
            <div class="flex ">
                <div class=" flex10   gradient milieuD  bulgatti mediumBigFont   "
                data-aos="flip-down">
                        <div class="flex ">
                            <div >
                                <img class="flex3 couvthumbnaildetail" src="" alt="couverture du livre" id="imglivre">
                                <button id="sendmail" onclick="">envoyer un mail</button>
                            </div>
                            <div class="flex7 flexdircolumn  margin3em"> 
                                <b class="silkserif left   ">    Titre :</b> <label class="silkserif bold BigFont " type="text" name="titre" id="titre"></label>  <br >
                                <b class="silkserif left   ">    Auteur : </b><label class="silkserif  " type="text" name="auteur" id="auteur"></label>  <br class="Font">
                                <b class="silkserif left   ">    Propriétaire : </b><label class="silkserif  " type="text" name="proprio" id="proprio"></label>  <br>
                                <b class="silkserif left   ">    Synopsis : </b><label  width="" class="silkserif  " type="text" name="synopsis" id="synopsis"></label>   <br>

                                <b class="silkserif left   ">    Thèmes : </b><label  width="" class="silkserif  " type="text" name="themes" id="themes"></label>   <br>

                                <b class="silkserif left   ">    Nombre de pages : </b><label  width="" class="silkserif  " type="text" name="nbrPages" id="nbrPages"></label>   <br>
                                <b class="silkserif left   ">    Format : </b><label  width="" class="silkserif  " type="text" name="format" id="format"></label>   <br>
                                <b class="silkserif left   ">    Disponibilité : </b><label  width="" class="silkserif  " type="text" name="dispo" id="dispo"></label>   <br>
                                <b class="silkserif left   ">    Prix Caution : </b><label  width="" class="silkserif  " type="text" name="prixCaution" id="prixCaution"></label>   <br>
                                <b class="silkserif left   ">    Note : </b><label  width="" class="silkserif  " type="text" name="note" id="note"></label>  
 
                            </div>
                            
                            
                        
                        </div>
                        
                </div>
                
            </div>
    </div>

<script charset="utf-8">

   


    tabparam=[];
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
    console.log(tabparam );
     let idlivre=tabparam['idlivre'];
     console.log("idlivre book : "+idlivre );
    let myData =  { "action": "detail",
                    "idlivre" : idlivre
    };
    $.ajax({
            url: "serverbooks.php", // Url appelée
            method: "POST",              // la méthode GET ou POST
            data: myData,
            dataType: "JSON",
            // si l'envoi est réussi 
            success: function(response) {
                    console.log(response);
                    if (response.listlivres.prixCaution=="1") 
                        { var dispo='Oui';console.log(dispo);} 
                    else {var dispo='Non';console.log(dispo);}
                    document.getElementById("imglivre").src = response.listlivres.couvThumbnail;
                    $('#titre').html( response.listlivres.titre);
                    $('#auteur').html( response.listlivres.auteur);
                    $('#synopsis').html( response.listlivres.synopsis);
                    $('#proprio').html( response.listlivres.nomproprio);
                    $('#themes').html( response.listlivres.themes);
                    $('#nbrePages').html( response.listlivres.nbrePages);
                    $('#format').html( response.listlivres.format);
                    $('#prixCaution').html( response.listlivres.prixCaution);
                    $('#dispo').text(dispo);
                    $('#note').text(response.listlivres.note);

            },
            // s il y a une erreur je l'affiche en console et dans la div #messageID
            error: function(error) {
                console.log("errrrror"+error.statusText);
                
            }
        });
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

<script src="assets/vendor/aos/aos.js"></script>
    <script>
        AOS.init({duration: 3000});
    </script>

</body>
</html>
