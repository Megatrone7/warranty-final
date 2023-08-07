@extends('panel.layouts.main')
@section('content')
<script>var defaultThemeMode = "light"; var themeMode; if (document.documentElement) { if (document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if (localStorage.getآیتم("data-theme") !== null) { themeMode = localStorage.getآیتم("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
  <!--begin::Page-->
  <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
    <!--begin::Header-->

    @include('panel.layouts.header')

    <!--end::Header-->
    <!--begin::Wrapper-->
    <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
      <!--begin::Sidebar-->
      @include('panel.layouts.sidebar')
      <!--end::Sidebar-->
      <!--begin::Main-->
      <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">ویرایش تنظیمات</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->

										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									<!--begin::Actions-->

									<!--end::Actions-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">

                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link tabs2 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">پیکربندی</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link tabs2" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">مجوز ها</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link tabs2" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">درگاه های پرداخت</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link tabs2" id="seo-tab" data-bs-toggle="tab" data-bs-target="#seo" type="button" role="tab" aria-controls="seo" aria-selected="false">شبکه های اجتماعی</button>
                    </li>
                  </ul>

                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active tabs" id="home" role="tabpanel" aria-labelledby="home-tab">
									<!--begin::Form-->
    									<form id="kt_ecommerce_add_product_form" method="post" action="{{route('admin.settings.index')}}" class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data">
                        @csrf
                        <!--begin::کناری column-->
                        <input type="hidden" name="update_type" value="1"/>


    										<!--end::کناری column-->
    										<!--begin::Main column-->
    										<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
    											<!--begin:::Tabs-->

    											<!--end:::Tabs-->
    											<!--begin::Tab content-->
    											<div class="tab-content">
    												<!--begin::Tab pane-->
    												<div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
    													<div class="d-flex flex-column gap-7 gap-lg-10">
    														<!--begin::عمومی options-->
    														<div class="card card-flush py-4">

    															<div class="card-body pt-4">
                                    @if(session('success'))
                                        <div class="alert alert-success mb-4" role="alert">
                                              {{session('success')}}
                                        </div>
                                      @endif
                                      @if(count($errors)>0)
                                        <div class="alert alert-danger mb-4" role="alert">
                                              @foreach($errors->all() as $error)
                                              <span>{!!$error!!}</span><br>
                                            @endforeach
                                        </div>
                                      @endif
                                    <div class="row">
                                      <div class="mb-10 fv-row col-12">
      																	<label class="form-label">عنوان</label>
      																	<input type="text" name="title" class="form-control mb-2" value=""/>
      																</div>
                                      <div class="mb-10 fv-row col-12">
      																	<label class="form-label">توضیحات</label>
      																	<input type="text" name="descriptions" class="form-control mb-2" value=""/>
      																</div>
                                      <div class="mb-10 fv-row col-12">
      																	<label class="form-label">کلمات کلیدی</label>
                                        <input class="form-control" id="tags" name="tags" placeholder="وارد کنید"/>
      																</div>
                                      <div class="mb-10 fv-row col-12">
      																	<label class="form-label">آدرس</label>
      																	<input type="text" name="address" class="form-control mb-2" value=""/>
      																</div>
                                      <div class="mb-10 fv-row col-4">
      																	<label class="form-label">تلفن</label>
      																	<input type="text" name="phone" class="form-control mb-2" value=""/>
      																</div>
                                      <div class="mb-10 fv-row col-4">
      																	<label class="form-label">کد پستی</label>
      																	<input type="text" name="zipcode" class="form-control mb-2" value=""/>
      																</div>
                                      <div class="mb-10 fv-row col-4">
      																	<label class="form-label">موبایل مدیریت</label>
      																	<input type="text" name="owner_mobile" class="form-control mb-2" value=""/>
      																</div>
                                      <div class="mb-10 fv-row col-4">
      																	<label class="form-label">ایمیل مدیریت</label>
      																	<input type="text" name="owner_email" class="form-control mb-2" value=""/>
      																</div>
                                      <div class="mb-10 fv-row col-4">
      																	<label class="form-label">لوگو</label>
                                        <input class="form-control" type="file" name="logo">
      																</div>
                                      <div class="mb-10 fv-row col-4">
      																	<label class="form-label">فاو آیکون</label>
                                        <input class="form-control" type="file" name="favicon">
      																</div>

                                      <div class="mb-10 fv-row col-4">
      																	<label class="form-label">وضعیت مگامنو</label>
                                        <select class="form-control" data-control="select2" name='mega_status'>
                                            <option selected disabled value="">انتخاب کنید</option>
                                            <option value="0">غیرفعال</option>
                                            <option value="1">فعال</option>
                                        </select>
      																</div>
                                      <div class="mb-10 fv-row col-8">
      																	<label class="form-label">متن فوتر</label>
      																	<input type="text" name="footer_text" class="form-control mb-2" value=""/>
      																</div>
                                      <div class="mb-10 fv-row col-3">
      																	<label class="required form-label">درصد مالیات</label>
      																	<input required type="text" name="tax" class="form-control mb-2" value=""/>
      																</div>

                                    </div>
    																<!--begin::Input group-->

    																<!--end::Input group-->
    																<!--begin::Input group-->
                                    <div class="d-flex justify-content-end">
                                      <!--begin::Button-->
                                      <!--end::Button-->
                                      <!--begin::Button-->
                                      <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                                        <span class="indicator-label">ذخیره تغییرات</span>
                                        <span class="indicator-progress">لطفا صبر کنید...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                      </button>
                                      <!--end::Button-->
                                    </div>
    																<!--end::Input group-->
    															</div>
    															<!--end::کارت header-->

    														</div>

    													</div>
    												</div>
    												<!--end::Tab pane-->
    												<!--begin::Tab pane-->

    												<!--end::Tab pane-->
    											</div>
    											<!--end::Tab content-->

    										</div>
    										<!--end::Main column-->
    									</form>
                    </div>

                    <div class="tab-pane fade tabs" id="profile" role="tabpanel" aria-labelledby="profile-tab">
									<!--begin::Form-->
    									<form id="kt_ecommerce_add_product_form" method="post" action="{{route('admin.settings.index')}}" class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data">
                        @csrf
                        <!--begin::کناری column-->
                        <input type="hidden" name="update_type" value="2"/>


    										<!--end::کناری column-->
    										<!--begin::Main column-->
    										<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
    											<!--begin:::Tabs-->

    											<!--end:::Tabs-->
    											<!--begin::Tab content-->
    											<div class="tab-content">
    												<!--begin::Tab pane-->
    												<div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
    													<div class="d-flex flex-column gap-7 gap-lg-10">
    														<!--begin::عمومی options-->
    														<div class="card card-flush py-4">

    															<div class="card-body pt-4">
                                    @if(session('success'))
                                        <div class="alert alert-success mb-4" role="alert">
                                              {{session('success')}}
                                        </div>
                                      @endif
                                      @if(count($errors)>0)
                                        <div class="alert alert-danger mb-4" role="alert">
                                              @foreach($errors->all() as $error)
                                              <span>{!!$error!!}</span><br>
                                            @endforeach
                                        </div>
                                      @endif
                                    <div class="row">

                                      <div class="mb-10 fv-row col-12">
      																	<label class="form-label">مجوز 1</label>
      																	<input type="text" name="cert1" class="form-control mb-2" value=""/>
      																</div>
                                      <div class="mb-10 fv-row col-12">
      																	<label class="form-label">مجوز 2</label>
      																	<input type="text" name="cert2" class="form-control mb-2" value=""/>
      																</div>
                                      <div class="mb-10 fv-row col-12">
      																	<label class="form-label">مجوز 3</label>
      																	<input type="text" name="cert3" class="form-control mb-2" value=""/>
      																</div>


                                    </div>
    																<!--begin::Input group-->

    																<!--end::Input group-->
    																<!--begin::Input group-->
                                    <div class="d-flex justify-content-end">
                                      <!--begin::Button-->
                                      <!--end::Button-->
                                      <!--begin::Button-->
                                      <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                                        <span class="indicator-label">ذخیره تغییرات</span>
                                        <span class="indicator-progress">لطفا صبر کنید...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                      </button>
                                      <!--end::Button-->
                                    </div>
    																<!--end::Input group-->
    															</div>
    															<!--end::کارت header-->

    														</div>

    													</div>
    												</div>
    												<!--end::Tab pane-->
    												<!--begin::Tab pane-->

    												<!--end::Tab pane-->
    											</div>
    											<!--end::Tab content-->

    										</div>
    										<!--end::Main column-->
    									</form>
                    </div>

                    <div class="tab-pane fade tabs" id="contact" role="tabpanel" aria-labelledby="contact-tab">
									<!--begin::Form-->
    									<form id="kt_ecommerce_add_product_form" method="post" action="{{route('admin.settings.index')}}" class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data">
                        @csrf
                        <!--begin::کناری column-->
                        <input type="hidden" name="update_type" value="3"/>


    										<!--end::کناری column-->
    										<!--begin::Main column-->
    										<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
    											<!--begin:::Tabs-->

    											<!--end:::Tabs-->
    											<!--begin::Tab content-->
    											<div class="tab-content">
    												<!--begin::Tab pane-->
    												<div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
    													<div class="d-flex flex-column gap-7 gap-lg-10">
    														<!--begin::عمومی options-->
    														<div class="card card-flush py-4">

    															<div class="card-body pt-4">
                                    @if(session('success'))
                                        <div class="alert alert-success mb-4" role="alert">
                                              {{session('success')}}
                                        </div>
                                      @endif
                                      @if(count($errors)>0)
                                        <div class="alert alert-danger mb-4" role="alert">
                                              @foreach($errors->all() as $error)
                                              <span>{!!$error!!}</span><br>
                                            @endforeach
                                        </div>
                                      @endif
                                    <div class="row">

                                      <div class="mb-10 fv-row col-12">
      																	<label class="form-label">توکن زرین پال</label>
      																	<input type="text" name="zarinpal_token" class="form-control mb-2" value=""/>
      																</div>
                                      <div class="mb-10 fv-row col-12">
      																	<label class="form-label">وضعیت زرین پال</label>
                                        <select class="form-control" data-control="select2" name='zarinpal_status'>
                                            <option selected disabled value="">انتخاب کنید</option>
                                            <option value="0">غیرفعال</option>
                                            <option value="1">فعال</option>
                                        </select>
      																</div>
                                      <hr>
                                      <div class="mb-10 fv-row col-12">
      																	<label class="form-label">توکن نکست پی</label>
      																	<input type="text" name="nextpay_token" class="form-control mb-2" value=""/>
      																</div>
                                      <div class="mb-10 fv-row col-12">
      																	<label class="form-label">وضعیت نکست پی</label>
                                        <select class="form-control" data-control="select2" name='nextpay_status'>
                                            <option selected disabled value="">انتخاب کنید</option>
                                            <option value="0">غیرفعال</option>
                                            <option value="1">فعال</option>
                                        </select>
      																</div>
                                    </div>
    																<!--begin::Input group-->

    																<!--end::Input group-->
    																<!--begin::Input group-->
                                    <div class="d-flex justify-content-end">
                                      <!--begin::Button-->
                                      <!--end::Button-->
                                      <!--begin::Button-->
                                      <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                                        <span class="indicator-label">ذخیره تغییرات</span>
                                        <span class="indicator-progress">لطفا صبر کنید...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                      </button>
                                      <!--end::Button-->
                                    </div>
    																<!--end::Input group-->
    															</div>
    															<!--end::کارت header-->

    														</div>

    													</div>
    												</div>
    												<!--end::Tab pane-->
    												<!--begin::Tab pane-->

    												<!--end::Tab pane-->
    											</div>
    											<!--end::Tab content-->

    										</div>
    										<!--end::Main column-->
    									</form>
                    </div>

                    <div class="tab-pane fade tabs" id="seo" role="tabpanel" aria-labelledby="seo-tab">
									<!--begin::Form-->
    									<form id="kt_ecommerce_add_product_form" method="post" action="{{route('admin.settings.index')}}" class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data">
                        @csrf
                        <!--begin::کناری column-->
                        <input type="hidden" name="update_type" value="4"/>


    										<!--end::کناری column-->
    										<!--begin::Main column-->
    										<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
    											<!--begin:::Tabs-->

    											<!--end:::Tabs-->
    											<!--begin::Tab content-->
    											<div class="tab-content">
    												<!--begin::Tab pane-->
    												<div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
    													<div class="d-flex flex-column gap-7 gap-lg-10">
    														<!--begin::عمومی options-->
    														<div class="card card-flush py-4">

    															<div class="card-body pt-4">
                                    @if(session('success'))
                                        <div class="alert alert-success mb-4" role="alert">
                                              {{session('success')}}
                                        </div>
                                      @endif
                                      @if(count($errors)>0)
                                        <div class="alert alert-danger mb-4" role="alert">
                                              @foreach($errors->all() as $error)
                                              <span>{!!$error!!}</span><br>
                                            @endforeach
                                        </div>
                                      @endif
                                    <div class="row">

                                      <div class="mb-10 fv-row col-4">
      																	<label class="form-label">تلگرام</label>
      																	<input type="text" name="telegram" class="form-control mb-2" value=""/>
      																</div>
                                      <div class="mb-10 fv-row col-4">
      																	<label class="form-label">اینستاگرام</label>
      																	<input type="text" name="instagram" class="form-control mb-2" value=""/>
      																</div>
                                      <div class="mb-10 fv-row col-4">
      																	<label class="form-label">واتساپ</label>
      																	<input type="text" name="whatsapp" class="form-control mb-2" value=""/>
      																</div>
                                      <div class="mb-10 fv-row col-4">
      																	<label class="form-label">لینکدین</label>
      																	<input type="text" name="linkedin" class="form-control mb-2" value=""/>
      																</div>
                                      <div class="mb-10 fv-row col-4">
      																	<label class="form-label">تویتر</label>
      																	<input type="text" name="twitter" class="form-control mb-2" value=""/>
      																</div>


                                    </div>
    																<!--begin::Input group-->

    																<!--end::Input group-->
    																<!--begin::Input group-->
                                    <div class="d-flex justify-content-end">
                                      <!--begin::Button-->
                                      <!--end::Button-->
                                      <!--begin::Button-->
                                      <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                                        <span class="indicator-label">ذخیره تغییرات</span>
                                        <span class="indicator-progress">لطفا صبر کنید...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                      </button>
                                      <!--end::Button-->
                                    </div>
    																<!--end::Input group-->
    															</div>
    															<!--end::کارت header-->

    														</div>

    													</div>
    												</div>
    												<!--end::Tab pane-->
    												<!--begin::Tab pane-->

    												<!--end::Tab pane-->
    											</div>
    											<!--end::Tab content-->

    										</div>
    										<!--end::Main column-->
    									</form>
                    </div>
                </div>
									<!--end::Form-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->
						@include('panel.layouts.footer')
						<!--end::Footer-->
					</div>
      <!--end:::Main-->
    </div>
    <!--end::Wrapper-->
  </div>
  <!--end::Page-->
</div>
<script>
  $('[name="title"]').val('{{$settings->title}}');
  $('[name="descriptions"]').val('{{$settings->descriptions}}');
  $('[name="address"]').val('{{$settings->address}}');
  $('[name="phone"]').val('{{$settings->phone}}');
  $('[name="zipcode"]').val('{{$settings->zipcode}}');
  $('[name="owner_mobile"]').val('{{$settings->owner_mobile}}');
  $('[name="owner_email"]').val('{{$settings->owner_email}}');
  $('[name="cert1"]').val('{{$settings->cert1}}');
  $('[name="cert2"]').val('{{$settings->cert2}}');
  $('[name="cert3"]').val('{{$settings->cert3}}');
  $('[name="zarinpal_token"]').val('{{$settings->zarinpal_token}}');
  $('[name="nextpay_token"]').val('{{$settings->nextpay_token}}');
  $('[name="telegram"]').val('{{$settings->telegram}}');
  $('[name="instagram"]').val('{{$settings->instagram}}');
  $('[name="whatsapp"]').val('{{$settings->whatsapp}}');
  $('[name="linkedin"]').val('{{$settings->linkedin}}');
  $('[name="twitter"]').val('{{$settings->twitter}}');
  $('[name="footer_text"]').val('{{$settings->footer_text}}');
  $('[name="mega_status"]').val('{{$settings->mega_status}}');
  $('[name="tax"]').val('{{$settings->tax}}');
  $('[name="zarinpal_status"]').val('{{$settings->zarinpal_status}}');
  $('[name="nextpay_status"]').val('{{$settings->nextpay_status}}');

  $(document).ready(function(){
    var tags = document.querySelector("#tags");
    var tagify = new Tagify(tags);

    @foreach($tags as $tag)
      tagify.addTags('{{$tag}}');
    @endforeach

  });
</script>
@endsection
