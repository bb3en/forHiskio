<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>

        </style>
        <script>
         function getCalcFoot(){
             var n = document.getElementById("floor").value;
             console.log(n);
            $.ajax({
               type:'get',
               url:'/api/calcfoot?n=' + n,
               success:function(result){
                document.getElementById("msg").innerHTML=result;
               }
            });
         }
         </script>


    </head>
    <body>
        <div class="flex-center position-ref full-height">
        問題一： 您正在爬樓梯，樓梯具有 n 層階梯，您可以一次爬 1 層階梯，或是一次爬 2 層階梯，請問 n 層階梯有多少種方法可以登頂？
        <br/><br/>
        答: 2^(n-1)個方法
        <br/><br/>
        輸入層數<input type="text" name="floor" id="floor"/> <button onclick="getCalcFoot()">計算</button>
        <br/><br/>
        結果:
         <div id='msg'></div>
        </div>
    </body>
</html>
