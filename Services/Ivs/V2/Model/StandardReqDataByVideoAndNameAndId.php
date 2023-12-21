<?php

namespace HuaweiCloud\SDK\Ivs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StandardReqDataByVideoAndNameAndId implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StandardReqDataByVideoAndNameAndId';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * verificationName  被验证人的姓名。
    * verificationId  被验证人的身份证号码。
    * video  现场拍摄人像视频数据，使用base64编码，要求base64编码后大小不超过10M。
    * actions  动作代码顺序列表，英文逗号（,）分隔。建议单动作，目前支持的动作有： • 1：左摇头 • 2：右摇头 • 3：点头 • 4：嘴部动作
    * nodThreshold  该参数为点头动作幅度的判断门限，取值范围：[1,90]，默认为10，单位为度。该值设置越大，则越难判断为点头。
    * detail  响应参数similarity是否详细显示，默认为false。 - true表示响应中的similarity为0~1000的小数。 - false表示响应中的similarity为0~100的整数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'verificationName' => 'string',
            'verificationId' => 'string',
            'video' => 'string',
            'actions' => 'string',
            'nodThreshold' => 'double',
            'detail' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * verificationName  被验证人的姓名。
    * verificationId  被验证人的身份证号码。
    * video  现场拍摄人像视频数据，使用base64编码，要求base64编码后大小不超过10M。
    * actions  动作代码顺序列表，英文逗号（,）分隔。建议单动作，目前支持的动作有： • 1：左摇头 • 2：右摇头 • 3：点头 • 4：嘴部动作
    * nodThreshold  该参数为点头动作幅度的判断门限，取值范围：[1,90]，默认为10，单位为度。该值设置越大，则越难判断为点头。
    * detail  响应参数similarity是否详细显示，默认为false。 - true表示响应中的similarity为0~1000的小数。 - false表示响应中的similarity为0~100的整数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'verificationName' => null,
        'verificationId' => null,
        'video' => null,
        'actions' => null,
        'nodThreshold' => 'double',
        'detail' => null
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
    * verificationName  被验证人的姓名。
    * verificationId  被验证人的身份证号码。
    * video  现场拍摄人像视频数据，使用base64编码，要求base64编码后大小不超过10M。
    * actions  动作代码顺序列表，英文逗号（,）分隔。建议单动作，目前支持的动作有： • 1：左摇头 • 2：右摇头 • 3：点头 • 4：嘴部动作
    * nodThreshold  该参数为点头动作幅度的判断门限，取值范围：[1,90]，默认为10，单位为度。该值设置越大，则越难判断为点头。
    * detail  响应参数similarity是否详细显示，默认为false。 - true表示响应中的similarity为0~1000的小数。 - false表示响应中的similarity为0~100的整数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'verificationName' => 'verification_name',
            'verificationId' => 'verification_id',
            'video' => 'video',
            'actions' => 'actions',
            'nodThreshold' => 'nod_threshold',
            'detail' => 'detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * verificationName  被验证人的姓名。
    * verificationId  被验证人的身份证号码。
    * video  现场拍摄人像视频数据，使用base64编码，要求base64编码后大小不超过10M。
    * actions  动作代码顺序列表，英文逗号（,）分隔。建议单动作，目前支持的动作有： • 1：左摇头 • 2：右摇头 • 3：点头 • 4：嘴部动作
    * nodThreshold  该参数为点头动作幅度的判断门限，取值范围：[1,90]，默认为10，单位为度。该值设置越大，则越难判断为点头。
    * detail  响应参数similarity是否详细显示，默认为false。 - true表示响应中的similarity为0~1000的小数。 - false表示响应中的similarity为0~100的整数。
    *
    * @var string[]
    */
    protected static $setters = [
            'verificationName' => 'setVerificationName',
            'verificationId' => 'setVerificationId',
            'video' => 'setVideo',
            'actions' => 'setActions',
            'nodThreshold' => 'setNodThreshold',
            'detail' => 'setDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * verificationName  被验证人的姓名。
    * verificationId  被验证人的身份证号码。
    * video  现场拍摄人像视频数据，使用base64编码，要求base64编码后大小不超过10M。
    * actions  动作代码顺序列表，英文逗号（,）分隔。建议单动作，目前支持的动作有： • 1：左摇头 • 2：右摇头 • 3：点头 • 4：嘴部动作
    * nodThreshold  该参数为点头动作幅度的判断门限，取值范围：[1,90]，默认为10，单位为度。该值设置越大，则越难判断为点头。
    * detail  响应参数similarity是否详细显示，默认为false。 - true表示响应中的similarity为0~1000的小数。 - false表示响应中的similarity为0~100的整数。
    *
    * @var string[]
    */
    protected static $getters = [
            'verificationName' => 'getVerificationName',
            'verificationId' => 'getVerificationId',
            'video' => 'getVideo',
            'actions' => 'getActions',
            'nodThreshold' => 'getNodThreshold',
            'detail' => 'getDetail'
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
        $this->container['verificationName'] = isset($data['verificationName']) ? $data['verificationName'] : null;
        $this->container['verificationId'] = isset($data['verificationId']) ? $data['verificationId'] : null;
        $this->container['video'] = isset($data['video']) ? $data['video'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['nodThreshold'] = isset($data['nodThreshold']) ? $data['nodThreshold'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['verificationName'] === null) {
            $invalidProperties[] = "'verificationName' can't be null";
        }
        if ($this->container['verificationId'] === null) {
            $invalidProperties[] = "'verificationId' can't be null";
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
    * Gets verificationName
    *  被验证人的姓名。
    *
    * @return string
    */
    public function getVerificationName()
    {
        return $this->container['verificationName'];
    }

    /**
    * Sets verificationName
    *
    * @param string $verificationName 被验证人的姓名。
    *
    * @return $this
    */
    public function setVerificationName($verificationName)
    {
        $this->container['verificationName'] = $verificationName;
        return $this;
    }

    /**
    * Gets verificationId
    *  被验证人的身份证号码。
    *
    * @return string
    */
    public function getVerificationId()
    {
        return $this->container['verificationId'];
    }

    /**
    * Sets verificationId
    *
    * @param string $verificationId 被验证人的身份证号码。
    *
    * @return $this
    */
    public function setVerificationId($verificationId)
    {
        $this->container['verificationId'] = $verificationId;
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

