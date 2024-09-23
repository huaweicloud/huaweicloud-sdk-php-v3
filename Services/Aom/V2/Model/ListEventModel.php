<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEventModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEventModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startsAt  事件或者告警产生的时间，CST毫秒级时间戳。
    * endsAt  事件或者告警清除的时间，CST毫秒级时间戳，为0时表示未删除。
    * timeout  告警自动清除时间。毫秒数，例如一分钟则填写为60000。默认清除时间为3天,对应数字为 4320 * 1000（即：3天 * 24小时 * 60分钟 * 1000毫秒）。
    * metadata  事件或者告警的详细信息，为键值对形式。必须字段为：  - event_name：事件或者告警名称,类型为String；  - event_severity：事件级别枚举值。类型为String，四种类型 \"Critical\", \"Major\", \"Minor\", \"Info\"；  - event_type：事件类别枚举值。类型为String，event为告警事件，alarm为普通告警；  - resource_provider：事件对应云服务名称。类型为String；  - resource_type：事件对应资源类型。类型为String；  - resource_id：事件对应资源信息。类型为String。
    * annotations  事件或者告警附加字段，可以为空。
    * attachRule  事件或者告警预留字段，为空。
    * id  事件或者告警id，系统会自动生成，上报无须填写该字段。
    * eventSn  告警流水号。
    * arrivesAt  事件到达系统时间，CST毫秒级时间戳。
    * enterpriseProjectId  事件或告警所属企业项目id。
    * policy  开放告警策略
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startsAt' => 'int',
            'endsAt' => 'int',
            'timeout' => 'int',
            'metadata' => 'map[string,string]',
            'annotations' => 'map[string,object]',
            'attachRule' => 'map[string,object]',
            'id' => 'string',
            'eventSn' => 'string',
            'arrivesAt' => 'int',
            'enterpriseProjectId' => 'string',
            'policy' => 'map[string,object]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startsAt  事件或者告警产生的时间，CST毫秒级时间戳。
    * endsAt  事件或者告警清除的时间，CST毫秒级时间戳，为0时表示未删除。
    * timeout  告警自动清除时间。毫秒数，例如一分钟则填写为60000。默认清除时间为3天,对应数字为 4320 * 1000（即：3天 * 24小时 * 60分钟 * 1000毫秒）。
    * metadata  事件或者告警的详细信息，为键值对形式。必须字段为：  - event_name：事件或者告警名称,类型为String；  - event_severity：事件级别枚举值。类型为String，四种类型 \"Critical\", \"Major\", \"Minor\", \"Info\"；  - event_type：事件类别枚举值。类型为String，event为告警事件，alarm为普通告警；  - resource_provider：事件对应云服务名称。类型为String；  - resource_type：事件对应资源类型。类型为String；  - resource_id：事件对应资源信息。类型为String。
    * annotations  事件或者告警附加字段，可以为空。
    * attachRule  事件或者告警预留字段，为空。
    * id  事件或者告警id，系统会自动生成，上报无须填写该字段。
    * eventSn  告警流水号。
    * arrivesAt  事件到达系统时间，CST毫秒级时间戳。
    * enterpriseProjectId  事件或告警所属企业项目id。
    * policy  开放告警策略
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startsAt' => 'int64',
        'endsAt' => 'int64',
        'timeout' => 'int64',
        'metadata' => null,
        'annotations' => null,
        'attachRule' => null,
        'id' => null,
        'eventSn' => null,
        'arrivesAt' => 'int64',
        'enterpriseProjectId' => null,
        'policy' => null
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
    * startsAt  事件或者告警产生的时间，CST毫秒级时间戳。
    * endsAt  事件或者告警清除的时间，CST毫秒级时间戳，为0时表示未删除。
    * timeout  告警自动清除时间。毫秒数，例如一分钟则填写为60000。默认清除时间为3天,对应数字为 4320 * 1000（即：3天 * 24小时 * 60分钟 * 1000毫秒）。
    * metadata  事件或者告警的详细信息，为键值对形式。必须字段为：  - event_name：事件或者告警名称,类型为String；  - event_severity：事件级别枚举值。类型为String，四种类型 \"Critical\", \"Major\", \"Minor\", \"Info\"；  - event_type：事件类别枚举值。类型为String，event为告警事件，alarm为普通告警；  - resource_provider：事件对应云服务名称。类型为String；  - resource_type：事件对应资源类型。类型为String；  - resource_id：事件对应资源信息。类型为String。
    * annotations  事件或者告警附加字段，可以为空。
    * attachRule  事件或者告警预留字段，为空。
    * id  事件或者告警id，系统会自动生成，上报无须填写该字段。
    * eventSn  告警流水号。
    * arrivesAt  事件到达系统时间，CST毫秒级时间戳。
    * enterpriseProjectId  事件或告警所属企业项目id。
    * policy  开放告警策略
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startsAt' => 'starts_at',
            'endsAt' => 'ends_at',
            'timeout' => 'timeout',
            'metadata' => 'metadata',
            'annotations' => 'annotations',
            'attachRule' => 'attach_rule',
            'id' => 'id',
            'eventSn' => 'event_sn',
            'arrivesAt' => 'arrives_at',
            'enterpriseProjectId' => 'enterprise_project_id',
            'policy' => 'policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startsAt  事件或者告警产生的时间，CST毫秒级时间戳。
    * endsAt  事件或者告警清除的时间，CST毫秒级时间戳，为0时表示未删除。
    * timeout  告警自动清除时间。毫秒数，例如一分钟则填写为60000。默认清除时间为3天,对应数字为 4320 * 1000（即：3天 * 24小时 * 60分钟 * 1000毫秒）。
    * metadata  事件或者告警的详细信息，为键值对形式。必须字段为：  - event_name：事件或者告警名称,类型为String；  - event_severity：事件级别枚举值。类型为String，四种类型 \"Critical\", \"Major\", \"Minor\", \"Info\"；  - event_type：事件类别枚举值。类型为String，event为告警事件，alarm为普通告警；  - resource_provider：事件对应云服务名称。类型为String；  - resource_type：事件对应资源类型。类型为String；  - resource_id：事件对应资源信息。类型为String。
    * annotations  事件或者告警附加字段，可以为空。
    * attachRule  事件或者告警预留字段，为空。
    * id  事件或者告警id，系统会自动生成，上报无须填写该字段。
    * eventSn  告警流水号。
    * arrivesAt  事件到达系统时间，CST毫秒级时间戳。
    * enterpriseProjectId  事件或告警所属企业项目id。
    * policy  开放告警策略
    *
    * @var string[]
    */
    protected static $setters = [
            'startsAt' => 'setStartsAt',
            'endsAt' => 'setEndsAt',
            'timeout' => 'setTimeout',
            'metadata' => 'setMetadata',
            'annotations' => 'setAnnotations',
            'attachRule' => 'setAttachRule',
            'id' => 'setId',
            'eventSn' => 'setEventSn',
            'arrivesAt' => 'setArrivesAt',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'policy' => 'setPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startsAt  事件或者告警产生的时间，CST毫秒级时间戳。
    * endsAt  事件或者告警清除的时间，CST毫秒级时间戳，为0时表示未删除。
    * timeout  告警自动清除时间。毫秒数，例如一分钟则填写为60000。默认清除时间为3天,对应数字为 4320 * 1000（即：3天 * 24小时 * 60分钟 * 1000毫秒）。
    * metadata  事件或者告警的详细信息，为键值对形式。必须字段为：  - event_name：事件或者告警名称,类型为String；  - event_severity：事件级别枚举值。类型为String，四种类型 \"Critical\", \"Major\", \"Minor\", \"Info\"；  - event_type：事件类别枚举值。类型为String，event为告警事件，alarm为普通告警；  - resource_provider：事件对应云服务名称。类型为String；  - resource_type：事件对应资源类型。类型为String；  - resource_id：事件对应资源信息。类型为String。
    * annotations  事件或者告警附加字段，可以为空。
    * attachRule  事件或者告警预留字段，为空。
    * id  事件或者告警id，系统会自动生成，上报无须填写该字段。
    * eventSn  告警流水号。
    * arrivesAt  事件到达系统时间，CST毫秒级时间戳。
    * enterpriseProjectId  事件或告警所属企业项目id。
    * policy  开放告警策略
    *
    * @var string[]
    */
    protected static $getters = [
            'startsAt' => 'getStartsAt',
            'endsAt' => 'getEndsAt',
            'timeout' => 'getTimeout',
            'metadata' => 'getMetadata',
            'annotations' => 'getAnnotations',
            'attachRule' => 'getAttachRule',
            'id' => 'getId',
            'eventSn' => 'getEventSn',
            'arrivesAt' => 'getArrivesAt',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'policy' => 'getPolicy'
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
        $this->container['startsAt'] = isset($data['startsAt']) ? $data['startsAt'] : null;
        $this->container['endsAt'] = isset($data['endsAt']) ? $data['endsAt'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['annotations'] = isset($data['annotations']) ? $data['annotations'] : null;
        $this->container['attachRule'] = isset($data['attachRule']) ? $data['attachRule'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['eventSn'] = isset($data['eventSn']) ? $data['eventSn'] : null;
        $this->container['arrivesAt'] = isset($data['arrivesAt']) ? $data['arrivesAt'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['policy'] = isset($data['policy']) ? $data['policy'] : null;
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
    * Gets startsAt
    *  事件或者告警产生的时间，CST毫秒级时间戳。
    *
    * @return int|null
    */
    public function getStartsAt()
    {
        return $this->container['startsAt'];
    }

    /**
    * Sets startsAt
    *
    * @param int|null $startsAt 事件或者告警产生的时间，CST毫秒级时间戳。
    *
    * @return $this
    */
    public function setStartsAt($startsAt)
    {
        $this->container['startsAt'] = $startsAt;
        return $this;
    }

    /**
    * Gets endsAt
    *  事件或者告警清除的时间，CST毫秒级时间戳，为0时表示未删除。
    *
    * @return int|null
    */
    public function getEndsAt()
    {
        return $this->container['endsAt'];
    }

    /**
    * Sets endsAt
    *
    * @param int|null $endsAt 事件或者告警清除的时间，CST毫秒级时间戳，为0时表示未删除。
    *
    * @return $this
    */
    public function setEndsAt($endsAt)
    {
        $this->container['endsAt'] = $endsAt;
        return $this;
    }

    /**
    * Gets timeout
    *  告警自动清除时间。毫秒数，例如一分钟则填写为60000。默认清除时间为3天,对应数字为 4320 * 1000（即：3天 * 24小时 * 60分钟 * 1000毫秒）。
    *
    * @return int|null
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int|null $timeout 告警自动清除时间。毫秒数，例如一分钟则填写为60000。默认清除时间为3天,对应数字为 4320 * 1000（即：3天 * 24小时 * 60分钟 * 1000毫秒）。
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets metadata
    *  事件或者告警的详细信息，为键值对形式。必须字段为：  - event_name：事件或者告警名称,类型为String；  - event_severity：事件级别枚举值。类型为String，四种类型 \"Critical\", \"Major\", \"Minor\", \"Info\"；  - event_type：事件类别枚举值。类型为String，event为告警事件，alarm为普通告警；  - resource_provider：事件对应云服务名称。类型为String；  - resource_type：事件对应资源类型。类型为String；  - resource_id：事件对应资源信息。类型为String。
    *
    * @return map[string,string]|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param map[string,string]|null $metadata 事件或者告警的详细信息，为键值对形式。必须字段为：  - event_name：事件或者告警名称,类型为String；  - event_severity：事件级别枚举值。类型为String，四种类型 \"Critical\", \"Major\", \"Minor\", \"Info\"；  - event_type：事件类别枚举值。类型为String，event为告警事件，alarm为普通告警；  - resource_provider：事件对应云服务名称。类型为String；  - resource_type：事件对应资源类型。类型为String；  - resource_id：事件对应资源信息。类型为String。
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets annotations
    *  事件或者告警附加字段，可以为空。
    *
    * @return map[string,object]|null
    */
    public function getAnnotations()
    {
        return $this->container['annotations'];
    }

    /**
    * Sets annotations
    *
    * @param map[string,object]|null $annotations 事件或者告警附加字段，可以为空。
    *
    * @return $this
    */
    public function setAnnotations($annotations)
    {
        $this->container['annotations'] = $annotations;
        return $this;
    }

    /**
    * Gets attachRule
    *  事件或者告警预留字段，为空。
    *
    * @return map[string,object]|null
    */
    public function getAttachRule()
    {
        return $this->container['attachRule'];
    }

    /**
    * Sets attachRule
    *
    * @param map[string,object]|null $attachRule 事件或者告警预留字段，为空。
    *
    * @return $this
    */
    public function setAttachRule($attachRule)
    {
        $this->container['attachRule'] = $attachRule;
        return $this;
    }

    /**
    * Gets id
    *  事件或者告警id，系统会自动生成，上报无须填写该字段。
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
    * @param string|null $id 事件或者告警id，系统会自动生成，上报无须填写该字段。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets eventSn
    *  告警流水号。
    *
    * @return string|null
    */
    public function getEventSn()
    {
        return $this->container['eventSn'];
    }

    /**
    * Sets eventSn
    *
    * @param string|null $eventSn 告警流水号。
    *
    * @return $this
    */
    public function setEventSn($eventSn)
    {
        $this->container['eventSn'] = $eventSn;
        return $this;
    }

    /**
    * Gets arrivesAt
    *  事件到达系统时间，CST毫秒级时间戳。
    *
    * @return int|null
    */
    public function getArrivesAt()
    {
        return $this->container['arrivesAt'];
    }

    /**
    * Sets arrivesAt
    *
    * @param int|null $arrivesAt 事件到达系统时间，CST毫秒级时间戳。
    *
    * @return $this
    */
    public function setArrivesAt($arrivesAt)
    {
        $this->container['arrivesAt'] = $arrivesAt;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  事件或告警所属企业项目id。
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
    * @param string|null $enterpriseProjectId 事件或告警所属企业项目id。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets policy
    *  开放告警策略
    *
    * @return map[string,object]|null
    */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
    * Sets policy
    *
    * @param map[string,object]|null $policy 开放告警策略
    *
    * @return $this
    */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;
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

