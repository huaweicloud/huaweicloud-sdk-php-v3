<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowColumnInfoReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowColumnInfoReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * refresh  是否重新从node获取列信息
    * objectIds  列所属的对象信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'refresh' => 'bool',
            'objectIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * refresh  是否重新从node获取列信息
    * objectIds  列所属的对象信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'refresh' => null,
        'objectIds' => null
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
    * refresh  是否重新从node获取列信息
    * objectIds  列所属的对象信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'refresh' => 'refresh',
            'objectIds' => 'object_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * refresh  是否重新从node获取列信息
    * objectIds  列所属的对象信息
    *
    * @var string[]
    */
    protected static $setters = [
            'refresh' => 'setRefresh',
            'objectIds' => 'setObjectIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * refresh  是否重新从node获取列信息
    * objectIds  列所属的对象信息
    *
    * @var string[]
    */
    protected static $getters = [
            'refresh' => 'getRefresh',
            'objectIds' => 'getObjectIds'
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
        $this->container['refresh'] = isset($data['refresh']) ? $data['refresh'] : null;
        $this->container['objectIds'] = isset($data['objectIds']) ? $data['objectIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['refresh'] === null) {
            $invalidProperties[] = "'refresh' can't be null";
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
    * Gets refresh
    *  是否重新从node获取列信息
    *
    * @return bool
    */
    public function getRefresh()
    {
        return $this->container['refresh'];
    }

    /**
    * Sets refresh
    *
    * @param bool $refresh 是否重新从node获取列信息
    *
    * @return $this
    */
    public function setRefresh($refresh)
    {
        $this->container['refresh'] = $refresh;
        return $this;
    }

    /**
    * Gets objectIds
    *  列所属的对象信息
    *
    * @return string[]|null
    */
    public function getObjectIds()
    {
        return $this->container['objectIds'];
    }

    /**
    * Sets objectIds
    *
    * @param string[]|null $objectIds 列所属的对象信息
    *
    * @return $this
    */
    public function setObjectIds($objectIds)
    {
        $this->container['objectIds'] = $objectIds;
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

