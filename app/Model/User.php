
<?php
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
		
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
				
            ),
			
			'Match passwords'=>array(
				'rule'=>'matchpasswords',
				'message'=>'Your passwords do not match'
				)
        ),
		 'confirm password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'confirm your password is correct'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );
	
	public function matchpasswords($data) {
		if($data['password'] ==$this->data['User']['confirm password']) {
		return true;
		}
		return false;
	}

public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $passwordHasher = new SimplePasswordHasher();
        $this->data[$this->alias]['password'] = $passwordHasher->hash(
            $this->data[$this->alias]['password']
        );
    }
    return true;
}
}
?>