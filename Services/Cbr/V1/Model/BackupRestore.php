<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackupRestore implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackupRestore';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mappings  恢复的映射关系(整机恢复时必填，卷恢复时可选但是不会用到填写的值）
    * powerOn  恢复后是否开始，默认开机。
    * serverId  恢复的目标虚拟机ID（整机恢复时必填）
    * volumeId  恢复的目标卷ID（卷恢复时必填）
    * resourceId  待恢复的目标资源ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mappings' => '\HuaweiCloud\SDK\Cbr\V1\Model\BackupRestoreServerMapping[]',
            'powerOn' => 'bool',
            'serverId' => 'string',
            'volumeId' => 'string',
            'resourceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mappings  恢复的映射关系(整机恢复时必填，卷恢复时可选但是不会用到填写的值）
    * powerOn  恢复后是否开始，默认开机。
    * serverId  恢复的目标虚拟机ID（整机恢复时必填）
    * volumeId  恢复的目标卷ID（卷恢复时必填）
    * resourceId  待恢复的目标资源ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mappings' => null,
        'powerOn' => null,
        'serverId' => null,
        'volumeId' => null,
        'resourceId' => null
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
    * mappings  恢复的映射关系(整机恢复时必填，卷恢复时可选但是不会用到填写的值）
    * powerOn  恢复后是否开始，默认开机。
    * serverId  恢复的目标虚拟机ID（整机恢复时必填）
    * volumeId  恢复的目标卷ID（卷恢复时必填）
    * resourceId  待恢复的目标资源ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mappings' => 'mappings',
            'powerOn' => 'power_on',
            'serverId' => 'server_id',
            'volumeId' => 'volume_id',
            'resourceId' => 'resource_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mappings  恢复的映射关系(整机恢复时必填，卷恢复时可选但是不会用到填写的值）
    * powerOn  恢复后是否开始，默认开机。
    * serverId  恢复的目标虚拟机ID（整机恢复时必填）
    * volumeId  恢复的目标卷ID（卷恢复时必填）
    * resourceId  待恢复的目标资源ID
    *
    * @var string[]
    */
    protected static $setters = [
            'mappings' => 'setMappings',
            'powerOn' => 'setPowerOn',
            'serverId' => 'setServerId',
            'volumeId' => 'setVolumeId',
            'resourceId' => 'setResourceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mappings  恢复的映射关系(整机恢复时必填，卷恢复时可选但是不会用到填写的值）
    * powerOn  恢复后是否开始，默认开机。
    * serverId  恢复的目标虚拟机ID（整机恢复时必填）
    * volumeId  恢复的目标卷ID（卷恢复时必填）
    * resourceId  待恢复的目标资源ID
    *
    * @var string[]
    */
    protected static $getters = [
            'mappings' => 'getMappings',
            'powerOn' => 'getPowerOn',
            'serverId' => 'getServerId',
            'volumeId' => 'getVolumeId',
            'resourceId' => 'getResourceId'
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
        $this->container['mappings'] = isset($data['mappings']) ? $data['mappings'] : null;
        $this->container['powerOn'] = isset($data['powerOn']) ? $data['powerOn'] : true;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['volumeId'] = isset($data['volumeId']) ? $data['volumeId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
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
    * Gets mappings
    *  恢复的映射关系(整机恢复时必填，卷恢复时可选但是不会用到填写的值）
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\BackupRestoreServerMapping[]|null
    */
    public function getMappings()
    {
        return $this->container['mappings'];
    }

    /**
    * Sets mappings
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\BackupRestoreServerMapping[]|null $mappings 恢复的映射关系(整机恢复时必填，卷恢复时可选但是不会用到填写的值）
    *
    * @return $this
    */
    public function setMappings($mappings)
    {
        $this->container['mappings'] = $mappings;
        return $this;
    }

    /**
    * Gets powerOn
    *  恢复后是否开始，默认开机。
    *
    * @return bool|null
    */
    public function getPowerOn()
    {
        return $this->container['powerOn'];
    }

    /**
    * Sets powerOn
    *
    * @param bool|null $powerOn 恢复后是否开始，默认开机。
    *
    * @return $this
    */
    public function setPowerOn($powerOn)
    {
        $this->container['powerOn'] = $powerOn;
        return $this;
    }

    /**
    * Gets serverId
    *  恢复的目标虚拟机ID（整机恢复时必填）
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId 恢复的目标虚拟机ID（整机恢复时必填）
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets volumeId
    *  恢复的目标卷ID（卷恢复时必填）
    *
    * @return string|null
    */
    public function getVolumeId()
    {
        return $this->container['volumeId'];
    }

    /**
    * Sets volumeId
    *
    * @param string|null $volumeId 恢复的目标卷ID（卷恢复时必填）
    *
    * @return $this
    */
    public function setVolumeId($volumeId)
    {
        $this->container['volumeId'] = $volumeId;
        return $this;
    }

    /**
    * Gets resourceId
    *  待恢复的目标资源ID
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 待恢复的目标资源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
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

