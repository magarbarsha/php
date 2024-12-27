<?php
if(isset($_POST['upload'])){
    $file=$_FILES['image'];
    $filename=$file['name'];
    // 
    $tmp_name=$file['tmp_name'];
    $target_dir="./uploads/";
    $target_file=$target_dir.$filename;
    move_uploaded_file($tmp_name, $target_file);
    print_r($file);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="">
        <input type="submit" name="upload" value="upload">
    </form>
</body>
</html>