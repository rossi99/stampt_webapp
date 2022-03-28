<template>
    <!-- Vue templates need a <div> element to hold all content -->
    <div>
        <sidebar></sidebar>

        <div class="sb-content-container">
            <div class="sb-content">
                <!-- Card Builder Content-->
                <div class="title-container alignMiddle">
                    <div class="title">
                        stampt | register
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
                                        Select account type:
                                    </div>

                                    <div class="input-container">
                                        <!-- For customers -->
                                        <div class="account-select alignMiddle" id="customer-select">
                                            <div class="option-align">
                                                <!-- Btn -->
                                                <div class="radio-btn-container">
                                                    <font-awesome-icon icon="fa-solid fa-circle" class="opt-dot" id="customer-dot" />
                                                </div>

                                                <!-- Label -->
                                                <div class="radio-btn-value">
                                                    <span>Customer</span>
                                                </div>

                                                <div class="clearFix"></div>
                                            </div>
                                        </div>

                                        <!-- For businesses -->
                                        <div class="account-select alignMiddle" id="business-select">
                                            <div class="option-align">
                                                <!-- Btn -->
                                                <div class="radio-btn-container">
                                                    <font-awesome-icon icon="fa-solid fa-circle" class="opt-dot" id="business-dot" />
                                                </div>

                                                <!-- Label -->
                                                <div class="radio-btn-value">
                                                    <span>Business</span>
                                                </div>

                                                <div class="clearFix"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Name -->
                                    <div class="input-container">
                                        <div class="stampt-input-container">
                                            <input type="text" id="full-name" class="stampt-input" placeholder="Name">
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="input-container">
                                        <div class="stampt-input-container">
                                            <input type="email" id="email" class="stampt-input" placeholder="Email">
                                        </div>
                                    </div>

                                    <!-- Password -->
                                    <div class="input-container">
                                        <div class="stampt-input-container">
                                            <div class="reveal-container">
                                                <div class="password-input">
                                                    <input type="password" id="password" class="stampt-input" placeholder="Password">
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

                                    <!-- Confirm Password -->
                                    <div class="input-container">
                                        <div class="stampt-input-container">
                                            <input type="password" id="confirm-password" class="stampt-input" placeholder="Re-enter Password">
                                        </div>
                                    </div>

                                    <!-- Contact number -->
                                    <div class="input-container">
                                        <div class="stampt-input-container">
                                            <input type="number" id="contact-number" class="stampt-input" placeholder="Contact Number">
                                        </div>
                                    </div>

                                    <!-- Address Line 1 -->
                                    <div class="input-container">
                                        <div class="stampt-input-container">
                                            <input type="text" id="address-one" class="stampt-input" placeholder="Address Line 1">
                                        </div>
                                    </div>

                                    <!-- Address Line 2 ( Optional )-->
                                    <div class="input-container">
                                        <div class="stampt-input-container">
                                            <input type="text" id="address-two" class="stampt-input" placeholder="Address Line 2 (Optional)">
                                        </div>
                                    </div>

                                    <!-- Country / State -->
                                    <div class="input-container">
                                        <div class="stampt-input-container">
                                            <input type="text" id="state" class="stampt-input" placeholder="County / State">
                                        </div>
                                    </div>

                                    <!-- Post / Zip Code -->
                                    <div class="input-container">
                                        <div class="stampt-input-container">
                                            <input type="text" id="code" class="stampt-input" placeholder="Zip / Postcode">
                                        </div>
                                    </div>

                                    <!-- Submit button -->
                                    <div class="submit-container">
                                        <button type="submit" class="submit-btn">
                                            Create Account
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
    color: rgba(255, 255, 255, 0.125);
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
    margin-block: 20px;
    text-align: center;
}

.submit-btn {
    width: 70%;
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
