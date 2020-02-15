<script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '2600370330182431',
        cookie     : true,
        xfbml      : true,
        version    : 'v5.0'
      });

      FB.AppEvents.logPageView();

    };

    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "https://connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));

     function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}

  </script>

@extends('master.master')

@section('content')




<div class="breadcrumb_dress">
	<div class="container">
		<ul>

			<li><a href="{{('/')}}"><span class="fas fa-user" aria-hidden="true"></span>Login</a> <i></i></li>

		</ul>
	</div>
</div>


<div class="special-deals">
	<h2>Don't Wait, Login now!</h2>
</div>

<!-- container -->
<div class="container">
	<!--section row -->
	<section class="row md-5">
		<!-- login -->
		<div class="modal-body modal-body-sub">
			<div class="row">
				<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
					<div class="sap_tabs">
						<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
							<div class="register">
								<form action="{{url('user/login')}}" method="post">
									@csrf
									<input name="email" placeholder="Email Address" type="email">
									<span class="text-danger">
										@if($errors->has('email'))
										{{$errors->first('email')}}
										@endif
									</span>
									<input name="password" placeholder="Password" type="password">
									<span class="text-danger">
										@if($errors->has('password'))
										{{$errors->first('password')}}
										@endif
									</span>
									<div class="sign-in">
										<input type="submit" value="Sign in" />
									</div>
								</form>
							</div>

							<div id="OR" class="hidden-xs">
								OR</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 modal_body_right modal_body_right1">
					<div class="row text-center sign-with">
						<div class="col-md-12">
							<h3 class="other-nw">
								Sign in with</h3>
						</div>
						<div class="col-md-12">
							<ul class="social">

                                <li class="social_facebook">
                                    <a href="{{url('login/facebook')}}" class="entypo-facebook">

                                        {{-- <li class="social_facebook" scope="public_profile,email"  onlogin="checkLoginState();"><a  class="entypo-facebook"></a> --}}
                                            {{-- <fb:login-button
                                                scope="public_profile,email"
                                                onlogin="checkLoginState();">
                                            </fb:login-button> --}}
                                            {{-- </li> --}}

                                    </a>
                                </li>



                                {{-- <li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>

								<li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
								<li class="social_behance"><a href="#" class="entypo-behance"></a></li> --}}
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>



<!-- login end-->
</section>
<!--section row end-->
</div>
<!-- container end -->






@endsection
