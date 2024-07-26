
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #comment{
            border-radius: 10px;
        }
    </style>
</head>
<body>
    
    <form action="db.php" method="post">
     <center> <table>
    <?php
$host="localhost";
$user="root";
$password="";
$db="db";

$conn=mysqli_connect($host,$user,$password,$db);
$sql="SELECT * from comment";
$r=mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($r)){
    ?>
    <tr>
        <td><?php
    echo $row['ID']?><?php echo $row['comment'];?>
    </td>
</tr>
<?php
}
?>
<tr>
    <td colspan="2">
        <textarea name="comment" id="comment" cols="30" rows="3" placeholder="add comment" required></textarea>
        <input type="submit" name="send" value="send">
</td>
</tr>
</table></center>
    </form>

</body>
</html>