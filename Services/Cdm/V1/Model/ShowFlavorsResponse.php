<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowFlavorsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowFlavorsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  服务ID，用于区分不同服务。
    * dbname  db名称，一般为cdm。
    * versions  版本信息列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'dbname' => 'string',
            'versions' => '\HuaweiCloud\SDK\Cdm\V1\Model\CdmClusterDatastoreVersion[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  服务ID，用于区分不同服务。
    * dbname  db名称，一般为cdm。
    * versions  版本信息列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'dbname' => null,
        'versions' => null
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
    * id  服务ID，用于区分不同服务。
    * dbname  db名称，一般为cdm。
    * versions  版本信息列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'dbname' => 'dbname',
            'versions' => 'versions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  服务ID，用于区分不同服务。
    * dbname  db名称，一般为cdm。
    * versions  版本信息列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'dbname' => 'setDbname',
            'versions' => 'setVersions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  服务ID，用于区分不同服务。
    * dbname  db名称，一般为cdm。
    * versions  版本信息列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'dbname' => 'getDbname',
            'versions' => 'getVersions'
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
        $this->container['dbname'] = isset($data['dbname']) ? $data['dbname'] : null;
        $this->container['versions'] = isset($data['versions']) ? $data['versions'] : null;
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
    *  服务ID，用于区分不同服务。
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
    * @param string|null $id 服务ID，用于区分不同服务。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets dbname
    *  db名称，一般为cdm。
    *
    * @return string|null
    */
    public function getDbname()
    {
        return $this->container['dbname'];
    }

    /**
    * Sets dbname
    *
    * @param string|null $dbname db名称，一般为cdm。
    *
    * @return $this
    */
    public function setDbname($dbname)
    {
        $this->container['dbname'] = $dbname;
        return $this;
    }

    /**
    * Gets versions
    *  版本信息列表。
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\CdmClusterDatastoreVersion[]|null
    */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
    * Sets versions
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\CdmClusterDatastoreVersion[]|null $versions 版本信息列表。
    *
    * @return $this
    */
    public function setVersions($versions)
    {
        $this->container['versions'] = $versions;
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

