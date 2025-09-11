<?php

namespace HuaweiCloud\SDK\Ces\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchCreateInvocationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchCreateInvocationInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  **参数解释**: 机器id **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符
    * invocationId  **参数解释**: 任务id **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符
    * retStatus  **参数解释**: 任务结果, successful成功，error失败 **取值范围**: - successful: 成功 - error: 失败
    * errorCode  **参数解释**: 错误码 **取值范围**: 以\"invocationmgr.\"开头且后跟4位数字的完整字符串
    * errorMsg  **参数解释**: 错误信息 **取值范围**: 数组长度范围为[1,128]
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'invocationId' => 'string',
            'retStatus' => 'string',
            'errorCode' => 'string',
            'errorMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  **参数解释**: 机器id **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符
    * invocationId  **参数解释**: 任务id **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符
    * retStatus  **参数解释**: 任务结果, successful成功，error失败 **取值范围**: - successful: 成功 - error: 失败
    * errorCode  **参数解释**: 错误码 **取值范围**: 以\"invocationmgr.\"开头且后跟4位数字的完整字符串
    * errorMsg  **参数解释**: 错误信息 **取值范围**: 数组长度范围为[1,128]
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'invocationId' => null,
        'retStatus' => null,
        'errorCode' => null,
        'errorMsg' => null
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
    * instanceId  **参数解释**: 机器id **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符
    * invocationId  **参数解释**: 任务id **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符
    * retStatus  **参数解释**: 任务结果, successful成功，error失败 **取值范围**: - successful: 成功 - error: 失败
    * errorCode  **参数解释**: 错误码 **取值范围**: 以\"invocationmgr.\"开头且后跟4位数字的完整字符串
    * errorMsg  **参数解释**: 错误信息 **取值范围**: 数组长度范围为[1,128]
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'invocationId' => 'invocation_id',
            'retStatus' => 'ret_status',
            'errorCode' => 'error_code',
            'errorMsg' => 'error_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  **参数解释**: 机器id **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符
    * invocationId  **参数解释**: 任务id **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符
    * retStatus  **参数解释**: 任务结果, successful成功，error失败 **取值范围**: - successful: 成功 - error: 失败
    * errorCode  **参数解释**: 错误码 **取值范围**: 以\"invocationmgr.\"开头且后跟4位数字的完整字符串
    * errorMsg  **参数解释**: 错误信息 **取值范围**: 数组长度范围为[1,128]
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'invocationId' => 'setInvocationId',
            'retStatus' => 'setRetStatus',
            'errorCode' => 'setErrorCode',
            'errorMsg' => 'setErrorMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  **参数解释**: 机器id **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符
    * invocationId  **参数解释**: 任务id **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符
    * retStatus  **参数解释**: 任务结果, successful成功，error失败 **取值范围**: - successful: 成功 - error: 失败
    * errorCode  **参数解释**: 错误码 **取值范围**: 以\"invocationmgr.\"开头且后跟4位数字的完整字符串
    * errorMsg  **参数解释**: 错误信息 **取值范围**: 数组长度范围为[1,128]
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'invocationId' => 'getInvocationId',
            'retStatus' => 'getRetStatus',
            'errorCode' => 'getErrorCode',
            'errorMsg' => 'getErrorMsg'
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
    const RET_STATUS_SUCCESSFUL = 'successful';
    const RET_STATUS_ERROR = 'error';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRetStatusAllowableValues()
    {
        return [
            self::RET_STATUS_SUCCESSFUL,
            self::RET_STATUS_ERROR,
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['invocationId'] = isset($data['invocationId']) ? $data['invocationId'] : null;
        $this->container['retStatus'] = isset($data['retStatus']) ? $data['retStatus'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceId']) && !preg_match("/^[a-zA-Z0-9-]{1,64}$/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /^[a-zA-Z0-9-]{1,64}$/.";
            }
            if (!is_null($this->container['invocationId']) && !preg_match("/^[a-zA-Z0-9-]{1,64}$/", $this->container['invocationId'])) {
                $invalidProperties[] = "invalid value for 'invocationId', must be conform to the pattern /^[a-zA-Z0-9-]{1,64}$/.";
            }
            $allowedValues = $this->getRetStatusAllowableValues();
                if (!is_null($this->container['retStatus']) && !in_array($this->container['retStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'retStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['errorCode']) && !preg_match("/^(invocationmgr\\.[0-9]{4})$/", $this->container['errorCode'])) {
                $invalidProperties[] = "invalid value for 'errorCode', must be conform to the pattern /^(invocationmgr\\.[0-9]{4})$/.";
            }
            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) > 128)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) < 1)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be bigger than or equal to 1.";
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
    * Gets instanceId
    *  **参数解释**: 机器id **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId **参数解释**: 机器id **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets invocationId
    *  **参数解释**: 任务id **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符
    *
    * @return string|null
    */
    public function getInvocationId()
    {
        return $this->container['invocationId'];
    }

    /**
    * Sets invocationId
    *
    * @param string|null $invocationId **参数解释**: 任务id **取值范围**: 1到64个字符的字符串，且只包含字母、数字和连字符
    *
    * @return $this
    */
    public function setInvocationId($invocationId)
    {
        $this->container['invocationId'] = $invocationId;
        return $this;
    }

    /**
    * Gets retStatus
    *  **参数解释**: 任务结果, successful成功，error失败 **取值范围**: - successful: 成功 - error: 失败
    *
    * @return string|null
    */
    public function getRetStatus()
    {
        return $this->container['retStatus'];
    }

    /**
    * Sets retStatus
    *
    * @param string|null $retStatus **参数解释**: 任务结果, successful成功，error失败 **取值范围**: - successful: 成功 - error: 失败
    *
    * @return $this
    */
    public function setRetStatus($retStatus)
    {
        $this->container['retStatus'] = $retStatus;
        return $this;
    }

    /**
    * Gets errorCode
    *  **参数解释**: 错误码 **取值范围**: 以\"invocationmgr.\"开头且后跟4位数字的完整字符串
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode **参数解释**: 错误码 **取值范围**: 以\"invocationmgr.\"开头且后跟4位数字的完整字符串
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMsg
    *  **参数解释**: 错误信息 **取值范围**: 数组长度范围为[1,128]
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg **参数解释**: 错误信息 **取值范围**: 数组长度范围为[1,128]
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
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

