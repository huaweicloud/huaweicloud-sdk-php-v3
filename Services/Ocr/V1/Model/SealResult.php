<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SealResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SealResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sealList  印章信息列表。
    * erasedSealImage  在输入图片基础上进行印章擦除后的base64编码图片。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sealList' => '\HuaweiCloud\SDK\Ocr\V1\Model\SealList[]',
            'erasedSealImage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sealList  印章信息列表。
    * erasedSealImage  在输入图片基础上进行印章擦除后的base64编码图片。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sealList' => null,
        'erasedSealImage' => null
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
    * sealList  印章信息列表。
    * erasedSealImage  在输入图片基础上进行印章擦除后的base64编码图片。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sealList' => 'seal_list',
            'erasedSealImage' => 'erased_seal_image'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sealList  印章信息列表。
    * erasedSealImage  在输入图片基础上进行印章擦除后的base64编码图片。
    *
    * @var string[]
    */
    protected static $setters = [
            'sealList' => 'setSealList',
            'erasedSealImage' => 'setErasedSealImage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sealList  印章信息列表。
    * erasedSealImage  在输入图片基础上进行印章擦除后的base64编码图片。
    *
    * @var string[]
    */
    protected static $getters = [
            'sealList' => 'getSealList',
            'erasedSealImage' => 'getErasedSealImage'
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
        $this->container['sealList'] = isset($data['sealList']) ? $data['sealList'] : null;
        $this->container['erasedSealImage'] = isset($data['erasedSealImage']) ? $data['erasedSealImage'] : null;
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
    * Gets sealList
    *  印章信息列表。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\SealList[]|null
    */
    public function getSealList()
    {
        return $this->container['sealList'];
    }

    /**
    * Sets sealList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\SealList[]|null $sealList 印章信息列表。
    *
    * @return $this
    */
    public function setSealList($sealList)
    {
        $this->container['sealList'] = $sealList;
        return $this;
    }

    /**
    * Gets erasedSealImage
    *  在输入图片基础上进行印章擦除后的base64编码图片。
    *
    * @return string|null
    */
    public function getErasedSealImage()
    {
        return $this->container['erasedSealImage'];
    }

    /**
    * Sets erasedSealImage
    *
    * @param string|null $erasedSealImage 在输入图片基础上进行印章擦除后的base64编码图片。
    *
    * @return $this
    */
    public function setErasedSealImage($erasedSealImage)
    {
        $this->container['erasedSealImage'] = $erasedSealImage;
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

