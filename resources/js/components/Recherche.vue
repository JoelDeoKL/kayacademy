<template>
    <div>
        <input type="text" v-model="q" class="form-control" placeholder="Que veux-tu étudiez aujourd'hui?" name="" id="">
        <div class="alert alert-secondary" v-if="this.q && getFilteredCours.length > 0">
            {{getFilteredCours.length}} cours trouvé<span v-if="getFilteredCours.length > 1">s</span>
        </div>
        <div class="alert alert-secondary" v-if="this.q && getFilteredCours.length == 0">
            Aucun cours trouvé
        </div>
        <div v-for="cours in getFilteredCours" v-bind:key="cours.id">
            <a href="/formations" style="color:white"><span><i class="fa fa-university mt-5"></i> {{cours.titre_cours}} <em>: {{cours.description}}</em></span></a>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                cours : [],
                q: ''
            }
        },

        methods: {
            fetchCours() {
                axios.get('/api/cours')
                .then (response => {
                    this.cours = response.data;
                })
                .catch (error => {console.log(error)})
            }
        },

        computed: {
            getFilteredCours(){
                return this.cours.filter(cours =>{
                    return cours.description.toLowerCase().includes(this.q.toLowerCase());
                })
            }
        },

        mounted() {
            this.fetchCours();
        }
    }
</script>
