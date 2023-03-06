<?php
include "condb.php";
?>

<table>
    <thead>
        <tr>
            <td>#</td>
            <td>NAME</td>
            <td>LASE NAME</td>
            <td></td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM tb_student ORDER BY std_id ASC";
        $result = mysqli_query($link,$sql);
        while($row = mysqli_fetch_assoc($result)){
        ?>
            <tr>
                <td><?= $row['STD_ID'] ?></td>
                <td><?= $row['STD_NAME'] ?></td>
                <td><?= $row['STD_SNAME'] ?></td>
                <td><button class="btn_edit" data="<?= $row['STD_ID'] ?>">Edit</button></td>
                <td><button class="btn_del" data="<?= $row['STD_ID'] ?>">DEL</button></td>
            </tr>
        <?php
        }    //while
        ?>
    </tbody>
</table>

<script>
    $(".btn_del").click(function() {
        //alert($(this).attr('data'));
        let id_val = $(this).attr('data');
        $.ajax({
            url:"std_del.php",
            method: "GET",
            data:{
                id:id_val
            },
            success: function (res){
              $("#div_res").html(res);
            }
        });
    });
</script>