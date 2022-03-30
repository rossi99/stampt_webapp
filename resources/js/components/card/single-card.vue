<template>
    <!-- Vue templates need a <div> element to hold all content -->
    <div>
        <sidebar></sidebar>

        <div class="sb-content-container">
            <div class="sb-content">
                <!-- Card Builder Content-->
                <div class="title-container alignMiddle">
                    <div class="title">
                        stampt | {{ card.cardTitle }}
                    </div>
                </div>

                <div class="single-card-container">
                    <div class="page-intro">
                        This is Example Busniess' loyalty card. Check out all the details below including the reward,
                        how many stamps you need to claim it and what is required to gain a stamp!
                    </div>

                    <div class="card-details-container">
                        <!-- Card Data -->
                        <div class="card-data-container">
                            <div class="data-table-container">
                                <table class="card-data">
                                    <!-- Card Name -->
                                    <tr class="name-row">
                                        <td class="row-title">Name:</td>
                                        <td class="row-data">{{ card.cardTitle }}</td>
                                    </tr>

                                    <!-- Card Description -->
                                    <tr class="name-row">
                                        <td class="row-title">Description:</td>
                                        <td class="row-data">{{ card.cardDesc }}</td>
                                    </tr>

                                    <!-- Card Reward -->
                                    <tr class="name-row">
                                        <td class="row-title">Reward:</td>
                                        <td class="row-data">{{ card.cardReward }}</td>
                                    </tr>

                                    <!-- Card Reward -->
                                    <tr class="name-row">
                                        <td class="row-title">How to gain:</td>
                                        <td class="row-data">{{ card.cardProgressMethod }}</td>
                                    </tr>

                                    <!-- Card Status -->
                                    <tr class="name-row">
                                        <td class="row-title">Status:</td>
                                        <td class="row-data">{{ card.status }}</td>
                                    </tr>

                                    <!-- Card Owner -->
                                    <tr class="name-row">
                                        <td class="row-title">Owner:</td>
                                        <td class="row-data">Example Business</td>
                                    </tr>

                                    <!-- Card Status -->
                                    <tr class="name-row">
                                        <td class="row-title">Created:</td>
                                        <td class="row-data">{{ card.created_at }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <!-- Card Preview -->
                        <div class="card-preview-container">
                            <div class="card-preview-content alignMiddle">
                                <!-- Show if 5 stamps -->
<!--                                <div class="one-row-card">-->
<!--                                    &lt;!&ndash; logo and stamp container &ndash;&gt;-->
<!--                                    <div class="stamp-logo-holder">-->

<!--                                        &lt;!&ndash; Logo Row &ndash;&gt;-->
<!--                                        &lt;!&ndash; Will check what logo align is set to &ndash;&gt;-->
<!--                                        <div class="stamp-logo-container logo-row">-->
<!--                                            &lt;!&ndash; Left align &ndash;&gt;-->
<!--                                            <div class="logo-align-container-left alignMiddle">-->
<!--                                                <div class="sample-logo-align">-->
<!--                                                    &lt;!&ndash; Circle logo &ndash;&gt;-->
<!--                                                    <div class="sample-logo-container circle-logo">-->
<!--                                                        <img src="/img/stamps/sample-logo.jpg" alt="A sample logo for a coffee shop" class="sample-logo">-->
<!--                                                    </div>-->

<!--                                                    &lt;!&ndash; Square logo &ndash;&gt;-->
<!--&lt;!&ndash;                                                    <div class="sample-logo-container square-logo">&ndash;&gt;-->
<!--&lt;!&ndash;                                                        <img src="/img/stamps/sample-logo.jpg" alt="A sample logo for a coffee shop" class="sample-logo">&ndash;&gt;-->
<!--&lt;!&ndash;                                                    </div>&ndash;&gt;-->
<!--                                                </div>-->
<!--                                            </div>-->

<!--                                            &lt;!&ndash; center align &ndash;&gt;-->
<!--&lt;!&ndash;                                            <div class="logo-align-container-centre alignMiddle">&ndash;&gt;-->
<!--&lt;!&ndash;                                                <div class="sample-logo-align">&ndash;&gt;-->
<!--&lt;!&ndash;                                                    <div class="sample-logo-container">&ndash;&gt;-->
<!--&lt;!&ndash;                                                        <img src="/img/stamps/sample-logo.jpg" alt="A sample logo for a coffee shop" class="sample-logo">&ndash;&gt;-->
<!--&lt;!&ndash;                                                    </div>&ndash;&gt;-->
<!--&lt;!&ndash;                                                </div>&ndash;&gt;-->
<!--&lt;!&ndash;                                            </div>&ndash;&gt;-->

<!--                                            &lt;!&ndash; right align &ndash;&gt;-->
<!--&lt;!&ndash;                                            <div class="logo-align-container-right alignMiddle">&ndash;&gt;-->
<!--&lt;!&ndash;                                                <div class="sample-logo-align">&ndash;&gt;-->
<!--&lt;!&ndash;                                                    <div class="sample-logo-container">&ndash;&gt;-->
<!--&lt;!&ndash;                                                        <img src="/img/stamps/sample-logo.jpg" alt="A sample logo for a coffee shop" class="sample-logo">&ndash;&gt;-->
<!--&lt;!&ndash;                                                    </div>&ndash;&gt;-->
<!--&lt;!&ndash;                                                </div>&ndash;&gt;-->
<!--&lt;!&ndash;                                            </div>&ndash;&gt;-->
<!--                                        </div>-->

<!--                                        &lt;!&ndash; Card Text &ndash;&gt;-->
<!--                                        &lt;!&ndash; Will be set to data from database &ndash;&gt;-->
<!--                                        <div class="preview-txt-container">-->
<!--                                            <div class="preview-title-container">-->
<!--                                                <p class="preview-title">Coffee House</p>-->
<!--                                            </div>-->

<!--                                            <div class="preview-desc-container">-->
<!--                                                <p class="preview-desc">Get 10 stamps and get a free coffee</p>-->
<!--                                            </div>-->
<!--                                        </div>-->

<!--                                        &lt;!&ndash; Stamp Rows &ndash;&gt;-->
<!--                                        &lt;!&ndash; Will check how many stamps, 5 = 1 row: &ndash;&gt;-->
<!--                                        <div class="stamp-logo-container" id="one-row">-->
<!--                                            &lt;!&ndash; Stamp 1 &ndash;&gt;-->
<!--                                            <div class="bucket-container alignMiddle">-->
<!--                                                <div class="bucket">-->
<!--                                                    <div class="drop-area alignMiddle">-->
<!--                                                        <div class="bucket-align">-->
<!--                                                            <div>-->
<!--                                                                <img src="/img/stamps/compressed/white/3.png" alt="This is the first style of stamp in a a grey colour" class="stamp">-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->

<!--                                            &lt;!&ndash; Stamp 2 &ndash;&gt;-->
<!--                                            <div class="bucket-container alignMiddle">-->
<!--                                                <div class="bucket">-->
<!--                                                    <div class="drop-area alignMiddle">-->
<!--                                                        <div class="bucket-align">-->
<!--                                                            <div>-->
<!--                                                                <img src="/img/stamps/compressed/white/3.png" alt="This is the first style of stamp in a a grey colour" class="stamp">-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->

<!--                                            &lt;!&ndash; Stamp 3 &ndash;&gt;-->
<!--                                            <div class="bucket-container alignMiddle">-->
<!--                                                <div class="bucket">-->
<!--                                                    <div class="drop-area alignMiddle">-->
<!--                                                        <div class="bucket-align">-->
<!--                                                            <div>-->
<!--                                                                <img src="/img/stamps/compressed/white/3.png" alt="This is the first style of stamp in a a grey colour" class="stamp">-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->

<!--                                            &lt;!&ndash; Stamp 4 &ndash;&gt;-->
<!--                                            <div class="bucket-container alignMiddle">-->
<!--                                                <div class="bucket">-->
<!--                                                    <div class="drop-area alignMiddle">-->
<!--                                                        <div class="bucket-align">-->
<!--                                                            <div>-->
<!--                                                                <img src="/img/stamps/compressed/white/3.png" alt="This is the first style of stamp in a a grey colour" class="stamp">-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->

<!--                                            &lt;!&ndash; Stamp 5 &ndash;&gt;-->
<!--                                            <div class="bucket-container alignMiddle">-->
<!--                                                <div class="bucket">-->
<!--                                                    <div class="drop-area alignMiddle">-->
<!--                                                        <div class="bucket-align">-->
<!--                                                            <div>-->
<!--                                                                <img src="/img/stamps/compressed/white/3.png" alt="This is the first style of stamp in a a grey colour" class="stamp">-->
<!--                                                            </div>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->

<!--                                            <div class="clearFix"></div>-->
<!--                                        </div>-->
<!--                                    </div>-->

<!--                                    <div class="clearFix"></div>-->
<!--                                </div>-->

                                <!-- Show if 10 stamps -->
                                <div class="two-row-card">
                                    <!-- logo and stamp container -->
                                    <div class="stamp-logo-holder">

                                        <!-- Logo Row -->
                                        <!-- Will check what logo align is set to -->
                                        <div class="stamp-logo-container logo-row">
                                            <!-- Left align -->
                                            <div class="logo-align-container-left alignMiddle">
                                                <div class="sample-logo-align">
                                                    <!-- Circle logo -->
                                                    <div class="sample-logo-container circle-logo">
                                                        <img src="/img/stamps/sample-logo.jpg" alt="A sample logo for a coffee shop" class="sample-logo">
                                                    </div>

                                                    <!-- Square logo -->
                                                    <!-- <div class="sample-logo-container square-logo"> -->
                                                    <!--  <img src="/img/stamps/sample-logo.jpg" alt="A sample logo for a coffee shop" class="sample-logo"> -->
                                                    <!-- </div> -->
                                                </div>
                                            </div>

                                            <!-- center align -->
                                            <!-- <div class="logo-align-container-centre alignMiddle"> -->
                                            <!--  <div class="sample-logo-align"> -->
                                            <!--   <div class="sample-logo-container"> -->
                                            <!--    <img src="/img/stamps/sample-logo.jpg" alt="A sample logo for a coffee shop" class="sample-logo"> -->
                                            <!--   </div> -->
                                            <!--  </div> -->
                                            <!-- </div> -->

                                            <!-- right align -->
                                            <!-- <div class="logo-align-container-right alignMiddle"> -->
                                            <!--  <div class="sample-logo-align"> -->
                                            <!--   <div class="sample-logo-container"> -->
                                            <!--    <img src="/img/stamps/sample-logo.jpg" alt="A sample logo for a coffee shop" class="sample-logo"> -->
                                            <!--   </div> -->
                                            <!--  </div> -->
                                            <!-- </div> -->
                                        </div>

                                        <!-- Card Text -->
                                        <!-- Will be set to data from database -->
                                        <div class="preview-txt-container">
                                            <div class="preview-title-container">
                                                <p class="preview-title">Coffee House</p>
                                            </div>

                                            <div class="preview-desc-container">
                                                <p class="preview-desc">Get 10 stamps and get a free coffee</p>
                                            </div>
                                        </div>

                                        <!-- Stamp Rows -->
                                        <!-- Will check how many stamps, 10 = 2 row: -->
                                        <div class="stamp-logo-container">
                                            <!-- Stamp 1 -->
                                            <div class="bucket-container alignMiddle">
                                                <div class="bucket">
                                                    <div class="drop-area alignMiddle">
                                                        <div class="bucket-align">
                                                            <div>
                                                                <img src="/img/stamps/compressed/white/3.png" alt="This is the first style of stamp in a a grey colour" class="stamp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Stamp 2 -->
                                            <div class="bucket-container alignMiddle">
                                                <div class="bucket">
                                                    <div class="drop-area alignMiddle">
                                                        <div class="bucket-align">
                                                            <div>
                                                                <img src="/img/stamps/compressed/white/3.png" alt="This is the first style of stamp in a a grey colour" class="stamp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Stamp 3 -->
                                            <div class="bucket-container alignMiddle">
                                                <div class="bucket">
                                                    <div class="drop-area alignMiddle">
                                                        <div class="bucket-align">
                                                            <div>
                                                                <img src="/img/stamps/compressed/white/3.png" alt="This is the first style of stamp in a a grey colour" class="stamp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Stamp 4 -->
                                            <div class="bucket-container alignMiddle">
                                                <div class="bucket">
                                                    <div class="drop-area alignMiddle">
                                                        <div class="bucket-align">
                                                            <div>
                                                                <img src="/img/stamps/compressed/white/3.png" alt="This is the first style of stamp in a a grey colour" class="stamp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Stamp 5 -->
                                            <div class="bucket-container alignMiddle">
                                                <div class="bucket">
                                                    <div class="drop-area alignMiddle">
                                                        <div class="bucket-align">
                                                            <div>
                                                                <img src="/img/stamps/compressed/white/3.png" alt="This is the first style of stamp in a a grey colour" class="stamp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Stamp 6 -->
                                            <div class="bucket-container alignMiddle">
                                                <div class="bucket">
                                                    <div class="drop-area alignMiddle">
                                                        <div class="bucket-align">
                                                            <div>
                                                                <img src="/img/stamps/compressed/white/3.png" alt="This is the first style of stamp in a a grey colour" class="stamp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Stamp 7 -->
                                            <div class="bucket-container alignMiddle">
                                                <div class="bucket">
                                                    <div class="drop-area alignMiddle">
                                                        <div class="bucket-align">
                                                            <div>
                                                                <img src="/img/stamps/compressed/white/3.png" alt="This is the first style of stamp in a a grey colour" class="stamp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Stamp 8 -->
                                            <div class="bucket-container alignMiddle">
                                                <div class="bucket">
                                                    <div class="drop-area alignMiddle">
                                                        <div class="bucket-align">
                                                            <div>
                                                                <img src="/img/stamps/compressed/white/3.png" alt="This is the first style of stamp in a a grey colour" class="stamp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Stamp 9 -->
                                            <div class="bucket-container alignMiddle">
                                                <div class="bucket">
                                                    <div class="drop-area alignMiddle">
                                                        <div class="bucket-align">
                                                            <div>
                                                                <img src="/img/stamps/compressed/white/3.png" alt="This is the first style of stamp in a a grey colour" class="stamp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Stamp 10 -->
                                            <div class="bucket-container alignMiddle">
                                                <div class="bucket">
                                                    <div class="drop-area alignMiddle">
                                                        <div class="bucket-align">
                                                            <div>
                                                                <img src="/img/stamps/compressed/white/3.png" alt="This is the first style of stamp in a a grey colour" class="stamp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="clearFix"></div>
                                        </div>
                                    </div>

                                    <div class="clearFix"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Action -->
                        <div class="card-action-container">
                            <div class="action-btn-container">
                                <div class="action-btn alignMiddle">
                                    <div class="btn-txt-align">
                                        <span><font-awesome-icon icon="fa-solid fa-plus" class="l-icon-spacing" /></span>
                                        <span>Add Card to Wallet</span>
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
          card: null
      };
    },
    created() {
        const id = this.$route.params.id;

        // Get single card
        axios
            .get(`/api/loyaltyCards/${id}`)
            .then(response => this.card = response.data);
    }
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

.single-card-container {
    width: 100%;
    height: calc(100vh - 80px);
    overflow: scroll;
}

.page-intro {
    margin-block-end: 20px;
    color: white;
}

.card-details-container {
    margin-block-start: 30px;
}

/* Card Data Container */
.card-data-container {
    margin-block: 30px;
}

.data-table-container {
    width: 100%;
}

.card-data {
    width: 100%;
    border-collapse: collapse;
}

.name-row {
    width: 100%;
    height: 50px;
}

.row-title {
    width: 15%;
}

.row-data {
    width: 85%;
}

/* Loyalty Card */
.card-preview-container {
    margin-block: 30px;
}

.card-preview-content {
    width: 100%;
    height: 500px;
}

.one-row-card {
    width: 500px;
    min-height: calc(150px + 65px);
    background: #141414;
    border-radius: 20px;
    border: 3px solid rgb(44, 44, 44);
    box-shadow: 0 0 50px 0 rgb(0, 0, 0, 0.5);
    margin: auto;
    position: relative;
}

.two-row-card {
    width: 500px;
    min-height: calc(250px + 65px);
    background: #141414;
    border-radius: 20px;
    border: 3px solid rgb(44, 44, 44);
    box-shadow: 0 0 50px 0 rgb(0, 0, 0, 0.5);
    margin: auto;
    position: relative;
}

.stamp-logo-holder {
    position: absolute;
    width: 100%;
    bottom: 0;
}

.stamp-logo-container {
    width: 100%;
    height: 100px;
}

/* Dynamic Logo classes */
.logo-align-container-left {
    width: calc(100% / 3);
    height: 100px;
    float: left;
    margin-inline-start: 20px;
}

.logo-align-container-centre {
    width: calc(100% / 3);
    height: 100px;
    margin: auto;
}

.logo-align-container-right {
    width: calc(100% / 3);
    height: 100px;
    float: right;
    margin-inline-end: 20px;
}

.sample-logo-align {
    width: 100%;
}

.sample-logo-container {
    width: 80px;
    height: 80px;
    overflow: hidden;
    border: 3px solid rgb(44, 44, 44);
}

.sample-logo {
    width: 100%;
}

.square-logo {
    border-radius: 10px;
}

.circle-logo {
    border-radius: 50%;
}

/* Text on card */
.preview-txt-container {
    width: 95%;
    margin: auto;
    margin-block: 5px;
}

.preview-title-container {
    margin-block-end: 5px;
}

.preview-title {
    text-align: left;
    font-size: 20px;
    font-weight: 600;
    margin-inline-start: 10px;
}

.preview-desc {
    font-size: 14px;
    text-align: left;
    width: calc(100% - 20px);
    margin-inline: 10px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.stamp-logo-container {
    width: 100%;
    height: 100px;
}

.bucket-container {
    width: calc(100% / 5);
    height: 100px;
    float: left;
}

.bucket {
    width: 85%;
    height: 85%;
    margin: auto;
}

.drop-area {
    width: 100%;
    height: 100%;
}

.bucket-align {
    width: 100%;
    height: 70px;
    text-align: center;
}

.stamp {
    width: 70px;
    height: 70px;
}

/* Card action container */
.card-action-container {
    margin-block-end: 50px;
}

.action-btn-container {
    width: 90%;
    max-width: 300px;
    margin: auto;
}

.action-btn {
    width: 100%;
    height: 50px;
    background-color: #141414;
    border: 1px solid grey;
    border-radius: 10px;
    color: grey;
    transition: all 0.2s;
}

.action-btn:hover {
    cursor: pointer;
    background-color: #d4edda;
    border: 2px solid #155724;
    border-radius: 10px;
    color: #155724;
}

.btn-txt-align {
    width: 100%;
    text-align: center;
}
</style>
