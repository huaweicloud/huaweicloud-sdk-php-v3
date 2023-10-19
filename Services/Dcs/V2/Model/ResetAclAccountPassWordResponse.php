<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResetAclAccountPassWordResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResetAclAccountPassWordResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  任务执行成功代码。
    * message  重置结果说明信息。
    * lockTime  锁定时间。验证失败时和锁定时该参数返回不为null
    * lockTimeLeft  锁定剩余时间。锁定时该参数返回不为null
    * retryTimesLeft  密码验证剩余次数。验证失败时该参数返回不为null
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'string',
            'message' => 'string',
            'lockTime' => 'string',
            'lockTimeLeft' => 'string',
            'retryTimesLeft' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  任务执行成功代码。
    * message  重置结果说明信息。
    * lockTime  锁定时间。验证失败时和锁定时该参数返回不为null
    * lockTimeLeft  锁定剩余时间。锁定时该参数返回不为null
    * retryTimesLeft  密码验证剩余次数。验证失败时该参数返回不为null
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => null,
        'message' => null,
        'lockTime' => null,
        'lockTimeLeft' => null,
        'retryTimesLeft' => null
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
    * code  任务执行成功代码。
    * message  重置结果说明信息。
    * lockTime  锁定时间。验证失败时和锁定时该参数返回不为null
    * lockTimeLeft  锁定剩余时间。锁定时该参数返回不为null
    * retryTimesLeft  密码验证剩余次数。验证失败时该参数返回不为null
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'message' => 'message',
            'lockTime' => 'lock_time',
            'lockTimeLeft' => 'lock_time_left',
            'retryTimesLeft' => 'retry_times_left'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  任务执行成功代码。
    * message  重置结果说明信息。
    * lockTime  锁定时间。验证失败时和锁定时该参数返回不为null
    * lockTimeLeft  锁定剩余时间。锁定时该参数返回不为null
    * retryTimesLeft  密码验证剩余次数。验证失败时该参数返回不为null
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'message' => 'setMessage',
            'lockTime' => 'setLockTime',
            'lockTimeLeft' => 'setLockTimeLeft',
            'retryTimesLeft' => 'setRetryTimesLeft'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  任务执行成功代码。
    * message  重置结果说明信息。
    * lockTime  锁定时间。验证失败时和锁定时该参数返回不为null
    * lockTimeLeft  锁定剩余时间。锁定时该参数返回不为null
    * retryTimesLeft  密码验证剩余次数。验证失败时该参数返回不为null
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'message' => 'getMessage',
            'lockTime' => 'getLockTime',
            'lockTimeLeft' => 'getLockTimeLeft',
            'retryTimesLeft' => 'getRetryTimesLeft'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['lockTime'] = isset($data['lockTime']) ? $data['lockTime'] : null;
        $this->container['lockTimeLeft'] = isset($data['lockTimeLeft']) ? $data['lockTimeLeft'] : null;
        $this->container['retryTimesLeft'] = isset($data['retryTimesLeft']) ? $data['retryTimesLeft'] : null;
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
    * Gets code
    *  任务执行成功代码。
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
    * @param string|null $code 任务执行成功代码。
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
    *  重置结果说明信息。
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
    * @param string|null $message 重置结果说明信息。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets lockTime
    *  锁定时间。验证失败时和锁定时该参数返回不为null
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
    * @param string|null $lockTime 锁定时间。验证失败时和锁定时该参数返回不为null
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
    *  锁定剩余时间。锁定时该参数返回不为null
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
    * @param string|null $lockTimeLeft 锁定剩余时间。锁定时该参数返回不为null
    *
    * @return $this
    */
    public function setLockTimeLeft($lockTimeLeft)
    {
        $this->container['lockTimeLeft'] = $lockTimeLeft;
        return $this;
    }

    /**
    * Gets retryTimesLeft
    *  密码验证剩余次数。验证失败时该参数返回不为null
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
    * @param string|null $retryTimesLeft 密码验证剩余次数。验证失败时该参数返回不为null
    *
    * @return $this
    */
    public function setRetryTimesLeft($retryTimesLeft)
    {
        $this->container['retryTimesLeft'] = $retryTimesLeft;
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

