<template>
    <h1 class="text-5xl font-medium mb-5">All Pokemon</h1>

    <div class="grid grid-cols-5 gap-4">
        <clickable-pokemon v-for="species in pokemon" :species="species" />
    </div>
</template>

<script>
import ClickablePokemon from "./ClickablePokemon";
export default {
    name: "pokedex",
    components: {ClickablePokemon},
    data() {
        return{
            pokemon: [],
        }
    },

    methods: {
        getAll(){
            axios("https://pokeapi.co/api/v2/pokemon/?limit=811")
                .then(r => this.pokemon = r.data.results)
                .then(() => {
                    for (let i = 0; i < this.pokemon.length; i++) {
                        this.pokemon[i].sprite = `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/${i+1}.png`;
                        this.pokemon[i].id = i+1;
                        this.pokemon[i].url = "/pokemon/" + this.pokemon[i].name
                    }
                })
                .catch(err => console.log(err))
        }
    },

    mounted() {
        this.getAll()
    }
}
</script>
