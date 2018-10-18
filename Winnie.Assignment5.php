<html>
    <head>
        <meta charset="UTF-8">
        <title>Assignment5</title>
        <link href="a5style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
        if ($_FILES["File1"]["error"] > 0) {
            echo "<p>There was an error uploading your file \nERROR: <span>" . $_FILES["File1"]["error"]."</span></p>";
        }
        if ($_FILES["File1"]["type"] != "image/png" && $_FILES["File1"]["type"] != "image/jpeg") {
            echo "<p>Only .PNG or .JPEG format allowed, but you uploaded: <span>" . $_FILES["File1"]["type"]."</span></p>";
        } else {
            echo "<h2>Your upload</h2>";
            echo "<p>Name: <span>" . $_FILES["File1"]["name"] . "</span></p><br>";
            echo "<p>Size: <span>" . $_FILES["File1"]["size"] . "</span> bytes</p><br>";
            echo "<p>Type: <span>" . $_FILES["File1"]["type"] . "</span></p><br>";
        }
        ?>
    </body>
</html>


