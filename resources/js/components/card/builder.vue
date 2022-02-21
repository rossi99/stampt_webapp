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


                            <!-- Logo Shape -->
                            <div class="create-row">
                                <div class="create-label-container">
                                    <div class="create-label alignMiddle subtitle">
                                        Logo Shape
                                    </div>

                                    <div class="create-helper alignMiddle">
                                        <div style="width: 100%; text-align: center;">
                                            <font-awesome-icon icon="fa-solid fa-circle-question" class="help-btn" id="logo-shape-helper-show"/>
                                        </div>

                                        <div class="helper-txt-container" id="logo-shape-helper" style="display: none;">
                                            <div class="close-container alignMiddle">
                                                <div style="width: 100%; text-align: center;">
                                                    <font-awesome-icon icon="fa-solid fa-circle-xmark" class="help-btn" id="logo-shape-helper-close" />
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
                                    <!-- Logo Circle -->
                                    <div class="shape-opt-container alignMiddle">
                                        <div class="opt-align">
                                            <div class="opt alignMiddle align-width" id="circle-logo">
                                                <div class="icon-align">
                                                    <font-awesome-icon icon="fa-solid fa-circle" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Logo Square -->
                                    <div class="shape-opt-container alignMiddle">
                                        <div class="opt-align">
                                            <div class="opt alignMiddle align-width" id="square-logo">
                                                <div class="icon-align">
                                                    <font-awesome-icon icon="fa-solid fa-square" />
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
                                    <div class="element-card" style="overflow: scroll">
                                        <!-- Stamp Option 1 -->
                                        <div class="stamp-element-row">
                                            <img src="/img/stamps/grey/1.png" alt="Stamp Style 3" class="stamp">
                                        </div>

                                        <!-- Stamp Option 2 -->
                                        <div class="stamp-element-row">
                                            <img src="/img/stamps/grey/2.png" alt="Stamp Style 3" class="stamp">
                                        </div>

                                        <!-- Stamp Option 3 -->
                                        <div class="stamp-element-row">
                                            <img src="/img/stamps/grey/3.png" alt="Stamp Style 3" class="stamp">
                                        </div>

                                        <!-- Stamp Option 4 -->
                                        <div class="stamp-element-row">
                                            <img src="/img/stamps/black/1.png" alt="Stamp Style 3" class="stamp">
                                        </div>

                                        <!-- Stamp Option 5 -->
                                        <div class="stamp-element-row">
                                            <img src="/img/stamps/black/2.png" alt="Stamp Style 3" class="stamp">
                                        </div>

                                        <!-- Stamp Option 6 -->
                                        <div class="stamp-element-row">
                                            <img src="/img/stamps/black/3.png" alt="Stamp Style 3" class="stamp">
                                        </div>

                                        <!-- Stamp Option 7 -->
                                        <div class="stamp-element-row">
                                            <img src="/img/stamps/white/1.png" alt="Stamp Style 3" class="stamp">
                                        </div>

                                        <!-- Stamp Option 8 -->
                                        <div class="stamp-element-row">
                                            <img src="/img/stamps/white/2.png" alt="Stamp Style 3" class="stamp">
                                        </div>

                                        <!-- Stamp Option 9 -->
                                        <div class="stamp-element-row">
                                            <img src="/img/stamps/white/3.png" alt="Stamp Style 3" class="stamp">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-element-container alignMiddle">
                                    <div class="element-card alignMiddle">
                                        <div class="card-holder">
                                            <div class="builder-card">
                                                <!-- logo and stamp container -->
                                                <div class="stamp-logo-holder">
                                                    <!-- Logo Row -->
                                                    <div class="stamp-logo-container logo-row" id="logo-row">
                                                        <div class="logo-align-container alignMiddle">
                                                            <div class="sample-logo-align">
                                                                <div class="sample-logo-container">
                                                                    <img src="/img/stamps/sample-logo.jpg" alt="A sample logo for a coffee shop" class="sample-logo">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Stamp Rows -->
                                                    <div class="stamp-logo-container stamp-bucket-row" id="stamp-row-1">
                                                        <div class="bucket-container alignMiddle">
                                                            <div class="bucket empty">

                                                            </div>
                                                        </div>

                                                        <div class="bucket-container alignMiddle">
                                                            <div class="bucket empty">

                                                            </div>
                                                        </div>

                                                        <div class="bucket-container alignMiddle">
                                                            <div class="bucket empty">

                                                            </div>
                                                        </div>

                                                        <div class="bucket-container alignMiddle">
                                                            <div class="bucket empty">

                                                            </div>
                                                        </div>

                                                        <div class="bucket-container alignMiddle">
                                                            <div class="bucket empty">

                                                            </div>
                                                        </div>

                                                        <div class="clearFix"></div>
                                                    </div>

                                                    <div class="stamp-logo-container stamp-bucket-row" id="stamp-row-2">
                                                        <div class="bucket-container alignMiddle">
                                                            <div class="bucket empty">

                                                            </div>
                                                        </div>

                                                        <div class="bucket-container alignMiddle">
                                                            <div class="bucket empty">

                                                            </div>
                                                        </div>

                                                        <div class="bucket-container alignMiddle">
                                                            <div class="bucket empty">

                                                            </div>
                                                        </div>

                                                        <div class="bucket-container alignMiddle">
                                                            <div class="bucket empty">

                                                            </div>
                                                        </div>

                                                        <div class="bucket-container alignMiddle">
                                                            <div class="bucket empty">

                                                            </div>
                                                        </div>

                                                        <div class="clearFix"></div>
                                                    </div>

                                                    <div class="stamp-logo-container stamp-bucket-row" id="stamp-row-3">
                                                        <div class="bucket-container alignMiddle">
                                                            <div class="bucket empty">

                                                            </div>
                                                        </div>

                                                        <div class="bucket-container alignMiddle">
                                                            <div class="bucket empty">

                                                            </div>
                                                        </div>

                                                        <div class="bucket-container alignMiddle">
                                                            <div class="bucket empty">

                                                            </div>
                                                        </div>

                                                        <div class="bucket-container alignMiddle">
                                                            <div class="bucket empty">

                                                            </div>
                                                        </div>

                                                        <div class="bucket-container alignMiddle">
                                                            <div class="bucket empty">

                                                            </div>
                                                        </div>

                                                        <div class="clearFix"></div>
                                                    </div>
                                                </div>

                                                <div class="clearFix"></div>
                                            </div>
                                        </div>
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
            let logoShape
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

            let logoShapeHelper = $('#logo-shape-helper')
            let logoShapeHelpShow = $('#logo-shape-helper-show')
            let logoShapeHelpHide = $('#logo-shape-helper-close')

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

            let circleLogo = $('#circle-logo')
            let squareLogo = $('#square-logo')

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

            //      - Logo Shape
            logoShapeHelpShow.click(function () {
                logoShapeHelper.fadeIn(200)
            });

            logoShapeHelpHide.click(function () {
                logoShapeHelper.fadeOut(200)
            });

            circleLogo.click(function () {
                logoShapeHelper.fadeOut(200)
            });

            squareLogo.click(function () {
                logoShapeHelper.fadeOut(200)
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

            // Setting shape of logo
            circleLogo.click(function () {
                // removing from other buttons
                squareLogo.removeClass('active-btn')

                // adding class to active button
                circleLogo.addClass('active-btn')
            });

            squareLogo.click(function () {
                // removing from other buttons
                circleLogo.removeClass('active-btn')

                // adding class to active button
                squareLogo.addClass('active-btn')
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
            //      set defaults
            cardTitle = "Untitled Card"
            cardDescription = "This is the card Description"
            logoAlign = "Left"
            logoShape = "Square"
            cardSlots = 5
            cardColour = colourPicker.val()

            //      handling changes from user
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

            circleLogo.click(function () {
                logoShape = "Circle"
            });

            squareLogo.click(function () {
                logoShape = "Square"
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


            // ~ Builder
            // Variables
            let logo = $('.sample-logo-container')
            let logoPosition = $('.logo-align-container')
            let cardHolder = $('.builder-card')
            let stampRow1 = $('#stamp-row-1')
            let stampRow2 = $('#stamp-row-2')
            let stampRow3 = $('#stamp-row-3')


            // When move to builder, commit create data
            btn2.click(function () {
                // output form data (Just output to console)
                console.log("Title: " + cardTitle)
                console.log("Description: " + cardDescription)
                console.log("Logo Alignment: " + logoAlign)
                console.log("Logo Shape: " + logoShape)
                console.log("Num of stamps: " + cardSlots)
                console.log("Background Colour: " + cardColour)

                // Making builder dynamic to create options
                // ~ Logo Shape
                if (logoShape === "Square") {
                    // remove incorrect class
                    logo.removeClass('circle-logo')

                    // add correct class
                    logo.addClass('square-logo')
                }

                if (logoShape === "Circle") {
                    // remove incorrect class
                    logo.removeClass('square-logo')

                    // add correct class
                    logo.addClass('circle-logo')
                }

                // ~ Logo Align
                if (logoAlign === "Left") {
                    // remove incorrect class
                    logoPosition.removeClass('logo-align-middle')
                    logoPosition.removeClass('logo-align-right')
                    logo.removeClass('logo-align-middle')
                    logo.removeClass('m-inline-e')

                    // add correct classes
                    logoPosition.addClass('logo-align-left')
                    logo.addClass('m-inline-s')
                }

                if (logoAlign === "Center") {
                    // remove incorrect class
                    logoPosition.removeClass('logo-align-left')
                    logoPosition.removeClass('logo-align-right')
                    logo.removeClass('m-inline-s')
                    logo.removeClass('m-inline-e')

                    // add correct classes
                    logoPosition.addClass('logo-align-middle')
                    logo.addClass('logo-align-middle')
                }

                if (logoAlign === "Right") {
                    // remove incorrect class
                    logoPosition.removeClass('logo-align-left')
                    logoPosition.removeClass('logo-align-middle')
                    logo.removeClass('m-inline-s')
                    logo.removeClass('logo-align-middle')

                    // add correct classes
                    logoPosition.addClass('logo-align-right')
                    logo.addClass('m-inline-e')
                }

                //  ~ Stamp slots
                if (cardSlots === 5) {
                    // showing correct rows
                    stampRow1.show()
                    stampRow2.hide()
                    stampRow3.hide()

                    // remove incorrect height class
                    cardHolder.removeClass('two-stamp-row-height')
                    cardHolder.removeClass('three-stamp-row-height')

                    // add correct height class
                    cardHolder.addClass('one-stamp-row-height')
                }

                if (cardSlots === 10) {
                    // showing correct rows
                    stampRow1.show()
                    stampRow2.show()
                    stampRow3.hide()

                    // remove incorrect height class
                    cardHolder.removeClass('one-stamp-row-height')
                    cardHolder.removeClass('three-stamp-row-height')

                    // add correct height class
                    cardHolder.addClass('two-stamp-row-height')
                }

                if (cardSlots === 15) {
                    // showing correct rows
                    stampRow1.show()
                    stampRow2.show()
                    stampRow3.show()

                    // remove incorrect height class
                    cardHolder.removeClass('one-stamp-row-height')
                    cardHolder.removeClass('two-stamp-row-height')

                    // add correct height class
                    cardHolder.addClass('three-stamp-row-height')
                }

                cardHolder.css("background-color", cardColour)
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

.shape-opt-container {
    width: calc(100% / 2);
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
    width: 150px;
    height: 475px;
    float: left;
}

.card-element-container {
    width: calc(100% - 150px);
    height: 475px;
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

.stamp-element-row {
    width: 100%;
    margin-block-start: 30px;
    margin-block-end: 30px;
    text-align: center;
}

.stamp {
    width: 60px;
    height: 60px;
}

.stamp:hover {
    cursor: pointer;
}

.card-holder {
    width: 100%;
}

.builder-card {
    width: 500px;
    min-height: 150px;
    background: #141414;
    border-radius: 20px;
    border: 3px solid rgb(44, 44, 44);
    box-shadow: 0 0 50px 0 rgb(0, 0, 0, 0.5);
    margin: auto;
    position: relative;
}

.one-stamp-row-height {
    height: 150px;
}

.two-stamp-row-height {
    height: 250px;
}

.three-stamp-row-height {
    height: 350px;
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

.logo-align-container {
    width: calc(100% / 3);
    height: 100px;
}

.logo-align-left {
    float: left;
}

.logo-align-middle {
    margin: auto;
}

.logo-align-right {
    float: right;
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

.sample-logo-align {
     width: 100%;
 }

.circle-logo {
    border-radius: 50%;
}

.square-logo {
    border-radius: 10px;
}

.m-inline-s {
    float: left;
    margin-inline-start: 20px;
}

.m-inline-e {
    float: right;
    margin-inline-end: 20px;
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

.empty {
    border: 1px dashed rgb(44, 44, 44);
    border-radius: 10px;
    backdrop-filter: blur(10px) saturate(200%);
    -webkit-backdrop-filter: blur(10px) saturate(200%);
    box-shadow: 0 8px 32px 0 rgba( 0, 0, 0, 0.5 );
}
</style>
