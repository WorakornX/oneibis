@extends('layouts.app', ['activePage' => 'indexCustomer', 'titlePage' => __('Edit Customer')])

@section('style')

    <link href="/css/syncfusion.css" rel="stylesheet"/>
@endsection

@section('content')

    <div class="row">

        <breadcrumb :data="[{'text':'Home','href':'/home'}, {'text':'Customer','href':'/customer'}]" active="Edit"></breadcrumb>

        <topbutton text="Back" link="/customer"></topbutton>

        <wizard @update="update" title="Edit Customer" description="Edit an existing customer in our system.">
            <wizard-tab name="fleet" icon="tim-icons icon-delivery-fast">
                <h5 class="info-text"> Change the fleet of our new Customer.</h5>

                <v-form name="customer">
                    <pill-input placeholder="" field="fleet_id" url="fleet" optiontext="name" optionvalue="id"
                                :vparam="['required']">
                    </pill-input>
                </v-form>

            </wizard-tab>
            <wizard-tab name="about" icon="tim-icons icon-istanbul">
                <h5 class="info-text"> Let's start with the basic information.</h5>
                <v-form name="customer" class="row justify-content-center mt-5">
                    <div class="col-sm-5">
                        <base-input placeholder="Company Name" field="name" addon-left-icon="tim-icons icon-istanbul"
                                    :vparam="['required']">
                        </base-input>
                    </div>
                    <div class="col-sm-5">
                        <base-input placeholder="Company Name (Thai)" field="nameTH" addon-left-icon="tim-icons icon-caps-small"
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
                                    :vparam="['integer', {'minLength': 10}]">
                        </base-input>
                    </div>
                </v-form>
            </wizard-tab>
            <wizard-tab name="account" icon="tim-icons icon-settings-gear-63">
                <h5 class="info-text"> Lastly, Select a LINE Group for this customer.</h5>
                <v-form name="customer" class="row justify-content-center mt-5">
                    <div class="col-sm-10">
                        <select-box field="line_group_id" placeholder="LINE Group" type="select"
                                    url="line/group" optiontext="name" optionvalue="id" addon-left-icon="tim-icons icon-chat-33"
                                    allowfilter="true" filtertype="contains" :vparam="['required']"></select-box>
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
                    'form': 'customer',
                    'property': 'customer',
                    'field': {
                        name: null,
                        nameTH: null,
                        lastName: null,
                        phone: null,
                        email: null,
                        line_group_id: null,
                        fleet_id: null,
                    }
                });
            },

            mounted() {
                this.$store.dispatch('populateEditForm', {'form': 'customer', 'id': this.id});
            },

            computed: {
                ...mapState([
                    'theme',
                    'forms'
                ]),
            },

            methods: {
                update() {
                    this.$store.dispatch('update', {'form': 'customer', 'url': '/api/customer/'+ this.id})
                        .then(response => {
                            Swal.fire('Updated!', 'Customer has been successfully updated.', 'success')
                        });
                }
            },
        });
    </script>
@endpush
