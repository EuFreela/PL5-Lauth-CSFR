<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url({{asset('lameck/layout/login_v15/images/bg-01.jpg')}});">
					<span class="login100-form-title-1">
						@yield('signup-wraper-title')
					</span>
				</div>
				@include('Lameck\Lauth::layout.partials.system-message.system-message')
				<form class="login100-form validate-form" method="post" action="{{route('user.postsignup')}}">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Nome is required">
						<span class="label-input100">@yield('signup-wraper-input-name')</span>
						<input class="input100" type="text" name="nome" placeholder="@yield('signup-wraper-input-name-placeholder')"  value="{{old('nome')}}" required>
						<span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">@yield('signup-wraper-input-email')</span>
						<input class="input100" type="email" name="email" placeholder="@yield('signup-wraper-input-email-placeholder')" value="{{old('email')}}" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">@yield('signup-wraper-input-password')</span>
						<input class="input100" type="password" name="senha" placeholder="@yield('signup-wraper-input-password-placeholder')" required>
						<span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-18" data-validate = "RePassword is required">
						<span class="label-input100">@yield('signup-wraper-input-repassword')</span>
						<input class="input100" type="password" name="repita_senha" placeholder="@yield('signup-wraper-input-repassword-placeholder')" required>
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">						
						<div>
							<a href="#" class="txt1">
								@yield('signup-wraper-link-signup')
							</a>
						</div>					
					</div>
					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn ">
							@yield('signup-wraper-signup-namebtn')
                        </button>
                        <a href="{{route('user.getsignin')}}" class="login100-form-btn-primary ml-4">
							@yield('signup-wraper-signup-cancel-namebtn')
                        </a>
					</div>
					{{ csrf_field() }}
				</form>
				
			</div>			
		</div>
	</div>
	