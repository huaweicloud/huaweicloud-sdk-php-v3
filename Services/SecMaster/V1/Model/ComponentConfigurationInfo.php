<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComponentConfigurationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComponentConfigurationInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configurationStatus  节点配置状态 UN_SAVED 未保存 SAVE_AND_UN_DEPLOY 保存未部署 DEPLOYING正在部署 MOVE_AND_UN_DEPLOY 移除未应用 FAIL_DEPLOY部署失败 DEPLOYED已部署
    * list  文件参数信息
    * nodeId  节点ID
    * nodeName  节点名
    * nodeStatus  枚举 节点状态 NORMAL正常 ANOMALIES异常 FAULTS 故障 LOST_CONTACT 失联
    * specification  节点规格
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configurationStatus' => 'string',
            'list' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ComponentConfigurationParamVo[]',
            'nodeId' => 'string',
            'nodeName' => 'string',
            'nodeStatus' => 'string',
            'specification' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configurationStatus  节点配置状态 UN_SAVED 未保存 SAVE_AND_UN_DEPLOY 保存未部署 DEPLOYING正在部署 MOVE_AND_UN_DEPLOY 移除未应用 FAIL_DEPLOY部署失败 DEPLOYED已部署
    * list  文件参数信息
    * nodeId  节点ID
    * nodeName  节点名
    * nodeStatus  枚举 节点状态 NORMAL正常 ANOMALIES异常 FAULTS 故障 LOST_CONTACT 失联
    * specification  节点规格
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configurationStatus' => null,
        'list' => null,
        'nodeId' => null,
        'nodeName' => null,
        'nodeStatus' => null,
        'specification' => null
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
    * configurationStatus  节点配置状态 UN_SAVED 未保存 SAVE_AND_UN_DEPLOY 保存未部署 DEPLOYING正在部署 MOVE_AND_UN_DEPLOY 移除未应用 FAIL_DEPLOY部署失败 DEPLOYED已部署
    * list  文件参数信息
    * nodeId  节点ID
    * nodeName  节点名
    * nodeStatus  枚举 节点状态 NORMAL正常 ANOMALIES异常 FAULTS 故障 LOST_CONTACT 失联
    * specification  节点规格
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configurationStatus' => 'configuration_status',
            'list' => 'list',
            'nodeId' => 'node_id',
            'nodeName' => 'node_name',
            'nodeStatus' => 'node_status',
            'specification' => 'specification'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configurationStatus  节点配置状态 UN_SAVED 未保存 SAVE_AND_UN_DEPLOY 保存未部署 DEPLOYING正在部署 MOVE_AND_UN_DEPLOY 移除未应用 FAIL_DEPLOY部署失败 DEPLOYED已部署
    * list  文件参数信息
    * nodeId  节点ID
    * nodeName  节点名
    * nodeStatus  枚举 节点状态 NORMAL正常 ANOMALIES异常 FAULTS 故障 LOST_CONTACT 失联
    * specification  节点规格
    *
    * @var string[]
    */
    protected static $setters = [
            'configurationStatus' => 'setConfigurationStatus',
            'list' => 'setList',
            'nodeId' => 'setNodeId',
            'nodeName' => 'setNodeName',
            'nodeStatus' => 'setNodeStatus',
            'specification' => 'setSpecification'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configurationStatus  节点配置状态 UN_SAVED 未保存 SAVE_AND_UN_DEPLOY 保存未部署 DEPLOYING正在部署 MOVE_AND_UN_DEPLOY 移除未应用 FAIL_DEPLOY部署失败 DEPLOYED已部署
    * list  文件参数信息
    * nodeId  节点ID
    * nodeName  节点名
    * nodeStatus  枚举 节点状态 NORMAL正常 ANOMALIES异常 FAULTS 故障 LOST_CONTACT 失联
    * specification  节点规格
    *
    * @var string[]
    */
    protected static $getters = [
            'configurationStatus' => 'getConfigurationStatus',
            'list' => 'getList',
            'nodeId' => 'getNodeId',
            'nodeName' => 'getNodeName',
            'nodeStatus' => 'getNodeStatus',
            'specification' => 'getSpecification'
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
        $this->container['configurationStatus'] = isset($data['configurationStatus']) ? $data['configurationStatus'] : null;
        $this->container['list'] = isset($data['list']) ? $data['list'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['nodeStatus'] = isset($data['nodeStatus']) ? $data['nodeStatus'] : null;
        $this->container['specification'] = isset($data['specification']) ? $data['specification'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['configurationStatus']) && (mb_strlen($this->container['configurationStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'configurationStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['configurationStatus']) && (mb_strlen($this->container['configurationStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'configurationStatus', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
        }
            if ((mb_strlen($this->container['nodeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['nodeId']) < 32)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['nodeName'] === null) {
            $invalidProperties[] = "'nodeName' can't be null";
        }
            if ((mb_strlen($this->container['nodeName']) > 256)) {
                $invalidProperties[] = "invalid value for 'nodeName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['nodeName']) < 0)) {
                $invalidProperties[] = "invalid value for 'nodeName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['nodeStatus'] === null) {
            $invalidProperties[] = "'nodeStatus' can't be null";
        }
            if ((mb_strlen($this->container['nodeStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'nodeStatus', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['nodeStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'nodeStatus', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['specification'] === null) {
            $invalidProperties[] = "'specification' can't be null";
        }
            if ((mb_strlen($this->container['specification']) > 256)) {
                $invalidProperties[] = "invalid value for 'specification', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['specification']) < 0)) {
                $invalidProperties[] = "invalid value for 'specification', the character length must be bigger than or equal to 0.";
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
    * Gets configurationStatus
    *  节点配置状态 UN_SAVED 未保存 SAVE_AND_UN_DEPLOY 保存未部署 DEPLOYING正在部署 MOVE_AND_UN_DEPLOY 移除未应用 FAIL_DEPLOY部署失败 DEPLOYED已部署
    *
    * @return string|null
    */
    public function getConfigurationStatus()
    {
        return $this->container['configurationStatus'];
    }

    /**
    * Sets configurationStatus
    *
    * @param string|null $configurationStatus 节点配置状态 UN_SAVED 未保存 SAVE_AND_UN_DEPLOY 保存未部署 DEPLOYING正在部署 MOVE_AND_UN_DEPLOY 移除未应用 FAIL_DEPLOY部署失败 DEPLOYED已部署
    *
    * @return $this
    */
    public function setConfigurationStatus($configurationStatus)
    {
        $this->container['configurationStatus'] = $configurationStatus;
        return $this;
    }

    /**
    * Gets list
    *  文件参数信息
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ComponentConfigurationParamVo[]|null
    */
    public function getList()
    {
        return $this->container['list'];
    }

    /**
    * Sets list
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ComponentConfigurationParamVo[]|null $list 文件参数信息
    *
    * @return $this
    */
    public function setList($list)
    {
        $this->container['list'] = $list;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID
    *
    * @return string
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string $nodeId 节点ID
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets nodeName
    *  节点名
    *
    * @return string
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string $nodeName 节点名
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets nodeStatus
    *  枚举 节点状态 NORMAL正常 ANOMALIES异常 FAULTS 故障 LOST_CONTACT 失联
    *
    * @return string
    */
    public function getNodeStatus()
    {
        return $this->container['nodeStatus'];
    }

    /**
    * Sets nodeStatus
    *
    * @param string $nodeStatus 枚举 节点状态 NORMAL正常 ANOMALIES异常 FAULTS 故障 LOST_CONTACT 失联
    *
    * @return $this
    */
    public function setNodeStatus($nodeStatus)
    {
        $this->container['nodeStatus'] = $nodeStatus;
        return $this;
    }

    /**
    * Gets specification
    *  节点规格
    *
    * @return string
    */
    public function getSpecification()
    {
        return $this->container['specification'];
    }

    /**
    * Sets specification
    *
    * @param string $specification 节点规格
    *
    * @return $this
    */
    public function setSpecification($specification)
    {
        $this->container['specification'] = $specification;
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

