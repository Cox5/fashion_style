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
                <h2>Change password</h2>
                <form method="POST" action="/change-password" id="changepassword">
                    {{ csrf_field() }}

                    <div class="login-form clearfix">

                    <div class="form-item form-item-full">
                        <input class="form-item-text" type="password" name="old_password" id="old_password" placeholder="Your old password" required>
                    </div>
                    <div class="form-item form-item-full">
                        <input class="form-item-text" type="password" name="password" id="password" placeholder="Your new password" required>
                    </div>
                    <div class="form-item form-item-full">
                        <input class="form-item-text" type="password" name="password_confirmation" id="password_confirmation" placeholder="Your new password" required>
                    </div>

                    <button type="submit" class="btn btn-black btn-big login-btn">Change password</button>

                    </div>

                </form>
        </div>
        @include('layouts.errors')
    </div>
</div>


<!-- javascript -->
<script type="text/javascript" src="{{ URL::asset('scripts/libs/jquery-3.1.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/helper.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('scripts/default.js') }}"></script>

</body>

</html>            