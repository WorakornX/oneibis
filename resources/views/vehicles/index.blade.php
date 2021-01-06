@extends('layouts.app', ['activePage' => 'indexVehicle', 'titlePage' => __('Vehicle')])

@section('content')

    <div class="row">

        <breadcrumb :data="[{'text':'Home','href':'/home'}]" active="Vehicle"></breadcrumb>

        <topbutton text="Add Vehicle" link="/vehicle/create"></topbutton>

        <card collapseonselect v-show="showIndex">

            <cardheader title="Vehicle Lists" count="vehicle">

                <gear>
                    <a class="dropdown-item" @click="refresh()" style="cursor: pointer;">Refresh</a>
                    <a class="dropdown-item" href="/settings/vehicle" style="cursor: pointer;">Settings</a>
                    <a class="dropdown-item" href="/vehicle_inspection_list" style="cursor: pointer;">Vehicle Inspection</a>
                </gear>

            </cardheader>

            <cardbody>

                <darkgrouptable collapseonselect property="vehicle" :columns="tableColumn" :allowselect="true" :rowscrollableonselect="true">

                </darkgrouptable>

            </cardbody>
        </card>

        <vehicledetail></vehicledetail>

    </div>

@endsection

@push('js')
    <script src=" {{ mix('/js/vue/index.js') }}"></script>


    <script>

        new Vue({
            el: '#asset',


            store,

            data: {
                tableColumn: [
                    {'text': '#', 'type': 'index'},
                    {'text': 'License', 'data': 'license'},
                    {'text': 'Type', 'data': 'type'},
                    {'text': 'Odometer', 'data': 'mileage', 'type': 'sortNumber'},
                    {'text': 'Action', 'type': 'action', 'data': 'phone', 'align': 'right'},
                ],
                rowIsSelected: false,
            },

            watch: {
                rowSelected(value) {
                    this.$store.commit('forceNavMini', value);
                },
            },

            created() {
                this.$store.commit('setModel', 'vehicle');

            },

            computed: {
                ...mapState([
                    'rowSelected',
                    'rowId',
                    'datum',
                    'showIndex',
                ]),
            },

            mounted() {
            },

            methods: {

                refresh() {
                    this.$store.dispatch('getTableData', {'property': 'vehicle', 'is_group': true});
                },
            },
        });
    </script>
@endpush
