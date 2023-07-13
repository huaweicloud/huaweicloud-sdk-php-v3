<?php

namespace HuaweiCloud\SDK\Frs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchFace implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchFace';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * boundingBox  boundingBox
    * similarity  人脸搜索时用于被检索的相似度。
    * externalFields  用户添加的额外自定义字段。
    * externalImageId  人脸所在的外部图片ID。
    * faceId  人脸ID，由系统内部生成的唯一ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'boundingBox' => '\HuaweiCloud\SDK\Frs\V2\Model\BoundingBox',
            'similarity' => 'double',
            'externalFields' => 'object',
            'externalImageId' => 'string',
            'faceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * boundingBox  boundingBox
    * similarity  人脸搜索时用于被检索的相似度。
    * externalFields  用户添加的额外自定义字段。
    * externalImageId  人脸所在的外部图片ID。
    * faceId  人脸ID，由系统内部生成的唯一ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'boundingBox' => null,
        'similarity' => 'double',
        'externalFields' => null,
        'externalImageId' => null,
        'faceId' => null
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
    * boundingBox  boundingBox
    * similarity  人脸搜索时用于被检索的相似度。
    * externalFields  用户添加的额外自定义字段。
    * externalImageId  人脸所在的外部图片ID。
    * faceId  人脸ID，由系统内部生成的唯一ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'boundingBox' => 'bounding_box',
            'similarity' => 'similarity',
            'externalFields' => 'external_fields',
            'externalImageId' => 'external_image_id',
            'faceId' => 'face_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * boundingBox  boundingBox
    * similarity  人脸搜索时用于被检索的相似度。
    * externalFields  用户添加的额外自定义字段。
    * externalImageId  人脸所在的外部图片ID。
    * faceId  人脸ID，由系统内部生成的唯一ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'boundingBox' => 'setBoundingBox',
            'similarity' => 'setSimilarity',
            'externalFields' => 'setExternalFields',
            'externalImageId' => 'setExternalImageId',
            'faceId' => 'setFaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * boundingBox  boundingBox
    * similarity  人脸搜索时用于被检索的相似度。
    * externalFields  用户添加的额外自定义字段。
    * externalImageId  人脸所在的外部图片ID。
    * faceId  人脸ID，由系统内部生成的唯一ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'boundingBox' => 'getBoundingBox',
            'similarity' => 'getSimilarity',
            'externalFields' => 'getExternalFields',
            'externalImageId' => 'getExternalImageId',
            'faceId' => 'getFaceId'
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
        $this->container['boundingBox'] = isset($data['boundingBox']) ? $data['boundingBox'] : null;
        $this->container['similarity'] = isset($data['similarity']) ? $data['similarity'] : null;
        $this->container['externalFields'] = isset($data['externalFields']) ? $data['externalFields'] : null;
        $this->container['externalImageId'] = isset($data['externalImageId']) ? $data['externalImageId'] : null;
        $this->container['faceId'] = isset($data['faceId']) ? $data['faceId'] : null;
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
    * Gets boundingBox
    *  boundingBox
    *
    * @return \HuaweiCloud\SDK\Frs\V2\Model\BoundingBox|null
    */
    public function getBoundingBox()
    {
        return $this->container['boundingBox'];
    }

    /**
    * Sets boundingBox
    *
    * @param \HuaweiCloud\SDK\Frs\V2\Model\BoundingBox|null $boundingBox boundingBox
    *
    * @return $this
    */
    public function setBoundingBox($boundingBox)
    {
        $this->container['boundingBox'] = $boundingBox;
        return $this;
    }

    /**
    * Gets similarity
    *  人脸搜索时用于被检索的相似度。
    *
    * @return double|null
    */
    public function getSimilarity()
    {
        return $this->container['similarity'];
    }

    /**
    * Sets similarity
    *
    * @param double|null $similarity 人脸搜索时用于被检索的相似度。
    *
    * @return $this
    */
    public function setSimilarity($similarity)
    {
        $this->container['similarity'] = $similarity;
        return $this;
    }

    /**
    * Gets externalFields
    *  用户添加的额外自定义字段。
    *
    * @return object|null
    */
    public function getExternalFields()
    {
        return $this->container['externalFields'];
    }

    /**
    * Sets externalFields
    *
    * @param object|null $externalFields 用户添加的额外自定义字段。
    *
    * @return $this
    */
    public function setExternalFields($externalFields)
    {
        $this->container['externalFields'] = $externalFields;
        return $this;
    }

    /**
    * Gets externalImageId
    *  人脸所在的外部图片ID。
    *
    * @return string|null
    */
    public function getExternalImageId()
    {
        return $this->container['externalImageId'];
    }

    /**
    * Sets externalImageId
    *
    * @param string|null $externalImageId 人脸所在的外部图片ID。
    *
    * @return $this
    */
    public function setExternalImageId($externalImageId)
    {
        $this->container['externalImageId'] = $externalImageId;
        return $this;
    }

    /**
    * Gets faceId
    *  人脸ID，由系统内部生成的唯一ID。
    *
    * @return string|null
    */
    public function getFaceId()
    {
        return $this->container['faceId'];
    }

    /**
    * Sets faceId
    *
    * @param string|null $faceId 人脸ID，由系统内部生成的唯一ID。
    *
    * @return $this
    */
    public function setFaceId($faceId)
    {
        $this->container['faceId'] = $faceId;
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

