<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CompareTableInfoWithToken implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CompareTableInfoWithToken';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tableName  表名。
    * minToken  该表的min token。
    * maxToken  该表的max token。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tableName' => 'string',
            'minToken' => 'string',
            'maxToken' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tableName  表名。
    * minToken  该表的min token。
    * maxToken  该表的max token。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tableName' => null,
        'minToken' => null,
        'maxToken' => null
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
    * tableName  表名。
    * minToken  该表的min token。
    * maxToken  该表的max token。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tableName' => 'table_name',
            'minToken' => 'min_token',
            'maxToken' => 'max_token'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tableName  表名。
    * minToken  该表的min token。
    * maxToken  该表的max token。
    *
    * @var string[]
    */
    protected static $setters = [
            'tableName' => 'setTableName',
            'minToken' => 'setMinToken',
            'maxToken' => 'setMaxToken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tableName  表名。
    * minToken  该表的min token。
    * maxToken  该表的max token。
    *
    * @var string[]
    */
    protected static $getters = [
            'tableName' => 'getTableName',
            'minToken' => 'getMinToken',
            'maxToken' => 'getMaxToken'
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
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['minToken'] = isset($data['minToken']) ? $data['minToken'] : null;
        $this->container['maxToken'] = isset($data['maxToken']) ? $data['maxToken'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tableName'] === null) {
            $invalidProperties[] = "'tableName' can't be null";
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
    * Gets tableName
    *  表名。
    *
    * @return string
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string $tableName 表名。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets minToken
    *  该表的min token。
    *
    * @return string|null
    */
    public function getMinToken()
    {
        return $this->container['minToken'];
    }

    /**
    * Sets minToken
    *
    * @param string|null $minToken 该表的min token。
    *
    * @return $this
    */
    public function setMinToken($minToken)
    {
        $this->container['minToken'] = $minToken;
        return $this;
    }

    /**
    * Gets maxToken
    *  该表的max token。
    *
    * @return string|null
    */
    public function getMaxToken()
    {
        return $this->container['maxToken'];
    }

    /**
    * Sets maxToken
    *
    * @param string|null $maxToken 该表的max token。
    *
    * @return $this
    */
    public function setMaxToken($maxToken)
    {
        $this->container['maxToken'] = $maxToken;
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

