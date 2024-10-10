<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WafGeoIpRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WafGeoIpRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * geoip  地理位置
    * id  id
    * name  规则名称
    * overseasType  防护区域，0-大陆，1-海外
    * timestamp  添加时间
    * white  防护动作 0-阻断，1-放行，2-仅记录
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'geoip' => 'string',
            'id' => 'string',
            'name' => 'string',
            'overseasType' => 'int',
            'timestamp' => 'int',
            'white' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * geoip  地理位置
    * id  id
    * name  规则名称
    * overseasType  防护区域，0-大陆，1-海外
    * timestamp  添加时间
    * white  防护动作 0-阻断，1-放行，2-仅记录
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'geoip' => null,
        'id' => null,
        'name' => null,
        'overseasType' => 'int32',
        'timestamp' => 'int32',
        'white' => 'int32'
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
    * geoip  地理位置
    * id  id
    * name  规则名称
    * overseasType  防护区域，0-大陆，1-海外
    * timestamp  添加时间
    * white  防护动作 0-阻断，1-放行，2-仅记录
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'geoip' => 'geoip',
            'id' => 'id',
            'name' => 'name',
            'overseasType' => 'overseas_type',
            'timestamp' => 'timestamp',
            'white' => 'white'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * geoip  地理位置
    * id  id
    * name  规则名称
    * overseasType  防护区域，0-大陆，1-海外
    * timestamp  添加时间
    * white  防护动作 0-阻断，1-放行，2-仅记录
    *
    * @var string[]
    */
    protected static $setters = [
            'geoip' => 'setGeoip',
            'id' => 'setId',
            'name' => 'setName',
            'overseasType' => 'setOverseasType',
            'timestamp' => 'setTimestamp',
            'white' => 'setWhite'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * geoip  地理位置
    * id  id
    * name  规则名称
    * overseasType  防护区域，0-大陆，1-海外
    * timestamp  添加时间
    * white  防护动作 0-阻断，1-放行，2-仅记录
    *
    * @var string[]
    */
    protected static $getters = [
            'geoip' => 'getGeoip',
            'id' => 'getId',
            'name' => 'getName',
            'overseasType' => 'getOverseasType',
            'timestamp' => 'getTimestamp',
            'white' => 'getWhite'
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
        $this->container['geoip'] = isset($data['geoip']) ? $data['geoip'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['overseasType'] = isset($data['overseasType']) ? $data['overseasType'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['white'] = isset($data['white']) ? $data['white'] : null;
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
    * Gets geoip
    *  地理位置
    *
    * @return string|null
    */
    public function getGeoip()
    {
        return $this->container['geoip'];
    }

    /**
    * Sets geoip
    *
    * @param string|null $geoip 地理位置
    *
    * @return $this
    */
    public function setGeoip($geoip)
    {
        $this->container['geoip'] = $geoip;
        return $this;
    }

    /**
    * Gets id
    *  id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  规则名称
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
    * @param string|null $name 规则名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets overseasType
    *  防护区域，0-大陆，1-海外
    *
    * @return int|null
    */
    public function getOverseasType()
    {
        return $this->container['overseasType'];
    }

    /**
    * Sets overseasType
    *
    * @param int|null $overseasType 防护区域，0-大陆，1-海外
    *
    * @return $this
    */
    public function setOverseasType($overseasType)
    {
        $this->container['overseasType'] = $overseasType;
        return $this;
    }

    /**
    * Gets timestamp
    *  添加时间
    *
    * @return int|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int|null $timestamp 添加时间
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets white
    *  防护动作 0-阻断，1-放行，2-仅记录
    *
    * @return int|null
    */
    public function getWhite()
    {
        return $this->container['white'];
    }

    /**
    * Sets white
    *
    * @param int|null $white 防护动作 0-阻断，1-放行，2-仅记录
    *
    * @return $this
    */
    public function setWhite($white)
    {
        $this->container['white'] = $white;
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

