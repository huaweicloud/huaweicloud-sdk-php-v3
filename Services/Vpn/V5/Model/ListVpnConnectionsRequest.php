<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListVpnConnectionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListVpnConnectionsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vpnId  VPN ID
    * eipId  Eip ID
    * vgwIp  VGW IP
    * vgwId  vgw ID
    * enterpriseProjectId  企业项目id
    * limit  分页查询时每页返回的记录数量
    * marker  上一页最后一条资源记录的创建时间，为空时为查询第一页。使用说明：必须与limit一起使用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vpnId' => 'string',
            'eipId' => 'string',
            'vgwIp' => 'string',
            'vgwId' => 'string',
            'enterpriseProjectId' => 'string[]',
            'limit' => 'int',
            'marker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vpnId  VPN ID
    * eipId  Eip ID
    * vgwIp  VGW IP
    * vgwId  vgw ID
    * enterpriseProjectId  企业项目id
    * limit  分页查询时每页返回的记录数量
    * marker  上一页最后一条资源记录的创建时间，为空时为查询第一页。使用说明：必须与limit一起使用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vpnId' => null,
        'eipId' => null,
        'vgwIp' => null,
        'vgwId' => null,
        'enterpriseProjectId' => null,
        'limit' => 'int32',
        'marker' => null
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
    * vpnId  VPN ID
    * eipId  Eip ID
    * vgwIp  VGW IP
    * vgwId  vgw ID
    * enterpriseProjectId  企业项目id
    * limit  分页查询时每页返回的记录数量
    * marker  上一页最后一条资源记录的创建时间，为空时为查询第一页。使用说明：必须与limit一起使用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vpnId' => 'vpn_id',
            'eipId' => 'eip_id',
            'vgwIp' => 'vgw_ip',
            'vgwId' => 'vgw_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'limit' => 'limit',
            'marker' => 'marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vpnId  VPN ID
    * eipId  Eip ID
    * vgwIp  VGW IP
    * vgwId  vgw ID
    * enterpriseProjectId  企业项目id
    * limit  分页查询时每页返回的记录数量
    * marker  上一页最后一条资源记录的创建时间，为空时为查询第一页。使用说明：必须与limit一起使用。
    *
    * @var string[]
    */
    protected static $setters = [
            'vpnId' => 'setVpnId',
            'eipId' => 'setEipId',
            'vgwIp' => 'setVgwIp',
            'vgwId' => 'setVgwId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'limit' => 'setLimit',
            'marker' => 'setMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vpnId  VPN ID
    * eipId  Eip ID
    * vgwIp  VGW IP
    * vgwId  vgw ID
    * enterpriseProjectId  企业项目id
    * limit  分页查询时每页返回的记录数量
    * marker  上一页最后一条资源记录的创建时间，为空时为查询第一页。使用说明：必须与limit一起使用。
    *
    * @var string[]
    */
    protected static $getters = [
            'vpnId' => 'getVpnId',
            'eipId' => 'getEipId',
            'vgwIp' => 'getVgwIp',
            'vgwId' => 'getVgwId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'limit' => 'getLimit',
            'marker' => 'getMarker'
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
        $this->container['vpnId'] = isset($data['vpnId']) ? $data['vpnId'] : null;
        $this->container['eipId'] = isset($data['eipId']) ? $data['eipId'] : null;
        $this->container['vgwIp'] = isset($data['vgwIp']) ? $data['vgwIp'] : null;
        $this->container['vgwId'] = isset($data['vgwId']) ? $data['vgwId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
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
    * Gets vpnId
    *  VPN ID
    *
    * @return string|null
    */
    public function getVpnId()
    {
        return $this->container['vpnId'];
    }

    /**
    * Sets vpnId
    *
    * @param string|null $vpnId VPN ID
    *
    * @return $this
    */
    public function setVpnId($vpnId)
    {
        $this->container['vpnId'] = $vpnId;
        return $this;
    }

    /**
    * Gets eipId
    *  Eip ID
    *
    * @return string|null
    */
    public function getEipId()
    {
        return $this->container['eipId'];
    }

    /**
    * Sets eipId
    *
    * @param string|null $eipId Eip ID
    *
    * @return $this
    */
    public function setEipId($eipId)
    {
        $this->container['eipId'] = $eipId;
        return $this;
    }

    /**
    * Gets vgwIp
    *  VGW IP
    *
    * @return string|null
    */
    public function getVgwIp()
    {
        return $this->container['vgwIp'];
    }

    /**
    * Sets vgwIp
    *
    * @param string|null $vgwIp VGW IP
    *
    * @return $this
    */
    public function setVgwIp($vgwIp)
    {
        $this->container['vgwIp'] = $vgwIp;
        return $this;
    }

    /**
    * Gets vgwId
    *  vgw ID
    *
    * @return string|null
    */
    public function getVgwId()
    {
        return $this->container['vgwId'];
    }

    /**
    * Sets vgwId
    *
    * @param string|null $vgwId vgw ID
    *
    * @return $this
    */
    public function setVgwId($vgwId)
    {
        $this->container['vgwId'] = $vgwId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id
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
    * @param string[]|null $enterpriseProjectId 企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets limit
    *  分页查询时每页返回的记录数量
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
    * @param int|null $limit 分页查询时每页返回的记录数量
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
    *  上一页最后一条资源记录的创建时间，为空时为查询第一页。使用说明：必须与limit一起使用。
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
    * @param string|null $marker 上一页最后一条资源记录的创建时间，为空时为查询第一页。使用说明：必须与limit一起使用。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
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

