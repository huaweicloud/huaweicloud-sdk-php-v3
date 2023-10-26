<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CdmDeleteClusterReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CdmDeleteClusterReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keepLastManualBackup  日志备份数，填写为默认填0即可。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keepLastManualBackup' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keepLastManualBackup  日志备份数，填写为默认填0即可。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keepLastManualBackup' => 'int32'
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
    * keepLastManualBackup  日志备份数，填写为默认填0即可。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keepLastManualBackup' => 'keep_last_manual_backup'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keepLastManualBackup  日志备份数，填写为默认填0即可。
    *
    * @var string[]
    */
    protected static $setters = [
            'keepLastManualBackup' => 'setKeepLastManualBackup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keepLastManualBackup  日志备份数，填写为默认填0即可。
    *
    * @var string[]
    */
    protected static $getters = [
            'keepLastManualBackup' => 'getKeepLastManualBackup'
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
        $this->container['keepLastManualBackup'] = isset($data['keepLastManualBackup']) ? $data['keepLastManualBackup'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['keepLastManualBackup'] === null) {
            $invalidProperties[] = "'keepLastManualBackup' can't be null";
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
    * Gets keepLastManualBackup
    *  日志备份数，填写为默认填0即可。
    *
    * @return int
    */
    public function getKeepLastManualBackup()
    {
        return $this->container['keepLastManualBackup'];
    }

    /**
    * Sets keepLastManualBackup
    *
    * @param int $keepLastManualBackup 日志备份数，填写为默认填0即可。
    *
    * @return $this
    */
    public function setKeepLastManualBackup($keepLastManualBackup)
    {
        $this->container['keepLastManualBackup'] = $keepLastManualBackup;
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

