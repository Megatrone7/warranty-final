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
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">افزودن تنوع</h1>
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
									<!--begin::Form-->
									<form id="kt_ecommerce_add_product_form" method="post" action="{{route('admin.product_options.store')}}" class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data">
                    @csrf

                    <!--begin::کناری column-->

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

                                  <div class="mb-10 fv-row col-3">
                                    <label class="required form-label">محصول</label>
                                    <select class="form-control" data-control="select2" name='product_id' required>
                                        <option selected disabled value="">انتخاب کنید</option>
                                        @foreach($products as $product)
                                          <option value="{{$product->id}}">{{$product->title_fa}}</option>
                                        @endforeach
                                    </select>
                                  </div>

                                  <div class="mb-10 fv-row col-3">
                                    <label class="required form-label">رنگ</label>
                                    <select class="form-control" data-control="select2" name='color_id' required>
                                        <option selected value="0">بدون رنگ</option>
                                        @foreach($colors as $color)
                                          <option value="{{$color->id}}">{{$color->title}}</option>
                                        @endforeach
                                    </select>
                                  </div>

                                  <div class="mb-10 fv-row col-3">
                                    <label class="required form-label">سایز</label>
                                    <select class="form-control" data-control="select2" name='size_id' required>
                                        <option selected value="0">بدون سایز</option>
                                        @foreach($sizes as $size)
                                          <option value="{{$size->id}}">{{$size->title}}</option>
                                        @endforeach
                                    </select>
                                  </div>

                                  <div class="mb-10 fv-row col-3">
                                    <label class="required form-label">گارانتی</label>
                                    <select class="form-control" data-control="select2" name='warranty_id' required>
                                        <option selected value="0">بدون گارانتی</option>
                                        @foreach($warranties as $warranty)
                                          <option value="{{$warranty->id}}">{{$warranty->title}}</option>
                                        @endforeach
                                    </select>
                                  </div>

                                  <div class="mb-10 fv-row col-4">
  																	<label class="required form-label">مبلغ به تومان</label>
  																	<input type="text" name="price" class="form-control mb-2" value="0" required/>
  																</div>

                                  <div class="mb-10 fv-row col-4">
  																	<label class="required form-label">موجودی</label>
  																	<input type="number" name="count" class="form-control mb-2" value="0" required/>
  																</div>

                                  <div class="mb-10 fv-row col-4">
  																	<label class="form-label">توضیحات</label>
  																	<input type="text" name="text" class="form-control mb-2" value="0"/>
  																</div>

                                  <div class="mb-10 fv-row col-4">
  																	<label class="required form-label">وضعیت</label>
                                    <select class="form-control" data-control="select2" name='status' required>
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
                                  <a href="/admin/product_options" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">بازگشت</a>
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

</script>
@endsection
