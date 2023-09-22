
import {createApp} from 'vue';

import NewsApp from './vue/NewsApp.vue';

import {Tabs, Tab} from 'vue3-tabs-component';

import InfiniteLoading from "v3-infinite-loading";

import "v3-infinite-loading/lib/style.css"; //required if you're not going to override default slots

const app = createApp(NewsApp);

app.component("infinite-loading", InfiniteLoading);
app.component('tabs', Tabs);
app.component('tab', Tab);
app.mount('#news');
