<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product ADD</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/function.js"></script>
    <link rel="stylesheet" href="style/desgin.css">
</head>
<body>
    <header>
        <div class="title-box">
            <h1>Product Add</h1>
            <div class="Button-title">
                <button type="submit">Save</button>
                <button><a href="index.php">Cancel</a></button>
            </div>
        </div>
    </header>
    <main>
        <div class="form-box">
            <form action="php/productupdate.php" method="POST">
                <div class="field">
                    <label for="sku">Sku</label>
                    <div class="control">
                        <input type="text" id="sku" name="skuu" placeholder="Descripción" require>
                    </div>
                </div>
                <div class="field">
                    <label for="nombre">Name</label>
                    <div class="control">
                        <input type="text" id="name" name="namee" placeholder="Nombre" require>
                    </div>
                </div>
                <div class="field">
                    <label for="descripcion">Price $</label>
                    <div class="control">
                        <input type="number" id="price" name="pricee" placeholder="Precio" require>
                    </div>
                </div>
                <div class="field-container">
                    <select id="select" name="typee[]" required>
                        <option value="">Seleccione una opcion</option>
                        <option value="prod-DVD">DVD</option>
                        <option value="prod-Book">BOOK</option>
                        <option value="prod-Furniture">FURNITURE</option>
                    </select>
                    <div id="father">
                        <div id="prod-DVD">
                            <p><label for="">Size (MB)</label></p>
                            <p><input type="number" name="sizee" require></p>
                        </div>
                        <div id="prod-Book">
                            <p><label for="">Weight (Kg)</label></p>
                            <p><input type="number" name="weightt" require></p>
                        </div>
                        <div id="prod-Furniture">
                            <p><label for="">Height (Cm)</label></p>
                            <p><input type="number" name="heightt" require></p>
                            <p><label for="">Width (Cm)</label></p>
                            <p><input type="number" name="widthh" require></p>
                            <p><label for="">Length (Cm)</label></p>
                            <p><input type="number" name="lengthh" require></p>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <div class="footer-box">
            <h3>Scandiweb Test assigment</h3>
        </div>
    </footer>
</body>
</html>