<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IefFlinkJobStatusReportReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IefFlinkJobStatusReportReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobs  作业信息列表
    * messageId  消息id
    * msgConfirmTopic  消息确认topic
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobs' => '\HuaweiCloud\SDK\Dli\V1\Model\Jobs[]',
            'messageId' => 'string',
            'msgConfirmTopic' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobs  作业信息列表
    * messageId  消息id
    * msgConfirmTopic  消息确认topic
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobs' => null,
        'messageId' => null,
        'msgConfirmTopic' => null
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
    * jobs  作业信息列表
    * messageId  消息id
    * msgConfirmTopic  消息确认topic
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobs' => 'jobs',
            'messageId' => 'message_id',
            'msgConfirmTopic' => 'msg_confirm_topic'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobs  作业信息列表
    * messageId  消息id
    * msgConfirmTopic  消息确认topic
    *
    * @var string[]
    */
    protected static $setters = [
            'jobs' => 'setJobs',
            'messageId' => 'setMessageId',
            'msgConfirmTopic' => 'setMsgConfirmTopic'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobs  作业信息列表
    * messageId  消息id
    * msgConfirmTopic  消息确认topic
    *
    * @var string[]
    */
    protected static $getters = [
            'jobs' => 'getJobs',
            'messageId' => 'getMessageId',
            'msgConfirmTopic' => 'getMsgConfirmTopic'
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
        $this->container['jobs'] = isset($data['jobs']) ? $data['jobs'] : null;
        $this->container['messageId'] = isset($data['messageId']) ? $data['messageId'] : null;
        $this->container['msgConfirmTopic'] = isset($data['msgConfirmTopic']) ? $data['msgConfirmTopic'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobs'] === null) {
            $invalidProperties[] = "'jobs' can't be null";
        }
        if ($this->container['messageId'] === null) {
            $invalidProperties[] = "'messageId' can't be null";
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
    * Gets jobs
    *  作业信息列表
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\Jobs[]
    */
    public function getJobs()
    {
        return $this->container['jobs'];
    }

    /**
    * Sets jobs
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\Jobs[] $jobs 作业信息列表
    *
    * @return $this
    */
    public function setJobs($jobs)
    {
        $this->container['jobs'] = $jobs;
        return $this;
    }

    /**
    * Gets messageId
    *  消息id
    *
    * @return string
    */
    public function getMessageId()
    {
        return $this->container['messageId'];
    }

    /**
    * Sets messageId
    *
    * @param string $messageId 消息id
    *
    * @return $this
    */
    public function setMessageId($messageId)
    {
        $this->container['messageId'] = $messageId;
        return $this;
    }

    /**
    * Gets msgConfirmTopic
    *  消息确认topic
    *
    * @return string|null
    */
    public function getMsgConfirmTopic()
    {
        return $this->container['msgConfirmTopic'];
    }

    /**
    * Sets msgConfirmTopic
    *
    * @param string|null $msgConfirmTopic 消息确认topic
    *
    * @return $this
    */
    public function setMsgConfirmTopic($msgConfirmTopic)
    {
        $this->container['msgConfirmTopic'] = $msgConfirmTopic;
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

