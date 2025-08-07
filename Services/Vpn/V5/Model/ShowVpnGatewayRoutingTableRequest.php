<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVpnGatewayRoutingTableRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVpnGatewayRoutingTableRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vgwId  VPN网关实例ID
    * limit  分页查询时每页返回的记录数量
    * marker  上一页最后一条资源记录的创建时间，为空时为查询第一页。使用说明：必须与limit一起使用。
    * offset  分页查询的偏移量
    * isIncludeNexthopResource  是否包含下一跳资源信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vgwId' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'offset' => 'int',
            'isIncludeNexthopResource' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vgwId  VPN网关实例ID
    * limit  分页查询时每页返回的记录数量
    * marker  上一页最后一条资源记录的创建时间，为空时为查询第一页。使用说明：必须与limit一起使用。
    * offset  分页查询的偏移量
    * isIncludeNexthopResource  是否包含下一跳资源信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vgwId' => null,
        'limit' => 'int32',
        'marker' => null,
        'offset' => 'int32',
        'isIncludeNexthopResource' => null
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
    * vgwId  VPN网关实例ID
    * limit  分页查询时每页返回的记录数量
    * marker  上一页最后一条资源记录的创建时间，为空时为查询第一页。使用说明：必须与limit一起使用。
    * offset  分页查询的偏移量
    * isIncludeNexthopResource  是否包含下一跳资源信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vgwId' => 'vgw_id',
            'limit' => 'limit',
            'marker' => 'marker',
            'offset' => 'offset',
            'isIncludeNexthopResource' => 'is_include_nexthop_resource'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vgwId  VPN网关实例ID
    * limit  分页查询时每页返回的记录数量
    * marker  上一页最后一条资源记录的创建时间，为空时为查询第一页。使用说明：必须与limit一起使用。
    * offset  分页查询的偏移量
    * isIncludeNexthopResource  是否包含下一跳资源信息
    *
    * @var string[]
    */
    protected static $setters = [
            'vgwId' => 'setVgwId',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'offset' => 'setOffset',
            'isIncludeNexthopResource' => 'setIsIncludeNexthopResource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vgwId  VPN网关实例ID
    * limit  分页查询时每页返回的记录数量
    * marker  上一页最后一条资源记录的创建时间，为空时为查询第一页。使用说明：必须与limit一起使用。
    * offset  分页查询的偏移量
    * isIncludeNexthopResource  是否包含下一跳资源信息
    *
    * @var string[]
    */
    protected static $getters = [
            'vgwId' => 'getVgwId',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'offset' => 'getOffset',
            'isIncludeNexthopResource' => 'getIsIncludeNexthopResource'
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
        $this->container['vgwId'] = isset($data['vgwId']) ? $data['vgwId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['isIncludeNexthopResource'] = isset($data['isIncludeNexthopResource']) ? $data['isIncludeNexthopResource'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['vgwId'] === null) {
            $invalidProperties[] = "'vgwId' can't be null";
        }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 20000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 20000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 3000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 3000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets vgwId
    *  VPN网关实例ID
    *
    * @return string
    */
    public function getVgwId()
    {
        return $this->container['vgwId'];
    }

    /**
    * Sets vgwId
    *
    * @param string $vgwId VPN网关实例ID
    *
    * @return $this
    */
    public function setVgwId($vgwId)
    {
        $this->container['vgwId'] = $vgwId;
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
    * Gets offset
    *  分页查询的偏移量
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 分页查询的偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets isIncludeNexthopResource
    *  是否包含下一跳资源信息
    *
    * @return bool|null
    */
    public function getIsIncludeNexthopResource()
    {
        return $this->container['isIncludeNexthopResource'];
    }

    /**
    * Sets isIncludeNexthopResource
    *
    * @param bool|null $isIncludeNexthopResource 是否包含下一跳资源信息
    *
    * @return $this
    */
    public function setIsIncludeNexthopResource($isIncludeNexthopResource)
    {
        $this->container['isIncludeNexthopResource'] = $isIncludeNexthopResource;
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

