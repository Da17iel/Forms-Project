<template>
    <Layout>
        <h1>A general Forum</h1>
        <Link href="/login">Login</Link>
    </Layout>
</template>

<script>
import Layout from '@/Layouts/HomePageLayout.vue';
import { Link } from "@inertiajs/inertia-vue3";
export default {
    name: 'HomePage',
    components: {
        Layout, Link
    }

}
</script>
