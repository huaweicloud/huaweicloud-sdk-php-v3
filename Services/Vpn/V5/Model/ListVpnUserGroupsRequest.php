<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListVpnUserGroupsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListVpnUserGroupsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vpnServerId  VPN服务端 ID
    * limit  分页查询时每页返回的记录数量
    * marker  上一页最后一条资源记录的创建时间，为空时为查询第一页。使用说明：必须与limit一起使用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vpnServerId' => 'string',
            'limit' => 'int',
            'marker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vpnServerId  VPN服务端 ID
    * limit  分页查询时每页返回的记录数量
    * marker  上一页最后一条资源记录的创建时间，为空时为查询第一页。使用说明：必须与limit一起使用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vpnServerId' => null,
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
    * vpnServerId  VPN服务端 ID
    * limit  分页查询时每页返回的记录数量
    * marker  上一页最后一条资源记录的创建时间，为空时为查询第一页。使用说明：必须与limit一起使用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vpnServerId' => 'vpn_server_id',
            'limit' => 'limit',
            'marker' => 'marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vpnServerId  VPN服务端 ID
    * limit  分页查询时每页返回的记录数量
    * marker  上一页最后一条资源记录的创建时间，为空时为查询第一页。使用说明：必须与limit一起使用。
    *
    * @var string[]
    */
    protected static $setters = [
            'vpnServerId' => 'setVpnServerId',
            'limit' => 'setLimit',
            'marker' => 'setMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vpnServerId  VPN服务端 ID
    * limit  分页查询时每页返回的记录数量
    * marker  上一页最后一条资源记录的创建时间，为空时为查询第一页。使用说明：必须与limit一起使用。
    *
    * @var string[]
    */
    protected static $getters = [
            'vpnServerId' => 'getVpnServerId',
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
        $this->container['vpnServerId'] = isset($data['vpnServerId']) ? $data['vpnServerId'] : null;
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
        if ($this->container['vpnServerId'] === null) {
            $invalidProperties[] = "'vpnServerId' can't be null";
        }
            if (!preg_match("/[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/", $this->container['vpnServerId'])) {
                $invalidProperties[] = "invalid value for 'vpnServerId', must be conform to the pattern /[A-Za-z0-9]{8}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{4}-[A-Za-z0-9]{12}/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
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
    * Gets vpnServerId
    *  VPN服务端 ID
    *
    * @return string
    */
    public function getVpnServerId()
    {
        return $this->container['vpnServerId'];
    }

    /**
    * Sets vpnServerId
    *
    * @param string $vpnServerId VPN服务端 ID
    *
    * @return $this
    */
    public function setVpnServerId($vpnServerId)
    {
        $this->container['vpnServerId'] = $vpnServerId;
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

