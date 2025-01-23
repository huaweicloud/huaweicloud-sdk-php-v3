<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResetPasswordResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResetPasswordResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * retryTimesLeft  密码验证剩余次数
    * lockTime  锁定时间
    * lockTimeLeft  锁定剩余时间
    * code  **参数解释**： 重置密码结果编号。 **取值范围**： - 1：重置密码成功。 - 3：实例被锁定。
    * message  **参数解释**： 重置密码结果信息。 **取值范围**： - success - instance is locked
    * extMessage  **参数解释**： 重置密码错误信息，若重置密码成功，则为null。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'retryTimesLeft' => 'string',
            'lockTime' => 'string',
            'lockTimeLeft' => 'string',
            'code' => 'string',
            'message' => 'string',
            'extMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * retryTimesLeft  密码验证剩余次数
    * lockTime  锁定时间
    * lockTimeLeft  锁定剩余时间
    * code  **参数解释**： 重置密码结果编号。 **取值范围**： - 1：重置密码成功。 - 3：实例被锁定。
    * message  **参数解释**： 重置密码结果信息。 **取值范围**： - success - instance is locked
    * extMessage  **参数解释**： 重置密码错误信息，若重置密码成功，则为null。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'retryTimesLeft' => null,
        'lockTime' => null,
        'lockTimeLeft' => null,
        'code' => null,
        'message' => null,
        'extMessage' => null
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
    * retryTimesLeft  密码验证剩余次数
    * lockTime  锁定时间
    * lockTimeLeft  锁定剩余时间
    * code  **参数解释**： 重置密码结果编号。 **取值范围**： - 1：重置密码成功。 - 3：实例被锁定。
    * message  **参数解释**： 重置密码结果信息。 **取值范围**： - success - instance is locked
    * extMessage  **参数解释**： 重置密码错误信息，若重置密码成功，则为null。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'retryTimesLeft' => 'retry_times_left',
            'lockTime' => 'lock_time',
            'lockTimeLeft' => 'lock_time_left',
            'code' => 'code',
            'message' => 'message',
            'extMessage' => 'ext_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * retryTimesLeft  密码验证剩余次数
    * lockTime  锁定时间
    * lockTimeLeft  锁定剩余时间
    * code  **参数解释**： 重置密码结果编号。 **取值范围**： - 1：重置密码成功。 - 3：实例被锁定。
    * message  **参数解释**： 重置密码结果信息。 **取值范围**： - success - instance is locked
    * extMessage  **参数解释**： 重置密码错误信息，若重置密码成功，则为null。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'retryTimesLeft' => 'setRetryTimesLeft',
            'lockTime' => 'setLockTime',
            'lockTimeLeft' => 'setLockTimeLeft',
            'code' => 'setCode',
            'message' => 'setMessage',
            'extMessage' => 'setExtMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * retryTimesLeft  密码验证剩余次数
    * lockTime  锁定时间
    * lockTimeLeft  锁定剩余时间
    * code  **参数解释**： 重置密码结果编号。 **取值范围**： - 1：重置密码成功。 - 3：实例被锁定。
    * message  **参数解释**： 重置密码结果信息。 **取值范围**： - success - instance is locked
    * extMessage  **参数解释**： 重置密码错误信息，若重置密码成功，则为null。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'retryTimesLeft' => 'getRetryTimesLeft',
            'lockTime' => 'getLockTime',
            'lockTimeLeft' => 'getLockTimeLeft',
            'code' => 'getCode',
            'message' => 'getMessage',
            'extMessage' => 'getExtMessage'
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
        $this->container['retryTimesLeft'] = isset($data['retryTimesLeft']) ? $data['retryTimesLeft'] : null;
        $this->container['lockTime'] = isset($data['lockTime']) ? $data['lockTime'] : null;
        $this->container['lockTimeLeft'] = isset($data['lockTimeLeft']) ? $data['lockTimeLeft'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['extMessage'] = isset($data['extMessage']) ? $data['extMessage'] : null;
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
    * Gets retryTimesLeft
    *  密码验证剩余次数
    *
    * @return string|null
    */
    public function getRetryTimesLeft()
    {
        return $this->container['retryTimesLeft'];
    }

    /**
    * Sets retryTimesLeft
    *
    * @param string|null $retryTimesLeft 密码验证剩余次数
    *
    * @return $this
    */
    public function setRetryTimesLeft($retryTimesLeft)
    {
        $this->container['retryTimesLeft'] = $retryTimesLeft;
        return $this;
    }

    /**
    * Gets lockTime
    *  锁定时间
    *
    * @return string|null
    */
    public function getLockTime()
    {
        return $this->container['lockTime'];
    }

    /**
    * Sets lockTime
    *
    * @param string|null $lockTime 锁定时间
    *
    * @return $this
    */
    public function setLockTime($lockTime)
    {
        $this->container['lockTime'] = $lockTime;
        return $this;
    }

    /**
    * Gets lockTimeLeft
    *  锁定剩余时间
    *
    * @return string|null
    */
    public function getLockTimeLeft()
    {
        return $this->container['lockTimeLeft'];
    }

    /**
    * Sets lockTimeLeft
    *
    * @param string|null $lockTimeLeft 锁定剩余时间
    *
    * @return $this
    */
    public function setLockTimeLeft($lockTimeLeft)
    {
        $this->container['lockTimeLeft'] = $lockTimeLeft;
        return $this;
    }

    /**
    * Gets code
    *  **参数解释**： 重置密码结果编号。 **取值范围**： - 1：重置密码成功。 - 3：实例被锁定。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code **参数解释**： 重置密码结果编号。 **取值范围**： - 1：重置密码成功。 - 3：实例被锁定。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets message
    *  **参数解释**： 重置密码结果信息。 **取值范围**： - success - instance is locked
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message **参数解释**： 重置密码结果信息。 **取值范围**： - success - instance is locked
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets extMessage
    *  **参数解释**： 重置密码错误信息，若重置密码成功，则为null。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getExtMessage()
    {
        return $this->container['extMessage'];
    }

    /**
    * Sets extMessage
    *
    * @param string|null $extMessage **参数解释**： 重置密码错误信息，若重置密码成功，则为null。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setExtMessage($extMessage)
    {
        $this->container['extMessage'] = $extMessage;
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

