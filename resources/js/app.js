require('./bootstrap');
import './custom'

import Vue from 'vue';

import { InertiaApp } from '@inertiajs/inertia-vue';
import { InertiaForm } from 'laravel-jetstream';
import PortalVue from 'portal-vue';
import VueToastr from 'vue-toastr'
import VueSimpleAlert from "vue-simple-alert";
import moment from "moment";
import truncate from "vue-truncate-filter"
import Particles from "particles.vue";
import VueProgressBar from 'vue-progressbar';

Vue.mixin({ methods: { route } });
Vue.use(InertiaApp);
Vue.use(InertiaForm);
Vue.use(PortalVue);
Vue.use(VueToastr)
Vue.use(VueSimpleAlert);
Vue.use(moment);
Vue.use(truncate);
Vue.use(Particles);

const options = {
    color: '#28a745',
    failedColor: '#dc3545',
    thickness: '3px',
}
Vue.use(VueProgressBar, options);

const app = document.getElementById('app');

new Vue({
    render: (h) =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            },
        }),
}).$mount(app);
