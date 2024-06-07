<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id_user
 * @property string $nama_user
 * @property string $password
 * @property string $authKey
 * @property string $accessToken
 * @property string $email
 * @property string $nama_lengkap
 * @property int $role
 */
class Users extends \yii\db\ActiveRecord
{
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
            [['nama_user', 'password', 'authKey', 'accessToken', 'email', 'nama_lengkap', 'role'], 'required'],
            [['role'], 'integer'],
            [['nama_user', 'password', 'authKey', 'accessToken', 'email', 'nama_lengkap'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'nama_user' => 'Nama User',
            'password' => 'Password',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
            'email' => 'Email',
            'nama_lengkap' => 'Nama Lengkap',
            'role' => 'Role',
        ];
    }
}
