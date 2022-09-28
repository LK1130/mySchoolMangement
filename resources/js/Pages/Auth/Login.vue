<script setup>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
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
            <div class="flex flex-col justify-center items-center">
                <!-- <InputLabel for="email" value="Email" /> -->
                <TextInput
                    id="email"
                    v-model="form.email"
                    type="email"
                    class="mt-4 block lg:w-72 md:w-72 sm:w-8"
                    placeholder="Email"
                    required
                    autofocus
                />
                <InputError class="mt-2" :message="form.errors.email" />
            


            <div class="mt-4">
                <!-- <InputLabel for="password" value="Password" /> -->
                <TextInput
                    id="password"
                    v-model="form.password"
                    type="password"
                    class="mt-5 block lg:w-72 md:w-72 sm:w-8"
                    placeholder="Password"
                    required
                    autocomplete="current-password"
                />
                <InputError class="mt-2" :message="form.errors.password" />
            </div>
        </div>
        

            <div class="block mt-5 ">
                <PrimaryButton class="w-full  btn" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Login
                </PrimaryButton>
            </div>
           

            <div class="flex items-center justify-center mt-4 ">
                <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-base text-gray-600 hover:text-gray-900  forgot">
                    Forgot password?
                </Link>

                
            </div>
        </form>
    </AuthenticationCard>
</template>



<style>
@import "../../../css/login.css";
</style>
