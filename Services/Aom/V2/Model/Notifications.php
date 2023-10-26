<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Notifications implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Notifications';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actionRule  告警行动规则名称
    * notifierChannel  通知类型。SMN：消息通知服务
    * smnChannel  smnChannel
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actionRule' => 'string',
            'notifierChannel' => 'string',
            'smnChannel' => '\HuaweiCloud\SDK\Aom\V2\Model\SmnResponse'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actionRule  告警行动规则名称
    * notifierChannel  通知类型。SMN：消息通知服务
    * smnChannel  smnChannel
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actionRule' => null,
        'notifierChannel' => null,
        'smnChannel' => null
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
    * actionRule  告警行动规则名称
    * notifierChannel  通知类型。SMN：消息通知服务
    * smnChannel  smnChannel
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actionRule' => 'action_rule',
            'notifierChannel' => 'notifier_channel',
            'smnChannel' => 'smn_channel'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actionRule  告警行动规则名称
    * notifierChannel  通知类型。SMN：消息通知服务
    * smnChannel  smnChannel
    *
    * @var string[]
    */
    protected static $setters = [
            'actionRule' => 'setActionRule',
            'notifierChannel' => 'setNotifierChannel',
            'smnChannel' => 'setSmnChannel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actionRule  告警行动规则名称
    * notifierChannel  通知类型。SMN：消息通知服务
    * smnChannel  smnChannel
    *
    * @var string[]
    */
    protected static $getters = [
            'actionRule' => 'getActionRule',
            'notifierChannel' => 'getNotifierChannel',
            'smnChannel' => 'getSmnChannel'
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
    const NOTIFIER_CHANNEL_SMN = 'SMN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNotifierChannelAllowableValues()
    {
        return [
            self::NOTIFIER_CHANNEL_SMN,
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
        $this->container['actionRule'] = isset($data['actionRule']) ? $data['actionRule'] : null;
        $this->container['notifierChannel'] = isset($data['notifierChannel']) ? $data['notifierChannel'] : null;
        $this->container['smnChannel'] = isset($data['smnChannel']) ? $data['smnChannel'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['actionRule']) && (mb_strlen($this->container['actionRule']) > 100)) {
                $invalidProperties[] = "invalid value for 'actionRule', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['actionRule']) && (mb_strlen($this->container['actionRule']) < 1)) {
                $invalidProperties[] = "invalid value for 'actionRule', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getNotifierChannelAllowableValues();
                if (!is_null($this->container['notifierChannel']) && !in_array($this->container['notifierChannel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'notifierChannel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets actionRule
    *  告警行动规则名称
    *
    * @return string|null
    */
    public function getActionRule()
    {
        return $this->container['actionRule'];
    }

    /**
    * Sets actionRule
    *
    * @param string|null $actionRule 告警行动规则名称
    *
    * @return $this
    */
    public function setActionRule($actionRule)
    {
        $this->container['actionRule'] = $actionRule;
        return $this;
    }

    /**
    * Gets notifierChannel
    *  通知类型。SMN：消息通知服务
    *
    * @return string|null
    */
    public function getNotifierChannel()
    {
        return $this->container['notifierChannel'];
    }

    /**
    * Sets notifierChannel
    *
    * @param string|null $notifierChannel 通知类型。SMN：消息通知服务
    *
    * @return $this
    */
    public function setNotifierChannel($notifierChannel)
    {
        $this->container['notifierChannel'] = $notifierChannel;
        return $this;
    }

    /**
    * Gets smnChannel
    *  smnChannel
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\SmnResponse|null
    */
    public function getSmnChannel()
    {
        return $this->container['smnChannel'];
    }

    /**
    * Sets smnChannel
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\SmnResponse|null $smnChannel smnChannel
    *
    * @return $this
    */
    public function setSmnChannel($smnChannel)
    {
        $this->container['smnChannel'] = $smnChannel;
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

