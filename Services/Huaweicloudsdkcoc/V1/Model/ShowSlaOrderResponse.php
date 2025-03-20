<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSlaOrderResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSlaOrderResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  主键
    * orderTitle  工单标题
    * orderId  工单ID
    * triggerType  触发类型(EVENT_TICKET,ALARM_TICKET,CHANGE_NOTE,TO_DO_TASKS,ISSUE_TICKET)
    * orderLevel  工单等级
    * createTime  工单开始时间
    * slaRecord  SLA规则记录
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'orderTitle' => 'string',
            'orderId' => 'string',
            'triggerType' => 'string',
            'orderLevel' => 'string',
            'createTime' => 'string',
            'slaRecord' => '\HuaweiCloud\SDK\Coc\V1\Model\SlaRecord[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  主键
    * orderTitle  工单标题
    * orderId  工单ID
    * triggerType  触发类型(EVENT_TICKET,ALARM_TICKET,CHANGE_NOTE,TO_DO_TASKS,ISSUE_TICKET)
    * orderLevel  工单等级
    * createTime  工单开始时间
    * slaRecord  SLA规则记录
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'orderTitle' => null,
        'orderId' => null,
        'triggerType' => null,
        'orderLevel' => null,
        'createTime' => null,
        'slaRecord' => null
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
    * id  主键
    * orderTitle  工单标题
    * orderId  工单ID
    * triggerType  触发类型(EVENT_TICKET,ALARM_TICKET,CHANGE_NOTE,TO_DO_TASKS,ISSUE_TICKET)
    * orderLevel  工单等级
    * createTime  工单开始时间
    * slaRecord  SLA规则记录
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'orderTitle' => 'order_title',
            'orderId' => 'order_id',
            'triggerType' => 'trigger_type',
            'orderLevel' => 'order_level',
            'createTime' => 'create_time',
            'slaRecord' => 'sla_record'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  主键
    * orderTitle  工单标题
    * orderId  工单ID
    * triggerType  触发类型(EVENT_TICKET,ALARM_TICKET,CHANGE_NOTE,TO_DO_TASKS,ISSUE_TICKET)
    * orderLevel  工单等级
    * createTime  工单开始时间
    * slaRecord  SLA规则记录
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'orderTitle' => 'setOrderTitle',
            'orderId' => 'setOrderId',
            'triggerType' => 'setTriggerType',
            'orderLevel' => 'setOrderLevel',
            'createTime' => 'setCreateTime',
            'slaRecord' => 'setSlaRecord'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  主键
    * orderTitle  工单标题
    * orderId  工单ID
    * triggerType  触发类型(EVENT_TICKET,ALARM_TICKET,CHANGE_NOTE,TO_DO_TASKS,ISSUE_TICKET)
    * orderLevel  工单等级
    * createTime  工单开始时间
    * slaRecord  SLA规则记录
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'orderTitle' => 'getOrderTitle',
            'orderId' => 'getOrderId',
            'triggerType' => 'getTriggerType',
            'orderLevel' => 'getOrderLevel',
            'createTime' => 'getCreateTime',
            'slaRecord' => 'getSlaRecord'
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
    const TRIGGER_TYPE_EVENT_TICKET = 'EVENT_TICKET';
    const TRIGGER_TYPE_ALARM_TICKET = 'ALARM_TICKET';
    const TRIGGER_TYPE_CHANGE_NOTE = 'CHANGE_NOTE';
    const TRIGGER_TYPE_TO_DO_TASKS = 'TO_DO_TASKS';
    const TRIGGER_TYPE_ISSUE_TICKET = 'ISSUE_TICKET';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTriggerTypeAllowableValues()
    {
        return [
            self::TRIGGER_TYPE_EVENT_TICKET,
            self::TRIGGER_TYPE_ALARM_TICKET,
            self::TRIGGER_TYPE_CHANGE_NOTE,
            self::TRIGGER_TYPE_TO_DO_TASKS,
            self::TRIGGER_TYPE_ISSUE_TICKET,
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
        $this->container['orderTitle'] = isset($data['orderTitle']) ? $data['orderTitle'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['orderLevel'] = isset($data['orderLevel']) ? $data['orderLevel'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['slaRecord'] = isset($data['slaRecord']) ? $data['slaRecord'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['orderTitle']) && (mb_strlen($this->container['orderTitle']) > 255)) {
                $invalidProperties[] = "invalid value for 'orderTitle', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['orderTitle']) && (mb_strlen($this->container['orderTitle']) < 1)) {
                $invalidProperties[] = "invalid value for 'orderTitle', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getTriggerTypeAllowableValues();
                if (!is_null($this->container['triggerType']) && !in_array($this->container['triggerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'triggerType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['triggerType']) && (mb_strlen($this->container['triggerType']) > 32)) {
                $invalidProperties[] = "invalid value for 'triggerType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['triggerType']) && (mb_strlen($this->container['triggerType']) < 1)) {
                $invalidProperties[] = "invalid value for 'triggerType', the character length must be bigger than or equal to 1.";
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
    *  主键
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 主键
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets orderTitle
    *  工单标题
    *
    * @return string|null
    */
    public function getOrderTitle()
    {
        return $this->container['orderTitle'];
    }

    /**
    * Sets orderTitle
    *
    * @param string|null $orderTitle 工单标题
    *
    * @return $this
    */
    public function setOrderTitle($orderTitle)
    {
        $this->container['orderTitle'] = $orderTitle;
        return $this;
    }

    /**
    * Gets orderId
    *  工单ID
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 工单ID
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets triggerType
    *  触发类型(EVENT_TICKET,ALARM_TICKET,CHANGE_NOTE,TO_DO_TASKS,ISSUE_TICKET)
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
    * @param string|null $triggerType 触发类型(EVENT_TICKET,ALARM_TICKET,CHANGE_NOTE,TO_DO_TASKS,ISSUE_TICKET)
    *
    * @return $this
    */
    public function setTriggerType($triggerType)
    {
        $this->container['triggerType'] = $triggerType;
        return $this;
    }

    /**
    * Gets orderLevel
    *  工单等级
    *
    * @return string|null
    */
    public function getOrderLevel()
    {
        return $this->container['orderLevel'];
    }

    /**
    * Sets orderLevel
    *
    * @param string|null $orderLevel 工单等级
    *
    * @return $this
    */
    public function setOrderLevel($orderLevel)
    {
        $this->container['orderLevel'] = $orderLevel;
        return $this;
    }

    /**
    * Gets createTime
    *  工单开始时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 工单开始时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets slaRecord
    *  SLA规则记录
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\SlaRecord[]|null
    */
    public function getSlaRecord()
    {
        return $this->container['slaRecord'];
    }

    /**
    * Sets slaRecord
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\SlaRecord[]|null $slaRecord SLA规则记录
    *
    * @return $this
    */
    public function setSlaRecord($slaRecord)
    {
        $this->container['slaRecord'] = $slaRecord;
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

