@extends('layouts.app', ['activePage' => 'indexCustomer', 'titlePage' => __('Edit Movement')])

@section('style')

    <link href="/css/syncfusion.css" rel="stylesheet"/>
@endsection

@section('content')

    <div class="row">

        <breadcrumb :data="[{'text':'Home','href':'#'}, {'text':'Movement','href':'/movement'}]" active="Edit"></breadcrumb>

        <topbutton text="Back" link="/movement"></topbutton>

        <wizard @update="update" title="Edit Movement" description="Edit an existing movement in our system.">
            <wizard-tab name="about" icon="tim-icons icon-istanbul">
                <h5 class="info-text"> Fill in to create fake movement.</h5>
                <v-form name="movement" class="row justify-content-center mt-5">
                    <div class="col-sm-5">
                        <base-input placeholder="Place" field="place" addon-left-icon="tim-icons icon-istanbul"
                                    :vparam="['required']">
                        </base-input>
                    </div>
                    <div class="col-sm-5">
                        <base-input placeholder="Event" field="event" addon-left-icon="tim-icons icon-caps-small"
                                    :vparam="['required']">
                        </base-input>
                    </div>
                    <div class="col-sm-5">
                        <base-input placeholder="Carrier" field="carrier" addon-left-icon="tim-icons  icon-email-85"
                                    :vparam="['required']">
                        </base-input>
                    </div>
                    <div class="col-sm-5">
                        <base-datepicker placeholder="Date" field="date" addon-left-icon="eec-icons icon-clock"
                                         :vparam="['required']">
                        </base-datepicker>
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
                    'form': 'movement',
                    'property': 'movement',
                    'field': {
                        date: null,
                        event: null,
                        place: null,
                        carrier: null,
                    }
                });
            },

            mounted() {
                this.$store.dispatch('populateEditForm', {'form': 'movement', 'id': this.id});
            },

            computed: {
                ...mapState([
                    'theme',
                    'forms'
                ]),
            },

            methods: {
                update() {
                    this.$store.dispatch('update', {'form': 'movement', 'url': '/api/movement/'+ this.id})
                        .then(response => {
                            Swal.fire('Updated!', 'Movement has been successfully updated.', 'success')
                        });
                }
            },
        });
    </script>
@endpush
