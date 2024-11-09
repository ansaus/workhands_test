require('./bootstrap');

require('./bootstrap');

// Импортируем createApp из Vue
import { createApp } from 'vue';

// Подключаем компоненты Vue
import LikeButton from './components/LikeButton.vue';

// Создаем приложение Vue и монтируем его на элемент с id `app`
const app = createApp({});
app.component('like-button', LikeButton);
app.mount('#app');
