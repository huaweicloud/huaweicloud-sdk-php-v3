<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetricForAlarm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetricForAlarm';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * namespace  服务指标命名空间，格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符总长度最短为3，最大为32。说明： 当alarm_type为（EVENT.SYS| EVENT.CUSTOM）时允许为空；如：弹性云服务器的命名空间为SYS.ECS，文档数据库的命名空间为SYS.DDS，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * metricName  资源的监控指标名称，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符长度最短为1，最大为64；如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * dimensions  指标维度，目前最大可添加4个维度；如果使用资源分组ID：resource_group_id创建告警规则，dimensions可为空，alarm_type值为RESOURCE_GROUP；如果不使用resource_group_id，则dimensions值必填。
    * resourceGroupId  创建告警规则时选择的资源分组ID；如果根据资源分组创建告警规则，则resource_group_id不能为空，dimensions中至少指定一个维度信息，name不能为空，且alarm_type值为RESOURCE_GROUP；如：rg1603786526428bWbVmk4rP。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'namespace' => 'string',
            'metricName' => 'string',
            'dimensions' => '\HuaweiCloud\SDK\Ces\V1\Model\MetricsDimension[]',
            'resourceGroupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * namespace  服务指标命名空间，格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符总长度最短为3，最大为32。说明： 当alarm_type为（EVENT.SYS| EVENT.CUSTOM）时允许为空；如：弹性云服务器的命名空间为SYS.ECS，文档数据库的命名空间为SYS.DDS，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * metricName  资源的监控指标名称，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符长度最短为1，最大为64；如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * dimensions  指标维度，目前最大可添加4个维度；如果使用资源分组ID：resource_group_id创建告警规则，dimensions可为空，alarm_type值为RESOURCE_GROUP；如果不使用resource_group_id，则dimensions值必填。
    * resourceGroupId  创建告警规则时选择的资源分组ID；如果根据资源分组创建告警规则，则resource_group_id不能为空，dimensions中至少指定一个维度信息，name不能为空，且alarm_type值为RESOURCE_GROUP；如：rg1603786526428bWbVmk4rP。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'namespace' => null,
        'metricName' => null,
        'dimensions' => null,
        'resourceGroupId' => null
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
    * namespace  服务指标命名空间，格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符总长度最短为3，最大为32。说明： 当alarm_type为（EVENT.SYS| EVENT.CUSTOM）时允许为空；如：弹性云服务器的命名空间为SYS.ECS，文档数据库的命名空间为SYS.DDS，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * metricName  资源的监控指标名称，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符长度最短为1，最大为64；如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * dimensions  指标维度，目前最大可添加4个维度；如果使用资源分组ID：resource_group_id创建告警规则，dimensions可为空，alarm_type值为RESOURCE_GROUP；如果不使用resource_group_id，则dimensions值必填。
    * resourceGroupId  创建告警规则时选择的资源分组ID；如果根据资源分组创建告警规则，则resource_group_id不能为空，dimensions中至少指定一个维度信息，name不能为空，且alarm_type值为RESOURCE_GROUP；如：rg1603786526428bWbVmk4rP。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'namespace' => 'namespace',
            'metricName' => 'metric_name',
            'dimensions' => 'dimensions',
            'resourceGroupId' => 'resource_group_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * namespace  服务指标命名空间，格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符总长度最短为3，最大为32。说明： 当alarm_type为（EVENT.SYS| EVENT.CUSTOM）时允许为空；如：弹性云服务器的命名空间为SYS.ECS，文档数据库的命名空间为SYS.DDS，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * metricName  资源的监控指标名称，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符长度最短为1，最大为64；如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * dimensions  指标维度，目前最大可添加4个维度；如果使用资源分组ID：resource_group_id创建告警规则，dimensions可为空，alarm_type值为RESOURCE_GROUP；如果不使用resource_group_id，则dimensions值必填。
    * resourceGroupId  创建告警规则时选择的资源分组ID；如果根据资源分组创建告警规则，则resource_group_id不能为空，dimensions中至少指定一个维度信息，name不能为空，且alarm_type值为RESOURCE_GROUP；如：rg1603786526428bWbVmk4rP。
    *
    * @var string[]
    */
    protected static $setters = [
            'namespace' => 'setNamespace',
            'metricName' => 'setMetricName',
            'dimensions' => 'setDimensions',
            'resourceGroupId' => 'setResourceGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * namespace  服务指标命名空间，格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符总长度最短为3，最大为32。说明： 当alarm_type为（EVENT.SYS| EVENT.CUSTOM）时允许为空；如：弹性云服务器的命名空间为SYS.ECS，文档数据库的命名空间为SYS.DDS，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * metricName  资源的监控指标名称，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符长度最短为1，最大为64；如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    * dimensions  指标维度，目前最大可添加4个维度；如果使用资源分组ID：resource_group_id创建告警规则，dimensions可为空，alarm_type值为RESOURCE_GROUP；如果不使用resource_group_id，则dimensions值必填。
    * resourceGroupId  创建告警规则时选择的资源分组ID；如果根据资源分组创建告警规则，则resource_group_id不能为空，dimensions中至少指定一个维度信息，name不能为空，且alarm_type值为RESOURCE_GROUP；如：rg1603786526428bWbVmk4rP。
    *
    * @var string[]
    */
    protected static $getters = [
            'namespace' => 'getNamespace',
            'metricName' => 'getMetricName',
            'dimensions' => 'getDimensions',
            'resourceGroupId' => 'getResourceGroupId'
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
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['metricName'] = isset($data['metricName']) ? $data['metricName'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['resourceGroupId'] = isset($data['resourceGroupId']) ? $data['resourceGroupId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
        if ($this->container['metricName'] === null) {
            $invalidProperties[] = "'metricName' can't be null";
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
    * Gets namespace
    *  服务指标命名空间，格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符总长度最短为3，最大为32。说明： 当alarm_type为（EVENT.SYS| EVENT.CUSTOM）时允许为空；如：弹性云服务器的命名空间为SYS.ECS，文档数据库的命名空间为SYS.DDS，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    *
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace 服务指标命名空间，格式为service.item；service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符总长度最短为3，最大为32。说明： 当alarm_type为（EVENT.SYS| EVENT.CUSTOM）时允许为空；如：弹性云服务器的命名空间为SYS.ECS，文档数据库的命名空间为SYS.DDS，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets metricName
    *  资源的监控指标名称，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符长度最短为1，最大为64；如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    *
    * @return string
    */
    public function getMetricName()
    {
        return $this->container['metricName'];
    }

    /**
    * Sets metricName
    *
    * @param string $metricName 资源的监控指标名称，必须以字母开头，只能包含0-9/a-z/A-Z/_，字符长度最短为1，最大为64；如：弹性云服务器中的监控指标cpu_util，表示弹性服务器的CPU使用率；文档数据库中的指标mongo001_command_ps，表示command执行频率；各服务的指标名称可查看：“[服务指标名称](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”。
    *
    * @return $this
    */
    public function setMetricName($metricName)
    {
        $this->container['metricName'] = $metricName;
        return $this;
    }

    /**
    * Gets dimensions
    *  指标维度，目前最大可添加4个维度；如果使用资源分组ID：resource_group_id创建告警规则，dimensions可为空，alarm_type值为RESOURCE_GROUP；如果不使用resource_group_id，则dimensions值必填。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\MetricsDimension[]|null
    */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
    * Sets dimensions
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\MetricsDimension[]|null $dimensions 指标维度，目前最大可添加4个维度；如果使用资源分组ID：resource_group_id创建告警规则，dimensions可为空，alarm_type值为RESOURCE_GROUP；如果不使用resource_group_id，则dimensions值必填。
    *
    * @return $this
    */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;
        return $this;
    }

    /**
    * Gets resourceGroupId
    *  创建告警规则时选择的资源分组ID；如果根据资源分组创建告警规则，则resource_group_id不能为空，dimensions中至少指定一个维度信息，name不能为空，且alarm_type值为RESOURCE_GROUP；如：rg1603786526428bWbVmk4rP。
    *
    * @return string|null
    */
    public function getResourceGroupId()
    {
        return $this->container['resourceGroupId'];
    }

    /**
    * Sets resourceGroupId
    *
    * @param string|null $resourceGroupId 创建告警规则时选择的资源分组ID；如果根据资源分组创建告警规则，则resource_group_id不能为空，dimensions中至少指定一个维度信息，name不能为空，且alarm_type值为RESOURCE_GROUP；如：rg1603786526428bWbVmk4rP。
    *
    * @return $this
    */
    public function setResourceGroupId($resourceGroupId)
    {
        $this->container['resourceGroupId'] = $resourceGroupId;
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

