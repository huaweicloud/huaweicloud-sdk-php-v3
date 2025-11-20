<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PreCheckResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PreCheckResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  检查项名称。
    * status  检查项结果。
    * note  检查项提示信息。
    * handlingSuggestion  处理建议。
    * errorMessage  错误信息。
    * errorDetailMessage  详细错误信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'status' => 'string',
            'note' => 'string',
            'handlingSuggestion' => 'string',
            'errorMessage' => 'string',
            'errorDetailMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  检查项名称。
    * status  检查项结果。
    * note  检查项提示信息。
    * handlingSuggestion  处理建议。
    * errorMessage  错误信息。
    * errorDetailMessage  详细错误信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'status' => null,
        'note' => null,
        'handlingSuggestion' => null,
        'errorMessage' => null,
        'errorDetailMessage' => null
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
    * name  检查项名称。
    * status  检查项结果。
    * note  检查项提示信息。
    * handlingSuggestion  处理建议。
    * errorMessage  错误信息。
    * errorDetailMessage  详细错误信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'status' => 'status',
            'note' => 'note',
            'handlingSuggestion' => 'handling_suggestion',
            'errorMessage' => 'error_message',
            'errorDetailMessage' => 'error_detail_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  检查项名称。
    * status  检查项结果。
    * note  检查项提示信息。
    * handlingSuggestion  处理建议。
    * errorMessage  错误信息。
    * errorDetailMessage  详细错误信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'status' => 'setStatus',
            'note' => 'setNote',
            'handlingSuggestion' => 'setHandlingSuggestion',
            'errorMessage' => 'setErrorMessage',
            'errorDetailMessage' => 'setErrorDetailMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  检查项名称。
    * status  检查项结果。
    * note  检查项提示信息。
    * handlingSuggestion  处理建议。
    * errorMessage  错误信息。
    * errorDetailMessage  详细错误信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'status' => 'getStatus',
            'note' => 'getNote',
            'handlingSuggestion' => 'getHandlingSuggestion',
            'errorMessage' => 'getErrorMessage',
            'errorDetailMessage' => 'getErrorDetailMessage'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['handlingSuggestion'] = isset($data['handlingSuggestion']) ? $data['handlingSuggestion'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
        $this->container['errorDetailMessage'] = isset($data['errorDetailMessage']) ? $data['errorDetailMessage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['note']) && (mb_strlen($this->container['note']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'note', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['note']) && (mb_strlen($this->container['note']) < 1)) {
                $invalidProperties[] = "invalid value for 'note', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['handlingSuggestion']) && (mb_strlen($this->container['handlingSuggestion']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'handlingSuggestion', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['handlingSuggestion']) && (mb_strlen($this->container['handlingSuggestion']) < 1)) {
                $invalidProperties[] = "invalid value for 'handlingSuggestion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['errorMessage']) && (mb_strlen($this->container['errorMessage']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'errorMessage', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['errorMessage']) && (mb_strlen($this->container['errorMessage']) < 1)) {
                $invalidProperties[] = "invalid value for 'errorMessage', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['errorDetailMessage']) && (mb_strlen($this->container['errorDetailMessage']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'errorDetailMessage', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['errorDetailMessage']) && (mb_strlen($this->container['errorDetailMessage']) < 1)) {
                $invalidProperties[] = "invalid value for 'errorDetailMessage', the character length must be bigger than or equal to 1.";
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
    * Gets name
    *  检查项名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 检查项名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  检查项结果。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 检查项结果。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets note
    *  检查项提示信息。
    *
    * @return string|null
    */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
    * Sets note
    *
    * @param string|null $note 检查项提示信息。
    *
    * @return $this
    */
    public function setNote($note)
    {
        $this->container['note'] = $note;
        return $this;
    }

    /**
    * Gets handlingSuggestion
    *  处理建议。
    *
    * @return string|null
    */
    public function getHandlingSuggestion()
    {
        return $this->container['handlingSuggestion'];
    }

    /**
    * Sets handlingSuggestion
    *
    * @param string|null $handlingSuggestion 处理建议。
    *
    * @return $this
    */
    public function setHandlingSuggestion($handlingSuggestion)
    {
        $this->container['handlingSuggestion'] = $handlingSuggestion;
        return $this;
    }

    /**
    * Gets errorMessage
    *  错误信息。
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
    * @param string|null $errorMessage 错误信息。
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
        return $this;
    }

    /**
    * Gets errorDetailMessage
    *  详细错误信息。
    *
    * @return string|null
    */
    public function getErrorDetailMessage()
    {
        return $this->container['errorDetailMessage'];
    }

    /**
    * Sets errorDetailMessage
    *
    * @param string|null $errorDetailMessage 详细错误信息。
    *
    * @return $this
    */
    public function setErrorDetailMessage($errorDetailMessage)
    {
        $this->container['errorDetailMessage'] = $errorDetailMessage;
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

