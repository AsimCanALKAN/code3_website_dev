<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Today PnL</h4>
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <div class="progress mt-4" style="height:10px;">
                        <div class="progress-bar bg-primary progress-animated" style="width: {{ $data['profitpercentage'] }}%; height:10px;" role="progressbar">
                            <span>{{ $data['profitpercentage'] }}% Profit</span>
                        </div>
                    </div>
                    <p class="fs-16 mb-0 mt-2">
                        @if ($data['percentage'] > 0)
                            <span class="text-success">{{ $data['percentage'] }}% </span>  
                        @else
                            <span class="text-danger">{{ $data['percentage'] }}% </span>
                        @endif
                        from yesterday
                    </p>
                </div>
                <h2 class="fs-38">${{ $data['profit'] }}</h2>
            </div>
        </div>
    </div>
</div>