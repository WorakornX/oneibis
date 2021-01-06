@extends('layouts.app', ['activePage' => 'indexCustomer', 'titlePage' => __('Customer')])

@section('content')

    <div class="row">

        <breadcrumb :data="[{'text':'Home','href':'/home'}]" active="Customer"></breadcrumb>

        <topbutton text="Add Customer" link="/customer/create"></topbutton>


        <card>

            <cardheader title="Customer Lists" count="customer">

                <gear>
                    <a class="dropdown-item" @click="refresh()" style="cursor: pointer;">Refresh</a>
                </gear>

            </cardheader>

            <cardbody>

                <darkgrouptable property="customer" :pill="{'property': 'fleet_id', 'data': fleetData, 'default': 1}"
                                :columns="tableColumn">

                </darkgrouptable>

            </cardbody>
        </card>

    </div>

@endsection

@push('js')
    <script src=" {{ mix('/js/vue/index.js') }}"></script>


    <script>

        new Vue({
            el: '#asset',

            store,

            data: {
                fleetData: [{'text': 'Mapkha', 'value': 1}, {'text': 'Suksawat', 'value': 2}, {'text': 'Laem Chabang', 'value': 3}],
                tableColumn: [
                    // {'text': '#', 'type': 'image', 'data': 'avatar', 'align': 'center'},
                    {'text': 'Name', 'data': 'name'},
                    {'text': 'Name (TH)', 'data': 'nameTH'},
                    // {'text': 'Email', 'data': 'email'},
                    // {'text': 'Phone', 'data': 'phone'},
                    {'text': 'Line Name', 'data': 'lineName'},
                    {'text': 'Updated', 'type': 'boolean', 'data': 'line_group_id', 'align': 'center'},
                    {'text': 'Action', 'type': 'action', 'data': 'phone', 'align': 'right'},
                ],
            },

            watch: {},


            computed: {},

            mounted() {
            },

            methods: {

                refresh() {
                    this.$store.dispatch('getTableData', {'property': 'customer', 'is_group': true});
                },

                deleteData(id) {
                    if (confirm('{{ __("Are you sure you want to delete this driver?") }}')) {
                        return new Promise((resolve, reject) => {
                            axios.delete('/api/driver/' + id)
                                .then(response => {
                                    notify('Driver deleted successfully', 'warning');
                                    this.drivers.get();
                                    console.log(response.data);
                                    resolve(response.data);
                                })
                                .catch(error => {
                                    console.log(error);
                                    reject(error.response);
                                });
                        });

                    } else {
                        console.log('no');
                    }
                }
            },
        });
    </script>
@endpush
