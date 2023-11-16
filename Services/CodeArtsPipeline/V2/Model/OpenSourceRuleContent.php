<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpenSourceRuleContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpenSourceRuleContent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * versionSet  versionSet
    * security  security
    * license  license
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'versionSet' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\VersionSetProperty',
            'security' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\SecurityProperty',
            'license' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\LicenseProperty'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * versionSet  versionSet
    * security  security
    * license  license
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'versionSet' => null,
        'security' => null,
        'license' => null
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
    * versionSet  versionSet
    * security  security
    * license  license
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'versionSet' => 'version_set',
            'security' => 'security',
            'license' => 'license'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * versionSet  versionSet
    * security  security
    * license  license
    *
    * @var string[]
    */
    protected static $setters = [
            'versionSet' => 'setVersionSet',
            'security' => 'setSecurity',
            'license' => 'setLicense'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * versionSet  versionSet
    * security  security
    * license  license
    *
    * @var string[]
    */
    protected static $getters = [
            'versionSet' => 'getVersionSet',
            'security' => 'getSecurity',
            'license' => 'getLicense'
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
        $this->container['versionSet'] = isset($data['versionSet']) ? $data['versionSet'] : null;
        $this->container['security'] = isset($data['security']) ? $data['security'] : null;
        $this->container['license'] = isset($data['license']) ? $data['license'] : null;
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
    * Gets versionSet
    *  versionSet
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\VersionSetProperty|null
    */
    public function getVersionSet()
    {
        return $this->container['versionSet'];
    }

    /**
    * Sets versionSet
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\VersionSetProperty|null $versionSet versionSet
    *
    * @return $this
    */
    public function setVersionSet($versionSet)
    {
        $this->container['versionSet'] = $versionSet;
        return $this;
    }

    /**
    * Gets security
    *  security
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\SecurityProperty|null
    */
    public function getSecurity()
    {
        return $this->container['security'];
    }

    /**
    * Sets security
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\SecurityProperty|null $security security
    *
    * @return $this
    */
    public function setSecurity($security)
    {
        $this->container['security'] = $security;
        return $this;
    }

    /**
    * Gets license
    *  license
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\LicenseProperty|null
    */
    public function getLicense()
    {
        return $this->container['license'];
    }

    /**
    * Sets license
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\LicenseProperty|null $license license
    *
    * @return $this
    */
    public function setLicense($license)
    {
        $this->container['license'] = $license;
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

