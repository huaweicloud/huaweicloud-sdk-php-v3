<?php

namespace HuaweiCloud\SDK\Frs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddFacesByUrlResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddFacesByUrlResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * faceSetId  人脸库ID。 调用失败时无此字段。
    * faceSetName  人脸库名称。 调用失败时无此字段。
    * faces  [人脸库当中的人脸结构，详见[FaceSetFace](https://support.huaweicloud.com/api-face/face_02_0018.html)。调用失败时无此字段。](tag:hc) [人脸库当中的人脸结构，详见[FaceSetFace](https://support.huaweicloud.com/intl/zh-cn/api-face/face_02_0018.html)。调用失败时无此字段。](tag:hk)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'faceSetId' => 'string',
            'faceSetName' => 'string',
            'faces' => '\HuaweiCloud\SDK\Frs\V2\Model\FaceSetFace[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * faceSetId  人脸库ID。 调用失败时无此字段。
    * faceSetName  人脸库名称。 调用失败时无此字段。
    * faces  [人脸库当中的人脸结构，详见[FaceSetFace](https://support.huaweicloud.com/api-face/face_02_0018.html)。调用失败时无此字段。](tag:hc) [人脸库当中的人脸结构，详见[FaceSetFace](https://support.huaweicloud.com/intl/zh-cn/api-face/face_02_0018.html)。调用失败时无此字段。](tag:hk)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'faceSetId' => null,
        'faceSetName' => null,
        'faces' => null
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
    * faceSetId  人脸库ID。 调用失败时无此字段。
    * faceSetName  人脸库名称。 调用失败时无此字段。
    * faces  [人脸库当中的人脸结构，详见[FaceSetFace](https://support.huaweicloud.com/api-face/face_02_0018.html)。调用失败时无此字段。](tag:hc) [人脸库当中的人脸结构，详见[FaceSetFace](https://support.huaweicloud.com/intl/zh-cn/api-face/face_02_0018.html)。调用失败时无此字段。](tag:hk)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'faceSetId' => 'face_set_id',
            'faceSetName' => 'face_set_name',
            'faces' => 'faces'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * faceSetId  人脸库ID。 调用失败时无此字段。
    * faceSetName  人脸库名称。 调用失败时无此字段。
    * faces  [人脸库当中的人脸结构，详见[FaceSetFace](https://support.huaweicloud.com/api-face/face_02_0018.html)。调用失败时无此字段。](tag:hc) [人脸库当中的人脸结构，详见[FaceSetFace](https://support.huaweicloud.com/intl/zh-cn/api-face/face_02_0018.html)。调用失败时无此字段。](tag:hk)
    *
    * @var string[]
    */
    protected static $setters = [
            'faceSetId' => 'setFaceSetId',
            'faceSetName' => 'setFaceSetName',
            'faces' => 'setFaces'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * faceSetId  人脸库ID。 调用失败时无此字段。
    * faceSetName  人脸库名称。 调用失败时无此字段。
    * faces  [人脸库当中的人脸结构，详见[FaceSetFace](https://support.huaweicloud.com/api-face/face_02_0018.html)。调用失败时无此字段。](tag:hc) [人脸库当中的人脸结构，详见[FaceSetFace](https://support.huaweicloud.com/intl/zh-cn/api-face/face_02_0018.html)。调用失败时无此字段。](tag:hk)
    *
    * @var string[]
    */
    protected static $getters = [
            'faceSetId' => 'getFaceSetId',
            'faceSetName' => 'getFaceSetName',
            'faces' => 'getFaces'
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
        $this->container['faceSetId'] = isset($data['faceSetId']) ? $data['faceSetId'] : null;
        $this->container['faceSetName'] = isset($data['faceSetName']) ? $data['faceSetName'] : null;
        $this->container['faces'] = isset($data['faces']) ? $data['faces'] : null;
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
    * Gets faceSetId
    *  人脸库ID。 调用失败时无此字段。
    *
    * @return string|null
    */
    public function getFaceSetId()
    {
        return $this->container['faceSetId'];
    }

    /**
    * Sets faceSetId
    *
    * @param string|null $faceSetId 人脸库ID。 调用失败时无此字段。
    *
    * @return $this
    */
    public function setFaceSetId($faceSetId)
    {
        $this->container['faceSetId'] = $faceSetId;
        return $this;
    }

    /**
    * Gets faceSetName
    *  人脸库名称。 调用失败时无此字段。
    *
    * @return string|null
    */
    public function getFaceSetName()
    {
        return $this->container['faceSetName'];
    }

    /**
    * Sets faceSetName
    *
    * @param string|null $faceSetName 人脸库名称。 调用失败时无此字段。
    *
    * @return $this
    */
    public function setFaceSetName($faceSetName)
    {
        $this->container['faceSetName'] = $faceSetName;
        return $this;
    }

    /**
    * Gets faces
    *  [人脸库当中的人脸结构，详见[FaceSetFace](https://support.huaweicloud.com/api-face/face_02_0018.html)。调用失败时无此字段。](tag:hc) [人脸库当中的人脸结构，详见[FaceSetFace](https://support.huaweicloud.com/intl/zh-cn/api-face/face_02_0018.html)。调用失败时无此字段。](tag:hk)
    *
    * @return \HuaweiCloud\SDK\Frs\V2\Model\FaceSetFace[]|null
    */
    public function getFaces()
    {
        return $this->container['faces'];
    }

    /**
    * Sets faces
    *
    * @param \HuaweiCloud\SDK\Frs\V2\Model\FaceSetFace[]|null $faces [人脸库当中的人脸结构，详见[FaceSetFace](https://support.huaweicloud.com/api-face/face_02_0018.html)。调用失败时无此字段。](tag:hc) [人脸库当中的人脸结构，详见[FaceSetFace](https://support.huaweicloud.com/intl/zh-cn/api-face/face_02_0018.html)。调用失败时无此字段。](tag:hk)
    *
    * @return $this
    */
    public function setFaces($faces)
    {
        $this->container['faces'] = $faces;
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

