import 'alpinejs';
// import axios from 'axios';
// import _ from 'lodash';
// import moment from 'moment';
import AOS from 'aos';
import Vue from 'vue';
import Vuex from 'vuex';
import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
import Contact from './Contact.vue';

AOS.init();

Vue.config.silent = true;
Vue.use(Vuex);
Vue.use(VueSweetalert2);

const contact_store = new Vuex.Store({
  state: () => ({
    cf7_url: window.wp_obj.cf7_url,
    enquiry_title: window.wp_obj.enquiry_title,
    enquiry_subtitle: window.wp_obj.enquiry_subtitle,
    enquiry_submit_label: window.wp_obj.enquiry_submit_label,
    form_data: {
      your_email: '',
      your_name: '',
      your_message: '',
      your_phone: '',
    },
    wp_nonce: window.wp_obj.wp_nonce,
  }),
  mutations: {
    UPDATE_YOUR_EMAIL: (state, value) => {
      state.form_data.your_email = value;
    },
    UPDATE_YOUR_NAME: (state, value) => {
      state.form_data.your_name = value;
    },
    UPDATE_YOUR_MESSAGE: (state, value) => {
      state.form_data.your_message = value;
    },
    UPDATE_YOUR_PHONE: (state, value) => {
      state.form_data.your_phone = value;
    },
  },
  actions: {
    updateYourEmail: ({commit, state}, value) => {
      commit('UPDATE_YOUR_EMAIL', value);
      return state.form_data.your_email;
    },
    updateYourName: ({commit, state}, value) => {
      commit('UPDATE_YOUR_NAME', value);
      return state.form_data.your_name;
    },
    updateYourMessage: ({commit, state}, value) => {
      commit('UPDATE_YOUR_MESSAGE', value);
      return state.form_data.your_message;
    },
    updateYourPhone: ({commit, state}, value) => {
      commit('UPDATE_YOUR_PHONE', value);
      return state.form_data.your_phone;
    },
  }
});

let contact = new Vue({
  el: '#contact',
  store: contact_store,
  render: h => h(Contact),
});
