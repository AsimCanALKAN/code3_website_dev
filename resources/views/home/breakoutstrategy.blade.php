<x-app-layout :pagetitle="$pagetitle" :user="auth()->user()">
    <x-breakout.filter :data="$data" />
    <x-breakout.results :data="$data" />

    <x-slot:scripts>
        <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
        <!-- pickdate -->
        <script src="{{ asset('vendor/pickadate/picker.js') }}"></script>
        <script src="{{ asset('vendor/pickadate/picker.time.js') }}"></script>
        <script src="{{ asset('vendor/pickadate/picker.date.js') }}"></script>

        <!-- Apex Chart -->
        <script src="{{ asset('vendor/apexchart/apexchart.js') }}"></script>
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
        <!-- Datatable -->
        <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('js/plugins-init/datatables.init.js') }}"></script>
        <script>
            $(document).ready(() => {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var requestData = {
                    page: "{{ request()->query('page') }}",
                }
                const a = $.ajax({
                    url: "{{ route('api.history.get') }}?page=" + requestData.page,
                    method: 'get',
                    xhrFields: {
                        withCredentials: true
                    },
                    success: (d) => {
                        const button_wrapper = $('#button-wrapper');

                        for (const link of d.links) {
                            // TODO: duplicate code
                            if (link.url === null) {
                                button_wrapper.append(`<a href="#" class="btn btn-primary" id="pagination-button-${link.label}">${link.label}</a>`)
                            } else {
                                if (link.active) {
                                    button_wrapper.append(`<a href="{{ route('swing-bb-history-analysis') }}?${link.url.split('?')[1]}" class="btn btn-primary active" id="pagination-button-${link.label}">${link.label}</a>`)
                                } else button_wrapper.append(`<a href="{{ route('swing-bb-history-analysis') }}?${link.url.split('?')[1]}" class="btn btn-primary" id="pagination-button-${link.label}">${link.label}</a>`)
                            }
                        }
                    }
                });
            });
        </script>

        <script src="{{ asset('vendor/nouislider/nouislider.min.js') }}"></script>
        <script>
            (function($) {
                "use strict"
                var profitSlider = document.getElementById('profitRange')
                noUiSlider.create(document.getElementById('profitRange'), {
                    start: [-30, 30],
                    connect: true,
                    range: {
                        'min': -999999,
                        'max': 999999
                    }
                })

                var inputNumber = document.getElementById('profit-number1');
                var inputNumber2 = document.getElementById('profit-number2');

                profitSlider.noUiSlider.on('update', function(values, handle) {
                    var value = values[handle];

                    if (handle) {
                        inputNumber2.value = value;
                    } else {
                        inputNumber.value = value;
                    }
                });

                inputNumber.addEventListener('change', function() {
                    profitSlider.noUiSlider.set([this.value, null]);
                });

                inputNumber2.addEventListener('change', function() {
                    profitSlider.noUiSlider.set([null, this.value]);
                });


                var step_Slider = document.getElementById('step-slider');
                noUiSlider.create(step_Slider, {
                    start: [2, 3],
                    step: 1,
                    connect: true,
                    range: {
                        'min': 1,
                        'max': 100
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
        <script src="{{ asset('vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
    </x-slot:scripts>
</x-app-layout>