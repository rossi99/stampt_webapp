<template>
    <!-- Vue templates need a <div> element to hold all content -->
    <div>
        <!-- Desktop Header -->
        <div class="nav-container desktop-nav alignMiddle">
            <div class="nav-content">
                <div class="logo-container">
                    <router-link :to="{ name: 'home' }" class="title logo" style="text-decoration: none; color: white;">stampt</router-link>
                </div>

                <div class="links-container alignMiddle">
                    <div class="option-container">
                        <div class="nav-option-container subtitle">
                            <!-- The `to=` holds the path of link that is declared in `routes.js` -->
                            <router-link :to="{ name: 'builder' }" class="nav-option">builder</router-link>
                        </div>

                        <div class="nav-option-container subtitle">
                            <router-link :to="{ name: 'marketplace' }" class="nav-option">marketplace</router-link>
                        </div>

                        <div class="nav-option-container subtitle">
                            <router-link :to="{ name: 'faqs' }" class="nav-option">help</router-link>
                        </div>
                    </div>
                </div>

                <div class="action-container alignMiddle">
                    <div class="auth-container subtitle">
                        <router-link :to="{ name: 'login' }" class="auth-btn">
                            <div class="auth-btn-container">
                                <span class="auth-btn-text">login</span>
                            </div>
                        </router-link>
                    </div>
                </div>

                <div class="clearFix"></div>
            </div>
        </div>

        <!-- Mobile Header -->
        <div class="nav-container mobile-nav alignMiddle">
            <div class="mobile-nav-content">
                <!-- Logo container -->
                <div class="mobile-nav-logo-container">
                    <span class="title logo">stampt</span>
                </div>

                <!-- Menu container -->
                <div class="mobile-nav-menu-container">
                    <div class="mobile-nav-menu-action">
                        <div class="mobile-nav-menu-btn-container">
                            <div class="mobile-nav-menu-btn">
                                <!-- Vue FontAwesome Icon call -->
                                <font-awesome-icon icon="fa-solid fa-bars" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- pop-up menu -->
                <div class="pop-menu-container dark-glass-effect">
                    <!-- List Items -->
                    <div class="menu-link-container">
                        <div class="menu-option-container">
                            <div class="menu-option subtitle">
                                <!-- Provider by Vue router library -->
                                <router-link :to="{ name: 'home' }" class="nav-option">home</router-link> <!-- The `to=` holds the path of link that is delcared in `routes.js` -->
                            </div>
                        </div>

                        <div class="menu-option-container">
                            <div class="menu-option subtitle">
                                <!-- Provider by Vue router library -->
                                <router-link :to="{ name: 'builder' }" class="nav-option">builder</router-link> <!-- The `to=` holds the path of link that is delcared in `routes.js` -->
                            </div>
                        </div>

                        <div class="menu-option-container">
                            <div class="menu-option subtitle">
                                <router-link :to="{ name: 'home' }" class="nav-option">marketplace</router-link>
                            </div>
                        </div>

                        <div class="menu-option-container">
                            <div class="menu-option subtitle">
                                <router-link :to="{ name: 'home' }" class="nav-option">help</router-link>
                            </div>
                        </div>

                        <div class="menu-option-container">
                            <div class="menu-option subtitle">
                                <router-link :to="{ name: 'home' }" class="nav-option">login</router-link>
                            </div>
                        </div>

                        <div class="menu-option-container">
                            <div class="menu-option subtitle">
                                <router-link :to="{ name: 'home' }" class="nav-option">contact</router-link>
                            </div>
                        </div>

                        <div class="menu-option-container">
                            <div class="beta-txt-container">
                                <div class="beta-txt small-txt">
                                    <p>VERSION: DEV (0.0.1)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Close btn -->
                    <div class="menu-close-container">
                        <div class="close-menu-btn-container">
                            <div class="close-menu-btn">
                                <!-- Vue FontAwesome Icon call -->
                                <font-awesome-icon icon="fa-solid fa-xmark" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearFix"></div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted () {
            $(document).ready(function () {
                $('.mobile-nav-menu-btn').click(function () {
                    // fading in menu
                    let popUpMenu = $('.pop-menu-container')
                    let menuBars = $('.mobile-nav-menu-btn')
                    popUpMenu.fadeIn(250);
                    menuBars.fadeOut();
                });

                $('.close-menu-btn').click(function () {
                    // fading in menu
                    let popUpMenu = $('.pop-menu-container')
                    let menuBars = $('.mobile-nav-menu-btn')
                    popUpMenu.fadeOut(250);
                    menuBars.fadeIn();
                });

                $('.menu-option').click(function () {
                    // fading in menu
                    let popUpMenu = $('.pop-menu-container')
                    let menuBars = $('.mobile-nav-menu-btn')
                    popUpMenu.fadeOut(250);
                    menuBars.fadeIn();
                });
            });
        }
    };
</script>

<style scoped>
/* Hiding Small Nav Bar */
.mobile-nav {
    display: none;
}

/* Navbar container */
.nav-container {
    width: 100%;
    height: 80px;
}

.nav-content {
    width: 100%;
}

/* Logo Content */
.logo-container {
    width: 15%;
    float: left;
}

.logo {
    font-family: 'Comfortaa', cursive;
}

/* Nav Links */
.links-container {
    width: 70%;
    height: 40px;
    float: left;
}

.option-container {
    width: 100%;
    text-align: center;
}

.nav-option-container {
    width: calc(100% / 3);
    float: left;
}

.nav-option {
    text-decoration: none;
    font-variant: small-caps;
    color: grey;
    transition: all 0.2s;
}

.nav-option:hover {
    cursor: pointer;
    color: white;
}


/* Auth Content */
.action-container {
    width: 15%;
    height: 40px;
    float: left;
}

.auth-container {
    width: 100%;
    text-align: right;
}

.auth-btn-container {
    width: 50%;
    float: right;
    border: 1px white solid;
    border-radius: 15px;
    text-align: center;
    background: white;
    text-decoration: none;
    color: #141414;
    font-variant: small-caps;
}

.auth-btn:hover {
    cursor: pointer;
}

/* Mobile Design */
@media only screen and (max-width: 900px) {
    .mobile-nav {
        display: block;
    }

    .desktop-nav {
        display: none;
    }
}

.mobile-nav-content {
    width: 100%;
    height: 80px;
    margin: auto;
    position: relative;
}

.mobile-nav-logo-container {
    float: left;
    width: 80%;
    height: 70px;
    text-align: left;
    display: flex;
    align-items: center;
}

.mobile-nav-menu-container {
    float: right;
    width: 20%;
    height: 70px;
    text-align: right;
    display: flex;
    align-items: center;
}

.mobile-nav-menu-action {
    width: 100%;
    text-align: right;
}

.mobile-nav-menu-btn-container {
    width: 25px;
    float: right;
}

.mobile-nav-menu-btn {
    font-size: 22.5px;
}

.mobile-nav-menu-btn:hover {
    cursor: pointer;
}

.pop-menu-container {
    position: absolute;
    top: 17px;
    right: 0;
    width: 225px;
    z-index: 2000;
    border-radius: 10px;

    display: none;
}

.menu-link-container {
    width: 85%;
    float: left;
}

.menu-close-container {
    width: 15%;
    float: right;
}

.close-menu-btn-container {
    width: 100%;
    height: 42.5px;
    display: flex;
    align-items: center;
}

.close-menu-btn {
    width: 100%;
    text-align: center;
    font-size: 22.5px;
}

.close-menu-btn:hover {
    cursor: pointer;
}

.menu-option-container {
    width: 100%;
    height: 50px;
    display: flex;
    align-items: center;
}

.beta-txt-container {
    width: 100%;
    height: 20px;
    display: flex;
    align-items: center;
}

.menu-option {
    width: 100%;
    text-align: center;
}

.beta-txt {
    width: 100%;
    text-align: center;
    font-weight: 300;
    color: grey;
}
</style>
