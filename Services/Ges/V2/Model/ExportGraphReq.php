<?php

namespace HuaweiCloud\SDK\Ges\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportGraphReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportGraphReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * graphExportPath  图的导出OBS路径。
    * edgeSetName  导出边文件名。
    * vertexSetName  导出点文件名。
    * schemaName  导出元数据文件名。
    * paginate  paginate
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'graphExportPath' => 'string',
            'edgeSetName' => 'string',
            'vertexSetName' => 'string',
            'schemaName' => 'string',
            'paginate' => '\HuaweiCloud\SDK\Ges\V2\Model\ExportGraphReqPaginate'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * graphExportPath  图的导出OBS路径。
    * edgeSetName  导出边文件名。
    * vertexSetName  导出点文件名。
    * schemaName  导出元数据文件名。
    * paginate  paginate
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'graphExportPath' => null,
        'edgeSetName' => null,
        'vertexSetName' => null,
        'schemaName' => null,
        'paginate' => null
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
    * graphExportPath  图的导出OBS路径。
    * edgeSetName  导出边文件名。
    * vertexSetName  导出点文件名。
    * schemaName  导出元数据文件名。
    * paginate  paginate
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'graphExportPath' => 'graph_export_path',
            'edgeSetName' => 'edge_set_name',
            'vertexSetName' => 'vertex_set_name',
            'schemaName' => 'schema_name',
            'paginate' => 'paginate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * graphExportPath  图的导出OBS路径。
    * edgeSetName  导出边文件名。
    * vertexSetName  导出点文件名。
    * schemaName  导出元数据文件名。
    * paginate  paginate
    *
    * @var string[]
    */
    protected static $setters = [
            'graphExportPath' => 'setGraphExportPath',
            'edgeSetName' => 'setEdgeSetName',
            'vertexSetName' => 'setVertexSetName',
            'schemaName' => 'setSchemaName',
            'paginate' => 'setPaginate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * graphExportPath  图的导出OBS路径。
    * edgeSetName  导出边文件名。
    * vertexSetName  导出点文件名。
    * schemaName  导出元数据文件名。
    * paginate  paginate
    *
    * @var string[]
    */
    protected static $getters = [
            'graphExportPath' => 'getGraphExportPath',
            'edgeSetName' => 'getEdgeSetName',
            'vertexSetName' => 'getVertexSetName',
            'schemaName' => 'getSchemaName',
            'paginate' => 'getPaginate'
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
        $this->container['graphExportPath'] = isset($data['graphExportPath']) ? $data['graphExportPath'] : null;
        $this->container['edgeSetName'] = isset($data['edgeSetName']) ? $data['edgeSetName'] : null;
        $this->container['vertexSetName'] = isset($data['vertexSetName']) ? $data['vertexSetName'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['paginate'] = isset($data['paginate']) ? $data['paginate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['graphExportPath'] === null) {
            $invalidProperties[] = "'graphExportPath' can't be null";
        }
        if ($this->container['edgeSetName'] === null) {
            $invalidProperties[] = "'edgeSetName' can't be null";
        }
        if ($this->container['vertexSetName'] === null) {
            $invalidProperties[] = "'vertexSetName' can't be null";
        }
        if ($this->container['schemaName'] === null) {
            $invalidProperties[] = "'schemaName' can't be null";
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
    * Gets graphExportPath
    *  图的导出OBS路径。
    *
    * @return string
    */
    public function getGraphExportPath()
    {
        return $this->container['graphExportPath'];
    }

    /**
    * Sets graphExportPath
    *
    * @param string $graphExportPath 图的导出OBS路径。
    *
    * @return $this
    */
    public function setGraphExportPath($graphExportPath)
    {
        $this->container['graphExportPath'] = $graphExportPath;
        return $this;
    }

    /**
    * Gets edgeSetName
    *  导出边文件名。
    *
    * @return string
    */
    public function getEdgeSetName()
    {
        return $this->container['edgeSetName'];
    }

    /**
    * Sets edgeSetName
    *
    * @param string $edgeSetName 导出边文件名。
    *
    * @return $this
    */
    public function setEdgeSetName($edgeSetName)
    {
        $this->container['edgeSetName'] = $edgeSetName;
        return $this;
    }

    /**
    * Gets vertexSetName
    *  导出点文件名。
    *
    * @return string
    */
    public function getVertexSetName()
    {
        return $this->container['vertexSetName'];
    }

    /**
    * Sets vertexSetName
    *
    * @param string $vertexSetName 导出点文件名。
    *
    * @return $this
    */
    public function setVertexSetName($vertexSetName)
    {
        $this->container['vertexSetName'] = $vertexSetName;
        return $this;
    }

    /**
    * Gets schemaName
    *  导出元数据文件名。
    *
    * @return string
    */
    public function getSchemaName()
    {
        return $this->container['schemaName'];
    }

    /**
    * Sets schemaName
    *
    * @param string $schemaName 导出元数据文件名。
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
        return $this;
    }

    /**
    * Gets paginate
    *  paginate
    *
    * @return \HuaweiCloud\SDK\Ges\V2\Model\ExportGraphReqPaginate|null
    */
    public function getPaginate()
    {
        return $this->container['paginate'];
    }

    /**
    * Sets paginate
    *
    * @param \HuaweiCloud\SDK\Ges\V2\Model\ExportGraphReqPaginate|null $paginate paginate
    *
    * @return $this
    */
    public function setPaginate($paginate)
    {
        $this->container['paginate'] = $paginate;
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

