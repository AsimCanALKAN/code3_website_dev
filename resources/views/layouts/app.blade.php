<x-base-layout>
    <div id="main-wrapper" class="show">
        <!-- NAV Header -->
        <div class="nav-header">
            <a href="{{ route('dashboard') }}" class="brand-logo">
                <x-breakout-logo/>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
    
        <!-- HEADER -->
        <x-header :pagetitle="$pagetitle" />
    
        <!-- DBLNAV -->
        <x-sidebar :user="auth()->user()" />
    
        <div class="content-body">
            <div class="container-fluid">
                {{ $slot }}
            </div>
        </div>
    </div>
    <x-slot:scripts>
        {{ $scripts ?? '' }}
    </x-slot:scripts>
</x-base-layout>
