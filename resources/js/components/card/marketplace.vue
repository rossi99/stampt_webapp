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

                    <!-- Cards Loading -->
                    <div v-if="loading" class="loading-cards-container">
                        <div class="loading-logo-container">
                            <img src="/img/logo/compressed/small-icon.png" alt="Stampt Logo" class="loading-logo">
                        </div>

                        <div class="loading-msg-container">
                            Hold on while we get all our cards ready!
                        </div>
                    </div>
                    <div v-else>
                        <!-- Repeat each row for each card-->
                        <market-item
                            v-for="card in cards"
                            :key="'Card ID: ' + card.id"
                            :cardName="card.cardName"
                            :createdBy="card.createdBy"
                            :stampsRequired="card.stampsRequired">
                        </market-item>
                    </div>
                </div>

            </div>
        </div>

        <div class="clearFix"></div>
    </div>
</template>

<script>
import Sidebar from "../nav/sidebar";
import MarketItem from "./marketItem";

export default {
    components: {
        MarketItem,
        Sidebar
    },
    data() {
      return {
          cards: null,
          loading: false
      };
    },
    created() {
        this.loading = true;

        setTimeout(() => {
            this.cards = [
                {
                    id: 1,
                    cardName: "Coffee House: Free Coffee",
                    createdBy: "Example Business",
                    stampsRequired: 3
                },
                {
                    id: 2,
                    cardName: "Free Portion of Chips",
                    createdBy: "Parklands",
                    stampsRequired: 5
                },
                {
                    id: 3,
                    cardName: "£10 off!",
                    createdBy: "Cafe Riva",
                    stampsRequired: 10
                },
            ];

            this.loading = false;
        }, 5000);
    },
    mounted: function () {
        console.log("mounted");
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

.loading-cards-container {
    margin-block-start: 50px;
    width: 100%;
    text-align: center;
}

.loading-logo {
    width: 60px;
    margin-block-end: 10px;
    animation: rotation 2s infinite linear;
}

@keyframes rotation {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(359deg);
    }
}
</style>
