<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReportAccountSessionNew implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReportAccountSessionNew';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbId  数据库ID
    * dbIp  数据库IP
    * dbName  数据库名称
    * dbUser  数据库用户
    * sessionNum  SESSION数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbId' => 'string',
            'dbIp' => 'string',
            'dbName' => 'string',
            'dbUser' => 'string',
            'sessionNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbId  数据库ID
    * dbIp  数据库IP
    * dbName  数据库名称
    * dbUser  数据库用户
    * sessionNum  SESSION数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbId' => null,
        'dbIp' => null,
        'dbName' => null,
        'dbUser' => null,
        'sessionNum' => 'int64'
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
    * dbId  数据库ID
    * dbIp  数据库IP
    * dbName  数据库名称
    * dbUser  数据库用户
    * sessionNum  SESSION数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbId' => 'db_id',
            'dbIp' => 'db_ip',
            'dbName' => 'db_name',
            'dbUser' => 'db_user',
            'sessionNum' => 'session_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbId  数据库ID
    * dbIp  数据库IP
    * dbName  数据库名称
    * dbUser  数据库用户
    * sessionNum  SESSION数量
    *
    * @var string[]
    */
    protected static $setters = [
            'dbId' => 'setDbId',
            'dbIp' => 'setDbIp',
            'dbName' => 'setDbName',
            'dbUser' => 'setDbUser',
            'sessionNum' => 'setSessionNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbId  数据库ID
    * dbIp  数据库IP
    * dbName  数据库名称
    * dbUser  数据库用户
    * sessionNum  SESSION数量
    *
    * @var string[]
    */
    protected static $getters = [
            'dbId' => 'getDbId',
            'dbIp' => 'getDbIp',
            'dbName' => 'getDbName',
            'dbUser' => 'getDbUser',
            'sessionNum' => 'getSessionNum'
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
        $this->container['dbId'] = isset($data['dbId']) ? $data['dbId'] : null;
        $this->container['dbIp'] = isset($data['dbIp']) ? $data['dbIp'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['dbUser'] = isset($data['dbUser']) ? $data['dbUser'] : null;
        $this->container['sessionNum'] = isset($data['sessionNum']) ? $data['sessionNum'] : null;
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
    * Gets dbId
    *  数据库ID
    *
    * @return string|null
    */
    public function getDbId()
    {
        return $this->container['dbId'];
    }

    /**
    * Sets dbId
    *
    * @param string|null $dbId 数据库ID
    *
    * @return $this
    */
    public function setDbId($dbId)
    {
        $this->container['dbId'] = $dbId;
        return $this;
    }

    /**
    * Gets dbIp
    *  数据库IP
    *
    * @return string|null
    */
    public function getDbIp()
    {
        return $this->container['dbIp'];
    }

    /**
    * Sets dbIp
    *
    * @param string|null $dbIp 数据库IP
    *
    * @return $this
    */
    public function setDbIp($dbIp)
    {
        $this->container['dbIp'] = $dbIp;
        return $this;
    }

    /**
    * Gets dbName
    *  数据库名称
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName 数据库名称
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets dbUser
    *  数据库用户
    *
    * @return string|null
    */
    public function getDbUser()
    {
        return $this->container['dbUser'];
    }

    /**
    * Sets dbUser
    *
    * @param string|null $dbUser 数据库用户
    *
    * @return $this
    */
    public function setDbUser($dbUser)
    {
        $this->container['dbUser'] = $dbUser;
        return $this;
    }

    /**
    * Gets sessionNum
    *  SESSION数量
    *
    * @return int|null
    */
    public function getSessionNum()
    {
        return $this->container['sessionNum'];
    }

    /**
    * Sets sessionNum
    *
    * @param int|null $sessionNum SESSION数量
    *
    * @return $this
    */
    public function setSessionNum($sessionNum)
    {
        $this->container['sessionNum'] = $sessionNum;
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

