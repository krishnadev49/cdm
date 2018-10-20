<?php
include './connection.php';
$x=$_GET['x'];
$pp=  mysql_query("select * from district_tbl where state_id='$x'");

?>
<select name="di" class="form-control border">
    <option>--Choose--</option>
    <?php
    while($pp1=  mysql_fetch_row($pp))
    {
        ?>
    <option value="<?php echo $pp1[0]?>"><?php echo $pp1[2]?></option>
    <?php
    }
    ?>
</select>
