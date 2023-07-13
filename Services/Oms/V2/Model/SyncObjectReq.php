<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SyncObjectReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SyncObjectReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * objectKeys  待同步对象的列表,其中待同步对象最大数量为10,列表中object_key为URL编码处理后的结果
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'objectKeys' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * objectKeys  待同步对象的列表,其中待同步对象最大数量为10,列表中object_key为URL编码处理后的结果
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'objectKeys' => null
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
    * objectKeys  待同步对象的列表,其中待同步对象最大数量为10,列表中object_key为URL编码处理后的结果
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'objectKeys' => 'object_keys'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * objectKeys  待同步对象的列表,其中待同步对象最大数量为10,列表中object_key为URL编码处理后的结果
    *
    * @var string[]
    */
    protected static $setters = [
            'objectKeys' => 'setObjectKeys'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * objectKeys  待同步对象的列表,其中待同步对象最大数量为10,列表中object_key为URL编码处理后的结果
    *
    * @var string[]
    */
    protected static $getters = [
            'objectKeys' => 'getObjectKeys'
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
        $this->container['objectKeys'] = isset($data['objectKeys']) ? $data['objectKeys'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['objectKeys'] === null) {
            $invalidProperties[] = "'objectKeys' can't be null";
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
    * Gets objectKeys
    *  待同步对象的列表,其中待同步对象最大数量为10,列表中object_key为URL编码处理后的结果
    *
    * @return string[]
    */
    public function getObjectKeys()
    {
        return $this->container['objectKeys'];
    }

    /**
    * Sets objectKeys
    *
    * @param string[] $objectKeys 待同步对象的列表,其中待同步对象最大数量为10,列表中object_key为URL编码处理后的结果
    *
    * @return $this
    */
    public function setObjectKeys($objectKeys)
    {
        $this->container['objectKeys'] = $objectKeys;
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

