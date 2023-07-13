<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KeystoneListProjectsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KeystoneListProjectsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  项目所属账号ID，获取方式请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    * name  项目名称，获取方式请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    * parentId  如果查询自己创建的项目，则此处应填为所属区域的项目ID。  如果查询的是系统内置项目，如cn-north-4，则此处应填为账号ID。  获取项目ID和账号ID，请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    * enabled  项目是否启用。
    * isDomain  该字段无需填写。
    * page  分页查询时数据的页数，查询值最小为1。需要与per_page同时存在。
    * perPage  分页查询时每页的数据个数，取值范围为[1,5000]。需要与page同时存在。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'name' => 'string',
            'parentId' => 'string',
            'enabled' => 'bool',
            'isDomain' => 'bool',
            'page' => 'int',
            'perPage' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  项目所属账号ID，获取方式请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    * name  项目名称，获取方式请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    * parentId  如果查询自己创建的项目，则此处应填为所属区域的项目ID。  如果查询的是系统内置项目，如cn-north-4，则此处应填为账号ID。  获取项目ID和账号ID，请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    * enabled  项目是否启用。
    * isDomain  该字段无需填写。
    * page  分页查询时数据的页数，查询值最小为1。需要与per_page同时存在。
    * perPage  分页查询时每页的数据个数，取值范围为[1,5000]。需要与page同时存在。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'name' => null,
        'parentId' => null,
        'enabled' => null,
        'isDomain' => null,
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
    * domainId  项目所属账号ID，获取方式请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    * name  项目名称，获取方式请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    * parentId  如果查询自己创建的项目，则此处应填为所属区域的项目ID。  如果查询的是系统内置项目，如cn-north-4，则此处应填为账号ID。  获取项目ID和账号ID，请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    * enabled  项目是否启用。
    * isDomain  该字段无需填写。
    * page  分页查询时数据的页数，查询值最小为1。需要与per_page同时存在。
    * perPage  分页查询时每页的数据个数，取值范围为[1,5000]。需要与page同时存在。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'name' => 'name',
            'parentId' => 'parent_id',
            'enabled' => 'enabled',
            'isDomain' => 'is_domain',
            'page' => 'page',
            'perPage' => 'per_page'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  项目所属账号ID，获取方式请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    * name  项目名称，获取方式请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    * parentId  如果查询自己创建的项目，则此处应填为所属区域的项目ID。  如果查询的是系统内置项目，如cn-north-4，则此处应填为账号ID。  获取项目ID和账号ID，请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    * enabled  项目是否启用。
    * isDomain  该字段无需填写。
    * page  分页查询时数据的页数，查询值最小为1。需要与per_page同时存在。
    * perPage  分页查询时每页的数据个数，取值范围为[1,5000]。需要与page同时存在。
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'name' => 'setName',
            'parentId' => 'setParentId',
            'enabled' => 'setEnabled',
            'isDomain' => 'setIsDomain',
            'page' => 'setPage',
            'perPage' => 'setPerPage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  项目所属账号ID，获取方式请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    * name  项目名称，获取方式请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    * parentId  如果查询自己创建的项目，则此处应填为所属区域的项目ID。  如果查询的是系统内置项目，如cn-north-4，则此处应填为账号ID。  获取项目ID和账号ID，请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    * enabled  项目是否启用。
    * isDomain  该字段无需填写。
    * page  分页查询时数据的页数，查询值最小为1。需要与per_page同时存在。
    * perPage  分页查询时每页的数据个数，取值范围为[1,5000]。需要与page同时存在。
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'name' => 'getName',
            'parentId' => 'getParentId',
            'enabled' => 'getEnabled',
            'isDomain' => 'getIsDomain',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['isDomain'] = isset($data['isDomain']) ? $data['isDomain'] : null;
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
            if (!is_null($this->container['page']) && ($this->container['page'] < 1)) {
                $invalidProperties[] = "invalid value for 'page', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['perPage']) && ($this->container['perPage'] > 5000)) {
                $invalidProperties[] = "invalid value for 'perPage', must be smaller than or equal to 5000.";
            }
            if (!is_null($this->container['perPage']) && ($this->container['perPage'] < 1)) {
                $invalidProperties[] = "invalid value for 'perPage', must be bigger than or equal to 1.";
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
    *  项目所属账号ID，获取方式请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
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
    * @param string|null $domainId 项目所属账号ID，获取方式请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets name
    *  项目名称，获取方式请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
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
    * @param string|null $name 项目名称，获取方式请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets parentId
    *  如果查询自己创建的项目，则此处应填为所属区域的项目ID。  如果查询的是系统内置项目，如cn-north-4，则此处应填为账号ID。  获取项目ID和账号ID，请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
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
    * @param string|null $parentId 如果查询自己创建的项目，则此处应填为所属区域的项目ID。  如果查询的是系统内置项目，如cn-north-4，则此处应填为账号ID。  获取项目ID和账号ID，请参见：[获取账号、IAM用户、项目、用户组、委托的名称和ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets enabled
    *  项目是否启用。
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 项目是否启用。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets isDomain
    *  该字段无需填写。
    *
    * @return bool|null
    */
    public function getIsDomain()
    {
        return $this->container['isDomain'];
    }

    /**
    * Sets isDomain
    *
    * @param bool|null $isDomain 该字段无需填写。
    *
    * @return $this
    */
    public function setIsDomain($isDomain)
    {
        $this->container['isDomain'] = $isDomain;
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
    *  分页查询时每页的数据个数，取值范围为[1,5000]。需要与page同时存在。
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
    * @param int|null $perPage 分页查询时每页的数据个数，取值范围为[1,5000]。需要与page同时存在。
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

