<script setup>
import { ref } from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import NavBar from "@/Components/Navbar.vue";
import SideBar from "@/Components/Sidebar.vue";
import PageHeader from "@/Components/PageHeader.vue";
import Footer from "@/Components/Footer.vue";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import { Link } from "@inertiajs/inertia-vue3";
// import fontawesome from "../../../public/plugins/jquery/jquery.min.js";
// import bootstrap from "../../../public/plugins/bootstrap/js/bootstrap.bundle.min.js";
// import adminlte from "../../../public/dist/js/adminlte.min.js";

const showingNavigationDropdown = ref(false);
</script>

<template>
    <!-- Navbar -->
    <NavBar />
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <SideBar />

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <PageHeader />
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <main>
                    <slot />
                </main>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <Footer />
</template>

<style scoped>
    /* @import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback");
    @import "../../../public/plugins/fontawesome-free/css/all.min.css";
    @import "../../../public/dist/css/adminlte.min.css"; */
</style>
