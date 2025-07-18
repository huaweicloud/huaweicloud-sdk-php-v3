<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigurationAggregatorRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigurationAggregatorRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * aggregatorName  资源聚合器名称。
    * aggregatorType  聚合器类型（ACCOUNT | ORGANIZATION）。
    * accountAggregationSources  accountAggregationSources
    * tags  标签列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'aggregatorName' => 'string',
            'aggregatorType' => 'string',
            'accountAggregationSources' => '\HuaweiCloud\SDK\Config\V1\Model\AccountAggregationSource',
            'tags' => '\HuaweiCloud\SDK\Config\V1\Model\ResourceTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * aggregatorName  资源聚合器名称。
    * aggregatorType  聚合器类型（ACCOUNT | ORGANIZATION）。
    * accountAggregationSources  accountAggregationSources
    * tags  标签列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'aggregatorName' => null,
        'aggregatorType' => null,
        'accountAggregationSources' => null,
        'tags' => null
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
    * aggregatorType  聚合器类型（ACCOUNT | ORGANIZATION）。
    * accountAggregationSources  accountAggregationSources
    * tags  标签列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'aggregatorName' => 'aggregator_name',
            'aggregatorType' => 'aggregator_type',
            'accountAggregationSources' => 'account_aggregation_sources',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * aggregatorName  资源聚合器名称。
    * aggregatorType  聚合器类型（ACCOUNT | ORGANIZATION）。
    * accountAggregationSources  accountAggregationSources
    * tags  标签列表
    *
    * @var string[]
    */
    protected static $setters = [
            'aggregatorName' => 'setAggregatorName',
            'aggregatorType' => 'setAggregatorType',
            'accountAggregationSources' => 'setAccountAggregationSources',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * aggregatorName  资源聚合器名称。
    * aggregatorType  聚合器类型（ACCOUNT | ORGANIZATION）。
    * accountAggregationSources  accountAggregationSources
    * tags  标签列表
    *
    * @var string[]
    */
    protected static $getters = [
            'aggregatorName' => 'getAggregatorName',
            'aggregatorType' => 'getAggregatorType',
            'accountAggregationSources' => 'getAccountAggregationSources',
            'tags' => 'getTags'
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
        $this->container['aggregatorType'] = isset($data['aggregatorType']) ? $data['aggregatorType'] : null;
        $this->container['accountAggregationSources'] = isset($data['accountAggregationSources']) ? $data['accountAggregationSources'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['aggregatorName'] === null) {
            $invalidProperties[] = "'aggregatorName' can't be null";
        }
            if ((mb_strlen($this->container['aggregatorName']) > 256)) {
                $invalidProperties[] = "invalid value for 'aggregatorName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['aggregatorName']) < 1)) {
                $invalidProperties[] = "invalid value for 'aggregatorName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_\\-]+/", $this->container['aggregatorName'])) {
                $invalidProperties[] = "invalid value for 'aggregatorName', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_\\-]+/.";
            }
        if ($this->container['aggregatorType'] === null) {
            $invalidProperties[] = "'aggregatorType' can't be null";
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
    * Gets aggregatorName
    *  资源聚合器名称。
    *
    * @return string
    */
    public function getAggregatorName()
    {
        return $this->container['aggregatorName'];
    }

    /**
    * Sets aggregatorName
    *
    * @param string $aggregatorName 资源聚合器名称。
    *
    * @return $this
    */
    public function setAggregatorName($aggregatorName)
    {
        $this->container['aggregatorName'] = $aggregatorName;
        return $this;
    }

    /**
    * Gets aggregatorType
    *  聚合器类型（ACCOUNT | ORGANIZATION）。
    *
    * @return string
    */
    public function getAggregatorType()
    {
        return $this->container['aggregatorType'];
    }

    /**
    * Sets aggregatorType
    *
    * @param string $aggregatorType 聚合器类型（ACCOUNT | ORGANIZATION）。
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
    * Gets tags
    *  标签列表
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\ResourceTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\ResourceTag[]|null $tags 标签列表
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

