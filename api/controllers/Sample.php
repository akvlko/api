<?php
/**
 * Sample Controller extends MySQL
 * 
 * Class is extended to MySQL class
 * 
 * public $table = 'your_table_name';
 * corresponding database table name should be gievn in order to use method and properties of MySQL class
 * 
 * @note for url like BASE/api/sample/getAll
 * one need to create a public method named as getAll
 * 
 * public function getAll(){ // your method logic will be here}
 * 
 * to return the data one need to return it from its function like 
 * 
 * return array('type'=>'success', 'data'=>$data);
 */
class Sample extends MySQL{}