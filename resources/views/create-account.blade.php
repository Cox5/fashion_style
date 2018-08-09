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
                            <div class="login-form clearfix">

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
                                <select class="form-item-text" name="gender" id="gender" form="registerform" class="c-dropdown">
                                        <option value="None"></option>
                                        <option value="">Male</option>
                                        <option value="">Female</option>
                                </select>
                                </div>
                                <button type="submit" class="btn btn-black btn-big login-btn">Register</button>

                                
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