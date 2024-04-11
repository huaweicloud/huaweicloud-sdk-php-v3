<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BizCatalogVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BizCatalogVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  流程名称。
    * description  描述。
    * guid  对应资产中ID。
    * owner  责任人。
    * parentId  父目录ID，没有则为根目录。
    * prevId  上个节点ID，没有则为首节点。
    * nextId  下个节点ID，没有则为尾节点。
    * id  创建时传空，更新时必填。
    * qualifiedId  认证ID，自动生成。
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * bizmetricNum  拥有业务指标数量，前端不传。
    * childrenNum  拥有子流程的数量，不包括子流程的子流程。
    * children  下层子目录。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'guid' => 'string',
            'owner' => 'string',
            'parentId' => 'int',
            'prevId' => 'int',
            'nextId' => 'int',
            'id' => 'int',
            'qualifiedId' => 'string',
            'createBy' => 'string',
            'updateBy' => 'string',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'bizmetricNum' => 'int',
            'childrenNum' => 'int',
            'children' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizCatalogVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  流程名称。
    * description  描述。
    * guid  对应资产中ID。
    * owner  责任人。
    * parentId  父目录ID，没有则为根目录。
    * prevId  上个节点ID，没有则为首节点。
    * nextId  下个节点ID，没有则为尾节点。
    * id  创建时传空，更新时必填。
    * qualifiedId  认证ID，自动生成。
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * bizmetricNum  拥有业务指标数量，前端不传。
    * childrenNum  拥有子流程的数量，不包括子流程的子流程。
    * children  下层子目录。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'guid' => null,
        'owner' => null,
        'parentId' => 'int64',
        'prevId' => 'int64',
        'nextId' => 'int64',
        'id' => 'int64',
        'qualifiedId' => null,
        'createBy' => null,
        'updateBy' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time',
        'bizmetricNum' => null,
        'childrenNum' => null,
        'children' => null
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
    * name  流程名称。
    * description  描述。
    * guid  对应资产中ID。
    * owner  责任人。
    * parentId  父目录ID，没有则为根目录。
    * prevId  上个节点ID，没有则为首节点。
    * nextId  下个节点ID，没有则为尾节点。
    * id  创建时传空，更新时必填。
    * qualifiedId  认证ID，自动生成。
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * bizmetricNum  拥有业务指标数量，前端不传。
    * childrenNum  拥有子流程的数量，不包括子流程的子流程。
    * children  下层子目录。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'guid' => 'guid',
            'owner' => 'owner',
            'parentId' => 'parent_id',
            'prevId' => 'prev_id',
            'nextId' => 'next_id',
            'id' => 'id',
            'qualifiedId' => 'qualified_id',
            'createBy' => 'create_by',
            'updateBy' => 'update_by',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'bizmetricNum' => 'bizmetric_num',
            'childrenNum' => 'children_num',
            'children' => 'children'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  流程名称。
    * description  描述。
    * guid  对应资产中ID。
    * owner  责任人。
    * parentId  父目录ID，没有则为根目录。
    * prevId  上个节点ID，没有则为首节点。
    * nextId  下个节点ID，没有则为尾节点。
    * id  创建时传空，更新时必填。
    * qualifiedId  认证ID，自动生成。
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * bizmetricNum  拥有业务指标数量，前端不传。
    * childrenNum  拥有子流程的数量，不包括子流程的子流程。
    * children  下层子目录。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'guid' => 'setGuid',
            'owner' => 'setOwner',
            'parentId' => 'setParentId',
            'prevId' => 'setPrevId',
            'nextId' => 'setNextId',
            'id' => 'setId',
            'qualifiedId' => 'setQualifiedId',
            'createBy' => 'setCreateBy',
            'updateBy' => 'setUpdateBy',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'bizmetricNum' => 'setBizmetricNum',
            'childrenNum' => 'setChildrenNum',
            'children' => 'setChildren'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  流程名称。
    * description  描述。
    * guid  对应资产中ID。
    * owner  责任人。
    * parentId  父目录ID，没有则为根目录。
    * prevId  上个节点ID，没有则为首节点。
    * nextId  下个节点ID，没有则为尾节点。
    * id  创建时传空，更新时必填。
    * qualifiedId  认证ID，自动生成。
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * bizmetricNum  拥有业务指标数量，前端不传。
    * childrenNum  拥有子流程的数量，不包括子流程的子流程。
    * children  下层子目录。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'guid' => 'getGuid',
            'owner' => 'getOwner',
            'parentId' => 'getParentId',
            'prevId' => 'getPrevId',
            'nextId' => 'getNextId',
            'id' => 'getId',
            'qualifiedId' => 'getQualifiedId',
            'createBy' => 'getCreateBy',
            'updateBy' => 'getUpdateBy',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'bizmetricNum' => 'getBizmetricNum',
            'childrenNum' => 'getChildrenNum',
            'children' => 'getChildren'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['prevId'] = isset($data['prevId']) ? $data['prevId'] : null;
        $this->container['nextId'] = isset($data['nextId']) ? $data['nextId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['qualifiedId'] = isset($data['qualifiedId']) ? $data['qualifiedId'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['bizmetricNum'] = isset($data['bizmetricNum']) ? $data['bizmetricNum'] : null;
        $this->container['childrenNum'] = isset($data['childrenNum']) ? $data['childrenNum'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 600)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 600.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 2000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 2000.";
            }
        if ($this->container['owner'] === null) {
            $invalidProperties[] = "'owner' can't be null";
        }
            if ((mb_strlen($this->container['owner']) > 4000)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be smaller than or equal to 4000.";
            }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
    * Gets name
    *  流程名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 流程名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  描述。
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
    * @param string|null $description 描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets guid
    *  对应资产中ID。
    *
    * @return string|null
    */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /**
    * Sets guid
    *
    * @param string|null $guid 对应资产中ID。
    *
    * @return $this
    */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;
        return $this;
    }

    /**
    * Gets owner
    *  责任人。
    *
    * @return string
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string $owner 责任人。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets parentId
    *  父目录ID，没有则为根目录。
    *
    * @return int|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param int|null $parentId 父目录ID，没有则为根目录。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets prevId
    *  上个节点ID，没有则为首节点。
    *
    * @return int|null
    */
    public function getPrevId()
    {
        return $this->container['prevId'];
    }

    /**
    * Sets prevId
    *
    * @param int|null $prevId 上个节点ID，没有则为首节点。
    *
    * @return $this
    */
    public function setPrevId($prevId)
    {
        $this->container['prevId'] = $prevId;
        return $this;
    }

    /**
    * Gets nextId
    *  下个节点ID，没有则为尾节点。
    *
    * @return int|null
    */
    public function getNextId()
    {
        return $this->container['nextId'];
    }

    /**
    * Sets nextId
    *
    * @param int|null $nextId 下个节点ID，没有则为尾节点。
    *
    * @return $this
    */
    public function setNextId($nextId)
    {
        $this->container['nextId'] = $nextId;
        return $this;
    }

    /**
    * Gets id
    *  创建时传空，更新时必填。
    *
    * @return int
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int $id 创建时传空，更新时必填。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets qualifiedId
    *  认证ID，自动生成。
    *
    * @return string|null
    */
    public function getQualifiedId()
    {
        return $this->container['qualifiedId'];
    }

    /**
    * Sets qualifiedId
    *
    * @param string|null $qualifiedId 认证ID，自动生成。
    *
    * @return $this
    */
    public function setQualifiedId($qualifiedId)
    {
        $this->container['qualifiedId'] = $qualifiedId;
        return $this;
    }

    /**
    * Gets createBy
    *  创建人。
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy 创建人。
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets updateBy
    *  更新人。
    *
    * @return string|null
    */
    public function getUpdateBy()
    {
        return $this->container['updateBy'];
    }

    /**
    * Sets updateBy
    *
    * @param string|null $updateBy 更新人。
    *
    * @return $this
    */
    public function setUpdateBy($updateBy)
    {
        $this->container['updateBy'] = $updateBy;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
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
    *  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets bizmetricNum
    *  拥有业务指标数量，前端不传。
    *
    * @return int|null
    */
    public function getBizmetricNum()
    {
        return $this->container['bizmetricNum'];
    }

    /**
    * Sets bizmetricNum
    *
    * @param int|null $bizmetricNum 拥有业务指标数量，前端不传。
    *
    * @return $this
    */
    public function setBizmetricNum($bizmetricNum)
    {
        $this->container['bizmetricNum'] = $bizmetricNum;
        return $this;
    }

    /**
    * Gets childrenNum
    *  拥有子流程的数量，不包括子流程的子流程。
    *
    * @return int|null
    */
    public function getChildrenNum()
    {
        return $this->container['childrenNum'];
    }

    /**
    * Sets childrenNum
    *
    * @param int|null $childrenNum 拥有子流程的数量，不包括子流程的子流程。
    *
    * @return $this
    */
    public function setChildrenNum($childrenNum)
    {
        $this->container['childrenNum'] = $childrenNum;
        return $this;
    }

    /**
    * Gets children
    *  下层子目录。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizCatalogVO[]|null
    */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
    * Sets children
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizCatalogVO[]|null $children 下层子目录。
    *
    * @return $this
    */
    public function setChildren($children)
    {
        $this->container['children'] = $children;
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

