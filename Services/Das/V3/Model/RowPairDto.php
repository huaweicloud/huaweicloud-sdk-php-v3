<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RowPairDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RowPairDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * beforeRow  变更前的行数据
    * afterRow  变更后的行数据
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'beforeRow' => 'object',
            'afterRow' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * beforeRow  变更前的行数据
    * afterRow  变更后的行数据
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'beforeRow' => null,
        'afterRow' => null
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
    * beforeRow  变更前的行数据
    * afterRow  变更后的行数据
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'beforeRow' => 'before_row',
            'afterRow' => 'after_row'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * beforeRow  变更前的行数据
    * afterRow  变更后的行数据
    *
    * @var string[]
    */
    protected static $setters = [
            'beforeRow' => 'setBeforeRow',
            'afterRow' => 'setAfterRow'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * beforeRow  变更前的行数据
    * afterRow  变更后的行数据
    *
    * @var string[]
    */
    protected static $getters = [
            'beforeRow' => 'getBeforeRow',
            'afterRow' => 'getAfterRow'
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
        $this->container['beforeRow'] = isset($data['beforeRow']) ? $data['beforeRow'] : null;
        $this->container['afterRow'] = isset($data['afterRow']) ? $data['afterRow'] : null;
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
    * Gets beforeRow
    *  变更前的行数据
    *
    * @return object|null
    */
    public function getBeforeRow()
    {
        return $this->container['beforeRow'];
    }

    /**
    * Sets beforeRow
    *
    * @param object|null $beforeRow 变更前的行数据
    *
    * @return $this
    */
    public function setBeforeRow($beforeRow)
    {
        $this->container['beforeRow'] = $beforeRow;
        return $this;
    }

    /**
    * Gets afterRow
    *  变更后的行数据
    *
    * @return object|null
    */
    public function getAfterRow()
    {
        return $this->container['afterRow'];
    }

    /**
    * Sets afterRow
    *
    * @param object|null $afterRow 变更后的行数据
    *
    * @return $this
    */
    public function setAfterRow($afterRow)
    {
        $this->container['afterRow'] = $afterRow;
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

