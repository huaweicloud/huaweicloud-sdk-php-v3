<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BrowserCacheRules implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BrowserCacheRules';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * condition  condition
    * cacheType  缓存生效类型：   - follow_origin：遵循源站的缓存策略，即Cache-Control头部的设置，   - ttl：浏览器缓存遵循当前规则设置的过期时间，   - never：浏览器不缓存资源。
    * ttl  缓存过期时间，最大支持365天。   > 当缓存生效类型为ttl时必填。
    * ttlUnit  缓存过期时间单位，s：秒；m：分种；h：小时；d：天。   > 当缓存生效类型为ttl时必填。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'condition' => '\HuaweiCloud\SDK\Cdn\V2\Model\BrowserCacheRulesCondition',
            'cacheType' => 'string',
            'ttl' => 'int',
            'ttlUnit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * condition  condition
    * cacheType  缓存生效类型：   - follow_origin：遵循源站的缓存策略，即Cache-Control头部的设置，   - ttl：浏览器缓存遵循当前规则设置的过期时间，   - never：浏览器不缓存资源。
    * ttl  缓存过期时间，最大支持365天。   > 当缓存生效类型为ttl时必填。
    * ttlUnit  缓存过期时间单位，s：秒；m：分种；h：小时；d：天。   > 当缓存生效类型为ttl时必填。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'condition' => null,
        'cacheType' => null,
        'ttl' => 'int32',
        'ttlUnit' => null
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
    * condition  condition
    * cacheType  缓存生效类型：   - follow_origin：遵循源站的缓存策略，即Cache-Control头部的设置，   - ttl：浏览器缓存遵循当前规则设置的过期时间，   - never：浏览器不缓存资源。
    * ttl  缓存过期时间，最大支持365天。   > 当缓存生效类型为ttl时必填。
    * ttlUnit  缓存过期时间单位，s：秒；m：分种；h：小时；d：天。   > 当缓存生效类型为ttl时必填。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'condition' => 'condition',
            'cacheType' => 'cache_type',
            'ttl' => 'ttl',
            'ttlUnit' => 'ttl_unit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * condition  condition
    * cacheType  缓存生效类型：   - follow_origin：遵循源站的缓存策略，即Cache-Control头部的设置，   - ttl：浏览器缓存遵循当前规则设置的过期时间，   - never：浏览器不缓存资源。
    * ttl  缓存过期时间，最大支持365天。   > 当缓存生效类型为ttl时必填。
    * ttlUnit  缓存过期时间单位，s：秒；m：分种；h：小时；d：天。   > 当缓存生效类型为ttl时必填。
    *
    * @var string[]
    */
    protected static $setters = [
            'condition' => 'setCondition',
            'cacheType' => 'setCacheType',
            'ttl' => 'setTtl',
            'ttlUnit' => 'setTtlUnit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * condition  condition
    * cacheType  缓存生效类型：   - follow_origin：遵循源站的缓存策略，即Cache-Control头部的设置，   - ttl：浏览器缓存遵循当前规则设置的过期时间，   - never：浏览器不缓存资源。
    * ttl  缓存过期时间，最大支持365天。   > 当缓存生效类型为ttl时必填。
    * ttlUnit  缓存过期时间单位，s：秒；m：分种；h：小时；d：天。   > 当缓存生效类型为ttl时必填。
    *
    * @var string[]
    */
    protected static $getters = [
            'condition' => 'getCondition',
            'cacheType' => 'getCacheType',
            'ttl' => 'getTtl',
            'ttlUnit' => 'getTtlUnit'
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
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['cacheType'] = isset($data['cacheType']) ? $data['cacheType'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
        $this->container['ttlUnit'] = isset($data['ttlUnit']) ? $data['ttlUnit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if ($this->container['cacheType'] === null) {
            $invalidProperties[] = "'cacheType' can't be null";
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
    * Gets condition
    *  condition
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\BrowserCacheRulesCondition
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\BrowserCacheRulesCondition $condition condition
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets cacheType
    *  缓存生效类型：   - follow_origin：遵循源站的缓存策略，即Cache-Control头部的设置，   - ttl：浏览器缓存遵循当前规则设置的过期时间，   - never：浏览器不缓存资源。
    *
    * @return string
    */
    public function getCacheType()
    {
        return $this->container['cacheType'];
    }

    /**
    * Sets cacheType
    *
    * @param string $cacheType 缓存生效类型：   - follow_origin：遵循源站的缓存策略，即Cache-Control头部的设置，   - ttl：浏览器缓存遵循当前规则设置的过期时间，   - never：浏览器不缓存资源。
    *
    * @return $this
    */
    public function setCacheType($cacheType)
    {
        $this->container['cacheType'] = $cacheType;
        return $this;
    }

    /**
    * Gets ttl
    *  缓存过期时间，最大支持365天。   > 当缓存生效类型为ttl时必填。
    *
    * @return int|null
    */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
    * Sets ttl
    *
    * @param int|null $ttl 缓存过期时间，最大支持365天。   > 当缓存生效类型为ttl时必填。
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
        return $this;
    }

    /**
    * Gets ttlUnit
    *  缓存过期时间单位，s：秒；m：分种；h：小时；d：天。   > 当缓存生效类型为ttl时必填。
    *
    * @return string|null
    */
    public function getTtlUnit()
    {
        return $this->container['ttlUnit'];
    }

    /**
    * Sets ttlUnit
    *
    * @param string|null $ttlUnit 缓存过期时间单位，s：秒；m：分种；h：小时；d：天。   > 当缓存生效类型为ttl时必填。
    *
    * @return $this
    */
    public function setTtlUnit($ttlUnit)
    {
        $this->container['ttlUnit'] = $ttlUnit;
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

