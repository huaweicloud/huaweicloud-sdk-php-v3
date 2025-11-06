<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AggrPrometheusInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AggrPrometheusInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  被聚合的账号的projectid。
    * prometheusIds  被聚合的账号下的普罗ID列表。
    * id  被聚合的账号id。
    * name  被聚合的账号名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'prometheusIds' => 'string[]',
            'id' => 'string',
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  被聚合的账号的projectid。
    * prometheusIds  被聚合的账号下的普罗ID列表。
    * id  被聚合的账号id。
    * name  被聚合的账号名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'prometheusIds' => null,
        'id' => null,
        'name' => null
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
    * projectId  被聚合的账号的projectid。
    * prometheusIds  被聚合的账号下的普罗ID列表。
    * id  被聚合的账号id。
    * name  被聚合的账号名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'prometheusIds' => 'prometheusIds',
            'id' => 'id',
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  被聚合的账号的projectid。
    * prometheusIds  被聚合的账号下的普罗ID列表。
    * id  被聚合的账号id。
    * name  被聚合的账号名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'prometheusIds' => 'setPrometheusIds',
            'id' => 'setId',
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  被聚合的账号的projectid。
    * prometheusIds  被聚合的账号下的普罗ID列表。
    * id  被聚合的账号id。
    * name  被聚合的账号名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'prometheusIds' => 'getPrometheusIds',
            'id' => 'getId',
            'name' => 'getName'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['prometheusIds'] = isset($data['prometheusIds']) ? $data['prometheusIds'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['prometheusIds'] === null) {
            $invalidProperties[] = "'prometheusIds' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    * Gets projectId
    *  被聚合的账号的projectid。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 被聚合的账号的projectid。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets prometheusIds
    *  被聚合的账号下的普罗ID列表。
    *
    * @return string[]
    */
    public function getPrometheusIds()
    {
        return $this->container['prometheusIds'];
    }

    /**
    * Sets prometheusIds
    *
    * @param string[] $prometheusIds 被聚合的账号下的普罗ID列表。
    *
    * @return $this
    */
    public function setPrometheusIds($prometheusIds)
    {
        $this->container['prometheusIds'] = $prometheusIds;
        return $this;
    }

    /**
    * Gets id
    *  被聚合的账号id。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 被聚合的账号id。
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
    *  被聚合的账号名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 被聚合的账号名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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

