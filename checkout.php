<?php include 'head.php' ?>
<?php include 'header.php' ?>
  <div class="main-content secondary">
  <div class="content-wrapper">
  	<div class="inner">
  		<div class="full-width shop">
  		<div class="checkout-wrapper row">
  		        <div class="col-md-4 order-md-2 mb-4">
  		          <h4 class="d-flex justify-content-between align-items-center mb-3">
  		            Your cart
  		            <!--<span class="badge badge-secondary badge-pill">3</span>-->
  		          </h4>
  		          <ul class="list-group mb-3">
  		            <li class="list-group-item d-flex justify-content-between lh-condensed">
  		              <div>
  		                <h6 class="my-0">Product name</h6>
  		                <small class="text-muted">Brief description</small>
  		              </div>
  		              <span class="text-muted">$12</span>
  		            </li>
  		            <li class="list-group-item d-flex justify-content-between lh-condensed">
  		              <div>
  		                <h6 class="my-0">Second product</h6>
  		                <small class="text-muted">Brief description</small>
  		              </div>
  		              <span class="text-muted">$8</span>
  		            </li>
  		            <li class="list-group-item d-flex justify-content-between lh-condensed">
  		              <div>
  		                <h6 class="my-0">Third item</h6>
  		                <small class="text-muted">Brief description</small>
  		              </div>
  		              <span class="text-muted">$5</span>
  		            </li>
  		            <li class="list-group-item d-flex justify-content-between bg-light">
  		              <div class="text-success">
  		                <h6 class="my-0">Promo code</h6>
  		                <small>EXAMPLECODE</small>
  		              </div>
  		              <span class="text-success">-$5</span>
  		            </li>
  		            <li class="list-group-item d-flex justify-content-between">
  		              <span>Total (USD)</span>
  		              <strong>$20</strong>
  		            </li>
  		          </ul>
  		
  		          <!--<form class="card p-2">
  		            <div class="input-group">
  		              <input type="text" class="form-control" placeholder="Promo code">
  		              <div class="input-group-append">
  		                <button type="submit" class="btn btn-secondary">Redeem</button>
  		              </div>
  		            </div>
  		          </form>-->
  		        </div>
  		        <div class="col-md-8 order-md-1">
  		          <h4 class="mb-3">Billing address</h4>
  		          <form class="needs-validation" novalidate>
  		            <div class="row">
  		              <div class="col-md-6 mb-3">
  		                <label for="firstName">First name</label>
  		                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
  		                <div class="invalid-feedback">
  		                  Valid first name is required.
  		                </div>
  		              </div>
  		              <div class="col-md-6 mb-3">
  		                <label for="lastName">Last name</label>
  		                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
  		                <div class="invalid-feedback">
  		                  Valid last name is required.
  		                </div>
  		              </div>
  		            </div>
  		            <div class="mb-3">
  		              <label for="email">Email <span class="text-muted">(Optional)</span></label>
  		              <input type="email" class="form-control" id="email" placeholder="you@example.com">
  		              <div class="invalid-feedback">
  		                Please enter a valid email address for shipping updates.
  		              </div>
  		            </div>
  		
  		            <div class="mb-3">
  		              <label for="address">Address</label>
  		              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
  		              <div class="invalid-feedback">
  		                Please enter your shipping address.
  		              </div>
  		            </div>
  		
  		            <div class="mb-3">
  		              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
  		              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
  		            </div>
  		
  		            <div class="row">
  		              <div class="col-md-5 mb-3">
  		                <label for="country">Country</label>
  		                <select class="custom-select d-block w-100" id="country" required>
  		                  <option value="">Choose...</option>
  		                  <option>United States</option>
  		                </select>
  		                <div class="invalid-feedback">
  		                  Please select a valid country.
  		                </div>
  		              </div>
  		              <div class="col-md-4 mb-3">
  		                <label for="state">State</label>
  		                <select class="custom-select d-block w-100" id="state" required>
  		                  <option value="">Choose...</option>
  		                  <option>California</option>
  		                </select>
  		                <div class="invalid-feedback">
  		                  Please provide a valid state.
  		                </div>
  		              </div>
  		              <div class="col-md-3 mb-3">
  		                <label for="zip">Zip</label>
  		                <input type="text" class="form-control" id="zip" placeholder="" required>
  		                <div class="invalid-feedback">
  		                  Zip code required.
  		                </div>
  		              </div>
  		            </div>
  		            <hr class="mb-4">
  		            <div class="custom-control custom-checkbox">
  		              <input type="checkbox" class="custom-control-input" id="same-address">
  		              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
  		            </div>  		            
  		            <hr class="mb-4">
  		            <h4 class="mb-3">Payment</h4>
  		
  		            <div class="d-block my-3">
  		              <div class="custom-control custom-radio">
  		                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
  		                <label class="custom-control-label" for="credit">Credit card</label>
  		              </div>
  		              <div class="custom-control custom-radio">
  		                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
  		                <label class="custom-control-label" for="debit">Debit card</label>
  		              </div>
  		              <div class="custom-control custom-radio">
  		                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
  		                <label class="custom-control-label" for="paypal">Paypal</label>
  		              </div>
  		            </div>
  		            <div class="row">
  		              <div class="col-md-6 mb-3">
  		                <label for="cc-name">Name on card</label>
  		                <input type="text" class="form-control" id="cc-name" placeholder="" required>
  		                <small class="text-muted">Full name as displayed on card</small>
  		                <div class="invalid-feedback">
  		                  Name on card is required
  		                </div>
  		              </div>
  		              <div class="col-md-6 mb-3">
  		                <label for="cc-number">Credit card number</label>
  		                <input type="text" class="form-control" id="cc-number" placeholder="" required>
  		                <div class="invalid-feedback">
  		                  Credit card number is required
  		                </div>
  		              </div>
  		            </div>
  		            <div class="row">
  		              <div class="col-md-3 mb-3">
  		                <label for="cc-expiration">Expiration</label>
  		                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
  		                <div class="invalid-feedback">
  		                  Expiration date required
  		                </div>
  		              </div>
  		              <div class="col-md-3 mb-3">
  		                <label for="cc-expiration">CVV</label>
  		                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
  		                <div class="invalid-feedback">
  		                  Security code required
  		                </div>
  		              </div>
  		            </div>
  		            <hr class="mb-4">
  		            <button class="btn btn-primary btn-lg btn-block" type="submit">Submit Payment</button>
  		          </form>
  		        </div>
  		      </div>
  		<!--<div class="address-cc-wrapper">
  		<div class="address-wrapper">
  		<div class="form-group">
  		<label for="first-name">First Name</label><input type="text" name="first-name" placeholder="First Name" />
  		<label for="last-name">Last Name</label><input type="text" name="last-name" placeholder="Last Name" />
  		</div>
  		<div class="form-group">
  		<label for="email">Email Address</label><input type="text" name="email" placeholder="Email Address" />
  		</div>
  		<div class="form-group">
  		<label for="delivery-address">Delivery Address</label><input type="text" name="delivery-address" placeholder="Street Address" />
  		<input type="text" name="delivery-address-second" placeholder="" />
  		<label for="city">City</label><input type="text" name="city" placeholder="City" />
  		<label for="state">State/Territory</label>
  		<select>
  			<option value="pa">Pennsylvania</option>
  		</select>
  		<label for="postal-code">Postal Code</label><input type="text" name="postal-code" placeholder="" />
  		<label for="state">Country</label>
  			<select>
  				<option value="usa">United States</option>
  			</select>
  		</div>
  		<div class="form-group">
  		<input type="checkbox" name="billing-address" value="billing-address" />
  		<label for="billing-address">Billing Address same as Shipping?</label>
  		</div>
  		</div>
  		<div class="checkout-wrapper">
  		<p class="product-name">Stay Rad Tee</p>
  		<p class="product-type">Men's Tee</p>
  			<!-- CREDIT CARD FORM STARTS HERE --*>
  			<div class="panel panel-default credit-card-box">
  			<div class="panel-heading display-table" >
  			<div class="row display-tr" >
  			<h3 class="panel-title display-td" >Payment Details</h3>
  			<div class="display-td" >                            
  			<img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
  			</div>
  			</div>                    
  			</div>
  			<div class="panel-body">
  			<form role="form" id="payment-form">
  			<div class="row">
  			<div class="col-xs-12">
  			<div class="form-group">
  			<label for="cardNumber">CARD NUMBER</label>
  			<div class="input-group">
  			<input 
  			type="tel"
  			class="form-control"
  			name="cardNumber"
  			placeholder="Valid Card Number"
  			autocomplete="cc-number"
  			required autofocus 
  			/>
  			<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
  			</div>
  			</div>                            
  			</div>
  			</div>
  			<div class="row">
  			<div class="col-xs-7 col-md-7">
  			<div class="form-group">
  			<label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
  			<input 
  			type="tel" 
  			class="form-control" 
  			name="cardExpiry"
  			placeholder="MM / YY"
  			autocomplete="cc-exp"
  			required 
  			/>
  			</div>
  			</div>
  			<div class="col-xs-5 col-md-5 pull-right">
  			<div class="form-group">
  			<label for="cardCVC">CV CODE</label>
  			<input 
  			type="tel" 
  			class="form-control"
  			name="cardCVC"
  			placeholder="CVC"
  			autocomplete="cc-csc"
  			required
  			/>
  			</div>
  			</div>
  			</div>
  			<div class="row">
  			<div class="col-xs-12">
  			<button class="btn btn-success btn-lg btn-block" type="submit">Submit Payment</button>
  			</div>
  			</div>
  			<div class="row" style="display:none;">
  			<div class="col-xs-12">
  			<p class="payment-errors"></p>
  			</div>
  			</div>
  			</form>
  			</div>
  			</div>            
  			<!-- CREDIT CARD FORM ENDS HERE --*>
  		</div>
  		</div>
  		</div>-->
    </div>
    </div>    
    </div>
    </div>
<?php include 'footer.php' ?>