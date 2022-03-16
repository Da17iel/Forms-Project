<template>
    <header class="pt-6 bg-gray-100 w-full flex flex-col">
        <h1 class="text-center pb-6">Daniel's Testforum</h1>
        <Navigation />
    </header>

    <div class="pt-4 ml-12 min-h-[75vh]">
        <slot />
    </div>

    <Footer />
</template>

<script>
import Navigation from '../Components/HomePageNavigation';
import { Link } from "@inertiajs/inertia-vue3";
import Footer from "@/Components/Footer.vue";
export default {
    name: 'Layout',
    components: {
        Navigation, Link, Footer
    },
}

</script>
