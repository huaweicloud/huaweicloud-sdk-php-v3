<?php

namespace HuaweiCloud\SDK\Ges\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportGraphReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportGraphReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * edgesetPath  边文件目录或边文件名。
    * edgesetFormat  边数据集格式。当前仅支持csv。  默认为csv。
    * vertexsetPath  点文件目录或点文件名。
    * vertexsetFormat  点数据集格式。当前仅支持csv。  默认为csv。
    * schemaPath  新增数据的元数据文件路径。
    * logDir  导入图日志存放目录，用于存储导入失败的数据和详细错入原因。
    * parallelEdge  parallelEdge
    * delimiter  csv格式文件字段分隔符，默认值为逗号（,）。list/set类型的字段内元素分隔符默认为分号（;）。
    * trimQuote  csv格式文件字段包围符，默认值为双引号（\"）。用来包围一个字段，如字段中含有分隔符或者换行等。
    * offline  是否离线导入，取值为true或者false，默认取false。  - true 表示离线导入，导入速度较快，但导入过程中图处于锁定状态，不可读不可写。 - false 表示在线导入，相对离线导入，在线导入速度略慢，但导入过程中图并未锁定，可读不可写。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'edgesetPath' => 'string',
            'edgesetFormat' => 'string',
            'vertexsetPath' => 'string',
            'vertexsetFormat' => 'string',
            'schemaPath' => 'string',
            'logDir' => 'string',
            'parallelEdge' => '\HuaweiCloud\SDK\Ges\V2\Model\ImportGraphReqParallelEdge',
            'delimiter' => 'string',
            'trimQuote' => 'string',
            'offline' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * edgesetPath  边文件目录或边文件名。
    * edgesetFormat  边数据集格式。当前仅支持csv。  默认为csv。
    * vertexsetPath  点文件目录或点文件名。
    * vertexsetFormat  点数据集格式。当前仅支持csv。  默认为csv。
    * schemaPath  新增数据的元数据文件路径。
    * logDir  导入图日志存放目录，用于存储导入失败的数据和详细错入原因。
    * parallelEdge  parallelEdge
    * delimiter  csv格式文件字段分隔符，默认值为逗号（,）。list/set类型的字段内元素分隔符默认为分号（;）。
    * trimQuote  csv格式文件字段包围符，默认值为双引号（\"）。用来包围一个字段，如字段中含有分隔符或者换行等。
    * offline  是否离线导入，取值为true或者false，默认取false。  - true 表示离线导入，导入速度较快，但导入过程中图处于锁定状态，不可读不可写。 - false 表示在线导入，相对离线导入，在线导入速度略慢，但导入过程中图并未锁定，可读不可写。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'edgesetPath' => null,
        'edgesetFormat' => null,
        'vertexsetPath' => null,
        'vertexsetFormat' => null,
        'schemaPath' => null,
        'logDir' => null,
        'parallelEdge' => null,
        'delimiter' => null,
        'trimQuote' => null,
        'offline' => null
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
    * edgesetPath  边文件目录或边文件名。
    * edgesetFormat  边数据集格式。当前仅支持csv。  默认为csv。
    * vertexsetPath  点文件目录或点文件名。
    * vertexsetFormat  点数据集格式。当前仅支持csv。  默认为csv。
    * schemaPath  新增数据的元数据文件路径。
    * logDir  导入图日志存放目录，用于存储导入失败的数据和详细错入原因。
    * parallelEdge  parallelEdge
    * delimiter  csv格式文件字段分隔符，默认值为逗号（,）。list/set类型的字段内元素分隔符默认为分号（;）。
    * trimQuote  csv格式文件字段包围符，默认值为双引号（\"）。用来包围一个字段，如字段中含有分隔符或者换行等。
    * offline  是否离线导入，取值为true或者false，默认取false。  - true 表示离线导入，导入速度较快，但导入过程中图处于锁定状态，不可读不可写。 - false 表示在线导入，相对离线导入，在线导入速度略慢，但导入过程中图并未锁定，可读不可写。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'edgesetPath' => 'edgeset_path',
            'edgesetFormat' => 'edgeset_format',
            'vertexsetPath' => 'vertexset_path',
            'vertexsetFormat' => 'vertexset_format',
            'schemaPath' => 'schema_path',
            'logDir' => 'log_dir',
            'parallelEdge' => 'parallel_edge',
            'delimiter' => 'delimiter',
            'trimQuote' => 'trim_quote',
            'offline' => 'offline'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * edgesetPath  边文件目录或边文件名。
    * edgesetFormat  边数据集格式。当前仅支持csv。  默认为csv。
    * vertexsetPath  点文件目录或点文件名。
    * vertexsetFormat  点数据集格式。当前仅支持csv。  默认为csv。
    * schemaPath  新增数据的元数据文件路径。
    * logDir  导入图日志存放目录，用于存储导入失败的数据和详细错入原因。
    * parallelEdge  parallelEdge
    * delimiter  csv格式文件字段分隔符，默认值为逗号（,）。list/set类型的字段内元素分隔符默认为分号（;）。
    * trimQuote  csv格式文件字段包围符，默认值为双引号（\"）。用来包围一个字段，如字段中含有分隔符或者换行等。
    * offline  是否离线导入，取值为true或者false，默认取false。  - true 表示离线导入，导入速度较快，但导入过程中图处于锁定状态，不可读不可写。 - false 表示在线导入，相对离线导入，在线导入速度略慢，但导入过程中图并未锁定，可读不可写。
    *
    * @var string[]
    */
    protected static $setters = [
            'edgesetPath' => 'setEdgesetPath',
            'edgesetFormat' => 'setEdgesetFormat',
            'vertexsetPath' => 'setVertexsetPath',
            'vertexsetFormat' => 'setVertexsetFormat',
            'schemaPath' => 'setSchemaPath',
            'logDir' => 'setLogDir',
            'parallelEdge' => 'setParallelEdge',
            'delimiter' => 'setDelimiter',
            'trimQuote' => 'setTrimQuote',
            'offline' => 'setOffline'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * edgesetPath  边文件目录或边文件名。
    * edgesetFormat  边数据集格式。当前仅支持csv。  默认为csv。
    * vertexsetPath  点文件目录或点文件名。
    * vertexsetFormat  点数据集格式。当前仅支持csv。  默认为csv。
    * schemaPath  新增数据的元数据文件路径。
    * logDir  导入图日志存放目录，用于存储导入失败的数据和详细错入原因。
    * parallelEdge  parallelEdge
    * delimiter  csv格式文件字段分隔符，默认值为逗号（,）。list/set类型的字段内元素分隔符默认为分号（;）。
    * trimQuote  csv格式文件字段包围符，默认值为双引号（\"）。用来包围一个字段，如字段中含有分隔符或者换行等。
    * offline  是否离线导入，取值为true或者false，默认取false。  - true 表示离线导入，导入速度较快，但导入过程中图处于锁定状态，不可读不可写。 - false 表示在线导入，相对离线导入，在线导入速度略慢，但导入过程中图并未锁定，可读不可写。
    *
    * @var string[]
    */
    protected static $getters = [
            'edgesetPath' => 'getEdgesetPath',
            'edgesetFormat' => 'getEdgesetFormat',
            'vertexsetPath' => 'getVertexsetPath',
            'vertexsetFormat' => 'getVertexsetFormat',
            'schemaPath' => 'getSchemaPath',
            'logDir' => 'getLogDir',
            'parallelEdge' => 'getParallelEdge',
            'delimiter' => 'getDelimiter',
            'trimQuote' => 'getTrimQuote',
            'offline' => 'getOffline'
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
        $this->container['edgesetPath'] = isset($data['edgesetPath']) ? $data['edgesetPath'] : null;
        $this->container['edgesetFormat'] = isset($data['edgesetFormat']) ? $data['edgesetFormat'] : null;
        $this->container['vertexsetPath'] = isset($data['vertexsetPath']) ? $data['vertexsetPath'] : null;
        $this->container['vertexsetFormat'] = isset($data['vertexsetFormat']) ? $data['vertexsetFormat'] : null;
        $this->container['schemaPath'] = isset($data['schemaPath']) ? $data['schemaPath'] : null;
        $this->container['logDir'] = isset($data['logDir']) ? $data['logDir'] : null;
        $this->container['parallelEdge'] = isset($data['parallelEdge']) ? $data['parallelEdge'] : null;
        $this->container['delimiter'] = isset($data['delimiter']) ? $data['delimiter'] : null;
        $this->container['trimQuote'] = isset($data['trimQuote']) ? $data['trimQuote'] : null;
        $this->container['offline'] = isset($data['offline']) ? $data['offline'] : null;
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
    * Gets edgesetPath
    *  边文件目录或边文件名。
    *
    * @return string|null
    */
    public function getEdgesetPath()
    {
        return $this->container['edgesetPath'];
    }

    /**
    * Sets edgesetPath
    *
    * @param string|null $edgesetPath 边文件目录或边文件名。
    *
    * @return $this
    */
    public function setEdgesetPath($edgesetPath)
    {
        $this->container['edgesetPath'] = $edgesetPath;
        return $this;
    }

    /**
    * Gets edgesetFormat
    *  边数据集格式。当前仅支持csv。  默认为csv。
    *
    * @return string|null
    */
    public function getEdgesetFormat()
    {
        return $this->container['edgesetFormat'];
    }

    /**
    * Sets edgesetFormat
    *
    * @param string|null $edgesetFormat 边数据集格式。当前仅支持csv。  默认为csv。
    *
    * @return $this
    */
    public function setEdgesetFormat($edgesetFormat)
    {
        $this->container['edgesetFormat'] = $edgesetFormat;
        return $this;
    }

    /**
    * Gets vertexsetPath
    *  点文件目录或点文件名。
    *
    * @return string|null
    */
    public function getVertexsetPath()
    {
        return $this->container['vertexsetPath'];
    }

    /**
    * Sets vertexsetPath
    *
    * @param string|null $vertexsetPath 点文件目录或点文件名。
    *
    * @return $this
    */
    public function setVertexsetPath($vertexsetPath)
    {
        $this->container['vertexsetPath'] = $vertexsetPath;
        return $this;
    }

    /**
    * Gets vertexsetFormat
    *  点数据集格式。当前仅支持csv。  默认为csv。
    *
    * @return string|null
    */
    public function getVertexsetFormat()
    {
        return $this->container['vertexsetFormat'];
    }

    /**
    * Sets vertexsetFormat
    *
    * @param string|null $vertexsetFormat 点数据集格式。当前仅支持csv。  默认为csv。
    *
    * @return $this
    */
    public function setVertexsetFormat($vertexsetFormat)
    {
        $this->container['vertexsetFormat'] = $vertexsetFormat;
        return $this;
    }

    /**
    * Gets schemaPath
    *  新增数据的元数据文件路径。
    *
    * @return string|null
    */
    public function getSchemaPath()
    {
        return $this->container['schemaPath'];
    }

    /**
    * Sets schemaPath
    *
    * @param string|null $schemaPath 新增数据的元数据文件路径。
    *
    * @return $this
    */
    public function setSchemaPath($schemaPath)
    {
        $this->container['schemaPath'] = $schemaPath;
        return $this;
    }

    /**
    * Gets logDir
    *  导入图日志存放目录，用于存储导入失败的数据和详细错入原因。
    *
    * @return string|null
    */
    public function getLogDir()
    {
        return $this->container['logDir'];
    }

    /**
    * Sets logDir
    *
    * @param string|null $logDir 导入图日志存放目录，用于存储导入失败的数据和详细错入原因。
    *
    * @return $this
    */
    public function setLogDir($logDir)
    {
        $this->container['logDir'] = $logDir;
        return $this;
    }

    /**
    * Gets parallelEdge
    *  parallelEdge
    *
    * @return \HuaweiCloud\SDK\Ges\V2\Model\ImportGraphReqParallelEdge|null
    */
    public function getParallelEdge()
    {
        return $this->container['parallelEdge'];
    }

    /**
    * Sets parallelEdge
    *
    * @param \HuaweiCloud\SDK\Ges\V2\Model\ImportGraphReqParallelEdge|null $parallelEdge parallelEdge
    *
    * @return $this
    */
    public function setParallelEdge($parallelEdge)
    {
        $this->container['parallelEdge'] = $parallelEdge;
        return $this;
    }

    /**
    * Gets delimiter
    *  csv格式文件字段分隔符，默认值为逗号（,）。list/set类型的字段内元素分隔符默认为分号（;）。
    *
    * @return string|null
    */
    public function getDelimiter()
    {
        return $this->container['delimiter'];
    }

    /**
    * Sets delimiter
    *
    * @param string|null $delimiter csv格式文件字段分隔符，默认值为逗号（,）。list/set类型的字段内元素分隔符默认为分号（;）。
    *
    * @return $this
    */
    public function setDelimiter($delimiter)
    {
        $this->container['delimiter'] = $delimiter;
        return $this;
    }

    /**
    * Gets trimQuote
    *  csv格式文件字段包围符，默认值为双引号（\"）。用来包围一个字段，如字段中含有分隔符或者换行等。
    *
    * @return string|null
    */
    public function getTrimQuote()
    {
        return $this->container['trimQuote'];
    }

    /**
    * Sets trimQuote
    *
    * @param string|null $trimQuote csv格式文件字段包围符，默认值为双引号（\"）。用来包围一个字段，如字段中含有分隔符或者换行等。
    *
    * @return $this
    */
    public function setTrimQuote($trimQuote)
    {
        $this->container['trimQuote'] = $trimQuote;
        return $this;
    }

    /**
    * Gets offline
    *  是否离线导入，取值为true或者false，默认取false。  - true 表示离线导入，导入速度较快，但导入过程中图处于锁定状态，不可读不可写。 - false 表示在线导入，相对离线导入，在线导入速度略慢，但导入过程中图并未锁定，可读不可写。
    *
    * @return bool|null
    */
    public function getOffline()
    {
        return $this->container['offline'];
    }

    /**
    * Sets offline
    *
    * @param bool|null $offline 是否离线导入，取值为true或者false，默认取false。  - true 表示离线导入，导入速度较快，但导入过程中图处于锁定状态，不可读不可写。 - false 表示在线导入，相对离线导入，在线导入速度略慢，但导入过程中图并未锁定，可读不可写。
    *
    * @return $this
    */
    public function setOffline($offline)
    {
        $this->container['offline'] = $offline;
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

