@extends('panel.layouts.main')
@section('content')
<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getآیتم("data-theme") !== null ) { themeMode = localStorage.getآیتم("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::احراز هویت - ورود -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
					<!--begin::Form-->
					<div class="d-flex flex-center flex-column flex-lg-row-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-500px p-10">
							<!--begin::Form-->
							<form class="form w-100" method="post" novalidate="novalidate" id="kt_sign_in_form" action="{{route('admin.auth.store')}}/login">
                {{method_field('put')}}
                @csrf
                <!--begin::Heading-->
                <input type="hidden" name='auth_type' value="login1"/>

								<div class="text-center mb-11">
									<!--begin::Title-->
									<h1 class="text-dark fw-bolder mb-3">ورود به پنل مدیریت</h1>
									<!--end::Title-->
								</div>
								<!--begin::Heading-->
								<!--begin::Login options-->

                @if(session('success'))
                      <div class="alert alert-success" role="alert">
                            {{session('success')}}
                      </div>
                    @endif
                    @if(count($errors)>0)
                      <div class="alert alert-danger" role="alert">
                            @foreach($errors->all() as $error)
                            <span>{!!$error!!}</span><br>
                          @endforeach
                      </div>
                    @endif
								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::ایمیل-->
									<input type="text" required placeholder="شماره موبایل" name="mobile" autocomplete="off" class="form-control bg-transparent" />
									<!--end::ایمیل-->
								</div>

								<!--begin::ثبت button-->
								<div class="d-grid mb-10">
									<button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
										<!--begin::Indicator label-->
										<span class="indicator-label">ورود</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">لطفا صبر کنید...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
								</div>
								<!--end::ثبت button-->
								<!--begin::ثبت نام-->
								<!--end::ثبت نام-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Form-->
					<!--begin::Footer-->

					<!--end::Footer-->
				</div>
				<!--end::Body-->
				<!--begin::کناری-->
				<div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url(/panel/assets/media/misc/auth-bg.png)">
					<!--begin::Content-->
					<div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
						<!--begin::Logo-->
						<a href="/" class="mb-0 mb-lg-12">
							<img alt="Logo" src="{{\App\Models\Setting::first()->logo}}" style="height:15vh !important" class="h-60px h-lg-75px" />
						</a>
						<!--end::Logo-->
						<!--begin::Image-->
						<!-- <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="/panel/assets/media/misc/auth-screens.png" alt="" /> -->
						<!--end::Image-->
						<!--begin::Title-->
						<!-- <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">سریع، کارآمد و محصولات</h1> -->
						<!--end::Title-->
						<!--begin::Text-->
						<!-- <div class="d-none d-lg-block text-white fs-base text-center">در این نوع پست،
						<a href="#" class="opacity-75-hover text-warning fw-bold me-1">وبلاگر</a>فردی را که با او مصاحبه کرده اند معرفی می کند
						<br />و برخی اطلاعات پس زمینه در مورد ارائه می دهد
						<a href="#" class="opacity-75-hover text-warning fw-bold me-1">مصاحبه شونده</a>و آنها
						<br />کار بعد از این متن مصاحبه است.</div> -->
						<!--end::Text-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::کناری-->
			</div>
			<!--end::احراز هویت - ورود-->
		</div>
@endsection
