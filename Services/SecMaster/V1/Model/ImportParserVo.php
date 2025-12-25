<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportParserVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportParserVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileName  解析器文件名称
    * parserTitle  解析器名称
    * success  是否导入成功
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileName' => 'string',
            'parserTitle' => 'string',
            'success' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileName  解析器文件名称
    * parserTitle  解析器名称
    * success  是否导入成功
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileName' => null,
        'parserTitle' => null,
        'success' => null
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
    * fileName  解析器文件名称
    * parserTitle  解析器名称
    * success  是否导入成功
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileName' => 'file_name',
            'parserTitle' => 'parser_title',
            'success' => 'success'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileName  解析器文件名称
    * parserTitle  解析器名称
    * success  是否导入成功
    *
    * @var string[]
    */
    protected static $setters = [
            'fileName' => 'setFileName',
            'parserTitle' => 'setParserTitle',
            'success' => 'setSuccess'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileName  解析器文件名称
    * parserTitle  解析器名称
    * success  是否导入成功
    *
    * @var string[]
    */
    protected static $getters = [
            'fileName' => 'getFileName',
            'parserTitle' => 'getParserTitle',
            'success' => 'getSuccess'
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
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['parserTitle'] = isset($data['parserTitle']) ? $data['parserTitle'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 63)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 5)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['parserTitle']) && (mb_strlen($this->container['parserTitle']) > 63)) {
                $invalidProperties[] = "invalid value for 'parserTitle', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['parserTitle']) && (mb_strlen($this->container['parserTitle']) < 5)) {
                $invalidProperties[] = "invalid value for 'parserTitle', the character length must be bigger than or equal to 5.";
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
    * Gets fileName
    *  解析器文件名称
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
    * @param string|null $fileName 解析器文件名称
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets parserTitle
    *  解析器名称
    *
    * @return string|null
    */
    public function getParserTitle()
    {
        return $this->container['parserTitle'];
    }

    /**
    * Sets parserTitle
    *
    * @param string|null $parserTitle 解析器名称
    *
    * @return $this
    */
    public function setParserTitle($parserTitle)
    {
        $this->container['parserTitle'] = $parserTitle;
        return $this;
    }

    /**
    * Gets success
    *  是否导入成功
    *
    * @return bool|null
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param bool|null $success 是否导入成功
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
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

