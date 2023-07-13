<?php

namespace HuaweiCloud\SDK\Ivs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReqDataByVideoAndIdCardImage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReqDataByVideoAndIdCardImage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * idcardImage1  身份证人像面图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    * idcardImage2  身份证国徽面图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    * video  现场拍摄人像视频数据，使用base64编码，要求base64编码后大小不超过10M。
    * actions  动作代码顺序列表，英文逗号（,）分隔。建议单动作，目前支持的动作有： • 1：左摇头 • 2：右摇头 • 3：点头 • 4：嘴部动作
    * nodThreshold  该参数为点头动作幅度的判断门限，取值范围：[1,90]，默认为10，单位为度。该值设置越大，则越难判断为点头。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'idcardImage1' => 'string',
            'idcardImage2' => 'string',
            'video' => 'string',
            'actions' => 'string',
            'nodThreshold' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * idcardImage1  身份证人像面图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    * idcardImage2  身份证国徽面图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    * video  现场拍摄人像视频数据，使用base64编码，要求base64编码后大小不超过10M。
    * actions  动作代码顺序列表，英文逗号（,）分隔。建议单动作，目前支持的动作有： • 1：左摇头 • 2：右摇头 • 3：点头 • 4：嘴部动作
    * nodThreshold  该参数为点头动作幅度的判断门限，取值范围：[1,90]，默认为10，单位为度。该值设置越大，则越难判断为点头。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'idcardImage1' => null,
        'idcardImage2' => null,
        'video' => null,
        'actions' => null,
        'nodThreshold' => 'double'
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
    * video  现场拍摄人像视频数据，使用base64编码，要求base64编码后大小不超过10M。
    * actions  动作代码顺序列表，英文逗号（,）分隔。建议单动作，目前支持的动作有： • 1：左摇头 • 2：右摇头 • 3：点头 • 4：嘴部动作
    * nodThreshold  该参数为点头动作幅度的判断门限，取值范围：[1,90]，默认为10，单位为度。该值设置越大，则越难判断为点头。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'idcardImage1' => 'idcard_image1',
            'idcardImage2' => 'idcard_image2',
            'video' => 'video',
            'actions' => 'actions',
            'nodThreshold' => 'nod_threshold'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * idcardImage1  身份证人像面图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    * idcardImage2  身份证国徽面图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    * video  现场拍摄人像视频数据，使用base64编码，要求base64编码后大小不超过10M。
    * actions  动作代码顺序列表，英文逗号（,）分隔。建议单动作，目前支持的动作有： • 1：左摇头 • 2：右摇头 • 3：点头 • 4：嘴部动作
    * nodThreshold  该参数为点头动作幅度的判断门限，取值范围：[1,90]，默认为10，单位为度。该值设置越大，则越难判断为点头。
    *
    * @var string[]
    */
    protected static $setters = [
            'idcardImage1' => 'setIdcardImage1',
            'idcardImage2' => 'setIdcardImage2',
            'video' => 'setVideo',
            'actions' => 'setActions',
            'nodThreshold' => 'setNodThreshold'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * idcardImage1  身份证人像面图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    * idcardImage2  身份证国徽面图像数据，使用base64编码，要求base64编码后大小不超过4M。图像各边的像素大小在300到4000之间，支持JPG格式。
    * video  现场拍摄人像视频数据，使用base64编码，要求base64编码后大小不超过10M。
    * actions  动作代码顺序列表，英文逗号（,）分隔。建议单动作，目前支持的动作有： • 1：左摇头 • 2：右摇头 • 3：点头 • 4：嘴部动作
    * nodThreshold  该参数为点头动作幅度的判断门限，取值范围：[1,90]，默认为10，单位为度。该值设置越大，则越难判断为点头。
    *
    * @var string[]
    */
    protected static $getters = [
            'idcardImage1' => 'getIdcardImage1',
            'idcardImage2' => 'getIdcardImage2',
            'video' => 'getVideo',
            'actions' => 'getActions',
            'nodThreshold' => 'getNodThreshold'
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
        $this->container['video'] = isset($data['video']) ? $data['video'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['nodThreshold'] = isset($data['nodThreshold']) ? $data['nodThreshold'] : null;
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
        if ($this->container['video'] === null) {
            $invalidProperties[] = "'video' can't be null";
        }
        if ($this->container['actions'] === null) {
            $invalidProperties[] = "'actions' can't be null";
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
    * Gets video
    *  现场拍摄人像视频数据，使用base64编码，要求base64编码后大小不超过10M。
    *
    * @return string
    */
    public function getVideo()
    {
        return $this->container['video'];
    }

    /**
    * Sets video
    *
    * @param string $video 现场拍摄人像视频数据，使用base64编码，要求base64编码后大小不超过10M。
    *
    * @return $this
    */
    public function setVideo($video)
    {
        $this->container['video'] = $video;
        return $this;
    }

    /**
    * Gets actions
    *  动作代码顺序列表，英文逗号（,）分隔。建议单动作，目前支持的动作有： • 1：左摇头 • 2：右摇头 • 3：点头 • 4：嘴部动作
    *
    * @return string
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param string $actions 动作代码顺序列表，英文逗号（,）分隔。建议单动作，目前支持的动作有： • 1：左摇头 • 2：右摇头 • 3：点头 • 4：嘴部动作
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets nodThreshold
    *  该参数为点头动作幅度的判断门限，取值范围：[1,90]，默认为10，单位为度。该值设置越大，则越难判断为点头。
    *
    * @return double|null
    */
    public function getNodThreshold()
    {
        return $this->container['nodThreshold'];
    }

    /**
    * Sets nodThreshold
    *
    * @param double|null $nodThreshold 该参数为点头动作幅度的判断门限，取值范围：[1,90]，默认为10，单位为度。该值设置越大，则越难判断为点头。
    *
    * @return $this
    */
    public function setNodThreshold($nodThreshold)
    {
        $this->container['nodThreshold'] = $nodThreshold;
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

