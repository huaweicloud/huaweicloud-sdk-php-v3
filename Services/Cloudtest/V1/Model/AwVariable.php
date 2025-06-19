<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AwVariable implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AwVariable';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * byOrder  节点顺序
    * currentPermission  当前人员权限
    * description  参数描述
    * dynamicParam  动态参数名称
    * dynamicParamFlag  动态参数标志,默认为false:true代表动态参数；false代表非动态参数
    * functionParams  变量参数（[]:空参、[a]:一参，[a,b]:两参）
    * functionArg  响应提取时要使用什么方法处理参数
    * functionType  响应提取时要使用什么方法处理参数
    * isSensitiveInfo  是否是敏感字段
    * isSensitiveModified  敏感字段是否被修改，不敏感字段不关注此值
    * isOutPut  是否是组合aw的输出参数，只有组合aw下awInstance的aw变量有该字段
    * name  参数名称
    * nodeId  节点id
    * nodeType  0/null-变量节点;1-目录节点
    * oldName  旧名称
    * parentNodeId  父节点id
    * property  属性
    * regex  内置函数枚举
    * sensitiveInfoSetterTime  敏感参数设置时间
    * sensitiveInfoSetterUser  敏感参数设置者名称
    * type  类型
    * variableType  变量类型（0：text，10-16：7个内置函数）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'byOrder' => 'int',
            'currentPermission' => 'string',
            'description' => 'string',
            'dynamicParam' => 'string',
            'dynamicParamFlag' => 'bool',
            'functionParams' => 'string',
            'functionArg' => 'string',
            'functionType' => 'string',
            'isSensitiveInfo' => 'bool',
            'isSensitiveModified' => 'bool',
            'isOutPut' => 'bool',
            'name' => 'string',
            'nodeId' => 'string',
            'nodeType' => 'int',
            'oldName' => 'string',
            'parentNodeId' => 'string',
            'property' => 'string',
            'regex' => 'string',
            'sensitiveInfoSetterTime' => 'string',
            'sensitiveInfoSetterUser' => 'string',
            'type' => 'string',
            'variableType' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * byOrder  节点顺序
    * currentPermission  当前人员权限
    * description  参数描述
    * dynamicParam  动态参数名称
    * dynamicParamFlag  动态参数标志,默认为false:true代表动态参数；false代表非动态参数
    * functionParams  变量参数（[]:空参、[a]:一参，[a,b]:两参）
    * functionArg  响应提取时要使用什么方法处理参数
    * functionType  响应提取时要使用什么方法处理参数
    * isSensitiveInfo  是否是敏感字段
    * isSensitiveModified  敏感字段是否被修改，不敏感字段不关注此值
    * isOutPut  是否是组合aw的输出参数，只有组合aw下awInstance的aw变量有该字段
    * name  参数名称
    * nodeId  节点id
    * nodeType  0/null-变量节点;1-目录节点
    * oldName  旧名称
    * parentNodeId  父节点id
    * property  属性
    * regex  内置函数枚举
    * sensitiveInfoSetterTime  敏感参数设置时间
    * sensitiveInfoSetterUser  敏感参数设置者名称
    * type  类型
    * variableType  变量类型（0：text，10-16：7个内置函数）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'byOrder' => 'int32',
        'currentPermission' => null,
        'description' => null,
        'dynamicParam' => null,
        'dynamicParamFlag' => null,
        'functionParams' => null,
        'functionArg' => null,
        'functionType' => null,
        'isSensitiveInfo' => null,
        'isSensitiveModified' => null,
        'isOutPut' => null,
        'name' => null,
        'nodeId' => null,
        'nodeType' => 'int32',
        'oldName' => null,
        'parentNodeId' => null,
        'property' => null,
        'regex' => null,
        'sensitiveInfoSetterTime' => null,
        'sensitiveInfoSetterUser' => null,
        'type' => null,
        'variableType' => 'int32'
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
    * byOrder  节点顺序
    * currentPermission  当前人员权限
    * description  参数描述
    * dynamicParam  动态参数名称
    * dynamicParamFlag  动态参数标志,默认为false:true代表动态参数；false代表非动态参数
    * functionParams  变量参数（[]:空参、[a]:一参，[a,b]:两参）
    * functionArg  响应提取时要使用什么方法处理参数
    * functionType  响应提取时要使用什么方法处理参数
    * isSensitiveInfo  是否是敏感字段
    * isSensitiveModified  敏感字段是否被修改，不敏感字段不关注此值
    * isOutPut  是否是组合aw的输出参数，只有组合aw下awInstance的aw变量有该字段
    * name  参数名称
    * nodeId  节点id
    * nodeType  0/null-变量节点;1-目录节点
    * oldName  旧名称
    * parentNodeId  父节点id
    * property  属性
    * regex  内置函数枚举
    * sensitiveInfoSetterTime  敏感参数设置时间
    * sensitiveInfoSetterUser  敏感参数设置者名称
    * type  类型
    * variableType  变量类型（0：text，10-16：7个内置函数）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'byOrder' => 'by_order',
            'currentPermission' => 'currentPermission',
            'description' => 'description',
            'dynamicParam' => 'dynamicParam',
            'dynamicParamFlag' => 'dynamicParamFlag',
            'functionParams' => 'functionParams',
            'functionArg' => 'function_arg',
            'functionType' => 'function_type',
            'isSensitiveInfo' => 'isSensitiveInfo',
            'isSensitiveModified' => 'isSensitiveModified',
            'isOutPut' => 'is_out_put',
            'name' => 'name',
            'nodeId' => 'node_id',
            'nodeType' => 'node_type',
            'oldName' => 'oldName',
            'parentNodeId' => 'parent_node_id',
            'property' => 'property',
            'regex' => 'regex',
            'sensitiveInfoSetterTime' => 'sensitiveInfoSetterTime',
            'sensitiveInfoSetterUser' => 'sensitiveInfoSetterUser',
            'type' => 'type',
            'variableType' => 'variableType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * byOrder  节点顺序
    * currentPermission  当前人员权限
    * description  参数描述
    * dynamicParam  动态参数名称
    * dynamicParamFlag  动态参数标志,默认为false:true代表动态参数；false代表非动态参数
    * functionParams  变量参数（[]:空参、[a]:一参，[a,b]:两参）
    * functionArg  响应提取时要使用什么方法处理参数
    * functionType  响应提取时要使用什么方法处理参数
    * isSensitiveInfo  是否是敏感字段
    * isSensitiveModified  敏感字段是否被修改，不敏感字段不关注此值
    * isOutPut  是否是组合aw的输出参数，只有组合aw下awInstance的aw变量有该字段
    * name  参数名称
    * nodeId  节点id
    * nodeType  0/null-变量节点;1-目录节点
    * oldName  旧名称
    * parentNodeId  父节点id
    * property  属性
    * regex  内置函数枚举
    * sensitiveInfoSetterTime  敏感参数设置时间
    * sensitiveInfoSetterUser  敏感参数设置者名称
    * type  类型
    * variableType  变量类型（0：text，10-16：7个内置函数）
    *
    * @var string[]
    */
    protected static $setters = [
            'byOrder' => 'setByOrder',
            'currentPermission' => 'setCurrentPermission',
            'description' => 'setDescription',
            'dynamicParam' => 'setDynamicParam',
            'dynamicParamFlag' => 'setDynamicParamFlag',
            'functionParams' => 'setFunctionParams',
            'functionArg' => 'setFunctionArg',
            'functionType' => 'setFunctionType',
            'isSensitiveInfo' => 'setIsSensitiveInfo',
            'isSensitiveModified' => 'setIsSensitiveModified',
            'isOutPut' => 'setIsOutPut',
            'name' => 'setName',
            'nodeId' => 'setNodeId',
            'nodeType' => 'setNodeType',
            'oldName' => 'setOldName',
            'parentNodeId' => 'setParentNodeId',
            'property' => 'setProperty',
            'regex' => 'setRegex',
            'sensitiveInfoSetterTime' => 'setSensitiveInfoSetterTime',
            'sensitiveInfoSetterUser' => 'setSensitiveInfoSetterUser',
            'type' => 'setType',
            'variableType' => 'setVariableType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * byOrder  节点顺序
    * currentPermission  当前人员权限
    * description  参数描述
    * dynamicParam  动态参数名称
    * dynamicParamFlag  动态参数标志,默认为false:true代表动态参数；false代表非动态参数
    * functionParams  变量参数（[]:空参、[a]:一参，[a,b]:两参）
    * functionArg  响应提取时要使用什么方法处理参数
    * functionType  响应提取时要使用什么方法处理参数
    * isSensitiveInfo  是否是敏感字段
    * isSensitiveModified  敏感字段是否被修改，不敏感字段不关注此值
    * isOutPut  是否是组合aw的输出参数，只有组合aw下awInstance的aw变量有该字段
    * name  参数名称
    * nodeId  节点id
    * nodeType  0/null-变量节点;1-目录节点
    * oldName  旧名称
    * parentNodeId  父节点id
    * property  属性
    * regex  内置函数枚举
    * sensitiveInfoSetterTime  敏感参数设置时间
    * sensitiveInfoSetterUser  敏感参数设置者名称
    * type  类型
    * variableType  变量类型（0：text，10-16：7个内置函数）
    *
    * @var string[]
    */
    protected static $getters = [
            'byOrder' => 'getByOrder',
            'currentPermission' => 'getCurrentPermission',
            'description' => 'getDescription',
            'dynamicParam' => 'getDynamicParam',
            'dynamicParamFlag' => 'getDynamicParamFlag',
            'functionParams' => 'getFunctionParams',
            'functionArg' => 'getFunctionArg',
            'functionType' => 'getFunctionType',
            'isSensitiveInfo' => 'getIsSensitiveInfo',
            'isSensitiveModified' => 'getIsSensitiveModified',
            'isOutPut' => 'getIsOutPut',
            'name' => 'getName',
            'nodeId' => 'getNodeId',
            'nodeType' => 'getNodeType',
            'oldName' => 'getOldName',
            'parentNodeId' => 'getParentNodeId',
            'property' => 'getProperty',
            'regex' => 'getRegex',
            'sensitiveInfoSetterTime' => 'getSensitiveInfoSetterTime',
            'sensitiveInfoSetterUser' => 'getSensitiveInfoSetterUser',
            'type' => 'getType',
            'variableType' => 'getVariableType'
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
    const FUNCTION_TYPE_REGEX = 'REGEX';
    const FUNCTION_TYPE_SUBSTRING = 'SUBSTRING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFunctionTypeAllowableValues()
    {
        return [
            self::FUNCTION_TYPE_REGEX,
            self::FUNCTION_TYPE_SUBSTRING,
        ];
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
        $this->container['byOrder'] = isset($data['byOrder']) ? $data['byOrder'] : null;
        $this->container['currentPermission'] = isset($data['currentPermission']) ? $data['currentPermission'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dynamicParam'] = isset($data['dynamicParam']) ? $data['dynamicParam'] : null;
        $this->container['dynamicParamFlag'] = isset($data['dynamicParamFlag']) ? $data['dynamicParamFlag'] : null;
        $this->container['functionParams'] = isset($data['functionParams']) ? $data['functionParams'] : null;
        $this->container['functionArg'] = isset($data['functionArg']) ? $data['functionArg'] : null;
        $this->container['functionType'] = isset($data['functionType']) ? $data['functionType'] : null;
        $this->container['isSensitiveInfo'] = isset($data['isSensitiveInfo']) ? $data['isSensitiveInfo'] : null;
        $this->container['isSensitiveModified'] = isset($data['isSensitiveModified']) ? $data['isSensitiveModified'] : null;
        $this->container['isOutPut'] = isset($data['isOutPut']) ? $data['isOutPut'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['oldName'] = isset($data['oldName']) ? $data['oldName'] : null;
        $this->container['parentNodeId'] = isset($data['parentNodeId']) ? $data['parentNodeId'] : null;
        $this->container['property'] = isset($data['property']) ? $data['property'] : null;
        $this->container['regex'] = isset($data['regex']) ? $data['regex'] : null;
        $this->container['sensitiveInfoSetterTime'] = isset($data['sensitiveInfoSetterTime']) ? $data['sensitiveInfoSetterTime'] : null;
        $this->container['sensitiveInfoSetterUser'] = isset($data['sensitiveInfoSetterUser']) ? $data['sensitiveInfoSetterUser'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['variableType'] = isset($data['variableType']) ? $data['variableType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getFunctionTypeAllowableValues();
                if (!is_null($this->container['functionType']) && !in_array($this->container['functionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'functionType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets byOrder
    *  节点顺序
    *
    * @return int|null
    */
    public function getByOrder()
    {
        return $this->container['byOrder'];
    }

    /**
    * Sets byOrder
    *
    * @param int|null $byOrder 节点顺序
    *
    * @return $this
    */
    public function setByOrder($byOrder)
    {
        $this->container['byOrder'] = $byOrder;
        return $this;
    }

    /**
    * Gets currentPermission
    *  当前人员权限
    *
    * @return string|null
    */
    public function getCurrentPermission()
    {
        return $this->container['currentPermission'];
    }

    /**
    * Sets currentPermission
    *
    * @param string|null $currentPermission 当前人员权限
    *
    * @return $this
    */
    public function setCurrentPermission($currentPermission)
    {
        $this->container['currentPermission'] = $currentPermission;
        return $this;
    }

    /**
    * Gets description
    *  参数描述
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
    * @param string|null $description 参数描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets dynamicParam
    *  动态参数名称
    *
    * @return string|null
    */
    public function getDynamicParam()
    {
        return $this->container['dynamicParam'];
    }

    /**
    * Sets dynamicParam
    *
    * @param string|null $dynamicParam 动态参数名称
    *
    * @return $this
    */
    public function setDynamicParam($dynamicParam)
    {
        $this->container['dynamicParam'] = $dynamicParam;
        return $this;
    }

    /**
    * Gets dynamicParamFlag
    *  动态参数标志,默认为false:true代表动态参数；false代表非动态参数
    *
    * @return bool|null
    */
    public function getDynamicParamFlag()
    {
        return $this->container['dynamicParamFlag'];
    }

    /**
    * Sets dynamicParamFlag
    *
    * @param bool|null $dynamicParamFlag 动态参数标志,默认为false:true代表动态参数；false代表非动态参数
    *
    * @return $this
    */
    public function setDynamicParamFlag($dynamicParamFlag)
    {
        $this->container['dynamicParamFlag'] = $dynamicParamFlag;
        return $this;
    }

    /**
    * Gets functionParams
    *  变量参数（[]:空参、[a]:一参，[a,b]:两参）
    *
    * @return string|null
    */
    public function getFunctionParams()
    {
        return $this->container['functionParams'];
    }

    /**
    * Sets functionParams
    *
    * @param string|null $functionParams 变量参数（[]:空参、[a]:一参，[a,b]:两参）
    *
    * @return $this
    */
    public function setFunctionParams($functionParams)
    {
        $this->container['functionParams'] = $functionParams;
        return $this;
    }

    /**
    * Gets functionArg
    *  响应提取时要使用什么方法处理参数
    *
    * @return string|null
    */
    public function getFunctionArg()
    {
        return $this->container['functionArg'];
    }

    /**
    * Sets functionArg
    *
    * @param string|null $functionArg 响应提取时要使用什么方法处理参数
    *
    * @return $this
    */
    public function setFunctionArg($functionArg)
    {
        $this->container['functionArg'] = $functionArg;
        return $this;
    }

    /**
    * Gets functionType
    *  响应提取时要使用什么方法处理参数
    *
    * @return string|null
    */
    public function getFunctionType()
    {
        return $this->container['functionType'];
    }

    /**
    * Sets functionType
    *
    * @param string|null $functionType 响应提取时要使用什么方法处理参数
    *
    * @return $this
    */
    public function setFunctionType($functionType)
    {
        $this->container['functionType'] = $functionType;
        return $this;
    }

    /**
    * Gets isSensitiveInfo
    *  是否是敏感字段
    *
    * @return bool|null
    */
    public function getIsSensitiveInfo()
    {
        return $this->container['isSensitiveInfo'];
    }

    /**
    * Sets isSensitiveInfo
    *
    * @param bool|null $isSensitiveInfo 是否是敏感字段
    *
    * @return $this
    */
    public function setIsSensitiveInfo($isSensitiveInfo)
    {
        $this->container['isSensitiveInfo'] = $isSensitiveInfo;
        return $this;
    }

    /**
    * Gets isSensitiveModified
    *  敏感字段是否被修改，不敏感字段不关注此值
    *
    * @return bool|null
    */
    public function getIsSensitiveModified()
    {
        return $this->container['isSensitiveModified'];
    }

    /**
    * Sets isSensitiveModified
    *
    * @param bool|null $isSensitiveModified 敏感字段是否被修改，不敏感字段不关注此值
    *
    * @return $this
    */
    public function setIsSensitiveModified($isSensitiveModified)
    {
        $this->container['isSensitiveModified'] = $isSensitiveModified;
        return $this;
    }

    /**
    * Gets isOutPut
    *  是否是组合aw的输出参数，只有组合aw下awInstance的aw变量有该字段
    *
    * @return bool|null
    */
    public function getIsOutPut()
    {
        return $this->container['isOutPut'];
    }

    /**
    * Sets isOutPut
    *
    * @param bool|null $isOutPut 是否是组合aw的输出参数，只有组合aw下awInstance的aw变量有该字段
    *
    * @return $this
    */
    public function setIsOutPut($isOutPut)
    {
        $this->container['isOutPut'] = $isOutPut;
        return $this;
    }

    /**
    * Gets name
    *  参数名称
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
    * @param string|null $name 参数名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点id
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 节点id
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets nodeType
    *  0/null-变量节点;1-目录节点
    *
    * @return int|null
    */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
    * Sets nodeType
    *
    * @param int|null $nodeType 0/null-变量节点;1-目录节点
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets oldName
    *  旧名称
    *
    * @return string|null
    */
    public function getOldName()
    {
        return $this->container['oldName'];
    }

    /**
    * Sets oldName
    *
    * @param string|null $oldName 旧名称
    *
    * @return $this
    */
    public function setOldName($oldName)
    {
        $this->container['oldName'] = $oldName;
        return $this;
    }

    /**
    * Gets parentNodeId
    *  父节点id
    *
    * @return string|null
    */
    public function getParentNodeId()
    {
        return $this->container['parentNodeId'];
    }

    /**
    * Sets parentNodeId
    *
    * @param string|null $parentNodeId 父节点id
    *
    * @return $this
    */
    public function setParentNodeId($parentNodeId)
    {
        $this->container['parentNodeId'] = $parentNodeId;
        return $this;
    }

    /**
    * Gets property
    *  属性
    *
    * @return string|null
    */
    public function getProperty()
    {
        return $this->container['property'];
    }

    /**
    * Sets property
    *
    * @param string|null $property 属性
    *
    * @return $this
    */
    public function setProperty($property)
    {
        $this->container['property'] = $property;
        return $this;
    }

    /**
    * Gets regex
    *  内置函数枚举
    *
    * @return string|null
    */
    public function getRegex()
    {
        return $this->container['regex'];
    }

    /**
    * Sets regex
    *
    * @param string|null $regex 内置函数枚举
    *
    * @return $this
    */
    public function setRegex($regex)
    {
        $this->container['regex'] = $regex;
        return $this;
    }

    /**
    * Gets sensitiveInfoSetterTime
    *  敏感参数设置时间
    *
    * @return string|null
    */
    public function getSensitiveInfoSetterTime()
    {
        return $this->container['sensitiveInfoSetterTime'];
    }

    /**
    * Sets sensitiveInfoSetterTime
    *
    * @param string|null $sensitiveInfoSetterTime 敏感参数设置时间
    *
    * @return $this
    */
    public function setSensitiveInfoSetterTime($sensitiveInfoSetterTime)
    {
        $this->container['sensitiveInfoSetterTime'] = $sensitiveInfoSetterTime;
        return $this;
    }

    /**
    * Gets sensitiveInfoSetterUser
    *  敏感参数设置者名称
    *
    * @return string|null
    */
    public function getSensitiveInfoSetterUser()
    {
        return $this->container['sensitiveInfoSetterUser'];
    }

    /**
    * Sets sensitiveInfoSetterUser
    *
    * @param string|null $sensitiveInfoSetterUser 敏感参数设置者名称
    *
    * @return $this
    */
    public function setSensitiveInfoSetterUser($sensitiveInfoSetterUser)
    {
        $this->container['sensitiveInfoSetterUser'] = $sensitiveInfoSetterUser;
        return $this;
    }

    /**
    * Gets type
    *  类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets variableType
    *  变量类型（0：text，10-16：7个内置函数）
    *
    * @return int|null
    */
    public function getVariableType()
    {
        return $this->container['variableType'];
    }

    /**
    * Sets variableType
    *
    * @param int|null $variableType 变量类型（0：text，10-16：7个内置函数）
    *
    * @return $this
    */
    public function setVariableType($variableType)
    {
        $this->container['variableType'] = $variableType;
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

