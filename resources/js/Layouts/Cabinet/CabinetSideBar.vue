<script setup>

import {ref} from "vue";
import CabinetMenuItem from "@/Layouts/Cabinet/CabinetMenuItem.vue";

const model = ref([
    {
        label: 'Тест',
        items: [{label: 'Тест', icon: 'pi pi-fw pi-home', to: route('home')}]
    },
    {
        label: 'Тест',
        items: [
            {label: 'Тест', icon: 'pi pi-fw pi-globe', to: route('home')},
            {label: 'Тест', icon: 'pi pi-fw pi-building-columns', to: route('home')},
            {label: 'Тест', icon: 'pi pi-fw pi-id-card', to: route('home')},
            {label: 'Тест', icon: 'pi pi-fw pi-address-book', to: route('home')},
            {label: 'Тест', icon: 'pi pi-fw pi-wallet', to: route('home')},
        ]
    },
]);

</script>

<template>
    <ul class="layout-menu">
        <template v-for="(item, i) in model" :key="item">
            <CabinetMenuItem v-if="!item.separator" :item="item" :index="i"></CabinetMenuItem>
            <li v-if="item.separator" class="menu-separator"></li>
        </template>
    </ul>
</template>

<style scoped>

</style>
