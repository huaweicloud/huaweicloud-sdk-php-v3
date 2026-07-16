<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataResourceHead implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataResourceHead';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alias  数据库实例别名
    * datastore  datastore
    * dbIp  数据库IP
    * dbName  数据库名称
    * dbPort  数据库端口
    * dbUserList  数据库用户列表
    * provider  云服务名称，云上数据库服务，如：rds
    * rdsId  rds数据库ID
    * status  数据库状态
    * type  数据库类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alias' => 'string',
            'datastore' => '\HuaweiCloud\SDK\Dbss\V1\Model\DbDataStore',
            'dbIp' => 'string',
            'dbName' => 'string',
            'dbPort' => 'string',
            'dbUserList' => '\HuaweiCloud\SDK\Dbss\V1\Model\DbUser[]',
            'provider' => 'string',
            'rdsId' => 'string',
            'status' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alias  数据库实例别名
    * datastore  datastore
    * dbIp  数据库IP
    * dbName  数据库名称
    * dbPort  数据库端口
    * dbUserList  数据库用户列表
    * provider  云服务名称，云上数据库服务，如：rds
    * rdsId  rds数据库ID
    * status  数据库状态
    * type  数据库类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alias' => null,
        'datastore' => null,
        'dbIp' => null,
        'dbName' => null,
        'dbPort' => null,
        'dbUserList' => null,
        'provider' => null,
        'rdsId' => null,
        'status' => null,
        'type' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * alias  数据库实例别名
    * datastore  datastore
    * dbIp  数据库IP
    * dbName  数据库名称
    * dbPort  数据库端口
    * dbUserList  数据库用户列表
    * provider  云服务名称，云上数据库服务，如：rds
    * rdsId  rds数据库ID
    * status  数据库状态
    * type  数据库类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alias' => 'alias',
            'datastore' => 'datastore',
            'dbIp' => 'db_ip',
            'dbName' => 'db_name',
            'dbPort' => 'db_port',
            'dbUserList' => 'db_user_list',
            'provider' => 'provider',
            'rdsId' => 'rds_id',
            'status' => 'status',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alias  数据库实例别名
    * datastore  datastore
    * dbIp  数据库IP
    * dbName  数据库名称
    * dbPort  数据库端口
    * dbUserList  数据库用户列表
    * provider  云服务名称，云上数据库服务，如：rds
    * rdsId  rds数据库ID
    * status  数据库状态
    * type  数据库类型
    *
    * @var string[]
    */
    protected static $setters = [
            'alias' => 'setAlias',
            'datastore' => 'setDatastore',
            'dbIp' => 'setDbIp',
            'dbName' => 'setDbName',
            'dbPort' => 'setDbPort',
            'dbUserList' => 'setDbUserList',
            'provider' => 'setProvider',
            'rdsId' => 'setRdsId',
            'status' => 'setStatus',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alias  数据库实例别名
    * datastore  datastore
    * dbIp  数据库IP
    * dbName  数据库名称
    * dbPort  数据库端口
    * dbUserList  数据库用户列表
    * provider  云服务名称，云上数据库服务，如：rds
    * rdsId  rds数据库ID
    * status  数据库状态
    * type  数据库类型
    *
    * @var string[]
    */
    protected static $getters = [
            'alias' => 'getAlias',
            'datastore' => 'getDatastore',
            'dbIp' => 'getDbIp',
            'dbName' => 'getDbName',
            'dbPort' => 'getDbPort',
            'dbUserList' => 'getDbUserList',
            'provider' => 'getProvider',
            'rdsId' => 'getRdsId',
            'status' => 'getStatus',
            'type' => 'getType'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['dbIp'] = isset($data['dbIp']) ? $data['dbIp'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['dbPort'] = isset($data['dbPort']) ? $data['dbPort'] : null;
        $this->container['dbUserList'] = isset($data['dbUserList']) ? $data['dbUserList'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['rdsId'] = isset($data['rdsId']) ? $data['rdsId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets alias
    *  数据库实例别名
    *
    * @return string|null
    */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
    * Sets alias
    *
    * @param string|null $alias 数据库实例别名
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\DbDataStore|null
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\DbDataStore|null $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets dbIp
    *  数据库IP
    *
    * @return string|null
    */
    public function getDbIp()
    {
        return $this->container['dbIp'];
    }

    /**
    * Sets dbIp
    *
    * @param string|null $dbIp 数据库IP
    *
    * @return $this
    */
    public function setDbIp($dbIp)
    {
        $this->container['dbIp'] = $dbIp;
        return $this;
    }

    /**
    * Gets dbName
    *  数据库名称
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName 数据库名称
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets dbPort
    *  数据库端口
    *
    * @return string|null
    */
    public function getDbPort()
    {
        return $this->container['dbPort'];
    }

    /**
    * Sets dbPort
    *
    * @param string|null $dbPort 数据库端口
    *
    * @return $this
    */
    public function setDbPort($dbPort)
    {
        $this->container['dbPort'] = $dbPort;
        return $this;
    }

    /**
    * Gets dbUserList
    *  数据库用户列表
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\DbUser[]|null
    */
    public function getDbUserList()
    {
        return $this->container['dbUserList'];
    }

    /**
    * Sets dbUserList
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\DbUser[]|null $dbUserList 数据库用户列表
    *
    * @return $this
    */
    public function setDbUserList($dbUserList)
    {
        $this->container['dbUserList'] = $dbUserList;
        return $this;
    }

    /**
    * Gets provider
    *  云服务名称，云上数据库服务，如：rds
    *
    * @return string|null
    */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
    * Sets provider
    *
    * @param string|null $provider 云服务名称，云上数据库服务，如：rds
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
        return $this;
    }

    /**
    * Gets rdsId
    *  rds数据库ID
    *
    * @return string|null
    */
    public function getRdsId()
    {
        return $this->container['rdsId'];
    }

    /**
    * Sets rdsId
    *
    * @param string|null $rdsId rds数据库ID
    *
    * @return $this
    */
    public function setRdsId($rdsId)
    {
        $this->container['rdsId'] = $rdsId;
        return $this;
    }

    /**
    * Gets status
    *  数据库状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 数据库状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  数据库类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 数据库类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

