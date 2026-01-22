<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeadletterResendRespResendResults implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeadletterResendResp_resend_results';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * msgId  **参数解释**： 消息ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    * errorCode  **参数解释**： 错误码。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    * errorMessage  **参数解释**： 错误信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'msgId' => 'string',
            'errorCode' => 'string',
            'errorMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * msgId  **参数解释**： 消息ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    * errorCode  **参数解释**： 错误码。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    * errorMessage  **参数解释**： 错误信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'msgId' => null,
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
    * msgId  **参数解释**： 消息ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    * errorCode  **参数解释**： 错误码。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    * errorMessage  **参数解释**： 错误信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'msgId' => 'msg_id',
            'errorCode' => 'error_code',
            'errorMessage' => 'error_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * msgId  **参数解释**： 消息ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    * errorCode  **参数解释**： 错误码。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    * errorMessage  **参数解释**： 错误信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'msgId' => 'setMsgId',
            'errorCode' => 'setErrorCode',
            'errorMessage' => 'setErrorMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * msgId  **参数解释**： 消息ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    * errorCode  **参数解释**： 错误码。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    * errorMessage  **参数解释**： 错误信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'msgId' => 'getMsgId',
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
        $this->container['msgId'] = isset($data['msgId']) ? $data['msgId'] : null;
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
    * Gets msgId
    *  **参数解释**： 消息ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    *
    * @return string|null
    */
    public function getMsgId()
    {
        return $this->container['msgId'];
    }

    /**
    * Sets msgId
    *
    * @param string|null $msgId **参数解释**： 消息ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
    *
    * @return $this
    */
    public function setMsgId($msgId)
    {
        $this->container['msgId'] = $msgId;
        return $this;
    }

    /**
    * Gets errorCode
    *  **参数解释**： 错误码。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
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
    * @param string|null $errorCode **参数解释**： 错误码。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
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
    *  **参数解释**： 错误信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
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
    * @param string|null $errorMessage **参数解释**： 错误信息。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值** 不涉及。
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

