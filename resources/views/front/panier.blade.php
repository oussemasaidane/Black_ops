@extends('welcome')
<style>
    body{
 margin: 0;
 padding: 0;
 background: linear-gradient(to bottom right, #E3F0FF, #FAFCFF);
 height: 100vh;
 display: flex;
 justify-content: center;
 align-items: center;
}
.Cart-Container{
 width: 70%;
 height: 85%;
 background-color: #ffffff;
 border-radius: 20px;
 box-shadow: 0px 25px 40px #1687d933;
}
@import "compass/css3";
/*
 I wanted to go with a mobile first approach, but it actually lead to more verbose CSS in this case, so I've gone web first. Can't always force things...
 Side note: I know that this style of nesting in SASS doesn't result in the most performance efficient CSS code... but on the OCD/organizational side, I like it. So for CodePen purposes, CSS selector performance be damned.
 */
/* Global settings */
/* Global "table" column settings */
.product-image {
  float: left;
  width: 20%;
}
.product-details {
  float: left;
  width: 37%;
}
.product-price {
  float: left;
  width: 12%;
}
.product-quantity {
  float: left;
  width: 10%;
}
.product-removal {
  float: left;
  width: 9%;
}
.product-line-price {
  float: left;
  width: 12%;
  text-align: right;
}
/* This is used as the traditional .clearfix class */
.group:before, .shopping-cart:before, .column-labels:before, .product:before, .totals-item:before, .group:after, .shopping-cart:after, .column-labels:after, .product:after, .totals-item:after {
  content: '';
  display: table;
}
.group:after, .shopping-cart:after, .column-labels:after, .product:after, .totals-item:after {
  clear: both;
}
.group, .shopping-cart, .column-labels, .product, .totals-item {
  zoom: 1;
}
/* Apply clearfix in a few places */
/* Apply dollar signs */
.product .product-price:before, .product .product-line-price:before, .totals-value:before {
  content: '$';
}
/* Body/Header stuff */
body {
  padding: 0px 30px 30px 20px;
  font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-weight: 100;
}
h1 {
  font-weight: 100;
}
label {
  color: #aaa;
}
.shopping-cart {
  margin-top: -45px;
}
/* Column headers */
.column-labels label {
  padding-bottom: 15px;
  margin-bottom: 15px;
  border-bottom: 1px solid #eee;
}
.column-labels .product-image, .column-labels .product-details, .column-labels .product-removal {
  text-indent: -9999px;
}
/* Product entries */
.product {
  margin-bottom: 20px;
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}
.product .product-image {
  text-align: center;
}
.product .product-image img {
  width: 100px;
}
.product .product-details .product-title {
  margin-right: 20px;
  font-family: 'HelveticaNeue-Medium', 'Helvetica Neue Medium';
}
.product .product-details .product-description {
  margin: 5px 20px 5px 0;
  line-height: 1.4em;
}
.product .product-quantity input {
  width: 40px;
}
.product .remove-product {
  border: 0;
  padding: 4px 8px;
  background-color: #c66;
  color: #fff;
  font-family: 'HelveticaNeue-Medium', 'Helvetica Neue Medium';
  font-size: 12px;
  border-radius: 3px;
}
.product .remove-product:hover {
  background-color: #a44;
}
/* Totals section */
.totals .totals-item {
  float: right;
  clear: both;
  width: 100%;
  margin-bottom: 10px;
}
.totals .totals-item label {
  float: left;
  clear: both;
  width: 79%;
  text-align: right;
}
.totals .totals-item .totals-value {
  float: right;
  width: 21%;
  text-align: right;
}
.totals .totals-item-total {
  font-family: 'HelveticaNeue-Medium', 'Helvetica Neue Medium';
}
.checkout {
  float: right;
  border: 0;
  margin-top: 20px;
  padding: 6px 25px;
  background-color: #6b6;
  color: #fff;
  font-size: 25px;
  border-radius: 3px;
}
.checkout:hover {
  background-color: #494;
}
/* Make adjustments for tablet */
@media screen and (max-width: 650px) {
  .shopping-cart {
    margin: 0;
    padding-top: 20px;
    border-top: 1px solid #eee;
  }
  .column-labels {
    display: none;
  }
  .product-image {
    float: right;
    width: auto;
  }
  .product-image img {
    margin: 0 0 10px 10px;
  }
  .product-details {
    float: none;
    margin-bottom: 10px;
    width: auto;
  }
  .product-price {
    clear: both;
    width: 70px;
  }
  .product-quantity {
    width: 100px;
  }
  .product-quantity input {
    margin-left: 20px;
  }
  .product-quantity:before {
    content: 'x';
  }
  .product-removal {
    width: auto;
  }
  .product-line-price {
    float: right;
    width: 70px;
  }
}
/* Make more adjustments for phone */
@media screen and (max-width: 350px) {
  .product-removal {
    float: right;
  }
  .product-line-price {
    float: right;
    clear: left;
    width: auto;
    margin-top: 10px;
  }
  .product .product-line-price:before {
    content: 'Item Total: $';
  }
  .totals .totals-item label {
    width: 60%;
  }
  .totals .totals-item .totals-value {
    width: 40%;
  }
}

</style>

<body>
    
 <div class=”Cart-Container”>
 <h1>Shopping Cart</h1>

<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>
  <form id="productForm" action="{{ route('commande.storewithTicket') }}" method="post">
  @csrf
  <div class="product">
    <div class="product-image">
      <img src="https://s.cdpn.io/3/dingo-dog-bones.jpg">
    </div>
    <div class="product-details">
      <h2 class="product-title"></h2>
      <p class="product-description" style="padding-right:200px;padding-left:100px"> </p>
    </div>
    <div class="product-price"></div>
    <div class="product-quantity">
      <input type="number" value="1" min="1" name="quantity" id="quantity" onchange=calcul()>
    </div>
    <div class="product-removal">
      <button class="remove-product">
        Remove
      </button>
    </div>
    <div class="product-line-price">25.98</div>
  </div>



  <div class="totals">
    <div class="totals-item">
      <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal"></div>
    </div>
    <div class="totals-item">
      <label>Tax (5%)</label>
      <div class="totals-value" id="cart-tax"></div>
    </div>
 
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total"></div>
    </div>
  </div>
      
      <button class="checkout" type="submit">Checkout</button>

</div>
</form>
  
 </div>
 <script>

function calcul(){
    const ticket = JSON.parse(localStorage.getItem('ticket'));

if (ticket) {
    const productContainer = document.querySelector('.product');
  //  const productImage = productContainer.querySelector('.product-image img');
    const productTitle = productContainer.querySelector('.product-title');
   // const productDescription = productContainer.querySelector('.product-description');
    const productPrice = productContainer.querySelector('.product-price');
   // const productQuantity = productContainer.querySelector('.product-quantity input');
    const productLinePrice = productContainer.querySelector('.product-line-price');
    const quantity=document.getElementById('quantity').value

    // Populate the HTML elements with product data
   // productImage.src = ticket.imageSrc;
    productTitle.textContent = ticket.nom;
    //productDescription.textContent = ticket.description;
    productPrice.textContent = ticket.prix;
    //productQuantity.value = ticket.quantity;
    productLinePrice.textContent = ((ticket.prix * quantity * 1.05).toFixed(3))
    document.getElementById('cart-subtotal').textContent=ticket.prix* quantity;
    document.getElementById('cart-tax').textContent=((ticket.prix * quantity * 1.05).toFixed(3))-(ticket.prix * quantity);
    document.getElementById('cart-total').textContent=((ticket.prix * quantity * 1.05).toFixed(3))
}  
}
    // Retrieve the product data from localStorage
    const ticket = JSON.parse(localStorage.getItem('ticket'));

    if (ticket) {
        const productContainer = document.querySelector('.product');
      //  const productImage = productContainer.querySelector('.product-image img');
        const productTitle = productContainer.querySelector('.product-title');
       // const productDescription = productContainer.querySelector('.product-description');
        const productPrice = productContainer.querySelector('.product-price');
       // const productQuantity = productContainer.querySelector('.product-quantity input');
        const productLinePrice = productContainer.querySelector('.product-line-price');
        const quantity=document.getElementById('quantity').value

        // Populate the HTML elements with product data
       // productImage.src = ticket.imageSrc;
        productTitle.textContent = ticket.nom;
        //productDescription.textContent = ticket.description;
        productPrice.textContent = ticket.prix;
        //productQuantity.value = ticket.quantity;
        productLinePrice.textContent = (ticket.prix * 1.05).toFixed(3);
        document.getElementById('cart-subtotal').textContent=ticket.prix;
        document.getElementById('cart-tax').textContent=((ticket.prix * quantity * 1.05).toFixed(3))-(ticket.prix * quantity);
        document.getElementById('cart-total').textContent=((ticket.prix * quantity * 1.05).toFixed(3))
    }
    const localStorageData = JSON.parse(localStorage.getItem('ticket'));

// Attach the localStorage data to the form data
document.getElementById('productForm').addEventListener('submit', function(event) {
    if (localStorageData) {
        // Create a hidden input field to store the localStorage data
        const form = event.target;
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'ticket';
        input.value = JSON.stringify(localStorageData);
        form.appendChild(input);
    }
});
</script>
</body>