<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RefEntryDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RefEntryDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tagName  **参数解释：** 标记名称。 **约束限制：** 不涉及。
    * filePath  **参数解释：** 文件路径。 **约束限制：** 不涉及。
    * blob  **参数解释：** blob文件ID。 **约束限制：** 不涉及。
    * lineImage  **参数解释：** 索引行简要内容。 **约束限制：** 不涉及。
    * lineNumber  **参数解释：** 行号。 **约束限制：** 不涉及。
    * syntaxType  **参数解释：** 语法类型。 **约束限制：** 不涉及。
    * revision  **参数解释：** 所在版本号（commit id）。 **约束限制：** 不涉及。
    * extend  **参数解释：** 其他信息。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tagName' => 'string',
            'filePath' => 'string',
            'blob' => 'string',
            'lineImage' => 'string',
            'lineNumber' => 'int',
            'syntaxType' => 'string',
            'revision' => 'string',
            'extend' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tagName  **参数解释：** 标记名称。 **约束限制：** 不涉及。
    * filePath  **参数解释：** 文件路径。 **约束限制：** 不涉及。
    * blob  **参数解释：** blob文件ID。 **约束限制：** 不涉及。
    * lineImage  **参数解释：** 索引行简要内容。 **约束限制：** 不涉及。
    * lineNumber  **参数解释：** 行号。 **约束限制：** 不涉及。
    * syntaxType  **参数解释：** 语法类型。 **约束限制：** 不涉及。
    * revision  **参数解释：** 所在版本号（commit id）。 **约束限制：** 不涉及。
    * extend  **参数解释：** 其他信息。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tagName' => null,
        'filePath' => null,
        'blob' => null,
        'lineImage' => null,
        'lineNumber' => null,
        'syntaxType' => null,
        'revision' => null,
        'extend' => null
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
    * tagName  **参数解释：** 标记名称。 **约束限制：** 不涉及。
    * filePath  **参数解释：** 文件路径。 **约束限制：** 不涉及。
    * blob  **参数解释：** blob文件ID。 **约束限制：** 不涉及。
    * lineImage  **参数解释：** 索引行简要内容。 **约束限制：** 不涉及。
    * lineNumber  **参数解释：** 行号。 **约束限制：** 不涉及。
    * syntaxType  **参数解释：** 语法类型。 **约束限制：** 不涉及。
    * revision  **参数解释：** 所在版本号（commit id）。 **约束限制：** 不涉及。
    * extend  **参数解释：** 其他信息。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tagName' => 'tag_name',
            'filePath' => 'file_path',
            'blob' => 'blob',
            'lineImage' => 'line_image',
            'lineNumber' => 'line_number',
            'syntaxType' => 'syntax_type',
            'revision' => 'revision',
            'extend' => 'extend'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tagName  **参数解释：** 标记名称。 **约束限制：** 不涉及。
    * filePath  **参数解释：** 文件路径。 **约束限制：** 不涉及。
    * blob  **参数解释：** blob文件ID。 **约束限制：** 不涉及。
    * lineImage  **参数解释：** 索引行简要内容。 **约束限制：** 不涉及。
    * lineNumber  **参数解释：** 行号。 **约束限制：** 不涉及。
    * syntaxType  **参数解释：** 语法类型。 **约束限制：** 不涉及。
    * revision  **参数解释：** 所在版本号（commit id）。 **约束限制：** 不涉及。
    * extend  **参数解释：** 其他信息。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'tagName' => 'setTagName',
            'filePath' => 'setFilePath',
            'blob' => 'setBlob',
            'lineImage' => 'setLineImage',
            'lineNumber' => 'setLineNumber',
            'syntaxType' => 'setSyntaxType',
            'revision' => 'setRevision',
            'extend' => 'setExtend'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tagName  **参数解释：** 标记名称。 **约束限制：** 不涉及。
    * filePath  **参数解释：** 文件路径。 **约束限制：** 不涉及。
    * blob  **参数解释：** blob文件ID。 **约束限制：** 不涉及。
    * lineImage  **参数解释：** 索引行简要内容。 **约束限制：** 不涉及。
    * lineNumber  **参数解释：** 行号。 **约束限制：** 不涉及。
    * syntaxType  **参数解释：** 语法类型。 **约束限制：** 不涉及。
    * revision  **参数解释：** 所在版本号（commit id）。 **约束限制：** 不涉及。
    * extend  **参数解释：** 其他信息。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'tagName' => 'getTagName',
            'filePath' => 'getFilePath',
            'blob' => 'getBlob',
            'lineImage' => 'getLineImage',
            'lineNumber' => 'getLineNumber',
            'syntaxType' => 'getSyntaxType',
            'revision' => 'getRevision',
            'extend' => 'getExtend'
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
        $this->container['tagName'] = isset($data['tagName']) ? $data['tagName'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['blob'] = isset($data['blob']) ? $data['blob'] : null;
        $this->container['lineImage'] = isset($data['lineImage']) ? $data['lineImage'] : null;
        $this->container['lineNumber'] = isset($data['lineNumber']) ? $data['lineNumber'] : null;
        $this->container['syntaxType'] = isset($data['syntaxType']) ? $data['syntaxType'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['extend'] = isset($data['extend']) ? $data['extend'] : null;
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
    * Gets tagName
    *  **参数解释：** 标记名称。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getTagName()
    {
        return $this->container['tagName'];
    }

    /**
    * Sets tagName
    *
    * @param string|null $tagName **参数解释：** 标记名称。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setTagName($tagName)
    {
        $this->container['tagName'] = $tagName;
        return $this;
    }

    /**
    * Gets filePath
    *  **参数解释：** 文件路径。 **约束限制：** 不涉及。
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
    * @param string|null $filePath **参数解释：** 文件路径。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets blob
    *  **参数解释：** blob文件ID。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getBlob()
    {
        return $this->container['blob'];
    }

    /**
    * Sets blob
    *
    * @param string|null $blob **参数解释：** blob文件ID。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setBlob($blob)
    {
        $this->container['blob'] = $blob;
        return $this;
    }

    /**
    * Gets lineImage
    *  **参数解释：** 索引行简要内容。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getLineImage()
    {
        return $this->container['lineImage'];
    }

    /**
    * Sets lineImage
    *
    * @param string|null $lineImage **参数解释：** 索引行简要内容。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setLineImage($lineImage)
    {
        $this->container['lineImage'] = $lineImage;
        return $this;
    }

    /**
    * Gets lineNumber
    *  **参数解释：** 行号。 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getLineNumber()
    {
        return $this->container['lineNumber'];
    }

    /**
    * Sets lineNumber
    *
    * @param int|null $lineNumber **参数解释：** 行号。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setLineNumber($lineNumber)
    {
        $this->container['lineNumber'] = $lineNumber;
        return $this;
    }

    /**
    * Gets syntaxType
    *  **参数解释：** 语法类型。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getSyntaxType()
    {
        return $this->container['syntaxType'];
    }

    /**
    * Sets syntaxType
    *
    * @param string|null $syntaxType **参数解释：** 语法类型。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setSyntaxType($syntaxType)
    {
        $this->container['syntaxType'] = $syntaxType;
        return $this;
    }

    /**
    * Gets revision
    *  **参数解释：** 所在版本号（commit id）。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
    * Sets revision
    *
    * @param string|null $revision **参数解释：** 所在版本号（commit id）。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;
        return $this;
    }

    /**
    * Gets extend
    *  **参数解释：** 其他信息。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getExtend()
    {
        return $this->container['extend'];
    }

    /**
    * Sets extend
    *
    * @param string|null $extend **参数解释：** 其他信息。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setExtend($extend)
    {
        $this->container['extend'] = $extend;
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

