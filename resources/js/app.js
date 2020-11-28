require('./bootstrap');
import './custom'

import Vue from 'vue';

import { InertiaApp } from '@inertiajs/inertia-vue';
import { InertiaForm } from 'laravel-jetstream';
import PortalVue from 'portal-vue';
import VueToastr from 'vue-toastr'
import VueSimpleAlert from "vue-simple-alert";
import moment from "moment";

Vue.mixin({ methods: { route } });
Vue.use(InertiaApp);
Vue.use(InertiaForm);
Vue.use(PortalVue);
Vue.use(VueToastr)
Vue.use(VueSimpleAlert);
Vue.use(moment);

const app = document.getElementById('app');

new Vue({
    render: (h) =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            },
        }),
    filters: {
        format: function (value, arg1) {
            return moment(String(value)).format(arg1)
        }
    },
}).$mount(app);
