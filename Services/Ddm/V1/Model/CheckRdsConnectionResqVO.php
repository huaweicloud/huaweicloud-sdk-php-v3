<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckRdsConnectionResqVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckRdsConnectionResqVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rdsInstanceId  **参数解释**：  rds实例ID，此参数是实例的唯一标识。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in01，长度为36个字符。  **默认取值**：  不涉及。
    * success  success
    * errorCode  **参数解释**：  错误码。  **参数范围**：  不涉及。
    * errorMessage  **参数解释**：  错误信息。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rdsInstanceId' => 'string',
            'success' => 'string',
            'errorCode' => 'string',
            'errorMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rdsInstanceId  **参数解释**：  rds实例ID，此参数是实例的唯一标识。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in01，长度为36个字符。  **默认取值**：  不涉及。
    * success  success
    * errorCode  **参数解释**：  错误码。  **参数范围**：  不涉及。
    * errorMessage  **参数解释**：  错误信息。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rdsInstanceId' => null,
        'success' => null,
        'errorCode' => null,
        'errorMessage' => null
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
    * rdsInstanceId  **参数解释**：  rds实例ID，此参数是实例的唯一标识。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in01，长度为36个字符。  **默认取值**：  不涉及。
    * success  success
    * errorCode  **参数解释**：  错误码。  **参数范围**：  不涉及。
    * errorMessage  **参数解释**：  错误信息。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rdsInstanceId' => 'rds_instance_id',
            'success' => 'success',
            'errorCode' => 'error_code',
            'errorMessage' => 'error_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rdsInstanceId  **参数解释**：  rds实例ID，此参数是实例的唯一标识。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in01，长度为36个字符。  **默认取值**：  不涉及。
    * success  success
    * errorCode  **参数解释**：  错误码。  **参数范围**：  不涉及。
    * errorMessage  **参数解释**：  错误信息。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'rdsInstanceId' => 'setRdsInstanceId',
            'success' => 'setSuccess',
            'errorCode' => 'setErrorCode',
            'errorMessage' => 'setErrorMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rdsInstanceId  **参数解释**：  rds实例ID，此参数是实例的唯一标识。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in01，长度为36个字符。  **默认取值**：  不涉及。
    * success  success
    * errorCode  **参数解释**：  错误码。  **参数范围**：  不涉及。
    * errorMessage  **参数解释**：  错误信息。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'rdsInstanceId' => 'getRdsInstanceId',
            'success' => 'getSuccess',
            'errorCode' => 'getErrorCode',
            'errorMessage' => 'getErrorMessage'
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
        $this->container['rdsInstanceId'] = isset($data['rdsInstanceId']) ? $data['rdsInstanceId'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['rdsInstanceId']) && (mb_strlen($this->container['rdsInstanceId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'rdsInstanceId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['rdsInstanceId']) && (mb_strlen($this->container['rdsInstanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'rdsInstanceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['success']) && (mb_strlen($this->container['success']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'success', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['success']) && (mb_strlen($this->container['success']) < 1)) {
                $invalidProperties[] = "invalid value for 'success', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['errorMessage']) && (mb_strlen($this->container['errorMessage']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'errorMessage', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['errorMessage']) && (mb_strlen($this->container['errorMessage']) < 1)) {
                $invalidProperties[] = "invalid value for 'errorMessage', the character length must be bigger than or equal to 1.";
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
    * Gets rdsInstanceId
    *  **参数解释**：  rds实例ID，此参数是实例的唯一标识。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in01，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getRdsInstanceId()
    {
        return $this->container['rdsInstanceId'];
    }

    /**
    * Sets rdsInstanceId
    *
    * @param string|null $rdsInstanceId **参数解释**：  rds实例ID，此参数是实例的唯一标识。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in01，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setRdsInstanceId($rdsInstanceId)
    {
        $this->container['rdsInstanceId'] = $rdsInstanceId;
        return $this;
    }

    /**
    * Gets success
    *  success
    *
    * @return string|null
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param string|null $success success
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }

    /**
    * Gets errorCode
    *  **参数解释**：  错误码。  **参数范围**：  不涉及。
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
    * @param string|null $errorCode **参数解释**：  错误码。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMessage
    *  **参数解释**：  错误信息。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage **参数解释**：  错误信息。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
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

