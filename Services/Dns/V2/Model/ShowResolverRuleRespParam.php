<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowResolverRuleRespParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowResolverRuleRespParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  转发规则的ID，UUID形式的一个资源标识。
    * name  规则名称。
    * domainName  域名。
    * endpointId  当前规则所属的终端节点ID。
    * status  资源状态。 取值范围：PENDING_CREATE, ACTIVE, PENDING_DELETE, ERROR。
    * ruleType  规则类型。 预留字段，当前默认为FORWARD。
    * ipaddressCount  当前规则下的IP地址数量。
    * ipaddresses  规则的目标IP地址。
    * routers  关联的VPC信息。
    * createTime  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updateTime  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'domainName' => 'string',
            'endpointId' => 'string',
            'status' => 'string',
            'ruleType' => 'string',
            'ipaddressCount' => 'int',
            'ipaddresses' => '\HuaweiCloud\SDK\Dns\V2\Model\IpValue[]',
            'routers' => '\HuaweiCloud\SDK\Dns\V2\Model\Router[]',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  转发规则的ID，UUID形式的一个资源标识。
    * name  规则名称。
    * domainName  域名。
    * endpointId  当前规则所属的终端节点ID。
    * status  资源状态。 取值范围：PENDING_CREATE, ACTIVE, PENDING_DELETE, ERROR。
    * ruleType  规则类型。 预留字段，当前默认为FORWARD。
    * ipaddressCount  当前规则下的IP地址数量。
    * ipaddresses  规则的目标IP地址。
    * routers  关联的VPC信息。
    * createTime  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updateTime  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'domainName' => null,
        'endpointId' => null,
        'status' => null,
        'ruleType' => 'int32',
        'ipaddressCount' => 'int32',
        'ipaddresses' => null,
        'routers' => null,
        'createTime' => null,
        'updateTime' => null
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
    * id  转发规则的ID，UUID形式的一个资源标识。
    * name  规则名称。
    * domainName  域名。
    * endpointId  当前规则所属的终端节点ID。
    * status  资源状态。 取值范围：PENDING_CREATE, ACTIVE, PENDING_DELETE, ERROR。
    * ruleType  规则类型。 预留字段，当前默认为FORWARD。
    * ipaddressCount  当前规则下的IP地址数量。
    * ipaddresses  规则的目标IP地址。
    * routers  关联的VPC信息。
    * createTime  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updateTime  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'domainName' => 'domain_name',
            'endpointId' => 'endpoint_id',
            'status' => 'status',
            'ruleType' => 'rule_type',
            'ipaddressCount' => 'ipaddress_count',
            'ipaddresses' => 'ipaddresses',
            'routers' => 'routers',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  转发规则的ID，UUID形式的一个资源标识。
    * name  规则名称。
    * domainName  域名。
    * endpointId  当前规则所属的终端节点ID。
    * status  资源状态。 取值范围：PENDING_CREATE, ACTIVE, PENDING_DELETE, ERROR。
    * ruleType  规则类型。 预留字段，当前默认为FORWARD。
    * ipaddressCount  当前规则下的IP地址数量。
    * ipaddresses  规则的目标IP地址。
    * routers  关联的VPC信息。
    * createTime  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updateTime  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'domainName' => 'setDomainName',
            'endpointId' => 'setEndpointId',
            'status' => 'setStatus',
            'ruleType' => 'setRuleType',
            'ipaddressCount' => 'setIpaddressCount',
            'ipaddresses' => 'setIpaddresses',
            'routers' => 'setRouters',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  转发规则的ID，UUID形式的一个资源标识。
    * name  规则名称。
    * domainName  域名。
    * endpointId  当前规则所属的终端节点ID。
    * status  资源状态。 取值范围：PENDING_CREATE, ACTIVE, PENDING_DELETE, ERROR。
    * ruleType  规则类型。 预留字段，当前默认为FORWARD。
    * ipaddressCount  当前规则下的IP地址数量。
    * ipaddresses  规则的目标IP地址。
    * routers  关联的VPC信息。
    * createTime  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updateTime  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'domainName' => 'getDomainName',
            'endpointId' => 'getEndpointId',
            'status' => 'getStatus',
            'ruleType' => 'getRuleType',
            'ipaddressCount' => 'getIpaddressCount',
            'ipaddresses' => 'getIpaddresses',
            'routers' => 'getRouters',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['endpointId'] = isset($data['endpointId']) ? $data['endpointId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
        $this->container['ipaddressCount'] = isset($data['ipaddressCount']) ? $data['ipaddressCount'] : null;
        $this->container['ipaddresses'] = isset($data['ipaddresses']) ? $data['ipaddresses'] : null;
        $this->container['routers'] = isset($data['routers']) ? $data['routers'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets id
    *  转发规则的ID，UUID形式的一个资源标识。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 转发规则的ID，UUID形式的一个资源标识。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  规则名称。
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
    * @param string|null $name 规则名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets domainName
    *  域名。
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 域名。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets endpointId
    *  当前规则所属的终端节点ID。
    *
    * @return string|null
    */
    public function getEndpointId()
    {
        return $this->container['endpointId'];
    }

    /**
    * Sets endpointId
    *
    * @param string|null $endpointId 当前规则所属的终端节点ID。
    *
    * @return $this
    */
    public function setEndpointId($endpointId)
    {
        $this->container['endpointId'] = $endpointId;
        return $this;
    }

    /**
    * Gets status
    *  资源状态。 取值范围：PENDING_CREATE, ACTIVE, PENDING_DELETE, ERROR。
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
    * @param string|null $status 资源状态。 取值范围：PENDING_CREATE, ACTIVE, PENDING_DELETE, ERROR。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets ruleType
    *  规则类型。 预留字段，当前默认为FORWARD。
    *
    * @return string|null
    */
    public function getRuleType()
    {
        return $this->container['ruleType'];
    }

    /**
    * Sets ruleType
    *
    * @param string|null $ruleType 规则类型。 预留字段，当前默认为FORWARD。
    *
    * @return $this
    */
    public function setRuleType($ruleType)
    {
        $this->container['ruleType'] = $ruleType;
        return $this;
    }

    /**
    * Gets ipaddressCount
    *  当前规则下的IP地址数量。
    *
    * @return int|null
    */
    public function getIpaddressCount()
    {
        return $this->container['ipaddressCount'];
    }

    /**
    * Sets ipaddressCount
    *
    * @param int|null $ipaddressCount 当前规则下的IP地址数量。
    *
    * @return $this
    */
    public function setIpaddressCount($ipaddressCount)
    {
        $this->container['ipaddressCount'] = $ipaddressCount;
        return $this;
    }

    /**
    * Gets ipaddresses
    *  规则的目标IP地址。
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\IpValue[]|null
    */
    public function getIpaddresses()
    {
        return $this->container['ipaddresses'];
    }

    /**
    * Sets ipaddresses
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\IpValue[]|null $ipaddresses 规则的目标IP地址。
    *
    * @return $this
    */
    public function setIpaddresses($ipaddresses)
    {
        $this->container['ipaddresses'] = $ipaddresses;
        return $this;
    }

    /**
    * Gets routers
    *  关联的VPC信息。
    *
    * @return \HuaweiCloud\SDK\Dns\V2\Model\Router[]|null
    */
    public function getRouters()
    {
        return $this->container['routers'];
    }

    /**
    * Sets routers
    *
    * @param \HuaweiCloud\SDK\Dns\V2\Model\Router[]|null $routers 关联的VPC信息。
    *
    * @return $this
    */
    public function setRouters($routers)
    {
        $this->container['routers'] = $routers;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

