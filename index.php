<?php
error_reporting(E_ALL);
set_error_handler('myHandler');
function myHandler($code, $msg, $file, $line)
{
    ob_end_clean();
    echo '<br>';
    echo implode('<br>', [$code, $msg, "$file:$line"]);
    die();
}
ob_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Hello World!</title>
    <meta charset="utf-8">
    <link rel="schortcut icon" href="/images/favicon.png" type="image/png"/>
</head>
<body>
<?php
echo '</br>';
echo '
<form method="post">
<input type="text" name="form" placeholder="Enter the string">
<button>PUSH</button>
</form>';
if (empty($_POST['form'])) {
    exit('You dont entered the string');
} else {
    $a = 0;
    $c = strlen($_POST['form']);
    while ($c > 0) {
        $a++;
        $c--;
        echo $a, " ", $_POST['form'][$c], '<br>';
    }
}
?>
</body>
</html>


<?php
ob_end_flush();
