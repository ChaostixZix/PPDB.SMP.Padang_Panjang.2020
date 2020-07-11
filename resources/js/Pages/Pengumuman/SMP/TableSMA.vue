<template>
        <div class="card-body">

            <div>
                <div id="dataTableExample_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div id="dataTableExample_filter" class="dataTables_filter">
                                <label>
                                    <input @input="resetPagination()" type="search" class="form-control"
                                           v-model="search" placeholder="Search">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <Datatable hide-header="false" :columns="columns" :sortKey="sortKey"
                                       :sortOrders="sortOrders" @sort="sortBy">
                                <tbody>
                                <tr v-for="p in paginated" role="row" class="odd">
                                    <td>{{ p.nomer }}</td>
                                    <td v-if="p.nama !== null">{{ p.nama }}</td>
                                    <td v-else>{{ p.nama_siswa }}</td>
                                </tr>
                                </tbody>
                            </Datatable>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">

                        </div>
                        <Pagination :pagination="pagination" :client="true" :filtered="filteredProjects"
                                    @prev="--pagination.currentPage"
                                    @next="++pagination.currentPage">
                        </Pagination>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>

    import Datatable from "../../../Utils/Datatable";
    import Pagination from "../../../Utils/Pagination";
    import LayoutSMA from "./LayoutSMP";

    export default {
        components: {LayoutSMA, Pagination, Datatable},
        props: {
            pesertass: Array
        },
        mounted() {
            this.load();
            let i = 0;
            let vm = this;
            this.pesertass.forEach(function (value, index) {
                i++;
                value.nomer = i;
                vm.pesertas.push(value);
            })
        },
        data() {
            let sortOrders = {};
            let columns = [
                {width: '33%', label: '#', name: 'nomer'},
                {width: '33%', label: 'Nama', name: 'nm_pes'},
            ];
            columns.forEach((column) => {
                sortOrders[column.name] = -1;
            });
            return {
                columns: columns,
                sortKey: 'deadline',
                sortOrders: sortOrders,
                length: 10,
                search: '',
                pesertas: [],
                tableData: {
                    client: true,
                },
                pagination: {
                    currentPage: 1,
                    total: '',
                    nextPage: '',
                    prevPage: '',
                    from: '',
                    to: ''
                },
            }
        },
        methods: {
            load() {
                this.pagination.total = this.pesertas.length;
            },
            paginate(array, length, pageNumber) {
                this.pagination.from = array.length ? ((pageNumber - 1) * length) + 1 : ' ';
                this.pagination.to = pageNumber * length > array.length ? array.length : pageNumber * length;
                this.pagination.prevPage = pageNumber > 1 ? pageNumber : '';
                this.pagination.nextPage = array.length > this.pagination.to ? pageNumber + 1 : '';
                return array.slice((pageNumber - 1) * length, pageNumber * length);
            },
            resetPagination() {
                this.pagination.currentPage = 1;
                this.pagination.prevPage = '';
                this.pagination.nextPage = '';
            },
            sortBy(key) {
                this.resetPagination();
                this.sortKey = key;
                this.sortOrders[key] = this.sortOrders[key] * -1;
            },
            getIndex(array, key, value) {
                return array.findIndex(i => i[key] === value)
            },
        },
        computed: {
            filteredProjects() {
                let peserta = this.pesertas;
                if (this.search) {
                    peserta = peserta.filter((row) => {
                        return Object.keys(row).some((key) => {
                            return String(row[key]).toLowerCase().indexOf(this.search.toLowerCase()) > -1;
                        })
                    });
                }
                let sortKey = this.sortKey;
                let order = this.sortOrders[sortKey] || 1;
                if (sortKey) {
                    peserta = peserta.slice().sort((a, b) => {
                        let index = this.getIndex(this.columns, 'name', sortKey) + 1;
                        a = String(a[sortKey]).toLowerCase();
                        b = String(b[sortKey]).toLowerCase();
                        if (this.columns[index].type && this.columns[index].type === 'date') {
                            return (a === b ? 0 : new Date(a).getTime() > new Date(b).getTime() ? 1 : -1) * order;
                        } else if (this.columns[index].type && this.columns[index].type === 'number') {
                            return (+a === +b ? 0 : +a > +b ? 1 : -1) * order;
                        } else {
                            return (a === b ? 0 : a > b ? 1 : -1) * order;
                        }
                    });
                }
                return peserta;
            },
            paginated() {
                return this.paginate(this.filteredProjects, this.length, this.pagination.currentPage);
            }
        }
    };
</script>
