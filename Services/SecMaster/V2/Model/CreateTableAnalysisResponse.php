<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTableAnalysisResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTableAnalysisResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * schema  查询结果
    * datarows  查询结果行
    * total  总数
    * size  总数
    * results  结果列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'schema' => '\HuaweiCloud\SDK\SecMaster\V2\Model\SearchQueryField[]',
            'datarows' => 'object[][]',
            'total' => 'int',
            'size' => 'int',
            'results' => '\HuaweiCloud\SDK\SecMaster\V2\Model\SearchQueryResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * schema  查询结果
    * datarows  查询结果行
    * total  总数
    * size  总数
    * results  结果列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'schema' => null,
        'datarows' => null,
        'total' => null,
        'size' => null,
        'results' => null
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
    * schema  查询结果
    * datarows  查询结果行
    * total  总数
    * size  总数
    * results  结果列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'schema' => 'schema',
            'datarows' => 'datarows',
            'total' => 'total',
            'size' => 'size',
            'results' => 'results'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * schema  查询结果
    * datarows  查询结果行
    * total  总数
    * size  总数
    * results  结果列表
    *
    * @var string[]
    */
    protected static $setters = [
            'schema' => 'setSchema',
            'datarows' => 'setDatarows',
            'total' => 'setTotal',
            'size' => 'setSize',
            'results' => 'setResults'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * schema  查询结果
    * datarows  查询结果行
    * total  总数
    * size  总数
    * results  结果列表
    *
    * @var string[]
    */
    protected static $getters = [
            'schema' => 'getSchema',
            'datarows' => 'getDatarows',
            'total' => 'getTotal',
            'size' => 'getSize',
            'results' => 'getResults'
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
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['datarows'] = isset($data['datarows']) ? $data['datarows'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['results'] = isset($data['results']) ? $data['results'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['total']) && ($this->container['total'] > 10000)) {
                $invalidProperties[] = "invalid value for 'total', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] < 0)) {
                $invalidProperties[] = "invalid value for 'total', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] > 500)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 0)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
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
    * Gets schema
    *  查询结果
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\SearchQueryField[]|null
    */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
    * Sets schema
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\SearchQueryField[]|null $schema 查询结果
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
        return $this;
    }

    /**
    * Gets datarows
    *  查询结果行
    *
    * @return object[][]|null
    */
    public function getDatarows()
    {
        return $this->container['datarows'];
    }

    /**
    * Sets datarows
    *
    * @param object[][]|null $datarows 查询结果行
    *
    * @return $this
    */
    public function setDatarows($datarows)
    {
        $this->container['datarows'] = $datarows;
        return $this;
    }

    /**
    * Gets total
    *  总数
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 总数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets size
    *  总数
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 总数
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets results
    *  结果列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\SearchQueryResult[]|null
    */
    public function getResults()
    {
        return $this->container['results'];
    }

    /**
    * Sets results
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\SearchQueryResult[]|null $results 结果列表
    *
    * @return $this
    */
    public function setResults($results)
    {
        $this->container['results'] = $results;
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

