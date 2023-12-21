<?php

namespace HuaweiCloud\SDK\Ivs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReqDataByIdCardImage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReqDataByIdCardImage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * idcardImage1  身份证人像面图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    * idcardImage2  身份证国徽面图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    * faceImage  现场人像图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    * detail  响应参数similarity是否详细显示，默认为false。 - true表示响应中的similarity为0~1000的小数。 - false表示响应中的similarity为0~100的整数。
    * crop  是否允许对入参face_image进行人脸检测及图片裁剪，默认为true，表示允许。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'idcardImage1' => 'string',
            'idcardImage2' => 'string',
            'faceImage' => 'string',
            'detail' => 'bool',
            'crop' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * idcardImage1  身份证人像面图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    * idcardImage2  身份证国徽面图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    * faceImage  现场人像图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    * detail  响应参数similarity是否详细显示，默认为false。 - true表示响应中的similarity为0~1000的小数。 - false表示响应中的similarity为0~100的整数。
    * crop  是否允许对入参face_image进行人脸检测及图片裁剪，默认为true，表示允许。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'idcardImage1' => null,
        'idcardImage2' => null,
        'faceImage' => null,
        'detail' => null,
        'crop' => null
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
    * idcardImage1  身份证人像面图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    * idcardImage2  身份证国徽面图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    * faceImage  现场人像图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    * detail  响应参数similarity是否详细显示，默认为false。 - true表示响应中的similarity为0~1000的小数。 - false表示响应中的similarity为0~100的整数。
    * crop  是否允许对入参face_image进行人脸检测及图片裁剪，默认为true，表示允许。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'idcardImage1' => 'idcard_image1',
            'idcardImage2' => 'idcard_image2',
            'faceImage' => 'face_image',
            'detail' => 'detail',
            'crop' => 'crop'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * idcardImage1  身份证人像面图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    * idcardImage2  身份证国徽面图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    * faceImage  现场人像图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    * detail  响应参数similarity是否详细显示，默认为false。 - true表示响应中的similarity为0~1000的小数。 - false表示响应中的similarity为0~100的整数。
    * crop  是否允许对入参face_image进行人脸检测及图片裁剪，默认为true，表示允许。
    *
    * @var string[]
    */
    protected static $setters = [
            'idcardImage1' => 'setIdcardImage1',
            'idcardImage2' => 'setIdcardImage2',
            'faceImage' => 'setFaceImage',
            'detail' => 'setDetail',
            'crop' => 'setCrop'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * idcardImage1  身份证人像面图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    * idcardImage2  身份证国徽面图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    * faceImage  现场人像图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    * detail  响应参数similarity是否详细显示，默认为false。 - true表示响应中的similarity为0~1000的小数。 - false表示响应中的similarity为0~100的整数。
    * crop  是否允许对入参face_image进行人脸检测及图片裁剪，默认为true，表示允许。
    *
    * @var string[]
    */
    protected static $getters = [
            'idcardImage1' => 'getIdcardImage1',
            'idcardImage2' => 'getIdcardImage2',
            'faceImage' => 'getFaceImage',
            'detail' => 'getDetail',
            'crop' => 'getCrop'
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
        $this->container['idcardImage1'] = isset($data['idcardImage1']) ? $data['idcardImage1'] : null;
        $this->container['idcardImage2'] = isset($data['idcardImage2']) ? $data['idcardImage2'] : null;
        $this->container['faceImage'] = isset($data['faceImage']) ? $data['faceImage'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['crop'] = isset($data['crop']) ? $data['crop'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['idcardImage1'] === null) {
            $invalidProperties[] = "'idcardImage1' can't be null";
        }
        if ($this->container['faceImage'] === null) {
            $invalidProperties[] = "'faceImage' can't be null";
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
    * Gets idcardImage1
    *  身份证人像面图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    *
    * @return string
    */
    public function getIdcardImage1()
    {
        return $this->container['idcardImage1'];
    }

    /**
    * Sets idcardImage1
    *
    * @param string $idcardImage1 身份证人像面图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    *
    * @return $this
    */
    public function setIdcardImage1($idcardImage1)
    {
        $this->container['idcardImage1'] = $idcardImage1;
        return $this;
    }

    /**
    * Gets idcardImage2
    *  身份证国徽面图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    *
    * @return string|null
    */
    public function getIdcardImage2()
    {
        return $this->container['idcardImage2'];
    }

    /**
    * Sets idcardImage2
    *
    * @param string|null $idcardImage2 身份证国徽面图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    *
    * @return $this
    */
    public function setIdcardImage2($idcardImage2)
    {
        $this->container['idcardImage2'] = $idcardImage2;
        return $this;
    }

    /**
    * Gets faceImage
    *  现场人像图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    *
    * @return string
    */
    public function getFaceImage()
    {
        return $this->container['faceImage'];
    }

    /**
    * Sets faceImage
    *
    * @param string $faceImage 现场人像图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    *
    * @return $this
    */
    public function setFaceImage($faceImage)
    {
        $this->container['faceImage'] = $faceImage;
        return $this;
    }

    /**
    * Gets detail
    *  响应参数similarity是否详细显示，默认为false。 - true表示响应中的similarity为0~1000的小数。 - false表示响应中的similarity为0~100的整数。
    *
    * @return bool|null
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param bool|null $detail 响应参数similarity是否详细显示，默认为false。 - true表示响应中的similarity为0~1000的小数。 - false表示响应中的similarity为0~100的整数。
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
        return $this;
    }

    /**
    * Gets crop
    *  是否允许对入参face_image进行人脸检测及图片裁剪，默认为true，表示允许。
    *
    * @return bool|null
    */
    public function getCrop()
    {
        return $this->container['crop'];
    }

    /**
    * Sets crop
    *
    * @param bool|null $crop 是否允许对入参face_image进行人脸检测及图片裁剪，默认为true，表示允许。
    *
    * @return $this
    */
    public function setCrop($crop)
    {
        $this->container['crop'] = $crop;
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

