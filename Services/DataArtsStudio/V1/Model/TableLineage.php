<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TableLineage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TableLineage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  作业算子名称
    * inputTables  上游血缘表列表，列表大小：1至100
    * outputTables  下游血缘表列表，列表大小：1至100
    * sourceConnectionId  源数据连接id
    * targetConnectionId  目标数据连接id
    * columnLineages  字段血缘列表，列表大小：0至100
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'inputTables' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableInfo[]',
            'outputTables' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableInfo[]',
            'sourceConnectionId' => 'string',
            'targetConnectionId' => 'string',
            'columnLineages' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnLineage[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  作业算子名称
    * inputTables  上游血缘表列表，列表大小：1至100
    * outputTables  下游血缘表列表，列表大小：1至100
    * sourceConnectionId  源数据连接id
    * targetConnectionId  目标数据连接id
    * columnLineages  字段血缘列表，列表大小：0至100
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'inputTables' => null,
        'outputTables' => null,
        'sourceConnectionId' => null,
        'targetConnectionId' => null,
        'columnLineages' => null
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
    * name  作业算子名称
    * inputTables  上游血缘表列表，列表大小：1至100
    * outputTables  下游血缘表列表，列表大小：1至100
    * sourceConnectionId  源数据连接id
    * targetConnectionId  目标数据连接id
    * columnLineages  字段血缘列表，列表大小：0至100
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'inputTables' => 'input_tables',
            'outputTables' => 'output_tables',
            'sourceConnectionId' => 'source_connection_id',
            'targetConnectionId' => 'target_connection_id',
            'columnLineages' => 'column_lineages'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  作业算子名称
    * inputTables  上游血缘表列表，列表大小：1至100
    * outputTables  下游血缘表列表，列表大小：1至100
    * sourceConnectionId  源数据连接id
    * targetConnectionId  目标数据连接id
    * columnLineages  字段血缘列表，列表大小：0至100
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'inputTables' => 'setInputTables',
            'outputTables' => 'setOutputTables',
            'sourceConnectionId' => 'setSourceConnectionId',
            'targetConnectionId' => 'setTargetConnectionId',
            'columnLineages' => 'setColumnLineages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  作业算子名称
    * inputTables  上游血缘表列表，列表大小：1至100
    * outputTables  下游血缘表列表，列表大小：1至100
    * sourceConnectionId  源数据连接id
    * targetConnectionId  目标数据连接id
    * columnLineages  字段血缘列表，列表大小：0至100
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'inputTables' => 'getInputTables',
            'outputTables' => 'getOutputTables',
            'sourceConnectionId' => 'getSourceConnectionId',
            'targetConnectionId' => 'getTargetConnectionId',
            'columnLineages' => 'getColumnLineages'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['inputTables'] = isset($data['inputTables']) ? $data['inputTables'] : null;
        $this->container['outputTables'] = isset($data['outputTables']) ? $data['outputTables'] : null;
        $this->container['sourceConnectionId'] = isset($data['sourceConnectionId']) ? $data['sourceConnectionId'] : null;
        $this->container['targetConnectionId'] = isset($data['targetConnectionId']) ? $data['targetConnectionId'] : null;
        $this->container['columnLineages'] = isset($data['columnLineages']) ? $data['columnLineages'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['inputTables'] === null) {
            $invalidProperties[] = "'inputTables' can't be null";
        }
        if ($this->container['outputTables'] === null) {
            $invalidProperties[] = "'outputTables' can't be null";
        }
        if ($this->container['sourceConnectionId'] === null) {
            $invalidProperties[] = "'sourceConnectionId' can't be null";
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
    * Gets name
    *  作业算子名称
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
    * @param string $name 作业算子名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets inputTables
    *  上游血缘表列表，列表大小：1至100
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableInfo[]
    */
    public function getInputTables()
    {
        return $this->container['inputTables'];
    }

    /**
    * Sets inputTables
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableInfo[] $inputTables 上游血缘表列表，列表大小：1至100
    *
    * @return $this
    */
    public function setInputTables($inputTables)
    {
        $this->container['inputTables'] = $inputTables;
        return $this;
    }

    /**
    * Gets outputTables
    *  下游血缘表列表，列表大小：1至100
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableInfo[]
    */
    public function getOutputTables()
    {
        return $this->container['outputTables'];
    }

    /**
    * Sets outputTables
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableInfo[] $outputTables 下游血缘表列表，列表大小：1至100
    *
    * @return $this
    */
    public function setOutputTables($outputTables)
    {
        $this->container['outputTables'] = $outputTables;
        return $this;
    }

    /**
    * Gets sourceConnectionId
    *  源数据连接id
    *
    * @return string
    */
    public function getSourceConnectionId()
    {
        return $this->container['sourceConnectionId'];
    }

    /**
    * Sets sourceConnectionId
    *
    * @param string $sourceConnectionId 源数据连接id
    *
    * @return $this
    */
    public function setSourceConnectionId($sourceConnectionId)
    {
        $this->container['sourceConnectionId'] = $sourceConnectionId;
        return $this;
    }

    /**
    * Gets targetConnectionId
    *  目标数据连接id
    *
    * @return string|null
    */
    public function getTargetConnectionId()
    {
        return $this->container['targetConnectionId'];
    }

    /**
    * Sets targetConnectionId
    *
    * @param string|null $targetConnectionId 目标数据连接id
    *
    * @return $this
    */
    public function setTargetConnectionId($targetConnectionId)
    {
        $this->container['targetConnectionId'] = $targetConnectionId;
        return $this;
    }

    /**
    * Gets columnLineages
    *  字段血缘列表，列表大小：0至100
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnLineage[]|null
    */
    public function getColumnLineages()
    {
        return $this->container['columnLineages'];
    }

    /**
    * Sets columnLineages
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ColumnLineage[]|null $columnLineages 字段血缘列表，列表大小：0至100
    *
    * @return $this
    */
    public function setColumnLineages($columnLineages)
    {
        $this->container['columnLineages'] = $columnLineages;
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

