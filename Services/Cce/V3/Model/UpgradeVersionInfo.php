<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradeVersionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpgradeVersionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * release  正式版本号，如：v1.19.10
    * patch  补丁版本号，如r0
    * suggestPatch  推荐升级的目标补丁版本号，如r0
    * targetVersions  升级目标版本集合
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'release' => 'string',
            'patch' => 'string',
            'suggestPatch' => 'string',
            'targetVersions' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * release  正式版本号，如：v1.19.10
    * patch  补丁版本号，如r0
    * suggestPatch  推荐升级的目标补丁版本号，如r0
    * targetVersions  升级目标版本集合
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'release' => null,
        'patch' => null,
        'suggestPatch' => null,
        'targetVersions' => null
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
    * release  正式版本号，如：v1.19.10
    * patch  补丁版本号，如r0
    * suggestPatch  推荐升级的目标补丁版本号，如r0
    * targetVersions  升级目标版本集合
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'release' => 'release',
            'patch' => 'patch',
            'suggestPatch' => 'suggestPatch',
            'targetVersions' => 'targetVersions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * release  正式版本号，如：v1.19.10
    * patch  补丁版本号，如r0
    * suggestPatch  推荐升级的目标补丁版本号，如r0
    * targetVersions  升级目标版本集合
    *
    * @var string[]
    */
    protected static $setters = [
            'release' => 'setRelease',
            'patch' => 'setPatch',
            'suggestPatch' => 'setSuggestPatch',
            'targetVersions' => 'setTargetVersions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * release  正式版本号，如：v1.19.10
    * patch  补丁版本号，如r0
    * suggestPatch  推荐升级的目标补丁版本号，如r0
    * targetVersions  升级目标版本集合
    *
    * @var string[]
    */
    protected static $getters = [
            'release' => 'getRelease',
            'patch' => 'getPatch',
            'suggestPatch' => 'getSuggestPatch',
            'targetVersions' => 'getTargetVersions'
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
        $this->container['release'] = isset($data['release']) ? $data['release'] : null;
        $this->container['patch'] = isset($data['patch']) ? $data['patch'] : null;
        $this->container['suggestPatch'] = isset($data['suggestPatch']) ? $data['suggestPatch'] : null;
        $this->container['targetVersions'] = isset($data['targetVersions']) ? $data['targetVersions'] : null;
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
    * Gets release
    *  正式版本号，如：v1.19.10
    *
    * @return string|null
    */
    public function getRelease()
    {
        return $this->container['release'];
    }

    /**
    * Sets release
    *
    * @param string|null $release 正式版本号，如：v1.19.10
    *
    * @return $this
    */
    public function setRelease($release)
    {
        $this->container['release'] = $release;
        return $this;
    }

    /**
    * Gets patch
    *  补丁版本号，如r0
    *
    * @return string|null
    */
    public function getPatch()
    {
        return $this->container['patch'];
    }

    /**
    * Sets patch
    *
    * @param string|null $patch 补丁版本号，如r0
    *
    * @return $this
    */
    public function setPatch($patch)
    {
        $this->container['patch'] = $patch;
        return $this;
    }

    /**
    * Gets suggestPatch
    *  推荐升级的目标补丁版本号，如r0
    *
    * @return string|null
    */
    public function getSuggestPatch()
    {
        return $this->container['suggestPatch'];
    }

    /**
    * Sets suggestPatch
    *
    * @param string|null $suggestPatch 推荐升级的目标补丁版本号，如r0
    *
    * @return $this
    */
    public function setSuggestPatch($suggestPatch)
    {
        $this->container['suggestPatch'] = $suggestPatch;
        return $this;
    }

    /**
    * Gets targetVersions
    *  升级目标版本集合
    *
    * @return string[]|null
    */
    public function getTargetVersions()
    {
        return $this->container['targetVersions'];
    }

    /**
    * Sets targetVersions
    *
    * @param string[]|null $targetVersions 升级目标版本集合
    *
    * @return $this
    */
    public function setTargetVersions($targetVersions)
    {
        $this->container['targetVersions'] = $targetVersions;
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

