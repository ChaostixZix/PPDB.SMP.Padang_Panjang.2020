<template>
    <LayoutSMA :datasma="datasma">
        <div class="card">
            <div class="card-header bg-info text-white">
                Prestasi
            </div>
            <TableSMA :pesertass="pesertas"></TableSMA>
        </div>
    </LayoutSMA>
</template>

<script>

    import LayoutSMA from "./LayoutSMP";
    import TableSMA from "./TableSMA";

    export default {
        components: {TableSMA, LayoutSMA},
        props: {
            pesertas: Array,
            datasma: Object
        },
    };
</script>
