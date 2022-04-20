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

                            <div class="intro-container">
                                <div class="create-container">
                                    Welcome to stampt, lets create your account!
                                </div>

                                <div class="or-container">
                                    OR
                                </div>

                                <div class="login-container">
                                    You can login <router-link :to="{ name: 'login' }" class="email-link">here</router-link>
                                </div>
                            </div>

                            <div class="auth-form">
                                <!-- Account Type Selector -->
                                <div class="account-data">
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

                                    <!-- Account Type -->
                                    <input type="hidden" id="account-type" name="accountType">

                                    <!-- Avatar -->
                                    <div class="label-container">
                                        Profile Picture:
                                    </div>

                                    <div class="input-container">
                                        <div class="stampt-input-container alignMiddle">
                                            <input
                                                type="file"
                                                name="avatarImg"
                                                id="avatar"
                                                class="stampt-input-file"
                                                v-on:change="newUser.avatarSrc"
                                            >
                                        </div>
                                    </div>

                                    <!-- Name -->
                                    <div class="label-container">
                                        Full Name:
                                    </div>

                                    <div class="input-container">
                                        <div class="stampt-input-container">
                                            <input type="text"
                                                   name="fullName"
                                                   id="full-name"
                                                   class="stampt-input"
                                                   placeholder="Joe Bloggs"
                                                   v-model="newUser.fullName"
                                            >
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="label-container">
                                        Email:
                                    </div>

                                    <div class="input-container">
                                        <div class="stampt-input-container">
                                            <input type="email"
                                                   name="email"
                                                   id="email"
                                                   class="stampt-input"
                                                   placeholder="example@email.com"
                                                   v-model="newUser.email"
                                            >
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
                                                    <input type="password"
                                                           name="password"
                                                           id="password"
                                                           class="stampt-input"
                                                           placeholder=""
                                                           v-model="newUser.password"
                                                    >
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

                                    <!-- Contact number -->
                                    <div class="label-container">
                                        Contact Number:
                                    </div>

                                    <div class="input-container">
                                        <div class="stampt-input-container">
                                            <input type="tel"
                                                   id="contact-number"
                                                   name="phone"
                                                   class="stampt-input"
                                                   pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                                   placeholder="+(00) 0000000000"
                                                   v-model="newUser.contactNumber"
                                            >
                                        </div>
                                    </div>

                                    <!-- Address Line 1 -->
                                    <div class="label-container">
                                        Address:
                                    </div>

                                    <div class="input-container">
                                        <div class="stampt-input-container">
                                            <input type="text"
                                                   name="addressLine1"
                                                   id="address-one"
                                                   class="stampt-input"
                                                   placeholder="Address Line 1"
                                                   v-model="newUser.addressLineOne"
                                            >
                                        </div>
                                    </div>

                                    <!-- Address Line 2 ( Optional )-->
                                    <div class="input-container">
                                        <div class="stampt-input-container">
                                            <input type="text"
                                                   name="addressLine2"
                                                   id="address-two"
                                                   class="stampt-input"
                                                   placeholder="Address Line 2 (Optional)"
                                                   v-model="newUser.addressLineTwo"
                                            >
                                        </div>
                                    </div>

                                    <!-- Country / State -->
                                    <div class="input-container">
                                        <div class="stampt-input-container">
                                            <input type="text"
                                                   name="state"
                                                   id="state"
                                                   class="stampt-input"
                                                   placeholder="County / State"
                                                   v-model="newUser.addressState"
                                            >
                                        </div>
                                    </div>

                                    <!-- Post / Zip Code -->
                                    <div class="input-container">
                                        <div class="stampt-input-container">
                                            <input type="text"
                                                   name="zipcode"
                                                   id="code"
                                                   class="stampt-input"
                                                   placeholder="Zip / Postcode"
                                                   v-model="newUser.addressCode"
                                            >
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
    data() {
        return {
            // Form ( Dynamic )
            newUser: {
                accountType: "customer",
                avatarSrc: "",
                fullName: "",
                email: "",
                password: "",
                contactNumber: "",
                addressLineOne: "",
                addressLineTwo: "",
                addressState: "",
                addressCode: "",
            },

            // loading & error handling
            loading: false,
            error: false
        };
    },
    mounted: function () {
        // Variables for login
        // ~ Account Pick
        let customerSelect = $('#customer-select');
        let businessSelect = $('#business-select');
        let accountInput = $('#account-type');

        // ~ Password Reveal
        let revealBtn = $('#reveal-password');
        let passwordInput = $('#password');

        // Functions
        // ~ Set defaults
        function setDefaults() {
            customerSelect.css("color" , "white");
            accountInput.val("customer");
        }

        // ~ Reveal Password
        function revealPassword() {
            if (passwordInput.attr('type', 'password')) {
                passwordInput.attr('type', 'text');
            } else {
                passwordInput.attr('type', 'password');
            }
        }

        // ~ Set account as business
        function setCustomerAcc() {
            businessSelect.css("color" , "rgba(255, 255, 255, 0.125)");
            customerSelect.css("color" , "white");
            accountInput.val("customer");
        }

        // ~ Set account as business
        function setBusinessAcc() {
            customerSelect.css("color" , "rgba(255, 255, 255, 0.125)");
            businessSelect.css("color" , "white");
            accountInput.val("business");
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

        // ~ Set Customer Account
        customerSelect.click(function () {
            setCustomerAcc();
            console.log(accountInput.val());
        });

        // ~ Set Business Account
        businessSelect.click(function () {
            setBusinessAcc();
            console.log(accountInput.val());
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

.label-container {
    margin-block-start: 40px;
}

.label-container:first-child {
    margin-block-start: 0;
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
