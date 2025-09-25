<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyLoginCommonLocationRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyLoginCommonLocationRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * areaCode  国家城市的编码
    * hostIdList  服务器列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'areaCode' => 'int',
            'hostIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * areaCode  国家城市的编码
    * hostIdList  服务器列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'areaCode' => 'int32',
        'hostIdList' => null
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
    * areaCode  国家城市的编码
    * hostIdList  服务器列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'areaCode' => 'area_code',
            'hostIdList' => 'host_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * areaCode  国家城市的编码
    * hostIdList  服务器列表
    *
    * @var string[]
    */
    protected static $setters = [
            'areaCode' => 'setAreaCode',
            'hostIdList' => 'setHostIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * areaCode  国家城市的编码
    * hostIdList  服务器列表
    *
    * @var string[]
    */
    protected static $getters = [
            'areaCode' => 'getAreaCode',
            'hostIdList' => 'getHostIdList'
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
        $this->container['areaCode'] = isset($data['areaCode']) ? $data['areaCode'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
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
    * Gets areaCode
    *  国家城市的编码
    *
    * @return int|null
    */
    public function getAreaCode()
    {
        return $this->container['areaCode'];
    }

    /**
    * Sets areaCode
    *
    * @param int|null $areaCode 国家城市的编码
    *
    * @return $this
    */
    public function setAreaCode($areaCode)
    {
        $this->container['areaCode'] = $areaCode;
        return $this;
    }

    /**
    * Gets hostIdList
    *  服务器列表
    *
    * @return string[]|null
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[]|null $hostIdList 服务器列表
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
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

