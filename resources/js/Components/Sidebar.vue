<template>
    <div class="bg-gray-800 text-white w-64 flex-shrink-0"
        :class="{ 'hidden': !sidebarVisible, 'lg:block': sidebarVisible }">
        <div class="py-4 px-6">
            <h2 class="text-2xl font-semibold">Admin Panel</h2>
            <!-- Sidebar Navigation Links -->
            <ul class="mt-6">
                <li class="mb-4">
                    <a href="/dashboard" class="block text-gray-300 hover:text-white">
                        Dashboard
                    </a>
                </li>
                <li class="mb-4 mt-4">
                    <a href="/products" class="block text-gray-300 hover:text-white">
                        Products
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/categories" class="block text-gray-300 hover:text-white">
                        Categories
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/orders" class="block text-gray-300 hover:text-white">
                        Orders
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/services" class="block text-gray-300 hover:text-white">
                        Services
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/users" class="block text-gray-300 hover:text-white">
                        Users
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/owners" class="block text-gray-300 hover:text-white">
                        Owners
                    </a>
                </li>
                <!-- Add more sidebar links here -->
            </ul>
        </div>
    </div>
    <!-- Hamburger Menu -->
    <button @click="toggleSidebar" class="lg:hidden block text-gray-300 hover:text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
    </button>
</template>

<script setup>
import { ref } from 'vue';

const sidebarVisible = ref(true);

const toggleSidebar = () => {
    sidebarVisible.value = !sidebarVisible.value;
};
</script>

<style>
/* Styling for the hamburger menu button */
button {
    background: none;
    border: none;
    cursor: pointer;
}
</style>
