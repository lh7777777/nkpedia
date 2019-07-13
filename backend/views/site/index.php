<?php

/* @var $this yii\web\View */

use common\models\PediaUserGroup;
use common\models\PediaUserMember;
use common\models\PediaUserPerm;

$this->title = 'CenturyOld NankaiPedia';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome!</h1>
        <p class="lead">You have successfully entered our CenturyOld NankaiPedia.</p>

        <p><a class="btn btn-lg btn-success" href="http://localhost:8000/nkpedia/frontend/web/index.php">Click here to visit frontend!</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2 style="width: 100%;height: 45px;display: block;line-height: 45px;text-align: center;">Your Identity</h2>

                <p style="width: 100%;height: 45px;display: block;line-height: 45px;text-align: center;">
                    <?php
                    $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
                    $Gname = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['gname'];
                    echo $Gname;
                    ?>
                </p>

            </div>
            <div class="col-lg-4">
                <h2 style="width: 100%;height: 45px;display: block;line-height: 45px;text-align: center;">Your Perm</h2>

                <p style="width: 100%;height: 45px;display: block;line-height: 45px;text-align: center;">
                    <?php
                    $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
                    $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
                    $edit1 = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['alloweditword'];
                    if ($edit1 == 1)
                    {
                        echo "Allow edit word:Yes";
                    }
                    else
                    {
                        echo "Allow edit word:No";
                    }?>
                </p>
                <p style="width: 100%;height: 45px;display: block;line-height: 45px;text-align: center;">
                    <?php
                    $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
                    $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
                    $edit2 = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['allowbanuser'];
                    if ($edit2 == 1)
                    {
                        echo "Allow ban users:Yes";
                    }
                    else
                    {
                        echo "Allow ban users:No";
                    }?>
                </p>
                <p style="width: 100%;height: 45px;display: block;line-height: 45px;text-align: center;">
                    <?php
                    $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
                    $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
                    $edit3 = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['allowedcreword'];
                    if ($edit3 == 1)
                    {
                        echo "Allow create entry:Yes";
                    }
                    else
                    {
                        echo "Allow create entry:No";
                    }?>
                </p>
                <p style="width: 100%;height: 45px;display: block;line-height: 45px;text-align: center;">
                    <?php
                    $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
                    $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
                    $edit4 = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['alloweddistri'];
                    if ($edit4 == 1)
                    {
                        echo "Allow add medals:Yes";
                    }
                    else
                    {
                        echo "Allow add medals:No";
                    }?>
                </p>
                <p style="width: 100%;height: 45px;display: block;line-height: 45px;text-align: center;">
                    <?php
                    $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
                    $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
                    $edit5 = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['allowedchangeperm'];
                    if ($edit5 == 1)
                    {
                        echo "Allow change perms:Yes";
                    }
                    else
                    {
                        echo "Allow change perms:No";
                    }
                    ?></p>


            </div>
            <div class="col-lg-4">
                <h2 style="width: 100%;height: 45px;display: block;line-height: 45px;text-align: center;">Your Medal</h2>

                <p style="width: 100%;height: 45px;display: block;line-height: 45px;text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

            </div>
        </div>

    </div>
</div>
