<template>
    <header class="flex flex-col w-full bg-sky-400">
        <h1 class="text-center py-6">My Forum</h1>
        <div class="absolute top-2 right-2">
            <Link href="/search" class="w-20 h-6 bg-gray-300">Suche</Link>
        </div>
    </header>

    <nav class="flex flex-row place-self-end">
        <div class="ForumNav" v-for="Item in props.currentLocation" :key="Item.displayName">
            <Link :href="Item.url">{{ Item.displayName }}</Link>
            <p>></p>
        </div>
    </nav>

    <div class="absolute left-16 top-4 p-2 rounded bg-white w-40">

        <Link v-if="props.isLoggedIn" href="/my-profile">
            <div class="flex flex-row">
                <img
                    :src="'/SampleProfilePictures/' + props.auth.user.ProfilePicture"
                    :alt="props.auth.user.ProfilePicture + 's Profile Picture'"
                    class="h-8 max-w-2xl"
                >
                <div class="ml-2">
                    Mein Profil
                </div>
            </div>
        </Link>
        <Link v-else href="/login">
            Login
        </Link>
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
    name: 'ForumLayout',
    components: {
        Link, Footer,
    },
    computed: {
        props() {
            return this.$page.props;
        }
    }
}

</script>
