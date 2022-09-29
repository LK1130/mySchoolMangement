<template>


  <nav class="relative  w-full  bg-white border-b-4  px-2  py-2.5 rounded dark:bg-gray-900">
    <div class="flex flex-wrap  justify-between  mx-auto p-1">
      <div class="pt-2 mx-20">
        <a href="https://flowbite.com/" class="flex items-center">
          <img src="img/logo.png" class=" h-9 sm:h-9" alt="Exbrain Logo">

        </a>
      </div>


      <ul
        class="hidden md:flex md:flex-row md:mr-80 mt-4 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0  ion">
        <li class="flex items-center ">
          <ion-icon name="chevron-forward-outline" class="ion"></ion-icon>
          <a href="#" class="block py-2 pr-4 pl-3  rounded md:bg-transparent  md:p-0 dark:text-white uppercase"
            aria-current="page">Home</a>
        </li>
        <li class="flex items-center">

          <a href="#"
            class="block py-2 pr-4 pl-3  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 uppercase ion">Inbox</a>
        </li>
        <li class="flex items-center ">
          <a href="#"
            class="block py-2 pr-4 pl-3  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 uppercase ion">Blog</a>
        </li>
      </ul>

      <div class="hidden md:flex  md:mr-4  justify-end items-center ">
        <input type="text" id="search-navbar"
          class="block   md:w-80 md:h-8 sm:w-full text-gray-900  rounded-l-lg border border-gray-300 sm:text-sm  video"
          placeholder="Video Title">
        <button class="btn md:w-20 md:h-8 text-white rounded-r-lg">Search</button>
      </div>


      <div class="hidden md:flex flex-wrap  justify-center items-center mr-4">
        <div class="flex  items-center">
          <ion-icon name="notifications" class="p-4  mx-4 noti"></ion-icon>
        </div>

        <div class="profile flex justify-center items-center ">
          <img src="img/logo.png" alt="">
        </div>

      </div>
      <!-- </div> -->



    </div>
    <!-- <div class="flex md:order-3">
    
    <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1">
      <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
      <span class="sr-only">Search</span>
    </button>
    <div class="hidden relative md:block">
        <div>
            <ion-icon name="notifications-outline"></ion-icon>
        </div>
     
      <input type="text" id="search-navbar" class="block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
    </div>
    <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-search" aria-expanded="false">
      <span class="sr-only">Open menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  
    <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-search">
      
        
      <div class="relative mt-3 md:hidden">
        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
          <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
        </div>
        <input type="text" id="search-navbar" class="block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
      </div>
     
      <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="#" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white uppercase" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 uppercase">Inbox</a>
        </li>
        <li>
          <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 uppercase">Blog</a>
        </li>
      </ul>
     
    </div> -->



  </nav>


</template>



<style>
@import "../../css/studentHome.css";
</style>