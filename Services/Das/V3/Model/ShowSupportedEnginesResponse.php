<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSupportedEnginesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSupportedEnginesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * allEngineTypes  所有EngineType
    * supportedEngineTypes  支持的EngineType
    * supportedNetWorkTypes  支持的NetWorkType和EngineType
    * supportedCloudDbaTypes  支持的CloudDBA的NetWorkType和EngineType
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'allEngineTypes' => 'string[]',
            'supportedEngineTypes' => 'string[]',
            'supportedNetWorkTypes' => '\HuaweiCloud\SDK\Das\V3\Model\SupportNetWorkTypeResponse[]',
            'supportedCloudDbaTypes' => '\HuaweiCloud\SDK\Das\V3\Model\SupportNetWorkTypeResponse[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * allEngineTypes  所有EngineType
    * supportedEngineTypes  支持的EngineType
    * supportedNetWorkTypes  支持的NetWorkType和EngineType
    * supportedCloudDbaTypes  支持的CloudDBA的NetWorkType和EngineType
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'allEngineTypes' => null,
        'supportedEngineTypes' => null,
        'supportedNetWorkTypes' => null,
        'supportedCloudDbaTypes' => null
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
    * allEngineTypes  所有EngineType
    * supportedEngineTypes  支持的EngineType
    * supportedNetWorkTypes  支持的NetWorkType和EngineType
    * supportedCloudDbaTypes  支持的CloudDBA的NetWorkType和EngineType
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'allEngineTypes' => 'all_engine_types',
            'supportedEngineTypes' => 'supported_engine_types',
            'supportedNetWorkTypes' => 'supported_net_work_types',
            'supportedCloudDbaTypes' => 'supported_cloud_dba_types'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * allEngineTypes  所有EngineType
    * supportedEngineTypes  支持的EngineType
    * supportedNetWorkTypes  支持的NetWorkType和EngineType
    * supportedCloudDbaTypes  支持的CloudDBA的NetWorkType和EngineType
    *
    * @var string[]
    */
    protected static $setters = [
            'allEngineTypes' => 'setAllEngineTypes',
            'supportedEngineTypes' => 'setSupportedEngineTypes',
            'supportedNetWorkTypes' => 'setSupportedNetWorkTypes',
            'supportedCloudDbaTypes' => 'setSupportedCloudDbaTypes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * allEngineTypes  所有EngineType
    * supportedEngineTypes  支持的EngineType
    * supportedNetWorkTypes  支持的NetWorkType和EngineType
    * supportedCloudDbaTypes  支持的CloudDBA的NetWorkType和EngineType
    *
    * @var string[]
    */
    protected static $getters = [
            'allEngineTypes' => 'getAllEngineTypes',
            'supportedEngineTypes' => 'getSupportedEngineTypes',
            'supportedNetWorkTypes' => 'getSupportedNetWorkTypes',
            'supportedCloudDbaTypes' => 'getSupportedCloudDbaTypes'
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
        $this->container['allEngineTypes'] = isset($data['allEngineTypes']) ? $data['allEngineTypes'] : null;
        $this->container['supportedEngineTypes'] = isset($data['supportedEngineTypes']) ? $data['supportedEngineTypes'] : null;
        $this->container['supportedNetWorkTypes'] = isset($data['supportedNetWorkTypes']) ? $data['supportedNetWorkTypes'] : null;
        $this->container['supportedCloudDbaTypes'] = isset($data['supportedCloudDbaTypes']) ? $data['supportedCloudDbaTypes'] : null;
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
    * Gets allEngineTypes
    *  所有EngineType
    *
    * @return string[]|null
    */
    public function getAllEngineTypes()
    {
        return $this->container['allEngineTypes'];
    }

    /**
    * Sets allEngineTypes
    *
    * @param string[]|null $allEngineTypes 所有EngineType
    *
    * @return $this
    */
    public function setAllEngineTypes($allEngineTypes)
    {
        $this->container['allEngineTypes'] = $allEngineTypes;
        return $this;
    }

    /**
    * Gets supportedEngineTypes
    *  支持的EngineType
    *
    * @return string[]|null
    */
    public function getSupportedEngineTypes()
    {
        return $this->container['supportedEngineTypes'];
    }

    /**
    * Sets supportedEngineTypes
    *
    * @param string[]|null $supportedEngineTypes 支持的EngineType
    *
    * @return $this
    */
    public function setSupportedEngineTypes($supportedEngineTypes)
    {
        $this->container['supportedEngineTypes'] = $supportedEngineTypes;
        return $this;
    }

    /**
    * Gets supportedNetWorkTypes
    *  支持的NetWorkType和EngineType
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\SupportNetWorkTypeResponse[]|null
    */
    public function getSupportedNetWorkTypes()
    {
        return $this->container['supportedNetWorkTypes'];
    }

    /**
    * Sets supportedNetWorkTypes
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\SupportNetWorkTypeResponse[]|null $supportedNetWorkTypes 支持的NetWorkType和EngineType
    *
    * @return $this
    */
    public function setSupportedNetWorkTypes($supportedNetWorkTypes)
    {
        $this->container['supportedNetWorkTypes'] = $supportedNetWorkTypes;
        return $this;
    }

    /**
    * Gets supportedCloudDbaTypes
    *  支持的CloudDBA的NetWorkType和EngineType
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\SupportNetWorkTypeResponse[]|null
    */
    public function getSupportedCloudDbaTypes()
    {
        return $this->container['supportedCloudDbaTypes'];
    }

    /**
    * Sets supportedCloudDbaTypes
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\SupportNetWorkTypeResponse[]|null $supportedCloudDbaTypes 支持的CloudDBA的NetWorkType和EngineType
    *
    * @return $this
    */
    public function setSupportedCloudDbaTypes($supportedCloudDbaTypes)
    {
        $this->container['supportedCloudDbaTypes'] = $supportedCloudDbaTypes;
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

