<?php

namespace backend\controllers;

use Yii;
use common\models\Banners;
use backend\models\BannerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BannersController implements the CRUD actions for Banners model.
 */
class BannersController extends Controller
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
     * Lists all Banners models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BannerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Banners model.
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
     * Creates a new Banners model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Banners();
        if(!empty(Yii::$app->request->post())) {
            $postData = Yii::$app->request->post();
            if(!empty($_FILES['Banners']['name']['image'])) {
               $postData['Banners']['image'] = $this->uploadFiles($_FILES)['file_path'];
            } else {
                Yii::$app->session->setFlash('error', "Image should be mandatory");
                return $this->redirect(['create']);
            }
            if ($model->load($postData) && $model->save()) {
                return $this->redirect(['index']);
            }    
        }
        

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Banners model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if(!empty(Yii::$app->request->post())) {
            $postData = Yii::$app->request->post();
            if(!empty($_FILES['Banners']['name']['image'])) {
               $postData['Banners']['image'] = $this->uploadFiles($_FILES)['file_path'];
            } else {
                Yii::$app->session->setFlash('error', "Image should be mandatory");
                return $this->redirect(['create']);
            }
            if ($model->load($postData) && $model->save()) {
                return $this->redirect(['index']);
            }    
        }
        
        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
        //     return $this->redirect(['view', 'id' => $model->id]);
        // }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Banners model.
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

    private function uploadFiles($files = []) {
        $uploaded_files = [];
        if (!empty($files)) {
            // print_r($files); die;
            $file_name = $files['Banners']['name']['image'];
            if (!empty($file_name))
                {
                    $target_dir = Yii::getAlias('@frontend').'/web/uploads/banners';
                    // die;
                    if (!file_exists($target_dir)) {
                        $old_umask = umask(0);
                        mkdir($target_dir, 0777, true);
                        umask($old_umask);
                    }
                    $file_name = time(). uniqid() . basename($file_name);
                    
                    $target_file = $target_dir.'/' .$file_name;
                    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
                    
                    if (move_uploaded_file($files['Banners']['tmp_name']['image'], $target_file)) {
                        $uploaded_files = ['file_path' => $file_name, 'original_name' => $file_name];
                    }
                }
        }
        return $uploaded_files;
    }

    /**
     * Finds the Banners model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Banners the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Banners::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
