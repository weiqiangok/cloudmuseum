<?php

namespace app\models;

use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model {
	public $username;
	public $email;
	public $password;
	
	/**
	 * @inheritdoc
	 */
	public function rules() {
		return [ 
				[ 
						'username',
						'filter',
						'filter' => 'trim' 
				],
				[ 
						'username',
						'required' 
				],
				[ 
						'username',
						'unique',
						'targetClass' => '\app\models\User',
						'message' => '用户已存在!'
				],
				[ 
						'username',
						'string',
						'min' => 2,
						'max' => 255 
				],
				
				[ 
						'email',
						'filter',
						'filter' => 'trim' 
				],
				[ 
						'email',
						'required' 
				],
				[ 
						'email',
						'email' 
				],
				[ 
						'email',
						'string',
						'max' => 255 
				],
				[ 
						'email',
						'unique',
						'targetClass' => '\app\models\User',
						'message' => '邮箱已被使用!'
				],
				
				
				
				[ 
						'password',
						'required' 
				],
				[ 
						'password',
						'string',
						'min' => 6 
				] 
		];
	}
	
	/**
	 * Signs user up.
	 *
	 * @return User null saved model or null if saving fails
	 */
	public function signup() {
		if ($this->validate ()) {
			$user = new User ();
			$user->username = $this->username;
			$user->email = $this->email;
			$user->setPassword ( $this->password );
			$user->generateAuthKey ();
			if ($user->save ()) {
// 				$auth = Yii::$app->authManager;
// 				$roleList = [ 
// 						'viewer',
// 						'GM',
// 						'admin' 
// 				];
// 				$role = $auth->getRole ( $roleList [$this->role] );
// 				$auth->assign ( $role, $user->getId () );
				return $user;
			}
		}
		
		return null;
	}
}
