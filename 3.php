<?php

include('./config/config.php');
$url = $_GET['url'];
$link = mysqli_connect($mysql_host, $mysql_user, $mysql_password);
mysqli_select_db($link,$mysql_db);
$result = mysqli_query($link,"SELECT * FROM urls WHERE url='$url'");  
$count=mysqli_num_rows($result);
if ($count !== 0){
    $row = mysqli_fetch_array( $result );
    mysqli_close($link);
    echo "<center><font color='green'>This link is now in our database! :D</font>";
    echo "<br>URL: " . $installDir . "go.php?i=" . $row['id'] . "</center>";
}else{
    echo "<Center><font color='red'>The url $url , is not in our database!</font>";
    mysqli_close($link);
}

?>

