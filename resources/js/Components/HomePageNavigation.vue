<template>
    <nav class="p-2 flex justify-center content-center bg-gray-200">
        <Link href="/" class="navItem">Home</Link>
        <Link href="/forum" class="navItem">Forum</Link>
        <Link href="/about-us" class="navItem">Über Uns</Link>
        <Link href="/login" class="navItem">Anmelden</Link>
        <Link href="/register" class="navItem">Registrieren</Link>
    </nav>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    name: "Navigation",
    components: {
        Link,
    },
};
</script>
