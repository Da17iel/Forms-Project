<template>
    <header class="flex w-full" style="background-color: #161616;">
        <div class="w-full flex flex-row items-center justify-center">
            <Link href="/forum" class="flex flex-row items-center">
                <img src="/favicon.png" alt="Website Logo" class="h-16 w-16">
                <h1 class="py-6 px-4 text-white">My Forum</h1>
            </Link>
        </div>
        <div class="absolute top-4 right-16">
            <Link href="/forum/search" class="p-2 rounded bg-gray-900 border-2 border-blue-700 transition ease-in-out duration-700
              hover:border-blue-500 hover:text-blue-200 rounded w-full inline-block w-48">Suche</Link>
        </div>
    </header>

    <nav>
        <div class="ForumNav">
            <div v-for="Item in props.currentLocation" :key="Item.displayName" class="NavItem">
                <Link :href="Item.url">
                    {{ Item.displayName }}
                    <p class="mr-4 ml-2">></p>
                </Link>
            </div>
        </div>
    </nav>

    <div class="absolute left-16 top-4 w-40">
        <Link v-if="props.isLoggedIn" href="/forum/my-profile"
              class="p-2 rounded bg-gray-900 border-2 border-blue-700 transition ease-in-out duration-700
              hover:border-blue-500 hover:text-blue-200 rounded w-full inline-block">
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
        <Link v-else href="/login"
              class="p-2 rounded bg-gray-900 border-2 border-blue-700 transition ease-in-out duration-700
               hover:border-blue-500 hover:text-blue-200 rounded w-full inline-block">Login</Link>
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
