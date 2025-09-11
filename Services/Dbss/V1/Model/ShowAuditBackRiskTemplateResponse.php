<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAuditBackRiskTemplateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAuditBackRiskTemplateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbId  数据库ID
    * dbIp  数据库IP
    * dbName  数据库名称
    * dbPort  数据库端口
    * id  配置ID
    * status  状态 - 0: 关闭 - 1：开启
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbId' => 'string',
            'dbIp' => 'string',
            'dbName' => 'string',
            'dbPort' => 'int',
            'id' => 'string',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbId  数据库ID
    * dbIp  数据库IP
    * dbName  数据库名称
    * dbPort  数据库端口
    * id  配置ID
    * status  状态 - 0: 关闭 - 1：开启
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbId' => null,
        'dbIp' => null,
        'dbName' => null,
        'dbPort' => 'int32',
        'id' => null,
        'status' => 'int32'
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
    * dbId  数据库ID
    * dbIp  数据库IP
    * dbName  数据库名称
    * dbPort  数据库端口
    * id  配置ID
    * status  状态 - 0: 关闭 - 1：开启
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbId' => 'db_id',
            'dbIp' => 'db_ip',
            'dbName' => 'db_name',
            'dbPort' => 'db_port',
            'id' => 'id',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbId  数据库ID
    * dbIp  数据库IP
    * dbName  数据库名称
    * dbPort  数据库端口
    * id  配置ID
    * status  状态 - 0: 关闭 - 1：开启
    *
    * @var string[]
    */
    protected static $setters = [
            'dbId' => 'setDbId',
            'dbIp' => 'setDbIp',
            'dbName' => 'setDbName',
            'dbPort' => 'setDbPort',
            'id' => 'setId',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbId  数据库ID
    * dbIp  数据库IP
    * dbName  数据库名称
    * dbPort  数据库端口
    * id  配置ID
    * status  状态 - 0: 关闭 - 1：开启
    *
    * @var string[]
    */
    protected static $getters = [
            'dbId' => 'getDbId',
            'dbIp' => 'getDbIp',
            'dbName' => 'getDbName',
            'dbPort' => 'getDbPort',
            'id' => 'getId',
            'status' => 'getStatus'
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
        $this->container['dbId'] = isset($data['dbId']) ? $data['dbId'] : null;
        $this->container['dbIp'] = isset($data['dbIp']) ? $data['dbIp'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['dbPort'] = isset($data['dbPort']) ? $data['dbPort'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    * Gets dbPort
    *  数据库端口
    *
    * @return int|null
    */
    public function getDbPort()
    {
        return $this->container['dbPort'];
    }

    /**
    * Sets dbPort
    *
    * @param int|null $dbPort 数据库端口
    *
    * @return $this
    */
    public function setDbPort($dbPort)
    {
        $this->container['dbPort'] = $dbPort;
        return $this;
    }

    /**
    * Gets id
    *  配置ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 配置ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  状态 - 0: 关闭 - 1：开启
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 状态 - 0: 关闭 - 1：开启
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

