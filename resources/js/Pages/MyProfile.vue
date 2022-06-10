<template>
    <Head title="My Profile" />

    <Layout>
        <h1>This is my Profile</h1>
        <Link :href="route('logout')" method="post">Logout</Link>
    </Layout>
</template>

<script>
import Layout from '@/Layouts/ForumLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
export default {
    name: "MyProfile",
    components: {
        Layout, Head
    },
}
</script>

<style scoped>

</style>
