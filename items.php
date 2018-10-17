<?php 
 @ $db = new mysqli('localhost', 'f36ee', 'f36ee', 'f36ee');
 if (mysqli_connect_errno()) {
   echo "Error: Could not connect to database.  Please try again later.";
   exit;
 }
 $query = "select * from Prices where productid = 1";
 $result = $db->query($query);
 $row = $result->fetch_assoc();
 echo "<tr>
        <td id='cheBox'><input type='checkbox' name='java_update'></td>
        <th>Just Java</th>
        <td>Regular house blend, decaffeinated coffee, or flavor of the day.<br>Endless Cup $".$row['single_price']." <input type='text' name='java_price' placeholder='update'></td>
    </tr>";
 $query = "select * from Prices where productid = 2";
 $result = $db->query($query);
 $row = $result->fetch_assoc();
 echo "<tr>
        <td id='cheBox'><input type='checkbox' name='lait_update'></td>
        <th>Cafe au Lait</th>
        <td>House blended coffee infused into a smooth, steamed milk.<br>Single $".$row['single_price']." <input type='tex' name='lait_single_price' placeholder='update'> Double $".$row['double_price']." <input type='text' name='lait_double_price' placeholder='update'></td>
    </tr>";
 $query = "select * from Prices where productid = 3";
 $result = $db->query($query);
 $row = $result->fetch_assoc();
 echo "<tr>
        <td id='cheBox'><input type='checkbox' name='capp_update'></td>
        <th>Iced Cappuccino</th>
        <td>Sweetened espresso blended with icy-cold milk and served in a chilled glass.<br>Single $".$row['single_price']." <input type='text' name='capp_single_price' placeholder='update'> Double $".$row['double_price']." <input type='text' name='capp_double_price' placeholder='update'></td>
    </tr>";
 $result->free();
 $db->close();
?>