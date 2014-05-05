<?php

include('./config/config.php');
$url = $_POST['url'];
$link = mysqli_connect($mysql_host, $mysql_user, $mysql_password);
mysqli_select_db($link,$mysql_db);
$result = mysqli_query($link,"SELECT * FROM urls WHERE url='$url'");  
$count=mysqli_num_rows($result);
if ($count !== 0){
    $row = mysqli_fetch_array( $result );
    mysqli_close($link);
    echo "<center><font color='red'>This link already exists in our database!</font>";
    echo "<br>URL: " . $_SERVER['SERVER_ADDR'] . "/go/?i=" . $row['id'] . "</center>";
}else{
    $row = mysqli_fetch_array( $result );
mysqli_query($link,"INSERT INTO urls (url)
VALUES ('$url')");
    echo "<Center><font color='green'>The url $url , was successfully added to the database!</font>";
	echo '<meta http-equiv="refresh" content="0; url=3.php?url=' . $url . '" />';
    mysqli_close($link);
}

?>