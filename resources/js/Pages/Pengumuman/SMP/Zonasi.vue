<template>
    <LayoutSMA :smp="smp">
        <div class="card">
            <div class="card-header bg-info text-white">
                Zonasi
            </div>
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
                                        <td v-if="p.diluar" class="bg-danger">{{ p.nomer }}</td>
                                        <td v-else>{{ p.nomer }}</td>
                                        <td>{{ p.nama }}</td>
                                        <td>
                                            <button v-if="parseInt(p.pilihan1) === parseInt(smp.zon_id)" class="btn btn-sm btn-info text-white">
                                                Pemilih 1
                                            </button>
                                            <button v-else class="btn btn-sm btn-danger text-white">
                                                Pemilih 2
                                            </button>
                                        </td>
                                        <td>
                                            <div v-if="parseInt(p.pilihan1) === parseInt(smp.zon_id)">
                                                {{p.jarak1}} M
                                            </div>
                                            <div v-else>
                                                {{p.jarak2}} M
                                            </div>
                                        </td>
<!--                                        <td>-->
<!--                                            <a v-if="p.status === 0" class="btn btn-sm btn-outline-warning">Proses Verifikasi</a>-->
<!--                                            <a v-else-if="p.status === 1"-->
<!--                                               class="btn btn-sm btn-outline-success">Terverifikasi</a>-->
<!--                                        </td>-->
                                    </tr>
                                    </tbody>
                                </Datatable>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">

                            </div>
                            <pagination :pagination="pagination" :client="true" :filtered="filteredProjects"
                                        @prev="--pagination.currentPage"
                                        @next="++pagination.currentPage">
                            </pagination>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </LayoutSMA>
</template>

<script>

    import Datatable from "../../../Utils/Datatable";
    import Pagination from "../../../Utils/Pagination";
    import LayoutSMA from "./LayoutSMP";

    export default {
        components: {LayoutSMA, Pagination, Datatable},
        props: {
            pesertass: Array,
            smp: Object
        },
        mounted() {
            this.load();
            let i = 0;
            let vm = this;
            this.pesertass.forEach(function (value, index) {
                i++;
                if(i > vm.smp.kuota)
                {
                    value.diluar = true;
                }
                value.nomer = i;
                vm.pesertas.push(value);
            })
        },
        data() {
            let sortOrders = {};
            let columns = [
                {width: '33%', label: '#', name: 'nomer'},
                {width: '33%', label: 'Nama', name: 'nm_pes'},
                {width: '33%', label: 'Pilihan', name: 'pilihan'},
                {width: '33%', label: 'Jarak', name: 'jarak'},
                // {width: '33%', label: 'Status', name: 'status'},
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
