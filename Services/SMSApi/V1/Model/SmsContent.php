<?php

namespace HuaweiCloud\SDK\SMSApi\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmsContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmsContent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * to  群发短信接收方的号码
    * templateId  短信模板ID
    * templateParas  短信模板的变量值列表
    * signature  短信签名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'to' => 'string[]',
            'templateId' => 'string',
            'templateParas' => 'string[]',
            'signature' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * to  群发短信接收方的号码
    * templateId  短信模板ID
    * templateParas  短信模板的变量值列表
    * signature  短信签名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'to' => null,
        'templateId' => null,
        'templateParas' => null,
        'signature' => null
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
    * to  群发短信接收方的号码
    * templateId  短信模板ID
    * templateParas  短信模板的变量值列表
    * signature  短信签名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'to' => 'to',
            'templateId' => 'templateId',
            'templateParas' => 'templateParas',
            'signature' => 'signature'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * to  群发短信接收方的号码
    * templateId  短信模板ID
    * templateParas  短信模板的变量值列表
    * signature  短信签名
    *
    * @var string[]
    */
    protected static $setters = [
            'to' => 'setTo',
            'templateId' => 'setTemplateId',
            'templateParas' => 'setTemplateParas',
            'signature' => 'setSignature'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * to  群发短信接收方的号码
    * templateId  短信模板ID
    * templateParas  短信模板的变量值列表
    * signature  短信签名
    *
    * @var string[]
    */
    protected static $getters = [
            'to' => 'getTo',
            'templateId' => 'getTemplateId',
            'templateParas' => 'getTemplateParas',
            'signature' => 'getSignature'
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
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['templateParas'] = isset($data['templateParas']) ? $data['templateParas'] : null;
        $this->container['signature'] = isset($data['signature']) ? $data['signature'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['templateId']) && (mb_strlen($this->container['templateId']) > 32)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['templateId']) && (mb_strlen($this->container['templateId']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['signature']) && (mb_strlen($this->container['signature']) > 32)) {
                $invalidProperties[] = "invalid value for 'signature', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['signature']) && (mb_strlen($this->container['signature']) < 0)) {
                $invalidProperties[] = "invalid value for 'signature', the character length must be bigger than or equal to 0.";
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
    * Gets to
    *  群发短信接收方的号码
    *
    * @return string[]|null
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param string[]|null $to 群发短信接收方的号码
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets templateId
    *  短信模板ID
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId 短信模板ID
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets templateParas
    *  短信模板的变量值列表
    *
    * @return string[]|null
    */
    public function getTemplateParas()
    {
        return $this->container['templateParas'];
    }

    /**
    * Sets templateParas
    *
    * @param string[]|null $templateParas 短信模板的变量值列表
    *
    * @return $this
    */
    public function setTemplateParas($templateParas)
    {
        $this->container['templateParas'] = $templateParas;
        return $this;
    }

    /**
    * Gets signature
    *  短信签名
    *
    * @return string|null
    */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
    * Sets signature
    *
    * @param string|null $signature 短信签名
    *
    * @return $this
    */
    public function setSignature($signature)
    {
        $this->container['signature'] = $signature;
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

