<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LoginWhiteListResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LoginWhiteListResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * privateIp  服务器私有IP
    * loginIp  登录源IP
    * loginUserName  登录用户名
    * updateTime  更新时间，毫秒
    * remarks  备注
    * enterpriseProjectName  企业项目名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'privateIp' => 'string',
            'loginIp' => 'string',
            'loginUserName' => 'string',
            'updateTime' => 'int',
            'remarks' => 'string',
            'enterpriseProjectName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * privateIp  服务器私有IP
    * loginIp  登录源IP
    * loginUserName  登录用户名
    * updateTime  更新时间，毫秒
    * remarks  备注
    * enterpriseProjectName  企业项目名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'privateIp' => null,
        'loginIp' => null,
        'loginUserName' => null,
        'updateTime' => 'int64',
        'remarks' => null,
        'enterpriseProjectName' => null
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
    * privateIp  服务器私有IP
    * loginIp  登录源IP
    * loginUserName  登录用户名
    * updateTime  更新时间，毫秒
    * remarks  备注
    * enterpriseProjectName  企业项目名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'privateIp' => 'private_ip',
            'loginIp' => 'login_ip',
            'loginUserName' => 'login_user_name',
            'updateTime' => 'update_time',
            'remarks' => 'remarks',
            'enterpriseProjectName' => 'enterprise_project_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * privateIp  服务器私有IP
    * loginIp  登录源IP
    * loginUserName  登录用户名
    * updateTime  更新时间，毫秒
    * remarks  备注
    * enterpriseProjectName  企业项目名称
    *
    * @var string[]
    */
    protected static $setters = [
            'privateIp' => 'setPrivateIp',
            'loginIp' => 'setLoginIp',
            'loginUserName' => 'setLoginUserName',
            'updateTime' => 'setUpdateTime',
            'remarks' => 'setRemarks',
            'enterpriseProjectName' => 'setEnterpriseProjectName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * privateIp  服务器私有IP
    * loginIp  登录源IP
    * loginUserName  登录用户名
    * updateTime  更新时间，毫秒
    * remarks  备注
    * enterpriseProjectName  企业项目名称
    *
    * @var string[]
    */
    protected static $getters = [
            'privateIp' => 'getPrivateIp',
            'loginIp' => 'getLoginIp',
            'loginUserName' => 'getLoginUserName',
            'updateTime' => 'getUpdateTime',
            'remarks' => 'getRemarks',
            'enterpriseProjectName' => 'getEnterpriseProjectName'
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
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['loginIp'] = isset($data['loginIp']) ? $data['loginIp'] : null;
        $this->container['loginUserName'] = isset($data['loginUserName']) ? $data['loginUserName'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
        $this->container['enterpriseProjectName'] = isset($data['enterpriseProjectName']) ? $data['enterpriseProjectName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateIp']) && !preg_match("/^.*$/", $this->container['privateIp'])) {
                $invalidProperties[] = "invalid value for 'privateIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['loginIp']) && !preg_match("/^.*$/", $this->container['loginIp'])) {
                $invalidProperties[] = "invalid value for 'loginIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['loginUserName']) && !preg_match("/^.*$/", $this->container['loginUserName'])) {
                $invalidProperties[] = "invalid value for 'loginUserName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['remarks']) && (mb_strlen($this->container['remarks']) > 128)) {
                $invalidProperties[] = "invalid value for 'remarks', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['remarks']) && (mb_strlen($this->container['remarks']) < 1)) {
                $invalidProperties[] = "invalid value for 'remarks', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectName']) && (mb_strlen($this->container['enterpriseProjectName']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectName']) && (mb_strlen($this->container['enterpriseProjectName']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectName']) && !preg_match("/^.*$/", $this->container['enterpriseProjectName'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectName', must be conform to the pattern /^.*$/.";
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
    * Gets privateIp
    *  服务器私有IP
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp 服务器私有IP
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets loginIp
    *  登录源IP
    *
    * @return string|null
    */
    public function getLoginIp()
    {
        return $this->container['loginIp'];
    }

    /**
    * Sets loginIp
    *
    * @param string|null $loginIp 登录源IP
    *
    * @return $this
    */
    public function setLoginIp($loginIp)
    {
        $this->container['loginIp'] = $loginIp;
        return $this;
    }

    /**
    * Gets loginUserName
    *  登录用户名
    *
    * @return string|null
    */
    public function getLoginUserName()
    {
        return $this->container['loginUserName'];
    }

    /**
    * Sets loginUserName
    *
    * @param string|null $loginUserName 登录用户名
    *
    * @return $this
    */
    public function setLoginUserName($loginUserName)
    {
        $this->container['loginUserName'] = $loginUserName;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间，毫秒
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
    * @param int|null $updateTime 更新时间，毫秒
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets remarks
    *  备注
    *
    * @return string|null
    */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
    * Sets remarks
    *
    * @param string|null $remarks 备注
    *
    * @return $this
    */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;
        return $this;
    }

    /**
    * Gets enterpriseProjectName
    *  企业项目名称
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
    * @param string|null $enterpriseProjectName 企业项目名称
    *
    * @return $this
    */
    public function setEnterpriseProjectName($enterpriseProjectName)
    {
        $this->container['enterpriseProjectName'] = $enterpriseProjectName;
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

