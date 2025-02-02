<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/books/store" method="post">
    @csrf
    <fieldset><legend>Documentation</legend>
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="description">description:</label><br>
    <textarea id="description" name="description"></textarea><br>
    <label for="price">Price:</label><br>
    <input type="text" id="price" name="price"><br>
    <label for="author">author:</label><br>
    <input type="text" id="author" name="author"><br>

    <input type="submit" id="save" name="save" value="save"><br>
    </fieldset>
</form>
</body>
</html>
