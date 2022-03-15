/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import axios from 'axios';
import Vue from 'vue';
import { products } from './products.js'


window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
/**
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('navbar-component', require('./components/NavbarComponent').default);
Vue.component('footer-component', require('./components/FooterComponent').default);
Vue.component('searchbar-component', require('./components/SearchbarComponent').default);
Vue.component('productcard-component', require('./components/ProductcardComponent').default);
Vue.component('productpage-component', require('./components/productpageComponent').default);
Vue.component('details-component', require('./components/DetailsComponent').default);
Vue.component ('productreview-component', require ('./components/ProductreviewComponent').default);
Vue.component ('starreviews-component', require('./components/StarReviewsComponent').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
        imageRoot: '/images/',
        products: products,
        newProducts: [],
        popularProducts: [],
        randomProducts: [],


    },
    created() {
        this.getProducts(),
            console.log("created")
    },
    methods: {
        getProducts() {
            let self = this;
            console.log("inside axios")
            axios({
                method: 'get',
                url: '/getproducts',
                headers: {
                    "X-Requested-With": "XMLHttpRequest"
                }
            }).then(function (response) {
                if (response.data.success) {
                    self.newProducts = response.data.newProducts;
                    self.popularProducts = response.data.popularProducts;
                    self.randomProducts = response.data.randomProducts;
                }
            }).catch(function (error) {

            });
        }
    }

})




// methods: {
//     let galleryProducts = document.querySelectorAll('.gallery_product');
//     let filterButton = document.querySelectorAll('.filter-button');
//     let filterAll = document.querySelector('#filter-all');

//     filterAll.addEventListener('click', function () {
//         galleryProducts.forEach(photo => {
//             photo.style.display = 'block';
//         });
//     });

//     filterButton.forEach(button => {
//         button.addEventListener('click', function () {
//             // attribute from button
//             let categoryFromButton = this.getAttribute('category');
//             console.log(categoryFromButton)

//             galleryProducts.forEach(prod => {
//                 // attribute form picture
//                 if (prod.getAttribute('category') == categoryFromButton) {
//                     prod.style.display = 'block';
//                 } else {
//                     prod.style.display = 'none';
//                 }
//             });
//         });
//     });
// }






