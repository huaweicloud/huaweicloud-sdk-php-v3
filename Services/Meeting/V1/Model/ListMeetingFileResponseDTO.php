<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMeetingFileResponseDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMeetingFileResponseDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileCode  会议纪要文件码。
    * topic  文件主题。
    * fileId  文件Id。
    * fileName  文件名。
    * fileSize  文件大小，单位字节。
    * thumbnailFileId  缩略图文件Id。
    * thumbnailFileName  缩略图文件名。
    * thumbnailFileSize  缩略图文件大小，单位字节。
    * pdfFileId  pdf文件Id。
    * pdfFileName  pdf文件名。
    * pdfFileSize  pdf文件大小，单位字节。
    * userId  用户UUID。
    * creationTimestamp  文件创建时间戳。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileCode' => 'string',
            'topic' => 'string',
            'fileId' => 'string',
            'fileName' => 'string',
            'fileSize' => 'int',
            'thumbnailFileId' => 'string',
            'thumbnailFileName' => 'string',
            'thumbnailFileSize' => 'int',
            'pdfFileId' => 'string',
            'pdfFileName' => 'string',
            'pdfFileSize' => 'int',
            'userId' => 'string',
            'creationTimestamp' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileCode  会议纪要文件码。
    * topic  文件主题。
    * fileId  文件Id。
    * fileName  文件名。
    * fileSize  文件大小，单位字节。
    * thumbnailFileId  缩略图文件Id。
    * thumbnailFileName  缩略图文件名。
    * thumbnailFileSize  缩略图文件大小，单位字节。
    * pdfFileId  pdf文件Id。
    * pdfFileName  pdf文件名。
    * pdfFileSize  pdf文件大小，单位字节。
    * userId  用户UUID。
    * creationTimestamp  文件创建时间戳。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileCode' => null,
        'topic' => null,
        'fileId' => null,
        'fileName' => null,
        'fileSize' => 'int64',
        'thumbnailFileId' => null,
        'thumbnailFileName' => null,
        'thumbnailFileSize' => 'int64',
        'pdfFileId' => null,
        'pdfFileName' => null,
        'pdfFileSize' => 'int64',
        'userId' => null,
        'creationTimestamp' => 'int64'
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
    * fileCode  会议纪要文件码。
    * topic  文件主题。
    * fileId  文件Id。
    * fileName  文件名。
    * fileSize  文件大小，单位字节。
    * thumbnailFileId  缩略图文件Id。
    * thumbnailFileName  缩略图文件名。
    * thumbnailFileSize  缩略图文件大小，单位字节。
    * pdfFileId  pdf文件Id。
    * pdfFileName  pdf文件名。
    * pdfFileSize  pdf文件大小，单位字节。
    * userId  用户UUID。
    * creationTimestamp  文件创建时间戳。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileCode' => 'fileCode',
            'topic' => 'topic',
            'fileId' => 'fileId',
            'fileName' => 'fileName',
            'fileSize' => 'fileSize',
            'thumbnailFileId' => 'thumbnailFileId',
            'thumbnailFileName' => 'thumbnailFileName',
            'thumbnailFileSize' => 'thumbnailFileSize',
            'pdfFileId' => 'pdfFileId',
            'pdfFileName' => 'pdfFileName',
            'pdfFileSize' => 'pdfFileSize',
            'userId' => 'userId',
            'creationTimestamp' => 'creationTimestamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileCode  会议纪要文件码。
    * topic  文件主题。
    * fileId  文件Id。
    * fileName  文件名。
    * fileSize  文件大小，单位字节。
    * thumbnailFileId  缩略图文件Id。
    * thumbnailFileName  缩略图文件名。
    * thumbnailFileSize  缩略图文件大小，单位字节。
    * pdfFileId  pdf文件Id。
    * pdfFileName  pdf文件名。
    * pdfFileSize  pdf文件大小，单位字节。
    * userId  用户UUID。
    * creationTimestamp  文件创建时间戳。
    *
    * @var string[]
    */
    protected static $setters = [
            'fileCode' => 'setFileCode',
            'topic' => 'setTopic',
            'fileId' => 'setFileId',
            'fileName' => 'setFileName',
            'fileSize' => 'setFileSize',
            'thumbnailFileId' => 'setThumbnailFileId',
            'thumbnailFileName' => 'setThumbnailFileName',
            'thumbnailFileSize' => 'setThumbnailFileSize',
            'pdfFileId' => 'setPdfFileId',
            'pdfFileName' => 'setPdfFileName',
            'pdfFileSize' => 'setPdfFileSize',
            'userId' => 'setUserId',
            'creationTimestamp' => 'setCreationTimestamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileCode  会议纪要文件码。
    * topic  文件主题。
    * fileId  文件Id。
    * fileName  文件名。
    * fileSize  文件大小，单位字节。
    * thumbnailFileId  缩略图文件Id。
    * thumbnailFileName  缩略图文件名。
    * thumbnailFileSize  缩略图文件大小，单位字节。
    * pdfFileId  pdf文件Id。
    * pdfFileName  pdf文件名。
    * pdfFileSize  pdf文件大小，单位字节。
    * userId  用户UUID。
    * creationTimestamp  文件创建时间戳。
    *
    * @var string[]
    */
    protected static $getters = [
            'fileCode' => 'getFileCode',
            'topic' => 'getTopic',
            'fileId' => 'getFileId',
            'fileName' => 'getFileName',
            'fileSize' => 'getFileSize',
            'thumbnailFileId' => 'getThumbnailFileId',
            'thumbnailFileName' => 'getThumbnailFileName',
            'thumbnailFileSize' => 'getThumbnailFileSize',
            'pdfFileId' => 'getPdfFileId',
            'pdfFileName' => 'getPdfFileName',
            'pdfFileSize' => 'getPdfFileSize',
            'userId' => 'getUserId',
            'creationTimestamp' => 'getCreationTimestamp'
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
        $this->container['fileCode'] = isset($data['fileCode']) ? $data['fileCode'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['fileId'] = isset($data['fileId']) ? $data['fileId'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['thumbnailFileId'] = isset($data['thumbnailFileId']) ? $data['thumbnailFileId'] : null;
        $this->container['thumbnailFileName'] = isset($data['thumbnailFileName']) ? $data['thumbnailFileName'] : null;
        $this->container['thumbnailFileSize'] = isset($data['thumbnailFileSize']) ? $data['thumbnailFileSize'] : null;
        $this->container['pdfFileId'] = isset($data['pdfFileId']) ? $data['pdfFileId'] : null;
        $this->container['pdfFileName'] = isset($data['pdfFileName']) ? $data['pdfFileName'] : null;
        $this->container['pdfFileSize'] = isset($data['pdfFileSize']) ? $data['pdfFileSize'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['creationTimestamp'] = isset($data['creationTimestamp']) ? $data['creationTimestamp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['fileCode']) && (mb_strlen($this->container['fileCode']) > 32)) {
                $invalidProperties[] = "invalid value for 'fileCode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['fileCode']) && (mb_strlen($this->container['fileCode']) < 32)) {
                $invalidProperties[] = "invalid value for 'fileCode', the character length must be bigger than or equal to 32.";
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
    * Gets fileCode
    *  会议纪要文件码。
    *
    * @return string|null
    */
    public function getFileCode()
    {
        return $this->container['fileCode'];
    }

    /**
    * Sets fileCode
    *
    * @param string|null $fileCode 会议纪要文件码。
    *
    * @return $this
    */
    public function setFileCode($fileCode)
    {
        $this->container['fileCode'] = $fileCode;
        return $this;
    }

    /**
    * Gets topic
    *  文件主题。
    *
    * @return string|null
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string|null $topic 文件主题。
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets fileId
    *  文件Id。
    *
    * @return string|null
    */
    public function getFileId()
    {
        return $this->container['fileId'];
    }

    /**
    * Sets fileId
    *
    * @param string|null $fileId 文件Id。
    *
    * @return $this
    */
    public function setFileId($fileId)
    {
        $this->container['fileId'] = $fileId;
        return $this;
    }

    /**
    * Gets fileName
    *  文件名。
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
    * @param string|null $fileName 文件名。
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets fileSize
    *  文件大小，单位字节。
    *
    * @return int|null
    */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
    * Sets fileSize
    *
    * @param int|null $fileSize 文件大小，单位字节。
    *
    * @return $this
    */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;
        return $this;
    }

    /**
    * Gets thumbnailFileId
    *  缩略图文件Id。
    *
    * @return string|null
    */
    public function getThumbnailFileId()
    {
        return $this->container['thumbnailFileId'];
    }

    /**
    * Sets thumbnailFileId
    *
    * @param string|null $thumbnailFileId 缩略图文件Id。
    *
    * @return $this
    */
    public function setThumbnailFileId($thumbnailFileId)
    {
        $this->container['thumbnailFileId'] = $thumbnailFileId;
        return $this;
    }

    /**
    * Gets thumbnailFileName
    *  缩略图文件名。
    *
    * @return string|null
    */
    public function getThumbnailFileName()
    {
        return $this->container['thumbnailFileName'];
    }

    /**
    * Sets thumbnailFileName
    *
    * @param string|null $thumbnailFileName 缩略图文件名。
    *
    * @return $this
    */
    public function setThumbnailFileName($thumbnailFileName)
    {
        $this->container['thumbnailFileName'] = $thumbnailFileName;
        return $this;
    }

    /**
    * Gets thumbnailFileSize
    *  缩略图文件大小，单位字节。
    *
    * @return int|null
    */
    public function getThumbnailFileSize()
    {
        return $this->container['thumbnailFileSize'];
    }

    /**
    * Sets thumbnailFileSize
    *
    * @param int|null $thumbnailFileSize 缩略图文件大小，单位字节。
    *
    * @return $this
    */
    public function setThumbnailFileSize($thumbnailFileSize)
    {
        $this->container['thumbnailFileSize'] = $thumbnailFileSize;
        return $this;
    }

    /**
    * Gets pdfFileId
    *  pdf文件Id。
    *
    * @return string|null
    */
    public function getPdfFileId()
    {
        return $this->container['pdfFileId'];
    }

    /**
    * Sets pdfFileId
    *
    * @param string|null $pdfFileId pdf文件Id。
    *
    * @return $this
    */
    public function setPdfFileId($pdfFileId)
    {
        $this->container['pdfFileId'] = $pdfFileId;
        return $this;
    }

    /**
    * Gets pdfFileName
    *  pdf文件名。
    *
    * @return string|null
    */
    public function getPdfFileName()
    {
        return $this->container['pdfFileName'];
    }

    /**
    * Sets pdfFileName
    *
    * @param string|null $pdfFileName pdf文件名。
    *
    * @return $this
    */
    public function setPdfFileName($pdfFileName)
    {
        $this->container['pdfFileName'] = $pdfFileName;
        return $this;
    }

    /**
    * Gets pdfFileSize
    *  pdf文件大小，单位字节。
    *
    * @return int|null
    */
    public function getPdfFileSize()
    {
        return $this->container['pdfFileSize'];
    }

    /**
    * Sets pdfFileSize
    *
    * @param int|null $pdfFileSize pdf文件大小，单位字节。
    *
    * @return $this
    */
    public function setPdfFileSize($pdfFileSize)
    {
        $this->container['pdfFileSize'] = $pdfFileSize;
        return $this;
    }

    /**
    * Gets userId
    *  用户UUID。
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 用户UUID。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets creationTimestamp
    *  文件创建时间戳。
    *
    * @return int|null
    */
    public function getCreationTimestamp()
    {
        return $this->container['creationTimestamp'];
    }

    /**
    * Sets creationTimestamp
    *
    * @param int|null $creationTimestamp 文件创建时间戳。
    *
    * @return $this
    */
    public function setCreationTimestamp($creationTimestamp)
    {
        $this->container['creationTimestamp'] = $creationTimestamp;
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

