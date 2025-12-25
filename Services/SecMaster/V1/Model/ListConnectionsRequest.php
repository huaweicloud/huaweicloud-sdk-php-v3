<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListConnectionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListConnectionsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 - application/json;charset=UTF-8    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json;charset=UTF-8  **默认取值：** 不涉及
    * workspaceId  **参数解释**: 工作空间ID **取值范围**: 不涉及
    * offset  **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * limit  **参数解释：** 数据量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  连接名称
    * componentName  插件名称
    * creatorName  创建人
    * modifierName  修改人
    * description  描述
    * createStartTime  创建起始时间
    * createEndTime  创建结束时间
    * updateStartTime  修改起始时间
    * updateEndTime  修改结束时间
    * isDefenseType  是否用于应急策略的操作连接
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'workspaceId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'name' => 'string',
            'componentName' => 'string',
            'creatorName' => 'string',
            'modifierName' => 'string',
            'description' => 'string',
            'createStartTime' => 'string',
            'createEndTime' => 'string',
            'updateStartTime' => 'string',
            'updateEndTime' => 'string',
            'isDefenseType' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 - application/json;charset=UTF-8    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json;charset=UTF-8  **默认取值：** 不涉及
    * workspaceId  **参数解释**: 工作空间ID **取值范围**: 不涉及
    * offset  **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * limit  **参数解释：** 数据量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  连接名称
    * componentName  插件名称
    * creatorName  创建人
    * modifierName  修改人
    * description  描述
    * createStartTime  创建起始时间
    * createEndTime  创建结束时间
    * updateStartTime  修改起始时间
    * updateEndTime  修改结束时间
    * isDefenseType  是否用于应急策略的操作连接
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'workspaceId' => null,
        'offset' => null,
        'limit' => null,
        'name' => null,
        'componentName' => null,
        'creatorName' => null,
        'modifierName' => null,
        'description' => null,
        'createStartTime' => null,
        'createEndTime' => null,
        'updateStartTime' => null,
        'updateEndTime' => null,
        'isDefenseType' => null
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
    * contentType  **参数解释：** 内容类型 - application/json;charset=UTF-8    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json;charset=UTF-8  **默认取值：** 不涉及
    * workspaceId  **参数解释**: 工作空间ID **取值范围**: 不涉及
    * offset  **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * limit  **参数解释：** 数据量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  连接名称
    * componentName  插件名称
    * creatorName  创建人
    * modifierName  修改人
    * description  描述
    * createStartTime  创建起始时间
    * createEndTime  创建结束时间
    * updateStartTime  修改起始时间
    * updateEndTime  修改结束时间
    * isDefenseType  是否用于应急策略的操作连接
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'content-type',
            'workspaceId' => 'workspace_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'name' => 'name',
            'componentName' => 'component_name',
            'creatorName' => 'creator_name',
            'modifierName' => 'modifier_name',
            'description' => 'description',
            'createStartTime' => 'create_start_time',
            'createEndTime' => 'create_end_time',
            'updateStartTime' => 'update_start_time',
            'updateEndTime' => 'update_end_time',
            'isDefenseType' => 'is_defense_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  **参数解释：** 内容类型 - application/json;charset=UTF-8    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json;charset=UTF-8  **默认取值：** 不涉及
    * workspaceId  **参数解释**: 工作空间ID **取值范围**: 不涉及
    * offset  **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * limit  **参数解释：** 数据量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  连接名称
    * componentName  插件名称
    * creatorName  创建人
    * modifierName  修改人
    * description  描述
    * createStartTime  创建起始时间
    * createEndTime  创建结束时间
    * updateStartTime  修改起始时间
    * updateEndTime  修改结束时间
    * isDefenseType  是否用于应急策略的操作连接
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'workspaceId' => 'setWorkspaceId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'name' => 'setName',
            'componentName' => 'setComponentName',
            'creatorName' => 'setCreatorName',
            'modifierName' => 'setModifierName',
            'description' => 'setDescription',
            'createStartTime' => 'setCreateStartTime',
            'createEndTime' => 'setCreateEndTime',
            'updateStartTime' => 'setUpdateStartTime',
            'updateEndTime' => 'setUpdateEndTime',
            'isDefenseType' => 'setIsDefenseType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  **参数解释：** 内容类型 - application/json;charset=UTF-8    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json;charset=UTF-8  **默认取值：** 不涉及
    * workspaceId  **参数解释**: 工作空间ID **取值范围**: 不涉及
    * offset  **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * limit  **参数解释：** 数据量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * name  连接名称
    * componentName  插件名称
    * creatorName  创建人
    * modifierName  修改人
    * description  描述
    * createStartTime  创建起始时间
    * createEndTime  创建结束时间
    * updateStartTime  修改起始时间
    * updateEndTime  修改结束时间
    * isDefenseType  是否用于应急策略的操作连接
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'workspaceId' => 'getWorkspaceId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'name' => 'getName',
            'componentName' => 'getComponentName',
            'creatorName' => 'getCreatorName',
            'modifierName' => 'getModifierName',
            'description' => 'getDescription',
            'createStartTime' => 'getCreateStartTime',
            'createEndTime' => 'getCreateEndTime',
            'updateStartTime' => 'getUpdateStartTime',
            'updateEndTime' => 'getUpdateEndTime',
            'isDefenseType' => 'getIsDefenseType'
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
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['componentName'] = isset($data['componentName']) ? $data['componentName'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['modifierName'] = isset($data['modifierName']) ? $data['modifierName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createStartTime'] = isset($data['createStartTime']) ? $data['createStartTime'] : null;
        $this->container['createEndTime'] = isset($data['createEndTime']) ? $data['createEndTime'] : null;
        $this->container['updateStartTime'] = isset($data['updateStartTime']) ? $data['updateStartTime'] : null;
        $this->container['updateEndTime'] = isset($data['updateEndTime']) ? $data['updateEndTime'] : null;
        $this->container['isDefenseType'] = isset($data['isDefenseType']) ? $data['isDefenseType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
            if ((mb_strlen($this->container['contentType']) > 64)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['contentType']) < 0)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
            if ((mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['workspaceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 999999999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 999999999.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 1024)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['componentName']) && (mb_strlen($this->container['componentName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'componentName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['componentName']) && (mb_strlen($this->container['componentName']) < 0)) {
                $invalidProperties[] = "invalid value for 'componentName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) < 0)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['modifierName']) && (mb_strlen($this->container['modifierName']) > 64)) {
                $invalidProperties[] = "invalid value for 'modifierName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modifierName']) && (mb_strlen($this->container['modifierName']) < 0)) {
                $invalidProperties[] = "invalid value for 'modifierName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createStartTime']) && (mb_strlen($this->container['createStartTime']) > 36)) {
                $invalidProperties[] = "invalid value for 'createStartTime', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['createStartTime']) && (mb_strlen($this->container['createStartTime']) < 32)) {
                $invalidProperties[] = "invalid value for 'createStartTime', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['createEndTime']) && (mb_strlen($this->container['createEndTime']) > 36)) {
                $invalidProperties[] = "invalid value for 'createEndTime', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['createEndTime']) && (mb_strlen($this->container['createEndTime']) < 32)) {
                $invalidProperties[] = "invalid value for 'createEndTime', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['updateStartTime']) && (mb_strlen($this->container['updateStartTime']) > 36)) {
                $invalidProperties[] = "invalid value for 'updateStartTime', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['updateStartTime']) && (mb_strlen($this->container['updateStartTime']) < 32)) {
                $invalidProperties[] = "invalid value for 'updateStartTime', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['updateEndTime']) && (mb_strlen($this->container['updateEndTime']) > 36)) {
                $invalidProperties[] = "invalid value for 'updateEndTime', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['updateEndTime']) && (mb_strlen($this->container['updateEndTime']) < 32)) {
                $invalidProperties[] = "invalid value for 'updateEndTime', the character length must be bigger than or equal to 32.";
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
    * Gets contentType
    *  **参数解释：** 内容类型 - application/json;charset=UTF-8    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json;charset=UTF-8  **默认取值：** 不涉及
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType **参数解释：** 内容类型 - application/json;charset=UTF-8    普通API请求的类型  **约束限制：** 不涉及 **取值范围：** - application/json;charset=UTF-8  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释**: 工作空间ID **取值范围**: 不涉及
    *
    * @return string
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string $workspaceId **参数解释**: 工作空间ID **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释：** 偏移量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释：** 数据量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释：** 数据量 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets name
    *  连接名称
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
    * @param string|null $name 连接名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets componentName
    *  插件名称
    *
    * @return string|null
    */
    public function getComponentName()
    {
        return $this->container['componentName'];
    }

    /**
    * Sets componentName
    *
    * @param string|null $componentName 插件名称
    *
    * @return $this
    */
    public function setComponentName($componentName)
    {
        $this->container['componentName'] = $componentName;
        return $this;
    }

    /**
    * Gets creatorName
    *  创建人
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
    * @param string|null $creatorName 创建人
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets modifierName
    *  修改人
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
    * @param string|null $modifierName 修改人
    *
    * @return $this
    */
    public function setModifierName($modifierName)
    {
        $this->container['modifierName'] = $modifierName;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createStartTime
    *  创建起始时间
    *
    * @return string|null
    */
    public function getCreateStartTime()
    {
        return $this->container['createStartTime'];
    }

    /**
    * Sets createStartTime
    *
    * @param string|null $createStartTime 创建起始时间
    *
    * @return $this
    */
    public function setCreateStartTime($createStartTime)
    {
        $this->container['createStartTime'] = $createStartTime;
        return $this;
    }

    /**
    * Gets createEndTime
    *  创建结束时间
    *
    * @return string|null
    */
    public function getCreateEndTime()
    {
        return $this->container['createEndTime'];
    }

    /**
    * Sets createEndTime
    *
    * @param string|null $createEndTime 创建结束时间
    *
    * @return $this
    */
    public function setCreateEndTime($createEndTime)
    {
        $this->container['createEndTime'] = $createEndTime;
        return $this;
    }

    /**
    * Gets updateStartTime
    *  修改起始时间
    *
    * @return string|null
    */
    public function getUpdateStartTime()
    {
        return $this->container['updateStartTime'];
    }

    /**
    * Sets updateStartTime
    *
    * @param string|null $updateStartTime 修改起始时间
    *
    * @return $this
    */
    public function setUpdateStartTime($updateStartTime)
    {
        $this->container['updateStartTime'] = $updateStartTime;
        return $this;
    }

    /**
    * Gets updateEndTime
    *  修改结束时间
    *
    * @return string|null
    */
    public function getUpdateEndTime()
    {
        return $this->container['updateEndTime'];
    }

    /**
    * Sets updateEndTime
    *
    * @param string|null $updateEndTime 修改结束时间
    *
    * @return $this
    */
    public function setUpdateEndTime($updateEndTime)
    {
        $this->container['updateEndTime'] = $updateEndTime;
        return $this;
    }

    /**
    * Gets isDefenseType
    *  是否用于应急策略的操作连接
    *
    * @return bool|null
    */
    public function getIsDefenseType()
    {
        return $this->container['isDefenseType'];
    }

    /**
    * Sets isDefenseType
    *
    * @param bool|null $isDefenseType 是否用于应急策略的操作连接
    *
    * @return $this
    */
    public function setIsDefenseType($isDefenseType)
    {
        $this->container['isDefenseType'] = $isDefenseType;
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

