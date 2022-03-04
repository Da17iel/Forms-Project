<template>
    <nav class="p-4 flex justify-center content-center">
        <Link href="/" class="navItem">Home</Link>
        <Link href="/about-us" class="navItem">About us</Link>
        <Link href="/login" class="navItem">Login</Link>
        <Link href="/register" class="navItem">Register</Link>
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
