<template>
    <!-- For Loop for all replies a comment has -->
    <div v-for="reply in replies" :key="reply.id" >
        <div v-if="reply.comment_id === comment.id" class="bg-gray-50 p-4 mt-4 border border-gray-300 rounded drop-shadow-md">
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
</template>

<script>
export default {
    name: "Reply",
    props: {
        replies: Object,
        comment: Object,
        users: Object,
    }
}
</script>

<style scoped>

</style>
