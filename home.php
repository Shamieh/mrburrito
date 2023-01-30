 <?php
require("connect.php");
session_start();
if(!isset($_SESSION['privilleged'])){
   header("location:index.php");
}
// var_dump($_SESSION); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="tacos, burristos, mexican food, mexican resturant, resturants in Amman, mexican, spicy food, mrburrito, mr burrito, mrburritos, mr burritos">
  <title>Home | Mr Burrito</title>
  <link rel="stylesheet" href="style2.css">
  <link rel="icon" type="image/x-icon" href="Mr._Burritos_logo-removebg.png">


</head>

<body>
  <header>
    <div>
      <img src="Mr._Burritos_logo-removebg.png" alt="Logo" class="logo">
    </div><br>
    <div class="headerContainer resNav">

      <nav>
        <ul>
          <li><a href="home.php" class="active">Home</a></li>
          <li><a href="cart.php">Cart</a></li>
          <li><a href="#bottom">Contact</a></li>
          <li><a href="logout.php">logout</a></li>

        </ul>
      </nav>
    </div>
  </header>



  <div class="menuStyle menu1">

    <div>
      <img src="beef_tacos_.jpg" alt="Beef Tacos" class="foodImg">

    </div>
    <div>
      <h3>Beef Tacos</h3>
      <p>Meat, Mexican cheese, pico de gallo, lettuce & sour cream</p>
    </div>
    <div class="justify">
      <form action="add_to_cart.php"  method="post">
      <input type="hidden" name="item_name" value="Beef Tacos">      
      <input type="hidden" name="price" value="1.70">
      <button type="submit" name="add_to_cart" id="add_to_cart">Add to cart</button>
      <input type="number" id="qty" name="qty" class="num" min="1"></form>
      <h4>1.70 JD</h4>
    </div>
  </div>
  </div>

  <br>


  
  <div class="menuStyle menu2">

    <div>
      <img src="tacos-chicken_.jpg" alt="Chicken Tacos" class="foodImg">

    </div>
    <div>
      <h3>Chicken Tacos</h3>
      <p>Chicken, Mexican cheese,pico de gallo, lettuce & sour cream</p>
    </div>
    <div class="justify">
    <form action="add_to_cart.php" method="post">
    <input type="hidden" name="item_name" value="Chicken Tacos"> 
    <input type="hidden" name="price" value="1.50"> 
    <button type="submit" name="add_to_cart" id="add_to_cart">Add to cart</button>
    <input type="number" id="qty" name="qty" class="num" min="1">
    <h4>1.50 JD</h4>
    </div>
  </div>
  </div>
</form>
  <br>

 
  <div class="menuStyle menu3">

    <div>
      <img src="mrburritos_vegetarian_taco.jpg" alt="Vegetarian Tacos" class="foodImg">
    </div>
    <div>
      <h3>Vegetarian Tacos</h3>
      <p>Grilled mix of vegetables </p>
    </div>
    <div class="justify">
       <form action="add_to_cart.php" method="post">
    <input type="hidden" name="item_name" value="Vegetarian Tacos">
    <input type="hidden" name="price" value="1.30">
      <button type="submit" name="add_to_cart" id="add_to_cart">Add to cart</button>
      <input type="number" id="qty" name="qty" class="num" min="1"></form>
      <h4>1.30 JD</h4>
    </div>
  </div>
  </div>
  </div>


  <br>
  <div class="menuStyle menu4">

    <div>
      <img src="dynamite_burrito_1.jpg" alt="dynamite burrito" class="foodImg">
    </div>
    <div>
      <h3>Dynamite Burrito</h3>
      <p>Crispy chicken, steak fries, mexican cheese, dynamite sauce</p>
    </div>

    <div class="justify">
      
<form action="add_to_cart.php" method="post">
    <input type="hidden" name="item_name" value="Dynamite Burrito">
    <input type="hidden" name="price" value="4.80">
      <button type="submit" name="add_to_cart" id="add_to_cart">Add to cart</button>
      <input type="number" id="qty" name="qty" class="num" min="1"></form>
      <h4>4.80 JD</h4>
    </div>
  </div>
  </div>
  </div>




  <br>
  <div class="menuStyle menu5">

    <div>
      <img src="zinger.jpg" alt="Zinger Burrito" class="foodImg">
    </div>
    <div>
      <h3>Zinger Burrito</h3>
      <p>Fried spicy chicken breast, Cheese, tomato, pickles & ranch sauce</p>
    </div>
    <div class="justify">
      <form action="add_to_cart.php" method="post">
      <input type="hidden" name="item_name" value="Zinger Burrito">
      <input type="hidden" name="price" value="3.50">
     <button type="submit" name="add_to_cart" id="add_to_cart">Add to cart</button>
      <input type="number" id="qty" name="qty" class="num" min="1"></form>

      <h4>3.50 JD</h4>
    </div>
  </div>
  </div>
  </div>
  <br>
</body>

<footer>

  <p style="grid-column: 1/2; padding: 0px 5px;">Branches</p>
  <p style="grid-column: 2/3; padding: 0px 5px;">Locations</p>

  <div style="grid-column: 1/2; grid-row: 2/3;">
    <p style="padding: 0px 5px; ">Daoud Complex </p>
    <p style="padding: 0px 5px;">Abdoun</p>
  </div>

  <div style="grid-column: 2/3; grid-row: 2/3;">
    <p> <a href="https://maps.app.goo.gl/rfnJupjqoawA6Tg28?g_st=ic">Location</a></p>
    <p> <a href="https://goo.gl/maps/LUp9JZaFMWwD55zC6">Location</a></p>
  </div>

  <div style="grid-column: 1/2; grid-row: 4/5; margin: 0px 5px;">

    <p style="grid-column: 1/3; grid-row: 3/4;" id="bottom">Contact Info</p>


    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="18" height="18" viewBox="0 0 24 24">
      <path
        d="M 8 3 C 5.243 3 3 5.243 3 8 L 3 16 C 3 18.757 5.243 21 8 21 L 16 21 C 18.757 21 21 18.757 21 16 L 21 8 C 21 5.243 18.757 3 16 3 L 8 3 z M 8 5 L 16 5 C 17.654 5 19 6.346 19 8 L 19 16 C 19 17.654 17.654 19 16 19 L 8 19 C 6.346 19 5 17.654 5 16 L 5 8 C 5 6.346 6.346 5 8 5 z M 17 6 A 1 1 0 0 0 16 7 A 1 1 0 0 0 17 8 A 1 1 0 0 0 18 7 A 1 1 0 0 0 17 6 z M 12 7 C 9.243 7 7 9.243 7 12 C 7 14.757 9.243 17 12 17 C 14.757 17 17 14.757 17 12 C 17 9.243 14.757 7 12 7 z M 12 9 C 13.654 9 15 10.346 15 12 C 15 13.654 13.654 15 12 15 C 10.346 15 9 13.654 9 12 C 9 10.346 10.346 9 12 9 z">
      </path>
    </svg>
    <p style="display: inline; "><a href="https://www.instagram.com/mr.burritos/?hl=en"> mr.burritos</a></p>
    <br><br>

    <svg style="width: 15px; display: inline; " xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
      <path
        d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
    </svg>
    <p style="display: inline;"><a
        href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwipp4jd3638AhWBHewKHctkA1EQFnoECBgQAQ&url=https%3A%2F%2Fwww.facebook.com%2FMR.Burritosjo%2F&usg=AOvVaw206rsptEDhf4uvuTx29lYh">
        Mr. Burritos</a></p>

    <br><br>
  </div>
  <div style="grid-column: 2/3; grid-row: 4/5;">
    <br><br>
    <p>Email: info@mrburrito.online</p>
    <p>Telephone: 06 222 4333</p>
  </div>




  <p style="grid-column: 1/4; grid-row: 5/6; text-align: center; font-size: 14px;">&#169; Copyrights are reserved for
    Mr. Burrito</p>

</footer>

</html>