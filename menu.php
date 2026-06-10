<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Restaurant Menu</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:#f4f4f4;
}

header{
background:#ff6600;
color:white;
padding:20px;
text-align:center;
}

.container{
padding:20px;
}

.menu-card{
background:white;
border-radius:10px;
overflow:hidden;
margin-bottom:20px;
box-shadow:0 2px 8px rgba(0,0,0,0.2);
}

.menu-card img{
width:100%;
height:200px;
object-fit:cover;
}

.menu-content{
padding:15px;
text-align:center;
}

.menu-content h2{
margin-bottom:10px;
}

.price{
color:#ff6600;
font-size:22px;
font-weight:bold;
}

.btn{
display:inline-block;
margin-top:10px;
padding:10px 20px;
background:#ff6600;
color:white;
text-decoration:none;
border-radius:5px;
}

footer{
background:#333;
color:white;
text-align:center;
padding:15px;
margin-top:20px;
}

</style>

</head>

<body>

<header>
<h1>Restaurant Menu</h1>
</header>

<div class="container">

<div class="menu-card">
<img src="pizza.jpg" alt="Pizza">
<div class="menu-content">
<h2>Cheese Pizza</h2>
<p>Delicious cheese loaded pizza.</p>
<p class="price">₹199</p>
<a href="order.html" class="btn">Order Now</a>
</div>
</div>

<div class="menu-card">
<img src="burger.jpg" alt="Burger">
<div class="menu-content">
<h2>Veg Burger</h2>
<p>Fresh and tasty burger.</p>
<p class="price">₹99</p>
<a href="order.html" class="btn">Order Now</a>
</div>
</div>

<div class="menu-card">
<img src="pasta.jpg" alt="Pasta">
<div class="menu-content">
<h2>White Sauce Pasta</h2>
<p>Creamy and delicious pasta.</p>
<p class="price">₹149</p>
<a href="order.html" class="btn">Order Now</a>
</div>
</div>

<div class="menu-card">
<img src="drink.jpg" width="300">
<div class="menu-content">
<h2>Cold Drink</h2>
<p>Refreshing chilled beverage.</p>
<p class="price">₹49</p>
<a href="order.html" class="btn">Order Now</a>
</div>
</div>

</div>

<footer>
<p>© 2026 Restaurant Management System</p>
</footer>

</body>
</html>