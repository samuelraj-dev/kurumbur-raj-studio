<?php

if (isset($_POST["submit"]) && isset($_POST["imgUpload"])) {
    echo "<pre>";
    print_r($_FILES["imgUpload"]);
    echo "</pre>";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];
}
else{
    echo "error";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pubertyFunction</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="imgUpload"></input>
        <input type="submit" name="submit" value="upload">
    </form>
</body>
</html>