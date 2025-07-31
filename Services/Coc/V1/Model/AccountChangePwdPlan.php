<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccountChangePwdPlan implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccountChangePwdPlan';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * planId  改密计划唯一UUID
    * resourceId  改密资源id
    * accountName  改密账号名称
    * password  需要修改的密码
    * projectId  资源所属的项目id
    * createTime  改密计划创建时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'planId' => 'string',
            'resourceId' => 'string',
            'accountName' => 'string',
            'password' => 'string',
            'projectId' => 'string',
            'createTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * planId  改密计划唯一UUID
    * resourceId  改密资源id
    * accountName  改密账号名称
    * password  需要修改的密码
    * projectId  资源所属的项目id
    * createTime  改密计划创建时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'planId' => null,
        'resourceId' => null,
        'accountName' => null,
        'password' => null,
        'projectId' => null,
        'createTime' => 'int64'
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
    * planId  改密计划唯一UUID
    * resourceId  改密资源id
    * accountName  改密账号名称
    * password  需要修改的密码
    * projectId  资源所属的项目id
    * createTime  改密计划创建时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'planId' => 'plan_id',
            'resourceId' => 'resource_id',
            'accountName' => 'account_name',
            'password' => 'password',
            'projectId' => 'project_id',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * planId  改密计划唯一UUID
    * resourceId  改密资源id
    * accountName  改密账号名称
    * password  需要修改的密码
    * projectId  资源所属的项目id
    * createTime  改密计划创建时间
    *
    * @var string[]
    */
    protected static $setters = [
            'planId' => 'setPlanId',
            'resourceId' => 'setResourceId',
            'accountName' => 'setAccountName',
            'password' => 'setPassword',
            'projectId' => 'setProjectId',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * planId  改密计划唯一UUID
    * resourceId  改密资源id
    * accountName  改密账号名称
    * password  需要修改的密码
    * projectId  资源所属的项目id
    * createTime  改密计划创建时间
    *
    * @var string[]
    */
    protected static $getters = [
            'planId' => 'getPlanId',
            'resourceId' => 'getResourceId',
            'accountName' => 'getAccountName',
            'password' => 'getPassword',
            'projectId' => 'getProjectId',
            'createTime' => 'getCreateTime'
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
        $this->container['planId'] = isset($data['planId']) ? $data['planId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['planId'] === null) {
            $invalidProperties[] = "'planId' can't be null";
        }
            if ((mb_strlen($this->container['planId']) > 36)) {
                $invalidProperties[] = "invalid value for 'planId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['planId']) < 1)) {
                $invalidProperties[] = "invalid value for 'planId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
            if ((mb_strlen($this->container['resourceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['resourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['accountName'] === null) {
            $invalidProperties[] = "'accountName' can't be null";
        }
            if ((mb_strlen($this->container['accountName']) > 64)) {
                $invalidProperties[] = "invalid value for 'accountName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['accountName']) < 1)) {
                $invalidProperties[] = "invalid value for 'accountName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
            if ((mb_strlen($this->container['password']) > 64)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['password']) < 1)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
            if (($this->container['createTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9999999999999.";
            }
            if (($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
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
    * Gets planId
    *  改密计划唯一UUID
    *
    * @return string
    */
    public function getPlanId()
    {
        return $this->container['planId'];
    }

    /**
    * Sets planId
    *
    * @param string $planId 改密计划唯一UUID
    *
    * @return $this
    */
    public function setPlanId($planId)
    {
        $this->container['planId'] = $planId;
        return $this;
    }

    /**
    * Gets resourceId
    *  改密资源id
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 改密资源id
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets accountName
    *  改密账号名称
    *
    * @return string
    */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
    * Sets accountName
    *
    * @param string $accountName 改密账号名称
    *
    * @return $this
    */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;
        return $this;
    }

    /**
    * Gets password
    *  需要修改的密码
    *
    * @return string
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string $password 需要修改的密码
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets projectId
    *  资源所属的项目id
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 资源所属的项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets createTime
    *  改密计划创建时间
    *
    * @return int
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int $createTime 改密计划创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

