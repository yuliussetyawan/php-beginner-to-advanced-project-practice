<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./handle.php" method="post">
        <input type="text" name="name" placeholder="please specify your name">
        <br>
        <input type="text" name="emai" placeholder="please specify your email">
        <br>
        <textarea name="message" id="" cols="30" rows="10" placeholder="please write your message here"></textarea>
        <br>
        <input type="submit" />
    </form>

    <?php
    if (!empty($_GET['submitted'])){
        if($_GET['submitted'] == 'false'){
            echo "all the fields are required";
        } else{
            echo "your form has been submitted succesfully";
        }
    }
    ?>

</body>

</html>