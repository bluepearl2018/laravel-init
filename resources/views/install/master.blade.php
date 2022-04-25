<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<x-init-meta></x-init-meta>
	<body class="font-sans antialiased">
	<div class="bg-gray-100">
		<div class="max-w-7xl mx-auto p-8">
			<h2 class="text-2xl italic text-gray-500 font-extrabold">{{ config('app.name') }} Installation</h2>
			@yield('content')
			{{$message ?? 'NO MESSAGE'}}
			@component('init::install.footer')@endcomponent
		</div>
	</div>
	@stack('bottom-scripts')
	</body>
</html>
