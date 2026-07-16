<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RebuildRepositoryNavigationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RebuildRepositoryNavigationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * result  **参数解释：** 结果标识。 **约束限制：** 不涉及。
    * message  **参数解释：** 结果消息。 **约束限制：** 不涉及。
    * duration  **参数解释：** 触发任务耗时（毫秒）。 **约束限制：** 不涉及。
    * size  **参数解释：** 当前代码导航索引大小（字节）。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'result' => 'string',
            'message' => 'string',
            'duration' => 'string',
            'size' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * result  **参数解释：** 结果标识。 **约束限制：** 不涉及。
    * message  **参数解释：** 结果消息。 **约束限制：** 不涉及。
    * duration  **参数解释：** 触发任务耗时（毫秒）。 **约束限制：** 不涉及。
    * size  **参数解释：** 当前代码导航索引大小（字节）。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'result' => null,
        'message' => null,
        'duration' => null,
        'size' => 'int64'
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
    * result  **参数解释：** 结果标识。 **约束限制：** 不涉及。
    * message  **参数解释：** 结果消息。 **约束限制：** 不涉及。
    * duration  **参数解释：** 触发任务耗时（毫秒）。 **约束限制：** 不涉及。
    * size  **参数解释：** 当前代码导航索引大小（字节）。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'result' => 'result',
            'message' => 'message',
            'duration' => 'duration',
            'size' => 'size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * result  **参数解释：** 结果标识。 **约束限制：** 不涉及。
    * message  **参数解释：** 结果消息。 **约束限制：** 不涉及。
    * duration  **参数解释：** 触发任务耗时（毫秒）。 **约束限制：** 不涉及。
    * size  **参数解释：** 当前代码导航索引大小（字节）。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'result' => 'setResult',
            'message' => 'setMessage',
            'duration' => 'setDuration',
            'size' => 'setSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * result  **参数解释：** 结果标识。 **约束限制：** 不涉及。
    * message  **参数解释：** 结果消息。 **约束限制：** 不涉及。
    * duration  **参数解释：** 触发任务耗时（毫秒）。 **约束限制：** 不涉及。
    * size  **参数解释：** 当前代码导航索引大小（字节）。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'result' => 'getResult',
            'message' => 'getMessage',
            'duration' => 'getDuration',
            'size' => 'getSize'
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
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
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
    * Gets result
    *  **参数解释：** 结果标识。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result **参数解释：** 结果标识。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets message
    *  **参数解释：** 结果消息。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message **参数解释：** 结果消息。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets duration
    *  **参数解释：** 触发任务耗时（毫秒）。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param string|null $duration **参数解释：** 触发任务耗时（毫秒）。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets size
    *  **参数解释：** 当前代码导航索引大小（字节）。 **约束限制：** 不涉及。
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
    * @param int|null $size **参数解释：** 当前代码导航索引大小（字节）。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
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

