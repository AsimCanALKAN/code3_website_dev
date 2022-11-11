<div class="row">
    <div class="col-xl-12">
        <div class="card-slider owl-carousel">
            <div class="items">
                <div class="card-bx bg-orange mb-0">
                    <img class="pattern-img" src="{{ asset('images/pattern/pattern8.png') }}" alt="">
                    <div class="card-info text-white">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <p class="mb-1">Total Balance</p>
                                <h2 class="fs-36 text-white mb-5">$@currency_convert($data['balance']['totalBalance'])</h2>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="me-sm-5 me-3">
                                <p class="fs-14 mb-1">NUMBER OF BROKERS</p>
                                <span>{{ $data['balance']['numberOfBrokers'] }}</span>
                            </div>
                            <div>
                                <p class="fs-14 mb-1">ACCOUNT OWNER</p>
                                <span>{{ $data['balance']['accountOwner'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="items">
                <div class="card-bx bg-blue">
                    <img class="pattern-img" src="{{ asset('images/pattern/pattern6.png') }}" alt="">
                    <div class="card-info text-white">
                        <h2 class="text-white card-balance">$@currency_convert($data['profit']['totalProfit'])</h2>
                        <p class="fs-16">Total Profit</p>
                        <div class="d-flex align-items-end">
                            <span>{{ $data['profit']['percentage'] }}% than last week</span>
                            <div class="me-5 ms-auto">
                                <p class="fs-14 mb-1">SINCE</p>
                                <span>{{ $data['profit']['since'] }}</span>
                            </div>
                            <div>
                                <p class="fs-14 mb-1">PROFITABLE TRANSACTIONS</p>
                                <span>{{ $data['profit']['profitableTransactions'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="items">
                <div class="card-bx bg-green mb-0">
                    <img class="pattern-img" src="{{ asset('images/pattern/pattern9.png') }}" alt="">
                    <div class="card-info text-white">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <p class="mb-1">TOTAL TRANSACTIONS</p>
                                <h2 class="fs-36 text-white mb-5">{{ $data['transactions']['total'] }}</h2>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="me-5">
                                <p class="fs-14 mb-1">NUMBER OF SYMBOLS</p>
                                <span>{{ $data['transactions']['numberOfSymbols'] }}</span>
                            </div>
                            <div>
                                <p class="fs-14 mb-1">SUCCESS</p>
                                <span>%{{ $data['transactions']['success'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="items">
                <div class="card-bx bg-purpel mb-0">
                    <img class="pattern-img" src="images/pattern/pattern10.png" alt="">
                    <div class="card-info text-white">
                        <div class="d-flex align-items-center">
                            <div class="me-auto">
                                <p class="mb-1">Main Balance</p>
                                <h2 class="fs-36 text-white mb-5">$673,412.66</h2>
                            </div>
                            <img src="images/pattern/circle.png" class="mb-4" alt="">
                        </div>
                        <div class="d-flex">
                            <div class="me-5">
                                <p class="fs-14 mb-1">VALID THRU</p>
                                <span>08/21</span>
                            </div>
                            <div>
                                <p class="fs-14 mb-1">CARD HOLDER</p>
                                <span>Franklin Jr.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>