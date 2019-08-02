<template>
    <div>
        <button class="menu-btn btn text-dark btn-lg" data-toggle="modal" data-target="#exampleModal">Meniu</button>
        <modal></modal>
    </div>
</template>
<script>
import ModalMenu from './ModalMenu.vue';
export default {
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
