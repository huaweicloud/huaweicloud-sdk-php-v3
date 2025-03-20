<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccountRsp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccountRsp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * name  名称
    * type  账号类型 NORMAL 普通账号，停用状态 DELEGATOR 委托人 DELEGATEE 被委托人
    * delegatee  被委托人id
    * agencyId  委托id
    * delegator  托管账号Id
    * createUserName  创建人
    * status  PENDING_AUTHORIZATION, 待授权,ENABLED 启用, DISABLED 停用
    * createUserId  创建userId
    * createTime  创建时间
    * updateUserName  编辑人
    * updateUserId  编辑人user_id
    * updateTime  编辑时间，期初和创建时间一样
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'type' => 'string',
            'delegatee' => 'string',
            'agencyId' => 'string',
            'delegator' => 'string',
            'createUserName' => 'string',
            'status' => 'string',
            'createUserId' => 'string',
            'createTime' => 'string',
            'updateUserName' => 'string',
            'updateUserId' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * name  名称
    * type  账号类型 NORMAL 普通账号，停用状态 DELEGATOR 委托人 DELEGATEE 被委托人
    * delegatee  被委托人id
    * agencyId  委托id
    * delegator  托管账号Id
    * createUserName  创建人
    * status  PENDING_AUTHORIZATION, 待授权,ENABLED 启用, DISABLED 停用
    * createUserId  创建userId
    * createTime  创建时间
    * updateUserName  编辑人
    * updateUserId  编辑人user_id
    * updateTime  编辑时间，期初和创建时间一样
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'type' => null,
        'delegatee' => null,
        'agencyId' => null,
        'delegator' => null,
        'createUserName' => null,
        'status' => null,
        'createUserId' => null,
        'createTime' => null,
        'updateUserName' => null,
        'updateUserId' => null,
        'updateTime' => null
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
    * id  id
    * name  名称
    * type  账号类型 NORMAL 普通账号，停用状态 DELEGATOR 委托人 DELEGATEE 被委托人
    * delegatee  被委托人id
    * agencyId  委托id
    * delegator  托管账号Id
    * createUserName  创建人
    * status  PENDING_AUTHORIZATION, 待授权,ENABLED 启用, DISABLED 停用
    * createUserId  创建userId
    * createTime  创建时间
    * updateUserName  编辑人
    * updateUserId  编辑人user_id
    * updateTime  编辑时间，期初和创建时间一样
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'type' => 'type',
            'delegatee' => 'delegatee',
            'agencyId' => 'agency_id',
            'delegator' => 'delegator',
            'createUserName' => 'create_user_name',
            'status' => 'status',
            'createUserId' => 'create_user_id',
            'createTime' => 'create_time',
            'updateUserName' => 'update_user_name',
            'updateUserId' => 'update_user_id',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * name  名称
    * type  账号类型 NORMAL 普通账号，停用状态 DELEGATOR 委托人 DELEGATEE 被委托人
    * delegatee  被委托人id
    * agencyId  委托id
    * delegator  托管账号Id
    * createUserName  创建人
    * status  PENDING_AUTHORIZATION, 待授权,ENABLED 启用, DISABLED 停用
    * createUserId  创建userId
    * createTime  创建时间
    * updateUserName  编辑人
    * updateUserId  编辑人user_id
    * updateTime  编辑时间，期初和创建时间一样
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'type' => 'setType',
            'delegatee' => 'setDelegatee',
            'agencyId' => 'setAgencyId',
            'delegator' => 'setDelegator',
            'createUserName' => 'setCreateUserName',
            'status' => 'setStatus',
            'createUserId' => 'setCreateUserId',
            'createTime' => 'setCreateTime',
            'updateUserName' => 'setUpdateUserName',
            'updateUserId' => 'setUpdateUserId',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * name  名称
    * type  账号类型 NORMAL 普通账号，停用状态 DELEGATOR 委托人 DELEGATEE 被委托人
    * delegatee  被委托人id
    * agencyId  委托id
    * delegator  托管账号Id
    * createUserName  创建人
    * status  PENDING_AUTHORIZATION, 待授权,ENABLED 启用, DISABLED 停用
    * createUserId  创建userId
    * createTime  创建时间
    * updateUserName  编辑人
    * updateUserId  编辑人user_id
    * updateTime  编辑时间，期初和创建时间一样
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'type' => 'getType',
            'delegatee' => 'getDelegatee',
            'agencyId' => 'getAgencyId',
            'delegator' => 'getDelegator',
            'createUserName' => 'getCreateUserName',
            'status' => 'getStatus',
            'createUserId' => 'getCreateUserId',
            'createTime' => 'getCreateTime',
            'updateUserName' => 'getUpdateUserName',
            'updateUserId' => 'getUpdateUserId',
            'updateTime' => 'getUpdateTime'
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
    const TYPE_NORMAL = 'NORMAL';
    const TYPE_DELEGATOR = 'DELEGATOR';
    const TYPE_DELEGATEE = 'DELEGATEE';
    const STATUS_PENDING_AUTHORIZATION = 'PENDING_AUTHORIZATION';
    const STATUS_ENABLED = 'ENABLED';
    const STATUS_DISABLED = 'DISABLED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NORMAL,
            self::TYPE_DELEGATOR,
            self::TYPE_DELEGATEE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING_AUTHORIZATION,
            self::STATUS_ENABLED,
            self::STATUS_DISABLED,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['delegatee'] = isset($data['delegatee']) ? $data['delegatee'] : null;
        $this->container['agencyId'] = isset($data['agencyId']) ? $data['agencyId'] : null;
        $this->container['delegator'] = isset($data['delegator']) ? $data['delegator'] : null;
        $this->container['createUserName'] = isset($data['createUserName']) ? $data['createUserName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createUserId'] = isset($data['createUserId']) ? $data['createUserId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateUserName'] = isset($data['updateUserName']) ? $data['updateUserName'] : null;
        $this->container['updateUserId'] = isset($data['updateUserId']) ? $data['updateUserId'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 50)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 50.";
            }
            if ((mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['delegatee']) && (mb_strlen($this->container['delegatee']) > 255)) {
                $invalidProperties[] = "invalid value for 'delegatee', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['delegatee']) && (mb_strlen($this->container['delegatee']) < 0)) {
                $invalidProperties[] = "invalid value for 'delegatee', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agencyId']) && (mb_strlen($this->container['agencyId']) > 255)) {
                $invalidProperties[] = "invalid value for 'agencyId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['agencyId']) && (mb_strlen($this->container['agencyId']) < 0)) {
                $invalidProperties[] = "invalid value for 'agencyId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['delegator']) && (mb_strlen($this->container['delegator']) > 255)) {
                $invalidProperties[] = "invalid value for 'delegator', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['delegator']) && (mb_strlen($this->container['delegator']) < 0)) {
                $invalidProperties[] = "invalid value for 'delegator', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['createUserName'] === null) {
            $invalidProperties[] = "'createUserName' can't be null";
        }
            if ((mb_strlen($this->container['createUserName']) > 255)) {
                $invalidProperties[] = "invalid value for 'createUserName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['createUserName']) < 0)) {
                $invalidProperties[] = "invalid value for 'createUserName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['status']) > 50)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 50.";
            }
            if ((mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['createUserId'] === null) {
            $invalidProperties[] = "'createUserId' can't be null";
        }
            if ((mb_strlen($this->container['createUserId']) > 255)) {
                $invalidProperties[] = "invalid value for 'createUserId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['createUserId']) < 0)) {
                $invalidProperties[] = "invalid value for 'createUserId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
            if (!is_null($this->container['updateUserName']) && (mb_strlen($this->container['updateUserName']) > 255)) {
                $invalidProperties[] = "invalid value for 'updateUserName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['updateUserName']) && (mb_strlen($this->container['updateUserName']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateUserName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateUserId']) && (mb_strlen($this->container['updateUserId']) > 255)) {
                $invalidProperties[] = "invalid value for 'updateUserId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['updateUserId']) && (mb_strlen($this->container['updateUserId']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateUserId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['updateTime'] === null) {
            $invalidProperties[] = "'updateTime' can't be null";
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
    * Gets id
    *  id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  账号类型 NORMAL 普通账号，停用状态 DELEGATOR 委托人 DELEGATEE 被委托人
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
    * @param string|null $type 账号类型 NORMAL 普通账号，停用状态 DELEGATOR 委托人 DELEGATEE 被委托人
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets delegatee
    *  被委托人id
    *
    * @return string|null
    */
    public function getDelegatee()
    {
        return $this->container['delegatee'];
    }

    /**
    * Sets delegatee
    *
    * @param string|null $delegatee 被委托人id
    *
    * @return $this
    */
    public function setDelegatee($delegatee)
    {
        $this->container['delegatee'] = $delegatee;
        return $this;
    }

    /**
    * Gets agencyId
    *  委托id
    *
    * @return string|null
    */
    public function getAgencyId()
    {
        return $this->container['agencyId'];
    }

    /**
    * Sets agencyId
    *
    * @param string|null $agencyId 委托id
    *
    * @return $this
    */
    public function setAgencyId($agencyId)
    {
        $this->container['agencyId'] = $agencyId;
        return $this;
    }

    /**
    * Gets delegator
    *  托管账号Id
    *
    * @return string|null
    */
    public function getDelegator()
    {
        return $this->container['delegator'];
    }

    /**
    * Sets delegator
    *
    * @param string|null $delegator 托管账号Id
    *
    * @return $this
    */
    public function setDelegator($delegator)
    {
        $this->container['delegator'] = $delegator;
        return $this;
    }

    /**
    * Gets createUserName
    *  创建人
    *
    * @return string
    */
    public function getCreateUserName()
    {
        return $this->container['createUserName'];
    }

    /**
    * Sets createUserName
    *
    * @param string $createUserName 创建人
    *
    * @return $this
    */
    public function setCreateUserName($createUserName)
    {
        $this->container['createUserName'] = $createUserName;
        return $this;
    }

    /**
    * Gets status
    *  PENDING_AUTHORIZATION, 待授权,ENABLED 启用, DISABLED 停用
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status PENDING_AUTHORIZATION, 待授权,ENABLED 启用, DISABLED 停用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createUserId
    *  创建userId
    *
    * @return string
    */
    public function getCreateUserId()
    {
        return $this->container['createUserId'];
    }

    /**
    * Sets createUserId
    *
    * @param string $createUserId 创建userId
    *
    * @return $this
    */
    public function setCreateUserId($createUserId)
    {
        $this->container['createUserId'] = $createUserId;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateUserName
    *  编辑人
    *
    * @return string|null
    */
    public function getUpdateUserName()
    {
        return $this->container['updateUserName'];
    }

    /**
    * Sets updateUserName
    *
    * @param string|null $updateUserName 编辑人
    *
    * @return $this
    */
    public function setUpdateUserName($updateUserName)
    {
        $this->container['updateUserName'] = $updateUserName;
        return $this;
    }

    /**
    * Gets updateUserId
    *  编辑人user_id
    *
    * @return string|null
    */
    public function getUpdateUserId()
    {
        return $this->container['updateUserId'];
    }

    /**
    * Sets updateUserId
    *
    * @param string|null $updateUserId 编辑人user_id
    *
    * @return $this
    */
    public function setUpdateUserId($updateUserId)
    {
        $this->container['updateUserId'] = $updateUserId;
        return $this;
    }

    /**
    * Gets updateTime
    *  编辑时间，期初和创建时间一样
    *
    * @return string
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string $updateTime 编辑时间，期初和创建时间一样
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

