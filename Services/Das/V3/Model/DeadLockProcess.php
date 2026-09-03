<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeadLockProcess implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeadLockProcess';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * spid  服务进程ID
    * processId  会话ID
    * hostName  主机名称
    * loginName  用户名称
    * logUsed  任务使用的日志空间
    * sql  SQL语句
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'spid' => 'string',
            'processId' => 'string',
            'hostName' => 'string',
            'loginName' => 'string',
            'logUsed' => 'int',
            'sql' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * spid  服务进程ID
    * processId  会话ID
    * hostName  主机名称
    * loginName  用户名称
    * logUsed  任务使用的日志空间
    * sql  SQL语句
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'spid' => null,
        'processId' => null,
        'hostName' => null,
        'loginName' => null,
        'logUsed' => 'int64',
        'sql' => null
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
    * spid  服务进程ID
    * processId  会话ID
    * hostName  主机名称
    * loginName  用户名称
    * logUsed  任务使用的日志空间
    * sql  SQL语句
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'spid' => 'spid',
            'processId' => 'process_id',
            'hostName' => 'host_name',
            'loginName' => 'login_name',
            'logUsed' => 'log_used',
            'sql' => 'sql'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * spid  服务进程ID
    * processId  会话ID
    * hostName  主机名称
    * loginName  用户名称
    * logUsed  任务使用的日志空间
    * sql  SQL语句
    *
    * @var string[]
    */
    protected static $setters = [
            'spid' => 'setSpid',
            'processId' => 'setProcessId',
            'hostName' => 'setHostName',
            'loginName' => 'setLoginName',
            'logUsed' => 'setLogUsed',
            'sql' => 'setSql'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * spid  服务进程ID
    * processId  会话ID
    * hostName  主机名称
    * loginName  用户名称
    * logUsed  任务使用的日志空间
    * sql  SQL语句
    *
    * @var string[]
    */
    protected static $getters = [
            'spid' => 'getSpid',
            'processId' => 'getProcessId',
            'hostName' => 'getHostName',
            'loginName' => 'getLoginName',
            'logUsed' => 'getLogUsed',
            'sql' => 'getSql'
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
        $this->container['spid'] = isset($data['spid']) ? $data['spid'] : null;
        $this->container['processId'] = isset($data['processId']) ? $data['processId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['loginName'] = isset($data['loginName']) ? $data['loginName'] : null;
        $this->container['logUsed'] = isset($data['logUsed']) ? $data['logUsed'] : null;
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
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
    * Gets spid
    *  服务进程ID
    *
    * @return string|null
    */
    public function getSpid()
    {
        return $this->container['spid'];
    }

    /**
    * Sets spid
    *
    * @param string|null $spid 服务进程ID
    *
    * @return $this
    */
    public function setSpid($spid)
    {
        $this->container['spid'] = $spid;
        return $this;
    }

    /**
    * Gets processId
    *  会话ID
    *
    * @return string|null
    */
    public function getProcessId()
    {
        return $this->container['processId'];
    }

    /**
    * Sets processId
    *
    * @param string|null $processId 会话ID
    *
    * @return $this
    */
    public function setProcessId($processId)
    {
        $this->container['processId'] = $processId;
        return $this;
    }

    /**
    * Gets hostName
    *  主机名称
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName 主机名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets loginName
    *  用户名称
    *
    * @return string|null
    */
    public function getLoginName()
    {
        return $this->container['loginName'];
    }

    /**
    * Sets loginName
    *
    * @param string|null $loginName 用户名称
    *
    * @return $this
    */
    public function setLoginName($loginName)
    {
        $this->container['loginName'] = $loginName;
        return $this;
    }

    /**
    * Gets logUsed
    *  任务使用的日志空间
    *
    * @return int|null
    */
    public function getLogUsed()
    {
        return $this->container['logUsed'];
    }

    /**
    * Sets logUsed
    *
    * @param int|null $logUsed 任务使用的日志空间
    *
    * @return $this
    */
    public function setLogUsed($logUsed)
    {
        $this->container['logUsed'] = $logUsed;
        return $this;
    }

    /**
    * Gets sql
    *  SQL语句
    *
    * @return string|null
    */
    public function getSql()
    {
        return $this->container['sql'];
    }

    /**
    * Sets sql
    *
    * @param string|null $sql SQL语句
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
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

