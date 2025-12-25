<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiResponseDataItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiResponseDataItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * consumptionType  消费类型，具体含义根据业务定义
    * createTime  创建时间，单位为毫秒的时间戳
    * dataspaceId  数据空间ID，唯一标识
    * dataspaceName  数据空间名称
    * domainId  域ID，唯一标识
    * id  唯一标识ID
    * pipeId  管道ID，唯一标识
    * pipeName  管道名称
    * projectId  项目ID，唯一标识
    * shipperDestination  shipperDestination
    * shipperId  船运ID，唯一标识
    * shipperName  船运名称
    * shipperSource  shipperSource
    * status  状态码，具体含义根据业务定义
    * updateTime  更新时间，单位为毫秒的时间戳
    * version  版本信息
    * workspaceId  工作空间ID，唯一标识
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
            'shipperDestination' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ShipperDestination',
            'shipperId' => 'string',
            'shipperName' => 'string',
            'shipperSource' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ShipperSource',
            'status' => 'int',
            'updateTime' => 'int',
            'version' => 'string',
            'workspaceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * consumptionType  消费类型，具体含义根据业务定义
    * createTime  创建时间，单位为毫秒的时间戳
    * dataspaceId  数据空间ID，唯一标识
    * dataspaceName  数据空间名称
    * domainId  域ID，唯一标识
    * id  唯一标识ID
    * pipeId  管道ID，唯一标识
    * pipeName  管道名称
    * projectId  项目ID，唯一标识
    * shipperDestination  shipperDestination
    * shipperId  船运ID，唯一标识
    * shipperName  船运名称
    * shipperSource  shipperSource
    * status  状态码，具体含义根据业务定义
    * updateTime  更新时间，单位为毫秒的时间戳
    * version  版本信息
    * workspaceId  工作空间ID，唯一标识
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
        'workspaceId' => null
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
    * consumptionType  消费类型，具体含义根据业务定义
    * createTime  创建时间，单位为毫秒的时间戳
    * dataspaceId  数据空间ID，唯一标识
    * dataspaceName  数据空间名称
    * domainId  域ID，唯一标识
    * id  唯一标识ID
    * pipeId  管道ID，唯一标识
    * pipeName  管道名称
    * projectId  项目ID，唯一标识
    * shipperDestination  shipperDestination
    * shipperId  船运ID，唯一标识
    * shipperName  船运名称
    * shipperSource  shipperSource
    * status  状态码，具体含义根据业务定义
    * updateTime  更新时间，单位为毫秒的时间戳
    * version  版本信息
    * workspaceId  工作空间ID，唯一标识
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
            'workspaceId' => 'workspace_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * consumptionType  消费类型，具体含义根据业务定义
    * createTime  创建时间，单位为毫秒的时间戳
    * dataspaceId  数据空间ID，唯一标识
    * dataspaceName  数据空间名称
    * domainId  域ID，唯一标识
    * id  唯一标识ID
    * pipeId  管道ID，唯一标识
    * pipeName  管道名称
    * projectId  项目ID，唯一标识
    * shipperDestination  shipperDestination
    * shipperId  船运ID，唯一标识
    * shipperName  船运名称
    * shipperSource  shipperSource
    * status  状态码，具体含义根据业务定义
    * updateTime  更新时间，单位为毫秒的时间戳
    * version  版本信息
    * workspaceId  工作空间ID，唯一标识
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
            'workspaceId' => 'setWorkspaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * consumptionType  消费类型，具体含义根据业务定义
    * createTime  创建时间，单位为毫秒的时间戳
    * dataspaceId  数据空间ID，唯一标识
    * dataspaceName  数据空间名称
    * domainId  域ID，唯一标识
    * id  唯一标识ID
    * pipeId  管道ID，唯一标识
    * pipeName  管道名称
    * projectId  项目ID，唯一标识
    * shipperDestination  shipperDestination
    * shipperId  船运ID，唯一标识
    * shipperName  船运名称
    * shipperSource  shipperSource
    * status  状态码，具体含义根据业务定义
    * updateTime  更新时间，单位为毫秒的时间戳
    * version  版本信息
    * workspaceId  工作空间ID，唯一标识
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
            'workspaceId' => 'getWorkspaceId'
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
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['consumptionType'] === null) {
            $invalidProperties[] = "'consumptionType' can't be null";
        }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['dataspaceId'] === null) {
            $invalidProperties[] = "'dataspaceId' can't be null";
        }
            if ((mb_strlen($this->container['dataspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['dataspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['dataspaceName'] === null) {
            $invalidProperties[] = "'dataspaceName' can't be null";
        }
            if ((mb_strlen($this->container['dataspaceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'dataspaceName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['dataspaceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataspaceName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['pipeId'] === null) {
            $invalidProperties[] = "'pipeId' can't be null";
        }
            if ((mb_strlen($this->container['pipeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['pipeId']) < 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['pipeName'] === null) {
            $invalidProperties[] = "'pipeName' can't be null";
        }
            if ((mb_strlen($this->container['pipeName']) > 128)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['pipeName']) < 1)) {
                $invalidProperties[] = "invalid value for 'pipeName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['shipperDestination'] === null) {
            $invalidProperties[] = "'shipperDestination' can't be null";
        }
        if ($this->container['shipperId'] === null) {
            $invalidProperties[] = "'shipperId' can't be null";
        }
            if ((mb_strlen($this->container['shipperId']) > 36)) {
                $invalidProperties[] = "invalid value for 'shipperId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['shipperId']) < 36)) {
                $invalidProperties[] = "invalid value for 'shipperId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['shipperName'] === null) {
            $invalidProperties[] = "'shipperName' can't be null";
        }
            if ((mb_strlen($this->container['shipperName']) > 128)) {
                $invalidProperties[] = "invalid value for 'shipperName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['shipperName']) < 1)) {
                $invalidProperties[] = "invalid value for 'shipperName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['shipperSource'] === null) {
            $invalidProperties[] = "'shipperSource' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['updateTime'] === null) {
            $invalidProperties[] = "'updateTime' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
            if ((mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['workspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 36.";
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
    *  消费类型，具体含义根据业务定义
    *
    * @return int
    */
    public function getConsumptionType()
    {
        return $this->container['consumptionType'];
    }

    /**
    * Sets consumptionType
    *
    * @param int $consumptionType 消费类型，具体含义根据业务定义
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
    *  创建时间，单位为毫秒的时间戳
    *
    * @return int
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int $createTime 创建时间，单位为毫秒的时间戳
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
    *  数据空间ID，唯一标识
    *
    * @return string
    */
    public function getDataspaceId()
    {
        return $this->container['dataspaceId'];
    }

    /**
    * Sets dataspaceId
    *
    * @param string $dataspaceId 数据空间ID，唯一标识
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
    * @return string
    */
    public function getDataspaceName()
    {
        return $this->container['dataspaceName'];
    }

    /**
    * Sets dataspaceName
    *
    * @param string $dataspaceName 数据空间名称
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
    *  域ID，唯一标识
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 域ID，唯一标识
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
    *  唯一标识ID
    *
    * @return int
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int $id 唯一标识ID
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
    *  管道ID，唯一标识
    *
    * @return string
    */
    public function getPipeId()
    {
        return $this->container['pipeId'];
    }

    /**
    * Sets pipeId
    *
    * @param string $pipeId 管道ID，唯一标识
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
    * @return string
    */
    public function getPipeName()
    {
        return $this->container['pipeName'];
    }

    /**
    * Sets pipeName
    *
    * @param string $pipeName 管道名称
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
    *  项目ID，唯一标识
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID，唯一标识
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
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ShipperDestination
    */
    public function getShipperDestination()
    {
        return $this->container['shipperDestination'];
    }

    /**
    * Sets shipperDestination
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ShipperDestination $shipperDestination shipperDestination
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
    *  船运ID，唯一标识
    *
    * @return string
    */
    public function getShipperId()
    {
        return $this->container['shipperId'];
    }

    /**
    * Sets shipperId
    *
    * @param string $shipperId 船运ID，唯一标识
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
    *  船运名称
    *
    * @return string
    */
    public function getShipperName()
    {
        return $this->container['shipperName'];
    }

    /**
    * Sets shipperName
    *
    * @param string $shipperName 船运名称
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
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ShipperSource
    */
    public function getShipperSource()
    {
        return $this->container['shipperSource'];
    }

    /**
    * Sets shipperSource
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ShipperSource $shipperSource shipperSource
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
    *  状态码，具体含义根据业务定义
    *
    * @return int
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int $status 状态码，具体含义根据业务定义
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
    *  更新时间，单位为毫秒的时间戳
    *
    * @return int
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int $updateTime 更新时间，单位为毫秒的时间戳
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
    *  版本信息
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version 版本信息
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
    *  工作空间ID，唯一标识
    *
    * @return string
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string $workspaceId 工作空间ID，唯一标识
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
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

