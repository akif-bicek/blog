<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $profile_photo
 */
class User extends \yii\db\ActiveRecord
{
    public $image;
    public $password_confirmation;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'password'], 'required'],
            [['password'], 'compare', 'compareAttribute' => 'password_confirmation'],
            [['image'], 'file', 'extensions' => 'jpg, png', 'mimeTypes' => 'image/jpeg, image/png'],
            [['name', 'email', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'İsim Soyisim',
            'email' => 'E-Posta',
            'password' => 'Parola',
            'password_confirmation' => 'Parola Onay',
            'profile_photo' => 'Profil Fotoğrafı',
        ];
    }

    public static function findByEmail($email)
    {
        return self::find()->where(['email' => $email])->one();
    }

    public function upload()
    {
        $fileName = 'https://www.yiiframework.com/image/design/logo/yii3_sign.svg';
        if ($this->image != null) {
            $fileName = 'uploads/' . randFileName() . '.' . $this->image->extension;
            $this->image->saveAs($fileName);
        }
        return $fileName;
    }
}