<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventDetailRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventDetailRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentId  Agent ID
    * processPid  进程id
    * fileHash  文件哈希
    * filePath  文件路径
    * fileAttr  文件属性
    * keyword  告警事件关键字，仅用于告警白名单
    * hash  告警事件hash，仅用于告警白名单
    * privateIp  服务器私有IP
    * loginIp  登录源IP
    * loginUserName  登录用户名
    * containerId  容器ID
    * containerName  容器名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentId' => 'string',
            'processPid' => 'int',
            'fileHash' => 'string',
            'filePath' => 'string',
            'fileAttr' => 'string',
            'keyword' => 'string',
            'hash' => 'string',
            'privateIp' => 'string',
            'loginIp' => 'string',
            'loginUserName' => 'string',
            'containerId' => 'string',
            'containerName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  Agent ID
    * processPid  进程id
    * fileHash  文件哈希
    * filePath  文件路径
    * fileAttr  文件属性
    * keyword  告警事件关键字，仅用于告警白名单
    * hash  告警事件hash，仅用于告警白名单
    * privateIp  服务器私有IP
    * loginIp  登录源IP
    * loginUserName  登录用户名
    * containerId  容器ID
    * containerName  容器名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentId' => null,
        'processPid' => 'int32',
        'fileHash' => null,
        'filePath' => null,
        'fileAttr' => null,
        'keyword' => null,
        'hash' => null,
        'privateIp' => null,
        'loginIp' => null,
        'loginUserName' => null,
        'containerId' => null,
        'containerName' => null
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
    * agentId  Agent ID
    * processPid  进程id
    * fileHash  文件哈希
    * filePath  文件路径
    * fileAttr  文件属性
    * keyword  告警事件关键字，仅用于告警白名单
    * hash  告警事件hash，仅用于告警白名单
    * privateIp  服务器私有IP
    * loginIp  登录源IP
    * loginUserName  登录用户名
    * containerId  容器ID
    * containerName  容器名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentId' => 'agent_id',
            'processPid' => 'process_pid',
            'fileHash' => 'file_hash',
            'filePath' => 'file_path',
            'fileAttr' => 'file_attr',
            'keyword' => 'keyword',
            'hash' => 'hash',
            'privateIp' => 'private_ip',
            'loginIp' => 'login_ip',
            'loginUserName' => 'login_user_name',
            'containerId' => 'container_id',
            'containerName' => 'container_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  Agent ID
    * processPid  进程id
    * fileHash  文件哈希
    * filePath  文件路径
    * fileAttr  文件属性
    * keyword  告警事件关键字，仅用于告警白名单
    * hash  告警事件hash，仅用于告警白名单
    * privateIp  服务器私有IP
    * loginIp  登录源IP
    * loginUserName  登录用户名
    * containerId  容器ID
    * containerName  容器名称
    *
    * @var string[]
    */
    protected static $setters = [
            'agentId' => 'setAgentId',
            'processPid' => 'setProcessPid',
            'fileHash' => 'setFileHash',
            'filePath' => 'setFilePath',
            'fileAttr' => 'setFileAttr',
            'keyword' => 'setKeyword',
            'hash' => 'setHash',
            'privateIp' => 'setPrivateIp',
            'loginIp' => 'setLoginIp',
            'loginUserName' => 'setLoginUserName',
            'containerId' => 'setContainerId',
            'containerName' => 'setContainerName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  Agent ID
    * processPid  进程id
    * fileHash  文件哈希
    * filePath  文件路径
    * fileAttr  文件属性
    * keyword  告警事件关键字，仅用于告警白名单
    * hash  告警事件hash，仅用于告警白名单
    * privateIp  服务器私有IP
    * loginIp  登录源IP
    * loginUserName  登录用户名
    * containerId  容器ID
    * containerName  容器名称
    *
    * @var string[]
    */
    protected static $getters = [
            'agentId' => 'getAgentId',
            'processPid' => 'getProcessPid',
            'fileHash' => 'getFileHash',
            'filePath' => 'getFilePath',
            'fileAttr' => 'getFileAttr',
            'keyword' => 'getKeyword',
            'hash' => 'getHash',
            'privateIp' => 'getPrivateIp',
            'loginIp' => 'getLoginIp',
            'loginUserName' => 'getLoginUserName',
            'containerId' => 'getContainerId',
            'containerName' => 'getContainerName'
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
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['loginIp'] = isset($data['loginIp']) ? $data['loginIp'] : null;
        $this->container['loginUserName'] = isset($data['loginUserName']) ? $data['loginUserName'] : null;
        $this->container['containerId'] = isset($data['containerId']) ? $data['containerId'] : null;
        $this->container['containerName'] = isset($data['containerName']) ? $data['containerName'] : null;
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
            if (!is_null($this->container['keyword']) && !preg_match("/^.*$/", $this->container['keyword'])) {
                $invalidProperties[] = "invalid value for 'keyword', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hash']) && !preg_match("/^.*$/", $this->container['hash'])) {
                $invalidProperties[] = "invalid value for 'hash', must be conform to the pattern /^.*$/.";
            }
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
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['containerId']) && (mb_strlen($this->container['containerId']) < 64)) {
                $invalidProperties[] = "invalid value for 'containerId', the character length must be bigger than or equal to 64.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) > 128)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['containerName']) && (mb_strlen($this->container['containerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'containerName', the character length must be bigger than or equal to 1.";
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
    *  Agent ID
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
    * @param string|null $agentId Agent ID
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
    *  进程id
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
    * @param int|null $processPid 进程id
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
    *  文件哈希
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
    * @param string|null $fileHash 文件哈希
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
    *  文件路径
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
    * @param string|null $filePath 文件路径
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
    *  文件属性
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
    * @param string|null $fileAttr 文件属性
    *
    * @return $this
    */
    public function setFileAttr($fileAttr)
    {
        $this->container['fileAttr'] = $fileAttr;
        return $this;
    }

    /**
    * Gets keyword
    *  告警事件关键字，仅用于告警白名单
    *
    * @return string|null
    */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
    * Sets keyword
    *
    * @param string|null $keyword 告警事件关键字，仅用于告警白名单
    *
    * @return $this
    */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;
        return $this;
    }

    /**
    * Gets hash
    *  告警事件hash，仅用于告警白名单
    *
    * @return string|null
    */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
    * Sets hash
    *
    * @param string|null $hash 告警事件hash，仅用于告警白名单
    *
    * @return $this
    */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;
        return $this;
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
    * Gets containerId
    *  容器ID
    *
    * @return string|null
    */
    public function getContainerId()
    {
        return $this->container['containerId'];
    }

    /**
    * Sets containerId
    *
    * @param string|null $containerId 容器ID
    *
    * @return $this
    */
    public function setContainerId($containerId)
    {
        $this->container['containerId'] = $containerId;
        return $this;
    }

    /**
    * Gets containerName
    *  容器名称
    *
    * @return string|null
    */
    public function getContainerName()
    {
        return $this->container['containerName'];
    }

    /**
    * Sets containerName
    *
    * @param string|null $containerName 容器名称
    *
    * @return $this
    */
    public function setContainerName($containerName)
    {
        $this->container['containerName'] = $containerName;
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

