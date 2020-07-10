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
                <br>
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Timeline</h6>
                        <div id="content">
                            <ul class="timeline">
                                <li class="event" data-date="22 Juni - 27 Juni">
                                    <h3>PPDB SMA Tahap 1</h3>
                                    <p>Pendaftaran SMA Jalur Prestasi, Afirmasi, dan Pindah Tugas.</p>
                                </li>
                                <li class="event" data-date="28 Juni - 6 Juli">
                                    <h3>PPDB SMA Tahap 2</h3>
                                    <p>Pendaftaran SMA Jalur Zonasi.</p>
                                </li>
                            </ul>
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
