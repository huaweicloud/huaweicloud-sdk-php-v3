<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMajorVersionFeatureResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMajorVersionFeatureResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  版本名称。
    * supportUpgradeVersion  支持升级的版本列表。
    * supportRecoverVersion  支持备份恢复的版本列表。
    * supportFileStream  是否支持FileStream特性。
    * supportTde  是否支持透明数据加密。
    * supportAlwaysOn  是否支持Always On。
    * supportReadOnly  是否支持只读。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'supportUpgradeVersion' => 'string[]',
            'supportRecoverVersion' => 'string[]',
            'supportFileStream' => 'bool',
            'supportTde' => 'bool',
            'supportAlwaysOn' => 'bool',
            'supportReadOnly' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  版本名称。
    * supportUpgradeVersion  支持升级的版本列表。
    * supportRecoverVersion  支持备份恢复的版本列表。
    * supportFileStream  是否支持FileStream特性。
    * supportTde  是否支持透明数据加密。
    * supportAlwaysOn  是否支持Always On。
    * supportReadOnly  是否支持只读。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'supportUpgradeVersion' => null,
        'supportRecoverVersion' => null,
        'supportFileStream' => null,
        'supportTde' => null,
        'supportAlwaysOn' => null,
        'supportReadOnly' => null
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
    * version  版本名称。
    * supportUpgradeVersion  支持升级的版本列表。
    * supportRecoverVersion  支持备份恢复的版本列表。
    * supportFileStream  是否支持FileStream特性。
    * supportTde  是否支持透明数据加密。
    * supportAlwaysOn  是否支持Always On。
    * supportReadOnly  是否支持只读。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'supportUpgradeVersion' => 'support_upgrade_version',
            'supportRecoverVersion' => 'support_recover_version',
            'supportFileStream' => 'support_file_stream',
            'supportTde' => 'support_tde',
            'supportAlwaysOn' => 'support_always_on',
            'supportReadOnly' => 'support_read_only'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  版本名称。
    * supportUpgradeVersion  支持升级的版本列表。
    * supportRecoverVersion  支持备份恢复的版本列表。
    * supportFileStream  是否支持FileStream特性。
    * supportTde  是否支持透明数据加密。
    * supportAlwaysOn  是否支持Always On。
    * supportReadOnly  是否支持只读。
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'supportUpgradeVersion' => 'setSupportUpgradeVersion',
            'supportRecoverVersion' => 'setSupportRecoverVersion',
            'supportFileStream' => 'setSupportFileStream',
            'supportTde' => 'setSupportTde',
            'supportAlwaysOn' => 'setSupportAlwaysOn',
            'supportReadOnly' => 'setSupportReadOnly'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  版本名称。
    * supportUpgradeVersion  支持升级的版本列表。
    * supportRecoverVersion  支持备份恢复的版本列表。
    * supportFileStream  是否支持FileStream特性。
    * supportTde  是否支持透明数据加密。
    * supportAlwaysOn  是否支持Always On。
    * supportReadOnly  是否支持只读。
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'supportUpgradeVersion' => 'getSupportUpgradeVersion',
            'supportRecoverVersion' => 'getSupportRecoverVersion',
            'supportFileStream' => 'getSupportFileStream',
            'supportTde' => 'getSupportTde',
            'supportAlwaysOn' => 'getSupportAlwaysOn',
            'supportReadOnly' => 'getSupportReadOnly'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['supportUpgradeVersion'] = isset($data['supportUpgradeVersion']) ? $data['supportUpgradeVersion'] : null;
        $this->container['supportRecoverVersion'] = isset($data['supportRecoverVersion']) ? $data['supportRecoverVersion'] : null;
        $this->container['supportFileStream'] = isset($data['supportFileStream']) ? $data['supportFileStream'] : null;
        $this->container['supportTde'] = isset($data['supportTde']) ? $data['supportTde'] : null;
        $this->container['supportAlwaysOn'] = isset($data['supportAlwaysOn']) ? $data['supportAlwaysOn'] : null;
        $this->container['supportReadOnly'] = isset($data['supportReadOnly']) ? $data['supportReadOnly'] : null;
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
    * Gets version
    *  版本名称。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 版本名称。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets supportUpgradeVersion
    *  支持升级的版本列表。
    *
    * @return string[]|null
    */
    public function getSupportUpgradeVersion()
    {
        return $this->container['supportUpgradeVersion'];
    }

    /**
    * Sets supportUpgradeVersion
    *
    * @param string[]|null $supportUpgradeVersion 支持升级的版本列表。
    *
    * @return $this
    */
    public function setSupportUpgradeVersion($supportUpgradeVersion)
    {
        $this->container['supportUpgradeVersion'] = $supportUpgradeVersion;
        return $this;
    }

    /**
    * Gets supportRecoverVersion
    *  支持备份恢复的版本列表。
    *
    * @return string[]|null
    */
    public function getSupportRecoverVersion()
    {
        return $this->container['supportRecoverVersion'];
    }

    /**
    * Sets supportRecoverVersion
    *
    * @param string[]|null $supportRecoverVersion 支持备份恢复的版本列表。
    *
    * @return $this
    */
    public function setSupportRecoverVersion($supportRecoverVersion)
    {
        $this->container['supportRecoverVersion'] = $supportRecoverVersion;
        return $this;
    }

    /**
    * Gets supportFileStream
    *  是否支持FileStream特性。
    *
    * @return bool|null
    */
    public function getSupportFileStream()
    {
        return $this->container['supportFileStream'];
    }

    /**
    * Sets supportFileStream
    *
    * @param bool|null $supportFileStream 是否支持FileStream特性。
    *
    * @return $this
    */
    public function setSupportFileStream($supportFileStream)
    {
        $this->container['supportFileStream'] = $supportFileStream;
        return $this;
    }

    /**
    * Gets supportTde
    *  是否支持透明数据加密。
    *
    * @return bool|null
    */
    public function getSupportTde()
    {
        return $this->container['supportTde'];
    }

    /**
    * Sets supportTde
    *
    * @param bool|null $supportTde 是否支持透明数据加密。
    *
    * @return $this
    */
    public function setSupportTde($supportTde)
    {
        $this->container['supportTde'] = $supportTde;
        return $this;
    }

    /**
    * Gets supportAlwaysOn
    *  是否支持Always On。
    *
    * @return bool|null
    */
    public function getSupportAlwaysOn()
    {
        return $this->container['supportAlwaysOn'];
    }

    /**
    * Sets supportAlwaysOn
    *
    * @param bool|null $supportAlwaysOn 是否支持Always On。
    *
    * @return $this
    */
    public function setSupportAlwaysOn($supportAlwaysOn)
    {
        $this->container['supportAlwaysOn'] = $supportAlwaysOn;
        return $this;
    }

    /**
    * Gets supportReadOnly
    *  是否支持只读。
    *
    * @return bool|null
    */
    public function getSupportReadOnly()
    {
        return $this->container['supportReadOnly'];
    }

    /**
    * Sets supportReadOnly
    *
    * @param bool|null $supportReadOnly 是否支持只读。
    *
    * @return $this
    */
    public function setSupportReadOnly($supportReadOnly)
    {
        $this->container['supportReadOnly'] = $supportReadOnly;
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

