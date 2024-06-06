<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateApplyHistory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateApplyHistory';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetId  应用实例ID。
    * targetName  应用实例名称。
    * applyResult  应用结果。
    * appliedAt  应用时间。
    * errorCode  错误码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetId' => 'string',
            'targetName' => 'string',
            'applyResult' => 'string',
            'appliedAt' => 'float',
            'errorCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetId  应用实例ID。
    * targetName  应用实例名称。
    * applyResult  应用结果。
    * appliedAt  应用时间。
    * errorCode  错误码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetId' => null,
        'targetName' => null,
        'applyResult' => null,
        'appliedAt' => null,
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
    * targetId  应用实例ID。
    * targetName  应用实例名称。
    * applyResult  应用结果。
    * appliedAt  应用时间。
    * errorCode  错误码。
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
    * targetId  应用实例ID。
    * targetName  应用实例名称。
    * applyResult  应用结果。
    * appliedAt  应用时间。
    * errorCode  错误码。
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
    * targetId  应用实例ID。
    * targetName  应用实例名称。
    * applyResult  应用结果。
    * appliedAt  应用时间。
    * errorCode  错误码。
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
    *  应用实例ID。
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
    * @param string|null $targetId 应用实例ID。
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
    *  应用实例名称。
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
    * @param string|null $targetName 应用实例名称。
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
    *  应用结果。
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
    * @param string|null $applyResult 应用结果。
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
    *  应用时间。
    *
    * @return float|null
    */
    public function getAppliedAt()
    {
        return $this->container['appliedAt'];
    }

    /**
    * Sets appliedAt
    *
    * @param float|null $appliedAt 应用时间。
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
    *  错误码。
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
    * @param string|null $errorCode 错误码。
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

