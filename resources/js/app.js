require('./bootstrap');

import {createApp} from 'vue'
import test from './components/test.vue'

createApp({
    components:{
test,}
}).mount('#app')
