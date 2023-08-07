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
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
              <!--begin::Page title-->
              <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1
                  class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                  داشبورد</h1>
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
            <div id="kt_app_content_container" class="app-container container-fluid">
              <!--begin::Row-->
              <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-4 mb-md-5 mb-xl-1">
                  <a href="/admin/customers">
                  <!--begin::کارت widget 20-->
                  <div class="card card-flush bg-danger bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-30 mb-5 mb-xl-1"
                    style="b">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                      <!--begin::Title-->
                      <div class="card-title d-flex flex-column">
                        <!--begin::مقدار-->
                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2"> کاربر</span>
                        <!--end::مقدار-->
                        <!--begin::Subtitle-->
                        <span class="text-white opacity-75 pt-1 fw-semibold fs-6">کاربران ماه جاری
                        </span>
                     
                    
                        <!--end::Subtitle-->
                      </div>
                      <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::کارت body-->
                    <div class="card-body d-flex align-items-end pt-0 pb-4">
                      <!--begin::پردازش-->
                      <div class="d-flex align-items-center flex-column mt-3 w-100">
                        <div
                          class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                          <span>کل</span>
                          {{$count}}
                          <span>کاربر</span>
                        </div>

                      </div>
                      <!--end::پردازش-->
                    </div>
                    <!--end::کارت body-->
                  </div>
                  <!--end::کارت widget 20-->
                  <!--begin::کارت widget 7-->

                  <!--end::کارت widget 7-->
                </a></div>


                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-4 mb-md-5 mb-xl-1">
                  <a href="/admin/products">
                  <!--begin::کارت widget 20-->
                  <div class="card bg-success card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-30 mb-5 mb-xl-1"
                    >
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                      <!--begin::Title-->
                      <div class="card-title d-flex flex-column">
                        <!--begin::مقدار-->
                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2"> محصول</span>
                        
                        <!--end::مقدار-->
                        <!--begin::Subtitle-->
                        <span class="text-white opacity-75 pt-1 fw-semibold fs-6">محصولات ماه جاری
                        </span>{{$product}}
                        <!--end::Subtitle-->
                      </div>
                      <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::کارت body-->
                    <div class="card-body d-flex align-items-end pt-0 pb-4">
                      <!--begin::پردازش-->
                      <div class="d-flex align-items-center flex-column mt-3 w-100">
                        <div
                          class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                          <span>کل</span>
                          <span>محصول</span>
                        </div>

                      </div>
                      <!--end::پردازش-->
                    </div>
                    <!--end::کارت body-->
                  </div>
                  </a>
                  <!--end::کارت widget 20-->
                  <!--begin::کارت widget 7-->

                  <!--end::کارت widget 7-->
                </div>

                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-4 mb-md-5 mb-xl-1">
                  <a href="/admin/blogs">
                  <!--begin::کارت widget 20-->
                  <div class="card bg-primary card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-30 mb-5 mb-xl-1"
                    style="">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                      <!--begin::Title-->
                      <div class="card-title d-flex flex-column">
                        <!--begin::مقدار-->
                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2"> مطلب</span>
                        <!--end::مقدار-->
                        <!--begin::Subtitle-->
                        <span class="text-white opacity-75 pt-1 fw-semibold fs-6">مطالب ماه جاری
                        </span>
                        <!--end::Subtitle-->
                      </div>
                      <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::کارت body-->
                    <div class="card-body d-flex align-items-end pt-0 pb-4">
                      <!--begin::پردازش-->
                      <div class="d-flex align-items-center flex-column mt-3 w-100">
                        <div
                          class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                          <span>کل</span>
                          <span>مطلب</span>
                        </div>

                      </div>
                      <!--end::پردازش-->
                    </div>
                    <!--end::کارت body-->
                  </div></a>
                  <!--end::کارت widget 20-->
                  <!--begin::کارت widget 7-->

                  <!--end::کارت widget 7-->
                </div>

                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-4 mb-md-5 mb-xl-1">
                  <a href="/admin/product_comments">
                  <!--begin::کارت widget 20-->
                  <div class="card card-flush bg-warning bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-30 mb-5 mb-xl-1"
                    >
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                      <!--begin::Title-->
                      <div class="card-title d-flex flex-column">
                        <!--begin::مقدار-->
                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2"> نظر</span>
                        <!--end::مقدار-->
                        <!--begin::Subtitle-->
                        <span class="text-white opacity-75 pt-1 fw-semibold fs-6">نظرات ماه جاری
                        </span>
                        <!--end::Subtitle-->
                      </div>
                      <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::کارت body-->
                    <div class="card-body d-flex align-items-end pt-0 pb-4">
                      <!--begin::پردازش-->
                      <div class="d-flex align-items-center flex-column mt-3 w-100">
                        <div
                          class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                          <span>کل</span>
                          <span>نظر</span>
                        </div>

                      </div>
                      <!--end::پردازش-->
                    </div>
                    <!--end::کارت body-->
                  </div></a>
                  <!--end::کارت widget 20-->
                  <!--begin::کارت widget 7-->

                  <!--end::کارت widget 7-->
                </div>

                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-4 mb-md-5 mb-xl-1">
                  <a href="/admin/orders">
                  <!--begin::کارت widget 20-->
                  <div class="card card-flush bg-dark bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-30 mb-5 mb-xl-1"
                  >
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                      <!--begin::Title-->
                      <div class="card-title d-flex flex-column">
                        <!--begin::مقدار-->
                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2"> سفارش</span>
                        <!--end::مقدار-->
                        <!--begin::Subtitle-->
                        <span class="text-white opacity-75 pt-1 fw-semibold fs-6">سفارشات ماه جاری
                        </span>
                        <!--end::Subtitle-->
                      </div>
                      <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::کارت body-->
                    <div class="card-body d-flex align-items-end pt-0 pb-4">
                      <!--begin::پردازش-->
                      <div class="d-flex align-items-center flex-column mt-3 w-100">
                        <div
                          class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                          <span>کل</span>
                          <span>سفارش</span>
                        </div>

                      </div>
                      <!--end::پردازش-->
                    </div>
                    <!--end::کارت body-->
                  </div></a>
                  <!--end::کارت widget 20-->
                  <!--begin::کارت widget 7-->

                  <!--end::کارت widget 7-->
                </div>

                <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-4 mb-md-5 mb-xl-1">
                  <a href="/admin/orders">
                  <!--begin::کارت widget 20-->
                  <div class="card card-flush bg-info bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-30 mb-5 mb-xl-1"
                    >
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                      <!--begin::Title-->
                      <div class="card-title d-flex flex-column">
                        <!--begin::مقدار-->
                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2"> تومان</span>
                        <!--end::مقدار-->
                        <!--begin::Subtitle-->
                        <span class="text-white opacity-75 pt-1 fw-semibold fs-6">فروش ماه جاری
                        </span>
                        <!--end::Subtitle-->
                      </div>
                      <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::کارت body-->
                    <div class="card-body d-flex align-items-end pt-0 pb-4">
                      <!--begin::پردازش-->
                      <div class="d-flex align-items-center flex-column mt-3 w-100">
                        <div
                          class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                          <span>کل</span>
                          <span> تومان</span>
                        </div>

                      </div>
                      <!--end::پردازش-->
                    </div>
                    <!--end::کارت body-->
                  </div></a>
                  <!--end::کارت widget 20-->
                  <!--begin::کارت widget 7-->

                  <!--end::کارت widget 7-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->


                <!--end::Col-->
                <!--begin::Col-->

                <!--end::Col-->
              </div>
              <!--end::Row-->

              <!--begin::Row-->
              <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                <!--begin::Col-->
               
                <div class="col-xl-6">
                  <!--begin::Chart widget 36-->
                  <div class="card card-flush overflow-hidden h-lg-100">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                      <!--begin::Title-->
                      <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark"></span>
                      </h3>
                      <!--end::Title-->
                      <!--begin::Toolbar-->
                      <ul class="nav nav-pills nav-justified" role="tablist">
                                  <li class="nav-item waves-effect waves-light">
                                      <a class="nav-link-month active" data-toggle="tab" data-a="" data-b="month" role="tab">
                                          <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                          <span class="d-none d-sm-block">ماهانه</span>
                                      </a>
                                  </li>
                                  <li class="nav-item waves-effect waves-light">
                                      <a class="nav-link-day" data-toggle="tab" data-a="" data-b="day" role="tab">
                                          <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                          <span class="d-none d-sm-block">روزانه</span>
                                      </a>
                                  </li>

                              </ul>
                      <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::کارت body-->
                    <div class="card-body d-flex align-items-end p-0">
                      <!--begin::Chart-->
                      <div class="tab-content p-3 text-muted col-12">
                                  <div class="tab-pane active" id="-month" role="tabpanel">
                                      <p class="mb-0">
                                        <div id="_month_chart" class="apex-charts"></div>
                                      </p>
                                  </div>
                                  <div class="tab-pane" id="-day" role="tabpanel">
                                      <p class="mb-0">
                                        <div id="_day_chart" class="apex-charts"></div>
                                      </p>
                                  </div>

                              </div>
                      <!--end::Chart-->
                    </div>
                    <!--end::کارت body-->
                  </div>
                  <!--end::Chart widget 36-->
                </div>
               
                <!--end::Col-->
              </div>
              
              <div class="row g-5 g-xl-10 mb-5">
                <div id="kt_app_content" class="app-content flex-column-fluid">
  								<!--begin::Content container-->
  								<div id="kt_app_content_container" class="app-container container-xxl">

  									<!--begin::جداول Widget 13-->
  									<div class="card mb-5">
  										<!--begin::Header-->
  										<div class="card-header border-0 pt-5"> 
                        <div class="card-title">
                          <div class='row'>
                            <div class='col-12 mb-4'>
                              <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">لیست آخرین محصولات</h1>
                            </div>
                            <div class='col-12'>
                              <div class="d-flex align-items-center position-relative my-1">
      													<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
      													<span class="svg-icon svg-icon-1 position-absolute ms-4">
      														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      															<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
      															<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
      														</svg>
      													</span>
      													<!--end::Svg Icon-->
      													<input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="جستجو " />
      												</div>
                            </div>
                          </div>

  												<!--begin::جستجو-->

  												<!--end::جستجو-->
  											</div>



  										</div>
  										<!--end::Header-->
  										<!--begin::Body-->
  										<div class="card-body py-3">



  											<!--begin::Table container-->
  											<div class="table-responsive">
  												<!--begin::Table-->
  												<table class="table datatable1 text-center table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
  													<!--begin::Table head-->
  													<thead>
  														<tr class="fw-bold text-muted">
  															<th class="w-25px text-center">#</th>
                                <th class="min-w-140px text-center">کد محصول</th>
                                <th class="min-w-140px text-center">دسته بندی</th>
  															<th class="min-w-140px text-center">عنوان</th>
                                <th class="min-w-140px text-center">مبلغ</th>
  															<th class="min-w-120px text-center">وضعیت</th>
  														</tr>
  													</thead>
  													<!--end::Table head-->
  													<!--begin::Table body-->
  													<tbody>
                        
                              <tr>
                                <td>
                                 
                                </td>
                                <td>
                                  
                                </td>

                                <td>
                                  
                                </td>
                                <td>
                                  <a href='/products/' target="_blank"></a>
                                </td>

                                <td>
                                   تومان
                                </td>
                                <td>
                                  
                                    <span class="badge badge-light-danger">غیرفعال</span>
                                 
                                    <span class="badge badge-light-success">فعال</span>
                                 
                                </td>

                              </tr>
                              
  													</tbody>
  													<!--end::Table body-->
  												</table>
  												<!--end::Table-->
  											</div>
  											<!--end::Table container-->
  										</div>
  										<!--begin::Body-->
  									</div>
  									<!--end::جداول Widget 13-->
  								</div>
  								<!--end::Content container-->
  							</div>
              </div>

              <div class="row g-5 g-xl-10 mb-5">
                <div id="kt_app_content" class="app-content flex-column-fluid">
  								<!--begin::Content container-->
  								<div id="kt_app_content_container" class="app-container container-xxl">

  									<!--begin::جداول Widget 13-->
  									<div class="card mb-5">
  										<!--begin::Header-->
  										<div class="card-header border-0 pt-5">
                        <div class="card-title">
                          <div class='row'>
                            <div class='col-12 mb-4'>
                              <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">لیست آخرین کاربران</h1>
                            </div>
                            <div class='col-12'>
                              <div class="d-flex align-items-center position-relative my-1">
      													<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
      													<span class="svg-icon svg-icon-1 position-absolute ms-4">
      														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      															<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
      															<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
      														</svg>
      													</span>
      													<!--end::Svg Icon-->
      													<input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="جستجو " />
      												</div>
                            </div>
                          </div>

  												<!--begin::جستجو-->

  												<!--end::جستجو-->
  											</div>



  										</div>
  										<!--end::Header-->
  										<!--begin::Body-->
  										<div class="card-body py-3">



  											<!--begin::Table container-->
  											<div class="table-responsive">
  												<!--begin::Table-->
  												<table class="table datatable1 text-center table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
  													<!--begin::Table head-->
                            <thead>
  														<tr class="fw-bold text-muted">
  															<th class="w-25px text-center">#</th>
  															<th class="min-w-140px text-center">موبایل</th>
  															<th class="min-w-120px text-center">نام</th>
  															<th class="min-w-120px text-center">نام خانوادگی</th>
  															<th class="min-w-120px text-center">وضعیت</th>
  														</tr>
  													</thead>
  													<!--end::Table head-->
  													<!--begin::Table body-->
  													<tbody>
                        
  														<tr>
                                <td>
                                 
                                </td>
  															<td>
  																<a href="/edit" target="_blank"></a>
  															</td>
  															<td>
  																
  															</td>
  															<td></td>
  															<td>
                                 
                                    <span class="badge badge-light-danger">غیرفعال</span>
                                
                                    <span class="badge badge-light-success">فعال</span>
                                  
  															</td>

  														</tr>
                             
  													</tbody>
  													<!--end::Table body-->
  												</table>
  												<!--end::Table-->
  											</div>
  											<!--end::Table container-->
  										</div>
  										<!--begin::Body-->
  									</div>
  									<!--end::جداول Widget 13-->
  								</div>
  								<!--end::Content container-->
  							</div>
              </div>
             
              <!--end::Row-->

              <!--begin::Row-->

              <!--end::Row-->
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

@endsection
