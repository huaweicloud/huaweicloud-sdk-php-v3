<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFlavorsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFlavorsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  缓存实例ID，根据该字段可查询出实例可变更的规格
    * specCode  产品规格编码。
    * cacheMode  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 - ha_rw_split： 表示读写分离实例
    * engine  缓存引擎类型。取值范围如下： - Redis - Memcached
    * engineVersion  缓存版本，当缓存引擎为Redis时，取值范围如下： - 3.0 - 4.0 - 5.0
    * cpuType  CPU架构类型。取值范围如下： - x86_64：X86架构 - aarch64：ARM架构
    * capacity  缓存容量（G Byte）。 - Redis3.0：单机和主备类型实例取值：2、4、8、16、32、64。Proxy集群实例规格支持64、128、256、512和1024。 - Redis4.0和Redis5.0：单机和主备类型实例取值：0.125、0.25、0.5、1、2、4、8、16、32、64。Cluster集群实例规格支持24、32、48、64、96、128、192、256、384、512、768、1024。 - Memcached：单机和主备类型实例取值：2、4、8、16、32、64。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'specCode' => 'string',
            'cacheMode' => 'string',
            'engine' => 'string',
            'engineVersion' => 'string',
            'cpuType' => 'string',
            'capacity' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  缓存实例ID，根据该字段可查询出实例可变更的规格
    * specCode  产品规格编码。
    * cacheMode  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 - ha_rw_split： 表示读写分离实例
    * engine  缓存引擎类型。取值范围如下： - Redis - Memcached
    * engineVersion  缓存版本，当缓存引擎为Redis时，取值范围如下： - 3.0 - 4.0 - 5.0
    * cpuType  CPU架构类型。取值范围如下： - x86_64：X86架构 - aarch64：ARM架构
    * capacity  缓存容量（G Byte）。 - Redis3.0：单机和主备类型实例取值：2、4、8、16、32、64。Proxy集群实例规格支持64、128、256、512和1024。 - Redis4.0和Redis5.0：单机和主备类型实例取值：0.125、0.25、0.5、1、2、4、8、16、32、64。Cluster集群实例规格支持24、32、48、64、96、128、192、256、384、512、768、1024。 - Memcached：单机和主备类型实例取值：2、4、8、16、32、64。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'specCode' => null,
        'cacheMode' => null,
        'engine' => null,
        'engineVersion' => null,
        'cpuType' => null,
        'capacity' => null
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
    * instanceId  缓存实例ID，根据该字段可查询出实例可变更的规格
    * specCode  产品规格编码。
    * cacheMode  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 - ha_rw_split： 表示读写分离实例
    * engine  缓存引擎类型。取值范围如下： - Redis - Memcached
    * engineVersion  缓存版本，当缓存引擎为Redis时，取值范围如下： - 3.0 - 4.0 - 5.0
    * cpuType  CPU架构类型。取值范围如下： - x86_64：X86架构 - aarch64：ARM架构
    * capacity  缓存容量（G Byte）。 - Redis3.0：单机和主备类型实例取值：2、4、8、16、32、64。Proxy集群实例规格支持64、128、256、512和1024。 - Redis4.0和Redis5.0：单机和主备类型实例取值：0.125、0.25、0.5、1、2、4、8、16、32、64。Cluster集群实例规格支持24、32、48、64、96、128、192、256、384、512、768、1024。 - Memcached：单机和主备类型实例取值：2、4、8、16、32、64。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'specCode' => 'spec_code',
            'cacheMode' => 'cache_mode',
            'engine' => 'engine',
            'engineVersion' => 'engine_version',
            'cpuType' => 'cpu_type',
            'capacity' => 'capacity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  缓存实例ID，根据该字段可查询出实例可变更的规格
    * specCode  产品规格编码。
    * cacheMode  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 - ha_rw_split： 表示读写分离实例
    * engine  缓存引擎类型。取值范围如下： - Redis - Memcached
    * engineVersion  缓存版本，当缓存引擎为Redis时，取值范围如下： - 3.0 - 4.0 - 5.0
    * cpuType  CPU架构类型。取值范围如下： - x86_64：X86架构 - aarch64：ARM架构
    * capacity  缓存容量（G Byte）。 - Redis3.0：单机和主备类型实例取值：2、4、8、16、32、64。Proxy集群实例规格支持64、128、256、512和1024。 - Redis4.0和Redis5.0：单机和主备类型实例取值：0.125、0.25、0.5、1、2、4、8、16、32、64。Cluster集群实例规格支持24、32、48、64、96、128、192、256、384、512、768、1024。 - Memcached：单机和主备类型实例取值：2、4、8、16、32、64。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'specCode' => 'setSpecCode',
            'cacheMode' => 'setCacheMode',
            'engine' => 'setEngine',
            'engineVersion' => 'setEngineVersion',
            'cpuType' => 'setCpuType',
            'capacity' => 'setCapacity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  缓存实例ID，根据该字段可查询出实例可变更的规格
    * specCode  产品规格编码。
    * cacheMode  缓存实例类型。取值范围如下： - single：表示单机实例 - ha：表示主备实例 - cluster：表示cluster集群实例 - proxy：表示Proxy集群实例 - ha_rw_split： 表示读写分离实例
    * engine  缓存引擎类型。取值范围如下： - Redis - Memcached
    * engineVersion  缓存版本，当缓存引擎为Redis时，取值范围如下： - 3.0 - 4.0 - 5.0
    * cpuType  CPU架构类型。取值范围如下： - x86_64：X86架构 - aarch64：ARM架构
    * capacity  缓存容量（G Byte）。 - Redis3.0：单机和主备类型实例取值：2、4、8、16、32、64。Proxy集群实例规格支持64、128、256、512和1024。 - Redis4.0和Redis5.0：单机和主备类型实例取值：0.125、0.25、0.5、1、2、4、8、16、32、64。Cluster集群实例规格支持24、32、48、64、96、128、192、256、384、512、768、1024。 - Memcached：单机和主备类型实例取值：2、4、8、16、32、64。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'specCode' => 'getSpecCode',
            'cacheMode' => 'getCacheMode',
            'engine' => 'getEngine',
            'engineVersion' => 'getEngineVersion',
            'cpuType' => 'getCpuType',
            'capacity' => 'getCapacity'
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
    const CPU_TYPE_X86_64 = 'x86_64';
    const CPU_TYPE_AARCH64 = 'aarch64';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCpuTypeAllowableValues()
    {
        return [
            self::CPU_TYPE_X86_64,
            self::CPU_TYPE_AARCH64,
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['cacheMode'] = isset($data['cacheMode']) ? $data['cacheMode'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['cpuType'] = isset($data['cpuType']) ? $data['cpuType'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCpuTypeAllowableValues();
                if (!is_null($this->container['cpuType']) && !in_array($this->container['cpuType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'cpuType', must be one of '%s'",
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
    * Gets instanceId
    *  缓存实例ID，根据该字段可查询出实例可变更的规格
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
    * @param string|null $instanceId 缓存实例ID，根据该字段可查询出实例可变更的规格
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
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
    *  缓存引擎类型。取值范围如下： - Redis - Memcached
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
    * @param string|null $engine 缓存引擎类型。取值范围如下： - Redis - Memcached
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
    *  缓存版本，当缓存引擎为Redis时，取值范围如下： - 3.0 - 4.0 - 5.0
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
    * @param string|null $engineVersion 缓存版本，当缓存引擎为Redis时，取值范围如下： - 3.0 - 4.0 - 5.0
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
    *  CPU架构类型。取值范围如下： - x86_64：X86架构 - aarch64：ARM架构
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
    * @param string|null $cpuType CPU架构类型。取值范围如下： - x86_64：X86架构 - aarch64：ARM架构
    *
    * @return $this
    */
    public function setCpuType($cpuType)
    {
        $this->container['cpuType'] = $cpuType;
        return $this;
    }

    /**
    * Gets capacity
    *  缓存容量（G Byte）。 - Redis3.0：单机和主备类型实例取值：2、4、8、16、32、64。Proxy集群实例规格支持64、128、256、512和1024。 - Redis4.0和Redis5.0：单机和主备类型实例取值：0.125、0.25、0.5、1、2、4、8、16、32、64。Cluster集群实例规格支持24、32、48、64、96、128、192、256、384、512、768、1024。 - Memcached：单机和主备类型实例取值：2、4、8、16、32、64。
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
    * @param string|null $capacity 缓存容量（G Byte）。 - Redis3.0：单机和主备类型实例取值：2、4、8、16、32、64。Proxy集群实例规格支持64、128、256、512和1024。 - Redis4.0和Redis5.0：单机和主备类型实例取值：0.125、0.25、0.5、1、2、4、8、16、32、64。Cluster集群实例规格支持24、32、48、64、96、128、192、256、384、512、768、1024。 - Memcached：单机和主备类型实例取值：2、4、8、16、32、64。
    *
    * @return $this
    */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;
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

