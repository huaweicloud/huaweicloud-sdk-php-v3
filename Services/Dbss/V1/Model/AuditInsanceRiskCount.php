<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuditInsanceRiskCount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuditInsanceRiskCount';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  风险数量
    * dbId  数据库ID
    * dbIp  数据库IP
    * dbName  数据库名称
    * instanceId  实例ID
    * instanceName  实例名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'dbId' => 'string',
            'dbIp' => 'string',
            'dbName' => 'string',
            'instanceId' => 'string',
            'instanceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  风险数量
    * dbId  数据库ID
    * dbIp  数据库IP
    * dbName  数据库名称
    * instanceId  实例ID
    * instanceName  实例名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => 'int64',
        'dbId' => null,
        'dbIp' => null,
        'dbName' => null,
        'instanceId' => null,
        'instanceName' => null
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
    * count  风险数量
    * dbId  数据库ID
    * dbIp  数据库IP
    * dbName  数据库名称
    * instanceId  实例ID
    * instanceName  实例名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'dbId' => 'db_id',
            'dbIp' => 'db_ip',
            'dbName' => 'db_name',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  风险数量
    * dbId  数据库ID
    * dbIp  数据库IP
    * dbName  数据库名称
    * instanceId  实例ID
    * instanceName  实例名称
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'dbId' => 'setDbId',
            'dbIp' => 'setDbIp',
            'dbName' => 'setDbName',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  风险数量
    * dbId  数据库ID
    * dbIp  数据库IP
    * dbName  数据库名称
    * instanceId  实例ID
    * instanceName  实例名称
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'dbId' => 'getDbId',
            'dbIp' => 'getDbIp',
            'dbName' => 'getDbName',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['dbId'] = isset($data['dbId']) ? $data['dbId'] : null;
        $this->container['dbIp'] = isset($data['dbIp']) ? $data['dbIp'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
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
    * Gets count
    *  风险数量
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 风险数量
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets dbId
    *  数据库ID
    *
    * @return string|null
    */
    public function getDbId()
    {
        return $this->container['dbId'];
    }

    /**
    * Sets dbId
    *
    * @param string|null $dbId 数据库ID
    *
    * @return $this
    */
    public function setDbId($dbId)
    {
        $this->container['dbId'] = $dbId;
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
    * Gets instanceId
    *  实例ID
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名称
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
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

