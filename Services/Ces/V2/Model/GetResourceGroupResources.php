<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetResourceGroupResources implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetResourceGroupResources';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  指标告警状态，取值为health（告警中）、unhealthy（已触发）、no_alarm_rule（未设置告警规则）
    * dimensions  资源的维度信息
    * tags  资源的tag信息,格式为key/value的json字符串,样例为\"{\\\"sss\\\":\\\"aaa\\\"}\"
    * enterpriseProjectId  企业项目ID
    * eventStatus  事件告警状态，取值为health（告警中）、unhealthy（已触发）、no_alarm_rule（未设置告警规则）
    * resourceName  资源名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'dimensions' => '\HuaweiCloud\SDK\Ces\V2\Model\ResourceDimension[]',
            'tags' => 'string',
            'enterpriseProjectId' => 'string',
            'eventStatus' => 'string',
            'resourceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  指标告警状态，取值为health（告警中）、unhealthy（已触发）、no_alarm_rule（未设置告警规则）
    * dimensions  资源的维度信息
    * tags  资源的tag信息,格式为key/value的json字符串,样例为\"{\\\"sss\\\":\\\"aaa\\\"}\"
    * enterpriseProjectId  企业项目ID
    * eventStatus  事件告警状态，取值为health（告警中）、unhealthy（已触发）、no_alarm_rule（未设置告警规则）
    * resourceName  资源名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'dimensions' => null,
        'tags' => null,
        'enterpriseProjectId' => null,
        'eventStatus' => null,
        'resourceName' => null
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
    * status  指标告警状态，取值为health（告警中）、unhealthy（已触发）、no_alarm_rule（未设置告警规则）
    * dimensions  资源的维度信息
    * tags  资源的tag信息,格式为key/value的json字符串,样例为\"{\\\"sss\\\":\\\"aaa\\\"}\"
    * enterpriseProjectId  企业项目ID
    * eventStatus  事件告警状态，取值为health（告警中）、unhealthy（已触发）、no_alarm_rule（未设置告警规则）
    * resourceName  资源名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'dimensions' => 'dimensions',
            'tags' => 'tags',
            'enterpriseProjectId' => 'enterprise_project_id',
            'eventStatus' => 'event_status',
            'resourceName' => 'resource_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  指标告警状态，取值为health（告警中）、unhealthy（已触发）、no_alarm_rule（未设置告警规则）
    * dimensions  资源的维度信息
    * tags  资源的tag信息,格式为key/value的json字符串,样例为\"{\\\"sss\\\":\\\"aaa\\\"}\"
    * enterpriseProjectId  企业项目ID
    * eventStatus  事件告警状态，取值为health（告警中）、unhealthy（已触发）、no_alarm_rule（未设置告警规则）
    * resourceName  资源名称
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'dimensions' => 'setDimensions',
            'tags' => 'setTags',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'eventStatus' => 'setEventStatus',
            'resourceName' => 'setResourceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  指标告警状态，取值为health（告警中）、unhealthy（已触发）、no_alarm_rule（未设置告警规则）
    * dimensions  资源的维度信息
    * tags  资源的tag信息,格式为key/value的json字符串,样例为\"{\\\"sss\\\":\\\"aaa\\\"}\"
    * enterpriseProjectId  企业项目ID
    * eventStatus  事件告警状态，取值为health（告警中）、unhealthy（已触发）、no_alarm_rule（未设置告警规则）
    * resourceName  资源名称
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'dimensions' => 'getDimensions',
            'tags' => 'getTags',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'eventStatus' => 'getEventStatus',
            'resourceName' => 'getResourceName'
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
    const STATUS_HEALTH = 'health';
    const STATUS_UNHEALTHY = 'unhealthy';
    const STATUS_NO_ALARM_RULE = 'no_alarm_rule';
    const EVENT_STATUS_HEALTH = 'health';
    const EVENT_STATUS_UNHEALTHY = 'unhealthy';
    const EVENT_STATUS_NO_ALARM_RULE = 'no_alarm_rule';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_HEALTH,
            self::STATUS_UNHEALTHY,
            self::STATUS_NO_ALARM_RULE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEventStatusAllowableValues()
    {
        return [
            self::EVENT_STATUS_HEALTH,
            self::EVENT_STATUS_UNHEALTHY,
            self::EVENT_STATUS_NO_ALARM_RULE,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['eventStatus'] = isset($data['eventStatus']) ? $data['eventStatus'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['dimensions'] === null) {
            $invalidProperties[] = "'dimensions' can't be null";
        }
            if (!is_null($this->container['tags']) && (mb_strlen($this->container['tags']) > 10240)) {
                $invalidProperties[] = "invalid value for 'tags', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['tags']) && (mb_strlen($this->container['tags']) < 0)) {
                $invalidProperties[] = "invalid value for 'tags', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 128)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getEventStatusAllowableValues();
                if (!is_null($this->container['eventStatus']) && !in_array($this->container['eventStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'eventStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be bigger than or equal to 0.";
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
    * Gets status
    *  指标告警状态，取值为health（告警中）、unhealthy（已触发）、no_alarm_rule（未设置告警规则）
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 指标告警状态，取值为health（告警中）、unhealthy（已触发）、no_alarm_rule（未设置告警规则）
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets dimensions
    *  资源的维度信息
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\ResourceDimension[]
    */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
    * Sets dimensions
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\ResourceDimension[] $dimensions 资源的维度信息
    *
    * @return $this
    */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;
        return $this;
    }

    /**
    * Gets tags
    *  资源的tag信息,格式为key/value的json字符串,样例为\"{\\\"sss\\\":\\\"aaa\\\"}\"
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags 资源的tag信息,格式为key/value的json字符串,样例为\"{\\\"sss\\\":\\\"aaa\\\"}\"
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets eventStatus
    *  事件告警状态，取值为health（告警中）、unhealthy（已触发）、no_alarm_rule（未设置告警规则）
    *
    * @return string|null
    */
    public function getEventStatus()
    {
        return $this->container['eventStatus'];
    }

    /**
    * Sets eventStatus
    *
    * @param string|null $eventStatus 事件告警状态，取值为health（告警中）、unhealthy（已触发）、no_alarm_rule（未设置告警规则）
    *
    * @return $this
    */
    public function setEventStatus($eventStatus)
    {
        $this->container['eventStatus'] = $eventStatus;
        return $this;
    }

    /**
    * Gets resourceName
    *  资源名称
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 资源名称
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
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

