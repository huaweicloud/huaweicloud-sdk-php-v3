<?php

namespace HuaweiCloud\SDK\Eip\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronListFloatingIpsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronListFloatingIpsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  每页显示的条目数量。
    * marker  取值为上一页数据的最后一条记录的id，当marker参数为无效id时，response将响应错误码400
    * pageReverse  False/True，是否设置分页的顺序。
    * id  浮动IP的id。
    * floatingIpAddress  浮动IP地址。
    * routerId  所属路由器id。
    * portId  端口id。
    * fixedIpAddress  关联端口的私有IP地址。
    * tenantId  项目ID。
    * floatingNetworkId  外部网络的id。只能使用固定的外网，外部网络的信息请通过GET /v2.0/networks?router:external=True或GET /v2.0/networks?name={floating_network}或neutron net-external-list方式查询
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'pageReverse' => 'bool',
            'id' => 'string',
            'floatingIpAddress' => 'string',
            'routerId' => 'string',
            'portId' => 'string',
            'fixedIpAddress' => 'string',
            'tenantId' => 'string',
            'floatingNetworkId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  每页显示的条目数量。
    * marker  取值为上一页数据的最后一条记录的id，当marker参数为无效id时，response将响应错误码400
    * pageReverse  False/True，是否设置分页的顺序。
    * id  浮动IP的id。
    * floatingIpAddress  浮动IP地址。
    * routerId  所属路由器id。
    * portId  端口id。
    * fixedIpAddress  关联端口的私有IP地址。
    * tenantId  项目ID。
    * floatingNetworkId  外部网络的id。只能使用固定的外网，外部网络的信息请通过GET /v2.0/networks?router:external=True或GET /v2.0/networks?name={floating_network}或neutron net-external-list方式查询
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'pageReverse' => null,
        'id' => null,
        'floatingIpAddress' => null,
        'routerId' => null,
        'portId' => null,
        'fixedIpAddress' => null,
        'tenantId' => null,
        'floatingNetworkId' => null
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
    * limit  每页显示的条目数量。
    * marker  取值为上一页数据的最后一条记录的id，当marker参数为无效id时，response将响应错误码400
    * pageReverse  False/True，是否设置分页的顺序。
    * id  浮动IP的id。
    * floatingIpAddress  浮动IP地址。
    * routerId  所属路由器id。
    * portId  端口id。
    * fixedIpAddress  关联端口的私有IP地址。
    * tenantId  项目ID。
    * floatingNetworkId  外部网络的id。只能使用固定的外网，外部网络的信息请通过GET /v2.0/networks?router:external=True或GET /v2.0/networks?name={floating_network}或neutron net-external-list方式查询
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'pageReverse' => 'page_reverse',
            'id' => 'id',
            'floatingIpAddress' => 'floating_ip_address',
            'routerId' => 'router_id',
            'portId' => 'port_id',
            'fixedIpAddress' => 'fixed_ip_address',
            'tenantId' => 'tenant_id',
            'floatingNetworkId' => 'floating_network_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  每页显示的条目数量。
    * marker  取值为上一页数据的最后一条记录的id，当marker参数为无效id时，response将响应错误码400
    * pageReverse  False/True，是否设置分页的顺序。
    * id  浮动IP的id。
    * floatingIpAddress  浮动IP地址。
    * routerId  所属路由器id。
    * portId  端口id。
    * fixedIpAddress  关联端口的私有IP地址。
    * tenantId  项目ID。
    * floatingNetworkId  外部网络的id。只能使用固定的外网，外部网络的信息请通过GET /v2.0/networks?router:external=True或GET /v2.0/networks?name={floating_network}或neutron net-external-list方式查询
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'pageReverse' => 'setPageReverse',
            'id' => 'setId',
            'floatingIpAddress' => 'setFloatingIpAddress',
            'routerId' => 'setRouterId',
            'portId' => 'setPortId',
            'fixedIpAddress' => 'setFixedIpAddress',
            'tenantId' => 'setTenantId',
            'floatingNetworkId' => 'setFloatingNetworkId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  每页显示的条目数量。
    * marker  取值为上一页数据的最后一条记录的id，当marker参数为无效id时，response将响应错误码400
    * pageReverse  False/True，是否设置分页的顺序。
    * id  浮动IP的id。
    * floatingIpAddress  浮动IP地址。
    * routerId  所属路由器id。
    * portId  端口id。
    * fixedIpAddress  关联端口的私有IP地址。
    * tenantId  项目ID。
    * floatingNetworkId  外部网络的id。只能使用固定的外网，外部网络的信息请通过GET /v2.0/networks?router:external=True或GET /v2.0/networks?name={floating_network}或neutron net-external-list方式查询
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'pageReverse' => 'getPageReverse',
            'id' => 'getId',
            'floatingIpAddress' => 'getFloatingIpAddress',
            'routerId' => 'getRouterId',
            'portId' => 'getPortId',
            'fixedIpAddress' => 'getFixedIpAddress',
            'tenantId' => 'getTenantId',
            'floatingNetworkId' => 'getFloatingNetworkId'
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
        $this->container['floatingIpAddress'] = isset($data['floatingIpAddress']) ? $data['floatingIpAddress'] : null;
        $this->container['routerId'] = isset($data['routerId']) ? $data['routerId'] : null;
        $this->container['portId'] = isset($data['portId']) ? $data['portId'] : null;
        $this->container['fixedIpAddress'] = isset($data['fixedIpAddress']) ? $data['fixedIpAddress'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['floatingNetworkId'] = isset($data['floatingNetworkId']) ? $data['floatingNetworkId'] : null;
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
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 36)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 0)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['floatingIpAddress']) && (mb_strlen($this->container['floatingIpAddress']) > 64)) {
                $invalidProperties[] = "invalid value for 'floatingIpAddress', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['floatingIpAddress']) && (mb_strlen($this->container['floatingIpAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'floatingIpAddress', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['routerId']) && (mb_strlen($this->container['routerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'routerId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['routerId']) && (mb_strlen($this->container['routerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'routerId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['portId']) && (mb_strlen($this->container['portId']) > 36)) {
                $invalidProperties[] = "invalid value for 'portId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['portId']) && (mb_strlen($this->container['portId']) < 0)) {
                $invalidProperties[] = "invalid value for 'portId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fixedIpAddress']) && (mb_strlen($this->container['fixedIpAddress']) > 64)) {
                $invalidProperties[] = "invalid value for 'fixedIpAddress', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fixedIpAddress']) && (mb_strlen($this->container['fixedIpAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'fixedIpAddress', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 36)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) < 0)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['floatingNetworkId']) && (mb_strlen($this->container['floatingNetworkId']) > 36)) {
                $invalidProperties[] = "invalid value for 'floatingNetworkId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['floatingNetworkId']) && (mb_strlen($this->container['floatingNetworkId']) < 0)) {
                $invalidProperties[] = "invalid value for 'floatingNetworkId', the character length must be bigger than or equal to 0.";
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
    *  每页显示的条目数量。
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
    * @param int|null $limit 每页显示的条目数量。
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
    *  取值为上一页数据的最后一条记录的id，当marker参数为无效id时，response将响应错误码400
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
    * @param string|null $marker 取值为上一页数据的最后一条记录的id，当marker参数为无效id时，response将响应错误码400
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
    *  False/True，是否设置分页的顺序。
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
    * @param bool|null $pageReverse False/True，是否设置分页的顺序。
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
    *  浮动IP的id。
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
    * @param string|null $id 浮动IP的id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets floatingIpAddress
    *  浮动IP地址。
    *
    * @return string|null
    */
    public function getFloatingIpAddress()
    {
        return $this->container['floatingIpAddress'];
    }

    /**
    * Sets floatingIpAddress
    *
    * @param string|null $floatingIpAddress 浮动IP地址。
    *
    * @return $this
    */
    public function setFloatingIpAddress($floatingIpAddress)
    {
        $this->container['floatingIpAddress'] = $floatingIpAddress;
        return $this;
    }

    /**
    * Gets routerId
    *  所属路由器id。
    *
    * @return string|null
    */
    public function getRouterId()
    {
        return $this->container['routerId'];
    }

    /**
    * Sets routerId
    *
    * @param string|null $routerId 所属路由器id。
    *
    * @return $this
    */
    public function setRouterId($routerId)
    {
        $this->container['routerId'] = $routerId;
        return $this;
    }

    /**
    * Gets portId
    *  端口id。
    *
    * @return string|null
    */
    public function getPortId()
    {
        return $this->container['portId'];
    }

    /**
    * Sets portId
    *
    * @param string|null $portId 端口id。
    *
    * @return $this
    */
    public function setPortId($portId)
    {
        $this->container['portId'] = $portId;
        return $this;
    }

    /**
    * Gets fixedIpAddress
    *  关联端口的私有IP地址。
    *
    * @return string|null
    */
    public function getFixedIpAddress()
    {
        return $this->container['fixedIpAddress'];
    }

    /**
    * Sets fixedIpAddress
    *
    * @param string|null $fixedIpAddress 关联端口的私有IP地址。
    *
    * @return $this
    */
    public function setFixedIpAddress($fixedIpAddress)
    {
        $this->container['fixedIpAddress'] = $fixedIpAddress;
        return $this;
    }

    /**
    * Gets tenantId
    *  项目ID。
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
    * @param string|null $tenantId 项目ID。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets floatingNetworkId
    *  外部网络的id。只能使用固定的外网，外部网络的信息请通过GET /v2.0/networks?router:external=True或GET /v2.0/networks?name={floating_network}或neutron net-external-list方式查询
    *
    * @return string|null
    */
    public function getFloatingNetworkId()
    {
        return $this->container['floatingNetworkId'];
    }

    /**
    * Sets floatingNetworkId
    *
    * @param string|null $floatingNetworkId 外部网络的id。只能使用固定的外网，外部网络的信息请通过GET /v2.0/networks?router:external=True或GET /v2.0/networks?name={floating_network}或neutron net-external-list方式查询
    *
    * @return $this
    */
    public function setFloatingNetworkId($floatingNetworkId)
    {
        $this->container['floatingNetworkId'] = $floatingNetworkId;
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

