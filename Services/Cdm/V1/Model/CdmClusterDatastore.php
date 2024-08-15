<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CdmClusterDatastore implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CdmClusterDatastore';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  服务ID，用于区分不同服务。
    * name  服务名称。
    * bigclusterEnable  是否支持大规格集群。
    * defaultVersion  默认版本。
    * versions  版本。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'bigclusterEnable' => 'bool',
            'defaultVersion' => 'string',
            'versions' => '\HuaweiCloud\SDK\Cdm\V1\Model\CdmClusterVersion[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  服务ID，用于区分不同服务。
    * name  服务名称。
    * bigclusterEnable  是否支持大规格集群。
    * defaultVersion  默认版本。
    * versions  版本。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'bigclusterEnable' => null,
        'defaultVersion' => null,
        'versions' => null
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
    * id  服务ID，用于区分不同服务。
    * name  服务名称。
    * bigclusterEnable  是否支持大规格集群。
    * defaultVersion  默认版本。
    * versions  版本。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'bigclusterEnable' => 'bigclusterEnable',
            'defaultVersion' => 'defaultVersion',
            'versions' => 'versions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  服务ID，用于区分不同服务。
    * name  服务名称。
    * bigclusterEnable  是否支持大规格集群。
    * defaultVersion  默认版本。
    * versions  版本。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'bigclusterEnable' => 'setBigclusterEnable',
            'defaultVersion' => 'setDefaultVersion',
            'versions' => 'setVersions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  服务ID，用于区分不同服务。
    * name  服务名称。
    * bigclusterEnable  是否支持大规格集群。
    * defaultVersion  默认版本。
    * versions  版本。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'bigclusterEnable' => 'getBigclusterEnable',
            'defaultVersion' => 'getDefaultVersion',
            'versions' => 'getVersions'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['bigclusterEnable'] = isset($data['bigclusterEnable']) ? $data['bigclusterEnable'] : null;
        $this->container['defaultVersion'] = isset($data['defaultVersion']) ? $data['defaultVersion'] : null;
        $this->container['versions'] = isset($data['versions']) ? $data['versions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['bigclusterEnable'] === null) {
            $invalidProperties[] = "'bigclusterEnable' can't be null";
        }
        if ($this->container['defaultVersion'] === null) {
            $invalidProperties[] = "'defaultVersion' can't be null";
        }
        if ($this->container['versions'] === null) {
            $invalidProperties[] = "'versions' can't be null";
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
    * Gets id
    *  服务ID，用于区分不同服务。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 服务ID，用于区分不同服务。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  服务名称。
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
    * @param string $name 服务名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets bigclusterEnable
    *  是否支持大规格集群。
    *
    * @return bool
    */
    public function getBigclusterEnable()
    {
        return $this->container['bigclusterEnable'];
    }

    /**
    * Sets bigclusterEnable
    *
    * @param bool $bigclusterEnable 是否支持大规格集群。
    *
    * @return $this
    */
    public function setBigclusterEnable($bigclusterEnable)
    {
        $this->container['bigclusterEnable'] = $bigclusterEnable;
        return $this;
    }

    /**
    * Gets defaultVersion
    *  默认版本。
    *
    * @return string
    */
    public function getDefaultVersion()
    {
        return $this->container['defaultVersion'];
    }

    /**
    * Sets defaultVersion
    *
    * @param string $defaultVersion 默认版本。
    *
    * @return $this
    */
    public function setDefaultVersion($defaultVersion)
    {
        $this->container['defaultVersion'] = $defaultVersion;
        return $this;
    }

    /**
    * Gets versions
    *  版本。
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\CdmClusterVersion[]
    */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
    * Sets versions
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\CdmClusterVersion[] $versions 版本。
    *
    * @return $this
    */
    public function setVersions($versions)
    {
        $this->container['versions'] = $versions;
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

