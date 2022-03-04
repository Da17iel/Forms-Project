<template>
    <header class="pt-6 bg-gray-100 w-full flex flex-col">
        <h1 class="text-center">This is a header</h1>
        <Navigation />
    </header>

    <div class="pt-4 ml-6">
        <slot />
    </div>
</template>

<script>
import Navigation from '../Components/Navigation';
import { Link } from "@inertiajs/inertia-vue3";
export default {
    name: 'Layout',
    components: {
        Navigation, Link
    },
}

</script>
