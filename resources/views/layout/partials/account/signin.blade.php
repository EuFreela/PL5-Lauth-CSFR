<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url({{asset('lameck/layout/login_v15/images/bg-01.jpg')}});">
					<span class="login100-form-title-1">
						@yield('signin-wraper-title')
					</span>
				</div>
				@include('Lameck\Lauth::layout.partials.system-message.system-message')
				<form class="login100-form validate-form" method="post" action="{{route('user.postsignin')}}">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">@yield('signin-wraper-input-email')</span>
						<input class="input100" type="email" name="email" placeholder="@yield('signin-wraper-input-email-placeholder')" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">@yield('signin-wraper-input-password')</span>
						<input class="input100" type="password" name="pwd" placeholder="@yield('signin-wraper-input-password-placeholder')" required>
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="rememberme">
							<label class="label-checkbox100" for="ckb1">
								@yield('signin-wraper-rememberme')
							</label>
						</div>
						
						<div>
							<a href="{{route('user.getforgot')}}" class="txt1">
								@yield('signin-wraper-forgot')
							</a>
						</div>	
						<div>
							<a href="{{route('user.getsignup')}}" class="txt1">
								@yield('signin-wraper-link-signup')
							</a>
						</div>					
					</div>
					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							@yield('signin-wraper-login-namebtn')
						</button>
					</div>
					{{ csrf_field() }}
				</form>
				
			</div>			
		</div>
	</div>
	