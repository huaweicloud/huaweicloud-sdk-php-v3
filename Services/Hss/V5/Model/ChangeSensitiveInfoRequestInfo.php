<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeSensitiveInfoRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeSensitiveInfoRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sensitiveInfoId  **参数解释**: 敏感信息编号 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * operateType  **参数解释**: 操作敏感信息详情，处理方式 **约束限制**: 不涉及 **取值范围**: - ignore：忽略 - do_not_ignore：取消忽略  **默认取值**: do_not_ignore
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sensitiveInfoId' => 'string',
            'operateType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sensitiveInfoId  **参数解释**: 敏感信息编号 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * operateType  **参数解释**: 操作敏感信息详情，处理方式 **约束限制**: 不涉及 **取值范围**: - ignore：忽略 - do_not_ignore：取消忽略  **默认取值**: do_not_ignore
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sensitiveInfoId' => null,
        'operateType' => null
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
    * sensitiveInfoId  **参数解释**: 敏感信息编号 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * operateType  **参数解释**: 操作敏感信息详情，处理方式 **约束限制**: 不涉及 **取值范围**: - ignore：忽略 - do_not_ignore：取消忽略  **默认取值**: do_not_ignore
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sensitiveInfoId' => 'sensitive_info_id',
            'operateType' => 'operate_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sensitiveInfoId  **参数解释**: 敏感信息编号 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * operateType  **参数解释**: 操作敏感信息详情，处理方式 **约束限制**: 不涉及 **取值范围**: - ignore：忽略 - do_not_ignore：取消忽略  **默认取值**: do_not_ignore
    *
    * @var string[]
    */
    protected static $setters = [
            'sensitiveInfoId' => 'setSensitiveInfoId',
            'operateType' => 'setOperateType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sensitiveInfoId  **参数解释**: 敏感信息编号 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * operateType  **参数解释**: 操作敏感信息详情，处理方式 **约束限制**: 不涉及 **取值范围**: - ignore：忽略 - do_not_ignore：取消忽略  **默认取值**: do_not_ignore
    *
    * @var string[]
    */
    protected static $getters = [
            'sensitiveInfoId' => 'getSensitiveInfoId',
            'operateType' => 'getOperateType'
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
        $this->container['sensitiveInfoId'] = isset($data['sensitiveInfoId']) ? $data['sensitiveInfoId'] : null;
        $this->container['operateType'] = isset($data['operateType']) ? $data['operateType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sensitiveInfoId'] === null) {
            $invalidProperties[] = "'sensitiveInfoId' can't be null";
        }
            if ((mb_strlen($this->container['sensitiveInfoId']) > 128)) {
                $invalidProperties[] = "invalid value for 'sensitiveInfoId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['sensitiveInfoId']) < 0)) {
                $invalidProperties[] = "invalid value for 'sensitiveInfoId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['operateType']) && !preg_match("/^(ignore|do_not_ignore)$/", $this->container['operateType'])) {
                $invalidProperties[] = "invalid value for 'operateType', must be conform to the pattern /^(ignore|do_not_ignore)$/.";
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
    * Gets sensitiveInfoId
    *  **参数解释**: 敏感信息编号 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getSensitiveInfoId()
    {
        return $this->container['sensitiveInfoId'];
    }

    /**
    * Sets sensitiveInfoId
    *
    * @param string $sensitiveInfoId **参数解释**: 敏感信息编号 **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setSensitiveInfoId($sensitiveInfoId)
    {
        $this->container['sensitiveInfoId'] = $sensitiveInfoId;
        return $this;
    }

    /**
    * Gets operateType
    *  **参数解释**: 操作敏感信息详情，处理方式 **约束限制**: 不涉及 **取值范围**: - ignore：忽略 - do_not_ignore：取消忽略  **默认取值**: do_not_ignore
    *
    * @return string|null
    */
    public function getOperateType()
    {
        return $this->container['operateType'];
    }

    /**
    * Sets operateType
    *
    * @param string|null $operateType **参数解释**: 操作敏感信息详情，处理方式 **约束限制**: 不涉及 **取值范围**: - ignore：忽略 - do_not_ignore：取消忽略  **默认取值**: do_not_ignore
    *
    * @return $this
    */
    public function setOperateType($operateType)
    {
        $this->container['operateType'] = $operateType;
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

