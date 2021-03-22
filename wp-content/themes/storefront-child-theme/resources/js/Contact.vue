<template>
  <div class="container mx-auto mb-[200px] px-4">
    <div class="w-auto xl:w-[1100px] h-auto xl:h-[500px] mx-auto bg-green-02 rounded-3xl py-[75px] px-[75px]">
      <div class="text-center pb-[30px]">
        <div class="font-jumble text-[45px] text-green-01 uppercase">{{ enquiry_title }}</div>
        <div class="font-sofia-pro-light text-[14px] text-green-01">{{ enquiry_subtitle }}</div>
      </div>
      <ValidationObserver ref="form">
        <form @submit.prevent="onSubmit">
          <div class="grid grid-row-2 gap-y-[30px]">
            <div class="row-span-1">
              <div class="grid grid-cols-2 gap-x-[30px] gap-y-[30px] xl:gap-y-[0px]">
                <div class="col-span-2 xl:col-span-1 grid grid-rows-3 gap-y-[30px]">
                  <div class="row-span-1">
                    <ValidationProvider rules="your_name_required" v-slot="{ errors }">
                      <input class="h-[40px] w-full shadow-none bg-green-03 placeholder-green-01 font-sofia-pro-light text-[14px]" v-model="your_name" type="text" :placeholder="errors.length ? errors[0] : 'Name*'">
                    </ValidationProvider>
                  </div>
                  <div class="row-span-1">
                    <ValidationProvider rules="your_email_required|your_email_valid" v-slot="{ errors }">
                      <input class="h-[40px] w-full shadow-none bg-green-03 placeholder-green-01 font-sofia-pro-light text-[14px]" v-model="your_email" type="email" :placeholder="errors.length ? errors[0] : 'Email*'">
                    </ValidationProvider>
                  </div>
                  <div class="row-span-1">
                    <ValidationProvider rules="your_phone_required" v-slot="{ errors }">
                      <input class="h-[40px] w-full shadow-none bg-green-03 placeholder-green-01 font-sofia-pro-light text-[14px]" v-model="your_phone" type="text" :placeholder="errors.length ? errors[0] : 'Phone*'">
                    </ValidationProvider>
                  </div>
                </div>
                <div class="col-span-2 xl:col-span-1 flex items-center">
                  <ValidationProvider class="h-full w-full" rules="your_message_required" v-slot="{ errors }">
                    <textarea class="h-full w-full shadow-none bg-green-03 placeholder-green-01 font-sofia-pro-light text-[14px]" v-model="your_message" :rows="5" :placeholder="errors.length ? errors[0] : 'Message*'"></textarea>
                  </ValidationProvider>
                </div>
              </div>
            </div>
            <div class="row-span-1 flex items-center justify-end">
              <svg v-if="loading" class="animate-spin -ml-1 mr-3 h-5 w-5 text-green-01" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
              </svg>
              <div class="flex items-center justify-center font-jumble text-[12px] text-green-01 bg-transparent uppercase py-[4px] px-[8px] border-2 border-green-01 rounded-[15px] transition-all duration-300 hover:bg-yellow-01 hover:border-yellow-01 hover:text-purple-01 hover:transform hover:-translate-y-2 hover:translate-x-2 hover:shadow-xl cursor-pointer" @click="onSubmit">
                {{ enquiry_submit_label }}
              </div>
            </div>
          </div>
        </form>
      </ValidationObserver>
    </div>
  </div>
</template>
<script>
import { mapState } from 'vuex';
import { extend, ValidationProvider, ValidationObserver } from 'vee-validate';
import { required, email } from 'vee-validate/dist/rules';

import axios from 'axios';

extend('your_name_required', {
  ...required,
  message: 'Please enter your name'
});

extend('your_email_required', {
  ...required,
  message: 'Please enter your email'
});

extend('your_email_valid', {
  ...email,
  message: 'Please enter a valid email'
});

extend('your_phone_required', {
  ...required,
  message: 'Please enter your phone number'
});

extend('your_message_required', {
  ...required,
  message: 'Please enter your message'
});

export default {
  name: 'Contact',
  components: {
    ValidationProvider,
    ValidationObserver,
  },
  data () {
    return {
      loading: false,
    };
  },
  computed: {
    ...mapState({
      enquiry_title: state => state.enquiry_title,
      enquiry_subtitle: state => state.enquiry_subtitle,
      enquiry_submit_label: state => state.enquiry_submit_label,
      cf7_url: state => state.cf7_url,
      wp_nonce: state => state.wp_nonce,
    }),
    your_name: {
      get () {
        return this.$store.state.form_data.your_name;
      },
      set (value) {
        this.$store.dispatch('updateYourName', value);
      }
    },
    your_email: {
      get () {
        return this.$store.state.form_data.your_email;
      },
      set (value) {
        this.$store.dispatch('updateYourEmail', value);
      }
    },
    your_phone: {
      get () {
        return this.$store.state.form_data.your_phone;
      },
      set (value) {
        this.$store.dispatch('updateYourPhone', value);
      }
    },
    your_message: {
      get () {
        return this.$store.state.form_data.your_message;
      },
      set (value) {
        this.$store.dispatch('updateYourMessage', value);
      }
    }
  },
  methods: {
    submit () {
      this.$refs.form.submit();
    },
    onSubmit () {
      this.$refs.form.validate().then((success) => {
        if (success) {
          this.loading = true;
          let formData = new FormData();
          formData.append('nonce', this.wp_nonce);
          formData.append('your-name', this.your_name);
          formData.append('your-email', this.your_email);
          formData.append('your-phone', this.your_phone);
          formData.append('your-message', this.your_message);
          axios({
            method: 'POST',
            url: this.cf7_url,
            headers: {
              'Content-Type': 'multipart/form-data'
            },
            data: formData,
          }).then(response => {
            if (response.data.status === 'mail_sent') {
              this.$swal('Sent', response.data.message, 'success');
              this.your_name = this.your_email = this.your_phone = this.your_message = '';
              this.$nextTick(() => {
                this.$refs.form.reset();
              });
            } else {
              this.$swal('Error', response.data.message, 'error');
            }
            this.loading = false;
          });
        }
      });
      this.loading = false;
    }
  }
};
</script>
