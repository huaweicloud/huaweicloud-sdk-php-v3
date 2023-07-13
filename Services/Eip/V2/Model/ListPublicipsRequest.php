<?php

namespace HuaweiCloud\SDK\Eip\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPublicipsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPublicipsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * marker  取值为上一页数据的最后一条记录的id，为空时为查询第一页
    * limit  功能说明：每页返回的个数  取值范围：0~intmax
    * ipVersion  IP地址版本信息  4：IPv4  6：IPv6
    * enterpriseProjectId  功能说明：企业项目ID。可以使用该字段过滤某个企业项目下的弹性IP弹性公网IP。  取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。若需要查询当前用户所有企业项目绑定的弹性公网IP，请传参all_granted_eps。
    * portId  绑定弹性公网IP的端口id
    * publicIpAddress  IPv4时是申请到的弹性公网IP地址，IPv6时是IPv6地址对应的IPv4地址
    * privateIpAddress  关联端口的私有IP地址
    * id  弹性公网IP唯一标识
    * allowShareBandwidthTypeAny  共享带宽类型，根据任一共享带宽类型过滤EIP列表。 可以指定多个带宽类型，不同的带宽类型间用逗号分隔。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'marker' => 'string',
            'limit' => 'int',
            'ipVersion' => 'int',
            'enterpriseProjectId' => 'string',
            'portId' => 'string[]',
            'publicIpAddress' => 'string[]',
            'privateIpAddress' => 'string[]',
            'id' => 'string[]',
            'allowShareBandwidthTypeAny' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * marker  取值为上一页数据的最后一条记录的id，为空时为查询第一页
    * limit  功能说明：每页返回的个数  取值范围：0~intmax
    * ipVersion  IP地址版本信息  4：IPv4  6：IPv6
    * enterpriseProjectId  功能说明：企业项目ID。可以使用该字段过滤某个企业项目下的弹性IP弹性公网IP。  取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。若需要查询当前用户所有企业项目绑定的弹性公网IP，请传参all_granted_eps。
    * portId  绑定弹性公网IP的端口id
    * publicIpAddress  IPv4时是申请到的弹性公网IP地址，IPv6时是IPv6地址对应的IPv4地址
    * privateIpAddress  关联端口的私有IP地址
    * id  弹性公网IP唯一标识
    * allowShareBandwidthTypeAny  共享带宽类型，根据任一共享带宽类型过滤EIP列表。 可以指定多个带宽类型，不同的带宽类型间用逗号分隔。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'marker' => null,
        'limit' => 'int32',
        'ipVersion' => 'int32',
        'enterpriseProjectId' => null,
        'portId' => null,
        'publicIpAddress' => null,
        'privateIpAddress' => null,
        'id' => null,
        'allowShareBandwidthTypeAny' => null
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
    * marker  取值为上一页数据的最后一条记录的id，为空时为查询第一页
    * limit  功能说明：每页返回的个数  取值范围：0~intmax
    * ipVersion  IP地址版本信息  4：IPv4  6：IPv6
    * enterpriseProjectId  功能说明：企业项目ID。可以使用该字段过滤某个企业项目下的弹性IP弹性公网IP。  取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。若需要查询当前用户所有企业项目绑定的弹性公网IP，请传参all_granted_eps。
    * portId  绑定弹性公网IP的端口id
    * publicIpAddress  IPv4时是申请到的弹性公网IP地址，IPv6时是IPv6地址对应的IPv4地址
    * privateIpAddress  关联端口的私有IP地址
    * id  弹性公网IP唯一标识
    * allowShareBandwidthTypeAny  共享带宽类型，根据任一共享带宽类型过滤EIP列表。 可以指定多个带宽类型，不同的带宽类型间用逗号分隔。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'marker' => 'marker',
            'limit' => 'limit',
            'ipVersion' => 'ip_version',
            'enterpriseProjectId' => 'enterprise_project_id',
            'portId' => 'port_id',
            'publicIpAddress' => 'public_ip_address',
            'privateIpAddress' => 'private_ip_address',
            'id' => 'id',
            'allowShareBandwidthTypeAny' => 'allow_share_bandwidth_type_any'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * marker  取值为上一页数据的最后一条记录的id，为空时为查询第一页
    * limit  功能说明：每页返回的个数  取值范围：0~intmax
    * ipVersion  IP地址版本信息  4：IPv4  6：IPv6
    * enterpriseProjectId  功能说明：企业项目ID。可以使用该字段过滤某个企业项目下的弹性IP弹性公网IP。  取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。若需要查询当前用户所有企业项目绑定的弹性公网IP，请传参all_granted_eps。
    * portId  绑定弹性公网IP的端口id
    * publicIpAddress  IPv4时是申请到的弹性公网IP地址，IPv6时是IPv6地址对应的IPv4地址
    * privateIpAddress  关联端口的私有IP地址
    * id  弹性公网IP唯一标识
    * allowShareBandwidthTypeAny  共享带宽类型，根据任一共享带宽类型过滤EIP列表。 可以指定多个带宽类型，不同的带宽类型间用逗号分隔。
    *
    * @var string[]
    */
    protected static $setters = [
            'marker' => 'setMarker',
            'limit' => 'setLimit',
            'ipVersion' => 'setIpVersion',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'portId' => 'setPortId',
            'publicIpAddress' => 'setPublicIpAddress',
            'privateIpAddress' => 'setPrivateIpAddress',
            'id' => 'setId',
            'allowShareBandwidthTypeAny' => 'setAllowShareBandwidthTypeAny'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * marker  取值为上一页数据的最后一条记录的id，为空时为查询第一页
    * limit  功能说明：每页返回的个数  取值范围：0~intmax
    * ipVersion  IP地址版本信息  4：IPv4  6：IPv6
    * enterpriseProjectId  功能说明：企业项目ID。可以使用该字段过滤某个企业项目下的弹性IP弹性公网IP。  取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。若需要查询当前用户所有企业项目绑定的弹性公网IP，请传参all_granted_eps。
    * portId  绑定弹性公网IP的端口id
    * publicIpAddress  IPv4时是申请到的弹性公网IP地址，IPv6时是IPv6地址对应的IPv4地址
    * privateIpAddress  关联端口的私有IP地址
    * id  弹性公网IP唯一标识
    * allowShareBandwidthTypeAny  共享带宽类型，根据任一共享带宽类型过滤EIP列表。 可以指定多个带宽类型，不同的带宽类型间用逗号分隔。
    *
    * @var string[]
    */
    protected static $getters = [
            'marker' => 'getMarker',
            'limit' => 'getLimit',
            'ipVersion' => 'getIpVersion',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'portId' => 'getPortId',
            'publicIpAddress' => 'getPublicIpAddress',
            'privateIpAddress' => 'getPrivateIpAddress',
            'id' => 'getId',
            'allowShareBandwidthTypeAny' => 'getAllowShareBandwidthTypeAny'
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
    const IP_VERSION_4 = 4;
    const IP_VERSION_6 = 6;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIpVersionAllowableValues()
    {
        return [
            self::IP_VERSION_4,
            self::IP_VERSION_6,
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
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['publicIpAddress'] = isset($data['publicIpAddress']) ? $data['publicIpAddress'] : null;
        $this->container['privateIpAddress'] = isset($data['privateIpAddress']) ? $data['privateIpAddress'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['allowShareBandwidthTypeAny'] = isset($data['allowShareBandwidthTypeAny']) ? $data['allowShareBandwidthTypeAny'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 36)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getIpVersionAllowableValues();
                if (!is_null($this->container['ipVersion']) && !in_array($this->container['ipVersion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ipVersion', must be one of '%s'",
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
    * Gets marker
    *  取值为上一页数据的最后一条记录的id，为空时为查询第一页
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
    * @param string|null $marker 取值为上一页数据的最后一条记录的id，为空时为查询第一页
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets limit
    *  功能说明：每页返回的个数  取值范围：0~intmax
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
    * @param int|null $limit 功能说明：每页返回的个数  取值范围：0~intmax
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets ipVersion
    *  IP地址版本信息  4：IPv4  6：IPv6
    *
    * @return int|null
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int|null $ipVersion IP地址版本信息  4：IPv4  6：IPv6
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  功能说明：企业项目ID。可以使用该字段过滤某个企业项目下的弹性IP弹性公网IP。  取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。若需要查询当前用户所有企业项目绑定的弹性公网IP，请传参all_granted_eps。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 功能说明：企业项目ID。可以使用该字段过滤某个企业项目下的弹性IP弹性公网IP。  取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。若需要查询当前用户所有企业项目绑定的弹性公网IP，请传参all_granted_eps。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets portId
    *  绑定弹性公网IP的端口id
    *
    * @return string[]|null
    */
    public function getPortId()
    {
        return $this->container['portId'];
    }

    /**
    * Sets portId
    *
    * @param string[]|null $portId 绑定弹性公网IP的端口id
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
        return $this;
    }

    /**
    * Gets publicIpAddress
    *  IPv4时是申请到的弹性公网IP地址，IPv6时是IPv6地址对应的IPv4地址
    *
    * @return string[]|null
    */
    public function getPublicIpAddress()
    {
        return $this->container['publicIpAddress'];
    }

    /**
    * Sets publicIpAddress
    *
    * @param string[]|null $publicIpAddress IPv4时是申请到的弹性公网IP地址，IPv6时是IPv6地址对应的IPv4地址
    *
    * @return $this
    */
    public function setPublicIpAddress($publicIpAddress)
    {
        $this->container['publicIpAddress'] = $publicIpAddress;
        return $this;
    }

    /**
    * Gets privateIpAddress
    *  关联端口的私有IP地址
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
    * @param string[]|null $privateIpAddress 关联端口的私有IP地址
    *
    * @return $this
    */
    public function setPrivateIpAddress($privateIpAddress)
    {
        $this->container['privateIpAddress'] = $privateIpAddress;
        return $this;
    }

    /**
    * Gets id
    *  弹性公网IP唯一标识
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
    * @param string[]|null $id 弹性公网IP唯一标识
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets allowShareBandwidthTypeAny
    *  共享带宽类型，根据任一共享带宽类型过滤EIP列表。 可以指定多个带宽类型，不同的带宽类型间用逗号分隔。
    *
    * @return string[]|null
    */
    public function getAllowShareBandwidthTypeAny()
    {
        return $this->container['allowShareBandwidthTypeAny'];
    }

    /**
    * Sets allowShareBandwidthTypeAny
    *
    * @param string[]|null $allowShareBandwidthTypeAny 共享带宽类型，根据任一共享带宽类型过滤EIP列表。 可以指定多个带宽类型，不同的带宽类型间用逗号分隔。
    *
    * @return $this
    */
    public function setAllowShareBandwidthTypeAny($allowShareBandwidthTypeAny)
    {
        $this->container['allowShareBandwidthTypeAny'] = $allowShareBandwidthTypeAny;
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

