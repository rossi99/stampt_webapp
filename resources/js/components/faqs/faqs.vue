<template>
    <!-- Vue templates need a <div> element to hold all content -->
    <div>
        <sidebar></sidebar>

        <div class="sb-content-container">
            <div class="sb-content">
                <!-- Card Builder Content-->
                <div class="title-container alignMiddle">
                    <div class="title">
                        stampt | faqs
                    </div>
                </div>

                <div class="single-card-container">
                    <div class="page-intro">
                        Here are the most commonly asked questions we get asked and if you are struggling with a query,
                        hopefully you can find the answer below. However, if that is not the case you can email us at:
                        <a href="mailto:digitalcore.software.contact@gmail.com"
                           class="email-link">digitalcore.software.contact@gmail.com</a>
                    </div>

                    <div class="faqs-container">
                        <!-- Repeat for each question -->
                        <div class="faq-card-container">
                            <div class="faq-card">
                                <div class="faq">
                                    <table style="width: 100%;">
                                        <tr class="question-title">
                                            <td class="indicator">Q:</td>
                                            <td class="data">Do I have to pay to use stampt?</td>
                                        </tr>

                                        <tr class="question-answer">
                                            <td class="indicator">A:</td>
                                            <td class="data">
                                                If you are using stampt as a customer the answer is no you do not have
                                                to pay, stampt is completely free to you and you can join as many loyalty
                                                cards as you wish. However, if you are a business using stampt to create
                                                a loyalty card or convert an existing physical card into a digital one, then
                                                there is a small monthly fee to pay.
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="faq-card-container">
                            <div class="faq-card">
                                <div class="faq">
                                    <table style="width: 100%;">
                                        <tr class="question-title">
                                            <td class="indicator">Q:</td>
                                            <td class="data">Will my personal data be vulnerable if I use stampt?</td>
                                        </tr>

                                        <tr class="question-answer">
                                            <td class="indicator">A:</td>
                                            <td class="data">
                                                stampt does stores all personal data that is entered when signing up and
                                                use cookies to ensure that our users are getting the best experience out
                                                of our app, but unlike most major companies, stampt does not distribute
                                                this or sell it to third party organisations, giving you peace of mind
                                                that your data is secure.
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="faq-card-container">
                            <div class="faq-card">
                                <div class="faq">
                                    <table style="width: 100%;">
                                        <tr class="question-title">
                                            <td class="indicator">Q:</td>
                                            <td class="data">How do I gain progress when part of a loyalty card?</td>
                                        </tr>

                                        <tr class="question-answer">
                                            <td class="indicator">A:</td>
                                            <td class="data">
                                                How you gain progress within a loyalty scheme can vary depending on how
                                                the business has set up the card. The best way to find out is by clicking
                                                into the card you wish to join and reading all the information surrounding
                                                the card or by contacting the business directly.
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="faq-card-container">
                            <div class="faq-card">
                                <div class="faq">
                                    <table style="width: 100%;">
                                        <tr class="question-title">
                                            <td class="indicator">Q:</td>
                                            <td class="data">How many card can I create as a business?</td>
                                        </tr>

                                        <tr class="question-answer">
                                            <td class="indicator">A:</td>
                                            <td class="data">
                                                You can create as many cards as you like as long as you have an active
                                                business account - this means that you are paying the monthly fee. If
                                                you have created cards in the past and want to deactivate your account,
                                                you do not have to worry about re-creating the cards as they will be accessible again
                                                when the account is reactivated.
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="clearFix"></div>
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

.single-card-container {
    width: 100%;
    height: calc(100vh - 80px);
    overflow: scroll;
}

.page-intro {
    margin-block-end: 20px;
    color: white;
}

.faqs-container {
    margin-block-start: 30px;
}

.faq-card-container {
    width: calc(100% / 2);
    float: left;
    margin-block: 20px;
}

.faq-card {
    width: 90%;
    height: 175px;
    margin: auto;
    border: 1px solid grey;
    border-radius: 10px;
    overflow: scroll;
}

.faq {
    width: 95%;
    margin: auto;
}

.indicator {
    width: 5%;
    padding-block: 10px;
}

.data {
    width: 95%;
    padding-block: 10px;
}
</style>
