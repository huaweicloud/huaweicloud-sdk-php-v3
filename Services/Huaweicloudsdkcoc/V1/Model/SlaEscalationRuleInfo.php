<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SlaEscalationRuleInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SlaEscalationRuleInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * day  天
    * hour  小时
    * minute  分钟
    * order  顺序
    * protocol  通知类型
    * notificationObjConfiguration  通知配置
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'day' => 'int',
            'hour' => 'int',
            'minute' => 'int',
            'order' => 'int',
            'protocol' => 'string',
            'notificationObjConfiguration' => '\HuaweiCloud\SDK\Coc\V1\Model\NotificationObjConfiguration[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * day  天
    * hour  小时
    * minute  分钟
    * order  顺序
    * protocol  通知类型
    * notificationObjConfiguration  通知配置
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'day' => 'int32',
        'hour' => 'int32',
        'minute' => 'int32',
        'order' => 'int32',
        'protocol' => null,
        'notificationObjConfiguration' => null
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
    * day  天
    * hour  小时
    * minute  分钟
    * order  顺序
    * protocol  通知类型
    * notificationObjConfiguration  通知配置
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'day' => 'day',
            'hour' => 'hour',
            'minute' => 'minute',
            'order' => 'order',
            'protocol' => 'protocol',
            'notificationObjConfiguration' => 'notification_obj_configuration'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * day  天
    * hour  小时
    * minute  分钟
    * order  顺序
    * protocol  通知类型
    * notificationObjConfiguration  通知配置
    *
    * @var string[]
    */
    protected static $setters = [
            'day' => 'setDay',
            'hour' => 'setHour',
            'minute' => 'setMinute',
            'order' => 'setOrder',
            'protocol' => 'setProtocol',
            'notificationObjConfiguration' => 'setNotificationObjConfiguration'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * day  天
    * hour  小时
    * minute  分钟
    * order  顺序
    * protocol  通知类型
    * notificationObjConfiguration  通知配置
    *
    * @var string[]
    */
    protected static $getters = [
            'day' => 'getDay',
            'hour' => 'getHour',
            'minute' => 'getMinute',
            'order' => 'getOrder',
            'protocol' => 'getProtocol',
            'notificationObjConfiguration' => 'getNotificationObjConfiguration'
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
        $this->container['day'] = isset($data['day']) ? $data['day'] : null;
        $this->container['hour'] = isset($data['hour']) ? $data['hour'] : null;
        $this->container['minute'] = isset($data['minute']) ? $data['minute'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['notificationObjConfiguration'] = isset($data['notificationObjConfiguration']) ? $data['notificationObjConfiguration'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['day']) && ($this->container['day'] > 60)) {
                $invalidProperties[] = "invalid value for 'day', must be smaller than or equal to 60.";
            }
            if (!is_null($this->container['day']) && ($this->container['day'] < 0)) {
                $invalidProperties[] = "invalid value for 'day', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hour']) && ($this->container['hour'] > 23)) {
                $invalidProperties[] = "invalid value for 'hour', must be smaller than or equal to 23.";
            }
            if (!is_null($this->container['hour']) && ($this->container['hour'] < 0)) {
                $invalidProperties[] = "invalid value for 'hour', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['minute']) && ($this->container['minute'] > 59)) {
                $invalidProperties[] = "invalid value for 'minute', must be smaller than or equal to 59.";
            }
            if (!is_null($this->container['minute']) && ($this->container['minute'] < 0)) {
                $invalidProperties[] = "invalid value for 'minute', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['order']) && ($this->container['order'] > 5)) {
                $invalidProperties[] = "invalid value for 'order', must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['order']) && ($this->container['order'] < 0)) {
                $invalidProperties[] = "invalid value for 'order', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) > 100)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) < 0)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be bigger than or equal to 0.";
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
    * Gets day
    *  天
    *
    * @return int|null
    */
    public function getDay()
    {
        return $this->container['day'];
    }

    /**
    * Sets day
    *
    * @param int|null $day 天
    *
    * @return $this
    */
    public function setDay($day)
    {
        $this->container['day'] = $day;
        return $this;
    }

    /**
    * Gets hour
    *  小时
    *
    * @return int|null
    */
    public function getHour()
    {
        return $this->container['hour'];
    }

    /**
    * Sets hour
    *
    * @param int|null $hour 小时
    *
    * @return $this
    */
    public function setHour($hour)
    {
        $this->container['hour'] = $hour;
        return $this;
    }

    /**
    * Gets minute
    *  分钟
    *
    * @return int|null
    */
    public function getMinute()
    {
        return $this->container['minute'];
    }

    /**
    * Sets minute
    *
    * @param int|null $minute 分钟
    *
    * @return $this
    */
    public function setMinute($minute)
    {
        $this->container['minute'] = $minute;
        return $this;
    }

    /**
    * Gets order
    *  顺序
    *
    * @return int|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param int|null $order 顺序
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets protocol
    *  通知类型
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 通知类型
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets notificationObjConfiguration
    *  通知配置
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\NotificationObjConfiguration[]|null
    */
    public function getNotificationObjConfiguration()
    {
        return $this->container['notificationObjConfiguration'];
    }

    /**
    * Sets notificationObjConfiguration
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\NotificationObjConfiguration[]|null $notificationObjConfiguration 通知配置
    *
    * @return $this
    */
    public function setNotificationObjConfiguration($notificationObjConfiguration)
    {
        $this->container['notificationObjConfiguration'] = $notificationObjConfiguration;
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

