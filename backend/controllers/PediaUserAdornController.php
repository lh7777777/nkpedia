<?php

namespace backend\controllers;

use common\models\PediaUserGroup;
use common\models\PediaUserMember;
use common\models\PediaUserPerm;
use Yii;
use common\models\PediaUserAdorn;
use backend\models\PediaUserAdornSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Team:没有蛀牙,NKU
 * Coding by 王心荻 1711298,20190712
 */

/**
 * PediaUserAdornController implements the CRUD actions for PediaUserAdorn model.
 */
class PediaUserAdornController extends Controller
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
     * Lists all PediaUserAdorn models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }
        $this->layout='backcon';
        $searchModel = new PediaUserAdornSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PediaUserAdorn model.
     * @param integer $uid
     * @param integer $mid
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($uid, $mid)
    {
        $this->layout='backcon';
        return $this->render('view', [
            'model' => $this->findModel($uid, $mid),
        ]);
    }

    /**
     * Creates a new PediaUserAdorn model.
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
            ?><script>alert("您无权创建用户佩戴勋章情况");history.back();</script><?php
            exit(0);
        }

        $this->layout='backcon';
        $model = new PediaUserAdorn();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'uid' => $model->uid, 'mid' => $model->mid]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PediaUserAdorn model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $uid
     * @param integer $mid
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($uid, $mid)
    {
        //xd 20190713
        $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
        $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
        $edit = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['alloweditword'];
        if ($edit != 1) {
            ?><script>alert("您无权修改用户勋章佩戴情况");history.back();</script><?php
            exit(0);
        }
        $this->layout='backcon';
        $model = $this->findModel($uid, $mid);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'uid' => $model->uid, 'mid' => $model->mid]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PediaUserAdorn model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $uid
     * @param integer $mid
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($uid, $mid)
    {
        //xd 20190713
        $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
        $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
        $edit = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['allowedcreword'];
        if ($edit != 1) {
            ?><script>alert("您无权删除用户勋章佩戴情况");history.back();</script><?php
            exit(0);
        }

        $this->layout='backcon';
        $this->findModel($uid, $mid)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PediaUserAdorn model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $uid
     * @param integer $mid
     * @return PediaUserAdorn the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($uid, $mid)
    {
        if (($model = PediaUserAdorn::findOne(['uid' => $uid, 'mid' => $mid])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
