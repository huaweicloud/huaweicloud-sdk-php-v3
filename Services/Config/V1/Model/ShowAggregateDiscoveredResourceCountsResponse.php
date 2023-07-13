<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAggregateDiscoveredResourceCountsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAggregateDiscoveredResourceCountsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupByKey  资源计数进行分组的键。
    * groupedResourceCounts  分组资源计数的列表。
    * totalDiscoveredResources  指定过滤器的资源聚合器中存在的资源总数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupByKey' => 'string',
            'groupedResourceCounts' => '\HuaweiCloud\SDK\Config\V1\Model\GroupedResourceCount[]',
            'totalDiscoveredResources' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupByKey  资源计数进行分组的键。
    * groupedResourceCounts  分组资源计数的列表。
    * totalDiscoveredResources  指定过滤器的资源聚合器中存在的资源总数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupByKey' => null,
        'groupedResourceCounts' => null,
        'totalDiscoveredResources' => null
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
    * groupByKey  资源计数进行分组的键。
    * groupedResourceCounts  分组资源计数的列表。
    * totalDiscoveredResources  指定过滤器的资源聚合器中存在的资源总数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupByKey' => 'group_by_key',
            'groupedResourceCounts' => 'grouped_resource_counts',
            'totalDiscoveredResources' => 'total_discovered_resources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupByKey  资源计数进行分组的键。
    * groupedResourceCounts  分组资源计数的列表。
    * totalDiscoveredResources  指定过滤器的资源聚合器中存在的资源总数。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupByKey' => 'setGroupByKey',
            'groupedResourceCounts' => 'setGroupedResourceCounts',
            'totalDiscoveredResources' => 'setTotalDiscoveredResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupByKey  资源计数进行分组的键。
    * groupedResourceCounts  分组资源计数的列表。
    * totalDiscoveredResources  指定过滤器的资源聚合器中存在的资源总数。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupByKey' => 'getGroupByKey',
            'groupedResourceCounts' => 'getGroupedResourceCounts',
            'totalDiscoveredResources' => 'getTotalDiscoveredResources'
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
        $this->container['groupByKey'] = isset($data['groupByKey']) ? $data['groupByKey'] : null;
        $this->container['groupedResourceCounts'] = isset($data['groupedResourceCounts']) ? $data['groupedResourceCounts'] : null;
        $this->container['totalDiscoveredResources'] = isset($data['totalDiscoveredResources']) ? $data['totalDiscoveredResources'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets groupByKey
    *  资源计数进行分组的键。
    *
    * @return string|null
    */
    public function getGroupByKey()
    {
        return $this->container['groupByKey'];
    }

    /**
    * Sets groupByKey
    *
    * @param string|null $groupByKey 资源计数进行分组的键。
    *
    * @return $this
    */
    public function setGroupByKey($groupByKey)
    {
        $this->container['groupByKey'] = $groupByKey;
        return $this;
    }

    /**
    * Gets groupedResourceCounts
    *  分组资源计数的列表。
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\GroupedResourceCount[]|null
    */
    public function getGroupedResourceCounts()
    {
        return $this->container['groupedResourceCounts'];
    }

    /**
    * Sets groupedResourceCounts
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\GroupedResourceCount[]|null $groupedResourceCounts 分组资源计数的列表。
    *
    * @return $this
    */
    public function setGroupedResourceCounts($groupedResourceCounts)
    {
        $this->container['groupedResourceCounts'] = $groupedResourceCounts;
        return $this;
    }

    /**
    * Gets totalDiscoveredResources
    *  指定过滤器的资源聚合器中存在的资源总数。
    *
    * @return int|null
    */
    public function getTotalDiscoveredResources()
    {
        return $this->container['totalDiscoveredResources'];
    }

    /**
    * Sets totalDiscoveredResources
    *
    * @param int|null $totalDiscoveredResources 指定过滤器的资源聚合器中存在的资源总数。
    *
    * @return $this
    */
    public function setTotalDiscoveredResources($totalDiscoveredResources)
    {
        $this->container['totalDiscoveredResources'] = $totalDiscoveredResources;
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

