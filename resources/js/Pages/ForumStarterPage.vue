<template>
    <Layout>
        <div class="w-full h-full">
            <table>
                <tr>
                    <th>Zustand</th>
                    <th>Titel</th>
                    <th>Author</th>
                    <th>Antworten</th>
                    <th>Datum</th>
                </tr>
                <tr>
                    <td><img src="http://www.abc4it.com/start/images/favorite.ico"
                             alt="Stern" class="w-20 h-20"></td>
                    <td>
                        <p class="font-bold">Ein sehr kreativer Titel</p>
                        Ansichten: <i>15615</i>
                    </td>
                    <td>Sarah Meier</td>
                    <td>15</td>
                    <td>17.03.2022</td>
                </tr>

                <tr>
                    <td><img src="https://www.sugarmember.com/assets/img/fav-icon.ico"
                             alt="Stern" class="w-20 h-20"></td>
                    <td>
                        <p class="font-bold">Ein sehr kreativer Titel</p>
                        Ansichten: <i>15615</i>
                    </td>
                    <td>Sarah Meier</td>
                    <td>15</td>
                    <td>17.03.2022</td>
                </tr>

                <tr>
                    <td><img src="https://iconarchive.com/download/i86026/graphicloads/100-flat-2/arrow-up.ico"
                             alt="Stern" class="w-20 h-20"></td>
                    <td>
                        <p class="font-bold">Ein sehr kreativer Titel</p>
                        Ansichten: <i>15615</i>
                    </td>
                    <td>Sarah Meier</td>
                    <td>15</td>
                    <td>17.03.2022</td>
                </tr>

                <tr>
                    <td><img src="http://www.abc4it.com/start/images/favorite.ico"
                             alt="Stern" class="w-20 h-20"></td>
                    <td>
                        <p class="font-bold">Ein sehr kreativer Titel</p>
                        Ansichten: <i>15615</i>
                    </td>
                    <td>Sarah Meier</td>
                    <td>15</td>
                    <td>17.03.2022</td>
                </tr>
            </table>
        </div>

    </Layout>
</template>

<script>
import Layout from '@/Layouts/ForumLayout.vue';
export default {
    name: "ForumStarterPage",
    components: {
        Layout,
    }
}
</script>

<style scoped>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
