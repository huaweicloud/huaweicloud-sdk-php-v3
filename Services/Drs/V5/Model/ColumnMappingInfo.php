<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ColumnMappingInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ColumnMappingInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * objectId  对象id
    * columnInfoLists  列信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'objectId' => 'string',
            'columnInfoLists' => '\HuaweiCloud\SDK\Drs\V5\Model\ColumnInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * objectId  对象id
    * columnInfoLists  列信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'objectId' => null,
        'columnInfoLists' => null
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
    * objectId  对象id
    * columnInfoLists  列信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'objectId' => 'object_id',
            'columnInfoLists' => 'column_info_lists'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * objectId  对象id
    * columnInfoLists  列信息
    *
    * @var string[]
    */
    protected static $setters = [
            'objectId' => 'setObjectId',
            'columnInfoLists' => 'setColumnInfoLists'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * objectId  对象id
    * columnInfoLists  列信息
    *
    * @var string[]
    */
    protected static $getters = [
            'objectId' => 'getObjectId',
            'columnInfoLists' => 'getColumnInfoLists'
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
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['columnInfoLists'] = isset($data['columnInfoLists']) ? $data['columnInfoLists'] : null;
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
    * Gets objectId
    *  对象id
    *
    * @return string|null
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string|null $objectId 对象id
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets columnInfoLists
    *  列信息
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\ColumnInfo[]|null
    */
    public function getColumnInfoLists()
    {
        return $this->container['columnInfoLists'];
    }

    /**
    * Sets columnInfoLists
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\ColumnInfo[]|null $columnInfoLists 列信息
    *
    * @return $this
    */
    public function setColumnInfoLists($columnInfoLists)
    {
        $this->container['columnInfoLists'] = $columnInfoLists;
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

