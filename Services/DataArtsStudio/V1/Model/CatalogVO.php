<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CatalogVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CatalogVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nameCh  中文名称。
    * nameEn  英文名称。
    * description  描述信息。
    * qualifiedName  扩展名。
    * guid  guid，自动生成。
    * code  编码。
    * alias  别名。
    * status  status
    * newBiz  newBiz
    * dataOwner  数据所有者。
    * dataOwnerList  数据所有者集合。
    * dataDepartment  数据域。
    * path  路径信息。
    * level  层级信息。
    * ordinal  序号。
    * owner  责任人。
    * parentId  父目录ID，木有则为根目录，填写String类型替代Long类型。
    * swapOrderId  同层排序，目标节点的ID，填写String类型替代Long类型。
    * id  主题ID，填写String类型替代Long类型。
    * qualifiedId  认证ID，自动生成。
    * fromPublic  是否来自公共层。
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * childrenNum  拥有子流程的数量，不包括子流程的子流程，前端不传。
    * children  下层子目录，只读。
    * selfDefinedFields  属性自定义项。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nameCh' => 'string',
            'nameEn' => 'string',
            'description' => 'string',
            'qualifiedName' => 'string',
            'guid' => 'string',
            'code' => 'string',
            'alias' => 'string',
            'status' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum',
            'newBiz' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizVersionManageVO',
            'dataOwner' => 'string',
            'dataOwnerList' => 'string',
            'dataDepartment' => 'string',
            'path' => 'string',
            'level' => 'int',
            'ordinal' => 'int',
            'owner' => 'string',
            'parentId' => 'string',
            'swapOrderId' => 'string',
            'id' => 'string',
            'qualifiedId' => 'string',
            'fromPublic' => 'bool',
            'createBy' => 'string',
            'updateBy' => 'string',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'childrenNum' => 'int',
            'children' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\CatalogVO[]',
            'selfDefinedFields' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SelfDefinedFieldVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nameCh  中文名称。
    * nameEn  英文名称。
    * description  描述信息。
    * qualifiedName  扩展名。
    * guid  guid，自动生成。
    * code  编码。
    * alias  别名。
    * status  status
    * newBiz  newBiz
    * dataOwner  数据所有者。
    * dataOwnerList  数据所有者集合。
    * dataDepartment  数据域。
    * path  路径信息。
    * level  层级信息。
    * ordinal  序号。
    * owner  责任人。
    * parentId  父目录ID，木有则为根目录，填写String类型替代Long类型。
    * swapOrderId  同层排序，目标节点的ID，填写String类型替代Long类型。
    * id  主题ID，填写String类型替代Long类型。
    * qualifiedId  认证ID，自动生成。
    * fromPublic  是否来自公共层。
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * childrenNum  拥有子流程的数量，不包括子流程的子流程，前端不传。
    * children  下层子目录，只读。
    * selfDefinedFields  属性自定义项。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nameCh' => null,
        'nameEn' => null,
        'description' => null,
        'qualifiedName' => null,
        'guid' => null,
        'code' => null,
        'alias' => null,
        'status' => null,
        'newBiz' => null,
        'dataOwner' => null,
        'dataOwnerList' => null,
        'dataDepartment' => null,
        'path' => null,
        'level' => null,
        'ordinal' => null,
        'owner' => null,
        'parentId' => null,
        'swapOrderId' => null,
        'id' => null,
        'qualifiedId' => null,
        'fromPublic' => null,
        'createBy' => null,
        'updateBy' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time',
        'childrenNum' => null,
        'children' => null,
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
    * nameCh  中文名称。
    * nameEn  英文名称。
    * description  描述信息。
    * qualifiedName  扩展名。
    * guid  guid，自动生成。
    * code  编码。
    * alias  别名。
    * status  status
    * newBiz  newBiz
    * dataOwner  数据所有者。
    * dataOwnerList  数据所有者集合。
    * dataDepartment  数据域。
    * path  路径信息。
    * level  层级信息。
    * ordinal  序号。
    * owner  责任人。
    * parentId  父目录ID，木有则为根目录，填写String类型替代Long类型。
    * swapOrderId  同层排序，目标节点的ID，填写String类型替代Long类型。
    * id  主题ID，填写String类型替代Long类型。
    * qualifiedId  认证ID，自动生成。
    * fromPublic  是否来自公共层。
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * childrenNum  拥有子流程的数量，不包括子流程的子流程，前端不传。
    * children  下层子目录，只读。
    * selfDefinedFields  属性自定义项。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nameCh' => 'name_ch',
            'nameEn' => 'name_en',
            'description' => 'description',
            'qualifiedName' => 'qualified_name',
            'guid' => 'guid',
            'code' => 'code',
            'alias' => 'alias',
            'status' => 'status',
            'newBiz' => 'new_biz',
            'dataOwner' => 'data_owner',
            'dataOwnerList' => 'data_owner_list',
            'dataDepartment' => 'data_department',
            'path' => 'path',
            'level' => 'level',
            'ordinal' => 'ordinal',
            'owner' => 'owner',
            'parentId' => 'parent_id',
            'swapOrderId' => 'swap_order_id',
            'id' => 'id',
            'qualifiedId' => 'qualified_id',
            'fromPublic' => 'from_public',
            'createBy' => 'create_by',
            'updateBy' => 'update_by',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'childrenNum' => 'children_num',
            'children' => 'children',
            'selfDefinedFields' => 'self_defined_fields'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nameCh  中文名称。
    * nameEn  英文名称。
    * description  描述信息。
    * qualifiedName  扩展名。
    * guid  guid，自动生成。
    * code  编码。
    * alias  别名。
    * status  status
    * newBiz  newBiz
    * dataOwner  数据所有者。
    * dataOwnerList  数据所有者集合。
    * dataDepartment  数据域。
    * path  路径信息。
    * level  层级信息。
    * ordinal  序号。
    * owner  责任人。
    * parentId  父目录ID，木有则为根目录，填写String类型替代Long类型。
    * swapOrderId  同层排序，目标节点的ID，填写String类型替代Long类型。
    * id  主题ID，填写String类型替代Long类型。
    * qualifiedId  认证ID，自动生成。
    * fromPublic  是否来自公共层。
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * childrenNum  拥有子流程的数量，不包括子流程的子流程，前端不传。
    * children  下层子目录，只读。
    * selfDefinedFields  属性自定义项。
    *
    * @var string[]
    */
    protected static $setters = [
            'nameCh' => 'setNameCh',
            'nameEn' => 'setNameEn',
            'description' => 'setDescription',
            'qualifiedName' => 'setQualifiedName',
            'guid' => 'setGuid',
            'code' => 'setCode',
            'alias' => 'setAlias',
            'status' => 'setStatus',
            'newBiz' => 'setNewBiz',
            'dataOwner' => 'setDataOwner',
            'dataOwnerList' => 'setDataOwnerList',
            'dataDepartment' => 'setDataDepartment',
            'path' => 'setPath',
            'level' => 'setLevel',
            'ordinal' => 'setOrdinal',
            'owner' => 'setOwner',
            'parentId' => 'setParentId',
            'swapOrderId' => 'setSwapOrderId',
            'id' => 'setId',
            'qualifiedId' => 'setQualifiedId',
            'fromPublic' => 'setFromPublic',
            'createBy' => 'setCreateBy',
            'updateBy' => 'setUpdateBy',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'childrenNum' => 'setChildrenNum',
            'children' => 'setChildren',
            'selfDefinedFields' => 'setSelfDefinedFields'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nameCh  中文名称。
    * nameEn  英文名称。
    * description  描述信息。
    * qualifiedName  扩展名。
    * guid  guid，自动生成。
    * code  编码。
    * alias  别名。
    * status  status
    * newBiz  newBiz
    * dataOwner  数据所有者。
    * dataOwnerList  数据所有者集合。
    * dataDepartment  数据域。
    * path  路径信息。
    * level  层级信息。
    * ordinal  序号。
    * owner  责任人。
    * parentId  父目录ID，木有则为根目录，填写String类型替代Long类型。
    * swapOrderId  同层排序，目标节点的ID，填写String类型替代Long类型。
    * id  主题ID，填写String类型替代Long类型。
    * qualifiedId  认证ID，自动生成。
    * fromPublic  是否来自公共层。
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * childrenNum  拥有子流程的数量，不包括子流程的子流程，前端不传。
    * children  下层子目录，只读。
    * selfDefinedFields  属性自定义项。
    *
    * @var string[]
    */
    protected static $getters = [
            'nameCh' => 'getNameCh',
            'nameEn' => 'getNameEn',
            'description' => 'getDescription',
            'qualifiedName' => 'getQualifiedName',
            'guid' => 'getGuid',
            'code' => 'getCode',
            'alias' => 'getAlias',
            'status' => 'getStatus',
            'newBiz' => 'getNewBiz',
            'dataOwner' => 'getDataOwner',
            'dataOwnerList' => 'getDataOwnerList',
            'dataDepartment' => 'getDataDepartment',
            'path' => 'getPath',
            'level' => 'getLevel',
            'ordinal' => 'getOrdinal',
            'owner' => 'getOwner',
            'parentId' => 'getParentId',
            'swapOrderId' => 'getSwapOrderId',
            'id' => 'getId',
            'qualifiedId' => 'getQualifiedId',
            'fromPublic' => 'getFromPublic',
            'createBy' => 'getCreateBy',
            'updateBy' => 'getUpdateBy',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'childrenNum' => 'getChildrenNum',
            'children' => 'getChildren',
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
        $this->container['nameCh'] = isset($data['nameCh']) ? $data['nameCh'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['qualifiedName'] = isset($data['qualifiedName']) ? $data['qualifiedName'] : null;
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['newBiz'] = isset($data['newBiz']) ? $data['newBiz'] : null;
        $this->container['dataOwner'] = isset($data['dataOwner']) ? $data['dataOwner'] : null;
        $this->container['dataOwnerList'] = isset($data['dataOwnerList']) ? $data['dataOwnerList'] : null;
        $this->container['dataDepartment'] = isset($data['dataDepartment']) ? $data['dataDepartment'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['ordinal'] = isset($data['ordinal']) ? $data['ordinal'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['swapOrderId'] = isset($data['swapOrderId']) ? $data['swapOrderId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['qualifiedId'] = isset($data['qualifiedId']) ? $data['qualifiedId'] : null;
        $this->container['fromPublic'] = isset($data['fromPublic']) ? $data['fromPublic'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['childrenNum'] = isset($data['childrenNum']) ? $data['childrenNum'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
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
            if (!is_null($this->container['nameCh']) && (mb_strlen($this->container['nameCh']) > 600)) {
                $invalidProperties[] = "invalid value for 'nameCh', the character length must be smaller than or equal to 600.";
            }
            if (!is_null($this->container['nameEn']) && (mb_strlen($this->container['nameEn']) > 600)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be smaller than or equal to 600.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 2000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) > 4000)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be smaller than or equal to 4000.";
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
    * Gets nameCh
    *  中文名称。
    *
    * @return string|null
    */
    public function getNameCh()
    {
        return $this->container['nameCh'];
    }

    /**
    * Sets nameCh
    *
    * @param string|null $nameCh 中文名称。
    *
    * @return $this
    */
    public function setNameCh($nameCh)
    {
        $this->container['nameCh'] = $nameCh;
        return $this;
    }

    /**
    * Gets nameEn
    *  英文名称。
    *
    * @return string|null
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param string|null $nameEn 英文名称。
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
        return $this;
    }

    /**
    * Gets description
    *  描述信息。
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
    * @param string|null $description 描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets qualifiedName
    *  扩展名。
    *
    * @return string|null
    */
    public function getQualifiedName()
    {
        return $this->container['qualifiedName'];
    }

    /**
    * Sets qualifiedName
    *
    * @param string|null $qualifiedName 扩展名。
    *
    * @return $this
    */
    public function setQualifiedName($qualifiedName)
    {
        $this->container['qualifiedName'] = $qualifiedName;
        return $this;
    }

    /**
    * Gets guid
    *  guid，自动生成。
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
    * @param string|null $guid guid，自动生成。
    *
    * @return $this
    */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;
        return $this;
    }

    /**
    * Gets code
    *  编码。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 编码。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
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
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets newBiz
    *  newBiz
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizVersionManageVO|null
    */
    public function getNewBiz()
    {
        return $this->container['newBiz'];
    }

    /**
    * Sets newBiz
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizVersionManageVO|null $newBiz newBiz
    *
    * @return $this
    */
    public function setNewBiz($newBiz)
    {
        $this->container['newBiz'] = $newBiz;
        return $this;
    }

    /**
    * Gets dataOwner
    *  数据所有者。
    *
    * @return string|null
    */
    public function getDataOwner()
    {
        return $this->container['dataOwner'];
    }

    /**
    * Sets dataOwner
    *
    * @param string|null $dataOwner 数据所有者。
    *
    * @return $this
    */
    public function setDataOwner($dataOwner)
    {
        $this->container['dataOwner'] = $dataOwner;
        return $this;
    }

    /**
    * Gets dataOwnerList
    *  数据所有者集合。
    *
    * @return string|null
    */
    public function getDataOwnerList()
    {
        return $this->container['dataOwnerList'];
    }

    /**
    * Sets dataOwnerList
    *
    * @param string|null $dataOwnerList 数据所有者集合。
    *
    * @return $this
    */
    public function setDataOwnerList($dataOwnerList)
    {
        $this->container['dataOwnerList'] = $dataOwnerList;
        return $this;
    }

    /**
    * Gets dataDepartment
    *  数据域。
    *
    * @return string|null
    */
    public function getDataDepartment()
    {
        return $this->container['dataDepartment'];
    }

    /**
    * Sets dataDepartment
    *
    * @param string|null $dataDepartment 数据域。
    *
    * @return $this
    */
    public function setDataDepartment($dataDepartment)
    {
        $this->container['dataDepartment'] = $dataDepartment;
        return $this;
    }

    /**
    * Gets path
    *  路径信息。
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 路径信息。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets level
    *  层级信息。
    *
    * @return int|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param int|null $level 层级信息。
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets ordinal
    *  序号。
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
    * @param int|null $ordinal 序号。
    *
    * @return $this
    */
    public function setOrdinal($ordinal)
    {
        $this->container['ordinal'] = $ordinal;
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
    * Gets parentId
    *  父目录ID，木有则为根目录，填写String类型替代Long类型。
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
    * @param string|null $parentId 父目录ID，木有则为根目录，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets swapOrderId
    *  同层排序，目标节点的ID，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getSwapOrderId()
    {
        return $this->container['swapOrderId'];
    }

    /**
    * Sets swapOrderId
    *
    * @param string|null $swapOrderId 同层排序，目标节点的ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setSwapOrderId($swapOrderId)
    {
        $this->container['swapOrderId'] = $swapOrderId;
        return $this;
    }

    /**
    * Gets id
    *  主题ID，填写String类型替代Long类型。
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
    * @param string|null $id 主题ID，填写String类型替代Long类型。
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
    * Gets fromPublic
    *  是否来自公共层。
    *
    * @return bool|null
    */
    public function getFromPublic()
    {
        return $this->container['fromPublic'];
    }

    /**
    * Sets fromPublic
    *
    * @param bool|null $fromPublic 是否来自公共层。
    *
    * @return $this
    */
    public function setFromPublic($fromPublic)
    {
        $this->container['fromPublic'] = $fromPublic;
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
    *  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
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
    * @param \DateTime|null $createTime 创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
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
    *  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
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
    * @param \DateTime|null $updateTime 更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets childrenNum
    *  拥有子流程的数量，不包括子流程的子流程，前端不传。
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
    * @param int|null $childrenNum 拥有子流程的数量，不包括子流程的子流程，前端不传。
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
    *  下层子目录，只读。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CatalogVO[]|null
    */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
    * Sets children
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\CatalogVO[]|null $children 下层子目录，只读。
    *
    * @return $this
    */
    public function setChildren($children)
    {
        $this->container['children'] = $children;
        return $this;
    }

    /**
    * Gets selfDefinedFields
    *  属性自定义项。
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
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SelfDefinedFieldVO[]|null $selfDefinedFields 属性自定义项。
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

