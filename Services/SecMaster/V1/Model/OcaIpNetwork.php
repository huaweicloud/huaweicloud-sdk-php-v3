<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OcaIpNetwork implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OcaIpNetwork';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isPublic  外网或内网 true：外网 false: 内网
    * partition  网络分区：OM/PSZ/DMZ
    * plane  网络平面（线下有自己的代号）
    * vxlanId  虚拟网络ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isPublic' => 'bool',
            'partition' => 'string',
            'plane' => 'string',
            'vxlanId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isPublic  外网或内网 true：外网 false: 内网
    * partition  网络分区：OM/PSZ/DMZ
    * plane  网络平面（线下有自己的代号）
    * vxlanId  虚拟网络ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isPublic' => null,
        'partition' => null,
        'plane' => null,
        'vxlanId' => null
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
    * isPublic  外网或内网 true：外网 false: 内网
    * partition  网络分区：OM/PSZ/DMZ
    * plane  网络平面（线下有自己的代号）
    * vxlanId  虚拟网络ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isPublic' => 'is_public',
            'partition' => 'partition',
            'plane' => 'plane',
            'vxlanId' => 'vxlan_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isPublic  外网或内网 true：外网 false: 内网
    * partition  网络分区：OM/PSZ/DMZ
    * plane  网络平面（线下有自己的代号）
    * vxlanId  虚拟网络ID
    *
    * @var string[]
    */
    protected static $setters = [
            'isPublic' => 'setIsPublic',
            'partition' => 'setPartition',
            'plane' => 'setPlane',
            'vxlanId' => 'setVxlanId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isPublic  外网或内网 true：外网 false: 内网
    * partition  网络分区：OM/PSZ/DMZ
    * plane  网络平面（线下有自己的代号）
    * vxlanId  虚拟网络ID
    *
    * @var string[]
    */
    protected static $getters = [
            'isPublic' => 'getIsPublic',
            'partition' => 'getPartition',
            'plane' => 'getPlane',
            'vxlanId' => 'getVxlanId'
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
        $this->container['isPublic'] = isset($data['isPublic']) ? $data['isPublic'] : null;
        $this->container['partition'] = isset($data['partition']) ? $data['partition'] : null;
        $this->container['plane'] = isset($data['plane']) ? $data['plane'] : null;
        $this->container['vxlanId'] = isset($data['vxlanId']) ? $data['vxlanId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['isPublic'] === null) {
            $invalidProperties[] = "'isPublic' can't be null";
        }
            if (!is_null($this->container['partition']) && (mb_strlen($this->container['partition']) > 64)) {
                $invalidProperties[] = "invalid value for 'partition', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['partition']) && (mb_strlen($this->container['partition']) < 0)) {
                $invalidProperties[] = "invalid value for 'partition', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['plane']) && (mb_strlen($this->container['plane']) > 128)) {
                $invalidProperties[] = "invalid value for 'plane', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['plane']) && (mb_strlen($this->container['plane']) < 0)) {
                $invalidProperties[] = "invalid value for 'plane', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vxlanId']) && (mb_strlen($this->container['vxlanId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vxlanId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['vxlanId']) && (mb_strlen($this->container['vxlanId']) < 32)) {
                $invalidProperties[] = "invalid value for 'vxlanId', the character length must be bigger than or equal to 32.";
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
    * Gets isPublic
    *  外网或内网 true：外网 false: 内网
    *
    * @return bool
    */
    public function getIsPublic()
    {
        return $this->container['isPublic'];
    }

    /**
    * Sets isPublic
    *
    * @param bool $isPublic 外网或内网 true：外网 false: 内网
    *
    * @return $this
    */
    public function setIsPublic($isPublic)
    {
        $this->container['isPublic'] = $isPublic;
        return $this;
    }

    /**
    * Gets partition
    *  网络分区：OM/PSZ/DMZ
    *
    * @return string|null
    */
    public function getPartition()
    {
        return $this->container['partition'];
    }

    /**
    * Sets partition
    *
    * @param string|null $partition 网络分区：OM/PSZ/DMZ
    *
    * @return $this
    */
    public function setPartition($partition)
    {
        $this->container['partition'] = $partition;
        return $this;
    }

    /**
    * Gets plane
    *  网络平面（线下有自己的代号）
    *
    * @return string|null
    */
    public function getPlane()
    {
        return $this->container['plane'];
    }

    /**
    * Sets plane
    *
    * @param string|null $plane 网络平面（线下有自己的代号）
    *
    * @return $this
    */
    public function setPlane($plane)
    {
        $this->container['plane'] = $plane;
        return $this;
    }

    /**
    * Gets vxlanId
    *  虚拟网络ID
    *
    * @return string|null
    */
    public function getVxlanId()
    {
        return $this->container['vxlanId'];
    }

    /**
    * Sets vxlanId
    *
    * @param string|null $vxlanId 虚拟网络ID
    *
    * @return $this
    */
    public function setVxlanId($vxlanId)
    {
        $this->container['vxlanId'] = $vxlanId;
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

