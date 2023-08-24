<?php

namespace HuaweiCloud\SDK\MetaStudio\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RTCUserInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RTCUserInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userType  接入RTC的用户类型。 * CAPTURE：直播助手，将摄像头获取视频流推送到RTC房间 * ANIMATION：VDS服务，从RTC房间拉视频流生成动作数据 * RENDER：渲染服务，将动作数据渲染成数字人动画 * PLAYER：普通观看方，可选择原始视频流或者数字人动画视频流观看
    * userId  RTC用户ID。
    * signature  RTC鉴权token。
    * ctime  有效期。时间戳。  单位：秒。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userType' => 'string',
            'userId' => 'string',
            'signature' => 'string',
            'ctime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userType  接入RTC的用户类型。 * CAPTURE：直播助手，将摄像头获取视频流推送到RTC房间 * ANIMATION：VDS服务，从RTC房间拉视频流生成动作数据 * RENDER：渲染服务，将动作数据渲染成数字人动画 * PLAYER：普通观看方，可选择原始视频流或者数字人动画视频流观看
    * userId  RTC用户ID。
    * signature  RTC鉴权token。
    * ctime  有效期。时间戳。  单位：秒。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userType' => null,
        'userId' => null,
        'signature' => null,
        'ctime' => 'int64'
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
    * userType  接入RTC的用户类型。 * CAPTURE：直播助手，将摄像头获取视频流推送到RTC房间 * ANIMATION：VDS服务，从RTC房间拉视频流生成动作数据 * RENDER：渲染服务，将动作数据渲染成数字人动画 * PLAYER：普通观看方，可选择原始视频流或者数字人动画视频流观看
    * userId  RTC用户ID。
    * signature  RTC鉴权token。
    * ctime  有效期。时间戳。  单位：秒。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userType' => 'user_type',
            'userId' => 'user_id',
            'signature' => 'signature',
            'ctime' => 'ctime'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userType  接入RTC的用户类型。 * CAPTURE：直播助手，将摄像头获取视频流推送到RTC房间 * ANIMATION：VDS服务，从RTC房间拉视频流生成动作数据 * RENDER：渲染服务，将动作数据渲染成数字人动画 * PLAYER：普通观看方，可选择原始视频流或者数字人动画视频流观看
    * userId  RTC用户ID。
    * signature  RTC鉴权token。
    * ctime  有效期。时间戳。  单位：秒。
    *
    * @var string[]
    */
    protected static $setters = [
            'userType' => 'setUserType',
            'userId' => 'setUserId',
            'signature' => 'setSignature',
            'ctime' => 'setCtime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userType  接入RTC的用户类型。 * CAPTURE：直播助手，将摄像头获取视频流推送到RTC房间 * ANIMATION：VDS服务，从RTC房间拉视频流生成动作数据 * RENDER：渲染服务，将动作数据渲染成数字人动画 * PLAYER：普通观看方，可选择原始视频流或者数字人动画视频流观看
    * userId  RTC用户ID。
    * signature  RTC鉴权token。
    * ctime  有效期。时间戳。  单位：秒。
    *
    * @var string[]
    */
    protected static $getters = [
            'userType' => 'getUserType',
            'userId' => 'getUserId',
            'signature' => 'getSignature',
            'ctime' => 'getCtime'
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
    const USER_TYPE_CAPTURE = 'CAPTURE';
    const USER_TYPE_ANIMATION = 'ANIMATION';
    const USER_TYPE_RENDER = 'RENDER';
    const USER_TYPE_PLAYER = 'PLAYER';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUserTypeAllowableValues()
    {
        return [
            self::USER_TYPE_CAPTURE,
            self::USER_TYPE_ANIMATION,
            self::USER_TYPE_RENDER,
            self::USER_TYPE_PLAYER,
        ];
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
        $this->container['userType'] = isset($data['userType']) ? $data['userType'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['signature'] = isset($data['signature']) ? $data['signature'] : null;
        $this->container['ctime'] = isset($data['ctime']) ? $data['ctime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getUserTypeAllowableValues();
                if (!is_null($this->container['userType']) && !in_array($this->container['userType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'userType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) > 64)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) < 1)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['signature']) && (mb_strlen($this->container['signature']) > 64)) {
                $invalidProperties[] = "invalid value for 'signature', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['signature']) && (mb_strlen($this->container['signature']) < 1)) {
                $invalidProperties[] = "invalid value for 'signature', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ctime']) && ($this->container['ctime'] > 4294967295)) {
                $invalidProperties[] = "invalid value for 'ctime', must be smaller than or equal to 4294967295.";
            }
            if (!is_null($this->container['ctime']) && ($this->container['ctime'] < 0)) {
                $invalidProperties[] = "invalid value for 'ctime', must be bigger than or equal to 0.";
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
    * Gets userType
    *  接入RTC的用户类型。 * CAPTURE：直播助手，将摄像头获取视频流推送到RTC房间 * ANIMATION：VDS服务，从RTC房间拉视频流生成动作数据 * RENDER：渲染服务，将动作数据渲染成数字人动画 * PLAYER：普通观看方，可选择原始视频流或者数字人动画视频流观看
    *
    * @return string|null
    */
    public function getUserType()
    {
        return $this->container['userType'];
    }

    /**
    * Sets userType
    *
    * @param string|null $userType 接入RTC的用户类型。 * CAPTURE：直播助手，将摄像头获取视频流推送到RTC房间 * ANIMATION：VDS服务，从RTC房间拉视频流生成动作数据 * RENDER：渲染服务，将动作数据渲染成数字人动画 * PLAYER：普通观看方，可选择原始视频流或者数字人动画视频流观看
    *
    * @return $this
    */
    public function setUserType($userType)
    {
        $this->container['userType'] = $userType;
        return $this;
    }

    /**
    * Gets userId
    *  RTC用户ID。
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId RTC用户ID。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets signature
    *  RTC鉴权token。
    *
    * @return string|null
    */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
    * Sets signature
    *
    * @param string|null $signature RTC鉴权token。
    *
    * @return $this
    */
    public function setSignature($signature)
    {
        $this->container['signature'] = $signature;
        return $this;
    }

    /**
    * Gets ctime
    *  有效期。时间戳。  单位：秒。
    *
    * @return int|null
    */
    public function getCtime()
    {
        return $this->container['ctime'];
    }

    /**
    * Sets ctime
    *
    * @param int|null $ctime 有效期。时间戳。  单位：秒。
    *
    * @return $this
    */
    public function setCtime($ctime)
    {
        $this->container['ctime'] = $ctime;
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

