<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TargetServerByTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TargetServerByTask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * btrfsList  btrfs信息，数据从源端获取
    * disks  磁盘信息
    * name  名称
    * vmId  虚拟机ID
    * volumeGroups  卷组，数据从源端获取
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'btrfsList' => '\HuaweiCloud\SDK\Sms\V3\Model\BtrfsFileSystem[]',
            'disks' => '\HuaweiCloud\SDK\Sms\V3\Model\TargetDisks[]',
            'name' => 'string',
            'vmId' => 'string',
            'volumeGroups' => '\HuaweiCloud\SDK\Sms\V3\Model\VolumeGroups[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * btrfsList  btrfs信息，数据从源端获取
    * disks  磁盘信息
    * name  名称
    * vmId  虚拟机ID
    * volumeGroups  卷组，数据从源端获取
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'btrfsList' => null,
        'disks' => null,
        'name' => null,
        'vmId' => null,
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
    * btrfsList  btrfs信息，数据从源端获取
    * disks  磁盘信息
    * name  名称
    * vmId  虚拟机ID
    * volumeGroups  卷组，数据从源端获取
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'btrfsList' => 'btrfs_list',
            'disks' => 'disks',
            'name' => 'name',
            'vmId' => 'vm_id',
            'volumeGroups' => 'volume_groups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * btrfsList  btrfs信息，数据从源端获取
    * disks  磁盘信息
    * name  名称
    * vmId  虚拟机ID
    * volumeGroups  卷组，数据从源端获取
    *
    * @var string[]
    */
    protected static $setters = [
            'btrfsList' => 'setBtrfsList',
            'disks' => 'setDisks',
            'name' => 'setName',
            'vmId' => 'setVmId',
            'volumeGroups' => 'setVolumeGroups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * btrfsList  btrfs信息，数据从源端获取
    * disks  磁盘信息
    * name  名称
    * vmId  虚拟机ID
    * volumeGroups  卷组，数据从源端获取
    *
    * @var string[]
    */
    protected static $getters = [
            'btrfsList' => 'getBtrfsList',
            'disks' => 'getDisks',
            'name' => 'getName',
            'vmId' => 'getVmId',
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
        $this->container['btrfsList'] = isset($data['btrfsList']) ? $data['btrfsList'] : null;
        $this->container['disks'] = isset($data['disks']) ? $data['disks'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['vmId'] = isset($data['vmId']) ? $data['vmId'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['vmId'] === null) {
            $invalidProperties[] = "'vmId' can't be null";
        }
            if ((mb_strlen($this->container['vmId']) > 255)) {
                $invalidProperties[] = "invalid value for 'vmId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['vmId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vmId', the character length must be bigger than or equal to 0.";
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
    * Gets btrfsList
    *  btrfs信息，数据从源端获取
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
    * @param \HuaweiCloud\SDK\Sms\V3\Model\BtrfsFileSystem[]|null $btrfsList btrfs信息，数据从源端获取
    *
    * @return $this
    */
    public function setBtrfsList($btrfsList)
    {
        $this->container['btrfsList'] = $btrfsList;
        return $this;
    }

    /**
    * Gets disks
    *  磁盘信息
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\TargetDisks[]
    */
    public function getDisks()
    {
        return $this->container['disks'];
    }

    /**
    * Sets disks
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\TargetDisks[] $disks 磁盘信息
    *
    * @return $this
    */
    public function setDisks($disks)
    {
        $this->container['disks'] = $disks;
        return $this;
    }

    /**
    * Gets name
    *  名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets vmId
    *  虚拟机ID
    *
    * @return string
    */
    public function getVmId()
    {
        return $this->container['vmId'];
    }

    /**
    * Sets vmId
    *
    * @param string $vmId 虚拟机ID
    *
    * @return $this
    */
    public function setVmId($vmId)
    {
        $this->container['vmId'] = $vmId;
        return $this;
    }

    /**
    * Gets volumeGroups
    *  卷组，数据从源端获取
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
    * @param \HuaweiCloud\SDK\Sms\V3\Model\VolumeGroups[]|null $volumeGroups 卷组，数据从源端获取
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

