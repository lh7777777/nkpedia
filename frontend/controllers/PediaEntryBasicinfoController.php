<?php

namespace frontend\controllers;

use Yii;
use common\models\PediaEntryBasicinfo;
use common\models\PediaEntryBasicinfoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\PediaUserMember;
use common\models\PediaUserGroup;
use common\models\PediaUserPerm;
/**
 * Team:没有蛀牙,NKU
 * Coding by 杨俣哲 1711396,20190717
 * This is basicinfo controller page
 */

/**
 * PediaEntryBasicinfoController implements the CRUD actions for PediaEntryBasicinfo model.
 */
class PediaEntryBasicinfoController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }


    /**
     * Updates an existing PediaEntryBasicinfo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        if(Yii::$app->user->isGuest)
        {
            return $this->redirect(['site/login']);
        }
        $this->layout='laymain';
        $model = $this->findModel($id);
        $gid=PediaUserMember::find()->where(['loginname'=>Yii::$app->user->identity->username])->one()->gid;
        $pid=PediaUserGroup::find()->where(['gid'=>$gid])->one()->pid;
        $wordperm=PediaUserPerm::find()->where(['pid'=>$pid])->one()->alloweditword;
        if($wordperm<$model->needperm)
        {
            return $this->render('//site/error',['message'=>'You don\'t have the perm','name'=>'Perm problem']);
        }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['site/index', 'wordse' => $model->title]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PediaEntryBasicinfo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PediaEntryBasicinfo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PediaEntryBasicinfo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PediaEntryBasicinfo::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
