<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CdmCreateClusterReqCluster implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CdmCreateClusterReq_cluster';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scheduleBootTime  定时开机的时间，CDM集群会在每天这个时间开机
    * isScheduleBootOff  选择是否启用定时开关机功能。定时开关机功能和自动关机功能不可同时开启
    * instances  节点列表，请参见instances参数说明
    * datastore  datastore
    * extendedProperties  extendedProperties
    * scheduleOffTime  定时关机的时间，定时关机时系统不会等待未完成的作业执行完成
    * vpcId  指定虚拟私有云ID，用于集群网络配置
    * name  集群名称
    * sysTags  企业项目信息，请参见•sys_tags参数说明
    * isAutoOff  选择是否启用自动关机功能，自动关机功能和定时开关机功能不可同时开启。如果选择自动关机，则当集群中无作业运行且无定时作业时，等待15分钟后集群将自动关机来帮您节约成本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scheduleBootTime' => 'string',
            'isScheduleBootOff' => 'bool',
            'instances' => '\HuaweiCloud\SDK\Cdm\V1\Model\Instance[]',
            'datastore' => '\HuaweiCloud\SDK\Cdm\V1\Model\Datastore',
            'extendedProperties' => '\HuaweiCloud\SDK\Cdm\V1\Model\ExtendedProperties',
            'scheduleOffTime' => 'string',
            'vpcId' => 'string',
            'name' => 'string',
            'sysTags' => '\HuaweiCloud\SDK\Cdm\V1\Model\SysTags[]',
            'isAutoOff' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scheduleBootTime  定时开机的时间，CDM集群会在每天这个时间开机
    * isScheduleBootOff  选择是否启用定时开关机功能。定时开关机功能和自动关机功能不可同时开启
    * instances  节点列表，请参见instances参数说明
    * datastore  datastore
    * extendedProperties  extendedProperties
    * scheduleOffTime  定时关机的时间，定时关机时系统不会等待未完成的作业执行完成
    * vpcId  指定虚拟私有云ID，用于集群网络配置
    * name  集群名称
    * sysTags  企业项目信息，请参见•sys_tags参数说明
    * isAutoOff  选择是否启用自动关机功能，自动关机功能和定时开关机功能不可同时开启。如果选择自动关机，则当集群中无作业运行且无定时作业时，等待15分钟后集群将自动关机来帮您节约成本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scheduleBootTime' => null,
        'isScheduleBootOff' => null,
        'instances' => null,
        'datastore' => null,
        'extendedProperties' => null,
        'scheduleOffTime' => null,
        'vpcId' => null,
        'name' => null,
        'sysTags' => null,
        'isAutoOff' => null
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
    * scheduleBootTime  定时开机的时间，CDM集群会在每天这个时间开机
    * isScheduleBootOff  选择是否启用定时开关机功能。定时开关机功能和自动关机功能不可同时开启
    * instances  节点列表，请参见instances参数说明
    * datastore  datastore
    * extendedProperties  extendedProperties
    * scheduleOffTime  定时关机的时间，定时关机时系统不会等待未完成的作业执行完成
    * vpcId  指定虚拟私有云ID，用于集群网络配置
    * name  集群名称
    * sysTags  企业项目信息，请参见•sys_tags参数说明
    * isAutoOff  选择是否启用自动关机功能，自动关机功能和定时开关机功能不可同时开启。如果选择自动关机，则当集群中无作业运行且无定时作业时，等待15分钟后集群将自动关机来帮您节约成本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scheduleBootTime' => 'scheduleBootTime',
            'isScheduleBootOff' => 'isScheduleBootOff',
            'instances' => 'instances',
            'datastore' => 'datastore',
            'extendedProperties' => 'extended_properties',
            'scheduleOffTime' => 'scheduleOffTime',
            'vpcId' => 'vpcId',
            'name' => 'name',
            'sysTags' => 'sys_tags',
            'isAutoOff' => 'isAutoOff'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scheduleBootTime  定时开机的时间，CDM集群会在每天这个时间开机
    * isScheduleBootOff  选择是否启用定时开关机功能。定时开关机功能和自动关机功能不可同时开启
    * instances  节点列表，请参见instances参数说明
    * datastore  datastore
    * extendedProperties  extendedProperties
    * scheduleOffTime  定时关机的时间，定时关机时系统不会等待未完成的作业执行完成
    * vpcId  指定虚拟私有云ID，用于集群网络配置
    * name  集群名称
    * sysTags  企业项目信息，请参见•sys_tags参数说明
    * isAutoOff  选择是否启用自动关机功能，自动关机功能和定时开关机功能不可同时开启。如果选择自动关机，则当集群中无作业运行且无定时作业时，等待15分钟后集群将自动关机来帮您节约成本
    *
    * @var string[]
    */
    protected static $setters = [
            'scheduleBootTime' => 'setScheduleBootTime',
            'isScheduleBootOff' => 'setIsScheduleBootOff',
            'instances' => 'setInstances',
            'datastore' => 'setDatastore',
            'extendedProperties' => 'setExtendedProperties',
            'scheduleOffTime' => 'setScheduleOffTime',
            'vpcId' => 'setVpcId',
            'name' => 'setName',
            'sysTags' => 'setSysTags',
            'isAutoOff' => 'setIsAutoOff'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scheduleBootTime  定时开机的时间，CDM集群会在每天这个时间开机
    * isScheduleBootOff  选择是否启用定时开关机功能。定时开关机功能和自动关机功能不可同时开启
    * instances  节点列表，请参见instances参数说明
    * datastore  datastore
    * extendedProperties  extendedProperties
    * scheduleOffTime  定时关机的时间，定时关机时系统不会等待未完成的作业执行完成
    * vpcId  指定虚拟私有云ID，用于集群网络配置
    * name  集群名称
    * sysTags  企业项目信息，请参见•sys_tags参数说明
    * isAutoOff  选择是否启用自动关机功能，自动关机功能和定时开关机功能不可同时开启。如果选择自动关机，则当集群中无作业运行且无定时作业时，等待15分钟后集群将自动关机来帮您节约成本
    *
    * @var string[]
    */
    protected static $getters = [
            'scheduleBootTime' => 'getScheduleBootTime',
            'isScheduleBootOff' => 'getIsScheduleBootOff',
            'instances' => 'getInstances',
            'datastore' => 'getDatastore',
            'extendedProperties' => 'getExtendedProperties',
            'scheduleOffTime' => 'getScheduleOffTime',
            'vpcId' => 'getVpcId',
            'name' => 'getName',
            'sysTags' => 'getSysTags',
            'isAutoOff' => 'getIsAutoOff'
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
        $this->container['scheduleBootTime'] = isset($data['scheduleBootTime']) ? $data['scheduleBootTime'] : null;
        $this->container['isScheduleBootOff'] = isset($data['isScheduleBootOff']) ? $data['isScheduleBootOff'] : null;
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
        $this->container['datastore'] = isset($data['datastore']) ? $data['datastore'] : null;
        $this->container['extendedProperties'] = isset($data['extendedProperties']) ? $data['extendedProperties'] : null;
        $this->container['scheduleOffTime'] = isset($data['scheduleOffTime']) ? $data['scheduleOffTime'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sysTags'] = isset($data['sysTags']) ? $data['sysTags'] : null;
        $this->container['isAutoOff'] = isset($data['isAutoOff']) ? $data['isAutoOff'] : null;
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
    * Gets scheduleBootTime
    *  定时开机的时间，CDM集群会在每天这个时间开机
    *
    * @return string|null
    */
    public function getScheduleBootTime()
    {
        return $this->container['scheduleBootTime'];
    }

    /**
    * Sets scheduleBootTime
    *
    * @param string|null $scheduleBootTime 定时开机的时间，CDM集群会在每天这个时间开机
    *
    * @return $this
    */
    public function setScheduleBootTime($scheduleBootTime)
    {
        $this->container['scheduleBootTime'] = $scheduleBootTime;
        return $this;
    }

    /**
    * Gets isScheduleBootOff
    *  选择是否启用定时开关机功能。定时开关机功能和自动关机功能不可同时开启
    *
    * @return bool|null
    */
    public function getIsScheduleBootOff()
    {
        return $this->container['isScheduleBootOff'];
    }

    /**
    * Sets isScheduleBootOff
    *
    * @param bool|null $isScheduleBootOff 选择是否启用定时开关机功能。定时开关机功能和自动关机功能不可同时开启
    *
    * @return $this
    */
    public function setIsScheduleBootOff($isScheduleBootOff)
    {
        $this->container['isScheduleBootOff'] = $isScheduleBootOff;
        return $this;
    }

    /**
    * Gets instances
    *  节点列表，请参见instances参数说明
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\Instance[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\Instance[]|null $instances 节点列表，请参见instances参数说明
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
        return $this;
    }

    /**
    * Gets datastore
    *  datastore
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\Datastore|null
    */
    public function getDatastore()
    {
        return $this->container['datastore'];
    }

    /**
    * Sets datastore
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\Datastore|null $datastore datastore
    *
    * @return $this
    */
    public function setDatastore($datastore)
    {
        $this->container['datastore'] = $datastore;
        return $this;
    }

    /**
    * Gets extendedProperties
    *  extendedProperties
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\ExtendedProperties|null
    */
    public function getExtendedProperties()
    {
        return $this->container['extendedProperties'];
    }

    /**
    * Sets extendedProperties
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\ExtendedProperties|null $extendedProperties extendedProperties
    *
    * @return $this
    */
    public function setExtendedProperties($extendedProperties)
    {
        $this->container['extendedProperties'] = $extendedProperties;
        return $this;
    }

    /**
    * Gets scheduleOffTime
    *  定时关机的时间，定时关机时系统不会等待未完成的作业执行完成
    *
    * @return string|null
    */
    public function getScheduleOffTime()
    {
        return $this->container['scheduleOffTime'];
    }

    /**
    * Sets scheduleOffTime
    *
    * @param string|null $scheduleOffTime 定时关机的时间，定时关机时系统不会等待未完成的作业执行完成
    *
    * @return $this
    */
    public function setScheduleOffTime($scheduleOffTime)
    {
        $this->container['scheduleOffTime'] = $scheduleOffTime;
        return $this;
    }

    /**
    * Gets vpcId
    *  指定虚拟私有云ID，用于集群网络配置
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId 指定虚拟私有云ID，用于集群网络配置
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets name
    *  集群名称
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
    * @param string|null $name 集群名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets sysTags
    *  企业项目信息，请参见•sys_tags参数说明
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\SysTags[]|null
    */
    public function getSysTags()
    {
        return $this->container['sysTags'];
    }

    /**
    * Sets sysTags
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\SysTags[]|null $sysTags 企业项目信息，请参见•sys_tags参数说明
    *
    * @return $this
    */
    public function setSysTags($sysTags)
    {
        $this->container['sysTags'] = $sysTags;
        return $this;
    }

    /**
    * Gets isAutoOff
    *  选择是否启用自动关机功能，自动关机功能和定时开关机功能不可同时开启。如果选择自动关机，则当集群中无作业运行且无定时作业时，等待15分钟后集群将自动关机来帮您节约成本
    *
    * @return bool|null
    */
    public function getIsAutoOff()
    {
        return $this->container['isAutoOff'];
    }

    /**
    * Sets isAutoOff
    *
    * @param bool|null $isAutoOff 选择是否启用自动关机功能，自动关机功能和定时开关机功能不可同时开启。如果选择自动关机，则当集群中无作业运行且无定时作业时，等待15分钟后集群将自动关机来帮您节约成本
    *
    * @return $this
    */
    public function setIsAutoOff($isAutoOff)
    {
        $this->container['isAutoOff'] = $isAutoOff;
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

