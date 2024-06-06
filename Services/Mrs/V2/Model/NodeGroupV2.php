<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeGroupV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeGroupV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupName  节点组名称，最大长度64，支持大小写英文、数字以及“_”。节点组配置原则如下： - master_node_default_group：Master节点组，所有集群类型均需包含该节点组。 - core_node_analysis_group：分析Core节点组，分析集群、混合集群均需包含该节点组。 - core_node_streaming_group：流式Core节点组，流式集群和混合集群均需包含该节点组。 - task_node_analysis_group：分析Task节点组，分析集群和混合集群可根据需要选择该节点组。 - task_node_streaming_group：流式Task节点组，流式集群、混合集群可根据需要选择该节点组。 - node_group{x}：自定义集群节点组，可根据需要添加多个，最多支持添加9个该节点组。
    * nodeNum  节点数量，取值范围0～500，Core与Task节点总数最大为500个。
    * nodeSize  节点的实例规格。 例如：c3.4xlarge.2.linux.bigdata。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    * rootVolume  rootVolume
    * dataVolume  dataVolume
    * dataVolumeCount  节点数据磁盘存储数目，取值范围：0～20。
    * chargeInfo  chargeInfo
    * autoScalingPolicy  autoScalingPolicy
    * assignedRoles  当集群类型为CUSTOM时，该参数必选。可以指定节点组中部署的角色，该参数是一个字符串数组，每个字符串表示一个角色表达式。 角色表达式定义： - 当该角色在节点组所有节点部署时： {role name}，如“DataNode”。 - 当该角色在节点组指定下标节点部署时：{role name}:{index1},{index2}…,{indexN}，如“NameNode:1,2”，下标从1开始计数。 - 部分角色支持多实例部署（即在一个节点部署多个同角色的实例）：{role name}[{instance count}]，如“EsNode[9]” 可选的角色请参考[MRS支持的角色与组件对应表](https://support.huaweicloud.com/api-mrs/mrs_02_0106.html)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupName' => 'string',
            'nodeNum' => 'int',
            'nodeSize' => 'string',
            'rootVolume' => '\HuaweiCloud\SDK\Mrs\V2\Model\Volume',
            'dataVolume' => '\HuaweiCloud\SDK\Mrs\V2\Model\Volume',
            'dataVolumeCount' => 'int',
            'chargeInfo' => '\HuaweiCloud\SDK\Mrs\V2\Model\ChargeInfo',
            'autoScalingPolicy' => '\HuaweiCloud\SDK\Mrs\V2\Model\AutoScalingPolicy',
            'assignedRoles' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupName  节点组名称，最大长度64，支持大小写英文、数字以及“_”。节点组配置原则如下： - master_node_default_group：Master节点组，所有集群类型均需包含该节点组。 - core_node_analysis_group：分析Core节点组，分析集群、混合集群均需包含该节点组。 - core_node_streaming_group：流式Core节点组，流式集群和混合集群均需包含该节点组。 - task_node_analysis_group：分析Task节点组，分析集群和混合集群可根据需要选择该节点组。 - task_node_streaming_group：流式Task节点组，流式集群、混合集群可根据需要选择该节点组。 - node_group{x}：自定义集群节点组，可根据需要添加多个，最多支持添加9个该节点组。
    * nodeNum  节点数量，取值范围0～500，Core与Task节点总数最大为500个。
    * nodeSize  节点的实例规格。 例如：c3.4xlarge.2.linux.bigdata。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    * rootVolume  rootVolume
    * dataVolume  dataVolume
    * dataVolumeCount  节点数据磁盘存储数目，取值范围：0～20。
    * chargeInfo  chargeInfo
    * autoScalingPolicy  autoScalingPolicy
    * assignedRoles  当集群类型为CUSTOM时，该参数必选。可以指定节点组中部署的角色，该参数是一个字符串数组，每个字符串表示一个角色表达式。 角色表达式定义： - 当该角色在节点组所有节点部署时： {role name}，如“DataNode”。 - 当该角色在节点组指定下标节点部署时：{role name}:{index1},{index2}…,{indexN}，如“NameNode:1,2”，下标从1开始计数。 - 部分角色支持多实例部署（即在一个节点部署多个同角色的实例）：{role name}[{instance count}]，如“EsNode[9]” 可选的角色请参考[MRS支持的角色与组件对应表](https://support.huaweicloud.com/api-mrs/mrs_02_0106.html)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupName' => null,
        'nodeNum' => 'int32',
        'nodeSize' => null,
        'rootVolume' => null,
        'dataVolume' => null,
        'dataVolumeCount' => 'int32',
        'chargeInfo' => null,
        'autoScalingPolicy' => null,
        'assignedRoles' => null
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
    * groupName  节点组名称，最大长度64，支持大小写英文、数字以及“_”。节点组配置原则如下： - master_node_default_group：Master节点组，所有集群类型均需包含该节点组。 - core_node_analysis_group：分析Core节点组，分析集群、混合集群均需包含该节点组。 - core_node_streaming_group：流式Core节点组，流式集群和混合集群均需包含该节点组。 - task_node_analysis_group：分析Task节点组，分析集群和混合集群可根据需要选择该节点组。 - task_node_streaming_group：流式Task节点组，流式集群、混合集群可根据需要选择该节点组。 - node_group{x}：自定义集群节点组，可根据需要添加多个，最多支持添加9个该节点组。
    * nodeNum  节点数量，取值范围0～500，Core与Task节点总数最大为500个。
    * nodeSize  节点的实例规格。 例如：c3.4xlarge.2.linux.bigdata。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    * rootVolume  rootVolume
    * dataVolume  dataVolume
    * dataVolumeCount  节点数据磁盘存储数目，取值范围：0～20。
    * chargeInfo  chargeInfo
    * autoScalingPolicy  autoScalingPolicy
    * assignedRoles  当集群类型为CUSTOM时，该参数必选。可以指定节点组中部署的角色，该参数是一个字符串数组，每个字符串表示一个角色表达式。 角色表达式定义： - 当该角色在节点组所有节点部署时： {role name}，如“DataNode”。 - 当该角色在节点组指定下标节点部署时：{role name}:{index1},{index2}…,{indexN}，如“NameNode:1,2”，下标从1开始计数。 - 部分角色支持多实例部署（即在一个节点部署多个同角色的实例）：{role name}[{instance count}]，如“EsNode[9]” 可选的角色请参考[MRS支持的角色与组件对应表](https://support.huaweicloud.com/api-mrs/mrs_02_0106.html)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupName' => 'group_name',
            'nodeNum' => 'node_num',
            'nodeSize' => 'node_size',
            'rootVolume' => 'root_volume',
            'dataVolume' => 'data_volume',
            'dataVolumeCount' => 'data_volume_count',
            'chargeInfo' => 'charge_info',
            'autoScalingPolicy' => 'auto_scaling_policy',
            'assignedRoles' => 'assigned_roles'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupName  节点组名称，最大长度64，支持大小写英文、数字以及“_”。节点组配置原则如下： - master_node_default_group：Master节点组，所有集群类型均需包含该节点组。 - core_node_analysis_group：分析Core节点组，分析集群、混合集群均需包含该节点组。 - core_node_streaming_group：流式Core节点组，流式集群和混合集群均需包含该节点组。 - task_node_analysis_group：分析Task节点组，分析集群和混合集群可根据需要选择该节点组。 - task_node_streaming_group：流式Task节点组，流式集群、混合集群可根据需要选择该节点组。 - node_group{x}：自定义集群节点组，可根据需要添加多个，最多支持添加9个该节点组。
    * nodeNum  节点数量，取值范围0～500，Core与Task节点总数最大为500个。
    * nodeSize  节点的实例规格。 例如：c3.4xlarge.2.linux.bigdata。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    * rootVolume  rootVolume
    * dataVolume  dataVolume
    * dataVolumeCount  节点数据磁盘存储数目，取值范围：0～20。
    * chargeInfo  chargeInfo
    * autoScalingPolicy  autoScalingPolicy
    * assignedRoles  当集群类型为CUSTOM时，该参数必选。可以指定节点组中部署的角色，该参数是一个字符串数组，每个字符串表示一个角色表达式。 角色表达式定义： - 当该角色在节点组所有节点部署时： {role name}，如“DataNode”。 - 当该角色在节点组指定下标节点部署时：{role name}:{index1},{index2}…,{indexN}，如“NameNode:1,2”，下标从1开始计数。 - 部分角色支持多实例部署（即在一个节点部署多个同角色的实例）：{role name}[{instance count}]，如“EsNode[9]” 可选的角色请参考[MRS支持的角色与组件对应表](https://support.huaweicloud.com/api-mrs/mrs_02_0106.html)。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupName' => 'setGroupName',
            'nodeNum' => 'setNodeNum',
            'nodeSize' => 'setNodeSize',
            'rootVolume' => 'setRootVolume',
            'dataVolume' => 'setDataVolume',
            'dataVolumeCount' => 'setDataVolumeCount',
            'chargeInfo' => 'setChargeInfo',
            'autoScalingPolicy' => 'setAutoScalingPolicy',
            'assignedRoles' => 'setAssignedRoles'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupName  节点组名称，最大长度64，支持大小写英文、数字以及“_”。节点组配置原则如下： - master_node_default_group：Master节点组，所有集群类型均需包含该节点组。 - core_node_analysis_group：分析Core节点组，分析集群、混合集群均需包含该节点组。 - core_node_streaming_group：流式Core节点组，流式集群和混合集群均需包含该节点组。 - task_node_analysis_group：分析Task节点组，分析集群和混合集群可根据需要选择该节点组。 - task_node_streaming_group：流式Task节点组，流式集群、混合集群可根据需要选择该节点组。 - node_group{x}：自定义集群节点组，可根据需要添加多个，最多支持添加9个该节点组。
    * nodeNum  节点数量，取值范围0～500，Core与Task节点总数最大为500个。
    * nodeSize  节点的实例规格。 例如：c3.4xlarge.2.linux.bigdata。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    * rootVolume  rootVolume
    * dataVolume  dataVolume
    * dataVolumeCount  节点数据磁盘存储数目，取值范围：0～20。
    * chargeInfo  chargeInfo
    * autoScalingPolicy  autoScalingPolicy
    * assignedRoles  当集群类型为CUSTOM时，该参数必选。可以指定节点组中部署的角色，该参数是一个字符串数组，每个字符串表示一个角色表达式。 角色表达式定义： - 当该角色在节点组所有节点部署时： {role name}，如“DataNode”。 - 当该角色在节点组指定下标节点部署时：{role name}:{index1},{index2}…,{indexN}，如“NameNode:1,2”，下标从1开始计数。 - 部分角色支持多实例部署（即在一个节点部署多个同角色的实例）：{role name}[{instance count}]，如“EsNode[9]” 可选的角色请参考[MRS支持的角色与组件对应表](https://support.huaweicloud.com/api-mrs/mrs_02_0106.html)。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupName' => 'getGroupName',
            'nodeNum' => 'getNodeNum',
            'nodeSize' => 'getNodeSize',
            'rootVolume' => 'getRootVolume',
            'dataVolume' => 'getDataVolume',
            'dataVolumeCount' => 'getDataVolumeCount',
            'chargeInfo' => 'getChargeInfo',
            'autoScalingPolicy' => 'getAutoScalingPolicy',
            'assignedRoles' => 'getAssignedRoles'
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
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['nodeNum'] = isset($data['nodeNum']) ? $data['nodeNum'] : null;
        $this->container['nodeSize'] = isset($data['nodeSize']) ? $data['nodeSize'] : null;
        $this->container['rootVolume'] = isset($data['rootVolume']) ? $data['rootVolume'] : null;
        $this->container['dataVolume'] = isset($data['dataVolume']) ? $data['dataVolume'] : null;
        $this->container['dataVolumeCount'] = isset($data['dataVolumeCount']) ? $data['dataVolumeCount'] : null;
        $this->container['chargeInfo'] = isset($data['chargeInfo']) ? $data['chargeInfo'] : null;
        $this->container['autoScalingPolicy'] = isset($data['autoScalingPolicy']) ? $data['autoScalingPolicy'] : null;
        $this->container['assignedRoles'] = isset($data['assignedRoles']) ? $data['assignedRoles'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupName'] === null) {
            $invalidProperties[] = "'groupName' can't be null";
        }
        if ($this->container['nodeNum'] === null) {
            $invalidProperties[] = "'nodeNum' can't be null";
        }
            if (($this->container['nodeNum'] > 500)) {
                $invalidProperties[] = "invalid value for 'nodeNum', must be smaller than or equal to 500.";
            }
            if (($this->container['nodeNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'nodeNum', must be bigger than or equal to 0.";
            }
        if ($this->container['nodeSize'] === null) {
            $invalidProperties[] = "'nodeSize' can't be null";
        }
            if (!is_null($this->container['dataVolumeCount']) && ($this->container['dataVolumeCount'] > 20)) {
                $invalidProperties[] = "invalid value for 'dataVolumeCount', must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['dataVolumeCount']) && ($this->container['dataVolumeCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'dataVolumeCount', must be bigger than or equal to 0.";
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
    * Gets groupName
    *  节点组名称，最大长度64，支持大小写英文、数字以及“_”。节点组配置原则如下： - master_node_default_group：Master节点组，所有集群类型均需包含该节点组。 - core_node_analysis_group：分析Core节点组，分析集群、混合集群均需包含该节点组。 - core_node_streaming_group：流式Core节点组，流式集群和混合集群均需包含该节点组。 - task_node_analysis_group：分析Task节点组，分析集群和混合集群可根据需要选择该节点组。 - task_node_streaming_group：流式Task节点组，流式集群、混合集群可根据需要选择该节点组。 - node_group{x}：自定义集群节点组，可根据需要添加多个，最多支持添加9个该节点组。
    *
    * @return string
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string $groupName 节点组名称，最大长度64，支持大小写英文、数字以及“_”。节点组配置原则如下： - master_node_default_group：Master节点组，所有集群类型均需包含该节点组。 - core_node_analysis_group：分析Core节点组，分析集群、混合集群均需包含该节点组。 - core_node_streaming_group：流式Core节点组，流式集群和混合集群均需包含该节点组。 - task_node_analysis_group：分析Task节点组，分析集群和混合集群可根据需要选择该节点组。 - task_node_streaming_group：流式Task节点组，流式集群、混合集群可根据需要选择该节点组。 - node_group{x}：自定义集群节点组，可根据需要添加多个，最多支持添加9个该节点组。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets nodeNum
    *  节点数量，取值范围0～500，Core与Task节点总数最大为500个。
    *
    * @return int
    */
    public function getNodeNum()
    {
        return $this->container['nodeNum'];
    }

    /**
    * Sets nodeNum
    *
    * @param int $nodeNum 节点数量，取值范围0～500，Core与Task节点总数最大为500个。
    *
    * @return $this
    */
    public function setNodeNum($nodeNum)
    {
        $this->container['nodeNum'] = $nodeNum;
        return $this;
    }

    /**
    * Gets nodeSize
    *  节点的实例规格。 例如：c3.4xlarge.2.linux.bigdata。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    *
    * @return string
    */
    public function getNodeSize()
    {
        return $this->container['nodeSize'];
    }

    /**
    * Sets nodeSize
    *
    * @param string $nodeSize 节点的实例规格。 例如：c3.4xlarge.2.linux.bigdata。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    *
    * @return $this
    */
    public function setNodeSize($nodeSize)
    {
        $this->container['nodeSize'] = $nodeSize;
        return $this;
    }

    /**
    * Gets rootVolume
    *  rootVolume
    *
    * @return \HuaweiCloud\SDK\Mrs\V2\Model\Volume|null
    */
    public function getRootVolume()
    {
        return $this->container['rootVolume'];
    }

    /**
    * Sets rootVolume
    *
    * @param \HuaweiCloud\SDK\Mrs\V2\Model\Volume|null $rootVolume rootVolume
    *
    * @return $this
    */
    public function setRootVolume($rootVolume)
    {
        $this->container['rootVolume'] = $rootVolume;
        return $this;
    }

    /**
    * Gets dataVolume
    *  dataVolume
    *
    * @return \HuaweiCloud\SDK\Mrs\V2\Model\Volume|null
    */
    public function getDataVolume()
    {
        return $this->container['dataVolume'];
    }

    /**
    * Sets dataVolume
    *
    * @param \HuaweiCloud\SDK\Mrs\V2\Model\Volume|null $dataVolume dataVolume
    *
    * @return $this
    */
    public function setDataVolume($dataVolume)
    {
        $this->container['dataVolume'] = $dataVolume;
        return $this;
    }

    /**
    * Gets dataVolumeCount
    *  节点数据磁盘存储数目，取值范围：0～20。
    *
    * @return int|null
    */
    public function getDataVolumeCount()
    {
        return $this->container['dataVolumeCount'];
    }

    /**
    * Sets dataVolumeCount
    *
    * @param int|null $dataVolumeCount 节点数据磁盘存储数目，取值范围：0～20。
    *
    * @return $this
    */
    public function setDataVolumeCount($dataVolumeCount)
    {
        $this->container['dataVolumeCount'] = $dataVolumeCount;
        return $this;
    }

    /**
    * Gets chargeInfo
    *  chargeInfo
    *
    * @return \HuaweiCloud\SDK\Mrs\V2\Model\ChargeInfo|null
    */
    public function getChargeInfo()
    {
        return $this->container['chargeInfo'];
    }

    /**
    * Sets chargeInfo
    *
    * @param \HuaweiCloud\SDK\Mrs\V2\Model\ChargeInfo|null $chargeInfo chargeInfo
    *
    * @return $this
    */
    public function setChargeInfo($chargeInfo)
    {
        $this->container['chargeInfo'] = $chargeInfo;
        return $this;
    }

    /**
    * Gets autoScalingPolicy
    *  autoScalingPolicy
    *
    * @return \HuaweiCloud\SDK\Mrs\V2\Model\AutoScalingPolicy|null
    */
    public function getAutoScalingPolicy()
    {
        return $this->container['autoScalingPolicy'];
    }

    /**
    * Sets autoScalingPolicy
    *
    * @param \HuaweiCloud\SDK\Mrs\V2\Model\AutoScalingPolicy|null $autoScalingPolicy autoScalingPolicy
    *
    * @return $this
    */
    public function setAutoScalingPolicy($autoScalingPolicy)
    {
        $this->container['autoScalingPolicy'] = $autoScalingPolicy;
        return $this;
    }

    /**
    * Gets assignedRoles
    *  当集群类型为CUSTOM时，该参数必选。可以指定节点组中部署的角色，该参数是一个字符串数组，每个字符串表示一个角色表达式。 角色表达式定义： - 当该角色在节点组所有节点部署时： {role name}，如“DataNode”。 - 当该角色在节点组指定下标节点部署时：{role name}:{index1},{index2}…,{indexN}，如“NameNode:1,2”，下标从1开始计数。 - 部分角色支持多实例部署（即在一个节点部署多个同角色的实例）：{role name}[{instance count}]，如“EsNode[9]” 可选的角色请参考[MRS支持的角色与组件对应表](https://support.huaweicloud.com/api-mrs/mrs_02_0106.html)。
    *
    * @return string[]|null
    */
    public function getAssignedRoles()
    {
        return $this->container['assignedRoles'];
    }

    /**
    * Sets assignedRoles
    *
    * @param string[]|null $assignedRoles 当集群类型为CUSTOM时，该参数必选。可以指定节点组中部署的角色，该参数是一个字符串数组，每个字符串表示一个角色表达式。 角色表达式定义： - 当该角色在节点组所有节点部署时： {role name}，如“DataNode”。 - 当该角色在节点组指定下标节点部署时：{role name}:{index1},{index2}…,{indexN}，如“NameNode:1,2”，下标从1开始计数。 - 部分角色支持多实例部署（即在一个节点部署多个同角色的实例）：{role name}[{instance count}]，如“EsNode[9]” 可选的角色请参考[MRS支持的角色与组件对应表](https://support.huaweicloud.com/api-mrs/mrs_02_0106.html)。
    *
    * @return $this
    */
    public function setAssignedRoles($assignedRoles)
    {
        $this->container['assignedRoles'] = $assignedRoles;
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

