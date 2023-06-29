<?php

namespace HuaweiCloud\SDK\Ges\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradeGraphReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpgradeGraphReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * upgradeVersion  升级到的版本，必须大于当前图版本。
    * forceUpgrade  是否强制升级。取值为true或false，默认为false。  - true：强制升级，会中断升级时已经在处理的任务，比如运行算法长任务，可能会造成少量请求失败。 - false：非强制升级，会等待已经运行的业务，升级过程可能较慢。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'upgradeVersion' => 'string',
            'forceUpgrade' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * upgradeVersion  升级到的版本，必须大于当前图版本。
    * forceUpgrade  是否强制升级。取值为true或false，默认为false。  - true：强制升级，会中断升级时已经在处理的任务，比如运行算法长任务，可能会造成少量请求失败。 - false：非强制升级，会等待已经运行的业务，升级过程可能较慢。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'upgradeVersion' => null,
        'forceUpgrade' => null
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
    * upgradeVersion  升级到的版本，必须大于当前图版本。
    * forceUpgrade  是否强制升级。取值为true或false，默认为false。  - true：强制升级，会中断升级时已经在处理的任务，比如运行算法长任务，可能会造成少量请求失败。 - false：非强制升级，会等待已经运行的业务，升级过程可能较慢。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'upgradeVersion' => 'upgrade_version',
            'forceUpgrade' => 'force_upgrade'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * upgradeVersion  升级到的版本，必须大于当前图版本。
    * forceUpgrade  是否强制升级。取值为true或false，默认为false。  - true：强制升级，会中断升级时已经在处理的任务，比如运行算法长任务，可能会造成少量请求失败。 - false：非强制升级，会等待已经运行的业务，升级过程可能较慢。
    *
    * @var string[]
    */
    protected static $setters = [
            'upgradeVersion' => 'setUpgradeVersion',
            'forceUpgrade' => 'setForceUpgrade'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * upgradeVersion  升级到的版本，必须大于当前图版本。
    * forceUpgrade  是否强制升级。取值为true或false，默认为false。  - true：强制升级，会中断升级时已经在处理的任务，比如运行算法长任务，可能会造成少量请求失败。 - false：非强制升级，会等待已经运行的业务，升级过程可能较慢。
    *
    * @var string[]
    */
    protected static $getters = [
            'upgradeVersion' => 'getUpgradeVersion',
            'forceUpgrade' => 'getForceUpgrade'
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
        $this->container['upgradeVersion'] = isset($data['upgradeVersion']) ? $data['upgradeVersion'] : null;
        $this->container['forceUpgrade'] = isset($data['forceUpgrade']) ? $data['forceUpgrade'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['upgradeVersion'] === null) {
            $invalidProperties[] = "'upgradeVersion' can't be null";
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
    * Gets upgradeVersion
    *  升级到的版本，必须大于当前图版本。
    *
    * @return string
    */
    public function getUpgradeVersion()
    {
        return $this->container['upgradeVersion'];
    }

    /**
    * Sets upgradeVersion
    *
    * @param string $upgradeVersion 升级到的版本，必须大于当前图版本。
    *
    * @return $this
    */
    public function setUpgradeVersion($upgradeVersion)
    {
        $this->container['upgradeVersion'] = $upgradeVersion;
        return $this;
    }

    /**
    * Gets forceUpgrade
    *  是否强制升级。取值为true或false，默认为false。  - true：强制升级，会中断升级时已经在处理的任务，比如运行算法长任务，可能会造成少量请求失败。 - false：非强制升级，会等待已经运行的业务，升级过程可能较慢。
    *
    * @return bool|null
    */
    public function getForceUpgrade()
    {
        return $this->container['forceUpgrade'];
    }

    /**
    * Sets forceUpgrade
    *
    * @param bool|null $forceUpgrade 是否强制升级。取值为true或false，默认为false。  - true：强制升级，会中断升级时已经在处理的任务，比如运行算法长任务，可能会造成少量请求失败。 - false：非强制升级，会等待已经运行的业务，升级过程可能较慢。
    *
    * @return $this
    */
    public function setForceUpgrade($forceUpgrade)
    {
        $this->container['forceUpgrade'] = $forceUpgrade;
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

