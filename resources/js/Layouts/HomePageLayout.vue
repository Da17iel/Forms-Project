<template>
    <header class="pt-6 bg-gray-100 w-full flex flex-col">
        <h1 class="text-center pb-6">Daniel's Testforum</h1>
        <p class="text-center">Welcome Back {{ $page.props.testing.testing }}</p>
        <Navigation />
    </header>

    <main>
        <slot />
    </main>

    <Footer />
</template>

<script>
import Navigation from '@/Components/HomePageNavigation';
import { Link } from "@inertiajs/inertia-vue3";
import Footer from "@/Components/Footer.vue";
export default {
    name: 'Layout',
    components: {
        Navigation, Link, Footer
    },
}

</script>
