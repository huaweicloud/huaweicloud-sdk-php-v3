<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DpeMappingDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DpeMappingDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  映射id
    * name  名称
    * projectId  映射id
    * workspaceId  映射id
    * dataclassId  映射id
    * dataclassName  数据类名称
    * mapperTypeId  映射id
    * dpeInfo  dpeInfo
    * createTime  创建时间
    * creatorId  创建者id
    * creatorName  创建者名称
    * updateTime  更新时间
    * modifierId  修改者id
    * modifierName  修改者名称
    * mapperFieldList  映射集合
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'projectId' => 'string',
            'workspaceId' => 'string',
            'dataclassId' => 'string',
            'dataclassName' => 'string',
            'mapperTypeId' => 'string',
            'dpeInfo' => '\HuaweiCloud\SDK\SecMaster\V1\Model\DpeInfo',
            'createTime' => 'string',
            'creatorId' => 'string',
            'creatorName' => 'string',
            'updateTime' => 'string',
            'modifierId' => 'string',
            'modifierName' => 'string',
            'mapperFieldList' => '\HuaweiCloud\SDK\SecMaster\V1\Model\DpeMappingFieldDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  映射id
    * name  名称
    * projectId  映射id
    * workspaceId  映射id
    * dataclassId  映射id
    * dataclassName  数据类名称
    * mapperTypeId  映射id
    * dpeInfo  dpeInfo
    * createTime  创建时间
    * creatorId  创建者id
    * creatorName  创建者名称
    * updateTime  更新时间
    * modifierId  修改者id
    * modifierName  修改者名称
    * mapperFieldList  映射集合
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'projectId' => null,
        'workspaceId' => null,
        'dataclassId' => null,
        'dataclassName' => null,
        'mapperTypeId' => null,
        'dpeInfo' => null,
        'createTime' => null,
        'creatorId' => null,
        'creatorName' => null,
        'updateTime' => null,
        'modifierId' => null,
        'modifierName' => null,
        'mapperFieldList' => null
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
    * id  映射id
    * name  名称
    * projectId  映射id
    * workspaceId  映射id
    * dataclassId  映射id
    * dataclassName  数据类名称
    * mapperTypeId  映射id
    * dpeInfo  dpeInfo
    * createTime  创建时间
    * creatorId  创建者id
    * creatorName  创建者名称
    * updateTime  更新时间
    * modifierId  修改者id
    * modifierName  修改者名称
    * mapperFieldList  映射集合
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'projectId' => 'project_id',
            'workspaceId' => 'workspace_id',
            'dataclassId' => 'dataclass_id',
            'dataclassName' => 'dataclass_name',
            'mapperTypeId' => 'mapper_type_id',
            'dpeInfo' => 'dpe_info',
            'createTime' => 'create_time',
            'creatorId' => 'creator_id',
            'creatorName' => 'creator_name',
            'updateTime' => 'update_time',
            'modifierId' => 'modifier_id',
            'modifierName' => 'modifier_name',
            'mapperFieldList' => 'mapper_field_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  映射id
    * name  名称
    * projectId  映射id
    * workspaceId  映射id
    * dataclassId  映射id
    * dataclassName  数据类名称
    * mapperTypeId  映射id
    * dpeInfo  dpeInfo
    * createTime  创建时间
    * creatorId  创建者id
    * creatorName  创建者名称
    * updateTime  更新时间
    * modifierId  修改者id
    * modifierName  修改者名称
    * mapperFieldList  映射集合
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'workspaceId' => 'setWorkspaceId',
            'dataclassId' => 'setDataclassId',
            'dataclassName' => 'setDataclassName',
            'mapperTypeId' => 'setMapperTypeId',
            'dpeInfo' => 'setDpeInfo',
            'createTime' => 'setCreateTime',
            'creatorId' => 'setCreatorId',
            'creatorName' => 'setCreatorName',
            'updateTime' => 'setUpdateTime',
            'modifierId' => 'setModifierId',
            'modifierName' => 'setModifierName',
            'mapperFieldList' => 'setMapperFieldList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  映射id
    * name  名称
    * projectId  映射id
    * workspaceId  映射id
    * dataclassId  映射id
    * dataclassName  数据类名称
    * mapperTypeId  映射id
    * dpeInfo  dpeInfo
    * createTime  创建时间
    * creatorId  创建者id
    * creatorName  创建者名称
    * updateTime  更新时间
    * modifierId  修改者id
    * modifierName  修改者名称
    * mapperFieldList  映射集合
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'workspaceId' => 'getWorkspaceId',
            'dataclassId' => 'getDataclassId',
            'dataclassName' => 'getDataclassName',
            'mapperTypeId' => 'getMapperTypeId',
            'dpeInfo' => 'getDpeInfo',
            'createTime' => 'getCreateTime',
            'creatorId' => 'getCreatorId',
            'creatorName' => 'getCreatorName',
            'updateTime' => 'getUpdateTime',
            'modifierId' => 'getModifierId',
            'modifierName' => 'getModifierName',
            'mapperFieldList' => 'getMapperFieldList'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['dataclassId'] = isset($data['dataclassId']) ? $data['dataclassId'] : null;
        $this->container['dataclassName'] = isset($data['dataclassName']) ? $data['dataclassName'] : null;
        $this->container['mapperTypeId'] = isset($data['mapperTypeId']) ? $data['mapperTypeId'] : null;
        $this->container['dpeInfo'] = isset($data['dpeInfo']) ? $data['dpeInfo'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['modifierId'] = isset($data['modifierId']) ? $data['modifierId'] : null;
        $this->container['modifierName'] = isset($data['modifierName']) ? $data['modifierName'] : null;
        $this->container['mapperFieldList'] = isset($data['mapperFieldList']) ? $data['mapperFieldList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 1024)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) < 32)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['dataclassName']) && (mb_strlen($this->container['dataclassName']) > 256)) {
                $invalidProperties[] = "invalid value for 'dataclassName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['dataclassName']) && (mb_strlen($this->container['dataclassName']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataclassName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mapperTypeId']) && (mb_strlen($this->container['mapperTypeId']) > 64)) {
                $invalidProperties[] = "invalid value for 'mapperTypeId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['mapperTypeId']) && (mb_strlen($this->container['mapperTypeId']) < 32)) {
                $invalidProperties[] = "invalid value for 'mapperTypeId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) < 32)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) < 0)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be bigger than or equal to 0.";
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
    *  映射id
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
    * @param string|null $id 映射id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets projectId
    *  映射id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 映射id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets workspaceId
    *  映射id
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
    * @param string|null $workspaceId 映射id
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets dataclassId
    *  映射id
    *
    * @return string|null
    */
    public function getDataclassId()
    {
        return $this->container['dataclassId'];
    }

    /**
    * Sets dataclassId
    *
    * @param string|null $dataclassId 映射id
    *
    * @return $this
    */
    public function setDataclassId($dataclassId)
    {
        $this->container['dataclassId'] = $dataclassId;
        return $this;
    }

    /**
    * Gets dataclassName
    *  数据类名称
    *
    * @return string|null
    */
    public function getDataclassName()
    {
        return $this->container['dataclassName'];
    }

    /**
    * Sets dataclassName
    *
    * @param string|null $dataclassName 数据类名称
    *
    * @return $this
    */
    public function setDataclassName($dataclassName)
    {
        $this->container['dataclassName'] = $dataclassName;
        return $this;
    }

    /**
    * Gets mapperTypeId
    *  映射id
    *
    * @return string|null
    */
    public function getMapperTypeId()
    {
        return $this->container['mapperTypeId'];
    }

    /**
    * Sets mapperTypeId
    *
    * @param string|null $mapperTypeId 映射id
    *
    * @return $this
    */
    public function setMapperTypeId($mapperTypeId)
    {
        $this->container['mapperTypeId'] = $mapperTypeId;
        return $this;
    }

    /**
    * Gets dpeInfo
    *  dpeInfo
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\DpeInfo|null
    */
    public function getDpeInfo()
    {
        return $this->container['dpeInfo'];
    }

    /**
    * Sets dpeInfo
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\DpeInfo|null $dpeInfo dpeInfo
    *
    * @return $this
    */
    public function setDpeInfo($dpeInfo)
    {
        $this->container['dpeInfo'] = $dpeInfo;
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
    * Gets creatorId
    *  创建者id
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
    * @param string|null $creatorId 创建者id
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
    *  修改者id
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
    * @param string|null $modifierId 修改者id
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
    * Gets mapperFieldList
    *  映射集合
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\DpeMappingFieldDetail[]|null
    */
    public function getMapperFieldList()
    {
        return $this->container['mapperFieldList'];
    }

    /**
    * Sets mapperFieldList
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\DpeMappingFieldDetail[]|null $mapperFieldList 映射集合
    *
    * @return $this
    */
    public function setMapperFieldList($mapperFieldList)
    {
        $this->container['mapperFieldList'] = $mapperFieldList;
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

