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
                  <a href="/admin/admins" class="btn btn-sm fw-bold btn-primary" >بازگشت به منوی قبلی</a>

									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->

										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">ویرایش سطح دسترسی {{$admin->name}} {{$admin->family}}</h1>
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
                  <form action="/admin/admins/{{$admin->id}}/permissions" method="post">
                    @csrf
                    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
  										<!--begin::Col-->
  										<div class="col-md-4">
  											<div class="card card-flush h-md-100">
  												<div class="card-header">
  													<div class="card-title">
  														<h2>مدیران</h2>
  													</div>
  												</div>
  												<div class="card-body pt-1">
  													<div class="d-flex flex-column text-gray-600">
  														<div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="admins-list">
  																<span class="form-check-label">لیست مدیران</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="admins-create">
  																<span class="form-check-label">ایجاد مدیر</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="admins-update">
  																<span class="form-check-label">ویرایش مدیر</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="admins-delete">
  																<span class="form-check-label">حذف مدیر</span>
  															</label>
                              </div>
                              <hr>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="admin_permissions-update">
  																<span class="form-check-label">مدیریت سطح دسترسی</span>
  															</label>
                              </div>
  													</div>
  												</div>
  											</div>
  										</div>

                      <div class="col-md-4">
  											<div class="card card-flush h-md-100">
  												<div class="card-header">
  													<div class="card-title">
  														<h2>مشتریان</h2>
  													</div>
  												</div>
  												<div class="card-body pt-1">
  													<div class="d-flex flex-column text-gray-600">
  														<div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="customers-list">
  																<span class="form-check-label">لیست مشتریان</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="customers-create">
  																<span class="form-check-label">ایجاد مشتری</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="customers-update">
  																<span class="form-check-label">ویرایش مشتری</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="customers-delete">
  																<span class="form-check-label">حذف مشتری</span>
  															</label>
                              </div>
  													</div>
  												</div>
  											</div>
  										</div>

                      <div class="col-md-4">
  											<div class="card card-flush h-md-100">
  												<div class="card-header">
  													<div class="card-title">
  														<h2>دسته بندی وبلاگ</h2>
  													</div>
  												</div>
  												<div class="card-body pt-1">
  													<div class="d-flex flex-column text-gray-600">
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="blog_categories-list">
  																<span class="form-check-label">لیست دسته بندی مطالب</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="blog_categories-create">
  																<span class="form-check-label">ایجاد دسته بندی مطالب</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="blog_categories-update">
  																<span class="form-check-label">ویرایش دسته بندی مطالب</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="blog_categories-delete">
  																<span class="form-check-label">حذف دسته بندی مطالب</span>
  															</label>
                              </div>
  													</div>
  												</div>
  											</div>
  										</div>

                      <div class="col-md-4">
  											<div class="card card-flush h-md-100">
  												<div class="card-header">
  													<div class="card-title">
  														<h2>وبلاگ</h2>
  													</div>
  												</div>
  												<div class="card-body pt-1">
  													<div class="d-flex flex-column text-gray-600">
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="blogs-list">
  																<span class="form-check-label">لیست مطالب</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="blogs-create">
  																<span class="form-check-label">ایجاد مطلب</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="blogs-update">
  																<span class="form-check-label">ویرایش مطلب</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="blogs-delete">
  																<span class="form-check-label">حذف مطلب</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="blogs-unique">
  																<span class="form-check-label">نمایش مطالب مرتبط</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="blogs-status">
  																<span class="form-check-label">غیرفعال یا فعالسازی مطالب</span>
  															</label>
                              </div>
  													</div>
  												</div>
  											</div>
  										</div>

                      <div class="col-md-4">
  											<div class="card card-flush h-md-100">
  												<div class="card-header">
  													<div class="card-title">
  														<h2>صفحات</h2>
  													</div>
  												</div>
  												<div class="card-body pt-1">
  													<div class="d-flex flex-column text-gray-600">
  														<div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="pages-list">
  																<span class="form-check-label">لیست صفحات</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="pages-create">
  																<span class="form-check-label">ایجاد صفحه</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="pages-update">
  																<span class="form-check-label">ویرایش صفحه</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="pages-delete">
  																<span class="form-check-label">حذف صفحه</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="pages-unique">
  																<span class="form-check-label">نمایش صفحات مرتبط</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="pages-status">
  																<span class="form-check-label">غیرفعال یا فعالسازی صفحات</span>
  															</label>
                              </div>
  													</div>
  												</div>
  											</div>
  										</div>

                      <div class="col-md-4">
  											<div class="card card-flush h-md-100">
  												<div class="card-header">
  													<div class="card-title">
  														<h2>دیدگاه های مطالب</h2>
  													</div>
  												</div>
  												<div class="card-body pt-1">
  													<div class="d-flex flex-column text-gray-600">
  														<div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="blog_comments-list">
  																<span class="form-check-label">لیست دیدگاه ها</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="blog_comments-update">
  																<span class="form-check-label">ویرایش دیدگاه</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="blog_comments-delete">
  																<span class="form-check-label">حذف دیدگاه</span>
  															</label>
                              </div>
  													</div>
  												</div>
  											</div>
  										</div>

                      <div class="col-md-4">
  											<div class="card card-flush h-md-100">
  												<div class="card-header">
  													<div class="card-title">
  														<h2>دیدگاه های محصولات</h2>
  													</div>
  												</div>
  												<div class="card-body pt-1">
  													<div class="d-flex flex-column text-gray-600">
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="product_comments-list">
  																<span class="form-check-label">لیست دیدگاه ها</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="product_comments-update">
  																<span class="form-check-label">ویرایش دیدگاه</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="product_comments-delete">
  																<span class="form-check-label">حذف دیدگاه</span>
  															</label>
                              </div>
  													</div>
  												</div>
  											</div>
  										</div>

                      <div class="col-md-4">
  											<div class="card card-flush h-md-100">
  												<div class="card-header">
  													<div class="card-title">
  														<h2>پرسش و پاسخ ها</h2>
  													</div>
  												</div>
  												<div class="card-body pt-1">
  													<div class="d-flex flex-column text-gray-600">
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="product_questions-list">
  																<span class="form-check-label">لیست پرسش و پاسخ ها</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="product_questions-update">
  																<span class="form-check-label">ویرایش پرسش و پاسخ</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="product_questions-delete">
  																<span class="form-check-label">حذف پرسش و پاسخ</span>
  															</label>
                              </div>
  													</div>
  												</div>
  											</div>
  										</div>

                      <div class="col-md-4">
  											<div class="card card-flush h-md-100">
  												<div class="card-header">
  													<div class="card-title">
  														<h2>دسته بندی محصولات</h2>
  													</div>
  												</div>
  												<div class="card-body pt-1">
  													<div class="d-flex flex-column text-gray-600">
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="product_categories-list">
  																<span class="form-check-label">لیست دسته بندی محصولات</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="product_categories-create">
  																<span class="form-check-label">ایجاد دسته بندی محصول</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="product_categories-update">
  																<span class="form-check-label">ویرایش دسته بندی محصول</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="product_categories-delete">
  																<span class="form-check-label">حذف دسته بندی محصول</span>
  															</label>
                              </div>
                              <hr>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="category_properties-list">
  																<span class="form-check-label">لیست ویژگی ها</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="category_properties-create">
  																<span class="form-check-label">ایجاد ویژگی</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="category_properties-update">
  																<span class="form-check-label">ویرایش ویژگی</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="category_properties-delete">
  																<span class="form-check-label">حذف ویژگی</span>
  															</label>
                              </div>
  													</div>
  												</div>
  											</div>
  										</div>

                      <div class="col-md-4">
  											<div class="card card-flush h-md-100">
  												<div class="card-header">
  													<div class="card-title">
  														<h2>محصولات</h2>
  													</div>
  												</div>
  												<div class="card-body pt-1">
  													<div class="d-flex flex-column text-gray-600">
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="products-list">
  																<span class="form-check-label">لیست محصولات</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="products-create">
  																<span class="form-check-label">ایجاد محصول</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="products-update">
  																<span class="form-check-label">ویرایش محصول</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="products-delete">
  																<span class="form-check-label">حذف محصول</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="products-unique">
  																<span class="form-check-label">نمایش محصولات مرتبط</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="products-status">
  																<span class="form-check-label">غیرفعال یا فعالسازی محصولات</span>
  															</label>
                              </div>
  													</div>
  												</div>
  											</div>
  										</div>

                      <div class="col-md-4">
  											<div class="card card-flush h-md-100">
  												<div class="card-header">
  													<div class="card-title">
  														<h2>برند ها</h2>
  													</div>
  												</div>
  												<div class="card-body pt-1">
  													<div class="d-flex flex-column text-gray-600">
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="product_brands-list">
  																<span class="form-check-label">لیست برند ها</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="product_brands-create">
  																<span class="form-check-label">ایجاد برند</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="product_brands-update">
  																<span class="form-check-label">ویرایش برند</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="product_brands-delete">
  																<span class="form-check-label">حذف برند</span>
  															</label>
                              </div>
  													</div>
  												</div>
  											</div>
  										</div>

                      <div class="col-md-4">
  											<div class="card card-flush h-md-100">
  												<div class="card-header">
  													<div class="card-title">
  														<h2>گارانتی ها</h2>
  													</div>
  												</div>
  												<div class="card-body pt-1">
  													<div class="d-flex flex-column text-gray-600">
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="product_warranties-list">
  																<span class="form-check-label">لیست گارانتی ها</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="product_warranties-create">
  																<span class="form-check-label">ایجاد گارانتی</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="product_warranties-update">
  																<span class="form-check-label">ویرایش گارانتی</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="product_warranties-delete">
  																<span class="form-check-label">حذف گارانتی</span>
  															</label>
                              </div>
  													</div>
  												</div>
  											</div>
  										</div>

                      <div class="col-md-4">
  											<div class="card card-flush h-md-100">
  												<div class="card-header">
  													<div class="card-title">
  														<h2>رنگ ها</h2>
  													</div>
  												</div>
  												<div class="card-body pt-1">
  													<div class="d-flex flex-column text-gray-600">
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="product_colors-list">
  																<span class="form-check-label">لیست رنگ ها</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="product_colors-create">
  																<span class="form-check-label">ایجاد رنگ</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="product_colors-update">
  																<span class="form-check-label">ویرایش رنگ</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="product_colors-delete">
  																<span class="form-check-label">حذف رنگ</span>
  															</label>
                              </div>
  													</div>
  												</div>
  											</div>
  										</div>

                      <div class="col-md-4">
  											<div class="card card-flush h-md-100">
  												<div class="card-header">
  													<div class="card-title">
  														<h2>روش های حمل و نقل</h2>
  													</div>
  												</div>
  												<div class="card-body pt-1">
  													<div class="d-flex flex-column text-gray-600">
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="transports-list">
  																<span class="form-check-label">لیست روش های حمل و نقل</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="transports-create">
  																<span class="form-check-label">ایجاد روش حمل و نقل</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="transports-update">
  																<span class="form-check-label">ویرایش روش حمل و نقل</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="transports-delete">
  																<span class="form-check-label">حذف روش حمل و نقل</span>
  															</label>
                              </div>
                              <hr>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="transport_prices-list">
  																<span class="form-check-label">لیست قیمت های روش حمل و نقل</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="transport_prices-create">
  																<span class="form-check-label">ایجاد قیمت روش حمل و نقل</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="transport_prices-update">
  																<span class="form-check-label">ویرایش قیمت روش حمل و نقل</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="transport_prices-delete">
  																<span class="form-check-label">حذف قیمت روش حمل و نقل</span>
  															</label>
                              </div>
  													</div>
  												</div>
  											</div>
  										</div>

                      <div class="col-md-4">
  											<div class="card card-flush h-md-100">
  												<div class="card-header">
  													<div class="card-title">
  														<h2>منوی هدر</h2>
  													</div>
  												</div>
  												<div class="card-body pt-1">
  													<div class="d-flex flex-column text-gray-600">
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="header_menus-list">
  																<span class="form-check-label">لیست منوی هدر</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="header_menus-create">
  																<span class="form-check-label">ایجاد منوی هدر</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="header_menus-update">
  																<span class="form-check-label">ویرایش منوی هدر</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="header_menus-delete">
  																<span class="form-check-label">حذف منوی هدر</span>
  															</label>
                              </div>
  													</div>
  												</div>
  											</div>
  										</div>

                      <div class="col-md-4">
  											<div class="card card-flush h-md-100">
  												<div class="card-header">
  													<div class="card-title">
  														<h2>منوی فوتر</h2>
  													</div>
  												</div>
  												<div class="card-body pt-1">
  													<div class="d-flex flex-column text-gray-600">
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="footer_menus-list">
  																<span class="form-check-label">لیست منوی فوتر</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="footer_menus-create">
  																<span class="form-check-label">ایجاد منوی فوتر</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="footer_menus-update">
  																<span class="form-check-label">ویرایش منوی فوتر</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="footer_menus-delete">
  																<span class="form-check-label">حذف منوی فوتر</span>
  															</label>
                              </div>
  													</div>
  												</div>
  											</div>
  										</div>

                      <div class="col-md-4">
  											<div class="card card-flush h-md-100">
  												<div class="card-header">
  													<div class="card-title">
  														<h2>منوی مگامنو</h2>
  													</div>
  												</div>
  												<div class="card-body pt-1">
  													<div class="d-flex flex-column text-gray-600">
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="mega_menus-list">
  																<span class="form-check-label">لیست منوی مگامنو</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="mega_menus-create">
  																<span class="form-check-label">ایجاد منوی مگامنو</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="mega_menus-update">
  																<span class="form-check-label">ویرایش منوی مگامنو</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="mega_menus-delete">
  																<span class="form-check-label">حذف منوی مگامنو</span>
  															</label>
                              </div>
  													</div>
  												</div>
  											</div>
  										</div>

                      <div class="col-md-4">
  											<div class="card card-flush h-md-100">
  												<div class="card-header">
  													<div class="card-title">
  														<h2>کوپن و جشنواره ها</h2>
  													</div>
  												</div>
  												<div class="card-body pt-1">
  													<div class="d-flex flex-column text-gray-600">
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="discounts-list">
  																<span class="form-check-label">لیست تخفیف ها</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="discounts-create">
  																<span class="form-check-label">ایجاد تخفیف</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="discounts-update">
  																<span class="form-check-label">ویرایش تخفیف</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="discounts-delete">
  																<span class="form-check-label">حذف تخفیف</span>
  															</label>
                              </div>
  													</div>
  												</div>
  											</div>
  										</div>

                      <div class="col-md-4">
  											<div class="card card-flush h-md-100">
  												<div class="card-header">
  													<div class="card-title">
  														<h2>استان ها و شهر ها</h2>
  													</div>
  												</div>
  												<div class="card-body pt-1">
  													<div class="d-flex flex-column text-gray-600">
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="states-list">
  																<span class="form-check-label">لیست استان ها</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="states-create">
  																<span class="form-check-label">ایجاد استان</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="states-update">
  																<span class="form-check-label">ویرایش استان</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="states-delete">
  																<span class="form-check-label">حذف استان</span>
  															</label>
                              </div>
                              <hr>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="state_cities-list">
  																<span class="form-check-label">لیست شهر ها</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="state_cities-create">
  																<span class="form-check-label">ایجاد شهر</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="state_cities-update">
  																<span class="form-check-label">ویرایش شهر</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="state_cities-delete">
  																<span class="form-check-label">حذف شهر</span>
  															</label>
                              </div>
  													</div>
  												</div>
  											</div>
  										</div>

                      <div class="col-md-4">
  											<div class="card card-flush h-md-100">
  												<div class="card-header">
  													<div class="card-title">
  														<h2>سفارشات</h2>
  													</div>
  												</div>
  												<div class="card-body pt-1">
  													<div class="d-flex flex-column text-gray-600">
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="orders-list">
  																<span class="form-check-label">لیست سفارشات</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="orders-update">
  																<span class="form-check-label">ویرایش سفارش</span>
  															</label>
                              </div>
  													</div>
  												</div>
  											</div>
  										</div>

                      <div class="col-md-4">
  											<div class="card card-flush h-md-100">
  												<div class="card-header">
  													<div class="card-title">
  														<h2>اسلایدر ها</h2>
  													</div>
  												</div>
  												<div class="card-body pt-1">
  													<div class="d-flex flex-column text-gray-600">
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="sliders-list">
  																<span class="form-check-label">لیست اسلایدر ها</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="sliders-create">
  																<span class="form-check-label">ایجاد اسلایدر</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="sliders-update">
  																<span class="form-check-label">ویرایش اسلایدر</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="sliders-delete">
  																<span class="form-check-label">حذف اسلایدر</span>
  															</label>
                              </div>
  													</div>
  												</div>
  											</div>
  										</div>

                      <div class="col-md-4">
  											<div class="card card-flush h-md-100">
  												<div class="card-header">
  													<div class="card-title">
  														<h2>لوگو ها</h2>
  													</div>
  												</div>
  												<div class="card-body pt-1">
  													<div class="d-flex flex-column text-gray-600">
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="logos-list">
  																<span class="form-check-label">لیست لوگو ها</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="logos-create">
  																<span class="form-check-label">ایجاد لوگو</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="logos-update">
  																<span class="form-check-label">ویرایش لوگو</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="logos-delete">
  																<span class="form-check-label">حذف لوگو</span>
  															</label>
                              </div>
  													</div>
  												</div>
  											</div>
  										</div>

                      <div class="col-md-4">
  											<div class="card card-flush h-md-100">
  												<div class="card-header">
  													<div class="card-title">
  														<h2>بنر ها</h2>
  													</div>
  												</div>
  												<div class="card-body pt-1">
  													<div class="d-flex flex-column text-gray-600">
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="banners-list">
  																<span class="form-check-label">لیست بنر ها</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="banners-update">
  																<span class="form-check-label">ویرایش بنر</span>
  															</label>
                              </div>
  													</div>
  												</div>
  											</div>
  										</div>

                      <div class="col-md-4">
  											<div class="card card-flush h-md-100">
  												<div class="card-header">
  													<div class="card-title">
  														<h2>سوالات متداول</h2>
  													</div>
  												</div>
  												<div class="card-body pt-1">
  													<div class="d-flex flex-column text-gray-600">
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="faqs-list">
  																<span class="form-check-label">لیست سوالات متداول</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="faqs-create">
  																<span class="form-check-label">ایجاد سوال متداول</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="faqs-update">
  																<span class="form-check-label">ویرایش سوال متداول</span>
  															</label>
                              </div>
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="faqs-delete">
  																<span class="form-check-label">حذف سوال متداول</span>
  															</label>
                              </div>
  													</div>
  												</div>
  											</div>
  										</div>

                      <div class="col-md-4">
  											<div class="card card-flush h-md-100">
  												<div class="card-header">
  													<div class="card-title">
  														<h2>تنظیمات</h2>
  													</div>
  												</div>
  												<div class="card-body pt-1">
  													<div class="d-flex flex-column text-gray-600">
                              <div class="d-flex align-items-center py-2">
                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
  																<input class="form-check-input" type="checkbox" name="permissions[]" value="settings-update">
  																<span class="form-check-label">ویرایش تنظیمات</span>
  															</label>
                              </div>
  													</div>
  												</div>
  											</div>
  										</div>


  									</div>
                    <div class="row mt-4 pt-4">
                      <div>
                        <button class='btn btn-primary col-12' type="submit">ثبت تغییرات</button>
                      </div>
                    </div>
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
  var names = @json($permissions);
  for(var i=0;i<names.length;i++)
  {
    $('[value="'+names[i]['name']+'"]').prop('checked',true);
  }
</script>
@endsection
