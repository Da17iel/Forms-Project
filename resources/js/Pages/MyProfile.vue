<template>
    <Head title="My Profile"/>

    <Layout>
        <div class="flex flex-col items-center">
            <div class="w-1/3 p-8 border-2 border-gray-300 rounded-lg ">
                <div v-if="!ShowProfileEdit">
                    <h1 class="mb-4">My Profile</h1>
                    Profile Picture:
                    <img
                        :src="isSampleProfilePic() + user.ProfilePicture"
                        :alt="user.username + '\'s Profile Picture'"
                        class="mt-2 mb-4 w-1/4 rounded"
                    >
                    Username:
                    <p class="mt-2 mb-4 font-medium text-xl">{{ user.username }}</p>
                    Email:
                    <p class="mt-2 mb-4 font-medium text-xl">{{ user.email }}</p>
                    Status:
                    <p class="mt-2 mb-4 font-medium text-xl">{{ user.status }}</p>
                    <button
                        class="inline-flex items-center px-4 py-2 border rounded-md font-semibold text-xs mt-4
                                   uppercase tracking-widest hover:bg-gray-100 active:bg-gray-100 focus:outline-none
                                   focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150"
                        @click="OpenForm">Edit
                    </button>
                </div>

                <div v-if="ShowProfileEdit">
                    <h1 class="mb-4">Edit your Profile</h1>

                    <div id="Errors" v-show="Object.keys(errors).length > 0" class="my-4">
                        <p><b>Whoops! Something went wrong.</b></p>
                        <ul>
                            <!--<li v-show="errors.ProfilePicture">{{ errors.ProfilePicture }}</li>-->
                            <li v-show="errors.username">{{ errors.username }}</li>
                            <li v-show="errors.email">{{ errors.email }}</li>
                            <li v-show="errors.status">{{ errors.status }}</li>
                        </ul>
                    </div>

                    <form @submit.prevent="submit">
                        <!--<div>
                            <BreezeLabel for="ProfilePicture" value="Profile Picture" />
                            <BreezeInput id="ProfilePicture" type="file" class="mt-1 block w-full" />
                        </div>-->

                        <div>
                            <BreezeLabel for="username" value="Username"/>
                            <BreezeInput id="username" type="text" class="mt-1 block w-full" v-model="form.username"
                                         required autofocus/>
                        </div>

                        <div>
                            <BreezeLabel for="email" value="Email"/>
                            <BreezeInput id="email" type="email" class="mt-1 block w-full" v-model="form.email"
                                         required/>
                        </div>

                        <div>
                            <BreezeLabel for="status" value="Status"/>
                            <BreezeInput id="status" type="text" class="mt-1 block w-full" v-model="form.status"
                                         required/>
                        </div>

                        <div id="Buttons" class="mt-2">
                            <BreezeButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                Save
                            </BreezeButton>

                            <input
                                class="inline-flex items-center px-4 py-2 border rounded-md font-semibold text-xs ml-2
                                   uppercase tracking-widest hover:bg-gray-100 active:bg-gray-100 focus:outline-none
                                   focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150"
                                type="button" @click="TerminateForm" value="Cancel">
                        </div>

                    </form>
                </div>


                <div class="flex flex-col">
                    <Link class="self-end" :href="route('logout')" method="post">Logout</Link>
                </div>
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
import {Head, useForm} from '@inertiajs/inertia-vue3';

export default {
    name: "MyProfile",
    data() {
        return {
            // Var to either view or edit the profile
            ShowProfileEdit: false,

            // The Var form is now a Form object
            form: useForm({
                //ProfilePicture: this.user.ProfilePicture,
                username: this.user.username,
                email: this.user.email,
                status: this.user.status,
                processing: false
            }),
        }
    },

    props: {
        user: Object, // User Object
        errors: Object, // Validation Errors
    },
    components: {
        Layout, Head
    },
    methods: {
        // Submit form data to Database
        submit() {
            this.form.post("/forum/my-profile")
            if (!this.form.hasErrors) {
                this.ShowProfileEdit = false;
            }
        },

        // Open the ShowProfile Page
        OpenForm() {
            this.ShowProfileEdit = true
        },

        // Reset the models
        TerminateForm() {
            this.form = useForm({ // The Var form is now a Form object
                //ProfilePicture: this.user.ProfilePicture,
                username: this.user.username,
                email: this.user.email,
                status: this.user.status,
                processing: false
            });
            this.ShowProfileEdit = false

            // Delete all the existing errors
            for (const key in this.errors) {
                delete this.errors[key];
            }
        },

        // Function to check if the profilePicture is still a sample Profile Picture
        isSampleProfilePic() {
            switch (this.user.ProfilePicture) {
                case 'ProfilePicture1.png':
                    return '/SampleProfilePictures/';
                case 'ProfilePicture2.png':
                    return '/SampleProfilePictures/';
                case 'ProfilePicture3.png':
                    return '/SampleProfilePictures/';
                case 'ProfilePicture4.png':
                    return '/SampleProfilePictures/';
            }
            // User's Profile Picture is not a sample one
            return "";
        },

    }
}
</script>

<style>
#Errors p, #Errors li {
    color: red;
}
</style>
