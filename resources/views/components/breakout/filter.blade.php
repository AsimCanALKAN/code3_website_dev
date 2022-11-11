<div class="card">
    <div class="card-header">
        <h4 class="card-title">Filter Settings</h4>
    </div>
    <div class="card-body">
        <div class="d-flex flex-wrap align-items-center mb-3">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Select Filter Type</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="nav flex-column nav-pills mb-3">
                                    <a href="#v-pills-broker" data-bs-toggle="pill" class="nav-link active" id="v-pills-broker-tab">Broker</a>
                                    <a href="#v-pills-symbol" data-bs-toggle="pill" class="nav-link" id="v-pills-symbol-tab">Symbol</a>
                                    <a href="#v-pills-account" data-bs-toggle="pill" class="nav-link" id="v-pills-account-tab">Account</a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="tab-content">
                                    <div id="v-pills-broker" class="tab-pane fade active show">
                                        <div class="d-flex flex-wrap align-items-center mb-3">
                                            <form>
                                                <div class="row align-items-center">
                                                    <div class="col-auto my-1" id="broker_BrokersFilterLoadingDIV" style="visibility: hidden;">
                                                        <div class="spinner-border text-primary" role="status">
                                                            <span class="sr-only">Loading...</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto my-1" id="brokersFilterDIV" style="display:inline-block;max-width:180px;">
                                                        <label class="me-sm-2">Brokers</label>
                                                        <select onchange="getBrokersFilter(this, 'BrokersFilterLoadingDIV', 'broker_')" class="me-sm-4 form-control wide" id="broker_BrokersFilter" style="width:100%">
                                                            <option value="Select.." selected>Select..</option>
                                                            @foreach ($data->brokers->brokers as $breakout)
                                                            <option value={{$breakout->id}}>{{$breakout->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                            <form>
                                                <div class="row align-items-center">
                                                    <div class="col-auto my-1" id="broker_SymbolsFilterLoadingDIV" style="visibility: hidden;">
                                                        <div class="spinner-border text-primary" role="status">
                                                            <span class="sr-only">Loading...</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto my-1" id="symbolFilterDIV" style="display:inline-block;max-width:180px;">
                                                        <label class="me-sm-2">Symbols</label>
                                                        <select onchange="getPairsFilter(this, 'SymbolsFilterLoadingDIV', 'broker_')" class="me-sm-4 form-control wide" id="broker_SymbolsFilter" style="width:100%" disabled>
                                                            <option value="Select.." selected>Select..</option>
                                                            @foreach ($data->pairs->pairs as $breakout)
                                                            <option value="{{$breakout->id}}_{{$breakout->broker_id}}">{{$breakout->symbol}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                            <form>
                                                <div class="row align-items-center">
                                                    <div class="col-auto my-1" id="broker_AccountsFilterLoadingDIV" style="visibility: hidden;">
                                                        <div class="spinner-border text-primary" role="status">
                                                            <span class="sr-only">Loading...</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto my-1" id="accountsFilterDIV" style="display:inline-block;max-width:180px;">
                                                        <label class="me-sm-2">Account ID</label>
                                                        <select onchange="getAccountsFilter(this, 'AccountsFilterLoadingDIV', 'broker_')" class="me-sm-4 form-control wide" id="broker_AccountsFilter" style="width:100%" disabled>
                                                            <option value="Select.." selected>Select..</option>
                                                            @foreach ($data->accounts->accounts as $breakout)
                                                            <option value="{{$breakout->id}}_{{$breakout->broker_id}}"> {{$breakout->login}} ({{ $breakout->owner}}) </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div id="v-pills-symbol" class="tab-pane fade">
                                        <div class="d-flex flex-wrap align-items-center mb-3">
                                            <form>
                                                <div class="row align-items-center">
                                                    <div class="col-auto my-1" id="symbol_SymbolsFilterLoadingDIV" style="visibility: hidden;">
                                                        <div class="spinner-border text-primary" role="status">
                                                            <span class="sr-only">Loading...</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto my-1" id="symbolFilterDIV" style="display:inline-block;max-width:180px;">
                                                        <label class="me-sm-2">Symbols</label>
                                                        <select onchange="getPairsFilter(this, 'SymbolsFilterLoadingDIV', 'symbol_')" class="me-sm-2 form-control wide" id="symbol_SymbolsFilter" style="width:100%">
                                                            <option value="Select.." selected>Select..</option>
                                                            @foreach ($data->pairs->pairs as $breakout)
                                                            <option value="{{$breakout->id}}_{{$breakout->broker_id}}">{{$breakout->symbol}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                            <form>
                                                <div class="row align-items-center">
                                                    <div class="col-auto my-1" id="symbol_BrokersFilterLoadingDIV" style="visibility: hidden;">
                                                        <div class="spinner-border text-primary" role="status">
                                                            <span class="sr-only">Loading...</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto my-1" id="brokersFilterDIV" style="display:inline-block;max-width:180px;">
                                                        <label class="me-sm-2">Brokers</label>
                                                        <select onchange="getBrokersFilter(this, 'BrokersFilterLoadingDIV', 'symbol_')" class="me-sm-2 form-control wide" id="symbol_BrokersFilter" style="width:100%" disabled>
                                                            <option value="Select.." selected>Select..</option>
                                                            @foreach ($data->brokers->brokers as $breakout)
                                                            <option value={{$breakout->id}}>{{$breakout->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                            <form>
                                                <div class="row align-items-center">
                                                    <div class="col-auto my-1" id="symbol_AccountsFilterLoadingDIV" style="visibility: hidden;">
                                                        <div class="spinner-border text-primary" role="status">
                                                            <span class="sr-only">Loading...</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto my-1" id="accountsFilterDIV" style="display:inline-block;max-width:180px;">
                                                        <label class="me-sm-2">Account ID</label>
                                                        <select onchange="getAccountsFilter(this, 'AccountsFilterLoadingDIV', 'symbol_')" class="me-sm-2 form-control wide" id="symbol_AccountsFilter" style="width:100%" disabled>
                                                            <option value="Select.." selected>Select..</option>
                                                            @foreach ($data->accounts->accounts as $breakout)
                                                            <option value="{{$breakout->id}}_{{$breakout->broker_id}}"> {{$breakout->login}} ({{ $breakout->owner}}) </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div id="v-pills-account" class="tab-pane fade">
                                        <div class="d-flex flex-wrap align-items-center mb-3">
                                            <form>
                                                <div class="row align-items-center">
                                                    <div class="col-auto my-1" id="account_AccountsFilterLoadingDIV" style="visibility: hidden;">
                                                        <div class="spinner-border text-primary" role="status">
                                                            <span class="sr-only">Loading...</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto my-1" id="accountsFilterDIV" style="display:inline-block;max-width:180px;">
                                                        <label class="me-sm-2">Account ID</label>
                                                        <select onchange="getAccountsFilter(this, 'AccountsFilterLoadingDIV', 'account_')" class="me-sm-2 form-control wide" id="account_AccountsFilter" style="width:100%">
                                                            <option value="Select.." selected>Select..</option>
                                                            @foreach ($data->accounts->accounts as $breakout)
                                                            <option value="{{$breakout->id}}_{{$breakout->broker_id}}"> {{$breakout->login}} ({{ $breakout->owner}}) </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                            <form>
                                                <div class="row align-items-center">
                                                    <div class="col-auto my-1" id="account_SymbolsFilterLoadingDIV" style="visibility: hidden;">
                                                        <div class="spinner-border text-primary" role="status">
                                                            <span class="sr-only">Loading...</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto my-1" id="symbolFilterDIV" style="display:inline-block;max-width:180px;">
                                                        <label class="me-sm-2">Symbols</label>
                                                        <select onchange="getPairsFilter(this, 'SymbolsFilterLoadingDIV', 'account_')" class="me-sm-2 form-control wide" id="account_SymbolsFilter" style="width:100%" disabled>
                                                            <option value="Select.." selected>Select..</option>
                                                            @foreach ($data->pairs->pairs as $breakout)
                                                            <option value="{{$breakout->id}}_{{$breakout->broker_id}}">{{$breakout->symbol}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                            <form>
                                                <div class="row align-items-center">
                                                    <div class="col-auto my-1" id="account_BrokersFilterLoadingDIV" style="visibility: hidden;">
                                                        <div class="spinner-border text-primary" role="status">
                                                            <span class="sr-only">Loading...</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto my-1" id="brokersFilterDIV" style="display:inline-block;max-width:180px;">
                                                        <label class="me-sm-2">Brokers</label>
                                                        <select onchange="getBrokersFilter(this, 'BrokersFilterLoadingDIV', 'account_')" class="me-sm-2 form-control wide" id="account_BrokersFilter" style="width:100%" disabled>
                                                            <option value="Select.." selected>Select..</option>
                                                            @foreach ($data->brokers->brokers as $breakout)
                                                            <option value={{$breakout->id}}>{{$breakout->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Select Specific Range</h4>
            </div>
            <div class="card-body">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="mb-1">Select Profit Range</p>
                            <div id="profitRange"></div>
                            <div class="input-group">
                                <input class="form-control" data-toggle="tooltip" data-placement="top" title="Min Profit" type="number" min="-100000000" max="100000000" step="1" id="profit-number1">
                                <input class="form-control" data-toggle="tooltip" data-placement="auto" title="Max Profit" type="number" min="-100000000" max="100000000" step="1" id="profit-number2">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-1">Select Step Range</p>
                            <div id="step-slider"></div>
                            <div class="input-group">
                                <input class="form-control" data-toggle="tooltip" data-placement="top" title="Min Step" type="number" min="-100000000" max="100000000" step="1" id="step-number1">
                                <input class="form-control" data-toggle="tooltip" data-placement="auto" title="Max Step" type="number" min="-100000000" max="100000000" step="1" id="step-number2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    async function getPairsFilter(selectObject, loadingDivId, divId) {
        var value = selectObject.value;
        const myArray = value.split("_");
        var valueSymbolId = myArray[0];
        var valueBrokerId = myArray[1];
        var pairSelectLoading = document.getElementById(divId + loadingDivId);
        if (divId == "symbol_") {
            selectObject.style.visibility = 'hidden';
            pairSelectLoading.style.visibility = 'visible';
        }

        var brokerSelectElement = document.getElementById(divId + "BrokersFilter");
        var accountSelectElement = document.getElementById(divId + "AccountsFilter");
        if (value == "Select..") {
            brokerSelectElement.value = 'Select..';
            accountSelectElement.value = 'Select..';
            brokerSelectElement.disabled = true;
            accountSelectElement.disabled = true;
            var data = httpGet(theUrl = "/auth/pairs/", selectObject = selectObject, selectLoading = pairSelectLoading);
            $('#' + divId + "SymbolsFilter").find('option')
                .remove()
                .end()
                .append('<option selected="selected">Select..</option>')
                .val('Select..')
            for (var i = 0; i < data.pairs.length; i++) {
                $('#' + divId + "SymbolsFilter").find('option').end().append('<option value="' + data.pairs[i].id + '">' + data.pairs[i].symbol + '</option>');
            }
        } else {
            if (divId == "symbol_") {
                brokerSelectElement.disabled = false;
                accountSelectElement.disabled = false;
                try {
                    var resultBroker = await httpGet(theUrl = "/auth/brokers/get?id=" + valueBrokerId, selectObject = selectObject, selectLoading = pairSelectLoading);
                    $('#' + divId + "BrokersFilter").find('option')
                        .remove()
                        .end()
                        .append('<option selected="selected" value="' + resultBroker.broker.id + '">' + resultBroker.broker.name + '</option>');
                    var resultAccount = await httpGet(theUrl = "/auth/accounts/get?broker_id=" + valueBrokerId, selectObject = selectObject, selectLoading = pairSelectLoading);
                    // var resultAccount = await httpGet(theUrl = "/auth/accounts/get?broker_id=7&login=2401", selectObject = selectObject, selectLoading = pairSelectLoading);
                    console.log(resultAccount);
                    $('#' + divId + "AccountsFilter").find('option')
                        .remove()
                        .end()
                        .append('<option selected="selected">Select..</option>')
                        .val('Select..')
                    for (var i = 0; i < resultAccount.accounts.length; i++) {
                        $('#' + divId + "AccountsFilter").find('option').end().append('<option value="' + resultAccount.accounts[i].id + '">' + resultAccount.accounts[i].login + ' (' + resultAccount.accounts[i].owner + ')' + '</option>');
                    }
                } catch (e) {
                    console.log(e);
                }
            } else if (divId == "broker_") {
                // just change the value

            } else if (divId == "account_") {
                // just change the value

            }
        }

    }

    async function getBrokersFilter(selectObject, loadingDivId, divId) {
        var valueBrokerId = selectObject.value;
        var pairSelectLoading = document.getElementById(divId + loadingDivId);
        if (divId == "broker_") {
            selectObject.style.visibility = 'hidden';
            pairSelectLoading.style.visibility = 'visible';
        }

        var symbolSelectElement = document.getElementById(divId + "SymbolsFilter");
        var accountSelectElement = document.getElementById(divId + "AccountsFilter");
        if (valueBrokerId == "Select..") {
            symbolSelectElement.value = 'Select..';
            accountSelectElement.value = 'Select..';
            symbolSelectElement.disabled = true;
            accountSelectElement.disabled = true;
            var data = httpGet(theUrl = "/auth/brokers/", selectObject = selectObject, selectLoading = pairSelectLoading);
            $('#' + divId + "BrokersFilter").find('option')
                .remove()
                .end()
                .append('<option selected="selected">Select..</option>')
                .val('Select..')
            for (var i = 0; i < data.accounts.length; i++) {
                $('#' + divId + "SymbolsFilter").find('option').end().append('<option value="' + data.accounts[i].id + '">' + data.accounts[i].name + '</option>');
            }
        } else {
            if (divId == "broker_") {
                symbolSelectElement.disabled = false;
                accountSelectElement.disabled = false;
                try {
                    var resultBroker = await httpGet(theUrl = "/auth/pairs/get?broker_id=" + valueBrokerId, selectObject = selectObject, selectLoading = pairSelectLoading);
                    $('#' + divId + "SymbolsFilter").find('option')
                        .remove()
                        .end()
                        .append('<option selected="selected">Select..</option>')
                        .val('Select..');
                    for (var i = 0; i < resultBroker.pairs.length; i++) {
                        $('#' + divId + "SymbolsFilter").find('option').end().append('<option value="' + resultBroker.pairs[i].id + '">' + resultBroker.pairs[i].symbol + '</option>');
                    }
                    var resultAccount = await httpGet(theUrl = "/auth/accounts/get?broker_id=" + valueBrokerId, selectObject = selectObject, selectLoading = pairSelectLoading);
                    // var resultAccount = await httpGet(theUrl = "/auth/accounts/get?broker_id=7&=login=2401", selectObject = selectObject, selectLoading = pairSelectLoading);
                    $('#' + divId + "AccountsFilter").find('option')
                        .remove()
                        .end()
                        .append('<option selected="selected">Select..</option>')
                        .val('Select..')
                    for (var i = 0; i < resultAccount.accounts.length; i++) {
                        $('#' + divId + "AccountsFilter").find('option').end().append('<option value="' + resultAccount.accounts[i].id + '">' + resultAccount.accounts[i].login + ' (' + resultAccount.accounts[i].owner + ')' + '</option>');
                    }
                } catch (e) {
                    console.log(e);
                }
            } else if (divId == "symbols_") {
                // just change the value

            } else if (divId == "account_") {
                // just change the value

            }
        }

    }

    async function getAccountsFilter(selectObject, loadingDivId, divId) {
        var value = selectObject.value;
        const myArray = value.split("_");
        var valueAccountId = myArray[0];
        var valueBrokerId = myArray[1];
        var pairSelectLoading = document.getElementById(divId + loadingDivId);

        if (divId == "account_") {
            selectObject.style.visibility = 'hidden';
            pairSelectLoading.style.visibility = 'visible';
        }


        var symbolSelectElement = document.getElementById(divId + "SymbolsFilter");
        var brokerSelectElement = document.getElementById(divId + "BrokersFilter");
        if (value == "Select..") {
            symbolSelectElement.value = 'Select..';
            brokerSelectElement.value = 'Select..';
            symbolSelectElement.disabled = true;
            brokerSelectElement.disabled = true;
            var data = httpGet(theUrl = "/auth/accounts/", selectObject = selectObject, selectLoading = pairSelectLoading);
            for (var i = 0; i < data.accounts.length; i++) {
                $('#' + divId + "AccountsFilter").find('option').remove().end().append('<option selected="selected">Select..</option>')
                    .val('Select..')
                for (var i = 0; i < data.accounts.length; i++) {
                    $('#' + divId + "SymbolsFilter").find('option').end().append('<option value="' + data.accounts[i].id + '">' + data.accounts[i].login + ' (' + data.accounts[i].owner + ')</option>');
                }
            }
        } else {
            if (divId == "account_") {
                symbolSelectElement.disabled = false;
                brokerSelectElement.disabled = false;
                try {
                    var resultPair = await httpGet(theUrl = "/auth/pairs/get?broker_id=" + valueBrokerId, selectObject = selectObject, selectLoading = pairSelectLoading);
                    $('#' + divId + "SymbolsFilter").find('option')
                        .remove()
                        .end()
                        .append('<option selected="selected">Select..</option>')
                        .val('Select..')
                    for (var i = 0; i < resultPair.pairs.length; i++) {
                        $('#' + divId + "SymbolsFilter").find('option').end().append('<option value="' + resultPair.pairs[i].id + '">' + resultPair.pairs[i].symbol + '</option>');
                    }
                    var resultBroker = await httpGet(theUrl = "/auth/brokers/get?id=" + valueBrokerId, selectObject = selectObject, selectLoading = pairSelectLoading);
                    // var resultAccount = await httpGet(theUrl = "/auth/accounts/get?broker_id=7&login=2401", selectObject = selectObject, selectLoading = pairSelectLoading);
                    $('#' + divId + "BrokersFilter").find('option')
                        .remove()
                        .end()
                        .append('<option value="' + resultBroker.broker.id + '">' + resultBroker.broker.name + '</option>');
                } catch (e) {
                    console.log(e);
                }
            } else if (divId == "symbols_") {
                // just change the value

            } else if (divId == "account_") {
                // just change the value

            }
        }

    }

    function httpGet(theUrl, selectObject, selectLoading) {
        var baseUrl = "{{ route('api.breakout.services') }}" + "?theUrl=" + theUrl;
        return new Promise(function(resolve, reject) {
            $.ajax({
                url: baseUrl,
                type: 'GET',
                crossDomain: true,
                success: function(response) {
                    selectObject.style.visibility = 'visible';
                    selectLoading.style.visibility = 'hidden';
                    resolve(response);
                },
                error: function(err) {
                    //Do Something to handle error
                    alert("Error!");
                    reject(err);
                }
            });
        });
    }

    async function filterButtonClicked() {
        var symbolFilterTab = document.getElementById("v-pills-symbol-tab");
        var brokerFilterTab = document.getElementById("v-pills-broker-tab");
        var accountFilterTab = document.getElementById("v-pills-account-tab");
        var filterButtonLoading = document.getElementById("filterButtonLoadingDIV");
        var filterButton = document.getElementById("filterButton");
        filterButtonLoading.style.visibility = "visible";
        filterButton.style.visibility = "hidden";
        var minProfitSelectFilterValue = document.getElementById("profit-number1").value;
        var maxProfitSelectFilterValue = document.getElementById("profit-number2").value;
        var minStepSelectFilterValue = document.getElementById("step-number1").value;
        var maxStepSelectFilterValue = document.getElementById("step-number2").value;
        var endpointPath = "?live=true&min_profit=" + minProfitSelectFilterValue + "&max_profit=" + maxProfitSelectFilterValue + "&min_step=" + minStepSelectFilterValue + "&max_step=" + maxStepSelectFilterValue;
        var pairSelectFilterValue = "Select..";
        var accountSelectFilterValue = "Select..";
        var brokerSelectFilterValue = "Select..";
        if (brokerFilterTab.className == "nav-link active") {
            brokerSelectFilterValue = document.getElementById("broker_BrokersFilter").value;
            if (brokerSelectFilterValue != "Select..") {
                endpointPath = endpointPath + "&broker_id=" + brokerSelectFilterValue;
            }
            pairSelectFilterValue = document.getElementById("broker_SymbolsFilter").value;
            if (pairSelectFilterValue != "Select..") {
                var myArray = pairSelectFilterValue.split("_");
                var valueSymbolId = myArray[0];
                var valueBrokerId = myArray[1];
                endpointPath = endpointPath + "&pair_id=" + valueSymbolId;
            }
            accountSelectFilterValue = document.getElementById("broker_AccountsFilter").value;
            if (accountSelectFilterValue != "Select..") {
                var myArray = accountSelectFilterValue.split("_");
                var valueAccountId = myArray[0];
                var valueBrokerId = myArray[1];
                endpointPath = endpointPath + "&account_id=" + valueAccountId;

            }

            var data = await httpGet("/bots/emirhan-bb-stoch/transactions/get" + endpointPath, filterButton, filterButtonLoading);
            showTableData(data);


        } else if (symbolFilterTab.className == "nav-link active") {
            pairSelectFilterValue = document.getElementById("symbol_SymbolsFilter").value;
            accountSelectFilterValue = document.getElementById("symbol_AccountsFilter").value;
            brokerSelectFilterValue = document.getElementById("symbol_BrokersFilter").value;
            if (pairSelectFilterValue != "Select..") {
                var myArray = pairSelectFilterValue.split("_");
                var valueSymbolId = myArray[0];
                var valueBrokerId = myArray[1];
                endpointPath = endpointPath + "&pair_id=" + valueSymbolId + "&broker_id=" + valueBrokerId;
            }
            var accountSelectFilterValue = document.getElementById("broker_AccountsFilter").value;
            if (accountSelectFilterValue != "Select..") {
                var myArray = accountSelectFilterValue.split("_");
                var valueAccountId = myArray[0];
                var valueBrokerId = myArray[1];
                endpointPath = endpointPath + "&account_id=" + valueAccountId;

            }
            var data = await httpGet("/bots/emirhan-bb-stoch/transactions/get" + endpointPath, filterButton, filterButtonLoading);

            showTableData(data);


        } else if (accountFilterTab.className == "nav-link active") {
            pairSelectFilterValue = document.getElementById("account_SymbolsFilter").value;
            accountSelectFilterValue = document.getElementById("account_AccountsFilter").value;
            brokerSelectFilterValue = document.getElementById("account_BrokersFilter").value;
            var accountSelectFilterValue = document.getElementById("broker_AccountsFilter").value;
            if (accountSelectFilterValue != "Select..") {
                var myArray = accountSelectFilterValue.split("_");
                var valueAccountId = myArray[0];
                var valueBrokerId = myArray[1];
                endpointPath = endpointPath + "&account_id=" + valueAccountId + "&broker_id=" + valueBrokerId;

            }
            if (pairSelectFilterValue != "Select..") {
                var myArray = pairSelectFilterValue.split("_");
                var valueSymbolId = myArray[0];
                var valueBrokerId = myArray[1];
                endpointPath = endpointPath + "&pair_id=" + valueSymbolId;
            }
            var data = await httpGet("/bots/emirhan-bb-stoch/transactions/get" + endpointPath, filterButton, filterButtonLoading);
            showTableData(data);

        }
    }


    async function showTableData(data) {
        const transactionTable = $(`#historyTransactions`);
        transactionTable.html('');
        if (data.transactions.length === 0) {
            transactionTable.html(`<tr class="odd"><td valign="top" colspan="10" class="dataTables_empty">Please select some filter if there is no filter selection it means no data available in table</td></tr>`);
            return;
        }
        for (var i = 0; i < data.transactions.length; i++) {
            transactionTable.append(` 
                                <tr>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span>#${data.transactions[i].id}</span></td>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span>#${data.transactions[i].strategy_id}</span></td>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span>${data.transactions[i].updated_at.replace("T", " ").replace(".000Z", "")}</span></td>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span>${data.transactions[i].account_id}</span></td>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span>${data.transactions[i].account_id}</span></td>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span class="text-nowrap">${data.transactions[i].account_id}</span></td>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span class="text-nowrap">${data.transactions[i].account_id}</span></td>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span class="text-nowrap">${data.transactions[i].id}: </span><span style="color:red">3 - Sell</span></td>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;">
                                        <div>
                                            <svg class="me-2 oi-icon bgl-success" width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path d="M35.2219 42.9875C34.8938 42.3094 35.1836 41.4891 35.8617 41.1609C37.7484 40.2531 39.3453 38.8422 40.4828 37.0758C41.6477 35.2656 42.2656 33.1656 42.2656 31C42.2656 24.7875 37.2125 19.7344 31 19.7344C24.7875 19.7344 19.7344 24.7875 19.7344 31C19.7344 33.1656 20.3523 35.2656 21.5117 37.0813C22.6437 38.8477 24.2461 40.2586 26.1328 41.1664C26.8109 41.4945 27.1008 42.3094 26.7727 42.993C26.4445 43.6711 25.6297 43.9609 24.9461 43.6328C22.6 42.5063 20.6148 40.7563 19.2094 38.5578C17.7656 36.3047 17 33.6906 17 31C17 27.2594 18.4547 23.743 21.1016 21.1016C23.743 18.4547 27.2594 17 31 17C34.7406 17 38.257 18.4547 40.8984 21.1016C43.5453 23.7484 45 27.2594 45 31C45 33.6906 44.2344 36.3047 42.7852 38.5578C41.3742 40.7508 39.3891 42.5063 37.0484 43.6328C36.3648 43.9555 35.55 43.6711 35.2219 42.9875Z" fill="#2BC155"></path>
                                                    <path d="M36.3211 30.2726C36.589 30.0047 36.7203 29.6547 36.7203 29.3047C36.7203 28.9547 36.589 28.6047 36.3211 28.3367L32.8812 24.8969C32.3781 24.3937 31.7109 24.1203 31.0055 24.1203C30.3 24.1203 29.6273 24.3992 29.1297 24.8969L25.6898 28.3367C25.1539 28.8726 25.1539 29.7367 25.6898 30.2726C26.2258 30.8086 27.0898 30.8086 27.6258 30.2726L29.6437 28.2547L29.6437 36.0258C29.6437 36.7804 30.2562 37.3929 31.0109 37.3929C31.7656 37.3929 32.3781 36.7804 32.3781 36.0258L32.3781 28.2492L34.3961 30.2672C34.9211 30.8031 35.7851 30.8031 36.3211 30.2726Z" fill="#2BC155"></path>

                                                </g>
                                            </svg>
                                            $ ${data.transactions[i].total_profit}
                                        </div>
                                    </td>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span class="badge light badge-secondary">Closed</span></td>
                                </tr>
                                
                                <tr>
                                    <td colspan="12" style="padding:0">
                                        <div id="default_collapse${data.transactions[i].id}" class="collapse accordion_body" data-bs-parent="#example6">
                                            <table class="table card-table display mb-4 dataTablesCard text-white" style="background-color: #27333F;">
                                                <br>
                                                <center><span class="h3">History</span></center>
                                                <br>
                                                <thead>
                                                    <tr>
                                                        <th style="color: white;">Symbol</th>
                                                        <th style="color: white;">Ticket</th>
                                                        <th style="color: white;">Close Time</th>
                                                        <th style="color: white;">Type</th>
                                                        <th style="color: white;">Volume</th>
                                                        <th style="color: white;">Open Price</th>
                                                        <th style="color: white;">Close Price</th>
                                                        <th style="color: white;">Commision</th>
                                                        <th style="color: white;">Fee</th>
                                                        <th style="color: white;">Swap</th>
                                                        <th style="color: white;">Profit</th>
                                                        <th style="color: white;">Magic</th>
                                                        <th style="color: white;">Step</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="historyTransactionsPosition${data.transactions[i].id}">
                                                `);

            await addPositionsToTable(data.transactions[i]);
        };


    }


    async function addPositionsToTable(dataTransactions) {
        const transactionTable = $(`#historyTransactionsPosition${dataTransactions.id}`);
        for (var a = 0; a < dataTransactions.positions.length; a++) {
            transactionTable.append(`
                                                        <tr>
                                                            <td>${dataTransactions.positions[a].pair_id}</td>
                                                            <td>${dataTransactions.positions[a].ticket}</td>
                                                            <td>${dataTransactions.positions[a].close_time.replace("T", " ").replace(".000Z", "")}</td>
                                                            <td>${dataTransactions.positions[a].type}</td>
                                                            <td>${dataTransactions.positions[a].volume}</td>
                                                            <td>${dataTransactions.positions[a].open_price}</td>
                                                            <td>${dataTransactions.positions[a].close_price}</td>
                                                            <td>${dataTransactions.positions[a].commission}</td>
                                                            <td></td>
                                                            <td>${dataTransactions.positions[a].swap}</td>
                                                            <td>${dataTransactions.positions[a].profit}</td>
                                                            <td>${dataTransactions.positions[a].magic_number}</td>
                                                            <td>${dataTransactions.positions[a].step}</td>
                                                        </tr>
                                                        `);
        };
    }
</script>