<?php


namespace app\assets;


use yii\web\AssetBundle;

class ProfileAsset extends AssetBundle
{
    public $basePath = '@webroot';
//    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
    public $baseUrl = '@web';

    public $css = [
        'css/posts.css',
        'css/profile.css',
    ];

    public $js = [

    ];

    public $depends = [
    ];
}