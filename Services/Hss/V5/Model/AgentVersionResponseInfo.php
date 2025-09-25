<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgentVersionResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgentVersionResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * latestVersion  最新版本的版本号
    * versionList  最新若干版本的版本号和版本说明
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'osType' => 'string',
            'latestVersion' => 'string',
            'versionList' => '\HuaweiCloud\SDK\Hss\V5\Model\VersionList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * latestVersion  最新版本的版本号
    * versionList  最新若干版本的版本号和版本说明
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'osType' => null,
        'latestVersion' => null,
        'versionList' => null
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
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * latestVersion  最新版本的版本号
    * versionList  最新若干版本的版本号和版本说明
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'osType' => 'os_type',
            'latestVersion' => 'latest_version',
            'versionList' => 'version_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * latestVersion  最新版本的版本号
    * versionList  最新若干版本的版本号和版本说明
    *
    * @var string[]
    */
    protected static $setters = [
            'osType' => 'setOsType',
            'latestVersion' => 'setLatestVersion',
            'versionList' => 'setVersionList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * osType  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    * latestVersion  最新版本的版本号
    * versionList  最新若干版本的版本号和版本说明
    *
    * @var string[]
    */
    protected static $getters = [
            'osType' => 'getOsType',
            'latestVersion' => 'getLatestVersion',
            'versionList' => 'getVersionList'
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
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['latestVersion'] = isset($data['latestVersion']) ? $data['latestVersion'] : null;
        $this->container['versionList'] = isset($data['versionList']) ? $data['versionList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 128)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['latestVersion']) && (mb_strlen($this->container['latestVersion']) > 256)) {
                $invalidProperties[] = "invalid value for 'latestVersion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['latestVersion']) && (mb_strlen($this->container['latestVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'latestVersion', the character length must be bigger than or equal to 1.";
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
    * Gets osType
    *  操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType 操作系统类型，包含如下2种。   - Linux ：Linux。   - Windows ：Windows。
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets latestVersion
    *  最新版本的版本号
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
    * @param string|null $latestVersion 最新版本的版本号
    *
    * @return $this
    */
    public function setLatestVersion($latestVersion)
    {
        $this->container['latestVersion'] = $latestVersion;
        return $this;
    }

    /**
    * Gets versionList
    *  最新若干版本的版本号和版本说明
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\VersionList[]|null
    */
    public function getVersionList()
    {
        return $this->container['versionList'];
    }

    /**
    * Sets versionList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\VersionList[]|null $versionList 最新若干版本的版本号和版本说明
    *
    * @return $this
    */
    public function setVersionList($versionList)
    {
        $this->container['versionList'] = $versionList;
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

