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
                background: #fcfcfc; /* Old browsers */
background: -moz-linear-gradient(top,  #fcfcfc 0%, #e2e2e2 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fcfcfc), color-stop(100%,#e2e2e2)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #fcfcfc 0%,#e2e2e2 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #fcfcfc 0%,#e2e2e2 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #fcfcfc 0%,#e2e2e2 100%); /* IE10+ */
background: linear-gradient(to bottom,  #fcfcfc 0%,#e2e2e2 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcfcfc', endColorstr='#e2e2e2',GradientType=0 ); /* IE6-9 */
                box-shadow:inset 0px 1px 1px #ffffff;
                border: 1px solid #aaaaaa;
                overflow: hidden;
                height: 20px;
                border-radius: 2px;
                box-sizing: border-box;
                padding-left: 2px;  
                padding-right: 2px;
            padding-top: 2px;
            }
            img {
                margin-right: 2px;
                margin-left: -5px;
            }
            .counter {
                float: left;
                background: white;
                height: 18px;
                border-right: 1px solid #dddddd;
                border-top: 1px solid #dddddd;
                border-bottom: 1px solid #dddddd;
                margin: 0px;
                margin-left: -1px;
                border-radius: 2px;
            }
            a {
                color:#555555;
            }
                .eX {
        background-image: url('/img/eX.png');
        width: 6px;
        height: 20px;
    }
        #label {
            margin-left: 3px;
        }
            .joyified {
                border-top:0px 1px 1px #aaff33;
               background: #9fe100; /* Old browsers */
background: -moz-linear-gradient(top, #9fe100 0%, #77a800 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#9fe100), color-stop(100%,#77a800)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top, #9fe100 0%,#77a800 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top, #9fe100 0%,#77a800 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top, #9fe100 0%,#77a800 100%); /* IE10+ */
background: linear-gradient(to bottom, #9fe100 0%,#77a800 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#9fe100', endColorstr='#77a800',GradientType=0 ); /* IE6-9 */
    color: #ffffff;
            text-shadow:0px -1px 0px #00aa00;

            }
.joyified > .joyified { 
        background: transparent;
        border: none;
        box-shadow: none;
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
        

