<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CollectorNode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CollectorNode';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * channelInstanceReferCount  数值
    * createBy  Iam用户ID
    * customLabel  自定义标签
    * description  描述信息
    * deviceType  设备类型
    * ipAddress  IP地址
    * monitor  monitor
    * nodeExpansion  nodeExpansion
    * nodeId  UUID
    * nodeName  所属租户名称
    * osType  操作系统类型
    * privateIpAddress  IP地址
    * projectId  项目ID
    * region  区域
    * specification  规格
    * updateTime  毫秒时间戳
    * vpcEndpointAddress  Vpc 端点地址
    * vpcEndpointId  Vpc 端点ID
    * vpcId  UUID
    * workspaceId  工作空间ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'channelInstanceReferCount' => 'int',
            'createBy' => 'string',
            'customLabel' => 'string',
            'description' => 'string',
            'deviceType' => 'string',
            'ipAddress' => 'string',
            'monitor' => '\HuaweiCloud\SDK\SecMaster\V1\Model\Monitor',
            'nodeExpansion' => '\HuaweiCloud\SDK\SecMaster\V1\Model\IsapNodeExpansion',
            'nodeId' => 'string',
            'nodeName' => 'string',
            'osType' => 'string',
            'privateIpAddress' => 'string',
            'projectId' => 'string',
            'region' => 'string',
            'specification' => 'string',
            'updateTime' => 'int',
            'vpcEndpointAddress' => 'string',
            'vpcEndpointId' => 'string',
            'vpcId' => 'string',
            'workspaceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * channelInstanceReferCount  数值
    * createBy  Iam用户ID
    * customLabel  自定义标签
    * description  描述信息
    * deviceType  设备类型
    * ipAddress  IP地址
    * monitor  monitor
    * nodeExpansion  nodeExpansion
    * nodeId  UUID
    * nodeName  所属租户名称
    * osType  操作系统类型
    * privateIpAddress  IP地址
    * projectId  项目ID
    * region  区域
    * specification  规格
    * updateTime  毫秒时间戳
    * vpcEndpointAddress  Vpc 端点地址
    * vpcEndpointId  Vpc 端点ID
    * vpcId  UUID
    * workspaceId  工作空间ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'channelInstanceReferCount' => 'int64',
        'createBy' => null,
        'customLabel' => null,
        'description' => null,
        'deviceType' => null,
        'ipAddress' => null,
        'monitor' => null,
        'nodeExpansion' => null,
        'nodeId' => null,
        'nodeName' => null,
        'osType' => null,
        'privateIpAddress' => null,
        'projectId' => null,
        'region' => null,
        'specification' => null,
        'updateTime' => 'int64',
        'vpcEndpointAddress' => null,
        'vpcEndpointId' => null,
        'vpcId' => null,
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
    * channelInstanceReferCount  数值
    * createBy  Iam用户ID
    * customLabel  自定义标签
    * description  描述信息
    * deviceType  设备类型
    * ipAddress  IP地址
    * monitor  monitor
    * nodeExpansion  nodeExpansion
    * nodeId  UUID
    * nodeName  所属租户名称
    * osType  操作系统类型
    * privateIpAddress  IP地址
    * projectId  项目ID
    * region  区域
    * specification  规格
    * updateTime  毫秒时间戳
    * vpcEndpointAddress  Vpc 端点地址
    * vpcEndpointId  Vpc 端点ID
    * vpcId  UUID
    * workspaceId  工作空间ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'channelInstanceReferCount' => 'channel_instance_refer_count',
            'createBy' => 'create_by',
            'customLabel' => 'custom_label',
            'description' => 'description',
            'deviceType' => 'device_type',
            'ipAddress' => 'ip_address',
            'monitor' => 'monitor',
            'nodeExpansion' => 'node_expansion',
            'nodeId' => 'node_id',
            'nodeName' => 'node_name',
            'osType' => 'os_type',
            'privateIpAddress' => 'private_ip_address',
            'projectId' => 'project_id',
            'region' => 'region',
            'specification' => 'specification',
            'updateTime' => 'update_time',
            'vpcEndpointAddress' => 'vpc_endpoint_address',
            'vpcEndpointId' => 'vpc_endpoint_id',
            'vpcId' => 'vpc_id',
            'workspaceId' => 'workspace_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * channelInstanceReferCount  数值
    * createBy  Iam用户ID
    * customLabel  自定义标签
    * description  描述信息
    * deviceType  设备类型
    * ipAddress  IP地址
    * monitor  monitor
    * nodeExpansion  nodeExpansion
    * nodeId  UUID
    * nodeName  所属租户名称
    * osType  操作系统类型
    * privateIpAddress  IP地址
    * projectId  项目ID
    * region  区域
    * specification  规格
    * updateTime  毫秒时间戳
    * vpcEndpointAddress  Vpc 端点地址
    * vpcEndpointId  Vpc 端点ID
    * vpcId  UUID
    * workspaceId  工作空间ID
    *
    * @var string[]
    */
    protected static $setters = [
            'channelInstanceReferCount' => 'setChannelInstanceReferCount',
            'createBy' => 'setCreateBy',
            'customLabel' => 'setCustomLabel',
            'description' => 'setDescription',
            'deviceType' => 'setDeviceType',
            'ipAddress' => 'setIpAddress',
            'monitor' => 'setMonitor',
            'nodeExpansion' => 'setNodeExpansion',
            'nodeId' => 'setNodeId',
            'nodeName' => 'setNodeName',
            'osType' => 'setOsType',
            'privateIpAddress' => 'setPrivateIpAddress',
            'projectId' => 'setProjectId',
            'region' => 'setRegion',
            'specification' => 'setSpecification',
            'updateTime' => 'setUpdateTime',
            'vpcEndpointAddress' => 'setVpcEndpointAddress',
            'vpcEndpointId' => 'setVpcEndpointId',
            'vpcId' => 'setVpcId',
            'workspaceId' => 'setWorkspaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * channelInstanceReferCount  数值
    * createBy  Iam用户ID
    * customLabel  自定义标签
    * description  描述信息
    * deviceType  设备类型
    * ipAddress  IP地址
    * monitor  monitor
    * nodeExpansion  nodeExpansion
    * nodeId  UUID
    * nodeName  所属租户名称
    * osType  操作系统类型
    * privateIpAddress  IP地址
    * projectId  项目ID
    * region  区域
    * specification  规格
    * updateTime  毫秒时间戳
    * vpcEndpointAddress  Vpc 端点地址
    * vpcEndpointId  Vpc 端点ID
    * vpcId  UUID
    * workspaceId  工作空间ID
    *
    * @var string[]
    */
    protected static $getters = [
            'channelInstanceReferCount' => 'getChannelInstanceReferCount',
            'createBy' => 'getCreateBy',
            'customLabel' => 'getCustomLabel',
            'description' => 'getDescription',
            'deviceType' => 'getDeviceType',
            'ipAddress' => 'getIpAddress',
            'monitor' => 'getMonitor',
            'nodeExpansion' => 'getNodeExpansion',
            'nodeId' => 'getNodeId',
            'nodeName' => 'getNodeName',
            'osType' => 'getOsType',
            'privateIpAddress' => 'getPrivateIpAddress',
            'projectId' => 'getProjectId',
            'region' => 'getRegion',
            'specification' => 'getSpecification',
            'updateTime' => 'getUpdateTime',
            'vpcEndpointAddress' => 'getVpcEndpointAddress',
            'vpcEndpointId' => 'getVpcEndpointId',
            'vpcId' => 'getVpcId',
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
        $this->container['channelInstanceReferCount'] = isset($data['channelInstanceReferCount']) ? $data['channelInstanceReferCount'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['customLabel'] = isset($data['customLabel']) ? $data['customLabel'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['deviceType'] = isset($data['deviceType']) ? $data['deviceType'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['monitor'] = isset($data['monitor']) ? $data['monitor'] : null;
        $this->container['nodeExpansion'] = isset($data['nodeExpansion']) ? $data['nodeExpansion'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['privateIpAddress'] = isset($data['privateIpAddress']) ? $data['privateIpAddress'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['specification'] = isset($data['specification']) ? $data['specification'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['vpcEndpointAddress'] = isset($data['vpcEndpointAddress']) ? $data['vpcEndpointAddress'] : null;
        $this->container['vpcEndpointId'] = isset($data['vpcEndpointId']) ? $data['vpcEndpointId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
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
            if (!is_null($this->container['channelInstanceReferCount']) && ($this->container['channelInstanceReferCount'] > 1024)) {
                $invalidProperties[] = "invalid value for 'channelInstanceReferCount', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['channelInstanceReferCount']) && ($this->container['channelInstanceReferCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'channelInstanceReferCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) > 32)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) < 32)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['customLabel']) && (mb_strlen($this->container['customLabel']) > 63)) {
                $invalidProperties[] = "invalid value for 'customLabel', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['customLabel']) && (mb_strlen($this->container['customLabel']) < 5)) {
                $invalidProperties[] = "invalid value for 'customLabel', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['deviceType']) && (mb_strlen($this->container['deviceType']) > 63)) {
                $invalidProperties[] = "invalid value for 'deviceType', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['deviceType']) && (mb_strlen($this->container['deviceType']) < 5)) {
                $invalidProperties[] = "invalid value for 'deviceType', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['ipAddress']) && (mb_strlen($this->container['ipAddress']) > 15)) {
                $invalidProperties[] = "invalid value for 'ipAddress', the character length must be smaller than or equal to 15.";
            }
            if (!is_null($this->container['ipAddress']) && (mb_strlen($this->container['ipAddress']) < 7)) {
                $invalidProperties[] = "invalid value for 'ipAddress', the character length must be bigger than or equal to 7.";
            }
            if (!is_null($this->container['ipAddress']) && !preg_match("/((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\\\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)/", $this->container['ipAddress'])) {
                $invalidProperties[] = "invalid value for 'ipAddress', must be conform to the pattern /((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\\\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)/.";
            }
            if (!is_null($this->container['nodeId']) && (mb_strlen($this->container['nodeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['nodeId']) && (mb_strlen($this->container['nodeId']) < 36)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['nodeName']) && (mb_strlen($this->container['nodeName']) > 63)) {
                $invalidProperties[] = "invalid value for 'nodeName', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['nodeName']) && (mb_strlen($this->container['nodeName']) < 1)) {
                $invalidProperties[] = "invalid value for 'nodeName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 63)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 5)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['privateIpAddress']) && (mb_strlen($this->container['privateIpAddress']) > 15)) {
                $invalidProperties[] = "invalid value for 'privateIpAddress', the character length must be smaller than or equal to 15.";
            }
            if (!is_null($this->container['privateIpAddress']) && (mb_strlen($this->container['privateIpAddress']) < 7)) {
                $invalidProperties[] = "invalid value for 'privateIpAddress', the character length must be bigger than or equal to 7.";
            }
            if (!is_null($this->container['privateIpAddress']) && !preg_match("/((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\\\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)/", $this->container['privateIpAddress'])) {
                $invalidProperties[] = "invalid value for 'privateIpAddress', must be conform to the pattern /((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\\\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)/.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 1024)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['specification']) && (mb_strlen($this->container['specification']) > 63)) {
                $invalidProperties[] = "invalid value for 'specification', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['specification']) && (mb_strlen($this->container['specification']) < 5)) {
                $invalidProperties[] = "invalid value for 'specification', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9223372036854775800)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9223372036854775800.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vpcEndpointAddress']) && (mb_strlen($this->container['vpcEndpointAddress']) > 63)) {
                $invalidProperties[] = "invalid value for 'vpcEndpointAddress', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['vpcEndpointAddress']) && (mb_strlen($this->container['vpcEndpointAddress']) < 5)) {
                $invalidProperties[] = "invalid value for 'vpcEndpointAddress', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['vpcEndpointId']) && (mb_strlen($this->container['vpcEndpointId']) > 63)) {
                $invalidProperties[] = "invalid value for 'vpcEndpointId', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['vpcEndpointId']) && (mb_strlen($this->container['vpcEndpointId']) < 5)) {
                $invalidProperties[] = "invalid value for 'vpcEndpointId', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) < 36)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 36)) {
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
    * Gets channelInstanceReferCount
    *  数值
    *
    * @return int|null
    */
    public function getChannelInstanceReferCount()
    {
        return $this->container['channelInstanceReferCount'];
    }

    /**
    * Sets channelInstanceReferCount
    *
    * @param int|null $channelInstanceReferCount 数值
    *
    * @return $this
    */
    public function setChannelInstanceReferCount($channelInstanceReferCount)
    {
        $this->container['channelInstanceReferCount'] = $channelInstanceReferCount;
        return $this;
    }

    /**
    * Gets createBy
    *  Iam用户ID
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy Iam用户ID
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets customLabel
    *  自定义标签
    *
    * @return string|null
    */
    public function getCustomLabel()
    {
        return $this->container['customLabel'];
    }

    /**
    * Sets customLabel
    *
    * @param string|null $customLabel 自定义标签
    *
    * @return $this
    */
    public function setCustomLabel($customLabel)
    {
        $this->container['customLabel'] = $customLabel;
        return $this;
    }

    /**
    * Gets description
    *  描述信息
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets deviceType
    *  设备类型
    *
    * @return string|null
    */
    public function getDeviceType()
    {
        return $this->container['deviceType'];
    }

    /**
    * Sets deviceType
    *
    * @param string|null $deviceType 设备类型
    *
    * @return $this
    */
    public function setDeviceType($deviceType)
    {
        $this->container['deviceType'] = $deviceType;
        return $this;
    }

    /**
    * Gets ipAddress
    *  IP地址
    *
    * @return string|null
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string|null $ipAddress IP地址
    *
    * @return $this
    */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;
        return $this;
    }

    /**
    * Gets monitor
    *  monitor
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\Monitor|null
    */
    public function getMonitor()
    {
        return $this->container['monitor'];
    }

    /**
    * Sets monitor
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\Monitor|null $monitor monitor
    *
    * @return $this
    */
    public function setMonitor($monitor)
    {
        $this->container['monitor'] = $monitor;
        return $this;
    }

    /**
    * Gets nodeExpansion
    *  nodeExpansion
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\IsapNodeExpansion|null
    */
    public function getNodeExpansion()
    {
        return $this->container['nodeExpansion'];
    }

    /**
    * Sets nodeExpansion
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\IsapNodeExpansion|null $nodeExpansion nodeExpansion
    *
    * @return $this
    */
    public function setNodeExpansion($nodeExpansion)
    {
        $this->container['nodeExpansion'] = $nodeExpansion;
        return $this;
    }

    /**
    * Gets nodeId
    *  UUID
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId UUID
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
    *  所属租户名称
    *
    * @return string|null
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string|null $nodeName 所属租户名称
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets osType
    *  操作系统类型
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType 操作系统类型
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets privateIpAddress
    *  IP地址
    *
    * @return string|null
    */
    public function getPrivateIpAddress()
    {
        return $this->container['privateIpAddress'];
    }

    /**
    * Sets privateIpAddress
    *
    * @param string|null $privateIpAddress IP地址
    *
    * @return $this
    */
    public function setPrivateIpAddress($privateIpAddress)
    {
        $this->container['privateIpAddress'] = $privateIpAddress;
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
    * Gets region
    *  区域
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets specification
    *  规格
    *
    * @return string|null
    */
    public function getSpecification()
    {
        return $this->container['specification'];
    }

    /**
    * Sets specification
    *
    * @param string|null $specification 规格
    *
    * @return $this
    */
    public function setSpecification($specification)
    {
        $this->container['specification'] = $specification;
        return $this;
    }

    /**
    * Gets updateTime
    *  毫秒时间戳
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
    * @param int|null $updateTime 毫秒时间戳
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets vpcEndpointAddress
    *  Vpc 端点地址
    *
    * @return string|null
    */
    public function getVpcEndpointAddress()
    {
        return $this->container['vpcEndpointAddress'];
    }

    /**
    * Sets vpcEndpointAddress
    *
    * @param string|null $vpcEndpointAddress Vpc 端点地址
    *
    * @return $this
    */
    public function setVpcEndpointAddress($vpcEndpointAddress)
    {
        $this->container['vpcEndpointAddress'] = $vpcEndpointAddress;
        return $this;
    }

    /**
    * Gets vpcEndpointId
    *  Vpc 端点ID
    *
    * @return string|null
    */
    public function getVpcEndpointId()
    {
        return $this->container['vpcEndpointId'];
    }

    /**
    * Sets vpcEndpointId
    *
    * @param string|null $vpcEndpointId Vpc 端点ID
    *
    * @return $this
    */
    public function setVpcEndpointId($vpcEndpointId)
    {
        $this->container['vpcEndpointId'] = $vpcEndpointId;
        return $this;
    }

    /**
    * Gets vpcId
    *  UUID
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
    * @param string|null $vpcId UUID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
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

