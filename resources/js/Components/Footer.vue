<template>
  <footer class="pt-2 pb-4 mt-6 w-full bg-gray-200 flex flex-row space-x-16 justify-center">
      <div class="flex flex-col">
          <p>Impressum</p>
          <div>
              <Link href="/">Startseite</Link>
              <Link href="/login">Anmelden</Link>
              <Link href="/register">Registrieren</Link>
          </div>
      </div>
      <div class="flex flex-col">
          <p>Kontakt</p>
          <div>
              <Link href="/about-us">Kontaktieren</Link>
          </div>
      </div>
      <div class="flex flex-col">
          <p>Projekte</p>
          <div>
              <a href="https://github.com/Da17iel/DanielNotes" target="_blank">Mein Notizenprogramm</a>
              <a href="https://github.com/Da17iel/ForumProject" target="_blank">Forum Projekt</a>
              <a href="https://github.com/Da17iel/failing-attempt-to-do-the-cookie-clicker" target="_blank">Rookie Cookie Clicker</a>
          </div>
      </div>
      <div class="flex flex-col">
          <p>Weiteres</p>
          <div>
              <a href="https://tbz.ch/" target="_blank">Berufsschule</a>
              <a href="https://www.bag.admin.ch/bag/de/home.html" target="_blank">Bag</a>
              <a href="https://megacad.ch/" target="_blank">MegaCAD</a>
          </div>
      </div>
  </footer>
</template>

<script>
export default {
    name: "Footer",
    components: {

    },
};
</script>

<style scoped>

</style>
