<div class="card">
    <div class="card-header border-0 pb-0">
        <div>
            <h4 class="card-title mb-2">Top Symbols</h4>
            <span class="fs-12">The symbols with the most profits are listed</span>
        </div>
    </div>
    <div class="card-body">
        
        @foreach ($data as $symbol)
            <div class="progress default-progress">
                <div class="progress-bar bg-gradient-1 progress-animated" style="width: {{ intval($symbol['profit'])/intval($symbol['total']) * 100 }}%; height:20px;" role="progressbar">
                    <span class="sr-only">45% Complete</span>
                </div>
            </div>
            <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                <h5>{{ $symbol['symbol'] }}</h5>
                <span class="fs-18"><span class="text-black pe-2">${{ $symbol['profit'] }}</span>/${{ $symbol['total'] }}</span>
            </div>
        @endforeach
    </div>
    <div class="card-footer border-0 pt-0">
        <a href="top-symbols.php" class="btn btn-outline-primary d-block btn-lg">View More</a>
    </div>
</div>