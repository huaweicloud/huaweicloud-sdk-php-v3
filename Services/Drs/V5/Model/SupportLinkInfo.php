<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SupportLinkInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SupportLinkInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engineType  **参数解释**：  DRS任务引擎类型，标识数据复制任务所使用的数据库引擎。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * netType  **参数解释**：  任务使用的网络类型。  **约束限制**：  灾备场景不支持选择VPC网络。  **取值范围**：  - eip：公网网络 - vpc：VPC网络 - vpn：VPN、专线网络  **默认取值**：  不涉及
    * taskModes  **参数解释**：  可用链路支持的迁移模式列表，表示该链路支持的数据迁移执行方式。  **约束限制**：  不涉及。  **取值范围**：  - FULL_TRANS：全量迁移 - FULL_INCR_TRANS：全量+增量迁移 - INCR_TRANS：增量迁移  **默认取值**：  不涉及
    * jobDirection  **参数解释**：  任务的迁移方向。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    * clusterMode  **参数解释**：  云上数据库实例的部署模式，标识目标或源数据库实例在云上的集群架构类型。  **约束限制**：  不涉及。  **取值范围**：  - Single：单机模式 - Ha：主备模式 - Cluster：集群模式 - Sharding：分片模式 - Independent：GaussDB独立部署模式  **默认取值**：  不涉及
    * jobInstanceType  **参数解释**：  DRS迁移实例的部署类型，决定迁移任务所使用的实例架构。  **约束限制**：  不涉及。  **取值范围**：  - Single：单机 - Ha：主备  **默认取值**：  不涉及
    * isSupportBindEip  **参数解释**：  是否支持绑定弹性公网IP（EIP），标识当前链路是否允许为迁移实例绑定弹性公网IP以实现公网通信。  **约束限制**：  不涉及。  **取值范围**：  - true：支持绑定EIP - false：不支持绑定EIP  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engineType' => 'string',
            'netType' => 'string',
            'taskModes' => 'string[]',
            'jobDirection' => 'string',
            'clusterMode' => 'string',
            'jobInstanceType' => 'string',
            'isSupportBindEip' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engineType  **参数解释**：  DRS任务引擎类型，标识数据复制任务所使用的数据库引擎。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * netType  **参数解释**：  任务使用的网络类型。  **约束限制**：  灾备场景不支持选择VPC网络。  **取值范围**：  - eip：公网网络 - vpc：VPC网络 - vpn：VPN、专线网络  **默认取值**：  不涉及
    * taskModes  **参数解释**：  可用链路支持的迁移模式列表，表示该链路支持的数据迁移执行方式。  **约束限制**：  不涉及。  **取值范围**：  - FULL_TRANS：全量迁移 - FULL_INCR_TRANS：全量+增量迁移 - INCR_TRANS：增量迁移  **默认取值**：  不涉及
    * jobDirection  **参数解释**：  任务的迁移方向。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    * clusterMode  **参数解释**：  云上数据库实例的部署模式，标识目标或源数据库实例在云上的集群架构类型。  **约束限制**：  不涉及。  **取值范围**：  - Single：单机模式 - Ha：主备模式 - Cluster：集群模式 - Sharding：分片模式 - Independent：GaussDB独立部署模式  **默认取值**：  不涉及
    * jobInstanceType  **参数解释**：  DRS迁移实例的部署类型，决定迁移任务所使用的实例架构。  **约束限制**：  不涉及。  **取值范围**：  - Single：单机 - Ha：主备  **默认取值**：  不涉及
    * isSupportBindEip  **参数解释**：  是否支持绑定弹性公网IP（EIP），标识当前链路是否允许为迁移实例绑定弹性公网IP以实现公网通信。  **约束限制**：  不涉及。  **取值范围**：  - true：支持绑定EIP - false：不支持绑定EIP  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engineType' => null,
        'netType' => null,
        'taskModes' => null,
        'jobDirection' => null,
        'clusterMode' => null,
        'jobInstanceType' => null,
        'isSupportBindEip' => null
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
    * engineType  **参数解释**：  DRS任务引擎类型，标识数据复制任务所使用的数据库引擎。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * netType  **参数解释**：  任务使用的网络类型。  **约束限制**：  灾备场景不支持选择VPC网络。  **取值范围**：  - eip：公网网络 - vpc：VPC网络 - vpn：VPN、专线网络  **默认取值**：  不涉及
    * taskModes  **参数解释**：  可用链路支持的迁移模式列表，表示该链路支持的数据迁移执行方式。  **约束限制**：  不涉及。  **取值范围**：  - FULL_TRANS：全量迁移 - FULL_INCR_TRANS：全量+增量迁移 - INCR_TRANS：增量迁移  **默认取值**：  不涉及
    * jobDirection  **参数解释**：  任务的迁移方向。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    * clusterMode  **参数解释**：  云上数据库实例的部署模式，标识目标或源数据库实例在云上的集群架构类型。  **约束限制**：  不涉及。  **取值范围**：  - Single：单机模式 - Ha：主备模式 - Cluster：集群模式 - Sharding：分片模式 - Independent：GaussDB独立部署模式  **默认取值**：  不涉及
    * jobInstanceType  **参数解释**：  DRS迁移实例的部署类型，决定迁移任务所使用的实例架构。  **约束限制**：  不涉及。  **取值范围**：  - Single：单机 - Ha：主备  **默认取值**：  不涉及
    * isSupportBindEip  **参数解释**：  是否支持绑定弹性公网IP（EIP），标识当前链路是否允许为迁移实例绑定弹性公网IP以实现公网通信。  **约束限制**：  不涉及。  **取值范围**：  - true：支持绑定EIP - false：不支持绑定EIP  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engineType' => 'engine_type',
            'netType' => 'net_type',
            'taskModes' => 'task_modes',
            'jobDirection' => 'job_direction',
            'clusterMode' => 'cluster_mode',
            'jobInstanceType' => 'job_instance_type',
            'isSupportBindEip' => 'is_support_bind_eip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engineType  **参数解释**：  DRS任务引擎类型，标识数据复制任务所使用的数据库引擎。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * netType  **参数解释**：  任务使用的网络类型。  **约束限制**：  灾备场景不支持选择VPC网络。  **取值范围**：  - eip：公网网络 - vpc：VPC网络 - vpn：VPN、专线网络  **默认取值**：  不涉及
    * taskModes  **参数解释**：  可用链路支持的迁移模式列表，表示该链路支持的数据迁移执行方式。  **约束限制**：  不涉及。  **取值范围**：  - FULL_TRANS：全量迁移 - FULL_INCR_TRANS：全量+增量迁移 - INCR_TRANS：增量迁移  **默认取值**：  不涉及
    * jobDirection  **参数解释**：  任务的迁移方向。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    * clusterMode  **参数解释**：  云上数据库实例的部署模式，标识目标或源数据库实例在云上的集群架构类型。  **约束限制**：  不涉及。  **取值范围**：  - Single：单机模式 - Ha：主备模式 - Cluster：集群模式 - Sharding：分片模式 - Independent：GaussDB独立部署模式  **默认取值**：  不涉及
    * jobInstanceType  **参数解释**：  DRS迁移实例的部署类型，决定迁移任务所使用的实例架构。  **约束限制**：  不涉及。  **取值范围**：  - Single：单机 - Ha：主备  **默认取值**：  不涉及
    * isSupportBindEip  **参数解释**：  是否支持绑定弹性公网IP（EIP），标识当前链路是否允许为迁移实例绑定弹性公网IP以实现公网通信。  **约束限制**：  不涉及。  **取值范围**：  - true：支持绑定EIP - false：不支持绑定EIP  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'engineType' => 'setEngineType',
            'netType' => 'setNetType',
            'taskModes' => 'setTaskModes',
            'jobDirection' => 'setJobDirection',
            'clusterMode' => 'setClusterMode',
            'jobInstanceType' => 'setJobInstanceType',
            'isSupportBindEip' => 'setIsSupportBindEip'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engineType  **参数解释**：  DRS任务引擎类型，标识数据复制任务所使用的数据库引擎。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * netType  **参数解释**：  任务使用的网络类型。  **约束限制**：  灾备场景不支持选择VPC网络。  **取值范围**：  - eip：公网网络 - vpc：VPC网络 - vpn：VPN、专线网络  **默认取值**：  不涉及
    * taskModes  **参数解释**：  可用链路支持的迁移模式列表，表示该链路支持的数据迁移执行方式。  **约束限制**：  不涉及。  **取值范围**：  - FULL_TRANS：全量迁移 - FULL_INCR_TRANS：全量+增量迁移 - INCR_TRANS：增量迁移  **默认取值**：  不涉及
    * jobDirection  **参数解释**：  任务的迁移方向。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    * clusterMode  **参数解释**：  云上数据库实例的部署模式，标识目标或源数据库实例在云上的集群架构类型。  **约束限制**：  不涉及。  **取值范围**：  - Single：单机模式 - Ha：主备模式 - Cluster：集群模式 - Sharding：分片模式 - Independent：GaussDB独立部署模式  **默认取值**：  不涉及
    * jobInstanceType  **参数解释**：  DRS迁移实例的部署类型，决定迁移任务所使用的实例架构。  **约束限制**：  不涉及。  **取值范围**：  - Single：单机 - Ha：主备  **默认取值**：  不涉及
    * isSupportBindEip  **参数解释**：  是否支持绑定弹性公网IP（EIP），标识当前链路是否允许为迁移实例绑定弹性公网IP以实现公网通信。  **约束限制**：  不涉及。  **取值范围**：  - true：支持绑定EIP - false：不支持绑定EIP  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'engineType' => 'getEngineType',
            'netType' => 'getNetType',
            'taskModes' => 'getTaskModes',
            'jobDirection' => 'getJobDirection',
            'clusterMode' => 'getClusterMode',
            'jobInstanceType' => 'getJobInstanceType',
            'isSupportBindEip' => 'getIsSupportBindEip'
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
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['netType'] = isset($data['netType']) ? $data['netType'] : null;
        $this->container['taskModes'] = isset($data['taskModes']) ? $data['taskModes'] : null;
        $this->container['jobDirection'] = isset($data['jobDirection']) ? $data['jobDirection'] : null;
        $this->container['clusterMode'] = isset($data['clusterMode']) ? $data['clusterMode'] : null;
        $this->container['jobInstanceType'] = isset($data['jobInstanceType']) ? $data['jobInstanceType'] : null;
        $this->container['isSupportBindEip'] = isset($data['isSupportBindEip']) ? $data['isSupportBindEip'] : null;
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
    * Gets engineType
    *  **参数解释**：  DRS任务引擎类型，标识数据复制任务所使用的数据库引擎。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string|null $engineType **参数解释**：  DRS任务引擎类型，标识数据复制任务所使用的数据库引擎。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets netType
    *  **参数解释**：  任务使用的网络类型。  **约束限制**：  灾备场景不支持选择VPC网络。  **取值范围**：  - eip：公网网络 - vpc：VPC网络 - vpn：VPN、专线网络  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getNetType()
    {
        return $this->container['netType'];
    }

    /**
    * Sets netType
    *
    * @param string|null $netType **参数解释**：  任务使用的网络类型。  **约束限制**：  灾备场景不支持选择VPC网络。  **取值范围**：  - eip：公网网络 - vpc：VPC网络 - vpn：VPN、专线网络  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setNetType($netType)
    {
        $this->container['netType'] = $netType;
        return $this;
    }

    /**
    * Gets taskModes
    *  **参数解释**：  可用链路支持的迁移模式列表，表示该链路支持的数据迁移执行方式。  **约束限制**：  不涉及。  **取值范围**：  - FULL_TRANS：全量迁移 - FULL_INCR_TRANS：全量+增量迁移 - INCR_TRANS：增量迁移  **默认取值**：  不涉及
    *
    * @return string[]|null
    */
    public function getTaskModes()
    {
        return $this->container['taskModes'];
    }

    /**
    * Sets taskModes
    *
    * @param string[]|null $taskModes **参数解释**：  可用链路支持的迁移模式列表，表示该链路支持的数据迁移执行方式。  **约束限制**：  不涉及。  **取值范围**：  - FULL_TRANS：全量迁移 - FULL_INCR_TRANS：全量+增量迁移 - INCR_TRANS：增量迁移  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setTaskModes($taskModes)
    {
        $this->container['taskModes'] = $taskModes;
        return $this;
    }

    /**
    * Gets jobDirection
    *  **参数解释**：  任务的迁移方向。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getJobDirection()
    {
        return $this->container['jobDirection'];
    }

    /**
    * Sets jobDirection
    *
    * @param string|null $jobDirection **参数解释**：  任务的迁移方向。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setJobDirection($jobDirection)
    {
        $this->container['jobDirection'] = $jobDirection;
        return $this;
    }

    /**
    * Gets clusterMode
    *  **参数解释**：  云上数据库实例的部署模式，标识目标或源数据库实例在云上的集群架构类型。  **约束限制**：  不涉及。  **取值范围**：  - Single：单机模式 - Ha：主备模式 - Cluster：集群模式 - Sharding：分片模式 - Independent：GaussDB独立部署模式  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getClusterMode()
    {
        return $this->container['clusterMode'];
    }

    /**
    * Sets clusterMode
    *
    * @param string|null $clusterMode **参数解释**：  云上数据库实例的部署模式，标识目标或源数据库实例在云上的集群架构类型。  **约束限制**：  不涉及。  **取值范围**：  - Single：单机模式 - Ha：主备模式 - Cluster：集群模式 - Sharding：分片模式 - Independent：GaussDB独立部署模式  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setClusterMode($clusterMode)
    {
        $this->container['clusterMode'] = $clusterMode;
        return $this;
    }

    /**
    * Gets jobInstanceType
    *  **参数解释**：  DRS迁移实例的部署类型，决定迁移任务所使用的实例架构。  **约束限制**：  不涉及。  **取值范围**：  - Single：单机 - Ha：主备  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getJobInstanceType()
    {
        return $this->container['jobInstanceType'];
    }

    /**
    * Sets jobInstanceType
    *
    * @param string|null $jobInstanceType **参数解释**：  DRS迁移实例的部署类型，决定迁移任务所使用的实例架构。  **约束限制**：  不涉及。  **取值范围**：  - Single：单机 - Ha：主备  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setJobInstanceType($jobInstanceType)
    {
        $this->container['jobInstanceType'] = $jobInstanceType;
        return $this;
    }

    /**
    * Gets isSupportBindEip
    *  **参数解释**：  是否支持绑定弹性公网IP（EIP），标识当前链路是否允许为迁移实例绑定弹性公网IP以实现公网通信。  **约束限制**：  不涉及。  **取值范围**：  - true：支持绑定EIP - false：不支持绑定EIP  **默认取值**：  不涉及
    *
    * @return bool|null
    */
    public function getIsSupportBindEip()
    {
        return $this->container['isSupportBindEip'];
    }

    /**
    * Sets isSupportBindEip
    *
    * @param bool|null $isSupportBindEip **参数解释**：  是否支持绑定弹性公网IP（EIP），标识当前链路是否允许为迁移实例绑定弹性公网IP以实现公网通信。  **约束限制**：  不涉及。  **取值范围**：  - true：支持绑定EIP - false：不支持绑定EIP  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setIsSupportBindEip($isSupportBindEip)
    {
        $this->container['isSupportBindEip'] = $isSupportBindEip;
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

