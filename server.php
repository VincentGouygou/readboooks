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

// $sql = "CREATE DATABASE readboooks";

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
}  else {
  // echo "database readboooks coonected successfully ";
}


// create table

// $sqlTable2="CREATE TABLE listlivres(
//   idLivre INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   useridProprio BIGINT NOT NULL,
//   UseridPossess BIGINT NOT NULL,
//   dispo BINARY(16) NOT NULL,
//   titre VARCHAR(255) NOT NULL,
//   format VARCHAR(255) NOT NULL,
//   auteur VARCHAR(255) NOT NULL,
//   synopsis VARCHAR(255) NOT NULL,
//   prixCaution BIGINT NOT NULL,
//   couvThumbnail VARCHAR(255) NOT NULL,
//   themes BIGINT NOT NULL,
//   note BIGINT NOT NULL,
//   nbrPages BIGINT NOT NULL
// )";
//  $sqlTable2="CREATE TABLE listusers(
//     userId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     nom VARCHAR(255) NOT NULL,
//     prenom VARCHAR(255) NOT NULL,
//     motdepasse VARCHAR(255)  NOT NULL,
//     telephone VARCHAR(255)  NOT NULL,
//     dateInscript TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
//     note BIGINT NOT NULL,
//     email VARCHAR(255) NOT NULL)";

// if ($conn->query($sqlTable2) === TRUE) {
//        echo "table listLivres created successfully";
//      } else {
//        echo "Error creating table listLivres: " . $conn->error;
//      }


  if (   $_POST['action']=='inscription' ) {
    // echo 'inscriptionnnnnn';
    // {'email': email,'pass':pass,'passVerif':passVerif,'action':'inscription'};
    $nom=       $_POST['nom'];
    $prenom=    $_POST['prenom'];
    $email=     $_POST['email'];
    $telephone= $_POST['telephone'];
    $pass=      $_POST['pass'];
    $passVerif= $_POST['passVerif'];
    if ($pass!==$passVerif) { 
        // echo "les mots de passe ne sont pas similaires";
        $response=['action'=>'les mots de passe ne sont pas similaires'] ;
        echo  json_encode($response );
            
        exit();
    } else {
      // ----------------------------------------------------------------------------------------------------------------------------------------------
      $sql = "SELECT userId, email, motdepasse FROM listUsers";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          // echo "email: " . $row["email"]. " - password: " . $row["password"]. "<br>"; 
          if  ($email==$row["email"] )  {
            $response=['action'=>'Vous êtes dèjà inscrit  ! ! ! '] ;
            echo  json_encode($response );
            exit;
          }
        }
        $nom=       $_POST['nom'];
        $prenom=    $_POST['prenom'];
        $telephone= $_POST['telephone'];
        $email=     $_POST['email'];
        $pass=      $_POST['pass'];
        $insert = "INSERT INTO listUsers(nom,prenom,telephone,email,motdepasse) 
        VALUES ('$nom','$prenom','$telephone','$email','$pass')";
        $resultt=$conn->query($insert) ;
        if ($resultt === TRUE) {
          
          $strsql="SELECT MAX(userId) AS lastid FROM listUsers";
          $resultt=$conn->query($strsql) ;
          $row = $resultt->fetch_assoc();
          
          $iduser=$row['lastid'];
           

          
          $response=['prenom'=> $prenom,
                    'nom'=> $nom,
                    'email'=>$email,
                    'userId'=>$iduser,
                    'action'=>'inscrit'] ;
        echo  json_encode($response );
        } else {
          $response=['action'=>'Error inserting:',
                      'error'=>$conn->error] ;
          echo  json_encode($response );
          // echo "Error inserting: " . $conn->error;
        }
      } 
       else {
        $response=['action'=>'0 inscription results'] ;
        echo  json_encode($response );
        //  echo "0 inscription results";
       }
    }
} // fin inscription

// connexion -------------------------------------------------------------------------------------
session_start();
if ( isset($_POST['email']) && isset($_POST['pass'])  && $_POST['action'] =='connexion' ) {
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $sql = "SELECT userId, nom, prenom, email, motdepasse FROM listUsers";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        if ( ($email==$row["email"] ) &&  ($password==$row["motdepasse"] ) ){
          $nom=$row["nom"];
          $prenom=$row["prenom"];
          $email==$row["email"];
          $iduser=$row["userId"];
          $response=['prenom'=> $prenom,
                      'nom'=> $nom,
                      'email'=>$email,
                      'userId'=>$iduser,
                      'action'=>'connected'] ;


          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_SESSION["user"] = $email;
          }



          echo json_encode($response);
          exit;
        }
      }
    } else {
      $response=['action'=>'Email et/ou Mot de passe invalide'] ;
      echo json_encode($response);
       
      
    }
}
$conn->close(); 
?> 