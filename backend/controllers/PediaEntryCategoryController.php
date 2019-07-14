<?php


/**
 * Team:没有蛀牙,NKU
 * Coding by 杨越 1711300,20190712
 * Coding by 孙一冉 1711297，20190713
 * This is the controller of bankend web.
 */
namespace backend\controllers;

use common\models\PediaUserGroup;
use common\models\PediaUserMember;
use common\models\PediaUserPerm;
use Yii;
use common\models\PediaEntryCategory;
use backend\models\PediaEntryCategorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PediaEntryCategoryController implements the CRUD actions for PediaEntryCategory model.
 */
class PediaEntryCategoryController extends Controller
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
     * Lists all PediaEntryCategory models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }
        $this->layout='backcon';
        $searchModel = new PediaEntryCategorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PediaEntryCategory model.
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
     * Creates a new PediaEntryCategory model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
        $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
        $edit = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['allowedcreword'];
        if ($edit != 1) {
            ?>
            <script>alert("您无权新增类别！");
                history.back();
            </script>
            <?php
            exit("0");
        }
        $this->layout='backcon';
        $model = new PediaEntryCategory();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->cid]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PediaEntryCategory model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
        $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
        $edit = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['alloweditword'];
        if ($edit != 1) {
            ?>
            <script>alert("您无权修改类别！");
                history.back();
            </script>
            <?php
            exit("0");
        }
        $this->layout='backcon';
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->cid]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PediaEntryCategory model.
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
        if ($edit != 1) {
            ?>
            <script>alert("您无权删除类别！");
                history.back();
            </script>
            <?php
            exit("0");
        }
        $this->layout='backcon';
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PediaEntryCategory model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PediaEntryCategory the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PediaEntryCategory::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
