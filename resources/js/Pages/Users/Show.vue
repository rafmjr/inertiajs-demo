<template>
    <layout title="Single User">
        <div class="panel">
            <h2 class="panel-heading">View User</h2>
            <div class="section">
                <form @submit.prevent="submit">
                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input" type="text" v-model="user.name">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Email</label>
                    <div class="control">
                        <input class="input" type="email" v-model="user.email">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Member Since</label>
                    <div class="control">
                        <input class="input" type="text" disabled v-model="user.created_at">
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link">Submit</button>
                    </div>
                    <div class="control">
                        <button class="button is-link is-light">Cancel</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </layout>
</template>
<script>
    import Layout from "../Layout";

    export default {
        components: { Layout },
        props: {
            user: Object,
            update_url: String,
        },
        methods: {
            submit(e) {
                this.$inertia.put(this.update_url, this.user);
            }
        }
    }
</script>
