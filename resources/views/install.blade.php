@extends('dashboard')
@section('content')
	<h1 class="text-4xl">{{$message ?? 'NO MESSAGE'}}</h1>
	<p class="mb-2 italic">{{__('Until instllation set complete, you will be able to navigate back to this page.')}}</p>
	<div class="container flex flex-col self-center">
		<h2 class="text-2xl">{{__('Installation order')}}</h2>
		<ul class="list-inside p-4 list-decimal">
			<li class="flex flex-col">
				@if(Schema::hasTable('install_statuses') && DB::table('install_statuses')->where('package_name', 'init')->get()->first())
					<i class="fa fa-check text-green-500 mr-2 inline-block"></i>
					{{__('Install eutranet/laravel-init')}}
				@else
					<p><i class="fa fa-times text-red-500 mr-2 inline-block"></i> Install package with $ composer require
						eutranet/laravel-init</p>
				@endif
			</li>
			<li class="flex flex-col">
				@if(Schema::hasTable('install_statuses') && DB::table('install_statuses')->where('package_name', 'theme')->get()->first())
					<i class="fa fa-check text-green-500 mr-2 inline-block"></i>
					{{__('Install eutranet/laravel-theme')}}
				@else
					<p><i class="fa fa-times text-red-500 mr-2 inline-block"></i> Install package with $ composer require
						eutranet/laravel-theme</p>
				@endif
			</li>
			<li class="flex flex-col">
				@if(Schema::hasTable('install_statuses') && DB::table('install_statuses')->where('package_name', 'commons')->get()->first())
					<i class="fa fa-check text-green-500 mr-2 inline-block"></i>
					{{__('Install eutranet/laravel-commons')}}
				@else
					<p><i class="fa fa-times text-red-500 mr-2 inline-block"></i> Install package with $ composer require
						eutranet/laravel-commons</p>
				@endif
			</li>
			<li class="flex flex-col">
				@if(Schema::hasTable('install_statuses') && DB::table('install_statuses')->where('package_name', 'setup')->get()->first())
					<i class="fa fa-check text-green-500 mr-2 inline-block"></i>
					{{__('Install eutranet/laravel-setup')}}
				@else
					<p><i class="fa fa-times text-red-500 mr-2 inline-block"></i> Install package with $ composer require
						eutranet/laravel-setup</p>
				@endif
			</li>
		</ul>
	</div>
@endsection