<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTargetPasswordResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTargetPasswordResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateId  模板ID
    * targetPassword  目的端密码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateId' => 'string',
            'targetPassword' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateId  模板ID
    * targetPassword  目的端密码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateId' => null,
        'targetPassword' => null
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
    * templateId  模板ID
    * targetPassword  目的端密码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateId' => 'template_id',
            'targetPassword' => 'target_password'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateId  模板ID
    * targetPassword  目的端密码
    *
    * @var string[]
    */
    protected static $setters = [
            'templateId' => 'setTemplateId',
            'targetPassword' => 'setTargetPassword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateId  模板ID
    * targetPassword  目的端密码
    *
    * @var string[]
    */
    protected static $getters = [
            'templateId' => 'getTemplateId',
            'targetPassword' => 'getTargetPassword'
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
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['targetPassword'] = isset($data['targetPassword']) ? $data['targetPassword'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['templateId']) && (mb_strlen($this->container['templateId']) > 255)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['templateId']) && (mb_strlen($this->container['templateId']) < 0)) {
                $invalidProperties[] = "invalid value for 'templateId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['targetPassword']) && (mb_strlen($this->container['targetPassword']) > 255)) {
                $invalidProperties[] = "invalid value for 'targetPassword', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['targetPassword']) && (mb_strlen($this->container['targetPassword']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetPassword', the character length must be bigger than or equal to 0.";
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
    * Gets templateId
    *  模板ID
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
    * @param string|null $templateId 模板ID
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets targetPassword
    *  目的端密码
    *
    * @return string|null
    */
    public function getTargetPassword()
    {
        return $this->container['targetPassword'];
    }

    /**
    * Sets targetPassword
    *
    * @param string|null $targetPassword 目的端密码
    *
    * @return $this
    */
    public function setTargetPassword($targetPassword)
    {
        $this->container['targetPassword'] = $targetPassword;
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

