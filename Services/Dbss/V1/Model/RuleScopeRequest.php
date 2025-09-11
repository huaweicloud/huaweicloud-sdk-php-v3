<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleScopeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleScopeRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  操作类型，多个用英文,分隔
    * dbIds  数据库ID，多个用英文逗号分隔，全部传[ALL]
    * dbNames  数据库名称，多个用英文逗号分隔，全部传[全部数据库]
    * dbUsers  数据库账号，多个用英文逗号分隔
    * exceptionIps  例外IP，多个用英文逗号分隔
    * ruleName  名称
    * sourceIps  源IP，多个用英文逗号分隔
    * sourcePorts  源端口，多个用英文逗号分隔
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'dbIds' => 'string',
            'dbNames' => 'string',
            'dbUsers' => 'string',
            'exceptionIps' => 'string',
            'ruleName' => 'string',
            'sourceIps' => 'string',
            'sourcePorts' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  操作类型，多个用英文,分隔
    * dbIds  数据库ID，多个用英文逗号分隔，全部传[ALL]
    * dbNames  数据库名称，多个用英文逗号分隔，全部传[全部数据库]
    * dbUsers  数据库账号，多个用英文逗号分隔
    * exceptionIps  例外IP，多个用英文逗号分隔
    * ruleName  名称
    * sourceIps  源IP，多个用英文逗号分隔
    * sourcePorts  源端口，多个用英文逗号分隔
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'dbIds' => null,
        'dbNames' => null,
        'dbUsers' => null,
        'exceptionIps' => null,
        'ruleName' => null,
        'sourceIps' => null,
        'sourcePorts' => null
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
    * action  操作类型，多个用英文,分隔
    * dbIds  数据库ID，多个用英文逗号分隔，全部传[ALL]
    * dbNames  数据库名称，多个用英文逗号分隔，全部传[全部数据库]
    * dbUsers  数据库账号，多个用英文逗号分隔
    * exceptionIps  例外IP，多个用英文逗号分隔
    * ruleName  名称
    * sourceIps  源IP，多个用英文逗号分隔
    * sourcePorts  源端口，多个用英文逗号分隔
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'dbIds' => 'db_ids',
            'dbNames' => 'db_names',
            'dbUsers' => 'db_users',
            'exceptionIps' => 'exception_ips',
            'ruleName' => 'rule_name',
            'sourceIps' => 'source_ips',
            'sourcePorts' => 'source_ports'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  操作类型，多个用英文,分隔
    * dbIds  数据库ID，多个用英文逗号分隔，全部传[ALL]
    * dbNames  数据库名称，多个用英文逗号分隔，全部传[全部数据库]
    * dbUsers  数据库账号，多个用英文逗号分隔
    * exceptionIps  例外IP，多个用英文逗号分隔
    * ruleName  名称
    * sourceIps  源IP，多个用英文逗号分隔
    * sourcePorts  源端口，多个用英文逗号分隔
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'dbIds' => 'setDbIds',
            'dbNames' => 'setDbNames',
            'dbUsers' => 'setDbUsers',
            'exceptionIps' => 'setExceptionIps',
            'ruleName' => 'setRuleName',
            'sourceIps' => 'setSourceIps',
            'sourcePorts' => 'setSourcePorts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  操作类型，多个用英文,分隔
    * dbIds  数据库ID，多个用英文逗号分隔，全部传[ALL]
    * dbNames  数据库名称，多个用英文逗号分隔，全部传[全部数据库]
    * dbUsers  数据库账号，多个用英文逗号分隔
    * exceptionIps  例外IP，多个用英文逗号分隔
    * ruleName  名称
    * sourceIps  源IP，多个用英文逗号分隔
    * sourcePorts  源端口，多个用英文逗号分隔
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'dbIds' => 'getDbIds',
            'dbNames' => 'getDbNames',
            'dbUsers' => 'getDbUsers',
            'exceptionIps' => 'getExceptionIps',
            'ruleName' => 'getRuleName',
            'sourceIps' => 'getSourceIps',
            'sourcePorts' => 'getSourcePorts'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['dbIds'] = isset($data['dbIds']) ? $data['dbIds'] : null;
        $this->container['dbNames'] = isset($data['dbNames']) ? $data['dbNames'] : null;
        $this->container['dbUsers'] = isset($data['dbUsers']) ? $data['dbUsers'] : null;
        $this->container['exceptionIps'] = isset($data['exceptionIps']) ? $data['exceptionIps'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['sourceIps'] = isset($data['sourceIps']) ? $data['sourceIps'] : null;
        $this->container['sourcePorts'] = isset($data['sourcePorts']) ? $data['sourcePorts'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dbIds'] === null) {
            $invalidProperties[] = "'dbIds' can't be null";
        }
        if ($this->container['dbNames'] === null) {
            $invalidProperties[] = "'dbNames' can't be null";
        }
        if ($this->container['ruleName'] === null) {
            $invalidProperties[] = "'ruleName' can't be null";
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
    * Gets action
    *  操作类型，多个用英文,分隔
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
    * @param string|null $action 操作类型，多个用英文,分隔
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets dbIds
    *  数据库ID，多个用英文逗号分隔，全部传[ALL]
    *
    * @return string
    */
    public function getDbIds()
    {
        return $this->container['dbIds'];
    }

    /**
    * Sets dbIds
    *
    * @param string $dbIds 数据库ID，多个用英文逗号分隔，全部传[ALL]
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
    *  数据库名称，多个用英文逗号分隔，全部传[全部数据库]
    *
    * @return string
    */
    public function getDbNames()
    {
        return $this->container['dbNames'];
    }

    /**
    * Sets dbNames
    *
    * @param string $dbNames 数据库名称，多个用英文逗号分隔，全部传[全部数据库]
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
    *  数据库账号，多个用英文逗号分隔
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
    * @param string|null $dbUsers 数据库账号，多个用英文逗号分隔
    *
    * @return $this
    */
    public function setDbUsers($dbUsers)
    {
        $this->container['dbUsers'] = $dbUsers;
        return $this;
    }

    /**
    * Gets exceptionIps
    *  例外IP，多个用英文逗号分隔
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
    * @param string|null $exceptionIps 例外IP，多个用英文逗号分隔
    *
    * @return $this
    */
    public function setExceptionIps($exceptionIps)
    {
        $this->container['exceptionIps'] = $exceptionIps;
        return $this;
    }

    /**
    * Gets ruleName
    *  名称
    *
    * @return string
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string $ruleName 名称
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets sourceIps
    *  源IP，多个用英文逗号分隔
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
    * @param string|null $sourceIps 源IP，多个用英文逗号分隔
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
    *  源端口，多个用英文逗号分隔
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
    * @param string|null $sourcePorts 源端口，多个用英文逗号分隔
    *
    * @return $this
    */
    public function setSourcePorts($sourcePorts)
    {
        $this->container['sourcePorts'] = $sourcePorts;
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

