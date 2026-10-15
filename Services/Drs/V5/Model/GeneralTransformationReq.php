<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GeneralTransformationReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GeneralTransformationReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * filterObjectList  数据过滤对象列表。包含需要校验的具体数据库对象（库/Schema/表）信息，在简单条件过滤场景下为必填项。列表中的每个元素代表一个待过滤的数据库对象。适用条件：简单过滤条件场景下必填。
    * sourceFilterCondition  源端数据库的过滤条件SQL语句。用于定义源库数据过滤规则，支持SQL子查询等高级过滤表达式。当数据过滤涉及子查询场景时，需要通过此字段配置查询条件。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'filterObjectList' => '\HuaweiCloud\SDK\Drs\V5\Model\DataFilterObjectInfo[]',
            'sourceFilterCondition' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * filterObjectList  数据过滤对象列表。包含需要校验的具体数据库对象（库/Schema/表）信息，在简单条件过滤场景下为必填项。列表中的每个元素代表一个待过滤的数据库对象。适用条件：简单过滤条件场景下必填。
    * sourceFilterCondition  源端数据库的过滤条件SQL语句。用于定义源库数据过滤规则，支持SQL子查询等高级过滤表达式。当数据过滤涉及子查询场景时，需要通过此字段配置查询条件。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'filterObjectList' => null,
        'sourceFilterCondition' => null
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
    * filterObjectList  数据过滤对象列表。包含需要校验的具体数据库对象（库/Schema/表）信息，在简单条件过滤场景下为必填项。列表中的每个元素代表一个待过滤的数据库对象。适用条件：简单过滤条件场景下必填。
    * sourceFilterCondition  源端数据库的过滤条件SQL语句。用于定义源库数据过滤规则，支持SQL子查询等高级过滤表达式。当数据过滤涉及子查询场景时，需要通过此字段配置查询条件。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'filterObjectList' => 'filter_object_list',
            'sourceFilterCondition' => 'source_filter_condition'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * filterObjectList  数据过滤对象列表。包含需要校验的具体数据库对象（库/Schema/表）信息，在简单条件过滤场景下为必填项。列表中的每个元素代表一个待过滤的数据库对象。适用条件：简单过滤条件场景下必填。
    * sourceFilterCondition  源端数据库的过滤条件SQL语句。用于定义源库数据过滤规则，支持SQL子查询等高级过滤表达式。当数据过滤涉及子查询场景时，需要通过此字段配置查询条件。
    *
    * @var string[]
    */
    protected static $setters = [
            'filterObjectList' => 'setFilterObjectList',
            'sourceFilterCondition' => 'setSourceFilterCondition'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * filterObjectList  数据过滤对象列表。包含需要校验的具体数据库对象（库/Schema/表）信息，在简单条件过滤场景下为必填项。列表中的每个元素代表一个待过滤的数据库对象。适用条件：简单过滤条件场景下必填。
    * sourceFilterCondition  源端数据库的过滤条件SQL语句。用于定义源库数据过滤规则，支持SQL子查询等高级过滤表达式。当数据过滤涉及子查询场景时，需要通过此字段配置查询条件。
    *
    * @var string[]
    */
    protected static $getters = [
            'filterObjectList' => 'getFilterObjectList',
            'sourceFilterCondition' => 'getSourceFilterCondition'
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
        $this->container['filterObjectList'] = isset($data['filterObjectList']) ? $data['filterObjectList'] : null;
        $this->container['sourceFilterCondition'] = isset($data['sourceFilterCondition']) ? $data['sourceFilterCondition'] : null;
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
    * Gets filterObjectList
    *  数据过滤对象列表。包含需要校验的具体数据库对象（库/Schema/表）信息，在简单条件过滤场景下为必填项。列表中的每个元素代表一个待过滤的数据库对象。适用条件：简单过滤条件场景下必填。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\DataFilterObjectInfo[]|null
    */
    public function getFilterObjectList()
    {
        return $this->container['filterObjectList'];
    }

    /**
    * Sets filterObjectList
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\DataFilterObjectInfo[]|null $filterObjectList 数据过滤对象列表。包含需要校验的具体数据库对象（库/Schema/表）信息，在简单条件过滤场景下为必填项。列表中的每个元素代表一个待过滤的数据库对象。适用条件：简单过滤条件场景下必填。
    *
    * @return $this
    */
    public function setFilterObjectList($filterObjectList)
    {
        $this->container['filterObjectList'] = $filterObjectList;
        return $this;
    }

    /**
    * Gets sourceFilterCondition
    *  源端数据库的过滤条件SQL语句。用于定义源库数据过滤规则，支持SQL子查询等高级过滤表达式。当数据过滤涉及子查询场景时，需要通过此字段配置查询条件。
    *
    * @return string|null
    */
    public function getSourceFilterCondition()
    {
        return $this->container['sourceFilterCondition'];
    }

    /**
    * Sets sourceFilterCondition
    *
    * @param string|null $sourceFilterCondition 源端数据库的过滤条件SQL语句。用于定义源库数据过滤规则，支持SQL子查询等高级过滤表达式。当数据过滤涉及子查询场景时，需要通过此字段配置查询条件。
    *
    * @return $this
    */
    public function setSourceFilterCondition($sourceFilterCondition)
    {
        $this->container['sourceFilterCondition'] = $sourceFilterCondition;
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

