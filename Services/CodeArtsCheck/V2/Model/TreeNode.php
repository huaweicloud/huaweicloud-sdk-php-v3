<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TreeNode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TreeNode';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileName  目录或文件名
    * filePath  目录或文件路径
    * isLeaf  是否为叶子节点，true是，false不是
    * checkboxStatus  屏蔽状态，包括unchecked(不屏蔽)、all(全屏蔽)、half(半屏蔽)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileName' => 'string',
            'filePath' => 'string',
            'isLeaf' => 'bool',
            'checkboxStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileName  目录或文件名
    * filePath  目录或文件路径
    * isLeaf  是否为叶子节点，true是，false不是
    * checkboxStatus  屏蔽状态，包括unchecked(不屏蔽)、all(全屏蔽)、half(半屏蔽)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileName' => null,
        'filePath' => null,
        'isLeaf' => null,
        'checkboxStatus' => null
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
    * fileName  目录或文件名
    * filePath  目录或文件路径
    * isLeaf  是否为叶子节点，true是，false不是
    * checkboxStatus  屏蔽状态，包括unchecked(不屏蔽)、all(全屏蔽)、half(半屏蔽)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileName' => 'file_name',
            'filePath' => 'file_path',
            'isLeaf' => 'is_leaf',
            'checkboxStatus' => 'checkbox_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileName  目录或文件名
    * filePath  目录或文件路径
    * isLeaf  是否为叶子节点，true是，false不是
    * checkboxStatus  屏蔽状态，包括unchecked(不屏蔽)、all(全屏蔽)、half(半屏蔽)
    *
    * @var string[]
    */
    protected static $setters = [
            'fileName' => 'setFileName',
            'filePath' => 'setFilePath',
            'isLeaf' => 'setIsLeaf',
            'checkboxStatus' => 'setCheckboxStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileName  目录或文件名
    * filePath  目录或文件路径
    * isLeaf  是否为叶子节点，true是，false不是
    * checkboxStatus  屏蔽状态，包括unchecked(不屏蔽)、all(全屏蔽)、half(半屏蔽)
    *
    * @var string[]
    */
    protected static $getters = [
            'fileName' => 'getFileName',
            'filePath' => 'getFilePath',
            'isLeaf' => 'getIsLeaf',
            'checkboxStatus' => 'getCheckboxStatus'
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
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['isLeaf'] = isset($data['isLeaf']) ? $data['isLeaf'] : null;
        $this->container['checkboxStatus'] = isset($data['checkboxStatus']) ? $data['checkboxStatus'] : null;
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
    * Gets fileName
    *  目录或文件名
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
    * @param string|null $fileName 目录或文件名
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
    *  目录或文件路径
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
    * @param string|null $filePath 目录或文件路径
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets isLeaf
    *  是否为叶子节点，true是，false不是
    *
    * @return bool|null
    */
    public function getIsLeaf()
    {
        return $this->container['isLeaf'];
    }

    /**
    * Sets isLeaf
    *
    * @param bool|null $isLeaf 是否为叶子节点，true是，false不是
    *
    * @return $this
    */
    public function setIsLeaf($isLeaf)
    {
        $this->container['isLeaf'] = $isLeaf;
        return $this;
    }

    /**
    * Gets checkboxStatus
    *  屏蔽状态，包括unchecked(不屏蔽)、all(全屏蔽)、half(半屏蔽)
    *
    * @return string|null
    */
    public function getCheckboxStatus()
    {
        return $this->container['checkboxStatus'];
    }

    /**
    * Sets checkboxStatus
    *
    * @param string|null $checkboxStatus 屏蔽状态，包括unchecked(不屏蔽)、all(全屏蔽)、half(半屏蔽)
    *
    * @return $this
    */
    public function setCheckboxStatus($checkboxStatus)
    {
        $this->container['checkboxStatus'] = $checkboxStatus;
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

