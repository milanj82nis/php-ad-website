   <!-- #region Jssor Slider Begin -->

    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: http://www.jssor.com/demos/simple-layer-animation.slider -->
    
    <!-- This demo works with jquery library -->

    <script type="text/javascript" src="/assets/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="/assets/js/jssor.slider-21.1.5.mini.js"></script>
    <!-- use jssor.slider-21.1.5.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-1},{b:0,d:1000,x:-257,y:-5,o:1}],
              [{b:480,d:520,x:120,y:-270}],
              [{b:1000,d:500,y:250},{b:8000,d:1000,x:600}],
              [{b:-1,d:1,o:-1,sX:-0.6,sY:-0.6},{b:1500,d:500,o:1,r:360,sX:0.6,sY:0.6},{b:8000,d:1000,y:-150}],
              [{b:-1,d:1,o:-1,tZ:-200},{b:2000,d:1000,o:1,tZ:200},{b:3000,d:1000,o:-1,tZ:200}],
              [{b:-1,d:1,o:-1,tZ:-200},{b:3000,d:1000,o:1,tZ:200},{b:4000,d:1000,o:-1,tZ:200}],
              [{b:-1,d:1,o:-1,tZ:-200},{b:4000,d:1000,o:1,tZ:200},{b:5000,d:1000,o:-1,tZ:200}],
              [{b:-1,d:1,o:-1,tZ:-200},{b:5000,d:1000,o:1,tZ:200},{b:6000,d:1000,o:-1,tZ:200}],
              [{b:-1,d:1,o:-1,tZ:-200},{b:6000,d:1000,o:1,tZ:200},{b:7000,d:1000,o:-1,tZ:200}],
              [{b:-1,d:1,o:-1,tZ:-200},{b:7000,d:1000,o:1,tZ:200},{b:8000,d:1000,o:-1,tZ:200}],
              [{b:-1,d:1,c:{x:250.0,t:-250.0}},{b:0,d:1000,c:{x:-250.0,t:250.0}},{b:5000,d:1000,y:100}],
              [{b:-1,d:1,o:-1},{b:1000,d:1000,o:1},{b:5000,d:1000,y:280}],
              [{b:2000,d:1000,y:190,e:{y:28}},{b:5000,d:1000,x:280}],
              [{b:3000,d:520,y:50},{b:5000,d:1000,y:-50}],
              [{b:3520,d:480,x:-400},{b:5000,d:800,x:400,e:{x:7}}],
              [{b:4000,d:500,x:-400},{b:5000,d:800,x:400,e:{x:7}}],
              [{b:4500,d:500,x:-400},{b:5000,d:800,x:400,e:{x:7}}],
              [{b:-1,d:1,c:{x:250.0,t:-250.0}},{b:0,d:1000,c:{x:-250.0,t:250.0}},{b:10000,d:500,y:90}],
              [{b:-1,d:1,c:{x:150.0,t:-150.0}},{b:1000,d:1000,c:{x:-150.0,t:150.0}},{b:10000,d:500,c:{y:150.0,m:-150.0}}],
              [{b:2000,d:500,x:220}],
              [{b:3500,d:500,rX:-20},{b:4000,d:1000,rX:40},{b:5000,d:500,rX:-10},{b:9500,d:500,o:-1}],
              [{b:3500,d:2000,r:360}],
              [{b:-1,d:1,o:-1},{b:2500,d:500,x:76,y:-25,o:1}],
              [{b:-1,d:1,o:-1},{b:2500,d:500,x:47,y:65,o:1}],
              [{b:-1,d:1,o:-1},{b:2500,d:500,x:-47,y:65,o:1}],
              [{b:-1,d:1,o:-1},{b:2500,d:500,x:-76,y:-25,o:1}],
              [{b:-1,d:1,o:-1},{b:2500,d:500,y:-80,o:1}],
              [{b:-1,d:1,c:{x:120.0,t:-120.0}},{b:6100,d:400,c:{x:-120.0,t:120.0}},{b:10000,d:500,y:-120}],
              [{b:6500,d:500,x:220}],
              [{b:-1,d:1,o:-1,r:180,sX:-0.5,sY:-0.5},{b:7000,d:500,o:1,r:180,sX:0.5,sY:0.5},{b:8000,d:500,o:-1,r:180,sX:9,sY:9}],
              [{b:-1,d:1,o:-1,r:180,sX:-0.5,sY:-0.5},{b:8000,d:500,o:1,r:180,sX:0.5,sY:0.5},{b:9000,d:500,o:-1,r:180,sX:9,sY:9}],
              [{b:-1,d:1,o:-1,r:180,sX:-0.5,sY:-0.5},{b:9000,d:500,o:1,r:180,sX:0.5,sY:0.5},{b:9500,d:500,o:-1,r:180,sX:9,sY:9}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideEasing: $Jease$.$InOutSine,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions,
                $Breaks: [
                  [{d:3000,b:8000,t:2}],
                  [{d:2000,b:5000}],
                  [{d:3000,b:9500,t:2}]
                ]
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 980);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <style>
        
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>