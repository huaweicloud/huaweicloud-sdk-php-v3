<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListShipperAuthorizationsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListShipperAuthorizationsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspaceId  工作空间ID
    * sourceRegion  数据源
    * destinationShipperType  目的投递类型
    * shipperStatus  数据投递状态
    * authStatus  授权状态
    * limit  每页数量
    * offset  第几页
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspaceId' => 'string',
            'sourceRegion' => 'string',
            'destinationShipperType' => 'string',
            'shipperStatus' => 'string',
            'authStatus' => 'string',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspaceId  工作空间ID
    * sourceRegion  数据源
    * destinationShipperType  目的投递类型
    * shipperStatus  数据投递状态
    * authStatus  授权状态
    * limit  每页数量
    * offset  第几页
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspaceId' => null,
        'sourceRegion' => null,
        'destinationShipperType' => null,
        'shipperStatus' => null,
        'authStatus' => null,
        'limit' => 'int64',
        'offset' => 'int64'
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
    * workspaceId  工作空间ID
    * sourceRegion  数据源
    * destinationShipperType  目的投递类型
    * shipperStatus  数据投递状态
    * authStatus  授权状态
    * limit  每页数量
    * offset  第几页
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspaceId' => 'workspace_id',
            'sourceRegion' => 'source_region',
            'destinationShipperType' => 'destination_shipper_type',
            'shipperStatus' => 'shipper_status',
            'authStatus' => 'auth_status',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspaceId  工作空间ID
    * sourceRegion  数据源
    * destinationShipperType  目的投递类型
    * shipperStatus  数据投递状态
    * authStatus  授权状态
    * limit  每页数量
    * offset  第几页
    *
    * @var string[]
    */
    protected static $setters = [
            'workspaceId' => 'setWorkspaceId',
            'sourceRegion' => 'setSourceRegion',
            'destinationShipperType' => 'setDestinationShipperType',
            'shipperStatus' => 'setShipperStatus',
            'authStatus' => 'setAuthStatus',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspaceId  工作空间ID
    * sourceRegion  数据源
    * destinationShipperType  目的投递类型
    * shipperStatus  数据投递状态
    * authStatus  授权状态
    * limit  每页数量
    * offset  第几页
    *
    * @var string[]
    */
    protected static $getters = [
            'workspaceId' => 'getWorkspaceId',
            'sourceRegion' => 'getSourceRegion',
            'destinationShipperType' => 'getDestinationShipperType',
            'shipperStatus' => 'getShipperStatus',
            'authStatus' => 'getAuthStatus',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['sourceRegion'] = isset($data['sourceRegion']) ? $data['sourceRegion'] : null;
        $this->container['destinationShipperType'] = isset($data['destinationShipperType']) ? $data['destinationShipperType'] : null;
        $this->container['shipperStatus'] = isset($data['shipperStatus']) ? $data['shipperStatus'] : null;
        $this->container['authStatus'] = isset($data['authStatus']) ? $data['authStatus'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
            if ((mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['workspaceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceRegion']) && (mb_strlen($this->container['sourceRegion']) > 2097152)) {
                $invalidProperties[] = "invalid value for 'sourceRegion', the character length must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['sourceRegion']) && (mb_strlen($this->container['sourceRegion']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceRegion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['authStatus']) && (mb_strlen($this->container['authStatus']) > 2097152)) {
                $invalidProperties[] = "invalid value for 'authStatus', the character length must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['authStatus']) && (mb_strlen($this->container['authStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'authStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 1000000.";
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
    * Gets workspaceId
    *  工作空间ID
    *
    * @return string
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string $workspaceId 工作空间ID
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets sourceRegion
    *  数据源
    *
    * @return string|null
    */
    public function getSourceRegion()
    {
        return $this->container['sourceRegion'];
    }

    /**
    * Sets sourceRegion
    *
    * @param string|null $sourceRegion 数据源
    *
    * @return $this
    */
    public function setSourceRegion($sourceRegion)
    {
        $this->container['sourceRegion'] = $sourceRegion;
        return $this;
    }

    /**
    * Gets destinationShipperType
    *  目的投递类型
    *
    * @return string|null
    */
    public function getDestinationShipperType()
    {
        return $this->container['destinationShipperType'];
    }

    /**
    * Sets destinationShipperType
    *
    * @param string|null $destinationShipperType 目的投递类型
    *
    * @return $this
    */
    public function setDestinationShipperType($destinationShipperType)
    {
        $this->container['destinationShipperType'] = $destinationShipperType;
        return $this;
    }

    /**
    * Gets shipperStatus
    *  数据投递状态
    *
    * @return string|null
    */
    public function getShipperStatus()
    {
        return $this->container['shipperStatus'];
    }

    /**
    * Sets shipperStatus
    *
    * @param string|null $shipperStatus 数据投递状态
    *
    * @return $this
    */
    public function setShipperStatus($shipperStatus)
    {
        $this->container['shipperStatus'] = $shipperStatus;
        return $this;
    }

    /**
    * Gets authStatus
    *  授权状态
    *
    * @return string|null
    */
    public function getAuthStatus()
    {
        return $this->container['authStatus'];
    }

    /**
    * Sets authStatus
    *
    * @param string|null $authStatus 授权状态
    *
    * @return $this
    */
    public function setAuthStatus($authStatus)
    {
        $this->container['authStatus'] = $authStatus;
        return $this;
    }

    /**
    * Gets limit
    *  每页数量
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
    * @param int|null $limit 每页数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  第几页
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
    * @param int|null $offset 第几页
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

