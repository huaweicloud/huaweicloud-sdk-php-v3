<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GroupBatchAddMemberDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GroupBatchAddMemberDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * iamId  **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * userId  **参数解释：** 用户userId。 **取值范围：** 字符串长度不少于1，不超过1000。
    * name  **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * nickName  **参数解释：** 用户昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * domainName  **参数解释：** 租户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * domainId  **参数解释：** 租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * repoRoleId  **参数解释：** 角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * reqRoleId  **参数解释：** 项目角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * repoRoleName  **参数解释：** 角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * reqRoleName  **参数解释：** 项目角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'iamId' => 'string',
            'userId' => 'string',
            'name' => 'string',
            'nickName' => 'string',
            'domainName' => 'string',
            'domainId' => 'string',
            'repoRoleId' => 'string',
            'reqRoleId' => 'string',
            'repoRoleName' => 'string',
            'reqRoleName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * iamId  **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * userId  **参数解释：** 用户userId。 **取值范围：** 字符串长度不少于1，不超过1000。
    * name  **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * nickName  **参数解释：** 用户昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * domainName  **参数解释：** 租户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * domainId  **参数解释：** 租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * repoRoleId  **参数解释：** 角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * reqRoleId  **参数解释：** 项目角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * repoRoleName  **参数解释：** 角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * reqRoleName  **参数解释：** 项目角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'iamId' => null,
        'userId' => null,
        'name' => null,
        'nickName' => null,
        'domainName' => null,
        'domainId' => null,
        'repoRoleId' => null,
        'reqRoleId' => null,
        'repoRoleName' => null,
        'reqRoleName' => null
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
    * iamId  **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * userId  **参数解释：** 用户userId。 **取值范围：** 字符串长度不少于1，不超过1000。
    * name  **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * nickName  **参数解释：** 用户昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * domainName  **参数解释：** 租户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * domainId  **参数解释：** 租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * repoRoleId  **参数解释：** 角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * reqRoleId  **参数解释：** 项目角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * repoRoleName  **参数解释：** 角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * reqRoleName  **参数解释：** 项目角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'iamId' => 'iam_id',
            'userId' => 'user_id',
            'name' => 'name',
            'nickName' => 'nick_name',
            'domainName' => 'domain_name',
            'domainId' => 'domain_id',
            'repoRoleId' => 'repo_role_id',
            'reqRoleId' => 'req_role_id',
            'repoRoleName' => 'repo_role_name',
            'reqRoleName' => 'req_role_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * iamId  **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * userId  **参数解释：** 用户userId。 **取值范围：** 字符串长度不少于1，不超过1000。
    * name  **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * nickName  **参数解释：** 用户昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * domainName  **参数解释：** 租户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * domainId  **参数解释：** 租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * repoRoleId  **参数解释：** 角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * reqRoleId  **参数解释：** 项目角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * repoRoleName  **参数解释：** 角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * reqRoleName  **参数解释：** 项目角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $setters = [
            'iamId' => 'setIamId',
            'userId' => 'setUserId',
            'name' => 'setName',
            'nickName' => 'setNickName',
            'domainName' => 'setDomainName',
            'domainId' => 'setDomainId',
            'repoRoleId' => 'setRepoRoleId',
            'reqRoleId' => 'setReqRoleId',
            'repoRoleName' => 'setRepoRoleName',
            'reqRoleName' => 'setReqRoleName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * iamId  **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * userId  **参数解释：** 用户userId。 **取值范围：** 字符串长度不少于1，不超过1000。
    * name  **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * nickName  **参数解释：** 用户昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * domainName  **参数解释：** 租户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * domainId  **参数解释：** 租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * repoRoleId  **参数解释：** 角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * reqRoleId  **参数解释：** 项目角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * repoRoleName  **参数解释：** 角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * reqRoleName  **参数解释：** 项目角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $getters = [
            'iamId' => 'getIamId',
            'userId' => 'getUserId',
            'name' => 'getName',
            'nickName' => 'getNickName',
            'domainName' => 'getDomainName',
            'domainId' => 'getDomainId',
            'repoRoleId' => 'getRepoRoleId',
            'reqRoleId' => 'getReqRoleId',
            'repoRoleName' => 'getRepoRoleName',
            'reqRoleName' => 'getReqRoleName'
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
        $this->container['iamId'] = isset($data['iamId']) ? $data['iamId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['repoRoleId'] = isset($data['repoRoleId']) ? $data['repoRoleId'] : null;
        $this->container['reqRoleId'] = isset($data['reqRoleId']) ? $data['reqRoleId'] : null;
        $this->container['repoRoleName'] = isset($data['repoRoleName']) ? $data['repoRoleName'] : null;
        $this->container['reqRoleName'] = isset($data['reqRoleName']) ? $data['reqRoleName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['iamId']) && (mb_strlen($this->container['iamId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'iamId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['iamId']) && (mb_strlen($this->container['iamId']) < 1)) {
                $invalidProperties[] = "invalid value for 'iamId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) < 1)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 1000)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nickName']) && (mb_strlen($this->container['nickName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'nickName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['nickName']) && (mb_strlen($this->container['nickName']) < 1)) {
                $invalidProperties[] = "invalid value for 'nickName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['domainName']) && (mb_strlen($this->container['domainName']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repoRoleId']) && (mb_strlen($this->container['repoRoleId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'repoRoleId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['repoRoleId']) && (mb_strlen($this->container['repoRoleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'repoRoleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reqRoleId']) && (mb_strlen($this->container['reqRoleId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'reqRoleId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['reqRoleId']) && (mb_strlen($this->container['reqRoleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'reqRoleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repoRoleName']) && (mb_strlen($this->container['repoRoleName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'repoRoleName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['repoRoleName']) && (mb_strlen($this->container['repoRoleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'repoRoleName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reqRoleName']) && (mb_strlen($this->container['reqRoleName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'reqRoleName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['reqRoleName']) && (mb_strlen($this->container['reqRoleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'reqRoleName', the character length must be bigger than or equal to 1.";
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
    * Gets iamId
    *  **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getIamId()
    {
        return $this->container['iamId'];
    }

    /**
    * Sets iamId
    *
    * @param string|null $iamId **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setIamId($iamId)
    {
        $this->container['iamId'] = $iamId;
        return $this;
    }

    /**
    * Gets userId
    *  **参数解释：** 用户userId。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId **参数解释：** 用户userId。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $name **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets nickName
    *  **参数解释：** 用户昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
    * Sets nickName
    *
    * @param string|null $nickName **参数解释：** 用户昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets domainName
    *  **参数解释：** 租户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName **参数解释：** 租户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets domainId
    *  **参数解释：** 租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $domainId **参数解释：** 租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets repoRoleId
    *  **参数解释：** 角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getRepoRoleId()
    {
        return $this->container['repoRoleId'];
    }

    /**
    * Sets repoRoleId
    *
    * @param string|null $repoRoleId **参数解释：** 角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setRepoRoleId($repoRoleId)
    {
        $this->container['repoRoleId'] = $repoRoleId;
        return $this;
    }

    /**
    * Gets reqRoleId
    *  **参数解释：** 项目角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getReqRoleId()
    {
        return $this->container['reqRoleId'];
    }

    /**
    * Sets reqRoleId
    *
    * @param string|null $reqRoleId **参数解释：** 项目角色id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setReqRoleId($reqRoleId)
    {
        $this->container['reqRoleId'] = $reqRoleId;
        return $this;
    }

    /**
    * Gets repoRoleName
    *  **参数解释：** 角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getRepoRoleName()
    {
        return $this->container['repoRoleName'];
    }

    /**
    * Sets repoRoleName
    *
    * @param string|null $repoRoleName **参数解释：** 角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setRepoRoleName($repoRoleName)
    {
        $this->container['repoRoleName'] = $repoRoleName;
        return $this;
    }

    /**
    * Gets reqRoleName
    *  **参数解释：** 项目角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getReqRoleName()
    {
        return $this->container['reqRoleName'];
    }

    /**
    * Sets reqRoleName
    *
    * @param string|null $reqRoleName **参数解释：** 项目角色名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setReqRoleName($reqRoleName)
    {
        $this->container['reqRoleName'] = $reqRoleName;
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

