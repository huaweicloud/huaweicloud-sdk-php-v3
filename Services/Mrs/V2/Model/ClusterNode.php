<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterNode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterNode';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeName  节点名称，对应manager里的节点名称。
    * resourceId  资源id。确定节点的唯一性，包周期节点可用于计费的查询。
    * nodeGroupName  节点组名称。
    * nodeType  节点类型。Task、Core、Master等。
    * billingType  on-period包周期或者on-quantity按需。
    * deploymentType  部署类型。支持Server主机类型。
    * serverInfo  serverInfo
    * tags  节点标签
    * nodeDetail  nodeDetail
    * nodeStatus  节点状态。对应页面上的操作状态。
    * componentInfos  组件实例信息数组。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeName' => 'string',
            'resourceId' => 'string',
            'nodeGroupName' => 'string',
            'nodeType' => 'string',
            'billingType' => 'string',
            'deploymentType' => 'string',
            'serverInfo' => '\HuaweiCloud\SDK\Mrs\V2\Model\ServerInfo',
            'tags' => '\HuaweiCloud\SDK\Mrs\V2\Model\Tag[]',
            'nodeDetail' => '\HuaweiCloud\SDK\Mrs\V2\Model\NodeDetail',
            'nodeStatus' => 'string',
            'componentInfos' => '\HuaweiCloud\SDK\Mrs\V2\Model\ComponentInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeName  节点名称，对应manager里的节点名称。
    * resourceId  资源id。确定节点的唯一性，包周期节点可用于计费的查询。
    * nodeGroupName  节点组名称。
    * nodeType  节点类型。Task、Core、Master等。
    * billingType  on-period包周期或者on-quantity按需。
    * deploymentType  部署类型。支持Server主机类型。
    * serverInfo  serverInfo
    * tags  节点标签
    * nodeDetail  nodeDetail
    * nodeStatus  节点状态。对应页面上的操作状态。
    * componentInfos  组件实例信息数组。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeName' => null,
        'resourceId' => null,
        'nodeGroupName' => null,
        'nodeType' => null,
        'billingType' => null,
        'deploymentType' => null,
        'serverInfo' => null,
        'tags' => null,
        'nodeDetail' => null,
        'nodeStatus' => null,
        'componentInfos' => null
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
    * nodeName  节点名称，对应manager里的节点名称。
    * resourceId  资源id。确定节点的唯一性，包周期节点可用于计费的查询。
    * nodeGroupName  节点组名称。
    * nodeType  节点类型。Task、Core、Master等。
    * billingType  on-period包周期或者on-quantity按需。
    * deploymentType  部署类型。支持Server主机类型。
    * serverInfo  serverInfo
    * tags  节点标签
    * nodeDetail  nodeDetail
    * nodeStatus  节点状态。对应页面上的操作状态。
    * componentInfos  组件实例信息数组。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeName' => 'node_name',
            'resourceId' => 'resource_id',
            'nodeGroupName' => 'node_group_name',
            'nodeType' => 'node_type',
            'billingType' => 'billing_type',
            'deploymentType' => 'deployment_type',
            'serverInfo' => 'server_info',
            'tags' => 'tags',
            'nodeDetail' => 'node_detail',
            'nodeStatus' => 'node_status',
            'componentInfos' => 'component_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeName  节点名称，对应manager里的节点名称。
    * resourceId  资源id。确定节点的唯一性，包周期节点可用于计费的查询。
    * nodeGroupName  节点组名称。
    * nodeType  节点类型。Task、Core、Master等。
    * billingType  on-period包周期或者on-quantity按需。
    * deploymentType  部署类型。支持Server主机类型。
    * serverInfo  serverInfo
    * tags  节点标签
    * nodeDetail  nodeDetail
    * nodeStatus  节点状态。对应页面上的操作状态。
    * componentInfos  组件实例信息数组。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeName' => 'setNodeName',
            'resourceId' => 'setResourceId',
            'nodeGroupName' => 'setNodeGroupName',
            'nodeType' => 'setNodeType',
            'billingType' => 'setBillingType',
            'deploymentType' => 'setDeploymentType',
            'serverInfo' => 'setServerInfo',
            'tags' => 'setTags',
            'nodeDetail' => 'setNodeDetail',
            'nodeStatus' => 'setNodeStatus',
            'componentInfos' => 'setComponentInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeName  节点名称，对应manager里的节点名称。
    * resourceId  资源id。确定节点的唯一性，包周期节点可用于计费的查询。
    * nodeGroupName  节点组名称。
    * nodeType  节点类型。Task、Core、Master等。
    * billingType  on-period包周期或者on-quantity按需。
    * deploymentType  部署类型。支持Server主机类型。
    * serverInfo  serverInfo
    * tags  节点标签
    * nodeDetail  nodeDetail
    * nodeStatus  节点状态。对应页面上的操作状态。
    * componentInfos  组件实例信息数组。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeName' => 'getNodeName',
            'resourceId' => 'getResourceId',
            'nodeGroupName' => 'getNodeGroupName',
            'nodeType' => 'getNodeType',
            'billingType' => 'getBillingType',
            'deploymentType' => 'getDeploymentType',
            'serverInfo' => 'getServerInfo',
            'tags' => 'getTags',
            'nodeDetail' => 'getNodeDetail',
            'nodeStatus' => 'getNodeStatus',
            'componentInfos' => 'getComponentInfos'
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
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['nodeGroupName'] = isset($data['nodeGroupName']) ? $data['nodeGroupName'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['billingType'] = isset($data['billingType']) ? $data['billingType'] : null;
        $this->container['deploymentType'] = isset($data['deploymentType']) ? $data['deploymentType'] : null;
        $this->container['serverInfo'] = isset($data['serverInfo']) ? $data['serverInfo'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['nodeDetail'] = isset($data['nodeDetail']) ? $data['nodeDetail'] : null;
        $this->container['nodeStatus'] = isset($data['nodeStatus']) ? $data['nodeStatus'] : null;
        $this->container['componentInfos'] = isset($data['componentInfos']) ? $data['componentInfos'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['nodeName']) && (mb_strlen($this->container['nodeName']) < 1)) {
                $invalidProperties[] = "invalid value for 'nodeName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nodeGroupName']) && (mb_strlen($this->container['nodeGroupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'nodeGroupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nodeType']) && (mb_strlen($this->container['nodeType']) < 1)) {
                $invalidProperties[] = "invalid value for 'nodeType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['deploymentType'] === null) {
            $invalidProperties[] = "'deploymentType' can't be null";
        }
            if ((mb_strlen($this->container['deploymentType']) < 3)) {
                $invalidProperties[] = "invalid value for 'deploymentType', the character length must be bigger than or equal to 3.";
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
    * Gets nodeName
    *  节点名称，对应manager里的节点名称。
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
    * @param string|null $nodeName 节点名称，对应manager里的节点名称。
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源id。确定节点的唯一性，包周期节点可用于计费的查询。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源id。确定节点的唯一性，包周期节点可用于计费的查询。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets nodeGroupName
    *  节点组名称。
    *
    * @return string|null
    */
    public function getNodeGroupName()
    {
        return $this->container['nodeGroupName'];
    }

    /**
    * Sets nodeGroupName
    *
    * @param string|null $nodeGroupName 节点组名称。
    *
    * @return $this
    */
    public function setNodeGroupName($nodeGroupName)
    {
        $this->container['nodeGroupName'] = $nodeGroupName;
        return $this;
    }

    /**
    * Gets nodeType
    *  节点类型。Task、Core、Master等。
    *
    * @return string|null
    */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
    * Sets nodeType
    *
    * @param string|null $nodeType 节点类型。Task、Core、Master等。
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets billingType
    *  on-period包周期或者on-quantity按需。
    *
    * @return string|null
    */
    public function getBillingType()
    {
        return $this->container['billingType'];
    }

    /**
    * Sets billingType
    *
    * @param string|null $billingType on-period包周期或者on-quantity按需。
    *
    * @return $this
    */
    public function setBillingType($billingType)
    {
        $this->container['billingType'] = $billingType;
        return $this;
    }

    /**
    * Gets deploymentType
    *  部署类型。支持Server主机类型。
    *
    * @return string
    */
    public function getDeploymentType()
    {
        return $this->container['deploymentType'];
    }

    /**
    * Sets deploymentType
    *
    * @param string $deploymentType 部署类型。支持Server主机类型。
    *
    * @return $this
    */
    public function setDeploymentType($deploymentType)
    {
        $this->container['deploymentType'] = $deploymentType;
        return $this;
    }

    /**
    * Gets serverInfo
    *  serverInfo
    *
    * @return \HuaweiCloud\SDK\Mrs\V2\Model\ServerInfo|null
    */
    public function getServerInfo()
    {
        return $this->container['serverInfo'];
    }

    /**
    * Sets serverInfo
    *
    * @param \HuaweiCloud\SDK\Mrs\V2\Model\ServerInfo|null $serverInfo serverInfo
    *
    * @return $this
    */
    public function setServerInfo($serverInfo)
    {
        $this->container['serverInfo'] = $serverInfo;
        return $this;
    }

    /**
    * Gets tags
    *  节点标签
    *
    * @return \HuaweiCloud\SDK\Mrs\V2\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Mrs\V2\Model\Tag[]|null $tags 节点标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets nodeDetail
    *  nodeDetail
    *
    * @return \HuaweiCloud\SDK\Mrs\V2\Model\NodeDetail|null
    */
    public function getNodeDetail()
    {
        return $this->container['nodeDetail'];
    }

    /**
    * Sets nodeDetail
    *
    * @param \HuaweiCloud\SDK\Mrs\V2\Model\NodeDetail|null $nodeDetail nodeDetail
    *
    * @return $this
    */
    public function setNodeDetail($nodeDetail)
    {
        $this->container['nodeDetail'] = $nodeDetail;
        return $this;
    }

    /**
    * Gets nodeStatus
    *  节点状态。对应页面上的操作状态。
    *
    * @return string|null
    */
    public function getNodeStatus()
    {
        return $this->container['nodeStatus'];
    }

    /**
    * Sets nodeStatus
    *
    * @param string|null $nodeStatus 节点状态。对应页面上的操作状态。
    *
    * @return $this
    */
    public function setNodeStatus($nodeStatus)
    {
        $this->container['nodeStatus'] = $nodeStatus;
        return $this;
    }

    /**
    * Gets componentInfos
    *  组件实例信息数组。
    *
    * @return \HuaweiCloud\SDK\Mrs\V2\Model\ComponentInfo[]|null
    */
    public function getComponentInfos()
    {
        return $this->container['componentInfos'];
    }

    /**
    * Sets componentInfos
    *
    * @param \HuaweiCloud\SDK\Mrs\V2\Model\ComponentInfo[]|null $componentInfos 组件实例信息数组。
    *
    * @return $this
    */
    public function setComponentInfos($componentInfos)
    {
        $this->container['componentInfos'] = $componentInfos;
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

