<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Place Order</title>

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
max-width:500px;
margin:30px auto;
background:white;
padding:25px;
border-radius:10px;
box-shadow:0 2px 10px rgba(0,0,0,0.2);
}

h2{
text-align:center;
margin-bottom:20px;
}

input,
select,
textarea{
width:100%;
padding:12px;
margin-bottom:15px;
border:1px solid #ccc;
border-radius:5px;
}

button{
width:100%;
padding:12px;
background:#ff6600;
color:white;
border:none;
border-radius:5px;
font-size:16px;
cursor:pointer;
}

button:hover{
background:#e65c00;
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
<h1>Restaurant Management System</h1>
</header>

<div class="container">

<h2>Place Your Order</h2>

<form action="save_order.php" method="POST">

<input type="text"
name="customer_name"
placeholder="Enter Your Name"
required>

<input type="tel"
name="mobile"
placeholder="Enter Mobile Number"
required>

<select name="food_item" required>
<option value="">Select Food Item</option>
<option>Cheese Pizza</option>
<option>Veg Burger</option>
<option>White Sauce Pasta</option>
<option>Cold Drink</option>
</select>

<input type="number"
name="quantity"
placeholder="Quantity"
min="1"
required>

<textarea
name="address"
rows="4"
placeholder="Delivery Address"
required></textarea>

<button type="submit">
Place Order
</button>

</form>

</div>

<footer>
<p>© 2026 Restaurant Management System</p>
</footer>

</body>
</html>