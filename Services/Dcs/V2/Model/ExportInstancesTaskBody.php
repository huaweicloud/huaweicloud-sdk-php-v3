<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportInstancesTaskBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportInstancesTaskBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * includedInstances  导出实例列表，如果为空，则会导出满足其余参数条件的所有实例
    * region  局点名称，用于导出的文件名命名
    * name  按照实例名称筛选实例
    * capacity  按照实例规格筛选实例
    * instanceId  按照实例ID筛选实例
    * ip  按照ip筛选实例
    * availableZone  按照可用区筛选实例
    * status  按照实例状态筛选实例
    * productType  按照产品类型筛选实例，generic-普通版本，enterprise-企业版
    * cacheMode  按照实例类型筛选实例
    * engine  按照缓存引擎筛选实例
    * engineVersion  按照缓存引擎版本筛选实例
    * cpuType  按照CPU类型筛选实例
    * enterpriseProjectId  按照企业项目ID筛选实例
    * chargingMode  按照计费方式筛选实例
    * tags  按照标签筛选实例
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'includedInstances' => 'string[]',
            'region' => 'string',
            'name' => 'string',
            'capacity' => 'string',
            'instanceId' => 'string',
            'ip' => 'string',
            'availableZone' => 'string',
            'status' => 'string',
            'productType' => 'string',
            'cacheMode' => 'string',
            'engine' => 'string',
            'engineVersion' => 'string',
            'cpuType' => 'string',
            'enterpriseProjectId' => 'string',
            'chargingMode' => 'string',
            'tags' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * includedInstances  导出实例列表，如果为空，则会导出满足其余参数条件的所有实例
    * region  局点名称，用于导出的文件名命名
    * name  按照实例名称筛选实例
    * capacity  按照实例规格筛选实例
    * instanceId  按照实例ID筛选实例
    * ip  按照ip筛选实例
    * availableZone  按照可用区筛选实例
    * status  按照实例状态筛选实例
    * productType  按照产品类型筛选实例，generic-普通版本，enterprise-企业版
    * cacheMode  按照实例类型筛选实例
    * engine  按照缓存引擎筛选实例
    * engineVersion  按照缓存引擎版本筛选实例
    * cpuType  按照CPU类型筛选实例
    * enterpriseProjectId  按照企业项目ID筛选实例
    * chargingMode  按照计费方式筛选实例
    * tags  按照标签筛选实例
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'includedInstances' => null,
        'region' => null,
        'name' => null,
        'capacity' => null,
        'instanceId' => null,
        'ip' => null,
        'availableZone' => null,
        'status' => null,
        'productType' => null,
        'cacheMode' => null,
        'engine' => null,
        'engineVersion' => null,
        'cpuType' => null,
        'enterpriseProjectId' => null,
        'chargingMode' => null,
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
    * includedInstances  导出实例列表，如果为空，则会导出满足其余参数条件的所有实例
    * region  局点名称，用于导出的文件名命名
    * name  按照实例名称筛选实例
    * capacity  按照实例规格筛选实例
    * instanceId  按照实例ID筛选实例
    * ip  按照ip筛选实例
    * availableZone  按照可用区筛选实例
    * status  按照实例状态筛选实例
    * productType  按照产品类型筛选实例，generic-普通版本，enterprise-企业版
    * cacheMode  按照实例类型筛选实例
    * engine  按照缓存引擎筛选实例
    * engineVersion  按照缓存引擎版本筛选实例
    * cpuType  按照CPU类型筛选实例
    * enterpriseProjectId  按照企业项目ID筛选实例
    * chargingMode  按照计费方式筛选实例
    * tags  按照标签筛选实例
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'includedInstances' => 'included_instances',
            'region' => 'region',
            'name' => 'name',
            'capacity' => 'capacity',
            'instanceId' => 'instance_id',
            'ip' => 'ip',
            'availableZone' => 'available_zone',
            'status' => 'status',
            'productType' => 'product_type',
            'cacheMode' => 'cache_mode',
            'engine' => 'engine',
            'engineVersion' => 'engine_version',
            'cpuType' => 'cpu_type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'chargingMode' => 'charging_mode',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * includedInstances  导出实例列表，如果为空，则会导出满足其余参数条件的所有实例
    * region  局点名称，用于导出的文件名命名
    * name  按照实例名称筛选实例
    * capacity  按照实例规格筛选实例
    * instanceId  按照实例ID筛选实例
    * ip  按照ip筛选实例
    * availableZone  按照可用区筛选实例
    * status  按照实例状态筛选实例
    * productType  按照产品类型筛选实例，generic-普通版本，enterprise-企业版
    * cacheMode  按照实例类型筛选实例
    * engine  按照缓存引擎筛选实例
    * engineVersion  按照缓存引擎版本筛选实例
    * cpuType  按照CPU类型筛选实例
    * enterpriseProjectId  按照企业项目ID筛选实例
    * chargingMode  按照计费方式筛选实例
    * tags  按照标签筛选实例
    *
    * @var string[]
    */
    protected static $setters = [
            'includedInstances' => 'setIncludedInstances',
            'region' => 'setRegion',
            'name' => 'setName',
            'capacity' => 'setCapacity',
            'instanceId' => 'setInstanceId',
            'ip' => 'setIp',
            'availableZone' => 'setAvailableZone',
            'status' => 'setStatus',
            'productType' => 'setProductType',
            'cacheMode' => 'setCacheMode',
            'engine' => 'setEngine',
            'engineVersion' => 'setEngineVersion',
            'cpuType' => 'setCpuType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'chargingMode' => 'setChargingMode',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * includedInstances  导出实例列表，如果为空，则会导出满足其余参数条件的所有实例
    * region  局点名称，用于导出的文件名命名
    * name  按照实例名称筛选实例
    * capacity  按照实例规格筛选实例
    * instanceId  按照实例ID筛选实例
    * ip  按照ip筛选实例
    * availableZone  按照可用区筛选实例
    * status  按照实例状态筛选实例
    * productType  按照产品类型筛选实例，generic-普通版本，enterprise-企业版
    * cacheMode  按照实例类型筛选实例
    * engine  按照缓存引擎筛选实例
    * engineVersion  按照缓存引擎版本筛选实例
    * cpuType  按照CPU类型筛选实例
    * enterpriseProjectId  按照企业项目ID筛选实例
    * chargingMode  按照计费方式筛选实例
    * tags  按照标签筛选实例
    *
    * @var string[]
    */
    protected static $getters = [
            'includedInstances' => 'getIncludedInstances',
            'region' => 'getRegion',
            'name' => 'getName',
            'capacity' => 'getCapacity',
            'instanceId' => 'getInstanceId',
            'ip' => 'getIp',
            'availableZone' => 'getAvailableZone',
            'status' => 'getStatus',
            'productType' => 'getProductType',
            'cacheMode' => 'getCacheMode',
            'engine' => 'getEngine',
            'engineVersion' => 'getEngineVersion',
            'cpuType' => 'getCpuType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'chargingMode' => 'getChargingMode',
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
    const PRODUCT_TYPE_GENERIC = 'generic';
    const PRODUCT_TYPE_ENTERPRISE = 'enterprise';
    

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
        $this->container['includedInstances'] = isset($data['includedInstances']) ? $data['includedInstances'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['availableZone'] = isset($data['availableZone']) ? $data['availableZone'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['productType'] = isset($data['productType']) ? $data['productType'] : null;
        $this->container['cacheMode'] = isset($data['cacheMode']) ? $data['cacheMode'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['cpuType'] = isset($data['cpuType']) ? $data['cpuType'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
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
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
            $allowedValues = $this->getProductTypeAllowableValues();
                if (!is_null($this->container['productType']) && !in_array($this->container['productType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'productType', must be one of '%s'",
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
    * Gets includedInstances
    *  导出实例列表，如果为空，则会导出满足其余参数条件的所有实例
    *
    * @return string[]|null
    */
    public function getIncludedInstances()
    {
        return $this->container['includedInstances'];
    }

    /**
    * Sets includedInstances
    *
    * @param string[]|null $includedInstances 导出实例列表，如果为空，则会导出满足其余参数条件的所有实例
    *
    * @return $this
    */
    public function setIncludedInstances($includedInstances)
    {
        $this->container['includedInstances'] = $includedInstances;
        return $this;
    }

    /**
    * Gets region
    *  局点名称，用于导出的文件名命名
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region 局点名称，用于导出的文件名命名
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets name
    *  按照实例名称筛选实例
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
    * @param string|null $name 按照实例名称筛选实例
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets capacity
    *  按照实例规格筛选实例
    *
    * @return string|null
    */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
    * Sets capacity
    *
    * @param string|null $capacity 按照实例规格筛选实例
    *
    * @return $this
    */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;
        return $this;
    }

    /**
    * Gets instanceId
    *  按照实例ID筛选实例
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 按照实例ID筛选实例
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets ip
    *  按照ip筛选实例
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip 按照ip筛选实例
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets availableZone
    *  按照可用区筛选实例
    *
    * @return string|null
    */
    public function getAvailableZone()
    {
        return $this->container['availableZone'];
    }

    /**
    * Sets availableZone
    *
    * @param string|null $availableZone 按照可用区筛选实例
    *
    * @return $this
    */
    public function setAvailableZone($availableZone)
    {
        $this->container['availableZone'] = $availableZone;
        return $this;
    }

    /**
    * Gets status
    *  按照实例状态筛选实例
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 按照实例状态筛选实例
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets productType
    *  按照产品类型筛选实例，generic-普通版本，enterprise-企业版
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
    * @param string|null $productType 按照产品类型筛选实例，generic-普通版本，enterprise-企业版
    *
    * @return $this
    */
    public function setProductType($productType)
    {
        $this->container['productType'] = $productType;
        return $this;
    }

    /**
    * Gets cacheMode
    *  按照实例类型筛选实例
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
    * @param string|null $cacheMode 按照实例类型筛选实例
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
    *  按照缓存引擎筛选实例
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
    * @param string|null $engine 按照缓存引擎筛选实例
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
    *  按照缓存引擎版本筛选实例
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
    * @param string|null $engineVersion 按照缓存引擎版本筛选实例
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets cpuType
    *  按照CPU类型筛选实例
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
    * @param string|null $cpuType 按照CPU类型筛选实例
    *
    * @return $this
    */
    public function setCpuType($cpuType)
    {
        $this->container['cpuType'] = $cpuType;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  按照企业项目ID筛选实例
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 按照企业项目ID筛选实例
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets chargingMode
    *  按照计费方式筛选实例
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode 按照计费方式筛选实例
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets tags
    *  按照标签筛选实例
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags 按照标签筛选实例
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

