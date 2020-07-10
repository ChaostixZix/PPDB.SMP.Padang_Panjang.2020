<template>
    <App>
        <div class="col-12">
            <div class="row">
                <div class="col-12">
<!--                    <div class="jumbotron" :style="'background-image: url('+ $route('depan.index')+'/img/slide.jpeg); background-repeat: no-repeat; background-size: 100% 100%;'">-->
<!--                    </div>-->
                    <div class="jumbotron bg-primary">
                        <h4 class="text-white text-center">Selamat Datang di Pengumuman PPDB Padang Panjang</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 row-cols-1 col-12">
                    <div class="card">
                        <div class="card-header">
                            Info
                        </div>
                        <div class="card-body text-center">
                            <InertiaLink :href="$route('pengumuman.smp.index')" class="btn text-white btn-secondary">
                                Pengumuman
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
        components: {App}
    }
</script>

<style scoped>

</style>
