@extends('layouts.app', ['activePage' => 'indexDriver', 'titlePage' => __('Add Driver')])

@section('style')

    <link href="/css/syncfusion.css" rel="stylesheet"/>
@endsection

@section('content')

    <div class="row">

        <breadcrumb :data="[{'text':'Home','href':'/home'}, {'text':'Driver','href':'/driver'}]" active="Create"></breadcrumb>

        <topbutton text="Back" link="/driver"></topbutton>

        <wizard @submit="submit" title="Create Driver" description="Follow the process to add a new driver to our system.">
            <wizard-tab name="fleet" icon="tim-icons icon-delivery-fast">
                <h5 class="info-text"> Pick the fleet for our new driver.</h5>

                <v-form name="driver">
                    <pill-input placeholder="" field="fleet_id" url="fleet" optiontext="name" optionvalue="id"
                                :vparam="['required']">
                    </pill-input>
                </v-form>

            </wizard-tab>
            <wizard-tab name="about" icon="tim-icons icon-single-02">
                <h5 class="info-text"> Let's start with the basic information.</h5>
                <v-form name="driver" class="row justify-content-center mt-5">
                    <div class="col-sm-5">
                        <base-input placeholder="First Name" field="firstName" addon-left-icon="tim-icons icon-single-02"
                                    :vparam="['required']">
                        </base-input>
                    </div>
                    <div class="col-sm-5">
                        <base-input placeholder="Last Name" field="lastName" addon-left-icon="tim-icons icon-caps-small"
                                    :vparam="['required']">
                        </base-input>
                    </div>
                    <div class="col-sm-5">
                        <base-input placeholder="Email" field="email" addon-left-icon="tim-icons  icon-email-85"
                                    :vparam="['email']">
                        </base-input>
                    </div>
                    <div class="col-sm-5">
                        <base-input placeholder="Phone" field="phone" addon-left-icon="tim-icons icon-mobile"
                                    :vparam="['required', 'integer', {'minLength': 10}]">
                        </base-input>
                    </div>
                </v-form>
            </wizard-tab>
            <wizard-tab name="account" icon="tim-icons icon-settings-gear-63">
                <h5 class="info-text"> Lastly, link driver's LINE ID with us and choose his default vehicle(s).</h5>
                <v-form name="driver" class="row justify-content-center mt-5">
                    <div class="col-sm-10">
                        <select-box field="lineId" placeholder="LINE ID" type="select"
                                    url="line/user" optiontext="lineName" optionvalue="id" addon-left-icon="tim-icons icon-chat-33"
                                    allowfilter="true" filtertype="contains" :vparam="['required']"></select-box>
                    </div>
                    <div class="col-sm-10">
                        <select-box field="vehicle_id" placeholder="Default Vehicle" type="multiselect"
                                    url="vehicle" optiontext="license" optionvalue="id" optiongroup="fleet" addon-left-icon="tim-icons icon-bus-front-12"
                                    allowfilter="true" filtertype="contains" :vparam="[]"></select-box>
                    </div>
                    <div class="col-sm-10">
                        <select-box field="tail_id" placeholder="Default Tail" type="multiselect"
                                    url="vehicle" optiontext="license" optionvalue="id" optiongroup="fleet" addon-left-icon="tim-icons icon-app"
                                    allowfilter="true" filtertype="contains" :vparam="[]"></select-box>
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
            },

            watch: {},


            created() {
                this.$store.dispatch('populateForm', {
                    'property': 'driver',
                    'form': 'driver',
                    'field': {
                        firstName: null,
                        fleet_id: null,
                        lastName: null,
                        phone: null,
                        email: null,
                        lineId: null,
                        vehicle_id: null,
                        tail_id: null,
                    }
                });
            },

            computed: {
                ...mapState([
                    'theme',
                ]),
            },

            methods: {
                submit() {
                    this.$store.dispatch('submit', {'form': 'driver', 'url': '/api/driver', 'reset': true})
                        .then(response => {
                            console.log(response);
                            Swal.fire('Complete!', 'Driver has been successfully created.', 'success')
                        });
                }
            },
        });
    </script>
@endpush
