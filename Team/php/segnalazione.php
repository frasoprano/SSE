<?php
$conn = mysql_connect ("localhost", "root", "") or die ("Connessione non riuscita"); 

mysql_select_db ("civicsense") or die ("DataBase non trovato"); #connessione al db

if(isset($_SESSION['idT'])){
	$upload_path = '../Admin/img/';
  

$team = (isset($_POST['team'])) ? $_POST['team'] : null;



    $quer = mysql_query ("SELECT * FROM segnalazioni WHERE stato  <> 'Risolto' AND team = ".$_SESSION['idT'] );
  

    while($row = mysql_fetch_assoc($quer)) {
      $foto = htmlspecialchars($row['foto']);  
      echo "
    <tr>
     
                <td>". htmlspecialchars($row['id']) ." <br></td>
                
                <td>". htmlspecialchars($row['datainv']) ." <br></td> 
                
                <td>". htmlspecialchars($row['orainv']) ."<br></td>

                <td>". htmlspecialchars($row['via']) ."<br></td>

                <td>". htmlspecialchars($row['descrizione']) ."<br></td>

                <td><img width='200px' height='200px' src=".$upload_path.$foto."><br></td>
				  
				        <td>". htmlspecialchars($row['tipo']) ."<br></td>

                <td>". htmlspecialchars($row['stato']) ."<br></td>

                <td>". htmlspecialchars($row['gravita']) ."<br></td>
               
          </tr> ";
    }



  }



?>