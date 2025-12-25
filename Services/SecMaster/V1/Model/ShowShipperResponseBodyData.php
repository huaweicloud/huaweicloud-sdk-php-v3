<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowShipperResponseBodyData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowShipperResponseBody_data';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * consumptionType  消费类型
    * createTime  创建时间（时间戳）
    * dataspaceId  数据空间ID
    * dataspaceName  数据空间名称
    * domainId  域ID
    * id  管道ID
    * pipeId  管道ID
    * pipeName  管道名称
    * projectId  项目ID
    * shipperDestination  shipperDestination
    * shipperId  投递ID
    * shipperName  投递名称
    * shipperSource  shipperSource
    * status  状态
    * updateTime  更新时间（时间戳）
    * version  版本
    * workspaceId  工作空间ID
    * workspaceName  工作空间名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'consumptionType' => 'int',
            'createTime' => 'int',
            'dataspaceId' => 'string',
            'dataspaceName' => 'string',
            'domainId' => 'string',
            'id' => 'int',
            'pipeId' => 'string',
            'pipeName' => 'string',
            'projectId' => 'string',
            'shipperDestination' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ShowShipperResponseBodyDataShipperDestination',
            'shipperId' => 'string',
            'shipperName' => 'string',
            'shipperSource' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ShowShipperResponseBodyDataShipperSource',
            'status' => 'int',
            'updateTime' => 'int',
            'version' => 'string',
            'workspaceId' => 'string',
            'workspaceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * consumptionType  消费类型
    * createTime  创建时间（时间戳）
    * dataspaceId  数据空间ID
    * dataspaceName  数据空间名称
    * domainId  域ID
    * id  管道ID
    * pipeId  管道ID
    * pipeName  管道名称
    * projectId  项目ID
    * shipperDestination  shipperDestination
    * shipperId  投递ID
    * shipperName  投递名称
    * shipperSource  shipperSource
    * status  状态
    * updateTime  更新时间（时间戳）
    * version  版本
    * workspaceId  工作空间ID
    * workspaceName  工作空间名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'consumptionType' => null,
        'createTime' => 'int64',
        'dataspaceId' => null,
        'dataspaceName' => null,
        'domainId' => null,
        'id' => null,
        'pipeId' => null,
        'pipeName' => null,
        'projectId' => null,
        'shipperDestination' => null,
        'shipperId' => null,
        'shipperName' => null,
        'shipperSource' => null,
        'status' => null,
        'updateTime' => 'int64',
        'version' => null,
        'workspaceId' => null,
        'workspaceName' => null
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
    * consumptionType  消费类型
    * createTime  创建时间（时间戳）
    * dataspaceId  数据空间ID
    * dataspaceName  数据空间名称
    * domainId  域ID
    * id  管道ID
    * pipeId  管道ID
    * pipeName  管道名称
    * projectId  项目ID
    * shipperDestination  shipperDestination
    * shipperId  投递ID
    * shipperName  投递名称
    * shipperSource  shipperSource
    * status  状态
    * updateTime  更新时间（时间戳）
    * version  版本
    * workspaceId  工作空间ID
    * workspaceName  工作空间名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'consumptionType' => 'consumption_type',
            'createTime' => 'create_time',
            'dataspaceId' => 'dataspace_id',
            'dataspaceName' => 'dataspace_name',
            'domainId' => 'domain_id',
            'id' => 'id',
            'pipeId' => 'pipe_id',
            'pipeName' => 'pipe_name',
            'projectId' => 'project_id',
            'shipperDestination' => 'shipper_destination',
            'shipperId' => 'shipper_id',
            'shipperName' => 'shipper_name',
            'shipperSource' => 'shipper_source',
            'status' => 'status',
            'updateTime' => 'update_time',
            'version' => 'version',
            'workspaceId' => 'workspace_id',
            'workspaceName' => 'workspace_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * consumptionType  消费类型
    * createTime  创建时间（时间戳）
    * dataspaceId  数据空间ID
    * dataspaceName  数据空间名称
    * domainId  域ID
    * id  管道ID
    * pipeId  管道ID
    * pipeName  管道名称
    * projectId  项目ID
    * shipperDestination  shipperDestination
    * shipperId  投递ID
    * shipperName  投递名称
    * shipperSource  shipperSource
    * status  状态
    * updateTime  更新时间（时间戳）
    * version  版本
    * workspaceId  工作空间ID
    * workspaceName  工作空间名称
    *
    * @var string[]
    */
    protected static $setters = [
            'consumptionType' => 'setConsumptionType',
            'createTime' => 'setCreateTime',
            'dataspaceId' => 'setDataspaceId',
            'dataspaceName' => 'setDataspaceName',
            'domainId' => 'setDomainId',
            'id' => 'setId',
            'pipeId' => 'setPipeId',
            'pipeName' => 'setPipeName',
            'projectId' => 'setProjectId',
            'shipperDestination' => 'setShipperDestination',
            'shipperId' => 'setShipperId',
            'shipperName' => 'setShipperName',
            'shipperSource' => 'setShipperSource',
            'status' => 'setStatus',
            'updateTime' => 'setUpdateTime',
            'version' => 'setVersion',
            'workspaceId' => 'setWorkspaceId',
            'workspaceName' => 'setWorkspaceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * consumptionType  消费类型
    * createTime  创建时间（时间戳）
    * dataspaceId  数据空间ID
    * dataspaceName  数据空间名称
    * domainId  域ID
    * id  管道ID
    * pipeId  管道ID
    * pipeName  管道名称
    * projectId  项目ID
    * shipperDestination  shipperDestination
    * shipperId  投递ID
    * shipperName  投递名称
    * shipperSource  shipperSource
    * status  状态
    * updateTime  更新时间（时间戳）
    * version  版本
    * workspaceId  工作空间ID
    * workspaceName  工作空间名称
    *
    * @var string[]
    */
    protected static $getters = [
            'consumptionType' => 'getConsumptionType',
            'createTime' => 'getCreateTime',
            'dataspaceId' => 'getDataspaceId',
            'dataspaceName' => 'getDataspaceName',
            'domainId' => 'getDomainId',
            'id' => 'getId',
            'pipeId' => 'getPipeId',
            'pipeName' => 'getPipeName',
            'projectId' => 'getProjectId',
            'shipperDestination' => 'getShipperDestination',
            'shipperId' => 'getShipperId',
            'shipperName' => 'getShipperName',
            'shipperSource' => 'getShipperSource',
            'status' => 'getStatus',
            'updateTime' => 'getUpdateTime',
            'version' => 'getVersion',
            'workspaceId' => 'getWorkspaceId',
            'workspaceName' => 'getWorkspaceName'
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
        $this->container['consumptionType'] = isset($data['consumptionType']) ? $data['consumptionType'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['dataspaceId'] = isset($data['dataspaceId']) ? $data['dataspaceId'] : null;
        $this->container['dataspaceName'] = isset($data['dataspaceName']) ? $data['dataspaceName'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['pipeId'] = isset($data['pipeId']) ? $data['pipeId'] : null;
        $this->container['pipeName'] = isset($data['pipeName']) ? $data['pipeName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['shipperDestination'] = isset($data['shipperDestination']) ? $data['shipperDestination'] : null;
        $this->container['shipperId'] = isset($data['shipperId']) ? $data['shipperId'] : null;
        $this->container['shipperName'] = isset($data['shipperName']) ? $data['shipperName'] : null;
        $this->container['shipperSource'] = isset($data['shipperSource']) ? $data['shipperSource'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['workspaceName'] = isset($data['workspaceName']) ? $data['workspaceName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dataspaceId']) && (mb_strlen($this->container['dataspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['dataspaceId']) && (mb_strlen($this->container['dataspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['dataspaceName']) && (mb_strlen($this->container['dataspaceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'dataspaceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['dataspaceName']) && (mb_strlen($this->container['dataspaceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataspaceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['pipeId']) && (mb_strlen($this->container['pipeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['pipeId']) && (mb_strlen($this->container['pipeId']) < 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['pipeName']) && (mb_strlen($this->container['pipeName']) > 128)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['pipeName']) && (mb_strlen($this->container['pipeName']) < 1)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['shipperId']) && (mb_strlen($this->container['shipperId']) > 36)) {
                $invalidProperties[] = "invalid value for 'shipperId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['shipperId']) && (mb_strlen($this->container['shipperId']) < 36)) {
                $invalidProperties[] = "invalid value for 'shipperId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['shipperName']) && (mb_strlen($this->container['shipperName']) > 128)) {
                $invalidProperties[] = "invalid value for 'shipperName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['shipperName']) && (mb_strlen($this->container['shipperName']) < 1)) {
                $invalidProperties[] = "invalid value for 'shipperName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 128)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['workspaceName']) && (mb_strlen($this->container['workspaceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'workspaceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['workspaceName']) && (mb_strlen($this->container['workspaceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspaceName', the character length must be bigger than or equal to 1.";
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
    * Gets consumptionType
    *  消费类型
    *
    * @return int|null
    */
    public function getConsumptionType()
    {
        return $this->container['consumptionType'];
    }

    /**
    * Sets consumptionType
    *
    * @param int|null $consumptionType 消费类型
    *
    * @return $this
    */
    public function setConsumptionType($consumptionType)
    {
        $this->container['consumptionType'] = $consumptionType;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间（时间戳）
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间（时间戳）
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets dataspaceId
    *  数据空间ID
    *
    * @return string|null
    */
    public function getDataspaceId()
    {
        return $this->container['dataspaceId'];
    }

    /**
    * Sets dataspaceId
    *
    * @param string|null $dataspaceId 数据空间ID
    *
    * @return $this
    */
    public function setDataspaceId($dataspaceId)
    {
        $this->container['dataspaceId'] = $dataspaceId;
        return $this;
    }

    /**
    * Gets dataspaceName
    *  数据空间名称
    *
    * @return string|null
    */
    public function getDataspaceName()
    {
        return $this->container['dataspaceName'];
    }

    /**
    * Sets dataspaceName
    *
    * @param string|null $dataspaceName 数据空间名称
    *
    * @return $this
    */
    public function setDataspaceName($dataspaceName)
    {
        $this->container['dataspaceName'] = $dataspaceName;
        return $this;
    }

    /**
    * Gets domainId
    *  域ID
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 域ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets id
    *  管道ID
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 管道ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets pipeId
    *  管道ID
    *
    * @return string|null
    */
    public function getPipeId()
    {
        return $this->container['pipeId'];
    }

    /**
    * Sets pipeId
    *
    * @param string|null $pipeId 管道ID
    *
    * @return $this
    */
    public function setPipeId($pipeId)
    {
        $this->container['pipeId'] = $pipeId;
        return $this;
    }

    /**
    * Gets pipeName
    *  管道名称
    *
    * @return string|null
    */
    public function getPipeName()
    {
        return $this->container['pipeName'];
    }

    /**
    * Sets pipeName
    *
    * @param string|null $pipeName 管道名称
    *
    * @return $this
    */
    public function setPipeName($pipeName)
    {
        $this->container['pipeName'] = $pipeName;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets shipperDestination
    *  shipperDestination
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ShowShipperResponseBodyDataShipperDestination|null
    */
    public function getShipperDestination()
    {
        return $this->container['shipperDestination'];
    }

    /**
    * Sets shipperDestination
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ShowShipperResponseBodyDataShipperDestination|null $shipperDestination shipperDestination
    *
    * @return $this
    */
    public function setShipperDestination($shipperDestination)
    {
        $this->container['shipperDestination'] = $shipperDestination;
        return $this;
    }

    /**
    * Gets shipperId
    *  投递ID
    *
    * @return string|null
    */
    public function getShipperId()
    {
        return $this->container['shipperId'];
    }

    /**
    * Sets shipperId
    *
    * @param string|null $shipperId 投递ID
    *
    * @return $this
    */
    public function setShipperId($shipperId)
    {
        $this->container['shipperId'] = $shipperId;
        return $this;
    }

    /**
    * Gets shipperName
    *  投递名称
    *
    * @return string|null
    */
    public function getShipperName()
    {
        return $this->container['shipperName'];
    }

    /**
    * Sets shipperName
    *
    * @param string|null $shipperName 投递名称
    *
    * @return $this
    */
    public function setShipperName($shipperName)
    {
        $this->container['shipperName'] = $shipperName;
        return $this;
    }

    /**
    * Gets shipperSource
    *  shipperSource
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ShowShipperResponseBodyDataShipperSource|null
    */
    public function getShipperSource()
    {
        return $this->container['shipperSource'];
    }

    /**
    * Sets shipperSource
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ShowShipperResponseBodyDataShipperSource|null $shipperSource shipperSource
    *
    * @return $this
    */
    public function setShipperSource($shipperSource)
    {
        $this->container['shipperSource'] = $shipperSource;
        return $this;
    }

    /**
    * Gets status
    *  状态
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间（时间戳）
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间（时间戳）
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets version
    *  版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间ID
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 工作空间ID
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets workspaceName
    *  工作空间名称
    *
    * @return string|null
    */
    public function getWorkspaceName()
    {
        return $this->container['workspaceName'];
    }

    /**
    * Sets workspaceName
    *
    * @param string|null $workspaceName 工作空间名称
    *
    * @return $this
    */
    public function setWorkspaceName($workspaceName)
    {
        $this->container['workspaceName'] = $workspaceName;
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

