<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportErrorMessageResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportErrorMessageResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sheetName  sheet名称。
    * rowRum  行号。
    * value  字段值。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sheetName' => 'string',
            'rowRum' => 'string',
            'value' => 'string',
            'errorMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sheetName  sheet名称。
    * rowRum  行号。
    * value  字段值。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sheetName' => null,
        'rowRum' => null,
        'value' => null,
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
    * sheetName  sheet名称。
    * rowRum  行号。
    * value  字段值。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sheetName' => 'sheet_name',
            'rowRum' => 'row_rum',
            'value' => 'value',
            'errorMessage' => 'error_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sheetName  sheet名称。
    * rowRum  行号。
    * value  字段值。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'sheetName' => 'setSheetName',
            'rowRum' => 'setRowRum',
            'value' => 'setValue',
            'errorMessage' => 'setErrorMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sheetName  sheet名称。
    * rowRum  行号。
    * value  字段值。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'sheetName' => 'getSheetName',
            'rowRum' => 'getRowRum',
            'value' => 'getValue',
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
        $this->container['sheetName'] = isset($data['sheetName']) ? $data['sheetName'] : null;
        $this->container['rowRum'] = isset($data['rowRum']) ? $data['rowRum'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
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
            if (!is_null($this->container['sheetName']) && (mb_strlen($this->container['sheetName']) > 128)) {
                $invalidProperties[] = "invalid value for 'sheetName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sheetName']) && (mb_strlen($this->container['sheetName']) < 1)) {
                $invalidProperties[] = "invalid value for 'sheetName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['rowRum']) && (mb_strlen($this->container['rowRum']) > 3)) {
                $invalidProperties[] = "invalid value for 'rowRum', the character length must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['rowRum']) && (mb_strlen($this->container['rowRum']) < 1)) {
                $invalidProperties[] = "invalid value for 'rowRum', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 100000)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) < 0)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['errorMessage']) && (mb_strlen($this->container['errorMessage']) > 512)) {
                $invalidProperties[] = "invalid value for 'errorMessage', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['errorMessage']) && (mb_strlen($this->container['errorMessage']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorMessage', the character length must be bigger than or equal to 0.";
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
    * Gets sheetName
    *  sheet名称。
    *
    * @return string|null
    */
    public function getSheetName()
    {
        return $this->container['sheetName'];
    }

    /**
    * Sets sheetName
    *
    * @param string|null $sheetName sheet名称。
    *
    * @return $this
    */
    public function setSheetName($sheetName)
    {
        $this->container['sheetName'] = $sheetName;
        return $this;
    }

    /**
    * Gets rowRum
    *  行号。
    *
    * @return string|null
    */
    public function getRowRum()
    {
        return $this->container['rowRum'];
    }

    /**
    * Sets rowRum
    *
    * @param string|null $rowRum 行号。
    *
    * @return $this
    */
    public function setRowRum($rowRum)
    {
        $this->container['rowRum'] = $rowRum;
        return $this;
    }

    /**
    * Gets value
    *  字段值。
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 字段值。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

