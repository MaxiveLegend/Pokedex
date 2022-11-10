<template>
    <section class="bg-stone-700">
        <p v-for="move in this.detailedMoves">{{move.name}}</p>
    </section>
</template>

<script>
export default {
    name: "PokemonMoves",

    props: {
        moves: Array
    },

    data() {
        return{
            detailedMoves: []
        }
    },

    mounted() {
        console.log(typeof this.moves)
        for (let i = 0; i < this.moves.length; i++) {
            let currentMove = this.moves[i];
            let detailedMove = null;

            axios(this.moves[i].move.url)
                .then(r => detailedMove = r.data)
                .then(() => detailedMove.learnLevel = currentMove.version_group_details[0].level_learned_at)
                .then(() => this.detailedMoves.push(detailedMove))
                .catch(err => console.log(err))
        }
    }
}
</script>
