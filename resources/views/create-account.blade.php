<!DOCTYPE html>
<html>
<head>
	@include('layouts.head')
</head>
<body>

    @include('layouts.nav')


    <div class="container">

            <div class="content block">

                    <div class="login-form-wrap">
                            <h2>Create account</h2>
                        <form method="POST" action="/register" id="registerform">
                                {{ csrf_field() }}
                        <div class="container">
                            <div class="row">
                            <div class="login-form clearfix">

                                <div class="block-half" style="padding-left:25%;">
                                <h6>Register</h6>
                                <div class="form-item form-item-full">
                                    <input class="form-item-text" type="text" name="name" id="name" placeholder="Your name" required>
                                </div>
                                <div class="form-item form-item-full">
                                    <input class="form-item-text" type="date" name="date_of_birth" id="date_of_birth" placeholder="Date of birth" required>
                                </div>
                                <div class="form-item form-item-full">
                                    <input class="form-item-text" type="email" name="email" id="email" placeholder="E-mail address" required>
                                </div>
                                <div class="form-item form-item-full">
                                    <input class="form-item-text" type="password" name="password" id="password" placeholder="Password" required>
                                </div>
                                <div class="form-item form-item-full">
                                        <input class="form-item-text" type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required>
                                    </div>
                                <div class="form-item form-item-full">
                                    <input class="form-item-text" type="text" name="phone" id="phone" placeholder="Phone number" required>
                                </div>
                                <div class="form-item form-item-full">
                                <select class="form-item-text" name="gender" id="gender" form="registerform" class="c-dropdown" >
                                        <option value="">Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                </select>
                            </div>
                                </div>
                                <div class="block-half">
                                    <h6>Shipping Address Info</h6>
                                    
                                    <div class="form-item form-item-full">
                                        <input class="form-item-text" type="text" name="bill_address" id="bill_address" placeholder="Billing Address" required>
                                    </div>
                                    <div class="form-item form-item-full">
                                        <input class="form-item-text" type="text" name="bill_city" id="bill_city" placeholder="Billing city" required>
                                    </div>
                                    <div class="form-item form-item-full">
                                        <input class="form-item-text" type="text" name="bill_zip" id="bill_zip" placeholder="Billing ZIP" required>
                                    </div>
                                    <div class="form-item form-item-full">
                                        <input class="form-item-text" type="text" name="bill_country" id="bill_country" placeholder="Billing country" required>
                                    </div>
                                    
                                    
                                </div>

                                <div class="block-half">
                                        <h6>Billing Address Info</h6>
                                        
                                        <div class="form-item form-item-full">
                                            <input class="form-item-text" type="text" name="ship_address" id="ship_address" placeholder="Shipping Address" >
                                        </div>
                                        <div class="form-item form-item-full">
                                            <input class="form-item-text" type="text" name="ship_city" id="ship_city" placeholder="Shipping city" >
                                        </div>
                                        <div class="form-item form-item-full">
                                            <input class="form-item-text" type="text" name="ship_zip" id="ship_zip" placeholder="Shipping ZIP" >
                                        </div>
                                        <div class="form-item form-item-full">
                                            <input class="form-item-text" type="text" name="ship_country" id="ship_country" placeholder="Shipping country" >
                                         </div>

                                        
                                        <button type="submit" class="btn btn-black btn-big login-btn">Register</button>
                                        
                                </div>
                            </div>

                            </div>
                        </form>
                            @include('layouts.errors')
                        </div>

            </div>

    </div>

    <!-- javascript -->
	<script type="text/javascript" src="{{ URL::asset('scripts/libs/jquery-3.1.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/helper.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('scripts/default.js') }}"></script>
    
</body>

</html>