<script setup> 

    import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
    import NavLayout from '../Layouts/NavLayout.vue';
    import SecondaryButtonVue from '../Components/SecondaryButton.vue';
    import Footer from '../Layouts/Footer.vue';
    import SecondaryBtn from '../Components/SecondaryBtn.vue';
    import DateButton from '../Components/DateButton.vue';


    
    
    </script>
    
    <template>
    
        <Head title="Exbrain | Recording" />
        <NavLayout>
    
        </NavLayout>

        <section>
            <div class="relative mx-auto w-full min-h-min  bg-primaryBackground">
                <div class="flex items-center p-6 mx-3 space-x-1 text-whiteTextColor ">
                    <h1 class="text-xl font-bold ">N5</h1>
                    <ion-icon name="chevron-forward-outline"  class="text-base font-bold" ></ion-icon>
                    <p class="text-xl font-bold">Batch <span class="text-xl font-bold">18</span></p>
                    <span class="flex  text-xs m-2 p-1">(18:00 - 20:00)</span>
                </div>
               
                
                <h3 class="absolute">My School</h3>

                <div class="container flex  columns-2 justify-around  space-x-10 p-14">
                   <div class="video-container ">
                   <img src="img/video.png" alt="">
                   </div>

                   <div class="md:w-96 space-y-3">
                        <div class="flex  space-x-5">
                            <DateButton>

                            </DateButton>
                            <SecondaryBtn>
                                New

                            </SecondaryBtn>
                            
                        </div>
                        <p class="md:text-5xl sm:text-base text-white font-bold">Hiragana Day 1</p>
                        <p class="md:text-sm font-thin text-white f mt-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos minima voluptates voluptatum omnis ipsum veritatis ea, iure consectetur veniam! Cum quae animi assumenda illo ad unde, nostrum facere at porro! Lorem ipsum dolor sit amet consectetur adipisicing elit. Error animi ducimus voluptates! Vitae blanditiis ullam necessitatibus provident dolor non esse odit minus quod quidem. Suscipit dolorum ex assumenda qui esse.</p>
                   </div>
                </div>
            </div>

        
        </section>
        
        
    </template> 
    
   
<style>
    @import "../../css/video.css";
    </style>
    