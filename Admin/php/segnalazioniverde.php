<?php
$conn = mysqli_connect ("localhost", "root", "","civicsense") or die ("Connessione non riuscita"); 



	$upload_path = 'img/';
  $quer = mysqli_query ($conn,"SELECT * FROM segnalazioni WHERE tipo = '1' ");
  



    while($row = mysqli_fetch_assoc($quer)) {
      $foto = htmlspecialchars($row['foto']);
        echo "
    <tr>
     
                <td>". htmlspecialchars($row['id']) ." <br></td>
                
                <td>". htmlspecialchars($row['datainv']) ." <br></td> 
                
                <td>". htmlspecialchars($row['orainv']) ."<br></td>

                <td>". htmlspecialchars($row['via']) ."<br></td>

                <td>". htmlspecialchars($row['descrizione']) ."<br></td>

                <td><img width='200px' height='200px' src=".$upload_path.$foto."><br></td>

                <td>". htmlspecialchars($row['email']) ."<br></td>

                <td>". htmlspecialchars($row['stato']) ."<br></td>

                <td>". htmlspecialchars($row['team']) ."<br></td>

                <td>". htmlspecialchars($row['gravita']) ."<br></td>
               
          </tr> ";
    }

?>