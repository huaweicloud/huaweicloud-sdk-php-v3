<?php

namespace HuaweiCloud\SDK\Frs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateFaceReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateFaceReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * externalFields  Json字符串不校验重复性，自定义字段的key值长度范围为[1,36]，string类型的value长度范围为[1,256]，具体参见[自定义字段](https://support.huaweicloud.com/api-face/face_02_0012.html)。 这里是待修改的参数，external_image_id和external_fields至少选一个。
    * externalImageId  用户指定的图片外部ID，与当前图像绑定。用户没提供，系统会生成一个。该ID长度范围为1～36位，可以包含字母、数字、中划线或者下划线，不包含其他的特殊字符。 这里是待修改的参数，external_image_id和external_fields至少选一个。
    * faceId  人脸库ID，由系统内部生成的唯一ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'externalFields' => 'object',
            'externalImageId' => 'string',
            'faceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * externalFields  Json字符串不校验重复性，自定义字段的key值长度范围为[1,36]，string类型的value长度范围为[1,256]，具体参见[自定义字段](https://support.huaweicloud.com/api-face/face_02_0012.html)。 这里是待修改的参数，external_image_id和external_fields至少选一个。
    * externalImageId  用户指定的图片外部ID，与当前图像绑定。用户没提供，系统会生成一个。该ID长度范围为1～36位，可以包含字母、数字、中划线或者下划线，不包含其他的特殊字符。 这里是待修改的参数，external_image_id和external_fields至少选一个。
    * faceId  人脸库ID，由系统内部生成的唯一ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
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
    * externalFields  Json字符串不校验重复性，自定义字段的key值长度范围为[1,36]，string类型的value长度范围为[1,256]，具体参见[自定义字段](https://support.huaweicloud.com/api-face/face_02_0012.html)。 这里是待修改的参数，external_image_id和external_fields至少选一个。
    * externalImageId  用户指定的图片外部ID，与当前图像绑定。用户没提供，系统会生成一个。该ID长度范围为1～36位，可以包含字母、数字、中划线或者下划线，不包含其他的特殊字符。 这里是待修改的参数，external_image_id和external_fields至少选一个。
    * faceId  人脸库ID，由系统内部生成的唯一ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'externalFields' => 'external_fields',
            'externalImageId' => 'external_image_id',
            'faceId' => 'face_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * externalFields  Json字符串不校验重复性，自定义字段的key值长度范围为[1,36]，string类型的value长度范围为[1,256]，具体参见[自定义字段](https://support.huaweicloud.com/api-face/face_02_0012.html)。 这里是待修改的参数，external_image_id和external_fields至少选一个。
    * externalImageId  用户指定的图片外部ID，与当前图像绑定。用户没提供，系统会生成一个。该ID长度范围为1～36位，可以包含字母、数字、中划线或者下划线，不包含其他的特殊字符。 这里是待修改的参数，external_image_id和external_fields至少选一个。
    * faceId  人脸库ID，由系统内部生成的唯一ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'externalFields' => 'setExternalFields',
            'externalImageId' => 'setExternalImageId',
            'faceId' => 'setFaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * externalFields  Json字符串不校验重复性，自定义字段的key值长度范围为[1,36]，string类型的value长度范围为[1,256]，具体参见[自定义字段](https://support.huaweicloud.com/api-face/face_02_0012.html)。 这里是待修改的参数，external_image_id和external_fields至少选一个。
    * externalImageId  用户指定的图片外部ID，与当前图像绑定。用户没提供，系统会生成一个。该ID长度范围为1～36位，可以包含字母、数字、中划线或者下划线，不包含其他的特殊字符。 这里是待修改的参数，external_image_id和external_fields至少选一个。
    * faceId  人脸库ID，由系统内部生成的唯一ID。
    *
    * @var string[]
    */
    protected static $getters = [
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
        if ($this->container['faceId'] === null) {
            $invalidProperties[] = "'faceId' can't be null";
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
    * Gets externalFields
    *  Json字符串不校验重复性，自定义字段的key值长度范围为[1,36]，string类型的value长度范围为[1,256]，具体参见[自定义字段](https://support.huaweicloud.com/api-face/face_02_0012.html)。 这里是待修改的参数，external_image_id和external_fields至少选一个。
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
    * @param object|null $externalFields Json字符串不校验重复性，自定义字段的key值长度范围为[1,36]，string类型的value长度范围为[1,256]，具体参见[自定义字段](https://support.huaweicloud.com/api-face/face_02_0012.html)。 这里是待修改的参数，external_image_id和external_fields至少选一个。
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
    *  用户指定的图片外部ID，与当前图像绑定。用户没提供，系统会生成一个。该ID长度范围为1～36位，可以包含字母、数字、中划线或者下划线，不包含其他的特殊字符。 这里是待修改的参数，external_image_id和external_fields至少选一个。
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
    * @param string|null $externalImageId 用户指定的图片外部ID，与当前图像绑定。用户没提供，系统会生成一个。该ID长度范围为1～36位，可以包含字母、数字、中划线或者下划线，不包含其他的特殊字符。 这里是待修改的参数，external_image_id和external_fields至少选一个。
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
    *  人脸库ID，由系统内部生成的唯一ID。
    *
    * @return string
    */
    public function getFaceId()
    {
        return $this->container['faceId'];
    }

    /**
    * Sets faceId
    *
    * @param string $faceId 人脸库ID，由系统内部生成的唯一ID。
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

