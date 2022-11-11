<div class="col-md-12">
    <div class="card progress-card">
        <div class="card-body d-flex">
            <div class="col-md-5 me-auto">
                <h4 class="card-title">Total Transactions</h4>
                <div class="d-flex align-items-center">
                    <h2 class="fs-38 mb-0">{{ $data['total_transactions'] }}</h2>
                </div>
            </div>
            <div class="col-md-3 me-auto">
                <div div class="progress progress-vertical-bottom" style="min-height:110px;min-width:10px;">
                    <div class="progress-bar bg-primary" style="width:10px; height:40%;" role="progressbar">
                    </div>
                </div>
            </div>
            <div class="col-md-4 me-auto">
                <div class="col-md-12">
                    <p>PnL in Transaction</p>
                </div>
                <div class="col-md-12">
                    <span>{{ $data['profitable_percentage'] }}% of today's transactions are profitable transactions</span>
                </div>
            </div>
        </div>
    </div>
</div>