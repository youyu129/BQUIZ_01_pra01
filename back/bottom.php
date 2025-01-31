<div class="di"
    style="height:540px; border:#999 1px solid; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
    <!--正中央-->
    <table width="100%">
        <tbody>
            <tr>
                <td style="width:70%;font-weight:800; border:#333 1px solid; border-radius:3px;" class="cent"><a
                        href="?do=admin" style="color:#000; text-decoration:none;">後台管理區</a>
                </td>
                <td><button onclick="document.cookie=&#39;user=&#39;;location.replace(&#39;?&#39;)"
                        style="width:99%; margin-right:2px; height:50px;">管理登出</button></td>
            </tr>
        </tbody>
    </table>
    <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
        <p class="t cent botli">頁尾版權資料管理</p>
        <form method="post" action="./api/update_one.php">
            <div class="cent">
                <div style="background:#F3DA49;width:120px;display:inline-block;">
                    頁尾版權資料：
                </div>
                <?php
                $row=$Bottom->find(1);
                
                ?>
                <div style="width:200px;display:inline">
                    <input type="text" name="bottom" value="<?=$row['bottom'];?>">
                </div>
            </div>
            <div class="cent" style="margin-top:100px">
                <input type="hidden" name="table" value="bottom">
                <input type="submit" value="修改確定"
                    onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./api/update_<?=$do;?>.php&#39;)">
                <input type="reset" value="重置">
            </div>
        </form>
    </div>
</div>