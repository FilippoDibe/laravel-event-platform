<script>
import axios from "axios";

export default {
    name: "ComponentAbout",
};
</script>

<template>
    <ul>
        <li>Filippo Cafaro</li>
        <li>Gianluca Nieddu</li>
        <li>Matteo Fantacuzzi</li>
    </ul>

    <div class="button_container">
        <button class="ms_button">
            <router-link :to="{ name: 'tags' }"> VEDI I TAG </router-link>
        </button>
    </div>

    <div class="button_container">
        <button class="ms_button">
            <router-link :to="{ name: 'home' }"> VEDI GLI EVENT </router-link>
        </button>
    </div>
</template>
