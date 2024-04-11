<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReplayErrorSqlResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReplayErrorSqlResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * objectType  SQL类型
    * abnormalSql  SQL语句
    * abnormalInfo  异常原因描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'objectType' => 'string',
            'abnormalSql' => 'string',
            'abnormalInfo' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * objectType  SQL类型
    * abnormalSql  SQL语句
    * abnormalInfo  异常原因描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'objectType' => null,
        'abnormalSql' => null,
        'abnormalInfo' => null
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
    * objectType  SQL类型
    * abnormalSql  SQL语句
    * abnormalInfo  异常原因描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'objectType' => 'object_type',
            'abnormalSql' => 'abnormal_sql',
            'abnormalInfo' => 'abnormal_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * objectType  SQL类型
    * abnormalSql  SQL语句
    * abnormalInfo  异常原因描述
    *
    * @var string[]
    */
    protected static $setters = [
            'objectType' => 'setObjectType',
            'abnormalSql' => 'setAbnormalSql',
            'abnormalInfo' => 'setAbnormalInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * objectType  SQL类型
    * abnormalSql  SQL语句
    * abnormalInfo  异常原因描述
    *
    * @var string[]
    */
    protected static $getters = [
            'objectType' => 'getObjectType',
            'abnormalSql' => 'getAbnormalSql',
            'abnormalInfo' => 'getAbnormalInfo'
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
        $this->container['objectType'] = isset($data['objectType']) ? $data['objectType'] : null;
        $this->container['abnormalSql'] = isset($data['abnormalSql']) ? $data['abnormalSql'] : null;
        $this->container['abnormalInfo'] = isset($data['abnormalInfo']) ? $data['abnormalInfo'] : null;
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
    * Gets objectType
    *  SQL类型
    *
    * @return string|null
    */
    public function getObjectType()
    {
        return $this->container['objectType'];
    }

    /**
    * Sets objectType
    *
    * @param string|null $objectType SQL类型
    *
    * @return $this
    */
    public function setObjectType($objectType)
    {
        $this->container['objectType'] = $objectType;
        return $this;
    }

    /**
    * Gets abnormalSql
    *  SQL语句
    *
    * @return string|null
    */
    public function getAbnormalSql()
    {
        return $this->container['abnormalSql'];
    }

    /**
    * Sets abnormalSql
    *
    * @param string|null $abnormalSql SQL语句
    *
    * @return $this
    */
    public function setAbnormalSql($abnormalSql)
    {
        $this->container['abnormalSql'] = $abnormalSql;
        return $this;
    }

    /**
    * Gets abnormalInfo
    *  异常原因描述
    *
    * @return string|null
    */
    public function getAbnormalInfo()
    {
        return $this->container['abnormalInfo'];
    }

    /**
    * Sets abnormalInfo
    *
    * @param string|null $abnormalInfo 异常原因描述
    *
    * @return $this
    */
    public function setAbnormalInfo($abnormalInfo)
    {
        $this->container['abnormalInfo'] = $abnormalInfo;
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

