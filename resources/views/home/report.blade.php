<x-app-layout :pagetitle="$pagetitle">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
            <div class="card-header"> <span class="fw-600 text-4">Generate Report</span> </div>
                <div class="card-body">
                    <div class="row">
                        <div class="d-flex flex-wrap align-items-center mb-3">
                            <div class="col-md-5 mb-3 me-auto ml-3">
                                <div class="card-tabs style-1 mt-3 mt-sm-0">
                                    <form>
                                        <div class="row align-items-center">
                                            <div>
                                                <label class="me-sm-2">Select Symbol</label>
                                                <select class="me-sm-2 default-select form-control wide" id="inlineFormCustomSelect">
                                                    <option selected>Select...</option>
                                                    <option value="1">USDJPY</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 mb-3 me-auto">
                                <div class="card-tabs style-1 mt-3 mt-sm-0">
                                    <form>
                                        <div class="row align-items-center">
                                            <div>
                                                <label class="me-sm-2">Brokers</label>
                                                <select class="me-sm-2 default-select form-control wide" id="inlineFormCustomSelect">
                                                    <option selected>Choose...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-md-5 mb-3 me-auto">
                                <div class="card-tabs style-1 mt-3 mt-sm-0">
                                    <form>
                                        <div class="row align-items-center">
                                            <div class="col-auto my-1">
                                                <label class="me-sm-2">Account ID</label>
                                                <select class="me-sm-2 default-select form-control wide" id="inlineFormCustomSelect">
                                                    <option selected>Choose...</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-md-5 mb-3 me-auto">
                                <div class="example">
                                    <p class="mb-1">Date Range With Time</p>
                                    <input type="text" class="form-control input-daterange-timepicker" name="daterange" value="01/01/2022 1:30 PM - 01/01/2022 2:00 PM">
                                </div>
                            </div>


                        </div>
                        <div class="d-flex flex-wrap align-items-center mb-3">


                            <div class="col-md-5 me-auto mt-3">
                                <div class="row align-items-center">
                                    <p class="mb-1">Select Profit Range</p>
                                    <div id="profit-range"></div>
                                    <div class="input-group">
                                        <input class="form-control" data-toggle="tooltip" data-placement="top" title="Min Profit" type="number" min="-100000000" max="100000000" step="1" id="input-number1">
                                        <input class="form-control" data-toggle="tooltip" data-placement="auto" title="Max Profit" type="number" min="-100000000" max="100000000" step="1" id="input-number2">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5 me-auto mt-3">
                                <div class="row align-items-center">
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
                <div class="card-footer border-0 pt-0">
                    <a href="#" class="btn btn-outline-primary d-block btn-lg"><i class="las la-download scale5"></i> Download</a>
                </div>
            </div>
        </div>
    </div>


	<x-slot:scripts>
        <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
        <!-- pickdate -->
        <script src="{{ asset('vendor/pickadate/picker.js') }}"></script>
        <script src="{{ asset('vendor/pickadate/picker.time.js') }}"></script>
        <script src="{{ asset('vendor/pickadate/picker.date.js') }}"></script>
        
        <!-- clockpicker -->
        <script src="{{ asset('vendor/clockpicker/js/bootstrap-clockpicker.min.js') }}"></script>
        
        <!-- momment js is must -->
        <script src="{{ asset('vendor/moment/moment.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>


        <!-- Daterangepicker -->
        <script src="{{ asset('js/plugins-init/bs-daterange-picker-init.js') }}"></script>
        <!-- Clockpicker init -->
        <script src="{{ asset('js/plugins-init/clock-picker-init.js') }}"></script>
        <!-- momment js is must -->
        <script src="{{ asset('vendor/moment/moment.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>


        <script src="{{ asset('vendor/nouislider/nouislider.min.js') }}"></script>
        <script>
            (function($) {
                "use strict"
                var profitRange = document.getElementById('profit-range');
                noUiSlider.create(profitRange, {
                    start: [10, 30],
                    connect: true,
                    range: {
                        'min': 20,
                        'max': 100
                    }
                });

                var inputNumber = document.getElementById('input-number1');
                var inputNumber2 = document.getElementById('input-number2');

                profitRange.noUiSlider.on('update', function(values, handle) {

                    var value = values[handle];

                    if (handle) {
                        inputNumber2.value = value;
                    } else {
                        inputNumber.value = value;
                    }
                });

                inputNumber.addEventListener('change', function() {
                    html5Slider.noUiSlider.set([this.value, null]);
                });

                inputNumber2.addEventListener('change', function() {
                    html5Slider.noUiSlider.set([null, this.value]);
                });
                //html5 input element 


                var step_Slider = document.getElementById('step-slider');
                noUiSlider.create(step_Slider, {
                    start: [2, 3],
                    connect: true,
                    range: {
                        'min': 1,
                        'max': 6
                    }
                });

                var stepNumber = document.getElementById('step-number1');
                var stepNumber2 = document.getElementById('step-number2');

                step_Slider.noUiSlider.on('update', function(values, handle) {

                    var value = values[handle];
                    value = parseInt(value);
                    if (handle) {
                        stepNumber2.value = value;
                    } else {
                        stepNumber.value = value;
                    }
                });

                stepNumber.addEventListener('change', function() {
                    step_Slider.noUiSlider.set([this.value, null]);
                });

                stepNumber2.addEventListener('change', function() {
                    step_Slider.noUiSlider.set([null, this.value]);
                });
                //html5 input element 

            })(jQuery);

            $(function() {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
        <script src="{{ asset('vendor/wnumb/wNumb.js') }}"></script>
        <!--<script src="js/plugins-init/nouislider-init.js"></script>-->

        <!-- Material color picker -->
        <script src="{{ asset('vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
    </x-slot:scripts>
</x-app-layout>