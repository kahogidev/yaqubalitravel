<section class="clients-says sec-padding">
    <div class="zt-container">
        <div class="sec-title text-center sec-title-padding">
            <h2><?= Yii::t("app", "testmon")?></h2>
            <span class="tagline"><?= Yii::t("app", "test_info")?></span>
            <span class="img-border"></span>
        </div>
        <div class="clients-says-content position-relative">
            <ul class="clients-slider">
                <?php if (!empty($models)): ?>
                      <?php foreach ($models as $model):?>

                         <li class="item">
                    <p>“ <?=$model['comment_'.Yii::$app->language];?>."</p>
                    <div class="meta-profile"><span class="color-primary">- <?=$model->name?>,</span> <?=$model->email?> </div>
                </li>

                    <?php endforeach;?>
                <?php endif;?>
            </ul>
            </div>
        </div>
    </div>
</section>

<section class="stuning-beachs text-center sec-padding text-white">
    <div class="zt-container">
        <div class="sec-title text-center">
            <h2><?= Yii::t("app", "banner1")?></h2>
        </div>
    </div>
</section>