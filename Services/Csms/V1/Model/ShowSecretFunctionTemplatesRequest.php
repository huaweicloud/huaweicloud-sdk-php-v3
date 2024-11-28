<?php

namespace HuaweiCloud\SDK\Csms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSecretFunctionTemplatesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSecretFunctionTemplatesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * secretType  凭据类型。
    * secretSubType  凭据轮转账号类型。 - SingleUser：单用户模式轮转 - MultiUser：双用户模式轮转
    * engine  数据库类型。凭据类型为RDS-FG时为必填参数，可传入mysql、postgresql、sqlserver。其余凭据类型不支持。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'secretType' => 'string',
            'secretSubType' => 'string',
            'engine' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * secretType  凭据类型。
    * secretSubType  凭据轮转账号类型。 - SingleUser：单用户模式轮转 - MultiUser：双用户模式轮转
    * engine  数据库类型。凭据类型为RDS-FG时为必填参数，可传入mysql、postgresql、sqlserver。其余凭据类型不支持。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'secretType' => null,
        'secretSubType' => null,
        'engine' => null
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
    * secretType  凭据类型。
    * secretSubType  凭据轮转账号类型。 - SingleUser：单用户模式轮转 - MultiUser：双用户模式轮转
    * engine  数据库类型。凭据类型为RDS-FG时为必填参数，可传入mysql、postgresql、sqlserver。其余凭据类型不支持。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'secretType' => 'secret_type',
            'secretSubType' => 'secret_sub_type',
            'engine' => 'engine'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * secretType  凭据类型。
    * secretSubType  凭据轮转账号类型。 - SingleUser：单用户模式轮转 - MultiUser：双用户模式轮转
    * engine  数据库类型。凭据类型为RDS-FG时为必填参数，可传入mysql、postgresql、sqlserver。其余凭据类型不支持。
    *
    * @var string[]
    */
    protected static $setters = [
            'secretType' => 'setSecretType',
            'secretSubType' => 'setSecretSubType',
            'engine' => 'setEngine'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * secretType  凭据类型。
    * secretSubType  凭据轮转账号类型。 - SingleUser：单用户模式轮转 - MultiUser：双用户模式轮转
    * engine  数据库类型。凭据类型为RDS-FG时为必填参数，可传入mysql、postgresql、sqlserver。其余凭据类型不支持。
    *
    * @var string[]
    */
    protected static $getters = [
            'secretType' => 'getSecretType',
            'secretSubType' => 'getSecretSubType',
            'engine' => 'getEngine'
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
    const SECRET_TYPE_RDS_FG = 'RDS-FG';
    const SECRET_TYPE_GAUSS_DB_FG = 'GaussDB-FG';
    const SECRET_SUB_TYPE_SINGLE_USER = 'SingleUser';
    const SECRET_SUB_TYPE_MULTI_USER = 'MultiUser';
    const ENGINE_MYSQL = 'mysql';
    const ENGINE_POSTGRESQL = 'postgresql';
    const ENGINE_SQLSERVER = 'sqlserver';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSecretTypeAllowableValues()
    {
        return [
            self::SECRET_TYPE_RDS_FG,
            self::SECRET_TYPE_GAUSS_DB_FG,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSecretSubTypeAllowableValues()
    {
        return [
            self::SECRET_SUB_TYPE_SINGLE_USER,
            self::SECRET_SUB_TYPE_MULTI_USER,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEngineAllowableValues()
    {
        return [
            self::ENGINE_MYSQL,
            self::ENGINE_POSTGRESQL,
            self::ENGINE_SQLSERVER,
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
        $this->container['secretType'] = isset($data['secretType']) ? $data['secretType'] : null;
        $this->container['secretSubType'] = isset($data['secretSubType']) ? $data['secretSubType'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['secretType'] === null) {
            $invalidProperties[] = "'secretType' can't be null";
        }
            $allowedValues = $this->getSecretTypeAllowableValues();
                if (!is_null($this->container['secretType']) && !in_array($this->container['secretType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'secretType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['secretSubType'] === null) {
            $invalidProperties[] = "'secretSubType' can't be null";
        }
            $allowedValues = $this->getSecretSubTypeAllowableValues();
                if (!is_null($this->container['secretSubType']) && !in_array($this->container['secretSubType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'secretSubType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getEngineAllowableValues();
                if (!is_null($this->container['engine']) && !in_array($this->container['engine'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engine', must be one of '%s'",
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
    * Gets secretType
    *  凭据类型。
    *
    * @return string
    */
    public function getSecretType()
    {
        return $this->container['secretType'];
    }

    /**
    * Sets secretType
    *
    * @param string $secretType 凭据类型。
    *
    * @return $this
    */
    public function setSecretType($secretType)
    {
        $this->container['secretType'] = $secretType;
        return $this;
    }

    /**
    * Gets secretSubType
    *  凭据轮转账号类型。 - SingleUser：单用户模式轮转 - MultiUser：双用户模式轮转
    *
    * @return string
    */
    public function getSecretSubType()
    {
        return $this->container['secretSubType'];
    }

    /**
    * Sets secretSubType
    *
    * @param string $secretSubType 凭据轮转账号类型。 - SingleUser：单用户模式轮转 - MultiUser：双用户模式轮转
    *
    * @return $this
    */
    public function setSecretSubType($secretSubType)
    {
        $this->container['secretSubType'] = $secretSubType;
        return $this;
    }

    /**
    * Gets engine
    *  数据库类型。凭据类型为RDS-FG时为必填参数，可传入mysql、postgresql、sqlserver。其余凭据类型不支持。
    *
    * @return string|null
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param string|null $engine 数据库类型。凭据类型为RDS-FG时为必填参数，可传入mysql、postgresql、sqlserver。其余凭据类型不支持。
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
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

