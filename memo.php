<?php
include 'inc\lib.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="memoProc.php">
            이름 :
            <input type="text" name="name" size="10"><br>
            메모 :
            <input type="text" name="memo" size="50"><br>
            <input type="submit" value="저장"><br>
        </form>
        <?php
$query = "select * from memo order by idx desc";

$result = mysqli_query($connect, $query);

?>

        <table border="1">
            <tr>
                <td>idx</td>
                <td>이름</td>
                <td>메모</td>
                <td>등록일</td>
                <td>삭제</td>
                <td>수정</td>
            </tr>

            <?
            while($data = mysqli_fetch_array($result)){            
                ?>

            <tr>
                <td><?=$data[idx]?></td>
                <td><?=$data[name]?></td>
                <td><?=$data[memo]?></td>
                <td><?=$data[regdate]?></td>
                <td><a href="memodel.php?idx=<?=$data[idx]?>" onclick="return confirm('정말 삭제할까요?')">삭제</a></td>
                <td><a href="#" onclick="editData('<?=$data[idx]?>');">수정</a></td>
            </tr>
            <?
            }
            ?>
        </table>

        <script>
        function editData(idx){
            var a = prompt('수정할 내용을 입력하세요.');
            location.href='memoedit.php?idx='+idx+"&memo="+a;
        }
        </script>

    </body>
</html>