<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Event2alarmRuleBodyTriggerPolicies implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'event2alarmRuleBody_trigger_policies';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  自增编号
    * name  事件名称
    * triggerType  触发类型
    * period  触发周期
    * operator  比较符
    * count  触发次数
    * level  告警等级
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'triggerType' => 'string',
            'period' => 'int',
            'operator' => 'string',
            'count' => 'int',
            'level' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  自增编号
    * name  事件名称
    * triggerType  触发类型
    * period  触发周期
    * operator  比较符
    * count  触发次数
    * level  告警等级
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'name' => null,
        'triggerType' => null,
        'period' => 'int32',
        'operator' => null,
        'count' => 'int32',
        'level' => null
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
    * id  自增编号
    * name  事件名称
    * triggerType  触发类型
    * period  触发周期
    * operator  比较符
    * count  触发次数
    * level  告警等级
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'triggerType' => 'trigger_type',
            'period' => 'period',
            'operator' => 'operator',
            'count' => 'count',
            'level' => 'level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  自增编号
    * name  事件名称
    * triggerType  触发类型
    * period  触发周期
    * operator  比较符
    * count  触发次数
    * level  告警等级
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'triggerType' => 'setTriggerType',
            'period' => 'setPeriod',
            'operator' => 'setOperator',
            'count' => 'setCount',
            'level' => 'setLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  自增编号
    * name  事件名称
    * triggerType  触发类型
    * period  触发周期
    * operator  比较符
    * count  触发次数
    * level  告警等级
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'triggerType' => 'getTriggerType',
            'period' => 'getPeriod',
            'operator' => 'getOperator',
            'count' => 'getCount',
            'level' => 'getLevel'
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
    const TRIGGER_TYPE_ACCUMULATIVE = 'accumulative';
    const TRIGGER_TYPE_NOTIFICATION = 'notification';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTriggerTypeAllowableValues()
    {
        return [
            self::TRIGGER_TYPE_ACCUMULATIVE,
            self::TRIGGER_TYPE_NOTIFICATION,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 128)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getTriggerTypeAllowableValues();
                if (!is_null($this->container['triggerType']) && !in_array($this->container['triggerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'triggerType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['triggerType']) && (mb_strlen($this->container['triggerType']) > 128)) {
                $invalidProperties[] = "invalid value for 'triggerType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['triggerType']) && (mb_strlen($this->container['triggerType']) < 0)) {
                $invalidProperties[] = "invalid value for 'triggerType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['period']) && ($this->container['period'] > 86400)) {
                $invalidProperties[] = "invalid value for 'period', must be smaller than or equal to 86400.";
            }
            if (!is_null($this->container['period']) && ($this->container['period'] < 0)) {
                $invalidProperties[] = "invalid value for 'period', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) > 8)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) < 0)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] > 100)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 0)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) > 32)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) < 0)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  自增编号
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 自增编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  事件名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 事件名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets triggerType
    *  触发类型
    *
    * @return string|null
    */
    public function getTriggerType()
    {
        return $this->container['triggerType'];
    }

    /**
    * Sets triggerType
    *
    * @param string|null $triggerType 触发类型
    *
    * @return $this
    */
    public function setTriggerType($triggerType)
    {
        $this->container['triggerType'] = $triggerType;
        return $this;
    }

    /**
    * Gets period
    *  触发周期
    *
    * @return int|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param int|null $period 触发周期
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets operator
    *  比较符
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator 比较符
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets count
    *  触发次数
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 触发次数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets level
    *  告警等级
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level 告警等级
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
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

