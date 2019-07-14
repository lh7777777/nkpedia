<?php

namespace backend\controllers;

use common\models\PediaUserMember;
use common\models\PediaUserPerm;
use Yii;
use common\models\PediaUserGroup;
use backend\models\PediaUserGroupSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PediaUserGroupController implements the CRUD actions for PediaUserGroup model.
 */
/**
 * Team:没有蛀牙
 * Coding by:孙一冉 1711297，20190712
 * Coding by:解亚兰 1711431，20190713
 * This is the controller of pedia-user-group
 */
class PediaUserGroupController extends Controller
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
     * Lists all PediaUserGroup models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }
        $this->layout='backcon';
        $searchModel = new PediaUserGroupSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PediaUserGroup model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $this->layout='backcon';
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new PediaUserGroup model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
        $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
        $edit = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['allowedcreword'];
        if ($edit == 0) {
            ?><script>alert("只有管理员可以创建用户组");history.back();</script><?php
            exit("0");
        }
        $this->layout='backcon';
        $model = new PediaUserGroup();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->gid]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PediaUserGroup model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
        $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
        $edit = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['allowedcreword'];
        if ($edit == 0) {
            ?><script>alert("只有管理员可以更改用户组");history.back();</script><?php
            exit("0");
        }
        $this->layout='backcon';
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->gid]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PediaUserGroup model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
        $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
        $edit = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['allowedcreword'];
        if ($edit == 0) {
            ?><script>alert("只有管理员可以删除用户组");history.back();</script><?php
            exit("0");
        }
        $this->layout='backcon';
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PediaUserGroup model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PediaUserGroup the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PediaUserGroup::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
