<div class="row">
    <div class="col-xl-12 tab-content">
        <div class="table-responsive">
            <table class="table card-table display mb-4 dataTablesCard text-black" id="example6">
                <thead>
                    <tr>
                        <th>Settings</th>
                        <th>Program ID</th>
                        <th>Broker</th>
                        <th>Account ID</th>
                        <th>Status </th>
                        <th>Symbol</th>
                        <th>Magic No</th>
                        <th>Step</th>
                        <th>Profit</th>
                        <th>Net Lot</th>
                        <th>Step Table</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="border-color: transparent;">
                            <div class="dropdown dropstart">
                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <div class="dropdown-menu">
                                    <a data-bs-toggle="modal" data-bs-target="#modalAutoTradeSettings" class="dropdown-item"><i class="las la-recycle scale5 me-3"></i>AutoTrade Settings</a>

                                    <a data-bs-toggle="modal" data-bs-target="#modalInputs" class="dropdown-item"><i class="las la-sliders-h scale5 me-3"></i>Inputs</a>

                                    <a data-bs-toggle="modal" data-bs-target="#modalSettings" class="dropdown-item"><i class="las la-cog scale5 me-3"></i>Settings</a>

                                    <a data-bs-toggle="modal" data-bs-target="#modalSettings" class="dropdown-item"><i class="las la-copy scale5 me-3"></i>Apply Setting to All USDJPY</a>

                                    <a class="dropdown-item" href="symbol-settings.php"><i class="las la-cogs scale5 me-3"></i>Go to Symbol Settings</a>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="modalAutoTradeSettings">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <form>
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">AutoTrade Settings</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>AutoTrade Inputs</h5>
                                                    <div class="basic-form">
                                                        <div class="mb-3">
                                                            <label class="form-label">Start Time</label>
                                                            <div class="input-group clockpicker">
                                                                <input id="start_time_input" type="text" class="form-control" value="09:30" id="startTime"><span class="input-group-text"><i class="las la-hourglass-start scale5"></i></span>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label">Auto btn-close Clock Picker</label>
                                                            <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autobtn-close="true">
                                                                <input id="end_time_input" type="text" class="form-control" value="23:59" id="startTime"><span class="input-group-text"><i class="las la-hourglass-start scale5"></i></span>

                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label">Hedge Step</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Hedge Step"><span class="input-group-text"><i class="las la-hand-paper scale5"></i></span>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <div class="form-check mb-2">
                                                                <label class="form-check-label" for="check1">Enter in hedged box</label>
                                                                <input type="checkbox" class="form-check-input" id="check1" value="" checked>
                                                            </div>
                                                            <div class="form-check mb-2">
                                                                <label class="form-check-label" for="check2">Continue with hedged box</label>
                                                                <input type="checkbox" class="form-check-input" id="check2" value="" checked>
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <hr>
                                                    <h5>AutoTrade System Selection</h5>
                                                    <div class="basic-form">
                                                        <div class="mb-3">
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" value="" checked>BigNumber
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" value="">Mintage Str
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" value="" checked>FiboPivot
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" value="">BreakOut
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="modalSettings">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <form>
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Settings</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>Margin Mode</h5>
                                                    <div class="basic-form">
                                                        <div class="mb-3 mb-0">
                                                            <div class="radio">
                                                                <label><input type="radio" name="optradio"> Netting Mode</label>
                                                            </div>
                                                            <div class="radio">
                                                                <label><input type="radio" name="optradio"> Hedging Mode</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <hr>
                                                    <h5>Hedge Mode</h5>
                                                    <div class="basic-form">
                                                        <div class="mb-3 mb-0">
                                                            <div class="radio">
                                                                <label><input type="radio" name="optradio2"> Half Hedge Mode</label>
                                                            </div>
                                                            <div class="radio">
                                                                <label><input type="radio" name="optradio2"> Full Hedge Mode</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>

                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="modalInputs">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <form>
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">BreakOut Strategy Inputs</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>Inputs</h5>
                                                    <div class="basic-form">


                                                        <div class="mb-3">
                                                            <label class="form-label">Box Size</label>
                                                            <div class="input-group">
                                                                <input id="box_size_input" type="text" class="form-control" placeholder="Box Size"><span class="input-group-text"><i class="las la-expand scale5"></i></span>
                                                            </div>
                                                        </div>

                                                        <div class="form-check mb-2">
                                                            <label class="form-check-label" for="check1">Box Price (Up)</label>
                                                            <input type="checkbox" class="form-check-input" id="box_price_up_check" value="" checked>
                                                        </div>

                                                        <div class="mb-3">
                                                            <div class="input-group">
                                                                <input id="box_price_up_input" type="text" class="form-control" placeholder="Box Price (Up)"><span class="input-group-text"><i class="las la-grip-lines scale5"></i></span>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label">First Size</label>
                                                            <div class="input-group">
                                                                <input id="first_size_input" type="text" class="form-control" placeholder="First Size"><span class="input-group-text"><i class="las la-play scale5"></i></span>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label">Input Size</label>
                                                            <div class="input-group">
                                                                <input id="input_size_input" type="text" class="form-control" placeholder="Input Size"><span class="input-group-text"><i class="las la-step-forward scale5"></i></span>
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label">TP Max</label>
                                                            <div class="input-group">
                                                                <input id="tp_max_input" type="text" class="form-control" placeholder="TP Max"><span class="input-group-text"><i class="las la-money-bill-wave scale5"></i></span>
                                                            </div>
                                                        </div>

                                                        <div class="form-check mb-2">
                                                            <label class="form-check-label" for="tp_min_check">TP Min</label>
                                                            <input type="checkbox" class="form-check-input" id="tp_min_check" value="">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label">TP Min</label>
                                                            <div class="input-group">
                                                                <input id="tp_min_input" type="text" class="form-control" placeholder="TP Min"><span class="input-group-text"><i class="las la-hand-paper scale5"></i></span>
                                                            </div>
                                                        </div>


                                                        <div class="mb-3">
                                                            <label class="form-label">Max SL %</label>
                                                            <div class="input-group">
                                                                <input id="max_sl_input" type="text" class="form-control" placeholder="Max SL %"><span class="input-group-text"><i class="las la-stop scale5"></i></span>
                                                            </div>
                                                        </div>

                                                        <div class="form-check mb-2">
                                                            <label class="form-check-label" for="tsl_check">TSL %</label>
                                                            <input type="checkbox" class="form-check-input" id="tsl_check" value="">
                                                        </div>
                                                        <div class="mb-3">
                                                            <div class="input-group">
                                                                <input id="tsl_input" type="text" class="form-control" placeholder="TSL %"><span class="input-group-text"><i class="las la-walking scale5"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>


                        </td>
                        <!-- Button trigger modal -->
                        <td data-bs-toggle="collapse" data-bs-target="#default_collapseOne1" class="accordion-header collapsed" style="border-color: transparent;"><span>#123412451</span></td>
                        <td data-bs-toggle="collapse" data-bs-target="#default_collapseOne1" class="accordion-header collapsed" style="border-color: transparent;"><span>Alchemy</span></td>
                        <td data-bs-toggle="collapse" data-bs-target="#default_collapseOne1" class="accordion-header collapsed" style="border-color: transparent;"><span>12451</span></td>
                        <!--<td data-bs-toggle="collapse" data-bs-target="#default_collapseOne1" class="accordion-header collapsed" style="border-color: transparent;"><span class="badge light badge-success">In Transaction</span></td>-->
                        <td data-bs-toggle="collapse" data-bs-target="#default_collapseOne1" class="accordion-header collapsed" style="border-color: transparent;"><span class="badge light badge-warning">Pending</span></td>
                        <!--<td data-bs-toggle="collapse" data-bs-target="#default_collapseOne1" class="accordion-header collapsed" style="border-color: transparent;"><span class="badge light badge-info">Boarding</span></td>-->
                        <td data-bs-toggle="collapse" data-bs-target="#default_collapseOne1" class="accordion-header collapsed" style="border-color: transparent;"><span class="text-nowrap">USDJPY</span></td>
                        <td data-bs-toggle="collapse" data-bs-target="#default_collapseOne1" class="accordion-header collapsed" style="border-color: transparent;"><span class="text-nowrap">6666</span></td>
                        <td data-bs-toggle="collapse" data-bs-target="#default_collapseOne1" class="accordion-header collapsed" style="border-color: transparent;"><span class="text-nowrap">Step: </span><span style="color:red">3 - Sell</span></td>
                        <td data-bs-toggle="collapse" data-bs-target="#default_collapseOne1" class="accordion-header collapsed" style="border-color: transparent;">
                            <div>
                                <svg class="me-2 oi-icon bgl-success" width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path d="M35.2219 42.9875C34.8938 42.3094 35.1836 41.4891 35.8617 41.1609C37.7484 40.2531 39.3453 38.8422 40.4828 37.0758C41.6477 35.2656 42.2656 33.1656 42.2656 31C42.2656 24.7875 37.2125 19.7344 31 19.7344C24.7875 19.7344 19.7344 24.7875 19.7344 31C19.7344 33.1656 20.3523 35.2656 21.5117 37.0813C22.6437 38.8477 24.2461 40.2586 26.1328 41.1664C26.8109 41.4945 27.1008 42.3094 26.7727 42.993C26.4445 43.6711 25.6297 43.9609 24.9461 43.6328C22.6 42.5063 20.6148 40.7563 19.2094 38.5578C17.7656 36.3047 17 33.6906 17 31C17 27.2594 18.4547 23.743 21.1016 21.1016C23.743 18.4547 27.2594 17 31 17C34.7406 17 38.257 18.4547 40.8984 21.1016C43.5453 23.7484 45 27.2594 45 31C45 33.6906 44.2344 36.3047 42.7852 38.5578C41.3742 40.7508 39.3891 42.5063 37.0484 43.6328C36.3648 43.9555 35.55 43.6711 35.2219 42.9875Z" fill="#2BC155"></path>
                                                <path d="M36.3211 30.2726C36.589 30.0047 36.7203 29.6547 36.7203 29.3047C36.7203 28.9547 36.589 28.6047 36.3211 28.3367L32.8812 24.8969C32.3781 24.3937 31.7109 24.1203 31.0055 24.1203C30.3 24.1203 29.6273 24.3992 29.1297 24.8969L25.6898 28.3367C25.1539 28.8726 25.1539 29.7367 25.6898 30.2726C26.2258 30.8086 27.0898 30.8086 27.6258 30.2726L29.6437 28.2547L29.6437 36.0258C29.6437 36.7804 30.2562 37.3929 31.0109 37.3929C31.7656 37.3929 32.3781 36.7804 32.3781 36.0258L32.3781 28.2492L34.3961 30.2672C34.9211 30.8031 35.7851 30.8031 36.3211 30.2726Z" fill="#2BC155"></path>

                                            </g>
                                        </svg>
                                $78.89
                            </div>

                        </td>
                        <td data-bs-toggle="collapse" data-bs-target="#default_collapseOne1" class="accordion-header collapsed" style="border-color: transparent;"><span>-0.2</span></td>
                        <td style="border-color: transparent;"><a href="javascript:void(0)" class="btn btn-primary btn-rounded light">Steps</a></td>
                        <td style="border-color: transparent;">
                            <div class="dropdown dropstart">
                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-circle-chevron-down fa-2xl me-auto"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">
                                        <div class="col-xl-12">
                                            <a href="javascript:void(0)" class="btn btn-warning btn-rounded light"><i class="fa-solid fa-stop"></i> Stop</a>
                                            <!-- <a href="javascript:void(0)" class="btn btn-warning btn-rounded light"><i class="fa-solid fa-play"></i> Start</a> -->
                                            <a href="javascript:void(0)" class="btn btn-danger btn-rounded light ml-3"><i class="fa-solid fa-xmark"></i> Close All</a>
                                            <a href="javascript:void(0)" class="btn btn-secondary btn-rounded light ml-3"><i class="fa-solid fa-equals"></i> Set Hedge</a>
                                        </div>
                                    </li>
                                </ul>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="12" style="padding:0">
                            <div id="default_collapseOne1" class="collapse accordion_body" data-bs-parent="#example6">
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
                                            <th style="color: white;">Swap</th>
                                            <th style="color: white;">Profit</th>
                                            <th style="color: white;">Magic</th>
                                            <th style="color: white;">Comment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>USDJPY</td>
                                            <td>2502878</td>
                                            <td>2022.02.17 17:08:50</td>
                                            <td>Sell</td>
                                            <td>17.39</td>
                                            <td>115.000</td>
                                            <td>114.498</td>
                                            <td></td>
                                            <td>$53.45</td>
                                            <td>6666</td>
                                            <td>S#3#115.200#115.000#N#1.0</td>
                                        </tr>
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
                                            <th style="color: white;">Profit</th>
                                            <th style="color: white;">Magic</th>
                                            <th style="color: white;">Comment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>USDJPY</td>
                                            <td>2502878</td>
                                            <td>2022.02.17 17:08:50</td>
                                            <td>Buy</td>
                                            <td>35.6</td>
                                            <td>115.200</td>
                                            <td>114.498</td>
                                            <td></td>
                                            <td>6666</td>
                                            <td>S#4#115.200#115.000#N#1.0</td>
                                        </tr>
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
                                            <th style="color: white;">Current Price</th>
                                            <th style="color: white;">Commision</th>
                                            <th style="color: white;">Fee</th>
                                            <th style="color: white;">Swap</th>
                                            <th style="color: white;">Profit</th>
                                            <th style="color: white;">Magic</th>
                                            <th style="color: white;">Comment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>USDJPY</td>
                                            <td>2502878</td>
                                            <td>2022.02.17 17:08:50</td>
                                            <td>Sell</td>
                                            <td>1.00</td>
                                            <td>115.000</td>
                                            <td>114.498</td>
                                            <td>$53.45</td>
                                            <td></td>
                                            <td></td>
                                            <td>$28.45</td>
                                            <td>6666</td>
                                            <td>S#1#115.200#115.000#N#1.0</td>
                                        </tr>
                                        <tr>
                                            <td>USDJPY</td>
                                            <td>2502878</td>
                                            <td>2022.02.17 17:08:50</td>
                                            <td>Buy</td>
                                            <td>2.00</td>
                                            <td>115.200</td>
                                            <td>114.498</td>
                                            <td>$80.45</td>
                                            <td></td>
                                            <td></td>
                                            <td>$28.45</td>
                                            <td>6666</td>
                                            <td>S#2#115.200#115.000#N#1.0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>

                    <!--**********************************
                            2. Collapsable Row
                        ***********************************-->
                    <tr>
                        <td style="border-color: transparent;">
                            <div class="dropdown dropstart">
                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="las la-recycle scale5 me-3"></i>AutoTrade Settings</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="las la-sliders-h scale5 me-3"></i>Inputs</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="las la-cog scale5 me-3"></i>Settings</a>
                                </div>
                            </div>
                        </td>
                        <td data-bs-toggle="collapse" data-bs-target="#default_collapseOne2" class="accordion-header collapsed" style="border-color: transparent;"><span>#123412451</span></td>
                        <td data-bs-toggle="collapse" data-bs-target="#default_collapseOne2" class="accordion-header collapsed" style="border-color: transparent;"><span>Alchemy</span></td>
                        <td data-bs-toggle="collapse" data-bs-target="#default_collapseOne2" class="accordion-header collapsed" style="border-color: transparent;"><span>12451</span></td>
                        <td data-bs-toggle="collapse" data-bs-target="#default_collapseOne2" class="accordion-header collapsed" style="border-color: transparent;"><span class="badge light badge-info">Boarding</span></td>
                        <td data-bs-toggle="collapse" data-bs-target="#default_collapseOne2" class="accordion-header collapsed" style="border-color: transparent;"><span class="text-nowrap">USDJPY</span></td>
                        <td data-bs-toggle="collapse" data-bs-target="#default_collapseOne2" class="accordion-header collapsed" style="border-color: transparent;"><span class="text-nowrap">6666</span></td>
                        <td data-bs-toggle="collapse" data-bs-target="#default_collapseOne2" class="accordion-header collapsed" style="border-color: transparent;"><span class="text-nowrap">Step: </span><span style="color:red">3 - Sell</span></td>
                        <td data-bs-toggle="collapse" data-bs-target="#default_collapseOne2" class="accordion-header collapsed" style="border-color: transparent;">
                            <div>
                                <svg class="me-2 oi-icon bgl-danger" width="63" height="63" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path d="M35.2219 19.0125C34.8937 19.6906 35.1836 20.5109 35.8617 20.8391C37.7484 21.7469 39.3453 23.1578 40.4828 24.9242C41.6476 26.7344 42.2656 28.8344 42.2656 31C42.2656 37.2125 37.2125 42.2656 31 42.2656C24.7875 42.2656 19.7344 37.2125 19.7344 31C19.7344 28.8344 20.3523 26.7344 21.5117 24.9187C22.6437 23.1523 24.2461 21.7414 26.1328 20.8336C26.8109 20.5055 27.1008 19.6906 26.7726 19.007C26.4445 18.3289 25.6297 18.0391 24.9461 18.3672C22.6 19.4937 20.6148 21.2437 19.2094 23.4422C17.7656 25.6953 17 28.3094 17 31C17 34.7406 18.4547 38.257 21.1015 40.8984C23.743 43.5453 27.2594 45 31 45C34.7406 45 38.257 43.5453 40.8984 40.8984C43.5453 38.2516 45 34.7406 45 31C45 28.3094 44.2344 25.6953 42.7851 23.4422C41.3742 21.2492 39.389 19.4937 37.0484 18.3672C36.3648 18.0445 35.55 18.3289 35.2219 19.0125Z" fill="#FF2E2E"></path>
                                                <path d="M36.3211 31.7274C36.5891 31.9953 36.7203 32.3453 36.7203 32.6953C36.7203 33.0453 36.5891 33.3953 36.3211 33.6633L32.8812 37.1031C32.3781 37.6063 31.7109 37.8797 31.0055 37.8797C30.3 37.8797 29.6273 37.6008 29.1297 37.1031L25.6898 33.6633C25.1539 33.1274 25.1539 32.2633 25.6898 31.7274C26.2258 31.1914 27.0898 31.1914 27.6258 31.7274L29.6437 33.7453L29.6437 25.9742C29.6437 25.2196 30.2562 24.6071 31.0109 24.6071C31.7656 24.6071 32.3781 25.2196 32.3781 25.9742L32.3781 33.7508L34.3961 31.7328C34.9211 31.1969 35.7852 31.1969 36.3211 31.7274Z" fill="#FF2E2E"></path>
                                            </g>
                                        </svg>
                                $738.89
                            </div>
                        </td>
                        <td data-bs-toggle="collapse" data-bs-target="#default_collapseOne2" class="accordion-header collapsed" style="border-color: transparent;"><span>-0.2</span></td>
                        <td style="border-color: transparent;"><a href="javascript:void(0)" class="btn btn-primary btn-rounded light">Steps</a></td>
                        <td style="border-color: transparent;">
                            <div class="dropdown dropstart">
                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-circle-chevron-down fa-2xl me-auto"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-item">
                                        <div class="col-xl-12">
                                            <a href="javascript:void(0)" class="btn btn-success btn-rounded light"><i class="fa-solid fa-arrow-up"></i> Buy</a>
                                            <a href="javascript:void(0)" class="btn btn-warning btn-rounded light ml-3"><i class="fa-solid fa-play"></i> Start</a>
                                            <a href="javascript:void(0)" class="btn btn-info btn-rounded light ml-3"><i class="fa-solid fa-arrow-down"></i> Sell</a>
                                            <a href="javascript:void(0)" class="btn btn-danger btn-rounded light ml-3"><i class="fa-solid fa-xmark"></i> Close All</a>
                                            <a href="javascript:void(0)" class="btn btn-secondary btn-rounded light ml-3"><i class="fa-solid fa-equals"></i> Hedge On</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="12" style="padding:0">
                            <div id="default_collapseOne2" class="collapse accordion_body" data-bs-parent="#example6">
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
                                            <th style="color: white;">Swap</th>
                                            <th style="color: white;">Profit</th>
                                            <th style="color: white;">Magic</th>
                                            <th style="color: white;">Comment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>USDJPY</td>
                                            <td>2502878</td>
                                            <td>2022.02.17 17:08:50</td>
                                            <td>Sell</td>
                                            <td>17.39</td>
                                            <td>115.000</td>
                                            <td>114.498</td>
                                            <td></td>
                                            <td>$53.45</td>
                                            <td>6666</td>
                                            <td>S#3#115.200#115.000#N#1.0</td>
                                        </tr>
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
                                            <th style="color: white;">Profit</th>
                                            <th style="color: white;">Magic</th>
                                            <th style="color: white;">Comment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>USDJPY</td>
                                            <td>2502878</td>
                                            <td>2022.02.17 17:08:50</td>
                                            <td>Buy</td>
                                            <td>35.6</td>
                                            <td>115.200</td>
                                            <td>114.498</td>
                                            <td></td>
                                            <td>6666</td>
                                            <td>S#4#115.200#115.000#N#1.0</td>
                                        </tr>
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
                                            <th style="color: white;">Current Price</th>
                                            <th style="color: white;">Commision</th>
                                            <th style="color: white;">Fee</th>
                                            <th style="color: white;">Swap</th>
                                            <th style="color: white;">Profit</th>
                                            <th style="color: white;">Magic</th>
                                            <th style="color: white;">Comment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>USDJPY</td>
                                            <td>2502878</td>
                                            <td>2022.02.17 17:08:50</td>
                                            <td>Sell</td>
                                            <td>1.00</td>
                                            <td>115.000</td>
                                            <td>114.498</td>
                                            <td>$53.45</td>
                                            <td></td>
                                            <td></td>
                                            <td>$28.45</td>
                                            <td>6666</td>
                                            <td>S#1#115.200#115.000#N#1.0</td>
                                        </tr>
                                        <tr>
                                            <td>USDJPY</td>
                                            <td>2502878</td>
                                            <td>2022.02.17 17:08:50</td>
                                            <td>Buy</td>
                                            <td>2.00</td>
                                            <td>115.200</td>
                                            <td>114.498</td>
                                            <td>$80.45</td>
                                            <td></td>
                                            <td></td>
                                            <td>$28.45</td>
                                            <td>6666</td>
                                            <td>S#2#115.200#115.000#N#1.0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>

    </div>
</div>