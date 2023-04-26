<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-gray-50">
        <x-banner />

        @php 
        $links = [
            [
                'active'=> request()->routeIs('admin.dashboard') ,
                'title' => 'Dashboard',
                'url'   => route('admin.dashboard'),
                'icon'  => 'fa-solid fa-gauge-high'
            ]
    
        ];
    @endphp
    <div class="flex" x-data="{ open: false, openSidebar: true }">    
        <div :class="{
            'lg:block': openSidebar
            }" class="w-64 flex-shrink-0 hidden lg:block">

            @include('layouts.partials.admin.sidebar')
        
        </div>
        <div class="flex-1">       

            @include('layouts.partials.admin.navigation')
          

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">    
                {{$slot}}             
            </div>
        </div>       
    </div>
     
        @stack('modals')

        @livewireScripts
    </body>
</html>
