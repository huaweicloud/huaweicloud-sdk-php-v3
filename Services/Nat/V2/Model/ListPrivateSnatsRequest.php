<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPrivateSnatsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPrivateSnatsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000。
    * marker  功能说明：分页查询起始的资源ID，为空时查询第一页。 值从上一次查询的PageInfo中的next_marker或者previous_marker中获取。
    * pageReverse  是否查询前一页。
    * id  SNAT规则的ID。
    * description  SNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * gatewayId  私网NAT网关实例的ID。
    * cidr  规则匹配的CIDR。
    * virsubnetId  规则匹配的子网的ID。
    * transitIpId  中转IP的ID。
    * transitIpAddress  中转IP地址。
    * enterpriseProjectId  企业项目ID。创建SNAT规则时，关联的企业项目ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'pageReverse' => 'bool',
            'id' => 'string[]',
            'description' => 'string[]',
            'gatewayId' => 'string[]',
            'cidr' => 'string[]',
            'virsubnetId' => 'string[]',
            'transitIpId' => 'string[]',
            'transitIpAddress' => 'string[]',
            'enterpriseProjectId' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000。
    * marker  功能说明：分页查询起始的资源ID，为空时查询第一页。 值从上一次查询的PageInfo中的next_marker或者previous_marker中获取。
    * pageReverse  是否查询前一页。
    * id  SNAT规则的ID。
    * description  SNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * gatewayId  私网NAT网关实例的ID。
    * cidr  规则匹配的CIDR。
    * virsubnetId  规则匹配的子网的ID。
    * transitIpId  中转IP的ID。
    * transitIpAddress  中转IP地址。
    * enterpriseProjectId  企业项目ID。创建SNAT规则时，关联的企业项目ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => null,
        'marker' => null,
        'pageReverse' => null,
        'id' => null,
        'description' => null,
        'gatewayId' => null,
        'cidr' => null,
        'virsubnetId' => null,
        'transitIpId' => null,
        'transitIpAddress' => null,
        'enterpriseProjectId' => null
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
    * limit  功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000。
    * marker  功能说明：分页查询起始的资源ID，为空时查询第一页。 值从上一次查询的PageInfo中的next_marker或者previous_marker中获取。
    * pageReverse  是否查询前一页。
    * id  SNAT规则的ID。
    * description  SNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * gatewayId  私网NAT网关实例的ID。
    * cidr  规则匹配的CIDR。
    * virsubnetId  规则匹配的子网的ID。
    * transitIpId  中转IP的ID。
    * transitIpAddress  中转IP地址。
    * enterpriseProjectId  企业项目ID。创建SNAT规则时，关联的企业项目ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'pageReverse' => 'page_reverse',
            'id' => 'id',
            'description' => 'description',
            'gatewayId' => 'gateway_id',
            'cidr' => 'cidr',
            'virsubnetId' => 'virsubnet_id',
            'transitIpId' => 'transit_ip_id',
            'transitIpAddress' => 'transit_ip_address',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000。
    * marker  功能说明：分页查询起始的资源ID，为空时查询第一页。 值从上一次查询的PageInfo中的next_marker或者previous_marker中获取。
    * pageReverse  是否查询前一页。
    * id  SNAT规则的ID。
    * description  SNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * gatewayId  私网NAT网关实例的ID。
    * cidr  规则匹配的CIDR。
    * virsubnetId  规则匹配的子网的ID。
    * transitIpId  中转IP的ID。
    * transitIpAddress  中转IP地址。
    * enterpriseProjectId  企业项目ID。创建SNAT规则时，关联的企业项目ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'pageReverse' => 'setPageReverse',
            'id' => 'setId',
            'description' => 'setDescription',
            'gatewayId' => 'setGatewayId',
            'cidr' => 'setCidr',
            'virsubnetId' => 'setVirsubnetId',
            'transitIpId' => 'setTransitIpId',
            'transitIpAddress' => 'setTransitIpAddress',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000。
    * marker  功能说明：分页查询起始的资源ID，为空时查询第一页。 值从上一次查询的PageInfo中的next_marker或者previous_marker中获取。
    * pageReverse  是否查询前一页。
    * id  SNAT规则的ID。
    * description  SNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * gatewayId  私网NAT网关实例的ID。
    * cidr  规则匹配的CIDR。
    * virsubnetId  规则匹配的子网的ID。
    * transitIpId  中转IP的ID。
    * transitIpAddress  中转IP地址。
    * enterpriseProjectId  企业项目ID。创建SNAT规则时，关联的企业项目ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'pageReverse' => 'getPageReverse',
            'id' => 'getId',
            'description' => 'getDescription',
            'gatewayId' => 'getGatewayId',
            'cidr' => 'getCidr',
            'virsubnetId' => 'getVirsubnetId',
            'transitIpId' => 'getTransitIpId',
            'transitIpAddress' => 'getTransitIpAddress',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['pageReverse'] = isset($data['pageReverse']) ? $data['pageReverse'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['gatewayId'] = isset($data['gatewayId']) ? $data['gatewayId'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['virsubnetId'] = isset($data['virsubnetId']) ? $data['virsubnetId'] : null;
        $this->container['transitIpId'] = isset($data['transitIpId']) ? $data['transitIpId'] : null;
        $this->container['transitIpAddress'] = isset($data['transitIpAddress']) ? $data['transitIpAddress'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 36)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 36)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 36.";
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
    *  功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000。
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
    * @param int|null $limit 功能说明：每页返回的个数。 取值范围：1~2000。 默认值：2000。
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
    *  功能说明：分页查询起始的资源ID，为空时查询第一页。 值从上一次查询的PageInfo中的next_marker或者previous_marker中获取。
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
    * @param string|null $marker 功能说明：分页查询起始的资源ID，为空时查询第一页。 值从上一次查询的PageInfo中的next_marker或者previous_marker中获取。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets pageReverse
    *  是否查询前一页。
    *
    * @return bool|null
    */
    public function getPageReverse()
    {
        return $this->container['pageReverse'];
    }

    /**
    * Sets pageReverse
    *
    * @param bool|null $pageReverse 是否查询前一页。
    *
    * @return $this
    */
    public function setPageReverse($pageReverse)
    {
        $this->container['pageReverse'] = $pageReverse;
        return $this;
    }

    /**
    * Gets id
    *  SNAT规则的ID。
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
    * @param string[]|null $id SNAT规则的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets description
    *  SNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
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
    * @param string[]|null $description SNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets gatewayId
    *  私网NAT网关实例的ID。
    *
    * @return string[]|null
    */
    public function getGatewayId()
    {
        return $this->container['gatewayId'];
    }

    /**
    * Sets gatewayId
    *
    * @param string[]|null $gatewayId 私网NAT网关实例的ID。
    *
    * @return $this
    */
    public function setGatewayId($gatewayId)
    {
        $this->container['gatewayId'] = $gatewayId;
        return $this;
    }

    /**
    * Gets cidr
    *  规则匹配的CIDR。
    *
    * @return string[]|null
    */
    public function getCidr()
    {
        return $this->container['cidr'];
    }

    /**
    * Sets cidr
    *
    * @param string[]|null $cidr 规则匹配的CIDR。
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets virsubnetId
    *  规则匹配的子网的ID。
    *
    * @return string[]|null
    */
    public function getVirsubnetId()
    {
        return $this->container['virsubnetId'];
    }

    /**
    * Sets virsubnetId
    *
    * @param string[]|null $virsubnetId 规则匹配的子网的ID。
    *
    * @return $this
    */
    public function setVirsubnetId($virsubnetId)
    {
        $this->container['virsubnetId'] = $virsubnetId;
        return $this;
    }

    /**
    * Gets transitIpId
    *  中转IP的ID。
    *
    * @return string[]|null
    */
    public function getTransitIpId()
    {
        return $this->container['transitIpId'];
    }

    /**
    * Sets transitIpId
    *
    * @param string[]|null $transitIpId 中转IP的ID。
    *
    * @return $this
    */
    public function setTransitIpId($transitIpId)
    {
        $this->container['transitIpId'] = $transitIpId;
        return $this;
    }

    /**
    * Gets transitIpAddress
    *  中转IP地址。
    *
    * @return string[]|null
    */
    public function getTransitIpAddress()
    {
        return $this->container['transitIpAddress'];
    }

    /**
    * Sets transitIpAddress
    *
    * @param string[]|null $transitIpAddress 中转IP地址。
    *
    * @return $this
    */
    public function setTransitIpAddress($transitIpAddress)
    {
        $this->container['transitIpAddress'] = $transitIpAddress;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。创建SNAT规则时，关联的企业项目ID。
    *
    * @return string[]|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string[]|null $enterpriseProjectId 企业项目ID。创建SNAT规则时，关联的企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

