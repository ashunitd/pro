<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
Class Mongo_db{
 
	private $CI;
	private $config = array();
	private $param = array();
	private $activate;
	private $connect;
	private $db;
	private $hostname;
	private $port;
	private $database;
	private $username;
	private $password;
	private $debug;
	private $write_concerns;
	private $journal;
	private $selects = array();
	private $updates = array();
	private $wheres	= array();
	private $limit	= 999999;
	private $offset	= 0;
	private $sorts	= array();
	private $return_as = 'array';
 
	function __construct($param)
	{
 
		if ( ! class_exists('Mongo') && ! class_exists('MongoClient'))
		{
			show_error("The MongoDB PECL extension has not been installed or enabled", 500);
		}
		$this->CI =& get_instance();
		$this->CI->load->config('mongo_db');
		$this->config = $this->CI->config->item('mongo_db');
		$this->param = $param;
		$this->connect();
	}
 
	function __destruct()
	{
		if(is_object($this->connect))
		{
			$this->connect->close();
		}
	}
 
	private function prepare()
	{
		if(is_array($this->param) && count($this->param) > 0 && isset($this->param['activate']) == TRUE)
		{
			$this->activate = $this->param['activate'];
		}
		else if(isset($this->config['active']) && !empty($this->config['active']))
		{
			$this->activate = $this->config['active'];
		}else
		{
			show_error("MongoDB configuration is missing.", 500);
		}
 
		if(isset($this->config[$this->activate]) == TRUE)
		{
			if(empty($this->config[$this->activate]['hostname']))
			{
				show_error("Hostname missing from mongodb config group : {$this->activate}", 500);
			}
			else
			{
				$this->hostname = trim($this->config[$this->activate]['hostname']);
			}
 
			if(empty($this->config[$this->activate]['port']))
			{
				show_error("Port number missing from mongodb config group : {$this->activate}", 500);
			}
			else
			{
				$this->port = trim($this->config[$this->activate]['port']);
			}
 
			if(empty($this->config[$this->activate]['username']))
			{
				show_error("Username missing from mongodb config group : {$this->activate}", 500);
			}
			else
			{
				$this->username = trim($this->config[$this->activate]['username']);
			}
 
			if(empty($this->config[$this->activate]['password']))
			{
				show_error("Password missing from mongodb config group : {$this->activate}", 500);
			}
			else
			{
				$this->password = trim($this->config[$this->activate]['password']);
			}
 
			if(empty($this->config[$this->activate]['database']))
			{
				show_error("Database name missing from mongodb config group : {$this->activate}", 500);
			}
			else
			{
				$this->database = trim($this->config[$this->activate]['database']);
			}
 
			if(empty($this->config[$this->activate]['db_debug']))
			{
				$this->debug = FALSE;
			}
			else
			{
				$this->debug = $this->config[$this->activate]['db_debug'];
			}
 
			if(empty($this->config[$this->activate]['write_concerns']))
			{
				$this->write_concerns = 1;
			}
			else
			{
				$this->write_concerns = $this->config[$this->activate]['write_concerns'];
			}
 
			if(empty($this->config[$this->activate]['journal']))
			{
				$this->journal = TRUE;
			}
			else
			{
				$this->journal = $this->config[$this->activate]['journal'];
			}
 
			if(empty($this->config[$this->activate]['return_as']))
			{
				$this->return_as = 'array';
			}
			else
			{
				$this->return_as = $this->config[$this->activate]['return_as'];
			}
		}
		else
		{
			show_error("mongodb config group :  <strong>{$this->activate}</strong> does not exist.", 500);
		}
	}
 
 
	private function connect()
	{
		$this->prepare();
		try
		{
			$dns = "mongodb://{$this->hostname}:{$this->port}/{$this->database}";
			if(isset($this->config[$this->activate]['no_auth']) == TRUE && $this->config[$this->activate]['no_auth'] == TRUE)
			{
				$options = array();
			}
			else
			{
				$options = array('username'=>$this->username, 'password'=>$this->password);
			}
			$this->connect = new MongoClient($dns, $options);
			$this->db = $this->connect->selectDB($this->database);
			$this->db = $this->connect->{$this->database};
		}
		catch (MongoConnectionException $e)
		{
			if(isset($this->debug) == TRUE && $this->debug == TRUE)
			{
				show_error("Unable to connect to MongoDB: {$e->getMessage()}", 500);
			}
			else
			{
				show_error("Unable to connect to MongoDB", 500);
			}
		}
	}
 
	public function insert($collection = "", $insert = array())
	{
		if (empty($collection))
		{
			show_error("No Mongo collection selected to insert into", 500);
		}
 
		if (!is_array($insert) || count($insert) == 0)
		{
			show_error("Nothing to insert into Mongo collection or insert is not an array", 500);
		}
 
		try
		{
			$this->db->{$collection}->insert($insert, array('w' => $this->write_concerns, 'j'=>$this->journal));
			if (isset($insert['_id']))
			{
				return ($insert['_id']);
			}
			else
			{
				return (FALSE);
			}
		}
		catch (MongoCursorException $e)
		{
			if(isset($this->debug) == TRUE && $this->debug == TRUE)
			{
				show_error("Insert of data into MongoDB failed: {$e->getMessage()}", 500);
			}
			else
			{
				show_error("Insert of data into MongoDB failed", 500);
			}
		}
	}
	public function batch_insert($collection = "", $insert = array())
	{
		if (empty($collection))
		{
			show_error("No Mongo collection selected to insert into", 500);
		}
		if (count($insert) == 0 || !is_array($insert))
		{
			show_error("Nothing to insert into Mongo collection or insert is not an array", 500);
		}
		try
		{
			$this->db->{$collection}->batchInsert($insert, array('w' => $this->write_concerns, 'j'=>$this->journal));
			if (isset($insert['_id']))
			{
				return ($insert['_id']);
			}
			else
			{
				return (FALSE);
			}
		}
		catch (MongoCursorException $e)
		{
			if(isset($this->debug) == TRUE && $this->debug == TRUE)
			{
				show_error("Batch insert of data into MongoDB failed: {$e->getMessage()}", 500);
			}
			else
			{
				show_error("Batch insert of data into MongoDB failed", 500);
			}
		}
	}
	public function select($includes = array(), $excludes = array())
	{
		if ( ! is_array($includes))
		{
			$includes = array();
		}
		if ( ! is_array($excludes))
		{
			$excludes = array();
		}
		if ( ! empty($includes))
		{
			foreach ($includes as $col)
			{
				$this->selects[$col] = 1;
			}
		}
		if ( ! empty($excludes))
		{
			foreach ($excludes as $col)
			{
				$this->selects[$col] = 0;
			}
		}
		return ($this);
	}
 
	public function where($wheres, $value = null)
	{
		if (is_array($wheres))
		{
			foreach ($wheres as $wh => $val)
			{
				$this->wheres[$wh] = $val;
			}
		}
		else
		{
			$this->wheres[$wheres] = $value;
		}
		return $this;
	}
 
	public function or_where($wheres = array())
	{
		if (is_array($wheres) && count($wheres) > 0)
		{
			if ( ! isset($this->wheres['$or']) || ! is_array($this->wheres['$or']))
			{
				$this->wheres['$or'] = array();
			}
			foreach ($wheres as $wh => $val)
			{
				$this->wheres['$or'][] = array($wh=>$val);
			}
			return ($this);
		}
		else
		{
			show_error("Where value should be an array.", 500);
		}
	}
	public function where_in($field = "", $in = array())
	{
		if (empty($field))
		{
			show_error("Mongo field is require to perform where in query.", 500);
		}
 
		if (is_array($in) && count($in) > 0)
		{
			$this->_w($field);
			$this->wheres[$field]['$in'] = $in;
			return ($this);
		}
		else
		{
			show_error("in value should be an array.", 500);
		}
	}
 
	public function where_in_all($field = "", $in = array())
	{
		if (empty($field))
		{
			show_error("Mongo field is require to perform where all in query.", 500);
		}
 
		if (is_array($in) && count($in) > 0)
		{
			$this->_w($field);
			$this->wheres[$field]['$all'] = $in;
			return ($this);
		}
		else
		{
			show_error("in value should be an array.", 500);
		}
	}
 
	public function where_not_in($field = "", $in = array())
	{
		if (empty($field))
		{
			show_error("Mongo field is require to perform where not in query.", 500);
		}
 
		if (is_array($in) && count($in) > 0)
		{
			$this->_w($field);
			$this->wheres[$field]['$nin'] = $in;
			return ($this);
		}
		else
		{
			show_error("in value should be an array.", 500);
		}
	}
	public function where_gt($field = "", $x)
	{
		if (!isset($field))
		{
			show_error("Mongo field is require to perform greater then query.", 500);
		}
 
		if (!isset($x))
		{
			show_error("Mongo field's value is require to perform greater then query.", 500);
		}
 
		$this->_w($field);
		$this->wheres[$field]['$gt'] = $x;
		return ($this);
	}
 
	public function where_gte($field = "", $x)
	{
		if (!isset($field))
		{
			show_error("Mongo field is require to perform greater then or equal query.", 500);
		}
 
		if (!isset($x))
		{
			show_error("Mongo field's value is require to perform greater then or equal query.", 500);
		}
 
		$this->_w($field);
		$this->wheres[$field]['$gte'] = $x;
		return($this);
	}
 
	public function where_lt($field = "", $x)
	{
		if (!isset($field))
		{
			show_error("Mongo field is require to perform less then query.", 500);
		}
 
		if (!isset($x))
		{
			show_error("Mongo field's value is require to perform less then query.", 500);
		}
 
		$this->_w($field);
		$this->wheres[$field]['$lt'] = $x;
		return($this);
	}
	public function where_lte($field = "", $x)
	{
		if (!isset($field))
		{
			show_error("Mongo field is require to perform less then or equal to query.", 500);
		}
 
		if (!isset($x))
		{
			show_error("Mongo field's value is require to perform less then or equal to query.", 500);
		}
 
		$this->_w($field);
		$this->wheres[$field]['$lte'] = $x;
		return ($this);
	}
 
	public function where_between($field = "", $x, $y)
	{
		if (!isset($field))
		{
			show_error("Mongo field is require to perform greater then or equal to query.", 500);
		}
 
		if (!isset($x))
		{
			show_error("Mongo field's start value is require to perform greater then or equal to query.", 500);
		}
 
		if (!isset($y))
		{
			show_error("Mongo field's end value is require to perform greater then or equal to query.", 500);
		}
 
		$this->_w($field);
		$this->wheres[$field]['$gte'] = $x;
		$this->wheres[$field]['$lte'] = $y;
		return ($this);
	}
 
	public function where_between_ne($field = "", $x, $y)
	{
		if (!isset($field))
		{
			show_error("Mongo field is require to perform between and but not equal to query.", 500);
		}
 
		if (!isset($x))
		{
			show_error("Mongo field's start value is require to perform between and but not equal to query.", 500);
		}
 
		if (!isset($y))
		{
			show_error("Mongo field's end value is require to perform between and but not equal to query.", 500);
		}
 
		$this->_w($field);
		$this->wheres[$field]['$gt'] = $x;
		$this->wheres[$field]['$lt'] = $y;
		return ($this);
	}
 
	public function where_ne($field = '', $x)
	{
		if (!isset($field))
		{
			show_error("Mongo field is require to perform Where not equal to query.", 500);
		}
 
		if (!isset($x))
		{
			show_error("Mongo field's value is require to perform Where not equal to query.", 500);
		}
 
		$this->_w($field);
		$this->wheres[$field]['$ne'] = $x;
		return ($this);
	}
 
	public function like($field = "", $value = "", $flags = "i", $enable_start_wildcard = TRUE, $enable_end_wildcard = TRUE)
	{
		if (empty($field))
		{
			show_error("Mongo field is require to perform like query.", 500);
		}
 
		if (empty($value))
		{
			show_error("Mongo field's value is require to like query.", 500);
		}
 
		$field = (string) trim($field);
		$this->_w($field);
		$value = (string) trim($value);
		$value = quotemeta($value);
		if ($enable_start_wildcard !== TRUE)
		{
			$value = "^" . $value;
		}
		if ($enable_end_wildcard !== TRUE)
		{
			$value .= "$";
		}
		$regex = "/$value/$flags";
		$this->wheres[$field] = new MongoRegex($regex);
		return ($this);
	}
	public function get($collection = "")
	{			
		if (empty($collection))
		{
			show_error("In order to retrieve documents from MongoDB, a collection name must be passed", 500);
		}
		try{	
			$documents = $this->db->{$collection}
			->find($this->wheres, $this->selects)
			->limit((int) $this->limit)
			->skip((int) $this->offset)
			->sort($this->sorts);
			// Clear
			$this->_clear();
			$returns = array();
			while ($documents->hasNext())
			{
				if ($this->return_as == 'object')
				{
					$returns[] = (object) $documents->getNext();	
				}
				else
				{
					$returns[] = (array) $documents->getNext();
				}
			}
			if ($this->return_as == 'object')
			{
				return (object)$returns;
			}
			else
			{
				return $returns;
			}
		}
		catch (MongoCursorException $e)
		{
			if(isset($this->debug) == TRUE && $this->debug == TRUE)
			{
				show_error("MongoDB query failed: {$e->getMessage()}", 500);
			}
			else
			{
				show_error("MongoDB query failed.", 500);
			}
		}
	}
 
	public function get_where($collection = "", $where = array())
	{
		if (is_array($where) && count($where) > 0)
		{
			return $this->where($where)
			->get($collection);
		}
		else
		{
			show_error("Nothing passed to perform search or value is empty.", 500);
		}
	}
 
	public function count($collection = "") 
	{
		if (empty($collection))
		{
			show_error("In order to retreive a count of documents from MongoDB, a collection name must be passed", 500);
		}
		$count = $this->db->{$collection}->find($this->wheres)->limit((int) $this->limit)->skip((int) $this->offset)->count();
		$this->_clear();
		return ($count);
	}
 
	public function set($fields, $value = NULL)
	{
		$this->_u('$set');
		if (is_string($fields))
		{
			$this->updates['$set'][$fields] = $value;
		}
		elseif (is_array($fields))
		{
			foreach ($fields as $field => $value)
			{
			$this->updates['$set'][$field] = $value;
			}
		}
		return $this;
	}
 
	public function unset_field($fields)
	{
		$this->_u('$unset');
		if (is_string($fields))
		{
			$this->updates['$unset'][$fields] = 1;
		}
		elseif (is_array($fields))
		{
			foreach ($fields as $field)
			{
				$this->updates['$unset'][$field] = 1;
			}
		}
		return $this;
	}
	public function addtoset($field, $values)
	{
		$this->_u('$addToSet');
		if (is_string($values))
		{
			$this->updates['$addToSet'][$field] = $values;
		}
		elseif (is_array($values))
		{
			$this->updates['$addToSet'][$field] = array('$each' => $values);
		}
		return $this;
	}
 
	public function push($fields, $value = array())
	{
		$this->_u('$push');
		if (is_string($fields))
		{
			$this->updates['$push'][$fields] = $value;
		}
		elseif (is_array($fields))
		{
			foreach ($fields as $field => $value)
			{
				$this->updates['$push'][$field] = $value;
			}
		}
		return $this;
	}
 
	public function pop($field)
	{
		$this->_u('$pop');
		if (is_string($field))
		{
			$this->updates['$pop'][$field] = -1;
		}
		elseif (is_array($field))
		{
			foreach ($field as $pop_field)
			{
				$this->updates['$pop'][$pop_field] = -1;
			}
		}
		return $this;
	}
 
	public function pull($field = "", $value = array())
	{
		$this->_u('$pull');
		$this->updates['$pull'] = array($field => $value);
		return $this;
	}
 
	public function rename_field($old, $new)
	{
		$this->_u('$rename');
		$this->updates['$rename'] = array($old => $new);
		return $this;
	}
 
	public function inc($fields = array(), $value = 0)
	{
		$this->_u('$inc');
		if (is_string($fields))
		{
			$this->updates['$inc'][$fields] = $value;
		}
		elseif (is_array($fields))
		{
			foreach ($fields as $field => $value)
			{
				$this->updates['$inc'][$field] = $value;
			}
		}
		return $this;
	}
	public function mul($fields = array(), $value = 0)
	{
		$this->_u('$mul');
		if (is_string($fields))
		{
			$this->updates['$mul'][$fields] = $value;
		}
		elseif (is_array($fields))
		{
			foreach ($fields as $field => $value)
			{
				$this->updates['$mul'][$field] = $value;
			}
		}
		return $this;
	}
 
	public function max($fields = array(), $value = 0)
	{
		$this->_u('$max');
		if (is_string($fields))
		{
			$this->updates['$max'][$fields] = $value;
		}
		elseif (is_array($fields))
		{
			foreach ($fields as $field => $value)
			{
				$this->updates['$max'][$field] = $value;
			}
		}
		return $this;
	}
	public function min($fields = array(), $value = 0)
	{
		$this->_u('$min');
		if (is_string($fields))
		{
			$this->updates['$min'][$fields] = $value;
		}
		elseif (is_array($fields))
		{
			foreach ($fields as $field => $value)
			{
				$this->updates['$min'][$field] = $value;
			}
		}
		return $this;
	}
 
	public function distinct($collection = "", $field="")
	{
		if (empty($collection))
		{
			show_error("No Mongo collection selected for update", 500);
		}
 
		if (empty($field))
		{
			show_error("Need Collection field information for performing distinct query", 500);
		}
 
		try
		{
			$documents = $this->db->{$collection}->distinct($field, $this->wheres);
			$this->_clear();
			if ($this->return_as == 'object')
			{
				return (object)$documents;
			}
			else
			{
				return $documents;
			}
		}
		catch (MongoCursorException $e)
		{
			if(isset($this->debug) == TRUE && $this->debug == TRUE)
			{
				show_error("MongoDB Distinct Query Failed: {$e->getMessage()}", 500);
			}
			else
			{
				show_error("MongoDB failed", 500);
			}
		}
	}	
 
	public function update($collection = "", $options = array())
	{
		if (empty($collection))
		{
			show_error("No Mongo collection selected for update", 500);
		}
 
		try
		{
			$options = array_merge($options, array('w' => $this->write_concerns, 'j'=>$this->journal, 'multiple' => FALSE));
			$this->db->{$collection}->update($this->wheres, $this->updates, $options);
			$this->_clear();
			return (TRUE);
		}
		catch (MongoCursorException $e)
		{
			if(isset($this->debug) == TRUE && $this->debug == TRUE)
			{
				show_error("Update of data into MongoDB failed: {$e->getMessage()}", 500);
			}
			else
			{
				show_error("Update of data into MongoDB failed", 500);
			}
		}
	}
 
	public function update_all($collection = "", $data = array(), $options = array())
	{
		if (empty($collection))
		{
			show_error("No Mongo collection selected to update", 500);
		}
		if (is_array($data) && count($data) > 0)
		{
			$this->updates = array_merge($data, $this->updates);
		}
		if (count($this->updates) == 0)
		{
			show_error("Nothing to update in Mongo collection or update is not an array", 500);	
		}
		try
		{
			$options = array_merge($options, array('w' => $this->write_concerns, 'j'=>$this->journal, 'multiple' => TRUE));
			$this->db->{$collection}->update($this->wheres, $this->updates, $options);
			$this->_clear();
			return (TRUE);
		}
		catch (MongoCursorException $e)
		{
			if(isset($this->debug) == TRUE && $this->debug == TRUE)
			{
				show_error("Update of data into MongoDB failed: {$e->getMessage()}", 500);
			}
			else
			{
				show_error("Update of data into MongoDB failed", 500);
			}
		}
	}
 
	public function delete($collection = "")
	{
		if (empty($collection))
		{
			show_error("No Mongo collection selected to delete from", 500);
		}
		try
		{
			$this->db->{$collection}->remove($this->wheres, array('w' => $this->write_concerns, 'j'=>$this->journal, 'justOne' => TRUE));
			$this->_clear();
			return (TRUE);
		}
		catch (MongoCursorException $e)
		{
			if(isset($this->debug) == TRUE && $this->debug == TRUE)
			{
				show_error("Delete of data into MongoDB failed: {$e->getMessage()}", 500);
			}
			else
			{
				show_error("Delete of data into MongoDB failed", 500);
			}
 
		}
	}
 
	public function delete_all($collection = "")
	{
		if (empty($collection))
		{
			show_error("No Mongo collection selected to delete from", 500);
		}
		if (isset($this->wheres['_id']) and ! is_object($this->wheres['_id']))
		{
			$this->wheres['_id'] = new MongoId($this->wheres['_id']);
		}
		try
		{
			$this->db->{$collection}->remove($this->wheres, array('w' => $this->write_concerns, 'j'=>$this->journal, 'justOne' => FALSE));
			$this->_clear();
			return (TRUE);
		}
		catch (MongoCursorException $e)
		{
			if(isset($this->debug) == TRUE && $this->debug == TRUE)
			{
				show_error("Delete of data into MongoDB failed: {$e->getMessage()}", 500);
			}
			else
			{
				show_error("Delete of data into MongoDB failed", 500);
			}
		}
	}
 
	public function aggregate($collection, $operation)
	{
        if (empty($collection))
	 	{
	 		show_error("In order to retreive documents from MongoDB, a collection name must be passed", 500);
	 	}
 
 		if (empty($operation) && !is_array($operation))
	 	{
	 		show_error("Operation must be an array to perform aggregate.", 500);
	 	}
 
	 	try
	 	{
	 		$documents = $this->db->{$collection}->aggregate($operation);
	 		$this->_clear();
	 		if ($this->return_as == 'object')
			{
				return (object)$documents;
			}
			else
			{
				return $documents;
			}
	 	}
	 	catch (MongoResultException $e)
		{
			if(isset($this->debug) == TRUE && $this->debug == TRUE)
			{
				show_error("Aggregation operation failed: {$e->getMessage()}", 500);
			}
			else
			{
				show_error("Aggregation operation failed.", 500);
			}
		}
    }
 
	public function order_by($fields = array())
	{
		foreach ($fields as $col => $val)
		{
		if ($val == -1 || $val === FALSE || strtolower($val) == 'desc')
			{
				$this->sorts[$col] = -1;
			}
			else
			{
				$this->sorts[$col] = 1;
			}
		}
		return ($this);
	}
 
 
	public function date($stamp = FALSE)
	{
		if ( $stamp == FALSE )
		{
			return new MongoDate();
		}
		else
		{
			return new MongoDate($stamp);
		}
 
	}
 
	public function limit($x = 99999)
	{
		if ($x !== NULL && is_numeric($x) && $x >= 1)
		{
			$this->limit = (int) $x;
		}
		return ($this);
	}
 
 
	public function offset($x = 0)
	{
		if ($x !== NULL && is_numeric($x) && $x >= 1)
		{
			$this->offset = (int) $x;
		}
		return ($this);
	}
 
	public function add_index($collection = "", $keys = array(), $options = array())
	{
		if (empty($collection))
		{
			show_error("No Mongo collection specified to add index to", 500);
		}
 
		if (empty($keys) || ! is_array($keys))
		{
			show_error("Index could not be created to MongoDB Collection because no keys were specified", 500);
		}
 
		foreach ($keys as $col => $val)
		{
			if($val == -1 || $val === FALSE || strtolower($val) == 'desc')
			{
				$keys[$col] = -1;
			}
			else
			{
				$keys[$col] = 1;
			}
		}
		try{
			$this->db->{$collection}->createIndex($keys, $options);
			$this->_clear();
			return ($this);
		}
		catch (MongoCursorException $e)
		{
			if(isset($this->debug) == TRUE && $this->debug == TRUE)
			{
				show_error("Creating Index failed : {$e->getMessage()}", 500);
			}
			else
			{
				show_error("Creating Index failed.", 500);
			}
		}
	}
 
 
	public function remove_index($collection = "", $keys = array())
	{
		if (empty($collection))
		{
			show_error("No Mongo collection specified to remove index from", 500);
		}
 
		if (empty($keys) || ! is_array($keys))
		{
			show_error("Index could not be removed from MongoDB Collection because no keys were specified", 500);
		}
 
		try
		{	
			$this->db->{$collection}->deleteIndex($keys, $options);
			$this->_clear();
			return ($this);
		}
		catch (MongoCursorException $e)
		{
			if(isset($this->debug) == TRUE && $this->debug == TRUE)
			{
				show_error("Creating Index failed : {$e->getMessage()}", 500);
			}
			else
			{
				show_error("Creating Index failed.", 500);
			}
		}
	}
 
 
	public function list_indexes($collection = "")
	{
		if (empty($collection))
		{
			show_error("No Mongo collection specified to remove all indexes from", 500);
		}
		return ($this->db->{$collection}->getIndexInfo());
	}	
 
 
	public function switch_db($database = '')
	{
		if (empty($database))
		{
			show_error("To switch MongoDB databases, a new database name must be specified", 500);
		}
 
		$this->database = $database;
 
		try
		{
			$this->db = $this->connect->{$this->database};
			return (TRUE);
		}
		catch (Exception $e)
		{
			show_error("Unable to switch Mongo Databases: {$e->getMessage()}", 500);
		}
	}
 
	public function drop_db($database = '')
	{
		if (empty($database))
		{
			show_error('Failed to drop MongoDB database because name is empty', 500);
		}
 
		try
		{
			$this->connect->{$database}->drop();
			return (TRUE);
		}
		catch (Exception $e)
		{
			show_error("Unable to drop Mongo database `{$database}`: {$e->getMessage()}", 500);
		}
	}
 
 
	public function drop_collection($col = '')
	{
		if (empty($col))
		{
			show_error('Failed to drop MongoDB collection because collection name is empty', 500);
		}
 
		try
		{
			$this->db->{$col}->drop();
			return TRUE;
		}
		catch (Exception $e)
		{
			show_error("Unable to drop Mongo collection `{$col}`: {$e->getMessage()}", 500);
		}
	}
 
	private function _clear()
	{
		$this->selects	= array();
		$this->updates	= array();
		$this->wheres	= array();
		$this->limit	= 999999;
		$this->offset	= 0;
		$this->sorts	= array();
	}
 
	private function _w($param)
	{
		if ( ! isset($this->wheres[$param]))
		{
			$this->wheres[ $param ] = array();
		}
	}
 
	private function _u($method)
	{
		if ( ! isset($this->updates[$method]))
		{
			$this->updates[ $method ] = array();
		}
	}
}