<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetConfigurationRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetConfigurationRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * defaultBackupMethod  备份方式 - EBACKUP - PHYSICALBACKUP
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'defaultBackupMethod' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * defaultBackupMethod  备份方式 - EBACKUP - PHYSICALBACKUP
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'defaultBackupMethod' => null
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
    * defaultBackupMethod  备份方式 - EBACKUP - PHYSICALBACKUP
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'defaultBackupMethod' => 'default_backup_method'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * defaultBackupMethod  备份方式 - EBACKUP - PHYSICALBACKUP
    *
    * @var string[]
    */
    protected static $setters = [
            'defaultBackupMethod' => 'setDefaultBackupMethod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * defaultBackupMethod  备份方式 - EBACKUP - PHYSICALBACKUP
    *
    * @var string[]
    */
    protected static $getters = [
            'defaultBackupMethod' => 'getDefaultBackupMethod'
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
        $this->container['defaultBackupMethod'] = isset($data['defaultBackupMethod']) ? $data['defaultBackupMethod'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['defaultBackupMethod'] === null) {
            $invalidProperties[] = "'defaultBackupMethod' can't be null";
        }
            if ((mb_strlen($this->container['defaultBackupMethod']) > 36)) {
                $invalidProperties[] = "invalid value for 'defaultBackupMethod', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['defaultBackupMethod']) < 0)) {
                $invalidProperties[] = "invalid value for 'defaultBackupMethod', the character length must be bigger than or equal to 0.";
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
    * Gets defaultBackupMethod
    *  备份方式 - EBACKUP - PHYSICALBACKUP
    *
    * @return string
    */
    public function getDefaultBackupMethod()
    {
        return $this->container['defaultBackupMethod'];
    }

    /**
    * Sets defaultBackupMethod
    *
    * @param string $defaultBackupMethod 备份方式 - EBACKUP - PHYSICALBACKUP
    *
    * @return $this
    */
    public function setDefaultBackupMethod($defaultBackupMethod)
    {
        $this->container['defaultBackupMethod'] = $defaultBackupMethod;
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

