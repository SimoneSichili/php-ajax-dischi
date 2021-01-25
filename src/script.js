import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue(
    {
        el: "#root",
        data: {
            discs: [],
        },
        mounted: function() {
            axios
            .get("http://localhost/php-ajax-dischi/server.php")
            .then(
                (response)=> {
                    this.discs = response.data;
                }
            );
        },
    }
);