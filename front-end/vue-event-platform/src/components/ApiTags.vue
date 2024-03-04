<script>
import axios from "axios";

export default {
    name: "ApiTags",
    data() {
        return {
            tags: [],
        };
    },
    mounted() {
        console.log("tag caricati");

        axios
            .get("http://localhost:8000/api/v1/tags")
            .then((res) => {
                const data = res.data;

                if (data.status == "success") {
                    this.tags = data.tags;

                    console.log(this.tags);
                }
                console.log(data);
            })
            .catch((err) => {
                console.err(err);
            });
    },
};
</script>

<template>
    <h1>SEZIONE CON TUTTI I TAG</h1>

    <div class="button_container">
        <button class="ms_button">
            <router-link :to="{ name: 'about' }"> VEDI GLI AUTORI </router-link>
        </button>
    </div>

    <div class="button_container">
        <button class="ms_button">
            <router-link :to="{ name: 'home' }"> VEDI GLI EVENT </router-link>
        </button>
    </div>

    <div v-for="tag in tags" class="col-lg-4 col-md-6 col-sm-12 ms_col">
        <div class="card">
            <div class="card-body">
                <a href="#">
                    <span>Nome del tag: {{ tag.name }}</span>
                </a>
            </div>
        </div>
    </div>
</template>
