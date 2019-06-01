Vue.component('coupon',{

    props: ['code'],

    template:`
        <input type="text" :value="code" @input="updateCode($event.target.value)" ref="input">
    `,

    data(){
        return {
            invalids: ['ALLFREE', 'BAD']
        }
    },

    methods:{
        updateCode(code){

            if(this.invalids.includes(code)){
                alert('This coupon is not longer available');
                this.$refs.input.value = code = '';

            }
            this.$emit('input', code);
        }
    }
});

new Vue({
    el:'#app',
    data:{
        coupon: 'FREEBIE'
    }
});

// let source = {
//     user: {
//         name: 'John Dow'
//     }
// };
//
//   var uno = new Vue({
//         el: '#one',
//         data:{
//             foo: 'bar',
//             shared: source
//         }
//     });
//
// var dos = new Vue({
//     el: '#two',
//     data:{
//         foo: 'foobar',
//         shared: source
//     }
// });