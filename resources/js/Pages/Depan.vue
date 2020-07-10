<template>
    <App>
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <div class="jumbotron" :style="'background-image: url('+ $route('depan.index')+'/img/slide.jpeg); background-repeat: no-repeat; background-size: 100% 100%;'">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="alert bg-primary">
                        <h5 class="text-white">Perhatian! Pendaftaran jalur zonasi SMA telah ditutup. Pengumuman akhir jalur zonasi akan di umumkan tanggal 8 Juli 2020. Siswa yang masih ingin mencetak bukti daftar bisa masuk ke panel pendaftaran</h5>
                    </div>
                </div>
                <div class="col-lg-4 row-cols-1 col-12">
                    <div class="card">
                        <div class="card-header">
                            Info
                        </div>
                        <div class="card-body text-center">
                            <img class="img-fluid" src="http://demo1.provbengkulu.com/icon/iconlogin.jpg">
                            <br>
                            <br>
                            <InertiaLink :href="$route('pengumuman.smp.index')" class="btn text-white btn-secondary">
                                Pengumuman
                            </InertiaLink>
                            <a href="http://siswa.provbengkulu.com" class="btn btn-secondary text-white">
                                Pendaftaran
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="card">
                        <div class="card-header">
                            Home
                        </div>
                        <div class="card-body">
                            <figure data-v-11989bc6="" class="text-center"><img data-v-11989bc6="" src="http://demo1.provbengkulu.com/icon/iconhome.png" alt="" width="200"></figure>
                            Surat Edaran Menteri Kemendikbud No.4 Tahun 2020 terkait mekanisme PPDB yang mengikuti protokol kesehatan untuk mencegah penyebaran Covid-19, termasuk mencegah berkumpulnya siswa dan orang tua secara fisik di sekolah.

                            Permendikbud No 44 Tahun 2019 tentang Penerimaan Peserta Didik Baru (PPDB). Khususnya terkait Jalur Zonasi, Jalur Afirmasi, Jalur Perpindahan Orang Tua/Wali, dan Jalur Prestasi
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
        components: {App}
    }
</script>

<style scoped>

</style>
