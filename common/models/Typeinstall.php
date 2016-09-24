<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "typeinstall".
 *
 * @property integer $id
 * @property string $typedetail
 *
 * @property Workorder[] $workorders
 */
class Typeinstall extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'typeinstall';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['typedetail'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'typedetail' => 'Typedetail',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkorders()
    {
        return $this->hasMany(Workorder::className(), ['typeinstall_id' => 'id']);
    }
}
