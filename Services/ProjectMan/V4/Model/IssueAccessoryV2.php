<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IssueAccessoryV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IssueAccessoryV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attachmentId  **参数解释：** 附件id。 **取值范围：** 不涉及。
    * issueId  **参数解释：** 工作项数字id。 **取值范围：** 不涉及。
    * creatorNumId  **参数解释：** 附件的上传者数字ID。 **取值范围：** 不涉及。
    * createdDate  **参数解释：** 附件创建时间（示例：2025-08-04 19:43:46）。 **取值范围：** 不涉及。
    * fileName  **参数解释：** 附件名称。 **取值范围：** 不涉及。
    * containerType  **参数解释：** 附件所属类型。 **取值范围：** scrum。
    * diskFileName  **参数解释：** 附件在服务器上实际名称。 **取值范围：** 不涉及。
    * digest  **参数解释：** 附件来源。 **取值范围：** 1：工作项本地上传的文档；2：关联的文档。
    * diskDirectory  **参数解释：** 附件在服务器上的路径。 **取值范围：** 不涉及。
    * creatorId  **参数解释：** 附件的上传者uuid。 **取值范围：** 不涉及。
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
    * attachmentId  **参数解释：** 附件id。 **取值范围：** 不涉及。
    * issueId  **参数解释：** 工作项数字id。 **取值范围：** 不涉及。
    * creatorNumId  **参数解释：** 附件的上传者数字ID。 **取值范围：** 不涉及。
    * createdDate  **参数解释：** 附件创建时间（示例：2025-08-04 19:43:46）。 **取值范围：** 不涉及。
    * fileName  **参数解释：** 附件名称。 **取值范围：** 不涉及。
    * containerType  **参数解释：** 附件所属类型。 **取值范围：** scrum。
    * diskFileName  **参数解释：** 附件在服务器上实际名称。 **取值范围：** 不涉及。
    * digest  **参数解释：** 附件来源。 **取值范围：** 1：工作项本地上传的文档；2：关联的文档。
    * diskDirectory  **参数解释：** 附件在服务器上的路径。 **取值范围：** 不涉及。
    * creatorId  **参数解释：** 附件的上传者uuid。 **取值范围：** 不涉及。
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
    * attachmentId  **参数解释：** 附件id。 **取值范围：** 不涉及。
    * issueId  **参数解释：** 工作项数字id。 **取值范围：** 不涉及。
    * creatorNumId  **参数解释：** 附件的上传者数字ID。 **取值范围：** 不涉及。
    * createdDate  **参数解释：** 附件创建时间（示例：2025-08-04 19:43:46）。 **取值范围：** 不涉及。
    * fileName  **参数解释：** 附件名称。 **取值范围：** 不涉及。
    * containerType  **参数解释：** 附件所属类型。 **取值范围：** scrum。
    * diskFileName  **参数解释：** 附件在服务器上实际名称。 **取值范围：** 不涉及。
    * digest  **参数解释：** 附件来源。 **取值范围：** 1：工作项本地上传的文档；2：关联的文档。
    * diskDirectory  **参数解释：** 附件在服务器上的路径。 **取值范围：** 不涉及。
    * creatorId  **参数解释：** 附件的上传者uuid。 **取值范围：** 不涉及。
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
    * attachmentId  **参数解释：** 附件id。 **取值范围：** 不涉及。
    * issueId  **参数解释：** 工作项数字id。 **取值范围：** 不涉及。
    * creatorNumId  **参数解释：** 附件的上传者数字ID。 **取值范围：** 不涉及。
    * createdDate  **参数解释：** 附件创建时间（示例：2025-08-04 19:43:46）。 **取值范围：** 不涉及。
    * fileName  **参数解释：** 附件名称。 **取值范围：** 不涉及。
    * containerType  **参数解释：** 附件所属类型。 **取值范围：** scrum。
    * diskFileName  **参数解释：** 附件在服务器上实际名称。 **取值范围：** 不涉及。
    * digest  **参数解释：** 附件来源。 **取值范围：** 1：工作项本地上传的文档；2：关联的文档。
    * diskDirectory  **参数解释：** 附件在服务器上的路径。 **取值范围：** 不涉及。
    * creatorId  **参数解释：** 附件的上传者uuid。 **取值范围：** 不涉及。
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
    * attachmentId  **参数解释：** 附件id。 **取值范围：** 不涉及。
    * issueId  **参数解释：** 工作项数字id。 **取值范围：** 不涉及。
    * creatorNumId  **参数解释：** 附件的上传者数字ID。 **取值范围：** 不涉及。
    * createdDate  **参数解释：** 附件创建时间（示例：2025-08-04 19:43:46）。 **取值范围：** 不涉及。
    * fileName  **参数解释：** 附件名称。 **取值范围：** 不涉及。
    * containerType  **参数解释：** 附件所属类型。 **取值范围：** scrum。
    * diskFileName  **参数解释：** 附件在服务器上实际名称。 **取值范围：** 不涉及。
    * digest  **参数解释：** 附件来源。 **取值范围：** 1：工作项本地上传的文档；2：关联的文档。
    * diskDirectory  **参数解释：** 附件在服务器上的路径。 **取值范围：** 不涉及。
    * creatorId  **参数解释：** 附件的上传者uuid。 **取值范围：** 不涉及。
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
            if (!is_null($this->container['attachmentId']) && ($this->container['attachmentId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'attachmentId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['attachmentId']) && ($this->container['attachmentId'] < 0)) {
                $invalidProperties[] = "invalid value for 'attachmentId', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['issueId']) && ($this->container['issueId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'issueId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['issueId']) && ($this->container['issueId'] < 0)) {
                $invalidProperties[] = "invalid value for 'issueId', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creatorNumId']) && ($this->container['creatorNumId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'creatorNumId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['creatorNumId']) && ($this->container['creatorNumId'] < 0)) {
                $invalidProperties[] = "invalid value for 'creatorNumId', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createdDate']) && (mb_strlen($this->container['createdDate']) > 32)) {
                $invalidProperties[] = "invalid value for 'createdDate', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['createdDate']) && (mb_strlen($this->container['createdDate']) < 0)) {
                $invalidProperties[] = "invalid value for 'createdDate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 256)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 2)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['containerType']) && (mb_strlen($this->container['containerType']) > 11)) {
                $invalidProperties[] = "invalid value for 'containerType', the character length must be smaller than or equal to 11.";
            }
            if (!is_null($this->container['containerType']) && (mb_strlen($this->container['containerType']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['diskFileName']) && (mb_strlen($this->container['diskFileName']) > 256)) {
                $invalidProperties[] = "invalid value for 'diskFileName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['diskFileName']) && (mb_strlen($this->container['diskFileName']) < 2)) {
                $invalidProperties[] = "invalid value for 'diskFileName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['digest']) && (mb_strlen($this->container['digest']) > 11)) {
                $invalidProperties[] = "invalid value for 'digest', the character length must be smaller than or equal to 11.";
            }
            if (!is_null($this->container['digest']) && (mb_strlen($this->container['digest']) < 1)) {
                $invalidProperties[] = "invalid value for 'digest', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['diskDirectory']) && (mb_strlen($this->container['diskDirectory']) > 1024)) {
                $invalidProperties[] = "invalid value for 'diskDirectory', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['diskDirectory']) && (mb_strlen($this->container['diskDirectory']) < 0)) {
                $invalidProperties[] = "invalid value for 'diskDirectory', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) > 32)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) < 32)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be bigger than or equal to 32.";
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
    * Gets attachmentId
    *  **参数解释：** 附件id。 **取值范围：** 不涉及。
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
    * @param int|null $attachmentId **参数解释：** 附件id。 **取值范围：** 不涉及。
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
    *  **参数解释：** 工作项数字id。 **取值范围：** 不涉及。
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
    * @param int|null $issueId **参数解释：** 工作项数字id。 **取值范围：** 不涉及。
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
    *  **参数解释：** 附件的上传者数字ID。 **取值范围：** 不涉及。
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
    * @param int|null $creatorNumId **参数解释：** 附件的上传者数字ID。 **取值范围：** 不涉及。
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
    *  **参数解释：** 附件创建时间（示例：2025-08-04 19:43:46）。 **取值范围：** 不涉及。
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
    * @param string|null $createdDate **参数解释：** 附件创建时间（示例：2025-08-04 19:43:46）。 **取值范围：** 不涉及。
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
    *  **参数解释：** 附件名称。 **取值范围：** 不涉及。
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
    * @param string|null $fileName **参数解释：** 附件名称。 **取值范围：** 不涉及。
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
    *  **参数解释：** 附件所属类型。 **取值范围：** scrum。
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
    * @param string|null $containerType **参数解释：** 附件所属类型。 **取值范围：** scrum。
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
    *  **参数解释：** 附件在服务器上实际名称。 **取值范围：** 不涉及。
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
    * @param string|null $diskFileName **参数解释：** 附件在服务器上实际名称。 **取值范围：** 不涉及。
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
    *  **参数解释：** 附件来源。 **取值范围：** 1：工作项本地上传的文档；2：关联的文档。
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
    * @param string|null $digest **参数解释：** 附件来源。 **取值范围：** 1：工作项本地上传的文档；2：关联的文档。
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
    *  **参数解释：** 附件在服务器上的路径。 **取值范围：** 不涉及。
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
    * @param string|null $diskDirectory **参数解释：** 附件在服务器上的路径。 **取值范围：** 不涉及。
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
    *  **参数解释：** 附件的上传者uuid。 **取值范围：** 不涉及。
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
    * @param string|null $creatorId **参数解释：** 附件的上传者uuid。 **取值范围：** 不涉及。
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

