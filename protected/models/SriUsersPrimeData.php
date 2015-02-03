<?php

/**
 * This is the model class for table "sri_users_prime_data".
 *
 * The followings are the available columns in table 'sri_users_prime_data':
 * @property integer $id
 * @property string $first_name
 * @property string $Last_name
 * @property string $email
 * @property string $password
 * @property string $date_of_birth
 * @property string $religion
 * @property string $mother_tongue
 * @property integer $mobile_no
 * @property string $gender
 */
class SriUsersPrimeData extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sri_users_prime_data';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, Last_name, email, password, date_of_birth, religion, mother_tongue, mobile_no, gender', 'required'),
			array('mobile_no', 'numerical', 'integerOnly'=>true),
			array('first_name, Last_name, email, password', 'length', 'max'=>200),
			array('religion, mother_tongue', 'length', 'max'=>100),
			array('gender', 'length', 'max'=>6),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, first_name, Last_name, email, password, date_of_birth, religion, mother_tongue, mobile_no, gender', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'first_name' => 'First Name',
			'Last_name' => 'Last Name',
			'email' => 'Email',
			'password' => 'Password',
			'date_of_birth' => 'Date of Birth',
			'religion' => 'Religion',
			'mother_tongue' => 'Mother Tongue',
			'mobile_no' => 'Mobile Number',
			'gender' => 'Gender',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('Last_name',$this->Last_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('date_of_birth',$this->date_of_birth,true);
		$criteria->compare('religion',$this->religion,true);
		$criteria->compare('mother_tongue',$this->mother_tongue,true);
		$criteria->compare('mobile_no',$this->mobile_no);
		$criteria->compare('gender',$this->gender,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SriUsersPrimeData the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
