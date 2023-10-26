<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowOpenApiCalledRecordsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowOpenApiCalledRecordsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  调用API总次数
    * succeed  调用API成功次数
    * failed  调用API失败次数
    * openapiCalledRecords  API调用记录列表
    * nextMarker  获取下一页所需的标识符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'int',
            'succeed' => 'int',
            'failed' => 'int',
            'openapiCalledRecords' => '\HuaweiCloud\SDK\Dsc\V1\Model\OpenApiCalledRecord[]',
            'nextMarker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  调用API总次数
    * succeed  调用API成功次数
    * failed  调用API失败次数
    * openapiCalledRecords  API调用记录列表
    * nextMarker  获取下一页所需的标识符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => 'int32',
        'succeed' => 'int32',
        'failed' => 'int32',
        'openapiCalledRecords' => null,
        'nextMarker' => null
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
    * total  调用API总次数
    * succeed  调用API成功次数
    * failed  调用API失败次数
    * openapiCalledRecords  API调用记录列表
    * nextMarker  获取下一页所需的标识符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'succeed' => 'succeed',
            'failed' => 'failed',
            'openapiCalledRecords' => 'openapi_called_records',
            'nextMarker' => 'next_marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  调用API总次数
    * succeed  调用API成功次数
    * failed  调用API失败次数
    * openapiCalledRecords  API调用记录列表
    * nextMarker  获取下一页所需的标识符。
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'succeed' => 'setSucceed',
            'failed' => 'setFailed',
            'openapiCalledRecords' => 'setOpenapiCalledRecords',
            'nextMarker' => 'setNextMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  调用API总次数
    * succeed  调用API成功次数
    * failed  调用API失败次数
    * openapiCalledRecords  API调用记录列表
    * nextMarker  获取下一页所需的标识符。
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'succeed' => 'getSucceed',
            'failed' => 'getFailed',
            'openapiCalledRecords' => 'getOpenapiCalledRecords',
            'nextMarker' => 'getNextMarker'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['succeed'] = isset($data['succeed']) ? $data['succeed'] : null;
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : null;
        $this->container['openapiCalledRecords'] = isset($data['openapiCalledRecords']) ? $data['openapiCalledRecords'] : null;
        $this->container['nextMarker'] = isset($data['nextMarker']) ? $data['nextMarker'] : null;
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
    * Gets total
    *  调用API总次数
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
    * @param int|null $total 调用API总次数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets succeed
    *  调用API成功次数
    *
    * @return int|null
    */
    public function getSucceed()
    {
        return $this->container['succeed'];
    }

    /**
    * Sets succeed
    *
    * @param int|null $succeed 调用API成功次数
    *
    * @return $this
    */
    public function setSucceed($succeed)
    {
        $this->container['succeed'] = $succeed;
        return $this;
    }

    /**
    * Gets failed
    *  调用API失败次数
    *
    * @return int|null
    */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
    * Sets failed
    *
    * @param int|null $failed 调用API失败次数
    *
    * @return $this
    */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;
        return $this;
    }

    /**
    * Gets openapiCalledRecords
    *  API调用记录列表
    *
    * @return \HuaweiCloud\SDK\Dsc\V1\Model\OpenApiCalledRecord[]|null
    */
    public function getOpenapiCalledRecords()
    {
        return $this->container['openapiCalledRecords'];
    }

    /**
    * Sets openapiCalledRecords
    *
    * @param \HuaweiCloud\SDK\Dsc\V1\Model\OpenApiCalledRecord[]|null $openapiCalledRecords API调用记录列表
    *
    * @return $this
    */
    public function setOpenapiCalledRecords($openapiCalledRecords)
    {
        $this->container['openapiCalledRecords'] = $openapiCalledRecords;
        return $this;
    }

    /**
    * Gets nextMarker
    *  获取下一页所需的标识符。
    *
    * @return string|null
    */
    public function getNextMarker()
    {
        return $this->container['nextMarker'];
    }

    /**
    * Sets nextMarker
    *
    * @param string|null $nextMarker 获取下一页所需的标识符。
    *
    * @return $this
    */
    public function setNextMarker($nextMarker)
    {
        $this->container['nextMarker'] = $nextMarker;
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

