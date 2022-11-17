<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePasswordResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePasswordResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lockTime  锁定时间。验证失败时和锁定时该参数返回不为null
    * result  密码修改结果： - 成功：success； - 密码验证失败：passwordFailed； - 已锁定：locked； - 失败：failed。
    * lockTimeLeft  锁定剩余时间。锁定时该参数返回不为null
    * retryTimesLeft  密码验证剩余次数。验证失败时该参数返回不为null
    * message  修改结果。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lockTime' => 'string',
            'result' => 'string',
            'lockTimeLeft' => 'string',
            'retryTimesLeft' => 'string',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lockTime  锁定时间。验证失败时和锁定时该参数返回不为null
    * result  密码修改结果： - 成功：success； - 密码验证失败：passwordFailed； - 已锁定：locked； - 失败：failed。
    * lockTimeLeft  锁定剩余时间。锁定时该参数返回不为null
    * retryTimesLeft  密码验证剩余次数。验证失败时该参数返回不为null
    * message  修改结果。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lockTime' => null,
        'result' => null,
        'lockTimeLeft' => null,
        'retryTimesLeft' => null,
        'message' => null
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
    * lockTime  锁定时间。验证失败时和锁定时该参数返回不为null
    * result  密码修改结果： - 成功：success； - 密码验证失败：passwordFailed； - 已锁定：locked； - 失败：failed。
    * lockTimeLeft  锁定剩余时间。锁定时该参数返回不为null
    * retryTimesLeft  密码验证剩余次数。验证失败时该参数返回不为null
    * message  修改结果。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lockTime' => 'lock_time',
            'result' => 'result',
            'lockTimeLeft' => 'lock_time_left',
            'retryTimesLeft' => 'retry_times_left',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lockTime  锁定时间。验证失败时和锁定时该参数返回不为null
    * result  密码修改结果： - 成功：success； - 密码验证失败：passwordFailed； - 已锁定：locked； - 失败：failed。
    * lockTimeLeft  锁定剩余时间。锁定时该参数返回不为null
    * retryTimesLeft  密码验证剩余次数。验证失败时该参数返回不为null
    * message  修改结果。
    *
    * @var string[]
    */
    protected static $setters = [
            'lockTime' => 'setLockTime',
            'result' => 'setResult',
            'lockTimeLeft' => 'setLockTimeLeft',
            'retryTimesLeft' => 'setRetryTimesLeft',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lockTime  锁定时间。验证失败时和锁定时该参数返回不为null
    * result  密码修改结果： - 成功：success； - 密码验证失败：passwordFailed； - 已锁定：locked； - 失败：failed。
    * lockTimeLeft  锁定剩余时间。锁定时该参数返回不为null
    * retryTimesLeft  密码验证剩余次数。验证失败时该参数返回不为null
    * message  修改结果。
    *
    * @var string[]
    */
    protected static $getters = [
            'lockTime' => 'getLockTime',
            'result' => 'getResult',
            'lockTimeLeft' => 'getLockTimeLeft',
            'retryTimesLeft' => 'getRetryTimesLeft',
            'message' => 'getMessage'
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
    const RESULT_SUCCESS = 'success';
    const RESULT_PASSWORD_FAILED = 'passwordFailed';
    const RESULT_LOCKED = 'locked';
    const RESULT_FAILED = 'failed';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResultAllowableValues()
    {
        return [
            self::RESULT_SUCCESS,
            self::RESULT_PASSWORD_FAILED,
            self::RESULT_LOCKED,
            self::RESULT_FAILED,
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
        $this->container['lockTime'] = isset($data['lockTime']) ? $data['lockTime'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['lockTimeLeft'] = isset($data['lockTimeLeft']) ? $data['lockTimeLeft'] : null;
        $this->container['retryTimesLeft'] = isset($data['retryTimesLeft']) ? $data['retryTimesLeft'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getResultAllowableValues();
                if (!is_null($this->container['result']) && !in_array($this->container['result'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'result', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets result
    *  密码修改结果： - 成功：success； - 密码验证失败：passwordFailed； - 已锁定：locked； - 失败：failed。
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result 密码修改结果： - 成功：success； - 密码验证失败：passwordFailed； - 已锁定：locked； - 失败：failed。
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
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
    * Gets message
    *  修改结果。
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
    * @param string|null $message 修改结果。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

