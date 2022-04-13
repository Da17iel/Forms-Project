<template>
    <Layout>
            <h1>{{ post.title }}</h1>
    </Layout>
</template>

<script>
import Layout from '@/Layouts/ForumLayout.vue';
export default {
    name: "SinglePost",
    props: {
        post: Object,
    },
    components: {
        Layout,
    }
}
</script>

<style scoped>

</style>
