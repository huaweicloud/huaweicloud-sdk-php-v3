<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportFunctionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportFunctionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * funcName  函数名
    * fileName  文件名
    * fileType  文件类型
    * fileCode  函数代码。代码必须要进行base64编码
    * package  应用名称，默认为default
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'funcName' => 'string',
            'fileName' => 'string',
            'fileType' => 'string',
            'fileCode' => 'string',
            'package' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * funcName  函数名
    * fileName  文件名
    * fileType  文件类型
    * fileCode  函数代码。代码必须要进行base64编码
    * package  应用名称，默认为default
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'funcName' => null,
        'fileName' => null,
        'fileType' => null,
        'fileCode' => null,
        'package' => null
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
    * funcName  函数名
    * fileName  文件名
    * fileType  文件类型
    * fileCode  函数代码。代码必须要进行base64编码
    * package  应用名称，默认为default
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'funcName' => 'func_name',
            'fileName' => 'file_name',
            'fileType' => 'file_type',
            'fileCode' => 'file_code',
            'package' => 'package'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * funcName  函数名
    * fileName  文件名
    * fileType  文件类型
    * fileCode  函数代码。代码必须要进行base64编码
    * package  应用名称，默认为default
    *
    * @var string[]
    */
    protected static $setters = [
            'funcName' => 'setFuncName',
            'fileName' => 'setFileName',
            'fileType' => 'setFileType',
            'fileCode' => 'setFileCode',
            'package' => 'setPackage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * funcName  函数名
    * fileName  文件名
    * fileType  文件类型
    * fileCode  函数代码。代码必须要进行base64编码
    * package  应用名称，默认为default
    *
    * @var string[]
    */
    protected static $getters = [
            'funcName' => 'getFuncName',
            'fileName' => 'getFileName',
            'fileType' => 'getFileType',
            'fileCode' => 'getFileCode',
            'package' => 'getPackage'
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
        $this->container['funcName'] = isset($data['funcName']) ? $data['funcName'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['fileCode'] = isset($data['fileCode']) ? $data['fileCode'] : null;
        $this->container['package'] = isset($data['package']) ? $data['package'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['funcName'] === null) {
            $invalidProperties[] = "'funcName' can't be null";
        }
        if ($this->container['fileName'] === null) {
            $invalidProperties[] = "'fileName' can't be null";
        }
        if ($this->container['fileType'] === null) {
            $invalidProperties[] = "'fileType' can't be null";
        }
        if ($this->container['fileCode'] === null) {
            $invalidProperties[] = "'fileCode' can't be null";
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
    * Gets funcName
    *  函数名
    *
    * @return string
    */
    public function getFuncName()
    {
        return $this->container['funcName'];
    }

    /**
    * Sets funcName
    *
    * @param string $funcName 函数名
    *
    * @return $this
    */
    public function setFuncName($funcName)
    {
        $this->container['funcName'] = $funcName;
        return $this;
    }

    /**
    * Gets fileName
    *  文件名
    *
    * @return string
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string $fileName 文件名
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets fileType
    *  文件类型
    *
    * @return string
    */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
    * Sets fileType
    *
    * @param string $fileType 文件类型
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets fileCode
    *  函数代码。代码必须要进行base64编码
    *
    * @return string
    */
    public function getFileCode()
    {
        return $this->container['fileCode'];
    }

    /**
    * Sets fileCode
    *
    * @param string $fileCode 函数代码。代码必须要进行base64编码
    *
    * @return $this
    */
    public function setFileCode($fileCode)
    {
        $this->container['fileCode'] = $fileCode;
        return $this;
    }

    /**
    * Gets package
    *  应用名称，默认为default
    *
    * @return string|null
    */
    public function getPackage()
    {
        return $this->container['package'];
    }

    /**
    * Sets package
    *
    * @param string|null $package 应用名称，默认为default
    *
    * @return $this
    */
    public function setPackage($package)
    {
        $this->container['package'] = $package;
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

