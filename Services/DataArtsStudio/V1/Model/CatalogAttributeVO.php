<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CatalogAttributeVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CatalogAttributeVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * path  路径。
    * qualifiedName  名称。
    * level  主题所属层级。
    * name  名称。
    * nameEng  英文名称。
    * alias  别名。
    * description  描述。
    * dataOwner  数据主体。
    * owner  责任人。
    * dataOwnerList  数据主体列表。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateBy  更新人。
    * parent  parent
    * parentId  父节点ID。
    * l1  是否为L1层。
    * l2  是否为L2层。
    * l3  是否为L3层。
    * ordinal  顺序编号。
    * tenantId  租户ID。
    * selfDefinedFields  自定义项。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'path' => 'string',
            'qualifiedName' => 'string',
            'level' => 'string',
            'name' => 'string',
            'nameEng' => 'string',
            'alias' => 'string',
            'description' => 'string',
            'dataOwner' => 'string',
            'owner' => 'string',
            'dataOwnerList' => 'string[]',
            'createTime' => 'string',
            'createBy' => 'string',
            'updateTime' => 'string',
            'updateBy' => 'string',
            'parent' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CatalogAttributeVOParent',
            'parentId' => 'string',
            'l1' => 'bool',
            'l2' => 'bool',
            'l3' => 'bool',
            'ordinal' => 'int',
            'tenantId' => 'string',
            'selfDefinedFields' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SelfDefinedFieldVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * path  路径。
    * qualifiedName  名称。
    * level  主题所属层级。
    * name  名称。
    * nameEng  英文名称。
    * alias  别名。
    * description  描述。
    * dataOwner  数据主体。
    * owner  责任人。
    * dataOwnerList  数据主体列表。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateBy  更新人。
    * parent  parent
    * parentId  父节点ID。
    * l1  是否为L1层。
    * l2  是否为L2层。
    * l3  是否为L3层。
    * ordinal  顺序编号。
    * tenantId  租户ID。
    * selfDefinedFields  自定义项。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'path' => null,
        'qualifiedName' => null,
        'level' => null,
        'name' => null,
        'nameEng' => null,
        'alias' => null,
        'description' => null,
        'dataOwner' => null,
        'owner' => null,
        'dataOwnerList' => null,
        'createTime' => null,
        'createBy' => null,
        'updateTime' => null,
        'updateBy' => null,
        'parent' => null,
        'parentId' => null,
        'l1' => null,
        'l2' => null,
        'l3' => null,
        'ordinal' => null,
        'tenantId' => null,
        'selfDefinedFields' => null
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
    * path  路径。
    * qualifiedName  名称。
    * level  主题所属层级。
    * name  名称。
    * nameEng  英文名称。
    * alias  别名。
    * description  描述。
    * dataOwner  数据主体。
    * owner  责任人。
    * dataOwnerList  数据主体列表。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateBy  更新人。
    * parent  parent
    * parentId  父节点ID。
    * l1  是否为L1层。
    * l2  是否为L2层。
    * l3  是否为L3层。
    * ordinal  顺序编号。
    * tenantId  租户ID。
    * selfDefinedFields  自定义项。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'path' => 'path',
            'qualifiedName' => 'qualifiedName',
            'level' => 'level',
            'name' => 'name',
            'nameEng' => 'nameEng',
            'alias' => 'alias',
            'description' => 'description',
            'dataOwner' => 'dataOwner',
            'owner' => 'owner',
            'dataOwnerList' => 'dataOwnerList',
            'createTime' => 'createTime',
            'createBy' => 'createBy',
            'updateTime' => 'updateTime',
            'updateBy' => 'updateBy',
            'parent' => 'parent',
            'parentId' => 'parentId',
            'l1' => 'l1',
            'l2' => 'l2',
            'l3' => 'l3',
            'ordinal' => 'ordinal',
            'tenantId' => 'tenantId',
            'selfDefinedFields' => 'self_defined_fields'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * path  路径。
    * qualifiedName  名称。
    * level  主题所属层级。
    * name  名称。
    * nameEng  英文名称。
    * alias  别名。
    * description  描述。
    * dataOwner  数据主体。
    * owner  责任人。
    * dataOwnerList  数据主体列表。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateBy  更新人。
    * parent  parent
    * parentId  父节点ID。
    * l1  是否为L1层。
    * l2  是否为L2层。
    * l3  是否为L3层。
    * ordinal  顺序编号。
    * tenantId  租户ID。
    * selfDefinedFields  自定义项。
    *
    * @var string[]
    */
    protected static $setters = [
            'path' => 'setPath',
            'qualifiedName' => 'setQualifiedName',
            'level' => 'setLevel',
            'name' => 'setName',
            'nameEng' => 'setNameEng',
            'alias' => 'setAlias',
            'description' => 'setDescription',
            'dataOwner' => 'setDataOwner',
            'owner' => 'setOwner',
            'dataOwnerList' => 'setDataOwnerList',
            'createTime' => 'setCreateTime',
            'createBy' => 'setCreateBy',
            'updateTime' => 'setUpdateTime',
            'updateBy' => 'setUpdateBy',
            'parent' => 'setParent',
            'parentId' => 'setParentId',
            'l1' => 'setL1',
            'l2' => 'setL2',
            'l3' => 'setL3',
            'ordinal' => 'setOrdinal',
            'tenantId' => 'setTenantId',
            'selfDefinedFields' => 'setSelfDefinedFields'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * path  路径。
    * qualifiedName  名称。
    * level  主题所属层级。
    * name  名称。
    * nameEng  英文名称。
    * alias  别名。
    * description  描述。
    * dataOwner  数据主体。
    * owner  责任人。
    * dataOwnerList  数据主体列表。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateBy  更新人。
    * parent  parent
    * parentId  父节点ID。
    * l1  是否为L1层。
    * l2  是否为L2层。
    * l3  是否为L3层。
    * ordinal  顺序编号。
    * tenantId  租户ID。
    * selfDefinedFields  自定义项。
    *
    * @var string[]
    */
    protected static $getters = [
            'path' => 'getPath',
            'qualifiedName' => 'getQualifiedName',
            'level' => 'getLevel',
            'name' => 'getName',
            'nameEng' => 'getNameEng',
            'alias' => 'getAlias',
            'description' => 'getDescription',
            'dataOwner' => 'getDataOwner',
            'owner' => 'getOwner',
            'dataOwnerList' => 'getDataOwnerList',
            'createTime' => 'getCreateTime',
            'createBy' => 'getCreateBy',
            'updateTime' => 'getUpdateTime',
            'updateBy' => 'getUpdateBy',
            'parent' => 'getParent',
            'parentId' => 'getParentId',
            'l1' => 'getL1',
            'l2' => 'getL2',
            'l3' => 'getL3',
            'ordinal' => 'getOrdinal',
            'tenantId' => 'getTenantId',
            'selfDefinedFields' => 'getSelfDefinedFields'
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
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['qualifiedName'] = isset($data['qualifiedName']) ? $data['qualifiedName'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nameEng'] = isset($data['nameEng']) ? $data['nameEng'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dataOwner'] = isset($data['dataOwner']) ? $data['dataOwner'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['dataOwnerList'] = isset($data['dataOwnerList']) ? $data['dataOwnerList'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['l1'] = isset($data['l1']) ? $data['l1'] : null;
        $this->container['l2'] = isset($data['l2']) ? $data['l2'] : null;
        $this->container['l3'] = isset($data['l3']) ? $data['l3'] : null;
        $this->container['ordinal'] = isset($data['ordinal']) ? $data['ordinal'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['selfDefinedFields'] = isset($data['selfDefinedFields']) ? $data['selfDefinedFields'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
        }
        if ($this->container['qualifiedName'] === null) {
            $invalidProperties[] = "'qualifiedName' can't be null";
        }
        if ($this->container['level'] === null) {
            $invalidProperties[] = "'level' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['nameEng'] === null) {
            $invalidProperties[] = "'nameEng' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['dataOwner'] === null) {
            $invalidProperties[] = "'dataOwner' can't be null";
        }
        if ($this->container['dataOwnerList'] === null) {
            $invalidProperties[] = "'dataOwnerList' can't be null";
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
    * Gets path
    *  路径。
    *
    * @return string
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string $path 路径。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets qualifiedName
    *  名称。
    *
    * @return string
    */
    public function getQualifiedName()
    {
        return $this->container['qualifiedName'];
    }

    /**
    * Sets qualifiedName
    *
    * @param string $qualifiedName 名称。
    *
    * @return $this
    */
    public function setQualifiedName($qualifiedName)
    {
        $this->container['qualifiedName'] = $qualifiedName;
        return $this;
    }

    /**
    * Gets level
    *  主题所属层级。
    *
    * @return string
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string $level 主题所属层级。
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets name
    *  名称。
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
    * @param string $name 名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets nameEng
    *  英文名称。
    *
    * @return string
    */
    public function getNameEng()
    {
        return $this->container['nameEng'];
    }

    /**
    * Sets nameEng
    *
    * @param string $nameEng 英文名称。
    *
    * @return $this
    */
    public function setNameEng($nameEng)
    {
        $this->container['nameEng'] = $nameEng;
        return $this;
    }

    /**
    * Gets alias
    *  别名。
    *
    * @return string|null
    */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
    * Sets alias
    *
    * @param string|null $alias 别名。
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
        return $this;
    }

    /**
    * Gets description
    *  描述。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets dataOwner
    *  数据主体。
    *
    * @return string
    */
    public function getDataOwner()
    {
        return $this->container['dataOwner'];
    }

    /**
    * Sets dataOwner
    *
    * @param string $dataOwner 数据主体。
    *
    * @return $this
    */
    public function setDataOwner($dataOwner)
    {
        $this->container['dataOwner'] = $dataOwner;
        return $this;
    }

    /**
    * Gets owner
    *  责任人。
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 责任人。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets dataOwnerList
    *  数据主体列表。
    *
    * @return string[]
    */
    public function getDataOwnerList()
    {
        return $this->container['dataOwnerList'];
    }

    /**
    * Sets dataOwnerList
    *
    * @param string[] $dataOwnerList 数据主体列表。
    *
    * @return $this
    */
    public function setDataOwnerList($dataOwnerList)
    {
        $this->container['dataOwnerList'] = $dataOwnerList;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
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
    * @param string|null $createTime 创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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
    * Gets updateTime
    *  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
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
    * @param string|null $updateTime 更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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
    * Gets parent
    *  parent
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CatalogAttributeVOParent|null
    */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
    * Sets parent
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CatalogAttributeVOParent|null $parent parent
    *
    * @return $this
    */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;
        return $this;
    }

    /**
    * Gets parentId
    *  父节点ID。
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId 父节点ID。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets l1
    *  是否为L1层。
    *
    * @return bool|null
    */
    public function getL1()
    {
        return $this->container['l1'];
    }

    /**
    * Sets l1
    *
    * @param bool|null $l1 是否为L1层。
    *
    * @return $this
    */
    public function setL1($l1)
    {
        $this->container['l1'] = $l1;
        return $this;
    }

    /**
    * Gets l2
    *  是否为L2层。
    *
    * @return bool|null
    */
    public function getL2()
    {
        return $this->container['l2'];
    }

    /**
    * Sets l2
    *
    * @param bool|null $l2 是否为L2层。
    *
    * @return $this
    */
    public function setL2($l2)
    {
        $this->container['l2'] = $l2;
        return $this;
    }

    /**
    * Gets l3
    *  是否为L3层。
    *
    * @return bool|null
    */
    public function getL3()
    {
        return $this->container['l3'];
    }

    /**
    * Sets l3
    *
    * @param bool|null $l3 是否为L3层。
    *
    * @return $this
    */
    public function setL3($l3)
    {
        $this->container['l3'] = $l3;
        return $this;
    }

    /**
    * Gets ordinal
    *  顺序编号。
    *
    * @return int|null
    */
    public function getOrdinal()
    {
        return $this->container['ordinal'];
    }

    /**
    * Sets ordinal
    *
    * @param int|null $ordinal 顺序编号。
    *
    * @return $this
    */
    public function setOrdinal($ordinal)
    {
        $this->container['ordinal'] = $ordinal;
        return $this;
    }

    /**
    * Gets tenantId
    *  租户ID。
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 租户ID。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets selfDefinedFields
    *  自定义项。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SelfDefinedFieldVO[]|null
    */
    public function getSelfDefinedFields()
    {
        return $this->container['selfDefinedFields'];
    }

    /**
    * Sets selfDefinedFields
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SelfDefinedFieldVO[]|null $selfDefinedFields 自定义项。
    *
    * @return $this
    */
    public function setSelfDefinedFields($selfDefinedFields)
    {
        $this->container['selfDefinedFields'] = $selfDefinedFields;
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

