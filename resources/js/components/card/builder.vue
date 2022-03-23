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
                        <!-- Step 1: Create Button -->
                        <div class="step-row alignMiddle" id="create-section-btn">
                            <div class="step-align stampt-font">
                                <div class="step-btn-container">
                                    <div class="step-btn alignMiddle" id="btn-1">
                                        <div class="btn-align">
                                            <div class="btn-number">
                                                <p>1</p>
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
                        <div class="separator-container" id="build-section-divider">
                            <div class="separator"></div>
                        </div>

                        <!-- Step 2: Builder Button -->
                        <div class="step-row alignMiddle" id="build-section-btn">
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
                        <div class="separator-container" id="preview-section-divider">
                            <div class="separator"></div>
                        </div>

                        <!-- Step 3: Preview Button -->
                        <div class="step-row alignMiddle" id="preview-section-btn">
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
                        <div class="loading-screen-container alignMiddle">
                            <div class="centerScreen">
                                <img src="/img/logo/compressed/small-icon.png" alt="Stampt Logo" class="loading-logo">
                                <h3>Hold tight!</h3>
                                <p>We are currently putting your card together!</p>
                            </div>
                        </div>

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
                                                    Your logo can be circular or square in shape to fit the design of your logo. This can be chosen,
                                                    then checked in the builder and if the shape doesn't fit, then you can change it to the other shape.
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

                                    <div class="clearFix"></div>
                                </div>
                            </div>


                            <!-- Background Colour -->
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

                            <!-- Font Colour -->
                            <div class="create-row">
                                <div class="create-label-container">
                                    <div class="create-label alignMiddle subtitle">
                                        Font Colour
                                    </div>

                                    <div class="create-helper alignMiddle">
                                        <div style="width: 100%; text-align: center;">
                                            <font-awesome-icon icon="fa-solid fa-circle-question" class="help-btn" id="font-helper-show"/>
                                        </div>

                                        <div class="helper-txt-container" id="font-helper" style="display: none;">
                                            <div class="close-container alignMiddle">
                                                <div style="width: 100%; text-align: center;">
                                                    <font-awesome-icon icon="fa-solid fa-circle-xmark" class="help-btn" id="font-helper-close" />
                                                </div>
                                            </div>

                                            <div class="text-container details">
                                                <div style="padding: 5px; letter-spacing: 1px">
                                                    It is important to change the colour of your font so that it doesn't clash with the
                                                    background colour of your card. This means that your customers will be able to easily read
                                                    the details of your card.
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
                                            <div class="opt colour-width" id="font-opt">
                                                <input type="color" id="font-input" class="stampt-input-color" value="#FFFFFF">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="fc build-container">
                            <div class="head-Desc-container" style="margin-block-end: 20px;">
                                <div class="fc-heading-container alignMiddle">
                                    <div class="fc-heading subtitle stampt-font">
                                        Build Your Card
                                    </div>
                                </div>

                                <div class="fc-description">
                                    You're almost most done creating your new loyalty card. The last thing to do is
                                    place stamp elements inside the buckets. After adding a stamp, a customer will see
                                    a filled stamp element instead of the empty one currently being added. Stampt doesn't
                                    allow for custom filled stampt elements.
                                </div>
                            </div>

                            <div class="build-content">
                                <div class="stamp-element-container alignMiddle">
                                    <div class="element-panel" style="overflow: scroll">
                                        <div class="draggable-element-container">
                                            <!-- Draggable Stamps -->
                                            <draggable :list="cardElements" :group="{ name: 'cardItem', pull: 'clone', put: false }" @change="log">
                                                <div class="stamp-element-row" v-for="element in cardElements" :key="element.id" style="cursor: move">
                                                    <!-- Grey Stamps -->
                                                    <div v-if="element.id === 1">
                                                        <img src="/img/stamps/compressed/grey/3.png"
                                                             alt="This is the third style of stamp in a a grey colour"
                                                             class="stamp">
                                                    </div>

                                                    <div v-if="element.id === 2">
                                                        <img src="/img/stamps/compressed/black/3.png"
                                                             alt="This is the third style of stamp in a a black colour"
                                                             class="stamp">
                                                    </div>

                                                    <div v-if="element.id === 3">
                                                        <img src="/img/stamps/compressed/white/3.png"
                                                             alt="This is the third style of stamp in a a white colour"
                                                             class="stamp">
                                                    </div>
                                                </div>
                                            </draggable>
                                        </div>

                                        <div class="clear-card-container alignMiddle" id="clear-stamps-btn" @click="clearStamps">
                                            <div class="clear-stamps-btn">
                                                Clear Stamps
                                            </div>
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
                                                            <div class="bucket empty" id="bucketA">
                                                                <draggable class="drop-area alignMiddle" :list="arrA" group="cardItem" @change="log">
                                                                    <div class="bucket-align">
                                                                        <div v-for="element in arrA" :key="element.id">
                                                                            <div v-if="element.id === 1">
                                                                                <img src="/img/stamps/compressed/grey/3.png"
                                                                                     alt="This is the first style of stamp in a a grey colour"
                                                                                     class="stamp">
                                                                            </div>

                                                                            <div v-if="element.id === 2">
                                                                                <img src="/img/stamps/compressed/black/3.png"
                                                                                     alt="This is the third style of stamp in a a black colour"
                                                                                     class="stamp">
                                                                            </div>

                                                                            <div v-if="element.id === 3">
                                                                                <img src="/img/stamps/compressed/white/3.png"
                                                                                     alt="This is the third style of stamp in a a white colour"
                                                                                     class="stamp">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </draggable>
                                                            </div>
                                                        </div>

                                                        <div class="bucket-container alignMiddle">
                                                            <div class="bucket empty" id="bucketB">
                                                                <draggable class="drop-area alignMiddle" :list="arrB" group="cardItem" @change="log">
                                                                    <div class="bucket-align">
                                                                        <div v-for="element in arrB" :key="element.id">
                                                                            <div v-if="element.id === 1">
                                                                                <img src="/img/stamps/compressed/grey/3.png"
                                                                                     alt="This is the first style of stamp in a a grey colour"
                                                                                     class="stamp">
                                                                            </div>

                                                                            <div v-if="element.id === 2">
                                                                                <img src="/img/stamps/compressed/black/3.png"
                                                                                     alt="This is the third style of stamp in a a black colour"
                                                                                     class="stamp">
                                                                            </div>

                                                                            <div v-if="element.id === 3">
                                                                                <img src="/img/stamps/compressed/white/3.png"
                                                                                     alt="This is the third style of stamp in a a white colour"
                                                                                     class="stamp">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </draggable>
                                                            </div>
                                                        </div>

                                                        <div class="bucket-container alignMiddle">
                                                            <div class="bucket empty" id="bucketC">
                                                                <draggable class="drop-area alignMiddle" :list="arrC" group="cardItem" @change="log">
                                                                    <div class="bucket-align">
                                                                        <div v-for="element in arrC" :key="element.id">
                                                                            <div v-if="element.id === 1">
                                                                                <img src="/img/stamps/compressed/grey/3.png"
                                                                                     alt="This is the first style of stamp in a a grey colour"
                                                                                     class="stamp">
                                                                            </div>

                                                                            <div v-if="element.id === 2">
                                                                                <img src="/img/stamps/compressed/black/3.png"
                                                                                     alt="This is the third style of stamp in a a black colour"
                                                                                     class="stamp">
                                                                            </div>

                                                                            <div v-if="element.id === 3">
                                                                                <img src="/img/stamps/compressed/white/3.png"
                                                                                     alt="This is the third style of stamp in a a white colour"
                                                                                     class="stamp">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </draggable>
                                                            </div>
                                                        </div>

                                                        <div class="bucket-container alignMiddle">
                                                            <div class="bucket empty" id="bucketD">
                                                                <draggable class="drop-area alignMiddle" :list="arrD" group="cardItem" @change="log">
                                                                    <div class="bucket-align">
                                                                        <div v-for="element in arrD" :key="element.id">
                                                                            <div v-if="element.id === 1">
                                                                                <img src="/img/stamps/compressed/grey/3.png"
                                                                                     alt="This is the first style of stamp in a a grey colour"
                                                                                     class="stamp">
                                                                            </div>

                                                                            <div v-if="element.id === 2">
                                                                                <img src="/img/stamps/compressed/black/3.png"
                                                                                     alt="This is the third style of stamp in a a black colour"
                                                                                     class="stamp">
                                                                            </div>

                                                                            <div v-if="element.id === 3">
                                                                                <img src="/img/stamps/compressed/white/3.png"
                                                                                     alt="This is the third style of stamp in a a white colour"
                                                                                     class="stamp">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </draggable>
                                                            </div>
                                                        </div>

                                                        <div class="bucket-container alignMiddle">
                                                            <div class="bucket empty" id="bucketE">
                                                                <draggable class="drop-area alignMiddle" :list="arrE" group="cardItem" @change="log">
                                                                    <div class="bucket-align">
                                                                        <div v-for="element in arrE" :key="element.id">
                                                                            <div v-if="element.id === 1">
                                                                                <img src="/img/stamps/compressed/grey/3.png"
                                                                                     alt="This is the first style of stamp in a a grey colour"
                                                                                     class="stamp">
                                                                            </div>

                                                                            <div v-if="element.id === 2">
                                                                                <img src="/img/stamps/compressed/black/3.png"
                                                                                     alt="This is the third style of stamp in a a black colour"
                                                                                     class="stamp">
                                                                            </div>

                                                                            <div v-if="element.id === 3">
                                                                                <img src="/img/stamps/compressed/white/3.png"
                                                                                     alt="This is the third style of stamp in a a white colour"
                                                                                     class="stamp">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </draggable>
                                                            </div>
                                                        </div>

                                                        <div class="clearFix"></div>
                                                    </div>

                                                    <div class="stamp-logo-container stamp-bucket-row" id="stamp-row-2">
                                                        <div class="bucket-container alignMiddle">
                                                            <div class="bucket empty" id="bucketF">
                                                                <draggable class="drop-area alignMiddle" :list="arrF" group="cardItem" @change="log">
                                                                    <div class="bucket-align">
                                                                        <div v-for="element in arrF" :key="element.id">
                                                                            <div v-if="element.id === 1">
                                                                                <img src="/img/stamps/compressed/grey/3.png"
                                                                                     alt="This is the first style of stamp in a a grey colour"
                                                                                     class="stamp">
                                                                            </div>

                                                                            <div v-if="element.id === 2">
                                                                                <img src="/img/stamps/compressed/black/3.png"
                                                                                     alt="This is the third style of stamp in a a black colour"
                                                                                     class="stamp">
                                                                            </div>

                                                                            <div v-if="element.id === 3">
                                                                                <img src="/img/stamps/compressed/white/3.png"
                                                                                     alt="This is the third style of stamp in a a white colour"
                                                                                     class="stamp">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </draggable>
                                                            </div>
                                                        </div>

                                                        <div class="bucket-container alignMiddle">
                                                            <div class="bucket empty" id="bucketG">
                                                                <draggable class="drop-area alignMiddle" :list="arrG" group="cardItem" @change="log">
                                                                    <div class="bucket-align">
                                                                        <div v-for="element in arrG" :key="element.id">
                                                                            <div v-if="element.id === 1">
                                                                                <img src="/img/stamps/compressed/grey/3.png"
                                                                                     alt="This is the first style of stamp in a a grey colour"
                                                                                     class="stamp">
                                                                            </div>

                                                                            <div v-if="element.id === 2">
                                                                                <img src="/img/stamps/compressed/black/3.png"
                                                                                     alt="This is the third style of stamp in a a black colour"
                                                                                     class="stamp">
                                                                            </div>

                                                                            <div v-if="element.id === 3">
                                                                                <img src="/img/stamps/compressed/white/3.png"
                                                                                     alt="This is the third style of stamp in a a white colour"
                                                                                     class="stamp">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </draggable>
                                                            </div>
                                                        </div>

                                                        <div class="bucket-container alignMiddle">
                                                            <div class="bucket empty" id="bucketH">
                                                                <draggable class="drop-area alignMiddle" :list="arrH" group="cardItem" @change="log">
                                                                    <div class="bucket-align">
                                                                        <div v-for="element in arrH" :key="element.id">
                                                                            <div v-if="element.id === 1">
                                                                                <img src="/img/stamps/compressed/grey/3.png"
                                                                                     alt="This is the first style of stamp in a a grey colour"
                                                                                     class="stamp">
                                                                            </div>

                                                                            <div v-if="element.id === 2">
                                                                                <img src="/img/stamps/compressed/black/3.png"
                                                                                     alt="This is the third style of stamp in a a black colour"
                                                                                     class="stamp">
                                                                            </div>

                                                                            <div v-if="element.id === 3">
                                                                                <img src="/img/stamps/compressed/white/3.png"
                                                                                     alt="This is the third style of stamp in a a white colour"
                                                                                     class="stamp">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </draggable>
                                                            </div>
                                                        </div>

                                                        <div class="bucket-container alignMiddle">
                                                            <div class="bucket empty" id="bucketI">
                                                                <draggable class="drop-area alignMiddle" :list="arrI" group="cardItem" @change="log">
                                                                    <div class="bucket-align">
                                                                        <div v-for="element in arrI" :key="element.id">
                                                                            <div v-if="element.id === 1">
                                                                                <img src="/img/stamps/compressed/grey/3.png"
                                                                                     alt="This is the first style of stamp in a a grey colour"
                                                                                     class="stamp">
                                                                            </div>

                                                                            <div v-if="element.id === 2">
                                                                                <img src="/img/stamps/compressed/black/3.png"
                                                                                     alt="This is the third style of stamp in a a black colour"
                                                                                     class="stamp">
                                                                            </div>

                                                                            <div v-if="element.id === 3">
                                                                                <img src="/img/stamps/compressed/white/3.png"
                                                                                     alt="This is the third style of stamp in a a white colour"
                                                                                     class="stamp">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </draggable>
                                                            </div>
                                                        </div>

                                                        <div class="bucket-container alignMiddle">
                                                            <div class="bucket empty" id="bucketJ">
                                                                <draggable class="drop-area alignMiddle" :list="arrJ" group="cardItem" @change="log">
                                                                    <div class="bucket-align">
                                                                        <div v-for="element in arrJ" :key="element.id">
                                                                            <div v-if="element.id === 1">
                                                                                <img src="/img/stamps/compressed/grey/3.png"
                                                                                     alt="This is the first style of stamp in a a grey colour"
                                                                                     class="stamp">
                                                                            </div>

                                                                            <div v-if="element.id === 2">
                                                                                <img src="/img/stamps/compressed/black/3.png"
                                                                                     alt="This is the third style of stamp in a a black colour"
                                                                                     class="stamp">
                                                                            </div>

                                                                            <div v-if="element.id === 3">
                                                                                <img src="/img/stamps/compressed/white/3.png"
                                                                                     alt="This is the third style of stamp in a a white colour"
                                                                                     class="stamp">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </draggable>
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
                                So you've designed your loyalty card, hurray! If you are happy with it, you can confirm
                                it and if not, to go back and change your design. After, it will be published to the
                                marketplace where you customers will be able to use it.
                            </div>

                            <div class="preview-content alignMiddle">
                                <div class="preview-card-container">
                                    <div class="preview-card">
                                        <!-- logo and stamp container -->
                                        <div class="stamp-logo-holder">
                                            <!-- Logo Row -->
                                            <div class="stamp-logo-container logo-row">
                                                <div class="logo-align-container alignMiddle">
                                                    <div class="sample-logo-align">
                                                        <div class="sample-logo-container">
                                                            <img src="/img/stamps/sample-logo.jpg" alt="A sample logo for a coffee shop" class="sample-logo">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="preview-txt-container">
                                                <div class="preview-title-container">
                                                    <p class="preview-title"></p>
                                                </div>

                                                <div class="preview-desc-container">
                                                    <p class="preview-desc"></p>
                                                </div>
                                            </div>

                                            <!-- Stamp Rows -->
                                            <div class="stamp-logo-container stamp-bucket-row" id="preview-stamp-row-1">
                                                <div class="bucket-container alignMiddle">
                                                    <div class="bucket">
                                                        <div class="drop-area alignMiddle">
                                                            <div class="bucket-align">
                                                                <div v-for="element in arrA" :key="element.id">
                                                                    <div v-if="element.id === 1">
                                                                        <img src="/img/stamps/compressed/grey/3.png"
                                                                             alt="This is the first style of stamp in a a grey colour"
                                                                             class="stamp">
                                                                    </div>

                                                                    <div v-if="element.id === 2">
                                                                        <img src="/img/stamps/compressed/black/3.png"
                                                                             alt="This is the third style of stamp in a a black colour"
                                                                             class="stamp">
                                                                    </div>

                                                                    <div v-if="element.id === 3">
                                                                        <img src="/img/stamps/compressed/white/3.png"
                                                                             alt="This is the third style of stamp in a a white colour"
                                                                             class="stamp">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bucket-container alignMiddle">
                                                    <div class="bucket">
                                                        <div class="drop-area alignMiddle">
                                                            <div class="bucket-align">
                                                                <div v-for="element in arrB" :key="element.id">
                                                                    <div v-if="element.id === 1">
                                                                        <img src="/img/stamps/compressed/grey/3.png"
                                                                             alt="This is the first style of stamp in a a grey colour"
                                                                             class="stamp">
                                                                    </div>

                                                                    <div v-if="element.id === 2">
                                                                        <img src="/img/stamps/compressed/black/3.png"
                                                                             alt="This is the third style of stamp in a a black colour"
                                                                             class="stamp">
                                                                    </div>

                                                                    <div v-if="element.id === 3">
                                                                        <img src="/img/stamps/compressed/white/3.png"
                                                                             alt="This is the third style of stamp in a a white colour"
                                                                             class="stamp">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bucket-container alignMiddle">
                                                    <div class="bucket">
                                                        <div class="drop-area alignMiddle">
                                                            <div class="bucket-align">
                                                                <div v-for="element in arrC" :key="element.id">
                                                                    <div v-if="element.id === 1">
                                                                        <img src="/img/stamps/compressed/grey/3.png"
                                                                             alt="This is the first style of stamp in a a grey colour"
                                                                             class="stamp">
                                                                    </div>

                                                                    <div v-if="element.id === 2">
                                                                        <img src="/img/stamps/compressed/black/3.png"
                                                                             alt="This is the third style of stamp in a a black colour"
                                                                             class="stamp">
                                                                    </div>

                                                                    <div v-if="element.id === 3">
                                                                        <img src="/img/stamps/compressed/white/3.png"
                                                                             alt="This is the third style of stamp in a a white colour"
                                                                             class="stamp">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bucket-container alignMiddle">
                                                    <div class="bucket">
                                                        <div class="drop-area alignMiddle">
                                                            <div class="bucket-align">
                                                                <div v-for="element in arrD" :key="element.id">
                                                                    <div v-if="element.id === 1">
                                                                        <img src="/img/stamps/compressed/grey/3.png"
                                                                             alt="This is the first style of stamp in a a grey colour"
                                                                             class="stamp">
                                                                    </div>

                                                                    <div v-if="element.id === 2">
                                                                        <img src="/img/stamps/compressed/black/3.png"
                                                                             alt="This is the third style of stamp in a a black colour"
                                                                             class="stamp">
                                                                    </div>

                                                                    <div v-if="element.id === 3">
                                                                        <img src="/img/stamps/compressed/white/3.png"
                                                                             alt="This is the third style of stamp in a a white colour"
                                                                             class="stamp">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bucket-container alignMiddle">
                                                    <div class="bucket">
                                                        <div class="drop-area alignMiddle">
                                                            <div class="bucket-align">
                                                                <div v-for="element in arrE" :key="element.id">
                                                                    <div v-if="element.id === 1">
                                                                        <img src="/img/stamps/compressed/grey/3.png"
                                                                             alt="This is the first style of stamp in a a grey colour"
                                                                             class="stamp">
                                                                    </div>

                                                                    <div v-if="element.id === 2">
                                                                        <img src="/img/stamps/compressed/black/3.png"
                                                                             alt="This is the third style of stamp in a a black colour"
                                                                             class="stamp">
                                                                    </div>

                                                                    <div v-if="element.id === 3">
                                                                        <img src="/img/stamps/compressed/white/3.png"
                                                                             alt="This is the third style of stamp in a a white colour"
                                                                             class="stamp">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="clearFix"></div>
                                            </div>

                                            <div class="stamp-logo-container stamp-bucket-row" id="preview-stamp-row-2">
                                                <div class="bucket-container alignMiddle">
                                                    <div class="bucket">
                                                        <div class="drop-area alignMiddle">
                                                            <div class="bucket-align">
                                                                <div v-for="element in arrF" :key="element.id">
                                                                    <div v-if="element.id === 1">
                                                                        <img src="/img/stamps/compressed/grey/3.png"
                                                                             alt="This is the first style of stamp in a a grey colour"
                                                                             class="stamp">
                                                                    </div>

                                                                    <div v-if="element.id === 2">
                                                                        <img src="/img/stamps/compressed/black/3.png"
                                                                             alt="This is the third style of stamp in a a black colour"
                                                                             class="stamp">
                                                                    </div>

                                                                    <div v-if="element.id === 3">
                                                                        <img src="/img/stamps/compressed/white/3.png"
                                                                             alt="This is the third style of stamp in a a white colour"
                                                                             class="stamp">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bucket-container alignMiddle">
                                                    <div class="bucket">
                                                        <div class="drop-area alignMiddle">
                                                            <div class="bucket-align">
                                                                <div v-for="element in arrG" :key="element.id">
                                                                    <div v-if="element.id === 1">
                                                                        <img src="/img/stamps/compressed/grey/3.png"
                                                                             alt="This is the first style of stamp in a a grey colour"
                                                                             class="stamp">
                                                                    </div>

                                                                    <div v-if="element.id === 2">
                                                                        <img src="/img/stamps/compressed/black/3.png"
                                                                             alt="This is the third style of stamp in a a black colour"
                                                                             class="stamp">
                                                                    </div>

                                                                    <div v-if="element.id === 3">
                                                                        <img src="/img/stamps/compressed/white/3.png"
                                                                             alt="This is the third style of stamp in a a white colour"
                                                                             class="stamp">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bucket-container alignMiddle">
                                                    <div class="bucket">
                                                        <div class="drop-area alignMiddle">
                                                            <div class="bucket-align">
                                                                <div v-for="element in arrH" :key="element.id">
                                                                    <div v-if="element.id === 1">
                                                                        <img src="/img/stamps/compressed/grey/3.png"
                                                                             alt="This is the first style of stamp in a a grey colour"
                                                                             class="stamp">
                                                                    </div>

                                                                    <div v-if="element.id === 2">
                                                                        <img src="/img/stamps/compressed/black/3.png"
                                                                             alt="This is the third style of stamp in a a black colour"
                                                                             class="stamp">
                                                                    </div>

                                                                    <div v-if="element.id === 3">
                                                                        <img src="/img/stamps/compressed/white/3.png"
                                                                             alt="This is the third style of stamp in a a white colour"
                                                                             class="stamp">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bucket-container alignMiddle">
                                                    <div class="bucket">
                                                        <div class="drop-area alignMiddle">
                                                            <div class="bucket-align">
                                                                <div v-for="element in arrI" :key="element.id">
                                                                    <div v-if="element.id === 1">
                                                                        <img src="/img/stamps/compressed/grey/3.png"
                                                                             alt="This is the first style of stamp in a a grey colour"
                                                                             class="stamp">
                                                                    </div>

                                                                    <div v-if="element.id === 2">
                                                                        <img src="/img/stamps/compressed/black/3.png"
                                                                             alt="This is the third style of stamp in a a black colour"
                                                                             class="stamp">
                                                                    </div>

                                                                    <div v-if="element.id === 3">
                                                                        <img src="/img/stamps/compressed/white/3.png"
                                                                             alt="This is the third style of stamp in a a white colour"
                                                                             class="stamp">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bucket-container alignMiddle">
                                                    <div class="bucket">
                                                        <div class="drop-area alignMiddle">
                                                            <div class="bucket-align">
                                                                <div v-for="element in arrJ" :key="element.id">
                                                                    <div v-if="element.id === 1">
                                                                        <img src="/img/stamps/compressed/grey/3.png"
                                                                             alt="This is the first style of stamp in a a grey colour"
                                                                             class="stamp">
                                                                    </div>

                                                                    <div v-if="element.id === 2">
                                                                        <img src="/img/stamps/compressed/black/3.png"
                                                                             alt="This is the third style of stamp in a a black colour"
                                                                             class="stamp">
                                                                    </div>

                                                                    <div v-if="element.id === 3">
                                                                        <img src="/img/stamps/compressed/white/3.png"
                                                                             alt="This is the third style of stamp in a a white colour"
                                                                             class="stamp">
                                                                    </div>
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

                            <div class="preview-button-container">
                                <div class="cancel-btn-container alignMiddle">
                                    <div class="btn-text-align">
                                        <font-awesome-icon icon="fa-solid fa-trash" class="l-icon-spacing" />
                                        <span>Discard Card</span>
                                    </div>
                                </div>

                                <div class="submit-btn-container alignMiddle">
                                    <div class="btn-text-align">
                                        <font-awesome-icon icon="fa-solid fa-arrow-up-from-bracket" class="l-icon-spacing" />
                                        <span>Publish Card</span>
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
import draggable from 'vuedraggable';

export default {
    name: "clone",
    display: "Clone",
    order: 2,
    components: {
        Sidebar,
        draggable
    },
    mounted() {
        // ~ Variables & Defaults
        // Section Vars
        let btn1 = $('#btn-1');
        let btn2 = $('#btn-2');
        let btn3 = $('#btn-3');
        let btn1Txt = $('#btn-1-txt');
        let btn2Txt = $('#btn-2-txt');
        let btn3Txt = $('#btn-3-txt');
        let create = $('.create-container');
        let build = $('.build-container');
        let preview = $('.preview-container');

        // Loading Screen Vars
        let showLoading = false;
        let loadingScreen = $('.loading-screen-container')

        // Create Form Vars
        let cardTitle;
        let cardDescription;
        let logoAlign;
        let logoShape;
        let cardSlots;
        let cardColour;
        let fontColour;

        // Helpers Vars
        let titleHelper = $('#title-helper');
        let titleHelpShow = $('#title-helper-show');
        let titleHelpHide = $('#title-helper-close');
        let titleInput = $('#title-input');
        let descHelper = $('#desc-helper');
        let descHelpShow = $('#desc-helper-show');
        let descHelpHide = $('#desc-helper-close');
        let descInput = $('#desc-input');
        let logoHelper = $('#logo-helper');
        let logoHelpShow = $('#logo-helper-show');
        let logoHelpHide = $('#logo-helper-close');
        let logoShapeHelper = $('#logo-shape-helper');
        let logoShapeHelpShow = $('#logo-shape-helper-show');
        let logoShapeHelpHide = $('#logo-shape-helper-close');
        let numHelper = $('#num-helper');
        let numHelpShow = $('#num-helper-show');
        let numHelpHide = $('#num-helper-close');
        let numInput = $('#num-input');
        let alignLeft = $('#align-left-opt');
        let alignCenter = $('#align-center-opt');
        let alignRight = $('#align-right-opt');
        let circleLogo = $('#circle-logo');
        let squareLogo = $('#square-logo');
        let stamp5 = $('#stamps-5');
        let stamp10 = $('#stamps-10');
        let stamp15 = $('#stamps-15');
        let colourHelper = $('#colour-helper');
        let colourHelpShow = $('#colour-helper-show');
        let colourHelpHide = $('#colour-helper-close');
        let colourInput = $('#colour-input');
        let fontHelper = $('#font-helper');
        let fontHelpShow = $('#font-helper-show');
        let fontHelpHide = $('#font-helper-close');
        let fontInput = $('#font-input');

        // Builder And preview Vars
        let logo = $('.sample-logo-container');
        let logoPosition = $('.logo-align-container');

        // Builder Vars
        let cardHolder = $('.builder-card');
        let stampRow1 = $('#stamp-row-1');
        let stampRow2 = $('#stamp-row-2');
        let previewSeparator = $('#preview-section-divider');
        let previewButton = $('#preview-section-btn');

        // Preview Card Vars
        let previewCard = $('.preview-card');
        let previewStampRow1 = $('#preview-stamp-row-1');
        let previewStampRow2 = $('#preview-stamp-row-2');
        let titleDesc = $('.preview-txt-container');
        let titleOfCard = $('.preview-title');
        let descOfCard = $('.preview-desc');

        $(document).ready(function() {
            setDefaults();
        });

        // loading screen
        function showLoadingScreen() {
            loadingScreen.fadeIn(10);
        }

        function hideLoadingScreen() {
            loadingScreen.delay(5000).fadeOut(10);
        }

        // Create Section
        function fadeInCreate() {
            build.fadeOut(100);
            preview.fadeOut(100);
            create.delay(250).fadeIn(250);
        }

        // Show Build Section
        function fadeInBuild() {
            create.fadeOut(100);
            preview.fadeOut(100);
            build.delay(250).fadeIn(100);
        }

        // Show Preview Section
        function fadeInPreview() {
            create.fadeOut(100);
            build.fadeOut(100);
            preview.delay(250).fadeIn(100);
        }

        // Activate Create Section
        function activateCreate() {
            btn1.addClass('active-btn');
            btn1Txt.addClass('active-txt');
        }

        // Activate Create Section
        function activateBuild() {
            btn2.addClass('active-btn');
            btn2Txt.addClass('active-txt');
        }

        // Activate Create Section
        function activatePreview() {
            btn3.addClass('active-btn');
            btn3Txt.addClass('active-txt');
        }

        // Activate Create Section
        function deactivateCreate() {
            btn1.removeClass('active-btn');
            btn1Txt.removeClass('active-txt');
        }

        // Activate Create Section
        function deactivateBuild() {
            btn2.removeClass('active-btn');
            btn2Txt.removeClass('active-txt');
        }

        // Activate Create Section
        function deactivatePreview() {
            btn3.removeClass('active-btn');
            btn3Txt.removeClass('active-txt');
        }

        // Setting the logo shape
        function setLogoShape() {
            if (logoShape === "Square") {
                logo.removeClass('circle-logo');
                logo.addClass('square-logo');
            } else {
                logo.removeClass('square-logo');
                logo.addClass('circle-logo');
            }
        }

        // Setting the logo alignment
        function setLogoAlignment() {
            switch(logoAlign) {
                case "Left":
                    logoPosition.removeClass('logo-align-middle');
                    logoPosition.removeClass('logo-align-right');
                    logo.removeClass('logo-align-middle');
                    logo.removeClass('m-inline-e');
                    logoPosition.addClass('logo-align-left');
                    logo.addClass('m-inline-s');
                    break;
                case "Center":
                    logoPosition.removeClass('logo-align-left');
                    logoPosition.removeClass('logo-align-right');
                    logo.removeClass('m-inline-s');
                    logo.removeClass('m-inline-e');
                    logoPosition.addClass('logo-align-middle');
                    logo.addClass('logo-align-middle');
                    break;
                case "Right":
                    logoPosition.removeClass('logo-align-left');
                    logoPosition.removeClass('logo-align-middle');
                    logo.removeClass('m-inline-s');
                    logo.removeClass('logo-align-middle');
                    logoPosition.addClass('logo-align-right');
                    logo.addClass('m-inline-e');
                    break;
            }
        }

        // set number of stamps for card
        function showFiveStamps() {
            stampRow1.show();
            stampRow2.hide();
            cardHolder.removeClass('two-stamp-row-height');
            cardHolder.addClass('one-stamp-row-height');
        }

        function showTenStamps() {
            stampRow1.show();
            stampRow2.show();
            cardHolder.removeClass('one-stamp-row-height');
            cardHolder.addClass('two-stamp-row-height');
        }

        function setNumStamps() {
            switch (cardSlots) {
                case 5:
                    showFiveStamps();
                    break;
                case 10:
                    showTenStamps();
                    break;
            }
        }

        // Apply Logo shape
        function setCircleShape() {
            logoShape = "Circle";
            squareLogo.removeClass('active-btn');
            circleLogo.addClass('active-btn');
        }

        function setSquareShape() {
            logoShape = "Square";
            circleLogo.removeClass('active-btn');
            squareLogo.addClass('active-btn');
        }

        // Apply Alignment for logo
        function setLeftAlign() {
            logoAlign = "Left"

            alignRight.removeClass('active-btn')
            alignCenter.removeClass('active-btn')
            alignLeft.addClass('active-btn')
        }

        function setCentreAlign() {
            logoAlign = "Center"

            alignRight.removeClass('active-btn')
            alignLeft.removeClass('active-btn')
            alignCenter.addClass('active-btn')
        }

        function setRightAlign() {
            logoAlign = "Right"

            alignLeft.removeClass('active-btn')
            alignCenter.removeClass('active-btn')
            alignRight.addClass('active-btn')
        }

        // Apply NUmber of stamps on card
        function fiveStamp() {
            cardSlots = 5

            stamp10.removeClass('active-btn')
            stamp15.removeClass('active-btn')
            stamp5.addClass('active-btn')
        }

        function tenStamp() {
            cardSlots = 10

            stamp5.removeClass('active-btn')
            stamp15.removeClass('active-btn')
            stamp10.addClass('active-btn')
        }

        function fifteenStamp() {
            cardSlots = 15

            stamp10.removeClass('active-btn')
            stamp5.removeClass('active-btn')
            stamp15.addClass('active-btn')
        }

        // Click Sections
        function clickCreate() {
            // Show form for create
            fadeInCreate();

            // Correct breadcrumb
            activateCreate();
            deactivateBuild();
            deactivatePreview();
        }

        function clickBuilder() {
            // show loading
            showLoadingScreen()

            // Show form for create
            fadeInBuild();

            // Correct breadcrumb
            activateBuild();
            deactivateCreate();
            deactivatePreview();

            // Making builder dynamic to create options
            // ~ Logo Shape
            setLogoShape();

            // ~ Logo Align
            setLogoAlignment();

            // ~ Stamp slots
            setNumStamps();

            // ~ Card Colour
            cardHolder.css("background-color", cardColour);

            // ~ Font Colour
            titleDesc.css("color", fontColour);

            // ~ Hide loading Screen
            hideLoadingScreen();
        }

        function clickPreview() {
            // Show form for create
            fadeInPreview();

            // Correct breadcrumb
            activatePreview();
            deactivateCreate();
            deactivateBuild();

            // Card Info
            cardPreview();
        }

        // Setting Form Defaults
        function setDefaults() {
            // Form defaults
            cardTitle = "Untitled Card"
            cardDescription = "Empty card Description"
            logoAlign = "Left"
            logoShape = "Square"
            cardSlots = 5
            cardColour = colourInput.val()
            fontColour = fontInput.val()


            // setting classes
            btn1.addClass('active-btn')
            btn1Txt.addClass('active-txt')

            create.fadeIn(250)
        }

        function cardPreview() {
            titleOfCard.text(cardTitle);
            descOfCard.text(cardDescription);

            switch (cardSlots){
                case 5:
                    previewStampRow1.show();
                    previewStampRow2.hide();
                    previewCard.removeClass('preview-two-row-height');
                    previewCard.addClass('preview-one-row-height');
                    break;
                case 10:
                    previewStampRow1.show();
                    previewStampRow2.show();
                    previewCard.removeClass('preview-one-row-height');
                    previewCard.addClass('preview-two-row-height');
                    break;
            }

            previewCard.css("background-color", cardColour);

            // Form Data
            console.log(cardTitle);
            console.log(cardDescription);
            console.log(logoAlign);
            console.log(logoShape);
            console.log(cardSlots);
            console.log(cardColour);
            console.log(fontColour);
        }

        // Fading in helper
        // Functions to show and hide
        // ~ Title
        function titleShow() {
            titleHelper.fadeIn(200)
        }

        function titleHide() {
            titleHelper.fadeOut(200)
        }

        // ~ Description
        function descShow() {
            descHelper.fadeIn(200)
        }

        function descHide() {
            descHelper.fadeOut(200)
        }

        // ~ Logo Position
        function logoPosShow() {
            logoHelper.fadeIn(200)
        }

        function logoPosHide() {
            logoHelper.fadeOut(200)
        }

        // ~ Logo Shape
        function logoShapeShow() {
            logoShapeHelper.fadeIn(200)
        }

        function logoShapeHide() {
            logoShapeHelper.fadeOut(200)
        }

        // ~ Num of stamps
        function stampShow() {
            numHelper.fadeIn(200)
        }

        function stampHide() {
            numHelper.fadeOut(200)
        }

        // ~ Colour picker
        function colourShow() {
            colourHelper.fadeIn(200)
        }

        function colourHide() {
            colourHelper.fadeOut(200)
        }

        // ~ Font picker
        function fontShow() {
            fontHelper.fadeIn(200)
        }

        function fontHide() {
            fontHelper.fadeOut(200)
        }

        // Create Btn Clicked
        btn1.click(function() {
            clickCreate();
        });

        // Builder Button Clicked
        btn2.click(function() {
            // ~ Show Preview Option
            previewSeparator.fadeIn(100);
            previewButton.fadeIn(100);

            // ~ Set show loading to true
            showLoading = true;

            console.log(showLoading);

            clickBuilder();
        });

        // Showing builder form
        btn3.click(function () {
            clickPreview();
        });

        // Handling changes from user
        titleInput.change(function() {
            cardTitle = titleInput.val()
        });

        descInput.change(function() {
            cardDescription = descInput.val()
        });

        // Selecting logo alignment for card
        alignLeft.click(function () {
            setLeftAlign();
        });

        alignCenter.click(function () {
            setCentreAlign();
        });

        alignRight.click(function () {
            setRightAlign();
        });

        // Setting shape of logo
        circleLogo.click(function () {
            setCircleShape();
        });

        squareLogo.click(function () {
            setSquareShape();
        });

        // Setting number of buckets for card
        stamp5.click(function () {
            fiveStamp();
        });

        stamp10.click(function () {
            tenStamp();
        });

        stamp15.click(function () {
            fifteenStamp();
        });

        // Setting background colour of card
        colourInput.change(function() {
            cardColour = colourInput.val()
        });

        // Setting font colour of card
        fontInput.change(function() {
            fontColour = fontInput.val()
        });

        // ~ Card Title
        titleHelpShow.click(function () {
            titleShow();
        });

        titleHelpHide.click(function () {
            titleHide();
        });

        titleInput.click(function () {
            titleHide();
        });

        // ~ Card Description
        descHelpShow.click(function () {
            descShow();
        });

        descHelpHide.click(function () {
            descHide();
        });

        descInput.click(function () {
            descHide();
        });

        // ~ Card Logo
        logoHelpShow.click(function () {
            logoPosShow();
        });

        logoHelpHide.click(function () {
            logoPosHide();
        });

        alignLeft.click(function () {
            logoPosHide();
        });

        alignCenter.click(function () {
            logoPosHide()
        });

        alignRight.click(function () {
            logoPosHide()
        });

        // ~ Logo Shape
        logoShapeHelpShow.click(function () {
            logoShapeShow();
        });

        logoShapeHelpHide.click(function () {
            logoShapeHide();
        });

        circleLogo.click(function () {
            logoShapeHide();
        });

        squareLogo.click(function () {
            logoShapeHide();
        });

        // ~ Number of stamps
        numHelpShow.click(function () {
            stampShow();
        });

        numHelpHide.click(function () {
            stampHide();
        });

        numInput.click(function () {
            stampHide();
        });

        stamp5.click(function () {
            stampHide();
        });

        stamp10.click(function () {
            stampHide();
        });

        stamp15.click(function () {
            stampHide();
        });

        // ~ Card Colour
        colourHelpShow.click(function () {
            colourShow();
        });

        colourHelpHide.click(function () {
            colourHide();
        });

        colourInput.click(function () {
            colourHide();
        });

        // ~ Font Colour
        fontHelpShow.click(function () {
            fontShow();
        });

        fontHelpHide.click(function () {
            fontHide();
        });

        fontInput.click(function () {
            fontHide();
        });
    },
    data() {
        return {
            cardElements: [
                { name: "grey-stamp", id: 1 },
                { name: "black-stamp", id: 2 },
                { name: "white-stamp", id: 3 },
            ],
            arrA: [],
            arrB: [],
            arrC: [],
            arrD: [],
            arrE: [],
            arrF: [],
            arrG: [],
            arrH: [],
            arrI: [],
            arrJ: [],
        };
    },
    methods: {
        log: function(evt) {
            window.console.log(evt);
        },
        clearStamps: function () {
            this.arrA = [];
            this.arrB = [];
            this.arrC = [];
            this.arrD = [];
            this.arrE = [];
            this.arrF = [];
            this.arrG = [];
            this.arrH = [];
            this.arrI = [];
            this.arrJ = [];
        }
    },
    watch: {
        arrA: function (val) {
            let bucketA = document.getElementById("bucketA");

            // remove empty class
            if (val.length > 0) {
                bucketA.classList.remove("empty");
            } else {
                bucketA.classList.add("empty");
            }

            // ensures only one item
            if (val.length > 1) {
                this.arrA.pop();
            }
        },
        arrB: function (val) {
            let bucketB = document.getElementById("bucketB");

            // remove empty class
            if (val.length > 0) {
                bucketB.classList.remove("empty");
            } else {
                bucketB.classList.add("empty");
            }

            // ensures only one item
            if (val.length > 1) {
                this.arrB.pop();
            }
        },
        arrC: function (val) {
            let bucketC = document.getElementById("bucketC");

            // remove empty class
            if (val.length > 0) {
                bucketC.classList.remove("empty");
            } else {
                bucketC.classList.add("empty");
            }

            // ensures only one item
            if (val.length > 1) {
                this.arrC.pop();
            }
        },
        arrD: function (val) {
            let bucketD = document.getElementById("bucketD");

            // remove empty class
            if (val.length > 0) {
                bucketD.classList.remove("empty");
            } else {
                bucketD.classList.add("empty");
            }

            // ensures only one item
            if (val.length > 1) {
                this.arrD.pop();
            }
        },
        arrE: function (val) {
            let bucketE = document.getElementById("bucketE");

            // remove empty class
            if (val.length > 0) {
                bucketE.classList.remove("empty");
            } else {
                bucketE.classList.add("empty");
            }

            // ensures only one item
            if (val.length > 1) {
                this.arrE.pop();
            }
        },
        arrF: function (val) {
            let bucketF = document.getElementById("bucketF");

            // remove empty class
            if (val.length > 0) {
                bucketF.classList.remove("empty");
            } else {
                bucketF.classList.add("empty");
            }

            // ensures only one item
            if (val.length > 1) {
                this.arrF.pop();
            }
        },
        arrG: function (val) {
            let bucketG = document.getElementById("bucketG");

            // remove empty class
            if (val.length > 0) {
                bucketG.classList.remove("empty");
            } else {
                bucketG.classList.add("empty");
            }

            // ensures only one item
            if (val.length > 1) {
                this.arrG.pop();
            }
        },
        arrH: function (val) {
            let bucketH = document.getElementById("bucketH");

            // remove empty class
            if (val.length > 0) {
                bucketH.classList.remove("empty");
            } else {
                bucketH.classList.add("empty");
            }

            // ensures only one item
            if (val.length > 1) {
                this.arrH.pop();
            }
        },
        arrI: function (val) {
            let bucketI = document.getElementById("bucketI");

            // remove empty class
            if (val.length > 0) {
                bucketI.classList.remove("empty");
            } else {
                bucketI.classList.add("empty");
            }

            // ensures only one item
            if (val.length > 1) {
                this.arrI.pop();
            }
        },
        arrJ: function (val) {
            let bucketJ = document.getElementById("bucketJ");

            // remove empty class
            if (val.length > 0) {
                bucketJ.classList.remove("empty");
            } else {
                bucketJ.classList.add("empty");
            }

            // ensures only one item
            if (val.length > 1) {
                this.arrJ.pop();
            }
        }
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

#preview-section-divider {
    display: none;
}

#preview-section-btn {
    display: none;
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

.build-container {
    height: calc(100vh - 80px);
}

.preview-container {
    height: calc(100vh - 80px);
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
    width: calc(100% / 2);
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
    width: 50%;
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
    height: calc(100% - 160px);
}

.preview-content {
    width: 100%;
    height: calc(100% - 200px);
}

.preview-button-container {
    width: 100%;
    height: 55px;
}

.stamp-element-container {
    width: 150px;
    height: 100%;
    float: left;
}

.card-element-container {
    width: calc(100% - 150px);
    height: 100%;
    float: left;
}

.element-panel {
    width: 95%;
    height: 90%;
    margin: auto;
}

.draggable-element-container {
    height: calc(85% - 20px);
    border: 1px solid rgba(255, 255, 255, 0.125);
    border-radius: 12px;
    background-color: #141414;
    margin-block-end: 20px;
}

.clear-card-container {
    height: 15%;
    border: 1px solid rgba(255, 255, 255, 0.125);
    border-radius: 12px;
    background-color: #141414;
    color: rgba(255, 255, 255, 0.125);
    transition: all 0.2s;
}

.clear-stamps-btn {
    width: 100%;
    text-align: center;
}

.clear-card-container:hover {
    cursor: pointer;
    border-radius: 2px;
    color: rgb(255, 255, 255);
    border: 1px solid rgb(255, 255, 255);
}

.element-card {
    width: 95%;
    height: 90%;
    margin: auto;
    border: 1px solid rgba(255, 255, 255, 0.125);
    border-radius: 12px;
    background-color: #141414;
}

.stamp-element-row {
    width: 100%;
    margin-block-start: 20px;
    margin-block-end: 20px;
    text-align: center;
}

.stamp {
    width: 70px;
    height: 70px;
}

.stamp-element-row > .stamp:hover {
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

.preview-one-row-height {
    height: calc(150px + 65px);
}

.preview-two-row-height {
    height: calc(250px + 65px);
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

.drop-area {
    width: 100%;
    height: 100%;
}

.bucket-align {
    width: 100%;
    height: 70px;
    text-align: center;
}

.preview-card-container {
    width: 100%;
    text-align: center;
}

.preview-card {
    width: 500px;
    min-height: 150px;
    background: #141414;
    border-radius: 20px;
    border: 3px solid rgb(44, 44, 44);
    box-shadow: 0 0 50px 0 rgb(0, 0, 0, 0.5);
    margin: auto;
    position: relative;
}

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
    text-align: left;
    margin-inline-start: 10px;
}

.cancel-btn-container {
    width: 20%;
    min-width: 175px;
    height: 40px;
    float: left;
    color: rgba(255, 255, 255, 0.125);
    border: 1px solid rgba(255, 255, 255, 0.125);
    border-radius: 5px;
    transition: all 0.2s;
}

.submit-btn-container {
    width: 20%;
    min-width: 175px;
    height: 40px;
    float: right;
    color: rgba(255, 255, 255, 0.125);
    border: 1px solid rgba(255, 255, 255, 0.125);
    border-radius: 12px;
    transition: all 0.2s;
}

.cancel-btn-container:hover {
    cursor: pointer;
    color: rgb(255, 255, 255);
    border: 1px solid rgb(255, 255, 255);
    border-radius: 2px;
}

.submit-btn-container:hover {
    cursor: pointer;
    color: rgb(255, 255, 255);
    border: 1px solid rgb(255, 255, 255);
    border-radius: 2px;
}

.btn-text-align {
    width: 100%;
    text-align: center;
}

.loading-screen-container {
    display: none;

    position: fixed;
    z-index: 1000;
    width: calc(100% - 200px);
    height: 100%;
}

.loading-logo {
    width: 100px;
    margin-block-end: 10px;
    animation: rotation 8s infinite linear;
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
