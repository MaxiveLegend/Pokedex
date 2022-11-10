<template>
    <div class="flex flex-col justify-around h-full">
        <h2 class="text-3xl h-min text-center ">stats</h2>

        <div v-for="stat in this.stats" class="grid gap-2 grid-cols-7 ">
            <h3 class=" grid content-center font-semibold col-span-2 bg-stone-700 rounded-lg px-2">{{stat.stat.name}}: </h3>
            <div class="w-full h-full bg-stone-700 h-10 rounded-lg col-span-5">
                <div class="bg-stone-600 h-full rounded-lg grid content-center" :style="'width: ' + calculateStatPercentage(stat.base_stat) + '%'">
                    <p class="ml-2 text-xl">{{stat.base_stat}}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "PokemonStats",

    props: {
        stats: Object
    },

    methods: {
        calculateStatPercentage(value){
            return value / 252 * 100
        }
    }
}
</script>
