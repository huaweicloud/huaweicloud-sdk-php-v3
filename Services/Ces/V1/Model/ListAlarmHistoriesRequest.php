<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAlarmHistoriesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAlarmHistoriesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  服务提供的资源分组功能，创建的资源分组ID，如：rg1603107497873DK4O2pXbn。
    * alarmId  告警规则ID。如：al1603088932912v98rGl1al。
    * alarmName  告警规则名称，如alarm-test01。
    * alarmStatus  告警历史的状态，取值为ok，alarm，insufficient_data； ok为正常，alarm为告警，insufficient_data为数据不足。
    * alarmLevel  告警历史的告警级别，值为1,2,3,4；1为紧急，2为重要，3为次要，4为提示。
    * namespace  告警资源对应的命名空间，如ECS服务的资源命名空间为：SYS.ECS；各服务命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * from  查询告警历史的起始时间，UNIX时间戳，单位毫秒，如：1602501480905；from，to如果不进行赋值，则默认to是当前时间，from是当前时间减7天的时间戳。
    * to  查询告警历史的截止时间，UNIX时间戳，单位毫秒。from必须小于等于to，如：1603106280905；from，to如果不进行赋值，则默认to是当前时间，from是当前时间减7天的时间戳。
    * start  分页起始值，类型为integer，默认值为0。
    * limit  单次查询的条数限制，取值范围(0,100]，默认值为100， 用于限制结果数据条数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'alarmId' => 'string',
            'alarmName' => 'string',
            'alarmStatus' => 'string',
            'alarmLevel' => 'string',
            'namespace' => 'string',
            'from' => 'string',
            'to' => 'string',
            'start' => 'string',
            'limit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  服务提供的资源分组功能，创建的资源分组ID，如：rg1603107497873DK4O2pXbn。
    * alarmId  告警规则ID。如：al1603088932912v98rGl1al。
    * alarmName  告警规则名称，如alarm-test01。
    * alarmStatus  告警历史的状态，取值为ok，alarm，insufficient_data； ok为正常，alarm为告警，insufficient_data为数据不足。
    * alarmLevel  告警历史的告警级别，值为1,2,3,4；1为紧急，2为重要，3为次要，4为提示。
    * namespace  告警资源对应的命名空间，如ECS服务的资源命名空间为：SYS.ECS；各服务命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * from  查询告警历史的起始时间，UNIX时间戳，单位毫秒，如：1602501480905；from，to如果不进行赋值，则默认to是当前时间，from是当前时间减7天的时间戳。
    * to  查询告警历史的截止时间，UNIX时间戳，单位毫秒。from必须小于等于to，如：1603106280905；from，to如果不进行赋值，则默认to是当前时间，from是当前时间减7天的时间戳。
    * start  分页起始值，类型为integer，默认值为0。
    * limit  单次查询的条数限制，取值范围(0,100]，默认值为100， 用于限制结果数据条数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'alarmId' => null,
        'alarmName' => null,
        'alarmStatus' => null,
        'alarmLevel' => null,
        'namespace' => null,
        'from' => null,
        'to' => null,
        'start' => null,
        'limit' => null
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
    * groupId  服务提供的资源分组功能，创建的资源分组ID，如：rg1603107497873DK4O2pXbn。
    * alarmId  告警规则ID。如：al1603088932912v98rGl1al。
    * alarmName  告警规则名称，如alarm-test01。
    * alarmStatus  告警历史的状态，取值为ok，alarm，insufficient_data； ok为正常，alarm为告警，insufficient_data为数据不足。
    * alarmLevel  告警历史的告警级别，值为1,2,3,4；1为紧急，2为重要，3为次要，4为提示。
    * namespace  告警资源对应的命名空间，如ECS服务的资源命名空间为：SYS.ECS；各服务命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * from  查询告警历史的起始时间，UNIX时间戳，单位毫秒，如：1602501480905；from，to如果不进行赋值，则默认to是当前时间，from是当前时间减7天的时间戳。
    * to  查询告警历史的截止时间，UNIX时间戳，单位毫秒。from必须小于等于to，如：1603106280905；from，to如果不进行赋值，则默认to是当前时间，from是当前时间减7天的时间戳。
    * start  分页起始值，类型为integer，默认值为0。
    * limit  单次查询的条数限制，取值范围(0,100]，默认值为100， 用于限制结果数据条数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'alarmId' => 'alarm_id',
            'alarmName' => 'alarm_name',
            'alarmStatus' => 'alarm_status',
            'alarmLevel' => 'alarm_level',
            'namespace' => 'namespace',
            'from' => 'from',
            'to' => 'to',
            'start' => 'start',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  服务提供的资源分组功能，创建的资源分组ID，如：rg1603107497873DK4O2pXbn。
    * alarmId  告警规则ID。如：al1603088932912v98rGl1al。
    * alarmName  告警规则名称，如alarm-test01。
    * alarmStatus  告警历史的状态，取值为ok，alarm，insufficient_data； ok为正常，alarm为告警，insufficient_data为数据不足。
    * alarmLevel  告警历史的告警级别，值为1,2,3,4；1为紧急，2为重要，3为次要，4为提示。
    * namespace  告警资源对应的命名空间，如ECS服务的资源命名空间为：SYS.ECS；各服务命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * from  查询告警历史的起始时间，UNIX时间戳，单位毫秒，如：1602501480905；from，to如果不进行赋值，则默认to是当前时间，from是当前时间减7天的时间戳。
    * to  查询告警历史的截止时间，UNIX时间戳，单位毫秒。from必须小于等于to，如：1603106280905；from，to如果不进行赋值，则默认to是当前时间，from是当前时间减7天的时间戳。
    * start  分页起始值，类型为integer，默认值为0。
    * limit  单次查询的条数限制，取值范围(0,100]，默认值为100， 用于限制结果数据条数。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'alarmId' => 'setAlarmId',
            'alarmName' => 'setAlarmName',
            'alarmStatus' => 'setAlarmStatus',
            'alarmLevel' => 'setAlarmLevel',
            'namespace' => 'setNamespace',
            'from' => 'setFrom',
            'to' => 'setTo',
            'start' => 'setStart',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  服务提供的资源分组功能，创建的资源分组ID，如：rg1603107497873DK4O2pXbn。
    * alarmId  告警规则ID。如：al1603088932912v98rGl1al。
    * alarmName  告警规则名称，如alarm-test01。
    * alarmStatus  告警历史的状态，取值为ok，alarm，insufficient_data； ok为正常，alarm为告警，insufficient_data为数据不足。
    * alarmLevel  告警历史的告警级别，值为1,2,3,4；1为紧急，2为重要，3为次要，4为提示。
    * namespace  告警资源对应的命名空间，如ECS服务的资源命名空间为：SYS.ECS；各服务命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * from  查询告警历史的起始时间，UNIX时间戳，单位毫秒，如：1602501480905；from，to如果不进行赋值，则默认to是当前时间，from是当前时间减7天的时间戳。
    * to  查询告警历史的截止时间，UNIX时间戳，单位毫秒。from必须小于等于to，如：1603106280905；from，to如果不进行赋值，则默认to是当前时间，from是当前时间减7天的时间戳。
    * start  分页起始值，类型为integer，默认值为0。
    * limit  单次查询的条数限制，取值范围(0,100]，默认值为100， 用于限制结果数据条数。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'alarmId' => 'getAlarmId',
            'alarmName' => 'getAlarmName',
            'alarmStatus' => 'getAlarmStatus',
            'alarmLevel' => 'getAlarmLevel',
            'namespace' => 'getNamespace',
            'from' => 'getFrom',
            'to' => 'getTo',
            'start' => 'getStart',
            'limit' => 'getLimit'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['alarmId'] = isset($data['alarmId']) ? $data['alarmId'] : null;
        $this->container['alarmName'] = isset($data['alarmName']) ? $data['alarmName'] : null;
        $this->container['alarmStatus'] = isset($data['alarmStatus']) ? $data['alarmStatus'] : null;
        $this->container['alarmLevel'] = isset($data['alarmLevel']) ? $data['alarmLevel'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['from']) && (mb_strlen($this->container['from']) > 13)) {
                $invalidProperties[] = "invalid value for 'from', the character length must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['from']) && (mb_strlen($this->container['from']) < 13)) {
                $invalidProperties[] = "invalid value for 'from', the character length must be bigger than or equal to 13.";
            }
            if (!is_null($this->container['to']) && (mb_strlen($this->container['to']) > 13)) {
                $invalidProperties[] = "invalid value for 'to', the character length must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['to']) && (mb_strlen($this->container['to']) < 13)) {
                $invalidProperties[] = "invalid value for 'to', the character length must be bigger than or equal to 13.";
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
    * Gets groupId
    *  服务提供的资源分组功能，创建的资源分组ID，如：rg1603107497873DK4O2pXbn。
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 服务提供的资源分组功能，创建的资源分组ID，如：rg1603107497873DK4O2pXbn。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets alarmId
    *  告警规则ID。如：al1603088932912v98rGl1al。
    *
    * @return string|null
    */
    public function getAlarmId()
    {
        return $this->container['alarmId'];
    }

    /**
    * Sets alarmId
    *
    * @param string|null $alarmId 告警规则ID。如：al1603088932912v98rGl1al。
    *
    * @return $this
    */
    public function setAlarmId($alarmId)
    {
        $this->container['alarmId'] = $alarmId;
        return $this;
    }

    /**
    * Gets alarmName
    *  告警规则名称，如alarm-test01。
    *
    * @return string|null
    */
    public function getAlarmName()
    {
        return $this->container['alarmName'];
    }

    /**
    * Sets alarmName
    *
    * @param string|null $alarmName 告警规则名称，如alarm-test01。
    *
    * @return $this
    */
    public function setAlarmName($alarmName)
    {
        $this->container['alarmName'] = $alarmName;
        return $this;
    }

    /**
    * Gets alarmStatus
    *  告警历史的状态，取值为ok，alarm，insufficient_data； ok为正常，alarm为告警，insufficient_data为数据不足。
    *
    * @return string|null
    */
    public function getAlarmStatus()
    {
        return $this->container['alarmStatus'];
    }

    /**
    * Sets alarmStatus
    *
    * @param string|null $alarmStatus 告警历史的状态，取值为ok，alarm，insufficient_data； ok为正常，alarm为告警，insufficient_data为数据不足。
    *
    * @return $this
    */
    public function setAlarmStatus($alarmStatus)
    {
        $this->container['alarmStatus'] = $alarmStatus;
        return $this;
    }

    /**
    * Gets alarmLevel
    *  告警历史的告警级别，值为1,2,3,4；1为紧急，2为重要，3为次要，4为提示。
    *
    * @return string|null
    */
    public function getAlarmLevel()
    {
        return $this->container['alarmLevel'];
    }

    /**
    * Sets alarmLevel
    *
    * @param string|null $alarmLevel 告警历史的告警级别，值为1,2,3,4；1为紧急，2为重要，3为次要，4为提示。
    *
    * @return $this
    */
    public function setAlarmLevel($alarmLevel)
    {
        $this->container['alarmLevel'] = $alarmLevel;
        return $this;
    }

    /**
    * Gets namespace
    *  告警资源对应的命名空间，如ECS服务的资源命名空间为：SYS.ECS；各服务命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 告警资源对应的命名空间，如ECS服务的资源命名空间为：SYS.ECS；各服务命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets from
    *  查询告警历史的起始时间，UNIX时间戳，单位毫秒，如：1602501480905；from，to如果不进行赋值，则默认to是当前时间，from是当前时间减7天的时间戳。
    *
    * @return string|null
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param string|null $from 查询告警历史的起始时间，UNIX时间戳，单位毫秒，如：1602501480905；from，to如果不进行赋值，则默认to是当前时间，from是当前时间减7天的时间戳。
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets to
    *  查询告警历史的截止时间，UNIX时间戳，单位毫秒。from必须小于等于to，如：1603106280905；from，to如果不进行赋值，则默认to是当前时间，from是当前时间减7天的时间戳。
    *
    * @return string|null
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param string|null $to 查询告警历史的截止时间，UNIX时间戳，单位毫秒。from必须小于等于to，如：1603106280905；from，to如果不进行赋值，则默认to是当前时间，from是当前时间减7天的时间戳。
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets start
    *  分页起始值，类型为integer，默认值为0。
    *
    * @return string|null
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param string|null $start 分页起始值，类型为integer，默认值为0。
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets limit
    *  单次查询的条数限制，取值范围(0,100]，默认值为100， 用于限制结果数据条数。
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 单次查询的条数限制，取值范围(0,100]，默认值为100， 用于限制结果数据条数。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

