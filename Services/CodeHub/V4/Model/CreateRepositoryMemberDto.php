<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRepositoryMemberDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRepositoryMemberDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userIamId  **参数解释：** 用户iamId **约束限制：** 不涉及。
    * userName  **参数解释：** 用户名称。 **约束限制：** 不涉及。
    * tenantName  **参数解释：** 租户名称。 **约束限制：** - 不涉及。
    * tenantId  **参数解释：** 租户id。 **约束限制：** - 不涉及。
    * repositoryRoleId  **参数解释：** 角色id。 **约束限制：** - 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userIamId' => 'string',
            'userName' => 'string',
            'tenantName' => 'string',
            'tenantId' => 'string',
            'repositoryRoleId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userIamId  **参数解释：** 用户iamId **约束限制：** 不涉及。
    * userName  **参数解释：** 用户名称。 **约束限制：** 不涉及。
    * tenantName  **参数解释：** 租户名称。 **约束限制：** - 不涉及。
    * tenantId  **参数解释：** 租户id。 **约束限制：** - 不涉及。
    * repositoryRoleId  **参数解释：** 角色id。 **约束限制：** - 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userIamId' => null,
        'userName' => null,
        'tenantName' => null,
        'tenantId' => null,
        'repositoryRoleId' => null
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
    * userIamId  **参数解释：** 用户iamId **约束限制：** 不涉及。
    * userName  **参数解释：** 用户名称。 **约束限制：** 不涉及。
    * tenantName  **参数解释：** 租户名称。 **约束限制：** - 不涉及。
    * tenantId  **参数解释：** 租户id。 **约束限制：** - 不涉及。
    * repositoryRoleId  **参数解释：** 角色id。 **约束限制：** - 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userIamId' => 'user_iam_id',
            'userName' => 'user_name',
            'tenantName' => 'tenant_name',
            'tenantId' => 'tenant_id',
            'repositoryRoleId' => 'repository_role_Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userIamId  **参数解释：** 用户iamId **约束限制：** 不涉及。
    * userName  **参数解释：** 用户名称。 **约束限制：** 不涉及。
    * tenantName  **参数解释：** 租户名称。 **约束限制：** - 不涉及。
    * tenantId  **参数解释：** 租户id。 **约束限制：** - 不涉及。
    * repositoryRoleId  **参数解释：** 角色id。 **约束限制：** - 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'userIamId' => 'setUserIamId',
            'userName' => 'setUserName',
            'tenantName' => 'setTenantName',
            'tenantId' => 'setTenantId',
            'repositoryRoleId' => 'setRepositoryRoleId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userIamId  **参数解释：** 用户iamId **约束限制：** 不涉及。
    * userName  **参数解释：** 用户名称。 **约束限制：** 不涉及。
    * tenantName  **参数解释：** 租户名称。 **约束限制：** - 不涉及。
    * tenantId  **参数解释：** 租户id。 **约束限制：** - 不涉及。
    * repositoryRoleId  **参数解释：** 角色id。 **约束限制：** - 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'userIamId' => 'getUserIamId',
            'userName' => 'getUserName',
            'tenantName' => 'getTenantName',
            'tenantId' => 'getTenantId',
            'repositoryRoleId' => 'getRepositoryRoleId'
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
        $this->container['userIamId'] = isset($data['userIamId']) ? $data['userIamId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['tenantName'] = isset($data['tenantName']) ? $data['tenantName'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['repositoryRoleId'] = isset($data['repositoryRoleId']) ? $data['repositoryRoleId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['userIamId']) && (mb_strlen($this->container['userIamId']) > 100000)) {
                $invalidProperties[] = "invalid value for 'userIamId', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['userIamId']) && (mb_strlen($this->container['userIamId']) < 1)) {
                $invalidProperties[] = "invalid value for 'userIamId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 100000)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tenantName']) && (mb_strlen($this->container['tenantName']) > 100000)) {
                $invalidProperties[] = "invalid value for 'tenantName', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['tenantName']) && (mb_strlen($this->container['tenantName']) < 1)) {
                $invalidProperties[] = "invalid value for 'tenantName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 100000)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) < 1)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repositoryRoleId']) && (mb_strlen($this->container['repositoryRoleId']) > 100000)) {
                $invalidProperties[] = "invalid value for 'repositoryRoleId', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['repositoryRoleId']) && (mb_strlen($this->container['repositoryRoleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryRoleId', the character length must be bigger than or equal to 1.";
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
    * Gets userIamId
    *  **参数解释：** 用户iamId **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getUserIamId()
    {
        return $this->container['userIamId'];
    }

    /**
    * Sets userIamId
    *
    * @param string|null $userIamId **参数解释：** 用户iamId **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setUserIamId($userIamId)
    {
        $this->container['userIamId'] = $userIamId;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释：** 用户名称。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName **参数解释：** 用户名称。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets tenantName
    *  **参数解释：** 租户名称。 **约束限制：** - 不涉及。
    *
    * @return string|null
    */
    public function getTenantName()
    {
        return $this->container['tenantName'];
    }

    /**
    * Sets tenantName
    *
    * @param string|null $tenantName **参数解释：** 租户名称。 **约束限制：** - 不涉及。
    *
    * @return $this
    */
    public function setTenantName($tenantName)
    {
        $this->container['tenantName'] = $tenantName;
        return $this;
    }

    /**
    * Gets tenantId
    *  **参数解释：** 租户id。 **约束限制：** - 不涉及。
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
    * @param string|null $tenantId **参数解释：** 租户id。 **约束限制：** - 不涉及。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets repositoryRoleId
    *  **参数解释：** 角色id。 **约束限制：** - 不涉及。
    *
    * @return string|null
    */
    public function getRepositoryRoleId()
    {
        return $this->container['repositoryRoleId'];
    }

    /**
    * Sets repositoryRoleId
    *
    * @param string|null $repositoryRoleId **参数解释：** 角色id。 **约束限制：** - 不涉及。
    *
    * @return $this
    */
    public function setRepositoryRoleId($repositoryRoleId)
    {
        $this->container['repositoryRoleId'] = $repositoryRoleId;
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

