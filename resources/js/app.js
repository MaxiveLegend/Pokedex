import './bootstrap';
import {createApp} from "vue";
import pokedex from "./components/Pokedex";
import pokemon from "./components/Pokemon";
import clickablePokemon from "./components/ClickablePokemon";

const app = createApp({})
app.component('pokedex', pokedex);
app.component('pokemon', pokemon);
app.component('clickable-pokemon', clickablePokemon)

app.mount('#app')
