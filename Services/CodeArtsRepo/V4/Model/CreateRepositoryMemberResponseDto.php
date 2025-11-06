<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRepositoryMemberResponseDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRepositoryMemberResponseDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userIamId  **参数解释：** 用户iamId **约束限制：** 不涉及。
    * userName  **参数解释：** 用户名称。 **约束限制：** 不涉及。
    * tenantName  **参数解释：** 租户名称。 **约束限制：** - 不涉及。
    * userNickName  **参数解释：** 用户昵称。 **约束限制：** - 不涉及。
    * status  **参数解释：** 角色id。 **约束限制：** **约束限制：** - success，添加成功。 - error，添加失败。
    * message  **参数解释：** 成员添加结果信息。 **约束限制：** - 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userIamId' => 'string',
            'userName' => 'string',
            'tenantName' => 'string',
            'userNickName' => 'string',
            'status' => 'string',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userIamId  **参数解释：** 用户iamId **约束限制：** 不涉及。
    * userName  **参数解释：** 用户名称。 **约束限制：** 不涉及。
    * tenantName  **参数解释：** 租户名称。 **约束限制：** - 不涉及。
    * userNickName  **参数解释：** 用户昵称。 **约束限制：** - 不涉及。
    * status  **参数解释：** 角色id。 **约束限制：** **约束限制：** - success，添加成功。 - error，添加失败。
    * message  **参数解释：** 成员添加结果信息。 **约束限制：** - 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userIamId' => null,
        'userName' => null,
        'tenantName' => null,
        'userNickName' => null,
        'status' => null,
        'message' => null
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
    * userNickName  **参数解释：** 用户昵称。 **约束限制：** - 不涉及。
    * status  **参数解释：** 角色id。 **约束限制：** **约束限制：** - success，添加成功。 - error，添加失败。
    * message  **参数解释：** 成员添加结果信息。 **约束限制：** - 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userIamId' => 'user_iam_id',
            'userName' => 'user_name',
            'tenantName' => 'tenant_name',
            'userNickName' => 'user_nick_name',
            'status' => 'status',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userIamId  **参数解释：** 用户iamId **约束限制：** 不涉及。
    * userName  **参数解释：** 用户名称。 **约束限制：** 不涉及。
    * tenantName  **参数解释：** 租户名称。 **约束限制：** - 不涉及。
    * userNickName  **参数解释：** 用户昵称。 **约束限制：** - 不涉及。
    * status  **参数解释：** 角色id。 **约束限制：** **约束限制：** - success，添加成功。 - error，添加失败。
    * message  **参数解释：** 成员添加结果信息。 **约束限制：** - 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'userIamId' => 'setUserIamId',
            'userName' => 'setUserName',
            'tenantName' => 'setTenantName',
            'userNickName' => 'setUserNickName',
            'status' => 'setStatus',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userIamId  **参数解释：** 用户iamId **约束限制：** 不涉及。
    * userName  **参数解释：** 用户名称。 **约束限制：** 不涉及。
    * tenantName  **参数解释：** 租户名称。 **约束限制：** - 不涉及。
    * userNickName  **参数解释：** 用户昵称。 **约束限制：** - 不涉及。
    * status  **参数解释：** 角色id。 **约束限制：** **约束限制：** - success，添加成功。 - error，添加失败。
    * message  **参数解释：** 成员添加结果信息。 **约束限制：** - 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'userIamId' => 'getUserIamId',
            'userName' => 'getUserName',
            'tenantName' => 'getTenantName',
            'userNickName' => 'getUserNickName',
            'status' => 'getStatus',
            'message' => 'getMessage'
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
        $this->container['userNickName'] = isset($data['userNickName']) ? $data['userNickName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
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
            if (!is_null($this->container['userNickName']) && (mb_strlen($this->container['userNickName']) > 100000)) {
                $invalidProperties[] = "invalid value for 'userNickName', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['userNickName']) && (mb_strlen($this->container['userNickName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userNickName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 100000)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 100000)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) < 1)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 1.";
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
    * Gets userNickName
    *  **参数解释：** 用户昵称。 **约束限制：** - 不涉及。
    *
    * @return string|null
    */
    public function getUserNickName()
    {
        return $this->container['userNickName'];
    }

    /**
    * Sets userNickName
    *
    * @param string|null $userNickName **参数解释：** 用户昵称。 **约束限制：** - 不涉及。
    *
    * @return $this
    */
    public function setUserNickName($userNickName)
    {
        $this->container['userNickName'] = $userNickName;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 角色id。 **约束限制：** **约束限制：** - success，添加成功。 - error，添加失败。
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
    * @param string|null $status **参数解释：** 角色id。 **约束限制：** **约束限制：** - success，添加成功。 - error，添加失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets message
    *  **参数解释：** 成员添加结果信息。 **约束限制：** - 不涉及。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message **参数解释：** 成员添加结果信息。 **约束限制：** - 不涉及。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

