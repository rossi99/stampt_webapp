<template>
    <!-- Vue templates need a <div> element to hold all content -->
    <div>
        <!-- Landing has 2 detail panels and then main info-graphic -->
        <div class="panel-container">
            <!-- socials -->
            <div class="panel-social-links">
                <div class="icon-container subtitle">
                    <font-awesome-icon icon="fa-brands fa-facebook" class="icon" />
                </div>

                <div class="icon-container subtitle">
                    <font-awesome-icon icon="fa-brands fa-twitter" class="icon" />
                </div>

                <div class="icon-container subtitle">
                    <font-awesome-icon icon="fa-brands fa-instagram" class="icon" />
                </div>
            </div>

            <div class="panel-line-container">
                <div class="panel-line" style="height: 40px; margin-block: 15px;"></div>
            </div>

            <div class="panel-txt">
                <div class="subtitle" style="transform: rotate(180deg);">follow us</div>
            </div>
        </div>

        <div class="info-graphic-container">
            <!-- Info-graphic showing user image and tagline -->
            <div class="infographic-content">
                <div class="info-txt-container alignMiddle" style="letter-spacing: 15px">
                    <div id="txt-align" style="width: 100%; text-align: center;">
                        <div class="tagline" style="font-family: 'Bebas Neue', cursive;">
                            less stressing
                        </div>

                        <div class="tagline-plus" style="font-family: 'Bebas Neue', cursive; margin-block-end: 10px;">
                            more rewarding
                        </div>

                        <div class="subtitle sub-tagline" style="font-family: 'Bebas Neue', cursive; letter-spacing: 6px;">
                            The Last Loyalty Solution You Will Ever Need...
                        </div>

                        <div class="btn-container btn-spacing" style="letter-spacing: 2px;">
                            <div class="btn" style="width: 30%;">
                               <div class="btn-txt">
                                   Join Today
                               </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="info-img-container alignMiddle">
                    <div id="img-align" style="margin: auto;">
                        <img src="/img/landing/infographic.png" alt="Rewards Screen" class="info-img">
                    </div>
                </div>

                <div class="clearFix"></div>
            </div>
        </div>

        <div class="panel-container">
            <!-- Developed by panel -->
            <div class="panel-line-container">
                <div class="panel-line" style="height: 50px; margin-block-start: 10px; margin-block-end: 20px;"></div>
            </div>

            <div class="panel-txt">
                <div class="subtitle" style="transform: rotate(0deg);">digitalcore software</div>
            </div>

            <div class="panel-line-container">
                <div class="panel-line" style="height: 50px; margin-block-start: 20px;"></div>
            </div>
        </div>

        <div class="clearFix"></div>
    </div>
</template>

<script>
export default {
    name: "landing"
}
</script>

<style scoped>
/* Panel Data */
.panel-container {
    width: 4%;
    height: calc(100vh - 80px);
    float: left;
    color: grey;
}

.panel-txt {
    width: 100%;
    height: auto;
    display: flex;
    align-items: center;
    writing-mode: vertical-lr;
    font-variant: small-caps;
}

.panel-line-container {
    width: 100%;
}

.panel-line {
    width: 1px;
    margin: auto;
    background: grey;
}

.icon-container {
    width: 100%;
    text-align: center;
    margin-block: 10px;
}

.icon {
    transition: all 0.2s;
}

.icon:hover {
    color: white;
    cursor: pointer;
}

.info-graphic-container {
    width: 92%;
    height: calc(100vh - 80px);
    float: left;
}

.infographic-content {
    width: 100%;
    height: 100%;
}

.info-txt-container {
    width: 65%;
    height: 100%;
    float: left;
}

.btn-spacing {
    margin-block-start: 60px;
}

.info-img-container {
    width: 35%;
    height: 100%;
    float: left;
    text-align: center;
}

.info-img {
    height: 550px;
}

/* Responsive */
@media only screen and (max-width: 900px) {
    .panel-container {
        display: none;
    }

    .info-graphic-container {
        width: 100%;
    }

    .sub-tagline {
        display: none;
    }

    .info-img {
        height: 400px;
    }

    .info-txt-container {
        width: 100%;
        height: auto;
        margin-block-end: 50px;
    }

    .info-img-container {
        width: 100%;
        height: auto;
    }

    .btn-spacing {
        margin-block-start: 20px;
    }
}
</style>
