<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteSshKeyRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteSshKeyRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyId  **参数解释：** 资源Id，通过获取代码组权限资源点列表获取的数据中的Id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyId  **参数解释：** 资源Id，通过获取代码组权限资源点列表获取的数据中的Id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyId' => 'int32'
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
    * keyId  **参数解释：** 资源Id，通过获取代码组权限资源点列表获取的数据中的Id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyId' => 'key_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyId  **参数解释：** 资源Id，通过获取代码组权限资源点列表获取的数据中的Id
    *
    * @var string[]
    */
    protected static $setters = [
            'keyId' => 'setKeyId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyId  **参数解释：** 资源Id，通过获取代码组权限资源点列表获取的数据中的Id
    *
    * @var string[]
    */
    protected static $getters = [
            'keyId' => 'getKeyId'
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
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['keyId'] === null) {
            $invalidProperties[] = "'keyId' can't be null";
        }
            if (($this->container['keyId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'keyId', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['keyId'] < 1)) {
                $invalidProperties[] = "invalid value for 'keyId', must be bigger than or equal to 1.";
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
    * Gets keyId
    *  **参数解释：** 资源Id，通过获取代码组权限资源点列表获取的数据中的Id
    *
    * @return int
    */
    public function getKeyId()
    {
        return $this->container['keyId'];
    }

    /**
    * Sets keyId
    *
    * @param int $keyId **参数解释：** 资源Id，通过获取代码组权限资源点列表获取的数据中的Id
    *
    * @return $this
    */
    public function setKeyId($keyId)
    {
        $this->container['keyId'] = $keyId;
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

