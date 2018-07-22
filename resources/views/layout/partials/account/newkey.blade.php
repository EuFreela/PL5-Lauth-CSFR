<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url({{asset('lameck/layout/login_v15/images/bg-01.jpg')}});">
					<span class="login100-form-title-1">
						@yield('newkey-wraper-title')
					</span>
				</div>
				@include('Lameck\Lauth::layout.partials.system-message.system-message')
				<form class="login100-form validate-form" method="post" action="{{route('user.postnewkey')}}">
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">@yield('newkey-wraper-input-password')</span>
						<input class="input100" type="password" name="senha" placeholder="@yield('newkey-wraper-input-password-placeholder')" required>
						<span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-18" data-validate = "RePassword is required">
						<span class="label-input100">@yield('newkey-wraper-input-repassword')</span>
						<input class="input100" type="password" name="repita_senha" placeholder="@yield('newkey-wraper-input-repassword-placeholder')" required>
						<span class="focus-input100"></span>
					</div>
					
					<input class="input100" type="hidden" name="token" value="{{$token}}" required>
					

					<div class="flex-sb-m w-full p-b-30">						
						<div>
							<a href="#" class="txt1">
								@yield('newkey-wraper-link-newkey')
							</a>
						</div>					
					</div>
					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn ">
							@yield('newkey-wraper-newkey-namebtn')
                        </button>                        
					</div>
					{{ csrf_field() }}
				</form>
				
			</div>			
		</div>
	</div>
	