<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetaDataInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetaDataInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * opSvcUserid  用户ID（登录管理控制台，进入我的凭证，即可看到“用户ID”）。
    * adminPass  以Windows镜像创建的裸金属服务器Administrator用户的密码，示例：cloud.1234。密码复杂度要求：长度为8-26位。密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。
    * byol  否自带许可，取值“true”或“false”。
    * agencyName  委托的名称。委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以作为其他租户访问此裸金属服务器的临时凭证。 说明:委托获取、更新请参考如下步骤：使用IAM服务提供的查询委托列表，获取有效可用的委托名称。使用更新裸金属服务器元数据接口，更新metadata中agency_name字段为新的委托名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'opSvcUserid' => 'string',
            'adminPass' => 'string',
            'byol' => 'string',
            'agencyName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * opSvcUserid  用户ID（登录管理控制台，进入我的凭证，即可看到“用户ID”）。
    * adminPass  以Windows镜像创建的裸金属服务器Administrator用户的密码，示例：cloud.1234。密码复杂度要求：长度为8-26位。密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。
    * byol  否自带许可，取值“true”或“false”。
    * agencyName  委托的名称。委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以作为其他租户访问此裸金属服务器的临时凭证。 说明:委托获取、更新请参考如下步骤：使用IAM服务提供的查询委托列表，获取有效可用的委托名称。使用更新裸金属服务器元数据接口，更新metadata中agency_name字段为新的委托名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'opSvcUserid' => null,
        'adminPass' => 'password',
        'byol' => null,
        'agencyName' => null
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
    * opSvcUserid  用户ID（登录管理控制台，进入我的凭证，即可看到“用户ID”）。
    * adminPass  以Windows镜像创建的裸金属服务器Administrator用户的密码，示例：cloud.1234。密码复杂度要求：长度为8-26位。密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。
    * byol  否自带许可，取值“true”或“false”。
    * agencyName  委托的名称。委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以作为其他租户访问此裸金属服务器的临时凭证。 说明:委托获取、更新请参考如下步骤：使用IAM服务提供的查询委托列表，获取有效可用的委托名称。使用更新裸金属服务器元数据接口，更新metadata中agency_name字段为新的委托名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'opSvcUserid' => 'op_svc_userid',
            'adminPass' => 'admin_pass',
            'byol' => 'BYOL',
            'agencyName' => 'agency_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * opSvcUserid  用户ID（登录管理控制台，进入我的凭证，即可看到“用户ID”）。
    * adminPass  以Windows镜像创建的裸金属服务器Administrator用户的密码，示例：cloud.1234。密码复杂度要求：长度为8-26位。密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。
    * byol  否自带许可，取值“true”或“false”。
    * agencyName  委托的名称。委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以作为其他租户访问此裸金属服务器的临时凭证。 说明:委托获取、更新请参考如下步骤：使用IAM服务提供的查询委托列表，获取有效可用的委托名称。使用更新裸金属服务器元数据接口，更新metadata中agency_name字段为新的委托名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'opSvcUserid' => 'setOpSvcUserid',
            'adminPass' => 'setAdminPass',
            'byol' => 'setByol',
            'agencyName' => 'setAgencyName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * opSvcUserid  用户ID（登录管理控制台，进入我的凭证，即可看到“用户ID”）。
    * adminPass  以Windows镜像创建的裸金属服务器Administrator用户的密码，示例：cloud.1234。密码复杂度要求：长度为8-26位。密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。
    * byol  否自带许可，取值“true”或“false”。
    * agencyName  委托的名称。委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以作为其他租户访问此裸金属服务器的临时凭证。 说明:委托获取、更新请参考如下步骤：使用IAM服务提供的查询委托列表，获取有效可用的委托名称。使用更新裸金属服务器元数据接口，更新metadata中agency_name字段为新的委托名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'opSvcUserid' => 'getOpSvcUserid',
            'adminPass' => 'getAdminPass',
            'byol' => 'getByol',
            'agencyName' => 'getAgencyName'
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
        $this->container['opSvcUserid'] = isset($data['opSvcUserid']) ? $data['opSvcUserid'] : null;
        $this->container['adminPass'] = isset($data['adminPass']) ? $data['adminPass'] : null;
        $this->container['byol'] = isset($data['byol']) ? $data['byol'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['opSvcUserid'] === null) {
            $invalidProperties[] = "'opSvcUserid' can't be null";
        }
            if (!is_null($this->container['adminPass']) && !preg_match("/[A-Za-z0-9!@$%^-_=+[{}]:,.\/?]*$/", $this->container['adminPass'])) {
                $invalidProperties[] = "invalid value for 'adminPass', must be conform to the pattern /[A-Za-z0-9!@$%^-_=+[{}]:,.\/?]*$/.";
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
    * Gets opSvcUserid
    *  用户ID（登录管理控制台，进入我的凭证，即可看到“用户ID”）。
    *
    * @return string
    */
    public function getOpSvcUserid()
    {
        return $this->container['opSvcUserid'];
    }

    /**
    * Sets opSvcUserid
    *
    * @param string $opSvcUserid 用户ID（登录管理控制台，进入我的凭证，即可看到“用户ID”）。
    *
    * @return $this
    */
    public function setOpSvcUserid($opSvcUserid)
    {
        $this->container['opSvcUserid'] = $opSvcUserid;
        return $this;
    }

    /**
    * Gets adminPass
    *  以Windows镜像创建的裸金属服务器Administrator用户的密码，示例：cloud.1234。密码复杂度要求：长度为8-26位。密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。
    *
    * @return string|null
    */
    public function getAdminPass()
    {
        return $this->container['adminPass'];
    }

    /**
    * Sets adminPass
    *
    * @param string|null $adminPass 以Windows镜像创建的裸金属服务器Administrator用户的密码，示例：cloud.1234。密码复杂度要求：长度为8-26位。密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。
    *
    * @return $this
    */
    public function setAdminPass($adminPass)
    {
        $this->container['adminPass'] = $adminPass;
        return $this;
    }

    /**
    * Gets byol
    *  否自带许可，取值“true”或“false”。
    *
    * @return string|null
    */
    public function getByol()
    {
        return $this->container['byol'];
    }

    /**
    * Sets byol
    *
    * @param string|null $byol 否自带许可，取值“true”或“false”。
    *
    * @return $this
    */
    public function setByol($byol)
    {
        $this->container['byol'] = $byol;
        return $this;
    }

    /**
    * Gets agencyName
    *  委托的名称。委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以作为其他租户访问此裸金属服务器的临时凭证。 说明:委托获取、更新请参考如下步骤：使用IAM服务提供的查询委托列表，获取有效可用的委托名称。使用更新裸金属服务器元数据接口，更新metadata中agency_name字段为新的委托名称。
    *
    * @return string|null
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string|null $agencyName 委托的名称。委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以作为其他租户访问此裸金属服务器的临时凭证。 说明:委托获取、更新请参考如下步骤：使用IAM服务提供的查询委托列表，获取有效可用的委托名称。使用更新裸金属服务器元数据接口，更新metadata中agency_name字段为新的委托名称。
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
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

