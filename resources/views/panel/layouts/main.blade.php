<!DOCTYPE html>

<html direction="rtl" dir="rtl" style="direction: rtl">
<!--begin::Head-->

<head>
	<?php
		//$setting = \App\Models\Setting::first();
	 ?>
	<base href="" />
	<title>| </title>
	    <link rel="shortcut icon" type="image/x-icon" href="">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	@include('panel.layouts.styles')
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
	data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
	data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
	data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">

    @yield('content')


@include('panel.layouts.scripts')
</body>
<!--end::Body-->

</html>
