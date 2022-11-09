import './bootstrap';
import {createApp} from "vue";
import pokedex from "./components/Pokedex";
import pokemon from "./components/Pokemon";
import clickablePokemon from "./components/ClickablePokemon";
import pokemonStats from "./components/PokemonStats";

const app = createApp({})
app.component('pokedex', pokedex);
app.component('pokemon', pokemon);
app.component('clickable-pokemon', clickablePokemon)
app.component('pokemon-stats', pokemonStats)

app.mount('#app')
