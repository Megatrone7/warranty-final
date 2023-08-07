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
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                      لیست صفحات

                    </h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->

										<!--end::Breadcrumb-->
									</div>

								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">

									<!--begin::جداول Widget 13-->
									<div class="card mb-5 mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
                      <div class="card-title">
												<!--begin::جستجو-->
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
												<!--end::جستجو-->
											</div>
											<div class="card-toolbar">
                        @if(Gate::allows('pages-create'))
                        <a href="/admin/pages/create" class="btn btn-sm fw-bold btn-primary" >ساختن</a>
                        @endif
                      </div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body py-3">
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
											<!--begin::Table container-->
											<div class="table-responsive">
												<!--begin::Table-->
												<table class="table datatable1 text-center table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
													<!--begin::Table head-->
													<thead>
														<tr class="fw-bold text-muted">
															<th class="w-25px text-center">#</th>
                              <th class="min-w-120px text-center">ایجاد کننده</th>
															<th class="min-w-120px text-center">عنوان</th>
                              <th class="min-w-120px text-center">وضعیت</th>
															<th class="min-w-100px text-center">عملیات</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
                            <?php $i=1; ?>
                            @foreach($pages as $page)
														<tr>
                              <td>
                                {{$i++}}
                              </td>
                              <td>
                                @if($page->creator_id==0)
                                  نامشخص
                                @else
                                  {{$page->creator->firstname}} {{$page->creator->lastname}}
                                @endif
															</td>

															<td>
                                {{$page->title}}
															</td>

                              <td>
                                @if($page->status=='0')
                                  <span class="badge badge-light-danger">غیرفعال</span>
                                @elseif($page->status=='1')
                                  <span class="badge badge-light-success">فعال</span>
                                @endif
															</td>

															<td>
                                @if(Gate::allows('pages-delete'))
																<a  class="btn text-danger btn-bg-light btn-active-color-primary btn-sm delete-confirm" id='delete-{{$page->id}}'>
																	<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																	حذف
																	<!--end::Svg Icon-->
																</a>
                                @endif

                                @if(Gate::allows('pages-update'))
                                <a href="{{route('admin.pages.index')}}/{{$page->id}}/edit" class="btn text-warning btn-bg-light btn-active-color-primary btn-sm me-1">
																	<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																	ویرایش
																	<!--end::Svg Icon-->
																</a>
                                @endif

                                <a href="/pages/{{$page->slug}}" target="_blank" class="btn text-success btn-bg-light btn-active-color-primary btn-sm me-1">
																	<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																	نمایش
																	<!--end::Svg Icon-->
																</a>

															</td>
														</tr>

                            @endforeach
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
  $('body').on('click', '.delete-confirm', function() {
      var id = $(this).attr('id').split('-')[1];
      var txt1 = 'آیا از حذف این مورد اطمینان دارید ؟';
      var route = "{{route('admin.pages.index')}}/"+id;
      var token = "{{ csrf_token() }}";
      q1(id,route,token,txt1);
    });
</script>
@endsection
