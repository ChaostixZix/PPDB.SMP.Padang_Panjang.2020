<template>
    <App>
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <div class="jumbotron" :style="'background-image: url(' + $route('depan.index')+ 'img/slide.jpeg); background-repeat: no-repeat; background-size: 100% 100%;'">
                    </div>
                </div>
            </div>
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
                                        <th>{{smp.nomer}}</th>
                                        <td>{{smp.sekolah}}</td>
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
          smps: Array
        },
        data()
        {
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

</style>
