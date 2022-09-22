<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InitTargetServer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InitTargetServer';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * disks  推荐的目的端服务器的磁盘信息
    * volumeGroups  Linux必选，如果没有卷组，输入[]
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'disks' => '\HuaweiCloud\SDK\Sms\V3\Model\DiskIntargetServer[]',
            'volumeGroups' => '\HuaweiCloud\SDK\Sms\V3\Model\VolumeGroups[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * disks  推荐的目的端服务器的磁盘信息
    * volumeGroups  Linux必选，如果没有卷组，输入[]
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'disks' => null,
        'volumeGroups' => null
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
    * disks  推荐的目的端服务器的磁盘信息
    * volumeGroups  Linux必选，如果没有卷组，输入[]
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'disks' => 'disks',
            'volumeGroups' => 'volume_groups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * disks  推荐的目的端服务器的磁盘信息
    * volumeGroups  Linux必选，如果没有卷组，输入[]
    *
    * @var string[]
    */
    protected static $setters = [
            'disks' => 'setDisks',
            'volumeGroups' => 'setVolumeGroups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * disks  推荐的目的端服务器的磁盘信息
    * volumeGroups  Linux必选，如果没有卷组，输入[]
    *
    * @var string[]
    */
    protected static $getters = [
            'disks' => 'getDisks',
            'volumeGroups' => 'getVolumeGroups'
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
        $this->container['disks'] = isset($data['disks']) ? $data['disks'] : null;
        $this->container['volumeGroups'] = isset($data['volumeGroups']) ? $data['volumeGroups'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['disks'] === null) {
            $invalidProperties[] = "'disks' can't be null";
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
    * Gets disks
    *  推荐的目的端服务器的磁盘信息
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\DiskIntargetServer[]
    */
    public function getDisks()
    {
        return $this->container['disks'];
    }

    /**
    * Sets disks
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\DiskIntargetServer[] $disks 推荐的目的端服务器的磁盘信息
    *
    * @return $this
    */
    public function setDisks($disks)
    {
        $this->container['disks'] = $disks;
        return $this;
    }

    /**
    * Gets volumeGroups
    *  Linux必选，如果没有卷组，输入[]
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\VolumeGroups[]|null
    */
    public function getVolumeGroups()
    {
        return $this->container['volumeGroups'];
    }

    /**
    * Sets volumeGroups
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\VolumeGroups[]|null $volumeGroups Linux必选，如果没有卷组，输入[]
    *
    * @return $this
    */
    public function setVolumeGroups($volumeGroups)
    {
        $this->container['volumeGroups'] = $volumeGroups;
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

