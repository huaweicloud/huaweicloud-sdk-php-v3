<?php

namespace HuaweiCloud\SDK\Aom\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PageResourceListParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PageResourceListParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * marker  页面的分页标志位,为分页的最后一条记录的id
    * limit  查询返回记录的数量限制。limit可以为空，如果值小于1或者大于100，则会使用默认值100
    * keywords  关键字模糊搜索。Key取值：NAME、RESOURCE_ID
    * ciRelationships  是否需要返回拓扑树,默认是false。需要：true---性能差，不需要false--性能好
    * ciType  节点类型，取值：application、sub_application、component、environment
    * ciRegion  环境的region信息，若没有值，代表全部
    * ciIds  节点id列表;如果ci_ids和ci_id同时有，则优先ci_ids，但是不能同时为空
    * ciId  节点id列表;如果ci_ids和ci_id同时有，则优先ci_ids，但是不能同时为空。但是不支持应用批量查询
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'marker' => 'string',
            'limit' => 'int',
            'keywords' => 'map[string,string]',
            'ciRelationships' => 'bool',
            'ciType' => 'string',
            'ciRegion' => 'string',
            'ciIds' => 'string[]',
            'ciId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * marker  页面的分页标志位,为分页的最后一条记录的id
    * limit  查询返回记录的数量限制。limit可以为空，如果值小于1或者大于100，则会使用默认值100
    * keywords  关键字模糊搜索。Key取值：NAME、RESOURCE_ID
    * ciRelationships  是否需要返回拓扑树,默认是false。需要：true---性能差，不需要false--性能好
    * ciType  节点类型，取值：application、sub_application、component、environment
    * ciRegion  环境的region信息，若没有值，代表全部
    * ciIds  节点id列表;如果ci_ids和ci_id同时有，则优先ci_ids，但是不能同时为空
    * ciId  节点id列表;如果ci_ids和ci_id同时有，则优先ci_ids，但是不能同时为空。但是不支持应用批量查询
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'marker' => null,
        'limit' => 'int32',
        'keywords' => null,
        'ciRelationships' => null,
        'ciType' => null,
        'ciRegion' => null,
        'ciIds' => null,
        'ciId' => null
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
    * marker  页面的分页标志位,为分页的最后一条记录的id
    * limit  查询返回记录的数量限制。limit可以为空，如果值小于1或者大于100，则会使用默认值100
    * keywords  关键字模糊搜索。Key取值：NAME、RESOURCE_ID
    * ciRelationships  是否需要返回拓扑树,默认是false。需要：true---性能差，不需要false--性能好
    * ciType  节点类型，取值：application、sub_application、component、environment
    * ciRegion  环境的region信息，若没有值，代表全部
    * ciIds  节点id列表;如果ci_ids和ci_id同时有，则优先ci_ids，但是不能同时为空
    * ciId  节点id列表;如果ci_ids和ci_id同时有，则优先ci_ids，但是不能同时为空。但是不支持应用批量查询
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'marker' => 'marker',
            'limit' => 'limit',
            'keywords' => 'keywords',
            'ciRelationships' => 'ci_relationships',
            'ciType' => 'ci_type',
            'ciRegion' => 'ci_region',
            'ciIds' => 'ci_ids',
            'ciId' => 'ci_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * marker  页面的分页标志位,为分页的最后一条记录的id
    * limit  查询返回记录的数量限制。limit可以为空，如果值小于1或者大于100，则会使用默认值100
    * keywords  关键字模糊搜索。Key取值：NAME、RESOURCE_ID
    * ciRelationships  是否需要返回拓扑树,默认是false。需要：true---性能差，不需要false--性能好
    * ciType  节点类型，取值：application、sub_application、component、environment
    * ciRegion  环境的region信息，若没有值，代表全部
    * ciIds  节点id列表;如果ci_ids和ci_id同时有，则优先ci_ids，但是不能同时为空
    * ciId  节点id列表;如果ci_ids和ci_id同时有，则优先ci_ids，但是不能同时为空。但是不支持应用批量查询
    *
    * @var string[]
    */
    protected static $setters = [
            'marker' => 'setMarker',
            'limit' => 'setLimit',
            'keywords' => 'setKeywords',
            'ciRelationships' => 'setCiRelationships',
            'ciType' => 'setCiType',
            'ciRegion' => 'setCiRegion',
            'ciIds' => 'setCiIds',
            'ciId' => 'setCiId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * marker  页面的分页标志位,为分页的最后一条记录的id
    * limit  查询返回记录的数量限制。limit可以为空，如果值小于1或者大于100，则会使用默认值100
    * keywords  关键字模糊搜索。Key取值：NAME、RESOURCE_ID
    * ciRelationships  是否需要返回拓扑树,默认是false。需要：true---性能差，不需要false--性能好
    * ciType  节点类型，取值：application、sub_application、component、environment
    * ciRegion  环境的region信息，若没有值，代表全部
    * ciIds  节点id列表;如果ci_ids和ci_id同时有，则优先ci_ids，但是不能同时为空
    * ciId  节点id列表;如果ci_ids和ci_id同时有，则优先ci_ids，但是不能同时为空。但是不支持应用批量查询
    *
    * @var string[]
    */
    protected static $getters = [
            'marker' => 'getMarker',
            'limit' => 'getLimit',
            'keywords' => 'getKeywords',
            'ciRelationships' => 'getCiRelationships',
            'ciType' => 'getCiType',
            'ciRegion' => 'getCiRegion',
            'ciIds' => 'getCiIds',
            'ciId' => 'getCiId'
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
    const CI_TYPE_APPLICATION = 'APPLICATION';
    const CI_TYPE_SUB_APPLICATION = 'SUB_APPLICATION';
    const CI_TYPE_COMPONENT = 'COMPONENT';
    const CI_TYPE_ENVIRONMENT = 'ENVIRONMENT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCiTypeAllowableValues()
    {
        return [
            self::CI_TYPE_APPLICATION,
            self::CI_TYPE_SUB_APPLICATION,
            self::CI_TYPE_COMPONENT,
            self::CI_TYPE_ENVIRONMENT,
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
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['ciRelationships'] = isset($data['ciRelationships']) ? $data['ciRelationships'] : null;
        $this->container['ciType'] = isset($data['ciType']) ? $data['ciType'] : null;
        $this->container['ciRegion'] = isset($data['ciRegion']) ? $data['ciRegion'] : null;
        $this->container['ciIds'] = isset($data['ciIds']) ? $data['ciIds'] : null;
        $this->container['ciId'] = isset($data['ciId']) ? $data['ciId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ciType'] === null) {
            $invalidProperties[] = "'ciType' can't be null";
        }
            $allowedValues = $this->getCiTypeAllowableValues();
                if (!is_null($this->container['ciType']) && !in_array($this->container['ciType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ciType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['ciRegion']) && !preg_match("/^[\\s\\S]{1,128}$/", $this->container['ciRegion'])) {
                $invalidProperties[] = "invalid value for 'ciRegion', must be conform to the pattern /^[\\s\\S]{1,128}$/.";
            }
            if (!is_null($this->container['ciId']) && !preg_match("/^[a-zA-Z0-9\\-]{32,36}$/", $this->container['ciId'])) {
                $invalidProperties[] = "invalid value for 'ciId', must be conform to the pattern /^[a-zA-Z0-9\\-]{32,36}$/.";
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
    * Gets marker
    *  页面的分页标志位,为分页的最后一条记录的id
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
    * @param string|null $marker 页面的分页标志位,为分页的最后一条记录的id
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets limit
    *  查询返回记录的数量限制。limit可以为空，如果值小于1或者大于100，则会使用默认值100
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
    * @param int|null $limit 查询返回记录的数量限制。limit可以为空，如果值小于1或者大于100，则会使用默认值100
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets keywords
    *  关键字模糊搜索。Key取值：NAME、RESOURCE_ID
    *
    * @return map[string,string]|null
    */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
    * Sets keywords
    *
    * @param map[string,string]|null $keywords 关键字模糊搜索。Key取值：NAME、RESOURCE_ID
    *
    * @return $this
    */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;
        return $this;
    }

    /**
    * Gets ciRelationships
    *  是否需要返回拓扑树,默认是false。需要：true---性能差，不需要false--性能好
    *
    * @return bool|null
    */
    public function getCiRelationships()
    {
        return $this->container['ciRelationships'];
    }

    /**
    * Sets ciRelationships
    *
    * @param bool|null $ciRelationships 是否需要返回拓扑树,默认是false。需要：true---性能差，不需要false--性能好
    *
    * @return $this
    */
    public function setCiRelationships($ciRelationships)
    {
        $this->container['ciRelationships'] = $ciRelationships;
        return $this;
    }

    /**
    * Gets ciType
    *  节点类型，取值：application、sub_application、component、environment
    *
    * @return string
    */
    public function getCiType()
    {
        return $this->container['ciType'];
    }

    /**
    * Sets ciType
    *
    * @param string $ciType 节点类型，取值：application、sub_application、component、environment
    *
    * @return $this
    */
    public function setCiType($ciType)
    {
        $this->container['ciType'] = $ciType;
        return $this;
    }

    /**
    * Gets ciRegion
    *  环境的region信息，若没有值，代表全部
    *
    * @return string|null
    */
    public function getCiRegion()
    {
        return $this->container['ciRegion'];
    }

    /**
    * Sets ciRegion
    *
    * @param string|null $ciRegion 环境的region信息，若没有值，代表全部
    *
    * @return $this
    */
    public function setCiRegion($ciRegion)
    {
        $this->container['ciRegion'] = $ciRegion;
        return $this;
    }

    /**
    * Gets ciIds
    *  节点id列表;如果ci_ids和ci_id同时有，则优先ci_ids，但是不能同时为空
    *
    * @return string[]|null
    */
    public function getCiIds()
    {
        return $this->container['ciIds'];
    }

    /**
    * Sets ciIds
    *
    * @param string[]|null $ciIds 节点id列表;如果ci_ids和ci_id同时有，则优先ci_ids，但是不能同时为空
    *
    * @return $this
    */
    public function setCiIds($ciIds)
    {
        $this->container['ciIds'] = $ciIds;
        return $this;
    }

    /**
    * Gets ciId
    *  节点id列表;如果ci_ids和ci_id同时有，则优先ci_ids，但是不能同时为空。但是不支持应用批量查询
    *
    * @return string|null
    */
    public function getCiId()
    {
        return $this->container['ciId'];
    }

    /**
    * Sets ciId
    *
    * @param string|null $ciId 节点id列表;如果ci_ids和ci_id同时有，则优先ci_ids，但是不能同时为空。但是不支持应用批量查询
    *
    * @return $this
    */
    public function setCiId($ciId)
    {
        $this->container['ciId'] = $ciId;
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

