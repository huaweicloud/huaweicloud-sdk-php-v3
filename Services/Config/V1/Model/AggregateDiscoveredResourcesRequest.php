<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AggregateDiscoveredResourcesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AggregateDiscoveredResourcesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * aggregatorId  资源聚合器ID。
    * filter  filter
    * provider  云服务类型。
    * resourceType  资源类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'aggregatorId' => 'string',
            'filter' => '\HuaweiCloud\SDK\Config\V1\Model\ResourcesFilters',
            'provider' => 'string',
            'resourceType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * aggregatorId  资源聚合器ID。
    * filter  filter
    * provider  云服务类型。
    * resourceType  资源类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'aggregatorId' => null,
        'filter' => null,
        'provider' => null,
        'resourceType' => null
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
    * aggregatorId  资源聚合器ID。
    * filter  filter
    * provider  云服务类型。
    * resourceType  资源类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'aggregatorId' => 'aggregator_id',
            'filter' => 'filter',
            'provider' => 'provider',
            'resourceType' => 'resource_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * aggregatorId  资源聚合器ID。
    * filter  filter
    * provider  云服务类型。
    * resourceType  资源类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'aggregatorId' => 'setAggregatorId',
            'filter' => 'setFilter',
            'provider' => 'setProvider',
            'resourceType' => 'setResourceType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * aggregatorId  资源聚合器ID。
    * filter  filter
    * provider  云服务类型。
    * resourceType  资源类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'aggregatorId' => 'getAggregatorId',
            'filter' => 'getFilter',
            'provider' => 'getProvider',
            'resourceType' => 'getResourceType'
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
        $this->container['aggregatorId'] = isset($data['aggregatorId']) ? $data['aggregatorId'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['aggregatorId'] === null) {
            $invalidProperties[] = "'aggregatorId' can't be null";
        }
            if ((mb_strlen($this->container['aggregatorId']) > 256)) {
                $invalidProperties[] = "invalid value for 'aggregatorId', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['aggregatorId']) < 1)) {
                $invalidProperties[] = "invalid value for 'aggregatorId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[\\w-]+/", $this->container['aggregatorId'])) {
                $invalidProperties[] = "invalid value for 'aggregatorId', must be conform to the pattern /[\\w-]+/.";
            }
            if (!is_null($this->container['provider']) && (mb_strlen($this->container['provider']) > 20)) {
                $invalidProperties[] = "invalid value for 'provider', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['provider']) && (mb_strlen($this->container['provider']) < 1)) {
                $invalidProperties[] = "invalid value for 'provider', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['provider']) && !preg_match("/[\\w]+/", $this->container['provider'])) {
                $invalidProperties[] = "invalid value for 'provider', must be conform to the pattern /[\\w]+/.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 32)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceType']) && !preg_match("/[\\w-]+/", $this->container['resourceType'])) {
                $invalidProperties[] = "invalid value for 'resourceType', must be conform to the pattern /[\\w-]+/.";
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
    * Gets aggregatorId
    *  资源聚合器ID。
    *
    * @return string
    */
    public function getAggregatorId()
    {
        return $this->container['aggregatorId'];
    }

    /**
    * Sets aggregatorId
    *
    * @param string $aggregatorId 资源聚合器ID。
    *
    * @return $this
    */
    public function setAggregatorId($aggregatorId)
    {
        $this->container['aggregatorId'] = $aggregatorId;
        return $this;
    }

    /**
    * Gets filter
    *  filter
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\ResourcesFilters|null
    */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
    * Sets filter
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\ResourcesFilters|null $filter filter
    *
    * @return $this
    */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;
        return $this;
    }

    /**
    * Gets provider
    *  云服务类型。
    *
    * @return string|null
    */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
    * Sets provider
    *
    * @param string|null $provider 云服务类型。
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型。
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 资源类型。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
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

