<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradeInstanceReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpgradeInstanceReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isSchedule  是否作为定时任务执行。若非定时执行，is_schedule和execute_at字段可为空。若为定时执行，is_schedule为true，execute_at字段非空。
    * executeAt  定时时间，格式为Unix时间戳，单位为毫秒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isSchedule' => 'bool',
            'executeAt' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isSchedule  是否作为定时任务执行。若非定时执行，is_schedule和execute_at字段可为空。若为定时执行，is_schedule为true，execute_at字段非空。
    * executeAt  定时时间，格式为Unix时间戳，单位为毫秒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isSchedule' => null,
        'executeAt' => 'int64'
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
    * isSchedule  是否作为定时任务执行。若非定时执行，is_schedule和execute_at字段可为空。若为定时执行，is_schedule为true，execute_at字段非空。
    * executeAt  定时时间，格式为Unix时间戳，单位为毫秒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isSchedule' => 'is_schedule',
            'executeAt' => 'execute_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isSchedule  是否作为定时任务执行。若非定时执行，is_schedule和execute_at字段可为空。若为定时执行，is_schedule为true，execute_at字段非空。
    * executeAt  定时时间，格式为Unix时间戳，单位为毫秒
    *
    * @var string[]
    */
    protected static $setters = [
            'isSchedule' => 'setIsSchedule',
            'executeAt' => 'setExecuteAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isSchedule  是否作为定时任务执行。若非定时执行，is_schedule和execute_at字段可为空。若为定时执行，is_schedule为true，execute_at字段非空。
    * executeAt  定时时间，格式为Unix时间戳，单位为毫秒
    *
    * @var string[]
    */
    protected static $getters = [
            'isSchedule' => 'getIsSchedule',
            'executeAt' => 'getExecuteAt'
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
        $this->container['isSchedule'] = isset($data['isSchedule']) ? $data['isSchedule'] : null;
        $this->container['executeAt'] = isset($data['executeAt']) ? $data['executeAt'] : null;
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
    * Gets isSchedule
    *  是否作为定时任务执行。若非定时执行，is_schedule和execute_at字段可为空。若为定时执行，is_schedule为true，execute_at字段非空。
    *
    * @return bool|null
    */
    public function getIsSchedule()
    {
        return $this->container['isSchedule'];
    }

    /**
    * Sets isSchedule
    *
    * @param bool|null $isSchedule 是否作为定时任务执行。若非定时执行，is_schedule和execute_at字段可为空。若为定时执行，is_schedule为true，execute_at字段非空。
    *
    * @return $this
    */
    public function setIsSchedule($isSchedule)
    {
        $this->container['isSchedule'] = $isSchedule;
        return $this;
    }

    /**
    * Gets executeAt
    *  定时时间，格式为Unix时间戳，单位为毫秒
    *
    * @return int|null
    */
    public function getExecuteAt()
    {
        return $this->container['executeAt'];
    }

    /**
    * Sets executeAt
    *
    * @param int|null $executeAt 定时时间，格式为Unix时间戳，单位为毫秒
    *
    * @return $this
    */
    public function setExecuteAt($executeAt)
    {
        $this->container['executeAt'] = $executeAt;
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

