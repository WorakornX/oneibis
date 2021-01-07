@extends('layouts.app', ['activePage' => 'indexDriver', 'titlePage' => __('Info')])

@section('content')

    <div class="row">

        <breadcrumb :data="[{'text':'Home','href':'/home'}]" active="Info"></breadcrumb>

        <topbutton text="Add Info" link="/info/create"></topbutton>

        <card >

            <cardheader count="info" title="Info Lists">

                <gear>
                    <a class="dropdown-item" @click="refresh()" style="cursor: pointer;">Refresh</a>
                </gear>

            </cardheader>

            <cardbody>

                <darktable  property="info" :columns="tableColumn">

                </darktable>

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
                tableColumn: [
                    {'text': 'Latitude', 'data': 'lat'},
                    {'text': 'Longitude', 'data': 'lng'},
                    {'text': 'Depart From', 'data': 'from'},
                    {'text': 'Depart Time', 'data': 'depart'},
                    {'text': 'Arrive At', 'data': 'to'},
                    {'text': 'ETA', 'data': 'eta'},
                    {'text': 'Edit', 'type': 'action', 'data': 'phone', 'align': 'center', 'notSortable': true},
                ],
                rowIsSelected: false,
            },

            watch: {
                rowSelected(value) {
                    this.$store.commit('forceNavMini', value);
                },

            },

            created() {
                this.$store.commit('setModel', 'driver');

            },

            computed: {
                ...mapState([
                    'rowSelected',
                    'rowId',
                    'datum',
                    'dataCount'
                ]),
            },

            mounted() {
            },

            methods: {

                refresh() {
                    this.$store.dispatch('getTableData', {'property': 'driver', 'is_group': true});
                },
                refreshAvatar() {
                    this.$store.commit('loading', true);
                    return new Promise((resolve, reject) => {
                        axios.get('/api/driver/crud/refreshProfileAvatar')
                            .then(response => {

                                this.$store.commit('loading', false);
                                this.$store.dispatch('getTableData', {'property': 'driver', 'is_group': true});
                                console.log(response.data);
                                resolve(response.data);
                            })
                            .catch(error => {
                                console.log(error);
                                reject(error.response);
                            });
                    });

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
                },
            },
        });
    </script>
@endpush
