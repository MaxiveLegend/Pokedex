<template>
    <section class="bg-stone-700 rounded-lg shadow-black shadow-inner">
        <a :href="species.url">
            <img :src="species.sprite" alt="">
            <h2 class="text-center text-2xl">{{species.id}}. {{species.name}}</h2>
        </a>
    </section>
</template>

<script>
export default {
    name: "ClickablePokemon",

    props: {
        species: Object
    },
}
</script>
