<template>
    <App>
        <div class="col-12">
            <!-- Info Card -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>🏫 Selamat Datang di PPDB SMP Padang Panjang 2020</h4>
                            <p class="mb-0">📢 Ini adalah website pengumuman penerimaan peserta didik baru SMP Padang Panjang tahun 2020</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Widgets -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-0">Total Siswa</h6>
                                    <h3 class="mb-0">{{ totalSiswa }}</h3>
                                </div>
                                <i class="fas fa-users fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-0">Total Sekolah</h6>
                                    <h3 class="mb-0">{{ daftarsmp.length }}</h3>
                                </div>
                                <i class="fas fa-school fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-info text-white">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-0">Total Pendaftar</h6>
                                    <h3 class="mb-0">{{ totalPendaftar }}</h3>
                                </div>
                                <i class="fas fa-user-graduate fa-2x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Existing Table -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            List SMP
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Sekolah</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="smp in daftarsmp">
                                        <th>{{smp.zon_id}}</th>

                                        <td>{{smp.nama_sekolah}}</td>
                                        <td>
                                            <InertiaLink :href="$route('pengumuman.smp.pengumuman', {smp_id: smp.zon_id})" class="btn btn-info btn-sm text-white">Pengumuman</InertiaLink>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div></div></div>
                    </div>
                </div>
            </div>
        </div>
    </App>
</template>

<script>
    import App from "../../../Layout/App";
    export default {
        name: "ListSMP",
        props: {
            smps: Array,
            totalSiswa: {
                type: Number,
                default: 0
            },
            totalPendaftar: {
                type: Number,
                default: 0
            }
        },
        data() {
            return {
                daftarsmp: []
            }
        },
        mounted() {
            let i = 0;
            let vm = this;
            this.smps.forEach(function (value, index) {
                i++;
                value.nomer = i;
                vm.daftarsmp.push(value);
            })
        },
        components: {App}
    }
</script>

<style scoped>
.card {
    transition: transform 0.2s;
}
.card:hover {
    transform: translateY(-5px);
}
.fas {
    opacity: 0.8;
}
</style>
