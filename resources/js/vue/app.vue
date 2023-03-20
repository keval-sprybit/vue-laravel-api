<template>
    <div class="heading">
        <h2>Anime Data</h2>
        <AnimeCreate></AnimeCreate>
    </div>
    <AnimeList></AnimeList>

</template>

<script>
import AnimeList from './components/AnimeList.vue';
import AnimeCreate from './components/AnimeCreate.vue';

export default{
    components:{
        AnimeList,
        AnimeCreate
    }
}
</script>
