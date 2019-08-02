<template>
    <div>   
        <div class="home-card">
            <h1>{{name}}</h1>
            <p>{{firstDescription}}</p>
            <input type="text" name="filter" placeholder="Cauta localul dorit dupa nume, specific sau locatie">
        </div>
        <div>
            <div class="description">
                <h1>'{{name}}' {{secondDescription}}</h1>
            </div>
            <div>
                <h3>{{introText}}</h3>
            </div>
            <div class="wrapper-ul">
                <ul>
                    <li>
                        <i class="fas fa-search"></i><br>
                        <span class="title-step">Alege localul</span><br>
                        <span>Poti cauta dupa nume, specific sau zona,dar daca esti indecis, poti da un ochi peste toate cele disponibile.</span>
                    </li>
                    <li>
                        <i class="far fa-calendar-alt"></i><br>
                        <span class="title-step">Alege ziua</span><br>
                        <span>Alege o zi disponibila in care vrei sa iesi.</span>
                    </li>
                    <li>
                        <i class="far fa-clock"></i><br>
                        <span class="title-step">Alege ora rezervarii</span><br>
                        <span>Iti vom sugera cateva ore disponibile, dar daca nu sunt pe placul tau, poti verifica mai tarziu, poate s-a eliberat cea dorita de tine !</span>
                    </li>
                    <li>
                        <i class="fas fa-users"></i><br>
                        <span class="title-step">Alege numarul de locuri</span><br>
                        <span>Alegi un numar de locuri, majoritatea localelor au mese de 2,4 sau chiar peste 8 locuri.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            name:'Go Out ',
            firstDescription:'Rezerva locuri in oras fara jena sau prezinta-ti propriul local',
            secondDescription: 'este o aplicatie pentru rezervari rapide si gestionarea meselor din restaurant',
            introText: 'In doar 4 pasi simpli, ai masa rezervata oriunde in oras.',
        }
    }
}
</script>
    

<style>
    .home-card{
        background-color: #d9b38c;
        width: 100%;
        color:#000000;
        margin: 0;
        overflow: hidden;
    }
    .home-card h1{
        font-size: 84px;
    }
    .home-card p{
        font-size: 1.4em;
    }
    .home-card input{
        border-radius: 2em;
        width: 600px;
        height: 35px;
        margin: 20px;
        font-size: 14px;
        color: #000000;
        text-align: center;
        font-weight: bold;
    }
    .description h1{
        display: inline-block;
        text-align: center;
        margin: 60px;
    }
    .wrapper-ul > ul{
        width: 100%;
        list-style: none;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-column-gap: 4em;
        grid-auto-rows: minmax(50px,auto);
    }
    .wrapper-ul >ul >li{
        max-width: 400px;
    }
    .title-step{
        font-weight: bold;
        font-size: 30px;
    }
    h3{
        margin: 0;
        display: flex;
        padding-left: 40px;
        margin: 50px;
    }
</style>
