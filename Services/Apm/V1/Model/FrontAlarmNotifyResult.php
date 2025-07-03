<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FrontAlarmNotifyResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FrontAlarmNotifyResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  告警通知id。
    * gmtCreate  创建时间。
    * notifyType  通知类型。
    * alarmRuleId  告警规则id。
    * templateId  模板id。
    * alarmDataEventId  关联事件id。
    * notifyStatus  通知结果。
    * alarmContent  通知内容。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'gmtCreate' => 'string',
            'notifyType' => 'string',
            'alarmRuleId' => 'int',
            'templateId' => 'int',
            'alarmDataEventId' => 'int',
            'notifyStatus' => 'bool',
            'alarmContent' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  告警通知id。
    * gmtCreate  创建时间。
    * notifyType  通知类型。
    * alarmRuleId  告警规则id。
    * templateId  模板id。
    * alarmDataEventId  关联事件id。
    * notifyStatus  通知结果。
    * alarmContent  通知内容。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'gmtCreate' => null,
        'notifyType' => null,
        'alarmRuleId' => 'int64',
        'templateId' => 'int64',
        'alarmDataEventId' => 'int64',
        'notifyStatus' => null,
        'alarmContent' => null
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
    * id  告警通知id。
    * gmtCreate  创建时间。
    * notifyType  通知类型。
    * alarmRuleId  告警规则id。
    * templateId  模板id。
    * alarmDataEventId  关联事件id。
    * notifyStatus  通知结果。
    * alarmContent  通知内容。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'gmtCreate' => 'gmt_create',
            'notifyType' => 'notify_type',
            'alarmRuleId' => 'alarm_rule_id',
            'templateId' => 'template_id',
            'alarmDataEventId' => 'alarm_data_event_id',
            'notifyStatus' => 'notify_status',
            'alarmContent' => 'alarm_content'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  告警通知id。
    * gmtCreate  创建时间。
    * notifyType  通知类型。
    * alarmRuleId  告警规则id。
    * templateId  模板id。
    * alarmDataEventId  关联事件id。
    * notifyStatus  通知结果。
    * alarmContent  通知内容。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'gmtCreate' => 'setGmtCreate',
            'notifyType' => 'setNotifyType',
            'alarmRuleId' => 'setAlarmRuleId',
            'templateId' => 'setTemplateId',
            'alarmDataEventId' => 'setAlarmDataEventId',
            'notifyStatus' => 'setNotifyStatus',
            'alarmContent' => 'setAlarmContent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  告警通知id。
    * gmtCreate  创建时间。
    * notifyType  通知类型。
    * alarmRuleId  告警规则id。
    * templateId  模板id。
    * alarmDataEventId  关联事件id。
    * notifyStatus  通知结果。
    * alarmContent  通知内容。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'gmtCreate' => 'getGmtCreate',
            'notifyType' => 'getNotifyType',
            'alarmRuleId' => 'getAlarmRuleId',
            'templateId' => 'getTemplateId',
            'alarmDataEventId' => 'getAlarmDataEventId',
            'notifyStatus' => 'getNotifyStatus',
            'alarmContent' => 'getAlarmContent'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['gmtCreate'] = isset($data['gmtCreate']) ? $data['gmtCreate'] : null;
        $this->container['notifyType'] = isset($data['notifyType']) ? $data['notifyType'] : null;
        $this->container['alarmRuleId'] = isset($data['alarmRuleId']) ? $data['alarmRuleId'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['alarmDataEventId'] = isset($data['alarmDataEventId']) ? $data['alarmDataEventId'] : null;
        $this->container['notifyStatus'] = isset($data['notifyStatus']) ? $data['notifyStatus'] : null;
        $this->container['alarmContent'] = isset($data['alarmContent']) ? $data['alarmContent'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  告警通知id。
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
    * @param int|null $id 告警通知id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets gmtCreate
    *  创建时间。
    *
    * @return string|null
    */
    public function getGmtCreate()
    {
        return $this->container['gmtCreate'];
    }

    /**
    * Sets gmtCreate
    *
    * @param string|null $gmtCreate 创建时间。
    *
    * @return $this
    */
    public function setGmtCreate($gmtCreate)
    {
        $this->container['gmtCreate'] = $gmtCreate;
        return $this;
    }

    /**
    * Gets notifyType
    *  通知类型。
    *
    * @return string|null
    */
    public function getNotifyType()
    {
        return $this->container['notifyType'];
    }

    /**
    * Sets notifyType
    *
    * @param string|null $notifyType 通知类型。
    *
    * @return $this
    */
    public function setNotifyType($notifyType)
    {
        $this->container['notifyType'] = $notifyType;
        return $this;
    }

    /**
    * Gets alarmRuleId
    *  告警规则id。
    *
    * @return int|null
    */
    public function getAlarmRuleId()
    {
        return $this->container['alarmRuleId'];
    }

    /**
    * Sets alarmRuleId
    *
    * @param int|null $alarmRuleId 告警规则id。
    *
    * @return $this
    */
    public function setAlarmRuleId($alarmRuleId)
    {
        $this->container['alarmRuleId'] = $alarmRuleId;
        return $this;
    }

    /**
    * Gets templateId
    *  模板id。
    *
    * @return int|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param int|null $templateId 模板id。
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets alarmDataEventId
    *  关联事件id。
    *
    * @return int|null
    */
    public function getAlarmDataEventId()
    {
        return $this->container['alarmDataEventId'];
    }

    /**
    * Sets alarmDataEventId
    *
    * @param int|null $alarmDataEventId 关联事件id。
    *
    * @return $this
    */
    public function setAlarmDataEventId($alarmDataEventId)
    {
        $this->container['alarmDataEventId'] = $alarmDataEventId;
        return $this;
    }

    /**
    * Gets notifyStatus
    *  通知结果。
    *
    * @return bool|null
    */
    public function getNotifyStatus()
    {
        return $this->container['notifyStatus'];
    }

    /**
    * Sets notifyStatus
    *
    * @param bool|null $notifyStatus 通知结果。
    *
    * @return $this
    */
    public function setNotifyStatus($notifyStatus)
    {
        $this->container['notifyStatus'] = $notifyStatus;
        return $this;
    }

    /**
    * Gets alarmContent
    *  通知内容。
    *
    * @return string|null
    */
    public function getAlarmContent()
    {
        return $this->container['alarmContent'];
    }

    /**
    * Sets alarmContent
    *
    * @param string|null $alarmContent 通知内容。
    *
    * @return $this
    */
    public function setAlarmContent($alarmContent)
    {
        $this->container['alarmContent'] = $alarmContent;
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

