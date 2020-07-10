<template>
    <div>
        <Navbar></Navbar>
        <div class="page-wrapper">
            <div class="page-content">
                <slot />
            </div>

            <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
                <p class="text-muted text-center text-md-left">Copyright © 2020 <a href="https://www.nobleui.com"
                                                                                   target="_blank">Padang Panjang</a>. All rights
                    reserved</p>
<!--                <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i-->
<!--                    class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>-->
            </footer>
        </div>
    </div>
</template>

<script>
    import Navbar from "./Navbar";
    export default {
        name: "App",
        components: {Navbar}
    }
</script>

<style scoped>

</style>
