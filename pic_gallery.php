<?php 
include_once 'header.php';
?>




<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" xmlns:lr="http://adobe.com/lrg/0.0"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" xmlns:lr="http://adobe.com/lrg/0.0"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" xmlns:lr="http://adobe.com/lrg/0.0"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" xmlns:lr="http://adobe.com/lrg/0.0"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        
        <title>Picture Gallery</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="assets/css/main_g.css">
        <link rel="stylesheet" type="text/css" media="screen" title="Custom Settings" href="assets/css/custom.css" >
        <script src="assets/js/libs/modernizr.custom.23122.js"></script>

    </head>
    
    <body class="has-header background">
    
    <h1 class="text-center" style="color:white;">Picture Gallary</h1>
    <div class=" container-fluid overflow-auto" >
    <div class="container  cust-container-1">                 
    <!-- <header class="is-fixed">
           
            
            <div class="meta-left">
                <p id="galleryTitle" class="title">Picture Gallery</p>
                                <p id="galleryAuthor" class="author"></p>
                            </div>
            <div class="meta-right">
                <p class="extra" id="galleryExtra"></p>
            </div>
            <div id="buttonFullscreen" title="Fullscreen Mode">
                <div class="icon">
                    <svg version="1.1" id="svgIconFullscreen" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 18 16" style="enable-background:new 0 0 18 16;" xml:space="preserve">
                    <g>
                        <path class="custom-colorable" d="M5.3871,9.95599C5.19136,9.76858,4.99176,9.85763,4.79376,10.0472l-2.86173,2.74138v-1.55466
                            c0-0.25257-0.21387-0.45733-0.47767-0.45733H0.47767C0.21387,10.7766,0,10.98136,0,11.23393v3.37367v0.93511
                            C0,15.79524,0.21387,16,0.47767,16h0.97668h3.5238c0.26377,0,0.47764-0.20476,0.47764-0.45729v-0.93511
                            c0-0.25254-0.21387-0.45733-0.47764-0.45733H3.34554l2.86694-2.7451c0.198-0.18957,0.30914-0.44923,0.11342-0.63664L5.3871,9.95599
                            z"/>
                        <path class="custom-colorable" d="M17.52233,10.7766h-0.97672c-0.26377,0-0.47764,0.20476-0.47764,0.45733v1.55466l-2.86172-2.74138
                            c-0.198-0.18957-0.39764-0.27862-0.59335-0.09121l-0.93879,0.81254c-0.19575,0.18741-0.08458,0.44707,0.11342,0.63664
                            l2.8669,2.7451h-1.63258c-0.26377,0-0.47764,0.20479-0.47764,0.45733v0.93511c0,0.25254,0.21387,0.45729,0.47764,0.45729h3.52376
                            h0.97672C17.7861,16,18,15.79524,18,15.54271v-0.93511v-3.37367C18,10.98136,17.7861,10.7766,17.52233,10.7766z"/>
                        <path class="custom-colorable" d="M3.34554,1.84973h1.63262c0.26377,0,0.47764-0.20479,0.47764-0.45733V0.45733C5.45579,0.20476,5.24193,0,4.97815,0h-3.5238
                            H0.47767C0.21387,0,0,0.20476,0,0.45733v0.93508v3.3737C0,5.01864,0.21387,5.2234,0.47767,5.2234h0.97668
                            c0.26381,0,0.47767-0.20476,0.47767-0.45729V3.21142L4.79376,5.9528c0.198,0.18957,0.3976,0.27862,0.59335,0.09121l0.93879-0.81254
                            C6.52161,5.04409,6.41048,4.7844,6.21247,4.59483L3.34554,1.84973z"/>
                        <path class="custom-colorable" d="M17.52233,0h-0.97672h-3.52376c-0.26377,0-0.47764,0.20476-0.47764,0.45733v0.93508
                            c0,0.25254,0.21387,0.45733,0.47764,0.45733h1.63258l-2.8669,2.7451c-0.19801,0.18957-0.30917,0.44926-0.11342,0.63663
                            l0.93879,0.81254c0.19571,0.18741,0.39535,0.09836,0.59335-0.09121l2.86172-2.74138V4.7661
                            c0,0.25254,0.21387,0.45729,0.47764,0.45729h0.97672C17.7861,5.2234,18,5.01864,18,4.7661v-3.3737V0.45733
                            C18,0.20476,17.7861,0,17.52233,0z"/>
                    </g>
                    </svg>
                </div>
            </div>
        </header> -->
                <div id="thumbnailContainer">
            <div class="thumbnails thumbnail-size-md"></div>
        </div>
        <div id="loupeContainer" class="show-corners">
            <div class="background"></div>
            <div class="image-container"></div>
            <div class="side-navigation">
                <div class="hotspot" id="hotspotPrevLoupe">
                    <div class="button" id="buttonPrevSideLoupe">
                        <svg version="1.1" baseProfile="basic" id="svgIconPrevSideLoupe" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 50 50" xml:space="preserve">
                            <path class="icon custom-colorable" fill="#231F20" d="M0,0l0,50h50V0L0,0z M18.49,25.05l9.707-9.264c0.418-0.399,1.093-0.403,1.506-0.008l1.498,1.43 c0.414,0.395,0.41,1.039-0.009,1.438l-6.765,6.456l6.613,6.31c0.411,0.392,0.414,1.024,0.008,1.412l-1.471,1.404 c-0.406,0.387-1.069,0.384-1.479-0.008l-6.612-6.311L18.49,25.05z"/>
                        </svg>
                    </div>
                </div>
                <div class="hotspot" id="hotspotNextLoupe">
                    <div class="button" id="buttonNextSideLoupe">
                        <svg version="1.1" baseProfile="basic" id="svgIconNextSideLoupe" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 50 50" xml:space="preserve">
                            <path class="icon custom-colorable" fill="#231F20" d="M0,0v50h50V0H0z M28.513,27.909l-6.612,6.311c-0.411,0.392-1.073,0.395-1.479,0.008l-1.471-1.404 c-0.406-0.388-0.402-1.02,0.008-1.412l6.613-6.31l-6.765-6.456c-0.419-0.399-0.422-1.043-0.009-1.438l1.498-1.43 c0.414-0.395,1.088-0.391,1.506,0.008l9.707,9.264L28.513,27.909z"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="info-container">
                <div id="loupeMeta"></div>
                <ul class="lateral-nav">
                    <li id="buttonPrev">
                        <svg version="1.1" id="svgIconPrevLoupe" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 45 45" style="enable-background:new 0 0 45 45;" xml:space="preserve">
                            <style type="text/css">
                                .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#231F20;}
                            </style>
                            <path class="icon custom-colorable" d="M25.20105,14.76864l-8.2004,7.773l2.5314,2.3992l5.5858,5.2952c0.3469,0.3289,0.9064,0.3318,1.2497,0.0065
                                l1.2431-1.1783c0.3429-0.3252,0.3398-0.8555-0.0071-1.1846l-5.5864-5.2948l5.7149-5.4171c0.3535-0.3349,0.3568-0.875,0.0074-1.2063
                                l-1.2657-1.1995C26.12435,14.43064,25.55435,14.43354,25.20105,14.76864z"/>
                        </svg>
                    </li>
                    <li class="count"><span id="countCurrent"></span> of <span id="countTotal"></span></li>
                    <li id="buttonNext">
                        <svg version="1.1" id="svgIconNextLoupe" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 45 45" style="enable-background:new 0 0 45 45;" xml:space="preserve">
                            <style type="text/css">
                                .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#231F20;}
                            </style>
                            <path class="icon custom-colorable" d="M19.79895,14.76864l8.2004,7.773l-2.5314,2.3992l-5.5858,5.2952c-0.3469,0.3289-0.9064,0.3318-1.2497,0.0065
                                l-1.2431-1.1783c-0.3429-0.3252-0.3398-0.8555,0.0071-1.1846l5.5864-5.2948l-5.7149-5.4171
                                c-0.3535-0.3349-0.3568-0.875-0.0074-1.2063l1.2657-1.1995C18.87565,14.43064,19.44565,14.43354,19.79895,14.76864z"/>
                        </svg>
                    </li>
                </ul>
            </div>
            <div id="loupeCloseButton">
                <svg version="1.1" id="svgIconLoupeClose" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 45 45" style="enable-background:new 0 0 45 45;" xml:space="preserve">
                    <path class="shape-x custom-colorable" d="M14.77881,17.30074l5.212,5.2222l-5.0831,5.0924c-0.3476,0.3484-0.5746,0.7624-0.2308,1.1067l1.5682,1.4763
                        c0.3436,0.3443,0.8045,0.2596,1.1521-0.0886l5.0825-5.093l5.2119,5.222c0.3536,0.3547,0.9244,0.3578,1.2741,0.0073l1.2677-1.27
                        c0.3497-0.3507,0.3465-0.9224-0.0071-1.2768l-5.2119-5.2221l5.0828-5.0925c0.3475-0.3485,0.5429-0.8259,0.1994-1.1702
                        l-1.6474-1.4921c-0.3438-0.3443-0.6936-0.1803-1.0411,0.1679l-5.0828,5.0929l-5.212-5.222
                        c-0.3537-0.3546-0.9241-0.3577-1.2742-0.007l-1.2672,1.2698C14.42171,16.37464,14.42491,16.94624,14.77881,17.30074z"/>
                </svg>
            </div>
        </div>
        <script type="text/javascript">
            var LR = LR || {};
            LR.images = [                                                                                        {"id": "122", "exportFilename": "land", "title": "", "caption" : ""},
                         {"id": "123", "exportFilename": "DSC_0109-2", "title": "", "caption" : ""},
                         {"id": "124", "exportFilename": "DSC_0056-2", "title": "", "caption" : ""},
                         {"id": "125", "exportFilename": "DSC_0058-2", "title": "", "caption" : ""},
                         {"id": "126", "exportFilename": "DSC_0063-2", "title": "", "caption" : ""},
                         {"id": "127", "exportFilename": "DSC_0056-2_1", "title": "", "caption" : ""},
                         {"id": "128", "exportFilename": "DSC_0019-2", "title": "", "caption" : ""},
                         {"id": "130", "exportFilename": "DSC_0312-2-2", "title": "", "caption" : ""},
                         {"id": "129", "exportFilename": "DSC_0321-2-2", "title": "", "caption" : ""},
                         {"id": "131", "exportFilename": "DSC_0601-2", "title": "", "caption" : ""},
                         {"id": "132", "exportFilename": "DSC_0773-3", "title": "", "caption" : ""},
                         {"id": "133", "exportFilename": "DSC_1566-2", "title": "", "caption" : ""},
                         {"id": "134", "exportFilename": "DSC_0019-2i", "title": "", "caption" : ""},
                         {"id": "135", "exportFilename": "DSC_0051", "title": "", "caption" : ""},
                         {"id": "136", "exportFilename": "DSC_0069", "title": "", "caption" : ""},
                                    ]        </script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/libs/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="assets/js/main.js"></script>
</div>
        </div>

    </body>
    
</html>
