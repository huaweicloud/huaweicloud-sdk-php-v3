<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListComponentTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListComponentTemplate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * componentId  组件id.
    * componentName  组件名称
    * fileName  文件名称
    * filePath  文件路径
    * fileType  fileType
    * param  参数
    * version  版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'componentId' => 'string',
            'componentName' => 'string',
            'fileName' => 'string',
            'filePath' => 'string',
            'fileType' => '\HuaweiCloud\SDK\SecMaster\V1\Model\FileType',
            'param' => 'string',
            'version' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * componentId  组件id.
    * componentName  组件名称
    * fileName  文件名称
    * filePath  文件路径
    * fileType  fileType
    * param  参数
    * version  版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'componentId' => null,
        'componentName' => null,
        'fileName' => null,
        'filePath' => null,
        'fileType' => null,
        'param' => null,
        'version' => null
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
    * componentId  组件id.
    * componentName  组件名称
    * fileName  文件名称
    * filePath  文件路径
    * fileType  fileType
    * param  参数
    * version  版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'componentId' => 'component_id',
            'componentName' => 'component_name',
            'fileName' => 'file_name',
            'filePath' => 'file_path',
            'fileType' => 'file_type',
            'param' => 'param',
            'version' => 'version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * componentId  组件id.
    * componentName  组件名称
    * fileName  文件名称
    * filePath  文件路径
    * fileType  fileType
    * param  参数
    * version  版本
    *
    * @var string[]
    */
    protected static $setters = [
            'componentId' => 'setComponentId',
            'componentName' => 'setComponentName',
            'fileName' => 'setFileName',
            'filePath' => 'setFilePath',
            'fileType' => 'setFileType',
            'param' => 'setParam',
            'version' => 'setVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * componentId  组件id.
    * componentName  组件名称
    * fileName  文件名称
    * filePath  文件路径
    * fileType  fileType
    * param  参数
    * version  版本
    *
    * @var string[]
    */
    protected static $getters = [
            'componentId' => 'getComponentId',
            'componentName' => 'getComponentName',
            'fileName' => 'getFileName',
            'filePath' => 'getFilePath',
            'fileType' => 'getFileType',
            'param' => 'getParam',
            'version' => 'getVersion'
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
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['componentName'] = isset($data['componentName']) ? $data['componentName'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['param'] = isset($data['param']) ? $data['param'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['componentId']) && (mb_strlen($this->container['componentId']) > 36)) {
                $invalidProperties[] = "invalid value for 'componentId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['componentId']) && (mb_strlen($this->container['componentId']) < 32)) {
                $invalidProperties[] = "invalid value for 'componentId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['componentName']) && (mb_strlen($this->container['componentName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'componentName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['componentName']) && (mb_strlen($this->container['componentName']) < 0)) {
                $invalidProperties[] = "invalid value for 'componentName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 63)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['filePath']) && (mb_strlen($this->container['filePath']) > 1024)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['filePath']) && (mb_strlen($this->container['filePath']) < 0)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['param']) && (mb_strlen($this->container['param']) > 1024)) {
                $invalidProperties[] = "invalid value for 'param', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['param']) && (mb_strlen($this->container['param']) < 0)) {
                $invalidProperties[] = "invalid value for 'param', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 256)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
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
    * Gets componentId
    *  组件id.
    *
    * @return string|null
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string|null $componentId 组件id.
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets componentName
    *  组件名称
    *
    * @return string|null
    */
    public function getComponentName()
    {
        return $this->container['componentName'];
    }

    /**
    * Sets componentName
    *
    * @param string|null $componentName 组件名称
    *
    * @return $this
    */
    public function setComponentName($componentName)
    {
        $this->container['componentName'] = $componentName;
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
    * Gets filePath
    *  文件路径
    *
    * @return string|null
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string|null $filePath 文件路径
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets fileType
    *  fileType
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\FileType|null
    */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
    * Sets fileType
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\FileType|null $fileType fileType
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets param
    *  参数
    *
    * @return string|null
    */
    public function getParam()
    {
        return $this->container['param'];
    }

    /**
    * Sets param
    *
    * @param string|null $param 参数
    *
    * @return $this
    */
    public function setParam($param)
    {
        $this->container['param'] = $param;
        return $this;
    }

    /**
    * Gets version
    *  版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
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

