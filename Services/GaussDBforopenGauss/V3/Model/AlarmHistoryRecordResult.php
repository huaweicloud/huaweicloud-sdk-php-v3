<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmHistoryRecordResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmHistoryRecordResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmId  **参数解释**： 告警规则ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 告警规则名称。 **取值范围**： 不涉及。
    * status  **参数解释**： 告警记录的状态。 **取值范围**： - ok：正常。 - alarm：告警。 - invalid：已失效。
    * alarmType  **参数解释**： 告警规则类型。 **取值范围**： - EVENT.SYS：系统事件告警。 - EVENT.CUSTOM：自定义事件告警。 - DNSHealthCheck：DNS健康检查告警。 - RESOURCE_GROUP：资源分组告警。 - MULTI_INSTANCE：指定资源告警。
    * level  **参数解释**： 告警历史的告警级别。 **取值范围**： - 1：紧急。 - 2：重要。 - 3：次要。 - 4：提示。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 只能由英文字母、数字组成，且长度为36个字符。
    * instanceName  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * beginTime  **参数解释**： 告警开始时间。 **取值范围**： UNIX时间戳，单位毫秒，例如：1603131199000。
    * updateTime  **参数解释**： 告警规则的最后更新时间。 **取值范围**： UNIX时间戳，单位毫秒，例如：1603131199000。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmId' => 'string',
            'name' => 'string',
            'status' => 'string',
            'alarmType' => 'string',
            'level' => 'int',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'beginTime' => 'int',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmId  **参数解释**： 告警规则ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 告警规则名称。 **取值范围**： 不涉及。
    * status  **参数解释**： 告警记录的状态。 **取值范围**： - ok：正常。 - alarm：告警。 - invalid：已失效。
    * alarmType  **参数解释**： 告警规则类型。 **取值范围**： - EVENT.SYS：系统事件告警。 - EVENT.CUSTOM：自定义事件告警。 - DNSHealthCheck：DNS健康检查告警。 - RESOURCE_GROUP：资源分组告警。 - MULTI_INSTANCE：指定资源告警。
    * level  **参数解释**： 告警历史的告警级别。 **取值范围**： - 1：紧急。 - 2：重要。 - 3：次要。 - 4：提示。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 只能由英文字母、数字组成，且长度为36个字符。
    * instanceName  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * beginTime  **参数解释**： 告警开始时间。 **取值范围**： UNIX时间戳，单位毫秒，例如：1603131199000。
    * updateTime  **参数解释**： 告警规则的最后更新时间。 **取值范围**： UNIX时间戳，单位毫秒，例如：1603131199000。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmId' => null,
        'name' => null,
        'status' => null,
        'alarmType' => null,
        'level' => null,
        'instanceId' => null,
        'instanceName' => null,
        'beginTime' => 'int64',
        'updateTime' => 'int64'
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
    * alarmId  **参数解释**： 告警规则ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 告警规则名称。 **取值范围**： 不涉及。
    * status  **参数解释**： 告警记录的状态。 **取值范围**： - ok：正常。 - alarm：告警。 - invalid：已失效。
    * alarmType  **参数解释**： 告警规则类型。 **取值范围**： - EVENT.SYS：系统事件告警。 - EVENT.CUSTOM：自定义事件告警。 - DNSHealthCheck：DNS健康检查告警。 - RESOURCE_GROUP：资源分组告警。 - MULTI_INSTANCE：指定资源告警。
    * level  **参数解释**： 告警历史的告警级别。 **取值范围**： - 1：紧急。 - 2：重要。 - 3：次要。 - 4：提示。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 只能由英文字母、数字组成，且长度为36个字符。
    * instanceName  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * beginTime  **参数解释**： 告警开始时间。 **取值范围**： UNIX时间戳，单位毫秒，例如：1603131199000。
    * updateTime  **参数解释**： 告警规则的最后更新时间。 **取值范围**： UNIX时间戳，单位毫秒，例如：1603131199000。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmId' => 'alarm_id',
            'name' => 'name',
            'status' => 'status',
            'alarmType' => 'alarm_type',
            'level' => 'level',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'beginTime' => 'begin_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmId  **参数解释**： 告警规则ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 告警规则名称。 **取值范围**： 不涉及。
    * status  **参数解释**： 告警记录的状态。 **取值范围**： - ok：正常。 - alarm：告警。 - invalid：已失效。
    * alarmType  **参数解释**： 告警规则类型。 **取值范围**： - EVENT.SYS：系统事件告警。 - EVENT.CUSTOM：自定义事件告警。 - DNSHealthCheck：DNS健康检查告警。 - RESOURCE_GROUP：资源分组告警。 - MULTI_INSTANCE：指定资源告警。
    * level  **参数解释**： 告警历史的告警级别。 **取值范围**： - 1：紧急。 - 2：重要。 - 3：次要。 - 4：提示。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 只能由英文字母、数字组成，且长度为36个字符。
    * instanceName  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * beginTime  **参数解释**： 告警开始时间。 **取值范围**： UNIX时间戳，单位毫秒，例如：1603131199000。
    * updateTime  **参数解释**： 告警规则的最后更新时间。 **取值范围**： UNIX时间戳，单位毫秒，例如：1603131199000。
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmId' => 'setAlarmId',
            'name' => 'setName',
            'status' => 'setStatus',
            'alarmType' => 'setAlarmType',
            'level' => 'setLevel',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'beginTime' => 'setBeginTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmId  **参数解释**： 告警规则ID。 **取值范围**： 不涉及。
    * name  **参数解释**： 告警规则名称。 **取值范围**： 不涉及。
    * status  **参数解释**： 告警记录的状态。 **取值范围**： - ok：正常。 - alarm：告警。 - invalid：已失效。
    * alarmType  **参数解释**： 告警规则类型。 **取值范围**： - EVENT.SYS：系统事件告警。 - EVENT.CUSTOM：自定义事件告警。 - DNSHealthCheck：DNS健康检查告警。 - RESOURCE_GROUP：资源分组告警。 - MULTI_INSTANCE：指定资源告警。
    * level  **参数解释**： 告警历史的告警级别。 **取值范围**： - 1：紧急。 - 2：重要。 - 3：次要。 - 4：提示。
    * instanceId  **参数解释**： 实例ID。 **取值范围**： 只能由英文字母、数字组成，且长度为36个字符。
    * instanceName  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    * beginTime  **参数解释**： 告警开始时间。 **取值范围**： UNIX时间戳，单位毫秒，例如：1603131199000。
    * updateTime  **参数解释**： 告警规则的最后更新时间。 **取值范围**： UNIX时间戳，单位毫秒，例如：1603131199000。
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmId' => 'getAlarmId',
            'name' => 'getName',
            'status' => 'getStatus',
            'alarmType' => 'getAlarmType',
            'level' => 'getLevel',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'beginTime' => 'getBeginTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['alarmId'] = isset($data['alarmId']) ? $data['alarmId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['alarmType'] = isset($data['alarmType']) ? $data['alarmType'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['alarmId'] === null) {
            $invalidProperties[] = "'alarmId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['alarmType'] === null) {
            $invalidProperties[] = "'alarmType' can't be null";
        }
        if ($this->container['level'] === null) {
            $invalidProperties[] = "'level' can't be null";
        }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['instanceName'] === null) {
            $invalidProperties[] = "'instanceName' can't be null";
        }
        if ($this->container['beginTime'] === null) {
            $invalidProperties[] = "'beginTime' can't be null";
        }
        if ($this->container['updateTime'] === null) {
            $invalidProperties[] = "'updateTime' can't be null";
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
    * Gets alarmId
    *  **参数解释**： 告警规则ID。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getAlarmId()
    {
        return $this->container['alarmId'];
    }

    /**
    * Sets alarmId
    *
    * @param string $alarmId **参数解释**： 告警规则ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAlarmId($alarmId)
    {
        $this->container['alarmId'] = $alarmId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 告警规则名称。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释**： 告警规则名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 告警记录的状态。 **取值范围**： - ok：正常。 - alarm：告警。 - invalid：已失效。
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
    * @param string $status **参数解释**： 告警记录的状态。 **取值范围**： - ok：正常。 - alarm：告警。 - invalid：已失效。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets alarmType
    *  **参数解释**： 告警规则类型。 **取值范围**： - EVENT.SYS：系统事件告警。 - EVENT.CUSTOM：自定义事件告警。 - DNSHealthCheck：DNS健康检查告警。 - RESOURCE_GROUP：资源分组告警。 - MULTI_INSTANCE：指定资源告警。
    *
    * @return string
    */
    public function getAlarmType()
    {
        return $this->container['alarmType'];
    }

    /**
    * Sets alarmType
    *
    * @param string $alarmType **参数解释**： 告警规则类型。 **取值范围**： - EVENT.SYS：系统事件告警。 - EVENT.CUSTOM：自定义事件告警。 - DNSHealthCheck：DNS健康检查告警。 - RESOURCE_GROUP：资源分组告警。 - MULTI_INSTANCE：指定资源告警。
    *
    * @return $this
    */
    public function setAlarmType($alarmType)
    {
        $this->container['alarmType'] = $alarmType;
        return $this;
    }

    /**
    * Gets level
    *  **参数解释**： 告警历史的告警级别。 **取值范围**： - 1：紧急。 - 2：重要。 - 3：次要。 - 4：提示。
    *
    * @return int
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param int $level **参数解释**： 告警历史的告警级别。 **取值范围**： - 1：紧急。 - 2：重要。 - 3：次要。 - 4：提示。
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**： 实例ID。 **取值范围**： 只能由英文字母、数字组成，且长度为36个字符。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId **参数解释**： 实例ID。 **取值范围**： 只能由英文字母、数字组成，且长度为36个字符。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  **参数解释**： 实例名称。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string $instanceName **参数解释**： 实例名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets beginTime
    *  **参数解释**： 告警开始时间。 **取值范围**： UNIX时间戳，单位毫秒，例如：1603131199000。
    *
    * @return int
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param int $beginTime **参数解释**： 告警开始时间。 **取值范围**： UNIX时间戳，单位毫秒，例如：1603131199000。
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  **参数解释**： 告警规则的最后更新时间。 **取值范围**： UNIX时间戳，单位毫秒，例如：1603131199000。
    *
    * @return int
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int $updateTime **参数解释**： 告警规则的最后更新时间。 **取值范围**： UNIX时间戳，单位毫秒，例如：1603131199000。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

