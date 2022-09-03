<?php
    

    @$conexion = mysqli_connect('localhost','root','','scandiweb') or exit("Error en la conexion.");

    $prodcutsku =  $_POST['skuu'];
    $prodcutname = $_POST['namee'];
    $prodcutprice = $_POST['pricee'];
    $prodcuttype = $_POST['typee'];
        for($i=0; $i<count($prodcuttype);$i++){
            $productSelected = $prodcuttype[$i]; 
        }
    $prodcutsize =  $_POST['sizee'];
    $prodcutweight =  $_POST['weightt'];
    $prodcutheigth =  $_POST['heightt'];
    $prodcutwidth =  $_POST['widthh'];
    $prodcutlength =  $_POST['lengthh'];    

        if($productSelected == 'prod-DVD'){
            
            echo "<h2>aca esta el DVD</h2>";
            $consulta_alta1 = "INSERT INTO `shop`(skuu, namee, pricee, typee, sizee, weightt, heightt, widthh, lengthh) VALUES ('$prodcutsku','$prodcutname','$prodcutprice','$productSelected','$prodcutsize', 0, 0, 0, 0); ";
            $consulta = mysqli_query($conexion,$consulta_alta1);
            echo "<h3>Valor ingresado: $prodcutsku</h3>";
            echo "<h3>Valor ingresado: $prodcutname</h3>";
            echo "<h3>Valor ingresado: $prodcutprice</h3>";
            echo "<h3>Valor ingresado: $productSelected</h3>";
            echo "<h3>Valor ingresado: $prodcutsize</h3>";
            echo "<a href='../index.php'>Go to the index.</a>";
        }else if($productSelected == 'prod-Book'){
            echo "<h2>aca esta el Book</h2>";
            $consulta_alta1 = "INSERT INTO `shop`(skuu, namee, pricee, typee, sizee, weightt, heightt, widthh, lengthh) VALUES ('$prodcutsku','$prodcutname','$prodcutprice','$productSelected', 0, '$prodcutweight', 0, 0, 0); ";
            $consulta = mysqli_query($conexion,$consulta_alta1);
            echo "<h3>Valor ingresado: $prodcutsku</h3>";
            echo "<h3>Valor ingresado: $prodcutname</h3>";
            echo "<h3>Valor ingresado: $prodcutprice</h3>";
            echo "<h3>Valor ingresado: $productSelected</h3>";
            echo "<h3>Valor ingresado: $prodcutweight</h3>";
            echo "<a href='../index.php'>Go to the index.</a>";
        }else if($productSelected == 'prod-Furniture'){
            echo "<h2>aca esta el Furniture</h2>";
            $consulta_alta1 = "INSERT INTO `shop`(skuu, namee, pricee, typee, sizee, weightt, heightt, widthh, lengthh) VALUES ('$prodcutsku','$prodcutname','$prodcutprice','$productSelected', 0, 0, $prodcutheigth, $prodcutwidth, $prodcutlength); ";
            $consulta = mysqli_query($conexion,$consulta_alta1);
            echo "<h3>Valor ingresado: $prodcutsku</h3>";
            echo "<h3>Valor ingresado: $prodcutname</h3>";
            echo "<h3>Valor ingresado: $prodcutprice</h3>";
            echo "<h3>Valor ingresado: $productSelected</h3>";
            echo "<h3>Valor ingresado: $prodcutheigth</h3>";
            echo "<h3>Valor ingresado: $prodcutwidth</h3>";
            echo "<h3>Valor ingresado: $prodcutlength</h3>";
            echo "<a href='../index.php'>Go to the index.</a>";
        };
        
?>