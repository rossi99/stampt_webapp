<template>
    <!-- Vue templates need a <div> element to hold all content -->
    <div>
        <sidebar></sidebar>

        <div class="sb-content-container">
            <div class="sb-content">
                <!-- Card Builder Content-->
                <div class="title-container alignMiddle">
                    <div class="title">
                        stampt | card builder
                    </div>
                </div>

                <div class="builder-container">
                    <!-- Different steps to create a card -->
                    <div class="steps-container">
                        <!-- Step 1 Button -->
                        <div class="step-row alignMiddle">
                            <div class="step-align stampt-font">
                                <div class="step-btn-container">
                                    <div class="step-btn alignMiddle" id="btn-1">
                                        <div class="btn-align">
                                            <div class="btn-number">
                                                1
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="step-text-container alignMiddle" id="btn-1-txt">
                                    <div class="step-txt">
                                        create
                                    </div>
                                </div>

                                <div class="clearFix"></div>
                            </div>
                        </div>

                        <!-- separator -->
                        <div class="separator-container">
                            <div class="separator"></div>
                        </div>

                        <!-- Step 2 Button -->
                        <div class="step-row alignMiddle">
                            <div class="step-align stampt-font">
                                <div class="step-btn-container">
                                    <div class="step-btn alignMiddle" id="btn-2">
                                        <div class="btn-align">
                                            <div class="btn-number">
                                                2
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="step-text-container alignMiddle" id="btn-2-txt">
                                    <div class="step-txt">
                                        builder
                                    </div>
                                </div>

                                <div class="clearFix"></div>
                            </div>
                        </div>

                        <!-- separator -->
                        <div class="separator-container">
                            <div class="separator"></div>
                        </div>

                        <!-- Step 2 Button -->
                        <div class="step-row alignMiddle">
                            <div class="step-align stampt-font">
                                <div class="step-btn-container">
                                    <div class="step-btn alignMiddle" id="btn-3">
                                        <div class="btn-align">
                                            <div class="btn-number">
                                                3
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="step-text-container alignMiddle" id="btn-3-txt">
                                    <div class="step-txt">
                                        preview
                                    </div>
                                </div>

                                <div class="clearFix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="form-container">
                        <div class="fc create-container">
                            <div class="fc-heading-container alignMiddle">
                                <div class="fc-heading subtitle stampt-font">
                                    Create A Card
                                </div>
                            </div>

                            <div class="fc-description">
                                Welcome to one of stampt's most defining features to businesses, the card builder. Here is
                                where your loyalty program can really take off by outlining the basic beginning of you card.
                                From the background colour or image to the reward and number of stamps required to achieve it,
                                everything is customizable - giving you full control!
                            </div>

                            <!-- Card Title -->
                            <div class="create-row">
                                <div class="create-label-container">
                                    <div class="create-label alignMiddle subtitle">
                                        Title
                                    </div>

                                    <div class="create-helper alignMiddle">
                                        <div style="width: 100%; text-align: center;">
                                            <font-awesome-icon icon="fa-solid fa-circle-question" class="help-btn" id="title-helper-show"/>
                                        </div>

                                        <div class="helper-txt-container" id="title-helper" style="display: none;">
                                            <div class="close-container alignMiddle">
                                                <div style="width: 100%; text-align: center;">
                                                    <font-awesome-icon icon="fa-solid fa-circle-xmark" class="help-btn" id="title-helper-close" />
                                                </div>
                                            </div>

                                            <div class="text-container details">
                                                <div style="padding: 5px; letter-spacing: 1px">
                                                    The card title will appear at the top of the card, and will be used
                                                    to catch a customers attention when they're browsing the market place,
                                                    make it catchy and unique!
                                                </div>
                                            </div>

                                            <div class="clearFix"></div>
                                        </div>
                                    </div>

                                    <div class="clearFix"></div>
                                </div>

                                <div class="stampt-input-container">
                                    <input type="text" id="title-input" class="stampt-input" placeholder="What is your card called?">
                                </div>
                            </div>


                            <!-- Card Description -->
                            <div class="create-row">
                                <div class="create-label-container">
                                    <div class="create-label alignMiddle subtitle">
                                        Description
                                    </div>

                                    <div class="create-helper alignMiddle">
                                        <div style="width: 100%; text-align: center;">
                                            <font-awesome-icon icon="fa-solid fa-circle-question" class="help-btn" id="desc-helper-show"/>
                                        </div>

                                        <div class="helper-txt-container" id="desc-helper" style="display: none;">
                                            <div class="close-container alignMiddle">
                                                <div style="width: 100%; text-align: center;">
                                                    <font-awesome-icon icon="fa-solid fa-circle-xmark" class="help-btn" id="desc-helper-close" />
                                                </div>
                                            </div>

                                            <div class="text-container details">
                                                <div style="padding: 5px; letter-spacing: 1px">
                                                    A card's description will be read by the user in order for them to get
                                                    all the details they needs about your loyalty program for example, what
                                                    reward comes after all stamps have been collect or when the loyalty card
                                                    is valid too.
                                                </div>
                                            </div>

                                            <div class="clearFix"></div>
                                        </div>
                                    </div>

                                    <div class="clearFix"></div>
                                </div>

                                <div class="stampt-input-container">
                                    <input type="text" id="desc-input" class="stampt-input" placeholder="Tell me all about this loyalty card!">
                                </div>
                            </div>


                            <!-- Card Logo -->
                            <div class="create-row">
                                <div class="create-label-container">
                                    <div class="create-label alignMiddle subtitle">
                                        Logo Position
                                    </div>

                                    <div class="create-helper alignMiddle">
                                        <div style="width: 100%; text-align: center;">
                                            <font-awesome-icon icon="fa-solid fa-circle-question" class="help-btn" id="logo-helper-show"/>
                                        </div>

                                        <div class="helper-txt-container" id="logo-helper" style="display: none;">
                                            <div class="close-container alignMiddle">
                                                <div style="width: 100%; text-align: center;">
                                                    <font-awesome-icon icon="fa-solid fa-circle-xmark" class="help-btn" id="logo-helper-close" />
                                                </div>
                                            </div>

                                            <div class="text-container details">
                                                <div style="padding: 5px; letter-spacing: 1px">
                                                    A logo can be placed on the left, middle or right side of a loyalty card.
                                                    The logo used is the one uploaded when creating your business account, to change
                                                    this, simply upload a different image in the profile tab.
                                                </div>
                                            </div>

                                            <div class="clearFix"></div>
                                        </div>
                                    </div>

                                    <div class="clearFix"></div>
                                </div>

                                <div class="stampt-input-container">
                                    <!-- Logo opt | Left -->
                                    <div class="logo-opt-container alignMiddle">
                                        <div class="opt-align">
                                            <div class="opt alignMiddle align-width" id="align-left-opt">
                                                <div class="icon-align">
                                                    <font-awesome-icon icon="fa-solid fa-align-left" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Logo opt | Center -->
                                    <div class="logo-opt-container alignMiddle">
                                        <div class="opt-align">
                                            <div class="opt alignMiddle align-width" id="align-center-opt">
                                                <div class="icon-align">
                                                    <font-awesome-icon icon="fa-solid fa-align-center" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Logo opt | Right -->
                                    <div class="logo-opt-container alignMiddle">
                                        <div class="opt-align">
                                            <div class="opt alignMiddle align-width" id="align-right-opt">
                                                <div class="icon-align">
                                                    <font-awesome-icon icon="fa-solid fa-align-right" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="clearFix"></div>
                                </div>
                            </div>


                            <!-- Card Squares -->
                            <div class="create-row">
                                <div class="create-label-container">
                                    <div class="create-label alignMiddle subtitle">
                                        Card Slots
                                    </div>

                                    <div class="create-helper alignMiddle">
                                        <div style="width: 100%; text-align: center;">
                                            <font-awesome-icon icon="fa-solid fa-circle-question" class="help-btn" id="num-helper-show"/>
                                        </div>

                                        <div class="helper-txt-container" id="num-helper" style="display: none;">
                                            <div class="close-container alignMiddle">
                                                <div style="width: 100%; text-align: center;">
                                                    <font-awesome-icon icon="fa-solid fa-circle-xmark" class="help-btn" id="num-helper-close" />
                                                </div>
                                            </div>

                                            <div class="text-container details">
                                                <div style="padding: 5px; letter-spacing: 1px">
                                                    The card slots refer to the number of 'buckets' - a fancy word for areas -
                                                    available to you when in the builder. Each bucket doesn't have to be filled
                                                    with a stamp element, but the more buckets a card has, the more precise a
                                                    design can be! You have the option of 5, 10 or 15 buckets.
                                                </div>
                                            </div>

                                            <div class="clearFix"></div>
                                        </div>
                                    </div>

                                    <div class="clearFix"></div>
                                </div>

                                <div class="stampt-input-container">
                                    <!-- 5 -->
                                    <div class="stamp-opt-container alignMiddle">
                                        <div class="stamp-opt alignMiddle" id="stamps-5">
                                            <div class="stamp-align">
                                                <div class="stamp-illustration">
                                                    <div class="logo-stamp-row">
                                                        <font-awesome-icon icon="fa-solid fa-circle" />
                                                    </div>

                                                    <div class="stamp-row">
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 10 -->
                                    <div class="stamp-opt-container alignMiddle">
                                        <div class="stamp-opt alignMiddle" id="stamps-10">
                                            <div class="stamp-align">
                                                <div class="stamp-illustration">
                                                    <div class="logo-stamp-row">
                                                        <font-awesome-icon icon="fa-solid fa-circle" />
                                                    </div>

                                                    <div class="stamp-row">
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                    </div>

                                                    <div class="stamp-row">
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 15 -->
                                    <div class="stamp-opt-container alignMiddle">
                                        <div class="stamp-opt alignMiddle" id="stamps-15">
                                            <div class="stamp-align">
                                                <div class="stamp-illustration">
                                                    <div class="logo-stamp-row">
                                                        <font-awesome-icon icon="fa-solid fa-circle" />
                                                    </div>

                                                    <div class="stamp-row">
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                    </div>

                                                    <div class="stamp-row">
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                    </div>

                                                    <div class="stamp-row">
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                        <font-awesome-icon icon="fa-solid fa-square" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="clearFix"></div>
                                </div>
                            </div>


                            <!-- Card Description -->
                            <div class="create-row">
                                <div class="create-label-container">
                                    <div class="create-label alignMiddle subtitle">
                                        Background Colour
                                    </div>

                                    <div class="create-helper alignMiddle">
                                        <div style="width: 100%; text-align: center;">
                                            <font-awesome-icon icon="fa-solid fa-circle-question" class="help-btn" id="colour-helper-show"/>
                                        </div>

                                        <div class="helper-txt-container" id="colour-helper" style="display: none;">
                                            <div class="close-container alignMiddle">
                                                <div style="width: 100%; text-align: center;">
                                                    <font-awesome-icon icon="fa-solid fa-circle-xmark" class="help-btn" id="colour-helper-close" />
                                                </div>
                                            </div>

                                            <div class="text-container details">
                                                <div style="padding: 5px; letter-spacing: 1px">
                                                    The background of your card is also customisable using the colour
                                                    picker. The default is set to a dark grey in order to match stampt's
                                                    default colour theme, but you can change it to match your business's
                                                    colour scheme - or to your favourite colour, we won't judge!
                                                </div>
                                            </div>

                                            <div class="clearFix"></div>
                                        </div>
                                    </div>

                                    <div class="clearFix"></div>
                                </div>

                                <div class="stampt-input-container">
                                    <div class="colour-opt-container alignMiddle">
                                        <div class="opt-align">
                                            <div class="opt colour-width" id="colour-opt">
                                                <input type="color" id="colour-input" class="stampt-input-color" value="#141414">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="fc build-container">
                            <div class="fc-heading-container alignMiddle">
                                <div class="fc-heading subtitle stampt-font">
                                    Build Your Card
                                </div>
                            </div>

                            <div class="fc-description">
                                <div class="log-test" id="log-test">
                                    You're almost most done creating your new loyalty card. The last thing to do is
                                    place stamp elements inside the buckets. After adding a stamp, a customer will see
                                    a filled stamp element instead of the empty one currently being added. Stampt doesn't
                                    allow for custom filled stampt elements.
                                </div>
                            </div>

                            <div class="build-content">
                                <div class="stamp-element-container alignMiddle">
                                    <div class="element-card">

                                    </div>
                                </div>

                                <div class="card-element-container alignMiddle">
                                    <div class="element-card">

                                    </div>
                                </div>

                                <div class="clearFix"></div>
                            </div>
                        </div>

                        <div class="fc preview-container">
                            <div class="fc-heading-container alignMiddle">
                                <div class="fc-heading subtitle stampt-font">
                                    Confirm Your Card
                                </div>
                            </div>

                            <div class="fc-description">

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
    components: {Sidebar},
    mounted () {
        $(document).ready(function () {
            // defining defaults
            let btn1 = $('#btn-1')
            let btn2 = $('#btn-2')
            let btn3 = $('#btn-3')
            let btn1Txt = $('#btn-1-txt')
            let btn2Txt = $('#btn-2-txt')
            let btn3Txt = $('#btn-3-txt')
            let create = $('.create-container')
            let build = $('.build-container')
            let preview = $('.preview-container')

            // Form Variables
            let cardTitle
            let cardDescription
            let logoAlign
            let cardSlots
            let cardColour

            // setting classes
            btn1.addClass('active-btn')
            btn1Txt.addClass('active-txt')

            create.fadeIn(250)

            // Showing create form
            btn1.click(function () {
                // setting correct active button
                btn1.addClass('active-btn')
                btn1Txt.addClass('active-txt')

                // removing other btn styles
                btn2.removeClass('active-btn')
                btn2Txt.removeClass('active-txt')
                btn3.removeClass('active-btn')
                btn3Txt.removeClass('active-txt')

                // fade out other elements
                build.fadeOut(100)
                preview.fadeOut(100)

                // fade in correct element
                create.delay(250).fadeIn(100)
            });

            // Showing builder form
            btn2.click(function () {
                // setting correct active button
                btn2.addClass('active-btn')
                btn2Txt.addClass('active-txt')

                // removing other btn styles
                btn1.removeClass('active-btn')
                btn1Txt.removeClass('active-txt')
                btn3.removeClass('active-btn')
                btn3Txt.removeClass('active-txt')

                // fade out other elements
                create.fadeOut(100)
                preview.fadeOut(100)

                // fade in correct element
                build.delay(250).fadeIn(100)
            });

            // Showing builder form
            btn3.click(function () {
                // setting correct active button
                btn3.addClass('active-btn')
                btn3Txt.addClass('active-txt')

                // removing other btn styles
                btn1.removeClass('active-btn')
                btn1Txt.removeClass('active-txt')
                btn2.removeClass('active-btn')
                btn2Txt.removeClass('active-txt')

                // fade out other elements
                create.fadeOut(100)
                build.fadeOut(100)

                // fade in correct element
                preview.delay(250).fadeIn(100)
            });


            // ~ Create
            // Variables
            let titleHelper = $('#title-helper')
            let titleHelpShow = $('#title-helper-show')
            let titleHelpHide = $('#title-helper-close')
            let titleInput = $('#title-input')

            let descHelper = $('#desc-helper')
            let descHelpShow = $('#desc-helper-show')
            let descHelpHide = $('#desc-helper-close')
            let descInput = $('#desc-input')

            let logoHelper = $('#logo-helper')
            let logoHelpShow = $('#logo-helper-show')
            let logoHelpHide = $('#logo-helper-close')

            let colourHelper = $('#colour-helper')
            let colourHelpShow = $('#colour-helper-show')
            let colourHelpHide = $('#colour-helper-close')
            let colourInput = $('#colour-input')

            let numHelper = $('#num-helper')
            let numHelpShow = $('#num-helper-show')
            let numHelpHide = $('#num-helper-close')
            let numInput = $('#num-input')

            let alignLeft = $('#align-left-opt')
            let alignCenter = $('#align-center-opt')
            let alignRight = $('#align-right-opt')

            let stamp5 = $('#stamps-5')
            let stamp10 = $('#stamps-10')
            let stamp15 = $('#stamps-15')

            let colourPicker = $('#colour-input')

            //  Fading in helpers
            //      - Card Title
            titleHelpShow.click(function () {
                titleHelper.fadeIn(200)
            });

            titleHelpHide.click(function () {
                titleHelper.fadeOut(200)
            });

            titleInput.click(function () {
                titleHelper.fadeOut(200)
            });

            //      - Card Description
            descHelpShow.click(function () {
                descHelper.fadeIn(200)
            });

            descHelpHide.click(function () {
                descHelper.fadeOut(200)
            });

            descInput.click(function () {
                descHelper.fadeOut(200)
            });

            //      - Card Logo
            logoHelpShow.click(function () {
                logoHelper.fadeIn(200)
            });

            logoHelpHide.click(function () {
                logoHelper.fadeOut(200)
            });

            alignLeft.click(function () {
                logoHelper.fadeOut(200)
            });

            alignCenter.click(function () {
                logoHelper.fadeOut(200)
            });

            alignRight.click(function () {
                logoHelper.fadeOut(200)
            });

            //      - Number of stamps
            numHelpShow.click(function () {
                numHelper.fadeIn(200)
            });

            numHelpHide.click(function () {
                numHelper.fadeOut(200)
            });

            numInput.click(function () {
                numHelper.fadeOut(200)
            });

            stamp5.click(function () {
                numHelper.fadeOut(200)
            });

            stamp10.click(function () {
                numHelper.fadeOut(200)
            });

            stamp15.click(function () {
                numHelper.fadeOut(200)
            });

            //      - Card Colour
            colourHelpShow.click(function () {
                colourHelper.fadeIn(200)
            });

            colourHelpHide.click(function () {
                colourHelper.fadeOut(200)
            });

            colourInput.click(function () {
                colourHelper.fadeOut(200)
            });


            // Selecting logo alignment for card
            alignLeft.click(function () {
                // removing from other buttons
                alignRight.removeClass('active-btn')
                alignCenter.removeClass('active-btn')

                // adding class to active button
                alignLeft.addClass('active-btn')
            });

            alignCenter.click(function () {
                // removing from other buttons
                alignRight.removeClass('active-btn')
                alignLeft.removeClass('active-btn')

                // adding class to active button
                alignCenter.addClass('active-btn')
            });

            alignRight.click(function () {
                // removing from other buttons
                alignLeft.removeClass('active-btn')
                alignCenter.removeClass('active-btn')

                // adding class to active button
                alignRight.addClass('active-btn')
            });

            // Setting number of buckets for card
            stamp5.click(function () {
                // removing from other buttons
                stamp10.removeClass('active-btn')
                stamp15.removeClass('active-btn')

                // adding class to active button
                stamp5.addClass('active-btn')
            });

            stamp10.click(function () {
                // removing from other buttons
                stamp5.removeClass('active-btn')
                stamp15.removeClass('active-btn')

                // adding class to active button
                stamp10.addClass('active-btn')
            });

            stamp15.click(function () {
                // removing from other buttons
                stamp10.removeClass('active-btn')
                stamp5.removeClass('active-btn')

                // adding class to active button
                stamp15.addClass('active-btn')
            });

            // ~ Form Handling
            // store text input
            titleInput.change(function() {
                cardTitle = titleInput.val()
            });

            descInput.change(function() {
                cardDescription = descInput.val()
            });

            alignLeft.click(function () {
                logoAlign = "Left"
            });

            alignCenter.click(function () {
                logoAlign = "Center"
            });

            alignRight.click(function () {
                logoAlign = "Right"
            });

            stamp5.click(function () {
                cardSlots = 5
            });

            stamp10.click(function () {
                cardSlots = 10
            });

            stamp15.click(function () {
                cardSlots = 15
            });

            colourPicker.change(function() {
                cardColour = colourPicker.val()
            });

            // When move to builder, commit create data
            btn2.click(function () {
                // output form data
                console.log("Title: " + cardTitle)
                console.log("Description: " + cardDescription)
                console.log("Logo Alignment: " + logoAlign)
                console.log("Num of stamps: " + cardSlots)
                console.log("Background Colour: " + cardColour)
            });
        });
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

.builder-container {
    width: 100%;
    height: calc(100vh - 80px);
}

.steps-container {
    width: 200px;
    height: calc(100vh - 80px);
    float: left;
}

.form-container {
    width: calc(100% - 200px);
    height: calc(100vh - 80px);
    float: left;
    overflow: scroll;
}

.step-row {
    width: 100%;
    height: 60px;
    margin-block: 10px;
    color: rgba(255, 255, 255, 0.125);
    transition: all 0.2s;
}

.step-btn:hover {
    color: white;
    cursor: pointer;
}

.step-row:first-child {
    margin-block-start: 0;
}

.step-row:last-child {
    margin-block-end: 0;
}

.step-align {
    width: 100%;
}

.step-btn-container {
    width: 45px;
    height: 45px;
    float: left;
}

.step-text-container {
    width: calc(100% - 45px);
    height: 45px;
    float: left;
}

.step-btn {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    border: 1px solid rgba(255, 255, 255, 0.125);
}

.btn-align {
    width: 100%;
    text-align: center;
}

.step-txt {
    width: 100%;
    margin-inline-start: 15px;
}

.separator-container {
    width: 45px;
}

.separator {
    width: 1px;
    margin: auto;
    height: 50px;
    background: rgba(255, 255, 255, 0.125);
}

.active-btn {
    background: white !important;
    color: #111111 !important;
    border: 1px solid white !important;
}

.active-txt {
    color: white !important;
}

.fc {
    display: none;
}

.fc-heading-container {
    width: 100%;
    height: 60px;
}

.fc-heading {
    width: 100%;
}

.fc-description {
    margin-block-end: 20px;
    color: white;
}

.create-row {
    width: 100%;
    margin-block-start: 50px;
    margin-block-end: 50px;
}

.create-row:first-child {
    margin-block-start: 0;
}

.create-label-container {
    width: 100%;
    height: 55px;
}

.create-label {
    width: auto;
    height: 55px;
    float: left;
}

.create-helper {
    width: 40px;
    height: 55px;
    float: left;
    margin-inline-start: 15px;
    font-size: 18px;

    position: relative;
}

.helper-txt-container {
    min-width: 500px;
    left: 0;
    background-color: #d1ecf1;
    border: 2px solid #bee5eb;
    border-radius: 12px;
    color: #0c548d;
    position: absolute;
}

.close-container {
    width: 36px;
    height: 75px;
    float: left;
}

.text-container {
    width: calc(100% - 36px);
    height: 75px;
    float: left;
    overflow: scroll;
}

.help-btn {
    opacity: 0.5;
    transition: all 0.2s;
}

.help-btn:hover {
    cursor: pointer;
    opacity: 1;
}

.logo-opt-container {
    width: calc(100% / 3);
    height: 85px;
    float: left;
}

.colour-opt-container {
    width: 100%;
    height: 85px;
}

.stamp-opt-container {
    width: calc(100% / 3);
    height: 170px;
    float: left;
}

.opt-align {
    width: 100%;
}

.opt {
    height: 60px;
    border: 1px solid rgba(255,255,255, 0.125);
    color: rgba(255,255,255, 0.125);
    background: #111111;
    border-radius: 12px;
    margin: auto;
    transition: all 0.2s;
    overflow: hidden;
}

.opt:hover {
    cursor: pointer;
    border: 1px solid rgba(255,255,255, 1);
    color: rgba(255,255,255, 1);
    background: rgba(255,255,255, 0.125);
}

.align-width {
    width: 60px;
}

.colour-width {
    width: 120px;
}

.stamp-opt {
    width: 80%;
    height: 150px;
    border: 1px solid rgba(255,255,255, 0.125);
    color: rgba(255,255,255, 0.125);
    background: #111111;
    border-radius: 12px;
    margin: auto;
    transition: all 0.2s;
    overflow: hidden;
}

.stamp-opt:hover {
    cursor: pointer;
    border: 1px solid rgba(255,255,255, 1);
    color: rgba(255,255,255, 1);
    background: rgba(255,255,255, 0.125);
}

.icon-align {
    width: 100%;
    text-align: center;
    font-size: 20px;
}

.stamp-align {
    width: 100%;
    text-align: center;
}

.build-content {
    width: 100%;
}

.stamp-element-container {
    width: 15%;
    height: 450px;
    float: left;
}

.card-element-container {
    width: 85%;
    height: 450px;
    float: left;

}

.element-card {
    width: 95%;
    height: 100%;
    margin: auto;
    border: 1px solid rgba(255, 255, 255, 0.125);
    border-radius: 12px;
    background-color: #141414;
}
</style>
