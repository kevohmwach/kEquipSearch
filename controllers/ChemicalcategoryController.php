<?php

namespace app\controllers;

use Yii;
use app\models\Chemicalcategory;
use app\models\ChemicalcategorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use yii\web\UploadedFile;

/**
 * ChemicalcategoryController implements the CRUD actions for Chemicalcategory model.
 */
class ChemicalcategoryController extends Controller
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
     * Lists all Chemicalcategory models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ChemicalcategorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Chemicalcategory model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Chemicalcategory model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Chemicalcategory();
        $model2 = new UploadForm();

        if ($model->load(Yii::$app->request->post())) {
            $model2->imageFile = UploadedFile::getInstance($model, 'kequip_prod_chemicalsubavatar');
                if ($model2->upload()) {
                    // file is uploaded successfully
                    $file_strl =  (string) $model2->imageFile;
                    $model->kequip_prod_chemicalsubavatar = $file_strl;
                }else {echo 'wrong file format'; exit;}
                if($model->save()){
                    return $this->redirect(['view', 'id' => $model->id_kequip_prod_chemicalsub]);
                }else{echo 'Failed to insert Records';}   
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Chemicalcategory model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model2 = new UploadForm();
        if ($model->load(Yii::$app->request->post())) {
            $model2->imageFile = UploadedFile::getInstance($model, 'kequip_prod_chemicalsubavatar');
                if ($model2->upload()) {
                    // file is uploaded successfully
                    $file_strl =  (string) $model2->imageFile;
                    $model->kequip_prod_chemicalsubavatar = $file_strl;
                }else {echo 'wrong file format'; exit;}
                if($model->save()){
                    return $this->redirect(['view', 'id' => $model->id_kequip_prod_chemicalsub]);
                }else{echo 'Failed to insert Records';}
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Chemicalcategory model.
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
     * Finds the Chemicalcategory model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Chemicalcategory the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Chemicalcategory::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
