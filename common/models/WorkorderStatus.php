<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "workorder_status".
 *
 * @property integer $id
 * @property string $status
 *
 * @property Workorder[] $workorders
 */
class WorkorderStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'workorder_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkorders()
    {
        return $this->hasMany(Workorder::className(), ['workorder_status_id' => 'id']);
    }
}
