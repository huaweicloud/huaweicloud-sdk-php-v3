<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowClusterSupportConfigurationRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowClusterSupportConfigurationRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * clusterType  集群类型，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * clusterVersion  集群版本，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * networkMode  集群网络类型，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'clusterType' => 'string',
            'clusterVersion' => 'string',
            'networkMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * clusterType  集群类型，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * clusterVersion  集群版本，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * networkMode  集群网络类型，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'clusterType' => null,
        'clusterVersion' => null,
        'networkMode' => null
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
    * clusterId  集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * clusterType  集群类型，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * clusterVersion  集群版本，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * networkMode  集群网络类型，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'clusterType' => 'cluster_type',
            'clusterVersion' => 'cluster_version',
            'networkMode' => 'network_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * clusterType  集群类型，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * clusterVersion  集群版本，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * networkMode  集群网络类型，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'clusterType' => 'setClusterType',
            'clusterVersion' => 'setClusterVersion',
            'networkMode' => 'setNetworkMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * clusterType  集群类型，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * clusterVersion  集群版本，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    * networkMode  集群网络类型，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'clusterType' => 'getClusterType',
            'clusterVersion' => 'getClusterVersion',
            'networkMode' => 'getNetworkMode'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['clusterVersion'] = isset($data['clusterVersion']) ? $data['clusterVersion'] : null;
        $this->container['networkMode'] = isset($data['networkMode']) ? $data['networkMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
            if (!preg_match("/^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/", $this->container['clusterId'])) {
                $invalidProperties[] = "invalid value for 'clusterId', must be conform to the pattern /^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/.";
            }
        if ($this->container['clusterType'] === null) {
            $invalidProperties[] = "'clusterType' can't be null";
        }
        if ($this->container['clusterVersion'] === null) {
            $invalidProperties[] = "'clusterVersion' can't be null";
        }
        if ($this->container['networkMode'] === null) {
            $invalidProperties[] = "'networkMode' can't be null";
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
    * Gets clusterId
    *  集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId 集群ID，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterType
    *  集群类型，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    *
    * @return string
    */
    public function getClusterType()
    {
        return $this->container['clusterType'];
    }

    /**
    * Sets clusterType
    *
    * @param string $clusterType 集群类型，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
        return $this;
    }

    /**
    * Gets clusterVersion
    *  集群版本，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    *
    * @return string
    */
    public function getClusterVersion()
    {
        return $this->container['clusterVersion'];
    }

    /**
    * Sets clusterVersion
    *
    * @param string $clusterVersion 集群版本，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    *
    * @return $this
    */
    public function setClusterVersion($clusterVersion)
    {
        $this->container['clusterVersion'] = $clusterVersion;
        return $this;
    }

    /**
    * Gets networkMode
    *  集群网络类型，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    *
    * @return string
    */
    public function getNetworkMode()
    {
        return $this->container['networkMode'];
    }

    /**
    * Sets networkMode
    *
    * @param string $networkMode 集群网络类型，获取方式请参见[如何获取接口URI中参数](cce_02_0271.xml)。
    *
    * @return $this
    */
    public function setNetworkMode($networkMode)
    {
        $this->container['networkMode'] = $networkMode;
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

