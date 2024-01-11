<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSecurityPermissionSetMembersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSecurityPermissionSetMembersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * permissionSetId  权限集id
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * memberName  成员名称
    * memberType  成员类型,USER,USER_GROUP,WORKSPACE_ROLE
    * orderByAsc  是否升序（仅指定排序参数时有效）
    * orderBy  排序参数, CREATE_TIME, MEMBER_NAME
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'permissionSetId' => 'string',
            'workspace' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'memberName' => 'string',
            'memberType' => 'string',
            'orderByAsc' => 'bool',
            'orderBy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * permissionSetId  权限集id
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * memberName  成员名称
    * memberType  成员类型,USER,USER_GROUP,WORKSPACE_ROLE
    * orderByAsc  是否升序（仅指定排序参数时有效）
    * orderBy  排序参数, CREATE_TIME, MEMBER_NAME
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'permissionSetId' => null,
        'workspace' => null,
        'limit' => null,
        'offset' => null,
        'memberName' => null,
        'memberType' => null,
        'orderByAsc' => null,
        'orderBy' => null
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
    * permissionSetId  权限集id
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * memberName  成员名称
    * memberType  成员类型,USER,USER_GROUP,WORKSPACE_ROLE
    * orderByAsc  是否升序（仅指定排序参数时有效）
    * orderBy  排序参数, CREATE_TIME, MEMBER_NAME
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'permissionSetId' => 'permission_set_id',
            'workspace' => 'workspace',
            'limit' => 'limit',
            'offset' => 'offset',
            'memberName' => 'member_name',
            'memberType' => 'member_type',
            'orderByAsc' => 'order_by_asc',
            'orderBy' => 'order_by'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * permissionSetId  权限集id
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * memberName  成员名称
    * memberType  成员类型,USER,USER_GROUP,WORKSPACE_ROLE
    * orderByAsc  是否升序（仅指定排序参数时有效）
    * orderBy  排序参数, CREATE_TIME, MEMBER_NAME
    *
    * @var string[]
    */
    protected static $setters = [
            'permissionSetId' => 'setPermissionSetId',
            'workspace' => 'setWorkspace',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'memberName' => 'setMemberName',
            'memberType' => 'setMemberType',
            'orderByAsc' => 'setOrderByAsc',
            'orderBy' => 'setOrderBy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * permissionSetId  权限集id
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * memberName  成员名称
    * memberType  成员类型,USER,USER_GROUP,WORKSPACE_ROLE
    * orderByAsc  是否升序（仅指定排序参数时有效）
    * orderBy  排序参数, CREATE_TIME, MEMBER_NAME
    *
    * @var string[]
    */
    protected static $getters = [
            'permissionSetId' => 'getPermissionSetId',
            'workspace' => 'getWorkspace',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'memberName' => 'getMemberName',
            'memberType' => 'getMemberType',
            'orderByAsc' => 'getOrderByAsc',
            'orderBy' => 'getOrderBy'
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
    const MEMBER_TYPE_USER = 'USER';
    const MEMBER_TYPE_USER_GROUP = 'USER_GROUP';
    const MEMBER_TYPE_WORKSPACE_ROLE = 'WORKSPACE_ROLE';
    const ORDER_BY_CREATE_TIME = 'CREATE_TIME';
    const ORDER_BY_MEMBER_NAME = 'MEMBER_NAME';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMemberTypeAllowableValues()
    {
        return [
            self::MEMBER_TYPE_USER,
            self::MEMBER_TYPE_USER_GROUP,
            self::MEMBER_TYPE_WORKSPACE_ROLE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderByAllowableValues()
    {
        return [
            self::ORDER_BY_CREATE_TIME,
            self::ORDER_BY_MEMBER_NAME,
        ];
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
        $this->container['permissionSetId'] = isset($data['permissionSetId']) ? $data['permissionSetId'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['memberName'] = isset($data['memberName']) ? $data['memberName'] : null;
        $this->container['memberType'] = isset($data['memberType']) ? $data['memberType'] : null;
        $this->container['orderByAsc'] = isset($data['orderByAsc']) ? $data['orderByAsc'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['permissionSetId'] === null) {
            $invalidProperties[] = "'permissionSetId' can't be null";
        }
            if ((mb_strlen($this->container['permissionSetId']) > 128)) {
                $invalidProperties[] = "invalid value for 'permissionSetId', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['permissionSetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'permissionSetId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
            if ((mb_strlen($this->container['workspace']) > 128)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['workspace']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 99999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 99999.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['memberName']) && (mb_strlen($this->container['memberName']) > 128)) {
                $invalidProperties[] = "invalid value for 'memberName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['memberName']) && (mb_strlen($this->container['memberName']) < 1)) {
                $invalidProperties[] = "invalid value for 'memberName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getMemberTypeAllowableValues();
                if (!is_null($this->container['memberType']) && !in_array($this->container['memberType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'memberType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOrderByAllowableValues();
                if (!is_null($this->container['orderBy']) && !in_array($this->container['orderBy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'orderBy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets permissionSetId
    *  权限集id
    *
    * @return string
    */
    public function getPermissionSetId()
    {
        return $this->container['permissionSetId'];
    }

    /**
    * Sets permissionSetId
    *
    * @param string $permissionSetId 权限集id
    *
    * @return $this
    */
    public function setPermissionSetId($permissionSetId)
    {
        $this->container['permissionSetId'] = $permissionSetId;
        return $this;
    }

    /**
    * Gets workspace
    *  DataArts Studio工作空间ID
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace DataArts Studio工作空间ID
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets limit
    *  limit
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
    * @param int|null $limit limit
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  offset
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
    * @param int|null $offset offset
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets memberName
    *  成员名称
    *
    * @return string|null
    */
    public function getMemberName()
    {
        return $this->container['memberName'];
    }

    /**
    * Sets memberName
    *
    * @param string|null $memberName 成员名称
    *
    * @return $this
    */
    public function setMemberName($memberName)
    {
        $this->container['memberName'] = $memberName;
        return $this;
    }

    /**
    * Gets memberType
    *  成员类型,USER,USER_GROUP,WORKSPACE_ROLE
    *
    * @return string|null
    */
    public function getMemberType()
    {
        return $this->container['memberType'];
    }

    /**
    * Sets memberType
    *
    * @param string|null $memberType 成员类型,USER,USER_GROUP,WORKSPACE_ROLE
    *
    * @return $this
    */
    public function setMemberType($memberType)
    {
        $this->container['memberType'] = $memberType;
        return $this;
    }

    /**
    * Gets orderByAsc
    *  是否升序（仅指定排序参数时有效）
    *
    * @return bool|null
    */
    public function getOrderByAsc()
    {
        return $this->container['orderByAsc'];
    }

    /**
    * Sets orderByAsc
    *
    * @param bool|null $orderByAsc 是否升序（仅指定排序参数时有效）
    *
    * @return $this
    */
    public function setOrderByAsc($orderByAsc)
    {
        $this->container['orderByAsc'] = $orderByAsc;
        return $this;
    }

    /**
    * Gets orderBy
    *  排序参数, CREATE_TIME, MEMBER_NAME
    *
    * @return string|null
    */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
    * Sets orderBy
    *
    * @param string|null $orderBy 排序参数, CREATE_TIME, MEMBER_NAME
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
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

