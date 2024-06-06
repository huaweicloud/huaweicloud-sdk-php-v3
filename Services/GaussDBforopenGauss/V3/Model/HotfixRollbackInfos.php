<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HotfixRollbackInfos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HotfixRollbackInfos';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  热补丁版本。
    * commonPatch  通用/非通用补丁信息。 枚举值：   \"common\": 通用补丁。   \"certain\": 定制补丁。
    * backupSensitive  是否和备份相关。
    * descripition  补丁的描述信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'commonPatch' => 'string',
            'backupSensitive' => 'bool',
            'descripition' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  热补丁版本。
    * commonPatch  通用/非通用补丁信息。 枚举值：   \"common\": 通用补丁。   \"certain\": 定制补丁。
    * backupSensitive  是否和备份相关。
    * descripition  补丁的描述信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'commonPatch' => null,
        'backupSensitive' => null,
        'descripition' => null
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
    * version  热补丁版本。
    * commonPatch  通用/非通用补丁信息。 枚举值：   \"common\": 通用补丁。   \"certain\": 定制补丁。
    * backupSensitive  是否和备份相关。
    * descripition  补丁的描述信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'commonPatch' => 'common_patch',
            'backupSensitive' => 'backup_sensitive',
            'descripition' => 'descripition'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  热补丁版本。
    * commonPatch  通用/非通用补丁信息。 枚举值：   \"common\": 通用补丁。   \"certain\": 定制补丁。
    * backupSensitive  是否和备份相关。
    * descripition  补丁的描述信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'commonPatch' => 'setCommonPatch',
            'backupSensitive' => 'setBackupSensitive',
            'descripition' => 'setDescripition'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  热补丁版本。
    * commonPatch  通用/非通用补丁信息。 枚举值：   \"common\": 通用补丁。   \"certain\": 定制补丁。
    * backupSensitive  是否和备份相关。
    * descripition  补丁的描述信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'commonPatch' => 'getCommonPatch',
            'backupSensitive' => 'getBackupSensitive',
            'descripition' => 'getDescripition'
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
        $this->container['commonPatch'] = isset($data['commonPatch']) ? $data['commonPatch'] : null;
        $this->container['backupSensitive'] = isset($data['backupSensitive']) ? $data['backupSensitive'] : null;
        $this->container['descripition'] = isset($data['descripition']) ? $data['descripition'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 1000)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['commonPatch']) && (mb_strlen($this->container['commonPatch']) > 1000)) {
                $invalidProperties[] = "invalid value for 'commonPatch', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['commonPatch']) && (mb_strlen($this->container['commonPatch']) < 0)) {
                $invalidProperties[] = "invalid value for 'commonPatch', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['descripition']) && (mb_strlen($this->container['descripition']) > 1000)) {
                $invalidProperties[] = "invalid value for 'descripition', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['descripition']) && (mb_strlen($this->container['descripition']) < 0)) {
                $invalidProperties[] = "invalid value for 'descripition', the character length must be bigger than or equal to 0.";
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
    * Gets version
    *  热补丁版本。
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
    * @param string|null $version 热补丁版本。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets commonPatch
    *  通用/非通用补丁信息。 枚举值：   \"common\": 通用补丁。   \"certain\": 定制补丁。
    *
    * @return string|null
    */
    public function getCommonPatch()
    {
        return $this->container['commonPatch'];
    }

    /**
    * Sets commonPatch
    *
    * @param string|null $commonPatch 通用/非通用补丁信息。 枚举值：   \"common\": 通用补丁。   \"certain\": 定制补丁。
    *
    * @return $this
    */
    public function setCommonPatch($commonPatch)
    {
        $this->container['commonPatch'] = $commonPatch;
        return $this;
    }

    /**
    * Gets backupSensitive
    *  是否和备份相关。
    *
    * @return bool|null
    */
    public function getBackupSensitive()
    {
        return $this->container['backupSensitive'];
    }

    /**
    * Sets backupSensitive
    *
    * @param bool|null $backupSensitive 是否和备份相关。
    *
    * @return $this
    */
    public function setBackupSensitive($backupSensitive)
    {
        $this->container['backupSensitive'] = $backupSensitive;
        return $this;
    }

    /**
    * Gets descripition
    *  补丁的描述信息。
    *
    * @return string|null
    */
    public function getDescripition()
    {
        return $this->container['descripition'];
    }

    /**
    * Sets descripition
    *
    * @param string|null $descripition 补丁的描述信息。
    *
    * @return $this
    */
    public function setDescripition($descripition)
    {
        $this->container['descripition'] = $descripition;
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

