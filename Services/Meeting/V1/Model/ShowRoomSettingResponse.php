<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRoomSettingResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRoomSettingResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * roomIntroduce  网络研讨会介绍。
    * cropLogoId  企业Logo的文件id。
    * coverPictureId  欢迎界面的文件id。
    * showAudienceMode  显示观众人数的模式。默认值为real_time。 - none: 不显示 - real_time: 实时显示
    * isRedoubleOpen  智能倍增开关。默认值为Y。 - Y 开启智能倍增 - N 关闭智能倍增
    * baseAudienceCount  基础设置人数(网络研讨会没人时显示的人数)。默认值为0。取值范围为[0, 10000]。
    * multiple  设置倍数(基础人数+真实人数*倍数)。默认值为1.0。 取值范围为[0, 10]，取1位小数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'roomIntroduce' => 'string',
            'cropLogoId' => 'string',
            'coverPictureId' => 'string',
            'showAudienceMode' => 'string',
            'isRedoubleOpen' => 'string',
            'baseAudienceCount' => 'int',
            'multiple' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * roomIntroduce  网络研讨会介绍。
    * cropLogoId  企业Logo的文件id。
    * coverPictureId  欢迎界面的文件id。
    * showAudienceMode  显示观众人数的模式。默认值为real_time。 - none: 不显示 - real_time: 实时显示
    * isRedoubleOpen  智能倍增开关。默认值为Y。 - Y 开启智能倍增 - N 关闭智能倍增
    * baseAudienceCount  基础设置人数(网络研讨会没人时显示的人数)。默认值为0。取值范围为[0, 10000]。
    * multiple  设置倍数(基础人数+真实人数*倍数)。默认值为1.0。 取值范围为[0, 10]，取1位小数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'roomIntroduce' => null,
        'cropLogoId' => null,
        'coverPictureId' => null,
        'showAudienceMode' => null,
        'isRedoubleOpen' => null,
        'baseAudienceCount' => 'int32',
        'multiple' => 'double'
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
    * roomIntroduce  网络研讨会介绍。
    * cropLogoId  企业Logo的文件id。
    * coverPictureId  欢迎界面的文件id。
    * showAudienceMode  显示观众人数的模式。默认值为real_time。 - none: 不显示 - real_time: 实时显示
    * isRedoubleOpen  智能倍增开关。默认值为Y。 - Y 开启智能倍增 - N 关闭智能倍增
    * baseAudienceCount  基础设置人数(网络研讨会没人时显示的人数)。默认值为0。取值范围为[0, 10000]。
    * multiple  设置倍数(基础人数+真实人数*倍数)。默认值为1.0。 取值范围为[0, 10]，取1位小数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'roomIntroduce' => 'roomIntroduce',
            'cropLogoId' => 'cropLogoId',
            'coverPictureId' => 'coverPictureId',
            'showAudienceMode' => 'showAudienceMode',
            'isRedoubleOpen' => 'isRedoubleOpen',
            'baseAudienceCount' => 'baseAudienceCount',
            'multiple' => 'multiple'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * roomIntroduce  网络研讨会介绍。
    * cropLogoId  企业Logo的文件id。
    * coverPictureId  欢迎界面的文件id。
    * showAudienceMode  显示观众人数的模式。默认值为real_time。 - none: 不显示 - real_time: 实时显示
    * isRedoubleOpen  智能倍增开关。默认值为Y。 - Y 开启智能倍增 - N 关闭智能倍增
    * baseAudienceCount  基础设置人数(网络研讨会没人时显示的人数)。默认值为0。取值范围为[0, 10000]。
    * multiple  设置倍数(基础人数+真实人数*倍数)。默认值为1.0。 取值范围为[0, 10]，取1位小数。
    *
    * @var string[]
    */
    protected static $setters = [
            'roomIntroduce' => 'setRoomIntroduce',
            'cropLogoId' => 'setCropLogoId',
            'coverPictureId' => 'setCoverPictureId',
            'showAudienceMode' => 'setShowAudienceMode',
            'isRedoubleOpen' => 'setIsRedoubleOpen',
            'baseAudienceCount' => 'setBaseAudienceCount',
            'multiple' => 'setMultiple'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * roomIntroduce  网络研讨会介绍。
    * cropLogoId  企业Logo的文件id。
    * coverPictureId  欢迎界面的文件id。
    * showAudienceMode  显示观众人数的模式。默认值为real_time。 - none: 不显示 - real_time: 实时显示
    * isRedoubleOpen  智能倍增开关。默认值为Y。 - Y 开启智能倍增 - N 关闭智能倍增
    * baseAudienceCount  基础设置人数(网络研讨会没人时显示的人数)。默认值为0。取值范围为[0, 10000]。
    * multiple  设置倍数(基础人数+真实人数*倍数)。默认值为1.0。 取值范围为[0, 10]，取1位小数。
    *
    * @var string[]
    */
    protected static $getters = [
            'roomIntroduce' => 'getRoomIntroduce',
            'cropLogoId' => 'getCropLogoId',
            'coverPictureId' => 'getCoverPictureId',
            'showAudienceMode' => 'getShowAudienceMode',
            'isRedoubleOpen' => 'getIsRedoubleOpen',
            'baseAudienceCount' => 'getBaseAudienceCount',
            'multiple' => 'getMultiple'
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
        $this->container['roomIntroduce'] = isset($data['roomIntroduce']) ? $data['roomIntroduce'] : null;
        $this->container['cropLogoId'] = isset($data['cropLogoId']) ? $data['cropLogoId'] : null;
        $this->container['coverPictureId'] = isset($data['coverPictureId']) ? $data['coverPictureId'] : null;
        $this->container['showAudienceMode'] = isset($data['showAudienceMode']) ? $data['showAudienceMode'] : null;
        $this->container['isRedoubleOpen'] = isset($data['isRedoubleOpen']) ? $data['isRedoubleOpen'] : null;
        $this->container['baseAudienceCount'] = isset($data['baseAudienceCount']) ? $data['baseAudienceCount'] : null;
        $this->container['multiple'] = isset($data['multiple']) ? $data['multiple'] : null;
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
    * Gets roomIntroduce
    *  网络研讨会介绍。
    *
    * @return string|null
    */
    public function getRoomIntroduce()
    {
        return $this->container['roomIntroduce'];
    }

    /**
    * Sets roomIntroduce
    *
    * @param string|null $roomIntroduce 网络研讨会介绍。
    *
    * @return $this
    */
    public function setRoomIntroduce($roomIntroduce)
    {
        $this->container['roomIntroduce'] = $roomIntroduce;
        return $this;
    }

    /**
    * Gets cropLogoId
    *  企业Logo的文件id。
    *
    * @return string|null
    */
    public function getCropLogoId()
    {
        return $this->container['cropLogoId'];
    }

    /**
    * Sets cropLogoId
    *
    * @param string|null $cropLogoId 企业Logo的文件id。
    *
    * @return $this
    */
    public function setCropLogoId($cropLogoId)
    {
        $this->container['cropLogoId'] = $cropLogoId;
        return $this;
    }

    /**
    * Gets coverPictureId
    *  欢迎界面的文件id。
    *
    * @return string|null
    */
    public function getCoverPictureId()
    {
        return $this->container['coverPictureId'];
    }

    /**
    * Sets coverPictureId
    *
    * @param string|null $coverPictureId 欢迎界面的文件id。
    *
    * @return $this
    */
    public function setCoverPictureId($coverPictureId)
    {
        $this->container['coverPictureId'] = $coverPictureId;
        return $this;
    }

    /**
    * Gets showAudienceMode
    *  显示观众人数的模式。默认值为real_time。 - none: 不显示 - real_time: 实时显示
    *
    * @return string|null
    */
    public function getShowAudienceMode()
    {
        return $this->container['showAudienceMode'];
    }

    /**
    * Sets showAudienceMode
    *
    * @param string|null $showAudienceMode 显示观众人数的模式。默认值为real_time。 - none: 不显示 - real_time: 实时显示
    *
    * @return $this
    */
    public function setShowAudienceMode($showAudienceMode)
    {
        $this->container['showAudienceMode'] = $showAudienceMode;
        return $this;
    }

    /**
    * Gets isRedoubleOpen
    *  智能倍增开关。默认值为Y。 - Y 开启智能倍增 - N 关闭智能倍增
    *
    * @return string|null
    */
    public function getIsRedoubleOpen()
    {
        return $this->container['isRedoubleOpen'];
    }

    /**
    * Sets isRedoubleOpen
    *
    * @param string|null $isRedoubleOpen 智能倍增开关。默认值为Y。 - Y 开启智能倍增 - N 关闭智能倍增
    *
    * @return $this
    */
    public function setIsRedoubleOpen($isRedoubleOpen)
    {
        $this->container['isRedoubleOpen'] = $isRedoubleOpen;
        return $this;
    }

    /**
    * Gets baseAudienceCount
    *  基础设置人数(网络研讨会没人时显示的人数)。默认值为0。取值范围为[0, 10000]。
    *
    * @return int|null
    */
    public function getBaseAudienceCount()
    {
        return $this->container['baseAudienceCount'];
    }

    /**
    * Sets baseAudienceCount
    *
    * @param int|null $baseAudienceCount 基础设置人数(网络研讨会没人时显示的人数)。默认值为0。取值范围为[0, 10000]。
    *
    * @return $this
    */
    public function setBaseAudienceCount($baseAudienceCount)
    {
        $this->container['baseAudienceCount'] = $baseAudienceCount;
        return $this;
    }

    /**
    * Gets multiple
    *  设置倍数(基础人数+真实人数*倍数)。默认值为1.0。 取值范围为[0, 10]，取1位小数。
    *
    * @return double|null
    */
    public function getMultiple()
    {
        return $this->container['multiple'];
    }

    /**
    * Sets multiple
    *
    * @param double|null $multiple 设置倍数(基础人数+真实人数*倍数)。默认值为1.0。 取值范围为[0, 10]，取1位小数。
    *
    * @return $this
    */
    public function setMultiple($multiple)
    {
        $this->container['multiple'] = $multiple;
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

