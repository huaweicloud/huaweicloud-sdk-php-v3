<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScanProtectionOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScanProtectionOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * highFrequencyScanBlockingConfig  highFrequencyScanBlockingConfig
    * directoryTraversalProtectionConfig  directoryTraversalProtectionConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'highFrequencyScanBlockingConfig' => '\HuaweiCloud\SDK\Waf\V1\Model\HighFrequencyScanBlockingConfig',
            'directoryTraversalProtectionConfig' => '\HuaweiCloud\SDK\Waf\V1\Model\DirectoryTraversalProtectionConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * highFrequencyScanBlockingConfig  highFrequencyScanBlockingConfig
    * directoryTraversalProtectionConfig  directoryTraversalProtectionConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'highFrequencyScanBlockingConfig' => null,
        'directoryTraversalProtectionConfig' => null
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
    * highFrequencyScanBlockingConfig  highFrequencyScanBlockingConfig
    * directoryTraversalProtectionConfig  directoryTraversalProtectionConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'highFrequencyScanBlockingConfig' => 'high_frequency_scan_blocking_config',
            'directoryTraversalProtectionConfig' => 'directory_traversal_protection_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * highFrequencyScanBlockingConfig  highFrequencyScanBlockingConfig
    * directoryTraversalProtectionConfig  directoryTraversalProtectionConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'highFrequencyScanBlockingConfig' => 'setHighFrequencyScanBlockingConfig',
            'directoryTraversalProtectionConfig' => 'setDirectoryTraversalProtectionConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * highFrequencyScanBlockingConfig  highFrequencyScanBlockingConfig
    * directoryTraversalProtectionConfig  directoryTraversalProtectionConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'highFrequencyScanBlockingConfig' => 'getHighFrequencyScanBlockingConfig',
            'directoryTraversalProtectionConfig' => 'getDirectoryTraversalProtectionConfig'
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
        $this->container['highFrequencyScanBlockingConfig'] = isset($data['highFrequencyScanBlockingConfig']) ? $data['highFrequencyScanBlockingConfig'] : null;
        $this->container['directoryTraversalProtectionConfig'] = isset($data['directoryTraversalProtectionConfig']) ? $data['directoryTraversalProtectionConfig'] : null;
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
    * Gets highFrequencyScanBlockingConfig
    *  highFrequencyScanBlockingConfig
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\HighFrequencyScanBlockingConfig|null
    */
    public function getHighFrequencyScanBlockingConfig()
    {
        return $this->container['highFrequencyScanBlockingConfig'];
    }

    /**
    * Sets highFrequencyScanBlockingConfig
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\HighFrequencyScanBlockingConfig|null $highFrequencyScanBlockingConfig highFrequencyScanBlockingConfig
    *
    * @return $this
    */
    public function setHighFrequencyScanBlockingConfig($highFrequencyScanBlockingConfig)
    {
        $this->container['highFrequencyScanBlockingConfig'] = $highFrequencyScanBlockingConfig;
        return $this;
    }

    /**
    * Gets directoryTraversalProtectionConfig
    *  directoryTraversalProtectionConfig
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\DirectoryTraversalProtectionConfig|null
    */
    public function getDirectoryTraversalProtectionConfig()
    {
        return $this->container['directoryTraversalProtectionConfig'];
    }

    /**
    * Sets directoryTraversalProtectionConfig
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\DirectoryTraversalProtectionConfig|null $directoryTraversalProtectionConfig directoryTraversalProtectionConfig
    *
    * @return $this
    */
    public function setDirectoryTraversalProtectionConfig($directoryTraversalProtectionConfig)
    {
        $this->container['directoryTraversalProtectionConfig'] = $directoryTraversalProtectionConfig;
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

