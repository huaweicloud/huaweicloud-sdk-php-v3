<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BigkeysBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BigkeysBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  key名称
    * type  key类型
    * shard  大key所在的分片，仅在实例类型为集群时支持,格式为ip:port
    * db  大key所在的db
    * size  key的value大小。
    * unit  key大小的单位。type为string时，单位是：byte；type为list/set/zset/hash时，单位是：count
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'shard' => 'string',
            'db' => 'int',
            'size' => 'int',
            'unit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  key名称
    * type  key类型
    * shard  大key所在的分片，仅在实例类型为集群时支持,格式为ip:port
    * db  大key所在的db
    * size  key的value大小。
    * unit  key大小的单位。type为string时，单位是：byte；type为list/set/zset/hash时，单位是：count
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'shard' => null,
        'db' => 'int32',
        'size' => null,
        'unit' => null
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
    * name  key名称
    * type  key类型
    * shard  大key所在的分片，仅在实例类型为集群时支持,格式为ip:port
    * db  大key所在的db
    * size  key的value大小。
    * unit  key大小的单位。type为string时，单位是：byte；type为list/set/zset/hash时，单位是：count
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'shard' => 'shard',
            'db' => 'db',
            'size' => 'size',
            'unit' => 'unit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  key名称
    * type  key类型
    * shard  大key所在的分片，仅在实例类型为集群时支持,格式为ip:port
    * db  大key所在的db
    * size  key的value大小。
    * unit  key大小的单位。type为string时，单位是：byte；type为list/set/zset/hash时，单位是：count
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'shard' => 'setShard',
            'db' => 'setDb',
            'size' => 'setSize',
            'unit' => 'setUnit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  key名称
    * type  key类型
    * shard  大key所在的分片，仅在实例类型为集群时支持,格式为ip:port
    * db  大key所在的db
    * size  key的value大小。
    * unit  key大小的单位。type为string时，单位是：byte；type为list/set/zset/hash时，单位是：count
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'shard' => 'getShard',
            'db' => 'getDb',
            'size' => 'getSize',
            'unit' => 'getUnit'
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
    const TYPE_STRING = 'string';
    const TYPE__LIST = 'list';
    const TYPE_SET = 'set';
    const TYPE_ZSET = 'zset';
    const TYPE_HASH = 'hash';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_STRING,
            self::TYPE__LIST,
            self::TYPE_SET,
            self::TYPE_ZSET,
            self::TYPE_HASH,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['shard'] = isset($data['shard']) ? $data['shard'] : null;
        $this->container['db'] = isset($data['db']) ? $data['db'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets name
    *  key名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name key名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  key类型
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
    * @param string|null $type key类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets shard
    *  大key所在的分片，仅在实例类型为集群时支持,格式为ip:port
    *
    * @return string|null
    */
    public function getShard()
    {
        return $this->container['shard'];
    }

    /**
    * Sets shard
    *
    * @param string|null $shard 大key所在的分片，仅在实例类型为集群时支持,格式为ip:port
    *
    * @return $this
    */
    public function setShard($shard)
    {
        $this->container['shard'] = $shard;
        return $this;
    }

    /**
    * Gets db
    *  大key所在的db
    *
    * @return int|null
    */
    public function getDb()
    {
        return $this->container['db'];
    }

    /**
    * Sets db
    *
    * @param int|null $db 大key所在的db
    *
    * @return $this
    */
    public function setDb($db)
    {
        $this->container['db'] = $db;
        return $this;
    }

    /**
    * Gets size
    *  key的value大小。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size key的value大小。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets unit
    *  key大小的单位。type为string时，单位是：byte；type为list/set/zset/hash时，单位是：count
    *
    * @return string|null
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string|null $unit key大小的单位。type为string时，单位是：byte；type为list/set/zset/hash时，单位是：count
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
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

