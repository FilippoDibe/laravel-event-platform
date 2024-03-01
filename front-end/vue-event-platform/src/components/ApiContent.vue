<script>
import  axios  from 'axios';
export default{
    name: 'ApiContent',
    mounted() {
        console.log('app caricata');

        axios.get('http://localhost:8000/api/v1/test')
        .then(res=>{
            const data = res.data;
            console.log(data);
        })
        .catch((err)=>{console.err(err)});



    }
}
</script>

<template>


</template>

<style scoped lang="scss">

</style>
