<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRelationDbRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRelationDbRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID
    * assetsName  资产名称
    * riskStart  起始风险等级
    * riskEnd  终止风险等级
    * offset  页码
    * limit  分页大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'assetsName' => 'string',
            'riskStart' => 'int',
            'riskEnd' => 'int',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID
    * assetsName  资产名称
    * riskStart  起始风险等级
    * riskEnd  终止风险等级
    * offset  页码
    * limit  分页大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'assetsName' => null,
        'riskStart' => 'int32',
        'riskEnd' => 'int32',
        'offset' => 'int32',
        'limit' => 'int32'
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
    * jobId  任务ID
    * assetsName  资产名称
    * riskStart  起始风险等级
    * riskEnd  终止风险等级
    * offset  页码
    * limit  分页大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'assetsName' => 'assets_name',
            'riskStart' => 'risk_start',
            'riskEnd' => 'risk_end',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID
    * assetsName  资产名称
    * riskStart  起始风险等级
    * riskEnd  终止风险等级
    * offset  页码
    * limit  分页大小
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'assetsName' => 'setAssetsName',
            'riskStart' => 'setRiskStart',
            'riskEnd' => 'setRiskEnd',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID
    * assetsName  资产名称
    * riskStart  起始风险等级
    * riskEnd  终止风险等级
    * offset  页码
    * limit  分页大小
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'assetsName' => 'getAssetsName',
            'riskStart' => 'getRiskStart',
            'riskEnd' => 'getRiskEnd',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['assetsName'] = isset($data['assetsName']) ? $data['assetsName'] : null;
        $this->container['riskStart'] = isset($data['riskStart']) ? $data['riskStart'] : null;
        $this->container['riskEnd'] = isset($data['riskEnd']) ? $data['riskEnd'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
        if ($this->container['riskStart'] === null) {
            $invalidProperties[] = "'riskStart' can't be null";
        }
        if ($this->container['riskEnd'] === null) {
            $invalidProperties[] = "'riskEnd' can't be null";
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
    * Gets jobId
    *  任务ID
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId 任务ID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets assetsName
    *  资产名称
    *
    * @return string|null
    */
    public function getAssetsName()
    {
        return $this->container['assetsName'];
    }

    /**
    * Sets assetsName
    *
    * @param string|null $assetsName 资产名称
    *
    * @return $this
    */
    public function setAssetsName($assetsName)
    {
        $this->container['assetsName'] = $assetsName;
        return $this;
    }

    /**
    * Gets riskStart
    *  起始风险等级
    *
    * @return int
    */
    public function getRiskStart()
    {
        return $this->container['riskStart'];
    }

    /**
    * Sets riskStart
    *
    * @param int $riskStart 起始风险等级
    *
    * @return $this
    */
    public function setRiskStart($riskStart)
    {
        $this->container['riskStart'] = $riskStart;
        return $this;
    }

    /**
    * Gets riskEnd
    *  终止风险等级
    *
    * @return int
    */
    public function getRiskEnd()
    {
        return $this->container['riskEnd'];
    }

    /**
    * Sets riskEnd
    *
    * @param int $riskEnd 终止风险等级
    *
    * @return $this
    */
    public function setRiskEnd($riskEnd)
    {
        $this->container['riskEnd'] = $riskEnd;
        return $this;
    }

    /**
    * Gets offset
    *  页码
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 页码
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  分页大小
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 分页大小
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

