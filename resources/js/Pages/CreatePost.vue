<template>
    <Head title="Create a Post" />

    <Layout>
        <div class="bg-gray-200">

            <div class="p-8">
                <h1>Create a post</h1>
                <hr>

                <form method="post" @submit.prevent="submit" class="mt-6">

                    <div>
                        <BreezeValidationErrors />
                    </div>

                    <div class="w-4/6">
                        <div>
                            <BreezeLabel for="title" value="Titel: "/>
                            <BreezeInput id="title" type="text" v-model="form.title" class="w-full"/>
                        </div>

                        <div>
                            <BreezeLabel for="category" value="Kategorie: " class="mt-4"/>
                            <select name="category" id="category" v-model="form.category" class="border-0 rounded w-full">
                                <option v-for="category in categories" :key="category.id" :value="category.name">{{ category.name }}</option>
                            </select>
                        </div>

                        <div>
                            <BreezeLabel for="content" value="Inhalt: " class="mt-4"/>
                            <textarea id="content" type="textarea" v-model="form.content" rows="9" class="border-0 rounded w-full"/>
                        </div>

                        <div>
                            <BreezeButton class="mt-4">Submit</BreezeButton>
                        </div>
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
        categories: Object,
    },
    components: {
        Layout, Head
    },
    methods: {
        // Submit form data to Database
        submit() {
            this.form.post("/forum/create-post")
        },
    }
}
</script>
