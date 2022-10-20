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
            <p>Write a comment: </p>
            <form method="post" @submit.prevent="submit" class="w-full">
                <BreezeInput id="comment" type="text" v-model="CommentContent" class="w-auto"/>
                <BreezeButton>Comment</BreezeButton>
            </form>
        </div>

        <div v-for="comment in comments" :key="comment.id" class="bg-gray-50 p-4 mt-4 rounded drop-shadow-md">

            <!-- Display of original comment -->
            <div class="flex flex-row mb-4 bg-gray-100 p-2 rounded inline-block">
                <img :src="'/SampleProfilePictures/' + users[(comment.user_id - 1)].ProfilePicture"
                     alt="Profile Picture" class="rounded h-12">
                <p class="ml-4 self-center">
                    <Link :href="'/forum/user/' + users[(comment.user_id - 1)].username" class="text-black">
                        {{ users[(comment.user_id - 1)].username }}
                    </Link>
                </p>
            </div>
            <div class="comment-body">
                <p class="text-lg">{{ comment.content }}</p>
            </div>

            <!-- Form to reply to a comment -->
            <div v-if="loggedIn">
                <button v-show="showingComment !== comment.id" @click="showReply(comment.id)">Antworten</button>
                <form v-if="showingComment === comment.id" method="post" @submit.prevent="submitReply(comment.id)">
                    <BreezeInput id="ReplyToComment" type="text" v-model="ReplyContent"/>
                    <BreezeButton>Reply</BreezeButton>
                </form>
            </div>

            <!-- For Loop for all replies a comment has -->
            <div v-for="reply in replies" :key="reply.id" class="bg-gray-50 p-4 mt-4 rounded drop-shadow-md">
                <div class="flex flex-row mb-4 bg-gray-100 p-2 rounded inline-block">
                    <img :src="'/SampleProfilePictures/' + users[(reply.user_id - 1)].ProfilePicture"
                         alt="Profile Picture" class="rounded h-12">
                    <p class="ml-4 self-center">
                        <Link :href="'/forum/user/' + users[(reply.user_id - 1)].username" class="text-black">
                            {{ users[(reply.user_id - 1)].username }}
                        </Link>
                    </p>
                </div>
                <div class="comment-body">
                    <p class="text-lg">{{ reply.content }}</p>
                </div>
            </div>
        </div>

    </Layout>
</template>

<script setup>
import BreezeButton from '@/Components/Button.vue';
import BreezeInput from '@/Components/Input.vue';
</script>

<script>
import {Head, useForm} from '@inertiajs/inertia-vue3';
import Layout from '@/Layouts/ForumLayout.vue';

export default {
    name: "SinglePost",
    data() {
        return {
            CommentContent: '',
            ReplyContent: '',
            form: useForm({
                    post_id: this.post.id,
                    content: '',
                }
            ),
            reply: useForm({
                comment_id: '',
                content: '',
            }),
            showingComment: '',
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
        Layout, Head
    },
    methods: {
        submit() {
            // Pass the data from the local var to the form var
            this.form.content = this.CommentContent;

            // Needed to clear the Form
            this.CommentContent = '';
            this.form.post(this.$page.url);
        },

        submitReply(CommentID) {
            // Set
            this.reply.comment_id = CommentID;
            this.reply.content = this.ReplyContent;

            // Clear the form and hide the reply input
            this.ReplyContent = '';
            this.showingComment = '';
            this.reply.post(this.$page.url);
        },

        showReply(CommentID) {
            // This var decides which Comment of a comment field is shown
            this.showingComment = CommentID;
        }
    }
}
</script>

<style scoped>

</style>
