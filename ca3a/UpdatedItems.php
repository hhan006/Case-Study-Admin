<?php 
 $jave_update = $_POST['java_update'];
 $java_price = $_POST['java_price'];
 $lait_update = $_POST['lait_update'];
 $lait_single_price = $_POST['lait_single_price'];
 $lait_double_price = $_POST['lait_double_price'];
 $capp_update = $_POST['capp_update'];
 $capp_single_price = $_POST['capp_single_price'];
 $capp_double_price = $_POST['capp_double_price'];
 function update_price($checkbox, $price, $qty, $id) {
    if (isset($checkbox) && $price) {
        if (!get_magic_quotes_gpc()) {
            $price = addslashes($price);
        }
        @ $db = new mysqli('localhost', 'f36ee', 'f36ee', 'f36ee');
        if (mysqli_connect_errno()) {
           echo "Error: Could not connect to database.  Please try again later.";
           exit;
        }
        $query = "update Prices set ".$qty." = ".$price." where productid = ".$id;
        $result = $db->query($query);
        if (!$result) {
            echo "An error has occurred.  The price for Just Java was not updated.";
        }
        $db->close();
    }
 }
 update_price($jave_update, $java_price, 'single_price', 1);
 update_price($lait_update, $lait_single_price, 'single_price', 2);
 update_price($lait_update, $lait_double_price, 'double_price', 2);
 update_price($capp_update, $capp_single_price, 'single_price', 3);
 update_price($capp_update, $capp_double_price, 'double_price', 3);


 @ $db = new mysqli('localhost', 'f36ee', 'f36ee', 'f36ee');
 if (mysqli_connect_errno()) {
   echo "Error: Could not connect to database.  Please try again later.";
   exit;
 }
 $query = "select * from Prices where productid = 1";
 $result = $db->query($query);
 $row = $result->fetch_assoc();
 echo "<tr><th>Just Java</th><td>Regular house blend, decaffeinated coffee, or flavor of the day.<br>Endless Cup $".$row['single_price']."</td></tr>";
 
 $query = "select * from Prices where productid = 2";
 $result = $db->query($query);
 $row = $result->fetch_assoc();
 echo "<tr><th>Cafe au Lait</th><td>House blended coffee infused into a smooth, steamed milk.<br>Single $".$row['single_price']." Double $".$row['double_price']."</td></tr>";
 
 $query = "select * from Prices where productid = 3";
 $result = $db->query($query);
 $row = $result->fetch_assoc();
 echo "<tr><th>Iced Cappuccino</th><td>Sweetened espresso blended with icy-cold milk and served in a chilled glass.<br>Single $".$row['single_price']." Double $".$row['double_price']."</td></tr>";
 $result->free();
 $db->close();
?>