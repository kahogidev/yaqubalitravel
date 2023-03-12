

<section class="contact-page gallery-masonry sec-padding">
    <div class="zt-container">
        <div class="sec-title text-center sec-title-padding">
            <h2><?= Yii::t("app", "contactinfo")?></h2>
            <span class="tagline"><?= Yii::t("app", "contactp")?></span>
        </div>
        <?php if (!empty($models)): ?>
            <?php foreach ($models as $model):?>

                 <div class="contact-info">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="box-awesome-service">
                        <div class="box-icon">
                            <span class="fa fa-phone"></span>
                        </div>
                        <div class="box-text">
                            <p><?=$model->first_phone?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="box-awesome-service">
                        <div class="box-icon">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="box-text">
                            <p><?=$model->addres?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="box-awesome-service">
                        <div class="box-icon">
                            <span class="fa fa-envelope"></span>
                        </div>
                        <div class="box-text">
                            <p><?=$model->email?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <?php endforeach;?>
        <?php endif;?>

            <div class="row">
                <div class="col-md-offset-1 col-md-5 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <div class="input-icon left">
                            <input type="text" name="name" class="zt-control" id="name" placeholder="<?= Yii::t("app", "name")?>">
                            <div class="input-addon"><span class="fa fa-user"></span></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-icon left">
                            <input type="tel" name="name" class="zt-control" id="phone" placeholder="Tel *">
                            <div class="input-addon"><span class="fa fa-phone"></span></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <div class="input-icon left">
                            <input type="text" name="email" class="zt-control" id="email" placeholder="Email *">
                            <div class="input-addon"><span class="fa fa-envelope"></span></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-icon left">
                            <input type="date" name="email" class="zt-control" id="date" placeholder="Email *">
                            <div class="input-addon"><x></x></div>
                        </div>
                    </div>

                </div>
                <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <div class="input-icon left">
                            <select style="padding: 12px" id="select">
                                <?php if(!empty($tours)):?>
                                    <?php foreach ($tours as $tour):?>
                                        <option style="padding: 10px"><?=$tour["title_".Yii::$app->language];?></option>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
                    <div class="zt-flex zt-flex-center">
                        <button type="submit" onclick="booking()" class="btn zt-default btn-lg"><?= Yii::t("app", "send")?></button>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="response"></div>
                </div>
            </div>
    </div>
</section>
<section class="google-map-wrapper">
    <div class="google-map"
    <div class="mapouter"><div class="gmap_canvas"><iframe width="1350" height="565" id="gmap_canvas" src="https://maps.google.com/maps?q=namangan%20shahr&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:565px;width:1350px;}</style><a href="https://www.embedgooglemap.net">embed google maps html</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:565px;width:1350px;}</style></div></div>
    </div>
</section>