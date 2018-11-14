<?php include 'head.php' ?>
<?php include 'header.php' ?>
  <div class="main-content secondary">
  <div class="content-wrapper">
  	<div class="inner">
  		<div class="full-width shop">
  		<div class="shopping-cart-wrapper">
  		<div class="shopping-left">
  		<h4>Your Shopping Cart</h4>
  		<div class="shopping-top">
  		<div class="product-image"><img src="images/stayrad-front.jpg"></div>
  		<div class="right">
  		<span>
  		<label for="product-name">Item Name: </label><p class="product-name">Stay Rad Tee</p>
  		</span>
  		<span>
  		<label for="product-type">Item Type: </label><p class="product-type">Men's Tee</p></span>
  		<span>
  		<label for="product-size">Size: </label><p class="product-size">LG</p></span>
  		<span>
  		<label for="product-price">Price: </label><p class="product-price">$28.00</p>
  		</span>
  		<span>
  		<label for="quantity">Quantity: </label><input type="text" name="quantity" value="1" />
  			<button class="shopping" id="update">UPDATE</button>
  			<button class="shopping" id="remove"><i class="fas fa-times"></i> REMOVE</button>
  			</span>
  			</div>
  			</div>
  		<div class="shopping-bottom">
  		<div class="totals">
  			<span>
  			<label for="subtotal">Subtotal: </label><p class="subtotal">$28.00</p>
  			</span>
  			<span>
  			<label for="subtotal">Discount: </label><p class="discount">($13.00) 20% off order</p>
  			</span>
  			<span>
  			<label for="subtotal">Tax: </label><p class="tax">$2.00</p>
  			</span>
  			<span>
  			<label for="subtotal">Shipping: </label><p class="shipping">$5.00</p>
  			</span>
  			<span>
  			<label for="subtotal">Total: </label><p class="total">$22.00</p>
  			</span>
  			</div>
  			<div class="coupons">
  			<button class="add-coupon-gc" data-toggle="collapse" href="#coupon-gc" role="button" aria-expanded="false" aria-controls="coupon-gc">Apply a Coupon or Gift Card</button>
  			<div class="collapse" id="coupon-gc">
  			<div class="discount-wrapper">
  			<label for="discount">Discount Coupon: </label><input type="text" name="discount" placeholder="INPUT COUPON CODE" />
  			<fieldset>
  			<button class="shopping" id="apply-coupon">APPLY COUPON</button>
  			<button class="shopping" id="remove-coupon"><i class="fas fa-times"></i> REMOVE COUPON</button>
  			</fieldset>
  			</div>
  			<div class="gc-wrapper">
  			<label for="gift-card">Gift Card: </label><input type="text" name="gift-card" placeholder="INPUT GIFT CARD CODE" />
  			<fieldset>
  				<button class="shopping" id="apply-coupon">APPLY COUPON</button>
  				<button class="shopping" id="remove-coupon"><i class="fas fa-times"></i> REMOVE COUPON</button>
  				</fieldset>
  			</div>
  			</div>
  			</div>
  			<div class="shipping">
  			<span>
  			<label for="country">Shipping Country: </label>
  			<select class="custom-select" id="country">
  			<option value="usa">United States</option>
  			<option value="ca">Canada</option>
  			</select>
  			</span>
  			<span>
  			<label for="state">Shipping State: </label>
  			<select class="custom-select" id="state">
  				<option value="pa">Pennsylvania</option>
  				<option value="ok">Oklahoma</option>
  				</select>
  				</span>
  				</div>
  				</div>
  				</div>
  					<div class="checkout-wrapper">
  					<p>Continue to</p>
  					<button class="shopping" id="checkout">CHECKOUT</button>
  					</div>
  				
  		</div>
  			<div class="add-on">
  			<h3>Additional Items</h3>
  			<div class="items">
  					<div class="item">
  					<a href=""><img src="images/hoodie-red.jpg"></a>
  					<p class="name"><a href="">Gilson Red Hoodie</a></p>
  			<p class="price">$58</p>
  					</div>
  							<div class="item">
  							<a href=""><img src="images/hat-dark.jpg"></a>
  							<p class="name"><a href="">Flat Bill Hat</a></p>
  			<p class="price">$25</p>
  							</div>
  									<div class="item">
  									<a href=""><img src="images/pint-glass.jpg"></a>
  									<p class="name"><a href="">Pint Glass</a></p>
  			<p class="price">$10</p>
  									</div>
  											</div>
  			</div>
  		
  		</div>
  		</div>
  		</div>
    </div>
    </div>  
    </div>
<?php include 'footer.php' ?>