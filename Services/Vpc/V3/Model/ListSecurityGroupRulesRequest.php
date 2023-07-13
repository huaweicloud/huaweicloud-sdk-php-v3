<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSecurityGroupRulesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSecurityGroupRulesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  功能说明：每页返回个数 取值范围：0-2000
    * marker  分页查询起始的资源ID，为空时查询第一页
    * projectId  项目ID 获取项目ID，请参见获取项目ID
    * id  功能说明：安全组规则ID，支持多个ID过滤
    * securityGroupId  功能说明：安全组规则所属安全组ID，支持多个ID过滤
    * protocol  功能说明：安全组规则协议，支持多条过滤
    * description  功能说明：安全组规则的描述，支持多个描述同时过滤
    * remoteGroupId  功能说明：远端安全组ID，支持多ID过滤
    * direction  功能说明：安全组规则方向
    * action  功能说明：安全组规则生效策略
    * remoteIpPrefix  功能说明：远端IP地址 取值范围：cidr格式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'projectId' => 'string',
            'id' => 'string[]',
            'securityGroupId' => 'string[]',
            'protocol' => 'string[]',
            'description' => 'string[]',
            'remoteGroupId' => 'string[]',
            'direction' => 'string',
            'action' => 'string',
            'remoteIpPrefix' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  功能说明：每页返回个数 取值范围：0-2000
    * marker  分页查询起始的资源ID，为空时查询第一页
    * projectId  项目ID 获取项目ID，请参见获取项目ID
    * id  功能说明：安全组规则ID，支持多个ID过滤
    * securityGroupId  功能说明：安全组规则所属安全组ID，支持多个ID过滤
    * protocol  功能说明：安全组规则协议，支持多条过滤
    * description  功能说明：安全组规则的描述，支持多个描述同时过滤
    * remoteGroupId  功能说明：远端安全组ID，支持多ID过滤
    * direction  功能说明：安全组规则方向
    * action  功能说明：安全组规则生效策略
    * remoteIpPrefix  功能说明：远端IP地址 取值范围：cidr格式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'projectId' => null,
        'id' => null,
        'securityGroupId' => null,
        'protocol' => null,
        'description' => null,
        'remoteGroupId' => null,
        'direction' => null,
        'action' => null,
        'remoteIpPrefix' => null
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
    * limit  功能说明：每页返回个数 取值范围：0-2000
    * marker  分页查询起始的资源ID，为空时查询第一页
    * projectId  项目ID 获取项目ID，请参见获取项目ID
    * id  功能说明：安全组规则ID，支持多个ID过滤
    * securityGroupId  功能说明：安全组规则所属安全组ID，支持多个ID过滤
    * protocol  功能说明：安全组规则协议，支持多条过滤
    * description  功能说明：安全组规则的描述，支持多个描述同时过滤
    * remoteGroupId  功能说明：远端安全组ID，支持多ID过滤
    * direction  功能说明：安全组规则方向
    * action  功能说明：安全组规则生效策略
    * remoteIpPrefix  功能说明：远端IP地址 取值范围：cidr格式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'projectId' => 'project_id',
            'id' => 'id',
            'securityGroupId' => 'security_group_id',
            'protocol' => 'protocol',
            'description' => 'description',
            'remoteGroupId' => 'remote_group_id',
            'direction' => 'direction',
            'action' => 'action',
            'remoteIpPrefix' => 'remote_ip_prefix'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  功能说明：每页返回个数 取值范围：0-2000
    * marker  分页查询起始的资源ID，为空时查询第一页
    * projectId  项目ID 获取项目ID，请参见获取项目ID
    * id  功能说明：安全组规则ID，支持多个ID过滤
    * securityGroupId  功能说明：安全组规则所属安全组ID，支持多个ID过滤
    * protocol  功能说明：安全组规则协议，支持多条过滤
    * description  功能说明：安全组规则的描述，支持多个描述同时过滤
    * remoteGroupId  功能说明：远端安全组ID，支持多ID过滤
    * direction  功能说明：安全组规则方向
    * action  功能说明：安全组规则生效策略
    * remoteIpPrefix  功能说明：远端IP地址 取值范围：cidr格式
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'projectId' => 'setProjectId',
            'id' => 'setId',
            'securityGroupId' => 'setSecurityGroupId',
            'protocol' => 'setProtocol',
            'description' => 'setDescription',
            'remoteGroupId' => 'setRemoteGroupId',
            'direction' => 'setDirection',
            'action' => 'setAction',
            'remoteIpPrefix' => 'setRemoteIpPrefix'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  功能说明：每页返回个数 取值范围：0-2000
    * marker  分页查询起始的资源ID，为空时查询第一页
    * projectId  项目ID 获取项目ID，请参见获取项目ID
    * id  功能说明：安全组规则ID，支持多个ID过滤
    * securityGroupId  功能说明：安全组规则所属安全组ID，支持多个ID过滤
    * protocol  功能说明：安全组规则协议，支持多条过滤
    * description  功能说明：安全组规则的描述，支持多个描述同时过滤
    * remoteGroupId  功能说明：远端安全组ID，支持多ID过滤
    * direction  功能说明：安全组规则方向
    * action  功能说明：安全组规则生效策略
    * remoteIpPrefix  功能说明：远端IP地址 取值范围：cidr格式
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'projectId' => 'getProjectId',
            'id' => 'getId',
            'securityGroupId' => 'getSecurityGroupId',
            'protocol' => 'getProtocol',
            'description' => 'getDescription',
            'remoteGroupId' => 'getRemoteGroupId',
            'direction' => 'getDirection',
            'action' => 'getAction',
            'remoteIpPrefix' => 'getRemoteIpPrefix'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['remoteGroupId'] = isset($data['remoteGroupId']) ? $data['remoteGroupId'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['remoteIpPrefix'] = isset($data['remoteIpPrefix']) ? $data['remoteIpPrefix'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if (!preg_match("/[0-9a-fA-F]{32}/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /[0-9a-fA-F]{32}/.";
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
    * Gets limit
    *  功能说明：每页返回个数 取值范围：0-2000
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 功能说明：每页返回个数 取值范围：0-2000
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
    *  分页查询起始的资源ID，为空时查询第一页
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
    * @param string|null $marker 分页查询起始的资源ID，为空时查询第一页
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID 获取项目ID，请参见获取项目ID
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
    * @param string $projectId 项目ID 获取项目ID，请参见获取项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets id
    *  功能说明：安全组规则ID，支持多个ID过滤
    *
    * @return string[]|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string[]|null $id 功能说明：安全组规则ID，支持多个ID过滤
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  功能说明：安全组规则所属安全组ID，支持多个ID过滤
    *
    * @return string[]|null
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string[]|null $securityGroupId 功能说明：安全组规则所属安全组ID，支持多个ID过滤
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets protocol
    *  功能说明：安全组规则协议，支持多条过滤
    *
    * @return string[]|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string[]|null $protocol 功能说明：安全组规则协议，支持多条过滤
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets description
    *  功能说明：安全组规则的描述，支持多个描述同时过滤
    *
    * @return string[]|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string[]|null $description 功能说明：安全组规则的描述，支持多个描述同时过滤
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets remoteGroupId
    *  功能说明：远端安全组ID，支持多ID过滤
    *
    * @return string[]|null
    */
    public function getRemoteGroupId()
    {
        return $this->container['remoteGroupId'];
    }

    /**
    * Sets remoteGroupId
    *
    * @param string[]|null $remoteGroupId 功能说明：远端安全组ID，支持多ID过滤
    *
    * @return $this
    */
    public function setRemoteGroupId($remoteGroupId)
    {
        $this->container['remoteGroupId'] = $remoteGroupId;
        return $this;
    }

    /**
    * Gets direction
    *  功能说明：安全组规则方向
    *
    * @return string|null
    */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
    * Sets direction
    *
    * @param string|null $direction 功能说明：安全组规则方向
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets action
    *  功能说明：安全组规则生效策略
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 功能说明：安全组规则生效策略
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets remoteIpPrefix
    *  功能说明：远端IP地址 取值范围：cidr格式
    *
    * @return string|null
    */
    public function getRemoteIpPrefix()
    {
        return $this->container['remoteIpPrefix'];
    }

    /**
    * Sets remoteIpPrefix
    *
    * @param string|null $remoteIpPrefix 功能说明：远端IP地址 取值范围：cidr格式
    *
    * @return $this
    */
    public function setRemoteIpPrefix($remoteIpPrefix)
    {
        $this->container['remoteIpPrefix'] = $remoteIpPrefix;
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

