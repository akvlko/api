<?php
/**
 * sample
 *
 * Sample Controller to understand the flow and basic setup
 *
 * PHP versions 5.x
 *
 * Ashok Vishwakarma
 * Copyright 2014 Ashok Vishwakarma (http://ashokvishwakarma.in )
 *
 * Redistributions of files is strictly prohibited.
 *
 * @copyright     Copyright 2014 Ashok Vishwakarma
 * @link          http://ashokvishwakarma.in
 * @since         v 1.0
 * @license       Copyright 2014 Ashok Vishwakarma (http://ashokvishwakarma.in )
 */
class sample extends base{
	/**
	 * table
	 * @var string
	 * @uses default table to perform mysql actions, used in BaseCtrl
	 */
	public $table = 'user';
	
	/**
	 * hasOne
	 * @var string
	 * @uses if data belongs to any other table relation should be like singular_table_name.id
	 */
	public $hasOne = array('another_table_name');
	
	/**
	 * hasMany
	 * @var string
	 * @uses if data has many to many relationship with sother tables
	 */
	public $hasMany = array('another_table_name');
	
	/**
	 * find_example
	 * 
	 * @uses uses of mysql find
	 * @return array
	 */
	public function find_example(){
		$data = mysql::find(array('conditions'=>'your conditions refer mysql class for more details'));
		return array('type'=>'success', 'data'=>$data);
	}
	
	/**
	 * save_example
	 *
	 * @uses uses of mysql save
	 * @return array
	 */
	public function save_example($postData){
		if(mysql::save($data)){
			return array('type'=>'success', 'message'=>'Saved successfully');
		}
	}
	
	/**
	 * Refer mysql class for all methods and properties
	 */
}
?>