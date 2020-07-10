<template>
    <LayoutSMP :smp="smp">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card rounded">
                    <div class="card-header">
                        Menu
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info">
                            Hasil pengumuman Zonasi telah dibuka. Silahkan melihat di menu Zonasi
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </LayoutSMP>
</template>

<script>

    import LayoutSMP from "./LayoutSMP";
    export default {
        name: "PengumumanSMP",
        components: {LayoutSMP},
        props: {
            smp: Object
        },
    }
</script>

<style scoped>

</style>
