<template>
    <Layout>
        <div class="p-4 border rounded bg-gray-50">
            <h1>{{ post.title }}</h1>
            <p>Autor/in: <a href="">{{ post.user_id }}</a></p>
            <p>{{ post.content }}</p>
        </div>

        <p class="text-2xl pt-10 pb-4">Answers:</p>

        <div class="bg-gray-50 p-4 rounded">
            <div>
                <img src="none" alt="">
            </div>
            <div class="comment-body">
                <p class="text-lg">Testing</p>
                <p>This is the comment Body</p>
            </div>
        </div>

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
