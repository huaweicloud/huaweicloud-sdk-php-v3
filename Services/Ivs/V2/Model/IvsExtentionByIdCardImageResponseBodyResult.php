<?php

namespace HuaweiCloud\SDK\Ivs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IvsExtentionByIdCardImageResponseBodyResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IvsExtentionByIdCardImageResponseBody_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceName  子服务名称。
    * count  成功的结果数量，与resp_data字段对应。
    * respData  请求列表，用于支持批量调用。目前暂时只支持单个数据查询。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceName' => 'string',
            'count' => 'int',
            'respData' => '\HuaweiCloud\SDK\Ivs\V2\Model\ExtentionRespDataByIdCardImage[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceName  子服务名称。
    * count  成功的结果数量，与resp_data字段对应。
    * respData  请求列表，用于支持批量调用。目前暂时只支持单个数据查询。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceName' => null,
        'count' => 'int32',
        'respData' => null
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
    * serviceName  子服务名称。
    * count  成功的结果数量，与resp_data字段对应。
    * respData  请求列表，用于支持批量调用。目前暂时只支持单个数据查询。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceName' => 'service_name',
            'count' => 'count',
            'respData' => 'resp_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceName  子服务名称。
    * count  成功的结果数量，与resp_data字段对应。
    * respData  请求列表，用于支持批量调用。目前暂时只支持单个数据查询。
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceName' => 'setServiceName',
            'count' => 'setCount',
            'respData' => 'setRespData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceName  子服务名称。
    * count  成功的结果数量，与resp_data字段对应。
    * respData  请求列表，用于支持批量调用。目前暂时只支持单个数据查询。
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceName' => 'getServiceName',
            'count' => 'getCount',
            'respData' => 'getRespData'
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
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['respData'] = isset($data['respData']) ? $data['respData'] : null;
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
    * Gets serviceName
    *  子服务名称。
    *
    * @return string|null
    */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
    * Sets serviceName
    *
    * @param string|null $serviceName 子服务名称。
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
        return $this;
    }

    /**
    * Gets count
    *  成功的结果数量，与resp_data字段对应。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 成功的结果数量，与resp_data字段对应。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets respData
    *  请求列表，用于支持批量调用。目前暂时只支持单个数据查询。
    *
    * @return \HuaweiCloud\SDK\Ivs\V2\Model\ExtentionRespDataByIdCardImage[]|null
    */
    public function getRespData()
    {
        return $this->container['respData'];
    }

    /**
    * Sets respData
    *
    * @param \HuaweiCloud\SDK\Ivs\V2\Model\ExtentionRespDataByIdCardImage[]|null $respData 请求列表，用于支持批量调用。目前暂时只支持单个数据查询。
    *
    * @return $this
    */
    public function setRespData($respData)
    {
        $this->container['respData'] = $respData;
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

