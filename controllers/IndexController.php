<?php
/**
 * Created by PhpStorm.
 * User: Yuanbo
 * Date: 2019/6/25
 * Time: 22:39
 */

namespace app\controllers;

use Yii;

class IndexController extends BaseController
{
    //blog 首页
    public function actionIndex()
    {

        return $this->render('index');
    }

    // 详情
    public function actionDetail()
    {

        return $this->render('detail');
    }


    //关于我
    public function actionAboutus()
    {

        return $this->render('aboutus');
    }



}