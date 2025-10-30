<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityConfigUserChangeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityConfigUserChangeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * changeType  **参数解释**： 主机账户历史变动类型 **取值范围**： - add：添加 - delete：删除 - modify：修改
    * loginPermission  **参数解释**： 是否有登录权限 **取值范围**： - true：有登录权限 - false：无登录权限
    * rootPermission  **参数解释**： 是否有root权限 **取值范围**： - true：有root权限 - false：无root权限
    * userGroupName  **参数解释**： 用户组 **取值范围**： 不涉及
    * userHomeDir  **参数解释**： 用户目录 **取值范围**： 不涉及
    * shell  **参数解释**： 用户启动shell **取值范围**： 不涉及
    * userName  **参数解释**： 用户名 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最新扫描时间，采用时间戳，默认毫秒 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'changeType' => 'string',
            'loginPermission' => 'bool',
            'rootPermission' => 'bool',
            'userGroupName' => 'string',
            'userHomeDir' => 'string',
            'shell' => 'string',
            'userName' => 'string',
            'scanTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * changeType  **参数解释**： 主机账户历史变动类型 **取值范围**： - add：添加 - delete：删除 - modify：修改
    * loginPermission  **参数解释**： 是否有登录权限 **取值范围**： - true：有登录权限 - false：无登录权限
    * rootPermission  **参数解释**： 是否有root权限 **取值范围**： - true：有root权限 - false：无root权限
    * userGroupName  **参数解释**： 用户组 **取值范围**： 不涉及
    * userHomeDir  **参数解释**： 用户目录 **取值范围**： 不涉及
    * shell  **参数解释**： 用户启动shell **取值范围**： 不涉及
    * userName  **参数解释**： 用户名 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最新扫描时间，采用时间戳，默认毫秒 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'changeType' => null,
        'loginPermission' => null,
        'rootPermission' => null,
        'userGroupName' => null,
        'userHomeDir' => null,
        'shell' => null,
        'userName' => null,
        'scanTime' => 'int64'
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
    * changeType  **参数解释**： 主机账户历史变动类型 **取值范围**： - add：添加 - delete：删除 - modify：修改
    * loginPermission  **参数解释**： 是否有登录权限 **取值范围**： - true：有登录权限 - false：无登录权限
    * rootPermission  **参数解释**： 是否有root权限 **取值范围**： - true：有root权限 - false：无root权限
    * userGroupName  **参数解释**： 用户组 **取值范围**： 不涉及
    * userHomeDir  **参数解释**： 用户目录 **取值范围**： 不涉及
    * shell  **参数解释**： 用户启动shell **取值范围**： 不涉及
    * userName  **参数解释**： 用户名 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最新扫描时间，采用时间戳，默认毫秒 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'changeType' => 'change_type',
            'loginPermission' => 'login_permission',
            'rootPermission' => 'root_permission',
            'userGroupName' => 'user_group_name',
            'userHomeDir' => 'user_home_dir',
            'shell' => 'shell',
            'userName' => 'user_name',
            'scanTime' => 'scan_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * changeType  **参数解释**： 主机账户历史变动类型 **取值范围**： - add：添加 - delete：删除 - modify：修改
    * loginPermission  **参数解释**： 是否有登录权限 **取值范围**： - true：有登录权限 - false：无登录权限
    * rootPermission  **参数解释**： 是否有root权限 **取值范围**： - true：有root权限 - false：无root权限
    * userGroupName  **参数解释**： 用户组 **取值范围**： 不涉及
    * userHomeDir  **参数解释**： 用户目录 **取值范围**： 不涉及
    * shell  **参数解释**： 用户启动shell **取值范围**： 不涉及
    * userName  **参数解释**： 用户名 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最新扫描时间，采用时间戳，默认毫秒 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'changeType' => 'setChangeType',
            'loginPermission' => 'setLoginPermission',
            'rootPermission' => 'setRootPermission',
            'userGroupName' => 'setUserGroupName',
            'userHomeDir' => 'setUserHomeDir',
            'shell' => 'setShell',
            'userName' => 'setUserName',
            'scanTime' => 'setScanTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * changeType  **参数解释**： 主机账户历史变动类型 **取值范围**： - add：添加 - delete：删除 - modify：修改
    * loginPermission  **参数解释**： 是否有登录权限 **取值范围**： - true：有登录权限 - false：无登录权限
    * rootPermission  **参数解释**： 是否有root权限 **取值范围**： - true：有root权限 - false：无root权限
    * userGroupName  **参数解释**： 用户组 **取值范围**： 不涉及
    * userHomeDir  **参数解释**： 用户目录 **取值范围**： 不涉及
    * shell  **参数解释**： 用户启动shell **取值范围**： 不涉及
    * userName  **参数解释**： 用户名 **取值范围**： 不涉及
    * scanTime  **参数解释**： 最新扫描时间，采用时间戳，默认毫秒 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'changeType' => 'getChangeType',
            'loginPermission' => 'getLoginPermission',
            'rootPermission' => 'getRootPermission',
            'userGroupName' => 'getUserGroupName',
            'userHomeDir' => 'getUserHomeDir',
            'shell' => 'getShell',
            'userName' => 'getUserName',
            'scanTime' => 'getScanTime'
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
        $this->container['changeType'] = isset($data['changeType']) ? $data['changeType'] : null;
        $this->container['loginPermission'] = isset($data['loginPermission']) ? $data['loginPermission'] : null;
        $this->container['rootPermission'] = isset($data['rootPermission']) ? $data['rootPermission'] : null;
        $this->container['userGroupName'] = isset($data['userGroupName']) ? $data['userGroupName'] : null;
        $this->container['userHomeDir'] = isset($data['userHomeDir']) ? $data['userHomeDir'] : null;
        $this->container['shell'] = isset($data['shell']) ? $data['shell'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
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
    * Gets changeType
    *  **参数解释**： 主机账户历史变动类型 **取值范围**： - add：添加 - delete：删除 - modify：修改
    *
    * @return string|null
    */
    public function getChangeType()
    {
        return $this->container['changeType'];
    }

    /**
    * Sets changeType
    *
    * @param string|null $changeType **参数解释**： 主机账户历史变动类型 **取值范围**： - add：添加 - delete：删除 - modify：修改
    *
    * @return $this
    */
    public function setChangeType($changeType)
    {
        $this->container['changeType'] = $changeType;
        return $this;
    }

    /**
    * Gets loginPermission
    *  **参数解释**： 是否有登录权限 **取值范围**： - true：有登录权限 - false：无登录权限
    *
    * @return bool|null
    */
    public function getLoginPermission()
    {
        return $this->container['loginPermission'];
    }

    /**
    * Sets loginPermission
    *
    * @param bool|null $loginPermission **参数解释**： 是否有登录权限 **取值范围**： - true：有登录权限 - false：无登录权限
    *
    * @return $this
    */
    public function setLoginPermission($loginPermission)
    {
        $this->container['loginPermission'] = $loginPermission;
        return $this;
    }

    /**
    * Gets rootPermission
    *  **参数解释**： 是否有root权限 **取值范围**： - true：有root权限 - false：无root权限
    *
    * @return bool|null
    */
    public function getRootPermission()
    {
        return $this->container['rootPermission'];
    }

    /**
    * Sets rootPermission
    *
    * @param bool|null $rootPermission **参数解释**： 是否有root权限 **取值范围**： - true：有root权限 - false：无root权限
    *
    * @return $this
    */
    public function setRootPermission($rootPermission)
    {
        $this->container['rootPermission'] = $rootPermission;
        return $this;
    }

    /**
    * Gets userGroupName
    *  **参数解释**： 用户组 **取值范围**： 不涉及
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
    * @param string|null $userGroupName **参数解释**： 用户组 **取值范围**： 不涉及
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
    *  **参数解释**： 用户目录 **取值范围**： 不涉及
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
    * @param string|null $userHomeDir **参数解释**： 用户目录 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setUserHomeDir($userHomeDir)
    {
        $this->container['userHomeDir'] = $userHomeDir;
        return $this;
    }

    /**
    * Gets shell
    *  **参数解释**： 用户启动shell **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getShell()
    {
        return $this->container['shell'];
    }

    /**
    * Sets shell
    *
    * @param string|null $shell **参数解释**： 用户启动shell **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setShell($shell)
    {
        $this->container['shell'] = $shell;
        return $this;
    }

    /**
    * Gets userName
    *  **参数解释**： 用户名 **取值范围**： 不涉及
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
    * @param string|null $userName **参数解释**： 用户名 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets scanTime
    *  **参数解释**： 最新扫描时间，采用时间戳，默认毫秒 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getScanTime()
    {
        return $this->container['scanTime'];
    }

    /**
    * Sets scanTime
    *
    * @param int|null $scanTime **参数解释**： 最新扫描时间，采用时间戳，默认毫秒 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
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

