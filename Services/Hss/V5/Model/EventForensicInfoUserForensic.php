<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventForensicInfoUserForensic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventForensicInfo_user_forensic';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * userId  **参数解释**： 用户uid **取值范围**： 不涉及
    * userGid  **参数解释**： 用户gid **取值范围**： 不涉及
    * userName  **参数解释**： 用户名称 **取值范围**： 不涉及
    * userGroupName  **参数解释**： 用户组名称 **取值范围**： 不涉及
    * userHomeDir  **参数解释**： 用户home目录 **取值范围**： 不涉及
    * loginIp  **参数解释**： 用户登录ip **取值范围**： 不涉及
    * serviceType  **参数解释**： 登录的服务类型 **取值范围**： 不涉及
    * servicePort  **参数解释**： 登录服务端口 **取值范围**： 不涉及
    * loginMode  **参数解释**： 登录方式 **取值范围**： 不涉及
    * loginLastTime  **参数解释**： 用户最后一次登录时间 **取值范围**： 不涉及
    * loginFailCount  **参数解释**： 用户登录失败次数 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'userId' => 'int',
            'userGid' => 'int',
            'userName' => 'string',
            'userGroupName' => 'string',
            'userHomeDir' => 'string',
            'loginIp' => 'string',
            'serviceType' => 'string',
            'servicePort' => 'int',
            'loginMode' => 'int',
            'loginLastTime' => 'int',
            'loginFailCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * userId  **参数解释**： 用户uid **取值范围**： 不涉及
    * userGid  **参数解释**： 用户gid **取值范围**： 不涉及
    * userName  **参数解释**： 用户名称 **取值范围**： 不涉及
    * userGroupName  **参数解释**： 用户组名称 **取值范围**： 不涉及
    * userHomeDir  **参数解释**： 用户home目录 **取值范围**： 不涉及
    * loginIp  **参数解释**： 用户登录ip **取值范围**： 不涉及
    * serviceType  **参数解释**： 登录的服务类型 **取值范围**： 不涉及
    * servicePort  **参数解释**： 登录服务端口 **取值范围**： 不涉及
    * loginMode  **参数解释**： 登录方式 **取值范围**： 不涉及
    * loginLastTime  **参数解释**： 用户最后一次登录时间 **取值范围**： 不涉及
    * loginFailCount  **参数解释**： 用户登录失败次数 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'userId' => 'int32',
        'userGid' => 'int32',
        'userName' => null,
        'userGroupName' => null,
        'userHomeDir' => null,
        'loginIp' => null,
        'serviceType' => null,
        'servicePort' => 'int32',
        'loginMode' => 'int32',
        'loginLastTime' => 'int64',
        'loginFailCount' => 'int32'
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
    * userId  **参数解释**： 用户uid **取值范围**： 不涉及
    * userGid  **参数解释**： 用户gid **取值范围**： 不涉及
    * userName  **参数解释**： 用户名称 **取值范围**： 不涉及
    * userGroupName  **参数解释**： 用户组名称 **取值范围**： 不涉及
    * userHomeDir  **参数解释**： 用户home目录 **取值范围**： 不涉及
    * loginIp  **参数解释**： 用户登录ip **取值范围**： 不涉及
    * serviceType  **参数解释**： 登录的服务类型 **取值范围**： 不涉及
    * servicePort  **参数解释**： 登录服务端口 **取值范围**： 不涉及
    * loginMode  **参数解释**： 登录方式 **取值范围**： 不涉及
    * loginLastTime  **参数解释**： 用户最后一次登录时间 **取值范围**： 不涉及
    * loginFailCount  **参数解释**： 用户登录失败次数 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'userId' => 'user_id',
            'userGid' => 'user_gid',
            'userName' => 'user_name',
            'userGroupName' => 'user_group_name',
            'userHomeDir' => 'user_home_dir',
            'loginIp' => 'login_ip',
            'serviceType' => 'service_type',
            'servicePort' => 'service_port',
            'loginMode' => 'login_mode',
            'loginLastTime' => 'login_last_time',
            'loginFailCount' => 'login_fail_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * userId  **参数解释**： 用户uid **取值范围**： 不涉及
    * userGid  **参数解释**： 用户gid **取值范围**： 不涉及
    * userName  **参数解释**： 用户名称 **取值范围**： 不涉及
    * userGroupName  **参数解释**： 用户组名称 **取值范围**： 不涉及
    * userHomeDir  **参数解释**： 用户home目录 **取值范围**： 不涉及
    * loginIp  **参数解释**： 用户登录ip **取值范围**： 不涉及
    * serviceType  **参数解释**： 登录的服务类型 **取值范围**： 不涉及
    * servicePort  **参数解释**： 登录服务端口 **取值范围**： 不涉及
    * loginMode  **参数解释**： 登录方式 **取值范围**： 不涉及
    * loginLastTime  **参数解释**： 用户最后一次登录时间 **取值范围**： 不涉及
    * loginFailCount  **参数解释**： 用户登录失败次数 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'userId' => 'setUserId',
            'userGid' => 'setUserGid',
            'userName' => 'setUserName',
            'userGroupName' => 'setUserGroupName',
            'userHomeDir' => 'setUserHomeDir',
            'loginIp' => 'setLoginIp',
            'serviceType' => 'setServiceType',
            'servicePort' => 'setServicePort',
            'loginMode' => 'setLoginMode',
            'loginLastTime' => 'setLoginLastTime',
            'loginFailCount' => 'setLoginFailCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * userId  **参数解释**： 用户uid **取值范围**： 不涉及
    * userGid  **参数解释**： 用户gid **取值范围**： 不涉及
    * userName  **参数解释**： 用户名称 **取值范围**： 不涉及
    * userGroupName  **参数解释**： 用户组名称 **取值范围**： 不涉及
    * userHomeDir  **参数解释**： 用户home目录 **取值范围**： 不涉及
    * loginIp  **参数解释**： 用户登录ip **取值范围**： 不涉及
    * serviceType  **参数解释**： 登录的服务类型 **取值范围**： 不涉及
    * servicePort  **参数解释**： 登录服务端口 **取值范围**： 不涉及
    * loginMode  **参数解释**： 登录方式 **取值范围**： 不涉及
    * loginLastTime  **参数解释**： 用户最后一次登录时间 **取值范围**： 不涉及
    * loginFailCount  **参数解释**： 用户登录失败次数 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'userId' => 'getUserId',
            'userGid' => 'getUserGid',
            'userName' => 'getUserName',
            'userGroupName' => 'getUserGroupName',
            'userHomeDir' => 'getUserHomeDir',
            'loginIp' => 'getLoginIp',
            'serviceType' => 'getServiceType',
            'servicePort' => 'getServicePort',
            'loginMode' => 'getLoginMode',
            'loginLastTime' => 'getLoginLastTime',
            'loginFailCount' => 'getLoginFailCount'
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
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userGid'] = isset($data['userGid']) ? $data['userGid'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['userGroupName'] = isset($data['userGroupName']) ? $data['userGroupName'] : null;
        $this->container['userHomeDir'] = isset($data['userHomeDir']) ? $data['userHomeDir'] : null;
        $this->container['loginIp'] = isset($data['loginIp']) ? $data['loginIp'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['servicePort'] = isset($data['servicePort']) ? $data['servicePort'] : null;
        $this->container['loginMode'] = isset($data['loginMode']) ? $data['loginMode'] : null;
        $this->container['loginLastTime'] = isset($data['loginLastTime']) ? $data['loginLastTime'] : null;
        $this->container['loginFailCount'] = isset($data['loginFailCount']) ? $data['loginFailCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['userId']) && ($this->container['userId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'userId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['userId']) && ($this->container['userId'] < 0)) {
                $invalidProperties[] = "invalid value for 'userId', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userGid']) && ($this->container['userGid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'userGid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['userGid']) && ($this->container['userGid'] < 0)) {
                $invalidProperties[] = "invalid value for 'userGid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userName']) && !preg_match("/^.*$/", $this->container['userName'])) {
                $invalidProperties[] = "invalid value for 'userName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['userGroupName']) && !preg_match("/^.*$/", $this->container['userGroupName'])) {
                $invalidProperties[] = "invalid value for 'userGroupName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['userHomeDir']) && !preg_match("/^.*$/", $this->container['userHomeDir'])) {
                $invalidProperties[] = "invalid value for 'userHomeDir', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['loginIp']) && !preg_match("/^.*$/", $this->container['loginIp'])) {
                $invalidProperties[] = "invalid value for 'loginIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['serviceType']) && !preg_match("/^.*$/", $this->container['serviceType'])) {
                $invalidProperties[] = "invalid value for 'serviceType', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['servicePort']) && ($this->container['servicePort'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'servicePort', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['servicePort']) && ($this->container['servicePort'] < 0)) {
                $invalidProperties[] = "invalid value for 'servicePort', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['loginMode']) && ($this->container['loginMode'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'loginMode', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['loginMode']) && ($this->container['loginMode'] < 0)) {
                $invalidProperties[] = "invalid value for 'loginMode', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['loginLastTime']) && ($this->container['loginLastTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'loginLastTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['loginLastTime']) && ($this->container['loginLastTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'loginLastTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['loginFailCount']) && ($this->container['loginFailCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'loginFailCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['loginFailCount']) && ($this->container['loginFailCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'loginFailCount', must be bigger than or equal to 0.";
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
    * Gets userId
    *  **参数解释**： 用户uid **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param int|null $userId **参数解释**： 用户uid **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets userGid
    *  **参数解释**： 用户gid **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getUserGid()
    {
        return $this->container['userGid'];
    }

    /**
    * Sets userGid
    *
    * @param int|null $userGid **参数解释**： 用户gid **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setUserGid($userGid)
    {
        $this->container['userGid'] = $userGid;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释**： 用户名称 **取值范围**： 不涉及
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
    * @param string|null $userName **参数解释**： 用户名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets userGroupName
    *  **参数解释**： 用户组名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getUserGroupName()
    {
        return $this->container['userGroupName'];
    }

    /**
    * Sets userGroupName
    *
    * @param string|null $userGroupName **参数解释**： 用户组名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setUserGroupName($userGroupName)
    {
        $this->container['userGroupName'] = $userGroupName;
        return $this;
    }

    /**
    * Gets userHomeDir
    *  **参数解释**： 用户home目录 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getUserHomeDir()
    {
        return $this->container['userHomeDir'];
    }

    /**
    * Sets userHomeDir
    *
    * @param string|null $userHomeDir **参数解释**： 用户home目录 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setUserHomeDir($userHomeDir)
    {
        $this->container['userHomeDir'] = $userHomeDir;
        return $this;
    }

    /**
    * Gets loginIp
    *  **参数解释**： 用户登录ip **取值范围**： 不涉及
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
    * @param string|null $loginIp **参数解释**： 用户登录ip **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLoginIp($loginIp)
    {
        $this->container['loginIp'] = $loginIp;
        return $this;
    }

    /**
    * Gets serviceType
    *  **参数解释**： 登录的服务类型 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string|null $serviceType **参数解释**： 登录的服务类型 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets servicePort
    *  **参数解释**： 登录服务端口 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getServicePort()
    {
        return $this->container['servicePort'];
    }

    /**
    * Sets servicePort
    *
    * @param int|null $servicePort **参数解释**： 登录服务端口 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setServicePort($servicePort)
    {
        $this->container['servicePort'] = $servicePort;
        return $this;
    }

    /**
    * Gets loginMode
    *  **参数解释**： 登录方式 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getLoginMode()
    {
        return $this->container['loginMode'];
    }

    /**
    * Sets loginMode
    *
    * @param int|null $loginMode **参数解释**： 登录方式 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLoginMode($loginMode)
    {
        $this->container['loginMode'] = $loginMode;
        return $this;
    }

    /**
    * Gets loginLastTime
    *  **参数解释**： 用户最后一次登录时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getLoginLastTime()
    {
        return $this->container['loginLastTime'];
    }

    /**
    * Sets loginLastTime
    *
    * @param int|null $loginLastTime **参数解释**： 用户最后一次登录时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLoginLastTime($loginLastTime)
    {
        $this->container['loginLastTime'] = $loginLastTime;
        return $this;
    }

    /**
    * Gets loginFailCount
    *  **参数解释**： 用户登录失败次数 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getLoginFailCount()
    {
        return $this->container['loginFailCount'];
    }

    /**
    * Sets loginFailCount
    *
    * @param int|null $loginFailCount **参数解释**： 用户登录失败次数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLoginFailCount($loginFailCount)
    {
        $this->container['loginFailCount'] = $loginFailCount;
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

