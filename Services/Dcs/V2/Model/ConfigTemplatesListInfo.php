<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigTemplatesListInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigTemplatesListInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateId  模板ID
    * cacheMode  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 [- ha_rw_split： 表示读写分离实例](tag:hws)
    * description  模板的描述信息
    * engine  缓存引擎：Redis[和Memcached](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)。
    * engineVersion  缓存版本。  当缓存引擎为Redis时，取值为4.0或5.0。  [当缓存引擎为Memcached时，该字段为可选，取值为空。](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)
    * name  模板名称
    * productType  产品类型。 取值范围如下： - generic：普通版 - enterprise：企业版
    * storageType  存储类型。 取值范围如下： - DRAM - SSD
    * type  模板类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateId' => 'string',
            'cacheMode' => 'string',
            'description' => 'string',
            'engine' => 'string',
            'engineVersion' => 'string',
            'name' => 'string',
            'productType' => 'string',
            'storageType' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateId  模板ID
    * cacheMode  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 [- ha_rw_split： 表示读写分离实例](tag:hws)
    * description  模板的描述信息
    * engine  缓存引擎：Redis[和Memcached](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)。
    * engineVersion  缓存版本。  当缓存引擎为Redis时，取值为4.0或5.0。  [当缓存引擎为Memcached时，该字段为可选，取值为空。](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)
    * name  模板名称
    * productType  产品类型。 取值范围如下： - generic：普通版 - enterprise：企业版
    * storageType  存储类型。 取值范围如下： - DRAM - SSD
    * type  模板类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateId' => null,
        'cacheMode' => null,
        'description' => null,
        'engine' => null,
        'engineVersion' => null,
        'name' => null,
        'productType' => null,
        'storageType' => null,
        'type' => null
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
    * templateId  模板ID
    * cacheMode  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 [- ha_rw_split： 表示读写分离实例](tag:hws)
    * description  模板的描述信息
    * engine  缓存引擎：Redis[和Memcached](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)。
    * engineVersion  缓存版本。  当缓存引擎为Redis时，取值为4.0或5.0。  [当缓存引擎为Memcached时，该字段为可选，取值为空。](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)
    * name  模板名称
    * productType  产品类型。 取值范围如下： - generic：普通版 - enterprise：企业版
    * storageType  存储类型。 取值范围如下： - DRAM - SSD
    * type  模板类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateId' => 'template_id',
            'cacheMode' => 'cache_mode',
            'description' => 'description',
            'engine' => 'engine',
            'engineVersion' => 'engine_version',
            'name' => 'name',
            'productType' => 'product_type',
            'storageType' => 'storage_type',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateId  模板ID
    * cacheMode  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 [- ha_rw_split： 表示读写分离实例](tag:hws)
    * description  模板的描述信息
    * engine  缓存引擎：Redis[和Memcached](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)。
    * engineVersion  缓存版本。  当缓存引擎为Redis时，取值为4.0或5.0。  [当缓存引擎为Memcached时，该字段为可选，取值为空。](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)
    * name  模板名称
    * productType  产品类型。 取值范围如下： - generic：普通版 - enterprise：企业版
    * storageType  存储类型。 取值范围如下： - DRAM - SSD
    * type  模板类型
    *
    * @var string[]
    */
    protected static $setters = [
            'templateId' => 'setTemplateId',
            'cacheMode' => 'setCacheMode',
            'description' => 'setDescription',
            'engine' => 'setEngine',
            'engineVersion' => 'setEngineVersion',
            'name' => 'setName',
            'productType' => 'setProductType',
            'storageType' => 'setStorageType',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateId  模板ID
    * cacheMode  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 [- ha_rw_split： 表示读写分离实例](tag:hws)
    * description  模板的描述信息
    * engine  缓存引擎：Redis[和Memcached](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)。
    * engineVersion  缓存版本。  当缓存引擎为Redis时，取值为4.0或5.0。  [当缓存引擎为Memcached时，该字段为可选，取值为空。](tag:hws,hws_hk,ocb,sbc,tm,ctc,cmcc)
    * name  模板名称
    * productType  产品类型。 取值范围如下： - generic：普通版 - enterprise：企业版
    * storageType  存储类型。 取值范围如下： - DRAM - SSD
    * type  模板类型
    *
    * @var string[]
    */
    protected static $getters = [
            'templateId' => 'getTemplateId',
            'cacheMode' => 'getCacheMode',
            'description' => 'getDescription',
            'engine' => 'getEngine',
            'engineVersion' => 'getEngineVersion',
            'name' => 'getName',
            'productType' => 'getProductType',
            'storageType' => 'getStorageType',
            'type' => 'getType'
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
    const PRODUCT_TYPE_GENERIC = 'generic';
    const PRODUCT_TYPE_ENTERPRISE = 'enterprise';
    const STORAGE_TYPE_DRAM = 'DRAM';
    const STORAGE_TYPE_SSD = 'SSD';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProductTypeAllowableValues()
    {
        return [
            self::PRODUCT_TYPE_GENERIC,
            self::PRODUCT_TYPE_ENTERPRISE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStorageTypeAllowableValues()
    {
        return [
            self::STORAGE_TYPE_DRAM,
            self::STORAGE_TYPE_SSD,
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
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['cacheMode'] = isset($data['cacheMode']) ? $data['cacheMode'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['productType'] = isset($data['productType']) ? $data['productType'] : null;
        $this->container['storageType'] = isset($data['storageType']) ? $data['storageType'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getProductTypeAllowableValues();
                if (!is_null($this->container['productType']) && !in_array($this->container['productType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'productType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStorageTypeAllowableValues();
                if (!is_null($this->container['storageType']) && !in_array($this->container['storageType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'storageType', must be one of '%s'",
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
    * Gets name
    *  模板名称
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
    * @param string|null $name 模板名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets productType
    *  产品类型。 取值范围如下： - generic：普通版 - enterprise：企业版
    *
    * @return string|null
    */
    public function getProductType()
    {
        return $this->container['productType'];
    }

    /**
    * Sets productType
    *
    * @param string|null $productType 产品类型。 取值范围如下： - generic：普通版 - enterprise：企业版
    *
    * @return $this
    */
    public function setProductType($productType)
    {
        $this->container['productType'] = $productType;
        return $this;
    }

    /**
    * Gets storageType
    *  存储类型。 取值范围如下： - DRAM - SSD
    *
    * @return string|null
    */
    public function getStorageType()
    {
        return $this->container['storageType'];
    }

    /**
    * Sets storageType
    *
    * @param string|null $storageType 存储类型。 取值范围如下： - DRAM - SSD
    *
    * @return $this
    */
    public function setStorageType($storageType)
    {
        $this->container['storageType'] = $storageType;
        return $this;
    }

    /**
    * Gets type
    *  模板类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 模板类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

