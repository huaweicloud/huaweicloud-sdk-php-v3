<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmnInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmnInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * notifyResult  记录迁移任务执行完毕后SMN消息是否发送成功。
    * notifyErrorMessage  记录SMN消息发送失败原因的错误码（迁移任务成功时为空）。
    * topicName  SMN Topic的名称（SMN消息发送成功时为空）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'notifyResult' => 'bool',
            'notifyErrorMessage' => 'string',
            'topicName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * notifyResult  记录迁移任务执行完毕后SMN消息是否发送成功。
    * notifyErrorMessage  记录SMN消息发送失败原因的错误码（迁移任务成功时为空）。
    * topicName  SMN Topic的名称（SMN消息发送成功时为空）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'notifyResult' => null,
        'notifyErrorMessage' => null,
        'topicName' => null
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
    * notifyResult  记录迁移任务执行完毕后SMN消息是否发送成功。
    * notifyErrorMessage  记录SMN消息发送失败原因的错误码（迁移任务成功时为空）。
    * topicName  SMN Topic的名称（SMN消息发送成功时为空）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'notifyResult' => 'notify_result',
            'notifyErrorMessage' => 'notify_error_message',
            'topicName' => 'topic_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * notifyResult  记录迁移任务执行完毕后SMN消息是否发送成功。
    * notifyErrorMessage  记录SMN消息发送失败原因的错误码（迁移任务成功时为空）。
    * topicName  SMN Topic的名称（SMN消息发送成功时为空）。
    *
    * @var string[]
    */
    protected static $setters = [
            'notifyResult' => 'setNotifyResult',
            'notifyErrorMessage' => 'setNotifyErrorMessage',
            'topicName' => 'setTopicName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * notifyResult  记录迁移任务执行完毕后SMN消息是否发送成功。
    * notifyErrorMessage  记录SMN消息发送失败原因的错误码（迁移任务成功时为空）。
    * topicName  SMN Topic的名称（SMN消息发送成功时为空）。
    *
    * @var string[]
    */
    protected static $getters = [
            'notifyResult' => 'getNotifyResult',
            'notifyErrorMessage' => 'getNotifyErrorMessage',
            'topicName' => 'getTopicName'
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
        $this->container['notifyResult'] = isset($data['notifyResult']) ? $data['notifyResult'] : null;
        $this->container['notifyErrorMessage'] = isset($data['notifyErrorMessage']) ? $data['notifyErrorMessage'] : null;
        $this->container['topicName'] = isset($data['topicName']) ? $data['topicName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['notifyErrorMessage']) && (mb_strlen($this->container['notifyErrorMessage']) > 1024)) {
                $invalidProperties[] = "invalid value for 'notifyErrorMessage', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['notifyErrorMessage']) && (mb_strlen($this->container['notifyErrorMessage']) < 0)) {
                $invalidProperties[] = "invalid value for 'notifyErrorMessage', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['topicName']) && (mb_strlen($this->container['topicName']) > 5120)) {
                $invalidProperties[] = "invalid value for 'topicName', the character length must be smaller than or equal to 5120.";
            }
            if (!is_null($this->container['topicName']) && (mb_strlen($this->container['topicName']) < 0)) {
                $invalidProperties[] = "invalid value for 'topicName', the character length must be bigger than or equal to 0.";
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
    * Gets notifyResult
    *  记录迁移任务执行完毕后SMN消息是否发送成功。
    *
    * @return bool|null
    */
    public function getNotifyResult()
    {
        return $this->container['notifyResult'];
    }

    /**
    * Sets notifyResult
    *
    * @param bool|null $notifyResult 记录迁移任务执行完毕后SMN消息是否发送成功。
    *
    * @return $this
    */
    public function setNotifyResult($notifyResult)
    {
        $this->container['notifyResult'] = $notifyResult;
        return $this;
    }

    /**
    * Gets notifyErrorMessage
    *  记录SMN消息发送失败原因的错误码（迁移任务成功时为空）。
    *
    * @return string|null
    */
    public function getNotifyErrorMessage()
    {
        return $this->container['notifyErrorMessage'];
    }

    /**
    * Sets notifyErrorMessage
    *
    * @param string|null $notifyErrorMessage 记录SMN消息发送失败原因的错误码（迁移任务成功时为空）。
    *
    * @return $this
    */
    public function setNotifyErrorMessage($notifyErrorMessage)
    {
        $this->container['notifyErrorMessage'] = $notifyErrorMessage;
        return $this;
    }

    /**
    * Gets topicName
    *  SMN Topic的名称（SMN消息发送成功时为空）。
    *
    * @return string|null
    */
    public function getTopicName()
    {
        return $this->container['topicName'];
    }

    /**
    * Sets topicName
    *
    * @param string|null $topicName SMN Topic的名称（SMN消息发送成功时为空）。
    *
    * @return $this
    */
    public function setTopicName($topicName)
    {
        $this->container['topicName'] = $topicName;
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

