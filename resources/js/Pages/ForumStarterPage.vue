<template>
    <Layout>
        <div class="w-full h-full">
            <table>
                <tr>
                    <th class="w-32">Zustand</th>
                    <th class="w-1/2">Titel</th>
                    <th class="w-1/4">Author</th>
                    <th class="w-48">Antworten</th>
                    <th>Datum</th>
                </tr>

                <tr v-for="post in posts" :key="post.id">
                    <td><img :src="ImageLink(post.IconPath)"
                             alt="Icon" class="w-20 h-20"></td>
                    <td>
                        <p class="font-bold"><a :href="TitleLink(post.slug)">{{ post.title }}</a></p>
                        Ansichten: <i>{{ post.views }}</i>
                    </td>
                    <td>{{ post.user_id }}</td>
                    <td>{{ post.replies }}</td>
                    <td>{{ post.created_at }}</td>
                </tr>

            </table>
        </div>
    </Layout>
</template>

<script>
import Layout from '@/Layouts/ForumLayout.vue';
export default {
    name: "ForumStarterPage",
    components: {
        Layout,
    },
    data() {
        return {
            "show": false,
        }
    },
    props: {
        posts: Object,
        Test: Object,
    },
    methods: {
        ImageLink(IconPath) {
            return IconPath;
        },
        TitleLink(LinkToTitle) {
            return "/forum/posts/" + LinkToTitle;
        }
    }
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
