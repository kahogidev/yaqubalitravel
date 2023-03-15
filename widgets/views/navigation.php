<style>
    .dropbtn {
        font-size: 15px;
        border: none;
        background: none!important;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: #ddd;transition: all ease 1s;}

    .dropdown:hover .dropdown-content {display: block;transition: all ease 1s; }

    .dropdown:hover .dropbtn {background-color: #29323c;
        transition: all ease 1s;
    }
</style>

<div id="top-bar" class="hidden-sm hidden-xs home">
    <div class="zt-container">

        <div class="login pull-right">
            <ul>
            <li><div class="lang-dropdown">
                    <div class="dropdown">
                        <button class="dropbtn"><?= Yii::t("app", "lang")?></button>
                        <div class="dropdown-content">
                            <?php
                            foreach (Yii::$app->params['language'] as $key => $value){
                                echo " <a style='font-color:black' href='".\yii\helpers\Url::to(['site/ozgar',"til"=>$key])."'>".$value. "</a>";
                            }
                            ?>

                        </div>
                    </div></li>
            </ul>

            <ul></ul>



        </div>
        <div class="form-search-wrap">
            <div class="zt-container">
                <a href="#" class="close-search"><span class="fa fa-remove"></span></a>
                <div class="form-search-box zt-flex zt-flex-center zt-flex-middle">
                    <form class="form" action="#">
                        <div class="form-group">
                            <div class="input-icon">
                                <input type="text" class="zt-control"  placeholder="Search...">
                                <div class="input-addon"><span class="fa fa-search"></span></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<header id="header" class="stricky home">
    <div class="zt-container clearfix">
        <div class="logo pull-left">
            <a href="index-2.html">
                <img style="width: 70px" src="/frontend-files/images/logo.png" alt="">
            </a>
        </div>
        <nav class="nav-holder pull-right">
            <div class="nav-footer">
                <ul class="nav">
                    <?php if (!empty($menues)): ?>
                       <?php foreach ($menues as $menue): ?>
                             <li><a style="padding-right: 12px" href="<?=$menue->link?>"><?=$menue['name_'.Yii::$app->language];?></a></li>
                        <?php endforeach;?>
                    <?php endif;?>

                    <li><a href="<?=\yii\helpers\Url::to(["admin/"])?>">Login</a></li>
                </ul>
            </div>
            <div class="nav-header">
                <ul>
                    <li>
                       </li>
                    <li><button class="hidden-lg hidden-md menu-expander"><i class="fa fa-bars"></i></button></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<section class="rev_slider_wrapper slider1">
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul>
            <li data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" >
                <img src="/frontend-files/images/slider/banner-1.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina/>
                <div class="tp-caption sfl tp-resizeme banner-caption-h1 "
                     data-x="center" data-hoffset="-260"
                     data-y="center" data-voffset="-50"
                     data-transform_idle="o:1;"
                     data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                     data-start="1000"
                     data-splitin="none"
                     data-splitout="none" >
                    <?= Yii::t("app", "slider2")?>
                </div>
                <div class="tp-caption sfl tp-resizeme banner-caption-h1 color-primary "
                     data-x="center" data-hoffset="200"
                     data-y="center" data-voffset="-50"
                     data-transform_idle="o:1;"
                     data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                     data-start="1000"
                     data-splitin="none"
                     data-splitout="none" >
                    <?= Yii::t("app", "slider22")?>
                </div>
                <div class="tp-caption small_light_white tp-resizeme banner-caption-p text-center"
                     data-x="center"
                     data-y="center"
                     data-hoffset="0"
                     data-voffset="20"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"
                     data-style_hover="cursor:default;"

                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="2500"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on">
                    <?= Yii::t("app", "sliders2")?>
                </div>

            </li>
            <li data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-description="">

                <img src="/frontend-files/images/slider/banner-6.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                <div class="tp-caption sfl tp-resizeme banner-caption-h1 "
                     data-x="center" data-hoffset="-260"
                     data-y="center" data-voffset="-50"
                     data-transform_idle="o:1;"
                     data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                     data-start="1000"
                     data-splitin="none"
                     data-splitout="none" >
                    <?= Yii::t("app", "slider1")?>
                </div>
                <div class="tp-caption sfl tp-resizeme banner-caption-h1 color-primary "
                     data-x="center" data-hoffset="200"
                     data-y="center" data-voffset="-50"
                     data-transform_idle="o:1;"
                     data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                     data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                     data-start="1000"
                     data-splitin="none"
                     data-splitout="none" >
                    <?= Yii::t("app", "sliders1")?>
                </div>
                <div class="tp-caption  tp-resizeme banner-caption-p text-center "
                     data-x="center" data-hoffset="0"
                     data-y="center" data-voffset="50"
                     data-whitespace="nowrap"
                     data-transform_idle="o:1;"

                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                     data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                     data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                     data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                     data-start="2000"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on">
                    <?= Yii::t("app", "sliders2")?>
                </div>
            </li>
        </ul>
    </div>
</section>