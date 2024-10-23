<?
namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class UploadcsvFile extends Model
{
    /**
     * @var UploadedFile
     */
    public $file;

  public function rules()
    {
        return [
            ['file', 'file', 'extensions' => ['csv'], 'maxSize' => 1024*1024],
        ];
    }

    public function upload()
    {

        if ($this->validate()) {
        
            $this->file->saveAs('uploads/' . $this->file->baseName . '.' . $this->file->extension);
            return true;
        } else {
            return false;
        }
    }
}
?>