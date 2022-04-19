<template>
    <Layout>
        <div class="w-full h-full">
            <table class="shadow">
                <tr>
                    <th class="w-32">Zustand</th>
                    <th class="w-1/3">Titel</th>
                    <th class="w-1/6">Kategorie</th>
                    <th class="w-1/6">Author</th>
                    <th class="w-44">Antworten</th>
                    <th>Datum</th>
                </tr>

                <tr v-for="post in posts" :key="post.id">
                    <!-- Status -->
                    <td><img :src="ImageLink(post.IconPath)"
                             alt="Icon" class="w-20 h-20"></td>

                    <!-- Title -->
                    <td>
                        <p class="font-bold"><Link :href="TitleLink(post.slug)">{{ post.title }}</Link></p>
                        Ansichten: <i>{{ post.views }}</i>
                    </td>

                    <!-- Category -->
                    <td>
                        <p><Link :href="CategoryLink(categories[(post.category_id - 1)].slug)">{{ categories[(post.category_id - 1)].name }}</Link></p>
                    </td>

                    <!-- Author -->
                    <td>
                        <Link :href="GetUserPageLink(users[(post.user_id - 1)].username)" class="text-black">
                            {{ users[(post.user_id - 1)].username }}
                        </Link>
                    </td>

                    <!-- Replies & Date -->
                    <!-- Counts how many elements with this id exists in array comments -->
                    <td>{{ comments.filter(x => x.post_id == post.id).length  }}</td>
                    <td>{{ post.creationDate }}</td>
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
        users: Object,
        comments: Object,
        categories: Object,
    },
    methods: {
        ImageLink(IconPath) {
            return IconPath;
        },
        TitleLink(LinkToTitle) {
            return "/forum/posts/" + LinkToTitle;
        },
        GetUserPageLink(username) {
            return "/user/" + username;
        },
        CategoryLink(URL) {
            return "/category/" + URL;
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
