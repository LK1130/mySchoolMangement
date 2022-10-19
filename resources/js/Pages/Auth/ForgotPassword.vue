<script setup>
import { Head,Link, useForm } from '@inertiajs/inertia-vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

defineProps({
    backLogin : Boolean,
    status: String,
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <Head title="Forgot Password" />

    <AuthenticationCard>
        <!-- <template #logo>
            <AuthenticationCardLogo />
        </template> -->

        

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <!-- <InputLabel for="email" value="Email" /> -->
                <TextInput
                    id="email"
                    v-model="form.email"
                    type="email"
                    class="mt-9 block lg:w-72 md:w-72 sm:w-8"
                    placeholder="Email"
                    required
                    autofocus
                />
                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="flex items-center justify-center mt-20">
                <PrimaryButton class="w-full btn" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Send Verfication Code
                </PrimaryButton>
            </div>

            <div class="flex items-start justify-start mt-4">
                <Link  href="/login" class="underline text-base text-gray-600 hover:text-gray-900  forgot">
                    back
                </Link>
                
            </div>
           
        </form>
    </AuthenticationCard>
</template>



<style>
    @import "../../../css/login.css";
 </style>
    