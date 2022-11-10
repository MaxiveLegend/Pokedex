<template>
    <header class="flex">
<!--        <p v-if="properties.id > 1" class="text-4xl font-semibold">&lArr;</p>-->
        <h1 class="text-5xl font-medium mb-5 flex-grow text-center w-100" >{{this.properties.id}}. {{this.properties.name}}</h1>
<!--        <p v-if="properties.id < 811" class="text-4xl semifont-bold">&rArr;</p>-->
    </header>

    <section class="bg-stone-700 grid grid-cols-5 grid-rows-6 rounded-lg gap-4 p-4">
        <div class="bg-stone-800 rounded-lg col-span-2 row-span-6 grid justify-center content-center">
            <img :src="this.imgUrl" alt="">
        </div>
        <div class="bg-stone-800 rounded-lg grid justify-center content-center">
            <p class="text-3xl h-min">#{{this.properties.id}}</p>
        </div>
        <div class="bg-stone-800 rounded-lg col-span-2 row-span-6 px-4">
            <pokemon-stats :stats="this.properties.stats" />
        </div>
        <div class="bg-stone-800 rounded-lg grid justify-center content-center" >
            <p class="text-3xl h-min text-center">name: {{this.properties.name}}</p>
        </div>
        <div class="bg-stone-800 rounded-lg grid row-span-2 justify-center content-center" >
            <p class="text-3xl h-min text-center">Types: </p>
            <p class="text-3xl h-min text-center" v-for="type in this.properties.types">{{type.type.name}}</p>
        </div>
        <div class="bg-stone-800 rounded-lg row-span-2 grid justify-center content-center">
            <p class="text-3xl h-min text-center">Height / weight: </p>
            <p class="text-3xl h-min text-center">{{this.height}}m / {{this.weight}}Kg </p>
        </div>
    </section>
</template>

<script>
export default {
    name: "Pokemon",

    props: {
        name: String
    },

    data() {
        return{
            properties: [],
            imgUrl: "",
            height: 0,
            weight: 0,
        }
    },

    methods: {
        convertValue(value){
            let convertedVal = value.toString()
            if(convertedVal.length == 1) convertedVal = '0' + convertedVal
            const position = convertedVal.length - 1;
            return [convertedVal.slice(0, position), ',', convertedVal.slice(position)].join('');
        }
    },

    mounted() {
        axios.get("https://pokeapi.co/api/v2/pokemon/" + this.name)
            .then(r => this.properties = r.data)
            .then(() => {
                this.imgUrl = "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/" + this.properties.id + ".png";
                this.dualType = this.properties.types.length > 1
                this.weight = this.convertValue(this.properties.weight)
                this.height = this.convertValue(this.properties.height)
            })
            .catch(err => console.log(err));
    }
}
</script>
