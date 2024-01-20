let cart = [];

function addToCart(itemName, itemPrice) {
  cart.push({ name: itemName, price: itemPrice });
  displayCartItems();
}

function displayCartItems() {
  const cartItemsElement = document.getElementById("cart-items");
  cartItemsElement.innerHTML = "";

  let totalPrice = 0;
  for (let i = 0; i < cart.length; i++) {
    const item = cart[i];
    const listItem = document.createElement("li");
    listItem.innerHTML = `${item.name} - $${item.price}`;
    cartItemsElement.appendChild(listItem);

    totalPrice += item.price;
  }

  const totalPriceElement = document.getElementById("total-price");
  totalPriceElement.innerHTML = `Total: $${totalPrice}`;
}

function placeOrder() {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "order.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        document.getElementById("order-status").innerHTML = xhr.responseText;
        cart = [];
        displayCartItems();
      } else {
        document.getElementById("order-status").innerHTML = "Error occurred while placing the order.";
      }
    }
  };

  const params = `cart=${JSON.stringify(cart)}`;
  xhr.send(params);
}
