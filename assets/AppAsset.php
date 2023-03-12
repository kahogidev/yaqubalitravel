<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/frontend-files';
    public $css = [
      "plugins/bootstrap/css/bootstrap.min.css",
      "plugins/font-awesome/css/font-awesome.min.css",
      "plugins/flaticon/flaticon.css",
      "plugins/revolution/css/settings.css",
      "plugins/revolution/css/layers.css",
      "plugins/revolution/css/navigation.css",
      "plugins/jquery-ui-1.12.1/jquery-ui.css",
      "plugins/owl.carousel-2/assets/owl.carousel.css",
      "plugins/owl.carousel-2/assets/owl.theme.default.min.css",
      "plugins/lightGallery/dist/css/lightgallery.min.css",
      "plugins/animate.min.css",
      "plugins/bx-slider/jquery.bxslider.css",
      "plugins/datetimepicker/jquery.datetimepicker.min.css",
      "css/style.css",
      "css/responsive.css",
      "css/skin/skin-default.css",
      "images/favicon.ico",

        ];
    public $js = [
      "plugins/jquery/jquery-1.12.4.min.js",
      "plugins/bootstrap/js/bootstrap.min.js",
      "plugins/jquery-ui-1.12.1/jquery-ui.js",
      "plugins/owl.carousel-2/owl.carousel.min.js",
      "plugins/lightGallery/dist/js/lightgallery-all.min.js",
      "plugins/lightGallery/dist/js/jquery.mousewheel.min.js",
      "plugins/jquery-validation/dist/jquery.validate.min.js",
      "plugins/bx-slider/jquery.bxslider.min.js",
      "plugins/datetimepicker/jquery.datetimepicker.full.min.js",
      "plugins/revolution/js/jquery.themepunch.tools.min.js",
      "plugins/revolution/js/jquery.themepunch.revolution.min.js",
      "plugins/revolution/js/extensions/revolution.extension.actions.min.js",
      "plugins/revolution/js/extensions/revolution.extension.carousel.min.js",
      "plugins/revolution/js/extensions/revolution.extension.kenburn.min.js",
      "plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js",
      "plugins/revolution/js/extensions/revolution.extension.migration.min.js",
      "plugins/revolution/js/extensions/revolution.extension.navigation.min.js",
      "plugins/revolution/js/extensions/revolution.extension.parallax.min.js",
      "plugins/revolution/js/extensions/revolution.extension.slideanims.min.js",
      "plugins/revolution/js/extensions/revolution.extension.video.min.js",
      "js/main.js",
      "js/form.js",
    ];
  public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap4\BootstrapAsset',
    ];
}
