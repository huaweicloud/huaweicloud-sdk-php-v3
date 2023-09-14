<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlavorsItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlavorsItems';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * specCode  产品规格编码。
    * cloudServiceTypeCode  云服务类型编码。
    * cloudResourceTypeCode  云资源类型编码。
    * cacheMode  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 - ha_rw_split： 表示读写分离实例
    * engine  缓存引擎类型。
    * engineVersion  缓存版本，当缓存引擎为Redis时，取值为3.0、4.0或5.0。
    * productType  Redis缓存实例的产品类型。取值当前仅支持： generic：标准类型
    * cpuType  CPU架构类型。取值范围如下： - x86_64：X86架构 - aarch64: ARM架构
    * storageType  存储类型，取值当前仅支持： DRAM:内存存储
    * capacity  缓存容量（G Byte）。
    * billingMode  计费模式，取值范围如下： - Hourly：按需计费 - Monthly: 包月计费 - Yearly: 包周期计费
    * tenantIpCount  租户侧IP数量。
    * pricingType  定价类型，取值如下： - tier: 阶梯定价，一个规格对应多个容量 - normal: 规格和容量一一对应
    * isDec  是否支持专属云。
    * attrs  规格的其他信息。
    * flavorsAvailableZones  有资源的可用区。
    * replicaCount  副本数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'specCode' => 'string',
            'cloudServiceTypeCode' => 'string',
            'cloudResourceTypeCode' => 'string',
            'cacheMode' => 'string',
            'engine' => 'string',
            'engineVersion' => 'string',
            'productType' => 'string',
            'cpuType' => 'string',
            'storageType' => 'string',
            'capacity' => 'string[]',
            'billingMode' => 'string[]',
            'tenantIpCount' => 'int',
            'pricingType' => 'string',
            'isDec' => 'bool',
            'attrs' => '\HuaweiCloud\SDK\Dcs\V2\Model\AttrsObject[]',
            'flavorsAvailableZones' => '\HuaweiCloud\SDK\Dcs\V2\Model\FlavorAzObject[]',
            'replicaCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * specCode  产品规格编码。
    * cloudServiceTypeCode  云服务类型编码。
    * cloudResourceTypeCode  云资源类型编码。
    * cacheMode  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 - ha_rw_split： 表示读写分离实例
    * engine  缓存引擎类型。
    * engineVersion  缓存版本，当缓存引擎为Redis时，取值为3.0、4.0或5.0。
    * productType  Redis缓存实例的产品类型。取值当前仅支持： generic：标准类型
    * cpuType  CPU架构类型。取值范围如下： - x86_64：X86架构 - aarch64: ARM架构
    * storageType  存储类型，取值当前仅支持： DRAM:内存存储
    * capacity  缓存容量（G Byte）。
    * billingMode  计费模式，取值范围如下： - Hourly：按需计费 - Monthly: 包月计费 - Yearly: 包周期计费
    * tenantIpCount  租户侧IP数量。
    * pricingType  定价类型，取值如下： - tier: 阶梯定价，一个规格对应多个容量 - normal: 规格和容量一一对应
    * isDec  是否支持专属云。
    * attrs  规格的其他信息。
    * flavorsAvailableZones  有资源的可用区。
    * replicaCount  副本数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'specCode' => null,
        'cloudServiceTypeCode' => null,
        'cloudResourceTypeCode' => null,
        'cacheMode' => null,
        'engine' => null,
        'engineVersion' => null,
        'productType' => null,
        'cpuType' => null,
        'storageType' => null,
        'capacity' => null,
        'billingMode' => null,
        'tenantIpCount' => null,
        'pricingType' => null,
        'isDec' => null,
        'attrs' => null,
        'flavorsAvailableZones' => null,
        'replicaCount' => 'int32'
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
    * specCode  产品规格编码。
    * cloudServiceTypeCode  云服务类型编码。
    * cloudResourceTypeCode  云资源类型编码。
    * cacheMode  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 - ha_rw_split： 表示读写分离实例
    * engine  缓存引擎类型。
    * engineVersion  缓存版本，当缓存引擎为Redis时，取值为3.0、4.0或5.0。
    * productType  Redis缓存实例的产品类型。取值当前仅支持： generic：标准类型
    * cpuType  CPU架构类型。取值范围如下： - x86_64：X86架构 - aarch64: ARM架构
    * storageType  存储类型，取值当前仅支持： DRAM:内存存储
    * capacity  缓存容量（G Byte）。
    * billingMode  计费模式，取值范围如下： - Hourly：按需计费 - Monthly: 包月计费 - Yearly: 包周期计费
    * tenantIpCount  租户侧IP数量。
    * pricingType  定价类型，取值如下： - tier: 阶梯定价，一个规格对应多个容量 - normal: 规格和容量一一对应
    * isDec  是否支持专属云。
    * attrs  规格的其他信息。
    * flavorsAvailableZones  有资源的可用区。
    * replicaCount  副本数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'specCode' => 'spec_code',
            'cloudServiceTypeCode' => 'cloud_service_type_code',
            'cloudResourceTypeCode' => 'cloud_resource_type_code',
            'cacheMode' => 'cache_mode',
            'engine' => 'engine',
            'engineVersion' => 'engine_version',
            'productType' => 'product_type',
            'cpuType' => 'cpu_type',
            'storageType' => 'storage_type',
            'capacity' => 'capacity',
            'billingMode' => 'billing_mode',
            'tenantIpCount' => 'tenant_ip_count',
            'pricingType' => 'pricing_type',
            'isDec' => 'is_dec',
            'attrs' => 'attrs',
            'flavorsAvailableZones' => 'flavors_available_zones',
            'replicaCount' => 'replica_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * specCode  产品规格编码。
    * cloudServiceTypeCode  云服务类型编码。
    * cloudResourceTypeCode  云资源类型编码。
    * cacheMode  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 - ha_rw_split： 表示读写分离实例
    * engine  缓存引擎类型。
    * engineVersion  缓存版本，当缓存引擎为Redis时，取值为3.0、4.0或5.0。
    * productType  Redis缓存实例的产品类型。取值当前仅支持： generic：标准类型
    * cpuType  CPU架构类型。取值范围如下： - x86_64：X86架构 - aarch64: ARM架构
    * storageType  存储类型，取值当前仅支持： DRAM:内存存储
    * capacity  缓存容量（G Byte）。
    * billingMode  计费模式，取值范围如下： - Hourly：按需计费 - Monthly: 包月计费 - Yearly: 包周期计费
    * tenantIpCount  租户侧IP数量。
    * pricingType  定价类型，取值如下： - tier: 阶梯定价，一个规格对应多个容量 - normal: 规格和容量一一对应
    * isDec  是否支持专属云。
    * attrs  规格的其他信息。
    * flavorsAvailableZones  有资源的可用区。
    * replicaCount  副本数
    *
    * @var string[]
    */
    protected static $setters = [
            'specCode' => 'setSpecCode',
            'cloudServiceTypeCode' => 'setCloudServiceTypeCode',
            'cloudResourceTypeCode' => 'setCloudResourceTypeCode',
            'cacheMode' => 'setCacheMode',
            'engine' => 'setEngine',
            'engineVersion' => 'setEngineVersion',
            'productType' => 'setProductType',
            'cpuType' => 'setCpuType',
            'storageType' => 'setStorageType',
            'capacity' => 'setCapacity',
            'billingMode' => 'setBillingMode',
            'tenantIpCount' => 'setTenantIpCount',
            'pricingType' => 'setPricingType',
            'isDec' => 'setIsDec',
            'attrs' => 'setAttrs',
            'flavorsAvailableZones' => 'setFlavorsAvailableZones',
            'replicaCount' => 'setReplicaCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * specCode  产品规格编码。
    * cloudServiceTypeCode  云服务类型编码。
    * cloudResourceTypeCode  云资源类型编码。
    * cacheMode  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 - ha_rw_split： 表示读写分离实例
    * engine  缓存引擎类型。
    * engineVersion  缓存版本，当缓存引擎为Redis时，取值为3.0、4.0或5.0。
    * productType  Redis缓存实例的产品类型。取值当前仅支持： generic：标准类型
    * cpuType  CPU架构类型。取值范围如下： - x86_64：X86架构 - aarch64: ARM架构
    * storageType  存储类型，取值当前仅支持： DRAM:内存存储
    * capacity  缓存容量（G Byte）。
    * billingMode  计费模式，取值范围如下： - Hourly：按需计费 - Monthly: 包月计费 - Yearly: 包周期计费
    * tenantIpCount  租户侧IP数量。
    * pricingType  定价类型，取值如下： - tier: 阶梯定价，一个规格对应多个容量 - normal: 规格和容量一一对应
    * isDec  是否支持专属云。
    * attrs  规格的其他信息。
    * flavorsAvailableZones  有资源的可用区。
    * replicaCount  副本数
    *
    * @var string[]
    */
    protected static $getters = [
            'specCode' => 'getSpecCode',
            'cloudServiceTypeCode' => 'getCloudServiceTypeCode',
            'cloudResourceTypeCode' => 'getCloudResourceTypeCode',
            'cacheMode' => 'getCacheMode',
            'engine' => 'getEngine',
            'engineVersion' => 'getEngineVersion',
            'productType' => 'getProductType',
            'cpuType' => 'getCpuType',
            'storageType' => 'getStorageType',
            'capacity' => 'getCapacity',
            'billingMode' => 'getBillingMode',
            'tenantIpCount' => 'getTenantIpCount',
            'pricingType' => 'getPricingType',
            'isDec' => 'getIsDec',
            'attrs' => 'getAttrs',
            'flavorsAvailableZones' => 'getFlavorsAvailableZones',
            'replicaCount' => 'getReplicaCount'
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
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['cloudServiceTypeCode'] = isset($data['cloudServiceTypeCode']) ? $data['cloudServiceTypeCode'] : null;
        $this->container['cloudResourceTypeCode'] = isset($data['cloudResourceTypeCode']) ? $data['cloudResourceTypeCode'] : null;
        $this->container['cacheMode'] = isset($data['cacheMode']) ? $data['cacheMode'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['productType'] = isset($data['productType']) ? $data['productType'] : null;
        $this->container['cpuType'] = isset($data['cpuType']) ? $data['cpuType'] : null;
        $this->container['storageType'] = isset($data['storageType']) ? $data['storageType'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['billingMode'] = isset($data['billingMode']) ? $data['billingMode'] : null;
        $this->container['tenantIpCount'] = isset($data['tenantIpCount']) ? $data['tenantIpCount'] : null;
        $this->container['pricingType'] = isset($data['pricingType']) ? $data['pricingType'] : null;
        $this->container['isDec'] = isset($data['isDec']) ? $data['isDec'] : null;
        $this->container['attrs'] = isset($data['attrs']) ? $data['attrs'] : null;
        $this->container['flavorsAvailableZones'] = isset($data['flavorsAvailableZones']) ? $data['flavorsAvailableZones'] : null;
        $this->container['replicaCount'] = isset($data['replicaCount']) ? $data['replicaCount'] : null;
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
    * Gets specCode
    *  产品规格编码。
    *
    * @return string|null
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string|null $specCode 产品规格编码。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets cloudServiceTypeCode
    *  云服务类型编码。
    *
    * @return string|null
    */
    public function getCloudServiceTypeCode()
    {
        return $this->container['cloudServiceTypeCode'];
    }

    /**
    * Sets cloudServiceTypeCode
    *
    * @param string|null $cloudServiceTypeCode 云服务类型编码。
    *
    * @return $this
    */
    public function setCloudServiceTypeCode($cloudServiceTypeCode)
    {
        $this->container['cloudServiceTypeCode'] = $cloudServiceTypeCode;
        return $this;
    }

    /**
    * Gets cloudResourceTypeCode
    *  云资源类型编码。
    *
    * @return string|null
    */
    public function getCloudResourceTypeCode()
    {
        return $this->container['cloudResourceTypeCode'];
    }

    /**
    * Sets cloudResourceTypeCode
    *
    * @param string|null $cloudResourceTypeCode 云资源类型编码。
    *
    * @return $this
    */
    public function setCloudResourceTypeCode($cloudResourceTypeCode)
    {
        $this->container['cloudResourceTypeCode'] = $cloudResourceTypeCode;
        return $this;
    }

    /**
    * Gets cacheMode
    *  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 - ha_rw_split： 表示读写分离实例
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
    * @param string|null $cacheMode 缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 - ha_rw_split： 表示读写分离实例
    *
    * @return $this
    */
    public function setCacheMode($cacheMode)
    {
        $this->container['cacheMode'] = $cacheMode;
        return $this;
    }

    /**
    * Gets engine
    *  缓存引擎类型。
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
    * @param string|null $engine 缓存引擎类型。
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
    *  缓存版本，当缓存引擎为Redis时，取值为3.0、4.0或5.0。
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
    * @param string|null $engineVersion 缓存版本，当缓存引擎为Redis时，取值为3.0、4.0或5.0。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets productType
    *  Redis缓存实例的产品类型。取值当前仅支持： generic：标准类型
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
    * @param string|null $productType Redis缓存实例的产品类型。取值当前仅支持： generic：标准类型
    *
    * @return $this
    */
    public function setProductType($productType)
    {
        $this->container['productType'] = $productType;
        return $this;
    }

    /**
    * Gets cpuType
    *  CPU架构类型。取值范围如下： - x86_64：X86架构 - aarch64: ARM架构
    *
    * @return string|null
    */
    public function getCpuType()
    {
        return $this->container['cpuType'];
    }

    /**
    * Sets cpuType
    *
    * @param string|null $cpuType CPU架构类型。取值范围如下： - x86_64：X86架构 - aarch64: ARM架构
    *
    * @return $this
    */
    public function setCpuType($cpuType)
    {
        $this->container['cpuType'] = $cpuType;
        return $this;
    }

    /**
    * Gets storageType
    *  存储类型，取值当前仅支持： DRAM:内存存储
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
    * @param string|null $storageType 存储类型，取值当前仅支持： DRAM:内存存储
    *
    * @return $this
    */
    public function setStorageType($storageType)
    {
        $this->container['storageType'] = $storageType;
        return $this;
    }

    /**
    * Gets capacity
    *  缓存容量（G Byte）。
    *
    * @return string[]|null
    */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
    * Sets capacity
    *
    * @param string[]|null $capacity 缓存容量（G Byte）。
    *
    * @return $this
    */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;
        return $this;
    }

    /**
    * Gets billingMode
    *  计费模式，取值范围如下： - Hourly：按需计费 - Monthly: 包月计费 - Yearly: 包周期计费
    *
    * @return string[]|null
    */
    public function getBillingMode()
    {
        return $this->container['billingMode'];
    }

    /**
    * Sets billingMode
    *
    * @param string[]|null $billingMode 计费模式，取值范围如下： - Hourly：按需计费 - Monthly: 包月计费 - Yearly: 包周期计费
    *
    * @return $this
    */
    public function setBillingMode($billingMode)
    {
        $this->container['billingMode'] = $billingMode;
        return $this;
    }

    /**
    * Gets tenantIpCount
    *  租户侧IP数量。
    *
    * @return int|null
    */
    public function getTenantIpCount()
    {
        return $this->container['tenantIpCount'];
    }

    /**
    * Sets tenantIpCount
    *
    * @param int|null $tenantIpCount 租户侧IP数量。
    *
    * @return $this
    */
    public function setTenantIpCount($tenantIpCount)
    {
        $this->container['tenantIpCount'] = $tenantIpCount;
        return $this;
    }

    /**
    * Gets pricingType
    *  定价类型，取值如下： - tier: 阶梯定价，一个规格对应多个容量 - normal: 规格和容量一一对应
    *
    * @return string|null
    */
    public function getPricingType()
    {
        return $this->container['pricingType'];
    }

    /**
    * Sets pricingType
    *
    * @param string|null $pricingType 定价类型，取值如下： - tier: 阶梯定价，一个规格对应多个容量 - normal: 规格和容量一一对应
    *
    * @return $this
    */
    public function setPricingType($pricingType)
    {
        $this->container['pricingType'] = $pricingType;
        return $this;
    }

    /**
    * Gets isDec
    *  是否支持专属云。
    *
    * @return bool|null
    */
    public function getIsDec()
    {
        return $this->container['isDec'];
    }

    /**
    * Sets isDec
    *
    * @param bool|null $isDec 是否支持专属云。
    *
    * @return $this
    */
    public function setIsDec($isDec)
    {
        $this->container['isDec'] = $isDec;
        return $this;
    }

    /**
    * Gets attrs
    *  规格的其他信息。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\AttrsObject[]|null
    */
    public function getAttrs()
    {
        return $this->container['attrs'];
    }

    /**
    * Sets attrs
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\AttrsObject[]|null $attrs 规格的其他信息。
    *
    * @return $this
    */
    public function setAttrs($attrs)
    {
        $this->container['attrs'] = $attrs;
        return $this;
    }

    /**
    * Gets flavorsAvailableZones
    *  有资源的可用区。
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\FlavorAzObject[]|null
    */
    public function getFlavorsAvailableZones()
    {
        return $this->container['flavorsAvailableZones'];
    }

    /**
    * Sets flavorsAvailableZones
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\FlavorAzObject[]|null $flavorsAvailableZones 有资源的可用区。
    *
    * @return $this
    */
    public function setFlavorsAvailableZones($flavorsAvailableZones)
    {
        $this->container['flavorsAvailableZones'] = $flavorsAvailableZones;
        return $this;
    }

    /**
    * Gets replicaCount
    *  副本数
    *
    * @return int|null
    */
    public function getReplicaCount()
    {
        return $this->container['replicaCount'];
    }

    /**
    * Sets replicaCount
    *
    * @param int|null $replicaCount 副本数
    *
    * @return $this
    */
    public function setReplicaCount($replicaCount)
    {
        $this->container['replicaCount'] = $replicaCount;
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

