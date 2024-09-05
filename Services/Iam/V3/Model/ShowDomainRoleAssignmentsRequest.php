<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDomainRoleAssignmentsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDomainRoleAssignmentsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  待查询账号ID。
    * roleId  策略ID。
    * subject  授权主体,取值范围：user、group、agency。该参数与subject.user_id、subject.group_id、subject.agency_id只能选择一个。
    * subjectUserId  授权的IAM用户ID。
    * subjectGroupId  授权的用户组ID。
    * subjectAgencyId  授权的委托ID。
    * scope  授权范围，取值范围：project、domain、enterprise_project。该参数与scope.project_id、scope.domain_id、scope.enterprise_projects_id只能选择一个。 > - 如需查看全局服务授权记录，scope取值domain或填写scope.domain_id。 > - 如需查看基于所有资源的授权记录，scope取值为domain，且is_inherited取值为true > - 如需查看基于项目的授权记录，scope取值为project或填写scope.project_id。 > - 如需查看基于企业项目的授权记录，scope取值为enterprise_project或填写scope.enterprise_project_id。
    * scopeProjectId  授权的项目ID。
    * scopeDomainId  待查询账号ID。
    * scopeEnterpriseProjectsId  授权的企业项目ID。
    * isInherited  是否包含基于所有项目授权的记录，默认为false。当参数scope=domain或者scope.domain_id存在时生效。true：查询基于所有项目授权的记录。 false：查询基于全局服务授权的记录。
    * includeGroup  是否包含基于IAM用户所属用户组授权的记录，默认为true。当参数subject=user或者subject.user_id存在时生效。true：查询基于IAM用户授权、IAM用户所属用户组授权的记录。 false：仅查询基于IAM用户授权的记录。
    * page  分页查询时数据的页数，查询值最小为1。需要与per_page同时存在。
    * perPage  分页查询时每页的数据个数，取值范围为[1,50]。需要与page同时存在。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'roleId' => 'string',
            'subject' => 'string',
            'subjectUserId' => 'string',
            'subjectGroupId' => 'string',
            'subjectAgencyId' => 'string',
            'scope' => 'string',
            'scopeProjectId' => 'string',
            'scopeDomainId' => 'string',
            'scopeEnterpriseProjectsId' => 'string',
            'isInherited' => 'bool',
            'includeGroup' => 'bool',
            'page' => 'int',
            'perPage' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  待查询账号ID。
    * roleId  策略ID。
    * subject  授权主体,取值范围：user、group、agency。该参数与subject.user_id、subject.group_id、subject.agency_id只能选择一个。
    * subjectUserId  授权的IAM用户ID。
    * subjectGroupId  授权的用户组ID。
    * subjectAgencyId  授权的委托ID。
    * scope  授权范围，取值范围：project、domain、enterprise_project。该参数与scope.project_id、scope.domain_id、scope.enterprise_projects_id只能选择一个。 > - 如需查看全局服务授权记录，scope取值domain或填写scope.domain_id。 > - 如需查看基于所有资源的授权记录，scope取值为domain，且is_inherited取值为true > - 如需查看基于项目的授权记录，scope取值为project或填写scope.project_id。 > - 如需查看基于企业项目的授权记录，scope取值为enterprise_project或填写scope.enterprise_project_id。
    * scopeProjectId  授权的项目ID。
    * scopeDomainId  待查询账号ID。
    * scopeEnterpriseProjectsId  授权的企业项目ID。
    * isInherited  是否包含基于所有项目授权的记录，默认为false。当参数scope=domain或者scope.domain_id存在时生效。true：查询基于所有项目授权的记录。 false：查询基于全局服务授权的记录。
    * includeGroup  是否包含基于IAM用户所属用户组授权的记录，默认为true。当参数subject=user或者subject.user_id存在时生效。true：查询基于IAM用户授权、IAM用户所属用户组授权的记录。 false：仅查询基于IAM用户授权的记录。
    * page  分页查询时数据的页数，查询值最小为1。需要与per_page同时存在。
    * perPage  分页查询时每页的数据个数，取值范围为[1,50]。需要与page同时存在。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'roleId' => null,
        'subject' => null,
        'subjectUserId' => null,
        'subjectGroupId' => null,
        'subjectAgencyId' => null,
        'scope' => null,
        'scopeProjectId' => null,
        'scopeDomainId' => null,
        'scopeEnterpriseProjectsId' => null,
        'isInherited' => null,
        'includeGroup' => null,
        'page' => 'int32',
        'perPage' => 'int32'
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
    * domainId  待查询账号ID。
    * roleId  策略ID。
    * subject  授权主体,取值范围：user、group、agency。该参数与subject.user_id、subject.group_id、subject.agency_id只能选择一个。
    * subjectUserId  授权的IAM用户ID。
    * subjectGroupId  授权的用户组ID。
    * subjectAgencyId  授权的委托ID。
    * scope  授权范围，取值范围：project、domain、enterprise_project。该参数与scope.project_id、scope.domain_id、scope.enterprise_projects_id只能选择一个。 > - 如需查看全局服务授权记录，scope取值domain或填写scope.domain_id。 > - 如需查看基于所有资源的授权记录，scope取值为domain，且is_inherited取值为true > - 如需查看基于项目的授权记录，scope取值为project或填写scope.project_id。 > - 如需查看基于企业项目的授权记录，scope取值为enterprise_project或填写scope.enterprise_project_id。
    * scopeProjectId  授权的项目ID。
    * scopeDomainId  待查询账号ID。
    * scopeEnterpriseProjectsId  授权的企业项目ID。
    * isInherited  是否包含基于所有项目授权的记录，默认为false。当参数scope=domain或者scope.domain_id存在时生效。true：查询基于所有项目授权的记录。 false：查询基于全局服务授权的记录。
    * includeGroup  是否包含基于IAM用户所属用户组授权的记录，默认为true。当参数subject=user或者subject.user_id存在时生效。true：查询基于IAM用户授权、IAM用户所属用户组授权的记录。 false：仅查询基于IAM用户授权的记录。
    * page  分页查询时数据的页数，查询值最小为1。需要与per_page同时存在。
    * perPage  分页查询时每页的数据个数，取值范围为[1,50]。需要与page同时存在。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'roleId' => 'role_id',
            'subject' => 'subject',
            'subjectUserId' => 'subject.user_id',
            'subjectGroupId' => 'subject.group_id',
            'subjectAgencyId' => 'subject.agency_id',
            'scope' => 'scope',
            'scopeProjectId' => 'scope.project_id',
            'scopeDomainId' => 'scope.domain_id',
            'scopeEnterpriseProjectsId' => 'scope.enterprise_projects_id',
            'isInherited' => 'is_inherited',
            'includeGroup' => 'include_group',
            'page' => 'page',
            'perPage' => 'per_page'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  待查询账号ID。
    * roleId  策略ID。
    * subject  授权主体,取值范围：user、group、agency。该参数与subject.user_id、subject.group_id、subject.agency_id只能选择一个。
    * subjectUserId  授权的IAM用户ID。
    * subjectGroupId  授权的用户组ID。
    * subjectAgencyId  授权的委托ID。
    * scope  授权范围，取值范围：project、domain、enterprise_project。该参数与scope.project_id、scope.domain_id、scope.enterprise_projects_id只能选择一个。 > - 如需查看全局服务授权记录，scope取值domain或填写scope.domain_id。 > - 如需查看基于所有资源的授权记录，scope取值为domain，且is_inherited取值为true > - 如需查看基于项目的授权记录，scope取值为project或填写scope.project_id。 > - 如需查看基于企业项目的授权记录，scope取值为enterprise_project或填写scope.enterprise_project_id。
    * scopeProjectId  授权的项目ID。
    * scopeDomainId  待查询账号ID。
    * scopeEnterpriseProjectsId  授权的企业项目ID。
    * isInherited  是否包含基于所有项目授权的记录，默认为false。当参数scope=domain或者scope.domain_id存在时生效。true：查询基于所有项目授权的记录。 false：查询基于全局服务授权的记录。
    * includeGroup  是否包含基于IAM用户所属用户组授权的记录，默认为true。当参数subject=user或者subject.user_id存在时生效。true：查询基于IAM用户授权、IAM用户所属用户组授权的记录。 false：仅查询基于IAM用户授权的记录。
    * page  分页查询时数据的页数，查询值最小为1。需要与per_page同时存在。
    * perPage  分页查询时每页的数据个数，取值范围为[1,50]。需要与page同时存在。
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'roleId' => 'setRoleId',
            'subject' => 'setSubject',
            'subjectUserId' => 'setSubjectUserId',
            'subjectGroupId' => 'setSubjectGroupId',
            'subjectAgencyId' => 'setSubjectAgencyId',
            'scope' => 'setScope',
            'scopeProjectId' => 'setScopeProjectId',
            'scopeDomainId' => 'setScopeDomainId',
            'scopeEnterpriseProjectsId' => 'setScopeEnterpriseProjectsId',
            'isInherited' => 'setIsInherited',
            'includeGroup' => 'setIncludeGroup',
            'page' => 'setPage',
            'perPage' => 'setPerPage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  待查询账号ID。
    * roleId  策略ID。
    * subject  授权主体,取值范围：user、group、agency。该参数与subject.user_id、subject.group_id、subject.agency_id只能选择一个。
    * subjectUserId  授权的IAM用户ID。
    * subjectGroupId  授权的用户组ID。
    * subjectAgencyId  授权的委托ID。
    * scope  授权范围，取值范围：project、domain、enterprise_project。该参数与scope.project_id、scope.domain_id、scope.enterprise_projects_id只能选择一个。 > - 如需查看全局服务授权记录，scope取值domain或填写scope.domain_id。 > - 如需查看基于所有资源的授权记录，scope取值为domain，且is_inherited取值为true > - 如需查看基于项目的授权记录，scope取值为project或填写scope.project_id。 > - 如需查看基于企业项目的授权记录，scope取值为enterprise_project或填写scope.enterprise_project_id。
    * scopeProjectId  授权的项目ID。
    * scopeDomainId  待查询账号ID。
    * scopeEnterpriseProjectsId  授权的企业项目ID。
    * isInherited  是否包含基于所有项目授权的记录，默认为false。当参数scope=domain或者scope.domain_id存在时生效。true：查询基于所有项目授权的记录。 false：查询基于全局服务授权的记录。
    * includeGroup  是否包含基于IAM用户所属用户组授权的记录，默认为true。当参数subject=user或者subject.user_id存在时生效。true：查询基于IAM用户授权、IAM用户所属用户组授权的记录。 false：仅查询基于IAM用户授权的记录。
    * page  分页查询时数据的页数，查询值最小为1。需要与per_page同时存在。
    * perPage  分页查询时每页的数据个数，取值范围为[1,50]。需要与page同时存在。
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'roleId' => 'getRoleId',
            'subject' => 'getSubject',
            'subjectUserId' => 'getSubjectUserId',
            'subjectGroupId' => 'getSubjectGroupId',
            'subjectAgencyId' => 'getSubjectAgencyId',
            'scope' => 'getScope',
            'scopeProjectId' => 'getScopeProjectId',
            'scopeDomainId' => 'getScopeDomainId',
            'scopeEnterpriseProjectsId' => 'getScopeEnterpriseProjectsId',
            'isInherited' => 'getIsInherited',
            'includeGroup' => 'getIncludeGroup',
            'page' => 'getPage',
            'perPage' => 'getPerPage'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['roleId'] = isset($data['roleId']) ? $data['roleId'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['subjectUserId'] = isset($data['subjectUserId']) ? $data['subjectUserId'] : null;
        $this->container['subjectGroupId'] = isset($data['subjectGroupId']) ? $data['subjectGroupId'] : null;
        $this->container['subjectAgencyId'] = isset($data['subjectAgencyId']) ? $data['subjectAgencyId'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['scopeProjectId'] = isset($data['scopeProjectId']) ? $data['scopeProjectId'] : null;
        $this->container['scopeDomainId'] = isset($data['scopeDomainId']) ? $data['scopeDomainId'] : null;
        $this->container['scopeEnterpriseProjectsId'] = isset($data['scopeEnterpriseProjectsId']) ? $data['scopeEnterpriseProjectsId'] : null;
        $this->container['isInherited'] = isset($data['isInherited']) ? $data['isInherited'] : null;
        $this->container['includeGroup'] = isset($data['includeGroup']) ? $data['includeGroup'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['perPage'] = isset($data['perPage']) ? $data['perPage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
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
    * Gets domainId
    *  待查询账号ID。
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 待查询账号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets roleId
    *  策略ID。
    *
    * @return string|null
    */
    public function getRoleId()
    {
        return $this->container['roleId'];
    }

    /**
    * Sets roleId
    *
    * @param string|null $roleId 策略ID。
    *
    * @return $this
    */
    public function setRoleId($roleId)
    {
        $this->container['roleId'] = $roleId;
        return $this;
    }

    /**
    * Gets subject
    *  授权主体,取值范围：user、group、agency。该参数与subject.user_id、subject.group_id、subject.agency_id只能选择一个。
    *
    * @return string|null
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param string|null $subject 授权主体,取值范围：user、group、agency。该参数与subject.user_id、subject.group_id、subject.agency_id只能选择一个。
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets subjectUserId
    *  授权的IAM用户ID。
    *
    * @return string|null
    */
    public function getSubjectUserId()
    {
        return $this->container['subjectUserId'];
    }

    /**
    * Sets subjectUserId
    *
    * @param string|null $subjectUserId 授权的IAM用户ID。
    *
    * @return $this
    */
    public function setSubjectUserId($subjectUserId)
    {
        $this->container['subjectUserId'] = $subjectUserId;
        return $this;
    }

    /**
    * Gets subjectGroupId
    *  授权的用户组ID。
    *
    * @return string|null
    */
    public function getSubjectGroupId()
    {
        return $this->container['subjectGroupId'];
    }

    /**
    * Sets subjectGroupId
    *
    * @param string|null $subjectGroupId 授权的用户组ID。
    *
    * @return $this
    */
    public function setSubjectGroupId($subjectGroupId)
    {
        $this->container['subjectGroupId'] = $subjectGroupId;
        return $this;
    }

    /**
    * Gets subjectAgencyId
    *  授权的委托ID。
    *
    * @return string|null
    */
    public function getSubjectAgencyId()
    {
        return $this->container['subjectAgencyId'];
    }

    /**
    * Sets subjectAgencyId
    *
    * @param string|null $subjectAgencyId 授权的委托ID。
    *
    * @return $this
    */
    public function setSubjectAgencyId($subjectAgencyId)
    {
        $this->container['subjectAgencyId'] = $subjectAgencyId;
        return $this;
    }

    /**
    * Gets scope
    *  授权范围，取值范围：project、domain、enterprise_project。该参数与scope.project_id、scope.domain_id、scope.enterprise_projects_id只能选择一个。 > - 如需查看全局服务授权记录，scope取值domain或填写scope.domain_id。 > - 如需查看基于所有资源的授权记录，scope取值为domain，且is_inherited取值为true > - 如需查看基于项目的授权记录，scope取值为project或填写scope.project_id。 > - 如需查看基于企业项目的授权记录，scope取值为enterprise_project或填写scope.enterprise_project_id。
    *
    * @return string|null
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param string|null $scope 授权范围，取值范围：project、domain、enterprise_project。该参数与scope.project_id、scope.domain_id、scope.enterprise_projects_id只能选择一个。 > - 如需查看全局服务授权记录，scope取值domain或填写scope.domain_id。 > - 如需查看基于所有资源的授权记录，scope取值为domain，且is_inherited取值为true > - 如需查看基于项目的授权记录，scope取值为project或填写scope.project_id。 > - 如需查看基于企业项目的授权记录，scope取值为enterprise_project或填写scope.enterprise_project_id。
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets scopeProjectId
    *  授权的项目ID。
    *
    * @return string|null
    */
    public function getScopeProjectId()
    {
        return $this->container['scopeProjectId'];
    }

    /**
    * Sets scopeProjectId
    *
    * @param string|null $scopeProjectId 授权的项目ID。
    *
    * @return $this
    */
    public function setScopeProjectId($scopeProjectId)
    {
        $this->container['scopeProjectId'] = $scopeProjectId;
        return $this;
    }

    /**
    * Gets scopeDomainId
    *  待查询账号ID。
    *
    * @return string|null
    */
    public function getScopeDomainId()
    {
        return $this->container['scopeDomainId'];
    }

    /**
    * Sets scopeDomainId
    *
    * @param string|null $scopeDomainId 待查询账号ID。
    *
    * @return $this
    */
    public function setScopeDomainId($scopeDomainId)
    {
        $this->container['scopeDomainId'] = $scopeDomainId;
        return $this;
    }

    /**
    * Gets scopeEnterpriseProjectsId
    *  授权的企业项目ID。
    *
    * @return string|null
    */
    public function getScopeEnterpriseProjectsId()
    {
        return $this->container['scopeEnterpriseProjectsId'];
    }

    /**
    * Sets scopeEnterpriseProjectsId
    *
    * @param string|null $scopeEnterpriseProjectsId 授权的企业项目ID。
    *
    * @return $this
    */
    public function setScopeEnterpriseProjectsId($scopeEnterpriseProjectsId)
    {
        $this->container['scopeEnterpriseProjectsId'] = $scopeEnterpriseProjectsId;
        return $this;
    }

    /**
    * Gets isInherited
    *  是否包含基于所有项目授权的记录，默认为false。当参数scope=domain或者scope.domain_id存在时生效。true：查询基于所有项目授权的记录。 false：查询基于全局服务授权的记录。
    *
    * @return bool|null
    */
    public function getIsInherited()
    {
        return $this->container['isInherited'];
    }

    /**
    * Sets isInherited
    *
    * @param bool|null $isInherited 是否包含基于所有项目授权的记录，默认为false。当参数scope=domain或者scope.domain_id存在时生效。true：查询基于所有项目授权的记录。 false：查询基于全局服务授权的记录。
    *
    * @return $this
    */
    public function setIsInherited($isInherited)
    {
        $this->container['isInherited'] = $isInherited;
        return $this;
    }

    /**
    * Gets includeGroup
    *  是否包含基于IAM用户所属用户组授权的记录，默认为true。当参数subject=user或者subject.user_id存在时生效。true：查询基于IAM用户授权、IAM用户所属用户组授权的记录。 false：仅查询基于IAM用户授权的记录。
    *
    * @return bool|null
    */
    public function getIncludeGroup()
    {
        return $this->container['includeGroup'];
    }

    /**
    * Sets includeGroup
    *
    * @param bool|null $includeGroup 是否包含基于IAM用户所属用户组授权的记录，默认为true。当参数subject=user或者subject.user_id存在时生效。true：查询基于IAM用户授权、IAM用户所属用户组授权的记录。 false：仅查询基于IAM用户授权的记录。
    *
    * @return $this
    */
    public function setIncludeGroup($includeGroup)
    {
        $this->container['includeGroup'] = $includeGroup;
        return $this;
    }

    /**
    * Gets page
    *  分页查询时数据的页数，查询值最小为1。需要与per_page同时存在。
    *
    * @return int|null
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param int|null $page 分页查询时数据的页数，查询值最小为1。需要与per_page同时存在。
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets perPage
    *  分页查询时每页的数据个数，取值范围为[1,50]。需要与page同时存在。
    *
    * @return int|null
    */
    public function getPerPage()
    {
        return $this->container['perPage'];
    }

    /**
    * Sets perPage
    *
    * @param int|null $perPage 分页查询时每页的数据个数，取值范围为[1,50]。需要与page同时存在。
    *
    * @return $this
    */
    public function setPerPage($perPage)
    {
        $this->container['perPage'] = $perPage;
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

