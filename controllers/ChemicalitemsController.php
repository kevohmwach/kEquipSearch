<?php

namespace app\controllers;

use Yii;
use app\models\Chemicalitems;
use app\models\ChemicalitemsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use yii\web\UploadedFile;

/**
 * ChemicalitemsController implements the CRUD actions for Chemicalitems model.
 */
class ChemicalitemsController extends Controller
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
     * Lists all Chemicalitems models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ChemicalitemsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Chemicalitems model.
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
     * Creates a new Chemicalitems model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Chemicalitems();
        $model2 = new UploadForm();

        if ($model->load(Yii::$app->request->post())) {
            $model2->imageFile = UploadedFile::getInstance($model, 'kequip_prod_chemicalitemavatar');
            //$model2->imageFile2 = UploadedFile::getInstance($model, 'kequip_prod_dealerlogo');
            if ($model2->upload()) {
                // file is uploaded successfully
                $file_strl =  (string) $model2->imageFile;
                $model->kequip_prod_chemicalitemavatar = $file_strl;
                $model2->imageFile = UploadedFile::getInstance($model, 'kequip_prod_chemicaldealerlogo');
                if ($model2->upload()) {
                    //second file uploaded
                    $file_strl =  (string) $model2->imageFile;
                    $model->kequip_prod_chemicaldealerlogo = $file_strl;
                }else {echo 'wrong file2 format'; exit; }
            }else {echo 'wrong file1 format'; exit;}
            if($model->save()){
                return $this->redirect(['view', 'id' => $model->id_kequip_prod_chemicalitem]);
            }else{echo 'Failed to insert Records';}
            
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Chemicalitems model.
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
            $model2->imageFile = UploadedFile::getInstance($model, 'kequip_prod_chemicalitemavatar');
            //$model2->imageFile2 = UploadedFile::getInstance($model, 'kequip_prod_dealerlogo');
            if ($model2->upload()) {
                // file is uploaded successfully
                $file_strl =  (string) $model2->imageFile;
                $model->kequip_prod_chemicalitemavatar = $file_strl;
                $model2->imageFile = UploadedFile::getInstance($model, 'kequip_prod_chemicaldealerlogo');
                if ($model2->upload()) {
                    //second file uploaded
                    $file_strl =  (string) $model2->imageFile;
                    $model->kequip_prod_chemicaldealerlogo = $file_strl;
                }else {echo 'wrong file2 format'; exit; }
            }else {echo 'wrong file1 format'; exit;}
            if($model->save()){
                return $this->redirect(['view', 'id' => $model->id_kequip_prod_chemicalitem]);
            }else{echo 'Failed to insert Records';}
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Chemicalitems model.
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
     * Finds the Chemicalitems model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Chemicalitems the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Chemicalitems::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
