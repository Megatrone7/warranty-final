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
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">ویرایش سفارش {{$order->id}}</h1>
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
									<form id="kt_ecommerce_add_product_form" method="post" action="{{route('admin.orders.index')}}/{{$order->id}}" class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data">
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
                                    <div class="mb-10 fv-row col-12">
                                      <label class="required form-label">وضعیت</label>
                                      <select class="form-control" data-control="select2" name='status' required>
                                          <option selected disabled value="">انتخاب کنید</option>
                                          <option value="2">پرداخت شده</option>
                                          <option value="3">لغو شده</option>
                                          <option value="4">درحال پردازش</option>
                                          <option value="5">ارسال شده</option>
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

                      <div class="tab-content">
												<!--begin::Tab pane-->
												<div class="tab-pane fade show active" role="tab-panel">
													<div class="d-flex flex-column gap-7 gap-lg-10">
														<!--begin::عمومی options-->
														<div class="card card-flush py-4">

															<div class="card-body pt-4">

                                  <div class="row">

                                    <div class="mb-10 fv-row col-6">
    																	<label class="form-label">مشتری</label>
    																	<input type="text" name="title" class="form-control mb-2" value="{{$order->user->firstname}} {{$order->user->lastname}} ({{$order->user->mobile}})" disabled/>
    																</div>

                                    <div class="mb-10 fv-row col-6">
    																	<label class="form-label">تاریخ ثبت</label>
    																	<input type="text" class="form-control mb-2" value="{{$order->created_at_fa()}}" disabled/>
    																</div>
                                    <hr>
                                    <div class="mb-10 fv-row col-3">
    																	<label class="form-label">درگاه</label>
    																	<input type="text" class="form-control mb-2" value="{{$order->gateway_fa()}}" disabled/>
    																</div>

                                    <div class="mb-10 fv-row col-3">
    																	<label class="form-label">مبلغ سفارش</label>
    																	<input type="text" class="form-control mb-2" value="{{number_format($order->price1)}} تومان" disabled/>
    																</div>

                                    <div class="mb-10 fv-row col-3">
    																	<label class="form-label">مبلغ تخفیف</label>
    																	<input type="text" class="form-control mb-2" value="{{number_format($order->discount_price)}} تومان" disabled/>
    																</div>

                                    <div class="mb-10 fv-row col-3">
    																	<label class="form-label">مبلغ قابل پرداخت</label>
    																	<input type="text" class="form-control mb-2" value="{{number_format($order->price2)}} تومان" disabled/>
    																</div>

                                    <div class="mb-10 fv-row col-3">
    																	<label class="form-label">مالیات</label>
    																	<input type="text" class="form-control mb-2" value="{{number_format($order->tax_price)}} تومان" disabled/>
    																</div>

                                    <div class="mb-10 fv-row col-3">
    																	<label class="form-label">کرایه ارسال</label>
    																	<input type="text" class="form-control mb-2" value="{{number_format($order->transport_price)}} تومان" disabled/>
    																</div>

                                    <div class="mb-10 fv-row col-3">
    																	<label class="form-label">مبلغ نهایی</label>
    																	<input type="text" class="form-control mb-2" value="{{number_format($order->price3)}} تومان" disabled/>
    																</div>

                                    <hr>

                                    <div class="mb-10 fv-row col-6">
    																	<label class="form-label">کد پیگیری 1</label>
    																	<input type="text" class="form-control mb-2" value="{{$order->ref1}}" disabled/>
    																</div>

                                    <div class="mb-10 fv-row col-6">
    																	<label class="form-label">کد پیگیری 2</label>
    																	<input type="text" class="form-control mb-2" value="{{$order->ref2}}" disabled/>
    																</div>

                                    <hr>

                                    <div class="mb-10 fv-row col-3">
    																	<label class="form-label">تحویل گیرنده</label>
    																	<input type="text" class="form-control mb-2" value="{{$order->address->name}}" disabled/>
    																</div>

                                    <div class="mb-10 fv-row col-3">
    																	<label class="form-label">موبایل تحویل گیرنده</label>
    																	<input type="text" class="form-control mb-2" value="{{$order->address->mobile}}" disabled/>
    																</div>

                                    <div class="mb-10 fv-row col-3">
    																	<label class="form-label">نحوه ارسال</label>
    																	<input type="text" class="form-control mb-2" value="{{$order->transport->title}}" disabled/>
    																</div>

                                    <div class="mb-10 fv-row col-3">
    																	<label class="form-label">زمان ارسال</label>
    																	<input type="text" class="form-control mb-2" value="{{$order->transport_date}} - {{$order->transport_time}}" disabled/>
    																</div>

                                    <div class="mb-10 fv-row col-12">
    																	<label class="form-label">آدرس</label>
    																	<input type="text" class="form-control mb-2" value="{{$order->address->state->title}} - {{$order->address->city->title}} - {{$order->address->address}}" disabled/>
    																</div>

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

                      <div class="tab-content">
												<!--begin::Tab pane-->
												<div class="tab-pane fade show active" role="tab-panel">
													<div class="d-flex flex-column gap-7 gap-lg-10">
														<!--begin::عمومی options-->
														<div class="card card-flush py-4">

															<div class="card-body pt-4">

                                <div class="table-responsive">
                                  <!--begin::Table-->
                                  <table class="table datatable1 text-center table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                                    <!--begin::Table head-->
                                    <thead>
                                      <tr class="fw-bold text-muted">
                                        <th class="w-25px text-center">#</th>
                                        <th class="min-w-120px text-center">عنوان</th>
                                        <th class="min-w-120px text-center">تعداد</th>
                                        <th class="min-w-120px text-center">مبلغ جز</th>
                                        <th class="min-w-120px text-center">مبلغ کل</th>
                                      </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                      <?php $i=1; ?>
                                      @foreach($order->details as $detail)
                                      <tr>
                                        <td>
                                          {{$i++}}
                                        </td>
                                        <td>
                                          <a href='/products/{{$detail->product->slug}}' target="_blank">{{$detail->product->title_fa}}</a>
                                          <hr>
                                          رنگ :
                                          @if($detail->option->color)
                                            {{$detail->option->color->title}}
                                          @else
                                            بدون رنگ
                                          @endif

                                          | سایز :
                                          @if($detail->option->size)
                                            {{$detail->option->size->title}}
                                          @else
                                            بدون سایز
                                          @endif

                                          | گارانتی :
                                          @if($detail->option->warranty)
                                            {{$detail->option->warranty->title}}
                                          @else
                                            بدون گارانتی
                                          @endif

                                          @if($detail->option->text!='')
                                          | توضیحات : {{$detail->option->text}}
                                          @endif
                                        </td>
                                        <td>
                                          {{$detail->count}}
                                        </td>
                                        <td>
                                          {{number_format($detail->price1)}} تومان
                                        </td>
                                        <td>
                                          {{number_format($detail->price2)}} تومان
                                        </td>

                                      </tr>

                                      @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                  </table>
                                  <!--end::Table-->
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
  $('[name="status"]').val('{{$order->status}}');

  $(document).ready(function(){

  });


</script>
@endsection
