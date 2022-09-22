<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PutDiskInfoReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PutDiskInfoReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * disks  更新的磁盘信息
    * volumegroups  更新的卷信息
    * btrfsList  更新的btrfs信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'disks' => '\HuaweiCloud\SDK\Sms\V3\Model\ServerDisk[]',
            'volumegroups' => '\HuaweiCloud\SDK\Sms\V3\Model\VolumeGroups[]',
            'btrfsList' => '\HuaweiCloud\SDK\Sms\V3\Model\BtrfsFileSystem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * disks  更新的磁盘信息
    * volumegroups  更新的卷信息
    * btrfsList  更新的btrfs信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'disks' => null,
        'volumegroups' => null,
        'btrfsList' => null
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
    * disks  更新的磁盘信息
    * volumegroups  更新的卷信息
    * btrfsList  更新的btrfs信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'disks' => 'disks',
            'volumegroups' => 'volumegroups',
            'btrfsList' => 'btrfs_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * disks  更新的磁盘信息
    * volumegroups  更新的卷信息
    * btrfsList  更新的btrfs信息
    *
    * @var string[]
    */
    protected static $setters = [
            'disks' => 'setDisks',
            'volumegroups' => 'setVolumegroups',
            'btrfsList' => 'setBtrfsList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * disks  更新的磁盘信息
    * volumegroups  更新的卷信息
    * btrfsList  更新的btrfs信息
    *
    * @var string[]
    */
    protected static $getters = [
            'disks' => 'getDisks',
            'volumegroups' => 'getVolumegroups',
            'btrfsList' => 'getBtrfsList'
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
        $this->container['volumegroups'] = isset($data['volumegroups']) ? $data['volumegroups'] : null;
        $this->container['btrfsList'] = isset($data['btrfsList']) ? $data['btrfsList'] : null;
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
    * Gets disks
    *  更新的磁盘信息
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\ServerDisk[]|null
    */
    public function getDisks()
    {
        return $this->container['disks'];
    }

    /**
    * Sets disks
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\ServerDisk[]|null $disks 更新的磁盘信息
    *
    * @return $this
    */
    public function setDisks($disks)
    {
        $this->container['disks'] = $disks;
        return $this;
    }

    /**
    * Gets volumegroups
    *  更新的卷信息
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\VolumeGroups[]|null
    */
    public function getVolumegroups()
    {
        return $this->container['volumegroups'];
    }

    /**
    * Sets volumegroups
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\VolumeGroups[]|null $volumegroups 更新的卷信息
    *
    * @return $this
    */
    public function setVolumegroups($volumegroups)
    {
        $this->container['volumegroups'] = $volumegroups;
        return $this;
    }

    /**
    * Gets btrfsList
    *  更新的btrfs信息
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\BtrfsFileSystem[]|null
    */
    public function getBtrfsList()
    {
        return $this->container['btrfsList'];
    }

    /**
    * Sets btrfsList
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\BtrfsFileSystem[]|null $btrfsList 更新的btrfs信息
    *
    * @return $this
    */
    public function setBtrfsList($btrfsList)
    {
        $this->container['btrfsList'] = $btrfsList;
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

