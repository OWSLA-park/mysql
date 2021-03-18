<?
include 'inc\lib.php';

$idx = $_GET['idx'];
$memo = $_GET['memo'];

$query = "update memo set memo='$memo' where idx='$idx'";

mysqli_query($connect, $query);

?>
<script>
    location.href = 'memo.php';
</script>