<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObjectCompareResultDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ObjectCompareResultDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceDbName  源库名称。
    * targetDbName  目标库名称。
    * sourceDbValue  在源库的值。
    * targetDbValue  在目标库的值。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceDbName' => 'string',
            'targetDbName' => 'string',
            'sourceDbValue' => 'string',
            'targetDbValue' => 'string',
            'errorMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceDbName  源库名称。
    * targetDbName  目标库名称。
    * sourceDbValue  在源库的值。
    * targetDbValue  在目标库的值。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceDbName' => null,
        'targetDbName' => null,
        'sourceDbValue' => null,
        'targetDbValue' => null,
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
    * sourceDbName  源库名称。
    * targetDbName  目标库名称。
    * sourceDbValue  在源库的值。
    * targetDbValue  在目标库的值。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceDbName' => 'source_db_name',
            'targetDbName' => 'target_db_name',
            'sourceDbValue' => 'source_db_value',
            'targetDbValue' => 'target_db_value',
            'errorMessage' => 'error_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceDbName  源库名称。
    * targetDbName  目标库名称。
    * sourceDbValue  在源库的值。
    * targetDbValue  在目标库的值。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceDbName' => 'setSourceDbName',
            'targetDbName' => 'setTargetDbName',
            'sourceDbValue' => 'setSourceDbValue',
            'targetDbValue' => 'setTargetDbValue',
            'errorMessage' => 'setErrorMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceDbName  源库名称。
    * targetDbName  目标库名称。
    * sourceDbValue  在源库的值。
    * targetDbValue  在目标库的值。
    * errorMessage  错误信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceDbName' => 'getSourceDbName',
            'targetDbName' => 'getTargetDbName',
            'sourceDbValue' => 'getSourceDbValue',
            'targetDbValue' => 'getTargetDbValue',
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
        $this->container['sourceDbName'] = isset($data['sourceDbName']) ? $data['sourceDbName'] : null;
        $this->container['targetDbName'] = isset($data['targetDbName']) ? $data['targetDbName'] : null;
        $this->container['sourceDbValue'] = isset($data['sourceDbValue']) ? $data['sourceDbValue'] : null;
        $this->container['targetDbValue'] = isset($data['targetDbValue']) ? $data['targetDbValue'] : null;
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
        if ($this->container['sourceDbName'] === null) {
            $invalidProperties[] = "'sourceDbName' can't be null";
        }
        if ($this->container['targetDbName'] === null) {
            $invalidProperties[] = "'targetDbName' can't be null";
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
    * Gets sourceDbName
    *  源库名称。
    *
    * @return string
    */
    public function getSourceDbName()
    {
        return $this->container['sourceDbName'];
    }

    /**
    * Sets sourceDbName
    *
    * @param string $sourceDbName 源库名称。
    *
    * @return $this
    */
    public function setSourceDbName($sourceDbName)
    {
        $this->container['sourceDbName'] = $sourceDbName;
        return $this;
    }

    /**
    * Gets targetDbName
    *  目标库名称。
    *
    * @return string
    */
    public function getTargetDbName()
    {
        return $this->container['targetDbName'];
    }

    /**
    * Sets targetDbName
    *
    * @param string $targetDbName 目标库名称。
    *
    * @return $this
    */
    public function setTargetDbName($targetDbName)
    {
        $this->container['targetDbName'] = $targetDbName;
        return $this;
    }

    /**
    * Gets sourceDbValue
    *  在源库的值。
    *
    * @return string|null
    */
    public function getSourceDbValue()
    {
        return $this->container['sourceDbValue'];
    }

    /**
    * Sets sourceDbValue
    *
    * @param string|null $sourceDbValue 在源库的值。
    *
    * @return $this
    */
    public function setSourceDbValue($sourceDbValue)
    {
        $this->container['sourceDbValue'] = $sourceDbValue;
        return $this;
    }

    /**
    * Gets targetDbValue
    *  在目标库的值。
    *
    * @return string|null
    */
    public function getTargetDbValue()
    {
        return $this->container['targetDbValue'];
    }

    /**
    * Sets targetDbValue
    *
    * @param string|null $targetDbValue 在目标库的值。
    *
    * @return $this
    */
    public function setTargetDbValue($targetDbValue)
    {
        $this->container['targetDbValue'] = $targetDbValue;
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

