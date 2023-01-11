<template>
    <div v-for="comment in comments" :key="comment.id" class="bg-gray-50 p-4 mt-4 border border-gray-400 rounded drop-shadow-md">

        <!-- Display of original comment -->
        <div class="flex flex-row mb-4 bg-gray-200 p-2 rounded inline-block">
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
        <div v-if="loggedIn" class="mt-4">
            <button v-show="showingComment !== comment.id" @click="showReply(comment.id)" class="underline underline-offset-4 hover:text-blue-800 ease-out duration-150">Antworten</button>
            <form v-if="showingComment === comment.id" method="post" @submit.prevent="submitReply(comment.id)">
                <BreezeInput id="ReplyToComment" type="text" v-model="ReplyContent" class="mr-2 w-1/2" autofocus/>
                <BreezeButton>Reply</BreezeButton>
            </form>
        </div>

        <Reply :replies="replies" :comment="comment" :users="users" />

    </div>
</template>

<script setup>

import BreezeButton from '@/Components/Button.vue';
import BreezeInput from '@/Components/Input.vue';
</script>

<script>
import {useForm} from "@inertiajs/inertia-vue3";
import Reply from './Reply.vue';

export default {
    name: "Comment",
    data() {
        return {
            reply: useForm({
                comment_id: '',
                content: '',
            }),
            ReplyContent: '',
            showingComment: ''
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
        Reply,
    },
    methods: {
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
