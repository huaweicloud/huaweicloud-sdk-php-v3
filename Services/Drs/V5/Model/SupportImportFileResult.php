<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SupportImportFileResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SupportImportFileResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileSize  文件导入阈值。
    * previousSelect  上一次选择对象的方式。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileSize' => 'string',
            'previousSelect' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileSize  文件导入阈值。
    * previousSelect  上一次选择对象的方式。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileSize' => null,
        'previousSelect' => null
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
    * fileSize  文件导入阈值。
    * previousSelect  上一次选择对象的方式。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileSize' => 'file_size',
            'previousSelect' => 'previous_select'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileSize  文件导入阈值。
    * previousSelect  上一次选择对象的方式。
    *
    * @var string[]
    */
    protected static $setters = [
            'fileSize' => 'setFileSize',
            'previousSelect' => 'setPreviousSelect'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileSize  文件导入阈值。
    * previousSelect  上一次选择对象的方式。
    *
    * @var string[]
    */
    protected static $getters = [
            'fileSize' => 'getFileSize',
            'previousSelect' => 'getPreviousSelect'
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
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['previousSelect'] = isset($data['previousSelect']) ? $data['previousSelect'] : null;
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
    * Gets fileSize
    *  文件导入阈值。
    *
    * @return string|null
    */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
    * Sets fileSize
    *
    * @param string|null $fileSize 文件导入阈值。
    *
    * @return $this
    */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;
        return $this;
    }

    /**
    * Gets previousSelect
    *  上一次选择对象的方式。
    *
    * @return string|null
    */
    public function getPreviousSelect()
    {
        return $this->container['previousSelect'];
    }

    /**
    * Sets previousSelect
    *
    * @param string|null $previousSelect 上一次选择对象的方式。
    *
    * @return $this
    */
    public function setPreviousSelect($previousSelect)
    {
        $this->container['previousSelect'] = $previousSelect;
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

