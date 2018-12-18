<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



echo '
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>CSS MenuMaker</title>
</head>
<body>

<div id="cssmenu">
    <ul>
   <li><a href="#"><span>Home</span></a></li>
   <li class="active has-sub2"><a href="#"><span>Products</span></a>
      <ul>
         <li class="has-sub"><a href="#"><span>Product 1</span></a>
            <ul>
               <li><a href="#"><span>Sub Product</span></a></li>
               <li class="last"><a href="#"><span>Sub Product</span></a></li>
            </ul>
         </li>
         <li class="has-sub"><a href="#"><span>Product 2</span></a>
            <ul>
               <li><a href="#"><span>Sub Product</span></a></li>
               <li class="last"><a href="#"><span>Sub Product</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href="#"><span>About</span></a></li>
   <li class="last"><a href="#"><span>Contact</span></a></li>
</ul>
</div>

</body>
<html>
';
echo'<form action = "realizarcopia.php" method = "POST">
    
<input type="radio" name="rbases" value="0" checked="checked" /> Todas las BD <br><br>
<input type="radio" name="rbases" value="0"  /> Una sola BD  
<input type="text" name="tbases" value="" /> <br><br>
<input type="submit" value="realizar" name="realizar" /><br>
</form>';