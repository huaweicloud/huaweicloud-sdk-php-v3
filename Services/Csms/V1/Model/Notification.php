<?php

namespace HuaweiCloud\SDK\Csms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Notification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Notification';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetType  事件通知的对象类型。
    * targetId  事件通知的对象ID。
    * targetName  事件通知的对象名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetType' => 'string',
            'targetId' => 'string',
            'targetName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetType  事件通知的对象类型。
    * targetId  事件通知的对象ID。
    * targetName  事件通知的对象名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetType' => null,
        'targetId' => null,
        'targetName' => null
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
    * targetType  事件通知的对象类型。
    * targetId  事件通知的对象ID。
    * targetName  事件通知的对象名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetType' => 'target_type',
            'targetId' => 'target_id',
            'targetName' => 'target_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetType  事件通知的对象类型。
    * targetId  事件通知的对象ID。
    * targetName  事件通知的对象名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'targetType' => 'setTargetType',
            'targetId' => 'setTargetId',
            'targetName' => 'setTargetName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetType  事件通知的对象类型。
    * targetId  事件通知的对象ID。
    * targetName  事件通知的对象名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'targetType' => 'getTargetType',
            'targetId' => 'getTargetId',
            'targetName' => 'getTargetName'
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
        $this->container['targetType'] = isset($data['targetType']) ? $data['targetType'] : null;
        $this->container['targetId'] = isset($data['targetId']) ? $data['targetId'] : null;
        $this->container['targetName'] = isset($data['targetName']) ? $data['targetName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['targetType'] === null) {
            $invalidProperties[] = "'targetType' can't be null";
        }
            if (!preg_match("/^SMN$/", $this->container['targetType'])) {
                $invalidProperties[] = "invalid value for 'targetType', must be conform to the pattern /^SMN$/.";
            }
        if ($this->container['targetId'] === null) {
            $invalidProperties[] = "'targetId' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9\\-._:]{1,256}$/", $this->container['targetId'])) {
                $invalidProperties[] = "invalid value for 'targetId', must be conform to the pattern /^[a-zA-Z0-9\\-._:]{1,256}$/.";
            }
        if ($this->container['targetName'] === null) {
            $invalidProperties[] = "'targetName' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9_-]{1,64}$/", $this->container['targetName'])) {
                $invalidProperties[] = "invalid value for 'targetName', must be conform to the pattern /^[a-zA-Z0-9_-]{1,64}$/.";
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
    * Gets targetType
    *  事件通知的对象类型。
    *
    * @return string
    */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
    * Sets targetType
    *
    * @param string $targetType 事件通知的对象类型。
    *
    * @return $this
    */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;
        return $this;
    }

    /**
    * Gets targetId
    *  事件通知的对象ID。
    *
    * @return string
    */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
    * Sets targetId
    *
    * @param string $targetId 事件通知的对象ID。
    *
    * @return $this
    */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;
        return $this;
    }

    /**
    * Gets targetName
    *  事件通知的对象名称。
    *
    * @return string
    */
    public function getTargetName()
    {
        return $this->container['targetName'];
    }

    /**
    * Sets targetName
    *
    * @param string $targetName 事件通知的对象名称。
    *
    * @return $this
    */
    public function setTargetName($targetName)
    {
        $this->container['targetName'] = $targetName;
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

