<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAgentDaemonsetDetailInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAgentDaemonsetDetailInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * yamlContent  原始yaml
    * nodeNum  节点总数
    * runtimeInfo  容器运行时配置
    * clusterStatus  **参数解释**: 集群状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - Available：可用，表示集群处于正常状态。 - Unavailable：不可用，表示集群异常，需手动删除或联系管理员删除。 - ScalingUp：扩容中，表示集群正处于扩容过程中。  - ScalingDown：缩容中，表示集群正处于缩容过程中。 - Creating：创建中，表示集群正处于创建过程中。  - Deleting：删除中，表示集群正处于删除过程中。 - Upgrading：升级中，表示集群正处于升级过程中。  - Resizing：规格变更中，表示集群正处于变更规格中。 - RollingBack：回滚中，表示集群正处于回滚过程中。 - RollbackFailed：回滚异常，表示集群回滚异常，需联系管理员进行回滚重试。  - Empty：集群无任何资源。  **默认取值**: 不涉及
    * dsInfo  dsInfo
    * installedStatus  **参数解释**: 集群ds安装状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - installing：安装中。 - install_success：安装成功。 - install_failed：安装失败。 - partially_success：部分安装成功。 - upgrade_success：升级成功。  - upgrade_failed：升级失败。 - upgrading：升级中。 - none：未安装。  **默认取值**: 不涉及
    * scheduleInfo  scheduleInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'yamlContent' => 'string',
            'nodeNum' => 'int',
            'runtimeInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\RuntimeRequestBody[]',
            'clusterStatus' => 'string',
            'dsInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\ClusterInfoResponseDsInfo',
            'installedStatus' => 'string',
            'scheduleInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\CreateDaemonsetRequestBodyScheduleInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * yamlContent  原始yaml
    * nodeNum  节点总数
    * runtimeInfo  容器运行时配置
    * clusterStatus  **参数解释**: 集群状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - Available：可用，表示集群处于正常状态。 - Unavailable：不可用，表示集群异常，需手动删除或联系管理员删除。 - ScalingUp：扩容中，表示集群正处于扩容过程中。  - ScalingDown：缩容中，表示集群正处于缩容过程中。 - Creating：创建中，表示集群正处于创建过程中。  - Deleting：删除中，表示集群正处于删除过程中。 - Upgrading：升级中，表示集群正处于升级过程中。  - Resizing：规格变更中，表示集群正处于变更规格中。 - RollingBack：回滚中，表示集群正处于回滚过程中。 - RollbackFailed：回滚异常，表示集群回滚异常，需联系管理员进行回滚重试。  - Empty：集群无任何资源。  **默认取值**: 不涉及
    * dsInfo  dsInfo
    * installedStatus  **参数解释**: 集群ds安装状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - installing：安装中。 - install_success：安装成功。 - install_failed：安装失败。 - partially_success：部分安装成功。 - upgrade_success：升级成功。  - upgrade_failed：升级失败。 - upgrading：升级中。 - none：未安装。  **默认取值**: 不涉及
    * scheduleInfo  scheduleInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'yamlContent' => null,
        'nodeNum' => 'int32',
        'runtimeInfo' => null,
        'clusterStatus' => null,
        'dsInfo' => null,
        'installedStatus' => null,
        'scheduleInfo' => null
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
    * yamlContent  原始yaml
    * nodeNum  节点总数
    * runtimeInfo  容器运行时配置
    * clusterStatus  **参数解释**: 集群状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - Available：可用，表示集群处于正常状态。 - Unavailable：不可用，表示集群异常，需手动删除或联系管理员删除。 - ScalingUp：扩容中，表示集群正处于扩容过程中。  - ScalingDown：缩容中，表示集群正处于缩容过程中。 - Creating：创建中，表示集群正处于创建过程中。  - Deleting：删除中，表示集群正处于删除过程中。 - Upgrading：升级中，表示集群正处于升级过程中。  - Resizing：规格变更中，表示集群正处于变更规格中。 - RollingBack：回滚中，表示集群正处于回滚过程中。 - RollbackFailed：回滚异常，表示集群回滚异常，需联系管理员进行回滚重试。  - Empty：集群无任何资源。  **默认取值**: 不涉及
    * dsInfo  dsInfo
    * installedStatus  **参数解释**: 集群ds安装状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - installing：安装中。 - install_success：安装成功。 - install_failed：安装失败。 - partially_success：部分安装成功。 - upgrade_success：升级成功。  - upgrade_failed：升级失败。 - upgrading：升级中。 - none：未安装。  **默认取值**: 不涉及
    * scheduleInfo  scheduleInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'yamlContent' => 'yaml_content',
            'nodeNum' => 'node_num',
            'runtimeInfo' => 'runtime_info',
            'clusterStatus' => 'cluster_status',
            'dsInfo' => 'ds_info',
            'installedStatus' => 'installed_status',
            'scheduleInfo' => 'schedule_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * yamlContent  原始yaml
    * nodeNum  节点总数
    * runtimeInfo  容器运行时配置
    * clusterStatus  **参数解释**: 集群状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - Available：可用，表示集群处于正常状态。 - Unavailable：不可用，表示集群异常，需手动删除或联系管理员删除。 - ScalingUp：扩容中，表示集群正处于扩容过程中。  - ScalingDown：缩容中，表示集群正处于缩容过程中。 - Creating：创建中，表示集群正处于创建过程中。  - Deleting：删除中，表示集群正处于删除过程中。 - Upgrading：升级中，表示集群正处于升级过程中。  - Resizing：规格变更中，表示集群正处于变更规格中。 - RollingBack：回滚中，表示集群正处于回滚过程中。 - RollbackFailed：回滚异常，表示集群回滚异常，需联系管理员进行回滚重试。  - Empty：集群无任何资源。  **默认取值**: 不涉及
    * dsInfo  dsInfo
    * installedStatus  **参数解释**: 集群ds安装状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - installing：安装中。 - install_success：安装成功。 - install_failed：安装失败。 - partially_success：部分安装成功。 - upgrade_success：升级成功。  - upgrade_failed：升级失败。 - upgrading：升级中。 - none：未安装。  **默认取值**: 不涉及
    * scheduleInfo  scheduleInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'yamlContent' => 'setYamlContent',
            'nodeNum' => 'setNodeNum',
            'runtimeInfo' => 'setRuntimeInfo',
            'clusterStatus' => 'setClusterStatus',
            'dsInfo' => 'setDsInfo',
            'installedStatus' => 'setInstalledStatus',
            'scheduleInfo' => 'setScheduleInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * yamlContent  原始yaml
    * nodeNum  节点总数
    * runtimeInfo  容器运行时配置
    * clusterStatus  **参数解释**: 集群状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - Available：可用，表示集群处于正常状态。 - Unavailable：不可用，表示集群异常，需手动删除或联系管理员删除。 - ScalingUp：扩容中，表示集群正处于扩容过程中。  - ScalingDown：缩容中，表示集群正处于缩容过程中。 - Creating：创建中，表示集群正处于创建过程中。  - Deleting：删除中，表示集群正处于删除过程中。 - Upgrading：升级中，表示集群正处于升级过程中。  - Resizing：规格变更中，表示集群正处于变更规格中。 - RollingBack：回滚中，表示集群正处于回滚过程中。 - RollbackFailed：回滚异常，表示集群回滚异常，需联系管理员进行回滚重试。  - Empty：集群无任何资源。  **默认取值**: 不涉及
    * dsInfo  dsInfo
    * installedStatus  **参数解释**: 集群ds安装状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - installing：安装中。 - install_success：安装成功。 - install_failed：安装失败。 - partially_success：部分安装成功。 - upgrade_success：升级成功。  - upgrade_failed：升级失败。 - upgrading：升级中。 - none：未安装。  **默认取值**: 不涉及
    * scheduleInfo  scheduleInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'yamlContent' => 'getYamlContent',
            'nodeNum' => 'getNodeNum',
            'runtimeInfo' => 'getRuntimeInfo',
            'clusterStatus' => 'getClusterStatus',
            'dsInfo' => 'getDsInfo',
            'installedStatus' => 'getInstalledStatus',
            'scheduleInfo' => 'getScheduleInfo'
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
        $this->container['yamlContent'] = isset($data['yamlContent']) ? $data['yamlContent'] : null;
        $this->container['nodeNum'] = isset($data['nodeNum']) ? $data['nodeNum'] : null;
        $this->container['runtimeInfo'] = isset($data['runtimeInfo']) ? $data['runtimeInfo'] : null;
        $this->container['clusterStatus'] = isset($data['clusterStatus']) ? $data['clusterStatus'] : null;
        $this->container['dsInfo'] = isset($data['dsInfo']) ? $data['dsInfo'] : null;
        $this->container['installedStatus'] = isset($data['installedStatus']) ? $data['installedStatus'] : null;
        $this->container['scheduleInfo'] = isset($data['scheduleInfo']) ? $data['scheduleInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['yamlContent']) && (mb_strlen($this->container['yamlContent']) > 65535)) {
                $invalidProperties[] = "invalid value for 'yamlContent', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['yamlContent']) && (mb_strlen($this->container['yamlContent']) < 0)) {
                $invalidProperties[] = "invalid value for 'yamlContent', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nodeNum']) && ($this->container['nodeNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'nodeNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['nodeNum']) && ($this->container['nodeNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'nodeNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterStatus']) && (mb_strlen($this->container['clusterStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'clusterStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['clusterStatus']) && (mb_strlen($this->container['clusterStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['installedStatus']) && (mb_strlen($this->container['installedStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'installedStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['installedStatus']) && (mb_strlen($this->container['installedStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'installedStatus', the character length must be bigger than or equal to 0.";
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
    * Gets yamlContent
    *  原始yaml
    *
    * @return string|null
    */
    public function getYamlContent()
    {
        return $this->container['yamlContent'];
    }

    /**
    * Sets yamlContent
    *
    * @param string|null $yamlContent 原始yaml
    *
    * @return $this
    */
    public function setYamlContent($yamlContent)
    {
        $this->container['yamlContent'] = $yamlContent;
        return $this;
    }

    /**
    * Gets nodeNum
    *  节点总数
    *
    * @return int|null
    */
    public function getNodeNum()
    {
        return $this->container['nodeNum'];
    }

    /**
    * Sets nodeNum
    *
    * @param int|null $nodeNum 节点总数
    *
    * @return $this
    */
    public function setNodeNum($nodeNum)
    {
        $this->container['nodeNum'] = $nodeNum;
        return $this;
    }

    /**
    * Gets runtimeInfo
    *  容器运行时配置
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\RuntimeRequestBody[]|null
    */
    public function getRuntimeInfo()
    {
        return $this->container['runtimeInfo'];
    }

    /**
    * Sets runtimeInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\RuntimeRequestBody[]|null $runtimeInfo 容器运行时配置
    *
    * @return $this
    */
    public function setRuntimeInfo($runtimeInfo)
    {
        $this->container['runtimeInfo'] = $runtimeInfo;
        return $this;
    }

    /**
    * Gets clusterStatus
    *  **参数解释**: 集群状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - Available：可用，表示集群处于正常状态。 - Unavailable：不可用，表示集群异常，需手动删除或联系管理员删除。 - ScalingUp：扩容中，表示集群正处于扩容过程中。  - ScalingDown：缩容中，表示集群正处于缩容过程中。 - Creating：创建中，表示集群正处于创建过程中。  - Deleting：删除中，表示集群正处于删除过程中。 - Upgrading：升级中，表示集群正处于升级过程中。  - Resizing：规格变更中，表示集群正处于变更规格中。 - RollingBack：回滚中，表示集群正处于回滚过程中。 - RollbackFailed：回滚异常，表示集群回滚异常，需联系管理员进行回滚重试。  - Empty：集群无任何资源。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getClusterStatus()
    {
        return $this->container['clusterStatus'];
    }

    /**
    * Sets clusterStatus
    *
    * @param string|null $clusterStatus **参数解释**: 集群状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - Available：可用，表示集群处于正常状态。 - Unavailable：不可用，表示集群异常，需手动删除或联系管理员删除。 - ScalingUp：扩容中，表示集群正处于扩容过程中。  - ScalingDown：缩容中，表示集群正处于缩容过程中。 - Creating：创建中，表示集群正处于创建过程中。  - Deleting：删除中，表示集群正处于删除过程中。 - Upgrading：升级中，表示集群正处于升级过程中。  - Resizing：规格变更中，表示集群正处于变更规格中。 - RollingBack：回滚中，表示集群正处于回滚过程中。 - RollbackFailed：回滚异常，表示集群回滚异常，需联系管理员进行回滚重试。  - Empty：集群无任何资源。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setClusterStatus($clusterStatus)
    {
        $this->container['clusterStatus'] = $clusterStatus;
        return $this;
    }

    /**
    * Gets dsInfo
    *  dsInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\ClusterInfoResponseDsInfo|null
    */
    public function getDsInfo()
    {
        return $this->container['dsInfo'];
    }

    /**
    * Sets dsInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\ClusterInfoResponseDsInfo|null $dsInfo dsInfo
    *
    * @return $this
    */
    public function setDsInfo($dsInfo)
    {
        $this->container['dsInfo'] = $dsInfo;
        return $this;
    }

    /**
    * Gets installedStatus
    *  **参数解释**: 集群ds安装状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - installing：安装中。 - install_success：安装成功。 - install_failed：安装失败。 - partially_success：部分安装成功。 - upgrade_success：升级成功。  - upgrade_failed：升级失败。 - upgrading：升级中。 - none：未安装。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getInstalledStatus()
    {
        return $this->container['installedStatus'];
    }

    /**
    * Sets installedStatus
    *
    * @param string|null $installedStatus **参数解释**: 集群ds安装状态 **约束限制**: 不涉及 **取值范围**: 包含如下： - installing：安装中。 - install_success：安装成功。 - install_failed：安装失败。 - partially_success：部分安装成功。 - upgrade_success：升级成功。  - upgrade_failed：升级失败。 - upgrading：升级中。 - none：未安装。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setInstalledStatus($installedStatus)
    {
        $this->container['installedStatus'] = $installedStatus;
        return $this;
    }

    /**
    * Gets scheduleInfo
    *  scheduleInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\CreateDaemonsetRequestBodyScheduleInfo|null
    */
    public function getScheduleInfo()
    {
        return $this->container['scheduleInfo'];
    }

    /**
    * Sets scheduleInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\CreateDaemonsetRequestBodyScheduleInfo|null $scheduleInfo scheduleInfo
    *
    * @return $this
    */
    public function setScheduleInfo($scheduleInfo)
    {
        $this->container['scheduleInfo'] = $scheduleInfo;
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

