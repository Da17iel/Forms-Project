<template>
  <footer class="pt-2 pb-4 mt-6 w-full bg-gray-100 flex flex-row space-x-16 justify-center">
      <div class="flex flex-col">
          <p>Impressum</p>
          <div class="ml-2 flex flex-col">
              <Link href="/about-us">About us</Link>
              <Link href="/login">Login</Link>
              <Link href="/register">Register</Link>
          </div>
      </div>
      <div class="flex flex-col">
          <p>Kontakt</p>
          <div class="ml-2 flex flex-col">
              <Link href="/about-us">Standort</Link>
              <Link href="/login">Login</Link>
              <Link href="/register">Register</Link>
          </div>
      </div>
      <div class="flex flex-col">
          <p>Zukünftige Projekte</p>
          <div class="ml-2 flex flex-col">
              <Link href="/about-us">Standort</Link>
              <Link href="/login">Login</Link>
              <Link href="/register">Register</Link>
          </div>
      </div>
      <div class="flex flex-col">
          <p>Weiteres</p>
          <div class="ml-2 flex flex-col">
              <Link href="/about-us">Standort</Link>
              <Link href="/login">Login</Link>
              <Link href="/register">Register</Link>
          </div>
      </div>
  </footer>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    name: "Footer",
    components: {
        Link
    },
};
</script>

<style scoped>

</style>
