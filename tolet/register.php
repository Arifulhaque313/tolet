<?php
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,"tolet");
    $query="insert into users values (null,'$_POST[email]','$_POST[name]',$_POST[number],'$_POST[password]','$_POST[option]')";

    $query_run=mysqli_query($connection,$query);


?>

<script type="text/javascript">

    alert("Registration Successful")
    window.location.href="index.php";
</script>