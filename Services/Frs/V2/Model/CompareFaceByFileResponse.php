<?php

namespace HuaweiCloud\SDK\Frs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CompareFaceByFileResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CompareFaceByFileResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * image1Face  image1Face
    * image2Face  image2Face
    * similarity  人脸相似度，1表示最大，0表示最小，值越大表示越相似。一般情况下超过0.93即可认为是同一个人。 调用失败时无此字段。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'image1Face' => '\HuaweiCloud\SDK\Frs\V2\Model\CompareFace',
            'image2Face' => '\HuaweiCloud\SDK\Frs\V2\Model\CompareFace',
            'similarity' => 'double',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * image1Face  image1Face
    * image2Face  image2Face
    * similarity  人脸相似度，1表示最大，0表示最小，值越大表示越相似。一般情况下超过0.93即可认为是同一个人。 调用失败时无此字段。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'image1Face' => null,
        'image2Face' => null,
        'similarity' => 'double',
        'xRequestId' => null
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
    * image1Face  image1Face
    * image2Face  image2Face
    * similarity  人脸相似度，1表示最大，0表示最小，值越大表示越相似。一般情况下超过0.93即可认为是同一个人。 调用失败时无此字段。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'image1Face' => 'image1_face',
            'image2Face' => 'image2_face',
            'similarity' => 'similarity',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * image1Face  image1Face
    * image2Face  image2Face
    * similarity  人脸相似度，1表示最大，0表示最小，值越大表示越相似。一般情况下超过0.93即可认为是同一个人。 调用失败时无此字段。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'image1Face' => 'setImage1Face',
            'image2Face' => 'setImage2Face',
            'similarity' => 'setSimilarity',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * image1Face  image1Face
    * image2Face  image2Face
    * similarity  人脸相似度，1表示最大，0表示最小，值越大表示越相似。一般情况下超过0.93即可认为是同一个人。 调用失败时无此字段。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'image1Face' => 'getImage1Face',
            'image2Face' => 'getImage2Face',
            'similarity' => 'getSimilarity',
            'xRequestId' => 'getXRequestId'
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
        $this->container['image1Face'] = isset($data['image1Face']) ? $data['image1Face'] : null;
        $this->container['image2Face'] = isset($data['image2Face']) ? $data['image2Face'] : null;
        $this->container['similarity'] = isset($data['similarity']) ? $data['similarity'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
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
    * Gets image1Face
    *  image1Face
    *
    * @return \HuaweiCloud\SDK\Frs\V2\Model\CompareFace|null
    */
    public function getImage1Face()
    {
        return $this->container['image1Face'];
    }

    /**
    * Sets image1Face
    *
    * @param \HuaweiCloud\SDK\Frs\V2\Model\CompareFace|null $image1Face image1Face
    *
    * @return $this
    */
    public function setImage1Face($image1Face)
    {
        $this->container['image1Face'] = $image1Face;
        return $this;
    }

    /**
    * Gets image2Face
    *  image2Face
    *
    * @return \HuaweiCloud\SDK\Frs\V2\Model\CompareFace|null
    */
    public function getImage2Face()
    {
        return $this->container['image2Face'];
    }

    /**
    * Sets image2Face
    *
    * @param \HuaweiCloud\SDK\Frs\V2\Model\CompareFace|null $image2Face image2Face
    *
    * @return $this
    */
    public function setImage2Face($image2Face)
    {
        $this->container['image2Face'] = $image2Face;
        return $this;
    }

    /**
    * Gets similarity
    *  人脸相似度，1表示最大，0表示最小，值越大表示越相似。一般情况下超过0.93即可认为是同一个人。 调用失败时无此字段。
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
    * @param double|null $similarity 人脸相似度，1表示最大，0表示最小，值越大表示越相似。一般情况下超过0.93即可认为是同一个人。 调用失败时无此字段。
    *
    * @return $this
    */
    public function setSimilarity($similarity)
    {
        $this->container['similarity'] = $similarity;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

