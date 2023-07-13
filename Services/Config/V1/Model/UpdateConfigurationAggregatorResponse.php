<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateConfigurationAggregatorResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateConfigurationAggregatorResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * aggregatorName  资源聚合器名称。
    * aggregatorId  资源聚合器ID。
    * aggregatorUrn  资源聚合器标识符。
    * aggregatorType  聚合器类型。
    * accountAggregationSources  accountAggregationSources
    * updatedAt  资源聚合器更新时间。
    * createdAt  资源聚合器创建时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'aggregatorName' => 'string',
            'aggregatorId' => 'string',
            'aggregatorUrn' => 'string',
            'aggregatorType' => 'string',
            'accountAggregationSources' => '\HuaweiCloud\SDK\Config\V1\Model\AccountAggregationSource',
            'updatedAt' => 'string',
            'createdAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * aggregatorName  资源聚合器名称。
    * aggregatorId  资源聚合器ID。
    * aggregatorUrn  资源聚合器标识符。
    * aggregatorType  聚合器类型。
    * accountAggregationSources  accountAggregationSources
    * updatedAt  资源聚合器更新时间。
    * createdAt  资源聚合器创建时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'aggregatorName' => null,
        'aggregatorId' => null,
        'aggregatorUrn' => null,
        'aggregatorType' => null,
        'accountAggregationSources' => null,
        'updatedAt' => null,
        'createdAt' => null
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
    * aggregatorName  资源聚合器名称。
    * aggregatorId  资源聚合器ID。
    * aggregatorUrn  资源聚合器标识符。
    * aggregatorType  聚合器类型。
    * accountAggregationSources  accountAggregationSources
    * updatedAt  资源聚合器更新时间。
    * createdAt  资源聚合器创建时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'aggregatorName' => 'aggregator_name',
            'aggregatorId' => 'aggregator_id',
            'aggregatorUrn' => 'aggregator_urn',
            'aggregatorType' => 'aggregator_type',
            'accountAggregationSources' => 'account_aggregation_sources',
            'updatedAt' => 'updated_at',
            'createdAt' => 'created_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * aggregatorName  资源聚合器名称。
    * aggregatorId  资源聚合器ID。
    * aggregatorUrn  资源聚合器标识符。
    * aggregatorType  聚合器类型。
    * accountAggregationSources  accountAggregationSources
    * updatedAt  资源聚合器更新时间。
    * createdAt  资源聚合器创建时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'aggregatorName' => 'setAggregatorName',
            'aggregatorId' => 'setAggregatorId',
            'aggregatorUrn' => 'setAggregatorUrn',
            'aggregatorType' => 'setAggregatorType',
            'accountAggregationSources' => 'setAccountAggregationSources',
            'updatedAt' => 'setUpdatedAt',
            'createdAt' => 'setCreatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * aggregatorName  资源聚合器名称。
    * aggregatorId  资源聚合器ID。
    * aggregatorUrn  资源聚合器标识符。
    * aggregatorType  聚合器类型。
    * accountAggregationSources  accountAggregationSources
    * updatedAt  资源聚合器更新时间。
    * createdAt  资源聚合器创建时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'aggregatorName' => 'getAggregatorName',
            'aggregatorId' => 'getAggregatorId',
            'aggregatorUrn' => 'getAggregatorUrn',
            'aggregatorType' => 'getAggregatorType',
            'accountAggregationSources' => 'getAccountAggregationSources',
            'updatedAt' => 'getUpdatedAt',
            'createdAt' => 'getCreatedAt'
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
        $this->container['aggregatorName'] = isset($data['aggregatorName']) ? $data['aggregatorName'] : null;
        $this->container['aggregatorId'] = isset($data['aggregatorId']) ? $data['aggregatorId'] : null;
        $this->container['aggregatorUrn'] = isset($data['aggregatorUrn']) ? $data['aggregatorUrn'] : null;
        $this->container['aggregatorType'] = isset($data['aggregatorType']) ? $data['aggregatorType'] : null;
        $this->container['accountAggregationSources'] = isset($data['accountAggregationSources']) ? $data['accountAggregationSources'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
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
    * Gets aggregatorName
    *  资源聚合器名称。
    *
    * @return string|null
    */
    public function getAggregatorName()
    {
        return $this->container['aggregatorName'];
    }

    /**
    * Sets aggregatorName
    *
    * @param string|null $aggregatorName 资源聚合器名称。
    *
    * @return $this
    */
    public function setAggregatorName($aggregatorName)
    {
        $this->container['aggregatorName'] = $aggregatorName;
        return $this;
    }

    /**
    * Gets aggregatorId
    *  资源聚合器ID。
    *
    * @return string|null
    */
    public function getAggregatorId()
    {
        return $this->container['aggregatorId'];
    }

    /**
    * Sets aggregatorId
    *
    * @param string|null $aggregatorId 资源聚合器ID。
    *
    * @return $this
    */
    public function setAggregatorId($aggregatorId)
    {
        $this->container['aggregatorId'] = $aggregatorId;
        return $this;
    }

    /**
    * Gets aggregatorUrn
    *  资源聚合器标识符。
    *
    * @return string|null
    */
    public function getAggregatorUrn()
    {
        return $this->container['aggregatorUrn'];
    }

    /**
    * Sets aggregatorUrn
    *
    * @param string|null $aggregatorUrn 资源聚合器标识符。
    *
    * @return $this
    */
    public function setAggregatorUrn($aggregatorUrn)
    {
        $this->container['aggregatorUrn'] = $aggregatorUrn;
        return $this;
    }

    /**
    * Gets aggregatorType
    *  聚合器类型。
    *
    * @return string|null
    */
    public function getAggregatorType()
    {
        return $this->container['aggregatorType'];
    }

    /**
    * Sets aggregatorType
    *
    * @param string|null $aggregatorType 聚合器类型。
    *
    * @return $this
    */
    public function setAggregatorType($aggregatorType)
    {
        $this->container['aggregatorType'] = $aggregatorType;
        return $this;
    }

    /**
    * Gets accountAggregationSources
    *  accountAggregationSources
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\AccountAggregationSource|null
    */
    public function getAccountAggregationSources()
    {
        return $this->container['accountAggregationSources'];
    }

    /**
    * Sets accountAggregationSources
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\AccountAggregationSource|null $accountAggregationSources accountAggregationSources
    *
    * @return $this
    */
    public function setAccountAggregationSources($accountAggregationSources)
    {
        $this->container['accountAggregationSources'] = $accountAggregationSources;
        return $this;
    }

    /**
    * Gets updatedAt
    *  资源聚合器更新时间。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 资源聚合器更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets createdAt
    *  资源聚合器创建时间。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 资源聚合器创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
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

