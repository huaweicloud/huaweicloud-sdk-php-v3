<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCollectorFilesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCollectorFilesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fieldId  UUID
    * fileName  文件名称
    * path  文件路径
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fieldId' => 'string',
            'fileName' => 'string',
            'path' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fieldId  UUID
    * fileName  文件名称
    * path  文件路径
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fieldId' => null,
        'fileName' => null,
        'path' => null
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
    * fieldId  UUID
    * fileName  文件名称
    * path  文件路径
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fieldId' => 'field_id',
            'fileName' => 'file_name',
            'path' => 'path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fieldId  UUID
    * fileName  文件名称
    * path  文件路径
    *
    * @var string[]
    */
    protected static $setters = [
            'fieldId' => 'setFieldId',
            'fileName' => 'setFileName',
            'path' => 'setPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fieldId  UUID
    * fileName  文件名称
    * path  文件路径
    *
    * @var string[]
    */
    protected static $getters = [
            'fieldId' => 'getFieldId',
            'fileName' => 'getFileName',
            'path' => 'getPath'
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
        $this->container['fieldId'] = isset($data['fieldId']) ? $data['fieldId'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['fieldId']) && (mb_strlen($this->container['fieldId']) > 36)) {
                $invalidProperties[] = "invalid value for 'fieldId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['fieldId']) && (mb_strlen($this->container['fieldId']) < 36)) {
                $invalidProperties[] = "invalid value for 'fieldId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 63)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 5)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 1024)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) < 5)) {
                $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 5.";
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
    * Gets fieldId
    *  UUID
    *
    * @return string|null
    */
    public function getFieldId()
    {
        return $this->container['fieldId'];
    }

    /**
    * Sets fieldId
    *
    * @param string|null $fieldId UUID
    *
    * @return $this
    */
    public function setFieldId($fieldId)
    {
        $this->container['fieldId'] = $fieldId;
        return $this;
    }

    /**
    * Gets fileName
    *  文件名称
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName 文件名称
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets path
    *  文件路径
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 文件路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
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

