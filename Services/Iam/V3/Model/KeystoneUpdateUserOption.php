<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KeystoneUpdateUserOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KeystoneUpdateUserOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  IAM用户所属账号ID。
    * name  新IAM用户名，长度1~64之间，只能包含如下字符：大小写字母、空格、数字或特殊字符（-_.）且不能以数字开头
    * password  IAM用户密码。 - 系统默认密码最小长度为6位字符，在6-32位之间支持用户自定义密码长度。 - 至少包含以下四种字符中的两种： 大写字母、小写字母、数字和特殊字符。 - 不能包含手机号和邮箱。 - 必须满足账户设置中密码策略的要求。 - 新密码不能与当前密码相同。
    * enabled  是否启用IAM用户。true为启用，false为停用，默认为true。
    * description  IAM用户新描述信息。
    * pwdStatus  IAM用户密码状态。true：需要修改密码，false：不需要修改密码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'name' => 'string',
            'password' => 'string',
            'enabled' => 'bool',
            'description' => 'string',
            'pwdStatus' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  IAM用户所属账号ID。
    * name  新IAM用户名，长度1~64之间，只能包含如下字符：大小写字母、空格、数字或特殊字符（-_.）且不能以数字开头
    * password  IAM用户密码。 - 系统默认密码最小长度为6位字符，在6-32位之间支持用户自定义密码长度。 - 至少包含以下四种字符中的两种： 大写字母、小写字母、数字和特殊字符。 - 不能包含手机号和邮箱。 - 必须满足账户设置中密码策略的要求。 - 新密码不能与当前密码相同。
    * enabled  是否启用IAM用户。true为启用，false为停用，默认为true。
    * description  IAM用户新描述信息。
    * pwdStatus  IAM用户密码状态。true：需要修改密码，false：不需要修改密码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'name' => null,
        'password' => 'password',
        'enabled' => null,
        'description' => null,
        'pwdStatus' => null
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
    * domainId  IAM用户所属账号ID。
    * name  新IAM用户名，长度1~64之间，只能包含如下字符：大小写字母、空格、数字或特殊字符（-_.）且不能以数字开头
    * password  IAM用户密码。 - 系统默认密码最小长度为6位字符，在6-32位之间支持用户自定义密码长度。 - 至少包含以下四种字符中的两种： 大写字母、小写字母、数字和特殊字符。 - 不能包含手机号和邮箱。 - 必须满足账户设置中密码策略的要求。 - 新密码不能与当前密码相同。
    * enabled  是否启用IAM用户。true为启用，false为停用，默认为true。
    * description  IAM用户新描述信息。
    * pwdStatus  IAM用户密码状态。true：需要修改密码，false：不需要修改密码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'name' => 'name',
            'password' => 'password',
            'enabled' => 'enabled',
            'description' => 'description',
            'pwdStatus' => 'pwd_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  IAM用户所属账号ID。
    * name  新IAM用户名，长度1~64之间，只能包含如下字符：大小写字母、空格、数字或特殊字符（-_.）且不能以数字开头
    * password  IAM用户密码。 - 系统默认密码最小长度为6位字符，在6-32位之间支持用户自定义密码长度。 - 至少包含以下四种字符中的两种： 大写字母、小写字母、数字和特殊字符。 - 不能包含手机号和邮箱。 - 必须满足账户设置中密码策略的要求。 - 新密码不能与当前密码相同。
    * enabled  是否启用IAM用户。true为启用，false为停用，默认为true。
    * description  IAM用户新描述信息。
    * pwdStatus  IAM用户密码状态。true：需要修改密码，false：不需要修改密码。
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'name' => 'setName',
            'password' => 'setPassword',
            'enabled' => 'setEnabled',
            'description' => 'setDescription',
            'pwdStatus' => 'setPwdStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  IAM用户所属账号ID。
    * name  新IAM用户名，长度1~64之间，只能包含如下字符：大小写字母、空格、数字或特殊字符（-_.）且不能以数字开头
    * password  IAM用户密码。 - 系统默认密码最小长度为6位字符，在6-32位之间支持用户自定义密码长度。 - 至少包含以下四种字符中的两种： 大写字母、小写字母、数字和特殊字符。 - 不能包含手机号和邮箱。 - 必须满足账户设置中密码策略的要求。 - 新密码不能与当前密码相同。
    * enabled  是否启用IAM用户。true为启用，false为停用，默认为true。
    * description  IAM用户新描述信息。
    * pwdStatus  IAM用户密码状态。true：需要修改密码，false：不需要修改密码。
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'name' => 'getName',
            'password' => 'getPassword',
            'enabled' => 'getEnabled',
            'description' => 'getDescription',
            'pwdStatus' => 'getPwdStatus'
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
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['pwdStatus'] = isset($data['pwdStatus']) ? $data['pwdStatus'] : null;
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
    * Gets domainId
    *  IAM用户所属账号ID。
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
    * @param string|null $domainId IAM用户所属账号ID。
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
    *  新IAM用户名，长度1~64之间，只能包含如下字符：大小写字母、空格、数字或特殊字符（-_.）且不能以数字开头
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
    * @param string|null $name 新IAM用户名，长度1~64之间，只能包含如下字符：大小写字母、空格、数字或特殊字符（-_.）且不能以数字开头
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets password
    *  IAM用户密码。 - 系统默认密码最小长度为6位字符，在6-32位之间支持用户自定义密码长度。 - 至少包含以下四种字符中的两种： 大写字母、小写字母、数字和特殊字符。 - 不能包含手机号和邮箱。 - 必须满足账户设置中密码策略的要求。 - 新密码不能与当前密码相同。
    *
    * @return string|null
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string|null $password IAM用户密码。 - 系统默认密码最小长度为6位字符，在6-32位之间支持用户自定义密码长度。 - 至少包含以下四种字符中的两种： 大写字母、小写字母、数字和特殊字符。 - 不能包含手机号和邮箱。 - 必须满足账户设置中密码策略的要求。 - 新密码不能与当前密码相同。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets enabled
    *  是否启用IAM用户。true为启用，false为停用，默认为true。
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
    * @param bool|null $enabled 是否启用IAM用户。true为启用，false为停用，默认为true。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets description
    *  IAM用户新描述信息。
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
    * @param string|null $description IAM用户新描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets pwdStatus
    *  IAM用户密码状态。true：需要修改密码，false：不需要修改密码。
    *
    * @return bool|null
    */
    public function getPwdStatus()
    {
        return $this->container['pwdStatus'];
    }

    /**
    * Sets pwdStatus
    *
    * @param bool|null $pwdStatus IAM用户密码状态。true：需要修改密码，false：不需要修改密码。
    *
    * @return $this
    */
    public function setPwdStatus($pwdStatus)
    {
        $this->container['pwdStatus'] = $pwdStatus;
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

