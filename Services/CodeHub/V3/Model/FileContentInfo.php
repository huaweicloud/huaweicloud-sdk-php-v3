<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FileContentInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FileContentInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileName  文件名
    * filePath  文件路径
    * size  文件大小
    * encoding  文件编码
    * contentSha256  sha256编码的文件内容
    * ref  分支名
    * blobId  blob sha
    * commitId  提交对应的SHA id
    * lastCommitId  最后一个提交对应的SHA id
    * content  base64编码的文件内容
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileName' => 'string',
            'filePath' => 'string',
            'size' => 'int',
            'encoding' => 'string',
            'contentSha256' => 'string',
            'ref' => 'string',
            'blobId' => 'string',
            'commitId' => 'string',
            'lastCommitId' => 'string',
            'content' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileName  文件名
    * filePath  文件路径
    * size  文件大小
    * encoding  文件编码
    * contentSha256  sha256编码的文件内容
    * ref  分支名
    * blobId  blob sha
    * commitId  提交对应的SHA id
    * lastCommitId  最后一个提交对应的SHA id
    * content  base64编码的文件内容
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileName' => null,
        'filePath' => null,
        'size' => 'int32',
        'encoding' => null,
        'contentSha256' => null,
        'ref' => null,
        'blobId' => null,
        'commitId' => null,
        'lastCommitId' => null,
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
    * fileName  文件名
    * filePath  文件路径
    * size  文件大小
    * encoding  文件编码
    * contentSha256  sha256编码的文件内容
    * ref  分支名
    * blobId  blob sha
    * commitId  提交对应的SHA id
    * lastCommitId  最后一个提交对应的SHA id
    * content  base64编码的文件内容
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileName' => 'file_name',
            'filePath' => 'file_path',
            'size' => 'size',
            'encoding' => 'encoding',
            'contentSha256' => 'content_sha256',
            'ref' => 'ref',
            'blobId' => 'blob_id',
            'commitId' => 'commit_id',
            'lastCommitId' => 'last_commit_id',
            'content' => 'content'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileName  文件名
    * filePath  文件路径
    * size  文件大小
    * encoding  文件编码
    * contentSha256  sha256编码的文件内容
    * ref  分支名
    * blobId  blob sha
    * commitId  提交对应的SHA id
    * lastCommitId  最后一个提交对应的SHA id
    * content  base64编码的文件内容
    *
    * @var string[]
    */
    protected static $setters = [
            'fileName' => 'setFileName',
            'filePath' => 'setFilePath',
            'size' => 'setSize',
            'encoding' => 'setEncoding',
            'contentSha256' => 'setContentSha256',
            'ref' => 'setRef',
            'blobId' => 'setBlobId',
            'commitId' => 'setCommitId',
            'lastCommitId' => 'setLastCommitId',
            'content' => 'setContent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileName  文件名
    * filePath  文件路径
    * size  文件大小
    * encoding  文件编码
    * contentSha256  sha256编码的文件内容
    * ref  分支名
    * blobId  blob sha
    * commitId  提交对应的SHA id
    * lastCommitId  最后一个提交对应的SHA id
    * content  base64编码的文件内容
    *
    * @var string[]
    */
    protected static $getters = [
            'fileName' => 'getFileName',
            'filePath' => 'getFilePath',
            'size' => 'getSize',
            'encoding' => 'getEncoding',
            'contentSha256' => 'getContentSha256',
            'ref' => 'getRef',
            'blobId' => 'getBlobId',
            'commitId' => 'getCommitId',
            'lastCommitId' => 'getLastCommitId',
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
        $this->container['contentSha256'] = isset($data['contentSha256']) ? $data['contentSha256'] : null;
        $this->container['ref'] = isset($data['ref']) ? $data['ref'] : null;
        $this->container['blobId'] = isset($data['blobId']) ? $data['blobId'] : null;
        $this->container['commitId'] = isset($data['commitId']) ? $data['commitId'] : null;
        $this->container['lastCommitId'] = isset($data['lastCommitId']) ? $data['lastCommitId'] : null;
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
    *  文件名
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
    * @param string|null $fileName 文件名
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
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 文件大小
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
    *  文件编码
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
    * @param string|null $encoding 文件编码
    *
    * @return $this
    */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;
        return $this;
    }

    /**
    * Gets contentSha256
    *  sha256编码的文件内容
    *
    * @return string|null
    */
    public function getContentSha256()
    {
        return $this->container['contentSha256'];
    }

    /**
    * Sets contentSha256
    *
    * @param string|null $contentSha256 sha256编码的文件内容
    *
    * @return $this
    */
    public function setContentSha256($contentSha256)
    {
        $this->container['contentSha256'] = $contentSha256;
        return $this;
    }

    /**
    * Gets ref
    *  分支名
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
    * @param string|null $ref 分支名
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
    *  blob sha
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
    * @param string|null $blobId blob sha
    *
    * @return $this
    */
    public function setBlobId($blobId)
    {
        $this->container['blobId'] = $blobId;
        return $this;
    }

    /**
    * Gets commitId
    *  提交对应的SHA id
    *
    * @return string|null
    */
    public function getCommitId()
    {
        return $this->container['commitId'];
    }

    /**
    * Sets commitId
    *
    * @param string|null $commitId 提交对应的SHA id
    *
    * @return $this
    */
    public function setCommitId($commitId)
    {
        $this->container['commitId'] = $commitId;
        return $this;
    }

    /**
    * Gets lastCommitId
    *  最后一个提交对应的SHA id
    *
    * @return string|null
    */
    public function getLastCommitId()
    {
        return $this->container['lastCommitId'];
    }

    /**
    * Sets lastCommitId
    *
    * @param string|null $lastCommitId 最后一个提交对应的SHA id
    *
    * @return $this
    */
    public function setLastCommitId($lastCommitId)
    {
        $this->container['lastCommitId'] = $lastCommitId;
        return $this;
    }

    /**
    * Gets content
    *  base64编码的文件内容
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
    * @param string|null $content base64编码的文件内容
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

