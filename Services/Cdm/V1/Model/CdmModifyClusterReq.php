<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CdmModifyClusterReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CdmModifyClusterReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * autoOff  自动关机。
    * scheduleBootOff  定时关机。
    * scheduleBootTime  定时开机。
    * scheduleOffTime  定时关机时间。
    * autoRemind  消息通知。
    * phoneNum  手机号码，最多填写20个，以英文逗号分隔。
    * email  邮箱地址，最多填写20个，以英文逗号分隔。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'autoOff' => 'bool',
            'scheduleBootOff' => 'bool',
            'scheduleBootTime' => 'string',
            'scheduleOffTime' => 'string',
            'autoRemind' => 'bool',
            'phoneNum' => 'string',
            'email' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * autoOff  自动关机。
    * scheduleBootOff  定时关机。
    * scheduleBootTime  定时开机。
    * scheduleOffTime  定时关机时间。
    * autoRemind  消息通知。
    * phoneNum  手机号码，最多填写20个，以英文逗号分隔。
    * email  邮箱地址，最多填写20个，以英文逗号分隔。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'autoOff' => null,
        'scheduleBootOff' => null,
        'scheduleBootTime' => null,
        'scheduleOffTime' => null,
        'autoRemind' => null,
        'phoneNum' => null,
        'email' => null
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
    * autoOff  自动关机。
    * scheduleBootOff  定时关机。
    * scheduleBootTime  定时开机。
    * scheduleOffTime  定时关机时间。
    * autoRemind  消息通知。
    * phoneNum  手机号码，最多填写20个，以英文逗号分隔。
    * email  邮箱地址，最多填写20个，以英文逗号分隔。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'autoOff' => 'autoOff',
            'scheduleBootOff' => 'scheduleBootOff',
            'scheduleBootTime' => 'scheduleBootTime',
            'scheduleOffTime' => 'scheduleOffTime',
            'autoRemind' => 'autoRemind',
            'phoneNum' => 'phoneNum',
            'email' => 'email'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * autoOff  自动关机。
    * scheduleBootOff  定时关机。
    * scheduleBootTime  定时开机。
    * scheduleOffTime  定时关机时间。
    * autoRemind  消息通知。
    * phoneNum  手机号码，最多填写20个，以英文逗号分隔。
    * email  邮箱地址，最多填写20个，以英文逗号分隔。
    *
    * @var string[]
    */
    protected static $setters = [
            'autoOff' => 'setAutoOff',
            'scheduleBootOff' => 'setScheduleBootOff',
            'scheduleBootTime' => 'setScheduleBootTime',
            'scheduleOffTime' => 'setScheduleOffTime',
            'autoRemind' => 'setAutoRemind',
            'phoneNum' => 'setPhoneNum',
            'email' => 'setEmail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * autoOff  自动关机。
    * scheduleBootOff  定时关机。
    * scheduleBootTime  定时开机。
    * scheduleOffTime  定时关机时间。
    * autoRemind  消息通知。
    * phoneNum  手机号码，最多填写20个，以英文逗号分隔。
    * email  邮箱地址，最多填写20个，以英文逗号分隔。
    *
    * @var string[]
    */
    protected static $getters = [
            'autoOff' => 'getAutoOff',
            'scheduleBootOff' => 'getScheduleBootOff',
            'scheduleBootTime' => 'getScheduleBootTime',
            'scheduleOffTime' => 'getScheduleOffTime',
            'autoRemind' => 'getAutoRemind',
            'phoneNum' => 'getPhoneNum',
            'email' => 'getEmail'
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
        $this->container['autoOff'] = isset($data['autoOff']) ? $data['autoOff'] : null;
        $this->container['scheduleBootOff'] = isset($data['scheduleBootOff']) ? $data['scheduleBootOff'] : null;
        $this->container['scheduleBootTime'] = isset($data['scheduleBootTime']) ? $data['scheduleBootTime'] : null;
        $this->container['scheduleOffTime'] = isset($data['scheduleOffTime']) ? $data['scheduleOffTime'] : null;
        $this->container['autoRemind'] = isset($data['autoRemind']) ? $data['autoRemind'] : null;
        $this->container['phoneNum'] = isset($data['phoneNum']) ? $data['phoneNum'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
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
    * Gets autoOff
    *  自动关机。
    *
    * @return bool|null
    */
    public function getAutoOff()
    {
        return $this->container['autoOff'];
    }

    /**
    * Sets autoOff
    *
    * @param bool|null $autoOff 自动关机。
    *
    * @return $this
    */
    public function setAutoOff($autoOff)
    {
        $this->container['autoOff'] = $autoOff;
        return $this;
    }

    /**
    * Gets scheduleBootOff
    *  定时关机。
    *
    * @return bool|null
    */
    public function getScheduleBootOff()
    {
        return $this->container['scheduleBootOff'];
    }

    /**
    * Sets scheduleBootOff
    *
    * @param bool|null $scheduleBootOff 定时关机。
    *
    * @return $this
    */
    public function setScheduleBootOff($scheduleBootOff)
    {
        $this->container['scheduleBootOff'] = $scheduleBootOff;
        return $this;
    }

    /**
    * Gets scheduleBootTime
    *  定时开机。
    *
    * @return string|null
    */
    public function getScheduleBootTime()
    {
        return $this->container['scheduleBootTime'];
    }

    /**
    * Sets scheduleBootTime
    *
    * @param string|null $scheduleBootTime 定时开机。
    *
    * @return $this
    */
    public function setScheduleBootTime($scheduleBootTime)
    {
        $this->container['scheduleBootTime'] = $scheduleBootTime;
        return $this;
    }

    /**
    * Gets scheduleOffTime
    *  定时关机时间。
    *
    * @return string|null
    */
    public function getScheduleOffTime()
    {
        return $this->container['scheduleOffTime'];
    }

    /**
    * Sets scheduleOffTime
    *
    * @param string|null $scheduleOffTime 定时关机时间。
    *
    * @return $this
    */
    public function setScheduleOffTime($scheduleOffTime)
    {
        $this->container['scheduleOffTime'] = $scheduleOffTime;
        return $this;
    }

    /**
    * Gets autoRemind
    *  消息通知。
    *
    * @return bool|null
    */
    public function getAutoRemind()
    {
        return $this->container['autoRemind'];
    }

    /**
    * Sets autoRemind
    *
    * @param bool|null $autoRemind 消息通知。
    *
    * @return $this
    */
    public function setAutoRemind($autoRemind)
    {
        $this->container['autoRemind'] = $autoRemind;
        return $this;
    }

    /**
    * Gets phoneNum
    *  手机号码，最多填写20个，以英文逗号分隔。
    *
    * @return string|null
    */
    public function getPhoneNum()
    {
        return $this->container['phoneNum'];
    }

    /**
    * Sets phoneNum
    *
    * @param string|null $phoneNum 手机号码，最多填写20个，以英文逗号分隔。
    *
    * @return $this
    */
    public function setPhoneNum($phoneNum)
    {
        $this->container['phoneNum'] = $phoneNum;
        return $this;
    }

    /**
    * Gets email
    *  邮箱地址，最多填写20个，以英文逗号分隔。
    *
    * @return string|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string|null $email 邮箱地址，最多填写20个，以英文逗号分隔。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
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

