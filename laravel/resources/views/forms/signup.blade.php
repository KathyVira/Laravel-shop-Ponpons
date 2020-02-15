@extends('master.master')

@section('content')




<div class="breadcrumb_dress">
	<div class="container">
		<ul>
		<li><a href=#><span class="fas fa-user" aria-hidden="true"></span>Sing Up</a></li>

		</ul>
	</div>
</div>


<div class="special-deals">
	<h2>Don't Wait, Sing Up now!</h2>
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
								<form action="{{url('user/signup')}}" method="post">
									@csrf

                                    <input placeholder="Full Name" name="name" type="text" required="">

                                    <input placeholder="Email Address" name="email" type="email" required="">

                                    <input placeholder="Password" name="password" type="password" required="">

                                    <input placeholder="Confirm Password" name="password_confirmation" type="password" required="">


									<div class="sign-up ">
										<input type="submit" value="Create Account" />
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
								Sign up with</h3>
                        </div>

						<div class="col-md-12 form-group">
							<ul class="social">
								<li class="social_facebook"><a href="{{url('/login/facebook')}}" class="entypo-facebook"></a></li>
								{{-- <li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
								<li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
								<li class="social_behance"><a href="#" class="entypo-behance"></a></li> --}}
                            </ul>

                            {{-- <p style="margin-left:265px">OR</p> --}}
                        <br />
                        {{-- <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                              <a href="{{url('/redirect')}}" class="btn btn-primary">Login with Facebook</a>
                            </div>
                        </div> --}}
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
