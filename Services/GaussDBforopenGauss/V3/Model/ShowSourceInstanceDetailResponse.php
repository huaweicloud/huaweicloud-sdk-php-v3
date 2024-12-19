<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSourceInstanceDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSourceInstanceDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterMode  实例部署形态。集中式Ha(主备)、分布式Independent(独立部署)。
    * instanceMode  实例模型，企业版enterprise，标准版standard，基础版basic。
    * dataVolumeSize  磁盘大小，单位：GB。
    * solution  解决方案模板类型。集中式Ha一般用triset，分布式Independent一般为空或者默认hws。  描述如下：  triset：高可用(1主2备)  hws：默认。
    * nodeNum  节点数量。
    * coordinatorNum  协调节点数量。
    * shardingNum  分片数量。
    * replicaNum  副本数量。
    * engineVersion  引擎版本。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterMode' => 'string',
            'instanceMode' => 'string',
            'dataVolumeSize' => 'string',
            'solution' => 'string',
            'nodeNum' => 'int',
            'coordinatorNum' => 'int',
            'shardingNum' => 'int',
            'replicaNum' => 'int',
            'engineVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterMode  实例部署形态。集中式Ha(主备)、分布式Independent(独立部署)。
    * instanceMode  实例模型，企业版enterprise，标准版standard，基础版basic。
    * dataVolumeSize  磁盘大小，单位：GB。
    * solution  解决方案模板类型。集中式Ha一般用triset，分布式Independent一般为空或者默认hws。  描述如下：  triset：高可用(1主2备)  hws：默认。
    * nodeNum  节点数量。
    * coordinatorNum  协调节点数量。
    * shardingNum  分片数量。
    * replicaNum  副本数量。
    * engineVersion  引擎版本。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterMode' => null,
        'instanceMode' => null,
        'dataVolumeSize' => null,
        'solution' => null,
        'nodeNum' => null,
        'coordinatorNum' => null,
        'shardingNum' => null,
        'replicaNum' => null,
        'engineVersion' => null
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
    * clusterMode  实例部署形态。集中式Ha(主备)、分布式Independent(独立部署)。
    * instanceMode  实例模型，企业版enterprise，标准版standard，基础版basic。
    * dataVolumeSize  磁盘大小，单位：GB。
    * solution  解决方案模板类型。集中式Ha一般用triset，分布式Independent一般为空或者默认hws。  描述如下：  triset：高可用(1主2备)  hws：默认。
    * nodeNum  节点数量。
    * coordinatorNum  协调节点数量。
    * shardingNum  分片数量。
    * replicaNum  副本数量。
    * engineVersion  引擎版本。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterMode' => 'cluster_mode',
            'instanceMode' => 'instance_mode',
            'dataVolumeSize' => 'data_volume_size',
            'solution' => 'solution',
            'nodeNum' => 'node_num',
            'coordinatorNum' => 'coordinator_num',
            'shardingNum' => 'sharding_num',
            'replicaNum' => 'replica_num',
            'engineVersion' => 'engine_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterMode  实例部署形态。集中式Ha(主备)、分布式Independent(独立部署)。
    * instanceMode  实例模型，企业版enterprise，标准版standard，基础版basic。
    * dataVolumeSize  磁盘大小，单位：GB。
    * solution  解决方案模板类型。集中式Ha一般用triset，分布式Independent一般为空或者默认hws。  描述如下：  triset：高可用(1主2备)  hws：默认。
    * nodeNum  节点数量。
    * coordinatorNum  协调节点数量。
    * shardingNum  分片数量。
    * replicaNum  副本数量。
    * engineVersion  引擎版本。
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterMode' => 'setClusterMode',
            'instanceMode' => 'setInstanceMode',
            'dataVolumeSize' => 'setDataVolumeSize',
            'solution' => 'setSolution',
            'nodeNum' => 'setNodeNum',
            'coordinatorNum' => 'setCoordinatorNum',
            'shardingNum' => 'setShardingNum',
            'replicaNum' => 'setReplicaNum',
            'engineVersion' => 'setEngineVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterMode  实例部署形态。集中式Ha(主备)、分布式Independent(独立部署)。
    * instanceMode  实例模型，企业版enterprise，标准版standard，基础版basic。
    * dataVolumeSize  磁盘大小，单位：GB。
    * solution  解决方案模板类型。集中式Ha一般用triset，分布式Independent一般为空或者默认hws。  描述如下：  triset：高可用(1主2备)  hws：默认。
    * nodeNum  节点数量。
    * coordinatorNum  协调节点数量。
    * shardingNum  分片数量。
    * replicaNum  副本数量。
    * engineVersion  引擎版本。
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterMode' => 'getClusterMode',
            'instanceMode' => 'getInstanceMode',
            'dataVolumeSize' => 'getDataVolumeSize',
            'solution' => 'getSolution',
            'nodeNum' => 'getNodeNum',
            'coordinatorNum' => 'getCoordinatorNum',
            'shardingNum' => 'getShardingNum',
            'replicaNum' => 'getReplicaNum',
            'engineVersion' => 'getEngineVersion'
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
    const CLUSTER_MODE_HA = 'Ha';
    const CLUSTER_MODE_INDEPENDENT = 'Independent';
    const INSTANCE_MODE_BASIC = 'basic';
    const INSTANCE_MODE_STANDARD = 'standard';
    const INSTANCE_MODE_ENTERPRISE = 'enterprise';
    const SOLUTION_TRISET = 'triset';
    const SOLUTION_HWS = 'hws';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getClusterModeAllowableValues()
    {
        return [
            self::CLUSTER_MODE_HA,
            self::CLUSTER_MODE_INDEPENDENT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInstanceModeAllowableValues()
    {
        return [
            self::INSTANCE_MODE_BASIC,
            self::INSTANCE_MODE_STANDARD,
            self::INSTANCE_MODE_ENTERPRISE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSolutionAllowableValues()
    {
        return [
            self::SOLUTION_TRISET,
            self::SOLUTION_HWS,
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
        $this->container['clusterMode'] = isset($data['clusterMode']) ? $data['clusterMode'] : null;
        $this->container['instanceMode'] = isset($data['instanceMode']) ? $data['instanceMode'] : null;
        $this->container['dataVolumeSize'] = isset($data['dataVolumeSize']) ? $data['dataVolumeSize'] : null;
        $this->container['solution'] = isset($data['solution']) ? $data['solution'] : null;
        $this->container['nodeNum'] = isset($data['nodeNum']) ? $data['nodeNum'] : null;
        $this->container['coordinatorNum'] = isset($data['coordinatorNum']) ? $data['coordinatorNum'] : null;
        $this->container['shardingNum'] = isset($data['shardingNum']) ? $data['shardingNum'] : null;
        $this->container['replicaNum'] = isset($data['replicaNum']) ? $data['replicaNum'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getClusterModeAllowableValues();
                if (!is_null($this->container['clusterMode']) && !in_array($this->container['clusterMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'clusterMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getInstanceModeAllowableValues();
                if (!is_null($this->container['instanceMode']) && !in_array($this->container['instanceMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'instanceMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSolutionAllowableValues();
                if (!is_null($this->container['solution']) && !in_array($this->container['solution'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'solution', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets clusterMode
    *  实例部署形态。集中式Ha(主备)、分布式Independent(独立部署)。
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
    * @param string|null $clusterMode 实例部署形态。集中式Ha(主备)、分布式Independent(独立部署)。
    *
    * @return $this
    */
    public function setClusterMode($clusterMode)
    {
        $this->container['clusterMode'] = $clusterMode;
        return $this;
    }

    /**
    * Gets instanceMode
    *  实例模型，企业版enterprise，标准版standard，基础版basic。
    *
    * @return string|null
    */
    public function getInstanceMode()
    {
        return $this->container['instanceMode'];
    }

    /**
    * Sets instanceMode
    *
    * @param string|null $instanceMode 实例模型，企业版enterprise，标准版standard，基础版basic。
    *
    * @return $this
    */
    public function setInstanceMode($instanceMode)
    {
        $this->container['instanceMode'] = $instanceMode;
        return $this;
    }

    /**
    * Gets dataVolumeSize
    *  磁盘大小，单位：GB。
    *
    * @return string|null
    */
    public function getDataVolumeSize()
    {
        return $this->container['dataVolumeSize'];
    }

    /**
    * Sets dataVolumeSize
    *
    * @param string|null $dataVolumeSize 磁盘大小，单位：GB。
    *
    * @return $this
    */
    public function setDataVolumeSize($dataVolumeSize)
    {
        $this->container['dataVolumeSize'] = $dataVolumeSize;
        return $this;
    }

    /**
    * Gets solution
    *  解决方案模板类型。集中式Ha一般用triset，分布式Independent一般为空或者默认hws。  描述如下：  triset：高可用(1主2备)  hws：默认。
    *
    * @return string|null
    */
    public function getSolution()
    {
        return $this->container['solution'];
    }

    /**
    * Sets solution
    *
    * @param string|null $solution 解决方案模板类型。集中式Ha一般用triset，分布式Independent一般为空或者默认hws。  描述如下：  triset：高可用(1主2备)  hws：默认。
    *
    * @return $this
    */
    public function setSolution($solution)
    {
        $this->container['solution'] = $solution;
        return $this;
    }

    /**
    * Gets nodeNum
    *  节点数量。
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
    * @param int|null $nodeNum 节点数量。
    *
    * @return $this
    */
    public function setNodeNum($nodeNum)
    {
        $this->container['nodeNum'] = $nodeNum;
        return $this;
    }

    /**
    * Gets coordinatorNum
    *  协调节点数量。
    *
    * @return int|null
    */
    public function getCoordinatorNum()
    {
        return $this->container['coordinatorNum'];
    }

    /**
    * Sets coordinatorNum
    *
    * @param int|null $coordinatorNum 协调节点数量。
    *
    * @return $this
    */
    public function setCoordinatorNum($coordinatorNum)
    {
        $this->container['coordinatorNum'] = $coordinatorNum;
        return $this;
    }

    /**
    * Gets shardingNum
    *  分片数量。
    *
    * @return int|null
    */
    public function getShardingNum()
    {
        return $this->container['shardingNum'];
    }

    /**
    * Sets shardingNum
    *
    * @param int|null $shardingNum 分片数量。
    *
    * @return $this
    */
    public function setShardingNum($shardingNum)
    {
        $this->container['shardingNum'] = $shardingNum;
        return $this;
    }

    /**
    * Gets replicaNum
    *  副本数量。
    *
    * @return int|null
    */
    public function getReplicaNum()
    {
        return $this->container['replicaNum'];
    }

    /**
    * Sets replicaNum
    *
    * @param int|null $replicaNum 副本数量。
    *
    * @return $this
    */
    public function setReplicaNum($replicaNum)
    {
        $this->container['replicaNum'] = $replicaNum;
        return $this;
    }

    /**
    * Gets engineVersion
    *  引擎版本。
    *
    * @return string|null
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string|null $engineVersion 引擎版本。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
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

