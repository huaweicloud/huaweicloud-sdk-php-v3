<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateThirdPartyAssociateDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateThirdPartyAssociateDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tenantId  租户唯一标识ID。
    * title  工作项下关联外部链接的名称。
    * type  外部链接的类别。
    * modifiedDate  工作项下关联外部链接的修改时间。
    * createdBy  工作项下关联外部链接的创建人。
    * url  工作项下关联外部链接的地址。
    * domainId  租户下项目唯一标识ID。
    * workitemId  工作项实例对应的唯一标识ID。
    * modifiedBy  工作项下关联外部链接的修改人。
    * operationId  外部链接操作项ID。
    * id  新关联外部链接时会创建一条数据，该数据的唯一标识ID，可以在查询外部链接接口以及关联外部链接接口响应体中找到。
    * createdDate  工作项下关联外部链接的创建时间。
    * state  外部链接的生命周期。
    * category  外部链接的类型。
    * region  区域 。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tenantId' => 'string',
            'title' => 'string',
            'type' => 'string',
            'modifiedDate' => 'string',
            'createdBy' => 'string',
            'url' => 'string',
            'domainId' => 'string',
            'workitemId' => 'string',
            'modifiedBy' => 'string',
            'operationId' => 'string',
            'id' => 'string',
            'createdDate' => 'string',
            'state' => 'string',
            'category' => 'string',
            'region' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tenantId  租户唯一标识ID。
    * title  工作项下关联外部链接的名称。
    * type  外部链接的类别。
    * modifiedDate  工作项下关联外部链接的修改时间。
    * createdBy  工作项下关联外部链接的创建人。
    * url  工作项下关联外部链接的地址。
    * domainId  租户下项目唯一标识ID。
    * workitemId  工作项实例对应的唯一标识ID。
    * modifiedBy  工作项下关联外部链接的修改人。
    * operationId  外部链接操作项ID。
    * id  新关联外部链接时会创建一条数据，该数据的唯一标识ID，可以在查询外部链接接口以及关联外部链接接口响应体中找到。
    * createdDate  工作项下关联外部链接的创建时间。
    * state  外部链接的生命周期。
    * category  外部链接的类型。
    * region  区域 。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tenantId' => null,
        'title' => null,
        'type' => null,
        'modifiedDate' => null,
        'createdBy' => null,
        'url' => null,
        'domainId' => null,
        'workitemId' => null,
        'modifiedBy' => null,
        'operationId' => null,
        'id' => null,
        'createdDate' => null,
        'state' => null,
        'category' => null,
        'region' => null
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
    * tenantId  租户唯一标识ID。
    * title  工作项下关联外部链接的名称。
    * type  外部链接的类别。
    * modifiedDate  工作项下关联外部链接的修改时间。
    * createdBy  工作项下关联外部链接的创建人。
    * url  工作项下关联外部链接的地址。
    * domainId  租户下项目唯一标识ID。
    * workitemId  工作项实例对应的唯一标识ID。
    * modifiedBy  工作项下关联外部链接的修改人。
    * operationId  外部链接操作项ID。
    * id  新关联外部链接时会创建一条数据，该数据的唯一标识ID，可以在查询外部链接接口以及关联外部链接接口响应体中找到。
    * createdDate  工作项下关联外部链接的创建时间。
    * state  外部链接的生命周期。
    * category  外部链接的类型。
    * region  区域 。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tenantId' => 'tenant_id',
            'title' => 'title',
            'type' => 'type',
            'modifiedDate' => 'modified_date',
            'createdBy' => 'created_by',
            'url' => 'url',
            'domainId' => 'domain_id',
            'workitemId' => 'workitem_id',
            'modifiedBy' => 'modified_by',
            'operationId' => 'operation_id',
            'id' => 'id',
            'createdDate' => 'created_date',
            'state' => 'state',
            'category' => 'category',
            'region' => 'region'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tenantId  租户唯一标识ID。
    * title  工作项下关联外部链接的名称。
    * type  外部链接的类别。
    * modifiedDate  工作项下关联外部链接的修改时间。
    * createdBy  工作项下关联外部链接的创建人。
    * url  工作项下关联外部链接的地址。
    * domainId  租户下项目唯一标识ID。
    * workitemId  工作项实例对应的唯一标识ID。
    * modifiedBy  工作项下关联外部链接的修改人。
    * operationId  外部链接操作项ID。
    * id  新关联外部链接时会创建一条数据，该数据的唯一标识ID，可以在查询外部链接接口以及关联外部链接接口响应体中找到。
    * createdDate  工作项下关联外部链接的创建时间。
    * state  外部链接的生命周期。
    * category  外部链接的类型。
    * region  区域 。
    *
    * @var string[]
    */
    protected static $setters = [
            'tenantId' => 'setTenantId',
            'title' => 'setTitle',
            'type' => 'setType',
            'modifiedDate' => 'setModifiedDate',
            'createdBy' => 'setCreatedBy',
            'url' => 'setUrl',
            'domainId' => 'setDomainId',
            'workitemId' => 'setWorkitemId',
            'modifiedBy' => 'setModifiedBy',
            'operationId' => 'setOperationId',
            'id' => 'setId',
            'createdDate' => 'setCreatedDate',
            'state' => 'setState',
            'category' => 'setCategory',
            'region' => 'setRegion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tenantId  租户唯一标识ID。
    * title  工作项下关联外部链接的名称。
    * type  外部链接的类别。
    * modifiedDate  工作项下关联外部链接的修改时间。
    * createdBy  工作项下关联外部链接的创建人。
    * url  工作项下关联外部链接的地址。
    * domainId  租户下项目唯一标识ID。
    * workitemId  工作项实例对应的唯一标识ID。
    * modifiedBy  工作项下关联外部链接的修改人。
    * operationId  外部链接操作项ID。
    * id  新关联外部链接时会创建一条数据，该数据的唯一标识ID，可以在查询外部链接接口以及关联外部链接接口响应体中找到。
    * createdDate  工作项下关联外部链接的创建时间。
    * state  外部链接的生命周期。
    * category  外部链接的类型。
    * region  区域 。
    *
    * @var string[]
    */
    protected static $getters = [
            'tenantId' => 'getTenantId',
            'title' => 'getTitle',
            'type' => 'getType',
            'modifiedDate' => 'getModifiedDate',
            'createdBy' => 'getCreatedBy',
            'url' => 'getUrl',
            'domainId' => 'getDomainId',
            'workitemId' => 'getWorkitemId',
            'modifiedBy' => 'getModifiedBy',
            'operationId' => 'getOperationId',
            'id' => 'getId',
            'createdDate' => 'getCreatedDate',
            'state' => 'getState',
            'category' => 'getCategory',
            'region' => 'getRegion'
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
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['modifiedDate'] = isset($data['modifiedDate']) ? $data['modifiedDate'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['workitemId'] = isset($data['workitemId']) ? $data['workitemId'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['operationId'] = isset($data['operationId']) ? $data['operationId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
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
    * Gets tenantId
    *  租户唯一标识ID。
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
    * @param string|null $tenantId 租户唯一标识ID。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets title
    *  工作项下关联外部链接的名称。
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
    * @param string|null $title 工作项下关联外部链接的名称。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets type
    *  外部链接的类别。
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
    * @param string|null $type 外部链接的类别。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets modifiedDate
    *  工作项下关联外部链接的修改时间。
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
    * @param string|null $modifiedDate 工作项下关联外部链接的修改时间。
    *
    * @return $this
    */
    public function setModifiedDate($modifiedDate)
    {
        $this->container['modifiedDate'] = $modifiedDate;
        return $this;
    }

    /**
    * Gets createdBy
    *  工作项下关联外部链接的创建人。
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy 工作项下关联外部链接的创建人。
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets url
    *  工作项下关联外部链接的地址。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 工作项下关联外部链接的地址。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets domainId
    *  租户下项目唯一标识ID。
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
    * @param string|null $domainId 租户下项目唯一标识ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets workitemId
    *  工作项实例对应的唯一标识ID。
    *
    * @return string|null
    */
    public function getWorkitemId()
    {
        return $this->container['workitemId'];
    }

    /**
    * Sets workitemId
    *
    * @param string|null $workitemId 工作项实例对应的唯一标识ID。
    *
    * @return $this
    */
    public function setWorkitemId($workitemId)
    {
        $this->container['workitemId'] = $workitemId;
        return $this;
    }

    /**
    * Gets modifiedBy
    *  工作项下关联外部链接的修改人。
    *
    * @return string|null
    */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
    * Sets modifiedBy
    *
    * @param string|null $modifiedBy 工作项下关联外部链接的修改人。
    *
    * @return $this
    */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;
        return $this;
    }

    /**
    * Gets operationId
    *  外部链接操作项ID。
    *
    * @return string|null
    */
    public function getOperationId()
    {
        return $this->container['operationId'];
    }

    /**
    * Sets operationId
    *
    * @param string|null $operationId 外部链接操作项ID。
    *
    * @return $this
    */
    public function setOperationId($operationId)
    {
        $this->container['operationId'] = $operationId;
        return $this;
    }

    /**
    * Gets id
    *  新关联外部链接时会创建一条数据，该数据的唯一标识ID，可以在查询外部链接接口以及关联外部链接接口响应体中找到。
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
    * @param string|null $id 新关联外部链接时会创建一条数据，该数据的唯一标识ID，可以在查询外部链接接口以及关联外部链接接口响应体中找到。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets createdDate
    *  工作项下关联外部链接的创建时间。
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
    * @param string|null $createdDate 工作项下关联外部链接的创建时间。
    *
    * @return $this
    */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;
        return $this;
    }

    /**
    * Gets state
    *  外部链接的生命周期。
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 外部链接的生命周期。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets category
    *  外部链接的类型。
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
    * @param string|null $category 外部链接的类型。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets region
    *  区域 。
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
    * @param string|null $region 区域 。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
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

