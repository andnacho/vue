let webpack = require('webpack');
let path = require('path');

module.exports = {
    entry: {
        app: './resources/assets/app.js',
        vendor: ['vue', 'axios']
    },

    output: {
        path: path.resolve(__dirname, 'public/webpack'),
        filename: '[name].js',
        publicPath: './public'
    },

    resolve: {
        alias: {
            'Vue$': 'vue/dist/vue.js' // 'vue/dist/vue.common.js' for webpack 1
        }
    },

    mode: "development",

};