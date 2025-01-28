<?php
include_once "../api/db.php";

$rows=$Menu->all(['main_id'=>$_GET['id']]);
?>

<h3 class="cent">編輯次選單</h3>
<hr>
<form action="api/submenu.php" method="post" enctype="multipart/form-data">
    <table class="cent" style="width:70%;margin:auto;">
        <thead>
            <tr>
                <th>次選單名稱</th>
                <th>次選單連結網址</th>
                <th>刪除</th>
            </tr>
        </thead>
        <tbody id="moreSubmenu">
            <?php
            foreach($rows as $row){
            

            ?>
            <tr>
                <td>
                    <input type="text" name="text[]" id="text" value="<?=$row['text'];?>">
                </td>
                <td>
                    <input type="text" name="herf[]" id="herf" value="<?=$row['href'];?>">
                </td>
                <td>
                    <input type="checkbox" name="del[]" id="del" value="<?=$row['id'];?>">
                </td>
                <input type="hidden" name="id[]" value="<?=$row['id'];?>">
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <div class="cent">
        <input type="submit" value="修改確定">
        <input type="reset" value="重置">
        <input type="button" value="更多次選單" onclick="more()">
    </div>
</form>

<script>
function more() {
    let row = `
                <tr>
                <td>
                    <input type="text" name="text" id="text">
                </td>
                <td>
                    <input type="text" name="herf" id="herf">
                </td>
                <td>
                    <input type="checkbox" name="del[]" id="del">
                </td>
            </tr>
    `
    $("#moreSubmenu").append(row)
}
</script>