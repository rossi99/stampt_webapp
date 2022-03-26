<template>
    <!-- Vue templates need a <div> element to hold all content -->
    <div>
        <sidebar></sidebar>

        <div class="sb-content-container">
            <div class="sb-content">
                <!-- Card Builder Content-->
                <div class="title-container alignMiddle">
                    <div class="title">
                        stampt | marketplace
                    </div>
                </div>

                <div class="marketplace-container">

                    <div class="page-intro">
                        Welcome to the Stampt Marketplace. Here you can see all the loyalty cards that are currently
                        active. You can find out more about a card by clicking the information button or if you already
                        know what about the card you're joined, you can use the 'quick add' button and the card will be
                        added directly into your wallet.
                    </div>

                    <!-- Repeat each row for each card-->
                    <div class="card-row">
                        <div class="card-container dark-glass-effect">
                            <!-- Business & Card Logo-->
                            <div class="logo-container alignMiddle">
                                <div class="logo-align">
                                    <img src="/img/stamps/compressed/sample-logo.jpg" alt="A sample logo for a coffee shop" class="logo">
                                </div>
                            </div>

                            <!-- Card Name -->
                            <div class="name-container alignMiddle">
                                <div class="name-align">
                                    <div class="card-name main-txt">Coffee House: Free Coffee</div>
                                    <div class="business-name sub-txt">Created by: Example Business</div>
                                </div>
                            </div>

                            <!-- Number of stamps -->
                            <div class="stamps-container alignMiddle">
                                <div class="stamp-align">
                                    <div class="required-text sub-txt">Stamps:</div>
                                    <div class="num-stamp-text main-txt">10</div>
                                </div>
                            </div>

                            <!-- Info container -->
                            <div class="info-container alignMiddle">
                                <div class="btn-align">
                                    <div class="info-btn alignMiddle">
                                        <div class="icon-align">
                                            <font-awesome-icon icon="fa-solid fa-info" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Join container -->
                            <div class="quick-join-container alignMiddle">
                                <div class="btn-align">
                                    <div class="quick-join-btn alignMiddle">
                                        <div class="icon-align">
                                            <font-awesome-icon icon="fa-solid fa-plus" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="clearFix"></div>
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

.marketplace-container {
    width: 100%;
    height: calc(100vh - 80px);
    overflow: scroll;
}

.page-intro {
    margin-block-end: 20px;
    color: white;
}

/* Card */
.card-row {
    width: 100%;
    height: 80px;
    margin-block-start: 30px;
    margin-block-end: 30px;
}

.card-row:first-child {
    margin-block-start: 15px;
}

.card-container {
    width: 95%;
    height: 100%;
    margin: auto;
}

.main-txt {
    font-size: 18px;
    font-weight: 600;
}

.sub-txt {
    font-size: 12px;
    color: grey;
}

.logo-container {
    width: 10%;
    height: 75px;
    float: left;
}

.logo-align {
    width: 100%;
    height: 55px;
    text-align: center;
}

.logo {
    width: 55px;
    height: 55px;
    border-radius: 50%;
}

.name-container {
    width: 56%;
    height: 75px;
    float: left;
}

.name-align {
    width: 100%;
}

.stamps-container {
    width: 20%;
    height: 75px;
    float: left;
}

.stamp-align {
    width: 100%;
}

.required-text {
    width: 100%;
    text-align: center;
}

.num-stamp-text {
    width: 100%;
    text-align: center;
}

.info-container {
    width: 7%;
    height: 75px;
    float: left;
}

.btn-align {
    width: 100%;
}

.info-btn {
    width: 40px;
    height: 40px;
    margin: auto;
    border: 1px solid grey;
    border-radius: 50%;
    color: grey;
    transition: all 0.2s;
}

.info-btn:hover {
    cursor: pointer;
    background-color: #d1ecf1;
    border: 1px solid #bee5eb;
    color: #0c548d;
}

.quick-join-container {
    width: 7%;
    height: 75px;
    float: left;
}

.quick-join-btn {
    width: 40px;
    height: 40px;
    margin: auto;
    border: 1px solid grey;
    border-radius: 50%;
    color: grey;
    transition: all 0.2s;
}

.quick-join-btn:hover {
    cursor: pointer;
    background-color: #d4edda;
    border: 1px solid #c3e6cb;
    color: #155724;
}

.icon-align {
    width: 100%;
    text-align: center;
}
</style>
