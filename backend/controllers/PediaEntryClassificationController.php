<?php


/**
 * Team:没有蛀牙,NKU
 * Coding by 杨越 1711300,20190712
 * This is the controller of bankend web.
 */
namespace backend\controllers;

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
