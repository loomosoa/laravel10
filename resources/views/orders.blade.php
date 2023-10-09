<html>
    <head></head>
    <body>
    <form method="POST" action="/orders">
        @csrf
        <label for="item">Товар:</label>
        <input type="text" id="item" name="item"><br><br>

        <label for="price">Цена:</label>
        <input type="text" id="price" name="price"><br><br>

        <input type="submit" value="Submit">

    </form>

    </body>
</html>
