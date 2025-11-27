<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListReplicationErrorsResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListReplicationErrorsResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * occurTime  报错发生时间。
    * sourceTypeId  错误源类型id。
    * sourceName  错误源名称。
    * errorCode  错误代码。
    * errorText  错误消息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'occurTime' => 'string',
            'sourceTypeId' => 'string',
            'sourceName' => 'string',
            'errorCode' => 'string',
            'errorText' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * occurTime  报错发生时间。
    * sourceTypeId  错误源类型id。
    * sourceName  错误源名称。
    * errorCode  错误代码。
    * errorText  错误消息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'occurTime' => null,
        'sourceTypeId' => null,
        'sourceName' => null,
        'errorCode' => null,
        'errorText' => null
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
    * occurTime  报错发生时间。
    * sourceTypeId  错误源类型id。
    * sourceName  错误源名称。
    * errorCode  错误代码。
    * errorText  错误消息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'occurTime' => 'occur_time',
            'sourceTypeId' => 'source_type_id',
            'sourceName' => 'source_name',
            'errorCode' => 'error_code',
            'errorText' => 'error_text'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * occurTime  报错发生时间。
    * sourceTypeId  错误源类型id。
    * sourceName  错误源名称。
    * errorCode  错误代码。
    * errorText  错误消息。
    *
    * @var string[]
    */
    protected static $setters = [
            'occurTime' => 'setOccurTime',
            'sourceTypeId' => 'setSourceTypeId',
            'sourceName' => 'setSourceName',
            'errorCode' => 'setErrorCode',
            'errorText' => 'setErrorText'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * occurTime  报错发生时间。
    * sourceTypeId  错误源类型id。
    * sourceName  错误源名称。
    * errorCode  错误代码。
    * errorText  错误消息。
    *
    * @var string[]
    */
    protected static $getters = [
            'occurTime' => 'getOccurTime',
            'sourceTypeId' => 'getSourceTypeId',
            'sourceName' => 'getSourceName',
            'errorCode' => 'getErrorCode',
            'errorText' => 'getErrorText'
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
        $this->container['occurTime'] = isset($data['occurTime']) ? $data['occurTime'] : null;
        $this->container['sourceTypeId'] = isset($data['sourceTypeId']) ? $data['sourceTypeId'] : null;
        $this->container['sourceName'] = isset($data['sourceName']) ? $data['sourceName'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorText'] = isset($data['errorText']) ? $data['errorText'] : null;
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
    * Gets occurTime
    *  报错发生时间。
    *
    * @return string|null
    */
    public function getOccurTime()
    {
        return $this->container['occurTime'];
    }

    /**
    * Sets occurTime
    *
    * @param string|null $occurTime 报错发生时间。
    *
    * @return $this
    */
    public function setOccurTime($occurTime)
    {
        $this->container['occurTime'] = $occurTime;
        return $this;
    }

    /**
    * Gets sourceTypeId
    *  错误源类型id。
    *
    * @return string|null
    */
    public function getSourceTypeId()
    {
        return $this->container['sourceTypeId'];
    }

    /**
    * Sets sourceTypeId
    *
    * @param string|null $sourceTypeId 错误源类型id。
    *
    * @return $this
    */
    public function setSourceTypeId($sourceTypeId)
    {
        $this->container['sourceTypeId'] = $sourceTypeId;
        return $this;
    }

    /**
    * Gets sourceName
    *  错误源名称。
    *
    * @return string|null
    */
    public function getSourceName()
    {
        return $this->container['sourceName'];
    }

    /**
    * Sets sourceName
    *
    * @param string|null $sourceName 错误源名称。
    *
    * @return $this
    */
    public function setSourceName($sourceName)
    {
        $this->container['sourceName'] = $sourceName;
        return $this;
    }

    /**
    * Gets errorCode
    *  错误代码。
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
    * @param string|null $errorCode 错误代码。
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorText
    *  错误消息。
    *
    * @return string|null
    */
    public function getErrorText()
    {
        return $this->container['errorText'];
    }

    /**
    * Sets errorText
    *
    * @param string|null $errorText 错误消息。
    *
    * @return $this
    */
    public function setErrorText($errorText)
    {
        $this->container['errorText'] = $errorText;
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

