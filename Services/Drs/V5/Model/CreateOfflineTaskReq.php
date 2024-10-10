<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateOfflineTaskReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateOfflineTaskReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * baseInfo  baseInfo
    * targetDbInfo  targetDbInfo
    * backupInfo  backupInfo
    * options  options
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'baseInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\BackupJobBaseInfo',
            'targetDbInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\BackupJobEndpointInfo',
            'backupInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\BackupInfo',
            'options' => '\HuaweiCloud\SDK\Drs\V5\Model\BackupRestoreOptionInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * baseInfo  baseInfo
    * targetDbInfo  targetDbInfo
    * backupInfo  backupInfo
    * options  options
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'baseInfo' => null,
        'targetDbInfo' => null,
        'backupInfo' => null,
        'options' => null
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
    * baseInfo  baseInfo
    * targetDbInfo  targetDbInfo
    * backupInfo  backupInfo
    * options  options
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'baseInfo' => 'base_info',
            'targetDbInfo' => 'target_db_info',
            'backupInfo' => 'backup_info',
            'options' => 'options'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * baseInfo  baseInfo
    * targetDbInfo  targetDbInfo
    * backupInfo  backupInfo
    * options  options
    *
    * @var string[]
    */
    protected static $setters = [
            'baseInfo' => 'setBaseInfo',
            'targetDbInfo' => 'setTargetDbInfo',
            'backupInfo' => 'setBackupInfo',
            'options' => 'setOptions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * baseInfo  baseInfo
    * targetDbInfo  targetDbInfo
    * backupInfo  backupInfo
    * options  options
    *
    * @var string[]
    */
    protected static $getters = [
            'baseInfo' => 'getBaseInfo',
            'targetDbInfo' => 'getTargetDbInfo',
            'backupInfo' => 'getBackupInfo',
            'options' => 'getOptions'
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
        $this->container['baseInfo'] = isset($data['baseInfo']) ? $data['baseInfo'] : null;
        $this->container['targetDbInfo'] = isset($data['targetDbInfo']) ? $data['targetDbInfo'] : null;
        $this->container['backupInfo'] = isset($data['backupInfo']) ? $data['backupInfo'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['baseInfo'] === null) {
            $invalidProperties[] = "'baseInfo' can't be null";
        }
        if ($this->container['targetDbInfo'] === null) {
            $invalidProperties[] = "'targetDbInfo' can't be null";
        }
        if ($this->container['backupInfo'] === null) {
            $invalidProperties[] = "'backupInfo' can't be null";
        }
        if ($this->container['options'] === null) {
            $invalidProperties[] = "'options' can't be null";
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
    * Gets baseInfo
    *  baseInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\BackupJobBaseInfo
    */
    public function getBaseInfo()
    {
        return $this->container['baseInfo'];
    }

    /**
    * Sets baseInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\BackupJobBaseInfo $baseInfo baseInfo
    *
    * @return $this
    */
    public function setBaseInfo($baseInfo)
    {
        $this->container['baseInfo'] = $baseInfo;
        return $this;
    }

    /**
    * Gets targetDbInfo
    *  targetDbInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\BackupJobEndpointInfo
    */
    public function getTargetDbInfo()
    {
        return $this->container['targetDbInfo'];
    }

    /**
    * Sets targetDbInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\BackupJobEndpointInfo $targetDbInfo targetDbInfo
    *
    * @return $this
    */
    public function setTargetDbInfo($targetDbInfo)
    {
        $this->container['targetDbInfo'] = $targetDbInfo;
        return $this;
    }

    /**
    * Gets backupInfo
    *  backupInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\BackupInfo
    */
    public function getBackupInfo()
    {
        return $this->container['backupInfo'];
    }

    /**
    * Sets backupInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\BackupInfo $backupInfo backupInfo
    *
    * @return $this
    */
    public function setBackupInfo($backupInfo)
    {
        $this->container['backupInfo'] = $backupInfo;
        return $this;
    }

    /**
    * Gets options
    *  options
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\BackupRestoreOptionInfo
    */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
    * Sets options
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\BackupRestoreOptionInfo $options options
    *
    * @return $this
    */
    public function setOptions($options)
    {
        $this->container['options'] = $options;
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

