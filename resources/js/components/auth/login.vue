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

                            <div class="intro-container">
                                <div class="create-container">
                                    Welcome back to stampt!
                                </div>

                                <div class="or-container">
                                    OR
                                </div>

                                <div class="login-container">
                                    If you dont have an account, register <router-link :to="{ name: 'register' }" class="email-link">here</router-link>
                                </div>
                            </div>

                            <div class="auth-form">
                                <!-- Account Type Selector -->
                                <div class="account-data">

                                    <!-- Email -->
                                    <div class="label-container">
                                        Email:
                                    </div>

                                    <div class="input-container">
                                        <div class="stampt-input-container">
                                            <input type="email" id="email" name="email" class="stampt-input" placeholder="Your email...">
                                        </div>
                                    </div>

                                    <!-- Password -->
                                    <div class="label-container">
                                        Password:
                                    </div>

                                    <div class="input-container">
                                        <div class="stampt-input-container">
                                            <div class="reveal-container">
                                                <div class="password-input">
                                                    <input type="password" id="password" name="password" class="stampt-input" placeholder="Your password...">
                                                </div>

                                                <div class="reveal-btn-container alignMiddle">
                                                    <div class="reveal-align">
                                                        <font-awesome-icon icon="fa-solid fa-eye" class="reveal" id="reveal-password" />
                                                    </div>
                                                </div>

                                                <div class="clearFix"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Submit button -->
                                    <div class="submit-container">
                                        <button type="submit" class="submit-btn">
                                            Login
                                        </button>
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
        // ~ Password Reveal
        let revealBtn = $('#reveal-password');
        let passwordInput = $('#password');

        // Functions
        // ~ Set defaults
        function setDefaults() {

        }

        // ~ Reveal Password
        function revealPassword() {
            if (passwordInput.attr('type', 'password')) {
                passwordInput.attr('type', 'text');
            } else {
                passwordInput.attr('type', 'password');
            }
        }

        // Calling Functions
        // ~ Calling default function
        $(document).ready(function () {
            setDefaults();
        });

        // ~ Reveal Password
        revealBtn.click(function () {
            revealPassword();
        });
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
    max-width: 450px;
    margin: auto;
    position: relative;
}

.intro-container {
    width: 95%;
    margin: auto;
    margin-block-start: 40px;
    margin-block-end: 20px;
}

.create-container {
    width: 100%;
    text-align: center;
}

.or-container {
    width: 100%;
    text-align: center;
    font-size: 12px;
    color: grey;
    margin-block: 5px;
}

.login-container {
    width: 100%;
    text-align: center;
}

.auth-form {
    width: 90%;
    max-height: 400px;
    overflow: scroll;
    margin: auto;
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

.account-data {
    width: 100%;
    margin-block-end: 15px;
}

.input-container {
    width: 100%;
    margin-block: 15px;
}

.label-container {
    margin-block-start: 40px;
}

.label-container:first-child {
    margin-block-start: 0;
}

.reveal-container {
    width: 100%;
}

.password-input {
    width: 85%;
    float: left;
}

.reveal-btn-container {
    width: 15%;
    height: 45px;
    float: right;
}

.reveal-align {
    width: 100%;
    height: 16px;
    text-align: center;
}

.reveal {
    font-size: 16px;
    color: rgba(255, 255, 255, 0.125);
    transition: all 0.2s;
}

.reveal:hover {
    cursor: pointer;
    color: white;
}

.submit-container {
    width: 100%;
    margin-block: 40px;
    text-align: center;
}

.submit-btn {
    width: 50%;
    height: 40px;
    border: 1px solid rgba(255, 255, 255, 0.125);
    border-radius: 10px;
    background: #141414;
    color: rgba(255, 255, 255, 0.125);
    letter-spacing: 2px;
    transition: all 0.2s;
}

.submit-btn:hover {
    cursor: pointer;
    border: 1px solid white;
    color: white;
}
</style>
