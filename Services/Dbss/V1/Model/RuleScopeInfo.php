<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleScopeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleScopeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  审计范围规则ID
    * name  审计范围名称
    * action  审计范围动作
    * status  审计范围规则状态
    * exceptionIps  审计范围例外IP
    * sourceIps  审计范围规则源IP
    * sourcePorts  审计范围源端口
    * dbIds  数据库ID
    * dbNames  数据库名称
    * dbUsers  数据库用户
    * allAudit  是否全审计
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'action' => 'string',
            'status' => 'string',
            'exceptionIps' => 'string',
            'sourceIps' => 'string',
            'sourcePorts' => 'string',
            'dbIds' => 'string',
            'dbNames' => 'string',
            'dbUsers' => 'string',
            'allAudit' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  审计范围规则ID
    * name  审计范围名称
    * action  审计范围动作
    * status  审计范围规则状态
    * exceptionIps  审计范围例外IP
    * sourceIps  审计范围规则源IP
    * sourcePorts  审计范围源端口
    * dbIds  数据库ID
    * dbNames  数据库名称
    * dbUsers  数据库用户
    * allAudit  是否全审计
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'action' => null,
        'status' => null,
        'exceptionIps' => null,
        'sourceIps' => null,
        'sourcePorts' => null,
        'dbIds' => null,
        'dbNames' => null,
        'dbUsers' => null,
        'allAudit' => null
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
    * id  审计范围规则ID
    * name  审计范围名称
    * action  审计范围动作
    * status  审计范围规则状态
    * exceptionIps  审计范围例外IP
    * sourceIps  审计范围规则源IP
    * sourcePorts  审计范围源端口
    * dbIds  数据库ID
    * dbNames  数据库名称
    * dbUsers  数据库用户
    * allAudit  是否全审计
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'action' => 'action',
            'status' => 'status',
            'exceptionIps' => 'exception_ips',
            'sourceIps' => 'source_ips',
            'sourcePorts' => 'source_ports',
            'dbIds' => 'db_ids',
            'dbNames' => 'db_names',
            'dbUsers' => 'db_users',
            'allAudit' => 'all_audit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  审计范围规则ID
    * name  审计范围名称
    * action  审计范围动作
    * status  审计范围规则状态
    * exceptionIps  审计范围例外IP
    * sourceIps  审计范围规则源IP
    * sourcePorts  审计范围源端口
    * dbIds  数据库ID
    * dbNames  数据库名称
    * dbUsers  数据库用户
    * allAudit  是否全审计
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'action' => 'setAction',
            'status' => 'setStatus',
            'exceptionIps' => 'setExceptionIps',
            'sourceIps' => 'setSourceIps',
            'sourcePorts' => 'setSourcePorts',
            'dbIds' => 'setDbIds',
            'dbNames' => 'setDbNames',
            'dbUsers' => 'setDbUsers',
            'allAudit' => 'setAllAudit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  审计范围规则ID
    * name  审计范围名称
    * action  审计范围动作
    * status  审计范围规则状态
    * exceptionIps  审计范围例外IP
    * sourceIps  审计范围规则源IP
    * sourcePorts  审计范围源端口
    * dbIds  数据库ID
    * dbNames  数据库名称
    * dbUsers  数据库用户
    * allAudit  是否全审计
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'action' => 'getAction',
            'status' => 'getStatus',
            'exceptionIps' => 'getExceptionIps',
            'sourceIps' => 'getSourceIps',
            'sourcePorts' => 'getSourcePorts',
            'dbIds' => 'getDbIds',
            'dbNames' => 'getDbNames',
            'dbUsers' => 'getDbUsers',
            'allAudit' => 'getAllAudit'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['exceptionIps'] = isset($data['exceptionIps']) ? $data['exceptionIps'] : null;
        $this->container['sourceIps'] = isset($data['sourceIps']) ? $data['sourceIps'] : null;
        $this->container['sourcePorts'] = isset($data['sourcePorts']) ? $data['sourcePorts'] : null;
        $this->container['dbIds'] = isset($data['dbIds']) ? $data['dbIds'] : null;
        $this->container['dbNames'] = isset($data['dbNames']) ? $data['dbNames'] : null;
        $this->container['dbUsers'] = isset($data['dbUsers']) ? $data['dbUsers'] : null;
        $this->container['allAudit'] = isset($data['allAudit']) ? $data['allAudit'] : null;
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
    * Gets id
    *  审计范围规则ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 审计范围规则ID
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
    *  审计范围名称
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
    * @param string|null $name 审计范围名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets action
    *  审计范围动作
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 审计范围动作
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets status
    *  审计范围规则状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 审计范围规则状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets exceptionIps
    *  审计范围例外IP
    *
    * @return string|null
    */
    public function getExceptionIps()
    {
        return $this->container['exceptionIps'];
    }

    /**
    * Sets exceptionIps
    *
    * @param string|null $exceptionIps 审计范围例外IP
    *
    * @return $this
    */
    public function setExceptionIps($exceptionIps)
    {
        $this->container['exceptionIps'] = $exceptionIps;
        return $this;
    }

    /**
    * Gets sourceIps
    *  审计范围规则源IP
    *
    * @return string|null
    */
    public function getSourceIps()
    {
        return $this->container['sourceIps'];
    }

    /**
    * Sets sourceIps
    *
    * @param string|null $sourceIps 审计范围规则源IP
    *
    * @return $this
    */
    public function setSourceIps($sourceIps)
    {
        $this->container['sourceIps'] = $sourceIps;
        return $this;
    }

    /**
    * Gets sourcePorts
    *  审计范围源端口
    *
    * @return string|null
    */
    public function getSourcePorts()
    {
        return $this->container['sourcePorts'];
    }

    /**
    * Sets sourcePorts
    *
    * @param string|null $sourcePorts 审计范围源端口
    *
    * @return $this
    */
    public function setSourcePorts($sourcePorts)
    {
        $this->container['sourcePorts'] = $sourcePorts;
        return $this;
    }

    /**
    * Gets dbIds
    *  数据库ID
    *
    * @return string|null
    */
    public function getDbIds()
    {
        return $this->container['dbIds'];
    }

    /**
    * Sets dbIds
    *
    * @param string|null $dbIds 数据库ID
    *
    * @return $this
    */
    public function setDbIds($dbIds)
    {
        $this->container['dbIds'] = $dbIds;
        return $this;
    }

    /**
    * Gets dbNames
    *  数据库名称
    *
    * @return string|null
    */
    public function getDbNames()
    {
        return $this->container['dbNames'];
    }

    /**
    * Sets dbNames
    *
    * @param string|null $dbNames 数据库名称
    *
    * @return $this
    */
    public function setDbNames($dbNames)
    {
        $this->container['dbNames'] = $dbNames;
        return $this;
    }

    /**
    * Gets dbUsers
    *  数据库用户
    *
    * @return string|null
    */
    public function getDbUsers()
    {
        return $this->container['dbUsers'];
    }

    /**
    * Sets dbUsers
    *
    * @param string|null $dbUsers 数据库用户
    *
    * @return $this
    */
    public function setDbUsers($dbUsers)
    {
        $this->container['dbUsers'] = $dbUsers;
        return $this;
    }

    /**
    * Gets allAudit
    *  是否全审计
    *
    * @return bool|null
    */
    public function getAllAudit()
    {
        return $this->container['allAudit'];
    }

    /**
    * Sets allAudit
    *
    * @param bool|null $allAudit 是否全审计
    *
    * @return $this
    */
    public function setAllAudit($allAudit)
    {
        $this->container['allAudit'] = $allAudit;
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

