<!DOCTYPE html>
<html>
    <head>
        <title>Follow button</title>
        <style>
            body {
                margin: 0px;
                background: transparent;
                border-radius: 12px;
                color: #888888;
                font-family: Tahoma;    
                font-size: 11px;
            }
            div {
                float: left;
            }
            .btn {
                
                background: #EEEEEE;
                background: -webkit-linear-gradient(90deg, #eeeeee, #ffffff);
                border: 1px solid #aaaaaa;
                overflow: hidden;
                height: 16px;
                border-radius: 2px;
                box-sizing: border-box;
                padding-left: 2px;  
                padding-right: 2px;
            }
            img {
                margin-right: 2px;
            }
            .counter {
                float: left;
                background: white;
                height: 14px;
                border: 1px solid #aaaaaa;
            }
                
        </style>
    </head>
    <body>
         <?php echo $this->fetch('content'); ?>
    </body>
</html>
        

