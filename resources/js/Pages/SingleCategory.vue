<template>
    <Layout>
        <div class="mb-8">
            <h1>{{ category.name }}</h1>
        </div>

        <div>
            <div v-for="post in posts" :key="post.id">
                <p class="text-2xl"><Link :href="PostLink(post.slug)">{{ post.title }}</Link></p>
                <p>{{ post.description }}</p>
            </div>
        </div>
    </Layout>
</template>

<script>
import Layout from '@/Layouts/ForumLayout.vue';
export default {
    name: "SingleCategory",
    components: {
        Layout,
    },
    props: {
        category: Object,
        posts: Object,
    },
    methods: {
        PostLink(PostTitle) {
            return "/forum/posts/" + PostTitle;
        }
    }
}
</script>

<style scoped>

</style>
