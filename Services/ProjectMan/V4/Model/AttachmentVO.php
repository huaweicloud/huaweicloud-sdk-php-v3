<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttachmentVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttachmentVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attachmentType  附件类型
    * createdBy  创建人信息
    * createdDate  创建时间
    * description  附件描述
    * diskDirectory  存储路径
    * filesize  文件大小
    * id  文件id
    * modifiedBy  更新人信息
    * storeFilename  文件名称
    * title  文件hash名称
    * workitemId  工作项id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attachmentType' => 'string',
            'createdBy' => 'object',
            'createdDate' => 'string',
            'description' => 'string',
            'diskDirectory' => 'string',
            'filesize' => 'string',
            'id' => 'string',
            'modifiedBy' => 'object',
            'storeFilename' => 'string',
            'title' => 'string',
            'workitemId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attachmentType  附件类型
    * createdBy  创建人信息
    * createdDate  创建时间
    * description  附件描述
    * diskDirectory  存储路径
    * filesize  文件大小
    * id  文件id
    * modifiedBy  更新人信息
    * storeFilename  文件名称
    * title  文件hash名称
    * workitemId  工作项id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attachmentType' => null,
        'createdBy' => null,
        'createdDate' => null,
        'description' => null,
        'diskDirectory' => null,
        'filesize' => null,
        'id' => null,
        'modifiedBy' => null,
        'storeFilename' => null,
        'title' => null,
        'workitemId' => null
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
    * attachmentType  附件类型
    * createdBy  创建人信息
    * createdDate  创建时间
    * description  附件描述
    * diskDirectory  存储路径
    * filesize  文件大小
    * id  文件id
    * modifiedBy  更新人信息
    * storeFilename  文件名称
    * title  文件hash名称
    * workitemId  工作项id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attachmentType' => 'attachment_type',
            'createdBy' => 'created_by',
            'createdDate' => 'created_date',
            'description' => 'description',
            'diskDirectory' => 'disk_directory',
            'filesize' => 'filesize',
            'id' => 'id',
            'modifiedBy' => 'modified_by',
            'storeFilename' => 'store_filename',
            'title' => 'title',
            'workitemId' => 'workitem_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attachmentType  附件类型
    * createdBy  创建人信息
    * createdDate  创建时间
    * description  附件描述
    * diskDirectory  存储路径
    * filesize  文件大小
    * id  文件id
    * modifiedBy  更新人信息
    * storeFilename  文件名称
    * title  文件hash名称
    * workitemId  工作项id
    *
    * @var string[]
    */
    protected static $setters = [
            'attachmentType' => 'setAttachmentType',
            'createdBy' => 'setCreatedBy',
            'createdDate' => 'setCreatedDate',
            'description' => 'setDescription',
            'diskDirectory' => 'setDiskDirectory',
            'filesize' => 'setFilesize',
            'id' => 'setId',
            'modifiedBy' => 'setModifiedBy',
            'storeFilename' => 'setStoreFilename',
            'title' => 'setTitle',
            'workitemId' => 'setWorkitemId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attachmentType  附件类型
    * createdBy  创建人信息
    * createdDate  创建时间
    * description  附件描述
    * diskDirectory  存储路径
    * filesize  文件大小
    * id  文件id
    * modifiedBy  更新人信息
    * storeFilename  文件名称
    * title  文件hash名称
    * workitemId  工作项id
    *
    * @var string[]
    */
    protected static $getters = [
            'attachmentType' => 'getAttachmentType',
            'createdBy' => 'getCreatedBy',
            'createdDate' => 'getCreatedDate',
            'description' => 'getDescription',
            'diskDirectory' => 'getDiskDirectory',
            'filesize' => 'getFilesize',
            'id' => 'getId',
            'modifiedBy' => 'getModifiedBy',
            'storeFilename' => 'getStoreFilename',
            'title' => 'getTitle',
            'workitemId' => 'getWorkitemId'
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
        $this->container['attachmentType'] = isset($data['attachmentType']) ? $data['attachmentType'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['diskDirectory'] = isset($data['diskDirectory']) ? $data['diskDirectory'] : null;
        $this->container['filesize'] = isset($data['filesize']) ? $data['filesize'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['storeFilename'] = isset($data['storeFilename']) ? $data['storeFilename'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['workitemId'] = isset($data['workitemId']) ? $data['workitemId'] : null;
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
    * Gets attachmentType
    *  附件类型
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
    * @param string|null $attachmentType 附件类型
    *
    * @return $this
    */
    public function setAttachmentType($attachmentType)
    {
        $this->container['attachmentType'] = $attachmentType;
        return $this;
    }

    /**
    * Gets createdBy
    *  创建人信息
    *
    * @return object|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param object|null $createdBy 创建人信息
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets createdDate
    *  创建时间
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
    * @param string|null $createdDate 创建时间
    *
    * @return $this
    */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;
        return $this;
    }

    /**
    * Gets description
    *  附件描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 附件描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets diskDirectory
    *  存储路径
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
    * @param string|null $diskDirectory 存储路径
    *
    * @return $this
    */
    public function setDiskDirectory($diskDirectory)
    {
        $this->container['diskDirectory'] = $diskDirectory;
        return $this;
    }

    /**
    * Gets filesize
    *  文件大小
    *
    * @return string|null
    */
    public function getFilesize()
    {
        return $this->container['filesize'];
    }

    /**
    * Sets filesize
    *
    * @param string|null $filesize 文件大小
    *
    * @return $this
    */
    public function setFilesize($filesize)
    {
        $this->container['filesize'] = $filesize;
        return $this;
    }

    /**
    * Gets id
    *  文件id
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
    * @param string|null $id 文件id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets modifiedBy
    *  更新人信息
    *
    * @return object|null
    */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
    * Sets modifiedBy
    *
    * @param object|null $modifiedBy 更新人信息
    *
    * @return $this
    */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;
        return $this;
    }

    /**
    * Gets storeFilename
    *  文件名称
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
    * @param string|null $storeFilename 文件名称
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
    *  文件hash名称
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
    * @param string|null $title 文件hash名称
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets workitemId
    *  工作项id
    *
    * @return string|null
    */
    public function getWorkitemId()
    {
        return $this->container['workitemId'];
    }

    /**
    * Sets workitemId
    *
    * @param string|null $workitemId 工作项id
    *
    * @return $this
    */
    public function setWorkitemId($workitemId)
    {
        $this->container['workitemId'] = $workitemId;
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

