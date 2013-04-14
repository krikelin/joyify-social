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
                padding: 0px;
                padding-left: -14px;
                background: #EEEEEE;
                background: -webkit-linear-gradient(90deg, #eeeeee, #ffffff);
                border: 1px solid #aaaaaa;
                overflow: hidden;
                height: 20px;
                border-radius: 2px;
                box-sizing: border-box;
                padding-left: 2px;  
                padding-right: 2px;
            }
            img {
                margin-right: 2px;
                margin-left: -5px;
            }
            .counter {
                float: left;
                background: white;
                height: 18px;
                border-right: 1px solid #cccccc;
                border-top: 1px solid #cccccc;
                border-bottom: 1px solid #cccccc;
                margin: 0px;
                margin-left: -1px;
            }
                .eX {
        background-image: url('/img/eX.png');
        width: 6px;
        height: 20px;
    }
    .counter {
        min-width:16px;
        text-align: center;
    }   
        </style>
    </head>
    <body>
         <?php echo $this->fetch('content'); ?>
    </body>
</html>
        

