<h3 class="cent">更新標題區圖片</h3>
<hr>
<form action="api/update_title.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>標圖區圖片：</td>
            <td>
                <input type="file" name="img" id="img">
            </td>
        </tr>
    </table>
    <div class="cent">
        <input type="submit" value="更新">
        <input type="reset" value="重置">
        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
    </div>
</form>