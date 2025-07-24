<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSharesByTagRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSharesByTagRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  通过标签查询文件系统列表的操作类型。仅支持取值为\"filter\" 或 \"count\"。
    * limit  设置返回的文件系统个数的最大值。
    * offset  设置返回的文件系统的偏移量
    * withoutAnyTag  不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”字段。该字段为false或者未提供该参数时，该条件不生效，即返回所有资源或按\"tags\"，\"matches\"等条件过滤。
    * tags  包含标签，最多包含20个key，每个key下面的value最多20个，每个key对应的value可以为空数组但结构体不能缺失。key不能重复，同一个key中values不能重复。结果返回包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。无tag过滤条件时返回全量数据。
    * matches  搜索字段,key为要匹配的字段，仅支持取值“resource_name”。value为匹配的值，当value以“\\*”结尾时，为前缀搜索。例如：value值为“sfsturbo\\*”时，返回名称为“sfsturbo”开头的所有资源列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'limit' => 'string',
            'offset' => 'string',
            'withoutAnyTag' => 'bool',
            'tags' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\Tag[]',
            'matches' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\ResourceTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  通过标签查询文件系统列表的操作类型。仅支持取值为\"filter\" 或 \"count\"。
    * limit  设置返回的文件系统个数的最大值。
    * offset  设置返回的文件系统的偏移量
    * withoutAnyTag  不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”字段。该字段为false或者未提供该参数时，该条件不生效，即返回所有资源或按\"tags\"，\"matches\"等条件过滤。
    * tags  包含标签，最多包含20个key，每个key下面的value最多20个，每个key对应的value可以为空数组但结构体不能缺失。key不能重复，同一个key中values不能重复。结果返回包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。无tag过滤条件时返回全量数据。
    * matches  搜索字段,key为要匹配的字段，仅支持取值“resource_name”。value为匹配的值，当value以“\\*”结尾时，为前缀搜索。例如：value值为“sfsturbo\\*”时，返回名称为“sfsturbo”开头的所有资源列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'limit' => null,
        'offset' => null,
        'withoutAnyTag' => null,
        'tags' => null,
        'matches' => null
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
    * action  通过标签查询文件系统列表的操作类型。仅支持取值为\"filter\" 或 \"count\"。
    * limit  设置返回的文件系统个数的最大值。
    * offset  设置返回的文件系统的偏移量
    * withoutAnyTag  不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”字段。该字段为false或者未提供该参数时，该条件不生效，即返回所有资源或按\"tags\"，\"matches\"等条件过滤。
    * tags  包含标签，最多包含20个key，每个key下面的value最多20个，每个key对应的value可以为空数组但结构体不能缺失。key不能重复，同一个key中values不能重复。结果返回包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。无tag过滤条件时返回全量数据。
    * matches  搜索字段,key为要匹配的字段，仅支持取值“resource_name”。value为匹配的值，当value以“\\*”结尾时，为前缀搜索。例如：value值为“sfsturbo\\*”时，返回名称为“sfsturbo”开头的所有资源列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'limit' => 'limit',
            'offset' => 'offset',
            'withoutAnyTag' => 'without_any_tag',
            'tags' => 'tags',
            'matches' => 'matches'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  通过标签查询文件系统列表的操作类型。仅支持取值为\"filter\" 或 \"count\"。
    * limit  设置返回的文件系统个数的最大值。
    * offset  设置返回的文件系统的偏移量
    * withoutAnyTag  不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”字段。该字段为false或者未提供该参数时，该条件不生效，即返回所有资源或按\"tags\"，\"matches\"等条件过滤。
    * tags  包含标签，最多包含20个key，每个key下面的value最多20个，每个key对应的value可以为空数组但结构体不能缺失。key不能重复，同一个key中values不能重复。结果返回包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。无tag过滤条件时返回全量数据。
    * matches  搜索字段,key为要匹配的字段，仅支持取值“resource_name”。value为匹配的值，当value以“\\*”结尾时，为前缀搜索。例如：value值为“sfsturbo\\*”时，返回名称为“sfsturbo”开头的所有资源列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'withoutAnyTag' => 'setWithoutAnyTag',
            'tags' => 'setTags',
            'matches' => 'setMatches'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  通过标签查询文件系统列表的操作类型。仅支持取值为\"filter\" 或 \"count\"。
    * limit  设置返回的文件系统个数的最大值。
    * offset  设置返回的文件系统的偏移量
    * withoutAnyTag  不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”字段。该字段为false或者未提供该参数时，该条件不生效，即返回所有资源或按\"tags\"，\"matches\"等条件过滤。
    * tags  包含标签，最多包含20个key，每个key下面的value最多20个，每个key对应的value可以为空数组但结构体不能缺失。key不能重复，同一个key中values不能重复。结果返回包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。无tag过滤条件时返回全量数据。
    * matches  搜索字段,key为要匹配的字段，仅支持取值“resource_name”。value为匹配的值，当value以“\\*”结尾时，为前缀搜索。例如：value值为“sfsturbo\\*”时，返回名称为“sfsturbo”开头的所有资源列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'withoutAnyTag' => 'getWithoutAnyTag',
            'tags' => 'getTags',
            'matches' => 'getMatches'
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
    const ACTION_FILTER = 'filter';
    const ACTION_COUNT = 'count';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_FILTER,
            self::ACTION_COUNT,
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['withoutAnyTag'] = isset($data['withoutAnyTag']) ? $data['withoutAnyTag'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['matches'] = isset($data['matches']) ? $data['matches'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
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
    * Gets action
    *  通过标签查询文件系统列表的操作类型。仅支持取值为\"filter\" 或 \"count\"。
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 通过标签查询文件系统列表的操作类型。仅支持取值为\"filter\" 或 \"count\"。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets limit
    *  设置返回的文件系统个数的最大值。
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 设置返回的文件系统个数的最大值。
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
    *  设置返回的文件系统的偏移量
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset 设置返回的文件系统的偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets withoutAnyTag
    *  不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”字段。该字段为false或者未提供该参数时，该条件不生效，即返回所有资源或按\"tags\"，\"matches\"等条件过滤。
    *
    * @return bool|null
    */
    public function getWithoutAnyTag()
    {
        return $this->container['withoutAnyTag'];
    }

    /**
    * Sets withoutAnyTag
    *
    * @param bool|null $withoutAnyTag 不包含任意一个标签，该字段为true时查询所有不带标签的资源，此时忽略 “tags”字段。该字段为false或者未提供该参数时，该条件不生效，即返回所有资源或按\"tags\"，\"matches\"等条件过滤。
    *
    * @return $this
    */
    public function setWithoutAnyTag($withoutAnyTag)
    {
        $this->container['withoutAnyTag'] = $withoutAnyTag;
        return $this;
    }

    /**
    * Gets tags
    *  包含标签，最多包含20个key，每个key下面的value最多20个，每个key对应的value可以为空数组但结构体不能缺失。key不能重复，同一个key中values不能重复。结果返回包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。无tag过滤条件时返回全量数据。
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\Tag[]|null $tags 包含标签，最多包含20个key，每个key下面的value最多20个，每个key对应的value可以为空数组但结构体不能缺失。key不能重复，同一个key中values不能重复。结果返回包含所有标签的资源列表，key之间是与的关系，key-value结构中value是或的关系。无tag过滤条件时返回全量数据。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets matches
    *  搜索字段,key为要匹配的字段，仅支持取值“resource_name”。value为匹配的值，当value以“\\*”结尾时，为前缀搜索。例如：value值为“sfsturbo\\*”时，返回名称为“sfsturbo”开头的所有资源列表。
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\ResourceTag[]|null
    */
    public function getMatches()
    {
        return $this->container['matches'];
    }

    /**
    * Sets matches
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\ResourceTag[]|null $matches 搜索字段,key为要匹配的字段，仅支持取值“resource_name”。value为匹配的值，当value以“\\*”结尾时，为前缀搜索。例如：value值为“sfsturbo\\*”时，返回名称为“sfsturbo”开头的所有资源列表。
    *
    * @return $this
    */
    public function setMatches($matches)
    {
        $this->container['matches'] = $matches;
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

