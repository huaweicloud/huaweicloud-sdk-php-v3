<?php

namespace HuaweiCloud\SDK\Mrs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeGroupV11 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeGroupV11';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupName  节点组名。 - master_node_default_group - core_node_analysis_group - core_node_streaming_group - task_node_analysis_group - task_node_streaming_group
    * nodeNum  节点数量，取值范围0～500，Core与Task节点总数最大为500个。
    * nodeSize  节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。MRS当前支持主机规格的配型由CPU+内存+Disk共同决定。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    * rootVolumeSize  节点系统磁盘存储大小。
    * rootVolumeType  节点系统磁盘存储类别，目前支持SATA、SAS和SSD。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    * dataVolumeType  节点数据磁盘存储类别，目前支持SATA、SAS和SSD。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    * dataVolumeCount  节点数据磁盘存储数目 取值范围：0～10。
    * dataVolumeSize  节点数据磁盘存储大小 取值范围：100GB～32000GB。
    * autoScalingPolicy  autoScalingPolicy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupName' => 'string',
            'nodeNum' => 'int',
            'nodeSize' => 'string',
            'rootVolumeSize' => 'string',
            'rootVolumeType' => 'string',
            'dataVolumeType' => 'string',
            'dataVolumeCount' => 'int',
            'dataVolumeSize' => 'int',
            'autoScalingPolicy' => '\HuaweiCloud\SDK\Mrs\V1\Model\AutoScalingPolicy'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupName  节点组名。 - master_node_default_group - core_node_analysis_group - core_node_streaming_group - task_node_analysis_group - task_node_streaming_group
    * nodeNum  节点数量，取值范围0～500，Core与Task节点总数最大为500个。
    * nodeSize  节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。MRS当前支持主机规格的配型由CPU+内存+Disk共同决定。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    * rootVolumeSize  节点系统磁盘存储大小。
    * rootVolumeType  节点系统磁盘存储类别，目前支持SATA、SAS和SSD。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    * dataVolumeType  节点数据磁盘存储类别，目前支持SATA、SAS和SSD。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    * dataVolumeCount  节点数据磁盘存储数目 取值范围：0～10。
    * dataVolumeSize  节点数据磁盘存储大小 取值范围：100GB～32000GB。
    * autoScalingPolicy  autoScalingPolicy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupName' => null,
        'nodeNum' => 'int32',
        'nodeSize' => null,
        'rootVolumeSize' => null,
        'rootVolumeType' => null,
        'dataVolumeType' => null,
        'dataVolumeCount' => 'int32',
        'dataVolumeSize' => 'int32',
        'autoScalingPolicy' => null
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
    * groupName  节点组名。 - master_node_default_group - core_node_analysis_group - core_node_streaming_group - task_node_analysis_group - task_node_streaming_group
    * nodeNum  节点数量，取值范围0～500，Core与Task节点总数最大为500个。
    * nodeSize  节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。MRS当前支持主机规格的配型由CPU+内存+Disk共同决定。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    * rootVolumeSize  节点系统磁盘存储大小。
    * rootVolumeType  节点系统磁盘存储类别，目前支持SATA、SAS和SSD。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    * dataVolumeType  节点数据磁盘存储类别，目前支持SATA、SAS和SSD。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    * dataVolumeCount  节点数据磁盘存储数目 取值范围：0～10。
    * dataVolumeSize  节点数据磁盘存储大小 取值范围：100GB～32000GB。
    * autoScalingPolicy  autoScalingPolicy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupName' => 'group_name',
            'nodeNum' => 'node_num',
            'nodeSize' => 'node_size',
            'rootVolumeSize' => 'root_volume_size',
            'rootVolumeType' => 'root_volume_type',
            'dataVolumeType' => 'data_volume_type',
            'dataVolumeCount' => 'data_volume_count',
            'dataVolumeSize' => 'data_volume_size',
            'autoScalingPolicy' => 'auto_scaling_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupName  节点组名。 - master_node_default_group - core_node_analysis_group - core_node_streaming_group - task_node_analysis_group - task_node_streaming_group
    * nodeNum  节点数量，取值范围0～500，Core与Task节点总数最大为500个。
    * nodeSize  节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。MRS当前支持主机规格的配型由CPU+内存+Disk共同决定。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    * rootVolumeSize  节点系统磁盘存储大小。
    * rootVolumeType  节点系统磁盘存储类别，目前支持SATA、SAS和SSD。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    * dataVolumeType  节点数据磁盘存储类别，目前支持SATA、SAS和SSD。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    * dataVolumeCount  节点数据磁盘存储数目 取值范围：0～10。
    * dataVolumeSize  节点数据磁盘存储大小 取值范围：100GB～32000GB。
    * autoScalingPolicy  autoScalingPolicy
    *
    * @var string[]
    */
    protected static $setters = [
            'groupName' => 'setGroupName',
            'nodeNum' => 'setNodeNum',
            'nodeSize' => 'setNodeSize',
            'rootVolumeSize' => 'setRootVolumeSize',
            'rootVolumeType' => 'setRootVolumeType',
            'dataVolumeType' => 'setDataVolumeType',
            'dataVolumeCount' => 'setDataVolumeCount',
            'dataVolumeSize' => 'setDataVolumeSize',
            'autoScalingPolicy' => 'setAutoScalingPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupName  节点组名。 - master_node_default_group - core_node_analysis_group - core_node_streaming_group - task_node_analysis_group - task_node_streaming_group
    * nodeNum  节点数量，取值范围0～500，Core与Task节点总数最大为500个。
    * nodeSize  节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。MRS当前支持主机规格的配型由CPU+内存+Disk共同决定。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    * rootVolumeSize  节点系统磁盘存储大小。
    * rootVolumeType  节点系统磁盘存储类别，目前支持SATA、SAS和SSD。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    * dataVolumeType  节点数据磁盘存储类别，目前支持SATA、SAS和SSD。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    * dataVolumeCount  节点数据磁盘存储数目 取值范围：0～10。
    * dataVolumeSize  节点数据磁盘存储大小 取值范围：100GB～32000GB。
    * autoScalingPolicy  autoScalingPolicy
    *
    * @var string[]
    */
    protected static $getters = [
            'groupName' => 'getGroupName',
            'nodeNum' => 'getNodeNum',
            'nodeSize' => 'getNodeSize',
            'rootVolumeSize' => 'getRootVolumeSize',
            'rootVolumeType' => 'getRootVolumeType',
            'dataVolumeType' => 'getDataVolumeType',
            'dataVolumeCount' => 'getDataVolumeCount',
            'dataVolumeSize' => 'getDataVolumeSize',
            'autoScalingPolicy' => 'getAutoScalingPolicy'
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
        $this->container['rootVolumeSize'] = isset($data['rootVolumeSize']) ? $data['rootVolumeSize'] : null;
        $this->container['rootVolumeType'] = isset($data['rootVolumeType']) ? $data['rootVolumeType'] : null;
        $this->container['dataVolumeType'] = isset($data['dataVolumeType']) ? $data['dataVolumeType'] : null;
        $this->container['dataVolumeCount'] = isset($data['dataVolumeCount']) ? $data['dataVolumeCount'] : null;
        $this->container['dataVolumeSize'] = isset($data['dataVolumeSize']) ? $data['dataVolumeSize'] : null;
        $this->container['autoScalingPolicy'] = isset($data['autoScalingPolicy']) ? $data['autoScalingPolicy'] : null;
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
    *  节点组名。 - master_node_default_group - core_node_analysis_group - core_node_streaming_group - task_node_analysis_group - task_node_streaming_group
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
    * @param string $groupName 节点组名。 - master_node_default_group - core_node_analysis_group - core_node_streaming_group - task_node_analysis_group - task_node_streaming_group
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
    *  节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。MRS当前支持主机规格的配型由CPU+内存+Disk共同决定。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
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
    * @param string $nodeSize 节点的实例规格，例如：c3.4xlarge.2.linux.bigdata。MRS当前支持主机规格的配型由CPU+内存+Disk共同决定。实例规格详细说明请参见[MRS所使用的弹性云服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9006.html)和[MRS所使用的裸金属服务器规格](https://support.huaweicloud.com/api-mrs/mrs_01_9001.html)。 该参数建议从MRS控制台的集群创建页面获取对应区域对应版本所支持的规格。
    *
    * @return $this
    */
    public function setNodeSize($nodeSize)
    {
        $this->container['nodeSize'] = $nodeSize;
        return $this;
    }

    /**
    * Gets rootVolumeSize
    *  节点系统磁盘存储大小。
    *
    * @return string|null
    */
    public function getRootVolumeSize()
    {
        return $this->container['rootVolumeSize'];
    }

    /**
    * Sets rootVolumeSize
    *
    * @param string|null $rootVolumeSize 节点系统磁盘存储大小。
    *
    * @return $this
    */
    public function setRootVolumeSize($rootVolumeSize)
    {
        $this->container['rootVolumeSize'] = $rootVolumeSize;
        return $this;
    }

    /**
    * Gets rootVolumeType
    *  节点系统磁盘存储类别，目前支持SATA、SAS和SSD。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    *
    * @return string|null
    */
    public function getRootVolumeType()
    {
        return $this->container['rootVolumeType'];
    }

    /**
    * Sets rootVolumeType
    *
    * @param string|null $rootVolumeType 节点系统磁盘存储类别，目前支持SATA、SAS和SSD。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    *
    * @return $this
    */
    public function setRootVolumeType($rootVolumeType)
    {
        $this->container['rootVolumeType'] = $rootVolumeType;
        return $this;
    }

    /**
    * Gets dataVolumeType
    *  节点数据磁盘存储类别，目前支持SATA、SAS和SSD。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    *
    * @return string|null
    */
    public function getDataVolumeType()
    {
        return $this->container['dataVolumeType'];
    }

    /**
    * Sets dataVolumeType
    *
    * @param string|null $dataVolumeType 节点数据磁盘存储类别，目前支持SATA、SAS和SSD。 - SATA：普通IO - SAS：高IO - SSD：超高IO - GPSSD：通用型SSD
    *
    * @return $this
    */
    public function setDataVolumeType($dataVolumeType)
    {
        $this->container['dataVolumeType'] = $dataVolumeType;
        return $this;
    }

    /**
    * Gets dataVolumeCount
    *  节点数据磁盘存储数目 取值范围：0～10。
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
    * @param int|null $dataVolumeCount 节点数据磁盘存储数目 取值范围：0～10。
    *
    * @return $this
    */
    public function setDataVolumeCount($dataVolumeCount)
    {
        $this->container['dataVolumeCount'] = $dataVolumeCount;
        return $this;
    }

    /**
    * Gets dataVolumeSize
    *  节点数据磁盘存储大小 取值范围：100GB～32000GB。
    *
    * @return int|null
    */
    public function getDataVolumeSize()
    {
        return $this->container['dataVolumeSize'];
    }

    /**
    * Sets dataVolumeSize
    *
    * @param int|null $dataVolumeSize 节点数据磁盘存储大小 取值范围：100GB～32000GB。
    *
    * @return $this
    */
    public function setDataVolumeSize($dataVolumeSize)
    {
        $this->container['dataVolumeSize'] = $dataVolumeSize;
        return $this;
    }

    /**
    * Gets autoScalingPolicy
    *  autoScalingPolicy
    *
    * @return \HuaweiCloud\SDK\Mrs\V1\Model\AutoScalingPolicy|null
    */
    public function getAutoScalingPolicy()
    {
        return $this->container['autoScalingPolicy'];
    }

    /**
    * Sets autoScalingPolicy
    *
    * @param \HuaweiCloud\SDK\Mrs\V1\Model\AutoScalingPolicy|null $autoScalingPolicy autoScalingPolicy
    *
    * @return $this
    */
    public function setAutoScalingPolicy($autoScalingPolicy)
    {
        $this->container['autoScalingPolicy'] = $autoScalingPolicy;
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

