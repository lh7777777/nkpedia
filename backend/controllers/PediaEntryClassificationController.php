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
use common\models\PediaEntryClassification;
use backend\models\PediaEntryClassificationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PediaEntryClassificationController implements the CRUD actions for PediaEntryClassification model.
 */
class PediaEntryClassificationController extends Controller
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
     * Lists all PediaEntryClassification models.
     * @return mixed
     */
    public function actionIndex()
    {
        if (Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }
        $this->layout='backcon';
        $searchModel = new PediaEntryClassificationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PediaEntryClassification model.
     * @param integer $eid
     * @param integer $cid
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($eid, $cid)
    {
        $this->layout='backcon';
        return $this->render('view', [
            'model' => $this->findModel($eid, $cid),
        ]);
    }

    /**
     * Creates a new PediaEntryClassification model.
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
            <script>alert("您无权新增分类！");
                history.back();
            </script>
            <?php
            exit("0");
        }
        $this->layout='backcon';
        $model = new PediaEntryClassification();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'eid' => $model->eid, 'cid' => $model->cid]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PediaEntryClassification model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $eid
     * @param integer $cid
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($eid, $cid)
    {
        $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
        $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
        $edit = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['alloweditword'];
        if ($edit != 1) {
            ?>
            <script>alert("您无权修改分类！");
                    history.back();
            </script>
            <?php
            exit("0");
        }
        $this->layout='backcon';
        $model = $this->findModel($eid, $cid);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'eid' => $model->eid, 'cid' => $model->cid]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PediaEntryClassification model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $eid
     * @param integer $cid
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($eid, $cid)
    {
        $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
        $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
        $edit = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['allowedcreword'];
        if ($edit != 1) {
            ?>
            <script>alert("您无权删除分类！");
                history.back();
            </script>
            <?php
            exit("0");
        }
        $this->layout='backcon';
        $this->findModel($eid, $cid)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PediaEntryClassification model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $eid
     * @param integer $cid
     * @return PediaEntryClassification the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($eid, $cid)
    {
        if (($model = PediaEntryClassification::findOne(['eid' => $eid, 'cid' => $cid])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
