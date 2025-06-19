<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateBasicAwReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateBasicAwReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bodyParamType  body请求体的类型：text(包含JSON，参数内部区分)、form
    * description  描述
    * dftCheckPointList  默认检查点List
    * dftCustomHeader  默认请求头参数对象
    * dftVariableList  定义的变量信息
    * extraInfo  extraInfo
    * groupName  组名
    * name  名称
    * paramTypeAndDftValue  参数类型和参数默认值对应List
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bodyParamType' => 'string',
            'description' => 'string',
            'dftCheckPointList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CheckPoint[]',
            'dftCustomHeader' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[]',
            'dftVariableList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwVariable[]',
            'extraInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ExtraInfo',
            'groupName' => 'string',
            'name' => 'string',
            'paramTypeAndDftValue' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bodyParamType  body请求体的类型：text(包含JSON，参数内部区分)、form
    * description  描述
    * dftCheckPointList  默认检查点List
    * dftCustomHeader  默认请求头参数对象
    * dftVariableList  定义的变量信息
    * extraInfo  extraInfo
    * groupName  组名
    * name  名称
    * paramTypeAndDftValue  参数类型和参数默认值对应List
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bodyParamType' => null,
        'description' => null,
        'dftCheckPointList' => null,
        'dftCustomHeader' => null,
        'dftVariableList' => null,
        'extraInfo' => null,
        'groupName' => null,
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
    * bodyParamType  body请求体的类型：text(包含JSON，参数内部区分)、form
    * description  描述
    * dftCheckPointList  默认检查点List
    * dftCustomHeader  默认请求头参数对象
    * dftVariableList  定义的变量信息
    * extraInfo  extraInfo
    * groupName  组名
    * name  名称
    * paramTypeAndDftValue  参数类型和参数默认值对应List
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bodyParamType' => 'body_param_type',
            'description' => 'description',
            'dftCheckPointList' => 'dft_check_point_list',
            'dftCustomHeader' => 'dft_custom_header',
            'dftVariableList' => 'dft_variable_list',
            'extraInfo' => 'extra_info',
            'groupName' => 'group_name',
            'name' => 'name',
            'paramTypeAndDftValue' => 'param_type_and_dft_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bodyParamType  body请求体的类型：text(包含JSON，参数内部区分)、form
    * description  描述
    * dftCheckPointList  默认检查点List
    * dftCustomHeader  默认请求头参数对象
    * dftVariableList  定义的变量信息
    * extraInfo  extraInfo
    * groupName  组名
    * name  名称
    * paramTypeAndDftValue  参数类型和参数默认值对应List
    *
    * @var string[]
    */
    protected static $setters = [
            'bodyParamType' => 'setBodyParamType',
            'description' => 'setDescription',
            'dftCheckPointList' => 'setDftCheckPointList',
            'dftCustomHeader' => 'setDftCustomHeader',
            'dftVariableList' => 'setDftVariableList',
            'extraInfo' => 'setExtraInfo',
            'groupName' => 'setGroupName',
            'name' => 'setName',
            'paramTypeAndDftValue' => 'setParamTypeAndDftValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bodyParamType  body请求体的类型：text(包含JSON，参数内部区分)、form
    * description  描述
    * dftCheckPointList  默认检查点List
    * dftCustomHeader  默认请求头参数对象
    * dftVariableList  定义的变量信息
    * extraInfo  extraInfo
    * groupName  组名
    * name  名称
    * paramTypeAndDftValue  参数类型和参数默认值对应List
    *
    * @var string[]
    */
    protected static $getters = [
            'bodyParamType' => 'getBodyParamType',
            'description' => 'getDescription',
            'dftCheckPointList' => 'getDftCheckPointList',
            'dftCustomHeader' => 'getDftCustomHeader',
            'dftVariableList' => 'getDftVariableList',
            'extraInfo' => 'getExtraInfo',
            'groupName' => 'getGroupName',
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
        $this->container['bodyParamType'] = isset($data['bodyParamType']) ? $data['bodyParamType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dftCheckPointList'] = isset($data['dftCheckPointList']) ? $data['dftCheckPointList'] : null;
        $this->container['dftCustomHeader'] = isset($data['dftCustomHeader']) ? $data['dftCustomHeader'] : null;
        $this->container['dftVariableList'] = isset($data['dftVariableList']) ? $data['dftVariableList'] : null;
        $this->container['extraInfo'] = isset($data['extraInfo']) ? $data['extraInfo'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
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
    * Gets bodyParamType
    *  body请求体的类型：text(包含JSON，参数内部区分)、form
    *
    * @return string|null
    */
    public function getBodyParamType()
    {
        return $this->container['bodyParamType'];
    }

    /**
    * Sets bodyParamType
    *
    * @param string|null $bodyParamType body请求体的类型：text(包含JSON，参数内部区分)、form
    *
    * @return $this
    */
    public function setBodyParamType($bodyParamType)
    {
        $this->container['bodyParamType'] = $bodyParamType;
        return $this;
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
    *  默认请求头参数对象
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
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[]|null $dftCustomHeader 默认请求头参数对象
    *
    * @return $this
    */
    public function setDftCustomHeader($dftCustomHeader)
    {
        $this->container['dftCustomHeader'] = $dftCustomHeader;
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
    * Gets extraInfo
    *  extraInfo
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ExtraInfo|null
    */
    public function getExtraInfo()
    {
        return $this->container['extraInfo'];
    }

    /**
    * Sets extraInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ExtraInfo|null $extraInfo extraInfo
    *
    * @return $this
    */
    public function setExtraInfo($extraInfo)
    {
        $this->container['extraInfo'] = $extraInfo;
        return $this;
    }

    /**
    * Gets groupName
    *  组名
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 组名
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
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

