<template>
    <h1 class="text-5xl font-medium mb-5">{{this.name}}</h1>
</template>

<script>
export default {
    name: "Pokemon",

    props: {
        name: String
    },

    data() {
        return{
            properties: []
        }
    },

    mounted() {
        axios.get("https://pokeapi.co/api/v2/pokemon/" + this.name)
            .then(r => this.properties = r.data)
            .catch(err => console.log(err));
    }
}
</script>
