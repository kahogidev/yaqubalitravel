<footer id="footer" class="sec-padding">
    <div class="zt-container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="footer-widget notitle about-widget">
                    <div >
                        <img style="height: 120px; width: 200px" src="/frontend-files/images/logo.png" alt="" />
                    </div>

                        <p><?= Yii::t("app", "about1")?></p>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12">
                <div class="footer-widget post-link-widget">
                    <div class="title">
                        <h3><?= Yii::t("app", "menulinks")?></h3>
                    </div>
                    <ul>
                        <?php if(!empty($menues)):?>
                            <?php foreach ($menues as $menue):?>
                                 <li><a href="<?=$menue->link;?>"><?=$menue['name_'.Yii::$app->language];?></a></li>
                            <?php endforeach;?>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="footer-widget gallery-widget">
                    <div class="title">
                        <h3><?= Yii::t("app", "galleryinfo")?></h3>
                    </div>
                    <ul id="gallerywidget" class="list-unstyled">
                        <li data-src="/frontend-files/images/tour/oia-santorini-greece-sunset-island-sea-tourism.jpg">
                            <a href="#">
                                <div class="gallery-wrap zt-overlay zt-overlay-hover">
                                    <div class="zt-overlay-panel zt-overlay-background zt-overlay-background-primary zt-flex zt-flex-center zt-flex-middle">
                                        <span class="fa fa-plus"></span>
                                    </div>
                                    <img src="/frontend-files/images/thumbnails/oia-santorini-greece-sunset-island-sea-tourism-1.png" alt="" />
                                </div>
                            </a>
                        </li>
                        <li data-src="/frontend-files/images/tour/colorful-houses-with-sunshades.jpg">
                            <a href="#">
                                <div class="gallery-wrap zt-overlay zt-overlay-hover">
                                    <div class="zt-overlay-panel zt-overlay-background zt-overlay-background-primary zt-flex zt-flex-center zt-flex-middle">
                                        <span class="fa fa-plus"></span>
                                    </div>
                                    <img src="/frontend-files/images/thumbnails/colorful-houses-with-sunshades.png" alt="" />
                                </div>
                            </a>
                        </li>
                        <li data-src="/frontend-files/images/tour/india-taj-mahal-agra-architecture-travel.jpg">
                            <a href="#">
                                <div class="gallery-wrap zt-overlay zt-overlay-hover">
                                    <div class="zt-overlay-panel zt-overlay-background zt-overlay-background-primary zt-flex zt-flex-center zt-flex-middle">
                                        <span class="fa fa-plus"></span>
                                    </div>
                                    <img src="/frontend-files/images/thumbnails/india-taj-mahal-agra-architecture-travel.png" alt="" />
                                </div>
                            </a>
                        </li>
                        <li data-src="/frontend-files/images/tour/santorini-greece.jpg">
                            <a href="#">
                                <div class="gallery-wrap zt-overlay zt-overlay-hover">
                                    <div class="zt-overlay-panel zt-overlay-background zt-overlay-background-primary zt-flex zt-flex-center zt-flex-middle">
                                        <span class="fa fa-plus"></span>
                                    </div>
                                    <img src="/frontend-files/images/thumbnails/santorini-greece.png" alt="" />
                                </div>
                            </a>
                        </li>
                        <li data-src="/frontend-files/images/tour/pisa-tower.jpg">
                            <a href="#">
                                <div class="gallery-wrap zt-overlay zt-overlay-hover">
                                    <div class="zt-overlay-panel zt-overlay-background zt-overlay-background-primary zt-flex zt-flex-center zt-flex-middle">
                                        <span class="fa fa-plus"></span>
                                    </div>
                                    <img src="/frontend-files/images/thumbnails/pisa-tower.png" alt="" />
                                </div>
                            </a>
                        </li>
                        <li data-src="/frontend-files/images/tour/building-ocean-buildings.jpg">
                            <a href="#">
                                <div class="gallery-wrap zt-overlay zt-overlay-hover">
                                    <div class="zt-overlay-panel zt-overlay-background zt-overlay-background-primary zt-flex zt-flex-center zt-flex-middle">
                                        <span class="fa fa-plus"></span>
                                    </div>
                                    <img src="/frontend-files/images/thumbnails/toronto.jpg" alt="" />
                                </div>
                            </a>
                        </li>
                        <li data-src="/frontend-files/images/tour/tram-city-urban-transport-transportation-travel.jpg">
                            <a href="#">
                                <div class="gallery-wrap zt-overlay zt-overlay-hover">
                                    <div class="zt-overlay-panel zt-overlay-background zt-overlay-background-primary zt-flex zt-flex-center zt-flex-middle">
                                        <span class="fa fa-plus"></span>
                                    </div>
                                    <img src="/frontend-files/images/thumbnails/tram-city-urban-transport-transportation-travel.png" alt="" />
                                </div>
                            </a>
                        </li>
                        <li data-src="/frontend-files/images/tour/arno-river-florence-italy-reflection-river.jpg">
                            <a href="#">
                                <div class="gallery-wrap zt-overlay zt-overlay-hover">
                                    <div class="zt-overlay-panel zt-overlay-background zt-overlay-background-primary zt-flex zt-flex-center zt-flex-middle">
                                        <span class="fa fa-plus"></span>
                                    </div>
                                    <img src="/frontend-files/images/thumbnails/arno-river-florence-italy-reflection-river.png" alt="" />
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-bottom text-white">
    <div class="zt-container">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="left-text">
                    @2023 WEBSPACE
                </div>
            </div>
            <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="right-text pull-right">

                </div>
            </div>
        </div>
    </div>
</div>