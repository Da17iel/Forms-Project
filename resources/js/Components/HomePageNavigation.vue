<template>
    <nav class="p-2 flex justify-center content-center bg-gradient-to-b from-gray-200 to-gray-100">
        <Link href="/" class="navItem">Home</Link>
        <Link href="/forum" class="navItem">Forum</Link>
        <Link href="/login" class="navItem">Anmelden</Link>
        <Link href="/register" class="navItem">Registrieren</Link>
    </nav>
</template>

<script>
export default {
    name: "Navigation",
    components: {

    },
};
</script>
