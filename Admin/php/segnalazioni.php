<?php
$conn = mysql_connect ("localhost", "root", "") or die ("Connessione non riuscita"); 

mysql_select_db ("civicsense") or die ("DataBase non trovato"); #connessione al db



  $quer = mysql_query ("SELECT * FROM segnalazioni ");
  



    while($row = mysql_fetch_assoc($quer)) {
        echo "
    <tr>
     
                <td>". htmlspecialchars($row['id']) ." <br></td>
                
                <td>". htmlspecialchars($row['datainv']) ." <br></td> 
                
                <td>". htmlspecialchars($row['orainv']) ."<br></td>

                <td>". htmlspecialchars($row['via']) ."<br></td>

                <td>". htmlspecialchars($row['descrizione']) ."<br></td>

                <td>". htmlspecialchars($row['foto']) ."<br></td>

                <td>". htmlspecialchars($row['email']) ."<br></td>

                <td>". htmlspecialchars($row['stato']) ."<br></td>

                <td>". htmlspecialchars($row['team']) ."<br></td>

                <td>". htmlspecialchars($row['gravit�']) ."<br></td>
               
          </tr> ";
    }
?>