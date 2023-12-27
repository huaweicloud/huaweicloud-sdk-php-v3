<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LiveWarningItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LiveWarningItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * warningType  告警类型。 - TOO_LESSS_SCRIPT_ITEMS：段落（话术）数量太少。 - TOO_SHORT_SCRIPT_TIME：段落（话术）总时长太短。 - TOO_LESS_DANMAKU_RULES： 弹幕互动规则太少。 - RANDOM_PLAY_CLOSED: 随机播放开关关闭。 - ROTATION_MODEL_CLOSED: 主播轮转未配置。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'warningType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * warningType  告警类型。 - TOO_LESSS_SCRIPT_ITEMS：段落（话术）数量太少。 - TOO_SHORT_SCRIPT_TIME：段落（话术）总时长太短。 - TOO_LESS_DANMAKU_RULES： 弹幕互动规则太少。 - RANDOM_PLAY_CLOSED: 随机播放开关关闭。 - ROTATION_MODEL_CLOSED: 主播轮转未配置。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'warningType' => null
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
    * warningType  告警类型。 - TOO_LESSS_SCRIPT_ITEMS：段落（话术）数量太少。 - TOO_SHORT_SCRIPT_TIME：段落（话术）总时长太短。 - TOO_LESS_DANMAKU_RULES： 弹幕互动规则太少。 - RANDOM_PLAY_CLOSED: 随机播放开关关闭。 - ROTATION_MODEL_CLOSED: 主播轮转未配置。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'warningType' => 'warning_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * warningType  告警类型。 - TOO_LESSS_SCRIPT_ITEMS：段落（话术）数量太少。 - TOO_SHORT_SCRIPT_TIME：段落（话术）总时长太短。 - TOO_LESS_DANMAKU_RULES： 弹幕互动规则太少。 - RANDOM_PLAY_CLOSED: 随机播放开关关闭。 - ROTATION_MODEL_CLOSED: 主播轮转未配置。
    *
    * @var string[]
    */
    protected static $setters = [
            'warningType' => 'setWarningType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * warningType  告警类型。 - TOO_LESSS_SCRIPT_ITEMS：段落（话术）数量太少。 - TOO_SHORT_SCRIPT_TIME：段落（话术）总时长太短。 - TOO_LESS_DANMAKU_RULES： 弹幕互动规则太少。 - RANDOM_PLAY_CLOSED: 随机播放开关关闭。 - ROTATION_MODEL_CLOSED: 主播轮转未配置。
    *
    * @var string[]
    */
    protected static $getters = [
            'warningType' => 'getWarningType'
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
    const WARNING_TYPE_TOO_LESSS_SCRIPT_ITEMS = 'TOO_LESSS_SCRIPT_ITEMS';
    const WARNING_TYPE_TOO_SHORT_SCRIPT_TIME = 'TOO_SHORT_SCRIPT_TIME';
    const WARNING_TYPE_TOO_LESS_DANMAKU_RULES = 'TOO_LESS_DANMAKU_RULES';
    const WARNING_TYPE_RANDOM_PLAY_CLOSED = 'RANDOM_PLAY_CLOSED';
    const WARNING_TYPE_ROTATION_MODEL_CLOSED = 'ROTATION_MODEL_CLOSED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getWarningTypeAllowableValues()
    {
        return [
            self::WARNING_TYPE_TOO_LESSS_SCRIPT_ITEMS,
            self::WARNING_TYPE_TOO_SHORT_SCRIPT_TIME,
            self::WARNING_TYPE_TOO_LESS_DANMAKU_RULES,
            self::WARNING_TYPE_RANDOM_PLAY_CLOSED,
            self::WARNING_TYPE_ROTATION_MODEL_CLOSED,
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
        $this->container['warningType'] = isset($data['warningType']) ? $data['warningType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getWarningTypeAllowableValues();
                if (!is_null($this->container['warningType']) && !in_array($this->container['warningType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'warningType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['warningType']) && (mb_strlen($this->container['warningType']) > 32)) {
                $invalidProperties[] = "invalid value for 'warningType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['warningType']) && (mb_strlen($this->container['warningType']) < 0)) {
                $invalidProperties[] = "invalid value for 'warningType', the character length must be bigger than or equal to 0.";
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
    * Gets warningType
    *  告警类型。 - TOO_LESSS_SCRIPT_ITEMS：段落（话术）数量太少。 - TOO_SHORT_SCRIPT_TIME：段落（话术）总时长太短。 - TOO_LESS_DANMAKU_RULES： 弹幕互动规则太少。 - RANDOM_PLAY_CLOSED: 随机播放开关关闭。 - ROTATION_MODEL_CLOSED: 主播轮转未配置。
    *
    * @return string|null
    */
    public function getWarningType()
    {
        return $this->container['warningType'];
    }

    /**
    * Sets warningType
    *
    * @param string|null $warningType 告警类型。 - TOO_LESSS_SCRIPT_ITEMS：段落（话术）数量太少。 - TOO_SHORT_SCRIPT_TIME：段落（话术）总时长太短。 - TOO_LESS_DANMAKU_RULES： 弹幕互动规则太少。 - RANDOM_PLAY_CLOSED: 随机播放开关关闭。 - ROTATION_MODEL_CLOSED: 主播轮转未配置。
    *
    * @return $this
    */
    public function setWarningType($warningType)
    {
        $this->container['warningType'] = $warningType;
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

