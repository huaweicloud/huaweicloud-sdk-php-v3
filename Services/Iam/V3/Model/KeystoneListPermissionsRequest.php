<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KeystoneListPermissionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KeystoneListPermissionsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  系统内部呈现的权限名称。如云目录服务CCS普通用户权限CCS User的name为ccs_user。 建议您传参display_name，不传name参数。
    * domainId  账号ID，获取方式请参见：[获取账号ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。 > - 如果填写此参数，则返回账号下所有自定义策略。 > - 如果不填写此参数，则返回所有系统权限（包含系统策略和系统角色）。
    * page  分页查询时数据的页数，查询值最小为1。需要与per_page同时存在。传入domain_id参数查询自定义策略时，可配套使用。
    * perPage  分页查询时每页的数据个数，取值范围为[1,300]，默认值为300。需要与page同时存在。不传page和per_page参数时，每页最多返回300个权限。
    * permissionType  区分系统权限类型的参数。当domain_id参数为空时生效。 > - policy：返回系统策略。 > - role：返回系统角色。
    * displayName  过滤权限名称。如传参为Administrator，则返回满足条件的所有管理员权限。
    * type  过滤权限的显示模式。取值范围：domain,project,all。type为domain时，返回type=AA或AX的权限；type为project时，返回type=AA或XA的权限；type为all时返回type为AA、AX、XA的权限。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - AA表示在domain和project层均显示。 > - XX表示在domain和project层均不显示。
    * catalog  权限所在目录。catalog值精确匹配策略的catalog字段(可以过滤服务的策略、或者自定义策略)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'domainId' => 'string',
            'page' => 'int',
            'perPage' => 'int',
            'permissionType' => 'string',
            'displayName' => 'string',
            'type' => 'string',
            'catalog' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  系统内部呈现的权限名称。如云目录服务CCS普通用户权限CCS User的name为ccs_user。 建议您传参display_name，不传name参数。
    * domainId  账号ID，获取方式请参见：[获取账号ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。 > - 如果填写此参数，则返回账号下所有自定义策略。 > - 如果不填写此参数，则返回所有系统权限（包含系统策略和系统角色）。
    * page  分页查询时数据的页数，查询值最小为1。需要与per_page同时存在。传入domain_id参数查询自定义策略时，可配套使用。
    * perPage  分页查询时每页的数据个数，取值范围为[1,300]，默认值为300。需要与page同时存在。不传page和per_page参数时，每页最多返回300个权限。
    * permissionType  区分系统权限类型的参数。当domain_id参数为空时生效。 > - policy：返回系统策略。 > - role：返回系统角色。
    * displayName  过滤权限名称。如传参为Administrator，则返回满足条件的所有管理员权限。
    * type  过滤权限的显示模式。取值范围：domain,project,all。type为domain时，返回type=AA或AX的权限；type为project时，返回type=AA或XA的权限；type为all时返回type为AA、AX、XA的权限。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - AA表示在domain和project层均显示。 > - XX表示在domain和project层均不显示。
    * catalog  权限所在目录。catalog值精确匹配策略的catalog字段(可以过滤服务的策略、或者自定义策略)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'domainId' => null,
        'page' => 'int32',
        'perPage' => 'int32',
        'permissionType' => null,
        'displayName' => null,
        'type' => null,
        'catalog' => null
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
    * name  系统内部呈现的权限名称。如云目录服务CCS普通用户权限CCS User的name为ccs_user。 建议您传参display_name，不传name参数。
    * domainId  账号ID，获取方式请参见：[获取账号ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。 > - 如果填写此参数，则返回账号下所有自定义策略。 > - 如果不填写此参数，则返回所有系统权限（包含系统策略和系统角色）。
    * page  分页查询时数据的页数，查询值最小为1。需要与per_page同时存在。传入domain_id参数查询自定义策略时，可配套使用。
    * perPage  分页查询时每页的数据个数，取值范围为[1,300]，默认值为300。需要与page同时存在。不传page和per_page参数时，每页最多返回300个权限。
    * permissionType  区分系统权限类型的参数。当domain_id参数为空时生效。 > - policy：返回系统策略。 > - role：返回系统角色。
    * displayName  过滤权限名称。如传参为Administrator，则返回满足条件的所有管理员权限。
    * type  过滤权限的显示模式。取值范围：domain,project,all。type为domain时，返回type=AA或AX的权限；type为project时，返回type=AA或XA的权限；type为all时返回type为AA、AX、XA的权限。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - AA表示在domain和project层均显示。 > - XX表示在domain和project层均不显示。
    * catalog  权限所在目录。catalog值精确匹配策略的catalog字段(可以过滤服务的策略、或者自定义策略)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'domainId' => 'domain_id',
            'page' => 'page',
            'perPage' => 'per_page',
            'permissionType' => 'permission_type',
            'displayName' => 'display_name',
            'type' => 'type',
            'catalog' => 'catalog'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  系统内部呈现的权限名称。如云目录服务CCS普通用户权限CCS User的name为ccs_user。 建议您传参display_name，不传name参数。
    * domainId  账号ID，获取方式请参见：[获取账号ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。 > - 如果填写此参数，则返回账号下所有自定义策略。 > - 如果不填写此参数，则返回所有系统权限（包含系统策略和系统角色）。
    * page  分页查询时数据的页数，查询值最小为1。需要与per_page同时存在。传入domain_id参数查询自定义策略时，可配套使用。
    * perPage  分页查询时每页的数据个数，取值范围为[1,300]，默认值为300。需要与page同时存在。不传page和per_page参数时，每页最多返回300个权限。
    * permissionType  区分系统权限类型的参数。当domain_id参数为空时生效。 > - policy：返回系统策略。 > - role：返回系统角色。
    * displayName  过滤权限名称。如传参为Administrator，则返回满足条件的所有管理员权限。
    * type  过滤权限的显示模式。取值范围：domain,project,all。type为domain时，返回type=AA或AX的权限；type为project时，返回type=AA或XA的权限；type为all时返回type为AA、AX、XA的权限。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - AA表示在domain和project层均显示。 > - XX表示在domain和project层均不显示。
    * catalog  权限所在目录。catalog值精确匹配策略的catalog字段(可以过滤服务的策略、或者自定义策略)。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'domainId' => 'setDomainId',
            'page' => 'setPage',
            'perPage' => 'setPerPage',
            'permissionType' => 'setPermissionType',
            'displayName' => 'setDisplayName',
            'type' => 'setType',
            'catalog' => 'setCatalog'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  系统内部呈现的权限名称。如云目录服务CCS普通用户权限CCS User的name为ccs_user。 建议您传参display_name，不传name参数。
    * domainId  账号ID，获取方式请参见：[获取账号ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。 > - 如果填写此参数，则返回账号下所有自定义策略。 > - 如果不填写此参数，则返回所有系统权限（包含系统策略和系统角色）。
    * page  分页查询时数据的页数，查询值最小为1。需要与per_page同时存在。传入domain_id参数查询自定义策略时，可配套使用。
    * perPage  分页查询时每页的数据个数，取值范围为[1,300]，默认值为300。需要与page同时存在。不传page和per_page参数时，每页最多返回300个权限。
    * permissionType  区分系统权限类型的参数。当domain_id参数为空时生效。 > - policy：返回系统策略。 > - role：返回系统角色。
    * displayName  过滤权限名称。如传参为Administrator，则返回满足条件的所有管理员权限。
    * type  过滤权限的显示模式。取值范围：domain,project,all。type为domain时，返回type=AA或AX的权限；type为project时，返回type=AA或XA的权限；type为all时返回type为AA、AX、XA的权限。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - AA表示在domain和project层均显示。 > - XX表示在domain和project层均不显示。
    * catalog  权限所在目录。catalog值精确匹配策略的catalog字段(可以过滤服务的策略、或者自定义策略)。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'domainId' => 'getDomainId',
            'page' => 'getPage',
            'perPage' => 'getPerPage',
            'permissionType' => 'getPermissionType',
            'displayName' => 'getDisplayName',
            'type' => 'getType',
            'catalog' => 'getCatalog'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['perPage'] = isset($data['perPage']) ? $data['perPage'] : null;
        $this->container['permissionType'] = isset($data['permissionType']) ? $data['permissionType'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['catalog'] = isset($data['catalog']) ? $data['catalog'] : null;
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
    * Gets name
    *  系统内部呈现的权限名称。如云目录服务CCS普通用户权限CCS User的name为ccs_user。 建议您传参display_name，不传name参数。
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
    * @param string|null $name 系统内部呈现的权限名称。如云目录服务CCS普通用户权限CCS User的name为ccs_user。 建议您传参display_name，不传name参数。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets domainId
    *  账号ID，获取方式请参见：[获取账号ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。 > - 如果填写此参数，则返回账号下所有自定义策略。 > - 如果不填写此参数，则返回所有系统权限（包含系统策略和系统角色）。
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
    * @param string|null $domainId 账号ID，获取方式请参见：[获取账号ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。 > - 如果填写此参数，则返回账号下所有自定义策略。 > - 如果不填写此参数，则返回所有系统权限（包含系统策略和系统角色）。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets page
    *  分页查询时数据的页数，查询值最小为1。需要与per_page同时存在。传入domain_id参数查询自定义策略时，可配套使用。
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
    * @param int|null $page 分页查询时数据的页数，查询值最小为1。需要与per_page同时存在。传入domain_id参数查询自定义策略时，可配套使用。
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
    *  分页查询时每页的数据个数，取值范围为[1,300]，默认值为300。需要与page同时存在。不传page和per_page参数时，每页最多返回300个权限。
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
    * @param int|null $perPage 分页查询时每页的数据个数，取值范围为[1,300]，默认值为300。需要与page同时存在。不传page和per_page参数时，每页最多返回300个权限。
    *
    * @return $this
    */
    public function setPerPage($perPage)
    {
        $this->container['perPage'] = $perPage;
        return $this;
    }

    /**
    * Gets permissionType
    *  区分系统权限类型的参数。当domain_id参数为空时生效。 > - policy：返回系统策略。 > - role：返回系统角色。
    *
    * @return string|null
    */
    public function getPermissionType()
    {
        return $this->container['permissionType'];
    }

    /**
    * Sets permissionType
    *
    * @param string|null $permissionType 区分系统权限类型的参数。当domain_id参数为空时生效。 > - policy：返回系统策略。 > - role：返回系统角色。
    *
    * @return $this
    */
    public function setPermissionType($permissionType)
    {
        $this->container['permissionType'] = $permissionType;
        return $this;
    }

    /**
    * Gets displayName
    *  过滤权限名称。如传参为Administrator，则返回满足条件的所有管理员权限。
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 过滤权限名称。如传参为Administrator，则返回满足条件的所有管理员权限。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets type
    *  过滤权限的显示模式。取值范围：domain,project,all。type为domain时，返回type=AA或AX的权限；type为project时，返回type=AA或XA的权限；type为all时返回type为AA、AX、XA的权限。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - AA表示在domain和project层均显示。 > - XX表示在domain和project层均不显示。
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
    * @param string|null $type 过滤权限的显示模式。取值范围：domain,project,all。type为domain时，返回type=AA或AX的权限；type为project时，返回type=AA或XA的权限；type为all时返回type为AA、AX、XA的权限。 > - AX表示在domain层显示。 > - XA表示在project层显示。 > - AA表示在domain和project层均显示。 > - XX表示在domain和project层均不显示。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets catalog
    *  权限所在目录。catalog值精确匹配策略的catalog字段(可以过滤服务的策略、或者自定义策略)。
    *
    * @return string|null
    */
    public function getCatalog()
    {
        return $this->container['catalog'];
    }

    /**
    * Sets catalog
    *
    * @param string|null $catalog 权限所在目录。catalog值精确匹配策略的catalog字段(可以过滤服务的策略、或者自定义策略)。
    *
    * @return $this
    */
    public function setCatalog($catalog)
    {
        $this->container['catalog'] = $catalog;
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

