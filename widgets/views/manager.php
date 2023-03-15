<style>
    .our-team{
        text-align: center;
        border-radius: 20px;
        overflow: hidden;
        position: relative;
        transition: all 0.3s ease 0s;
    }
    .our-team .pic{
        background: #f6931e;
        transition: all 0.3s ease 0s;
    }
    .our-team:hover .pic{
        padding: 10px;
        border-radius: 10px;
        transform: scale(0.5) translateY(-30%);
    }
    .our-team .pic img{
        width: 100%;
        height: auto;
    }
    .our-team .team-content{
        width: 100%;
        padding: 7px 15px;
        background: #f6931e;
        position: absolute;
        bottom: -30%;
        right: 0;
        opacity: 0;
        transition: all 0.3s ease 0s;
    }
    .our-team:hover .team-content{
        opacity: 1;
        bottom: -10px;
    }
    .our-team .title{
        font-size: 22px;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin: 0 0 5px 0;
    }
    .our-team .post{
        display: block;
        font-size: 15px;
        font-weight: 600;
        color: #fff;
        font-style: italic;
        text-transform: capitalize;
        margin: 0 0 5px 0;
    }
    .our-team .social{
        padding: 0;
        margin: 0;
        list-style: none;
        transition: all 0.35s ease 0s;
    }
    .our-team .social li{
        display: inline-block;
        margin: 0 5px 0 0;
    }
    .our-team .social li a{
        display: block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        border-radius: 15px 0 15px 0;
        font-size: 20px;
        color: #fff;
        overflow: hidden;
        z-index: 1;
        position: relative;
        transition: all 0.35s ease 0s;
    }
    .our-team .social li a:before{
        content: "";
        width: 100%;
        height: 100%;
        background: #e06f06;
        position: absolute;
        top: 0;
        left: -100%;
        z-index: -1;
        transition: all 0.3s ease-in-out 0s;
    }
    .our-team .social li a:hover:before{ left: 0; }
    @media only screen and (max-width: 990px){
        .our-team{ margin-bottom: 30px; }
</style>
<div class="container">
    <div class="sec-title text-center sec-title-padding">
        <h2><?= Yii::t("app", "manager")?></h2>
        <span class="img-border"></span>
    </div>
    <div class="row">
        <?php if (!empty($models)): ?>
        <?php foreach ($models as $model):?>
        <?php
        $img = app\models\StaticFunctions::getImage('managers', $model->id, $model->images);
        ?>
        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="<?=$img?>">
                </div>
                <div class="team-content">
                    <h3 class="title"><?=$model->first_name?> <?=$model->last_name?></h3>
                    <span class="post"><?=$model->position?></span>
                    <ul class="social">
                        <li><a style="width: 180px" href="#"><?=$model->first_phone?></a></li>
                        <li><a style="width: 250px" href="#"><?=$model->email?></a></li>

                    </ul>
                </div>
            </div>
        </div>
            <?php endforeach;?>
        <?php endif;?>
    </div>
</div>