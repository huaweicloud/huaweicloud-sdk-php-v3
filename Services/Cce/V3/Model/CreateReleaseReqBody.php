<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateReleaseReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateReleaseReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chartId  模板ID
    * description  模板实例描述
    * name  模板实例名称
    * namespace  模板实例所在的命名空间
    * version  模板实例版本号
    * parameters  parameters
    * values  values
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chartId' => 'string',
            'description' => 'string',
            'name' => 'string',
            'namespace' => 'string',
            'version' => 'string',
            'parameters' => '\HuaweiCloud\SDK\Cce\V3\Model\ReleaseReqBodyParams',
            'values' => '\HuaweiCloud\SDK\Cce\V3\Model\CreateReleaseReqBodyValues'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chartId  模板ID
    * description  模板实例描述
    * name  模板实例名称
    * namespace  模板实例所在的命名空间
    * version  模板实例版本号
    * parameters  parameters
    * values  values
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chartId' => null,
        'description' => null,
        'name' => null,
        'namespace' => null,
        'version' => null,
        'parameters' => null,
        'values' => null
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
    * chartId  模板ID
    * description  模板实例描述
    * name  模板实例名称
    * namespace  模板实例所在的命名空间
    * version  模板实例版本号
    * parameters  parameters
    * values  values
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chartId' => 'chart_id',
            'description' => 'description',
            'name' => 'name',
            'namespace' => 'namespace',
            'version' => 'version',
            'parameters' => 'parameters',
            'values' => 'values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chartId  模板ID
    * description  模板实例描述
    * name  模板实例名称
    * namespace  模板实例所在的命名空间
    * version  模板实例版本号
    * parameters  parameters
    * values  values
    *
    * @var string[]
    */
    protected static $setters = [
            'chartId' => 'setChartId',
            'description' => 'setDescription',
            'name' => 'setName',
            'namespace' => 'setNamespace',
            'version' => 'setVersion',
            'parameters' => 'setParameters',
            'values' => 'setValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chartId  模板ID
    * description  模板实例描述
    * name  模板实例名称
    * namespace  模板实例所在的命名空间
    * version  模板实例版本号
    * parameters  parameters
    * values  values
    *
    * @var string[]
    */
    protected static $getters = [
            'chartId' => 'getChartId',
            'description' => 'getDescription',
            'name' => 'getName',
            'namespace' => 'getNamespace',
            'version' => 'getVersion',
            'parameters' => 'getParameters',
            'values' => 'getValues'
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
        $this->container['chartId'] = isset($data['chartId']) ? $data['chartId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['chartId'] === null) {
            $invalidProperties[] = "'chartId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['namespace'] === null) {
            $invalidProperties[] = "'namespace' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['values'] === null) {
            $invalidProperties[] = "'values' can't be null";
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
    * Gets chartId
    *  模板ID
    *
    * @return string
    */
    public function getChartId()
    {
        return $this->container['chartId'];
    }

    /**
    * Sets chartId
    *
    * @param string $chartId 模板ID
    *
    * @return $this
    */
    public function setChartId($chartId)
    {
        $this->container['chartId'] = $chartId;
        return $this;
    }

    /**
    * Gets description
    *  模板实例描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 模板实例描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets name
    *  模板实例名称
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
    * @param string $name 模板实例名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets namespace
    *  模板实例所在的命名空间
    *
    * @return string
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string $namespace 模板实例所在的命名空间
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets version
    *  模板实例版本号
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version 模板实例版本号
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets parameters
    *  parameters
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ReleaseReqBodyParams|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ReleaseReqBodyParams|null $parameters parameters
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets values
    *  values
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\CreateReleaseReqBodyValues
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\CreateReleaseReqBodyValues $values values
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
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

