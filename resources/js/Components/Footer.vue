<template>
  <footer class="pt-2 pb-4 mt-6 w-full bg-gray-200 flex flex-row space-x-16 justify-center">
      <div class="flex flex-col">
          <p>Impressum</p>
          <div>
              <Link href="/about-us">Über uns</Link>
              <Link href="/login">Anmelden</Link>
              <Link href="/register">Registrieren</Link>
          </div>
      </div>
      <div class="flex flex-col">
          <p>Kontakt</p>
          <div>
              <Link href="/about-us">Standort</Link>
              <Link href="/login">Anmelden</Link>
              <Link href="/register">Registrieren</Link>
          </div>
      </div>
      <div class="flex flex-col">
          <p>Projekte</p>
          <div>
              <Link href="/about-us">Standort</Link>
              <Link href="/login">Anmelden</Link>
              <Link href="/register">Registrieren</Link>
          </div>
      </div>
      <div class="flex flex-col">
          <p>Weiteres</p>
          <div>
              <Link href="/about-us">Standort</Link>
              <Link href="/login">Anmelden</Link>
              <Link href="/register">Registrieren</Link>
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
