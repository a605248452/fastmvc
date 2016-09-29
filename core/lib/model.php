<?php

namespace core\lib;

use \core\lib\conf;

class model extends \PDO
{
	public function __construct()
	{
		$conf = conf::all('database');
		$dns = 'mysql:host='.$conf['DB_HOST'].';dbname='.$conf['DB_NAME'].';charset='.$conf['CHARSET'].'';
		$username = $conf['DB_USER'];
		$passwd = $conf['DB_PWD'];
		try {
			parent::__construct($dns ,$username ,$passwd);
		} catch (\PDOException $e){
			p($e->getMessage());
		}
	}
}