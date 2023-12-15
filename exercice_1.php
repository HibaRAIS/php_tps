

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="testexercice1.php" enctype="multipart/form-data">
     <!-- On limite le fichier à 1Mo -->
     <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
     Fichier : <input type="file" name="pdfFile">
     <input type="submit" name="submit" value="Envoyer le fichier">
</form>
</body>
</html>