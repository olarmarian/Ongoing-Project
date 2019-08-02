<template>
    <div>
        <div class="holder">
            <ul>
                <li v-for="(data, index) in skills" :key="index">{{data.skill}}</li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Skills',
        data(){
            return {
                skills:[
                    { "skill" :'Vue.js'},
                ]
            }
        }
    }
</script>
