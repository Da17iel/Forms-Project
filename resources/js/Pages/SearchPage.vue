<template>
    <Head :title="Suche"></Head>


    <Layout>
        <h1>Suche nach einem Begriff</h1>
        <input v-model="SearchTerm" type="text" class="rounded border-gray-300 hover:border-gray-500">
        <p>Suche Nach: {{ SearchTerm }}</p>
        <div v-for="post in filteredList" :key="post.id">
            <p>{{ post.title }}</p>
        </div>
        <div class="item error" v-if="SearchTerm&&!filteredList().length">
            <p>No results found!</p>
        </div>
    </Layout>
</template>

<script>
import Layout from '@/Layouts/ForumLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
export default {
    name: "SearchPage",
    components: {
        Layout, Head
    },
    props: {
        posts: Object,
    },
    data() {
        return {
            "SearchTerm": ""
        }
    },
    computed: {
        filteredList() {/*
            this.posts;
            const ages = [32, 33, 16, 40];

            this.posts.filter(FunctionName)


            function FunctionName(PostTitle) {
                return PostTitle.match(this.SearchTerm)
            }



            return this.posts.filter( function() {

                (post) => post.title.toLowerCase().includes(this.SearchTerm.value.toLowerCase())
                }
            );*/
        },
    }
}
</script>

<style scoped>

</style>
