<template>
    <nav class="p-4 flex justify-center content-center">
        <Link href="/" class="p-2 m-4 bg-blue-600">Home</Link>
        <Link href="/about-us">About us</Link>
        <Link href="/login">Login</Link>
        <Link href="/register">Register</Link>
    </nav>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    name: "Navigation",
    components: {
        Link
    },
};
</script>
