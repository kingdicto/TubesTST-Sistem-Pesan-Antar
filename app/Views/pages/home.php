<body>

<div class="container">
    <div class="row">
        <div class="col">
        
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: space-between;
        }

        .menu-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .menu-card {
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 20px;
            width: 250px;
            box-sizing: border-box;
        }

        .menu-card img {
            width: 100%;
            height: auto;
        }

        .menu-card h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        .menu-card p {
            font-size: 18px;
            color: #666;
            margin-bottom: 10px;
        }

        .menu-card button {
            background-color: #009246; /* Green */
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
        }

        .cart {
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 20px;
            width: 900px; /* Adjusted width */
            box-sizing: border-box;
        }

        .cart h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .cart-item button {
            background-color: #dc3545;
            width: 50px;
        }

        .cart p {
            font-size: 18px;
            color: #666;
            margin-bottom: 10px;
        }

        .checkout-button {
            background-color: #ce2b37; /* Red */
            color: #ffffff; /* White */
            border: none;
            padding: 15px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
            font-weight: bold;
        }
         .recommended-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 20px;
        }

        .recommended-card {
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 20px;
            width: 250px;
            box-sizing: border-box;
        }

    </style>
</head>
<body>

<div class="container">
    <!-- Recommended Menu Cards from API -->
    <!-- Recommended Menu Cards from API -->
    <div class="recommended-cards">
        <?php $count = 0; ?>
        <?php foreach ($dbrestoran as $menu): ?>
            <?php if ($count < 5): ?>
                <div class="recommended-card" id="menu<?= $menu['idmenu']; ?>">
                    <h2><?= $menu['nama']; ?></h2>
                    <p>Rp <?= $menu['harga']; ?></p>
                    <p class="recommendation-label">Rekomendasi Restoran</p>
                    <button onclick="addToCart('<?= $menu['nama']; ?>')">Add To Cart</button>
                </div>
            <?php endif; ?>
            <?php $count++; ?>
        <?php endforeach; ?>
    </div>

    <!-- Existing Menu Cards -->


    <div class="menu-cards">
        <?php foreach ($dbrestoran as $menu): ?>
            <div class="menu-card" id="menu<?= $menu['idmenu']; ?>">
                <h2><?= $menu['nama']; ?></h2>
                <p>Rp <?= $menu['harga']; ?></p>
                <button onclick="addToCart('<?= $menu['nama']; ?>')">Add To Cart</button>
            </div>
        <?php endforeach; ?>
    </div>


    <div class="cart">
        <h2>Cart</h2>
        <div id="cart-items"></div>
        <p>Total: Rp <span id="total">0</span></p>
        <button class="checkout-button">Checkout</button>
    </div>
</div>

<script>
    let cart = {};

    function addToCart(itemName) {
        if (!cart[itemName]) {
            cart[itemName] = { quantity: 1, price: getItemPrice(itemName) };
        } else {
            cart[itemName].quantity++;
        }

        updateCart();
    }

    function removeFromCart(itemName) {
        if (cart[itemName]) {
            cart[itemName].quantity--;

            if (cart[itemName].quantity === 0) {
                delete cart[itemName];
            }
        }

        updateCart();
    }

    function getItemPrice(itemName) {
        // Replace with logic to get the actual price for each item
        const itemPrices = {
            'Margherita Pizza': 85000,
            'Spaghetti Bolognese': 70000,
            'Risotto ai Funghi': 95000,
            'Tiramisu': 45000,
            'Lasagna al Forno': 80000,
            'Cannelloni Ricotta e Spinaci': 75000,
            'Prosciutto e Melone': 60000,
            'Minestrone Soup': 55000,
            'Negroni Cocktail': 90000,
            'Caprese Salad': 50000,
        };

        return itemPrices[itemName] || 0;
    }

    function updateCart() {
        let cartItemsContainer = document.getElementById('cart-items');
        let totalElement = document.getElementById('total');
        let total = 0;

        cartItemsContainer.innerHTML = '';

        for (let itemName in cart) {
            let item = cart[itemName];

            let cartItem = document.createElement('div');
            cartItem.className = 'cart-item';

            let itemNameElement = document.createElement('span');
            itemNameElement.textContent = `${itemName} x${item.quantity}`;

            let removeButton = document.createElement('button');
            removeButton.textContent = '-';
            removeButton.onclick = function () {
                removeFromCart(itemName);
            };

            cartItem.appendChild(itemNameElement);
            cartItem.appendChild(removeButton);

            cartItemsContainer.appendChild(cartItem);

            total += item.quantity * item.price;
        }

        totalElement.textContent = total.toLocaleString();
    }
</script>

</body>

</body>
</div>
</div>
</div>

