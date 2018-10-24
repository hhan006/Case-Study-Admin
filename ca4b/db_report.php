<?php
$radio = $_POST['radiobtn'];

function find_sales_by_product($id){
    @ $db = new mysqli('localhost', 'f36ee', 'f36ee', 'f36ee');
    if (mysqli_connect_errno()) {
        echo "Error: Could not connect to database.  Please try again later.";
        exit;
    }
    $date = date("Y-m-d");
    $query = "select * from sales where productid = ".$id." and transaction_date = '".$date."'";
    $result = $db->query($query);

    $num_results = $result->num_rows;

    $sales = 0;
    $name;

    for($i=0; $i<$num_results; $i++) {
        $row = $result->fetch_assoc();
        $sales = $sales + $row['sales'];

    }

    switch ($id){
        case 1:
            $name = "Just Java";
            break;
        case 2:
            $name = "Cafe au Lait";
            break;
        case 3:
            $name = "Iced Cappuccino";
            break;
    }
    
    $sales = number_format($sales, 2);

    echo    "<tr>
                <td>".$id."</td>
                <td>".$name."</td>
                <td>$".$sales."</td>
            </tr>";

    $result->free();
    $db->close();
}

function find_sales_by_category($category){
    @ $db = new mysqli('localhost', 'f36ee', 'f36ee', 'f36ee');
    if (mysqli_connect_errno()) {
        echo "Error: Could not connect to database.  Please try again later.";
        exit;
    }
    $date = date("Y-m-d");
    $query = "select * from sales where category = '".$category."' and transaction_date = '".$date."'";
    $result = $db->query($query);
    $num_results = $result->num_rows;

    $quant = 0;
    $sales = 0;

    for($i=0; $i<$num_results; $i++) {
        $row = $result->fetch_assoc();
        $sales = $sales + $row['sales'];
        $quant = $quant + $row['quantity'];
    }
    $sale = number_format($sales, 2);

    if ($category == 'single') {
        echo "<tr>
                <td>Single Shot</td>
                <td>".$quant."</td>
                <td>$".$sale."</td>
            </tr>";
    } else {
        echo "<tr>
                <td>Double Shots</td>
                <td>".$quant."</td>
                <td>$".$sale."</td>
            </tr>";
    }

    $result->free();
    $db->close();
    return $sales;
}


if ($radio == 'dollarSales') {
    echo "<h2>Total dollar sales by products: </h2>
	        
	            <table border='1'>
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Total Dollar Sales</th>
                    </tr>";
                    $java_sales = find_sales_by_product(1);
                    $lait_sales = find_sales_by_product(2);
                    $capp_sales = find_sales_by_product(3);
    echo        "</table>";
} else {

    echo "<h2>Sales quantities by product categories: </h2>
	        
	            <table border='1'>
                    <tr>
                        <th>Product Categories</th>
                        <th>Sales Quantities</th>
                        <th>Dollar Sales</th>
                    </tr>";

    $single_sales = find_sales_by_category('single');
    $double_sales = find_sales_by_category('double');
              
    echo "      </table>";

    if ($single_sales>$double_sales) {
        echo "<h3>Single Shot has achieved the higher dollar sales!</h3>";
    } else if ($single_sales<$double_sales) {
        echo "<h3>Double Shots has achieved the higher dollar sales!</h3>";
    } else {
        echo "<h3>Same dollar sales in both categories!</h3>";
    }
}

?>