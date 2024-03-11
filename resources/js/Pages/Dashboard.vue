<template>
    <div>
        <Head title="Dashboard" />

        <AuthenticatedLayout>
            <!-- Sidebar -->
            <div class="flex">
                <!-- Sidebar -->
                <Sidebar />
                <!-- Main Content -->
                <div class="flex-1">
                    <!-- Page Content -->
                    <div class="py-12 px-8">
                        <!-- Your existing content goes here -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                            <!-- Add more admin widgets or statistics here -->
                            <div class="bg-white p-6 rounded-lg shadow">
                                <h3 class="text-lg font-semibold mb-2">Total Users</h3>
                                <p class="text-gray-700 text-xl">1000</p>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow">
                                <h3 class="text-lg font-semibold mb-2">Total Orders</h3>
                                <p class="text-gray-700 text-xl">500</p>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow">
                                <h3 class="text-lg font-semibold mb-2">Revenue</h3>
                                <p class="text-gray-700 text-xl">$10,000</p>
                            </div>
                            <div class="bg-white p-6 rounded-lg shadow">
                                <h3 class="text-lg font-semibold mb-2">Pending Requests</h3>
                                <p class="text-gray-700 text-xl">10</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    </div>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Sidebar from '@/Components/Sidebar.vue';
import { Head } from '@inertiajs/vue3';
</script>
