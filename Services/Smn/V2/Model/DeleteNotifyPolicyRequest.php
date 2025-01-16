<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteNotifyPolicyRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteNotifyPolicyRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topicUrn  Topic的唯一的资源标识，可通过[查询主题列表](smn_api_51004.xml)获取该标识。
    * notifyPolicyId  通知策略ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topicUrn' => 'string',
            'notifyPolicyId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topicUrn  Topic的唯一的资源标识，可通过[查询主题列表](smn_api_51004.xml)获取该标识。
    * notifyPolicyId  通知策略ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topicUrn' => null,
        'notifyPolicyId' => null
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
    * topicUrn  Topic的唯一的资源标识，可通过[查询主题列表](smn_api_51004.xml)获取该标识。
    * notifyPolicyId  通知策略ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topicUrn' => 'topic_urn',
            'notifyPolicyId' => 'notify_policy_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topicUrn  Topic的唯一的资源标识，可通过[查询主题列表](smn_api_51004.xml)获取该标识。
    * notifyPolicyId  通知策略ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'topicUrn' => 'setTopicUrn',
            'notifyPolicyId' => 'setNotifyPolicyId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topicUrn  Topic的唯一的资源标识，可通过[查询主题列表](smn_api_51004.xml)获取该标识。
    * notifyPolicyId  通知策略ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'topicUrn' => 'getTopicUrn',
            'notifyPolicyId' => 'getNotifyPolicyId'
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
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['notifyPolicyId'] = isset($data['notifyPolicyId']) ? $data['notifyPolicyId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['topicUrn'] === null) {
            $invalidProperties[] = "'topicUrn' can't be null";
        }
        if ($this->container['notifyPolicyId'] === null) {
            $invalidProperties[] = "'notifyPolicyId' can't be null";
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
    * Gets topicUrn
    *  Topic的唯一的资源标识，可通过[查询主题列表](smn_api_51004.xml)获取该标识。
    *
    * @return string
    */
    public function getTopicUrn()
    {
        return $this->container['topicUrn'];
    }

    /**
    * Sets topicUrn
    *
    * @param string $topicUrn Topic的唯一的资源标识，可通过[查询主题列表](smn_api_51004.xml)获取该标识。
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets notifyPolicyId
    *  通知策略ID。
    *
    * @return string
    */
    public function getNotifyPolicyId()
    {
        return $this->container['notifyPolicyId'];
    }

    /**
    * Sets notifyPolicyId
    *
    * @param string $notifyPolicyId 通知策略ID。
    *
    * @return $this
    */
    public function setNotifyPolicyId($notifyPolicyId)
    {
        $this->container['notifyPolicyId'] = $notifyPolicyId;
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

