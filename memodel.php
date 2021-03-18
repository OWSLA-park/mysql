<?
include 'inc\lib.php';

$idx = $_GET['idx'];

$query = "delete from memo where idx='$idx'";

mysqli_query($connect, $query);

?>
<script>
    location.href = 'memo.php';
</script>