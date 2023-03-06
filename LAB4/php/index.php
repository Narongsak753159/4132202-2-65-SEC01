<?php
echo "Hello PHP";
//phpinfo();

$num = 10;
$name = "Win"; 

echo "GET : " . $_GET['name'];
echo "POST : " . $_POST['pass'];

?>

<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td><?php echo $name ?></td>
        </tr>
        <?php
            for ($i = 2; $i < 5; $i++){
        ?>
        <tr>
            <td>2</td>
            <td><?= $name ?></td>
            </tr>
        <?php
            }
        ?>
    </tbody>
</table>