<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttachmentInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttachmentInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  附件id
    * fileName  附件名称
    * fileFolder  文件夹.
    * workspaceId  当前的工作空间id
    * creatorId  创建者ID
    * creatorName  创建者名称
    * createTime  创建时间
    * updateTime  更新时间
    * modifierId  修改者ID
    * modifierName  修改者名称
    * isDeleted  是否删除.
    * storageType  存储类型.
    * storageUrl  存储url.
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'fileName' => 'string',
            'fileFolder' => 'string',
            'workspaceId' => 'string',
            'creatorId' => 'string',
            'creatorName' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'modifierId' => 'string',
            'modifierName' => 'string',
            'isDeleted' => 'string',
            'storageType' => 'string',
            'storageUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  附件id
    * fileName  附件名称
    * fileFolder  文件夹.
    * workspaceId  当前的工作空间id
    * creatorId  创建者ID
    * creatorName  创建者名称
    * createTime  创建时间
    * updateTime  更新时间
    * modifierId  修改者ID
    * modifierName  修改者名称
    * isDeleted  是否删除.
    * storageType  存储类型.
    * storageUrl  存储url.
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'fileName' => null,
        'fileFolder' => null,
        'workspaceId' => null,
        'creatorId' => null,
        'creatorName' => null,
        'createTime' => null,
        'updateTime' => null,
        'modifierId' => null,
        'modifierName' => null,
        'isDeleted' => null,
        'storageType' => null,
        'storageUrl' => null
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
    * id  附件id
    * fileName  附件名称
    * fileFolder  文件夹.
    * workspaceId  当前的工作空间id
    * creatorId  创建者ID
    * creatorName  创建者名称
    * createTime  创建时间
    * updateTime  更新时间
    * modifierId  修改者ID
    * modifierName  修改者名称
    * isDeleted  是否删除.
    * storageType  存储类型.
    * storageUrl  存储url.
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'fileName' => 'file_name',
            'fileFolder' => 'file_folder',
            'workspaceId' => 'workspace_id',
            'creatorId' => 'creator_id',
            'creatorName' => 'creator_name',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'modifierId' => 'modifier_id',
            'modifierName' => 'modifier_name',
            'isDeleted' => 'is_deleted',
            'storageType' => 'storage_type',
            'storageUrl' => 'storage_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  附件id
    * fileName  附件名称
    * fileFolder  文件夹.
    * workspaceId  当前的工作空间id
    * creatorId  创建者ID
    * creatorName  创建者名称
    * createTime  创建时间
    * updateTime  更新时间
    * modifierId  修改者ID
    * modifierName  修改者名称
    * isDeleted  是否删除.
    * storageType  存储类型.
    * storageUrl  存储url.
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'fileName' => 'setFileName',
            'fileFolder' => 'setFileFolder',
            'workspaceId' => 'setWorkspaceId',
            'creatorId' => 'setCreatorId',
            'creatorName' => 'setCreatorName',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'modifierId' => 'setModifierId',
            'modifierName' => 'setModifierName',
            'isDeleted' => 'setIsDeleted',
            'storageType' => 'setStorageType',
            'storageUrl' => 'setStorageUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  附件id
    * fileName  附件名称
    * fileFolder  文件夹.
    * workspaceId  当前的工作空间id
    * creatorId  创建者ID
    * creatorName  创建者名称
    * createTime  创建时间
    * updateTime  更新时间
    * modifierId  修改者ID
    * modifierName  修改者名称
    * isDeleted  是否删除.
    * storageType  存储类型.
    * storageUrl  存储url.
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'fileName' => 'getFileName',
            'fileFolder' => 'getFileFolder',
            'workspaceId' => 'getWorkspaceId',
            'creatorId' => 'getCreatorId',
            'creatorName' => 'getCreatorName',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'modifierId' => 'getModifierId',
            'modifierName' => 'getModifierName',
            'isDeleted' => 'getIsDeleted',
            'storageType' => 'getStorageType',
            'storageUrl' => 'getStorageUrl'
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
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['fileFolder'] = isset($data['fileFolder']) ? $data['fileFolder'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['modifierId'] = isset($data['modifierId']) ? $data['modifierId'] : null;
        $this->container['modifierName'] = isset($data['modifierName']) ? $data['modifierName'] : null;
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
        $this->container['storageType'] = isset($data['storageType']) ? $data['storageType'] : null;
        $this->container['storageUrl'] = isset($data['storageUrl']) ? $data['storageUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 128)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) > 64)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fileName']) && (mb_strlen($this->container['fileName']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileFolder']) && (mb_strlen($this->container['fileFolder']) > 64)) {
                $invalidProperties[] = "invalid value for 'fileFolder', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fileFolder']) && (mb_strlen($this->container['fileFolder']) < 0)) {
                $invalidProperties[] = "invalid value for 'fileFolder', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) < 0)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) < 0)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['modifierId']) && (mb_strlen($this->container['modifierId']) > 64)) {
                $invalidProperties[] = "invalid value for 'modifierId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modifierId']) && (mb_strlen($this->container['modifierId']) < 0)) {
                $invalidProperties[] = "invalid value for 'modifierId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['modifierName']) && (mb_strlen($this->container['modifierName']) > 64)) {
                $invalidProperties[] = "invalid value for 'modifierName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modifierName']) && (mb_strlen($this->container['modifierName']) < 0)) {
                $invalidProperties[] = "invalid value for 'modifierName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['isDeleted']) && (mb_strlen($this->container['isDeleted']) > 8)) {
                $invalidProperties[] = "invalid value for 'isDeleted', the character length must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['isDeleted']) && (mb_strlen($this->container['isDeleted']) < 0)) {
                $invalidProperties[] = "invalid value for 'isDeleted', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['storageType']) && (mb_strlen($this->container['storageType']) > 64)) {
                $invalidProperties[] = "invalid value for 'storageType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['storageType']) && (mb_strlen($this->container['storageType']) < 0)) {
                $invalidProperties[] = "invalid value for 'storageType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['storageUrl']) && (mb_strlen($this->container['storageUrl']) > 64)) {
                $invalidProperties[] = "invalid value for 'storageUrl', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['storageUrl']) && (mb_strlen($this->container['storageUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'storageUrl', the character length must be bigger than or equal to 0.";
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
    *  附件id
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
    * @param string|null $id 附件id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets fileName
    *  附件名称
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
    * @param string|null $fileName 附件名称
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets fileFolder
    *  文件夹.
    *
    * @return string|null
    */
    public function getFileFolder()
    {
        return $this->container['fileFolder'];
    }

    /**
    * Sets fileFolder
    *
    * @param string|null $fileFolder 文件夹.
    *
    * @return $this
    */
    public function setFileFolder($fileFolder)
    {
        $this->container['fileFolder'] = $fileFolder;
        return $this;
    }

    /**
    * Gets workspaceId
    *  当前的工作空间id
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 当前的工作空间id
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets creatorId
    *  创建者ID
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
    * @param string|null $creatorId 创建者ID
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets creatorName
    *  创建者名称
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 创建者名称
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets modifierId
    *  修改者ID
    *
    * @return string|null
    */
    public function getModifierId()
    {
        return $this->container['modifierId'];
    }

    /**
    * Sets modifierId
    *
    * @param string|null $modifierId 修改者ID
    *
    * @return $this
    */
    public function setModifierId($modifierId)
    {
        $this->container['modifierId'] = $modifierId;
        return $this;
    }

    /**
    * Gets modifierName
    *  修改者名称
    *
    * @return string|null
    */
    public function getModifierName()
    {
        return $this->container['modifierName'];
    }

    /**
    * Sets modifierName
    *
    * @param string|null $modifierName 修改者名称
    *
    * @return $this
    */
    public function setModifierName($modifierName)
    {
        $this->container['modifierName'] = $modifierName;
        return $this;
    }

    /**
    * Gets isDeleted
    *  是否删除.
    *
    * @return string|null
    */
    public function getIsDeleted()
    {
        return $this->container['isDeleted'];
    }

    /**
    * Sets isDeleted
    *
    * @param string|null $isDeleted 是否删除.
    *
    * @return $this
    */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;
        return $this;
    }

    /**
    * Gets storageType
    *  存储类型.
    *
    * @return string|null
    */
    public function getStorageType()
    {
        return $this->container['storageType'];
    }

    /**
    * Sets storageType
    *
    * @param string|null $storageType 存储类型.
    *
    * @return $this
    */
    public function setStorageType($storageType)
    {
        $this->container['storageType'] = $storageType;
        return $this;
    }

    /**
    * Gets storageUrl
    *  存储url.
    *
    * @return string|null
    */
    public function getStorageUrl()
    {
        return $this->container['storageUrl'];
    }

    /**
    * Sets storageUrl
    *
    * @param string|null $storageUrl 存储url.
    *
    * @return $this
    */
    public function setStorageUrl($storageUrl)
    {
        $this->container['storageUrl'] = $storageUrl;
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

