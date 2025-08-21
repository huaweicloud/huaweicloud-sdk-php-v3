<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GrantedUsersDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GrantedUsersDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 用户id。
    * name  **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * nameCn  **参数解释：** 用户中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * username  **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * nickName  **参数解释：** 用户昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * tenantName  **参数解释：** 租户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * email  **参数解释：** 用户邮箱。 **取值范围：** 字符串长度不少于1，不超过1000。
    * iamId  **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * serviceLicenseStatus  **参数解释：** license的状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'name' => 'string',
            'nameCn' => 'string',
            'username' => 'string',
            'nickName' => 'string',
            'tenantName' => 'string',
            'email' => 'string',
            'iamId' => 'string',
            'serviceLicenseStatus' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 用户id。
    * name  **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * nameCn  **参数解释：** 用户中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * username  **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * nickName  **参数解释：** 用户昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * tenantName  **参数解释：** 租户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * email  **参数解释：** 用户邮箱。 **取值范围：** 字符串长度不少于1，不超过1000。
    * iamId  **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * serviceLicenseStatus  **参数解释：** license的状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'name' => null,
        'nameCn' => null,
        'username' => null,
        'nickName' => null,
        'tenantName' => null,
        'email' => null,
        'iamId' => null,
        'serviceLicenseStatus' => 'int32'
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
    * id  **参数解释：** 用户id。
    * name  **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * nameCn  **参数解释：** 用户中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * username  **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * nickName  **参数解释：** 用户昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * tenantName  **参数解释：** 租户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * email  **参数解释：** 用户邮箱。 **取值范围：** 字符串长度不少于1，不超过1000。
    * iamId  **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * serviceLicenseStatus  **参数解释：** license的状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'nameCn' => 'name_cn',
            'username' => 'username',
            'nickName' => 'nick_name',
            'tenantName' => 'tenant_name',
            'email' => 'email',
            'iamId' => 'iam_id',
            'serviceLicenseStatus' => 'service_license_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 用户id。
    * name  **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * nameCn  **参数解释：** 用户中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * username  **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * nickName  **参数解释：** 用户昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * tenantName  **参数解释：** 租户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * email  **参数解释：** 用户邮箱。 **取值范围：** 字符串长度不少于1，不超过1000。
    * iamId  **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * serviceLicenseStatus  **参数解释：** license的状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'nameCn' => 'setNameCn',
            'username' => 'setUsername',
            'nickName' => 'setNickName',
            'tenantName' => 'setTenantName',
            'email' => 'setEmail',
            'iamId' => 'setIamId',
            'serviceLicenseStatus' => 'setServiceLicenseStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 用户id。
    * name  **参数解释：** 用户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * nameCn  **参数解释：** 用户中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * username  **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * nickName  **参数解释：** 用户昵称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * tenantName  **参数解释：** 租户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * email  **参数解释：** 用户邮箱。 **取值范围：** 字符串长度不少于1，不超过1000。
    * iamId  **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * serviceLicenseStatus  **参数解释：** license的状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'nameCn' => 'getNameCn',
            'username' => 'getUsername',
            'nickName' => 'getNickName',
            'tenantName' => 'getTenantName',
            'email' => 'getEmail',
            'iamId' => 'getIamId',
            'serviceLicenseStatus' => 'getServiceLicenseStatus'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nameCn'] = isset($data['nameCn']) ? $data['nameCn'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['tenantName'] = isset($data['tenantName']) ? $data['tenantName'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['iamId'] = isset($data['iamId']) ? $data['iamId'] : null;
        $this->container['serviceLicenseStatus'] = isset($data['serviceLicenseStatus']) ? $data['serviceLicenseStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 1000)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nameCn']) && (mb_strlen($this->container['nameCn']) > 1000)) {
                $invalidProperties[] = "invalid value for 'nameCn', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['nameCn']) && (mb_strlen($this->container['nameCn']) < 1)) {
                $invalidProperties[] = "invalid value for 'nameCn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) > 1000)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['username']) && (mb_strlen($this->container['username']) < 1)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nickName']) && (mb_strlen($this->container['nickName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'nickName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['nickName']) && (mb_strlen($this->container['nickName']) < 1)) {
                $invalidProperties[] = "invalid value for 'nickName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tenantName']) && (mb_strlen($this->container['tenantName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'tenantName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['tenantName']) && (mb_strlen($this->container['tenantName']) < 1)) {
                $invalidProperties[] = "invalid value for 'tenantName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 1000)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 1)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['iamId']) && (mb_strlen($this->container['iamId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'iamId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['iamId']) && (mb_strlen($this->container['iamId']) < 1)) {
                $invalidProperties[] = "invalid value for 'iamId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serviceLicenseStatus']) && ($this->container['serviceLicenseStatus'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'serviceLicenseStatus', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['serviceLicenseStatus']) && ($this->container['serviceLicenseStatus'] < 1)) {
                $invalidProperties[] = "invalid value for 'serviceLicenseStatus', must be bigger than or equal to 1.";
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
    *  **参数解释：** 用户id。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释：** 用户id。
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
    * Gets nameCn
    *  **参数解释：** 用户中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getNameCn()
    {
        return $this->container['nameCn'];
    }

    /**
    * Sets nameCn
    *
    * @param string|null $nameCn **参数解释：** 用户中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setNameCn($nameCn)
    {
        $this->container['nameCn'] = $nameCn;
        return $this;
    }

    /**
    * Gets username
    *  **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
    * Sets username
    *
    * @param string|null $username **参数解释：** 用户iam_id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setUsername($username)
    {
        $this->container['username'] = $username;
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
    * Gets tenantName
    *  **参数解释：** 租户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
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
    * @param string|null $tenantName **参数解释：** 租户名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setTenantName($tenantName)
    {
        $this->container['tenantName'] = $tenantName;
        return $this;
    }

    /**
    * Gets email
    *  **参数解释：** 用户邮箱。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string|null $email **参数解释：** 用户邮箱。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
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
    * Gets serviceLicenseStatus
    *  **参数解释：** license的状态。
    *
    * @return int|null
    */
    public function getServiceLicenseStatus()
    {
        return $this->container['serviceLicenseStatus'];
    }

    /**
    * Sets serviceLicenseStatus
    *
    * @param int|null $serviceLicenseStatus **参数解释：** license的状态。
    *
    * @return $this
    */
    public function setServiceLicenseStatus($serviceLicenseStatus)
    {
        $this->container['serviceLicenseStatus'] = $serviceLicenseStatus;
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

