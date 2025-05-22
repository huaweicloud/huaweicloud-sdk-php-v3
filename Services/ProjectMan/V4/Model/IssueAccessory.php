<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssueAccessory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssueAccessory';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attachmentId  附件id
    * issueId  工作鞋ID
    * creatorNumId  创建者数字ID
    * createdDate  附件创建时间
    * fileName  上传时文件名
    * containerType  附件id
    * diskFileName  附件名称
    * digest  附件id
    * diskDirectory  附件路径
    * creatorId  创建这用户uuid
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attachmentId' => 'int',
            'issueId' => 'int',
            'creatorNumId' => 'int',
            'createdDate' => 'string',
            'fileName' => 'string',
            'containerType' => 'string',
            'diskFileName' => 'string',
            'digest' => 'string',
            'diskDirectory' => 'string',
            'creatorId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attachmentId  附件id
    * issueId  工作鞋ID
    * creatorNumId  创建者数字ID
    * createdDate  附件创建时间
    * fileName  上传时文件名
    * containerType  附件id
    * diskFileName  附件名称
    * digest  附件id
    * diskDirectory  附件路径
    * creatorId  创建这用户uuid
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attachmentId' => 'int32',
        'issueId' => 'int32',
        'creatorNumId' => 'int32',
        'createdDate' => null,
        'fileName' => null,
        'containerType' => null,
        'diskFileName' => null,
        'digest' => null,
        'diskDirectory' => null,
        'creatorId' => null
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
    * attachmentId  附件id
    * issueId  工作鞋ID
    * creatorNumId  创建者数字ID
    * createdDate  附件创建时间
    * fileName  上传时文件名
    * containerType  附件id
    * diskFileName  附件名称
    * digest  附件id
    * diskDirectory  附件路径
    * creatorId  创建这用户uuid
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attachmentId' => 'attachment_id',
            'issueId' => 'issue_id',
            'creatorNumId' => 'creator_num_id',
            'createdDate' => 'created_date',
            'fileName' => 'file_name',
            'containerType' => 'container_type',
            'diskFileName' => 'disk_file_name',
            'digest' => 'digest',
            'diskDirectory' => 'disk_directory',
            'creatorId' => 'creator_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attachmentId  附件id
    * issueId  工作鞋ID
    * creatorNumId  创建者数字ID
    * createdDate  附件创建时间
    * fileName  上传时文件名
    * containerType  附件id
    * diskFileName  附件名称
    * digest  附件id
    * diskDirectory  附件路径
    * creatorId  创建这用户uuid
    *
    * @var string[]
    */
    protected static $setters = [
            'attachmentId' => 'setAttachmentId',
            'issueId' => 'setIssueId',
            'creatorNumId' => 'setCreatorNumId',
            'createdDate' => 'setCreatedDate',
            'fileName' => 'setFileName',
            'containerType' => 'setContainerType',
            'diskFileName' => 'setDiskFileName',
            'digest' => 'setDigest',
            'diskDirectory' => 'setDiskDirectory',
            'creatorId' => 'setCreatorId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attachmentId  附件id
    * issueId  工作鞋ID
    * creatorNumId  创建者数字ID
    * createdDate  附件创建时间
    * fileName  上传时文件名
    * containerType  附件id
    * diskFileName  附件名称
    * digest  附件id
    * diskDirectory  附件路径
    * creatorId  创建这用户uuid
    *
    * @var string[]
    */
    protected static $getters = [
            'attachmentId' => 'getAttachmentId',
            'issueId' => 'getIssueId',
            'creatorNumId' => 'getCreatorNumId',
            'createdDate' => 'getCreatedDate',
            'fileName' => 'getFileName',
            'containerType' => 'getContainerType',
            'diskFileName' => 'getDiskFileName',
            'digest' => 'getDigest',
            'diskDirectory' => 'getDiskDirectory',
            'creatorId' => 'getCreatorId'
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
        $this->container['attachmentId'] = isset($data['attachmentId']) ? $data['attachmentId'] : null;
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['creatorNumId'] = isset($data['creatorNumId']) ? $data['creatorNumId'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['containerType'] = isset($data['containerType']) ? $data['containerType'] : null;
        $this->container['diskFileName'] = isset($data['diskFileName']) ? $data['diskFileName'] : null;
        $this->container['digest'] = isset($data['digest']) ? $data['digest'] : null;
        $this->container['diskDirectory'] = isset($data['diskDirectory']) ? $data['diskDirectory'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
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
    * Gets attachmentId
    *  附件id
    *
    * @return int|null
    */
    public function getAttachmentId()
    {
        return $this->container['attachmentId'];
    }

    /**
    * Sets attachmentId
    *
    * @param int|null $attachmentId 附件id
    *
    * @return $this
    */
    public function setAttachmentId($attachmentId)
    {
        $this->container['attachmentId'] = $attachmentId;
        return $this;
    }

    /**
    * Gets issueId
    *  工作鞋ID
    *
    * @return int|null
    */
    public function getIssueId()
    {
        return $this->container['issueId'];
    }

    /**
    * Sets issueId
    *
    * @param int|null $issueId 工作鞋ID
    *
    * @return $this
    */
    public function setIssueId($issueId)
    {
        $this->container['issueId'] = $issueId;
        return $this;
    }

    /**
    * Gets creatorNumId
    *  创建者数字ID
    *
    * @return int|null
    */
    public function getCreatorNumId()
    {
        return $this->container['creatorNumId'];
    }

    /**
    * Sets creatorNumId
    *
    * @param int|null $creatorNumId 创建者数字ID
    *
    * @return $this
    */
    public function setCreatorNumId($creatorNumId)
    {
        $this->container['creatorNumId'] = $creatorNumId;
        return $this;
    }

    /**
    * Gets createdDate
    *  附件创建时间
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
    * @param string|null $createdDate 附件创建时间
    *
    * @return $this
    */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;
        return $this;
    }

    /**
    * Gets fileName
    *  上传时文件名
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
    * @param string|null $fileName 上传时文件名
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets containerType
    *  附件id
    *
    * @return string|null
    */
    public function getContainerType()
    {
        return $this->container['containerType'];
    }

    /**
    * Sets containerType
    *
    * @param string|null $containerType 附件id
    *
    * @return $this
    */
    public function setContainerType($containerType)
    {
        $this->container['containerType'] = $containerType;
        return $this;
    }

    /**
    * Gets diskFileName
    *  附件名称
    *
    * @return string|null
    */
    public function getDiskFileName()
    {
        return $this->container['diskFileName'];
    }

    /**
    * Sets diskFileName
    *
    * @param string|null $diskFileName 附件名称
    *
    * @return $this
    */
    public function setDiskFileName($diskFileName)
    {
        $this->container['diskFileName'] = $diskFileName;
        return $this;
    }

    /**
    * Gets digest
    *  附件id
    *
    * @return string|null
    */
    public function getDigest()
    {
        return $this->container['digest'];
    }

    /**
    * Sets digest
    *
    * @param string|null $digest 附件id
    *
    * @return $this
    */
    public function setDigest($digest)
    {
        $this->container['digest'] = $digest;
        return $this;
    }

    /**
    * Gets diskDirectory
    *  附件路径
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
    * @param string|null $diskDirectory 附件路径
    *
    * @return $this
    */
    public function setDiskDirectory($diskDirectory)
    {
        $this->container['diskDirectory'] = $diskDirectory;
        return $this;
    }

    /**
    * Gets creatorId
    *  创建这用户uuid
    *
    * @return string|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string|null $creatorId 创建这用户uuid
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
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

