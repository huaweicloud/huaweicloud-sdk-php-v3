<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListResourceRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListResourceRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * provider  云服务名称
    * type  资源类型名称
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * resourceIdList  资源id列表
    * name  名称
    * regionId  region id
    * azId  az id
    * ipType  ip类型，fixed：内网IP，floating：弹性公网IP
    * ip  ip
    * status  资源状态
    * agentState  agent状态
    * imageName  镜像名称，模糊匹配
    * osType  系统类型
    * tag  标签的值
    * tagKey  标签的key
    * groupId  分组id
    * componentId  组件id
    * applicationId  应用id
    * cceClusterId  cce集群id
    * vpcId  vpc id
    * epId  企业项目id
    * isDelegated  资源是否已托管
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'provider' => 'string',
            'type' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'resourceIdList' => 'string[]',
            'name' => 'string',
            'regionId' => 'string',
            'azId' => 'string',
            'ipType' => 'string',
            'ip' => 'string',
            'status' => 'string',
            'agentState' => 'string',
            'imageName' => 'string',
            'osType' => 'string',
            'tag' => 'string',
            'tagKey' => 'string',
            'groupId' => 'string',
            'componentId' => 'string',
            'applicationId' => 'string',
            'cceClusterId' => 'string',
            'vpcId' => 'string',
            'epId' => 'string',
            'isDelegated' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * provider  云服务名称
    * type  资源类型名称
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * resourceIdList  资源id列表
    * name  名称
    * regionId  region id
    * azId  az id
    * ipType  ip类型，fixed：内网IP，floating：弹性公网IP
    * ip  ip
    * status  资源状态
    * agentState  agent状态
    * imageName  镜像名称，模糊匹配
    * osType  系统类型
    * tag  标签的值
    * tagKey  标签的key
    * groupId  分组id
    * componentId  组件id
    * applicationId  应用id
    * cceClusterId  cce集群id
    * vpcId  vpc id
    * epId  企业项目id
    * isDelegated  资源是否已托管
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'provider' => null,
        'type' => null,
        'limit' => 'int32',
        'marker' => null,
        'resourceIdList' => null,
        'name' => null,
        'regionId' => null,
        'azId' => null,
        'ipType' => null,
        'ip' => null,
        'status' => null,
        'agentState' => null,
        'imageName' => null,
        'osType' => null,
        'tag' => null,
        'tagKey' => null,
        'groupId' => null,
        'componentId' => null,
        'applicationId' => null,
        'cceClusterId' => null,
        'vpcId' => null,
        'epId' => null,
        'isDelegated' => null
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
    * provider  云服务名称
    * type  资源类型名称
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * resourceIdList  资源id列表
    * name  名称
    * regionId  region id
    * azId  az id
    * ipType  ip类型，fixed：内网IP，floating：弹性公网IP
    * ip  ip
    * status  资源状态
    * agentState  agent状态
    * imageName  镜像名称，模糊匹配
    * osType  系统类型
    * tag  标签的值
    * tagKey  标签的key
    * groupId  分组id
    * componentId  组件id
    * applicationId  应用id
    * cceClusterId  cce集群id
    * vpcId  vpc id
    * epId  企业项目id
    * isDelegated  资源是否已托管
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'provider' => 'provider',
            'type' => 'type',
            'limit' => 'limit',
            'marker' => 'marker',
            'resourceIdList' => 'resource_id_list',
            'name' => 'name',
            'regionId' => 'region_id',
            'azId' => 'az_id',
            'ipType' => 'ip_type',
            'ip' => 'ip',
            'status' => 'status',
            'agentState' => 'agent_state',
            'imageName' => 'image_name',
            'osType' => 'os_type',
            'tag' => 'tag',
            'tagKey' => 'tag_key',
            'groupId' => 'group_id',
            'componentId' => 'component_id',
            'applicationId' => 'application_id',
            'cceClusterId' => 'cce_cluster_id',
            'vpcId' => 'vpc_id',
            'epId' => 'ep_id',
            'isDelegated' => 'is_delegated'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * provider  云服务名称
    * type  资源类型名称
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * resourceIdList  资源id列表
    * name  名称
    * regionId  region id
    * azId  az id
    * ipType  ip类型，fixed：内网IP，floating：弹性公网IP
    * ip  ip
    * status  资源状态
    * agentState  agent状态
    * imageName  镜像名称，模糊匹配
    * osType  系统类型
    * tag  标签的值
    * tagKey  标签的key
    * groupId  分组id
    * componentId  组件id
    * applicationId  应用id
    * cceClusterId  cce集群id
    * vpcId  vpc id
    * epId  企业项目id
    * isDelegated  资源是否已托管
    *
    * @var string[]
    */
    protected static $setters = [
            'provider' => 'setProvider',
            'type' => 'setType',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'resourceIdList' => 'setResourceIdList',
            'name' => 'setName',
            'regionId' => 'setRegionId',
            'azId' => 'setAzId',
            'ipType' => 'setIpType',
            'ip' => 'setIp',
            'status' => 'setStatus',
            'agentState' => 'setAgentState',
            'imageName' => 'setImageName',
            'osType' => 'setOsType',
            'tag' => 'setTag',
            'tagKey' => 'setTagKey',
            'groupId' => 'setGroupId',
            'componentId' => 'setComponentId',
            'applicationId' => 'setApplicationId',
            'cceClusterId' => 'setCceClusterId',
            'vpcId' => 'setVpcId',
            'epId' => 'setEpId',
            'isDelegated' => 'setIsDelegated'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * provider  云服务名称
    * type  资源类型名称
    * limit  最大的返回数量
    * marker  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    * resourceIdList  资源id列表
    * name  名称
    * regionId  region id
    * azId  az id
    * ipType  ip类型，fixed：内网IP，floating：弹性公网IP
    * ip  ip
    * status  资源状态
    * agentState  agent状态
    * imageName  镜像名称，模糊匹配
    * osType  系统类型
    * tag  标签的值
    * tagKey  标签的key
    * groupId  分组id
    * componentId  组件id
    * applicationId  应用id
    * cceClusterId  cce集群id
    * vpcId  vpc id
    * epId  企业项目id
    * isDelegated  资源是否已托管
    *
    * @var string[]
    */
    protected static $getters = [
            'provider' => 'getProvider',
            'type' => 'getType',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'resourceIdList' => 'getResourceIdList',
            'name' => 'getName',
            'regionId' => 'getRegionId',
            'azId' => 'getAzId',
            'ipType' => 'getIpType',
            'ip' => 'getIp',
            'status' => 'getStatus',
            'agentState' => 'getAgentState',
            'imageName' => 'getImageName',
            'osType' => 'getOsType',
            'tag' => 'getTag',
            'tagKey' => 'getTagKey',
            'groupId' => 'getGroupId',
            'componentId' => 'getComponentId',
            'applicationId' => 'getApplicationId',
            'cceClusterId' => 'getCceClusterId',
            'vpcId' => 'getVpcId',
            'epId' => 'getEpId',
            'isDelegated' => 'getIsDelegated'
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
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['resourceIdList'] = isset($data['resourceIdList']) ? $data['resourceIdList'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['azId'] = isset($data['azId']) ? $data['azId'] : null;
        $this->container['ipType'] = isset($data['ipType']) ? $data['ipType'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['agentState'] = isset($data['agentState']) ? $data['agentState'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['tagKey'] = isset($data['tagKey']) ? $data['tagKey'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['cceClusterId'] = isset($data['cceClusterId']) ? $data['cceClusterId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['epId'] = isset($data['epId']) ? $data['epId'] : null;
        $this->container['isDelegated'] = isset($data['isDelegated']) ? $data['isDelegated'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['provider'] === null) {
            $invalidProperties[] = "'provider' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 500)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 500.";
            }
            if (($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets provider
    *  云服务名称
    *
    * @return string
    */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
    * Sets provider
    *
    * @param string $provider 云服务名称
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
        return $this;
    }

    /**
    * Gets type
    *  资源类型名称
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 资源类型名称
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets limit
    *  最大的返回数量
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 最大的返回数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 分页参数，通过上一个请求中返回的marker信息作为输入，获取当前页
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets resourceIdList
    *  资源id列表
    *
    * @return string[]|null
    */
    public function getResourceIdList()
    {
        return $this->container['resourceIdList'];
    }

    /**
    * Sets resourceIdList
    *
    * @param string[]|null $resourceIdList 资源id列表
    *
    * @return $this
    */
    public function setResourceIdList($resourceIdList)
    {
        $this->container['resourceIdList'] = $resourceIdList;
        return $this;
    }

    /**
    * Gets name
    *  名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets regionId
    *  region id
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId region id
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets azId
    *  az id
    *
    * @return string|null
    */
    public function getAzId()
    {
        return $this->container['azId'];
    }

    /**
    * Sets azId
    *
    * @param string|null $azId az id
    *
    * @return $this
    */
    public function setAzId($azId)
    {
        $this->container['azId'] = $azId;
        return $this;
    }

    /**
    * Gets ipType
    *  ip类型，fixed：内网IP，floating：弹性公网IP
    *
    * @return string|null
    */
    public function getIpType()
    {
        return $this->container['ipType'];
    }

    /**
    * Sets ipType
    *
    * @param string|null $ipType ip类型，fixed：内网IP，floating：弹性公网IP
    *
    * @return $this
    */
    public function setIpType($ipType)
    {
        $this->container['ipType'] = $ipType;
        return $this;
    }

    /**
    * Gets ip
    *  ip
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip ip
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets status
    *  资源状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 资源状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets agentState
    *  agent状态
    *
    * @return string|null
    */
    public function getAgentState()
    {
        return $this->container['agentState'];
    }

    /**
    * Sets agentState
    *
    * @param string|null $agentState agent状态
    *
    * @return $this
    */
    public function setAgentState($agentState)
    {
        $this->container['agentState'] = $agentState;
        return $this;
    }

    /**
    * Gets imageName
    *  镜像名称，模糊匹配
    *
    * @return string|null
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string|null $imageName 镜像名称，模糊匹配
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets osType
    *  系统类型
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
    * @param string|null $osType 系统类型
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets tag
    *  标签的值
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag 标签的值
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets tagKey
    *  标签的key
    *
    * @return string|null
    */
    public function getTagKey()
    {
        return $this->container['tagKey'];
    }

    /**
    * Sets tagKey
    *
    * @param string|null $tagKey 标签的key
    *
    * @return $this
    */
    public function setTagKey($tagKey)
    {
        $this->container['tagKey'] = $tagKey;
        return $this;
    }

    /**
    * Gets groupId
    *  分组id
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 分组id
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets componentId
    *  组件id
    *
    * @return string|null
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string|null $componentId 组件id
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets applicationId
    *  应用id
    *
    * @return string|null
    */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
    * Sets applicationId
    *
    * @param string|null $applicationId 应用id
    *
    * @return $this
    */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;
        return $this;
    }

    /**
    * Gets cceClusterId
    *  cce集群id
    *
    * @return string|null
    */
    public function getCceClusterId()
    {
        return $this->container['cceClusterId'];
    }

    /**
    * Sets cceClusterId
    *
    * @param string|null $cceClusterId cce集群id
    *
    * @return $this
    */
    public function setCceClusterId($cceClusterId)
    {
        $this->container['cceClusterId'] = $cceClusterId;
        return $this;
    }

    /**
    * Gets vpcId
    *  vpc id
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
    * @param string|null $vpcId vpc id
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets epId
    *  企业项目id
    *
    * @return string|null
    */
    public function getEpId()
    {
        return $this->container['epId'];
    }

    /**
    * Sets epId
    *
    * @param string|null $epId 企业项目id
    *
    * @return $this
    */
    public function setEpId($epId)
    {
        $this->container['epId'] = $epId;
        return $this;
    }

    /**
    * Gets isDelegated
    *  资源是否已托管
    *
    * @return bool|null
    */
    public function getIsDelegated()
    {
        return $this->container['isDelegated'];
    }

    /**
    * Sets isDelegated
    *
    * @param bool|null $isDelegated 资源是否已托管
    *
    * @return $this
    */
    public function setIsDelegated($isDelegated)
    {
        $this->container['isDelegated'] = $isDelegated;
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

