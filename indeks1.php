<!Doctype php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Witaj <?php echo $_POST["imie"] || $_POST["nazwisko"]; ?>
</body>
</html>