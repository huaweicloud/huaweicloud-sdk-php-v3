<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SlideVerifyCodeCheckDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SlideVerifyCodeCheckDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * user  必须和发送验证码时带的用户身份信息相同。
    * clientType  登录客户端类型。 * 0：Web客户端类型 * 5：PC客户端 * 6：移动客户端
    * checkType  校验类型。默认值：0。 * 0：登录； * 1：忘记密码;
    * token  验证码Token字符串。通过[[发送滑块验证码](https://support.huaweicloud.com/api-meeting/meeting_21_0100.html)](tag:hws)[[发送滑块验证码](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0100.html)](tag:hk) 接口获取。
    * pointX  抠出图形的X轴坐标。
    * slideTime  滑动时间，单位ms。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'user' => 'string',
            'clientType' => 'int',
            'checkType' => 'int',
            'token' => 'string',
            'pointX' => 'int',
            'slideTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * user  必须和发送验证码时带的用户身份信息相同。
    * clientType  登录客户端类型。 * 0：Web客户端类型 * 5：PC客户端 * 6：移动客户端
    * checkType  校验类型。默认值：0。 * 0：登录； * 1：忘记密码;
    * token  验证码Token字符串。通过[[发送滑块验证码](https://support.huaweicloud.com/api-meeting/meeting_21_0100.html)](tag:hws)[[发送滑块验证码](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0100.html)](tag:hk) 接口获取。
    * pointX  抠出图形的X轴坐标。
    * slideTime  滑动时间，单位ms。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'user' => null,
        'clientType' => null,
        'checkType' => null,
        'token' => null,
        'pointX' => null,
        'slideTime' => null
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
    * user  必须和发送验证码时带的用户身份信息相同。
    * clientType  登录客户端类型。 * 0：Web客户端类型 * 5：PC客户端 * 6：移动客户端
    * checkType  校验类型。默认值：0。 * 0：登录； * 1：忘记密码;
    * token  验证码Token字符串。通过[[发送滑块验证码](https://support.huaweicloud.com/api-meeting/meeting_21_0100.html)](tag:hws)[[发送滑块验证码](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0100.html)](tag:hk) 接口获取。
    * pointX  抠出图形的X轴坐标。
    * slideTime  滑动时间，单位ms。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'user' => 'user',
            'clientType' => 'clientType',
            'checkType' => 'checkType',
            'token' => 'token',
            'pointX' => 'pointX',
            'slideTime' => 'slideTime'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * user  必须和发送验证码时带的用户身份信息相同。
    * clientType  登录客户端类型。 * 0：Web客户端类型 * 5：PC客户端 * 6：移动客户端
    * checkType  校验类型。默认值：0。 * 0：登录； * 1：忘记密码;
    * token  验证码Token字符串。通过[[发送滑块验证码](https://support.huaweicloud.com/api-meeting/meeting_21_0100.html)](tag:hws)[[发送滑块验证码](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0100.html)](tag:hk) 接口获取。
    * pointX  抠出图形的X轴坐标。
    * slideTime  滑动时间，单位ms。
    *
    * @var string[]
    */
    protected static $setters = [
            'user' => 'setUser',
            'clientType' => 'setClientType',
            'checkType' => 'setCheckType',
            'token' => 'setToken',
            'pointX' => 'setPointX',
            'slideTime' => 'setSlideTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * user  必须和发送验证码时带的用户身份信息相同。
    * clientType  登录客户端类型。 * 0：Web客户端类型 * 5：PC客户端 * 6：移动客户端
    * checkType  校验类型。默认值：0。 * 0：登录； * 1：忘记密码;
    * token  验证码Token字符串。通过[[发送滑块验证码](https://support.huaweicloud.com/api-meeting/meeting_21_0100.html)](tag:hws)[[发送滑块验证码](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0100.html)](tag:hk) 接口获取。
    * pointX  抠出图形的X轴坐标。
    * slideTime  滑动时间，单位ms。
    *
    * @var string[]
    */
    protected static $getters = [
            'user' => 'getUser',
            'clientType' => 'getClientType',
            'checkType' => 'getCheckType',
            'token' => 'getToken',
            'pointX' => 'getPointX',
            'slideTime' => 'getSlideTime'
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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['clientType'] = isset($data['clientType']) ? $data['clientType'] : null;
        $this->container['checkType'] = isset($data['checkType']) ? $data['checkType'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['pointX'] = isset($data['pointX']) ? $data['pointX'] : null;
        $this->container['slideTime'] = isset($data['slideTime']) ? $data['slideTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
            if ((mb_strlen($this->container['user']) > 255)) {
                $invalidProperties[] = "invalid value for 'user', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['user']) < 1)) {
                $invalidProperties[] = "invalid value for 'user', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['clientType'] === null) {
            $invalidProperties[] = "'clientType' can't be null";
        }
            if (($this->container['clientType'] > 255)) {
                $invalidProperties[] = "invalid value for 'clientType', must be smaller than or equal to 255.";
            }
            if (($this->container['clientType'] < 0)) {
                $invalidProperties[] = "invalid value for 'clientType', must be bigger than or equal to 0.";
            }
        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
            if ((mb_strlen($this->container['token']) > 255)) {
                $invalidProperties[] = "invalid value for 'token', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['token']) < 1)) {
                $invalidProperties[] = "invalid value for 'token', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['pointX'] === null) {
            $invalidProperties[] = "'pointX' can't be null";
        }
        if ($this->container['slideTime'] === null) {
            $invalidProperties[] = "'slideTime' can't be null";
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
    * Gets user
    *  必须和发送验证码时带的用户身份信息相同。
    *
    * @return string
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string $user 必须和发送验证码时带的用户身份信息相同。
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets clientType
    *  登录客户端类型。 * 0：Web客户端类型 * 5：PC客户端 * 6：移动客户端
    *
    * @return int
    */
    public function getClientType()
    {
        return $this->container['clientType'];
    }

    /**
    * Sets clientType
    *
    * @param int $clientType 登录客户端类型。 * 0：Web客户端类型 * 5：PC客户端 * 6：移动客户端
    *
    * @return $this
    */
    public function setClientType($clientType)
    {
        $this->container['clientType'] = $clientType;
        return $this;
    }

    /**
    * Gets checkType
    *  校验类型。默认值：0。 * 0：登录； * 1：忘记密码;
    *
    * @return int|null
    */
    public function getCheckType()
    {
        return $this->container['checkType'];
    }

    /**
    * Sets checkType
    *
    * @param int|null $checkType 校验类型。默认值：0。 * 0：登录； * 1：忘记密码;
    *
    * @return $this
    */
    public function setCheckType($checkType)
    {
        $this->container['checkType'] = $checkType;
        return $this;
    }

    /**
    * Gets token
    *  验证码Token字符串。通过[[发送滑块验证码](https://support.huaweicloud.com/api-meeting/meeting_21_0100.html)](tag:hws)[[发送滑块验证码](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0100.html)](tag:hk) 接口获取。
    *
    * @return string
    */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
    * Sets token
    *
    * @param string $token 验证码Token字符串。通过[[发送滑块验证码](https://support.huaweicloud.com/api-meeting/meeting_21_0100.html)](tag:hws)[[发送滑块验证码](https://support.huaweicloud.com/intl/zh-cn/api-meeting/meeting_21_0100.html)](tag:hk) 接口获取。
    *
    * @return $this
    */
    public function setToken($token)
    {
        $this->container['token'] = $token;
        return $this;
    }

    /**
    * Gets pointX
    *  抠出图形的X轴坐标。
    *
    * @return int
    */
    public function getPointX()
    {
        return $this->container['pointX'];
    }

    /**
    * Sets pointX
    *
    * @param int $pointX 抠出图形的X轴坐标。
    *
    * @return $this
    */
    public function setPointX($pointX)
    {
        $this->container['pointX'] = $pointX;
        return $this;
    }

    /**
    * Gets slideTime
    *  滑动时间，单位ms。
    *
    * @return int
    */
    public function getSlideTime()
    {
        return $this->container['slideTime'];
    }

    /**
    * Sets slideTime
    *
    * @param int $slideTime 滑动时间，单位ms。
    *
    * @return $this
    */
    public function setSlideTime($slideTime)
    {
        $this->container['slideTime'] = $slideTime;
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

