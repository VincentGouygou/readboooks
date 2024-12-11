<?php
header('content-type: text/html; charset=utf-8'); 
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 

// sql to create database

// $sql = "CREATE DATABASE rrrrEaDBooks";

// if ($conn->query($sql) === TRUE) {
//   echo "database rEaDBooks created successfully";
// } else {
//   echo "Error creating reaDBooks: " . $conn->error;
// }

 $conn->close(); 

//----------------------------------------------------------------------------------------------------

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "readboooks";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
};


// create table

// $sqlTable2= " CREATE TABLE listusers(
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// nom VARCHAR(30) NOT NULL,
// prenom VARCHAR(30) NOT NULL,
// telephone VARCHAR(30),
// email VARCHAR(30) NOT NULL,
// password VARCHAR(30) NOT NULL,
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if ($conn->query($sqlTable2) === TRUE) {
//     echo "table users created successfully";
//   } else {
//     echo "Error creating table users: " . $conn->error;
//   }

// $synopsis="Un officier de police, chargé de poursuivre un prétendu criminel, se prend d une vive sympathie pour celui-ci après l avoir arrêté. II ne tarde pas à acquérir la certitude de l innocence de son prisonnier, avec qui il présente une frappante ressemblance physique. Situation originale, qui engendre bien des péripéties... ";
// $insert = "INSERT INTO listlivres(useridProprio,UseridPossess,dispo,titre,format,auteur,synopsis,prixCaution,couvThumbnail,themes,note,nbrPages) 
//   VALUES ('1','0','1','Le Bout du Fleuve','poche','James Oliver Curwood','$synopsis','5','https://www.babelio.com/couv/CVT_CVT_Le-bout-du-fleuve_2525.jpg','roman','5','183 ')";
 
 // if ($conn->query($insert) === TRUE) {
          



          
  //   $response=['prenom'=> $prenom,
  //             'nom'=> $nom,
  //             'email'=>$email,
  //             'action'=>'inscrit'] ;
  // echo  json_encode($response );
  // } else {
  //   $response=['action'=>'Error inserting:',
  //               'error'=>$conn->error] ;
  //   echo  json_encode($response );
  //   // echo "Error inserting: " . $conn->error;
  //}
//   $response=['connected'=> $nom];

//   echo  json_encode($response );
  
//   if ($conn->query($insert) === TRUE) {
    
   //------------------------------------- detail livre ---------------------------
  
if ( $_POST['action']=='detail') {
  // echo "server idlivre : " . $_POST['idlivre'];
  $idlivre =  $_POST['idlivre'];
  $sql = "SELECT * FROM listlivres WHERE idLivre=$idlivre";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $themes=$row['themes'];
    $titre=$row['titre'];
    $auteur=$row['auteur'];
    $synopsis=$row['synopsis'];
    $nbrPages=$row['nbrPages'];
    $format=$row['format'];
    $dispo=$row['dispo'];
    $prixCaution=$row['prixCaution'];
    $idlivre=$row['idLivre'];
    $note=$row['note'];
    $couvThumbnail=$row['couvThumbnail'];
    $proprio=$row['useridProprio'];

    $sql = "SELECT * FROM listusers WHERE userid=$proprio";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $nomproprio=$row['nom']." ".$row['prenom'];
    $email=$row['email'];

    $sql = "SELECT * FROM listdesthemesparlivres WHERE livreid=$idlivre";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
      $themes.=$row['email'];
    } ;
    

      $resp=['titre' => $titre,
                  'auteur' => $auteur,
                  'idLivre' => $idlivre,
                  'themes'=> $themes,
                  'synopsis' => $synopsis,
                  'nbrPages' => $nbrPages,
                  'format' => $format,
                  'dispo' => $dispo,
                  'note' => $note,
                  'format' => $format,
                  'couvThumbnail' => $couvThumbnail,
                  'nomproprio' => $nomproprio,
                  'email' => $email,
                  'prixCaution' => $prixCaution ];
    echo json_encode(["listlivres"=> $resp] );
}


      // ----------------------------------------------------------------------------------------------------------------------------------------------
if ( $_POST['action']=='addbook') {
    $titre =  $_POST['titre'];
    $auteur =  $_POST['auteur'];
    $theme =  $_POST['theme'];
    $nbrPages =  $_POST['nbrPages'];
    $prixCaution =  $_POST['prixCaution'];
    $userIdProprio =  $_POST['userIdProprio'];
    $synopsis =  $_POST['synopsis'];
   
    $note =  $_POST['note'];
    $couvThumbnail =  $_POST['couvThumbnail'];
    $format =  $_POST['format'];
  $insert = "INSERT INTO listlivres(useridProprio,useridPossess,dispo,titre,format,     auteur,    synopsis,   prixCaution,   couvThumbnail,   themes,  note,   nbrPages) 
                            VALUES ('$userIdProprio','0'        ,'1','$titre','$format','$auteur','$synopsis','$prixCaution','$couvThumbnail','$theme','$note','$nbrPages')";
  $resultt=$conn->query($insert) ;
  if ($resultt === TRUE) {
    $response=['action'=> 'livreInscrit'];
    echo json_encode($response);
  }
}

//-------------------------------------------------------------------------------------------
  if (   $_POST['action']=='listlivres' ) {
    $indexxx=1;
    $sql = "SELECT * FROM listlivres";
    $result = $conn->query($sql);
    $response2=array();
    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
          $themes=$row['themes'];
          $titre=$row['titre'];
          $auteur=$row['auteur'];
          $synopsis=$row['synopsis'];
          $nbrPages=$row['nbrPages'];
          $format=$row['format'];
          $dispo=$row['dispo'];
          $prixCaution=$row['prixCaution'];
          $idlivre=$row['idLivre'];
          $note=$row['note'];
          $couvThumbnail=$row['couvThumbnail'];
      
            $resp=['titre' => $titre,
                        'auteur' => $auteur,
                        'idLivre' => $idlivre,
                        'themes'=> $themes,
                        'synopsis' => $synopsis,
                        'nbrPages' => $nbrPages,
                        'format' => $format,
                        'dispo' => $dispo,
                        'note' => $note,
                        'format' => $format,
                        'couvThumbnail' => $couvThumbnail,
                        'prixCaution' => $prixCaution ];
              array_push($response2, $resp);
      }
        echo json_encode(["listlivres"=> $response2] );
    }
}
// on transforme $results en chaîne JSON :

      //  {
      
      //   $tablistlivres[$indexx]=['idLivre'=>$row['idLivre'],
      //                               'titre'=>$row['titre'],
      //                               'auteur'=>$row['auteur'],
      //                               'synopsis'=>$row['synopsis'],
      //                               'nbrPages'=>$row['nbrPages'],
      //                               'format'=>$row['format'],
      //                               'dispo'=>$row['dispo'],
      //                               'prixCaution'=>$row['prixCaution']
      //   ];
         
       // $tablistlivres[$indexx]=$tablistlivres[$indexx]+ $row;
      //   // $indexx++;
      //   // output data of each row
      //   // while($row = $result->fetch_assoc()) {
      //   //   // echo "email: " . $row["email"]. " - password: " . $row["password"]. "<br>"; 
     
        // }


      //   $nom=       $_POST['nom'];
      //   $prenom=    $_POST['prenom'];
      //   $telephone= $_POST['telephone'];
      //   $email=     $_POST['email'];
      //   $pass=      $_POST['pass'];
      //   $insert = "INSERT INTO users(nom,prenom,telephone,email,password) 
      //   VALUES ('$nom','$prenom','$telephone','$email','$pass')";
        
      //   $response=['connected'=> $nom];
    
      //   echo  json_encode($response );
        
      //   if ($conn->query($insert) === TRUE) {
          
         
      //   } else {
      //     echo "Error inserting: " . $conn->error;
      //   }
      // } else {
      
      //   echo "0 results";
      // }
    