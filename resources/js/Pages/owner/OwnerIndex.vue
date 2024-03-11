<template>
    <div>
        <h2>Daftar Pemilik</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="owner in owners" :key="owner.id">
                    <td>{{ owner.nama }}</td>
                    <td>{{ owner.email }}</td>
                    <td>
                        <button @click="editOwner(owner)">Edit</button>
                        <button @click="deleteOwner(owner.id)">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            owners: [],
        };
    },
    mounted() {
        this.fetchOwners();
    },
    methods: {
        fetchOwners() {
            axios.get('/api/owners')
                .then(response => {
                    this.owners = response.data;
                })
                .catch(error => {
                    console.error('Error fetching owners:', error);
                });
        },
        editOwner(owner) {
            // Redirect or show edit form for owner
            // Example: this.$router.push(`/owners/${owner.id}/edit`);
        },
        deleteOwner(ownerId) {
            if (confirm('Apakah Anda yakin ingin menghapus pemilik ini?')) {
                axios.delete(`/api/owners/${ownerId}`)
                    .then(() => {
                        this.owners = this.owners.filter(owner => owner.id !== ownerId);
                    })
                    .catch(error => {
                        console.error('Error deleting owner:', error);
                    });
            }
        }
    }
};
</script>

<style scoped>
/* Styling for your component */
</style>
