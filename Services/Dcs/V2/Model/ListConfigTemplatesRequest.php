<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListConfigTemplatesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListConfigTemplatesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  参数模板名称，支持模糊查找
    * templateId  模板ID
    * type  模板类型
    * engine  缓存引擎：Redis[和Memcached](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)。
    * engineVersion  缓存版本。  当缓存引擎为Redis时，取值为[3.0/4.0/5.0](tag:ctc,cmc)[3.0/4.0/5.0/6.0](tag:ocb,otc,sbc,g42,tm)[4.0/5.0/6.0](tag:hws,hws_hk)。  [当缓存引擎为Memcached时，该字段为可选，取值为空。](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)
    * cacheMode  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 [- ha_rw_split：表示读写分离实例](tag:hws)
    * description  模板的描述信息
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0
    * limit  每页显示条数，最小值为1，最大值为1000，若不设置该参数，则为10。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'templateId' => 'string',
            'type' => 'string',
            'engine' => 'string',
            'engineVersion' => 'string',
            'cacheMode' => 'string',
            'description' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  参数模板名称，支持模糊查找
    * templateId  模板ID
    * type  模板类型
    * engine  缓存引擎：Redis[和Memcached](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)。
    * engineVersion  缓存版本。  当缓存引擎为Redis时，取值为[3.0/4.0/5.0](tag:ctc,cmc)[3.0/4.0/5.0/6.0](tag:ocb,otc,sbc,g42,tm)[4.0/5.0/6.0](tag:hws,hws_hk)。  [当缓存引擎为Memcached时，该字段为可选，取值为空。](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)
    * cacheMode  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 [- ha_rw_split：表示读写分离实例](tag:hws)
    * description  模板的描述信息
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0
    * limit  每页显示条数，最小值为1，最大值为1000，若不设置该参数，则为10。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'templateId' => null,
        'type' => null,
        'engine' => null,
        'engineVersion' => null,
        'cacheMode' => null,
        'description' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * name  参数模板名称，支持模糊查找
    * templateId  模板ID
    * type  模板类型
    * engine  缓存引擎：Redis[和Memcached](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)。
    * engineVersion  缓存版本。  当缓存引擎为Redis时，取值为[3.0/4.0/5.0](tag:ctc,cmc)[3.0/4.0/5.0/6.0](tag:ocb,otc,sbc,g42,tm)[4.0/5.0/6.0](tag:hws,hws_hk)。  [当缓存引擎为Memcached时，该字段为可选，取值为空。](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)
    * cacheMode  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 [- ha_rw_split：表示读写分离实例](tag:hws)
    * description  模板的描述信息
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0
    * limit  每页显示条数，最小值为1，最大值为1000，若不设置该参数，则为10。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'templateId' => 'template_id',
            'type' => 'type',
            'engine' => 'engine',
            'engineVersion' => 'engine_version',
            'cacheMode' => 'cache_mode',
            'description' => 'description',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  参数模板名称，支持模糊查找
    * templateId  模板ID
    * type  模板类型
    * engine  缓存引擎：Redis[和Memcached](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)。
    * engineVersion  缓存版本。  当缓存引擎为Redis时，取值为[3.0/4.0/5.0](tag:ctc,cmc)[3.0/4.0/5.0/6.0](tag:ocb,otc,sbc,g42,tm)[4.0/5.0/6.0](tag:hws,hws_hk)。  [当缓存引擎为Memcached时，该字段为可选，取值为空。](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)
    * cacheMode  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 [- ha_rw_split：表示读写分离实例](tag:hws)
    * description  模板的描述信息
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0
    * limit  每页显示条数，最小值为1，最大值为1000，若不设置该参数，则为10。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'templateId' => 'setTemplateId',
            'type' => 'setType',
            'engine' => 'setEngine',
            'engineVersion' => 'setEngineVersion',
            'cacheMode' => 'setCacheMode',
            'description' => 'setDescription',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  参数模板名称，支持模糊查找
    * templateId  模板ID
    * type  模板类型
    * engine  缓存引擎：Redis[和Memcached](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)。
    * engineVersion  缓存版本。  当缓存引擎为Redis时，取值为[3.0/4.0/5.0](tag:ctc,cmc)[3.0/4.0/5.0/6.0](tag:ocb,otc,sbc,g42,tm)[4.0/5.0/6.0](tag:hws,hws_hk)。  [当缓存引擎为Memcached时，该字段为可选，取值为空。](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)
    * cacheMode  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 [- ha_rw_split：表示读写分离实例](tag:hws)
    * description  模板的描述信息
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0
    * limit  每页显示条数，最小值为1，最大值为1000，若不设置该参数，则为10。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'templateId' => 'getTemplateId',
            'type' => 'getType',
            'engine' => 'getEngine',
            'engineVersion' => 'getEngineVersion',
            'cacheMode' => 'getCacheMode',
            'description' => 'getDescription',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
    const TYPE_SYS = 'sys';
    const TYPE_USER = 'user';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SYS,
            self::TYPE_USER,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['cacheMode'] = isset($data['cacheMode']) ? $data['cacheMode'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
    * Gets name
    *  参数模板名称，支持模糊查找
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
    * @param string|null $name 参数模板名称，支持模糊查找
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets templateId
    *  模板ID
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId 模板ID
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets type
    *  模板类型
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 模板类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets engine
    *  缓存引擎：Redis[和Memcached](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)。
    *
    * @return string|null
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param string|null $engine 缓存引擎：Redis[和Memcached](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)。
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets engineVersion
    *  缓存版本。  当缓存引擎为Redis时，取值为[3.0/4.0/5.0](tag:ctc,cmc)[3.0/4.0/5.0/6.0](tag:ocb,otc,sbc,g42,tm)[4.0/5.0/6.0](tag:hws,hws_hk)。  [当缓存引擎为Memcached时，该字段为可选，取值为空。](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)
    *
    * @return string|null
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string|null $engineVersion 缓存版本。  当缓存引擎为Redis时，取值为[3.0/4.0/5.0](tag:ctc,cmc)[3.0/4.0/5.0/6.0](tag:ocb,otc,sbc,g42,tm)[4.0/5.0/6.0](tag:hws,hws_hk)。  [当缓存引擎为Memcached时，该字段为可选，取值为空。](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets cacheMode
    *  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 [- ha_rw_split：表示读写分离实例](tag:hws)
    *
    * @return string|null
    */
    public function getCacheMode()
    {
        return $this->container['cacheMode'];
    }

    /**
    * Sets cacheMode
    *
    * @param string|null $cacheMode 缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 [- ha_rw_split：表示读写分离实例](tag:hws)
    *
    * @return $this
    */
    public function setCacheMode($cacheMode)
    {
        $this->container['cacheMode'] = $cacheMode;
        return $this;
    }

    /**
    * Gets description
    *  模板的描述信息
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 模板的描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，表示从此偏移量开始查询， offset大于等于0
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
    * @param int|null $offset 偏移量，表示从此偏移量开始查询， offset大于等于0
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
    *  每页显示条数，最小值为1，最大值为1000，若不设置该参数，则为10。
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
    * @param int|null $limit 每页显示条数，最小值为1，最大值为1000，若不设置该参数，则为10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

