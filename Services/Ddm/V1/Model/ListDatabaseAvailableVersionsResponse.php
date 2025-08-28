<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDatabaseAvailableVersionsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDatabaseAvailableVersionsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * versions  可变更版本
    * currentVersion  当前版本
    * latestVersion  最新优选版本
    * currentFavoredVersion  本系列优选版本，如3.0.8系列优选版本为3.0.8.5
    * previousVersion  当前实例上一个版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'versions' => 'string[]',
            'currentVersion' => 'string',
            'latestVersion' => 'string',
            'currentFavoredVersion' => 'string',
            'previousVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * versions  可变更版本
    * currentVersion  当前版本
    * latestVersion  最新优选版本
    * currentFavoredVersion  本系列优选版本，如3.0.8系列优选版本为3.0.8.5
    * previousVersion  当前实例上一个版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'versions' => null,
        'currentVersion' => null,
        'latestVersion' => null,
        'currentFavoredVersion' => null,
        'previousVersion' => null
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
    * versions  可变更版本
    * currentVersion  当前版本
    * latestVersion  最新优选版本
    * currentFavoredVersion  本系列优选版本，如3.0.8系列优选版本为3.0.8.5
    * previousVersion  当前实例上一个版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'versions' => 'versions',
            'currentVersion' => 'current_version',
            'latestVersion' => 'latest_version',
            'currentFavoredVersion' => 'current_favored_version',
            'previousVersion' => 'previous_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * versions  可变更版本
    * currentVersion  当前版本
    * latestVersion  最新优选版本
    * currentFavoredVersion  本系列优选版本，如3.0.8系列优选版本为3.0.8.5
    * previousVersion  当前实例上一个版本
    *
    * @var string[]
    */
    protected static $setters = [
            'versions' => 'setVersions',
            'currentVersion' => 'setCurrentVersion',
            'latestVersion' => 'setLatestVersion',
            'currentFavoredVersion' => 'setCurrentFavoredVersion',
            'previousVersion' => 'setPreviousVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * versions  可变更版本
    * currentVersion  当前版本
    * latestVersion  最新优选版本
    * currentFavoredVersion  本系列优选版本，如3.0.8系列优选版本为3.0.8.5
    * previousVersion  当前实例上一个版本
    *
    * @var string[]
    */
    protected static $getters = [
            'versions' => 'getVersions',
            'currentVersion' => 'getCurrentVersion',
            'latestVersion' => 'getLatestVersion',
            'currentFavoredVersion' => 'getCurrentFavoredVersion',
            'previousVersion' => 'getPreviousVersion'
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
        $this->container['versions'] = isset($data['versions']) ? $data['versions'] : null;
        $this->container['currentVersion'] = isset($data['currentVersion']) ? $data['currentVersion'] : null;
        $this->container['latestVersion'] = isset($data['latestVersion']) ? $data['latestVersion'] : null;
        $this->container['currentFavoredVersion'] = isset($data['currentFavoredVersion']) ? $data['currentFavoredVersion'] : null;
        $this->container['previousVersion'] = isset($data['previousVersion']) ? $data['previousVersion'] : null;
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
    * Gets versions
    *  可变更版本
    *
    * @return string[]|null
    */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
    * Sets versions
    *
    * @param string[]|null $versions 可变更版本
    *
    * @return $this
    */
    public function setVersions($versions)
    {
        $this->container['versions'] = $versions;
        return $this;
    }

    /**
    * Gets currentVersion
    *  当前版本
    *
    * @return string|null
    */
    public function getCurrentVersion()
    {
        return $this->container['currentVersion'];
    }

    /**
    * Sets currentVersion
    *
    * @param string|null $currentVersion 当前版本
    *
    * @return $this
    */
    public function setCurrentVersion($currentVersion)
    {
        $this->container['currentVersion'] = $currentVersion;
        return $this;
    }

    /**
    * Gets latestVersion
    *  最新优选版本
    *
    * @return string|null
    */
    public function getLatestVersion()
    {
        return $this->container['latestVersion'];
    }

    /**
    * Sets latestVersion
    *
    * @param string|null $latestVersion 最新优选版本
    *
    * @return $this
    */
    public function setLatestVersion($latestVersion)
    {
        $this->container['latestVersion'] = $latestVersion;
        return $this;
    }

    /**
    * Gets currentFavoredVersion
    *  本系列优选版本，如3.0.8系列优选版本为3.0.8.5
    *
    * @return string|null
    */
    public function getCurrentFavoredVersion()
    {
        return $this->container['currentFavoredVersion'];
    }

    /**
    * Sets currentFavoredVersion
    *
    * @param string|null $currentFavoredVersion 本系列优选版本，如3.0.8系列优选版本为3.0.8.5
    *
    * @return $this
    */
    public function setCurrentFavoredVersion($currentFavoredVersion)
    {
        $this->container['currentFavoredVersion'] = $currentFavoredVersion;
        return $this;
    }

    /**
    * Gets previousVersion
    *  当前实例上一个版本
    *
    * @return string|null
    */
    public function getPreviousVersion()
    {
        return $this->container['previousVersion'];
    }

    /**
    * Sets previousVersion
    *
    * @param string|null $previousVersion 当前实例上一个版本
    *
    * @return $this
    */
    public function setPreviousVersion($previousVersion)
    {
        $this->container['previousVersion'] = $previousVersion;
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

