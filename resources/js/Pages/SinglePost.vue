<template>
    <Layout>
        <div class="p-4 border rounded bg-gray-50">
            <h1 class="text-4xl">{{ post.title }}</h1>
            <p class="mt-4">Von: <a :href="UserLink(author.username)">{{ author.username }}</a></p>
            <p class="mt-2">{{ post.content }}</p>
        </div>

        <p class="text-2xl pt-10 pb-4">Replies:</p>

        <div v-for="comment in comments" class="bg-gray-50 p-4 mt-4 rounded drop-shadow-md">
            <div class="flex flex-row mb-4 bg-gray-100 p-2 rounded inline-block">
                <img :src="ProfilePicUrl(users[(comment.user_id - 1)].ProfilePicture)"
                     alt="Profile Picture" class="rounded h-12">
                <p class="ml-4 self-center">
                    <a :href="UserLink(users[(comment.user_id - 1)].username)" class="text-black">
                        {{ users[(comment.user_id - 1)].username }}
                    </a>
                </p>
            </div>
            <div class="comment-body">
                <p class="text-lg">{{ comment.content }}</p>
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
        comments: Object,
        users: Object,
        author: Object,
    },
    components: {
        Layout,
    },
    methods: {
        ProfilePicUrl(URL) {
            return URL;
        },
        UserLink(URL) {
            return "/users/" + URL;
        },
    }
}
</script>

<style scoped>

</style>
