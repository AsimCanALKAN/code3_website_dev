<x-app-layout :pagetitle="$pagetitle" :user="auth()->user()">

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h2>Symbol Settings: USDJPY</h2>
                    <form>
                        <div class="row align-items-center">
                            <div class="col-auto my-1">
                                <label class="me-sm-2">Choose Symbol</label>
                                <select class="me-sm-2 default-select form-control wide" id="currentEditingSymbol">
                                    <option selected>Choose...</option>
                                    <option value="1">USDJPY</option>
                                    <option value="2">EURUSD</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div class="profile-tab">
                        <div class="custom-tab-1">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a href="#auto-trade" data-bs-toggle="tab" class="nav-link active show">AutoTrade Settings</a>
                                </li>
                                <li class="nav-item"><a href="#inputs" data-bs-toggle="tab" class="nav-link">Inputs</a>
                                </li>
                                <li class="nav-item"><a href="#settings" data-bs-toggle="tab" class="nav-link">Settings</a>
                                </li>
                                <li class="nav-item">
    
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="auto-trade" class="tab-pane fade active show">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
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
                                                                <span> You will apply this setting to all BOS that are open for a symbol USDJPY as default setting</span>
    
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="inputs" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
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
                                                                <span> You will apply this setting to all BOS that are open for a symbol USDJPY as default setting</span>
    
    
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="settings" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
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
                                                                <span> You will apply this setting to all BOS that are open for a symbol USDJPY as default setting</span>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
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
                <div class="card-footer">
                    <span> Default Symbol Settings for USDJPY</span>
                </div>
            </div>
        </div>
    </div>
    <script>
    </script>
</x-app-layout>