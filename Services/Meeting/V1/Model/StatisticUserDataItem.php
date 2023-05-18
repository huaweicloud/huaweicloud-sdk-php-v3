<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StatisticUserDataItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StatisticUserDataItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * time  日期/月份。
    * userLoginCount  登录用户数。 category = user_login_info时有效。
    * userPcLoginCount  PC端登录用户数。 category = user_login_info时有效。
    * userMobileLoginCount  移动端登录用户数。 category = user_login_info时有效。
    * userActivatedCount  激活用户数。 category = user_activate_info时有效。
    * userLoginDevicesName  用户登录设备名称。 category = user_login_device_info时有效。
    * userLoginDevicesCount  用户登录设备数。 category = user_login_device_info时有效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'time' => 'string',
            'userLoginCount' => 'string',
            'userPcLoginCount' => 'string',
            'userMobileLoginCount' => 'string',
            'userActivatedCount' => 'string',
            'userLoginDevicesName' => 'string',
            'userLoginDevicesCount' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * time  日期/月份。
    * userLoginCount  登录用户数。 category = user_login_info时有效。
    * userPcLoginCount  PC端登录用户数。 category = user_login_info时有效。
    * userMobileLoginCount  移动端登录用户数。 category = user_login_info时有效。
    * userActivatedCount  激活用户数。 category = user_activate_info时有效。
    * userLoginDevicesName  用户登录设备名称。 category = user_login_device_info时有效。
    * userLoginDevicesCount  用户登录设备数。 category = user_login_device_info时有效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'time' => null,
        'userLoginCount' => null,
        'userPcLoginCount' => null,
        'userMobileLoginCount' => null,
        'userActivatedCount' => null,
        'userLoginDevicesName' => null,
        'userLoginDevicesCount' => null
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
    * time  日期/月份。
    * userLoginCount  登录用户数。 category = user_login_info时有效。
    * userPcLoginCount  PC端登录用户数。 category = user_login_info时有效。
    * userMobileLoginCount  移动端登录用户数。 category = user_login_info时有效。
    * userActivatedCount  激活用户数。 category = user_activate_info时有效。
    * userLoginDevicesName  用户登录设备名称。 category = user_login_device_info时有效。
    * userLoginDevicesCount  用户登录设备数。 category = user_login_device_info时有效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'time' => 'time',
            'userLoginCount' => 'userLoginCount',
            'userPcLoginCount' => 'userPCLoginCount',
            'userMobileLoginCount' => 'userMobileLoginCount',
            'userActivatedCount' => 'userActivatedCount',
            'userLoginDevicesName' => 'userLoginDevicesName',
            'userLoginDevicesCount' => 'userLoginDevicesCount'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * time  日期/月份。
    * userLoginCount  登录用户数。 category = user_login_info时有效。
    * userPcLoginCount  PC端登录用户数。 category = user_login_info时有效。
    * userMobileLoginCount  移动端登录用户数。 category = user_login_info时有效。
    * userActivatedCount  激活用户数。 category = user_activate_info时有效。
    * userLoginDevicesName  用户登录设备名称。 category = user_login_device_info时有效。
    * userLoginDevicesCount  用户登录设备数。 category = user_login_device_info时有效。
    *
    * @var string[]
    */
    protected static $setters = [
            'time' => 'setTime',
            'userLoginCount' => 'setUserLoginCount',
            'userPcLoginCount' => 'setUserPcLoginCount',
            'userMobileLoginCount' => 'setUserMobileLoginCount',
            'userActivatedCount' => 'setUserActivatedCount',
            'userLoginDevicesName' => 'setUserLoginDevicesName',
            'userLoginDevicesCount' => 'setUserLoginDevicesCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * time  日期/月份。
    * userLoginCount  登录用户数。 category = user_login_info时有效。
    * userPcLoginCount  PC端登录用户数。 category = user_login_info时有效。
    * userMobileLoginCount  移动端登录用户数。 category = user_login_info时有效。
    * userActivatedCount  激活用户数。 category = user_activate_info时有效。
    * userLoginDevicesName  用户登录设备名称。 category = user_login_device_info时有效。
    * userLoginDevicesCount  用户登录设备数。 category = user_login_device_info时有效。
    *
    * @var string[]
    */
    protected static $getters = [
            'time' => 'getTime',
            'userLoginCount' => 'getUserLoginCount',
            'userPcLoginCount' => 'getUserPcLoginCount',
            'userMobileLoginCount' => 'getUserMobileLoginCount',
            'userActivatedCount' => 'getUserActivatedCount',
            'userLoginDevicesName' => 'getUserLoginDevicesName',
            'userLoginDevicesCount' => 'getUserLoginDevicesCount'
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
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['userLoginCount'] = isset($data['userLoginCount']) ? $data['userLoginCount'] : null;
        $this->container['userPcLoginCount'] = isset($data['userPcLoginCount']) ? $data['userPcLoginCount'] : null;
        $this->container['userMobileLoginCount'] = isset($data['userMobileLoginCount']) ? $data['userMobileLoginCount'] : null;
        $this->container['userActivatedCount'] = isset($data['userActivatedCount']) ? $data['userActivatedCount'] : null;
        $this->container['userLoginDevicesName'] = isset($data['userLoginDevicesName']) ? $data['userLoginDevicesName'] : null;
        $this->container['userLoginDevicesCount'] = isset($data['userLoginDevicesCount']) ? $data['userLoginDevicesCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['time']) && (mb_strlen($this->container['time']) > 128)) {
                $invalidProperties[] = "invalid value for 'time', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['time']) && (mb_strlen($this->container['time']) < 1)) {
                $invalidProperties[] = "invalid value for 'time', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userLoginCount']) && (mb_strlen($this->container['userLoginCount']) > 128)) {
                $invalidProperties[] = "invalid value for 'userLoginCount', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['userLoginCount']) && (mb_strlen($this->container['userLoginCount']) < 1)) {
                $invalidProperties[] = "invalid value for 'userLoginCount', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userPcLoginCount']) && (mb_strlen($this->container['userPcLoginCount']) > 128)) {
                $invalidProperties[] = "invalid value for 'userPcLoginCount', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['userPcLoginCount']) && (mb_strlen($this->container['userPcLoginCount']) < 1)) {
                $invalidProperties[] = "invalid value for 'userPcLoginCount', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userMobileLoginCount']) && (mb_strlen($this->container['userMobileLoginCount']) > 128)) {
                $invalidProperties[] = "invalid value for 'userMobileLoginCount', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['userMobileLoginCount']) && (mb_strlen($this->container['userMobileLoginCount']) < 1)) {
                $invalidProperties[] = "invalid value for 'userMobileLoginCount', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userActivatedCount']) && (mb_strlen($this->container['userActivatedCount']) > 128)) {
                $invalidProperties[] = "invalid value for 'userActivatedCount', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['userActivatedCount']) && (mb_strlen($this->container['userActivatedCount']) < 1)) {
                $invalidProperties[] = "invalid value for 'userActivatedCount', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userLoginDevicesName']) && (mb_strlen($this->container['userLoginDevicesName']) > 128)) {
                $invalidProperties[] = "invalid value for 'userLoginDevicesName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['userLoginDevicesName']) && (mb_strlen($this->container['userLoginDevicesName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userLoginDevicesName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userLoginDevicesCount']) && (mb_strlen($this->container['userLoginDevicesCount']) > 128)) {
                $invalidProperties[] = "invalid value for 'userLoginDevicesCount', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['userLoginDevicesCount']) && (mb_strlen($this->container['userLoginDevicesCount']) < 1)) {
                $invalidProperties[] = "invalid value for 'userLoginDevicesCount', the character length must be bigger than or equal to 1.";
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
    * Gets time
    *  日期/月份。
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time 日期/月份。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets userLoginCount
    *  登录用户数。 category = user_login_info时有效。
    *
    * @return string|null
    */
    public function getUserLoginCount()
    {
        return $this->container['userLoginCount'];
    }

    /**
    * Sets userLoginCount
    *
    * @param string|null $userLoginCount 登录用户数。 category = user_login_info时有效。
    *
    * @return $this
    */
    public function setUserLoginCount($userLoginCount)
    {
        $this->container['userLoginCount'] = $userLoginCount;
        return $this;
    }

    /**
    * Gets userPcLoginCount
    *  PC端登录用户数。 category = user_login_info时有效。
    *
    * @return string|null
    */
    public function getUserPcLoginCount()
    {
        return $this->container['userPcLoginCount'];
    }

    /**
    * Sets userPcLoginCount
    *
    * @param string|null $userPcLoginCount PC端登录用户数。 category = user_login_info时有效。
    *
    * @return $this
    */
    public function setUserPcLoginCount($userPcLoginCount)
    {
        $this->container['userPcLoginCount'] = $userPcLoginCount;
        return $this;
    }

    /**
    * Gets userMobileLoginCount
    *  移动端登录用户数。 category = user_login_info时有效。
    *
    * @return string|null
    */
    public function getUserMobileLoginCount()
    {
        return $this->container['userMobileLoginCount'];
    }

    /**
    * Sets userMobileLoginCount
    *
    * @param string|null $userMobileLoginCount 移动端登录用户数。 category = user_login_info时有效。
    *
    * @return $this
    */
    public function setUserMobileLoginCount($userMobileLoginCount)
    {
        $this->container['userMobileLoginCount'] = $userMobileLoginCount;
        return $this;
    }

    /**
    * Gets userActivatedCount
    *  激活用户数。 category = user_activate_info时有效。
    *
    * @return string|null
    */
    public function getUserActivatedCount()
    {
        return $this->container['userActivatedCount'];
    }

    /**
    * Sets userActivatedCount
    *
    * @param string|null $userActivatedCount 激活用户数。 category = user_activate_info时有效。
    *
    * @return $this
    */
    public function setUserActivatedCount($userActivatedCount)
    {
        $this->container['userActivatedCount'] = $userActivatedCount;
        return $this;
    }

    /**
    * Gets userLoginDevicesName
    *  用户登录设备名称。 category = user_login_device_info时有效。
    *
    * @return string|null
    */
    public function getUserLoginDevicesName()
    {
        return $this->container['userLoginDevicesName'];
    }

    /**
    * Sets userLoginDevicesName
    *
    * @param string|null $userLoginDevicesName 用户登录设备名称。 category = user_login_device_info时有效。
    *
    * @return $this
    */
    public function setUserLoginDevicesName($userLoginDevicesName)
    {
        $this->container['userLoginDevicesName'] = $userLoginDevicesName;
        return $this;
    }

    /**
    * Gets userLoginDevicesCount
    *  用户登录设备数。 category = user_login_device_info时有效。
    *
    * @return string|null
    */
    public function getUserLoginDevicesCount()
    {
        return $this->container['userLoginDevicesCount'];
    }

    /**
    * Sets userLoginDevicesCount
    *
    * @param string|null $userLoginDevicesCount 用户登录设备数。 category = user_login_device_info时有效。
    *
    * @return $this
    */
    public function setUserLoginDevicesCount($userLoginDevicesCount)
    {
        $this->container['userLoginDevicesCount'] = $userLoginDevicesCount;
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

