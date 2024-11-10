require('./bootstrap');

import { createApp } from 'vue';

import LikeButton from './components/LikeButton.vue';
import ViewCounter from './components/ViewCounter.vue';

// app
const app = createApp({});
app.component('like-button', LikeButton);
app.component('view-counter', ViewCounter);
app.mount('#app');
