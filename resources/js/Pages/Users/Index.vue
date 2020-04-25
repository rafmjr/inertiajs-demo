<template>
    <layout title="Users Index">
        <div class="panel">
            <h2 class="panel-heading">
                Users
            </h2>
            <div class="panel-block">
                <div style="flex: 1;">
                    <table class="table is-fullwidth">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Since</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="user in users">
                                <td>{{user.id}}</td>
                                <td>{{user.name}}</td>
                                <td>{{user.email}}</td>
                                <td>{{user.created_at}}</td>
                                <td>
                                    <inertia-link :href="user.edit_url" class="button is-info">View</inertia-link>
                                    <button class="button is-danger">Delete</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </layout>
</template>

<script>
    import Layout from '../Layout'

    export default {
        components: {
            Layout,
        },
        props: {
            users: Array,
            create_url: String,
        },
    }
</script>
