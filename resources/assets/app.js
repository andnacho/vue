window.Vue = require('Vue'); // global
window.axios = require('axios');
import Form from './saludos';
import Example from '../js/views/Example.vue'

var form = new Form;


form.nuevo();

var vue = new Vue({

   el:'#app',
    components:{
       Example
    },
   data: {
       name: 'Maria José'
   }
});