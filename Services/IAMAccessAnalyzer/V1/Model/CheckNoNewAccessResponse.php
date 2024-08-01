<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckNoNewAccessResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckNoNewAccessResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * message  更新后的策略是否允许新访问权限的消息。
    * checkResult  检查新访问权限的结果。
    * reasons  新增action的statement描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'message' => 'string',
            'checkResult' => 'string',
            'reasons' => '\HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\CheckNoNewAccessReason[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * message  更新后的策略是否允许新访问权限的消息。
    * checkResult  检查新访问权限的结果。
    * reasons  新增action的statement描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'message' => null,
        'checkResult' => null,
        'reasons' => null
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
    * message  更新后的策略是否允许新访问权限的消息。
    * checkResult  检查新访问权限的结果。
    * reasons  新增action的statement描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'message' => 'message',
            'checkResult' => 'check_result',
            'reasons' => 'reasons'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * message  更新后的策略是否允许新访问权限的消息。
    * checkResult  检查新访问权限的结果。
    * reasons  新增action的statement描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'message' => 'setMessage',
            'checkResult' => 'setCheckResult',
            'reasons' => 'setReasons'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * message  更新后的策略是否允许新访问权限的消息。
    * checkResult  检查新访问权限的结果。
    * reasons  新增action的statement描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'message' => 'getMessage',
            'checkResult' => 'getCheckResult',
            'reasons' => 'getReasons'
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
    const CHECK_RESULT_PASS = 'pass';
    const CHECK_RESULT_FAIL = 'fail';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCheckResultAllowableValues()
    {
        return [
            self::CHECK_RESULT_PASS,
            self::CHECK_RESULT_FAIL,
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['checkResult'] = isset($data['checkResult']) ? $data['checkResult'] : null;
        $this->container['reasons'] = isset($data['reasons']) ? $data['reasons'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCheckResultAllowableValues();
                if (!is_null($this->container['checkResult']) && !in_array($this->container['checkResult'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'checkResult', must be one of '%s'",
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
    * Gets message
    *  更新后的策略是否允许新访问权限的消息。
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
    * @param string|null $message 更新后的策略是否允许新访问权限的消息。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets checkResult
    *  检查新访问权限的结果。
    *
    * @return string|null
    */
    public function getCheckResult()
    {
        return $this->container['checkResult'];
    }

    /**
    * Sets checkResult
    *
    * @param string|null $checkResult 检查新访问权限的结果。
    *
    * @return $this
    */
    public function setCheckResult($checkResult)
    {
        $this->container['checkResult'] = $checkResult;
        return $this;
    }

    /**
    * Gets reasons
    *  新增action的statement描述。
    *
    * @return \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\CheckNoNewAccessReason[]|null
    */
    public function getReasons()
    {
        return $this->container['reasons'];
    }

    /**
    * Sets reasons
    *
    * @param \HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model\CheckNoNewAccessReason[]|null $reasons 新增action的statement描述。
    *
    * @return $this
    */
    public function setReasons($reasons)
    {
        $this->container['reasons'] = $reasons;
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

