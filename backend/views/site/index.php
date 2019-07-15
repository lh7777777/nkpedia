<?php
/**
 * Team:没有蛀牙,NKU
 * Coding by 杨  越 1711300 20190713
 * Coding by 孙一冉 1711297 20190713
 * Coding by 王心荻 1711298 20190714
 * This is the view of bankend web.
 */

/* @var $this yii\web\View */

use common\models\PediaUserGroup;
use common\models\PediaUserMember;
use common\models\PediaUserPerm;

$this->title = 'CenturyOld NankaiPedia';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>NKpedia</h1>
        <p class="lead">You have successfully entered our CenturyOld NankaiPedia.</p>
        <p><a class="btn btn-lg btn-success" href="http://localhost:8000/nkpedia/frontend/web/index.php">Click here to visit frontend!</a></p>
    </div>

<!--<div class="right_col" role="main">-->
<div class="body-content">
    <div class="clearfix"></div>
            <div id="w0" class="x_panel"><div class="x_title"><h1><i class="fa fa-meh-o"></i> Your Identity</h1><div class="clearfix"></div></div><!--<div class="x_content"><div id="w1" class="active progress-striped progress">-->
                <p style="width: 100%;height: 20px;display: block;line-height: 30px;text-align: left;font-size: 20px">
                    <?php
                    $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
                    $Gname = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['gname'];
                    echo $Gname;
                    ?>
                </p>
                <!--<div class="progress-bar-success progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"><span class="sr-only">70% Complete</span></div>-->
            </div>

                </div>
            </div>
    <div id="w2" class="x_panel"><div class="x_title"><h1><i class="fa fa-mortar-board"></i> Your Perm</h1><div class="clearfix"></div></div><div class="x_content">

            <p style="width: 100%;height: 15px;display: block;line-height: 30px;text-align: left;font-size: 20px"><?php
                $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
                $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
                $edit1 = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['alloweditword'];
                if ($edit1 != 0)
                {
                    echo "Allow edit word:Yes";
                }
                else
                {
                    echo "Allow edit word:No";
                }?>
            </p>
            <p style="width: 100%;height: 15px;display: block;line-height: 30px;text-align: left;font-size: 20px"><?php
                $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
                $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
                $edit2 = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['allowbanuser'];
                if ($edit2 != 0)
                {
                    echo "Allow ban users:Yes";
                }
                else
                {
                    echo "Allow ban users:No";
                }?>
            </p>
            <p style="width: 100%;height: 15px;display: block;line-height: 30px;text-align: left;font-size: 20px"><?php
                $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
                $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
                $edit3 = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['allowedcreword'];
                if ($edit3 != 0)
                {
                    echo "Allow create entry:Yes";
                }
                else
                {
                    echo "Allow create entry:No";
                }?>
            </p>
            <p style="width: 100%;height: 15px;display: block;line-height: 30px;text-align: left;font-size: 20px"><?php
                $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
                $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
                $edit4 = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['alloweddistri'];
                if ($edit4 != 0)
                {
                    echo "Allow add medals:Yes";
                }
                else
                {
                    echo "Allow add medals:No";
                }?>
            </p>
            <p style="width: 100%;height: 15px;display: block;line-height: 30px;text-align: left;font-size: 20px"><?php
                $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
                $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
                $edit5 = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['allowedchangeperm'];
                if ($edit5 != 0)
                {
                    echo "Allow change perms:Yes";
                }
                else
                {
                    echo "Allow change perms:No";
                }
                ?></p>
        </div>
    </div>
    <div id="w2" class="x_panel"><div class="x_title"><h1><i class="fa fa-grav"></i> Your Medal</h1><div class="clearfix"></div></div><div class="x_content">
            <p style="width: 100%;height: 20px;display: block;line-height: 20px;text-align: left;font-size: 20px"><?php
                $loginid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
                $info = Yii::$app->db->createCommand('SELECT mname FROM pedia_user_medal,pedia_user_adorn where pedia_user_medal.mid=pedia_user_adorn.mid and pedia_user_adorn.uid=('.$loginid.')')->queryColumn();
                reset($info);
                foreach ($info as $temp){
                    echo $temp;
                }
                ?></p>

        </div>

    </div>
</div>

