<x-app-layout :pagetitle="$pagetitle">
    <x-widgets.home-cards />

    <div class="row">
        <x-widgets.summary.balance :data="$data['summary']['balance']" />
        <x-widgets.summary.transaction :data="$data['summary']['transaction']" />
    </div>

    <div class="row">
        <x-widgets.live.strategy :data="$data['live']['strategy']" />
        <div class="col-xl-6 col-xxl-12">
            <div class="row">
                <x-widgets.live.balance /> {{-- data will come live --}}
                <x-widgets.live.profit />  {{-- data will come live --}}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-xxl-12">
            <div class="row">
                <div class="col-md-6">
                    <x-widgets.total-transactions :data="$data['top']['totaltransactions']" />
                    <x-widgets.top-stats.today-pnl :data="$data['top']['pnl']" />
                    <x-widgets.top-stats.today-pnl :data="$data['top']['pnl2']" />
                </div>
                <div class="col-md-6">
                    <x-widgets.top-symbols :data="$data['top']['symbols']" />
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <x-widgets.activities.feed :data="$data['activities']['feed']" />
        <x-widgets.activities.notifications :data="$data['activities']['notifications']" />
    </div>

    <x-slot:scripts>
        <!-- Dashboard 1 -->
	    <script src="{{ asset('js/dashboard/dashboard-1.js')}}"></script>
        <!-- Apex Chart -->
        <script src="{{ asset('vendor/apexchart/apexchart.js')}}"></script>
        <script src="{{ asset('vendor/nouislider/nouislider.min.js')}}"></script>
        <script src="{{ asset('vendor/wnumb/wNumb.js')}}"></script>
    	<script src="{{ asset('js/dashboard/my-wallet.js')}}"></script>
        <script src="{{ asset('vendor/flot/jquery.flot.js')}}"></script>
        <script src="{{ asset('vendor/flot/jquery.flot.pie.js')}}"></script>
        <script src="{{ asset('vendor/flot/jquery.flot.resize.js')}}"></script>
        <script src="{{ asset('vendor/flot-spline/jquery.flot.spline.min.js')}}"></script>
        <script src="{{ asset('js/plugins-init/flot-init.js')}}"></script>
        
        @stack('custom-scripts')
    </x-slot:scripts>
</x-app-layout>