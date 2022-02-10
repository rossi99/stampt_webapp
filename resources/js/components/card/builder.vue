<template>
    <!-- Vue templates need a <div> element to hold all content -->
    <div>
        <sidebar></sidebar>



<!--        <div class="opts-container alignMiddle">-->
<!--            <div class="opts-panel">-->
<!--                <div class="panel-heading-container alignMiddle">-->
<!--                    <div class="panel-heading">Card Options</div>-->
<!--                    <div class="icon-btn">-->
<!--                        <font-awesome-icon icon="fa-solid fa-circle-question" class="helper-btn" id="card-opt-helper-open"/>-->

<!--                        <div class="helper-box" id="card-opt-helper">-->
<!--                            <div class="close-container">-->
<!--                                <font-awesome-icon icon="fa-solid fa-circle-xmark" class="helper-btn-close" id="card-opt-helper-close"/>-->
<!--                            </div>-->

<!--                            <div class="helper-info-container details">-->
<!--                                The 'Card Options' panel is where you will define the basics of the card, such as the card name, description-->
<!--                                and also how many stamps the card will have-->
<!--                            </div>-->

<!--                            <div class="clearFix"></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

<!--        <div class="card-container">-->
<!--            <div class="card-builder-container alignMiddle">-->
<!--                <div class="panel">-->
<!--                    <div class="panel-heading-container alignMiddle">-->
<!--                        <div class="panel-heading">Card Builder</div>-->
<!--                        <div class="icon-btn">-->
<!--                            <font-awesome-icon icon="fa-solid fa-circle-question" class="helper-btn" id="card-builder-helper-open"/>-->

<!--                            <div class="helper-box" id="card-builder-helper">-->
<!--                                <div class="close-container">-->
<!--                                    <font-awesome-icon icon="fa-solid fa-circle-xmark" class="helper-btn-close" id="card-builder-helper-close"/>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                </div>-->
<!--            </div>-->

<!--            <div class="card-preview-container alignMiddle">-->
<!--                <div class="panel">-->
<!--                    <div class="panel-heading-container alignMiddle">-->
<!--                        <div class="panel-heading">Card Preview</div>-->
<!--                        <div class="icon-btn">-->
<!--                            <font-awesome-icon icon="fa-solid fa-circle-question" class="helper-btn" id="card-preview-helper-open"/>-->

<!--                            <div class="helper-box" id="card-preview-helper">-->
<!--                                <div class="close-container">-->
<!--                                    <font-awesome-icon icon="fa-solid fa-circle-xmark" class="helper-btn-close" id="card-preview-helper-close"/>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

<!--        <div class="clearFix"></div>-->
    </div>
</template>

<script>
import Sidebar from "../nav/sidebar";
export default {
    components: {Sidebar},
    mounted () {
        $(document).ready(function () {
            // Showing options helper
            $('#card-opt-helper-open').click(function () {
                // fading in helper
                let helper = $('#card-opt-helper')
                helper.fadeIn(250);
            });

            // Closing options helper
            $('#card-opt-helper-close').click(function () {
                // fading in helper
                let helper = $('#card-opt-helper')
                helper.fadeOut(250);
            });

            // Showing builder helper
            $('#card-builder-helper-open').click(function () {
                // fading in helper
                let helper = $('#card-builder-helper')
                helper.fadeIn(250);
            });

            // Closing options helper
            $('#card-builder-helper-close').click(function () {
                // fading in helper
                let helper = $('#card-builder-helper')
                helper.fadeOut(250);
            });


            // Showing options helper
            $('#card-preview-helper-open').click(function () {
                // fading in helper
                let helper = $('#card-preview-helper')
                helper.fadeIn(250);
            });

            // Closing options helper
            $('#card-preview-helper-close').click(function () {
                // fading in helper
                let helper = $('#card-preview-helper')
                helper.fadeOut(250);
            });
        });
    }
};
</script>

<style scoped>
.opts-container {
    width: 30%;
    height: calc(100vh - 80px);
    float: left;
}

.card-container {
    width: 70%;
    height: calc(100vh - 80px);
    float: left;
}

.panel {
    width: 95%;
    height: 90%;
    background: #141414;
    border: 1px solid grey;
    border-radius: 10px;
    margin: auto;
}

.opts-panel {
    width: 95%;
    height: 95%;
    background: #141414;
    border: 1px solid grey;
    border-radius: 10px;
}

.card-builder-container {
    width: 100%;
    height: 50%;
}

.card-preview-container {
    width: 100%;
    height: 50%;
}

.panel-heading-container {
    height: 50px;
    width: calc(100% - 30px);
    margin-inline: 15px;
}

.icon-btn {
    margin-inline-start: 15px;
    position: relative;
}

.helper-btn {
    color: grey;
    transition: all 0.2s;
}

.helper-btn:hover {
    cursor: pointer;
    color: white;
}

.helper-btn-close {
    color: #0c548d;
    opacity: 50%;
    transition: all 0.2s;
}

.helper-btn-close:hover {
    cursor: pointer;
    opacity: 100%;
}

.helper-box {
    position: absolute;
    top: -10px;
    left: -10px;
    width: 300px;
    min-height: 70px;
    display: none;
    background-color: #d1ecf1;
    border: 2px solid #bee5eb;
    border-radius: 5px;
    color: #0c548d;
}

.close-container {
    margin-inline: 7px;
    margin-block: 7px;
    width: calc(10% - 14px);
    float: left;
}

.helper-info-container {
    margin-inline: 7px;
    margin-block: 7px;
    width: calc(90% - 14px);
    float: left;
}
</style>
