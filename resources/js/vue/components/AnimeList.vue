<template>
    <div class="mt-12 drop-shadow-lg">
        <div class="flex justify-end m-2 p-2"></div>
    <div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                   Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Poster
                </th>
                <th scope="col" class="px-6 py-3">
                    Rating
                </th>
                <th scope="col" class="px-6 py-3">
                    Adult
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
            v-for="anime in animeData" :key="anime.id">
                <td class="px-6 py-4">
                  {{ anime.title }}
                </td>
                <td class="px-6 py-4">
                    <img :src='anime.poster_image'/>
                    {{ anime.poster_image }}

                </td>
                <td class="px-6 py-4">
                    {{ anime.rating }}
                </td>
                <td class="px-6 py-4">
                    {{ anime.adults }}
                </td>
                <td>
                    edit/delete
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>
</template>

<script setup>
import { computed, onMounted, ref } from "vue";
import axiosClient from "../../axiosClient.js";

const animeData = ref([]);
onMounted(async () => {
    axiosClient
      .get(`anime`)
      .then(({ data }) => animeData.value=data.data);

});

</script>
