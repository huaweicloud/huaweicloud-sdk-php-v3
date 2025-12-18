<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApplyHistory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApplyHistory';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetId  **参数解释**：  参数组ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，长度为36个字符。  **默认取值**：  不涉及。
    * targetName  **参数解释**：  参数组的名称。  **参数范围**：  不涉及。
    * applyResult  **参数解释**：  应用结果。  **参数范围**：  不涉及。
    * appliedAt  **参数解释**：  应用日期。  格式为yyyy-mm-dd Thh:mm:ssZ。  其中，T指定某个时间的开始；Z指示 UTC 时间。  **参数范围**：  不涉及。
    * errorCode  **参数解释**：  错误码。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetId' => 'string',
            'targetName' => 'string',
            'applyResult' => 'string',
            'appliedAt' => '\DateTime',
            'errorCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetId  **参数解释**：  参数组ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，长度为36个字符。  **默认取值**：  不涉及。
    * targetName  **参数解释**：  参数组的名称。  **参数范围**：  不涉及。
    * applyResult  **参数解释**：  应用结果。  **参数范围**：  不涉及。
    * appliedAt  **参数解释**：  应用日期。  格式为yyyy-mm-dd Thh:mm:ssZ。  其中，T指定某个时间的开始；Z指示 UTC 时间。  **参数范围**：  不涉及。
    * errorCode  **参数解释**：  错误码。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetId' => null,
        'targetName' => null,
        'applyResult' => null,
        'appliedAt' => 'date-time',
        'errorCode' => null
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
    * targetId  **参数解释**：  参数组ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，长度为36个字符。  **默认取值**：  不涉及。
    * targetName  **参数解释**：  参数组的名称。  **参数范围**：  不涉及。
    * applyResult  **参数解释**：  应用结果。  **参数范围**：  不涉及。
    * appliedAt  **参数解释**：  应用日期。  格式为yyyy-mm-dd Thh:mm:ssZ。  其中，T指定某个时间的开始；Z指示 UTC 时间。  **参数范围**：  不涉及。
    * errorCode  **参数解释**：  错误码。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetId' => 'target_id',
            'targetName' => 'target_name',
            'applyResult' => 'apply_result',
            'appliedAt' => 'applied_at',
            'errorCode' => 'error_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetId  **参数解释**：  参数组ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，长度为36个字符。  **默认取值**：  不涉及。
    * targetName  **参数解释**：  参数组的名称。  **参数范围**：  不涉及。
    * applyResult  **参数解释**：  应用结果。  **参数范围**：  不涉及。
    * appliedAt  **参数解释**：  应用日期。  格式为yyyy-mm-dd Thh:mm:ssZ。  其中，T指定某个时间的开始；Z指示 UTC 时间。  **参数范围**：  不涉及。
    * errorCode  **参数解释**：  错误码。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'targetId' => 'setTargetId',
            'targetName' => 'setTargetName',
            'applyResult' => 'setApplyResult',
            'appliedAt' => 'setAppliedAt',
            'errorCode' => 'setErrorCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetId  **参数解释**：  参数组ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，长度为36个字符。  **默认取值**：  不涉及。
    * targetName  **参数解释**：  参数组的名称。  **参数范围**：  不涉及。
    * applyResult  **参数解释**：  应用结果。  **参数范围**：  不涉及。
    * appliedAt  **参数解释**：  应用日期。  格式为yyyy-mm-dd Thh:mm:ssZ。  其中，T指定某个时间的开始；Z指示 UTC 时间。  **参数范围**：  不涉及。
    * errorCode  **参数解释**：  错误码。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'targetId' => 'getTargetId',
            'targetName' => 'getTargetName',
            'applyResult' => 'getApplyResult',
            'appliedAt' => 'getAppliedAt',
            'errorCode' => 'getErrorCode'
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
        $this->container['targetId'] = isset($data['targetId']) ? $data['targetId'] : null;
        $this->container['targetName'] = isset($data['targetName']) ? $data['targetName'] : null;
        $this->container['applyResult'] = isset($data['applyResult']) ? $data['applyResult'] : null;
        $this->container['appliedAt'] = isset($data['appliedAt']) ? $data['appliedAt'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['targetId']) && (mb_strlen($this->container['targetId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'targetId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['targetId']) && (mb_strlen($this->container['targetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['targetName']) && (mb_strlen($this->container['targetName']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'targetName', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['targetName']) && (mb_strlen($this->container['targetName']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['applyResult']) && (mb_strlen($this->container['applyResult']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'applyResult', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['applyResult']) && (mb_strlen($this->container['applyResult']) < 1)) {
                $invalidProperties[] = "invalid value for 'applyResult', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['errorCode']) && (mb_strlen($this->container['errorCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'errorCode', the character length must be bigger than or equal to 1.";
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
    * Gets targetId
    *  **参数解释**：  参数组ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
    * Sets targetId
    *
    * @param string|null $targetId **参数解释**：  参数组ID。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;
        return $this;
    }

    /**
    * Gets targetName
    *  **参数解释**：  参数组的名称。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getTargetName()
    {
        return $this->container['targetName'];
    }

    /**
    * Sets targetName
    *
    * @param string|null $targetName **参数解释**：  参数组的名称。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setTargetName($targetName)
    {
        $this->container['targetName'] = $targetName;
        return $this;
    }

    /**
    * Gets applyResult
    *  **参数解释**：  应用结果。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getApplyResult()
    {
        return $this->container['applyResult'];
    }

    /**
    * Sets applyResult
    *
    * @param string|null $applyResult **参数解释**：  应用结果。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setApplyResult($applyResult)
    {
        $this->container['applyResult'] = $applyResult;
        return $this;
    }

    /**
    * Gets appliedAt
    *  **参数解释**：  应用日期。  格式为yyyy-mm-dd Thh:mm:ssZ。  其中，T指定某个时间的开始；Z指示 UTC 时间。  **参数范围**：  不涉及。
    *
    * @return \DateTime|null
    */
    public function getAppliedAt()
    {
        return $this->container['appliedAt'];
    }

    /**
    * Sets appliedAt
    *
    * @param \DateTime|null $appliedAt **参数解释**：  应用日期。  格式为yyyy-mm-dd Thh:mm:ssZ。  其中，T指定某个时间的开始；Z指示 UTC 时间。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setAppliedAt($appliedAt)
    {
        $this->container['appliedAt'] = $appliedAt;
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

