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
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">ویرایش محصول</h1>
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
                      <button class="nav-link tabs2 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">جزئیات محصول</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link tabs2" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">مشخصات فنی</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link tabs2" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">گالری تصاویر</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link tabs2" id="seo-tab" data-bs-toggle="tab" data-bs-target="#seo" type="button" role="tab" aria-controls="seo" aria-selected="false">سئو</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active tabs" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <form method="post" action="{{ route('admins.update',	 $user->id) }}" class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data">
                        {{method_field('put')}}
                        @csrf
                        <input class="form-control" type="hidden" name="update_type" value="product">

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

                                      @if(!Gate::allows('products-unique'))
                                      <div class="mb-10 fv-row col-12">
                                        <label class="required form-label">ایجاد کننده</label>
                                        <select class="form-control" data-control="select2" name='creator_id' required>
                                            <option selected disabled value="">انتخاب کنید</option>
                                            @foreach($admins as $admin)
                                              <option value="{{$admin->id}}">{{$admin->firstname}} {{$admin->lastname}}</option>
                                            @endforeach
                                        </select>
                                      </div>
                                      @endif

                                      @if($product->image!=null)
                                      <div class="col-12 text-center">
                                        <img src="{{url($product->image)}}" style="height:25vh"/>
      																</div>
                                      @endif

                                     

                                      <div class="mb-10 fv-row col-6">
      																	<label class="required form-label">عنوان فارسی</label>
      																	<input type="text" name="title_fa" class="form-control mb-2" value="" required/>
      																</div>
                                      <div class="mb-10 fv-row col-3">
      																	<label class="required form-label">دسته بندی</label>
                                        <select class="form-control" data-control="select2" name='category_id' required>
                                          <option disabled selected value="">انتخاب کنید</option>
                                          @foreach($categories as $category1)
                                            <option disabled value="{{$category1->id}}">{{$category1->title}}</option>
                                            @foreach($category1->childrens as $child1)
                                              <option disabled value="{{$child1->id}}">{{$category1->title}} > {{$child1->title}}</option>
                                              @foreach($child1->childrens as $child2)
                                                <option value="{{$child2->id}}">{{$category1->title}} > {{$child1->title}} > {{$child2->title}}</option>
                                              @endforeach
                                            @endforeach
                                          @endforeach
                                        </select>
      																</div>

                                      <div class="mb-10 fv-row col-3">
      																	<label class="required form-label">دسته بندی ویژگی ها</label>
                                        <select class="form-control" data-control="select2" name='property_category_id' required>
                                          <option selected value="0">انتخاب کنید</option>
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

                                      <div class="mb-10 fv-row col-3">
      																	<label class="required form-label">وزن محصول</label>
      																	<input type="number" name="weight" class="form-control mb-2" value="0" required/>
      																</div>

                                      <div class="mb-10 fv-row col-3">
      																	<label class="required form-label">محصول ویژه</label>
                                        <select class="form-control" data-control="select2" name='is_vip' required>
                                            <option selected disabled value="">انتخاب کنید</option>
                                            <option value="0">غیرفعال</option>
                                            <option value="1">فعال</option>
                                        </select>
      																</div>

                                      <div class="mb-10 fv-row col-3">
      																	<label class="required form-label">حداقل سفارش</label>
      																	<input type="number" name="min_order" class="form-control mb-2" value="0" required/>
      																</div>

                                      <div class="mb-10 fv-row col-3">
      																	<label class="required form-label">حداکثر سفارش</label>
      																	<input type="number" name="max_order" class="form-control mb-2" value="0" required/>
      																</div>

                                      @if(Gate::allows('products-status'))
                                      <div class="mb-10 fv-row col-3">
      																	<label class="required form-label">وضعیت</label>
                                        <select class="form-control" data-control="select2" name='status' required>
                                            <option selected disabled value="">انتخاب کنید</option>
                                            <option value="0">غیرفعال</option>
                                            <option value="1">فعال</option>
                                        </select>
      																</div>
                                      @endif

                                      <div class="mb-10 fv-row col-3">
      																	<label class="form-label">طول محصول</label>
      																	<input type="text" name="length" class="form-control mb-2" value=""/>
      																</div>
                                      <div class="mb-10 fv-row col-3">
      																	<label class="form-label">عرض محصول</label>
      																	<input type="text" name="width" class="form-control mb-2" value=""/>
      																</div>
                                      <div class="mb-10 fv-row col-3">
      																	<label class="form-label">ارتفاع محصول</label>
      																	<input type="text" name="height" class="form-control mb-2" value=""/>
      																</div>

                                      <div class="mb-10 fv-row col-12" dir="rtl">
      																	<label class="required form-label">متن</label>
                                        <textarea name='text' class="tox-target">{!!$product->text!!}</textarea>
      																</div>

                                      <div class="mb-10 fv-row col-12">
                                        <label class="form-label">کلمات کلیدی</label>
                                        <input class="form-control" id="tags" name="tags" placeholder="وارد کنید"/>
                                      </div>

                                      <hr>

                                      <div class="mb-10 fv-row col-4">
      																	<label class="required form-label">مقدار تخفیف</label>
      																	<input type="number" name="price2" class="form-control mb-2" value="0" required/>
      																</div>

                                      <div class="mb-10 fv-row col-4">
      																	<label class="form-label">تاریخ شروع جشنواره</label>
      																	<input type="text" name="price2_start" class="form-control mb-2 datepicker" value="0"/>
      																</div>
                                      <div class="mb-10 fv-row col-4">
      																	<label class="form-label">تاریخ پایان جشنواره</label>
      																	<input type="text" name="price2_end" class="form-control mb-2 datepicker" value="0"/>
      																</div>


                                    </div>
    																<!--begin::Input group-->

    																<!--end::Input group-->
    																<!--begin::Input group-->
                                    <div class="d-flex justify-content-end">
                                      <!--begin::Button-->
                                      <a href="/admin/warranties" class="btn btn-light me-5">بازگشت</a>
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
                    </div>
                    <div class="tab-pane fade tabs" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      <form method="post" action="{{route('admin.products.index')}}/{{$product->id}}" class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data">
                        {{method_field('put')}}
                        @csrf
                        <input class="form-control" type="hidden" name="update_type" value="property">

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

                                      @foreach($product->properties as $property)
                                        <div class="mb-8 fv-row col-12">
                                          <label class="form-label">{{$property->title}} <span class='text-danger delete-confirm2' id='property-{{$property->id}}'>(حذف)</span></label>
                                          <input type="text" name="property_{{$property->id}}" class="form-control mb-2" value="{{$property->value}}"/>
                                        </div>
                                      @endforeach

                                    </div>
                                    <!--begin::Input group-->

                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex justify-content-end">
                                      <!--begin::Button-->
                                      <a href="/admin/warranties" class="btn btn-light me-5">بازگشت</a>
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
                      <hr>
                      <form method="post" action="{{route('admin.products.index')}}/{{$product->id}}" class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data">
                        {{method_field('put')}}
                        @csrf
                        <input class="form-control" type="hidden" name="update_type" value="add_property">

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

                                    <h4>افزودن ویژگی دلخواه</h4>
                                    <br>
                                    <div class="row">

                                      <div class="mb-8 fv-row col-4">
                                        <label class="form-label">عنوان</label>
                                        <input type="text" name="title" class="form-control mb-2" value="" required/>
                                      </div>

                                    </div>
                                    <!--begin::Input group-->

                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex justify-content-end">
                                      <!--begin::Button-->
                                      <a href="/admin/warranties" class="btn btn-light me-5">بازگشت</a>
                                      <!--end::Button-->
                                      <!--begin::Button-->
                                      <button type="submit" class="btn btn-primary">
                                        <span class="indicator-label">افزودن</span>
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
                      <form method="post" action="{{route('admin.products.index')}}/{{$product->id}}" class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data">
                        {{method_field('put')}}
                        @csrf
                        <input class="form-control" type="hidden" name="update_type" value="images">

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

                                      <div class="alert alert-warning mb-4" role="alert">
                                            کاربر گرامی ، جهت نمایش صحیح و منظم تصاویر ، سایز تصویر 600 پیکسل در 600 پیکسل باشد
                                      </div>

                                    <div class="row">

                                      <div class="mb-10 fv-row col-12">
      																	<label class="form-label">تصویر</label>
                                        <input class="form-control" type="file" name="image">
      																</div>

                                    </div>
                                    <!--begin::Input group-->

                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex justify-content-end">
                                      <!--begin::Button-->
                                      <!--end::Button-->
                                      <!--begin::Button-->
                                      <button type="submit" class="btn btn-primary">
                                        <span class="indicator-label">ثبت</span>
                                        <span class="indicator-progress">لطفا صبر کنید...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                      </button>
                                      <!--end::Button-->
                                    </div>
                                    <!--end::Input group-->

                                      <hr>

                                    <div class="row">
                                      @foreach($product->images as $img)
                                      <div class='col-md-2'>
                                        <div class="card shadow">
                                          <img class="card-mt-4" src="{{$img->image}}">
                                          <div class="card-body text-center">
                                            <a href='{{$img->image}}' target="_blank" class="btn btn-sm btn-success mb-2">نمایش تصویر</a>
                                            <a class="btn btn-sm btn-danger delete-confirm1" id="delete-{{$img->id}}">حذف تصویر</a>
                                          </div>
                                        </div>
                                      </div>
                                      @endforeach



                                    </div>



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
                      <form method="post" action="{{route('admin.products.index')}}/{{$product->id}}" class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data">
                        {{method_field('put')}}
                        @csrf
                        <input class="form-control" type="hidden" name="update_type" value="seo">

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

                                      <div class="mb-10 fv-row col-12">
                                        <label class="form-label">لینک اختصاصی محصول</label>
                                        <div class='row'>
                                          <div class='col-8'>
                                            <input class="form-control" style="direction:ltr;" type="text" disabled value="{{$product->slug}}">
                                          </div>
                                          <div class='col-4'>
                                            <input class="form-control" style="direction:ltr;" type="text" disabled value="{{url('/products')}}/">
                                          </div>
                                        </div>
                                      </div>

                                      <div class="mb-10 fv-row col-12">
                                        <label class="form-label">Alt تصویر</label>
                                        <input class="form-control" type="text" name="image_alt" value="{{$product->image_alt}}">
                                      </div>

                                      <div class="mb-10 fv-row col-12">
                                        <label class="form-label">عنوان متای محصول</label>
                                        <input class="form-control" type="text" name="meta_title" value="{{$product->meta_title}}">
                                      </div>

                                      <div class="mb-10 fv-row col-12">
                                        <label class="form-label">توضیحات متای محصول</label>
                                        <input class="form-control" type="text" name="meta_descriptions" value="{{$product->meta_descriptions}}">
                                      </div>

                                    </div>
                                    <!--begin::Input group-->

                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex justify-content-end">
                                      <!--begin::Button-->
                                      <!--end::Button-->
                                      <!--begin::Button-->
                                      <button type="submit" class="btn btn-primary">
                                        <span class="indicator-label">ثبت</span>
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

									<!--begin::Form-->

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
  $('[name="title_fa"]').val('{{$product->title_fa}}');
  $('[name="title_en"]').val('{{$product->title_en}}');
  $('[name="category_id"]').val('{{$product->category_id}}');
  $('[name="property_category_id"]').val('{{$product->property_category_id}}');
  $('[name="weight"]').val('{{$product->weight}}');
  $('[name="count"]').val('{{$product->count}}');
  $('[name="brand_id"]').val('{{$product->brand_id}}');
  $('[name="warranty_id"]').val('{{$product->warranty_id}}');
  $('[name="color_id"]').val('{{$product->color_id}}');
  $('[name="is_vip"]').val('{{$product->is_vip}}');
  $('[name="price"]').val('{{$product->price}}');
  $('[name="price2"]').val('{{$product->price2}}');
  $('[name="price2_start"]').val('{{$product->price2_start}}');
  $('[name="price2_end"]').val('{{$product->price2_end}}');
  $('[name="min_order"]').val('{{$product->min_order}}');
  $('[name="max_order"]').val('{{$product->max_order}}');
  $('[name="status"]').val('{{$product->status}}');
  $('[name="creator_id"]').val('{{$product->creator_id}}');

  $('[name="width"]').val('{{$product->width}}');
  $('[name="height"]').val('{{$product->height}}');
  $('[name="length"]').val('{{$product->length}}');


  $(document).ready(function(){
    var tags = document.querySelector("#tags");
    var tagify = new Tagify(tags);

    @foreach($product->tags as $tag)
      tagify.addTags('{{$tag->title}}');
    @endforeach


    tinymce.init({
        selector: '[name="text"]',
        height: 400,
        plugins: [
          'advlist autolink lists link image charmap print preview hr anchor pagebreak',
          'searchreplace wordcount visualblocks visualchars code fullscreen table',
        ],
        toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
        image_advtab: true,
        images_upload_url: '/admin/upload',
        relative_urls: false,
      }).then(function() {
        $('.tox-tinymce').css('direction','rtl');
      });


  });

  var tab1 = '{{$tab1}}';
  $('.tabs').removeClass('show').removeClass('active');
  $('.tabs2').removeClass('active');

  $('#'+tab1+"-tab").addClass('active');
  $('#'+tab1).addClass('show').addClass('active');

  $('body').on('click', '.delete-confirm1', function() {
      var id = $(this).attr('id').split('-')[1];
      var txt1 = 'آیا از حذف این مورد اطمینان دارید ؟';
      var route = "{{route('admin.products.index')}}/"+id+"?type=image";
      var token = "{{ csrf_token() }}";
      q1(id,route,token,txt1);
    });

    $('body').on('click', '.delete-confirm2', function() {
        var id = $(this).attr('id').split('-')[1];
        var txt1 = 'آیا از حذف این مورد اطمینان دارید ؟';
        var route = "{{route('admin.products.index')}}/"+id+"?type=property";
        var token = "{{ csrf_token() }}";
        q1(id,route,token,txt1);
      });

    $(".datepicker").persianDatepicker({
      formatDate: "YYYY/0M/0D",
    });

</script>
@endsection
