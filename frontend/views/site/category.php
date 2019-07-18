<?php

use common\models\PediaEntryCategory;
use common\models\PediaEntryClassification;
use frontend\assets\LayuiAsset;
use yii\helpers\Url;
use common\models\PediaEntryBasicinfo;
/**
 * Team:没有蛀牙,NKU
 * Coding by 杨俣哲 1711396,20190717
 * This is the category page
 */
?>
<div class="layui-container">
    <div class="layui-row">
        <div class="layui-col-md6 layui-col-md-offset3">
            <img src="<?php echo Url::to('@web/resources/title/1.png'); ?>" alt=""/>
        </div>
    </div>
</div>
<div class="layui-container layui-anim layui-anim-upbit">
    <table class="layui-table" lay-skin="line">
        <colgroup>
            <col width="650">
            <col>
            <col width="100">
            <col width="100">
        </colgroup>
        <thead>
        <tr>
            <th>词条名称</th>
            <th>词条类别</th>
            <th>点击次数</th>
            <th>当前评分</th>
        </tr>
        </thead>
        <tbody>
        <?php $categorys=PediaEntryClassification::find()->where(['cid'=>$cid])->all();
        $colors=array('','layui-btn-normal','layui-btn-warm','layui-btn-danger');
        foreach ($categorys as $category)
        {
            $eid=$category->eid;
            $word=PediaEntryBasicinfo::find()->where(['eid'=>$eid])->one();
            echo '<tr>'.
                '<td><a target="_self" href="/nkpedia/frontend/web/index.php?r=site%2Findex&wordse='.$word->title.'">'.$word->title.'</a></td>'.
                '<td><div class="layui-btn-container">';
            $cates=PediaEntryClassification::find()->where(['eid'=>$word->eid])->all();
            foreach ($cates as $cate)
            {
                $cname=PediaEntryCategory::find()->where(['cid'=>$cate->cid])->one();
                echo  '<a target="_self" href="/nkpedia/frontend/web/index.php?r=site%2Fcategory&cid='.$cate->cid.'"><button type="button" class="layui-btn layui-btn-radius '. $colors[rand(0,3)].'">'.$cname->category.'</button></a>';
            }
            echo '</div></td>'. '<td>'.$word->clicktimes.'</td>'.
                '<td>'.$word->grade.'</td>';
        }
        ?>
        </tbody>
    </table>
</div>