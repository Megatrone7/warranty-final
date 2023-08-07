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
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">ویرایش اسلایدر محصولات {{$slider->title}}</h1>
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
									<form id="kt_ecommerce_add_product_form" method="post" action="{{route('admin.product_sliders.index')}}/{{$slider->id}}" class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data">
                    {{method_field('put')}}
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
												<div class="tab-pane fade show active" role="tab-panel">
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
    																	<label class="required form-label">دسته بندی</label>
                                      <select class="form-control" data-control="select2" name='category_id' required>
                                        <option disabled selected value="">انتخاب کنید</option>
                                        @foreach($categories as $category1)
                                          <option value="{{$category1->id}}">{{$category1->title}}</option>
                                          @foreach($category1->childrens as $child1)
                                            <option value="{{$child1->id}}">{{$category1->title}} > {{$child1->title}}</option>
                                            @foreach($child1->childrens as $child2)
                                              <option value="{{$child2->id}}">{{$category1->title}} > {{$child1->title}} > {{$child2->title}}</option>
                                            @endforeach
                                          @endforeach
                                        @endforeach
                                      </select>
    																</div>

                                    <div class="mb-10 fv-row col-4">
    																	<label class="required form-label">مرتب سازی</label>
    																	<input type="number" name="order" class="form-control mb-2" value="0" required/>
    																</div>

                                    <div class="mb-10 fv-row col-4">
    																	<label class="required form-label">عنوان</label>
    																	<input type="text" name="title" class="form-control mb-2" value="" required/>
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
                                  <a href="/admin/product_sliders"  class="btn btn-light me-5">بازگشت</a>
                                  <!--end::Button-->
                                  <!--begin::Button-->
                                  <button type="submit" class="btn btn-primary">
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
  $('[name="title"]').val('{{$slider->title}}');
  $('[name="status"]').val('{{$slider->status}}');
  $('[name="order"]').val('{{$slider->order}}');
  $('[name="category_id"]').val('{{$slider->category_id}}');

  $(document).ready(function(){

  });


</script>
@endsection
