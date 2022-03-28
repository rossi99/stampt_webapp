<template>
    <!-- Vue templates need a <div> element to hold all content -->
    <div>
        <sidebar></sidebar>

        <div class="sb-content-container">
            <div class="sb-content">
                <!-- Card Builder Content-->
                <div class="title-container alignMiddle">
                    <div class="title">
                        stampt | password reset
                    </div>
                </div>

                <div class="auth-container alignMiddle">
                    <div class="auth-modal-align">
                        <div class="auth-modal dark-glass-effect">
                            <div class="auth-form">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearFix"></div>
    </div>
</template>

<script>
import Sidebar from "../nav/sidebar";

export default {
    components: {
        Sidebar
    },
    mounted: function () {

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
