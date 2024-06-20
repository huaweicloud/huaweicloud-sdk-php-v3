<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListClustersDetailsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListClustersDetailsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * start  指定查询起始值，默认值为1，即从第1个集群开始查询。
    * limit  指定查询个数，默认值为10，即一次查询10个集群信息。
    * datastoreType  指定查询的集群引擎类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'start' => 'int',
            'limit' => 'int',
            'datastoreType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * start  指定查询起始值，默认值为1，即从第1个集群开始查询。
    * limit  指定查询个数，默认值为10，即一次查询10个集群信息。
    * datastoreType  指定查询的集群引擎类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'start' => null,
        'limit' => null,
        'datastoreType' => null
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
    * start  指定查询起始值，默认值为1，即从第1个集群开始查询。
    * limit  指定查询个数，默认值为10，即一次查询10个集群信息。
    * datastoreType  指定查询的集群引擎类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'start' => 'start',
            'limit' => 'limit',
            'datastoreType' => 'datastoreType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * start  指定查询起始值，默认值为1，即从第1个集群开始查询。
    * limit  指定查询个数，默认值为10，即一次查询10个集群信息。
    * datastoreType  指定查询的集群引擎类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'start' => 'setStart',
            'limit' => 'setLimit',
            'datastoreType' => 'setDatastoreType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * start  指定查询起始值，默认值为1，即从第1个集群开始查询。
    * limit  指定查询个数，默认值为10，即一次查询10个集群信息。
    * datastoreType  指定查询的集群引擎类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'start' => 'getStart',
            'limit' => 'getLimit',
            'datastoreType' => 'getDatastoreType'
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
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
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
    * Gets start
    *  指定查询起始值，默认值为1，即从第1个集群开始查询。
    *
    * @return int|null
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param int|null $start 指定查询起始值，默认值为1，即从第1个集群开始查询。
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets limit
    *  指定查询个数，默认值为10，即一次查询10个集群信息。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 指定查询个数，默认值为10，即一次查询10个集群信息。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets datastoreType
    *  指定查询的集群引擎类型。
    *
    * @return string|null
    */
    public function getDatastoreType()
    {
        return $this->container['datastoreType'];
    }

    /**
    * Sets datastoreType
    *
    * @param string|null $datastoreType 指定查询的集群引擎类型。
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
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

