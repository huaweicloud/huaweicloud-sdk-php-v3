<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkflowApproveOpinionDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkflowApproveOpinionDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * result  **参数解释**: 流程的审核结果 - PASS 通过 - UN_PASS 拒绝  **约束限制**: 不涉及         **取值范围**: - PASS - UN_PASS  **默认值**:  不涉及
    * content  **参数解释**: 流程的审核意见 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'result' => 'string',
            'content' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * result  **参数解释**: 流程的审核结果 - PASS 通过 - UN_PASS 拒绝  **约束限制**: 不涉及         **取值范围**: - PASS - UN_PASS  **默认值**:  不涉及
    * content  **参数解释**: 流程的审核意见 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'result' => null,
        'content' => null
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
    * result  **参数解释**: 流程的审核结果 - PASS 通过 - UN_PASS 拒绝  **约束限制**: 不涉及         **取值范围**: - PASS - UN_PASS  **默认值**:  不涉及
    * content  **参数解释**: 流程的审核意见 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'result' => 'result',
            'content' => 'content'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * result  **参数解释**: 流程的审核结果 - PASS 通过 - UN_PASS 拒绝  **约束限制**: 不涉及         **取值范围**: - PASS - UN_PASS  **默认值**:  不涉及
    * content  **参数解释**: 流程的审核意见 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'result' => 'setResult',
            'content' => 'setContent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * result  **参数解释**: 流程的审核结果 - PASS 通过 - UN_PASS 拒绝  **约束限制**: 不涉及         **取值范围**: - PASS - UN_PASS  **默认值**:  不涉及
    * content  **参数解释**: 流程的审核意见 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'result' => 'getResult',
            'content' => 'getContent'
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
    const RESULT_PASS = 'PASS';
    const RESULT_UN_PASS = 'UN_PASS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResultAllowableValues()
    {
        return [
            self::RESULT_PASS,
            self::RESULT_UN_PASS,
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
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
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

            if (!is_null($this->container['result']) && (mb_strlen($this->container['result']) > 64)) {
                $invalidProperties[] = "invalid value for 'result', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['result']) && (mb_strlen($this->container['result']) < 0)) {
                $invalidProperties[] = "invalid value for 'result', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) > 1028)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 1028.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) < 0)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 0.";
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
    * Gets result
    *  **参数解释**: 流程的审核结果 - PASS 通过 - UN_PASS 拒绝  **约束限制**: 不涉及         **取值范围**: - PASS - UN_PASS  **默认值**:  不涉及
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
    * @param string|null $result **参数解释**: 流程的审核结果 - PASS 通过 - UN_PASS 拒绝  **约束限制**: 不涉及         **取值范围**: - PASS - UN_PASS  **默认值**:  不涉及
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets content
    *  **参数解释**: 流程的审核意见 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content **参数解释**: 流程的审核意见 **约束限制**: 不涉及         **取值范围**: 不涉及 **默认值**:  不涉及
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
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

