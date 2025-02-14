<template>
    <App>
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <div class="jumbotron bg-primary">
                        <h2 class="text-white text-center mb-3">🏫 PPDB SMP Padang Panjang 2020</h2>
                        <p class="text-white text-center mb-0">Sistem Informasi Penerimaan Peserta Didik Baru (PPDB) SMP Kota Padang Panjang Tahun 2020</p>
                    </div>
                </div>
            </div>

            <!-- Statistics Cards -->
            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="card bg-info text-white">
                        <div class="card-body">
                            <h5 class="card-title">📊 Jalur Zonasi</h5>
                            <h3>{{ counts.zonasi }}</h3>
                            <p class="mb-0">Pendaftar</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <h5 class="card-title">🏆 Jalur Prestasi</h5>
                            <h3>{{ counts.prestasi }}</h3>
                            <p class="mb-0">Pendaftar</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-warning text-white">
                        <div class="card-body">
                            <h5 class="card-title">🤝 Jalur Afirmasi</h5>
                            <h3>{{ counts.afirmasi }}</h3>
                            <p class="mb-0">Pendaftar</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-danger text-white">
                        <div class="card-body">
                            <h5 class="card-title">📝 Pindah Tugas</h5>
                            <h3>{{ counts.pindahTugas }}</h3>
                            <p class="mb-0">Pendaftar</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Info Section -->
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">ℹ️ Informasi PPDB</h5>
                        </div>
                        <div class="card-body">
                            <p>Selamat datang di Portal PPDB SMP Kota Padang Panjang Tahun 2020. Sistem ini menyediakan informasi tentang:</p>
                            <ul>
                                <li>Pengumuman hasil seleksi PPDB</li>
                                <li>Data pendaftar per jalur masuk</li>
                                <li>Informasi sekolah yang tersedia</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">🔍 Lihat Pengumuman</h5>
                        </div>
                        <div class="card-body text-center">
                            <p class="mb-3">Klik tombol di bawah untuk melihat pengumuman PPDB</p>
                            <InertiaLink :href="$route('pengumuman.smp.index')" class="btn btn-primary btn-lg">
                                Lihat Pengumuman
                            </InertiaLink>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </App>
</template>

<script>
    import App from "../Layout/App";
    export default {
        name: "Depan",
        props: {
            counts: {
                type: Object,
                default: () => ({
                    zonasi: 0,
                    prestasi: 0,
                    afirmasi: 0,
                    pindahTugas: 0
                })
            }
        },
        components: {App}
    }
</script>

<style scoped>
.card {
    transition: transform 0.2s;
    margin-bottom: 1rem;
}
.card:hover {
    transform: translateY(-5px);
}
.jumbotron {
    padding: 3rem;
    border-radius: .3rem;
    margin-bottom: 2rem;
}
</style>
