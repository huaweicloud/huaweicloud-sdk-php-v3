<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAdhocResultResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAdhocResultResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * batch  获取数据的批次，为0则为第一次查询
    * schema  统计分析结果字段类型
    * datarows  统计分析结果数据
    * datarowsUpsert  统计分析结果数据
    * total  统计分析结果总数
    * size  返回的统计分析结果条数
    * next  是否有下一批数据
    * tips  tips
    * jobId  UUID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'batch' => 'object',
            'schema' => '\HuaweiCloud\SDK\SecMaster\V2\Model\AdhocQueryAnalysisField[]',
            'datarows' => 'object[][]',
            'datarowsUpsert' => '\HuaweiCloud\SDK\SecMaster\V2\Model\DataRow[][]',
            'total' => 'int',
            'size' => 'int',
            'next' => 'int',
            'tips' => '\HuaweiCloud\SDK\SecMaster\V2\Model\ShowAdhocQueryResultResponseBodyTips',
            'jobId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * batch  获取数据的批次，为0则为第一次查询
    * schema  统计分析结果字段类型
    * datarows  统计分析结果数据
    * datarowsUpsert  统计分析结果数据
    * total  统计分析结果总数
    * size  返回的统计分析结果条数
    * next  是否有下一批数据
    * tips  tips
    * jobId  UUID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'batch' => 'integer',
        'schema' => null,
        'datarows' => null,
        'datarowsUpsert' => null,
        'total' => null,
        'size' => null,
        'next' => null,
        'tips' => null,
        'jobId' => null
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
    * batch  获取数据的批次，为0则为第一次查询
    * schema  统计分析结果字段类型
    * datarows  统计分析结果数据
    * datarowsUpsert  统计分析结果数据
    * total  统计分析结果总数
    * size  返回的统计分析结果条数
    * next  是否有下一批数据
    * tips  tips
    * jobId  UUID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'batch' => 'batch',
            'schema' => 'schema',
            'datarows' => 'datarows',
            'datarowsUpsert' => 'datarows_upsert',
            'total' => 'total',
            'size' => 'size',
            'next' => 'next',
            'tips' => 'tips',
            'jobId' => 'job_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * batch  获取数据的批次，为0则为第一次查询
    * schema  统计分析结果字段类型
    * datarows  统计分析结果数据
    * datarowsUpsert  统计分析结果数据
    * total  统计分析结果总数
    * size  返回的统计分析结果条数
    * next  是否有下一批数据
    * tips  tips
    * jobId  UUID
    *
    * @var string[]
    */
    protected static $setters = [
            'batch' => 'setBatch',
            'schema' => 'setSchema',
            'datarows' => 'setDatarows',
            'datarowsUpsert' => 'setDatarowsUpsert',
            'total' => 'setTotal',
            'size' => 'setSize',
            'next' => 'setNext',
            'tips' => 'setTips',
            'jobId' => 'setJobId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * batch  获取数据的批次，为0则为第一次查询
    * schema  统计分析结果字段类型
    * datarows  统计分析结果数据
    * datarowsUpsert  统计分析结果数据
    * total  统计分析结果总数
    * size  返回的统计分析结果条数
    * next  是否有下一批数据
    * tips  tips
    * jobId  UUID
    *
    * @var string[]
    */
    protected static $getters = [
            'batch' => 'getBatch',
            'schema' => 'getSchema',
            'datarows' => 'getDatarows',
            'datarowsUpsert' => 'getDatarowsUpsert',
            'total' => 'getTotal',
            'size' => 'getSize',
            'next' => 'getNext',
            'tips' => 'getTips',
            'jobId' => 'getJobId'
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
        $this->container['batch'] = isset($data['batch']) ? $data['batch'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['datarows'] = isset($data['datarows']) ? $data['datarows'] : null;
        $this->container['datarowsUpsert'] = isset($data['datarowsUpsert']) ? $data['datarowsUpsert'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['next'] = isset($data['next']) ? $data['next'] : null;
        $this->container['tips'] = isset($data['tips']) ? $data['tips'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
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
            if (!is_null($this->container['next']) && ($this->container['next'] > 500)) {
                $invalidProperties[] = "invalid value for 'next', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['next']) && ($this->container['next'] < 0)) {
                $invalidProperties[] = "invalid value for 'next', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) > 36)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['jobId']) && (mb_strlen($this->container['jobId']) < 36)) {
                $invalidProperties[] = "invalid value for 'jobId', the character length must be bigger than or equal to 36.";
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
    * Gets batch
    *  获取数据的批次，为0则为第一次查询
    *
    * @return object|null
    */
    public function getBatch()
    {
        return $this->container['batch'];
    }

    /**
    * Sets batch
    *
    * @param object|null $batch 获取数据的批次，为0则为第一次查询
    *
    * @return $this
    */
    public function setBatch($batch)
    {
        $this->container['batch'] = $batch;
        return $this;
    }

    /**
    * Gets schema
    *  统计分析结果字段类型
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\AdhocQueryAnalysisField[]|null
    */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
    * Sets schema
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\AdhocQueryAnalysisField[]|null $schema 统计分析结果字段类型
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
    *  统计分析结果数据
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
    * @param object[][]|null $datarows 统计分析结果数据
    *
    * @return $this
    */
    public function setDatarows($datarows)
    {
        $this->container['datarows'] = $datarows;
        return $this;
    }

    /**
    * Gets datarowsUpsert
    *  统计分析结果数据
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\DataRow[][]|null
    */
    public function getDatarowsUpsert()
    {
        return $this->container['datarowsUpsert'];
    }

    /**
    * Sets datarowsUpsert
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\DataRow[][]|null $datarowsUpsert 统计分析结果数据
    *
    * @return $this
    */
    public function setDatarowsUpsert($datarowsUpsert)
    {
        $this->container['datarowsUpsert'] = $datarowsUpsert;
        return $this;
    }

    /**
    * Gets total
    *  统计分析结果总数
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
    * @param int|null $total 统计分析结果总数
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
    *  返回的统计分析结果条数
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
    * @param int|null $size 返回的统计分析结果条数
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets next
    *  是否有下一批数据
    *
    * @return int|null
    */
    public function getNext()
    {
        return $this->container['next'];
    }

    /**
    * Sets next
    *
    * @param int|null $next 是否有下一批数据
    *
    * @return $this
    */
    public function setNext($next)
    {
        $this->container['next'] = $next;
        return $this;
    }

    /**
    * Gets tips
    *  tips
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\ShowAdhocQueryResultResponseBodyTips|null
    */
    public function getTips()
    {
        return $this->container['tips'];
    }

    /**
    * Sets tips
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\ShowAdhocQueryResultResponseBodyTips|null $tips tips
    *
    * @return $this
    */
    public function setTips($tips)
    {
        $this->container['tips'] = $tips;
        return $this;
    }

    /**
    * Gets jobId
    *  UUID
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId UUID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
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

