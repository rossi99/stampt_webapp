<template>
    <!-- Vue templates need a <div> element to hold all content -->
    <div>
        <sidebar></sidebar>

        <div class="sb-content-container">
            <div class="sb-content">
                <!-- Card Builder Content-->
                <div class="title-container alignMiddle">
                    <div class="title">
                        stampt | dashboard
                    </div>
                </div>

                <div>Dashboard</div>
            </div>
        </div>

        <div class="clearFix"></div>
    </div>
</template>

<script>
import Sidebar from "../nav/sidebar";
import {mapState} from "vuex";

export default {
    components: {
        Sidebar
    },
    data() {
        return {
            loggedInUser: null,
            loading: false
        };
    },
    created() {
        const id = this.$store.getters.getUserId;
        console.log(id);
        this.loading = true;

        const request = axios.get(`/api/users/${id}`).then(response => {
            this.loggedInUser = response.data;
            this.loading = false;
        });
    },
    mounted: function () {
        console.log("mounted");
    },
};
</script>

<style scoped>
.sb-content-container {
    width: calc(100% - 80px);
    height: 100vh;
    float: left;
}

.sb-content {
    width: 95%;
    height: 100vh;
    margin: auto;
}

.title-container {
    width: 100%;
    height: 80px;
}

.auth-container {
    width: 100%;
    height: calc(100vh - 80px);
}

.auth-modal-align {
    width: 100%;
}

.auth-modal {
    width: 95%;
    max-width: 300px;
    margin: auto;
}

.auth-form {
    width: 95%;
    margin: auto;
}
</style>
