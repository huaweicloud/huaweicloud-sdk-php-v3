<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteDatabaseSchemaRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteDatabaseSchemaRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbName  数据库名称。 使用已存在的数据库名称，且不能为模板库。 模板库包括postgres， template0 ，template1，templatea，template_pdb，templatem。
    * schema  SCHEMA名称。 SCHEMA名称在1到63个字符之间，由字母、数字、或下划线组成，不能包含其他特殊字符，不能以“pg”和数字开头，且不能和模板库和已存在的SCHEMA重名。 模板库包括postgres， template0 ，template1，templatea，template_pdb，templatem。 已存在的SCHEMA包括public，information_schema。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbName' => 'string',
            'schema' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbName  数据库名称。 使用已存在的数据库名称，且不能为模板库。 模板库包括postgres， template0 ，template1，templatea，template_pdb，templatem。
    * schema  SCHEMA名称。 SCHEMA名称在1到63个字符之间，由字母、数字、或下划线组成，不能包含其他特殊字符，不能以“pg”和数字开头，且不能和模板库和已存在的SCHEMA重名。 模板库包括postgres， template0 ，template1，templatea，template_pdb，templatem。 已存在的SCHEMA包括public，information_schema。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbName' => null,
        'schema' => null
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
    * dbName  数据库名称。 使用已存在的数据库名称，且不能为模板库。 模板库包括postgres， template0 ，template1，templatea，template_pdb，templatem。
    * schema  SCHEMA名称。 SCHEMA名称在1到63个字符之间，由字母、数字、或下划线组成，不能包含其他特殊字符，不能以“pg”和数字开头，且不能和模板库和已存在的SCHEMA重名。 模板库包括postgres， template0 ，template1，templatea，template_pdb，templatem。 已存在的SCHEMA包括public，information_schema。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbName' => 'db_name',
            'schema' => 'schema'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbName  数据库名称。 使用已存在的数据库名称，且不能为模板库。 模板库包括postgres， template0 ，template1，templatea，template_pdb，templatem。
    * schema  SCHEMA名称。 SCHEMA名称在1到63个字符之间，由字母、数字、或下划线组成，不能包含其他特殊字符，不能以“pg”和数字开头，且不能和模板库和已存在的SCHEMA重名。 模板库包括postgres， template0 ，template1，templatea，template_pdb，templatem。 已存在的SCHEMA包括public，information_schema。
    *
    * @var string[]
    */
    protected static $setters = [
            'dbName' => 'setDbName',
            'schema' => 'setSchema'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbName  数据库名称。 使用已存在的数据库名称，且不能为模板库。 模板库包括postgres， template0 ，template1，templatea，template_pdb，templatem。
    * schema  SCHEMA名称。 SCHEMA名称在1到63个字符之间，由字母、数字、或下划线组成，不能包含其他特殊字符，不能以“pg”和数字开头，且不能和模板库和已存在的SCHEMA重名。 模板库包括postgres， template0 ，template1，templatea，template_pdb，templatem。 已存在的SCHEMA包括public，information_schema。
    *
    * @var string[]
    */
    protected static $getters = [
            'dbName' => 'getDbName',
            'schema' => 'getSchema'
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
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dbName'] === null) {
            $invalidProperties[] = "'dbName' can't be null";
        }
        if ($this->container['schema'] === null) {
            $invalidProperties[] = "'schema' can't be null";
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
    * Gets dbName
    *  数据库名称。 使用已存在的数据库名称，且不能为模板库。 模板库包括postgres， template0 ，template1，templatea，template_pdb，templatem。
    *
    * @return string
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string $dbName 数据库名称。 使用已存在的数据库名称，且不能为模板库。 模板库包括postgres， template0 ，template1，templatea，template_pdb，templatem。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets schema
    *  SCHEMA名称。 SCHEMA名称在1到63个字符之间，由字母、数字、或下划线组成，不能包含其他特殊字符，不能以“pg”和数字开头，且不能和模板库和已存在的SCHEMA重名。 模板库包括postgres， template0 ，template1，templatea，template_pdb，templatem。 已存在的SCHEMA包括public，information_schema。
    *
    * @return string
    */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
    * Sets schema
    *
    * @param string $schema SCHEMA名称。 SCHEMA名称在1到63个字符之间，由字母、数字、或下划线组成，不能包含其他特殊字符，不能以“pg”和数字开头，且不能和模板库和已存在的SCHEMA重名。 模板库包括postgres， template0 ，template1，templatea，template_pdb，templatem。 已存在的SCHEMA包括public，information_schema。
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
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
