<script setup>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Inertia } from '@inertiajs/inertia';

const props = defineProps({
    canResetPassword: Boolean,
    status: String,
    errors: {
        type: Object
    },
});

const form = useForm({
    password: '',
    password_confirmation: '',
});


const submit = () => {
    Inertia.post("/otp", form, {
        onError: (data) => {
            console.log(data);
        }
    })
};
</script>

<template>

    <Head title="Change Password" />

    <AuthenticationCard>

     

        <form @submit.prevent="submit">
            <div class=" flex-col justify-center items-center  ">
                <TextInput v-model="form.password" type="password" name="password"
                    class=" shadow-md rounded-lg mt-4 block md:w-64 w-80 ring-1 ring-blue-600"  placeholder="New Password"
                    required autofocus />
                <InputError class="mt-2" :message="errors.password" />



                <div class="mt-4">
                    <TextInput id="password" v-model="form.password_confirmation" type="password" name="password_confirmation"
                        class="mt-5 block shadow-md  rounded-lg md:w-64 w-80  ring-1 ring-blue-600"
                        placeholder="Confirm Password" required  />
                    <InputError class="mt-2" :message="errors.confirm" />
                </div>
            </div>


            <div class="block mt-5 ">
                <PrimaryButton
                    class="w-80 md:w-64 bg-whiteTextColor md:text-whiteTextColor md:bg-primaryBackground rounded-lg shadow-lg text-primaryBackground  "
                    :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Change Password
                </PrimaryButton>
            </div>


       
        </form>
    </AuthenticationCard>
</template>



<style>
@import "../../css/login.css";
</style>
