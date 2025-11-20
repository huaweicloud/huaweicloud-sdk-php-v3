<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateNotificationSettingReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateNotificationSettingReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mcSwitch  是否开启消息中心通知开关。
    * smnTopicUrns  消息通知配置的SMN主题URN列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mcSwitch' => 'bool',
            'smnTopicUrns' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mcSwitch  是否开启消息中心通知开关。
    * smnTopicUrns  消息通知配置的SMN主题URN列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mcSwitch' => null,
        'smnTopicUrns' => null
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
    * mcSwitch  是否开启消息中心通知开关。
    * smnTopicUrns  消息通知配置的SMN主题URN列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mcSwitch' => 'mc_switch',
            'smnTopicUrns' => 'smn_topic_urns'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mcSwitch  是否开启消息中心通知开关。
    * smnTopicUrns  消息通知配置的SMN主题URN列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'mcSwitch' => 'setMcSwitch',
            'smnTopicUrns' => 'setSmnTopicUrns'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mcSwitch  是否开启消息中心通知开关。
    * smnTopicUrns  消息通知配置的SMN主题URN列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'mcSwitch' => 'getMcSwitch',
            'smnTopicUrns' => 'getSmnTopicUrns'
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
        $this->container['mcSwitch'] = isset($data['mcSwitch']) ? $data['mcSwitch'] : null;
        $this->container['smnTopicUrns'] = isset($data['smnTopicUrns']) ? $data['smnTopicUrns'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['mcSwitch'] === null) {
            $invalidProperties[] = "'mcSwitch' can't be null";
        }
        if ($this->container['smnTopicUrns'] === null) {
            $invalidProperties[] = "'smnTopicUrns' can't be null";
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
    * Gets mcSwitch
    *  是否开启消息中心通知开关。
    *
    * @return bool
    */
    public function getMcSwitch()
    {
        return $this->container['mcSwitch'];
    }

    /**
    * Sets mcSwitch
    *
    * @param bool $mcSwitch 是否开启消息中心通知开关。
    *
    * @return $this
    */
    public function setMcSwitch($mcSwitch)
    {
        $this->container['mcSwitch'] = $mcSwitch;
        return $this;
    }

    /**
    * Gets smnTopicUrns
    *  消息通知配置的SMN主题URN列表。
    *
    * @return string[]
    */
    public function getSmnTopicUrns()
    {
        return $this->container['smnTopicUrns'];
    }

    /**
    * Sets smnTopicUrns
    *
    * @param string[] $smnTopicUrns 消息通知配置的SMN主题URN列表。
    *
    * @return $this
    */
    public function setSmnTopicUrns($smnTopicUrns)
    {
        $this->container['smnTopicUrns'] = $smnTopicUrns;
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

