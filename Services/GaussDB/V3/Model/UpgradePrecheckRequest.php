<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradePrecheckRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpgradePrecheckRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * databasesInstanceInfos  **参数解释**：  升级预检查实例信息。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'databasesInstanceInfos' => '\HuaweiCloud\SDK\GaussDB\V3\Model\PreCheckForUpgradeDatabasesSingleInstance[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * databasesInstanceInfos  **参数解释**：  升级预检查实例信息。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'databasesInstanceInfos' => null
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
    * databasesInstanceInfos  **参数解释**：  升级预检查实例信息。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'databasesInstanceInfos' => 'databases_instance_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * databasesInstanceInfos  **参数解释**：  升级预检查实例信息。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'databasesInstanceInfos' => 'setDatabasesInstanceInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * databasesInstanceInfos  **参数解释**：  升级预检查实例信息。  **约束限制**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'databasesInstanceInfos' => 'getDatabasesInstanceInfos'
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
        $this->container['databasesInstanceInfos'] = isset($data['databasesInstanceInfos']) ? $data['databasesInstanceInfos'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['databasesInstanceInfos'] === null) {
            $invalidProperties[] = "'databasesInstanceInfos' can't be null";
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
    * Gets databasesInstanceInfos
    *  **参数解释**：  升级预检查实例信息。  **约束限制**：  不涉及。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\PreCheckForUpgradeDatabasesSingleInstance[]
    */
    public function getDatabasesInstanceInfos()
    {
        return $this->container['databasesInstanceInfos'];
    }

    /**
    * Sets databasesInstanceInfos
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\PreCheckForUpgradeDatabasesSingleInstance[] $databasesInstanceInfos **参数解释**：  升级预检查实例信息。  **约束限制**：  不涉及。
    *
    * @return $this
    */
    public function setDatabasesInstanceInfos($databasesInstanceInfos)
    {
        $this->container['databasesInstanceInfos'] = $databasesInstanceInfos;
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

