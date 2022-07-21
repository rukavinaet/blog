
<a href="/<?php echo $row_this['AID'] ?>" style="text-decoration: none;color:inherit;display: contents;">
        <div class="this-article-block">
                <div class="this-article-block-inner">
                        <p style="margin-bottom:20px;font-size: .9em;opacity:60%;display:inline-block;text-transform:uppercase;"><?php echo $row_this['ACATID'] ?></p>
                        <p class="mobilesmall" style="font-size: .9em;opacity:60%;display:inline-block;color:red;text-transform:uppercase;"><?php echo date('F j',  strtotime($row_this['ADate']))  ?></p>
                        <div class="this-article-content">
                                <p class="title" style="max-width: 150px;
word-break: break-word;"><?php echo $row_this['ATitle'] ?></p>
                                <img src="/uploads/<?php echo $row_this['AImage'] ?>" alt="">
                        </div>


                </div>
                
                

        </div>
</a>