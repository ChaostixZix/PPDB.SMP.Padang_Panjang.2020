<template>
    <App>
        <div class="profile-page tx-13">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="profile-header">
                        <div class="cover">
                            <div class="gray-shade"></div>
                            <figure>
                                <img :src="$route('depan.index') + 'img/dsa.jpg'" class="img-fluid" alt="profile cover">
                            </figure>
                            <div class="cover-body d-flex justify-content-between align-items-center">
                                <div>
                                    <img class="profile-pic" :src="$route('depan.index') + 'img/sma.png'" alt="profile">
                                    <span class="profile-name">{{smp.sekolah}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="header-links">
                            <ul class="links d-flex align-items-center mt-3 mt-md-0">
                                <li class="header-link-item d-flex align-items-center">
                                    <InertiaLink class="pt-1px d-none d-md-block" :href="$route('pengumuman.smp.pengumuman', {smp_id: smp.zon_id})">Home</InertiaLink>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row profile-body">
                <div class="col-md-4 col-xl-3 left-wrapper mb-1">
                    <div class="card rounded">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="card-title mb-0">Pengumuman</h6>
                            </div>
                            <div class="alert alert-info">{{smp.tulisan}}</div>
                            <div class="list-group">
                                <InertiaLink :href="$route('pengumuman.smp.zonasi', {smp_id: smp.zon_id})" class="list-group-item list-group-item-action">Zonasi</InertiaLink>
                                <InertiaLink :href="$route('pengumuman.smp.afirmasi', {smp_id: smp.zon_id})" class="list-group-item list-group-item-action">Afirmasi</InertiaLink>
                                <InertiaLink :href="$route('pengumuman.smp.pindahtugas', {smp_id: smp.zon_id})" class="list-group-item list-group-item-action">Pindah Tugas</InertiaLink>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-xl-9 middle-wrapper">
                    <slot />
                </div>
            </div>
        </div>
    </App>
</template>

<script>
    import App from "../../../Layout/App";
    export default {
        name: "LayoutSMP",
        props: {
            smp: Object
        },
        components: {App}
    }
</script>

<style scoped>

</style>
