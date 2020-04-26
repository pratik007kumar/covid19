<template>
    <section class="content-wrapper" style="min-height: 960px;">
        <section class="content-header">
            <h1>Patient</h1>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <form @submit.prevent="submitForm" novalidate>
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Edit</h3>
                            </div>

                            <div class="box-body">
                                <back-buttton></back-buttton>
                            </div>

                            <bootstrap-alert />

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="first_name">First Name *</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            name="first_name"
                                            placeholder="Enter First Name *"
                                            :value="item.first_name"
                                            @input="updateFirst_name"
                                            >
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last name</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            name="last_name"
                                            placeholder="Enter Last name"
                                            :value="item.last_name"
                                            @input="updateLast_name"
                                            >
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            name="email"
                                            placeholder="Enter Email *"
                                            :value="item.email"
                                            @input="updateEmail"
                                            >
                                </div>
                                <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            name="mobile"
                                            placeholder="Enter Mobile"
                                            :value="item.mobile"
                                            @input="updateMobile"
                                            >
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            name="address"
                                            placeholder="Enter Address"
                                            :value="item.address"
                                            @input="updateAddress"
                                            >
                                </div>
                                <div class="form-group">
                                    <label for="pin">Pin *</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            name="pin"
                                            placeholder="Enter Pin *"
                                            :value="item.pin"
                                            @input="updatePin"
                                            >
                                </div>
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <input
                                            type="text"
                                            class="form-control"
                                            name="state"
                                            placeholder="Enter State"
                                            :value="item.state"
                                            @input="updateState"
                                            >
                                </div>
                            </div>

                            <div class="box-footer">
                                <vue-button-spinner
                                        class="btn btn-primary btn-sm"
                                        :isLoading="loading"
                                        :disabled="loading"
                                        >
                                    Save
                                </vue-button-spinner>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </section>
</template>


<script>
import { mapGetters, mapActions } from 'vuex'

export default {
    data() {
        return {
            // Code...
        }
    },
    computed: {
        ...mapGetters('PatientsSingle', ['item', 'loading']),
    },
    created() {
        this.fetchData(this.$route.params.id)
    },
    destroyed() {
        this.resetState()
    },
    watch: {
        "$route.params.id": function() {
            this.resetState()
            this.fetchData(this.$route.params.id)
        }
    },
    methods: {
        ...mapActions('PatientsSingle', ['fetchData', 'updateData', 'resetState', 'setFirst_name', 'setLast_name', 'setEmail', 'setMobile', 'setAddress', 'setPin', 'setState']),
        updateFirst_name(e) {
            this.setFirst_name(e.target.value)
        },
        updateLast_name(e) {
            this.setLast_name(e.target.value)
        },
        updateEmail(e) {
            this.setEmail(e.target.value)
        },
        updateMobile(e) {
            this.setMobile(e.target.value)
        },
        updateAddress(e) {
            this.setAddress(e.target.value)
        },
        updatePin(e) {
            this.setPin(e.target.value)
        },
        updateState(e) {
            this.setState(e.target.value)
        },
        submitForm() {
            this.updateData()
                .then(() => {
                    this.$router.push({ name: 'patients.index' })
                    this.$eventHub.$emit('update-success')
                })
                .catch((error) => {
                    console.error(error)
                })
        }
    }
}
</script>


<style scoped>

</style>
