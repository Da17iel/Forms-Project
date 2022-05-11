<template>
    <header class="flex flex-col w-full bg-sky-400">
        <h1 class="text-center py-6">My Forum</h1>
        <button class="absolute top-2 right-2 w-20 h-6 bg-gray-500 place-self-end">Search</button>
    </header>

    <nav class="flex flex-row place-self-end">
        <div class="ForumNav w-1/2">
            <Link href="/forum">Hy Home</Link>
            <p>></p>
        </div>
        <div class="w-1/2 place-content-center">
            <Link v-if="LoggedInd">My Profile</Link>
        </div>
    </nav>

    <main>
        <slot />
    </main>
    <div>
        {{ currentLocation }}
    </div>
    <Footer />
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import Footer from '@/Components/Footer.vue';
import { computed } from 'vue'
import { usePage } from '@inertiajs/inertia-vue3'
export default {
    name: 'Layout',
    props: {
        currentLocation: Array,
    },
    components: {
        Link, Footer,
    },
    data() {
        return {
            "LoggedInd" : true,
        }
    },
}

</script>
