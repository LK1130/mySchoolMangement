<template>
    <div class="min-h-screen flex flex-col justify-center items-center   blog">
        <!-- <div>
            <slot name="logo" />
        </div> -->
        <!-- w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg  -->
        <div class=" flex flex-col items-center mt-4 p-4 shadow-md bg-white rounded-3xl login-box">
            
                <img src="img/logo.png" alt="" class="mt-6 logos">
                <h3 class="mt-3 text-3xl font-bold subpixel-antialiased  school">My School</h3>
            

            <slot />
        </div>
    </div>
</template>

<style>
    .blog{
        background: #2535A1;
    }

    .login-box{
         width: 400px;
        height: 490px;
    }

    .school{
        color: rgba(37, 53, 161, 1);
        font-family: 'Poppins',sans-serif;
    }


    @media screen and (max-width: 768px){
        .logos{
            width: 35%;
            height: 35%;
        }
        .login-box{
            width: 270px;
            height: 420px;
        }
        .school{
            font-size: 2rem;
        }
    }
</style>
