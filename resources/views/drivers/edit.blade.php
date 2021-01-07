@extends('layouts.app', ['activePage' => 'indexDriver', 'titlePage' => __('Edit Info')])

@section('style')

    <link href="/css/syncfusion.css" rel="stylesheet"/>
@endsection

@section('content')

    <div class="row">

        <breadcrumb :data="[{'text':'Home','href':'/home'}, {'text':'Info','href':'/info'}]" active="Edit"></breadcrumb>

        <topbutton text="Back" link="/info"></topbutton>

        <wizard @update="update" title="Edit Info" description="Edit an existing info in our system.">
            <wizard-tab name="departure" icon="tim-icons icon-delivery-fast">
                <h5 class="info-text"> Change departure detail.</h5>

                <v-form name="info" class="row justify-content-center mt-5">
                    <div class="col-sm-5">
                        <base-input placeholder="Depart From" field="from" addon-left-icon="tim-icons icon-single-02"
                                    :vparam="['required']">
                        </base-input>
                    </div>
                    <div class="col-sm-5">
                        <base-datepicker placeholder="Depart Date" field="depart" addon-left-icon="eec-icons icon-clock"
                                         :vparam="['required']">
                        </base-datepicker>
                    </div>
                </v-form>

            </wizard-tab>
            <wizard-tab name="arrival" icon="tim-icons icon-delivery-fast">
                <h5 class="info-text"> Set arrival time and place.</h5>

                <v-form name="info" class="row justify-content-center mt-5">
                    <div class="col-sm-5">
                        <base-input placeholder="Arrive At" field="to" addon-left-icon="tim-icons icon-single-02"
                                    :vparam="['required']">
                        </base-input>
                    </div>
                    <div class="col-sm-5">
                        <base-datepicker placeholder="ETA Date" field="eta" addon-left-icon="eec-icons icon-clock"
                                         :vparam="['required']">
                        </base-datepicker>
                    </div>
                </v-form>

            </wizard-tab>
            <wizard-tab name="account" icon="tim-icons icon-settings-gear-63">
                <h5 class="info-text"> Lastly, Set Current Location of the ship.</h5>
                <v-form name="info" class="row justify-content-center mt-5">
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
                id,

            },

            created() {
                this.$store.dispatch('populateForm', {
                    'form': 'info',
                    'property': 'info',
                    'field': {
                        lat: null,
                        lng: null,
                        depart: null,
                        from: null,
                        eta: null,
                        to: null,
                    }
                });
            },

            mounted() {
                this.$store.dispatch('populateEditForm', {'form': 'info', 'id': this.id});
            },

            computed: {
                ...mapState([
                    'theme',
                    'forms'
                ]),
            },

            methods: {
                update() {
                    this.$store.dispatch('update', {'form': 'info', 'url': '/api/info/'+ this.id})
                        .then(response => {
                            Swal.fire('Updated!', 'Info has been successfully updated.', 'success')
                        });
                }
            },
        });
    </script>
@endpush
