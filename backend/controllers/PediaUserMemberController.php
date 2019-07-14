<?php

namespace backend\controllers;

use common\models\PediaUserGroup;
use common\models\PediaUserPerm;
use Yii;
use common\models\PediaUserMember;
use backend\models\PediaUserMemberSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PediaUserMemberController implements the CRUD actions for PediaUserMember model.
 */
/**
 * Team:没有蛀牙
 * Coding by:孙一冉 1711297，20190712
 * Coding by:解亚兰 1711431，20190713
 * This is the controller of pedia-user-member
*/
class PediaUserMemberController extends Controller
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
     * Lists all PediaUserMember models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }
        $this->layout='backcon';
        $searchModel = new PediaUserMemberSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PediaUserMember model.
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
     * Creates a new PediaUserMember model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
        $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
        $edit = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['allowedcreword'];
        if ($edit != 1) {
            ?><script>alert("只有管理员可以增加用户;history.back();</script><?php
            exit("0");
        }
        $this->layout='backcon';
        $model = new PediaUserMember();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->uid]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PediaUserMember model.
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
        if ($edit != 1) {
            ?><script>alert("只有管理员可以编辑用户");history.back();</script><?php
            exit("0");
        }
        $this->layout='backcon';
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->uid]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PediaUserMember model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->layout='backcon';
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PediaUserMember model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PediaUserMember the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PediaUserMember::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
