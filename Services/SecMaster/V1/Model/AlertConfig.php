<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlertConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlertConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topicUrn  关联对应的smn topic；当type=smn时，可以填写当前参数默认为空
    * type  支持的订单告警类型，SMN为消息协议，MC为消息中心
    * enable  开启或关闭当前告警配置，true为开启，false为关闭
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topicUrn' => 'string',
            'type' => 'string',
            'enable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topicUrn  关联对应的smn topic；当type=smn时，可以填写当前参数默认为空
    * type  支持的订单告警类型，SMN为消息协议，MC为消息中心
    * enable  开启或关闭当前告警配置，true为开启，false为关闭
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topicUrn' => null,
        'type' => null,
        'enable' => null
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
    * topicUrn  关联对应的smn topic；当type=smn时，可以填写当前参数默认为空
    * type  支持的订单告警类型，SMN为消息协议，MC为消息中心
    * enable  开启或关闭当前告警配置，true为开启，false为关闭
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topicUrn' => 'topic_urn',
            'type' => 'type',
            'enable' => 'enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topicUrn  关联对应的smn topic；当type=smn时，可以填写当前参数默认为空
    * type  支持的订单告警类型，SMN为消息协议，MC为消息中心
    * enable  开启或关闭当前告警配置，true为开启，false为关闭
    *
    * @var string[]
    */
    protected static $setters = [
            'topicUrn' => 'setTopicUrn',
            'type' => 'setType',
            'enable' => 'setEnable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topicUrn  关联对应的smn topic；当type=smn时，可以填写当前参数默认为空
    * type  支持的订单告警类型，SMN为消息协议，MC为消息中心
    * enable  开启或关闭当前告警配置，true为开启，false为关闭
    *
    * @var string[]
    */
    protected static $getters = [
            'topicUrn' => 'getTopicUrn',
            'type' => 'getType',
            'enable' => 'getEnable'
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
    const TYPE_SMN = 'SMN';
    const TYPE_MC = 'MC';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SMN,
            self::TYPE_MC,
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
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['topicUrn']) && (mb_strlen($this->container['topicUrn']) > 100)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['topicUrn']) && (mb_strlen($this->container['topicUrn']) < 2)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be bigger than or equal to 2.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 10)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 2)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 2.";
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
    *  关联对应的smn topic；当type=smn时，可以填写当前参数默认为空
    *
    * @return string|null
    */
    public function getTopicUrn()
    {
        return $this->container['topicUrn'];
    }

    /**
    * Sets topicUrn
    *
    * @param string|null $topicUrn 关联对应的smn topic；当type=smn时，可以填写当前参数默认为空
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets type
    *  支持的订单告警类型，SMN为消息协议，MC为消息中心
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 支持的订单告警类型，SMN为消息协议，MC为消息中心
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets enable
    *  开启或关闭当前告警配置，true为开启，false为关闭
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable 开启或关闭当前告警配置，true为开启，false为关闭
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
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

