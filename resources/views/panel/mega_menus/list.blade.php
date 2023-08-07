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
                      لیست مگا منو
                      @if(isset($parent->parent))
                      > {{$parent->parent->title}}
                      @endif
                      @if($parent!="")
                        > {{$parent->title}}
                      @endif

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
                        @if(Gate::allows('mega_menus-create'))
                          @if($parent=="")
                            <a href="/admin/mega_menus/create" class="btn btn-sm fw-bold btn-primary" >ساختن</a>
                          @else
                            <a href="/admin/mega_menus/{{$parent->id}}/childrens/create" class="btn btn-sm fw-bold btn-primary" >ساختن</a>
                          @endif
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
															<th class="min-w-120px text-center">عنوان</th>
															<th class="min-w-120px text-center">وضعیت</th>
															<th class="min-w-100px text-center">عملیات</th>
														</tr>
													</thead>
													<!--end::Table head-->
													<!--begin::Table body-->
													<tbody>
                            <?php $i=1; ?>
                            @foreach($menus as $menu)
														<tr>
                              <td>
                                {{$i++}}
                              </td>

															<td>
                                {{$menu->title}}
															</td>
															<td>
                                @if($menu->status=='0')
                                  <span class="badge badge-light-danger">غیرفعال</span>
                                @elseif($menu->status=='1')
                                  <span class="badge badge-light-success">فعال</span>
                                @endif
															</td>
															<td>
                                @if(Gate::allows('mega_menus-delete'))
																<a  class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm delete-confirm" id='delete-{{$menu->id}}'>
																	<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																	<span class="svg-icon svg-icon-3">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
																			<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
																			<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
                                @endif

                                @if(Gate::allows('mega_menus-delete'))
                                <a href="{{route('admin.mega_menus.index')}}/{{$menu->id}}/edit" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																	<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																	<span class="svg-icon svg-icon-3">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																			<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
                                @endif

                                @if($parent=="" || $parent->parent_id==0)
                                <a href="{{route('admin.mega_menus.index')}}/{{$menu->id}}/childrens" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																	<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																	<span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                      <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                        fill="currentColor" />
                                      <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                        fill="currentColor" />
                                      <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                        fill="currentColor" />
                                    </svg>
																	</span>
																	<!--end::Svg Icon-->
																</a>
                                @endif

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
      var route = "{{route('admin.mega_menus.index')}}/"+id;
      var token = "{{ csrf_token() }}";
      q1(id,route,token,txt1);
    });
</script>
@endsection
