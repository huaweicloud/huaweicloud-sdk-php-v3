<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpenNotifySetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpenNotifySetting';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enableCalendar  发送邮件日历是否开启。 * Y：开启 * N： 不开启
    * enableSms  发送短信通知是否开启。 * Y：开启 * N： 不开启
    * enableEmail  发送邮件是否开启。 * Y：开启 * N： 不开启
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enableCalendar' => 'string',
            'enableSms' => 'string',
            'enableEmail' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enableCalendar  发送邮件日历是否开启。 * Y：开启 * N： 不开启
    * enableSms  发送短信通知是否开启。 * Y：开启 * N： 不开启
    * enableEmail  发送邮件是否开启。 * Y：开启 * N： 不开启
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enableCalendar' => null,
        'enableSms' => null,
        'enableEmail' => null
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
    * enableCalendar  发送邮件日历是否开启。 * Y：开启 * N： 不开启
    * enableSms  发送短信通知是否开启。 * Y：开启 * N： 不开启
    * enableEmail  发送邮件是否开启。 * Y：开启 * N： 不开启
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enableCalendar' => 'enableCalendar',
            'enableSms' => 'enableSms',
            'enableEmail' => 'enableEmail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enableCalendar  发送邮件日历是否开启。 * Y：开启 * N： 不开启
    * enableSms  发送短信通知是否开启。 * Y：开启 * N： 不开启
    * enableEmail  发送邮件是否开启。 * Y：开启 * N： 不开启
    *
    * @var string[]
    */
    protected static $setters = [
            'enableCalendar' => 'setEnableCalendar',
            'enableSms' => 'setEnableSms',
            'enableEmail' => 'setEnableEmail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enableCalendar  发送邮件日历是否开启。 * Y：开启 * N： 不开启
    * enableSms  发送短信通知是否开启。 * Y：开启 * N： 不开启
    * enableEmail  发送邮件是否开启。 * Y：开启 * N： 不开启
    *
    * @var string[]
    */
    protected static $getters = [
            'enableCalendar' => 'getEnableCalendar',
            'enableSms' => 'getEnableSms',
            'enableEmail' => 'getEnableEmail'
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
        $this->container['enableCalendar'] = isset($data['enableCalendar']) ? $data['enableCalendar'] : null;
        $this->container['enableSms'] = isset($data['enableSms']) ? $data['enableSms'] : null;
        $this->container['enableEmail'] = isset($data['enableEmail']) ? $data['enableEmail'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enableCalendar'] === null) {
            $invalidProperties[] = "'enableCalendar' can't be null";
        }
        if ($this->container['enableSms'] === null) {
            $invalidProperties[] = "'enableSms' can't be null";
        }
        if ($this->container['enableEmail'] === null) {
            $invalidProperties[] = "'enableEmail' can't be null";
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
    * Gets enableCalendar
    *  发送邮件日历是否开启。 * Y：开启 * N： 不开启
    *
    * @return string
    */
    public function getEnableCalendar()
    {
        return $this->container['enableCalendar'];
    }

    /**
    * Sets enableCalendar
    *
    * @param string $enableCalendar 发送邮件日历是否开启。 * Y：开启 * N： 不开启
    *
    * @return $this
    */
    public function setEnableCalendar($enableCalendar)
    {
        $this->container['enableCalendar'] = $enableCalendar;
        return $this;
    }

    /**
    * Gets enableSms
    *  发送短信通知是否开启。 * Y：开启 * N： 不开启
    *
    * @return string
    */
    public function getEnableSms()
    {
        return $this->container['enableSms'];
    }

    /**
    * Sets enableSms
    *
    * @param string $enableSms 发送短信通知是否开启。 * Y：开启 * N： 不开启
    *
    * @return $this
    */
    public function setEnableSms($enableSms)
    {
        $this->container['enableSms'] = $enableSms;
        return $this;
    }

    /**
    * Gets enableEmail
    *  发送邮件是否开启。 * Y：开启 * N： 不开启
    *
    * @return string
    */
    public function getEnableEmail()
    {
        return $this->container['enableEmail'];
    }

    /**
    * Sets enableEmail
    *
    * @param string $enableEmail 发送邮件是否开启。 * Y：开启 * N： 不开启
    *
    * @return $this
    */
    public function setEnableEmail($enableEmail)
    {
        $this->container['enableEmail'] = $enableEmail;
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

