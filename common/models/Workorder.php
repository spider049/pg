<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "workorder".
 *
 * @property integer $id
 * @property integer $workorder_status_id
 * @property integer $typeinstall_id
 * @property integer $user_id
 * @property string $circuit_id
 * @property string $customers_name
 * @property string $address
 * @property string $tel
 * @property string $gps
 * @property string $catv_no
 * @property string $fixedline_plus
 * @property string $due_date
 * @property string $remarks
 *
 * @property Typeinstall $typeinstall
 * @property User $user
 * @property WorkorderStatus $workorderStatus
 */
class Workorder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'workorder';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['workorder_status_id', 'typeinstall_id', 'user_id'], 'required'],
            [['workorder_status_id', 'typeinstall_id', 'user_id'], 'integer'],
            [['address'], 'string'],
            [['due_date'], 'safe'],
            [['circuit_id', 'customers_name', 'tel', 'gps', 'catv_no', 'fixedline_plus'], 'string', 'max' => 45],
            [['remarks'], 'string', 'max' => 300],
            [['typeinstall_id'], 'exist', 'skipOnError' => true, 'targetClass' => Typeinstall::className(), 'targetAttribute' => ['typeinstall_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['workorder_status_id'], 'exist', 'skipOnError' => true, 'targetClass' => WorkorderStatus::className(), 'targetAttribute' => ['workorder_status_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'workorder_status_id' => 'สถานะใบงาน',
            'typeinstall_id' => 'ชนิดใบงาน',
            'user_id' => 'รหัสช่าง',
            'circuit_id' => 'Circuit ID',
            'customers_name' => 'ชื่อลูกค้า',
            'address' => 'ที่อยู่',
            'tel' => 'เบอร์ติดต่อ',
            'gps' => 'พิกัด',
            'catv_no' => 'CAtv No',
            'fixedline_plus' => 'Fixedline Plus',
            'due_date' => 'วันนัดติดตั้ง',
            'remarks' => 'Remarks',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTypeinstall()
    {
        return $this->hasOne(Typeinstall::className(), ['id' => 'typeinstall_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkorderStatus()
    {
        return $this->hasOne(WorkorderStatus::className(), ['id' => 'workorder_status_id']);
    }
}
