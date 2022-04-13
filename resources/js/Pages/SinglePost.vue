<template>
    <Layout>
        <div class="p-4 border rounded bg-gray-50">
            <h1 class="text-4xl">{{ post.title }}</h1>
            <p class="mt-4">Autor/in: <a href="">{{ post.user_id }}</a></p>
            <p class="mt-2">{{ post.content }}</p>
        </div>

        <p class="text-2xl pt-10 pb-4">Replies:</p>

        <div class="bg-gray-50 p-4 mt-4 rounded drop-shadow-md">
            <div class="flex flex-row mb-4 bg-gray-100 p-2 rounded inline-block">
                <img src="/SampleProfilePictures/ProfilePicture1.png"
                     alt="Profile Picture" class="rounded h-12">
                <p class="ml-4 self-center">Daniel Greil</p>
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
