<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEventSourcesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEventSourcesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * channelId  指定查询的事件通道ID
    * offset  偏移量，表示从此偏移量开始查询，偏移量不能小于0
    * limit  每页显示的条目数量，不能小于1或大于1000
    * sort  指定查询排序
    * providerType  指定查询提供方的类型
    * name  指定查询的事件源名称，精准匹配
    * fuzzyName  指定查询的事件源名称，模糊匹配
    * fuzzyLabel  指定查询的事件源标签，模糊匹配
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'channelId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'sort' => 'string',
            'providerType' => 'string',
            'name' => 'string',
            'fuzzyName' => 'string',
            'fuzzyLabel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * channelId  指定查询的事件通道ID
    * offset  偏移量，表示从此偏移量开始查询，偏移量不能小于0
    * limit  每页显示的条目数量，不能小于1或大于1000
    * sort  指定查询排序
    * providerType  指定查询提供方的类型
    * name  指定查询的事件源名称，精准匹配
    * fuzzyName  指定查询的事件源名称，模糊匹配
    * fuzzyLabel  指定查询的事件源标签，模糊匹配
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'channelId' => null,
        'offset' => null,
        'limit' => null,
        'sort' => null,
        'providerType' => null,
        'name' => null,
        'fuzzyName' => null,
        'fuzzyLabel' => null
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
    * channelId  指定查询的事件通道ID
    * offset  偏移量，表示从此偏移量开始查询，偏移量不能小于0
    * limit  每页显示的条目数量，不能小于1或大于1000
    * sort  指定查询排序
    * providerType  指定查询提供方的类型
    * name  指定查询的事件源名称，精准匹配
    * fuzzyName  指定查询的事件源名称，模糊匹配
    * fuzzyLabel  指定查询的事件源标签，模糊匹配
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'channelId' => 'channel_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'sort' => 'sort',
            'providerType' => 'provider_type',
            'name' => 'name',
            'fuzzyName' => 'fuzzy_name',
            'fuzzyLabel' => 'fuzzy_label'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * channelId  指定查询的事件通道ID
    * offset  偏移量，表示从此偏移量开始查询，偏移量不能小于0
    * limit  每页显示的条目数量，不能小于1或大于1000
    * sort  指定查询排序
    * providerType  指定查询提供方的类型
    * name  指定查询的事件源名称，精准匹配
    * fuzzyName  指定查询的事件源名称，模糊匹配
    * fuzzyLabel  指定查询的事件源标签，模糊匹配
    *
    * @var string[]
    */
    protected static $setters = [
            'channelId' => 'setChannelId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sort' => 'setSort',
            'providerType' => 'setProviderType',
            'name' => 'setName',
            'fuzzyName' => 'setFuzzyName',
            'fuzzyLabel' => 'setFuzzyLabel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * channelId  指定查询的事件通道ID
    * offset  偏移量，表示从此偏移量开始查询，偏移量不能小于0
    * limit  每页显示的条目数量，不能小于1或大于1000
    * sort  指定查询排序
    * providerType  指定查询提供方的类型
    * name  指定查询的事件源名称，精准匹配
    * fuzzyName  指定查询的事件源名称，模糊匹配
    * fuzzyLabel  指定查询的事件源标签，模糊匹配
    *
    * @var string[]
    */
    protected static $getters = [
            'channelId' => 'getChannelId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sort' => 'getSort',
            'providerType' => 'getProviderType',
            'name' => 'getName',
            'fuzzyName' => 'getFuzzyName',
            'fuzzyLabel' => 'getFuzzyLabel'
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
    const PROVIDER_TYPE_OFFICIAL = 'OFFICIAL';
    const PROVIDER_TYPE_CUSTOM = 'CUSTOM';
    const PROVIDER_TYPE_PARTNER = 'PARTNER';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProviderTypeAllowableValues()
    {
        return [
            self::PROVIDER_TYPE_OFFICIAL,
            self::PROVIDER_TYPE_CUSTOM,
            self::PROVIDER_TYPE_PARTNER,
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
        $this->container['channelId'] = isset($data['channelId']) ? $data['channelId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['providerType'] = isset($data['providerType']) ? $data['providerType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['fuzzyName'] = isset($data['fuzzyName']) ? $data['fuzzyName'] : null;
        $this->container['fuzzyLabel'] = isset($data['fuzzyLabel']) ? $data['fuzzyLabel'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 100)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getProviderTypeAllowableValues();
                if (!is_null($this->container['providerType']) && !in_array($this->container['providerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'providerType', must be one of '%s'",
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
    * Gets channelId
    *  指定查询的事件通道ID
    *
    * @return string|null
    */
    public function getChannelId()
    {
        return $this->container['channelId'];
    }

    /**
    * Sets channelId
    *
    * @param string|null $channelId 指定查询的事件通道ID
    *
    * @return $this
    */
    public function setChannelId($channelId)
    {
        $this->container['channelId'] = $channelId;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，表示从此偏移量开始查询，偏移量不能小于0
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
    * @param int|null $offset 偏移量，表示从此偏移量开始查询，偏移量不能小于0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示的条目数量，不能小于1或大于1000
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
    * @param int|null $limit 每页显示的条目数量，不能小于1或大于1000
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sort
    *  指定查询排序
    *
    * @return string|null
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param string|null $sort 指定查询排序
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets providerType
    *  指定查询提供方的类型
    *
    * @return string|null
    */
    public function getProviderType()
    {
        return $this->container['providerType'];
    }

    /**
    * Sets providerType
    *
    * @param string|null $providerType 指定查询提供方的类型
    *
    * @return $this
    */
    public function setProviderType($providerType)
    {
        $this->container['providerType'] = $providerType;
        return $this;
    }

    /**
    * Gets name
    *  指定查询的事件源名称，精准匹配
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 指定查询的事件源名称，精准匹配
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets fuzzyName
    *  指定查询的事件源名称，模糊匹配
    *
    * @return string|null
    */
    public function getFuzzyName()
    {
        return $this->container['fuzzyName'];
    }

    /**
    * Sets fuzzyName
    *
    * @param string|null $fuzzyName 指定查询的事件源名称，模糊匹配
    *
    * @return $this
    */
    public function setFuzzyName($fuzzyName)
    {
        $this->container['fuzzyName'] = $fuzzyName;
        return $this;
    }

    /**
    * Gets fuzzyLabel
    *  指定查询的事件源标签，模糊匹配
    *
    * @return string|null
    */
    public function getFuzzyLabel()
    {
        return $this->container['fuzzyLabel'];
    }

    /**
    * Sets fuzzyLabel
    *
    * @param string|null $fuzzyLabel 指定查询的事件源标签，模糊匹配
    *
    * @return $this
    */
    public function setFuzzyLabel($fuzzyLabel)
    {
        $this->container['fuzzyLabel'] = $fuzzyLabel;
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

