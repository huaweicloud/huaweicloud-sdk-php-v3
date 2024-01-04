<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFactoryTaskCompletionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFactoryTaskCompletionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  工作空间ID
    * type  查询任务的类型，默认为all，查询所有任务。 类型有：Dummy、CDM Job、MRS Hive SQL、MRS Spark SQL、MRS Impala SQL、DLI SQL、DLI Spark、Python、DWS SQL、Shell、MRS ClickHouse、MRS HetuEngine
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  工作空间ID
    * type  查询任务的类型，默认为all，查询所有任务。 类型有：Dummy、CDM Job、MRS Hive SQL、MRS Spark SQL、MRS Impala SQL、DLI SQL、DLI Spark、Python、DWS SQL、Shell、MRS ClickHouse、MRS HetuEngine
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'type' => null
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
    * workspace  工作空间ID
    * type  查询任务的类型，默认为all，查询所有任务。 类型有：Dummy、CDM Job、MRS Hive SQL、MRS Spark SQL、MRS Impala SQL、DLI SQL、DLI Spark、Python、DWS SQL、Shell、MRS ClickHouse、MRS HetuEngine
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  工作空间ID
    * type  查询任务的类型，默认为all，查询所有任务。 类型有：Dummy、CDM Job、MRS Hive SQL、MRS Spark SQL、MRS Impala SQL、DLI SQL、DLI Spark、Python、DWS SQL、Shell、MRS ClickHouse、MRS HetuEngine
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  工作空间ID
    * type  查询任务的类型，默认为all，查询所有任务。 类型有：Dummy、CDM Job、MRS Hive SQL、MRS Spark SQL、MRS Impala SQL、DLI SQL、DLI Spark、Python、DWS SQL、Shell、MRS ClickHouse、MRS HetuEngine
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'type' => 'getType'
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
    * Gets workspace
    *  工作空间ID
    *
    * @return string|null
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string|null $workspace 工作空间ID
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets type
    *  查询任务的类型，默认为all，查询所有任务。 类型有：Dummy、CDM Job、MRS Hive SQL、MRS Spark SQL、MRS Impala SQL、DLI SQL、DLI Spark、Python、DWS SQL、Shell、MRS ClickHouse、MRS HetuEngine
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 查询任务的类型，默认为all，查询所有任务。 类型有：Dummy、CDM Job、MRS Hive SQL、MRS Spark SQL、MRS Impala SQL、DLI SQL、DLI Spark、Python、DWS SQL、Shell、MRS ClickHouse、MRS HetuEngine
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

