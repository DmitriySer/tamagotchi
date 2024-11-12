<template>
    <div>
        <h3 class="text-lg font-semibold mb-4">Список пользователей</h3>
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
            <tr>
                <th class="px-4 py-2 border-b text-left">ID</th>
                <th class="px-4 py-2 border-b text-left">Имя</th>
                <th class="px-4 py-2 border-b text-left">Email</th>
                <th class="px-4 py-2 border-b text-left">Проверка Email</th>
                <th class="px-4 py-2 border-b text-left">Создан</th>
                <th class="px-4 py-2 border-b text-left">Роль</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="user in users" :key="user.id" class="border-b hover:bg-gray-100">
                <td class="px-4 py-2">{{ user.id }}</td>
                <td class="px-4 py-2">{{ user.name }}</td>
                <td class="px-4 py-2">{{ user.email }}</td>
                <td class="px-4 py-2">
                    {{ user.email_verified_at ? 'Да' : 'Нет' }}
                </td>
                <td class="px-4 py-2">{{ new Date(user.created_at).toLocaleDateString() }}</td>
                <td class="px-4 py-2">{{ user.role }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script setup>
import { defineProps } from 'vue';

const props = defineProps({
    users: Array,
});
</script>

<style scoped>
table {
    width: 100%;
    border-collapse: collapse;
}

th {
    background-color: #f3f4f6;
    font-weight: 600;
    color: #374151;
}

td, th {
    padding: 0.75rem 1rem;
}
</style>
