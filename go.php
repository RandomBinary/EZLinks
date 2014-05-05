<?php

include('./config/config.php');
$id = $_GET['i'];
$link = mysqli_connect($mysql_host, $mysql_user, $mysql_password);
mysqli_select_db($link,$mysql_db);
$result = mysqli_query($link,"SELECT * FROM urls WHERE id='$id'");  
$count=mysqli_num_rows($result);
if ($count == 1){
    $row = mysqli_fetch_array( $result );
    header('Location:' . $row["url"] . '');
    mysqli_close($link);
}else{
    echo "<Center><font color='red'>No such link was found in our database!</font><Br>";
    echo "Perhaps you would like to <a href='index.php'>shorten it</a>? ;)</center>";
    mysqli_close($link);
}

?>