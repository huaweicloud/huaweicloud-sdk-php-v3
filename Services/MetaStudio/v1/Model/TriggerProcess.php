<?php

namespace HuaweiCloud\SDK\MetaStudio\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TriggerProcess implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TriggerProcess';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * timeWindow  处理抑制时长。单位秒。  -1 表示整场直播 0 表示无抑制，每次都触发
    * replyMode  回复类型。 SYSTEM_REPLY：系统自动回复设置的话术
    * replyTexts  回复话术集
    * replyOrder  回复次序 - RANDOM：随机 - ORDER：顺序循环
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'timeWindow' => 'int',
            'replyMode' => 'string',
            'replyTexts' => 'string[]',
            'replyOrder' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * timeWindow  处理抑制时长。单位秒。  -1 表示整场直播 0 表示无抑制，每次都触发
    * replyMode  回复类型。 SYSTEM_REPLY：系统自动回复设置的话术
    * replyTexts  回复话术集
    * replyOrder  回复次序 - RANDOM：随机 - ORDER：顺序循环
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'timeWindow' => null,
        'replyMode' => null,
        'replyTexts' => null,
        'replyOrder' => null
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
    * timeWindow  处理抑制时长。单位秒。  -1 表示整场直播 0 表示无抑制，每次都触发
    * replyMode  回复类型。 SYSTEM_REPLY：系统自动回复设置的话术
    * replyTexts  回复话术集
    * replyOrder  回复次序 - RANDOM：随机 - ORDER：顺序循环
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'timeWindow' => 'time_window',
            'replyMode' => 'reply_mode',
            'replyTexts' => 'reply_texts',
            'replyOrder' => 'reply_order'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * timeWindow  处理抑制时长。单位秒。  -1 表示整场直播 0 表示无抑制，每次都触发
    * replyMode  回复类型。 SYSTEM_REPLY：系统自动回复设置的话术
    * replyTexts  回复话术集
    * replyOrder  回复次序 - RANDOM：随机 - ORDER：顺序循环
    *
    * @var string[]
    */
    protected static $setters = [
            'timeWindow' => 'setTimeWindow',
            'replyMode' => 'setReplyMode',
            'replyTexts' => 'setReplyTexts',
            'replyOrder' => 'setReplyOrder'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * timeWindow  处理抑制时长。单位秒。  -1 表示整场直播 0 表示无抑制，每次都触发
    * replyMode  回复类型。 SYSTEM_REPLY：系统自动回复设置的话术
    * replyTexts  回复话术集
    * replyOrder  回复次序 - RANDOM：随机 - ORDER：顺序循环
    *
    * @var string[]
    */
    protected static $getters = [
            'timeWindow' => 'getTimeWindow',
            'replyMode' => 'getReplyMode',
            'replyTexts' => 'getReplyTexts',
            'replyOrder' => 'getReplyOrder'
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
    const REPLY_MODE_SYSTEM_REPLY = 'SYSTEM_REPLY';
    const REPLY_ORDER_RANDOM = 'RANDOM';
    const REPLY_ORDER_ORDER = 'ORDER';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReplyModeAllowableValues()
    {
        return [
            self::REPLY_MODE_SYSTEM_REPLY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReplyOrderAllowableValues()
    {
        return [
            self::REPLY_ORDER_RANDOM,
            self::REPLY_ORDER_ORDER,
        ];
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
        $this->container['timeWindow'] = isset($data['timeWindow']) ? $data['timeWindow'] : null;
        $this->container['replyMode'] = isset($data['replyMode']) ? $data['replyMode'] : null;
        $this->container['replyTexts'] = isset($data['replyTexts']) ? $data['replyTexts'] : null;
        $this->container['replyOrder'] = isset($data['replyOrder']) ? $data['replyOrder'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['timeWindow']) && ($this->container['timeWindow'] > 7200)) {
                $invalidProperties[] = "invalid value for 'timeWindow', must be smaller than or equal to 7200.";
            }
            if (!is_null($this->container['timeWindow']) && ($this->container['timeWindow'] < -1)) {
                $invalidProperties[] = "invalid value for 'timeWindow', must be bigger than or equal to -1.";
            }
            $allowedValues = $this->getReplyModeAllowableValues();
                if (!is_null($this->container['replyMode']) && !in_array($this->container['replyMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'replyMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['replyMode']) && (mb_strlen($this->container['replyMode']) > 16)) {
                $invalidProperties[] = "invalid value for 'replyMode', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['replyMode']) && (mb_strlen($this->container['replyMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'replyMode', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getReplyOrderAllowableValues();
                if (!is_null($this->container['replyOrder']) && !in_array($this->container['replyOrder'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'replyOrder', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['replyOrder']) && (mb_strlen($this->container['replyOrder']) > 32)) {
                $invalidProperties[] = "invalid value for 'replyOrder', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['replyOrder']) && (mb_strlen($this->container['replyOrder']) < 0)) {
                $invalidProperties[] = "invalid value for 'replyOrder', the character length must be bigger than or equal to 0.";
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
    * Gets timeWindow
    *  处理抑制时长。单位秒。  -1 表示整场直播 0 表示无抑制，每次都触发
    *
    * @return int|null
    */
    public function getTimeWindow()
    {
        return $this->container['timeWindow'];
    }

    /**
    * Sets timeWindow
    *
    * @param int|null $timeWindow 处理抑制时长。单位秒。  -1 表示整场直播 0 表示无抑制，每次都触发
    *
    * @return $this
    */
    public function setTimeWindow($timeWindow)
    {
        $this->container['timeWindow'] = $timeWindow;
        return $this;
    }

    /**
    * Gets replyMode
    *  回复类型。 SYSTEM_REPLY：系统自动回复设置的话术
    *
    * @return string|null
    */
    public function getReplyMode()
    {
        return $this->container['replyMode'];
    }

    /**
    * Sets replyMode
    *
    * @param string|null $replyMode 回复类型。 SYSTEM_REPLY：系统自动回复设置的话术
    *
    * @return $this
    */
    public function setReplyMode($replyMode)
    {
        $this->container['replyMode'] = $replyMode;
        return $this;
    }

    /**
    * Gets replyTexts
    *  回复话术集
    *
    * @return string[]|null
    */
    public function getReplyTexts()
    {
        return $this->container['replyTexts'];
    }

    /**
    * Sets replyTexts
    *
    * @param string[]|null $replyTexts 回复话术集
    *
    * @return $this
    */
    public function setReplyTexts($replyTexts)
    {
        $this->container['replyTexts'] = $replyTexts;
        return $this;
    }

    /**
    * Gets replyOrder
    *  回复次序 - RANDOM：随机 - ORDER：顺序循环
    *
    * @return string|null
    */
    public function getReplyOrder()
    {
        return $this->container['replyOrder'];
    }

    /**
    * Sets replyOrder
    *
    * @param string|null $replyOrder 回复次序 - RANDOM：随机 - ORDER：顺序循环
    *
    * @return $this
    */
    public function setReplyOrder($replyOrder)
    {
        $this->container['replyOrder'] = $replyOrder;
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

