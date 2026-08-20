<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SnapshotsVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SnapshotsVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * title  快照标题。
    * issueId  工作项ID。
    * snapshot2workitem  快照记录工作项。键为工作项类型编码（如 Bug、IR），值为 IssueVO 对象或工作项ID字符串。
    * createdBy  createdBy
    * modifiedBy  modifiedBy
    * category  工作项类型。
    * description  描述信息。
    * path  工作项父子挂载路径。
    * region  区域。
    * id  快照ID。
    * tenantId  租户ID。
    * createdDate  快照创建时间，unix时间戳，单位：毫秒。
    * modifiedDate  快照最后修改时间，unix时间戳，单位：毫秒。
    * domainId  项目空间ID。
    * type  快照类型。
    * snapBaseInfoId  快照基础信息ID。
    * issueCategory  工作项类型编码。
    * parentId  父工作项ID。
    * rootId  根工作项ID。
    * parentFullPath  父工作项完整路径。
    * parentPath  父工作项路径。
    * fullPath  工作项完整路径。
    * versionNumber  快照版本号。
    * deletable  是否可删除。
    * categoryName  工作项类型名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'title' => 'string',
            'issueId' => 'string',
            'snapshot2workitem' => 'object',
            'createdBy' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO',
            'modifiedBy' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO',
            'category' => 'string',
            'description' => 'string',
            'path' => 'string',
            'region' => 'string',
            'id' => 'string',
            'tenantId' => 'string',
            'createdDate' => 'string',
            'modifiedDate' => 'string',
            'domainId' => 'string',
            'type' => 'string',
            'snapBaseInfoId' => 'string',
            'issueCategory' => 'string',
            'parentId' => 'string',
            'rootId' => 'string',
            'parentFullPath' => 'string',
            'parentPath' => 'string',
            'fullPath' => 'string',
            'versionNumber' => 'int',
            'deletable' => 'bool',
            'categoryName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * title  快照标题。
    * issueId  工作项ID。
    * snapshot2workitem  快照记录工作项。键为工作项类型编码（如 Bug、IR），值为 IssueVO 对象或工作项ID字符串。
    * createdBy  createdBy
    * modifiedBy  modifiedBy
    * category  工作项类型。
    * description  描述信息。
    * path  工作项父子挂载路径。
    * region  区域。
    * id  快照ID。
    * tenantId  租户ID。
    * createdDate  快照创建时间，unix时间戳，单位：毫秒。
    * modifiedDate  快照最后修改时间，unix时间戳，单位：毫秒。
    * domainId  项目空间ID。
    * type  快照类型。
    * snapBaseInfoId  快照基础信息ID。
    * issueCategory  工作项类型编码。
    * parentId  父工作项ID。
    * rootId  根工作项ID。
    * parentFullPath  父工作项完整路径。
    * parentPath  父工作项路径。
    * fullPath  工作项完整路径。
    * versionNumber  快照版本号。
    * deletable  是否可删除。
    * categoryName  工作项类型名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'title' => null,
        'issueId' => null,
        'snapshot2workitem' => null,
        'createdBy' => null,
        'modifiedBy' => null,
        'category' => null,
        'description' => null,
        'path' => null,
        'region' => null,
        'id' => null,
        'tenantId' => null,
        'createdDate' => null,
        'modifiedDate' => null,
        'domainId' => null,
        'type' => null,
        'snapBaseInfoId' => null,
        'issueCategory' => null,
        'parentId' => null,
        'rootId' => null,
        'parentFullPath' => null,
        'parentPath' => null,
        'fullPath' => null,
        'versionNumber' => 'int32',
        'deletable' => null,
        'categoryName' => null
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
    * title  快照标题。
    * issueId  工作项ID。
    * snapshot2workitem  快照记录工作项。键为工作项类型编码（如 Bug、IR），值为 IssueVO 对象或工作项ID字符串。
    * createdBy  createdBy
    * modifiedBy  modifiedBy
    * category  工作项类型。
    * description  描述信息。
    * path  工作项父子挂载路径。
    * region  区域。
    * id  快照ID。
    * tenantId  租户ID。
    * createdDate  快照创建时间，unix时间戳，单位：毫秒。
    * modifiedDate  快照最后修改时间，unix时间戳，单位：毫秒。
    * domainId  项目空间ID。
    * type  快照类型。
    * snapBaseInfoId  快照基础信息ID。
    * issueCategory  工作项类型编码。
    * parentId  父工作项ID。
    * rootId  根工作项ID。
    * parentFullPath  父工作项完整路径。
    * parentPath  父工作项路径。
    * fullPath  工作项完整路径。
    * versionNumber  快照版本号。
    * deletable  是否可删除。
    * categoryName  工作项类型名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'title' => 'title',
            'issueId' => 'issue_id',
            'snapshot2workitem' => 'snapshot2workitem',
            'createdBy' => 'created_by',
            'modifiedBy' => 'modified_by',
            'category' => 'category',
            'description' => 'description',
            'path' => 'path',
            'region' => 'region',
            'id' => 'id',
            'tenantId' => 'tenant_id',
            'createdDate' => 'created_date',
            'modifiedDate' => 'modified_date',
            'domainId' => 'domain_id',
            'type' => 'type',
            'snapBaseInfoId' => 'snap_base_info_id',
            'issueCategory' => 'issue_category',
            'parentId' => 'parent_id',
            'rootId' => 'root_id',
            'parentFullPath' => 'parent_full_path',
            'parentPath' => 'parent_path',
            'fullPath' => 'full_path',
            'versionNumber' => 'version_number',
            'deletable' => 'deletable',
            'categoryName' => 'category_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * title  快照标题。
    * issueId  工作项ID。
    * snapshot2workitem  快照记录工作项。键为工作项类型编码（如 Bug、IR），值为 IssueVO 对象或工作项ID字符串。
    * createdBy  createdBy
    * modifiedBy  modifiedBy
    * category  工作项类型。
    * description  描述信息。
    * path  工作项父子挂载路径。
    * region  区域。
    * id  快照ID。
    * tenantId  租户ID。
    * createdDate  快照创建时间，unix时间戳，单位：毫秒。
    * modifiedDate  快照最后修改时间，unix时间戳，单位：毫秒。
    * domainId  项目空间ID。
    * type  快照类型。
    * snapBaseInfoId  快照基础信息ID。
    * issueCategory  工作项类型编码。
    * parentId  父工作项ID。
    * rootId  根工作项ID。
    * parentFullPath  父工作项完整路径。
    * parentPath  父工作项路径。
    * fullPath  工作项完整路径。
    * versionNumber  快照版本号。
    * deletable  是否可删除。
    * categoryName  工作项类型名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'title' => 'setTitle',
            'issueId' => 'setIssueId',
            'snapshot2workitem' => 'setSnapshot2workitem',
            'createdBy' => 'setCreatedBy',
            'modifiedBy' => 'setModifiedBy',
            'category' => 'setCategory',
            'description' => 'setDescription',
            'path' => 'setPath',
            'region' => 'setRegion',
            'id' => 'setId',
            'tenantId' => 'setTenantId',
            'createdDate' => 'setCreatedDate',
            'modifiedDate' => 'setModifiedDate',
            'domainId' => 'setDomainId',
            'type' => 'setType',
            'snapBaseInfoId' => 'setSnapBaseInfoId',
            'issueCategory' => 'setIssueCategory',
            'parentId' => 'setParentId',
            'rootId' => 'setRootId',
            'parentFullPath' => 'setParentFullPath',
            'parentPath' => 'setParentPath',
            'fullPath' => 'setFullPath',
            'versionNumber' => 'setVersionNumber',
            'deletable' => 'setDeletable',
            'categoryName' => 'setCategoryName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * title  快照标题。
    * issueId  工作项ID。
    * snapshot2workitem  快照记录工作项。键为工作项类型编码（如 Bug、IR），值为 IssueVO 对象或工作项ID字符串。
    * createdBy  createdBy
    * modifiedBy  modifiedBy
    * category  工作项类型。
    * description  描述信息。
    * path  工作项父子挂载路径。
    * region  区域。
    * id  快照ID。
    * tenantId  租户ID。
    * createdDate  快照创建时间，unix时间戳，单位：毫秒。
    * modifiedDate  快照最后修改时间，unix时间戳，单位：毫秒。
    * domainId  项目空间ID。
    * type  快照类型。
    * snapBaseInfoId  快照基础信息ID。
    * issueCategory  工作项类型编码。
    * parentId  父工作项ID。
    * rootId  根工作项ID。
    * parentFullPath  父工作项完整路径。
    * parentPath  父工作项路径。
    * fullPath  工作项完整路径。
    * versionNumber  快照版本号。
    * deletable  是否可删除。
    * categoryName  工作项类型名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'title' => 'getTitle',
            'issueId' => 'getIssueId',
            'snapshot2workitem' => 'getSnapshot2workitem',
            'createdBy' => 'getCreatedBy',
            'modifiedBy' => 'getModifiedBy',
            'category' => 'getCategory',
            'description' => 'getDescription',
            'path' => 'getPath',
            'region' => 'getRegion',
            'id' => 'getId',
            'tenantId' => 'getTenantId',
            'createdDate' => 'getCreatedDate',
            'modifiedDate' => 'getModifiedDate',
            'domainId' => 'getDomainId',
            'type' => 'getType',
            'snapBaseInfoId' => 'getSnapBaseInfoId',
            'issueCategory' => 'getIssueCategory',
            'parentId' => 'getParentId',
            'rootId' => 'getRootId',
            'parentFullPath' => 'getParentFullPath',
            'parentPath' => 'getParentPath',
            'fullPath' => 'getFullPath',
            'versionNumber' => 'getVersionNumber',
            'deletable' => 'getDeletable',
            'categoryName' => 'getCategoryName'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['issueId'] = isset($data['issueId']) ? $data['issueId'] : null;
        $this->container['snapshot2workitem'] = isset($data['snapshot2workitem']) ? $data['snapshot2workitem'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['modifiedDate'] = isset($data['modifiedDate']) ? $data['modifiedDate'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['snapBaseInfoId'] = isset($data['snapBaseInfoId']) ? $data['snapBaseInfoId'] : null;
        $this->container['issueCategory'] = isset($data['issueCategory']) ? $data['issueCategory'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['rootId'] = isset($data['rootId']) ? $data['rootId'] : null;
        $this->container['parentFullPath'] = isset($data['parentFullPath']) ? $data['parentFullPath'] : null;
        $this->container['parentPath'] = isset($data['parentPath']) ? $data['parentPath'] : null;
        $this->container['fullPath'] = isset($data['fullPath']) ? $data['fullPath'] : null;
        $this->container['versionNumber'] = isset($data['versionNumber']) ? $data['versionNumber'] : null;
        $this->container['deletable'] = isset($data['deletable']) ? $data['deletable'] : null;
        $this->container['categoryName'] = isset($data['categoryName']) ? $data['categoryName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 512)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 0)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['issueId']) && (mb_strlen($this->container['issueId']) > 512)) {
                $invalidProperties[] = "invalid value for 'issueId', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['issueId']) && (mb_strlen($this->container['issueId']) < 0)) {
                $invalidProperties[] = "invalid value for 'issueId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 512)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 0)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets title
    *  快照标题。
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
    * @param string|null $title 快照标题。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets issueId
    *  工作项ID。
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
    * @param string|null $issueId 工作项ID。
    *
    * @return $this
    */
    public function setIssueId($issueId)
    {
        $this->container['issueId'] = $issueId;
        return $this;
    }

    /**
    * Gets snapshot2workitem
    *  快照记录工作项。键为工作项类型编码（如 Bug、IR），值为 IssueVO 对象或工作项ID字符串。
    *
    * @return object|null
    */
    public function getSnapshot2workitem()
    {
        return $this->container['snapshot2workitem'];
    }

    /**
    * Sets snapshot2workitem
    *
    * @param object|null $snapshot2workitem 快照记录工作项。键为工作项类型编码（如 Bug、IR），值为 IssueVO 对象或工作项ID字符串。
    *
    * @return $this
    */
    public function setSnapshot2workitem($snapshot2workitem)
    {
        $this->container['snapshot2workitem'] = $snapshot2workitem;
        return $this;
    }

    /**
    * Gets createdBy
    *  createdBy
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null $createdBy createdBy
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets modifiedBy
    *  modifiedBy
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null
    */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
    * Sets modifiedBy
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\UserVO|null $modifiedBy modifiedBy
    *
    * @return $this
    */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;
        return $this;
    }

    /**
    * Gets category
    *  工作项类型。
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 工作项类型。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
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
    * Gets path
    *  工作项父子挂载路径。
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
    * @param string|null $path 工作项父子挂载路径。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets region
    *  区域。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets id
    *  快照ID。
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
    * @param string|null $id 快照ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    * Gets createdDate
    *  快照创建时间，unix时间戳，单位：毫秒。
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
    * @param string|null $createdDate 快照创建时间，unix时间戳，单位：毫秒。
    *
    * @return $this
    */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;
        return $this;
    }

    /**
    * Gets modifiedDate
    *  快照最后修改时间，unix时间戳，单位：毫秒。
    *
    * @return string|null
    */
    public function getModifiedDate()
    {
        return $this->container['modifiedDate'];
    }

    /**
    * Sets modifiedDate
    *
    * @param string|null $modifiedDate 快照最后修改时间，unix时间戳，单位：毫秒。
    *
    * @return $this
    */
    public function setModifiedDate($modifiedDate)
    {
        $this->container['modifiedDate'] = $modifiedDate;
        return $this;
    }

    /**
    * Gets domainId
    *  项目空间ID。
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 项目空间ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets type
    *  快照类型。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 快照类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets snapBaseInfoId
    *  快照基础信息ID。
    *
    * @return string|null
    */
    public function getSnapBaseInfoId()
    {
        return $this->container['snapBaseInfoId'];
    }

    /**
    * Sets snapBaseInfoId
    *
    * @param string|null $snapBaseInfoId 快照基础信息ID。
    *
    * @return $this
    */
    public function setSnapBaseInfoId($snapBaseInfoId)
    {
        $this->container['snapBaseInfoId'] = $snapBaseInfoId;
        return $this;
    }

    /**
    * Gets issueCategory
    *  工作项类型编码。
    *
    * @return string|null
    */
    public function getIssueCategory()
    {
        return $this->container['issueCategory'];
    }

    /**
    * Sets issueCategory
    *
    * @param string|null $issueCategory 工作项类型编码。
    *
    * @return $this
    */
    public function setIssueCategory($issueCategory)
    {
        $this->container['issueCategory'] = $issueCategory;
        return $this;
    }

    /**
    * Gets parentId
    *  父工作项ID。
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
    * @param string|null $parentId 父工作项ID。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets rootId
    *  根工作项ID。
    *
    * @return string|null
    */
    public function getRootId()
    {
        return $this->container['rootId'];
    }

    /**
    * Sets rootId
    *
    * @param string|null $rootId 根工作项ID。
    *
    * @return $this
    */
    public function setRootId($rootId)
    {
        $this->container['rootId'] = $rootId;
        return $this;
    }

    /**
    * Gets parentFullPath
    *  父工作项完整路径。
    *
    * @return string|null
    */
    public function getParentFullPath()
    {
        return $this->container['parentFullPath'];
    }

    /**
    * Sets parentFullPath
    *
    * @param string|null $parentFullPath 父工作项完整路径。
    *
    * @return $this
    */
    public function setParentFullPath($parentFullPath)
    {
        $this->container['parentFullPath'] = $parentFullPath;
        return $this;
    }

    /**
    * Gets parentPath
    *  父工作项路径。
    *
    * @return string|null
    */
    public function getParentPath()
    {
        return $this->container['parentPath'];
    }

    /**
    * Sets parentPath
    *
    * @param string|null $parentPath 父工作项路径。
    *
    * @return $this
    */
    public function setParentPath($parentPath)
    {
        $this->container['parentPath'] = $parentPath;
        return $this;
    }

    /**
    * Gets fullPath
    *  工作项完整路径。
    *
    * @return string|null
    */
    public function getFullPath()
    {
        return $this->container['fullPath'];
    }

    /**
    * Sets fullPath
    *
    * @param string|null $fullPath 工作项完整路径。
    *
    * @return $this
    */
    public function setFullPath($fullPath)
    {
        $this->container['fullPath'] = $fullPath;
        return $this;
    }

    /**
    * Gets versionNumber
    *  快照版本号。
    *
    * @return int|null
    */
    public function getVersionNumber()
    {
        return $this->container['versionNumber'];
    }

    /**
    * Sets versionNumber
    *
    * @param int|null $versionNumber 快照版本号。
    *
    * @return $this
    */
    public function setVersionNumber($versionNumber)
    {
        $this->container['versionNumber'] = $versionNumber;
        return $this;
    }

    /**
    * Gets deletable
    *  是否可删除。
    *
    * @return bool|null
    */
    public function getDeletable()
    {
        return $this->container['deletable'];
    }

    /**
    * Sets deletable
    *
    * @param bool|null $deletable 是否可删除。
    *
    * @return $this
    */
    public function setDeletable($deletable)
    {
        $this->container['deletable'] = $deletable;
        return $this;
    }

    /**
    * Gets categoryName
    *  工作项类型名称。
    *
    * @return string|null
    */
    public function getCategoryName()
    {
        return $this->container['categoryName'];
    }

    /**
    * Sets categoryName
    *
    * @param string|null $categoryName 工作项类型名称。
    *
    * @return $this
    */
    public function setCategoryName($categoryName)
    {
        $this->container['categoryName'] = $categoryName;
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

