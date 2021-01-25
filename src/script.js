import Vue from 'vue';
const axios = require('axios').default;

var app = new Vue(
    {
        el: "#root",
        data: {
            discs: [],
            genres: []
        },
        mounted: function() {
            axios
            .get("server.php")
            .then(
                (response)=> {
                    this.discs = response.data;

                    this.discs.forEach(
                        element => {
                            if(this.genres.includes(element.genre) == false) {
                                this.genres.push(element.genre)
                            }
                        }
                    );

                }
            );
        },
    }
);