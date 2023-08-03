<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListStorageTypesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListStorageTypesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  语言
    * databaseName  数据库引擎。支持的引擎如下，不区分大小写： MySQL PostgreSQL SQLServer
    * versionName  数据库版本号。
    * haMode  主备模式： single：单机模式。 ha：主备模式。 replica：只读模式。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'databaseName' => 'string',
            'versionName' => 'string',
            'haMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  语言
    * databaseName  数据库引擎。支持的引擎如下，不区分大小写： MySQL PostgreSQL SQLServer
    * versionName  数据库版本号。
    * haMode  主备模式： single：单机模式。 ha：主备模式。 replica：只读模式。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'databaseName' => null,
        'versionName' => null,
        'haMode' => null
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
    * xLanguage  语言
    * databaseName  数据库引擎。支持的引擎如下，不区分大小写： MySQL PostgreSQL SQLServer
    * versionName  数据库版本号。
    * haMode  主备模式： single：单机模式。 ha：主备模式。 replica：只读模式。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'databaseName' => 'database_name',
            'versionName' => 'version_name',
            'haMode' => 'ha_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  语言
    * databaseName  数据库引擎。支持的引擎如下，不区分大小写： MySQL PostgreSQL SQLServer
    * versionName  数据库版本号。
    * haMode  主备模式： single：单机模式。 ha：主备模式。 replica：只读模式。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'databaseName' => 'setDatabaseName',
            'versionName' => 'setVersionName',
            'haMode' => 'setHaMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  语言
    * databaseName  数据库引擎。支持的引擎如下，不区分大小写： MySQL PostgreSQL SQLServer
    * versionName  数据库版本号。
    * haMode  主备模式： single：单机模式。 ha：主备模式。 replica：只读模式。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'databaseName' => 'getDatabaseName',
            'versionName' => 'getVersionName',
            'haMode' => 'getHaMode'
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
    const DATABASE_NAME_MY_SQL = 'MySQL';
    const DATABASE_NAME_POSTGRE_SQL = 'PostgreSQL';
    const DATABASE_NAME_SQL_SERVER = 'SQLServer';
    const DATABASE_NAME_MARIA_DB = 'MariaDB';
    const HA_MODE_HA = 'ha';
    const HA_MODE_SINGLE = 'single';
    const HA_MODE_REPLICA = 'replica';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDatabaseNameAllowableValues()
    {
        return [
            self::DATABASE_NAME_MY_SQL,
            self::DATABASE_NAME_POSTGRE_SQL,
            self::DATABASE_NAME_SQL_SERVER,
            self::DATABASE_NAME_MARIA_DB,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHaModeAllowableValues()
    {
        return [
            self::HA_MODE_HA,
            self::HA_MODE_SINGLE,
            self::HA_MODE_REPLICA,
        ];
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['versionName'] = isset($data['versionName']) ? $data['versionName'] : null;
        $this->container['haMode'] = isset($data['haMode']) ? $data['haMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['databaseName'] === null) {
            $invalidProperties[] = "'databaseName' can't be null";
        }
            $allowedValues = $this->getDatabaseNameAllowableValues();
                if (!is_null($this->container['databaseName']) && !in_array($this->container['databaseName'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'databaseName', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['versionName'] === null) {
            $invalidProperties[] = "'versionName' can't be null";
        }
            $allowedValues = $this->getHaModeAllowableValues();
                if (!is_null($this->container['haMode']) && !in_array($this->container['haMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'haMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets xLanguage
    *  语言
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 语言
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets databaseName
    *  数据库引擎。支持的引擎如下，不区分大小写： MySQL PostgreSQL SQLServer
    *
    * @return string
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string $databaseName 数据库引擎。支持的引擎如下，不区分大小写： MySQL PostgreSQL SQLServer
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets versionName
    *  数据库版本号。
    *
    * @return string
    */
    public function getVersionName()
    {
        return $this->container['versionName'];
    }

    /**
    * Sets versionName
    *
    * @param string $versionName 数据库版本号。
    *
    * @return $this
    */
    public function setVersionName($versionName)
    {
        $this->container['versionName'] = $versionName;
        return $this;
    }

    /**
    * Gets haMode
    *  主备模式： single：单机模式。 ha：主备模式。 replica：只读模式。
    *
    * @return string|null
    */
    public function getHaMode()
    {
        return $this->container['haMode'];
    }

    /**
    * Sets haMode
    *
    * @param string|null $haMode 主备模式： single：单机模式。 ha：主备模式。 replica：只读模式。
    *
    * @return $this
    */
    public function setHaMode($haMode)
    {
        $this->container['haMode'] = $haMode;
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

