<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url({{asset('lameck/layout/login_v15/images/bg-01.jpg')}});">
					<span class="login100-form-title-1">
						@yield('forgot-wraper-title')
					</span>
				</div>
				@include('Lameck\Lauth::layout.partials.system-message.system-message')
				<form class="login100-form validate-form" method="post" action="{{route('user.postforgot')}}">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">@yield('forgot-wraper-input-email')</span>
						<input class="input100" type="email" name="email" placeholder="@yield('forgot-wraper-input-email-placeholder')" required>
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							@yield('forgot-wraper-namebtn')
                        </button>
                        <a href="{{route('user.getsignin')}}" class="login100-form-btn-primary ml-4">
							@yield('forgot-wraper-cancel-namebtn')
                        </a>
					</div>
					{{ csrf_field() }}
				</form>
				
			</div>			
		</div>
	</div>
	