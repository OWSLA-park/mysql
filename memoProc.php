<?php
include 'inc\lib.php';

$name = $_GET['name'];
$memo = $_GET['memo'];
$date = date("y-m-d H-i-s");

$query ="insert into memo(name, memo, regdate) values('$name', '$memo', '$date')";


mysqli_query($connect, $query);

?>
<script>
location.href='memo.php';
</script>
