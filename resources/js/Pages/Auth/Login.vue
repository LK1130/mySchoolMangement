<script setup>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>

    <Head title="Log in" />

    <AuthenticationCard>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div class=" flex-col justify-center items-center  ">
                <!-- <InputLabel for="email" value="Email" /> -->
                <TextInput v-model="form.email" type="email"
                    class=" shadow-md rounded-lg mt-4 block md:w-64 w-80 ring-1 ring-blue-600"  placeholder="Email"
                    required autofocus />
                <InputError class="mt-2" :message="form.errors.email" />



                <div class="mt-4">
                    <!-- <InputLabel for="password" value="Password" /> -->
                    <TextInput id="password" v-model="form.password" type="password"
                        class="mt-5 block shadow-md  rounded-lg md:w-64 w-80  ring-1 ring-blue-600"
                        placeholder="Password" required autocomplete="current-password" />
                    <InputError class="mt-2" :message="form.errors.password" />
                </div>
            </div>


            <div class="block mt-5 ">
                <PrimaryButton
                    class="w-full bg-whiteTextColor md:text-whiteTextColor md:bg-primaryBackground rounded-lg shadow-lg text-primaryBackground  "
                    :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Login
                </PrimaryButton>
            </div>


            <div class="flex items-center justify-center mt-4 ">
                <Link v-if="canResetPassword" :href="route('password.request')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 text-white  md:text-primaryBackground">
                Forgot password?
                </Link>


            </div>
        </form>
    </AuthenticationCard>
</template>



<style>
@import "../../../css/login.css";
</style>
