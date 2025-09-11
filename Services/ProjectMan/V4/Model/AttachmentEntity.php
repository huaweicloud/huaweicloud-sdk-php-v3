<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttachmentEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttachmentEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  附件Id
    * issueId  附件所属工作项Id
    * diskDirectory  在服务器存储的相对路径
    * fileSize  附件大小，单位为Byte，单个附件最大为200MB
    * storeFilename  附件原名称
    * title  附件在数据库中存储的名称。格式为uuid+.扩展名
    * modifiedBy  modifiedBy
    * createdBy  createdBy
    * attachmentType  附件类型，即文件扩展名
    * createdDate  附件上传时间的时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'issueId' => 'string',
            'diskDirectory' => 'string',
            'fileSize' => 'string',
            'storeFilename' => 'string',
            'title' => 'string',
            'modifiedBy' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity',
            'createdBy' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity',
            'attachmentType' => 'string',
            'createdDate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  附件Id
    * issueId  附件所属工作项Id
    * diskDirectory  在服务器存储的相对路径
    * fileSize  附件大小，单位为Byte，单个附件最大为200MB
    * storeFilename  附件原名称
    * title  附件在数据库中存储的名称。格式为uuid+.扩展名
    * modifiedBy  modifiedBy
    * createdBy  createdBy
    * attachmentType  附件类型，即文件扩展名
    * createdDate  附件上传时间的时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'issueId' => null,
        'diskDirectory' => null,
        'fileSize' => null,
        'storeFilename' => null,
        'title' => null,
        'modifiedBy' => null,
        'createdBy' => null,
        'attachmentType' => null,
        'createdDate' => null
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
    * id  附件Id
    * issueId  附件所属工作项Id
    * diskDirectory  在服务器存储的相对路径
    * fileSize  附件大小，单位为Byte，单个附件最大为200MB
    * storeFilename  附件原名称
    * title  附件在数据库中存储的名称。格式为uuid+.扩展名
    * modifiedBy  modifiedBy
    * createdBy  createdBy
    * attachmentType  附件类型，即文件扩展名
    * createdDate  附件上传时间的时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'issueId' => 'issue_id',
            'diskDirectory' => 'disk_directory',
            'fileSize' => 'file_size',
            'storeFilename' => 'store_filename',
            'title' => 'title',
            'modifiedBy' => 'modified_by',
            'createdBy' => 'created_by',
            'attachmentType' => 'attachment_type',
            'createdDate' => 'created_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  附件Id
    * issueId  附件所属工作项Id
    * diskDirectory  在服务器存储的相对路径
    * fileSize  附件大小，单位为Byte，单个附件最大为200MB
    * storeFilename  附件原名称
    * title  附件在数据库中存储的名称。格式为uuid+.扩展名
    * modifiedBy  modifiedBy
    * createdBy  createdBy
    * attachmentType  附件类型，即文件扩展名
    * createdDate  附件上传时间的时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'issueId' => 'setIssueId',
            'diskDirectory' => 'setDiskDirectory',
            'fileSize' => 'setFileSize',
            'storeFilename' => 'setStoreFilename',
            'title' => 'setTitle',
            'modifiedBy' => 'setModifiedBy',
            'createdBy' => 'setCreatedBy',
            'attachmentType' => 'setAttachmentType',
            'createdDate' => 'setCreatedDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  附件Id
    * issueId  附件所属工作项Id
    * diskDirectory  在服务器存储的相对路径
    * fileSize  附件大小，单位为Byte，单个附件最大为200MB
    * storeFilename  附件原名称
    * title  附件在数据库中存储的名称。格式为uuid+.扩展名
    * modifiedBy  modifiedBy
    * createdBy  createdBy
    * attachmentType  附件类型，即文件扩展名
    * createdDate  附件上传时间的时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'issueId' => 'getIssueId',
            'diskDirectory' => 'getDiskDirectory',
            'fileSize' => 'getFileSize',
            'storeFilename' => 'getStoreFilename',
            'title' => 'getTitle',
            'modifiedBy' => 'getModifiedBy',
            'createdBy' => 'getCreatedBy',
            'attachmentType' => 'getAttachmentType',
            'createdDate' => 'getCreatedDate'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['diskDirectory'] = isset($data['diskDirectory']) ? $data['diskDirectory'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['storeFilename'] = isset($data['storeFilename']) ? $data['storeFilename'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['attachmentType'] = isset($data['attachmentType']) ? $data['attachmentType'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 19)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 18)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['issueId']) && (mb_strlen($this->container['issueId']) > 19)) {
                $invalidProperties[] = "invalid value for 'issueId', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['issueId']) && (mb_strlen($this->container['issueId']) < 18)) {
                $invalidProperties[] = "invalid value for 'issueId', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['diskDirectory']) && (mb_strlen($this->container['diskDirectory']) > 1024)) {
                $invalidProperties[] = "invalid value for 'diskDirectory', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['diskDirectory']) && (mb_strlen($this->container['diskDirectory']) < 0)) {
                $invalidProperties[] = "invalid value for 'diskDirectory', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileSize']) && (mb_strlen($this->container['fileSize']) > 16)) {
                $invalidProperties[] = "invalid value for 'fileSize', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['fileSize']) && (mb_strlen($this->container['fileSize']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileSize', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['storeFilename']) && (mb_strlen($this->container['storeFilename']) > 256)) {
                $invalidProperties[] = "invalid value for 'storeFilename', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['storeFilename']) && (mb_strlen($this->container['storeFilename']) < 2)) {
                $invalidProperties[] = "invalid value for 'storeFilename', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 64)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 32)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['attachmentType']) && (mb_strlen($this->container['attachmentType']) > 32)) {
                $invalidProperties[] = "invalid value for 'attachmentType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['attachmentType']) && (mb_strlen($this->container['attachmentType']) < 1)) {
                $invalidProperties[] = "invalid value for 'attachmentType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createdDate']) && (mb_strlen($this->container['createdDate']) > 14)) {
                $invalidProperties[] = "invalid value for 'createdDate', the character length must be smaller than or equal to 14.";
            }
            if (!is_null($this->container['createdDate']) && (mb_strlen($this->container['createdDate']) < 13)) {
                $invalidProperties[] = "invalid value for 'createdDate', the character length must be bigger than or equal to 13.";
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
    * Gets id
    *  附件Id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 附件Id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets issueId
    *  附件所属工作项Id
    *
    * @return string|null
    */
    public function getIssueId()
    {
        return $this->container['issueId'];
    }

    /**
    * Sets issueId
    *
    * @param string|null $issueId 附件所属工作项Id
    *
    * @return $this
    */
    public function setIssueId($issueId)
    {
        $this->container['issueId'] = $issueId;
        return $this;
    }

    /**
    * Gets diskDirectory
    *  在服务器存储的相对路径
    *
    * @return string|null
    */
    public function getDiskDirectory()
    {
        return $this->container['diskDirectory'];
    }

    /**
    * Sets diskDirectory
    *
    * @param string|null $diskDirectory 在服务器存储的相对路径
    *
    * @return $this
    */
    public function setDiskDirectory($diskDirectory)
    {
        $this->container['diskDirectory'] = $diskDirectory;
        return $this;
    }

    /**
    * Gets fileSize
    *  附件大小，单位为Byte，单个附件最大为200MB
    *
    * @return string|null
    */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
    * Sets fileSize
    *
    * @param string|null $fileSize 附件大小，单位为Byte，单个附件最大为200MB
    *
    * @return $this
    */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;
        return $this;
    }

    /**
    * Gets storeFilename
    *  附件原名称
    *
    * @return string|null
    */
    public function getStoreFilename()
    {
        return $this->container['storeFilename'];
    }

    /**
    * Sets storeFilename
    *
    * @param string|null $storeFilename 附件原名称
    *
    * @return $this
    */
    public function setStoreFilename($storeFilename)
    {
        $this->container['storeFilename'] = $storeFilename;
        return $this;
    }

    /**
    * Gets title
    *  附件在数据库中存储的名称。格式为uuid+.扩展名
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
    * @param string|null $title 附件在数据库中存储的名称。格式为uuid+.扩展名
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets modifiedBy
    *  modifiedBy
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null
    */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
    * Sets modifiedBy
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null $modifiedBy modifiedBy
    *
    * @return $this
    */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;
        return $this;
    }

    /**
    * Gets createdBy
    *  createdBy
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserEntity|null $createdBy createdBy
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets attachmentType
    *  附件类型，即文件扩展名
    *
    * @return string|null
    */
    public function getAttachmentType()
    {
        return $this->container['attachmentType'];
    }

    /**
    * Sets attachmentType
    *
    * @param string|null $attachmentType 附件类型，即文件扩展名
    *
    * @return $this
    */
    public function setAttachmentType($attachmentType)
    {
        $this->container['attachmentType'] = $attachmentType;
        return $this;
    }

    /**
    * Gets createdDate
    *  附件上传时间的时间戳
    *
    * @return string|null
    */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
    * Sets createdDate
    *
    * @param string|null $createdDate 附件上传时间的时间戳
    *
    * @return $this
    */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;
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

