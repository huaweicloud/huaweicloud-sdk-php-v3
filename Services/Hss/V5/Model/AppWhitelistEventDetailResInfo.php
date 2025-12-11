<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppWhitelistEventDetailResInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppWhitelistEventDetailResInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * processPid  **参数解释**： 进程ID **取值范围**： 最小值0，最大值2147483647
    * fileHash  **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * fileAttr  **参数解释**： 文件的系统属性（如读写权限、隐藏属性、执行权限等） **取值范围**： 字符长度1-256位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * loginIp  **参数解释**： 登录源IP **取值范围**： 字符长度1-256位
    * loginUserName  **参数解释**： 登录用户名 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentId' => 'string',
            'processPid' => 'int',
            'fileHash' => 'string',
            'filePath' => 'string',
            'fileAttr' => 'string',
            'privateIp' => 'string',
            'loginIp' => 'string',
            'loginUserName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * processPid  **参数解释**： 进程ID **取值范围**： 最小值0，最大值2147483647
    * fileHash  **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * fileAttr  **参数解释**： 文件的系统属性（如读写权限、隐藏属性、执行权限等） **取值范围**： 字符长度1-256位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * loginIp  **参数解释**： 登录源IP **取值范围**： 字符长度1-256位
    * loginUserName  **参数解释**： 登录用户名 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentId' => null,
        'processPid' => 'int32',
        'fileHash' => null,
        'filePath' => null,
        'fileAttr' => null,
        'privateIp' => null,
        'loginIp' => null,
        'loginUserName' => null
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
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * processPid  **参数解释**： 进程ID **取值范围**： 最小值0，最大值2147483647
    * fileHash  **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * fileAttr  **参数解释**： 文件的系统属性（如读写权限、隐藏属性、执行权限等） **取值范围**： 字符长度1-256位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * loginIp  **参数解释**： 登录源IP **取值范围**： 字符长度1-256位
    * loginUserName  **参数解释**： 登录用户名 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentId' => 'agent_id',
            'processPid' => 'process_pid',
            'fileHash' => 'file_hash',
            'filePath' => 'file_path',
            'fileAttr' => 'file_attr',
            'privateIp' => 'private_ip',
            'loginIp' => 'login_ip',
            'loginUserName' => 'login_user_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * processPid  **参数解释**： 进程ID **取值范围**： 最小值0，最大值2147483647
    * fileHash  **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * fileAttr  **参数解释**： 文件的系统属性（如读写权限、隐藏属性、执行权限等） **取值范围**： 字符长度1-256位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * loginIp  **参数解释**： 登录源IP **取值范围**： 字符长度1-256位
    * loginUserName  **参数解释**： 登录用户名 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $setters = [
            'agentId' => 'setAgentId',
            'processPid' => 'setProcessPid',
            'fileHash' => 'setFileHash',
            'filePath' => 'setFilePath',
            'fileAttr' => 'setFileAttr',
            'privateIp' => 'setPrivateIp',
            'loginIp' => 'setLoginIp',
            'loginUserName' => 'setLoginUserName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * processPid  **参数解释**： 进程ID **取值范围**： 最小值0，最大值2147483647
    * fileHash  **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    * filePath  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    * fileAttr  **参数解释**： 文件的系统属性（如读写权限、隐藏属性、执行权限等） **取值范围**： 字符长度1-256位
    * privateIp  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
    * loginIp  **参数解释**： 登录源IP **取值范围**： 字符长度1-256位
    * loginUserName  **参数解释**： 登录用户名 **取值范围**： 字符长度1-256位
    *
    * @var string[]
    */
    protected static $getters = [
            'agentId' => 'getAgentId',
            'processPid' => 'getProcessPid',
            'fileHash' => 'getFileHash',
            'filePath' => 'getFilePath',
            'fileAttr' => 'getFileAttr',
            'privateIp' => 'getPrivateIp',
            'loginIp' => 'getLoginIp',
            'loginUserName' => 'getLoginUserName'
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
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['processPid'] = isset($data['processPid']) ? $data['processPid'] : null;
        $this->container['fileHash'] = isset($data['fileHash']) ? $data['fileHash'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['fileAttr'] = isset($data['fileAttr']) ? $data['fileAttr'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['loginIp'] = isset($data['loginIp']) ? $data['loginIp'] : null;
        $this->container['loginUserName'] = isset($data['loginUserName']) ? $data['loginUserName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['agentId']) && !preg_match("/^.*$/", $this->container['agentId'])) {
                $invalidProperties[] = "invalid value for 'agentId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['processPid']) && ($this->container['processPid'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'processPid', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['processPid']) && ($this->container['processPid'] < 0)) {
                $invalidProperties[] = "invalid value for 'processPid', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileHash']) && !preg_match("/^.*$/", $this->container['fileHash'])) {
                $invalidProperties[] = "invalid value for 'fileHash', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['filePath']) && !preg_match("/^.*$/", $this->container['filePath'])) {
                $invalidProperties[] = "invalid value for 'filePath', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['fileAttr']) && !preg_match("/^.*$/", $this->container['fileAttr'])) {
                $invalidProperties[] = "invalid value for 'fileAttr', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
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
    * Gets agentId
    *  **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string|null $agentId **参数解释**: 主机上安装的杀毒Agent的唯一标识ID，用于关联主机与杀毒服务 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets processPid
    *  **参数解释**： 进程ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getProcessPid()
    {
        return $this->container['processPid'];
    }

    /**
    * Sets processPid
    *
    * @param int|null $processPid **参数解释**： 进程ID **取值范围**： 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setProcessPid($processPid)
    {
        $this->container['processPid'] = $processPid;
        return $this;
    }

    /**
    * Gets fileHash
    *  **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getFileHash()
    {
        return $this->container['fileHash'];
    }

    /**
    * Sets fileHash
    *
    * @param string|null $fileHash **参数解释**： 文件哈希 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFileHash($fileHash)
    {
        $this->container['fileHash'] = $fileHash;
        return $this;
    }

    /**
    * Gets filePath
    *  **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string|null $filePath **参数解释**： 文件路径 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets fileAttr
    *  **参数解释**： 文件的系统属性（如读写权限、隐藏属性、执行权限等） **取值范围**： 字符长度1-256位
    *
    * @return string|null
    */
    public function getFileAttr()
    {
        return $this->container['fileAttr'];
    }

    /**
    * Sets fileAttr
    *
    * @param string|null $fileAttr **参数解释**： 文件的系统属性（如读写权限、隐藏属性、执行权限等） **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setFileAttr($fileAttr)
    {
        $this->container['fileAttr'] = $fileAttr;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
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
    * @param string|null $privateIp **参数解释**： 服务器私有IP **取值范围**： 字符长度1-128位
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
    *  **参数解释**： 登录源IP **取值范围**： 字符长度1-256位
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
    * @param string|null $loginIp **参数解释**： 登录源IP **取值范围**： 字符长度1-256位
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
    *  **参数解释**： 登录用户名 **取值范围**： 字符长度1-256位
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
    * @param string|null $loginUserName **参数解释**： 登录用户名 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setLoginUserName($loginUserName)
    {
        $this->container['loginUserName'] = $loginUserName;
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

