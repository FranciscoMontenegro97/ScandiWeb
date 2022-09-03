<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prodcut List</title>
    <link rel="stylesheet" href="style/desgin.css">
</head>
<body>
    <header>
        <div class="title-box">
            <h1>Product List</h1>
            <div>
                <button><a href="product-add.php">ADD</a></button>
                <input name="delete" type="submit" id="delete" value="Delete">
            </div>
        </div>
    </header>
    <main>
        <!-- GUARDAR LOS VALORES EN UNA VARIABLE Y DESPUES MOSTRARLA EN LA TABLA DE HTML-->
        <div class="main-box">
                <?php
                    $username = "root"; 
                    $password = ""; 
                    $database = "scandiweb";
                    $tbl_name= "shop"; 
                    $mysqli = new mysqli("localhost", $username, $password, $database); 
                    $query = $mysqli->query("SELECT * FROM shop");
                    while ($row = $query->fetch_assoc()) {
                        if($row['typee'] == 'prod-DVD'){
                            echo        "<div>
                                            <h3>Product</h3>
                                            <input name='checkbox[]' type='checkbox' id='checkbox[]' value=".$row['id'].">
                                            <p>Sku: ".$row['skuu']."</p>
                                            <p>Name: ".$row['namee']."</p>
                                            <p>Type: DVD</p>
                                            <p>Price: ".$row['pricee']."</p>
                                            <p>Size: ".$row['sizee']."</p>
                                        </div>";
                        }else if($row['typee'] == 'prod-Book'){
                            echo        "<div>
                                            <h3>Product</h3>
                                            <input name='checkbox[]' type='checkbox' id='checkbox[]' value=".$row['id'].">
                                            <p>Sku: ".$row['skuu']."</p>
                                            <p>Name: ".$row['namee']."</p>
                                            <p>Type: Book</p>
                                            <p>Price: ".$row['pricee']."</p>
                                            <p>Weigth: ".$row['weightt']."</p>
                                        </div>";
                        }else if($row['typee'] == 'prod-Furniture'){
                            echo        "<div>
                                            <h3>Product</h3>
                                            <input name='checkbox[]' type='checkbox' id='checkbox[]' value=".$row['id'].">
                                            <p>Sku: ".$row['skuu']."</p>
                                            <p>Name: ".$row['namee']."</p>
                                            <p>Type: Furniture</p>
                                            <p>Price: ".$row['pricee']."</p>
                                            <p>Heigth: ".$row['heightt']."</p>
                                            <p>Width: ".$row['widthh']."</p>
                                            <p>Length: ".$row['lengthh']."</p>
                                        </div>";
                        };
                    };
                    if(isset($_POST['delete'])){
                        $checkbox = $_POST['checkbox'];
                        for($i=0;$i<count($_POST['checkbox']);$i++){
                        $del_id = $checkbox[$i];
                        $sql = "DELETE FROM shop WHERE id='$del_id'";
                        print $sql;
                        $result = $query;
                        };
                        
                        if($result){
                            echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
                        };
                    };
                    
                ?>
        </div>
    </main>
    <footer>
        <div class="footer-box">
            <h3>Scandiweb Test assigment</h3>
        </div>
    </footer>
</body>
</html>