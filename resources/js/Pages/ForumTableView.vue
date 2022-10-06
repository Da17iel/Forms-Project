<template>
    <Head :title="category.name" />

    <Layout>
        <div class="flex flex-col w-full h-full">
            <Link
                class="p-2 border rounded-lg border-gray-400 hover:border-gray-900 self-end"
                href="/forum/create-post"
            >Post erstellen</Link>
            <table class="shadow">
                <tr>
                    <th class="w-32">Zustand</th>
                    <th class="w-1/3">Titel</th>
                    <th class="w-1/6">Author</th>
                    <th>Datum</th>
                </tr>

                <tr v-for="post in posts" :key="post.id">
                    <!-- Status -->
                    <td class="">
                        <div class="w-full flex justify-center">
                            <img :src="post.IconPath"
                                 alt="Icon" class="w-20 h-20">
                        </div>
                    </td>

                    <!-- Title -->
                    <td>
                        <p class="font-bold"><Link :href="'/forum/post/' + post.slug">{{ post.title }}</Link></p>
                        Ansichten: <i>{{ post.views }}</i>
                    </td>

                    <!-- Author -->
                    <td>
                        <Link :href="'/forum/user/' + users[(post.user_id - 1)].username" class="text-black">
                            {{ users[(post.user_id - 1)].username }}
                        </Link>
                    </td>

                    <!-- Date -->
                    <td>{{ post.creationDate }}</td>
                </tr>
            </table>
        </div>
    </Layout>
</template>

<script>
import Layout from '@/Layouts/ForumLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
export default {
    name: "ForumTableView",
    components: {
        Layout, Head
    },
    props: {
        category: Object,
        posts: Object,
        users: Object,
    },
}
</script>

<style scoped>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
