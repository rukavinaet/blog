<a href="/<?php echo $row_similar['AID'] ?>" style="text-decoration: none;color:inherit;display: contents;">
        <div class="article-block">
                        <img src="uploads/<?php echo $row_similar['AImage'] ?>" alt="">
                        <div class="article-block-inner">
                                <p style="font-size: .9em;opacity:60%;"><?php echo $row_similar['ACATID'] ?></p>
                                <p class="mobilesmall" style="
                padding-block: 10px;text-transform:capitalize;word-break: break-word;"><?php echo $row_similar['ATitle'] ?></p>


                        </div>
                        <a style="display: flex;justify-content: space-between;padding-inline:30px;margin-bottom:10px;text-decoration:none;" href="/<?php echo $row_similar['AID'] ?>">
                                <p style="margin-block:auto;color:black;">12.05.2022.</p><img style="width: 30px;
                margin: 10px" src="/static/arrow.svg" alt=""></a>
                

        </div>
</a>