<?php

namespace backend\controllers;

use Yii;
use common\models\Portfolio;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use Imagine\Image\ManipulatorInterface;
use yii\imagine\Image;


/**
 * PortfolioController implements the CRUD actions for Portfolio model.
 */
class PortfolioController extends Controller
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
     * Lists all Portfolio models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Portfolio::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Portfolio model.
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
     * Creates a new Portfolio model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Portfolio();
        $dir = Yii::getAlias('@frontend/web');
        $model->scenario = "create";
        if ($model->load(Yii::$app->request->post())) {
            $model->photos = UploadedFile::getInstances($model, 'photos');
            $model->logo_img = UploadedFile::getInstance($model, 'logo_img');
            $saveDir = Yii::getAlias('@frontend/web/uploads/');            
            if(!file_exists($saveDir)){
                mkdir($saveDir, 0775, true);
            }
            // if (isset($model->photos) && !$model->saveImg()) {
            //     var_dump($model->getErrors());die;
            //     return $this->render('create', [
            //         'model' => $model,
            //     ]);
            // }
            if ($model->photos != null) {
                $time = strtotime(date('Y-m-d H:i:s'));
                $arr_photos = [];
                foreach ($model->photos as $file) {
                    $item = [];
                    $pathBig = '/uploads/' . $file->baseName .'Big_'. $time . '.' . $file->extension;              
                    Image::thumbnail($file->tempName, 950, 524, ManipulatorInterface::THUMBNAIL_OUTBOUND)
                    ->save($dir . $pathBig, ['quality' => 100]);   
                    $path = '/uploads/' . $file->baseName .'_'. $time . '.' . $file->extension;
                    Image::thumbnail($file->tempName, 462, 254, ManipulatorInterface::THUMBNAIL_OUTBOUND)
                    ->save($dir . $path, ['quality' => 100]);                                           
                    $item = [$pathBig, $path];
                    array_push($arr_photos, $item);
                }    
                $model->images = json_encode($arr_photos);            
            }
            if (isset($model->logo_img)) {
                $time = strtotime(date('Y-m-d H:i:s'));            
                $path = '/uploads/' . $model->logo_img->baseName .'_'. $time . '.' . $model->logo_img->extension;                
                $model->logo_path = $path;
            }
            if (!$model->save()) {              
                var_dump($model->getErrors());die;  
                return $this->render('create', [
                    'model' => $model,
                ]);
            }

            // if (!$model->upload()) {
            //     var_dump($model->getErrors());die;
            //     return $this->render('create', [
            //         'model' => $model,
            //     ]);
            // }
            if (isset($model->logo_img)) { 
                $model->logo_img->saveAs($dir . $model->logo_path);
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Portfolio model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $dir = Yii::getAlias('@frontend/web');
        $model->scenario="update";
        $old_photos = json_decode($model->images);
        $old_logo = $model->logo_path;
        if ($model->load(Yii::$app->request->post())) {            
            $model->photos = UploadedFile::getInstances($model, 'photos');
            $model->logo_img = UploadedFile::getInstance($model, 'logo_img');

            if ($model->photos != null) {
                $time = strtotime(date('Y-m-d H:i:s'));
                $arr_photos = [];
                foreach ($model->photos as $file) {
                    $item = [];
                    $pathBig = '/uploads/' . $file->baseName .'Big_'. $time . '.' . $file->extension;              
                    Image::thumbnail($file->tempName, 950, 524, ManipulatorInterface::THUMBNAIL_OUTBOUND)
                    ->save($dir . $pathBig, ['quality' => 100]);   
                    $path = '/uploads/' . $file->baseName .'_'. $time . '.' . $file->extension;
                    Image::thumbnail($file->tempName, 462, 254, ManipulatorInterface::THUMBNAIL_OUTBOUND)
                    ->save($dir . $path, ['quality' => 100]);                                           
                    $item = [$pathBig, $path];
                    array_push($arr_photos, $item);
                }    
                $model->images = json_encode($arr_photos);            
            }
            if (isset($model->logo_img)) {
                $time = strtotime(date('Y-m-d H:i:s'));            
                $path = '/uploads/' . $model->logo_img->baseName .'_'. $time . '.' . $model->logo_img->extension;                
                $model->logo_path = $path;
            }
            if (!$model->save()) {              
                var_dump($model->getErrors());die;  
                return $this->render('create', [
                    'model' => $model,
                ]);
            }

            if (isset($model->photos)) {                
                $model->unlinkPhotos($old_photos);
            }

            if (isset($model->logo_img)) {
                $model->logo_img->saveAs($dir . $model->logo_path);
                // $model->uploadLogo();
                if (!empty($old_logo) && file_exists($dir . $old_logo)) {
                    unlink($dir . $old_logo);
                }
            }

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Portfolio model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        // $old = json_decode($model->images);
        // $model->unlinkPhotos($old);
        $model->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Portfolio model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Portfolio the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Portfolio::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
