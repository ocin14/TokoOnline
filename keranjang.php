<!DOCTYPE html>
<html>

<head>
	<title>Gadgetshop</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https:maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"">
	<link href=" https:fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="styles.css">
</head>



<body>
	<main class="page">
		<section class="shopping-cart dark">

			<?php
			include "koneksi.php";
			$qry_detail_produk = mysqli_query($conn, "SELECT * from produk where id_produk = '" . $_GET['id_produk'] . "'");
			$data_produk = mysqli_fetch_array($qry_detail_produk);
			?>

			<div class="container">
				<div class="block-heading">
					<h2>GadgetShop</h2>

				</div>
				<div class="content">
					<div class="row">
						<div class="col-md-12 col-lg-8">

							<div class="items">

								<?php
								if (isset($_SESSION['cart']))
									foreach ($_SESSION['cart'] as $key_produk => $val_produk) : ?>
									//if (isset($_SESSION['cart']) && !empty($_SESSION['cart']))
									//foreach ($_SESSION['cart'] as $key_produk => $val_produk) : ?>
									<div class="product">
										<?= $val_produk['qty'] ?>
										<div class="row">
											<div class="col-md-3">
												<img class="img-fluid mx-auto d-block image" src="<?= $val_produk['foto_produk'] ?>">
											</div>
											<div class="col-md-8">
												<div class="info">
													<div class="row">
														<div class="col-md-5 product-name">
															<div class="product-name">
																<p><?= $val_produk['nama_produk'] ?></p>

															</div>
														</div>
														<div class="col-md-4 quantity">
															<?= ($key_produk + 1) ?>
															<label for="quantity">Quantity:</label>
															<input id="quantity" type="number" value="1" class="form-control quantity-input">
														</div>
														<div class="col-md-3 price">
															<span><?= $data_produk['harga'] ?></span>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
								<?php

									endforeach

								?>
							</div>
						</div>
						<div class="col-md-12 col-lg-4">
							<div class="summary">
								<h3>Summary</h3>
								<div class="summary-item"><span class="text">Subtotal</span><span class="price"><?= $data_produk['harga'] ?></span></div>
								<div class="summary-item"><span class="text">Discount</span><span class="price">$0</span></div>
								<div class="summary-item"><span class="text">Shipping</span><span class="price">$0</span></div>
								<div class="summary-item"><span class="text">Total</span><span class="price"><?= $data_produk['harga'] ?></span></div>
								<a class="btn btn-primary btn-lg btn-block" href="payment.html">Checkout</a>
							</div>
						</div>

					</div>
				</div>
			</div>

		</section>
	</main>
</body>
<script src="https:code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https:maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</html>