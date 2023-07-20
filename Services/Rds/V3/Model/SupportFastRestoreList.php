<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SupportFastRestoreList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SupportFastRestoreList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例id。
    * isSupportFastTableRestore  表级恢复是否支持极速恢复。
    * isSupportFastDatabaseRestore  库级恢复是否支持极速恢复。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'isSupportFastTableRestore' => 'bool',
            'isSupportFastDatabaseRestore' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例id。
    * isSupportFastTableRestore  表级恢复是否支持极速恢复。
    * isSupportFastDatabaseRestore  库级恢复是否支持极速恢复。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'isSupportFastTableRestore' => null,
        'isSupportFastDatabaseRestore' => null
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
    * instanceId  实例id。
    * isSupportFastTableRestore  表级恢复是否支持极速恢复。
    * isSupportFastDatabaseRestore  库级恢复是否支持极速恢复。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'isSupportFastTableRestore' => 'is_support_fast_table_restore',
            'isSupportFastDatabaseRestore' => 'is_support_fast_database_restore'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例id。
    * isSupportFastTableRestore  表级恢复是否支持极速恢复。
    * isSupportFastDatabaseRestore  库级恢复是否支持极速恢复。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'isSupportFastTableRestore' => 'setIsSupportFastTableRestore',
            'isSupportFastDatabaseRestore' => 'setIsSupportFastDatabaseRestore'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例id。
    * isSupportFastTableRestore  表级恢复是否支持极速恢复。
    * isSupportFastDatabaseRestore  库级恢复是否支持极速恢复。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'isSupportFastTableRestore' => 'getIsSupportFastTableRestore',
            'isSupportFastDatabaseRestore' => 'getIsSupportFastDatabaseRestore'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['isSupportFastTableRestore'] = isset($data['isSupportFastTableRestore']) ? $data['isSupportFastTableRestore'] : null;
        $this->container['isSupportFastDatabaseRestore'] = isset($data['isSupportFastDatabaseRestore']) ? $data['isSupportFastDatabaseRestore'] : null;
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
    * Gets instanceId
    *  实例id。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例id。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets isSupportFastTableRestore
    *  表级恢复是否支持极速恢复。
    *
    * @return bool|null
    */
    public function getIsSupportFastTableRestore()
    {
        return $this->container['isSupportFastTableRestore'];
    }

    /**
    * Sets isSupportFastTableRestore
    *
    * @param bool|null $isSupportFastTableRestore 表级恢复是否支持极速恢复。
    *
    * @return $this
    */
    public function setIsSupportFastTableRestore($isSupportFastTableRestore)
    {
        $this->container['isSupportFastTableRestore'] = $isSupportFastTableRestore;
        return $this;
    }

    /**
    * Gets isSupportFastDatabaseRestore
    *  库级恢复是否支持极速恢复。
    *
    * @return bool|null
    */
    public function getIsSupportFastDatabaseRestore()
    {
        return $this->container['isSupportFastDatabaseRestore'];
    }

    /**
    * Sets isSupportFastDatabaseRestore
    *
    * @param bool|null $isSupportFastDatabaseRestore 库级恢复是否支持极速恢复。
    *
    * @return $this
    */
    public function setIsSupportFastDatabaseRestore($isSupportFastDatabaseRestore)
    {
        $this->container['isSupportFastDatabaseRestore'] = $isSupportFastDatabaseRestore;
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

