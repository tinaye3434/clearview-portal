<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{{ $title ?? 'ClearView Portal' }}</title>

<link rel="shortcut icon" type="image/png" href=" {{ asset('assets/images/logos/favicon.png') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />

@livewireStyles

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance
