<template>
    <header class="flex flex-col w-full bg-sky-400">
        <h1 class="text-center py-6">My Forum</h1>
        <button class="absolute top-2 right-2 w-20 h-6 bg-gray-500 place-self-end">Search</button>
    </header>

    <nav class="flex flex-row place-self-end">
        <div class="ForumNav" v-for="Item in $page.props.currentLocation">
            <Link :href="Item.url">{{ Item.displayName }}</Link>
            <p>></p>
        </div>
    </nav>
    <div class="ml-12 w-1/2 place-content-center">
        <Link v-if="LoggedIn">My Profile</Link>
    </div>

    <main>
        <slot />
    </main>
    <Footer />
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import Footer from '@/Components/Footer.vue';
export default {
    name: 'Layout',
    components: {
        Link, Footer,
    },
    data() {
        return {
            "LoggedIn" : true,
        }
    },
}

</script>
