<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateBasicAwReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateBasicAwReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  描述
    * dftCheckPointList  默认检查点List
    * dftCustomHeader  AW参数类list
    * dftRetryInterval  重试间隔时间 (ms) 为空表示不等待(目前内部使用)
    * dftRetryTimes  重试次数(目前内部使用)
    * dftVariableList  定义的变量信息
    * name  名称
    * paramTypeAndDftValue  参数类型和参数默认值对应List
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'dftCheckPointList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CheckPoint[]',
            'dftCustomHeader' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[]',
            'dftRetryInterval' => 'string',
            'dftRetryTimes' => 'string',
            'dftVariableList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwVariable[]',
            'name' => 'string',
            'paramTypeAndDftValue' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  描述
    * dftCheckPointList  默认检查点List
    * dftCustomHeader  AW参数类list
    * dftRetryInterval  重试间隔时间 (ms) 为空表示不等待(目前内部使用)
    * dftRetryTimes  重试次数(目前内部使用)
    * dftVariableList  定义的变量信息
    * name  名称
    * paramTypeAndDftValue  参数类型和参数默认值对应List
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'dftCheckPointList' => null,
        'dftCustomHeader' => null,
        'dftRetryInterval' => null,
        'dftRetryTimes' => null,
        'dftVariableList' => null,
        'name' => null,
        'paramTypeAndDftValue' => null
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
    * description  描述
    * dftCheckPointList  默认检查点List
    * dftCustomHeader  AW参数类list
    * dftRetryInterval  重试间隔时间 (ms) 为空表示不等待(目前内部使用)
    * dftRetryTimes  重试次数(目前内部使用)
    * dftVariableList  定义的变量信息
    * name  名称
    * paramTypeAndDftValue  参数类型和参数默认值对应List
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'dftCheckPointList' => 'dft_check_point_list',
            'dftCustomHeader' => 'dft_custom_header',
            'dftRetryInterval' => 'dft_retry_interval',
            'dftRetryTimes' => 'dft_retry_times',
            'dftVariableList' => 'dft_variable_list',
            'name' => 'name',
            'paramTypeAndDftValue' => 'param_type_and_dft_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  描述
    * dftCheckPointList  默认检查点List
    * dftCustomHeader  AW参数类list
    * dftRetryInterval  重试间隔时间 (ms) 为空表示不等待(目前内部使用)
    * dftRetryTimes  重试次数(目前内部使用)
    * dftVariableList  定义的变量信息
    * name  名称
    * paramTypeAndDftValue  参数类型和参数默认值对应List
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'dftCheckPointList' => 'setDftCheckPointList',
            'dftCustomHeader' => 'setDftCustomHeader',
            'dftRetryInterval' => 'setDftRetryInterval',
            'dftRetryTimes' => 'setDftRetryTimes',
            'dftVariableList' => 'setDftVariableList',
            'name' => 'setName',
            'paramTypeAndDftValue' => 'setParamTypeAndDftValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  描述
    * dftCheckPointList  默认检查点List
    * dftCustomHeader  AW参数类list
    * dftRetryInterval  重试间隔时间 (ms) 为空表示不等待(目前内部使用)
    * dftRetryTimes  重试次数(目前内部使用)
    * dftVariableList  定义的变量信息
    * name  名称
    * paramTypeAndDftValue  参数类型和参数默认值对应List
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'dftCheckPointList' => 'getDftCheckPointList',
            'dftCustomHeader' => 'getDftCustomHeader',
            'dftRetryInterval' => 'getDftRetryInterval',
            'dftRetryTimes' => 'getDftRetryTimes',
            'dftVariableList' => 'getDftVariableList',
            'name' => 'getName',
            'paramTypeAndDftValue' => 'getParamTypeAndDftValue'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dftCheckPointList'] = isset($data['dftCheckPointList']) ? $data['dftCheckPointList'] : null;
        $this->container['dftCustomHeader'] = isset($data['dftCustomHeader']) ? $data['dftCustomHeader'] : null;
        $this->container['dftRetryInterval'] = isset($data['dftRetryInterval']) ? $data['dftRetryInterval'] : null;
        $this->container['dftRetryTimes'] = isset($data['dftRetryTimes']) ? $data['dftRetryTimes'] : null;
        $this->container['dftVariableList'] = isset($data['dftVariableList']) ? $data['dftVariableList'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['paramTypeAndDftValue'] = isset($data['paramTypeAndDftValue']) ? $data['paramTypeAndDftValue'] : null;
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
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets dftCheckPointList
    *  默认检查点List
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CheckPoint[]|null
    */
    public function getDftCheckPointList()
    {
        return $this->container['dftCheckPointList'];
    }

    /**
    * Sets dftCheckPointList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CheckPoint[]|null $dftCheckPointList 默认检查点List
    *
    * @return $this
    */
    public function setDftCheckPointList($dftCheckPointList)
    {
        $this->container['dftCheckPointList'] = $dftCheckPointList;
        return $this;
    }

    /**
    * Gets dftCustomHeader
    *  AW参数类list
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[]|null
    */
    public function getDftCustomHeader()
    {
        return $this->container['dftCustomHeader'];
    }

    /**
    * Sets dftCustomHeader
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[]|null $dftCustomHeader AW参数类list
    *
    * @return $this
    */
    public function setDftCustomHeader($dftCustomHeader)
    {
        $this->container['dftCustomHeader'] = $dftCustomHeader;
        return $this;
    }

    /**
    * Gets dftRetryInterval
    *  重试间隔时间 (ms) 为空表示不等待(目前内部使用)
    *
    * @return string|null
    */
    public function getDftRetryInterval()
    {
        return $this->container['dftRetryInterval'];
    }

    /**
    * Sets dftRetryInterval
    *
    * @param string|null $dftRetryInterval 重试间隔时间 (ms) 为空表示不等待(目前内部使用)
    *
    * @return $this
    */
    public function setDftRetryInterval($dftRetryInterval)
    {
        $this->container['dftRetryInterval'] = $dftRetryInterval;
        return $this;
    }

    /**
    * Gets dftRetryTimes
    *  重试次数(目前内部使用)
    *
    * @return string|null
    */
    public function getDftRetryTimes()
    {
        return $this->container['dftRetryTimes'];
    }

    /**
    * Sets dftRetryTimes
    *
    * @param string|null $dftRetryTimes 重试次数(目前内部使用)
    *
    * @return $this
    */
    public function setDftRetryTimes($dftRetryTimes)
    {
        $this->container['dftRetryTimes'] = $dftRetryTimes;
        return $this;
    }

    /**
    * Gets dftVariableList
    *  定义的变量信息
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AwVariable[]|null
    */
    public function getDftVariableList()
    {
        return $this->container['dftVariableList'];
    }

    /**
    * Sets dftVariableList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AwVariable[]|null $dftVariableList 定义的变量信息
    *
    * @return $this
    */
    public function setDftVariableList($dftVariableList)
    {
        $this->container['dftVariableList'] = $dftVariableList;
        return $this;
    }

    /**
    * Gets name
    *  名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets paramTypeAndDftValue
    *  参数类型和参数默认值对应List
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[]|null
    */
    public function getParamTypeAndDftValue()
    {
        return $this->container['paramTypeAndDftValue'];
    }

    /**
    * Sets paramTypeAndDftValue
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[]|null $paramTypeAndDftValue 参数类型和参数默认值对应List
    *
    * @return $this
    */
    public function setParamTypeAndDftValue($paramTypeAndDftValue)
    {
        $this->container['paramTypeAndDftValue'] = $paramTypeAndDftValue;
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

