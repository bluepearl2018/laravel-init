<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Eutranet - Laravel Init</title>
<meta name="description" content="{{ $description ?? env('APP_DESCRIPTION') }}">
<meta name="author" content="{{ env('APP_AUTHOR')}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<style>
	body {
		font-family: 'Nunito', sans-serif;
	}

	.page-break {
		page-break-after: always;
	}
</style>

<link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
	  integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
	  crossorigin="anonymous" referrerpolicy="no-referrer"/>

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}" defer></script>

@stack('top-scripts')
