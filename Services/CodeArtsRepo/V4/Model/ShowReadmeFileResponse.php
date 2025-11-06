<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowReadmeFileResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowReadmeFileResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * blobId  **参数解释：** blob文件ID。 **约束限制：** 不涉及。
    * content  **参数解释：** 经过base64编码后的文件内容。 **约束限制：** 不涉及。
    * encoding  **参数解释：** 文件编码方式。 **约束限制：** - base64。
    * fileName  文件名称
    * filePath  文件路径
    * fileType  文件类型
    * size  **参数解释：** 文件字节大小。 **约束限制：** 不涉及。
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'blobId' => 'string',
            'content' => 'string',
            'encoding' => 'object',
            'fileName' => 'string',
            'filePath' => 'string',
            'fileType' => 'string',
            'size' => 'int',
            'xTotal' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * blobId  **参数解释：** blob文件ID。 **约束限制：** 不涉及。
    * content  **参数解释：** 经过base64编码后的文件内容。 **约束限制：** 不涉及。
    * encoding  **参数解释：** 文件编码方式。 **约束限制：** - base64。
    * fileName  文件名称
    * filePath  文件路径
    * fileType  文件类型
    * size  **参数解释：** 文件字节大小。 **约束限制：** 不涉及。
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'blobId' => null,
        'content' => null,
        'encoding' => null,
        'fileName' => null,
        'filePath' => null,
        'fileType' => null,
        'size' => 'int64',
        'xTotal' => null
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
    * blobId  **参数解释：** blob文件ID。 **约束限制：** 不涉及。
    * content  **参数解释：** 经过base64编码后的文件内容。 **约束限制：** 不涉及。
    * encoding  **参数解释：** 文件编码方式。 **约束限制：** - base64。
    * fileName  文件名称
    * filePath  文件路径
    * fileType  文件类型
    * size  **参数解释：** 文件字节大小。 **约束限制：** 不涉及。
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'blobId' => 'blob_id',
            'content' => 'content',
            'encoding' => 'encoding',
            'fileName' => 'file_name',
            'filePath' => 'file_path',
            'fileType' => 'file_type',
            'size' => 'size',
            'xTotal' => 'X-Total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * blobId  **参数解释：** blob文件ID。 **约束限制：** 不涉及。
    * content  **参数解释：** 经过base64编码后的文件内容。 **约束限制：** 不涉及。
    * encoding  **参数解释：** 文件编码方式。 **约束限制：** - base64。
    * fileName  文件名称
    * filePath  文件路径
    * fileType  文件类型
    * size  **参数解释：** 文件字节大小。 **约束限制：** 不涉及。
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $setters = [
            'blobId' => 'setBlobId',
            'content' => 'setContent',
            'encoding' => 'setEncoding',
            'fileName' => 'setFileName',
            'filePath' => 'setFilePath',
            'fileType' => 'setFileType',
            'size' => 'setSize',
            'xTotal' => 'setXTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * blobId  **参数解释：** blob文件ID。 **约束限制：** 不涉及。
    * content  **参数解释：** 经过base64编码后的文件内容。 **约束限制：** 不涉及。
    * encoding  **参数解释：** 文件编码方式。 **约束限制：** - base64。
    * fileName  文件名称
    * filePath  文件路径
    * fileType  文件类型
    * size  **参数解释：** 文件字节大小。 **约束限制：** 不涉及。
    * xTotal  xTotal
    *
    * @var string[]
    */
    protected static $getters = [
            'blobId' => 'getBlobId',
            'content' => 'getContent',
            'encoding' => 'getEncoding',
            'fileName' => 'getFileName',
            'filePath' => 'getFilePath',
            'fileType' => 'getFileType',
            'size' => 'getSize',
            'xTotal' => 'getXTotal'
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
        $this->container['blobId'] = isset($data['blobId']) ? $data['blobId'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['xTotal'] = isset($data['xTotal']) ? $data['xTotal'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 10000)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['filePath']) && (mb_strlen($this->container['filePath']) > 10000)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['filePath']) && (mb_strlen($this->container['filePath']) < 1)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) > 1000)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be bigger than or equal to 1.";
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
    * Gets blobId
    *  **参数解释：** blob文件ID。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getBlobId()
    {
        return $this->container['blobId'];
    }

    /**
    * Sets blobId
    *
    * @param string|null $blobId **参数解释：** blob文件ID。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setBlobId($blobId)
    {
        $this->container['blobId'] = $blobId;
        return $this;
    }

    /**
    * Gets content
    *  **参数解释：** 经过base64编码后的文件内容。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content **参数解释：** 经过base64编码后的文件内容。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets encoding
    *  **参数解释：** 文件编码方式。 **约束限制：** - base64。
    *
    * @return object|null
    */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
    * Sets encoding
    *
    * @param object|null $encoding **参数解释：** 文件编码方式。 **约束限制：** - base64。
    *
    * @return $this
    */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;
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
    *  文件类型
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
    * @param string|null $fileType 文件类型
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets size
    *  **参数解释：** 文件字节大小。 **约束限制：** 不涉及。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size **参数解释：** 文件字节大小。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets xTotal
    *  xTotal
    *
    * @return string|null
    */
    public function getXTotal()
    {
        return $this->container['xTotal'];
    }

    /**
    * Sets xTotal
    *
    * @param string|null $xTotal xTotal
    *
    * @return $this
    */
    public function setXTotal($xTotal)
    {
        $this->container['xTotal'] = $xTotal;
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

