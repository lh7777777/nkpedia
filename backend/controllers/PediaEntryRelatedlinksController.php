<?php

namespace backend\controllers;

use common\models\PediaUserGroup;
use common\models\PediaUserMember;
use common\models\PediaUserPerm;
use Yii;
use common\models\PediaEntryRelatedlinks;
use backend\models\PediaEntryRelatedlinksSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PediaEntryRelatedlinksController implements the CRUD actions for PediaEntryRelatedlinks model.
 */

/**
 * Team: 没有蛀牙,NKU
 * Coding by 解亚兰 1711431,20190712
 * Coding by 王心荻 1711298,20190713
 * Coding by 孙一冉 1711297,20190713
 * This is the controller of pedia-entry-relatedlinks table
 */
class PediaEntryRelatedlinksController extends Controller
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
     * Lists all PediaEntryRelatedlinks models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }
        $this->layout='backcon';
        $searchModel = new PediaEntryRelatedlinksSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PediaEntryRelatedlinks model.
     * @param integer $eid
     * @param integer $lid
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($eid, $lid)
    {
        $this->layout='backcon';
        return $this->render('view', [
            'model' => $this->findModel($eid, $lid),
        ]);
    }

    /**
     * Creates a new PediaEntryRelatedlinks model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        //xd 20190713
        $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
        $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
        $edit = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['allowedcreword'];
        if ($edit != 1) {
            ?><script>alert("您无权创建相关链接");history.back();</script><?php
            exit(0);
        }

        $this->layout='backcon';
        $model = new PediaEntryRelatedlinks();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'eid' => $model->eid, 'lid' => $model->lid]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PediaEntryRelatedlinks model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $eid
     * @param integer $lid
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($eid, $lid)
    {
        //xd 20190713
        $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
        $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
        $edit = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['alloweditword'];
        if ($edit != 1) {
            ?><script>alert("您无权修改相关链接");history.back();</script><?php
            exit(0);
        }

        $this->layout='backcon';
        $model = $this->findModel($eid, $lid);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'eid' => $model->eid, 'lid' => $model->lid]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PediaEntryRelatedlinks model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $eid
     * @param integer $lid
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($eid, $lid)
    {
        //xd 20190713
        $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
        $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
        $edit = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['allowedcreword'];
        if ($edit != 1) {
            ?><script>alert("您无权删除相关链接");history.back();</script><?php
            exit("0");
        }

        $this->layout='backcon';
        $this->findModel($eid, $lid)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PediaEntryRelatedlinks model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $eid
     * @param integer $lid
     * @return PediaEntryRelatedlinks the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($eid, $lid)
    {
        if (($model = PediaEntryRelatedlinks::findOne(['eid' => $eid, 'lid' => $lid])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
