<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>404</title>

         <!-- GOOGLE FONTS -->

         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    </head>
    <style>
        *{
            box-sizing:border-box;
            margin:0;
            padding:0;
            font-family: 'Montserrat', sans-serif;
        }

        .textRed{
            font-size:34px;
            font-weight: 500
        }
        .textRed::after{
            content:"";
            position:absolute;
            bottom:-5px;
            left:0;
            width:100%;
            height:5px;
            background: #E32026;
        }
    </style>
    <body>
        

        <div style="display:flex;flex-direction:row;width:100vw;height:100vh;padding:10px;">
            <div style="background:#fff;width:45%;display: flex;justify-content: center;align-items: center;flex-direction: column;align-content: center;padding:0 60px">
                <<embed src='/resources/assets/img/logo.svg'>
                <h2 style="text-transform:uppercase;text-align:center;color:#E32026;font-size:84px;margin-top:10px">ne pare rău!</h2>
            </div>
            <div style="background:#2F2F2F;width:55%;display:flex;flex-direction:column;justify-content:center;overflow:hidden;">
                <span style="color:#fff;text-transform:uppercase;width:100%;text-align:right;position:relative;float:right;margin-bottom:50px;" ><span style="width:max-content;position:relative;padding-right:30px;" class="textRed">această pagină nu există</span></span>
                <span style="color:#E32026;text-transform:uppercase;width:100%;text-align:center;font-size:250px;font-weight:700">404</span>
                <span style="color:#fff;text-transform:uppercase;width:100%;text-align:left;position:relative;float:left;margin-top:50px;" ><span class="textRed" style="padding-left:80px;width:max-content;position:relative;">vă rugăm reveniți!</span></span>
            </div>
        </div>



        

    </body>
</html>