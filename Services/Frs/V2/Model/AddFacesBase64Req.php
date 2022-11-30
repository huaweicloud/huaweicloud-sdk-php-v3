<?php

namespace HuaweiCloud\SDK\Frs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddFacesBase64Req implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddFacesBase64Req';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageBase64  图像数据，Base64编码，要求： • Base64编码后大小不超过8MB，建议小于1MB。 • 图片为JPG/JPEG/BMP/PNG格式。
    * externalFields  [根据用户自定义数据类型，填入相应的数值。创建faceset时定义该字段，Json字符串不校验重复性，参考[自定义字段](https://support.huaweicloud.com/api-face/face_02_0012.html)。](tag:hc) [根据用户自定义数据类型，填入相应的数值。创建faceset时定义该字段，Json字符串不校验重复性，参考[自定义字段](https://support.huaweicloud.com/intl/zh-cn/api-face/face_02_0012.html)。](tag:hk)
    * externalImageId  用户指定的图片外部ID，与当前图像绑定。用户没提供，系统会生成一个。 该ID长度范围为1～36位，可以包含字母、数字、中划线或者下划线，不包含其他的特殊字符。
    * single  是否将图片中的最大人脸添加至人脸库。可选值包括: • true: 传入的单张图片中如果包含多张人脸，则只将最大人脸添加到人脸库中。 • false: 默认为false。传入的单张图片中如果包含多张人脸，则将所有人脸添加至人脸库中。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageBase64' => 'string',
            'externalFields' => 'object',
            'externalImageId' => 'string',
            'single' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageBase64  图像数据，Base64编码，要求： • Base64编码后大小不超过8MB，建议小于1MB。 • 图片为JPG/JPEG/BMP/PNG格式。
    * externalFields  [根据用户自定义数据类型，填入相应的数值。创建faceset时定义该字段，Json字符串不校验重复性，参考[自定义字段](https://support.huaweicloud.com/api-face/face_02_0012.html)。](tag:hc) [根据用户自定义数据类型，填入相应的数值。创建faceset时定义该字段，Json字符串不校验重复性，参考[自定义字段](https://support.huaweicloud.com/intl/zh-cn/api-face/face_02_0012.html)。](tag:hk)
    * externalImageId  用户指定的图片外部ID，与当前图像绑定。用户没提供，系统会生成一个。 该ID长度范围为1～36位，可以包含字母、数字、中划线或者下划线，不包含其他的特殊字符。
    * single  是否将图片中的最大人脸添加至人脸库。可选值包括: • true: 传入的单张图片中如果包含多张人脸，则只将最大人脸添加到人脸库中。 • false: 默认为false。传入的单张图片中如果包含多张人脸，则将所有人脸添加至人脸库中。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageBase64' => null,
        'externalFields' => null,
        'externalImageId' => null,
        'single' => null
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
    * imageBase64  图像数据，Base64编码，要求： • Base64编码后大小不超过8MB，建议小于1MB。 • 图片为JPG/JPEG/BMP/PNG格式。
    * externalFields  [根据用户自定义数据类型，填入相应的数值。创建faceset时定义该字段，Json字符串不校验重复性，参考[自定义字段](https://support.huaweicloud.com/api-face/face_02_0012.html)。](tag:hc) [根据用户自定义数据类型，填入相应的数值。创建faceset时定义该字段，Json字符串不校验重复性，参考[自定义字段](https://support.huaweicloud.com/intl/zh-cn/api-face/face_02_0012.html)。](tag:hk)
    * externalImageId  用户指定的图片外部ID，与当前图像绑定。用户没提供，系统会生成一个。 该ID长度范围为1～36位，可以包含字母、数字、中划线或者下划线，不包含其他的特殊字符。
    * single  是否将图片中的最大人脸添加至人脸库。可选值包括: • true: 传入的单张图片中如果包含多张人脸，则只将最大人脸添加到人脸库中。 • false: 默认为false。传入的单张图片中如果包含多张人脸，则将所有人脸添加至人脸库中。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageBase64' => 'image_base64',
            'externalFields' => 'external_fields',
            'externalImageId' => 'external_image_id',
            'single' => 'single'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageBase64  图像数据，Base64编码，要求： • Base64编码后大小不超过8MB，建议小于1MB。 • 图片为JPG/JPEG/BMP/PNG格式。
    * externalFields  [根据用户自定义数据类型，填入相应的数值。创建faceset时定义该字段，Json字符串不校验重复性，参考[自定义字段](https://support.huaweicloud.com/api-face/face_02_0012.html)。](tag:hc) [根据用户自定义数据类型，填入相应的数值。创建faceset时定义该字段，Json字符串不校验重复性，参考[自定义字段](https://support.huaweicloud.com/intl/zh-cn/api-face/face_02_0012.html)。](tag:hk)
    * externalImageId  用户指定的图片外部ID，与当前图像绑定。用户没提供，系统会生成一个。 该ID长度范围为1～36位，可以包含字母、数字、中划线或者下划线，不包含其他的特殊字符。
    * single  是否将图片中的最大人脸添加至人脸库。可选值包括: • true: 传入的单张图片中如果包含多张人脸，则只将最大人脸添加到人脸库中。 • false: 默认为false。传入的单张图片中如果包含多张人脸，则将所有人脸添加至人脸库中。
    *
    * @var string[]
    */
    protected static $setters = [
            'imageBase64' => 'setImageBase64',
            'externalFields' => 'setExternalFields',
            'externalImageId' => 'setExternalImageId',
            'single' => 'setSingle'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageBase64  图像数据，Base64编码，要求： • Base64编码后大小不超过8MB，建议小于1MB。 • 图片为JPG/JPEG/BMP/PNG格式。
    * externalFields  [根据用户自定义数据类型，填入相应的数值。创建faceset时定义该字段，Json字符串不校验重复性，参考[自定义字段](https://support.huaweicloud.com/api-face/face_02_0012.html)。](tag:hc) [根据用户自定义数据类型，填入相应的数值。创建faceset时定义该字段，Json字符串不校验重复性，参考[自定义字段](https://support.huaweicloud.com/intl/zh-cn/api-face/face_02_0012.html)。](tag:hk)
    * externalImageId  用户指定的图片外部ID，与当前图像绑定。用户没提供，系统会生成一个。 该ID长度范围为1～36位，可以包含字母、数字、中划线或者下划线，不包含其他的特殊字符。
    * single  是否将图片中的最大人脸添加至人脸库。可选值包括: • true: 传入的单张图片中如果包含多张人脸，则只将最大人脸添加到人脸库中。 • false: 默认为false。传入的单张图片中如果包含多张人脸，则将所有人脸添加至人脸库中。
    *
    * @var string[]
    */
    protected static $getters = [
            'imageBase64' => 'getImageBase64',
            'externalFields' => 'getExternalFields',
            'externalImageId' => 'getExternalImageId',
            'single' => 'getSingle'
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
        $this->container['imageBase64'] = isset($data['imageBase64']) ? $data['imageBase64'] : null;
        $this->container['externalFields'] = isset($data['externalFields']) ? $data['externalFields'] : null;
        $this->container['externalImageId'] = isset($data['externalImageId']) ? $data['externalImageId'] : null;
        $this->container['single'] = isset($data['single']) ? $data['single'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['imageBase64'] === null) {
            $invalidProperties[] = "'imageBase64' can't be null";
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
    * Gets imageBase64
    *  图像数据，Base64编码，要求： • Base64编码后大小不超过8MB，建议小于1MB。 • 图片为JPG/JPEG/BMP/PNG格式。
    *
    * @return string
    */
    public function getImageBase64()
    {
        return $this->container['imageBase64'];
    }

    /**
    * Sets imageBase64
    *
    * @param string $imageBase64 图像数据，Base64编码，要求： • Base64编码后大小不超过8MB，建议小于1MB。 • 图片为JPG/JPEG/BMP/PNG格式。
    *
    * @return $this
    */
    public function setImageBase64($imageBase64)
    {
        $this->container['imageBase64'] = $imageBase64;
        return $this;
    }

    /**
    * Gets externalFields
    *  [根据用户自定义数据类型，填入相应的数值。创建faceset时定义该字段，Json字符串不校验重复性，参考[自定义字段](https://support.huaweicloud.com/api-face/face_02_0012.html)。](tag:hc) [根据用户自定义数据类型，填入相应的数值。创建faceset时定义该字段，Json字符串不校验重复性，参考[自定义字段](https://support.huaweicloud.com/intl/zh-cn/api-face/face_02_0012.html)。](tag:hk)
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
    * @param object|null $externalFields [根据用户自定义数据类型，填入相应的数值。创建faceset时定义该字段，Json字符串不校验重复性，参考[自定义字段](https://support.huaweicloud.com/api-face/face_02_0012.html)。](tag:hc) [根据用户自定义数据类型，填入相应的数值。创建faceset时定义该字段，Json字符串不校验重复性，参考[自定义字段](https://support.huaweicloud.com/intl/zh-cn/api-face/face_02_0012.html)。](tag:hk)
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
    *  用户指定的图片外部ID，与当前图像绑定。用户没提供，系统会生成一个。 该ID长度范围为1～36位，可以包含字母、数字、中划线或者下划线，不包含其他的特殊字符。
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
    * @param string|null $externalImageId 用户指定的图片外部ID，与当前图像绑定。用户没提供，系统会生成一个。 该ID长度范围为1～36位，可以包含字母、数字、中划线或者下划线，不包含其他的特殊字符。
    *
    * @return $this
    */
    public function setExternalImageId($externalImageId)
    {
        $this->container['externalImageId'] = $externalImageId;
        return $this;
    }

    /**
    * Gets single
    *  是否将图片中的最大人脸添加至人脸库。可选值包括: • true: 传入的单张图片中如果包含多张人脸，则只将最大人脸添加到人脸库中。 • false: 默认为false。传入的单张图片中如果包含多张人脸，则将所有人脸添加至人脸库中。
    *
    * @return bool|null
    */
    public function getSingle()
    {
        return $this->container['single'];
    }

    /**
    * Sets single
    *
    * @param bool|null $single 是否将图片中的最大人脸添加至人脸库。可选值包括: • true: 传入的单张图片中如果包含多张人脸，则只将最大人脸添加到人脸库中。 • false: 默认为false。传入的单张图片中如果包含多张人脸，则将所有人脸添加至人脸库中。
    *
    * @return $this
    */
    public function setSingle($single)
    {
        $this->container['single'] = $single;
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

