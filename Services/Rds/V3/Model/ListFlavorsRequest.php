<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFlavorsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFlavorsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  语言
    * databaseName  数据库引擎。支持的引擎如下，不区分大小写： MySQL PostgreSQL SQLServer
    * versionName  数据库版本号，获取方法请参见5.1查询数据库引擎的版本。（可输入小版本号）
    * specCode  规格编码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'databaseName' => 'string',
            'versionName' => 'string',
            'specCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  语言
    * databaseName  数据库引擎。支持的引擎如下，不区分大小写： MySQL PostgreSQL SQLServer
    * versionName  数据库版本号，获取方法请参见5.1查询数据库引擎的版本。（可输入小版本号）
    * specCode  规格编码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'databaseName' => null,
        'versionName' => null,
        'specCode' => null
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
    * versionName  数据库版本号，获取方法请参见5.1查询数据库引擎的版本。（可输入小版本号）
    * specCode  规格编码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'databaseName' => 'database_name',
            'versionName' => 'version_name',
            'specCode' => 'spec_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  语言
    * databaseName  数据库引擎。支持的引擎如下，不区分大小写： MySQL PostgreSQL SQLServer
    * versionName  数据库版本号，获取方法请参见5.1查询数据库引擎的版本。（可输入小版本号）
    * specCode  规格编码
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'databaseName' => 'setDatabaseName',
            'versionName' => 'setVersionName',
            'specCode' => 'setSpecCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  语言
    * databaseName  数据库引擎。支持的引擎如下，不区分大小写： MySQL PostgreSQL SQLServer
    * versionName  数据库版本号，获取方法请参见5.1查询数据库引擎的版本。（可输入小版本号）
    * specCode  规格编码
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'databaseName' => 'getDatabaseName',
            'versionName' => 'getVersionName',
            'specCode' => 'getSpecCode'
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
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
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
    *  数据库版本号，获取方法请参见5.1查询数据库引擎的版本。（可输入小版本号）
    *
    * @return string|null
    */
    public function getVersionName()
    {
        return $this->container['versionName'];
    }

    /**
    * Sets versionName
    *
    * @param string|null $versionName 数据库版本号，获取方法请参见5.1查询数据库引擎的版本。（可输入小版本号）
    *
    * @return $this
    */
    public function setVersionName($versionName)
    {
        $this->container['versionName'] = $versionName;
        return $this;
    }

    /**
    * Gets specCode
    *  规格编码
    *
    * @return string|null
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string|null $specCode 规格编码
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
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

