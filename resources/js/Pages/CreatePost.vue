<template>
    <Head title="Create a Post" />

    <Layout>
        <div class="bg-gray-300">

            <div class="p-8">
                <h1>Create a post</h1>
                <hr>

                <form method="post" @submit.prevent="submit">

                    <div>
                        <BreezeValidationErrors />
                    </div>

                    <div>
                        <BreezeLabel for="title" value="Titel: "/>
                        <BreezeInput id="title" type="text" v-model="form.title"/>
                    </div>

                    <div>
                        <BreezeLabel for="category" value="Kategorie: "/>
                        <select name="category" id="category" v-model="form.category">
                            <option v-for="category in categories" :key="category.id" :value="category.name">{{ category.name }}</option>
                        </select>
                    </div>

                    <div>
                        <BreezeLabel for="content" value="Inhalt: "/>
                        <BreezeInput id="content" type="text" v-model="form.content"/>
                    </div>

                    <div>
                        <BreezeButton>Submit</BreezeButton>
                    </div>

                </form>
            </div>
        </div>
    </Layout>
</template>

<script setup>
import BreezeButton from '@/Components/Button.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
</script>

<script>
import Layout from '@/Layouts/ForumLayout.vue';
import { Head, useForm } from '@inertiajs/inertia-vue3';

export default {
    name: "CreatePost",
    data() {
        return {
            // The Var form is now a Form object
            form: useForm({
                title: '',
                content: '',
                category: '',
            }),
        }
    },

    props: {
        loggedIn: Boolean,
        categories: Object,
    },
    components: {
        Layout, Head
    },
    methods: {
        // Submit form data to Database
        submit() {
            if (this.loggedIn) {
                this.form.post("/create-post")
            } else {
                // Display the Error
            }
        },
    }
}
</script>

<style>
#Errors p, #Errors li {
    color: red;
}
</style>
