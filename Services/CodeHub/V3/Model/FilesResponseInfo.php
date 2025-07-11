<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FilesResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FilesResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileName  文件名称
    * filePath  文件路径
    * size  文件大小
    * encoding  编码类型
    * ref  分支名称
    * blobId  文件块id
    * fileType  文件类型
    * content  文件内容
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileName' => 'string',
            'filePath' => 'string',
            'size' => 'string',
            'encoding' => 'string',
            'ref' => 'string',
            'blobId' => 'string',
            'fileType' => 'string',
            'content' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileName  文件名称
    * filePath  文件路径
    * size  文件大小
    * encoding  编码类型
    * ref  分支名称
    * blobId  文件块id
    * fileType  文件类型
    * content  文件内容
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileName' => null,
        'filePath' => null,
        'size' => null,
        'encoding' => null,
        'ref' => null,
        'blobId' => null,
        'fileType' => null,
        'content' => null
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
    * fileName  文件名称
    * filePath  文件路径
    * size  文件大小
    * encoding  编码类型
    * ref  分支名称
    * blobId  文件块id
    * fileType  文件类型
    * content  文件内容
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileName' => 'file_name',
            'filePath' => 'file_path',
            'size' => 'size',
            'encoding' => 'encoding',
            'ref' => 'ref',
            'blobId' => 'blob_id',
            'fileType' => 'file_type',
            'content' => 'content'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileName  文件名称
    * filePath  文件路径
    * size  文件大小
    * encoding  编码类型
    * ref  分支名称
    * blobId  文件块id
    * fileType  文件类型
    * content  文件内容
    *
    * @var string[]
    */
    protected static $setters = [
            'fileName' => 'setFileName',
            'filePath' => 'setFilePath',
            'size' => 'setSize',
            'encoding' => 'setEncoding',
            'ref' => 'setRef',
            'blobId' => 'setBlobId',
            'fileType' => 'setFileType',
            'content' => 'setContent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileName  文件名称
    * filePath  文件路径
    * size  文件大小
    * encoding  编码类型
    * ref  分支名称
    * blobId  文件块id
    * fileType  文件类型
    * content  文件内容
    *
    * @var string[]
    */
    protected static $getters = [
            'fileName' => 'getFileName',
            'filePath' => 'getFilePath',
            'size' => 'getSize',
            'encoding' => 'getEncoding',
            'ref' => 'getRef',
            'blobId' => 'getBlobId',
            'fileType' => 'getFileType',
            'content' => 'getContent'
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
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
        $this->container['ref'] = isset($data['ref']) ? $data['ref'] : null;
        $this->container['blobId'] = isset($data['blobId']) ? $data['blobId'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
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
    * Gets size
    *  文件大小
    *
    * @return string|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param string|null $size 文件大小
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets encoding
    *  编码类型
    *
    * @return string|null
    */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
    * Sets encoding
    *
    * @param string|null $encoding 编码类型
    *
    * @return $this
    */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;
        return $this;
    }

    /**
    * Gets ref
    *  分支名称
    *
    * @return string|null
    */
    public function getRef()
    {
        return $this->container['ref'];
    }

    /**
    * Sets ref
    *
    * @param string|null $ref 分支名称
    *
    * @return $this
    */
    public function setRef($ref)
    {
        $this->container['ref'] = $ref;
        return $this;
    }

    /**
    * Gets blobId
    *  文件块id
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
    * @param string|null $blobId 文件块id
    *
    * @return $this
    */
    public function setBlobId($blobId)
    {
        $this->container['blobId'] = $blobId;
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
    * Gets content
    *  文件内容
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
    * @param string|null $content 文件内容
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
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

