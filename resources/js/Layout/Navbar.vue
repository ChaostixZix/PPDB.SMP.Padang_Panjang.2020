<template>
    <div>
        <b-navbar toggleable="lg" type="dark" variant="primary">
            <b-navbar-brand href="#">PPDB Padang Panjang</b-navbar-brand>

            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

            <b-collapse class="container" id="nav-collapse" is-nav>

                <b-navbar-nav>
                    <li class="nav-item">
                        <InertiaLink
                            :href="$route('depan.index')" target="_self"
                            class="nav-link text-white">Home</InertiaLink>
                    </li>
                    <b-nav-item-dropdown text="Pengumuman" right>
                        <b-dropdown-item :href="$route('pengumuman.smp.index')">SMP</b-dropdown-item>
                    </b-nav-item-dropdown>
                </b-navbar-nav>

                <!-- Right aligned nav items -->
            </b-collapse>
        </b-navbar>
    </div>
</template>

<script>
    export default {
        name: "Navbar"
    }
</script>

<style scoped>

</style>
