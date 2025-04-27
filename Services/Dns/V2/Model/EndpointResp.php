<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EndpointResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EndpointResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  终端节点的ID，UUID形式的一个资源标识。
    * name  终端节点的名称。
    * direction  终端节点方向。 取值： inbound，表示入站终端节点。 outbound，表示出站终端节点。
    * status  资源状态。 取值范围：PENDING_CREATE, ACTIVE, PENDING_DELETE, ERROR。
    * vpcId  终端节点所属的VPC ID。
    * ipaddressCount  该终端节点下的IP地址数量。
    * resolverRuleCount  该终端节点下的转发规则数量。 仅创建出站终端节点时返回该参数。
    * createTime  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updateTime  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'direction' => 'string',
            'status' => 'string',
            'vpcId' => 'string',
            'ipaddressCount' => 'int',
            'resolverRuleCount' => 'int',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  终端节点的ID，UUID形式的一个资源标识。
    * name  终端节点的名称。
    * direction  终端节点方向。 取值： inbound，表示入站终端节点。 outbound，表示出站终端节点。
    * status  资源状态。 取值范围：PENDING_CREATE, ACTIVE, PENDING_DELETE, ERROR。
    * vpcId  终端节点所属的VPC ID。
    * ipaddressCount  该终端节点下的IP地址数量。
    * resolverRuleCount  该终端节点下的转发规则数量。 仅创建出站终端节点时返回该参数。
    * createTime  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updateTime  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'direction' => null,
        'status' => null,
        'vpcId' => null,
        'ipaddressCount' => 'int32',
        'resolverRuleCount' => 'int32',
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
    * id  终端节点的ID，UUID形式的一个资源标识。
    * name  终端节点的名称。
    * direction  终端节点方向。 取值： inbound，表示入站终端节点。 outbound，表示出站终端节点。
    * status  资源状态。 取值范围：PENDING_CREATE, ACTIVE, PENDING_DELETE, ERROR。
    * vpcId  终端节点所属的VPC ID。
    * ipaddressCount  该终端节点下的IP地址数量。
    * resolverRuleCount  该终端节点下的转发规则数量。 仅创建出站终端节点时返回该参数。
    * createTime  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updateTime  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'direction' => 'direction',
            'status' => 'status',
            'vpcId' => 'vpc_id',
            'ipaddressCount' => 'ipaddress_count',
            'resolverRuleCount' => 'resolver_rule_count',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  终端节点的ID，UUID形式的一个资源标识。
    * name  终端节点的名称。
    * direction  终端节点方向。 取值： inbound，表示入站终端节点。 outbound，表示出站终端节点。
    * status  资源状态。 取值范围：PENDING_CREATE, ACTIVE, PENDING_DELETE, ERROR。
    * vpcId  终端节点所属的VPC ID。
    * ipaddressCount  该终端节点下的IP地址数量。
    * resolverRuleCount  该终端节点下的转发规则数量。 仅创建出站终端节点时返回该参数。
    * createTime  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updateTime  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'direction' => 'setDirection',
            'status' => 'setStatus',
            'vpcId' => 'setVpcId',
            'ipaddressCount' => 'setIpaddressCount',
            'resolverRuleCount' => 'setResolverRuleCount',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  终端节点的ID，UUID形式的一个资源标识。
    * name  终端节点的名称。
    * direction  终端节点方向。 取值： inbound，表示入站终端节点。 outbound，表示出站终端节点。
    * status  资源状态。 取值范围：PENDING_CREATE, ACTIVE, PENDING_DELETE, ERROR。
    * vpcId  终端节点所属的VPC ID。
    * ipaddressCount  该终端节点下的IP地址数量。
    * resolverRuleCount  该终端节点下的转发规则数量。 仅创建出站终端节点时返回该参数。
    * createTime  创建时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    * updateTime  更新时间。 格式：yyyy-MM-dd'T'HH:mm:ss.SSS。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'direction' => 'getDirection',
            'status' => 'getStatus',
            'vpcId' => 'getVpcId',
            'ipaddressCount' => 'getIpaddressCount',
            'resolverRuleCount' => 'getResolverRuleCount',
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
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['ipaddressCount'] = isset($data['ipaddressCount']) ? $data['ipaddressCount'] : null;
        $this->container['resolverRuleCount'] = isset($data['resolverRuleCount']) ? $data['resolverRuleCount'] : null;
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
    *  终端节点的ID，UUID形式的一个资源标识。
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
    * @param string|null $id 终端节点的ID，UUID形式的一个资源标识。
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
    *  终端节点的名称。
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
    * @param string|null $name 终端节点的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets direction
    *  终端节点方向。 取值： inbound，表示入站终端节点。 outbound，表示出站终端节点。
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
    * @param string|null $direction 终端节点方向。 取值： inbound，表示入站终端节点。 outbound，表示出站终端节点。
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
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
    * Gets vpcId
    *  终端节点所属的VPC ID。
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
    * @param string|null $vpcId 终端节点所属的VPC ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets ipaddressCount
    *  该终端节点下的IP地址数量。
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
    * @param int|null $ipaddressCount 该终端节点下的IP地址数量。
    *
    * @return $this
    */
    public function setIpaddressCount($ipaddressCount)
    {
        $this->container['ipaddressCount'] = $ipaddressCount;
        return $this;
    }

    /**
    * Gets resolverRuleCount
    *  该终端节点下的转发规则数量。 仅创建出站终端节点时返回该参数。
    *
    * @return int|null
    */
    public function getResolverRuleCount()
    {
        return $this->container['resolverRuleCount'];
    }

    /**
    * Sets resolverRuleCount
    *
    * @param int|null $resolverRuleCount 该终端节点下的转发规则数量。 仅创建出站终端节点时返回该参数。
    *
    * @return $this
    */
    public function setResolverRuleCount($resolverRuleCount)
    {
        $this->container['resolverRuleCount'] = $resolverRuleCount;
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

