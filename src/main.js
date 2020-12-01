import Vue from 'vue'
import App from './App.vue'

Vue.config.productionTip = false

new Vue({
  render: h => h(App),
  el: "#container",
  data: {
    name: "world",
    count: 0,
    countstore: 0,
  },
}).$mount('#app');