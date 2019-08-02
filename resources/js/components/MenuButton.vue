<template>
    <div>
        <button class="menu-btn btn text-dark btn-lg" data-toggle="modal" data-target="#exampleModal">Meniu</button>
        <modal :menu="menu"></modal>
    </div>
</template>
<script>
import ModalMenu from './ModalMenu.vue';
export default {
    name:"MenuButton",
    props:['menu'],
    data(){
        return{
            menu: this.menu
        }
    },
    methods:{
        submit:function(){
            this.$emit("menu",this.menu)
        }
    },
    components:{
        'modal':ModalMenu
    }
}
</script>
<style>
    .menu-btn{
        background-color:#d9b38c;
    }
    .menu-btn:hover{
        filter: brightness(85%);
    }
</style>
