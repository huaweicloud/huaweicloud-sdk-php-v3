<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetAlarmTopicConfigInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetAlarmTopicConfigInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isUseTopic  主题使用状态  - true: 已被使用  - false: 未被使用
    * status  状态  - SUCCESS: 成功  - FAILED: 失败
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isUseTopic' => 'bool',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isUseTopic  主题使用状态  - true: 已被使用  - false: 未被使用
    * status  状态  - SUCCESS: 成功  - FAILED: 失败
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isUseTopic' => null,
        'status' => null
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
    * isUseTopic  主题使用状态  - true: 已被使用  - false: 未被使用
    * status  状态  - SUCCESS: 成功  - FAILED: 失败
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isUseTopic' => 'is_use_topic',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isUseTopic  主题使用状态  - true: 已被使用  - false: 未被使用
    * status  状态  - SUCCESS: 成功  - FAILED: 失败
    *
    * @var string[]
    */
    protected static $setters = [
            'isUseTopic' => 'setIsUseTopic',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isUseTopic  主题使用状态  - true: 已被使用  - false: 未被使用
    * status  状态  - SUCCESS: 成功  - FAILED: 失败
    *
    * @var string[]
    */
    protected static $getters = [
            'isUseTopic' => 'getIsUseTopic',
            'status' => 'getStatus'
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
        $this->container['isUseTopic'] = isset($data['isUseTopic']) ? $data['isUseTopic'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
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
    * Gets isUseTopic
    *  主题使用状态  - true: 已被使用  - false: 未被使用
    *
    * @return bool|null
    */
    public function getIsUseTopic()
    {
        return $this->container['isUseTopic'];
    }

    /**
    * Sets isUseTopic
    *
    * @param bool|null $isUseTopic 主题使用状态  - true: 已被使用  - false: 未被使用
    *
    * @return $this
    */
    public function setIsUseTopic($isUseTopic)
    {
        $this->container['isUseTopic'] = $isUseTopic;
        return $this;
    }

    /**
    * Gets status
    *  状态  - SUCCESS: 成功  - FAILED: 失败
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 状态  - SUCCESS: 成功  - FAILED: 失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

