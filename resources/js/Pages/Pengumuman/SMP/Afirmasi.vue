<template>
    <LayoutSMA :smp="smp">
        <div class="card">
            <div class="card-header bg-info text-white">
                Afirmasi -
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
            smp: Object
        },
    };
</script>
