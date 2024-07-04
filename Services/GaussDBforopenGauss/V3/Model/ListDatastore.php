<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDatastore implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDatastore';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  数据库引擎。
    * version  数据库大版本。
    * completeVersion  数据库小版本。
    * hotfixVersions  数据库已升级的热补丁版本，当数据库热补丁升级成功后，该值不为空。
    * targetVersion  数据库正在升级的目标版本。
    * hotfixFinishedTimes  热补丁升级完成时间列表。  热补丁升级完成时间，格式为“yyyy-mm-dd hh:mm:ss timezone”。  其中timezone是指时区。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'version' => 'string',
            'completeVersion' => 'string',
            'hotfixVersions' => 'string',
            'targetVersion' => 'string',
            'hotfixFinishedTimes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  数据库引擎。
    * version  数据库大版本。
    * completeVersion  数据库小版本。
    * hotfixVersions  数据库已升级的热补丁版本，当数据库热补丁升级成功后，该值不为空。
    * targetVersion  数据库正在升级的目标版本。
    * hotfixFinishedTimes  热补丁升级完成时间列表。  热补丁升级完成时间，格式为“yyyy-mm-dd hh:mm:ss timezone”。  其中timezone是指时区。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'version' => null,
        'completeVersion' => null,
        'hotfixVersions' => null,
        'targetVersion' => null,
        'hotfixFinishedTimes' => null
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
    * type  数据库引擎。
    * version  数据库大版本。
    * completeVersion  数据库小版本。
    * hotfixVersions  数据库已升级的热补丁版本，当数据库热补丁升级成功后，该值不为空。
    * targetVersion  数据库正在升级的目标版本。
    * hotfixFinishedTimes  热补丁升级完成时间列表。  热补丁升级完成时间，格式为“yyyy-mm-dd hh:mm:ss timezone”。  其中timezone是指时区。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'version' => 'version',
            'completeVersion' => 'complete_version',
            'hotfixVersions' => 'hotfix_versions',
            'targetVersion' => 'target_version',
            'hotfixFinishedTimes' => 'hotfix_finished_times'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  数据库引擎。
    * version  数据库大版本。
    * completeVersion  数据库小版本。
    * hotfixVersions  数据库已升级的热补丁版本，当数据库热补丁升级成功后，该值不为空。
    * targetVersion  数据库正在升级的目标版本。
    * hotfixFinishedTimes  热补丁升级完成时间列表。  热补丁升级完成时间，格式为“yyyy-mm-dd hh:mm:ss timezone”。  其中timezone是指时区。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'version' => 'setVersion',
            'completeVersion' => 'setCompleteVersion',
            'hotfixVersions' => 'setHotfixVersions',
            'targetVersion' => 'setTargetVersion',
            'hotfixFinishedTimes' => 'setHotfixFinishedTimes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  数据库引擎。
    * version  数据库大版本。
    * completeVersion  数据库小版本。
    * hotfixVersions  数据库已升级的热补丁版本，当数据库热补丁升级成功后，该值不为空。
    * targetVersion  数据库正在升级的目标版本。
    * hotfixFinishedTimes  热补丁升级完成时间列表。  热补丁升级完成时间，格式为“yyyy-mm-dd hh:mm:ss timezone”。  其中timezone是指时区。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'version' => 'getVersion',
            'completeVersion' => 'getCompleteVersion',
            'hotfixVersions' => 'getHotfixVersions',
            'targetVersion' => 'getTargetVersion',
            'hotfixFinishedTimes' => 'getHotfixFinishedTimes'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['completeVersion'] = isset($data['completeVersion']) ? $data['completeVersion'] : null;
        $this->container['hotfixVersions'] = isset($data['hotfixVersions']) ? $data['hotfixVersions'] : null;
        $this->container['targetVersion'] = isset($data['targetVersion']) ? $data['targetVersion'] : null;
        $this->container['hotfixFinishedTimes'] = isset($data['hotfixFinishedTimes']) ? $data['hotfixFinishedTimes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
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
    * Gets type
    *  数据库引擎。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 数据库引擎。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets version
    *  数据库大版本。
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version 数据库大版本。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets completeVersion
    *  数据库小版本。
    *
    * @return string|null
    */
    public function getCompleteVersion()
    {
        return $this->container['completeVersion'];
    }

    /**
    * Sets completeVersion
    *
    * @param string|null $completeVersion 数据库小版本。
    *
    * @return $this
    */
    public function setCompleteVersion($completeVersion)
    {
        $this->container['completeVersion'] = $completeVersion;
        return $this;
    }

    /**
    * Gets hotfixVersions
    *  数据库已升级的热补丁版本，当数据库热补丁升级成功后，该值不为空。
    *
    * @return string|null
    */
    public function getHotfixVersions()
    {
        return $this->container['hotfixVersions'];
    }

    /**
    * Sets hotfixVersions
    *
    * @param string|null $hotfixVersions 数据库已升级的热补丁版本，当数据库热补丁升级成功后，该值不为空。
    *
    * @return $this
    */
    public function setHotfixVersions($hotfixVersions)
    {
        $this->container['hotfixVersions'] = $hotfixVersions;
        return $this;
    }

    /**
    * Gets targetVersion
    *  数据库正在升级的目标版本。
    *
    * @return string|null
    */
    public function getTargetVersion()
    {
        return $this->container['targetVersion'];
    }

    /**
    * Sets targetVersion
    *
    * @param string|null $targetVersion 数据库正在升级的目标版本。
    *
    * @return $this
    */
    public function setTargetVersion($targetVersion)
    {
        $this->container['targetVersion'] = $targetVersion;
        return $this;
    }

    /**
    * Gets hotfixFinishedTimes
    *  热补丁升级完成时间列表。  热补丁升级完成时间，格式为“yyyy-mm-dd hh:mm:ss timezone”。  其中timezone是指时区。
    *
    * @return string[]|null
    */
    public function getHotfixFinishedTimes()
    {
        return $this->container['hotfixFinishedTimes'];
    }

    /**
    * Sets hotfixFinishedTimes
    *
    * @param string[]|null $hotfixFinishedTimes 热补丁升级完成时间列表。  热补丁升级完成时间，格式为“yyyy-mm-dd hh:mm:ss timezone”。  其中timezone是指时区。
    *
    * @return $this
    */
    public function setHotfixFinishedTimes($hotfixFinishedTimes)
    {
        $this->container['hotfixFinishedTimes'] = $hotfixFinishedTimes;
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

