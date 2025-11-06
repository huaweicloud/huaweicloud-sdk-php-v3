<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangesTreeObjectDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangesTreeObjectDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * title  **参数解释：** 变更文件名。
    * level  **参数解释：** 文件层级。
    * filePath  **参数解释：** 文件路径。
    * fileType  **参数解释：** 文件类型。
    * diff  diff
    * items  **参数解释：** 子文件变更。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'title' => 'string',
            'level' => 'int',
            'filePath' => 'string',
            'fileType' => 'string',
            'diff' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ChangesTreeObjectDiffDto',
            'items' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ChangesTreeObjectDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * title  **参数解释：** 变更文件名。
    * level  **参数解释：** 文件层级。
    * filePath  **参数解释：** 文件路径。
    * fileType  **参数解释：** 文件类型。
    * diff  diff
    * items  **参数解释：** 子文件变更。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'title' => null,
        'level' => 'int32',
        'filePath' => null,
        'fileType' => null,
        'diff' => null,
        'items' => null
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
    * title  **参数解释：** 变更文件名。
    * level  **参数解释：** 文件层级。
    * filePath  **参数解释：** 文件路径。
    * fileType  **参数解释：** 文件类型。
    * diff  diff
    * items  **参数解释：** 子文件变更。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'title' => 'title',
            'level' => 'level',
            'filePath' => 'file_path',
            'fileType' => 'file_type',
            'diff' => 'diff',
            'items' => 'items'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * title  **参数解释：** 变更文件名。
    * level  **参数解释：** 文件层级。
    * filePath  **参数解释：** 文件路径。
    * fileType  **参数解释：** 文件类型。
    * diff  diff
    * items  **参数解释：** 子文件变更。
    *
    * @var string[]
    */
    protected static $setters = [
            'title' => 'setTitle',
            'level' => 'setLevel',
            'filePath' => 'setFilePath',
            'fileType' => 'setFileType',
            'diff' => 'setDiff',
            'items' => 'setItems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * title  **参数解释：** 变更文件名。
    * level  **参数解释：** 文件层级。
    * filePath  **参数解释：** 文件路径。
    * fileType  **参数解释：** 文件类型。
    * diff  diff
    * items  **参数解释：** 子文件变更。
    *
    * @var string[]
    */
    protected static $getters = [
            'title' => 'getTitle',
            'level' => 'getLevel',
            'filePath' => 'getFilePath',
            'fileType' => 'getFileType',
            'diff' => 'getDiff',
            'items' => 'getItems'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['diff'] = isset($data['diff']) ? $data['diff'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
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
    * Gets title
    *  **参数解释：** 变更文件名。
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title **参数解释：** 变更文件名。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets level
    *  **参数解释：** 文件层级。
    *
    * @return int|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param int|null $level **参数解释：** 文件层级。
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets filePath
    *  **参数解释：** 文件路径。
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
    * @param string|null $filePath **参数解释：** 文件路径。
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
    *  **参数解释：** 文件类型。
    *
    * @return string|null
    */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
    * Sets fileType
    *
    * @param string|null $fileType **参数解释：** 文件类型。
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets diff
    *  diff
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ChangesTreeObjectDiffDto|null
    */
    public function getDiff()
    {
        return $this->container['diff'];
    }

    /**
    * Sets diff
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ChangesTreeObjectDiffDto|null $diff diff
    *
    * @return $this
    */
    public function setDiff($diff)
    {
        $this->container['diff'] = $diff;
        return $this;
    }

    /**
    * Gets items
    *  **参数解释：** 子文件变更。
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ChangesTreeObjectDto[]|null
    */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
    * Sets items
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\ChangesTreeObjectDto[]|null $items **参数解释：** 子文件变更。
    *
    * @return $this
    */
    public function setItems($items)
    {
        $this->container['items'] = $items;
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

