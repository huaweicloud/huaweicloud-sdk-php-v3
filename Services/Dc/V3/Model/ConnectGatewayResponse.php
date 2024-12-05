<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConnectGatewayResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConnectGatewayResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  唯一ID
    * tenantId  租户项目ID
    * name  网关名字
    * description  描述信息
    * addressFamily  地址族信息 - ipv4: 仅支持ipv4模式 - dual: 支持ipv4 和 ipv6 模式
    * status  网关状态 - DOWN 未使用或关联设备状态为DOWN - ACTIVE 正常 - ERROR 异常
    * accessSite  网关站点值
    * bgpAsn  BGP类型AS号
    * currentGeipCount  当前绑定的global eip数量
    * createdTime  创建时间
    * updatedTime  更新时间
    * gcbId  带宽包id
    * gatewaySite  网关位置
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'tenantId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'addressFamily' => 'string',
            'status' => 'string',
            'accessSite' => 'string',
            'bgpAsn' => 'int',
            'currentGeipCount' => 'int',
            'createdTime' => '\DateTime',
            'updatedTime' => '\DateTime',
            'gcbId' => 'string',
            'gatewaySite' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  唯一ID
    * tenantId  租户项目ID
    * name  网关名字
    * description  描述信息
    * addressFamily  地址族信息 - ipv4: 仅支持ipv4模式 - dual: 支持ipv4 和 ipv6 模式
    * status  网关状态 - DOWN 未使用或关联设备状态为DOWN - ACTIVE 正常 - ERROR 异常
    * accessSite  网关站点值
    * bgpAsn  BGP类型AS号
    * currentGeipCount  当前绑定的global eip数量
    * createdTime  创建时间
    * updatedTime  更新时间
    * gcbId  带宽包id
    * gatewaySite  网关位置
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'tenantId' => null,
        'name' => null,
        'description' => null,
        'addressFamily' => null,
        'status' => null,
        'accessSite' => null,
        'bgpAsn' => 'int64',
        'currentGeipCount' => null,
        'createdTime' => 'date-time',
        'updatedTime' => 'date-time',
        'gcbId' => null,
        'gatewaySite' => null
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
    * id  唯一ID
    * tenantId  租户项目ID
    * name  网关名字
    * description  描述信息
    * addressFamily  地址族信息 - ipv4: 仅支持ipv4模式 - dual: 支持ipv4 和 ipv6 模式
    * status  网关状态 - DOWN 未使用或关联设备状态为DOWN - ACTIVE 正常 - ERROR 异常
    * accessSite  网关站点值
    * bgpAsn  BGP类型AS号
    * currentGeipCount  当前绑定的global eip数量
    * createdTime  创建时间
    * updatedTime  更新时间
    * gcbId  带宽包id
    * gatewaySite  网关位置
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'tenantId' => 'tenant_id',
            'name' => 'name',
            'description' => 'description',
            'addressFamily' => 'address_family',
            'status' => 'status',
            'accessSite' => 'access_site',
            'bgpAsn' => 'bgp_asn',
            'currentGeipCount' => 'current_geip_count',
            'createdTime' => 'created_time',
            'updatedTime' => 'updated_time',
            'gcbId' => 'gcb_id',
            'gatewaySite' => 'gateway_site'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  唯一ID
    * tenantId  租户项目ID
    * name  网关名字
    * description  描述信息
    * addressFamily  地址族信息 - ipv4: 仅支持ipv4模式 - dual: 支持ipv4 和 ipv6 模式
    * status  网关状态 - DOWN 未使用或关联设备状态为DOWN - ACTIVE 正常 - ERROR 异常
    * accessSite  网关站点值
    * bgpAsn  BGP类型AS号
    * currentGeipCount  当前绑定的global eip数量
    * createdTime  创建时间
    * updatedTime  更新时间
    * gcbId  带宽包id
    * gatewaySite  网关位置
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'tenantId' => 'setTenantId',
            'name' => 'setName',
            'description' => 'setDescription',
            'addressFamily' => 'setAddressFamily',
            'status' => 'setStatus',
            'accessSite' => 'setAccessSite',
            'bgpAsn' => 'setBgpAsn',
            'currentGeipCount' => 'setCurrentGeipCount',
            'createdTime' => 'setCreatedTime',
            'updatedTime' => 'setUpdatedTime',
            'gcbId' => 'setGcbId',
            'gatewaySite' => 'setGatewaySite'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  唯一ID
    * tenantId  租户项目ID
    * name  网关名字
    * description  描述信息
    * addressFamily  地址族信息 - ipv4: 仅支持ipv4模式 - dual: 支持ipv4 和 ipv6 模式
    * status  网关状态 - DOWN 未使用或关联设备状态为DOWN - ACTIVE 正常 - ERROR 异常
    * accessSite  网关站点值
    * bgpAsn  BGP类型AS号
    * currentGeipCount  当前绑定的global eip数量
    * createdTime  创建时间
    * updatedTime  更新时间
    * gcbId  带宽包id
    * gatewaySite  网关位置
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'tenantId' => 'getTenantId',
            'name' => 'getName',
            'description' => 'getDescription',
            'addressFamily' => 'getAddressFamily',
            'status' => 'getStatus',
            'accessSite' => 'getAccessSite',
            'bgpAsn' => 'getBgpAsn',
            'currentGeipCount' => 'getCurrentGeipCount',
            'createdTime' => 'getCreatedTime',
            'updatedTime' => 'getUpdatedTime',
            'gcbId' => 'getGcbId',
            'gatewaySite' => 'getGatewaySite'
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
    const ADDRESS_FAMILY_IPV4 = 'ipv4';
    const ADDRESS_FAMILY_DUAL = 'dual';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAddressFamilyAllowableValues()
    {
        return [
            self::ADDRESS_FAMILY_IPV4,
            self::ADDRESS_FAMILY_DUAL,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['addressFamily'] = isset($data['addressFamily']) ? $data['addressFamily'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['accessSite'] = isset($data['accessSite']) ? $data['accessSite'] : null;
        $this->container['bgpAsn'] = isset($data['bgpAsn']) ? $data['bgpAsn'] : null;
        $this->container['currentGeipCount'] = isset($data['currentGeipCount']) ? $data['currentGeipCount'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
        $this->container['gcbId'] = isset($data['gcbId']) ? $data['gcbId'] : null;
        $this->container['gatewaySite'] = isset($data['gatewaySite']) ? $data['gatewaySite'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getAddressFamilyAllowableValues();
                if (!is_null($this->container['addressFamily']) && !in_array($this->container['addressFamily'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'addressFamily', must be one of '%s'",
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
    * Gets id
    *  唯一ID
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
    * @param string|null $id 唯一ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets tenantId
    *  租户项目ID
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 租户项目ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets name
    *  网关名字
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
    * @param string|null $name 网关名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    * Gets addressFamily
    *  地址族信息 - ipv4: 仅支持ipv4模式 - dual: 支持ipv4 和 ipv6 模式
    *
    * @return string|null
    */
    public function getAddressFamily()
    {
        return $this->container['addressFamily'];
    }

    /**
    * Sets addressFamily
    *
    * @param string|null $addressFamily 地址族信息 - ipv4: 仅支持ipv4模式 - dual: 支持ipv4 和 ipv6 模式
    *
    * @return $this
    */
    public function setAddressFamily($addressFamily)
    {
        $this->container['addressFamily'] = $addressFamily;
        return $this;
    }

    /**
    * Gets status
    *  网关状态 - DOWN 未使用或关联设备状态为DOWN - ACTIVE 正常 - ERROR 异常
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
    * @param string|null $status 网关状态 - DOWN 未使用或关联设备状态为DOWN - ACTIVE 正常 - ERROR 异常
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets accessSite
    *  网关站点值
    *
    * @return string|null
    */
    public function getAccessSite()
    {
        return $this->container['accessSite'];
    }

    /**
    * Sets accessSite
    *
    * @param string|null $accessSite 网关站点值
    *
    * @return $this
    */
    public function setAccessSite($accessSite)
    {
        $this->container['accessSite'] = $accessSite;
        return $this;
    }

    /**
    * Gets bgpAsn
    *  BGP类型AS号
    *
    * @return int|null
    */
    public function getBgpAsn()
    {
        return $this->container['bgpAsn'];
    }

    /**
    * Sets bgpAsn
    *
    * @param int|null $bgpAsn BGP类型AS号
    *
    * @return $this
    */
    public function setBgpAsn($bgpAsn)
    {
        $this->container['bgpAsn'] = $bgpAsn;
        return $this;
    }

    /**
    * Gets currentGeipCount
    *  当前绑定的global eip数量
    *
    * @return int|null
    */
    public function getCurrentGeipCount()
    {
        return $this->container['currentGeipCount'];
    }

    /**
    * Sets currentGeipCount
    *
    * @param int|null $currentGeipCount 当前绑定的global eip数量
    *
    * @return $this
    */
    public function setCurrentGeipCount($currentGeipCount)
    {
        $this->container['currentGeipCount'] = $currentGeipCount;
        return $this;
    }

    /**
    * Gets createdTime
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param \DateTime|null $createdTime 创建时间
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets updatedTime
    *  更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdatedTime()
    {
        return $this->container['updatedTime'];
    }

    /**
    * Sets updatedTime
    *
    * @param \DateTime|null $updatedTime 更新时间
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
        return $this;
    }

    /**
    * Gets gcbId
    *  带宽包id
    *
    * @return string|null
    */
    public function getGcbId()
    {
        return $this->container['gcbId'];
    }

    /**
    * Sets gcbId
    *
    * @param string|null $gcbId 带宽包id
    *
    * @return $this
    */
    public function setGcbId($gcbId)
    {
        $this->container['gcbId'] = $gcbId;
        return $this;
    }

    /**
    * Gets gatewaySite
    *  网关位置
    *
    * @return string|null
    */
    public function getGatewaySite()
    {
        return $this->container['gatewaySite'];
    }

    /**
    * Sets gatewaySite
    *
    * @param string|null $gatewaySite 网关位置
    *
    * @return $this
    */
    public function setGatewaySite($gatewaySite)
    {
        $this->container['gatewaySite'] = $gatewaySite;
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

