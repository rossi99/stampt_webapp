<template>
    <div>
        <div class="sidebar-container alignMiddle">
            <div class="sidebar">
                <!-- Logo -->
                <div class="sb-logo-container">
                    <div class="sb-logo-bg alignMiddle">
                        <div class="sb-logo-align">
                            <router-link :to="{ name: 'home' }">
                                <img src="/img/logo/compressed/small-icon.png" alt="Stampt Logo" class="logo-btn">
                            </router-link>
                        </div>
                    </div>
                </div>

                <!-- Card Btn -->
                <div class="sb-btn-container alignMiddle">
                    <div class="sb-btn-align">
                        <router-link :to="{ name: 'builder' }" class="sb-option">
                            <font-awesome-icon icon="fa-solid fa-credit-card" />
                        </router-link>
                    </div>
                </div>

                <!-- Marketplace -->
                <div class="sb-btn-container alignMiddle">
                    <div class="sb-btn-align">
                        <router-link :to="{ name: 'marketplace' }" class="sb-option">
                            <font-awesome-icon icon="fa-solid fa-store" />
                        </router-link>
                    </div>
                </div>

                <!-- FAQs -->
                <div class="sb-btn-container alignMiddle">
                    <div class="sb-btn-align">
                        <router-link :to="{ name: 'faqs' }" class="sb-option">
                            <font-awesome-icon icon="fa-solid fa-circle-question" />
                        </router-link>
                    </div>
                </div>

                <!-- User -->
                <div class="sb-btn-container alignMiddle">
                    <div class="sb-btn-align">
                        <router-link :to="{ name: 'login' }" class="sb-option">
                            <font-awesome-icon icon="fa-solid fa-user" />
                        </router-link>
                    </div>
                </div>

                <div class="clearFix"></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "sidebar"
}
</script>

<style scoped>
.sidebar-container {
    width: 80px;
    height: 100vh;
    float: left;
    z-index: 1000;
}

.sidebar {
    width: 100%;
    background: #111111;
    border-top-right-radius: 12px;
    border-bottom-right-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.125);
}

.sb-btn-container {
    width: 100%;
    height: 80px;
}

.sb-logo-container {
    width: 100%;
    height: 40px;
    position: relative;
}

.sb-btn-align {
    width: 100%;
    text-align: center;
    font-size: 17px;
}

.sb-logo-bg {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border-bottom: 1px solid rgba(255, 255, 255, 0.125);
    background: #141414;
    position: absolute;
    top: 0;
    left: 50%;
    transform: translate(-50%, -50%);
}

.sb-logo-align {
    width: 100%;
    height: 50px;
    text-align: center;
}

.logo-btn {
    width: 47px;
    height: 47px;
}

.sb-option {
    color: grey;
    transition: all 0.2s;
}

.sb-option:hover {
    color: white;
    cursor: pointer;
}

/* Mobile Design */
@media only screen and (max-width: 700px) {
    .sidebar-container {
        height: 55px;
        width: 100%;
        position: fixed;
        bottom: 0;
    }

    .sidebar {
        width: 100%;
        max-width: 450px;
        margin: auto;
        border-top-right-radius: 12px;
        border-top-left-radius: 12px;
        border-bottom-right-radius: 0;
    }

    .sb-logo-container {
        width: calc(100% / 5);
        float: left;
    }

    .sb-btn-container {
        width: calc(100% / 5);
        float: left;
        height: 55px;
    }
}
</style>
