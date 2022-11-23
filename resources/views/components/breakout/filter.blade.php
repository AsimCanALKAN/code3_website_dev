<div id="accordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <div class="col-sm-5">
                <h4 class="card-title">Filter Settings
                    <a class="btn btn-link" data-bs-toggle="collapse" data-bs-target="#collapseOne" class="accordion-header collapsed">
                        Show/Hide Filters
                    </a>
                </h4>

                </button>
            </div>
            <div class="col-sm-2">
                <div class="col-auto my-1" id="filterButtonLoadingDIV" style="visibility: hidden;">
                    <div class="spinner-border text-primary" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="d-flex flex-wrap align-items-center">

                    <div class="col-md-2 offset-md-9 me-auto">
                        <div class="row align-items-center">
                            <button onclick="filterButtonClicked()" class="btn btn-primary" id="filterButton">Apply</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="collapseOne" class="collapse accordion_body" data-bs-parent="#example6">

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
    </div>
</div>


<script>
    var wsUri = "ws://157.90.31.191:30200/v1/bots/monitoring/emirhan-bb-stoch/";
    var log;
    var user = '<?php print($data->userHasAccount); ?>';
    var userAccountList = [];
    var userBrokerList = [];
    var firstLoading = true;

    for (var i = 0; i < JSON.parse(user).length; i++) {
        userAccountList.push(JSON.parse(user)[i].account_id.toString())
        userBrokerList.push(JSON.parse(user)[i].broker_id)
    }


    async function init() {

        getPairsFilter(document.getElementById("symbol_SymbolsFilter"), 'SymbolsFilterLoadingDIV', 'symbol_');
        getBrokersFilter(document.getElementById("broker_BrokersFilter"), 'BrokersFilterLoadingDIV', 'broker_');
        getAccountsFilter(document.getElementById("account_AccountsFilter"), 'AccountsFilterLoadingDIV', 'account_');
        testWebSocket('{"accounts": {[' + userAccountList + ']}');
    }

    function testWebSocket(endpointPath) {
        //websocket = new WebSocket(wsUri+endpointPath);
        console.log(wsUri + endpointPath);
        websocket = new WebSocket(wsUri);
        websocket.onopen = function(evt) {
            onOpen(evt)
        };
        websocket.onclose = function(evt) {
            onClose(evt)
        };
        websocket.onmessage = function(evt) {
            onMessage(evt)
        };
        websocket.onerror = function(evt) {
            onError(evt)
        };
    }

    function onOpen(evt) {
        sendMessage('{"accounts": [' + userAccountList + ']}');
    }

    function onClose(evt) {
        console.log("Websocket is closed")
    }

    function onMessage(evt) {
        showTableData(JSON.parse(evt.data))

    }

    function onError(evt) {
        websocket.close();
        testWebSocket();
    }

    function sendMessage(message) {
        websocket.send(message);
    }

    window.addEventListener("load", init, false);

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
            var data = await httpGet(theUrl = "/auth/pairs/", selectObject = selectObject, selectLoading = pairSelectLoading);
            $('#' + divId + "SymbolsFilter").find('option')
                .remove()
                .end()
                .append('<option selected="selected">Select..</option>')
                .val('Select..')
            for (var i = 0; i < data.pairs.length; i++) {
                if (userBrokerList.includes(data.pairs[i].broker_id)) {
                    $('#' + divId + "SymbolsFilter").find('option').end().append('<option value="' + data.pairs[i].id + '_' + data.pairs[i].broker_id + '">' + data.pairs[i].symbol + '</option>');
                }
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
                    $('#' + divId + "AccountsFilter").find('option')
                        .remove()
                        .end()
                        .append('<option selected="selected">Select..</option>')
                        .val('Select..')
                    for (var i = 0; i < resultAccount.accounts.length; i++) {
                        $('#' + divId + "AccountsFilter").find('option').end().append('<option value="' + resultAccount.accounts[i].id + '_' + resultAccount.accounts[i].broker_id + '">' + resultAccount.accounts[i].login + ' (' + resultAccount.accounts[i].owner + ')' + '</option>');
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
            var data = await httpGet(theUrl = "/auth/brokers/", selectObject = selectObject, selectLoading = pairSelectLoading);
            $('#' + divId + "BrokersFilter").find('option')
                .remove()
                .end()
                .append('<option selected="selected">Select..</option>')
                .val('Select..')
            for (var i = 0; i < data.brokers.length; i++) {
                if (userBrokerList.includes(data.brokers[i].id)) {
                    $('#' + divId + "BrokersFilter").find('option').end().append('<option value="' + data.brokers[i].id + '">' + data.brokers[i].name + '</option>');
                }
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
                        $('#' + divId + "SymbolsFilter").find('option').end().append('<option value="' + resultBroker.pairs[i].id + '_' + resultBroker.pairs[i].broker_id + '">' + resultBroker.pairs[i].symbol + '</option>');
                    }
                    var resultAccount = await httpGet(theUrl = "/auth/accounts/get?broker_id=" + valueBrokerId, selectObject = selectObject, selectLoading = pairSelectLoading);
                    // var resultAccount = await httpGet(theUrl = "/auth/accounts/get?broker_id=7&=login=2401", selectObject = selectObject, selectLoading = pairSelectLoading);
                    $('#' + divId + "AccountsFilter").find('option')
                        .remove()
                        .end()
                        .append('<option selected="selected">Select..</option>')
                        .val('Select..')
                    for (var i = 0; i < resultAccount.accounts.length; i++) {
                        $('#' + divId + "AccountsFilter").find('option').end().append('<option value="' + resultAccount.accounts[i].id + '_' + resultAccount.accounts[i].broker_id + '">' + resultAccount.accounts[i].login + ' (' + resultAccount.accounts[i].owner + ')' + '</option>');
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
            var data = await httpGet(theUrl = "/auth/accounts/", selectObject = selectObject, selectLoading = pairSelectLoading);
            $('#' + divId + "AccountsFilter").find('option')
                .remove()
                .end()
                .append('<option selected="selected">Select..</option>')
                .val('Select..')
            for (var i = 0; i < data.accounts.length; i++) {
                if (userAccountList.includes(data.accounts[i].login)) {
                    $('#' + divId + "AccountsFilter").find('option').end().append('<option value="' + data.accounts[i].id + '_' + data.accounts[i].broker_id + '">' + data.accounts[i].login + ' (' + data.accounts[i].owner + ')</option>');
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
                        $('#' + divId + "SymbolsFilter").find('option').end().append('<option value="' + resultPair.pairs[i].id + '_' + resultPair.pairs[i].broker_id + '">' + resultPair.pairs[i].symbol + '</option>');
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

    function httpGetNoLoading(theUrl) {
        var baseUrl = "{{ route('api.breakout.services') }}" + "?theUrl=" + theUrl;
        return new Promise(function(resolve, reject) {
            $.ajax({
                url: baseUrl,
                type: 'GET',
                crossDomain: true,
                success: function(response) {
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
        var endpointPath = "?min_profit=" + minProfitSelectFilterValue + "&max_profit=" + maxProfitSelectFilterValue + "&min_step=" + minStepSelectFilterValue + "&max_step=" + maxStepSelectFilterValue;
        //var endpointPath = "?live=true&min_profit=" + minProfitSelectFilterValue + "&max_profit=" + maxProfitSelectFilterValue + "&min_step=" + minStepSelectFilterValue + "&max_step=" + maxStepSelectFilterValue;
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

            websocket.close()
            //testWebSocket(endpointPath);
            testWebSocket('{"accounts": [' + userAccountList + ']}')


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
            websocket.close()
            //testWebSocket(endpointPath);
            testWebSocket('{"accounts": [' + userAccountList + ']}')


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
            websocket.close()
            //testWebSocket(endpointPath);
            testWebSocket('{"accounts": [' + userAccountList + ']}')

        }
        filterButtonLoading.style.visibility = 'hidden';
        filterButton.style.visibility = 'visible';
        document.getElementById("liveTransactions").scrollIntoView();
    }
    async function addModalFromOld(transactionId) {
        var modalCollapsableDiv = document.getElementById("modalStrategyTradeSettings" + transactionId);
        var modalStrategyTradeSettings = modalCollapsableDiv.innerHTML;
        var modalValueActions = modalCollapsableDiv.className;
        var modalValuestyle = "style='display: none;' aria-hidden='true'";

        if (modalValueActions == "modal fade show") {
            await sleep(10);

            var modalValueActions = modalCollapsableDiv.className;
            if (modalValueActions == "modal fade show") {
                modalValuestyle = "style='display: block;' aria-modal='true' role='dialog' "
            } else {
                modalValuestyle = "style='display: none;' aria-hidden='true'";
            }


        }
        var secondModalCollapsableDiv = document.getElementById("modalInputs" + transactionId);
        var modalInputsTradeSettings = secondModalCollapsableDiv.innerHTML;
        var secondModalValueActions = secondModalCollapsableDiv.className;
        var secondModalValuestyle = "style='display: none;' aria-hidden='true'";
        if (secondModalValueActions == "modal fade show") {
            await sleep(10);
            secondModalValuestyle = "style='display: block;' aria-modal='true' role='dialog' "
            var secondModalValueActions = secondModalCollapsableDiv.className;
            if (secondModalValueActions == "modal fade show") {

            } else {
                secondModalValuestyle = "style='display: none;' aria-hidden='true'";
            }

        }
        return `<div class="${modalValueActions}" id="modalStrategyTradeSettings${transactionId}" ${modalValuestyle}>${modalStrategyTradeSettings}</div><div class="${secondModalValueActions}" id="modalInputs${transactionId}" ${secondModalValuestyle}>${modalInputsTradeSettings}</div>`
    }

    async function showTableData(data) {
        const transactionTable = $(`#liveTransactions`);
        if (data.transactions.length === 0) {
            transactionTable.html(`<tr class="odd">
                                    <td valign="top" colspan="10" class="dataTables_empty">Please select some filter if there is no filter selection it means no data available in table</td>
                                </tr>`);
            document.getElementById("liveTransactions").scrollIntoView();
            return;
        } else {
            $('.odd').remove();
        }

        for (var i = 0; i < data.transactions.length; i++) {
            const transactionRowId = document.getElementById("transactionRow" + data.transactions[i].id);
            const positionsRowId = document.getElementById("positionsRow" + data.transactions[i].id);

            if (transactionRowId) {
                if (data.status == "close") {
                    toastr.success(data.transactions[i].id + ' Transaction is closed. Profit: ' + data.transactions[i].profit, 'Success')
                    transactionRowId.remove();
                } else {
                    var actionCollapsableDiv = document.getElementById("dropdownActionMenu" + data.transactions[i].id);
                    var preClassValueActions = actionCollapsableDiv.className;
                    var ariaExpanded = "false";
                    var btnClass = "btn-link";
                    var style = "style";
                    if (preClassValueActions == "dropdown-menu show") {
                        ariaExpanded = "true";
                        btnClass = "btn-link show";
                        style = "style='position: absolute; inset: 0px 0px auto auto; margin-top: 30px;' data-popper-placement='left-start'"
                    }
                    var threeDotariaExpanded = "false";
                    var threeDotbtnClass = "btn-link";
                    var threeDotstyle = "style";
                    var threeDotCollapsableDiv = document.getElementById("threeDotTarget" + data.transactions[i].id);
                    var threeDotValueActions = threeDotCollapsableDiv.className;
                    if (threeDotValueActions == "dropdown-menu show") {
                        threeDotariaExpanded = "true";
                        threeDotbtnClass = "btn-link show";
                        threeDotstyle = "style='position: absolute; inset: 0px auto auto 0px; margin-top: 30px;' data-popper-placement='right-start'"
                    }

                    // Modal add<a data-bs-toggle="modal" data-bs-target="#modalStrategyTradeSettings${data.transactions[i].id}" class="dropdown-item"><i class="las la-cog scale5 me-3"></i>Strategy Settings</a>
                    transactionRowId.innerHTML = ` 
                                    <td style="border-color: transparent;">
                                        <div class="dropdown dropstart">
                                            <a id="threeDotMenu${data.transactions[i].id}" href="javascript:void(0);" class="${threeDotbtnClass}" data-bs-toggle="dropdown" data-bs-target="threeDotTarget${data.transactions[i].id}" aria-expanded="${threeDotariaExpanded}">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                            <div id="threeDotTarget${data.transactions[i].id}"  class="${threeDotValueActions}" ${threeDotstyle}>


                                                <a data-bs-toggle="modal" data-bs-target="#modalInputs${data.transactions[i].id}" class="dropdown-item"><i class="las la-sliders-h scale5 me-3"></i>See Strategy Inputs</a>

                                            </div>
                                            ${await addModalFromOld(data.transactions[i].id)}
                                    </td>
                                    <!-- Button trigger modal -->
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span>#${data.transactions[i].id}</span></td>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span>${data.account_id}</span></td>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span>${data.account_id}</span></td>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span class="badge light badge-success">In Transaction</span></td>
                                    <!--<td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span class="badge light badge-warning">Pending</span></td>-->
                                    <!--<td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span class="badge light badge-info">Boarding</span></td>-->
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span class="text-nowrap">${data.pair_id}</span></td>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span class="text-nowrap">$ ${data.transactions[i].weighted_price}</span></td>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span class="text-nowrap">$ ${data.transactions[i].target_profit_price}</span></td>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;">${await stepTypeHTML(data.transactions[i].type, data.transactions[i].step)}</td>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;">
                                        ${await profitSumHTML(data.transactions[i].profit)}


                                    </td>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span>${data.transactions[i].volume}</span></td>
                                    <td style="border-color: transparent;">
                                        <div class="dropdown dropstart">
                                            <a href="javascript:void(0);" class="${btnClass}" data-bs-toggle="dropdown" data-bs-target="#dropdownActionMenu${data.transactions[i].id}" aria-expanded="${ariaExpanded}">
                                                <i class="fa-solid fa-circle-chevron-down fa-2xl me-auto"></i>
                                            </a>
                                            <ul id="dropdownActionMenu${data.transactions[i].id}" class="${preClassValueActions}" ${style} >
                                                <li class="dropdown-item">
                                                    <div class="col-xl-12">
                                                    <!-- <a onClick="stopSwingBB()" class="btn btn-warning btn-rounded light"><i class="fa-solid fa-stop"></i> Stop</a> -->
                                                        <!-- <a onClick="startSwingBB()" class="btn btn-warning btn-rounded light"><i class="fa-solid fa-play"></i> Start</a> -->
                                                        <a onClick="closeSwingBB(${data.transactions[i].id})" class="btn btn-danger btn-rounded light ml-3"><i class="fa-solid fa-xmark"></i> Close All</a>
                                                    </div>
                                                </li>
                                            </ul>
                                    </td>

                                `;
                    if (positionsRowId) {
                        var collapsableDiv = document.getElementById("default_collapse" + data.transactions[i].id);
                        var preClassValue = collapsableDiv.className;
                        positionsRowId.innerHTML = ` 
                                        <td colspan="12" style="padding:0">
                                            <div id="default_collapse${data.transactions[i].id}" class="${preClassValue}" data-bs-parent="#example6">
                                                <table class="table card-table display mb-4 dataTablesCard text-white" style="background-color: #496ecc;">
                                                    <br>
                                                    <center><span class="h3">Open Position/s</span></center>
                                                    <br>
                                                    <thead>
                                                        <tr>
                                                            <th style="color: white;">Symbol</th>
                                                            <th style="color: white;">Ticket</th>
                                                            <th style="color: white;">Time</th>
                                                            <th style="color: white;">Type</th>
                                                            <th style="color: white;">Volume</th>
                                                            <th style="color: white;">Open Price</th>
                                                            <th style="color: white;">Current Price</th>
                                                            <th style="color: white;">Commision</th>
                                                            <th style="color: white;">Fee</th>
                                                            <th style="color: white;">Swap</th>
                                                            <th style="color: white;">Profit</th>
                                                            <th style="color: white;">Magic</th>
                                                            <th style="color: white;">Step</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="openPositionsTable${data.transactions[i].id}">
                                                        ${await openPositionsTableAdd(data.transactions[i])}
                                                    </tbody>
                                                </table>

                                                <table class="table card-table display mb-4 dataTablesCard text-white" style="background-color: #4f7086;">
                                                    <br>
                                                    <center><span class="h3">Open Order/s</span></center>
                                                    <br>
                                                    <thead>
                                                        <tr>
                                                            <th style="color: white;">Symbol</th>
                                                            <th style="color: white;">Ticket</th>
                                                            <th style="color: white;">Time</th>
                                                            <th style="color: white;">Type</th>
                                                            <th style="color: white;">Volume</th>
                                                            <th style="color: white;">Open Price</th>
                                                            <th style="color: white;">Current Price</th>
                                                            <th style="color: white;">Commision</th>
                                                            <th style="color: white;">Fee</th>
                                                            <th style="color: white;">Swap</th>
                                                            <th style="color: white;">Profit</th>
                                                            <th style="color: white;">Magic</th>
                                                            <th style="color: white;">Step</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="openOrdersTable${data.transactions[i].id}">
                                                        ${await openOrdersTableAdd(data.transactions[i])}

                                                    </tbody>
                                                </table>

                                                <table class="table card-table display mb-4 dataTablesCard text-white" style="background-color: #27333F;">
                                                    <br>
                                                    <center><span class="h3">History</span></center>
                                                    <br>
                                                    <thead>
                                                        <tr>
                                                            <th style="color: white;">Symbol</th>
                                                            <th style="color: white;">Ticket</th>
                                                            <th style="color: white;">Time</th>
                                                            <th style="color: white;">Type</th>
                                                            <th style="color: white;">Volume</th>
                                                            <th style="color: white;">Open Price</th>
                                                            <th style="color: white;">Closed Price</th>
                                                            <th style="color: white;">Commision</th>
                                                            <th style="color: white;">Fee</th>
                                                            <th style="color: white;">Swap</th>
                                                            <th style="color: white;">Profit</th>
                                                            <th style="color: white;">Magic</th>
                                                            <th style="color: white;">Step</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="historyTable${data.transactions[i].id}">
                                                        ${await historyTableAdd(data.transactions[i])}
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    `;
                    }
                }

            } else {
                if (firstLoading) {
                    websocket.close()
                }
                // modal href add <a data-bs-toggle="modal" data-bs-target="#modalStrategyTradeSettings${data.transactions[i].id}" class="dropdown-item"><i class="las la-cog scale5 me-3"></i>Strategy Settings</a>
                transactionTable.append(` 
            <tr id="transactionRow${data.transactions[i].id}">
                                    <td style="border-color: transparent;">
                                        <div class="dropdown dropstart">
                                            <a id="threeDotMenu${data.transactions[i].id}" href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                            <div id="threeDotTarget${data.transactions[i].id}" class="dropdown-menu">


                                                <a data-bs-toggle="modal" data-bs-target="#modalInputs${data.transactions[i].id}" class="dropdown-item"><i class="las la-sliders-h scale5 me-3"></i>See Strategy Inputs</a>

                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade " id="modalStrategyTradeSettings${data.transactions[i].id}">
                                                ${await strategyModalSettings(data.transactions[i].id, data.transactions[i].strategy_id)}


                                            </div>


                                    </td>
                                    <!-- Button trigger modal -->
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span>#${data.transactions[i].id}</span></td>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span>${data.account_id}</span></td>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span>${data.account_id}</span></td>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span class="badge light badge-success">In Transaction</span></td>
                                    <!--<td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span class="badge light badge-warning">Pending</span></td>-->
                                    <!--<td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span class="badge light badge-info">Boarding</span></td>-->
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span class="text-nowrap">${data.pair_id}</span></td>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span class="text-nowrap">$ ${data.transactions[i].weighted_price}</span></td>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span class="text-nowrap">$ ${data.transactions[i].target_profit_price}</span></td>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"> ${await stepTypeHTML(data.transactions[i].type, data.transactions[i].step)} </td>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;">
                                        ${await profitHTML(data.transactions[i].profit)}


                                    </td>
                                    <td data-bs-toggle="collapse" data-bs-target="#default_collapse${data.transactions[i].id}" class="accordion-header collapsed" style="border-color: transparent;"><span>${data.transactions[i].volume}</span></td>
                                    <td style="border-color: transparent;">
                                        <div class="dropdown dropstart">
                                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fa-solid fa-circle-chevron-down fa-2xl me-auto"></i>
                                            </a>
                                            <ul id="dropdownActionMenu${data.transactions[i].id}" class="dropdown-menu" ${style}>
                                                <li class="dropdown-item">
                                                    <div class="col-xl-12">
                                                        <a onClick="stopSwingBB()" class="btn btn-warning btn-rounded light"><i class="fa-solid fa-stop"></i> Stop</a>
                                                        <!-- <a onClick="startSwingBB()" class="btn btn-warning btn-rounded light"><i class="fa-solid fa-play"></i> Start</a> -->
                                                        <a onClick="closeSwingBB(${data.transactions[i].id})" class="btn btn-danger btn-rounded light ml-3"><i class="fa-solid fa-xmark"></i> Close All</a>
                                                    </div>
                                                </li>
                                            </ul>
                                    </td>
                                    </tr>
                                    <tr id="positionsRow${data.transactions[i].id}">
                                        <td colspan="12" style="padding:0">
                                            <div id="default_collapse${data.transactions[i].id}" class="collapse accordion_body" data-bs-parent="#example6">
                                                <table class="table card-table display mb-4 dataTablesCard text-white" style="background-color: #496ecc;">
                                                    <br>
                                                    <center><span class="h3">Open Position/s</span></center>
                                                    <br>
                                                    <thead>
                                                        <tr>
                                                            <th style="color: white;">Symbol</th>
                                                            <th style="color: white;">Ticket</th>
                                                            <th style="color: white;">Time</th>
                                                            <th style="color: white;">Type</th>
                                                            <th style="color: white;">Volume</th>
                                                            <th style="color: white;">Open Price</th>
                                                            <th style="color: white;">Current Price</th>
                                                            <th style="color: white;">Commision</th>
                                                            <th style="color: white;">Fee</th>
                                                            <th style="color: white;">Swap</th>
                                                            <th style="color: white;">Profit</th>
                                                            <th style="color: white;">Magic</th>
                                                            <th style="color: white;">Step</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="openPositionsTable${data.transactions[i].id}">
                                                        ${await openPositionsTableAdd(data.transactions[i])}
                                                    </tbody>
                                                </table>

                                                <table class="table card-table display mb-4 dataTablesCard text-white" style="background-color: #4f7086;">
                                                    <br>
                                                    <center><span class="h3">Open Order/s</span></center>
                                                    <br>
                                                    <thead>
                                                        <tr>
                                                            <th style="color: white;">Symbol</th>
                                                            <th style="color: white;">Ticket</th>
                                                            <th style="color: white;">Time</th>
                                                            <th style="color: white;">Type</th>
                                                            <th style="color: white;">Volume</th>
                                                            <th style="color: white;">Open Price</th>
                                                            <th style="color: white;">Current Price</th>
                                                            <th style="color: white;">Commision</th>
                                                            <th style="color: white;">Fee</th>
                                                            <th style="color: white;">Swap</th>
                                                            <th style="color: white;">Profit</th>
                                                            <th style="color: white;">Magic</th>
                                                            <th style="color: white;">Step</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="openOrdersTable${data.transactions[i].id}">
                                                        ${await openOrdersTableAdd(data.transactions[i])}

                                                    </tbody>
                                                </table>

                                                <table class="table card-table display mb-4 dataTablesCard text-white" style="background-color: #27333F;">
                                                    <br>
                                                    <center><span class="h3">History</span></center>
                                                    <br>
                                                    <thead>
                                                        <tr>
                                                            <th style="color: white;">Symbol</th>
                                                            <th style="color: white;">Ticket</th>
                                                            <th style="color: white;">Time</th>
                                                            <th style="color: white;">Type</th>
                                                            <th style="color: white;">Volume</th>
                                                            <th style="color: white;">Open Price</th>
                                                            <th style="color: white;">Closed Price</th>
                                                            <th style="color: white;">Commision</th>
                                                            <th style="color: white;">Fee</th>
                                                            <th style="color: white;">Swap</th>
                                                            <th style="color: white;">Profit</th>
                                                            <th style="color: white;">Magic</th>
                                                            <th style="color: white;">Step</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="historyTable${data.transactions[i].id}">
                                                        ${await historyTableAdd(data.transactions[i])}
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    `);
                if (firstLoading && i == data.transactions.length - 1) {
                    firstLoading = false;
                    testWebSocket('{"accounts": [' + userAccountList + ']}')
                }
            }
        };

    }


    async function openPositionsTableAdd(dataTransactions) {
        const transactionTable = $(`#openPositionsTable${dataTransactions.id}`);
        var returnedVariable = ``
        for (var a = 0; a < dataTransactions.positions.length; a++) {
            if (dataTransactions.positions[a].close_time == "1970-01-01T00:00:00.000Z") {
                returnedVariable = returnedVariable + ` <tr>
                                        <td>${dataTransactions.positions[a].pair_id}</td>
                                        <td>${dataTransactions.positions[a].ticket}</td>
                                        <td>${dataTransactions.positions[a].close_time.replace("T", " ").replace(".000Z", "")}</td>
                                        ${await positionTypeHistory(dataTransactions.positions[a].type)}
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
                                        `
            }
        };
        return returnedVariable;
    }

    async function openOrdersTableAdd(dataTransactions) {
        return ``;
        const transactionTable = $(`#openOrdersTable${dataTransactions.id}`);
        for (var a = 0; a < dataTransactions.positions.length; a++) {
            transactionTable.append(` <tr>
                                            <td>${dataTransactions.positions[a].pair_id}</td>
                                            <td>${dataTransactions.positions[a].ticket}</td>
                                            <td>${dataTransactions.positions[a].close_time.replace("T", " ").replace(".000Z", "")}</td>
                                            ${await positionTypeHistory(dataTransactions.positions[a].type)}
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

    async function historyTableAdd(dataTransactions) {
        const transactionTable = $(`#historyTable${dataTransactions.id}`);
        var returnedVariable = ``
        for (var a = 0; a < dataTransactions.positions.length; a++) {
            if (dataTransactions.positions[a].close_time != "1970-01-01T00:00:00.000Z") {
                returnedVariable = returnedVariable + ` <tr>
                                                <td>${dataTransactions.positions[a].pair_id}</td>
                                                <td>${dataTransactions.positions[a].ticket}</td>
                                                <td>${dataTransactions.positions[a].close_time.replace("T", " ").replace(".000Z", "")}</td>
                                                ${await positionTypeHistory(dataTransactions.positions[a].type)}
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
                                                `
            }
        };
        return returnedVariable;
    }

    async function profitHTML(profit) {
        if (profit > 0) {
            return `<div>
                                                    <svg class="me-2 oi-icon bgl-success" width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g>
                                                            <path d="M35.2219 42.9875C34.8938 42.3094 35.1836 41.4891 35.8617 41.1609C37.7484 40.2531 39.3453 38.8422 40.4828 37.0758C41.6477 35.2656 42.2656 33.1656 42.2656 31C42.2656 24.7875 37.2125 19.7344 31 19.7344C24.7875 19.7344 19.7344 24.7875 19.7344 31C19.7344 33.1656 20.3523 35.2656 21.5117 37.0813C22.6437 38.8477 24.2461 40.2586 26.1328 41.1664C26.8109 41.4945 27.1008 42.3094 26.7727 42.993C26.4445 43.6711 25.6297 43.9609 24.9461 43.6328C22.6 42.5063 20.6148 40.7563 19.2094 38.5578C17.7656 36.3047 17 33.6906 17 31C17 27.2594 18.4547 23.743 21.1016 21.1016C23.743 18.4547 27.2594 17 31 17C34.7406 17 38.257 18.4547 40.8984 21.1016C43.5453 23.7484 45 27.2594 45 31C45 33.6906 44.2344 36.3047 42.7852 38.5578C41.3742 40.7508 39.3891 42.5063 37.0484 43.6328C36.3648 43.9555 35.55 43.6711 35.2219 42.9875Z" fill="#2BC155"></path>
                                                            <path d="M36.3211 30.2726C36.589 30.0047 36.7203 29.6547 36.7203 29.3047C36.7203 28.9547 36.589 28.6047 36.3211 28.3367L32.8812 24.8969C32.3781 24.3937 31.7109 24.1203 31.0055 24.1203C30.3 24.1203 29.6273 24.3992 29.1297 24.8969L25.6898 28.3367C25.1539 28.8726 25.1539 29.7367 25.6898 30.2726C26.2258 30.8086 27.0898 30.8086 27.6258 30.2726L29.6437 28.2547L29.6437 36.0258C29.6437 36.7804 30.2562 37.3929 31.0109 37.3929C31.7656 37.3929 32.3781 36.7804 32.3781 36.0258L32.3781 28.2492L34.3961 30.2672C34.9211 30.8031 35.7851 30.8031 36.3211 30.2726Z" fill="#2BC155"></path>

                                                        </g>
                                                    </svg>
                                                    <br>
                                                    $ ${profit}
                                                </div>`
        } else {
            return `<div>
                                                <svg class="me-2 oi-icon bgl-danger" width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path d="M35.2219 19.0125C34.8937 19.6906 35.1836 20.5109 35.8617 20.8391C37.7484 21.7469 39.3453 23.1578 40.4828 24.9242C41.6476 26.7344 42.2656 28.8344 42.2656 31C42.2656 37.2125 37.2125 42.2656 31 42.2656C24.7875 42.2656 19.7344 37.2125 19.7344 31C19.7344 28.8344 20.3523 26.7344 21.5117 24.9187C22.6437 23.1523 24.2461 21.7414 26.1328 20.8336C26.8109 20.5055 27.1008 19.6906 26.7726 19.007C26.4445 18.3289 25.6297 18.0391 24.9461 18.3672C22.6 19.4937 20.6148 21.2437 19.2094 23.4422C17.7656 25.6953 17 28.3094 17 31C17 34.7406 18.4547 38.257 21.1015 40.8984C23.743 43.5453 27.2594 45 31 45C34.7406 45 38.257 43.5453 40.8984 40.8984C43.5453 38.2516 45 34.7406 45 31C45 28.3094 44.2344 25.6953 42.7851 23.4422C41.3742 21.2492 39.389 19.4937 37.0484 18.3672C36.3648 18.0445 35.55 18.3289 35.2219 19.0125Z" fill="#FF2E2E"></path>
                                                        <path d="M36.3211 31.7274C36.5891 31.9953 36.7203 32.3453 36.7203 32.6953C36.7203 33.0453 36.5891 33.3953 36.3211 33.6633L32.8812 37.1031C32.3781 37.6063 31.7109 37.8797 31.0055 37.8797C30.3 37.8797 29.6273 37.6008 29.1297 37.1031L25.6898 33.6633C25.1539 33.1274 25.1539 32.2633 25.6898 31.7274C26.2258 31.1914 27.0898 31.1914 27.6258 31.7274L29.6437 33.7453L29.6437 25.9742C29.6437 25.2196 30.2562 24.6071 31.0109 24.6071C31.7656 24.6071 32.3781 25.2196 32.3781 25.9742L32.3781 33.7508L34.3961 31.7328C34.9211 31.1969 35.7852 31.1969 36.3211 31.7274Z" fill="#FF2E2E"></path>
                                                    </g>
                                                </svg>
                                                <br>
                                                $ ${profit}
                                                </div>`

        }
    }


    async function profitSumHTML(profit) {
        // var profit = 0;
        // for (var i = 0; i < data.length; i++) {
        //     profit = profit + data[i].profit + data[i].commission + data[i].swap;
        // }
        if (profit > 0) {
            return `<div>
                                                    <svg class="me-2 oi-icon bgl-success" width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g>
                                                            <path d="M35.2219 42.9875C34.8938 42.3094 35.1836 41.4891 35.8617 41.1609C37.7484 40.2531 39.3453 38.8422 40.4828 37.0758C41.6477 35.2656 42.2656 33.1656 42.2656 31C42.2656 24.7875 37.2125 19.7344 31 19.7344C24.7875 19.7344 19.7344 24.7875 19.7344 31C19.7344 33.1656 20.3523 35.2656 21.5117 37.0813C22.6437 38.8477 24.2461 40.2586 26.1328 41.1664C26.8109 41.4945 27.1008 42.3094 26.7727 42.993C26.4445 43.6711 25.6297 43.9609 24.9461 43.6328C22.6 42.5063 20.6148 40.7563 19.2094 38.5578C17.7656 36.3047 17 33.6906 17 31C17 27.2594 18.4547 23.743 21.1016 21.1016C23.743 18.4547 27.2594 17 31 17C34.7406 17 38.257 18.4547 40.8984 21.1016C43.5453 23.7484 45 27.2594 45 31C45 33.6906 44.2344 36.3047 42.7852 38.5578C41.3742 40.7508 39.3891 42.5063 37.0484 43.6328C36.3648 43.9555 35.55 43.6711 35.2219 42.9875Z" fill="#2BC155"></path>
                                                            <path d="M36.3211 30.2726C36.589 30.0047 36.7203 29.6547 36.7203 29.3047C36.7203 28.9547 36.589 28.6047 36.3211 28.3367L32.8812 24.8969C32.3781 24.3937 31.7109 24.1203 31.0055 24.1203C30.3 24.1203 29.6273 24.3992 29.1297 24.8969L25.6898 28.3367C25.1539 28.8726 25.1539 29.7367 25.6898 30.2726C26.2258 30.8086 27.0898 30.8086 27.6258 30.2726L29.6437 28.2547L29.6437 36.0258C29.6437 36.7804 30.2562 37.3929 31.0109 37.3929C31.7656 37.3929 32.3781 36.7804 32.3781 36.0258L32.3781 28.2492L34.3961 30.2672C34.9211 30.8031 35.7851 30.8031 36.3211 30.2726Z" fill="#2BC155"></path>

                                                        </g>
                                                    </svg>
                                                    <br>
                                                    $ ${profit}
                                                </div>`
        } else {
            return `<div>
                                                <svg class="me-2 oi-icon bgl-danger" width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path d="M35.2219 19.0125C34.8937 19.6906 35.1836 20.5109 35.8617 20.8391C37.7484 21.7469 39.3453 23.1578 40.4828 24.9242C41.6476 26.7344 42.2656 28.8344 42.2656 31C42.2656 37.2125 37.2125 42.2656 31 42.2656C24.7875 42.2656 19.7344 37.2125 19.7344 31C19.7344 28.8344 20.3523 26.7344 21.5117 24.9187C22.6437 23.1523 24.2461 21.7414 26.1328 20.8336C26.8109 20.5055 27.1008 19.6906 26.7726 19.007C26.4445 18.3289 25.6297 18.0391 24.9461 18.3672C22.6 19.4937 20.6148 21.2437 19.2094 23.4422C17.7656 25.6953 17 28.3094 17 31C17 34.7406 18.4547 38.257 21.1015 40.8984C23.743 43.5453 27.2594 45 31 45C34.7406 45 38.257 43.5453 40.8984 40.8984C43.5453 38.2516 45 34.7406 45 31C45 28.3094 44.2344 25.6953 42.7851 23.4422C41.3742 21.2492 39.389 19.4937 37.0484 18.3672C36.3648 18.0445 35.55 18.3289 35.2219 19.0125Z" fill="#FF2E2E"></path>
                                                        <path d="M36.3211 31.7274C36.5891 31.9953 36.7203 32.3453 36.7203 32.6953C36.7203 33.0453 36.5891 33.3953 36.3211 33.6633L32.8812 37.1031C32.3781 37.6063 31.7109 37.8797 31.0055 37.8797C30.3 37.8797 29.6273 37.6008 29.1297 37.1031L25.6898 33.6633C25.1539 33.1274 25.1539 32.2633 25.6898 31.7274C26.2258 31.1914 27.0898 31.1914 27.6258 31.7274L29.6437 33.7453L29.6437 25.9742C29.6437 25.2196 30.2562 24.6071 31.0109 24.6071C31.7656 24.6071 32.3781 25.2196 32.3781 25.9742L32.3781 33.7508L34.3961 31.7328C34.9211 31.1969 35.7852 31.1969 36.3211 31.7274Z" fill="#FF2E2E"></path>
                                                    </g>
                                                </svg>
                                                <br>
                                                $ ${profit}
                                                </div>`

        }
    }

    async function stepTypeHTML(type, step) {
        // var profit = 0;
        // for (var i = 0; i < data.length; i++) {
        //     profit = profit + data[i].profit + data[i].commission + data[i].swap;
        // }
        if (type == "SELL") {
            return `<span>${step}  <span style="color:red">${type}</span></span>`
        } else {
            return `<span>${step}  <span style="color:green">${type}</span></span>`

        }
    }

    async function strategyModalSettings(transactionId, strategyId, modalValueActions = "modal fade", modalValuestyle = "style='display: none;' aria-hidden='true'") {
        var datas = await httpGetNoLoading(theUrl = "/bots/emirhan-bb-stoch/strategies/get?id=" + strategyId);

        for (var i = 0; i < datas.strategies.length; i++) {
            return ` <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <form>
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Swing BB Inputs</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="basic-form">
                                                                    <div class="mb-3">
                                                                        <div class="form-check mb-2">
                                                                            <label class="form-check-label" for="check1">Trade Hours</label>
                                                                            <input type="checkbox" class="form-check-input" id="check1" value="" checked='${datas.strategies[i].data.trade.trade_hour_status}' disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Start Time</label>
                                                                        <div class="input-group clockpicker">
                                                                            <input id="start_time_input" type="text" class="form-control" value="${datas.strategies[i].data.trade.trade_hour_start}" id="startTime" disabled><span class="input-group-text"><i class="las la-hourglass-start scale5"></i></span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label class="form-label">End Time</label>
                                                                        <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autobtn-close="true">
                                                                            <input id="end_time_input" type="text" class="form-control" value="${datas.strategies[i].data.trade.trade_hour_end}" id="endTime" disabled><span class="input-group-text"><i class="las la-hourglass-end scale5"></i></span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label class="form-label">Volume</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Volume" value="${datas.strategies[i].data.trade.default_volume}" disabled><span class="input-group-text"><i class="las la-calculator scale5"></i></span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label class="form-label">Increment Step</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Increment Step" value="${datas.strategies[i].data.trade.increament_step}" disabled><span class="input-group-text"><i class="las la-magic scale5"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger light" onclick="$('#modalStrategyTradeSettings${transactionId}').modal('hide');">Close</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    </div>
                                                    </div>

                                                    <!-- Modal -->
                                                    <div class="${modalValueActions}" id="modalInputs${transactionId}" ${modalValuestyle}>
                                                        ${await strategyModalInputs(datas.strategies[i], transactionId)}
                                                    </div>`
        }
    }
    async function strategyModalInputs(strategyJSON, transactionId) {
        return ` <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <form>
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Swing BB Strategy Settings</h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="basic-form">
                                                                        <div class="mb-3">

                                                                            <label class="me-sm-2">Strategy</label>
                                                                            <select class="me-sm-4 form-control wide" id="strategyFilter" style="width:100%" disabled>
                                                                                <option value="${strategyJSON.name}">${strategyJSON.name}</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <div class="form-check mb-2">
                                                                                <label class="form-check-label" for="check1">Trade Hours</label>
                                                                                <input type="checkbox" class="form-check-input" id="check1" value="" checked='${strategyJSON.trade_hour_status}' disabled>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="form-label">Start Time</label>
                                                                            <div class="input-group clockpicker">
                                                                                <input id="start_time_input" type="text" class="form-control" value="${strategyJSON.data.trade.trade_hour_start}" id="startTime" disabled><span class="input-group-text"><i class="las la-hourglass-start scale5"></i></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label class="form-label">End Time</label>
                                                                            <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autobtn-close="true">
                                                                                <input id="end_time_input" type="text" class="form-control" value="${strategyJSON.data.trade.trade_hour_end}" id="endTime" disabled><span class="input-group-text"><i class="las la-hourglass-end scale5"></i></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label class="form-label">Volume</label>
                                                                            <div class="input-group">
                                                                                <input type="text" class="form-control" placeholder="Volume" value="${strategyJSON.data.trade.default_volume}" disabled><span class="input-group-text"><i class="las la-calculator scale5"></i></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label class="form-label">Increment Step</label>
                                                                            <div class="input-group">
                                                                                <input type="text" class="form-control" placeholder="Increment Step" value="${strategyJSON.data.trade.increament_step}" disabled><span class="input-group-text"><i class="las la-magic scale5"></i></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger light" onclick="$('#modalInputs${transactionId}').modal('hide');">Close</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>`

    }

    async function positionTypeTransaction(type, step) {
        if (type == 0) {
            return `<span class="text-nowrap" style="color:green">${step} - Buy</span>`
        } else if (type == 1) {
            return `<span class="text-nowrap" style="color:red">${step} - Sell</span>`


        }
    }

    async function positionTypeHistory(type) {
        if (type == 0) {
            return `<td><span style="color:green">Buy</span></td>`
        } else if (type == 1) {
            return `<td><span style="color:red">Sell</span></td>`


        }
    }

    async function getMaxStep(data) {
        var step = 0;
        for (var i = 0; i < data.length; i++) {
            if (data[i].step > step) {
                step = data[i].step;
            }
        }
        return step;
    }

    async function startSwingBB() {
        var urlRoute = 'api.breakout.services.swing.start'
        const data = await botsHttpActions(urlRoute, "get?id=1");
        toastr.error('Transaction was successfully started.', 'Success');
        toastr.info('Transaction was successfully started.', 'Success');
    }

    async function stopSwingBB() {
        var urlRoute = 'api.breakout.services.swing.stop'
        const data = await botsHttpActions(urlRoute, "get?id=1");
        toastr.warning('Transaction was successfully stopped.', 'Warning');
    }

    async function closeSwingBB(transId) {
        const dataTrans = await httpGetNoLoading(theUrl = "/bots/emirhan-bb-stoch/transactions/get?id=" + transId);
        var urlRoute = 'api.breakout.services.swing.closeAll'
        var magic_number = dataTrans.transactions[0].positions[0].magic_number
        var type = "buy"
        if (dataTrans.transactions[0].positions[0].type == 1) {
            magic_number = magic_number - 1;
            type = "sell"
        }

        const data = await botsHttpActions(urlRoute, "/bots/emirhan-bb-stoch/transactions/close?account_id=" + dataTrans.transactions[0].account_id + "&pair_id=" + dataTrans.transactions[0].positions[0].pair_id + "&magic_number=" + magic_number + "&trade=" + type);
        if (data.error == true) {
            toastr.error(transId + ' Close Action Error. Please try again after 2 seconds.', 'Error');

        } else {
            toastr.success(transId + ' Close Action is sent to server. Please wait new notification about closed transaction.', 'Success');

        }
    }

    async function botsHttpActions(urlRoute, theUrl) {
        var baseUrl = "{{ route('api.breakout.services.swing.start') }}" + "?theUrl=" + theUrl;
        if (urlRoute == 'api.breakout.services.swing.closeAll') {
            baseUrl = "{{ route('api.breakout.services.swing.closeAll') }}" + "?theUrl=" + theUrl;
        } else if (urlRoute == 'api.breakout.services.swing.stop') {
            baseUrl = "{{ route('api.breakout.services.swing.stop') }}" + "?theUrl=" + theUrl;

        }
        return new Promise(function(resolve, reject) {
            $.ajax({
                url: baseUrl,
                type: 'GET',
                crossDomain: true,
                success: function(response) {
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
</script>