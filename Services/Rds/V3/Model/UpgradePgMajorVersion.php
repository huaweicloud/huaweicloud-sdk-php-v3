<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradePgMajorVersion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpgradePgMajorVersion';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetVersion  目标版本。 高于实例当前的大版本，如当前为12，目标版本需要是13或14。
    * isChangePrivateIp  是否将实例内网IP切换到大版本实例  true：升级后切换当前实例的内网IP到大版本实例 false：升级后当前实例的内网IP不变，大版本实例使用新的内网IP
    * statisticsCollectionMode  统计信息收集方式。is_change_private_ip为true时必选  before_change_private_ip：将实例内网IP切换到大版本实例前收集  after_change_private_ip：将实例内网IP切换到大版本实例后收集
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetVersion' => 'string',
            'isChangePrivateIp' => 'bool',
            'statisticsCollectionMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetVersion  目标版本。 高于实例当前的大版本，如当前为12，目标版本需要是13或14。
    * isChangePrivateIp  是否将实例内网IP切换到大版本实例  true：升级后切换当前实例的内网IP到大版本实例 false：升级后当前实例的内网IP不变，大版本实例使用新的内网IP
    * statisticsCollectionMode  统计信息收集方式。is_change_private_ip为true时必选  before_change_private_ip：将实例内网IP切换到大版本实例前收集  after_change_private_ip：将实例内网IP切换到大版本实例后收集
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetVersion' => null,
        'isChangePrivateIp' => null,
        'statisticsCollectionMode' => null
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
    * targetVersion  目标版本。 高于实例当前的大版本，如当前为12，目标版本需要是13或14。
    * isChangePrivateIp  是否将实例内网IP切换到大版本实例  true：升级后切换当前实例的内网IP到大版本实例 false：升级后当前实例的内网IP不变，大版本实例使用新的内网IP
    * statisticsCollectionMode  统计信息收集方式。is_change_private_ip为true时必选  before_change_private_ip：将实例内网IP切换到大版本实例前收集  after_change_private_ip：将实例内网IP切换到大版本实例后收集
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetVersion' => 'target_version',
            'isChangePrivateIp' => 'is_change_private_ip',
            'statisticsCollectionMode' => 'statistics_collection_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetVersion  目标版本。 高于实例当前的大版本，如当前为12，目标版本需要是13或14。
    * isChangePrivateIp  是否将实例内网IP切换到大版本实例  true：升级后切换当前实例的内网IP到大版本实例 false：升级后当前实例的内网IP不变，大版本实例使用新的内网IP
    * statisticsCollectionMode  统计信息收集方式。is_change_private_ip为true时必选  before_change_private_ip：将实例内网IP切换到大版本实例前收集  after_change_private_ip：将实例内网IP切换到大版本实例后收集
    *
    * @var string[]
    */
    protected static $setters = [
            'targetVersion' => 'setTargetVersion',
            'isChangePrivateIp' => 'setIsChangePrivateIp',
            'statisticsCollectionMode' => 'setStatisticsCollectionMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetVersion  目标版本。 高于实例当前的大版本，如当前为12，目标版本需要是13或14。
    * isChangePrivateIp  是否将实例内网IP切换到大版本实例  true：升级后切换当前实例的内网IP到大版本实例 false：升级后当前实例的内网IP不变，大版本实例使用新的内网IP
    * statisticsCollectionMode  统计信息收集方式。is_change_private_ip为true时必选  before_change_private_ip：将实例内网IP切换到大版本实例前收集  after_change_private_ip：将实例内网IP切换到大版本实例后收集
    *
    * @var string[]
    */
    protected static $getters = [
            'targetVersion' => 'getTargetVersion',
            'isChangePrivateIp' => 'getIsChangePrivateIp',
            'statisticsCollectionMode' => 'getStatisticsCollectionMode'
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
        $this->container['targetVersion'] = isset($data['targetVersion']) ? $data['targetVersion'] : null;
        $this->container['isChangePrivateIp'] = isset($data['isChangePrivateIp']) ? $data['isChangePrivateIp'] : null;
        $this->container['statisticsCollectionMode'] = isset($data['statisticsCollectionMode']) ? $data['statisticsCollectionMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['targetVersion'] === null) {
            $invalidProperties[] = "'targetVersion' can't be null";
        }
        if ($this->container['isChangePrivateIp'] === null) {
            $invalidProperties[] = "'isChangePrivateIp' can't be null";
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
    * Gets targetVersion
    *  目标版本。 高于实例当前的大版本，如当前为12，目标版本需要是13或14。
    *
    * @return string
    */
    public function getTargetVersion()
    {
        return $this->container['targetVersion'];
    }

    /**
    * Sets targetVersion
    *
    * @param string $targetVersion 目标版本。 高于实例当前的大版本，如当前为12，目标版本需要是13或14。
    *
    * @return $this
    */
    public function setTargetVersion($targetVersion)
    {
        $this->container['targetVersion'] = $targetVersion;
        return $this;
    }

    /**
    * Gets isChangePrivateIp
    *  是否将实例内网IP切换到大版本实例  true：升级后切换当前实例的内网IP到大版本实例 false：升级后当前实例的内网IP不变，大版本实例使用新的内网IP
    *
    * @return bool
    */
    public function getIsChangePrivateIp()
    {
        return $this->container['isChangePrivateIp'];
    }

    /**
    * Sets isChangePrivateIp
    *
    * @param bool $isChangePrivateIp 是否将实例内网IP切换到大版本实例  true：升级后切换当前实例的内网IP到大版本实例 false：升级后当前实例的内网IP不变，大版本实例使用新的内网IP
    *
    * @return $this
    */
    public function setIsChangePrivateIp($isChangePrivateIp)
    {
        $this->container['isChangePrivateIp'] = $isChangePrivateIp;
        return $this;
    }

    /**
    * Gets statisticsCollectionMode
    *  统计信息收集方式。is_change_private_ip为true时必选  before_change_private_ip：将实例内网IP切换到大版本实例前收集  after_change_private_ip：将实例内网IP切换到大版本实例后收集
    *
    * @return string|null
    */
    public function getStatisticsCollectionMode()
    {
        return $this->container['statisticsCollectionMode'];
    }

    /**
    * Sets statisticsCollectionMode
    *
    * @param string|null $statisticsCollectionMode 统计信息收集方式。is_change_private_ip为true时必选  before_change_private_ip：将实例内网IP切换到大版本实例前收集  after_change_private_ip：将实例内网IP切换到大版本实例后收集
    *
    * @return $this
    */
    public function setStatisticsCollectionMode($statisticsCollectionMode)
    {
        $this->container['statisticsCollectionMode'] = $statisticsCollectionMode;
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

