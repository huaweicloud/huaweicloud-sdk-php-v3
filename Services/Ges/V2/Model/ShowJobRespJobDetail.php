<?php

namespace HuaweiCloud\SDK\Ges\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowJobRespJobDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowJobResp_job_detail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * schemaPath  元数据路径。
    * edgesetPath  边数据集路径。
    * vertexsetPath  点数据集路径。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'schemaPath' => '\HuaweiCloud\SDK\Ges\V2\Model\ShowJobRespJobDetailSchemaPath[]',
            'edgesetPath' => '\HuaweiCloud\SDK\Ges\V2\Model\ShowJobRespJobDetailSchemaPath[]',
            'vertexsetPath' => '\HuaweiCloud\SDK\Ges\V2\Model\ShowJobRespJobDetailSchemaPath[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * schemaPath  元数据路径。
    * edgesetPath  边数据集路径。
    * vertexsetPath  点数据集路径。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'schemaPath' => null,
        'edgesetPath' => null,
        'vertexsetPath' => null
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
    * schemaPath  元数据路径。
    * edgesetPath  边数据集路径。
    * vertexsetPath  点数据集路径。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'schemaPath' => 'schema_path',
            'edgesetPath' => 'edgeset_path',
            'vertexsetPath' => 'vertexset_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * schemaPath  元数据路径。
    * edgesetPath  边数据集路径。
    * vertexsetPath  点数据集路径。
    *
    * @var string[]
    */
    protected static $setters = [
            'schemaPath' => 'setSchemaPath',
            'edgesetPath' => 'setEdgesetPath',
            'vertexsetPath' => 'setVertexsetPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * schemaPath  元数据路径。
    * edgesetPath  边数据集路径。
    * vertexsetPath  点数据集路径。
    *
    * @var string[]
    */
    protected static $getters = [
            'schemaPath' => 'getSchemaPath',
            'edgesetPath' => 'getEdgesetPath',
            'vertexsetPath' => 'getVertexsetPath'
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
        $this->container['schemaPath'] = isset($data['schemaPath']) ? $data['schemaPath'] : null;
        $this->container['edgesetPath'] = isset($data['edgesetPath']) ? $data['edgesetPath'] : null;
        $this->container['vertexsetPath'] = isset($data['vertexsetPath']) ? $data['vertexsetPath'] : null;
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
    * Gets schemaPath
    *  元数据路径。
    *
    * @return \HuaweiCloud\SDK\Ges\V2\Model\ShowJobRespJobDetailSchemaPath[]|null
    */
    public function getSchemaPath()
    {
        return $this->container['schemaPath'];
    }

    /**
    * Sets schemaPath
    *
    * @param \HuaweiCloud\SDK\Ges\V2\Model\ShowJobRespJobDetailSchemaPath[]|null $schemaPath 元数据路径。
    *
    * @return $this
    */
    public function setSchemaPath($schemaPath)
    {
        $this->container['schemaPath'] = $schemaPath;
        return $this;
    }

    /**
    * Gets edgesetPath
    *  边数据集路径。
    *
    * @return \HuaweiCloud\SDK\Ges\V2\Model\ShowJobRespJobDetailSchemaPath[]|null
    */
    public function getEdgesetPath()
    {
        return $this->container['edgesetPath'];
    }

    /**
    * Sets edgesetPath
    *
    * @param \HuaweiCloud\SDK\Ges\V2\Model\ShowJobRespJobDetailSchemaPath[]|null $edgesetPath 边数据集路径。
    *
    * @return $this
    */
    public function setEdgesetPath($edgesetPath)
    {
        $this->container['edgesetPath'] = $edgesetPath;
        return $this;
    }

    /**
    * Gets vertexsetPath
    *  点数据集路径。
    *
    * @return \HuaweiCloud\SDK\Ges\V2\Model\ShowJobRespJobDetailSchemaPath[]|null
    */
    public function getVertexsetPath()
    {
        return $this->container['vertexsetPath'];
    }

    /**
    * Sets vertexsetPath
    *
    * @param \HuaweiCloud\SDK\Ges\V2\Model\ShowJobRespJobDetailSchemaPath[]|null $vertexsetPath 点数据集路径。
    *
    * @return $this
    */
    public function setVertexsetPath($vertexsetPath)
    {
        $this->container['vertexsetPath'] = $vertexsetPath;
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

