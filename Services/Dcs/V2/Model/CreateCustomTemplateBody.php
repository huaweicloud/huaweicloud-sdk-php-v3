<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCustomTemplateBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCustomTemplateBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateId  来源系统模板ID
    * name  模板名称
    * type  模板类型
    * engine  缓存引擎：Redis[和Memcached](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)。
    * cacheMode  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 [- ha_rw_split： 表示读写分离实例](tag:hws)
    * description  模板的描述信息
    * engineVersion  缓存版本。  当缓存引擎为Redis时，取值为4.0或5.0。  [当缓存引擎为Memcached时，该字段为可选，取值为空。](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)
    * params  参数配置信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateId' => 'string',
            'name' => 'string',
            'type' => 'string',
            'engine' => 'string',
            'cacheMode' => 'string',
            'description' => 'string',
            'engineVersion' => 'string',
            'params' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateId  来源系统模板ID
    * name  模板名称
    * type  模板类型
    * engine  缓存引擎：Redis[和Memcached](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)。
    * cacheMode  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 [- ha_rw_split： 表示读写分离实例](tag:hws)
    * description  模板的描述信息
    * engineVersion  缓存版本。  当缓存引擎为Redis时，取值为4.0或5.0。  [当缓存引擎为Memcached时，该字段为可选，取值为空。](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)
    * params  参数配置信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateId' => null,
        'name' => null,
        'type' => null,
        'engine' => null,
        'cacheMode' => null,
        'description' => null,
        'engineVersion' => null,
        'params' => null
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
    * templateId  来源系统模板ID
    * name  模板名称
    * type  模板类型
    * engine  缓存引擎：Redis[和Memcached](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)。
    * cacheMode  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 [- ha_rw_split： 表示读写分离实例](tag:hws)
    * description  模板的描述信息
    * engineVersion  缓存版本。  当缓存引擎为Redis时，取值为4.0或5.0。  [当缓存引擎为Memcached时，该字段为可选，取值为空。](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)
    * params  参数配置信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateId' => 'template_id',
            'name' => 'name',
            'type' => 'type',
            'engine' => 'engine',
            'cacheMode' => 'cache_mode',
            'description' => 'description',
            'engineVersion' => 'engine_version',
            'params' => 'params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateId  来源系统模板ID
    * name  模板名称
    * type  模板类型
    * engine  缓存引擎：Redis[和Memcached](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)。
    * cacheMode  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 [- ha_rw_split： 表示读写分离实例](tag:hws)
    * description  模板的描述信息
    * engineVersion  缓存版本。  当缓存引擎为Redis时，取值为4.0或5.0。  [当缓存引擎为Memcached时，该字段为可选，取值为空。](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)
    * params  参数配置信息
    *
    * @var string[]
    */
    protected static $setters = [
            'templateId' => 'setTemplateId',
            'name' => 'setName',
            'type' => 'setType',
            'engine' => 'setEngine',
            'cacheMode' => 'setCacheMode',
            'description' => 'setDescription',
            'engineVersion' => 'setEngineVersion',
            'params' => 'setParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateId  来源系统模板ID
    * name  模板名称
    * type  模板类型
    * engine  缓存引擎：Redis[和Memcached](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)。
    * cacheMode  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 [- ha_rw_split： 表示读写分离实例](tag:hws)
    * description  模板的描述信息
    * engineVersion  缓存版本。  当缓存引擎为Redis时，取值为4.0或5.0。  [当缓存引擎为Memcached时，该字段为可选，取值为空。](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)
    * params  参数配置信息
    *
    * @var string[]
    */
    protected static $getters = [
            'templateId' => 'getTemplateId',
            'name' => 'getName',
            'type' => 'getType',
            'engine' => 'getEngine',
            'cacheMode' => 'getCacheMode',
            'description' => 'getDescription',
            'engineVersion' => 'getEngineVersion',
            'params' => 'getParams'
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
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['cacheMode'] = isset($data['cacheMode']) ? $data['cacheMode'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['templateId'] === null) {
            $invalidProperties[] = "'templateId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['params'] === null) {
            $invalidProperties[] = "'params' can't be null";
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
    * Gets templateId
    *  来源系统模板ID
    *
    * @return string
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string $templateId 来源系统模板ID
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets name
    *  模板名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 模板名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    * Gets cacheMode
    *  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 [- ha_rw_split： 表示读写分离实例](tag:hws)
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
    * @param string|null $cacheMode 缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 [- ha_rw_split： 表示读写分离实例](tag:hws)
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
    * Gets engineVersion
    *  缓存版本。  当缓存引擎为Redis时，取值为4.0或5.0。  [当缓存引擎为Memcached时，该字段为可选，取值为空。](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)
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
    * @param string|null $engineVersion 缓存版本。  当缓存引擎为Redis时，取值为4.0或5.0。  [当缓存引擎为Memcached时，该字段为可选，取值为空。](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets params
    *  参数配置信息
    *
    * @return map[string,string]
    */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
    * Sets params
    *
    * @param map[string,string] $params 参数配置信息
    *
    * @return $this
    */
    public function setParams($params)
    {
        $this->container['params'] = $params;
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

