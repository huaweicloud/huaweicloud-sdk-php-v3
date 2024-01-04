<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradeInfoSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpgradeInfoSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lastUpgradeInfo  lastUpgradeInfo
    * versionInfo  versionInfo
    * upgradeFeatureGates  upgradeFeatureGates
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lastUpgradeInfo' => '\HuaweiCloud\SDK\Cce\V3\Model\UpgradeInfoStatus',
            'versionInfo' => '\HuaweiCloud\SDK\Cce\V3\Model\UpgradeVersionInfo',
            'upgradeFeatureGates' => '\HuaweiCloud\SDK\Cce\V3\Model\UpgradeFeatureGates'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lastUpgradeInfo  lastUpgradeInfo
    * versionInfo  versionInfo
    * upgradeFeatureGates  upgradeFeatureGates
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lastUpgradeInfo' => null,
        'versionInfo' => null,
        'upgradeFeatureGates' => null
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
    * lastUpgradeInfo  lastUpgradeInfo
    * versionInfo  versionInfo
    * upgradeFeatureGates  upgradeFeatureGates
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lastUpgradeInfo' => 'lastUpgradeInfo',
            'versionInfo' => 'versionInfo',
            'upgradeFeatureGates' => 'upgradeFeatureGates'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lastUpgradeInfo  lastUpgradeInfo
    * versionInfo  versionInfo
    * upgradeFeatureGates  upgradeFeatureGates
    *
    * @var string[]
    */
    protected static $setters = [
            'lastUpgradeInfo' => 'setLastUpgradeInfo',
            'versionInfo' => 'setVersionInfo',
            'upgradeFeatureGates' => 'setUpgradeFeatureGates'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lastUpgradeInfo  lastUpgradeInfo
    * versionInfo  versionInfo
    * upgradeFeatureGates  upgradeFeatureGates
    *
    * @var string[]
    */
    protected static $getters = [
            'lastUpgradeInfo' => 'getLastUpgradeInfo',
            'versionInfo' => 'getVersionInfo',
            'upgradeFeatureGates' => 'getUpgradeFeatureGates'
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
        $this->container['lastUpgradeInfo'] = isset($data['lastUpgradeInfo']) ? $data['lastUpgradeInfo'] : null;
        $this->container['versionInfo'] = isset($data['versionInfo']) ? $data['versionInfo'] : null;
        $this->container['upgradeFeatureGates'] = isset($data['upgradeFeatureGates']) ? $data['upgradeFeatureGates'] : null;
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
    * Gets lastUpgradeInfo
    *  lastUpgradeInfo
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\UpgradeInfoStatus|null
    */
    public function getLastUpgradeInfo()
    {
        return $this->container['lastUpgradeInfo'];
    }

    /**
    * Sets lastUpgradeInfo
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\UpgradeInfoStatus|null $lastUpgradeInfo lastUpgradeInfo
    *
    * @return $this
    */
    public function setLastUpgradeInfo($lastUpgradeInfo)
    {
        $this->container['lastUpgradeInfo'] = $lastUpgradeInfo;
        return $this;
    }

    /**
    * Gets versionInfo
    *  versionInfo
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\UpgradeVersionInfo|null
    */
    public function getVersionInfo()
    {
        return $this->container['versionInfo'];
    }

    /**
    * Sets versionInfo
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\UpgradeVersionInfo|null $versionInfo versionInfo
    *
    * @return $this
    */
    public function setVersionInfo($versionInfo)
    {
        $this->container['versionInfo'] = $versionInfo;
        return $this;
    }

    /**
    * Gets upgradeFeatureGates
    *  upgradeFeatureGates
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\UpgradeFeatureGates|null
    */
    public function getUpgradeFeatureGates()
    {
        return $this->container['upgradeFeatureGates'];
    }

    /**
    * Sets upgradeFeatureGates
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\UpgradeFeatureGates|null $upgradeFeatureGates upgradeFeatureGates
    *
    * @return $this
    */
    public function setUpgradeFeatureGates($upgradeFeatureGates)
    {
        $this->container['upgradeFeatureGates'] = $upgradeFeatureGates;
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

