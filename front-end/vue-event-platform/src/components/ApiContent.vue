<script>
import  axios  from 'axios';
export default{
    name: 'ApiContent',
    data(){
        return {
            events: [

            ]
        }
    },
    mounted() {
        console.log('app caricata');

        axios.get('http://localhost:8000/api/v1/events')
        .then(res=>{
            const data = res.data;

            if (data.status=='success'){
                this.events=data.events;

                console.log(this.events);
            }
            console.log(data);
        })
        .catch((err)=>{console.err(err)});



    }
}
</script>

<template>

    <header>
        <div class=" nav-contain">
            <a href="http://localhost:8000/login">login</a>
            <br>
            <a href="http://localhost:8000/register">registrati</a>
        </div>
    </header>
        <h1>EVENTS:</h1>
        <ul>
            <li v-for=" event in events" :key="event.id">

                <a href="http://localhost:8000/event/id">  <span>{{ event.title }}</span></a>

            </li>
        </ul>
</template>

<style scoped lang="scss">

</style>
