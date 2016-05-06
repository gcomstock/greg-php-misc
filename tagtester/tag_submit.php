<?php
    ob_start(); // start trapping output
    $tag = @$_POST['tag'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ad tag</title>
    <!--<style>body{margin:0;}</style>-->
</head>
<body>
<?php echo $tag; ?>
</body>
</html>


<?php
    $output = ob_get_contents(); // get contents of trapped output
    //write to file, e.g.
    $newfile="testtag.html";
    $file = fopen ($newfile, "w");
    fwrite($file, $output);
    fclose ($file);
    ob_end_clean(); // discard trapped output and stop trapping

    //now that file is written, redirect to it
    header('Location: https://internal-www.savagebeast.com/users/gcomstock/tagtester/testtag.html');
?>