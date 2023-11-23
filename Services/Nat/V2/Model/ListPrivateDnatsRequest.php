<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPrivateDnatsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPrivateDnatsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  功能说明：每页返回的个数。 取值范围：0~2000。 默认值：2000。
    * marker  功能说明：分页查询起始的资源ID，为空时查询第一页。 值从上一次查询的PageInfo中的next_marker或者previous_marker中获取。
    * pageReverse  是否查询前一页。
    * id  DNAT规则的ID。
    * enterpriseProjectId  企业项目ID。创建DNAT规则时，关联的企业项目ID。
    * description  DNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * gatewayId  私网NAT网关实例的ID。
    * transitIpId  中转IP的ID。
    * externalIpAddress  中转IP的地址。
    * networkInterfaceId  网络接口ID，支持计算、ELB、VIP等实例的网络接口。
    * type  DNAT规则后端的类型。 取值：     COMPUTE：后端为计算实例。     VIP：后端为VIP的实例。     ELB：后端为ELB的实例。     ELBv3：后端为ELBv3的实例。     CUSTOMIZE：后端为自定义IP。
    * privateIpAddress  后端实例的IP私网地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'pageReverse' => 'bool',
            'id' => 'string[]',
            'enterpriseProjectId' => 'string[]',
            'description' => 'string[]',
            'gatewayId' => 'string[]',
            'transitIpId' => 'string[]',
            'externalIpAddress' => 'string[]',
            'networkInterfaceId' => 'string[]',
            'type' => 'string[]',
            'privateIpAddress' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  功能说明：每页返回的个数。 取值范围：0~2000。 默认值：2000。
    * marker  功能说明：分页查询起始的资源ID，为空时查询第一页。 值从上一次查询的PageInfo中的next_marker或者previous_marker中获取。
    * pageReverse  是否查询前一页。
    * id  DNAT规则的ID。
    * enterpriseProjectId  企业项目ID。创建DNAT规则时，关联的企业项目ID。
    * description  DNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * gatewayId  私网NAT网关实例的ID。
    * transitIpId  中转IP的ID。
    * externalIpAddress  中转IP的地址。
    * networkInterfaceId  网络接口ID，支持计算、ELB、VIP等实例的网络接口。
    * type  DNAT规则后端的类型。 取值：     COMPUTE：后端为计算实例。     VIP：后端为VIP的实例。     ELB：后端为ELB的实例。     ELBv3：后端为ELBv3的实例。     CUSTOMIZE：后端为自定义IP。
    * privateIpAddress  后端实例的IP私网地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => null,
        'marker' => null,
        'pageReverse' => null,
        'id' => null,
        'enterpriseProjectId' => null,
        'description' => null,
        'gatewayId' => null,
        'transitIpId' => null,
        'externalIpAddress' => null,
        'networkInterfaceId' => null,
        'type' => null,
        'privateIpAddress' => null
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
    * limit  功能说明：每页返回的个数。 取值范围：0~2000。 默认值：2000。
    * marker  功能说明：分页查询起始的资源ID，为空时查询第一页。 值从上一次查询的PageInfo中的next_marker或者previous_marker中获取。
    * pageReverse  是否查询前一页。
    * id  DNAT规则的ID。
    * enterpriseProjectId  企业项目ID。创建DNAT规则时，关联的企业项目ID。
    * description  DNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * gatewayId  私网NAT网关实例的ID。
    * transitIpId  中转IP的ID。
    * externalIpAddress  中转IP的地址。
    * networkInterfaceId  网络接口ID，支持计算、ELB、VIP等实例的网络接口。
    * type  DNAT规则后端的类型。 取值：     COMPUTE：后端为计算实例。     VIP：后端为VIP的实例。     ELB：后端为ELB的实例。     ELBv3：后端为ELBv3的实例。     CUSTOMIZE：后端为自定义IP。
    * privateIpAddress  后端实例的IP私网地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'pageReverse' => 'page_reverse',
            'id' => 'id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'description' => 'description',
            'gatewayId' => 'gateway_id',
            'transitIpId' => 'transit_ip_id',
            'externalIpAddress' => 'external_ip_address',
            'networkInterfaceId' => 'network_interface_id',
            'type' => 'type',
            'privateIpAddress' => 'private_ip_address'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  功能说明：每页返回的个数。 取值范围：0~2000。 默认值：2000。
    * marker  功能说明：分页查询起始的资源ID，为空时查询第一页。 值从上一次查询的PageInfo中的next_marker或者previous_marker中获取。
    * pageReverse  是否查询前一页。
    * id  DNAT规则的ID。
    * enterpriseProjectId  企业项目ID。创建DNAT规则时，关联的企业项目ID。
    * description  DNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * gatewayId  私网NAT网关实例的ID。
    * transitIpId  中转IP的ID。
    * externalIpAddress  中转IP的地址。
    * networkInterfaceId  网络接口ID，支持计算、ELB、VIP等实例的网络接口。
    * type  DNAT规则后端的类型。 取值：     COMPUTE：后端为计算实例。     VIP：后端为VIP的实例。     ELB：后端为ELB的实例。     ELBv3：后端为ELBv3的实例。     CUSTOMIZE：后端为自定义IP。
    * privateIpAddress  后端实例的IP私网地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'pageReverse' => 'setPageReverse',
            'id' => 'setId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'description' => 'setDescription',
            'gatewayId' => 'setGatewayId',
            'transitIpId' => 'setTransitIpId',
            'externalIpAddress' => 'setExternalIpAddress',
            'networkInterfaceId' => 'setNetworkInterfaceId',
            'type' => 'setType',
            'privateIpAddress' => 'setPrivateIpAddress'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  功能说明：每页返回的个数。 取值范围：0~2000。 默认值：2000。
    * marker  功能说明：分页查询起始的资源ID，为空时查询第一页。 值从上一次查询的PageInfo中的next_marker或者previous_marker中获取。
    * pageReverse  是否查询前一页。
    * id  DNAT规则的ID。
    * enterpriseProjectId  企业项目ID。创建DNAT规则时，关联的企业项目ID。
    * description  DNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
    * gatewayId  私网NAT网关实例的ID。
    * transitIpId  中转IP的ID。
    * externalIpAddress  中转IP的地址。
    * networkInterfaceId  网络接口ID，支持计算、ELB、VIP等实例的网络接口。
    * type  DNAT规则后端的类型。 取值：     COMPUTE：后端为计算实例。     VIP：后端为VIP的实例。     ELB：后端为ELB的实例。     ELBv3：后端为ELBv3的实例。     CUSTOMIZE：后端为自定义IP。
    * privateIpAddress  后端实例的IP私网地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'pageReverse' => 'getPageReverse',
            'id' => 'getId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'description' => 'getDescription',
            'gatewayId' => 'getGatewayId',
            'transitIpId' => 'getTransitIpId',
            'externalIpAddress' => 'getExternalIpAddress',
            'networkInterfaceId' => 'getNetworkInterfaceId',
            'type' => 'getType',
            'privateIpAddress' => 'getPrivateIpAddress'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['gatewayId'] = isset($data['gatewayId']) ? $data['gatewayId'] : null;
        $this->container['transitIpId'] = isset($data['transitIpId']) ? $data['transitIpId'] : null;
        $this->container['externalIpAddress'] = isset($data['externalIpAddress']) ? $data['externalIpAddress'] : null;
        $this->container['networkInterfaceId'] = isset($data['networkInterfaceId']) ? $data['networkInterfaceId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['privateIpAddress'] = isset($data['privateIpAddress']) ? $data['privateIpAddress'] : null;
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
    *  功能说明：每页返回的个数。 取值范围：0~2000。 默认值：2000。
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
    * @param int|null $limit 功能说明：每页返回的个数。 取值范围：0~2000。 默认值：2000。
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
    *  DNAT规则的ID。
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
    * @param string[]|null $id DNAT规则的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。创建DNAT规则时，关联的企业项目ID。
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
    * @param string[]|null $enterpriseProjectId 企业项目ID。创建DNAT规则时，关联的企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets description
    *  DNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
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
    * @param string[]|null $description DNAT规则的描述。长度范围小于等于255个字符，不能包含“<”和“>”。
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
    * Gets externalIpAddress
    *  中转IP的地址。
    *
    * @return string[]|null
    */
    public function getExternalIpAddress()
    {
        return $this->container['externalIpAddress'];
    }

    /**
    * Sets externalIpAddress
    *
    * @param string[]|null $externalIpAddress 中转IP的地址。
    *
    * @return $this
    */
    public function setExternalIpAddress($externalIpAddress)
    {
        $this->container['externalIpAddress'] = $externalIpAddress;
        return $this;
    }

    /**
    * Gets networkInterfaceId
    *  网络接口ID，支持计算、ELB、VIP等实例的网络接口。
    *
    * @return string[]|null
    */
    public function getNetworkInterfaceId()
    {
        return $this->container['networkInterfaceId'];
    }

    /**
    * Sets networkInterfaceId
    *
    * @param string[]|null $networkInterfaceId 网络接口ID，支持计算、ELB、VIP等实例的网络接口。
    *
    * @return $this
    */
    public function setNetworkInterfaceId($networkInterfaceId)
    {
        $this->container['networkInterfaceId'] = $networkInterfaceId;
        return $this;
    }

    /**
    * Gets type
    *  DNAT规则后端的类型。 取值：     COMPUTE：后端为计算实例。     VIP：后端为VIP的实例。     ELB：后端为ELB的实例。     ELBv3：后端为ELBv3的实例。     CUSTOMIZE：后端为自定义IP。
    *
    * @return string[]|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string[]|null $type DNAT规则后端的类型。 取值：     COMPUTE：后端为计算实例。     VIP：后端为VIP的实例。     ELB：后端为ELB的实例。     ELBv3：后端为ELBv3的实例。     CUSTOMIZE：后端为自定义IP。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets privateIpAddress
    *  后端实例的IP私网地址。
    *
    * @return string[]|null
    */
    public function getPrivateIpAddress()
    {
        return $this->container['privateIpAddress'];
    }

    /**
    * Sets privateIpAddress
    *
    * @param string[]|null $privateIpAddress 后端实例的IP私网地址。
    *
    * @return $this
    */
    public function setPrivateIpAddress($privateIpAddress)
    {
        $this->container['privateIpAddress'] = $privateIpAddress;
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

