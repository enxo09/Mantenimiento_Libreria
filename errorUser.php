<?php


 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>ERROR USUARIO INVALIDO</title>
   </head>
   <body>
     <style media="screen">

     body{
       background-color: #333;
     }

     .box{
       text-align: center;
       color: black;
       margin: 100px auto;
       background-color: grey;
       width: 500px;
       height: 160px;
       border: 4px solid black;
       border-radius: 4px;
     }

     h1{
        font-family: arial;
        font-size: 24px;
     }

     h2{
        font-size: 16px;
        font-family: arial;
     }

     .btn{
        font-style: italic;
        color: white;
        background-color: #333;
        font-family: arial;
        border-radius: 4px;
        height: 40px;
        border: 2px solid red;
     }
     </style>
     <div class="box">
        <h1>Error!: usuario no autorizado para ver este contenido</h1>
        <h2>No esta autorizado para ver este contenido por favor ingrese un usuario valido</h2>
        <button type="button" name="backLogin" class="btn" onclick="window.location.href='index.php';">Regresar al ingreso del sistema</button>
     </div>
   </body>
 </html>
