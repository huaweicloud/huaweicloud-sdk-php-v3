<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobStatusResultResponseBodyResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobStatusResultResponseBody_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * building  是否构建中
    * buildResult  构建结果
    * region  region
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'building' => 'bool',
            'buildResult' => 'string',
            'region' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * building  是否构建中
    * buildResult  构建结果
    * region  region
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'building' => null,
        'buildResult' => null,
        'region' => null
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
    * building  是否构建中
    * buildResult  构建结果
    * region  region
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'building' => 'building',
            'buildResult' => 'build_result',
            'region' => 'region'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * building  是否构建中
    * buildResult  构建结果
    * region  region
    *
    * @var string[]
    */
    protected static $setters = [
            'building' => 'setBuilding',
            'buildResult' => 'setBuildResult',
            'region' => 'setRegion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * building  是否构建中
    * buildResult  构建结果
    * region  region
    *
    * @var string[]
    */
    protected static $getters = [
            'building' => 'getBuilding',
            'buildResult' => 'getBuildResult',
            'region' => 'getRegion'
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
        $this->container['building'] = isset($data['building']) ? $data['building'] : null;
        $this->container['buildResult'] = isset($data['buildResult']) ? $data['buildResult'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
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
    * Gets building
    *  是否构建中
    *
    * @return bool|null
    */
    public function getBuilding()
    {
        return $this->container['building'];
    }

    /**
    * Sets building
    *
    * @param bool|null $building 是否构建中
    *
    * @return $this
    */
    public function setBuilding($building)
    {
        $this->container['building'] = $building;
        return $this;
    }

    /**
    * Gets buildResult
    *  构建结果
    *
    * @return string|null
    */
    public function getBuildResult()
    {
        return $this->container['buildResult'];
    }

    /**
    * Sets buildResult
    *
    * @param string|null $buildResult 构建结果
    *
    * @return $this
    */
    public function setBuildResult($buildResult)
    {
        $this->container['buildResult'] = $buildResult;
        return $this;
    }

    /**
    * Gets region
    *  region
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region region
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
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

