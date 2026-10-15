<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReplaySourceConfigResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReplaySourceConfigResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engineType  流量回放源数据库引擎类型
    * sourceEndpointType  流量回放源数据库类型
    * sourceDbOrigin  流量回放源数据库来源
    * trafficSource  流量回放流量文件来源
    * supportTrafficTypes  流量回放流量类型
    * supportOsTypes  流量回放agent支持的操作系统
    * supportMirrorDatabaseTypes  流量回放引擎支持的镜像库
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engineType' => 'string',
            'sourceEndpointType' => 'string',
            'sourceDbOrigin' => 'string',
            'trafficSource' => 'string',
            'supportTrafficTypes' => 'string[]',
            'supportOsTypes' => 'string[]',
            'supportMirrorDatabaseTypes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engineType  流量回放源数据库引擎类型
    * sourceEndpointType  流量回放源数据库类型
    * sourceDbOrigin  流量回放源数据库来源
    * trafficSource  流量回放流量文件来源
    * supportTrafficTypes  流量回放流量类型
    * supportOsTypes  流量回放agent支持的操作系统
    * supportMirrorDatabaseTypes  流量回放引擎支持的镜像库
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engineType' => null,
        'sourceEndpointType' => null,
        'sourceDbOrigin' => null,
        'trafficSource' => null,
        'supportTrafficTypes' => null,
        'supportOsTypes' => null,
        'supportMirrorDatabaseTypes' => null
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
    * engineType  流量回放源数据库引擎类型
    * sourceEndpointType  流量回放源数据库类型
    * sourceDbOrigin  流量回放源数据库来源
    * trafficSource  流量回放流量文件来源
    * supportTrafficTypes  流量回放流量类型
    * supportOsTypes  流量回放agent支持的操作系统
    * supportMirrorDatabaseTypes  流量回放引擎支持的镜像库
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engineType' => 'engine_type',
            'sourceEndpointType' => 'source_endpoint_type',
            'sourceDbOrigin' => 'source_db_origin',
            'trafficSource' => 'traffic_source',
            'supportTrafficTypes' => 'support_traffic_types',
            'supportOsTypes' => 'support_os_types',
            'supportMirrorDatabaseTypes' => 'support_mirror_database_types'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engineType  流量回放源数据库引擎类型
    * sourceEndpointType  流量回放源数据库类型
    * sourceDbOrigin  流量回放源数据库来源
    * trafficSource  流量回放流量文件来源
    * supportTrafficTypes  流量回放流量类型
    * supportOsTypes  流量回放agent支持的操作系统
    * supportMirrorDatabaseTypes  流量回放引擎支持的镜像库
    *
    * @var string[]
    */
    protected static $setters = [
            'engineType' => 'setEngineType',
            'sourceEndpointType' => 'setSourceEndpointType',
            'sourceDbOrigin' => 'setSourceDbOrigin',
            'trafficSource' => 'setTrafficSource',
            'supportTrafficTypes' => 'setSupportTrafficTypes',
            'supportOsTypes' => 'setSupportOsTypes',
            'supportMirrorDatabaseTypes' => 'setSupportMirrorDatabaseTypes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engineType  流量回放源数据库引擎类型
    * sourceEndpointType  流量回放源数据库类型
    * sourceDbOrigin  流量回放源数据库来源
    * trafficSource  流量回放流量文件来源
    * supportTrafficTypes  流量回放流量类型
    * supportOsTypes  流量回放agent支持的操作系统
    * supportMirrorDatabaseTypes  流量回放引擎支持的镜像库
    *
    * @var string[]
    */
    protected static $getters = [
            'engineType' => 'getEngineType',
            'sourceEndpointType' => 'getSourceEndpointType',
            'sourceDbOrigin' => 'getSourceDbOrigin',
            'trafficSource' => 'getTrafficSource',
            'supportTrafficTypes' => 'getSupportTrafficTypes',
            'supportOsTypes' => 'getSupportOsTypes',
            'supportMirrorDatabaseTypes' => 'getSupportMirrorDatabaseTypes'
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
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['sourceEndpointType'] = isset($data['sourceEndpointType']) ? $data['sourceEndpointType'] : null;
        $this->container['sourceDbOrigin'] = isset($data['sourceDbOrigin']) ? $data['sourceDbOrigin'] : null;
        $this->container['trafficSource'] = isset($data['trafficSource']) ? $data['trafficSource'] : null;
        $this->container['supportTrafficTypes'] = isset($data['supportTrafficTypes']) ? $data['supportTrafficTypes'] : null;
        $this->container['supportOsTypes'] = isset($data['supportOsTypes']) ? $data['supportOsTypes'] : null;
        $this->container['supportMirrorDatabaseTypes'] = isset($data['supportMirrorDatabaseTypes']) ? $data['supportMirrorDatabaseTypes'] : null;
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
    * Gets engineType
    *  流量回放源数据库引擎类型
    *
    * @return string|null
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string|null $engineType 流量回放源数据库引擎类型
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets sourceEndpointType
    *  流量回放源数据库类型
    *
    * @return string|null
    */
    public function getSourceEndpointType()
    {
        return $this->container['sourceEndpointType'];
    }

    /**
    * Sets sourceEndpointType
    *
    * @param string|null $sourceEndpointType 流量回放源数据库类型
    *
    * @return $this
    */
    public function setSourceEndpointType($sourceEndpointType)
    {
        $this->container['sourceEndpointType'] = $sourceEndpointType;
        return $this;
    }

    /**
    * Gets sourceDbOrigin
    *  流量回放源数据库来源
    *
    * @return string|null
    */
    public function getSourceDbOrigin()
    {
        return $this->container['sourceDbOrigin'];
    }

    /**
    * Sets sourceDbOrigin
    *
    * @param string|null $sourceDbOrigin 流量回放源数据库来源
    *
    * @return $this
    */
    public function setSourceDbOrigin($sourceDbOrigin)
    {
        $this->container['sourceDbOrigin'] = $sourceDbOrigin;
        return $this;
    }

    /**
    * Gets trafficSource
    *  流量回放流量文件来源
    *
    * @return string|null
    */
    public function getTrafficSource()
    {
        return $this->container['trafficSource'];
    }

    /**
    * Sets trafficSource
    *
    * @param string|null $trafficSource 流量回放流量文件来源
    *
    * @return $this
    */
    public function setTrafficSource($trafficSource)
    {
        $this->container['trafficSource'] = $trafficSource;
        return $this;
    }

    /**
    * Gets supportTrafficTypes
    *  流量回放流量类型
    *
    * @return string[]|null
    */
    public function getSupportTrafficTypes()
    {
        return $this->container['supportTrafficTypes'];
    }

    /**
    * Sets supportTrafficTypes
    *
    * @param string[]|null $supportTrafficTypes 流量回放流量类型
    *
    * @return $this
    */
    public function setSupportTrafficTypes($supportTrafficTypes)
    {
        $this->container['supportTrafficTypes'] = $supportTrafficTypes;
        return $this;
    }

    /**
    * Gets supportOsTypes
    *  流量回放agent支持的操作系统
    *
    * @return string[]|null
    */
    public function getSupportOsTypes()
    {
        return $this->container['supportOsTypes'];
    }

    /**
    * Sets supportOsTypes
    *
    * @param string[]|null $supportOsTypes 流量回放agent支持的操作系统
    *
    * @return $this
    */
    public function setSupportOsTypes($supportOsTypes)
    {
        $this->container['supportOsTypes'] = $supportOsTypes;
        return $this;
    }

    /**
    * Gets supportMirrorDatabaseTypes
    *  流量回放引擎支持的镜像库
    *
    * @return string[]|null
    */
    public function getSupportMirrorDatabaseTypes()
    {
        return $this->container['supportMirrorDatabaseTypes'];
    }

    /**
    * Sets supportMirrorDatabaseTypes
    *
    * @param string[]|null $supportMirrorDatabaseTypes 流量回放引擎支持的镜像库
    *
    * @return $this
    */
    public function setSupportMirrorDatabaseTypes($supportMirrorDatabaseTypes)
    {
        $this->container['supportMirrorDatabaseTypes'] = $supportMirrorDatabaseTypes;
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

