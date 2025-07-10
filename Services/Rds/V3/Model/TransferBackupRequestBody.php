<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TransferBackupRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TransferBackupRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backups  备份id列表
    * instanceId  实例id
    * destination  目标OBS桶名
    * prefix  目标前缀
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backups' => 'string[]',
            'instanceId' => 'string',
            'destination' => 'string',
            'prefix' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backups  备份id列表
    * instanceId  实例id
    * destination  目标OBS桶名
    * prefix  目标前缀
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backups' => null,
        'instanceId' => null,
        'destination' => null,
        'prefix' => null
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
    * backups  备份id列表
    * instanceId  实例id
    * destination  目标OBS桶名
    * prefix  目标前缀
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backups' => 'backups',
            'instanceId' => 'instance_id',
            'destination' => 'destination',
            'prefix' => 'prefix'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backups  备份id列表
    * instanceId  实例id
    * destination  目标OBS桶名
    * prefix  目标前缀
    *
    * @var string[]
    */
    protected static $setters = [
            'backups' => 'setBackups',
            'instanceId' => 'setInstanceId',
            'destination' => 'setDestination',
            'prefix' => 'setPrefix'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backups  备份id列表
    * instanceId  实例id
    * destination  目标OBS桶名
    * prefix  目标前缀
    *
    * @var string[]
    */
    protected static $getters = [
            'backups' => 'getBackups',
            'instanceId' => 'getInstanceId',
            'destination' => 'getDestination',
            'prefix' => 'getPrefix'
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
        $this->container['backups'] = isset($data['backups']) ? $data['backups'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['backups'] === null) {
            $invalidProperties[] = "'backups' can't be null";
        }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['destination'] === null) {
            $invalidProperties[] = "'destination' can't be null";
        }
            if ((mb_strlen($this->container['destination']) > 128)) {
                $invalidProperties[] = "invalid value for 'destination', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['destination']) < 0)) {
                $invalidProperties[] = "invalid value for 'destination', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['prefix']) && (mb_strlen($this->container['prefix']) > 128)) {
                $invalidProperties[] = "invalid value for 'prefix', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['prefix']) && (mb_strlen($this->container['prefix']) < 0)) {
                $invalidProperties[] = "invalid value for 'prefix', the character length must be bigger than or equal to 0.";
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
    * Gets backups
    *  备份id列表
    *
    * @return string[]
    */
    public function getBackups()
    {
        return $this->container['backups'];
    }

    /**
    * Sets backups
    *
    * @param string[] $backups 备份id列表
    *
    * @return $this
    */
    public function setBackups($backups)
    {
        $this->container['backups'] = $backups;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例id
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets destination
    *  目标OBS桶名
    *
    * @return string
    */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
    * Sets destination
    *
    * @param string $destination 目标OBS桶名
    *
    * @return $this
    */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;
        return $this;
    }

    /**
    * Gets prefix
    *  目标前缀
    *
    * @return string|null
    */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
    * Sets prefix
    *
    * @param string|null $prefix 目标前缀
    *
    * @return $this
    */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;
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

