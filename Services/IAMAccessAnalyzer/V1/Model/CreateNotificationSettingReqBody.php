<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateNotificationSettingReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateNotificationSettingReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * analyzerId  分析器的唯一标识符。
    * mcSwitch  是否开启消息中心通知开关。
    * smnTopicUrns  消息通知配置的SMN主题URN列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'analyzerId' => 'string',
            'mcSwitch' => 'bool',
            'smnTopicUrns' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * analyzerId  分析器的唯一标识符。
    * mcSwitch  是否开启消息中心通知开关。
    * smnTopicUrns  消息通知配置的SMN主题URN列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'analyzerId' => null,
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
    * analyzerId  分析器的唯一标识符。
    * mcSwitch  是否开启消息中心通知开关。
    * smnTopicUrns  消息通知配置的SMN主题URN列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'analyzerId' => 'analyzer_id',
            'mcSwitch' => 'mc_switch',
            'smnTopicUrns' => 'smn_topic_urns'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * analyzerId  分析器的唯一标识符。
    * mcSwitch  是否开启消息中心通知开关。
    * smnTopicUrns  消息通知配置的SMN主题URN列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'analyzerId' => 'setAnalyzerId',
            'mcSwitch' => 'setMcSwitch',
            'smnTopicUrns' => 'setSmnTopicUrns'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * analyzerId  分析器的唯一标识符。
    * mcSwitch  是否开启消息中心通知开关。
    * smnTopicUrns  消息通知配置的SMN主题URN列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'analyzerId' => 'getAnalyzerId',
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
        $this->container['analyzerId'] = isset($data['analyzerId']) ? $data['analyzerId'] : null;
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
        if ($this->container['analyzerId'] === null) {
            $invalidProperties[] = "'analyzerId' can't be null";
        }
            if ((mb_strlen($this->container['analyzerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'analyzerId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['analyzerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'analyzerId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\w-]+$/", $this->container['analyzerId'])) {
                $invalidProperties[] = "invalid value for 'analyzerId', must be conform to the pattern /^[\\w-]+$/.";
            }
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
    * Gets analyzerId
    *  分析器的唯一标识符。
    *
    * @return string
    */
    public function getAnalyzerId()
    {
        return $this->container['analyzerId'];
    }

    /**
    * Sets analyzerId
    *
    * @param string $analyzerId 分析器的唯一标识符。
    *
    * @return $this
    */
    public function setAnalyzerId($analyzerId)
    {
        $this->container['analyzerId'] = $analyzerId;
        return $this;
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

