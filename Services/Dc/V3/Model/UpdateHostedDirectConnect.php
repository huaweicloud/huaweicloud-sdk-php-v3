<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateHostedDirectConnect implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateHostedDirectConnect';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  物理专线的名字
    * description  物理专线的描述信息
    * bandwidth  指定托管专线接入带宽,单位Mbps
    * peerLocation  物理专线对端所在的物理位置，省/市/街道或IDC名字
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'bandwidth' => 'int',
            'peerLocation' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  物理专线的名字
    * description  物理专线的描述信息
    * bandwidth  指定托管专线接入带宽,单位Mbps
    * peerLocation  物理专线对端所在的物理位置，省/市/街道或IDC名字
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'bandwidth' => 'int32',
        'peerLocation' => null
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
    * name  物理专线的名字
    * description  物理专线的描述信息
    * bandwidth  指定托管专线接入带宽,单位Mbps
    * peerLocation  物理专线对端所在的物理位置，省/市/街道或IDC名字
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'bandwidth' => 'bandwidth',
            'peerLocation' => 'peer_location'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  物理专线的名字
    * description  物理专线的描述信息
    * bandwidth  指定托管专线接入带宽,单位Mbps
    * peerLocation  物理专线对端所在的物理位置，省/市/街道或IDC名字
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'bandwidth' => 'setBandwidth',
            'peerLocation' => 'setPeerLocation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  物理专线的名字
    * description  物理专线的描述信息
    * bandwidth  指定托管专线接入带宽,单位Mbps
    * peerLocation  物理专线对端所在的物理位置，省/市/街道或IDC名字
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'bandwidth' => 'getBandwidth',
            'peerLocation' => 'getPeerLocation'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['peerLocation'] = isset($data['peerLocation']) ? $data['peerLocation'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] > 400000)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be smaller than or equal to 400000.";
            }
            if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] < 2)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['peerLocation']) && (mb_strlen($this->container['peerLocation']) > 255)) {
                $invalidProperties[] = "invalid value for 'peerLocation', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['peerLocation']) && (mb_strlen($this->container['peerLocation']) < 0)) {
                $invalidProperties[] = "invalid value for 'peerLocation', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  物理专线的名字
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 物理专线的名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  物理专线的描述信息
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 物理专线的描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets bandwidth
    *  指定托管专线接入带宽,单位Mbps
    *
    * @return int|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param int|null $bandwidth 指定托管专线接入带宽,单位Mbps
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets peerLocation
    *  物理专线对端所在的物理位置，省/市/街道或IDC名字
    *
    * @return string|null
    */
    public function getPeerLocation()
    {
        return $this->container['peerLocation'];
    }

    /**
    * Sets peerLocation
    *
    * @param string|null $peerLocation 物理专线对端所在的物理位置，省/市/街道或IDC名字
    *
    * @return $this
    */
    public function setPeerLocation($peerLocation)
    {
        $this->container['peerLocation'] = $peerLocation;
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

