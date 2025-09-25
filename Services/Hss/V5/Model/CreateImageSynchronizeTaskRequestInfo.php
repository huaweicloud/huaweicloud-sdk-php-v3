<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateImageSynchronizeTaskRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateImageSynchronizeTaskRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * syncAllRegistries  同步全部仓库镜像 | true 同步全部镜像 false 指定镜像仓同步
    * registryInfo  待同步镜像仓
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'syncAllRegistries' => 'bool',
            'registryInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\CreateImageSynchronizeTaskRequestInfoRegistryInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * syncAllRegistries  同步全部仓库镜像 | true 同步全部镜像 false 指定镜像仓同步
    * registryInfo  待同步镜像仓
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'syncAllRegistries' => null,
        'registryInfo' => null
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
    * syncAllRegistries  同步全部仓库镜像 | true 同步全部镜像 false 指定镜像仓同步
    * registryInfo  待同步镜像仓
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'syncAllRegistries' => 'sync_all_registries',
            'registryInfo' => 'registry_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * syncAllRegistries  同步全部仓库镜像 | true 同步全部镜像 false 指定镜像仓同步
    * registryInfo  待同步镜像仓
    *
    * @var string[]
    */
    protected static $setters = [
            'syncAllRegistries' => 'setSyncAllRegistries',
            'registryInfo' => 'setRegistryInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * syncAllRegistries  同步全部仓库镜像 | true 同步全部镜像 false 指定镜像仓同步
    * registryInfo  待同步镜像仓
    *
    * @var string[]
    */
    protected static $getters = [
            'syncAllRegistries' => 'getSyncAllRegistries',
            'registryInfo' => 'getRegistryInfo'
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
        $this->container['syncAllRegistries'] = isset($data['syncAllRegistries']) ? $data['syncAllRegistries'] : null;
        $this->container['registryInfo'] = isset($data['registryInfo']) ? $data['registryInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['syncAllRegistries'] === null) {
            $invalidProperties[] = "'syncAllRegistries' can't be null";
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
    * Gets syncAllRegistries
    *  同步全部仓库镜像 | true 同步全部镜像 false 指定镜像仓同步
    *
    * @return bool
    */
    public function getSyncAllRegistries()
    {
        return $this->container['syncAllRegistries'];
    }

    /**
    * Sets syncAllRegistries
    *
    * @param bool $syncAllRegistries 同步全部仓库镜像 | true 同步全部镜像 false 指定镜像仓同步
    *
    * @return $this
    */
    public function setSyncAllRegistries($syncAllRegistries)
    {
        $this->container['syncAllRegistries'] = $syncAllRegistries;
        return $this;
    }

    /**
    * Gets registryInfo
    *  待同步镜像仓
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\CreateImageSynchronizeTaskRequestInfoRegistryInfo[]|null
    */
    public function getRegistryInfo()
    {
        return $this->container['registryInfo'];
    }

    /**
    * Sets registryInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\CreateImageSynchronizeTaskRequestInfoRegistryInfo[]|null $registryInfo 待同步镜像仓
    *
    * @return $this
    */
    public function setRegistryInfo($registryInfo)
    {
        $this->container['registryInfo'] = $registryInfo;
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

