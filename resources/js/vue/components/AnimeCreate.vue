<template>
    <div class="mt-12">
        <div class="max-w-md mx-auto p-4 bg-white shadow-md rounded-md">
            <div class="space-y-3">
                <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                    <input type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" v-model="anime.title" required>
                </div>
                <div class="mb-6">
                    <label for="poster_url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Poster URL</label>
                    <input type="text" id="poster_url" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" v-model="anime.poster_image" required>
                </div>
                <div class="mb-6">
                    <label for="rating" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rating</label>
                    <input type="text" id="rating" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" v-model="anime.rating" required>
                </div>
                <div class="mb-6">
                    <label for="adults" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adults</label>
                    <input type="text" id="adults" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" v-model="anime.adults" required>
                </div>
                <div class="mt-4">
                    <button class="px-4 py-2 bg-indigo-500 text-white hover:bg-indigo-700 rounded" @click="addAnime()">add</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import axiosClient from "../../axiosClient.js";

const animeData = [];
export default{
    data:function(){
        return{
            anime:{
                title:"",
                poster_image:"",
                rating:"",
                adults:""
            }
        }
    },
    methods:{
        addAnime(){
            if(this.anime){

                axiosClient
                .post('anime',this.anime)
                .then(({ response }) => animeData.value=response.data)
                .catch(error=>{
                    console.log(error)
                })
            }

        }
    }
}
</script>
