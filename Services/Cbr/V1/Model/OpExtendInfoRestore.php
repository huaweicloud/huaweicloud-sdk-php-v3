<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpExtendInfoRestore implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpExtendInfoRestore';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupId  备份副本ID
    * backupName  备份名称
    * targetResourceId  恢复目标资源ID
    * targetResourceName  恢复目标资源名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupId' => 'string',
            'backupName' => 'string',
            'targetResourceId' => 'string',
            'targetResourceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupId  备份副本ID
    * backupName  备份名称
    * targetResourceId  恢复目标资源ID
    * targetResourceName  恢复目标资源名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupId' => null,
        'backupName' => null,
        'targetResourceId' => null,
        'targetResourceName' => null
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
    * backupId  备份副本ID
    * backupName  备份名称
    * targetResourceId  恢复目标资源ID
    * targetResourceName  恢复目标资源名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupId' => 'backup_id',
            'backupName' => 'backup_name',
            'targetResourceId' => 'target_resource_id',
            'targetResourceName' => 'target_resource_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupId  备份副本ID
    * backupName  备份名称
    * targetResourceId  恢复目标资源ID
    * targetResourceName  恢复目标资源名称
    *
    * @var string[]
    */
    protected static $setters = [
            'backupId' => 'setBackupId',
            'backupName' => 'setBackupName',
            'targetResourceId' => 'setTargetResourceId',
            'targetResourceName' => 'setTargetResourceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupId  备份副本ID
    * backupName  备份名称
    * targetResourceId  恢复目标资源ID
    * targetResourceName  恢复目标资源名称
    *
    * @var string[]
    */
    protected static $getters = [
            'backupId' => 'getBackupId',
            'backupName' => 'getBackupName',
            'targetResourceId' => 'getTargetResourceId',
            'targetResourceName' => 'getTargetResourceName'
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
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['backupName'] = isset($data['backupName']) ? $data['backupName'] : null;
        $this->container['targetResourceId'] = isset($data['targetResourceId']) ? $data['targetResourceId'] : null;
        $this->container['targetResourceName'] = isset($data['targetResourceName']) ? $data['targetResourceName'] : null;
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
    * Gets backupId
    *  备份副本ID
    *
    * @return string|null
    */
    public function getBackupId()
    {
        return $this->container['backupId'];
    }

    /**
    * Sets backupId
    *
    * @param string|null $backupId 备份副本ID
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
        return $this;
    }

    /**
    * Gets backupName
    *  备份名称
    *
    * @return string|null
    */
    public function getBackupName()
    {
        return $this->container['backupName'];
    }

    /**
    * Sets backupName
    *
    * @param string|null $backupName 备份名称
    *
    * @return $this
    */
    public function setBackupName($backupName)
    {
        $this->container['backupName'] = $backupName;
        return $this;
    }

    /**
    * Gets targetResourceId
    *  恢复目标资源ID
    *
    * @return string|null
    */
    public function getTargetResourceId()
    {
        return $this->container['targetResourceId'];
    }

    /**
    * Sets targetResourceId
    *
    * @param string|null $targetResourceId 恢复目标资源ID
    *
    * @return $this
    */
    public function setTargetResourceId($targetResourceId)
    {
        $this->container['targetResourceId'] = $targetResourceId;
        return $this;
    }

    /**
    * Gets targetResourceName
    *  恢复目标资源名称
    *
    * @return string|null
    */
    public function getTargetResourceName()
    {
        return $this->container['targetResourceName'];
    }

    /**
    * Sets targetResourceName
    *
    * @param string|null $targetResourceName 恢复目标资源名称
    *
    * @return $this
    */
    public function setTargetResourceName($targetResourceName)
    {
        $this->container['targetResourceName'] = $targetResourceName;
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

