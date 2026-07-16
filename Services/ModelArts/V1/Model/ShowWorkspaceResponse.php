<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowWorkspaceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowWorkspaceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * grants  授权用户列表。默认为空。需要与“auth_type”参数配合使用，且仅当授权类型为“INTERNAL”时才会生效。
    * owner  创建者名称。
    * authType  授权类型。可选值有PUBLIC、PRIVATE、INTERNAL。默认值为PUBLIC。 - PUBLIC：租户内部公开访问。 - PRIVATE：仅创建者和主账号可访问。 - INTERNAL：创建者、主账号、指定IAM子账号可访问，需要与grants参数配合使用。
    * enterpriseProjectId  企业项目ID。
    * updateTime  最后修改时间，UTC。
    * createTime  创建时间，UTC。
    * enterpriseProjectName  企业项目名称。
    * name  工作空间名称。长度限制为4-64字符[，支持中文、大小写字母、数字、中划线和下划线](tag:hc,hk)。同时'default'为系统预留的默认工作空间名称，用户无法自己创建名为'default'的工作空间。
    * description  工作空间描述，默认为空。长度限制为0-256字符。
    * id  工作空间ID，系统生成的32位UUID，不带橫线。
    * status  工作空间状态。 - CREATE_FAILED：创建失败。 - NORMAL：状态正常。 - DELETING：正在删除。 - DELETE_FAILED：删除失败。
    * statusInfo  状态描述，默认为空。该字段会补充显示状态的详细信息。如删除失败时，可通过该字段查看删除失败的原因。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'grants' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ViewWorkspaceResponseGrants[]',
            'owner' => 'string',
            'authType' => 'string',
            'enterpriseProjectId' => 'string',
            'updateTime' => 'int',
            'createTime' => 'int',
            'enterpriseProjectName' => 'string',
            'name' => 'string',
            'description' => 'string',
            'id' => 'string',
            'status' => 'string',
            'statusInfo' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * grants  授权用户列表。默认为空。需要与“auth_type”参数配合使用，且仅当授权类型为“INTERNAL”时才会生效。
    * owner  创建者名称。
    * authType  授权类型。可选值有PUBLIC、PRIVATE、INTERNAL。默认值为PUBLIC。 - PUBLIC：租户内部公开访问。 - PRIVATE：仅创建者和主账号可访问。 - INTERNAL：创建者、主账号、指定IAM子账号可访问，需要与grants参数配合使用。
    * enterpriseProjectId  企业项目ID。
    * updateTime  最后修改时间，UTC。
    * createTime  创建时间，UTC。
    * enterpriseProjectName  企业项目名称。
    * name  工作空间名称。长度限制为4-64字符[，支持中文、大小写字母、数字、中划线和下划线](tag:hc,hk)。同时'default'为系统预留的默认工作空间名称，用户无法自己创建名为'default'的工作空间。
    * description  工作空间描述，默认为空。长度限制为0-256字符。
    * id  工作空间ID，系统生成的32位UUID，不带橫线。
    * status  工作空间状态。 - CREATE_FAILED：创建失败。 - NORMAL：状态正常。 - DELETING：正在删除。 - DELETE_FAILED：删除失败。
    * statusInfo  状态描述，默认为空。该字段会补充显示状态的详细信息。如删除失败时，可通过该字段查看删除失败的原因。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'grants' => null,
        'owner' => null,
        'authType' => null,
        'enterpriseProjectId' => null,
        'updateTime' => 'int64',
        'createTime' => 'int64',
        'enterpriseProjectName' => null,
        'name' => null,
        'description' => null,
        'id' => null,
        'status' => null,
        'statusInfo' => null
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
    * grants  授权用户列表。默认为空。需要与“auth_type”参数配合使用，且仅当授权类型为“INTERNAL”时才会生效。
    * owner  创建者名称。
    * authType  授权类型。可选值有PUBLIC、PRIVATE、INTERNAL。默认值为PUBLIC。 - PUBLIC：租户内部公开访问。 - PRIVATE：仅创建者和主账号可访问。 - INTERNAL：创建者、主账号、指定IAM子账号可访问，需要与grants参数配合使用。
    * enterpriseProjectId  企业项目ID。
    * updateTime  最后修改时间，UTC。
    * createTime  创建时间，UTC。
    * enterpriseProjectName  企业项目名称。
    * name  工作空间名称。长度限制为4-64字符[，支持中文、大小写字母、数字、中划线和下划线](tag:hc,hk)。同时'default'为系统预留的默认工作空间名称，用户无法自己创建名为'default'的工作空间。
    * description  工作空间描述，默认为空。长度限制为0-256字符。
    * id  工作空间ID，系统生成的32位UUID，不带橫线。
    * status  工作空间状态。 - CREATE_FAILED：创建失败。 - NORMAL：状态正常。 - DELETING：正在删除。 - DELETE_FAILED：删除失败。
    * statusInfo  状态描述，默认为空。该字段会补充显示状态的详细信息。如删除失败时，可通过该字段查看删除失败的原因。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'grants' => 'grants',
            'owner' => 'owner',
            'authType' => 'auth_type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'updateTime' => 'update_time',
            'createTime' => 'create_time',
            'enterpriseProjectName' => 'enterprise_project_name',
            'name' => 'name',
            'description' => 'description',
            'id' => 'id',
            'status' => 'status',
            'statusInfo' => 'status_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * grants  授权用户列表。默认为空。需要与“auth_type”参数配合使用，且仅当授权类型为“INTERNAL”时才会生效。
    * owner  创建者名称。
    * authType  授权类型。可选值有PUBLIC、PRIVATE、INTERNAL。默认值为PUBLIC。 - PUBLIC：租户内部公开访问。 - PRIVATE：仅创建者和主账号可访问。 - INTERNAL：创建者、主账号、指定IAM子账号可访问，需要与grants参数配合使用。
    * enterpriseProjectId  企业项目ID。
    * updateTime  最后修改时间，UTC。
    * createTime  创建时间，UTC。
    * enterpriseProjectName  企业项目名称。
    * name  工作空间名称。长度限制为4-64字符[，支持中文、大小写字母、数字、中划线和下划线](tag:hc,hk)。同时'default'为系统预留的默认工作空间名称，用户无法自己创建名为'default'的工作空间。
    * description  工作空间描述，默认为空。长度限制为0-256字符。
    * id  工作空间ID，系统生成的32位UUID，不带橫线。
    * status  工作空间状态。 - CREATE_FAILED：创建失败。 - NORMAL：状态正常。 - DELETING：正在删除。 - DELETE_FAILED：删除失败。
    * statusInfo  状态描述，默认为空。该字段会补充显示状态的详细信息。如删除失败时，可通过该字段查看删除失败的原因。
    *
    * @var string[]
    */
    protected static $setters = [
            'grants' => 'setGrants',
            'owner' => 'setOwner',
            'authType' => 'setAuthType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'updateTime' => 'setUpdateTime',
            'createTime' => 'setCreateTime',
            'enterpriseProjectName' => 'setEnterpriseProjectName',
            'name' => 'setName',
            'description' => 'setDescription',
            'id' => 'setId',
            'status' => 'setStatus',
            'statusInfo' => 'setStatusInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * grants  授权用户列表。默认为空。需要与“auth_type”参数配合使用，且仅当授权类型为“INTERNAL”时才会生效。
    * owner  创建者名称。
    * authType  授权类型。可选值有PUBLIC、PRIVATE、INTERNAL。默认值为PUBLIC。 - PUBLIC：租户内部公开访问。 - PRIVATE：仅创建者和主账号可访问。 - INTERNAL：创建者、主账号、指定IAM子账号可访问，需要与grants参数配合使用。
    * enterpriseProjectId  企业项目ID。
    * updateTime  最后修改时间，UTC。
    * createTime  创建时间，UTC。
    * enterpriseProjectName  企业项目名称。
    * name  工作空间名称。长度限制为4-64字符[，支持中文、大小写字母、数字、中划线和下划线](tag:hc,hk)。同时'default'为系统预留的默认工作空间名称，用户无法自己创建名为'default'的工作空间。
    * description  工作空间描述，默认为空。长度限制为0-256字符。
    * id  工作空间ID，系统生成的32位UUID，不带橫线。
    * status  工作空间状态。 - CREATE_FAILED：创建失败。 - NORMAL：状态正常。 - DELETING：正在删除。 - DELETE_FAILED：删除失败。
    * statusInfo  状态描述，默认为空。该字段会补充显示状态的详细信息。如删除失败时，可通过该字段查看删除失败的原因。
    *
    * @var string[]
    */
    protected static $getters = [
            'grants' => 'getGrants',
            'owner' => 'getOwner',
            'authType' => 'getAuthType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'updateTime' => 'getUpdateTime',
            'createTime' => 'getCreateTime',
            'enterpriseProjectName' => 'getEnterpriseProjectName',
            'name' => 'getName',
            'description' => 'getDescription',
            'id' => 'getId',
            'status' => 'getStatus',
            'statusInfo' => 'getStatusInfo'
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
        $this->container['grants'] = isset($data['grants']) ? $data['grants'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['enterpriseProjectName'] = isset($data['enterpriseProjectName']) ? $data['enterpriseProjectName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusInfo'] = isset($data['statusInfo']) ? $data['statusInfo'] : null;
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
    * Gets grants
    *  授权用户列表。默认为空。需要与“auth_type”参数配合使用，且仅当授权类型为“INTERNAL”时才会生效。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ViewWorkspaceResponseGrants[]|null
    */
    public function getGrants()
    {
        return $this->container['grants'];
    }

    /**
    * Sets grants
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ViewWorkspaceResponseGrants[]|null $grants 授权用户列表。默认为空。需要与“auth_type”参数配合使用，且仅当授权类型为“INTERNAL”时才会生效。
    *
    * @return $this
    */
    public function setGrants($grants)
    {
        $this->container['grants'] = $grants;
        return $this;
    }

    /**
    * Gets owner
    *  创建者名称。
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
    * @param string|null $owner 创建者名称。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets authType
    *  授权类型。可选值有PUBLIC、PRIVATE、INTERNAL。默认值为PUBLIC。 - PUBLIC：租户内部公开访问。 - PRIVATE：仅创建者和主账号可访问。 - INTERNAL：创建者、主账号、指定IAM子账号可访问，需要与grants参数配合使用。
    *
    * @return string|null
    */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
    * Sets authType
    *
    * @param string|null $authType 授权类型。可选值有PUBLIC、PRIVATE、INTERNAL。默认值为PUBLIC。 - PUBLIC：租户内部公开访问。 - PRIVATE：仅创建者和主账号可访问。 - INTERNAL：创建者、主账号、指定IAM子账号可访问，需要与grants参数配合使用。
    *
    * @return $this
    */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets updateTime
    *  最后修改时间，UTC。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 最后修改时间，UTC。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，UTC。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间，UTC。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets enterpriseProjectName
    *  企业项目名称。
    *
    * @return string|null
    */
    public function getEnterpriseProjectName()
    {
        return $this->container['enterpriseProjectName'];
    }

    /**
    * Sets enterpriseProjectName
    *
    * @param string|null $enterpriseProjectName 企业项目名称。
    *
    * @return $this
    */
    public function setEnterpriseProjectName($enterpriseProjectName)
    {
        $this->container['enterpriseProjectName'] = $enterpriseProjectName;
        return $this;
    }

    /**
    * Gets name
    *  工作空间名称。长度限制为4-64字符[，支持中文、大小写字母、数字、中划线和下划线](tag:hc,hk)。同时'default'为系统预留的默认工作空间名称，用户无法自己创建名为'default'的工作空间。
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
    * @param string|null $name 工作空间名称。长度限制为4-64字符[，支持中文、大小写字母、数字、中划线和下划线](tag:hc,hk)。同时'default'为系统预留的默认工作空间名称，用户无法自己创建名为'default'的工作空间。
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
    *  工作空间描述，默认为空。长度限制为0-256字符。
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
    * @param string|null $description 工作空间描述，默认为空。长度限制为0-256字符。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets id
    *  工作空间ID，系统生成的32位UUID，不带橫线。
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
    * @param string|null $id 工作空间ID，系统生成的32位UUID，不带橫线。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  工作空间状态。 - CREATE_FAILED：创建失败。 - NORMAL：状态正常。 - DELETING：正在删除。 - DELETE_FAILED：删除失败。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 工作空间状态。 - CREATE_FAILED：创建失败。 - NORMAL：状态正常。 - DELETING：正在删除。 - DELETE_FAILED：删除失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statusInfo
    *  状态描述，默认为空。该字段会补充显示状态的详细信息。如删除失败时，可通过该字段查看删除失败的原因。
    *
    * @return string|null
    */
    public function getStatusInfo()
    {
        return $this->container['statusInfo'];
    }

    /**
    * Sets statusInfo
    *
    * @param string|null $statusInfo 状态描述，默认为空。该字段会补充显示状态的详细信息。如删除失败时，可通过该字段查看删除失败的原因。
    *
    * @return $this
    */
    public function setStatusInfo($statusInfo)
    {
        $this->container['statusInfo'] = $statusInfo;
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

