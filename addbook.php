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
            <div class=" flex10    gradientDouble bulgatti bigFont bold "
            data-aos="flip-down">
                <h1  class="center ">ReaDB ookS</h1>
                
            </div>
        </div>
        <div class="flex10 milieu">
                    <h2 class="center ">Ajoutes ton bouquin</h2>
                    <div class="salut center"> Bienvenue <b id="nom" >dfgdg</b> !!! </div> 
        </div>
        <div class="flex ">
    
                <div  class="gradientinv milieuG flex7 silkserif  flexcolumn  superBigFont bold ">
                    <div class=" padding3em  flexcolumn ">
                        
                        <label class="silkserif left faddbookSize">  <input type="text" name="faddbookTitre"    id="faddbookTitre"     value="Marius" required> Titre *         </label> <br>
                        <label class="silkserif left faddbookSize">  <input type="text" name="faddbookauteur"   id="faddbookauteur"    value="Marcel Pagnol" required> Auteur *       </label> <br>

                        <select class="silkserif left faddbookSize">  
                            <option type="text" name="faddbooktheme1"    id="faddbooktheme1"     value="Roman" required selected>Roman</option>     
                            <option type="text" name="faddbooktheme1"     value="Policier" required>Policier </option>     
                            <option type="text" name="faddbooktheme1"     value="Drame" required>Drame  </option>    
                            <option type="text" name="faddbooktheme1"     value="Fantastique" required>Fantastique </option>   
                            <option type="text" name="faddbooktheme1"     value="Manga" required>Manga  </option>    
                            <option type="text" name="faddbooktheme1"     value="Humour" required>Humour </option>   
                            <option type="text" name="faddbooktheme1"     value="Bibliographie" required>Bibliographie  </option>    
                            <option type="text" name="faddbooktheme1"     value="Politique" required>Politique </option>   
                            <option type="text" name="faddbooktheme1"     value="Philosophie" required>Philosophie  </option>    
                            <option type="text" name="faddbooktheme1"     value="Sciences" required>Sciences </option>   
                            <option type="text" name="faddbooktheme1"     value="Policier" required>Policier  </option>    
                            <option type="text" name="faddbooktheme1"     value="Psychologie" required>Psychologie </option>   
                        </select> 
                        <select class="silkserif left faddbookSize">  
                            <option type="text" name="faddbooktheme2"    id="faddbooktheme2"     value="" required selected> Thème 2   </option>      
                            <option type="text" name="faddbooktheme2"    id="faddbooktheme2"     value="" required > ghfj   </option>      
                            <option type="text" name="faddbooktheme2"    id="faddbooktheme2"     value="" required > fhjjh 2   </option>      
                            <option type="text" name="faddbooktheme2"    id="faddbooktheme2"     value="" required > ghdhgh 2   </option>      

                                
                        </select> <br>

                        <label class="silkserif left faddbookSize">  <input type="text" name="faddbooktheme3"    id="faddbooktheme3"     value="" required> Thème 3          </label> <br>

                        <label class="silkserif left faddbookSize">  <input type="text" name="faddbookNbrePages"id="faddbookNbrePages" value="" required> Nombre de pages</label> <br>
                        <label class="silkserif left faddbookSize">  <input type="integer" name="faddbookcaution"  id="faddbookcaution"   value="0" required> Caution     </label> <br>
                        <label class="silkserif left faddbookSize">  <input type="text" name="faddbookComment"  id="faddbookComment"   value="" required> Commentaire    </label> <br>
                        <label class="silkserif left faddbookSize">  <input type="text" name="faddbookFormat"  id="faddbookFormat"   value="" required> Format(poche,livre..)   </label> <br>
                        <label class="silkserif left faddbookSize">  <input type="text" name="faddbookNote"  id="faddbookNote"   value="" required> Note (1-5)   </label> <br>
                        <label class="silkserif left faddbookSize">  <input type="text" name="faddbookcouvThumbnail"  id="faddbookcouvThumbnail"   value="" required> couverture   </label> <br>
                        <label>    <img   src="" alt="" id="couv"></label>
                    </div>
                </div>
                <div  class="gradient milieuD silkserif  flex5 bigFont bold ">
                      
                        <label class="silkserif Font right">      Mettez le titre et le nom de l'auteur, puis sautez dans "Thèmes" <br>et des infos copiables vont apparaitre </label>               
                        <label class="silkserif Font right">  Ajoutez votre livre ! ! !  <button class="silkserif left Font " onclick="addbook()" id="addbook">Go !!! </button> </label>
                        <label><button id="returncherche"   hidden>Revenir a la recherche</button></label>
                        <label class="silkserif left faddbookSize">  <textarea class="" rows="5" cols="45" type="text" name="faddbookSynopsis" id="faddbookSynopsis"  value="" required></textarea>  <b class="synopsislabelvertical" >Synopsis</b>      </label>    

                      
                        <label id="infoupbook"> </label>
                         
                         

                </div>
        
            
        </div>

</div>
<script>   
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

    $('#nom').html(tabparam.nom+" "+tabparam.prenom);
    
    
    document.getElementById('faddbookauteur').onblur = function() {
         var qtitre = $('#faddbookTitre').val();
         var qauteur= $('#faddbookauteur').val();
        //  window.open('https://openlibrary.org/search?q='+q);
        
    // https://openlibrary.org/search.json?q=the+lord+of+the+rings
    // https://openlibrary.org/search.json?title=the+lord+of+the+rings
    // https://openlibrary.org/search.json?author=tolkien&sort=new
    // https://openlibrary.org/search.json?q=the+lord+of+the+rings&page=2
    // https://openlibrary.org/search/authors.json?q=twain
    // https://gallica.bnf.fr/services/Toc?searchTerm=Victor+Hugo&lang=fr
    // https://openlibrary.org/search?title=le+bout+du+fleuve&author=james+oliver+curwood
    
    $.ajax({
        url: "https://www.googleapis.com/books/v1/volumes?q=intitle:"+qtitre+"&inauthor:"+qauteur,
        // Url appelée
        method: "get",              // la méthode GET ou POST
        
        dataType: "JSON",
        // si l'envoi est réussi
        success: function(response) {
             
            for (var inndex = 0; (response.items[inndex].volumeInfo.authors[0]===undefined)
             || (  response.items[inndex].volumeInfo.language!=='fr' || response.items[inndex].volumeInfo.description===undefined); inndex++) {
                console.log(inndex);
                
            }   
            console.log(response.items[inndex].volumeInfo.language);
            document.getElementById("faddbookTitre").value=response.items[inndex].volumeInfo.title.replace(/'/g, ' ');
            document.getElementById('faddbookauteur').value=response.items[inndex].volumeInfo.authors[0].replace(/'/g, ' ');
            document.getElementById('faddbookSynopsis').value=response.items[inndex].volumeInfo.description
            .replace(/'/g, ' ')
            .replace("é",'e');
            document.getElementById('faddbookNbrePages').value=response.items[inndex].volumeInfo.pageCount;
            // document.getElementById('faddbooktheme1').value=response.items[inndex].volumeInfo.categories[0];

            document.getElementById('faddbookcouvThumbnail').value=response.items[inndex].volumeInfo.imageLinks.thumbnail;
            document.getElementById("couv").src = response.items[inndex].volumeInfo.imageLinks.thumbnail;
        },
        // s il y a une erreur je l'affiche en console et dans la div #messageID
        error: function(error) {
            console.log("errrrror"+error.statusText);
        }
    });
 
        // window.open('https://googlethatforyou.com?q='+q);
    }
 

    function addbook(){
    let titre = $('#faddbookTitre').val();
    
    titre.replace(/'/g, ' ');
    titre.replace(/é/g, 'e');
    console.log('titre sans é : '+titre);

    let auteur = $('#faddbookauteur').val();
    let theme = $('#faddbooktheme1').val();
    let nbrPages = $('#faddbookNbrePages').val();
    let prixCaution = $('#faddbookcaution').val();
    let synopsis = $('#faddbookSynopsis').val();
    synopsis.replace(/'/g, ' ');
    synopsis.replace('é', 'e');

    let userIdProprio=tabparam.userid;
    let note= $('#faddbookNote').val();
    let couvThumbnail = $('#faddbookcouvThumbnail').val();
    let format = $('#faddbookFormat').val();
    // titre=  iconv('CP1252', 'UTF-16', $text); (titre);
    // auteur=  utf8_encode(auteur);
    // theme=  utf8_encode(theme);
    // nbrPages=  utf8_encode(nbrPages);
    // prixCaution=  utf8_encode(prixCaution);
    // synopsis=  utf8_encode(synopsis);
    
    let myData =  { "titre": titre,
                        "auteur": auteur,
                        "theme": theme,
                        "nbrPages": nbrPages,
                        "prixCaution" : prixCaution,
                        "userIdProprio" : userIdProprio,
                        "synopsis": synopsis,
                        "note" : note,
                        "couvThumbnail" : couvThumbnail,
                        "format" : format,
                        "action": "addbook"};                    
            // fonction Ajax de jQuery
            // j'appelle ajax sur le fichier ajaxmessage.php avec la méthode GET pour lui envoyer en json myData
        $.ajax({
            url: "serverbooks.php", // Url appelée
            method: "POST",              // la méthode GET ou POST
            data: myData,
            dataType: "JSON",
            // si l'envoi est réussi 
            success: function(response) {
                if (response.action=='livreInscrit') {
                    $('#infoupbook').html('Livre UpLoadé');
                    document.getElementById('addbook').hidden=true;
                    document.getElementById('returncherche').hidden=false;
                    document.getElementById("returncherche").onclick = function() {
                            window.location.href="rechercheLivre.php?prenom="+tabparam['prenom'] +"&nom="+tabparam['nom']+"&email="+tabparam['email']+"&userid="+tabparam['userid']; 
                        }
                    
                    

                    console.log('cest cool');
                }
            },
            // s il y a une erreur je l'affiche en console et dans la div #messageID
            error: function(error) {
                console.log("errrrror"+error.statusText);
                
            }
        });
}
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