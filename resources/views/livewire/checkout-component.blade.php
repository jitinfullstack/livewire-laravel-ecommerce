<main id="main" class="main-site">

    <style>
        .summary-item .row-in-form input[type=password], .summary-item .row-in-form input[type=text], .summary-item .row-in-form input[type=tel] {
            font-size: 13px;
            line-height: 19px;
            display: inline-block;
            height: 43px;
            padding: 2px 20px;
            max-width: 300px;
            width: 100%;
            border: 1px solid #e6e6e6;
        }
    </style>

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">home</a></li>
                <li class="item-link"><span>Checkout</span></li>
            </ul>
        </div>
        <div class=" main-content-area">

            <form wire:submit.prevent="placeOrder" onsubmit="$('#processing').show();">

                <div class="row">
                    <div class="col-md-12">
                        <div class="wrap-address-billing">
                            <h3 class="box-title">Billing Address</h3>
                            <div class="billing-address">
                            {{-- <form action="#" method="get" name="frm-billing"> --}}
                                <p class="row-in-form">
                                    <label for="fname">first name<span>*</span></label>
                                    <input type="text" name="fname" value="" placeholder="Your name" wire:model="firstname">
                                    @error('firstname')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="lname">last name<span>*</span></label>
                                    <input type="text" name="lname" value="" placeholder="Your last name" wire:model="lastname">
                                    @error('lastname')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="email">Email Addreess:</label>
                                    <input type="email" name="email" value="" placeholder="Type your email" wire:model="email">
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="phone">Phone number<span>*</span></label>
                                    <input type="number" name="phone" value="" placeholder="10 digits format" wire:model="mobile">
                                    @error('mobile')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="add">Address 1:</label>
                                    <input type="text" name="add" value="" placeholder="Street at apartment number" wire:model="line1">
                                    @error('line1')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="add">Address 2:</label>
                                    <input type="text" name="add" value="" placeholder="Street at apartment number" wire:model="line2">
                                </p>
                                <p class="row-in-form">
                                    <label for="country">Country<span>*</span></label>
                                    <input type="text" name="country" value="" placeholder="United States" wire:model="country">
                                    @error('country')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </p>

                                <p class="row-in-form">
                                    <label for="province">Province<span>*</span></label>
                                    <input type="text" name="province" value="" placeholder="Province" wire:model="province">
                                    @error('province')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="city">Town / City<span>*</span></label>
                                    <input type="text" name="city" value="" placeholder="City name" wire:model="city">
                                    @error('city')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form">
                                    <label for="zip-code">Postcode / ZIP:</label>
                                    <input type="number" name="zip-code" value="" placeholder="Your postal code" wire:model="zipcode">
                                    @error('zipcode')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </p>
                                <p class="row-in-form fill-wife">
                                    {{-- <label class="checkbox-field">
                                        <input name="create-account" id="create-account" value="forever" type="checkbox">
                                        <span>Create an account?</span>
                                    </label> --}}
                                    <label class="checkbox-field">
                                        <input name="different-add" id="different-add" value="1" type="checkbox" wire:model="ship_to_different">
                                        <span>Ship to a different address?</span>
                                    </label>
                                </p>
                            {{-- </form> --}}
                            </div>
                        </div>
                    </div>

                    @if ($ship_to_different)
                        <div class="col-md-12">
                            <div class="wrap-address-billing">
                                <h3 class="box-title">Shipping Address</h3>
                                <div class="shipping-address">
                                {{-- <form action="#" method="get" name="frm-billing"> --}}
                                    <p class="row-in-form">
                                        <label for="fname">first name<span>*</span></label>
                                        <input type="text" name="fname" value="" placeholder="Your name" wire:model="s_firstname">
                                        @error('s_firstname')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="lname">last name<span>*</span></label>
                                        <input type="text" name="lname" value="" placeholder="Your last name" wire:model="s_lastname">
                                        @error('s_lastname')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="email">Email Addreess:</label>
                                        <input type="email" name="email" value="" placeholder="Type your email" wire:model="s_email">
                                        @error('s_email')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="phone">Phone number<span>*</span></label>
                                        <input type="number" name="phone" value="" placeholder="10 digits format" wire:model="s_mobile">
                                        @error('s_mobile')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="add">Address 1:</label>
                                        <input type="text" name="add" value="" placeholder="Street at apartment number" wire:model="s_line1">
                                        @error('s_line1')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="add">Address 2:</label>
                                        <input type="text" name="add" value="" placeholder="Street at apartment number" wire:model="s_line2">
                                    </p>
                                    <p class="row-in-form">
                                        <label for="country">Country<span>*</span></label>
                                        <input type="text" name="country" value="" placeholder="United States" wire:model="s_country">
                                        @error('s_country')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </p>

                                    <p class="row-in-form">
                                        <label for="province">Province<span>*</span></label>
                                        <input type="text" name="province" value="" placeholder="Province" wire:model="s_province">
                                        @error('s_province')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </p>

                                    <p class="row-in-form">
                                        <label for="city">Town / City<span>*</span></label>
                                        <input type="text" name="city" value="" placeholder="City name" wire:model="s_city">
                                        @error('s_city')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </p>
                                    <p class="row-in-form">
                                        <label for="zip-code">Postcode / ZIP:</label>
                                        <input type="number" name="zip-code" value="" placeholder="Your postal code" wire:model="s_zipcode">
                                        @error('s_zipcode')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </p>
                                    <p class="row-in-form fill-wife">
                                        {{-- <label class="checkbox-field">
                                            <input name="create-account" id="create-account" value="forever" type="checkbox">
                                            <span>Create an account?</span>
                                        </label> --}}
                                        {{-- <label class="checkbox-field">
                                            <input name="different-add" id="different-add" value="forever" type="checkbox">
                                            <span>Ship to a different address?</span>
                                        </label> --}}
                                    </p>
                                {{-- </form> --}}
                                </div>
                            </div>
                        </div>
                    @endif

                </div>


                <div class="summary summary-checkout">
                    <div class="summary-item payment-method">
                        <h4 class="title-box">Payment Method</h4>

                        @if ($paymentmode == 'card')
                            <div class="wrap-address-billing">

                                @if (Session::has('stripe_error'))
                                    <div class="alert alert-danger" role="alert">{{ Session::get('stripe_error') }}</div>
                                @endif

                                <p class="row-in-form">
                                    <label for="card-no">Card Number:</label>
                                    <input type="text" name="card-no" value="" placeholder="Card Number" wire:model="card_no">
                                    @error('card_no')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </p>

                                <p class="row-in-form">
                                    <label for="exp-month">Expiry Month:</label>
                                    <input type="text" name="exp-month" value="" placeholder="MM" wire:model="exp_month">
                                    @error('exp_month')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </p>

                                <p class="row-in-form">
                                    <label for="exp-year">Expiry Year:</label>
                                    <input type="text" name="exp-year" value="" placeholder="YYYY" wire:model="exp_year">
                                    @error('exp_year')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </p>

                                <p class="row-in-form">
                                    <label for="cvc">CVC:</label>
                                    <input type="password" name="cvc" value="" placeholder="CVC" wire:model="cvc">
                                    @error('cvc')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </p>
                            </div>
                        @endif

                        <p class="summary-info"><span class="title">Check / Money order</span></p>
                        <p class="summary-info"><span class="title">Credit Cart (saved)</span></p>
                        <div class="choose-payment-methods">
                            <label class="payment-method">
                                <input name="payment-method" id="payment-method-bank" value="cod" type="radio" wire:model="paymentmode">
                                <span>Cash On Delivery</span>
                                <span class="payment-desc">Order Now Pay on Delivery! But the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</span>
                            </label>
                            <label class="payment-method">
                                <input name="payment-method" id="payment-method-visa" value="card" type="radio" wire:model="paymentmode">
                                <span>Debit / Credit Card</span>
                                <span class="payment-desc">There are many variations of passages of Lorem Ipsum available</span>
                            </label>
                            <label class="payment-method">
                                <input name="payment-method" id="payment-method-paypal" value="paypal" type="radio" wire:model="paymentmode">
                                <span>Paypal</span>
                                <span class="payment-desc">You can pay with your credit</span>
                                <span class="payment-desc">card if you don't have a paypal account</span>
                            </label>
                            @error('paymentmode')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        @if (Session::has('checkout'))

                            <p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">${{ Session::get('checkout')['total'] }}</span></p>

                        @endif

                        @if ($errors->isEmpty())
                            <div wire:ignore id="processing" style="font-size: 22px; margin-bottom: 20px; padding-left: 37px; color: green; display: none;">
                                <i class="fa fa-spinner fa-pulse fa-fw"></i>
                                <span>Processing...</span>
                            </div>
                        @endif

                        {{-- <a href="thankyou.html" class="btn btn-medium">Place order now</a> --}}
                        <button type="submit" class="btn btn-medium">Place order now</button>
                    </div>
                    <div class="summary-item shipping-method">
                        <h4 class="title-box f-title">Shipping method</h4>
                        <p class="summary-info"><span class="title">Flat Rate</span></p>
                        <p class="summary-info"><span class="title">Fixed $0</span></p>

                    </div>
                </div>

                {{-- <div class="wrap-show-advance-info-box style-1 box-in-site">
                    <h3 class="title-box">Most Viewed Products</h3>
                    <div class="wrap-products">
                        <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('assets/images/products/digital_04.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">new</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                    <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('assets/images/products/digital_17.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item sale-label">sale</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                    <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('assets/images/products/digital_15.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">new</span>
                                        <span class="flash-item sale-label">sale</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                    <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('assets/images/products/digital_01.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item bestseller-label">Bestseller</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                    <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('assets/images/products/digital_21.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                    </a>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                    <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('assets/images/products/digital_03.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item sale-label">sale</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                    <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('assets/images/products/digital_04.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">new</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                    <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                </div>
                            </div>

                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                        <figure><img src="{{ asset('assets/images/products/digital_05.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item bestseller-label">Bestseller</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                    <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </form>
        </div><!--end main content area-->
    </div><!--end container-->

</main>