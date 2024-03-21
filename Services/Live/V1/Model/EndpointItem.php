<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EndpointItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EndpointItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hlsPackage  HLS打包信息
    * dashPackage  DASH打包信息
    * mssPackage  MSS打包信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hlsPackage' => '\HuaweiCloud\SDK\Live\V1\Model\HlsPackageItem[]',
            'dashPackage' => '\HuaweiCloud\SDK\Live\V1\Model\DashPackageItem[]',
            'mssPackage' => '\HuaweiCloud\SDK\Live\V1\Model\MssPackageItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hlsPackage  HLS打包信息
    * dashPackage  DASH打包信息
    * mssPackage  MSS打包信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hlsPackage' => null,
        'dashPackage' => null,
        'mssPackage' => null
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
    * hlsPackage  HLS打包信息
    * dashPackage  DASH打包信息
    * mssPackage  MSS打包信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hlsPackage' => 'hls_package',
            'dashPackage' => 'dash_package',
            'mssPackage' => 'mss_package'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hlsPackage  HLS打包信息
    * dashPackage  DASH打包信息
    * mssPackage  MSS打包信息
    *
    * @var string[]
    */
    protected static $setters = [
            'hlsPackage' => 'setHlsPackage',
            'dashPackage' => 'setDashPackage',
            'mssPackage' => 'setMssPackage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hlsPackage  HLS打包信息
    * dashPackage  DASH打包信息
    * mssPackage  MSS打包信息
    *
    * @var string[]
    */
    protected static $getters = [
            'hlsPackage' => 'getHlsPackage',
            'dashPackage' => 'getDashPackage',
            'mssPackage' => 'getMssPackage'
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
        $this->container['hlsPackage'] = isset($data['hlsPackage']) ? $data['hlsPackage'] : null;
        $this->container['dashPackage'] = isset($data['dashPackage']) ? $data['dashPackage'] : null;
        $this->container['mssPackage'] = isset($data['mssPackage']) ? $data['mssPackage'] : null;
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
    * Gets hlsPackage
    *  HLS打包信息
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\HlsPackageItem[]|null
    */
    public function getHlsPackage()
    {
        return $this->container['hlsPackage'];
    }

    /**
    * Sets hlsPackage
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\HlsPackageItem[]|null $hlsPackage HLS打包信息
    *
    * @return $this
    */
    public function setHlsPackage($hlsPackage)
    {
        $this->container['hlsPackage'] = $hlsPackage;
        return $this;
    }

    /**
    * Gets dashPackage
    *  DASH打包信息
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\DashPackageItem[]|null
    */
    public function getDashPackage()
    {
        return $this->container['dashPackage'];
    }

    /**
    * Sets dashPackage
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\DashPackageItem[]|null $dashPackage DASH打包信息
    *
    * @return $this
    */
    public function setDashPackage($dashPackage)
    {
        $this->container['dashPackage'] = $dashPackage;
        return $this;
    }

    /**
    * Gets mssPackage
    *  MSS打包信息
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\MssPackageItem[]|null
    */
    public function getMssPackage()
    {
        return $this->container['mssPackage'];
    }

    /**
    * Sets mssPackage
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\MssPackageItem[]|null $mssPackage MSS打包信息
    *
    * @return $this
    */
    public function setMssPackage($mssPackage)
    {
        $this->container['mssPackage'] = $mssPackage;
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

