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
        <p class="t cent botli">校園映像資料管理</p>
        <form method="post" action="./api/edit.php">
            <table width="100%" class="cent">
                <tbody>
                    <tr class="yel">
                        <td width="45%">校園映像資料圖片</td>
                        <td width="7%">顯示</td>
                        <td width="7%">刪除</td>
                        <td width="23%"></td>
                    </tr>
                    <?php
                    // 計算資料庫有幾筆資料
                    $total=$Image->count();
                    // 一頁顯示3筆資料
                    $div=3;
                    // 總共需要的頁數
                    $pages=ceil($total/$div);
                    // 如果沒有GET p就當作是第一頁
                    $now=$_GET['p']??1;
                    // 開始的那一筆資料 會是哪一個索引
                    $start=($now-1)*$div;
                    // 從start開始抓 抓div筆資料
                    
                    $rows=$Image->all(" limit $start,$div");
                    foreach($rows as $row):
                    ?>
                    <tr>
                        <td>
                            <img src="./upload/<?=$row['img'];?>" alt="" style="width: 100px;height:68px">
                        </td>
                        <td>
                            <input type="checkbox" name="sh[]" value="<?=$row['id'];?>"
                                <?=$row['sh']==1?'checked':'';?>>
                        </td>
                        <td width="7%">
                            <input type="checkbox" name="del[]" value="<?=$row['id'];?>">
                        </td>
                        <td>
                            <input type="button" value="更換圖片"
                                onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/update_<?=$do;?>.php?id=<?=$row['id'];?>&table=<?=$do;?>&#39;)">
                        </td>
                        <input type="hidden" name="id[]" value="<?=$row['id'];?>">
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <table style="margin-top:40px; width:70%;">
                <tbody>
                    <tr>
                        <td width="200px"><input type="button"
                                onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;./modal/<?=$do;?>.php&#39;)"
                                value="新增校園映像圖片"></td>
                        <td class="cent">
                            <input type="hidden" name="table" value="<?=$do;?>">
                            <input type="submit" value="修改確定">
                            <input type="reset" value="重置">
                        </td>
                    </tr>
                </tbody>
            </table>

        </form>
    </div>
</div>