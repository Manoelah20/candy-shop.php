<?php
    $best_sellers = ['Chocolate', 'Mints', 'Fudge', 'Bubble gum', 'Toffe', 'Jelly beans',];

    $nutrition = ['fat' => 38, 'sugar' => 51, 'salt' => 0.25];
    $nutrition['fat'] = 36;
    $nutrition['fiber'] = 2.1;

    $offers = [
        ['name' => 'Toffe', 'price' => 5, 'stock' => 120,],
        ['name' => 'Mints', 'price' => 3, 'stock' => 66,],
        ['name' => 'Fudge', 'price' => 4, 'stock' => 97,],
    ];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Document - PHP - Array</title>
</head>
<body>
<header>
    <h1>The Candy Store</h1>
		<nav> 
		<ul> 
			<li><a href="#delivery">Delivery</a></li> 
			<li><a href="#products">Products</a></li>
			<li><a href="#cart"><i class="fas fa-shopping-cart"></i></a></li> 
		</ul> 
		</nav>
    </header>
    <main>
        <section id="best-sellers">
        <h2>BEST SELLERS</h2>
            <ul>
            <?php foreach ($best_sellers as $item): ?>
            <li><?php echo $item; ?></li>
			<?php endforeach; ?>
            </ul>
        </section>
        <section id="nutrition">
        <h2>NUTRITION</h2>
            <p>Fat: <?php echo $nutrition['fat']; ?>%</p>
            <p>Sugar: <?php echo $nutrition['sugar']; ?>%</p>
            <p>Salt: <?php echo $nutrition['salt']; ?>%</p>
            <p>Fiber: <?php echo $nutrition['fiber']; ?>%</p>
        </section>
        <section id="offers">
        <h2>OFFERS</h2>
            <?php foreach ($offers as $offer): ?>
            <p><?php echo $offer['name']; ?> - $<?php echo $offer['price']; ?></p>
            <?php endforeach; ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 - Todos os direitos reservados.</p>
    </footer>
</body>
</html>

