<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSchemasResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSchemasResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalCount  当前数据连接schema记录数
    * dwId  数据连接id
    * database  数据库名称
    * schemas  schema列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalCount' => 'int',
            'dwId' => 'string',
            'database' => 'string',
            'schemas' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SchemasList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalCount  当前数据连接schema记录数
    * dwId  数据连接id
    * database  数据库名称
    * schemas  schema列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalCount' => null,
        'dwId' => null,
        'database' => null,
        'schemas' => null
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
    * totalCount  当前数据连接schema记录数
    * dwId  数据连接id
    * database  数据库名称
    * schemas  schema列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalCount' => 'total_count',
            'dwId' => 'dw_id',
            'database' => 'database',
            'schemas' => 'schemas'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalCount  当前数据连接schema记录数
    * dwId  数据连接id
    * database  数据库名称
    * schemas  schema列表
    *
    * @var string[]
    */
    protected static $setters = [
            'totalCount' => 'setTotalCount',
            'dwId' => 'setDwId',
            'database' => 'setDatabase',
            'schemas' => 'setSchemas'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalCount  当前数据连接schema记录数
    * dwId  数据连接id
    * database  数据库名称
    * schemas  schema列表
    *
    * @var string[]
    */
    protected static $getters = [
            'totalCount' => 'getTotalCount',
            'dwId' => 'getDwId',
            'database' => 'getDatabase',
            'schemas' => 'getSchemas'
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
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['dwId'] = isset($data['dwId']) ? $data['dwId'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['schemas'] = isset($data['schemas']) ? $data['schemas'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalCount']) && ($this->container['totalCount'] > 100)) {
                $invalidProperties[] = "invalid value for 'totalCount', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['totalCount']) && ($this->container['totalCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dwId']) && (mb_strlen($this->container['dwId']) > 128)) {
                $invalidProperties[] = "invalid value for 'dwId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['dwId']) && (mb_strlen($this->container['dwId']) < 1)) {
                $invalidProperties[] = "invalid value for 'dwId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['database']) && (mb_strlen($this->container['database']) > 128)) {
                $invalidProperties[] = "invalid value for 'database', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['database']) && (mb_strlen($this->container['database']) < 1)) {
                $invalidProperties[] = "invalid value for 'database', the character length must be bigger than or equal to 1.";
            }
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
    * Gets totalCount
    *  当前数据连接schema记录数
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 当前数据连接schema记录数
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets dwId
    *  数据连接id
    *
    * @return string|null
    */
    public function getDwId()
    {
        return $this->container['dwId'];
    }

    /**
    * Sets dwId
    *
    * @param string|null $dwId 数据连接id
    *
    * @return $this
    */
    public function setDwId($dwId)
    {
        $this->container['dwId'] = $dwId;
        return $this;
    }

    /**
    * Gets database
    *  数据库名称
    *
    * @return string|null
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string|null $database 数据库名称
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets schemas
    *  schema列表
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SchemasList[]|null
    */
    public function getSchemas()
    {
        return $this->container['schemas'];
    }

    /**
    * Sets schemas
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SchemasList[]|null $schemas schema列表
    *
    * @return $this
    */
    public function setSchemas($schemas)
    {
        $this->container['schemas'] = $schemas;
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

