@extends('layouts.app', ['activePage' => 'indexDriver', 'titlePage' => __('Add Info')])

@section('style')

    <link href="/css/syncfusion.css" rel="stylesheet"/>

    <style>
        .display-time {
            background-color: #1d253b;
            border-color: #2b3553 !important;
            outline: none;
            height: 38px !important;
            color: rgba(255, 255, 255, 0.8);
        }
    </style>
@endsection

@section('content')

    <div class="row">

        <breadcrumb :data="[{'text':'Home','href':'/home'}, {'text':'Info','href':'/info'}]" active="Create"></breadcrumb>

        <topbutton text="Back" link="/info"></topbutton>

        <wizard @submit="submit" title="Create Info" description="Follow the process to add a new info to our system.">
            <wizard-tab name="departure" icon="tim-icons icon-delivery-fast">
                <h5 class="info-text"> Set departure time and place.</h5>

                <v-form name="driver" class="row justify-content-center mt-5">
                    <div class="col-sm-10">
                        <base-input placeholder="Depart From" field="from" addon-left-icon="tim-icons icon-single-02"
                                    :vparam="['required']">
                        </base-input>
                    </div>
                    <div class="col-sm-5">
                        <base-datepicker placeholder="Depart Date" field="depart" addon-left-icon="eec-icons icon-clock"
                                         :vparam="['required']">
                        </base-datepicker>
                    </div>
                    <div class="col-sm-5">
                        <vue-timepicker v-model="depart_time"></vue-timepicker>
{{--                        <base-input placeholder="Depart Time" field="depart_time" addon-left-icon="eec-icons icon-clock"--}}
{{--                                         :vparam="['required']">--}}
{{--                        </base-input>--}}
                    </div>
                </v-form>

            </wizard-tab>
            <wizard-tab name="arrival" icon="tim-icons icon-delivery-fast">
                <h5 class="info-text"> Set arrival time and place.</h5>

                <v-form name="driver" class="row justify-content-center mt-5">
                    <div class="col-sm-10">
                        <base-input placeholder="Arrive At" field="to" addon-left-icon="tim-icons icon-single-02"
                                    :vparam="['required']">
                        </base-input>
                    </div>
                    <div class="col-sm-5">
                        <base-datepicker placeholder="ETA Date" field="eta" addon-left-icon="eec-icons icon-clock"
                                         :vparam="['required']">
                        </base-datepicker>
                    </div>
                    <div class="col-sm-5">
                        <vue-timepicker v-model="eta_time"></vue-timepicker>
                    </div>
                </v-form>

            </wizard-tab>
            <wizard-tab name="account" icon="tim-icons icon-settings-gear-63">
                <h5 class="info-text"> Lastly, Set Current Location of the ship.</h5>
                <v-form name="driver" class="row justify-content-center mt-5">
                    <div class="col-sm-5">
                        <base-input placeholder="Latitude" field="lat" addon-left-icon="eec-icons icon-clock"
                                    :vparam="['required']">
                        </base-input>
                    </div>
                    <div class="col-sm-5">
                        <base-input placeholder="Longitude" field="lng" addon-left-icon="eec-icons icon-clock"
                                    :vparam="['required']">
                        </base-input>
                    </div>
                </v-form>
            </wizard-tab>
        </wizard>
    </div>


@endsection

@push('js')
    <script src=" {{ mix('/js/vue/create.js') }}"></script>

    <script>

        new Vue({
            el: '#asset',

            store,

            data: {
                fleetData: [{'text': 'Mapkha', 'value': 1}, {'text': 'Laem Chabang', 'value': 3}, {'text': 'Suksawat', 'value': 2}],
                depart_time: null,
                eta_time: null,
            },

            watch: {
                depart_time(newValue, oldValue) {
                    this.$store.commit('updateForm', {'form': 'driver', 'field': 'depart_time', 'value': newValue});
                },
                eta_time(newValue, oldValue) {
                    this.$store.commit('updateForm', {'form': 'driver', 'field': 'eta_time', 'value': newValue});
                }
            },


            created() {
                this.$store.dispatch('populateForm', {
                    'property': 'driver',
                    'form': 'driver',
                    'field': {
                        lat: null,
                        lng: null,
                        depart: null,
                        depart_time: null,
                        from: null,
                        eta: null,
                        eta_time: null,
                        to: null,
                    }
                });
            },

            computed: {
                ...mapState([
                    'theme',
                    'forms'
                ]),
            },

            methods: {
                submit() {
                    this.$store.dispatch('submit', {'form': 'driver', 'url': '/api/info', 'reset': true})
                        .then(response => {
                            console.log(response);
                            Swal.fire('Complete!', 'Driver has been successfully created.', 'success')
                        });
                }
            },
        });
    </script>
@endpush
