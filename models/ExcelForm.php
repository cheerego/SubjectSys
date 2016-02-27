<?php
/**
 * Created by PhpStorm.
 * User: placeless
 * Date: 16/2/12
 * Time: 下午9:15
 */
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

/**
 * UploadForm is the model behind the upload form.
 */
class ExcelForm extends Model
{
    /**
     * @var UploadedFile|Null file attribute
     */
    public $excel;
    public $delete;
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['excel'], 'file', 'skipOnEmpty' => false, 'extensions' => 'xls,xlsx'],
//            ['delete']
        ];
    }



    public function upload()
    {
        if ($this->validate()) {
            $exceldir = \Yii::getAlias('@app') . "/excel/";
            $excelname = $exceldir . date('Ymd-His') . '.' . $this->excel->extension;
            $this->excel
                ->saveAs($excelname);

            return $excelname;
        } else {
            return false;
        }
    }
    public function attributeLabels()
    {
        return [
            'excel' => 'Excel文件',
            'delete'=>'删除全部学生数据'
        ];
    }
}