<script>
import axios from "axios";
export default {
    name: "ApiContent",
    data() {
        return {
            events: [],
        };
    },
    mounted() {
        console.log("app caricata");

        axios
            .get("http://localhost:8000/api/v1/events")
            .then((res) => {
                const data = res.data;

                if (data.status == "success") {
                    this.events = data.events;

                    console.log(this.events);
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
    <header>
        <div class="nav-contain">
            <a href="http://localhost:8000/login">login</a>
            <br />
            <a href="http://localhost:8000/register">registrati</a>
        </div>
    </header>

    <div class="title_container">
        <h1 class="title">STAMPA DEGLI EVENTI</h1>
    </div>

    <div class="button_container">
        <button class="ms_button">
            <a href="#">AGGIUNGI NUOVO EVENTO</a>
        </button>
    </div>

    <div class="button_container">
        <button class="ms_button">
            <router-link :to="{ name: 'tags' }"> VEDI I TAG </router-link>
        </button>
    </div>

    <div class="button_container">
        <button class="ms_button">
            <router-link :to="{ name: 'about' }"> VEDI GLI AUTORI </router-link>
        </button>
    </div>

    <div class="col_container">
        <div class="row">
            <div
                v-for="event in events"
                class="col-lg-4 col-md-6 col-sm-12 ms_col"
            >
                <div class="card">
                    <div class="card-body">
                        <a href="#">
                            <span>Nome dell'evento: {{ event.title }}</span>
                            <span>Data dell'evento: {{ event.date }} </span>

                            <!-- <form action="{{ route('event.destroy', $event->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="delete">
                            </form> -->

                            <div class="button_container">
                                <button class="ms_button">
                                    <a href="#">MODIFICA EVENTO</a>
                                </button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped lang="scss"></style>
