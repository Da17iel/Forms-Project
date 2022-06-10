<template>
    <Head :title="user.username + '\'s Profile'" />

    <Layout>

        <div class="flex flex-row">
            <div class="UserProfile w-1/6 mr-12 border rounded">
                <div class="p-8 flex flex-col items-center">
                    <img :src="'/SampleProfilePictures/' + user.ProfilePicture" class="w-32 h-auto rounded-lg">
                    <h1>{{ user.username }}</h1>
                    <p class="mt-2">{{ user.status }}</p>
                </div>
            </div>

            <div class="PostContent">
                <h1 class="mb-4">{{ user.username }}'s posts:</h1>
                <div v-for="post in UserPosts" class="p-4 mb-4 border shadow rounded">
                    <Link :href="'/forum/post/' + post.slug" class="text-2xl">{{ post.title }}</Link>
                    <p>{{ post.content }}</p>
                </div>
            </div>
        </div>

    </Layout>
</template>

<script>
import Layout from '@/Layouts/ForumLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
export default {
    name: "SingleUser",
    components: {
        Layout, Head
    },
    props: {
        user: Object,
        UserPosts: Object,
    },
}
</script>

<style scoped>

</style>
