<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAiInstanceProtectionResultItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAiInstanceProtectionResultItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentId  **参数解释**： 智能体ID **取值范围**： 字符长度为1-128位
    * succeed  **参数解释**： 处理是否成功 **取值范围**： - true：成功 - false：失败
    * errorMsg  **参数解释**： 错误消息，仅失败时返回 **取值范围**： 字符长度为0-256位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentId' => 'string',
            'succeed' => 'bool',
            'errorMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  **参数解释**： 智能体ID **取值范围**： 字符长度为1-128位
    * succeed  **参数解释**： 处理是否成功 **取值范围**： - true：成功 - false：失败
    * errorMsg  **参数解释**： 错误消息，仅失败时返回 **取值范围**： 字符长度为0-256位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentId' => null,
        'succeed' => null,
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
    * agentId  **参数解释**： 智能体ID **取值范围**： 字符长度为1-128位
    * succeed  **参数解释**： 处理是否成功 **取值范围**： - true：成功 - false：失败
    * errorMsg  **参数解释**： 错误消息，仅失败时返回 **取值范围**： 字符长度为0-256位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentId' => 'agent_id',
            'succeed' => 'succeed',
            'errorMsg' => 'error_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  **参数解释**： 智能体ID **取值范围**： 字符长度为1-128位
    * succeed  **参数解释**： 处理是否成功 **取值范围**： - true：成功 - false：失败
    * errorMsg  **参数解释**： 错误消息，仅失败时返回 **取值范围**： 字符长度为0-256位
    *
    * @var string[]
    */
    protected static $setters = [
            'agentId' => 'setAgentId',
            'succeed' => 'setSucceed',
            'errorMsg' => 'setErrorMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  **参数解释**： 智能体ID **取值范围**： 字符长度为1-128位
    * succeed  **参数解释**： 处理是否成功 **取值范围**： - true：成功 - false：失败
    * errorMsg  **参数解释**： 错误消息，仅失败时返回 **取值范围**： 字符长度为0-256位
    *
    * @var string[]
    */
    protected static $getters = [
            'agentId' => 'getAgentId',
            'succeed' => 'getSucceed',
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
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['succeed'] = isset($data['succeed']) ? $data['succeed'] : null;
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
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) > 128)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agentId']) && (mb_strlen($this->container['agentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) > 256)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be bigger than or equal to 0.";
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
    * Gets agentId
    *  **参数解释**： 智能体ID **取值范围**： 字符长度为1-128位
    *
    * @return string|null
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string|null $agentId **参数解释**： 智能体ID **取值范围**： 字符长度为1-128位
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets succeed
    *  **参数解释**： 处理是否成功 **取值范围**： - true：成功 - false：失败
    *
    * @return bool|null
    */
    public function getSucceed()
    {
        return $this->container['succeed'];
    }

    /**
    * Sets succeed
    *
    * @param bool|null $succeed **参数解释**： 处理是否成功 **取值范围**： - true：成功 - false：失败
    *
    * @return $this
    */
    public function setSucceed($succeed)
    {
        $this->container['succeed'] = $succeed;
        return $this;
    }

    /**
    * Gets errorMsg
    *  **参数解释**： 错误消息，仅失败时返回 **取值范围**： 字符长度为0-256位
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
    * @param string|null $errorMsg **参数解释**： 错误消息，仅失败时返回 **取值范围**： 字符长度为0-256位
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

