<template>
    <!-- Vue templates need a <div> element to hold all content -->
    <div>
        <sidebar></sidebar>

        <div class="sb-content-container">
            <div class="sb-content">
                <!-- Card Builder Content-->
                <div class="title-container alignMiddle">
                    <div class="title">
                        stampt | login
                    </div>
                </div>

                <div class="auth-container alignMiddle">
                    <div class="auth-modal-align">
                        <div class="auth-modal dark-glass-effect">
                            <!-- Logo -->
                            <div class="logo-container">
                                <img src="/img/logo/compressed/small-icon.png" alt="Stampt Logo" class="logo">
                            </div>

                            <div class="auth-form">
                                <!-- Account Type Selector -->
                                <div class="account-pick">
                                    <div class="label-container">
                                        Email:
                                    </div>

                                    <div class="input-container">

                                    </div>
                                </div>
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
        // Variables for login
        // ~ Account Pick
        let customerOpt = $('#customer-select');
        let businessOpt = $('#business-select');
        let customerBtnActive = $('#customer-active');
        let customerBtnInactive = $('#customer-inactive');
        let businessBtnActive = $('#business-active');
        let businessBtnInactive = $('#business-inactive');

        // Setting Up Defaults
        // ~ Calling default function
        $(document).ready(function () {
            setDefaults();
        });

        // Functions
        // ~ Set defaults
        function setDefaults() {
            // ~ Setting Active options
            customerBtnActive.show();
            businessBtnInactive.show();
        }
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
    position: relative;
}

.auth-form {
    width: 90%;
    max-height: 450px;
    overflow: scroll;
    margin: auto;
    margin-block-start: 40px;
}

.logo-container {
    width: 100%;
    height: 70px;
    text-align: center;
    position: absolute;
    transform: translate(-50%, -50%);
    top: 0;
    left: 50%;
}

.logo {
    width: 70px;
}

.account-pick {
    width: 100%;
    margin-block: 15px;
}

.account-select {
    width: 100%;
    height: 30px;
    margin-block: 5px;
    transition: all 0.2s;
}

.account-select:hover {
    cursor: pointer;
    color: white;
}

.option-align {
    width: 100%;
}

.input-container {
    width: 100%;
    margin-block: 15px;
}

.radio-btn-container {
    width: 45px;
    float: left;
    text-align: center;
}

.radio-btn-value {
    width: calc(100% - 45px);
    float: left;
}

.opt-dot {
    display: none;
}
</style>
