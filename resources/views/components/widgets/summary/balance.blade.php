<div class="col-xl-8">
    <div class="card">
        <div class="card-header flex-wrap border-0 pb-0 align-items-end">
            <div class="mb-3 me-3">
                <h5 class="fs-20 text-black font-w500">Current Balance</h5>
                <span class="text-num text-black fs-36 font-w500">$@currency_convert($data['currentBalance'])</span>
            </div>
            <div class="me-3 mb-3">
                <p class="fs-14 mb-1">Current Profit</p>
                <span class="text-black fs-16">$@currency_convert($data['currentProfit'])</span>
            </div>
            <div class="me-3 mb-3">
                <p class="fs-14 mb-1">in Transaction</p>
                <span class="text-black fs-16">{{ $data['inTransaction'] }}</span>
            </div>
            <div class="me-3 mb-3">
                <p class="fs-14 mb-1">Unknown Profit (excl. BreakOut Strategy)</p>
                <span class="text-black fs-16">$@currency_convert($data['unknownProfit'])</span>
            </div>
        </div>
        <div class="card-body">
            <div class="progress default-progress">
                <div class="progress-bar bg-gradient-5 progress-animated" style="width: 60%; height:20px;" role="progressbar">
                    <span>60% Profit</span>
                </div>
                <span style="display: table; margin: 0 auto;">40% Loss</span>
            </div>
            <div class="row mt-4 pt-3">
                <div class="col-xl-4 col-xxl-5 col-lg-6">
                    <div class="row">
                        <div class="col-sm-6 col-7">
                            <h4 class="card-title">Weekly Summary</h4>
                            <ul class="card-list mt-3">
                                <li class="mb-2"><span class="bg-success circle"></span><span class="ms-0">Profit</span><span class="text-black fs-18">50%</span></li>
                                <li class="mb-2"><span class="bg-danger circle"></span><span class="ms-0">Loss</span><span class="text-black fs-18">30%</span></li>
                                <li class="mb-2"><span class="bg-light circle"></span><span class="ms-0">Unknown</span><span class="text-black fs-18">20%</span></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-5">
                            <canvas id="pieChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-xxl-7 col-lg-6">
                    <div id="line-chart" class="bar-chart"></div>
                </div>
            </div>
        </div>
        <div class="card-footer border-0 pt-0">
            <a href="javascript:void(0)" class="btn btn-outline-primary d-block btn-lg"><i class="las la-download scale5 me-3"></i>Download Report</a>
        </div>
    </div>
</div>