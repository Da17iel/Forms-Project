<template>
    <Head title="Front Page" />

    <Layout>
        <div>
            <h1 class="ml-4">Unsere Themen:</h1>
            <div v-for="category in categories" class="border rounded shadow p-4 m-4">
                <p class="text-2xl"><Link :href="'/forum/category/' + category.slug">{{ category.name }}</Link></p>
                <p>{{ category.description }}</p>
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from '@/Layouts/ForumLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
export default {
    name: "ForumStarterPage",
    components: {
        Layout, Head
    },
    props: {
        categories: Object,
        currentLocation: Array,
    },
}
</script>

<style scoped>

</style>
