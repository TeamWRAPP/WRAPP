
      <?php
              // Takes in 3 values
              // Connect to MySQL database
              $dbc = mysql_connect('localhost','root','TeamWrapp');
              if(!$dbc) {
                             die('Not connected : ' . mysql_error());
              }

              // Select DB
              $db_selected = mysql_select_db("P1", $dbc);
              if(!$db_selected) {
                             die("Can't connect : " . mysql_error());
              }

              // Code if you wanted to search for a specific user
              $sqlSelect = 'SELECT * FROM activelist';
              $records = mysql_query($sqlSelect);

              while($user1 = mysql_fetch_assoc($records)) {
                             if($user1['Name'] == 'IRS') {
                                           // Debugging purposes to see if it prints out correctly 
                                           echo $user1['Name']."\n";
                                           echo $user1['URL']."\n";
                             }
              }

              // Replace the CIA stuff with the user inputs from HTML
              $sqlInsert = 'INSERT INTO Results '.'(D, TITLE, URL, NAME EMAIL, P1, P2, P3, P4, P5, P6, P7, P8, OS) '.'VALUES ("08/02/2016", "IMF", "imf.gov", "imf@usa.gov", 55.30, 58.12, 88.19, 93.69, 84.21, 49.32, 72.50, 11.60, 60.00) ';
              $retval = mysql_query($sqlInsert);
              if(!$retval) {
                             die('Could not enter data : ' . mysql_error());
              }
              echo "Entered data successfully\n";
              mysql_close();

        //Enter your code here, enjoy!

 // Takes in 3 values
              // Connect to MySQL database
              $dbc = mysql_connect('localhost','root','TeamWrapp');
              if(!$dbc) {
                             die('Not connected : ' . mysql_error());
              }
<!-- 
if ($dbc->connect_error) {
  die("Connection failed: " .$dbc->connect_error);
} -->

$sql = "SELECT D, TITLE, URL, P1, P2, P3, P4, P5, P6, P7, P8, 0S FROM Results";
$result = mysql_query($sql);

if ($result->num_rows > 0) {
  echo "<div  class='tbl-content'><table cellpadding='0' cellspacing='0' border='0'><tbody>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["D"]."</td><td class='wide'>".$row["TITLE"]."</td><td class='wide'>".$row["URL"]."</td><td>".$row["P1"]."</td><td>".$row["P2"]."</td><td>".$row["P3"]."</td><td>".$row["P4"]."</td><td>".$row["P5"]."</td><td>".$row["P6"]."</td><td>".$row["P7"]."</td><td>".$row["P8"]."</td><td class='os'>".$row["OS"]."</td></tr>";
  }
  echo "</tbody></table></div>";
} else {
  echo "<h3>None to list yet</h3>";
}
$dbc->close();
?>