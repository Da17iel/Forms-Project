<template>
    <Head :title="post.title"/>

    <Layout>
        <div class="p-4 border rounded bg-gray-50">
            <h1 class="text-4xl">{{ post.title }}</h1>
            <p class="mt-4">Von:
                <Link :href="'/forum/user/' + author.username">{{ author.username }}</Link>
            </p>
            <p>Kategorie:
                <Link :href="'/forum/category/' + category.slug">{{ category.name }}</Link>
            </p>
            <p class="mt-2">{{ post.content }}</p>
        </div>

        <p class="text-2xl pt-10 pb-4">Antworten:</p>

        <div v-if="loggedIn">
            <form method="post" @submit.prevent="submit" class="w-full">
                <BreezeInput id="comment"
                             type="text"
                             v-model="CommentContent"
                             class="w-1/2 mr-2 rounded-none
                                    border-0 border-b border-gray-800
                                    focus:ring-0"
                             @focus="CommentFocused = true"
                             @blur="CommentFocused = false"
                             placeholder="Eine Antwort erfassen..."
                             autocomplete="off"/>
                <BreezeButton v-show="CommentFocused">Comment</BreezeButton>
            </form>
        </div>

        <!-- Show all Comments and Replies -->
        <Comments :post="post" :comments="comments" :replies="replies" :users="users" :author="author" :category="category" :loggedIn="loggedIn" />

    </Layout>
</template>

<script setup>

import BreezeButton from '@/Components/Button.vue';
import BreezeInput from '@/Components/Input.vue';
</script>

<script>
import {Head, useForm} from '@inertiajs/inertia-vue3';
import Layout from '@/Layouts/ForumLayout.vue';
import Comments from '@/Components/Comments.vue';

export default {
    name: "SinglePost",
    data() {
        return {
            form: useForm({
                    post_id: this.post.id,
                    content: '',
                }
            ),
            CommentContent: '',
            CommentFocused: false,
        }
    },
    props: {
        post: Object,
        comments: Object,
        replies: Object,
        users: Object,
        author: Object,
        category: Object,
        loggedIn: Boolean,
    },
    components: {
        Layout, Head, Comments
    },
    methods: {
        submit() {
            // Pass the data from the local var to the form var
            this.form.content = this.CommentContent;

            // Needed to clear the Form
            this.CommentContent = '';
            this.form.post(this.$page.url);
        },
    }
}
</script>

<style scoped>

</style>
