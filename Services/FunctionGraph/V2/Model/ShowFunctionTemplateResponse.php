<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowFunctionTemplateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowFunctionTemplateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  模板id
    * type  模板类型
    * title  模板标题
    * templateName  模板名称
    * description  模板描述
    * runtime  模板执行运行时
    * handler  模板函数执行入口
    * codeType  代码类型
    * code  代码文件
    * timeout  函数执行超时时间，超时函数将被强行停止，范围3～259200秒。
    * memorySize  内存大小
    * triggerMetadataList  触发信息列表
    * tempDetail  tempDetail
    * userData  用户数据
    * encryptedUserData  加密用户数据
    * dependencies  模板所需依赖列表
    * scene  模板使用场景
    * service  模板关联云服务
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'type' => 'int',
            'title' => 'string',
            'templateName' => 'string',
            'description' => 'string',
            'runtime' => 'string',
            'handler' => 'string',
            'codeType' => 'string',
            'code' => 'string',
            'timeout' => 'int',
            'memorySize' => 'int',
            'triggerMetadataList' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\TriggerMetadataList[]',
            'tempDetail' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\TempDetail',
            'userData' => 'string',
            'encryptedUserData' => 'string',
            'dependencies' => 'string[]',
            'scene' => 'string',
            'service' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  模板id
    * type  模板类型
    * title  模板标题
    * templateName  模板名称
    * description  模板描述
    * runtime  模板执行运行时
    * handler  模板函数执行入口
    * codeType  代码类型
    * code  代码文件
    * timeout  函数执行超时时间，超时函数将被强行停止，范围3～259200秒。
    * memorySize  内存大小
    * triggerMetadataList  触发信息列表
    * tempDetail  tempDetail
    * userData  用户数据
    * encryptedUserData  加密用户数据
    * dependencies  模板所需依赖列表
    * scene  模板使用场景
    * service  模板关联云服务
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'type' => null,
        'title' => null,
        'templateName' => null,
        'description' => null,
        'runtime' => null,
        'handler' => null,
        'codeType' => null,
        'code' => null,
        'timeout' => null,
        'memorySize' => null,
        'triggerMetadataList' => null,
        'tempDetail' => null,
        'userData' => null,
        'encryptedUserData' => null,
        'dependencies' => null,
        'scene' => null,
        'service' => null
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
    * id  模板id
    * type  模板类型
    * title  模板标题
    * templateName  模板名称
    * description  模板描述
    * runtime  模板执行运行时
    * handler  模板函数执行入口
    * codeType  代码类型
    * code  代码文件
    * timeout  函数执行超时时间，超时函数将被强行停止，范围3～259200秒。
    * memorySize  内存大小
    * triggerMetadataList  触发信息列表
    * tempDetail  tempDetail
    * userData  用户数据
    * encryptedUserData  加密用户数据
    * dependencies  模板所需依赖列表
    * scene  模板使用场景
    * service  模板关联云服务
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'type' => 'type',
            'title' => 'title',
            'templateName' => 'template_name',
            'description' => 'description',
            'runtime' => 'runtime',
            'handler' => 'handler',
            'codeType' => 'code_type',
            'code' => 'code',
            'timeout' => 'timeout',
            'memorySize' => 'memory_size',
            'triggerMetadataList' => 'trigger_metadata_list',
            'tempDetail' => 'temp_detail',
            'userData' => 'user_data',
            'encryptedUserData' => 'encrypted_user_data',
            'dependencies' => 'dependencies',
            'scene' => 'scene',
            'service' => 'service'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  模板id
    * type  模板类型
    * title  模板标题
    * templateName  模板名称
    * description  模板描述
    * runtime  模板执行运行时
    * handler  模板函数执行入口
    * codeType  代码类型
    * code  代码文件
    * timeout  函数执行超时时间，超时函数将被强行停止，范围3～259200秒。
    * memorySize  内存大小
    * triggerMetadataList  触发信息列表
    * tempDetail  tempDetail
    * userData  用户数据
    * encryptedUserData  加密用户数据
    * dependencies  模板所需依赖列表
    * scene  模板使用场景
    * service  模板关联云服务
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'type' => 'setType',
            'title' => 'setTitle',
            'templateName' => 'setTemplateName',
            'description' => 'setDescription',
            'runtime' => 'setRuntime',
            'handler' => 'setHandler',
            'codeType' => 'setCodeType',
            'code' => 'setCode',
            'timeout' => 'setTimeout',
            'memorySize' => 'setMemorySize',
            'triggerMetadataList' => 'setTriggerMetadataList',
            'tempDetail' => 'setTempDetail',
            'userData' => 'setUserData',
            'encryptedUserData' => 'setEncryptedUserData',
            'dependencies' => 'setDependencies',
            'scene' => 'setScene',
            'service' => 'setService'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  模板id
    * type  模板类型
    * title  模板标题
    * templateName  模板名称
    * description  模板描述
    * runtime  模板执行运行时
    * handler  模板函数执行入口
    * codeType  代码类型
    * code  代码文件
    * timeout  函数执行超时时间，超时函数将被强行停止，范围3～259200秒。
    * memorySize  内存大小
    * triggerMetadataList  触发信息列表
    * tempDetail  tempDetail
    * userData  用户数据
    * encryptedUserData  加密用户数据
    * dependencies  模板所需依赖列表
    * scene  模板使用场景
    * service  模板关联云服务
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'type' => 'getType',
            'title' => 'getTitle',
            'templateName' => 'getTemplateName',
            'description' => 'getDescription',
            'runtime' => 'getRuntime',
            'handler' => 'getHandler',
            'codeType' => 'getCodeType',
            'code' => 'getCode',
            'timeout' => 'getTimeout',
            'memorySize' => 'getMemorySize',
            'triggerMetadataList' => 'getTriggerMetadataList',
            'tempDetail' => 'getTempDetail',
            'userData' => 'getUserData',
            'encryptedUserData' => 'getEncryptedUserData',
            'dependencies' => 'getDependencies',
            'scene' => 'getScene',
            'service' => 'getService'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
        $this->container['handler'] = isset($data['handler']) ? $data['handler'] : null;
        $this->container['codeType'] = isset($data['codeType']) ? $data['codeType'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['memorySize'] = isset($data['memorySize']) ? $data['memorySize'] : null;
        $this->container['triggerMetadataList'] = isset($data['triggerMetadataList']) ? $data['triggerMetadataList'] : null;
        $this->container['tempDetail'] = isset($data['tempDetail']) ? $data['tempDetail'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
        $this->container['encryptedUserData'] = isset($data['encryptedUserData']) ? $data['encryptedUserData'] : null;
        $this->container['dependencies'] = isset($data['dependencies']) ? $data['dependencies'] : null;
        $this->container['scene'] = isset($data['scene']) ? $data['scene'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
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
    * Gets id
    *  模板id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 模板id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets type
    *  模板类型
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type 模板类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets title
    *  模板标题
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 模板标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets templateName
    *  模板名称
    *
    * @return string|null
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string|null $templateName 模板名称
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets description
    *  模板描述
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
    * @param string|null $description 模板描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets runtime
    *  模板执行运行时
    *
    * @return string|null
    */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
    * Sets runtime
    *
    * @param string|null $runtime 模板执行运行时
    *
    * @return $this
    */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;
        return $this;
    }

    /**
    * Gets handler
    *  模板函数执行入口
    *
    * @return string|null
    */
    public function getHandler()
    {
        return $this->container['handler'];
    }

    /**
    * Sets handler
    *
    * @param string|null $handler 模板函数执行入口
    *
    * @return $this
    */
    public function setHandler($handler)
    {
        $this->container['handler'] = $handler;
        return $this;
    }

    /**
    * Gets codeType
    *  代码类型
    *
    * @return string|null
    */
    public function getCodeType()
    {
        return $this->container['codeType'];
    }

    /**
    * Sets codeType
    *
    * @param string|null $codeType 代码类型
    *
    * @return $this
    */
    public function setCodeType($codeType)
    {
        $this->container['codeType'] = $codeType;
        return $this;
    }

    /**
    * Gets code
    *  代码文件
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 代码文件
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets timeout
    *  函数执行超时时间，超时函数将被强行停止，范围3～259200秒。
    *
    * @return int|null
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int|null $timeout 函数执行超时时间，超时函数将被强行停止，范围3～259200秒。
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets memorySize
    *  内存大小
    *
    * @return int|null
    */
    public function getMemorySize()
    {
        return $this->container['memorySize'];
    }

    /**
    * Sets memorySize
    *
    * @param int|null $memorySize 内存大小
    *
    * @return $this
    */
    public function setMemorySize($memorySize)
    {
        $this->container['memorySize'] = $memorySize;
        return $this;
    }

    /**
    * Gets triggerMetadataList
    *  触发信息列表
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\TriggerMetadataList[]|null
    */
    public function getTriggerMetadataList()
    {
        return $this->container['triggerMetadataList'];
    }

    /**
    * Sets triggerMetadataList
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\TriggerMetadataList[]|null $triggerMetadataList 触发信息列表
    *
    * @return $this
    */
    public function setTriggerMetadataList($triggerMetadataList)
    {
        $this->container['triggerMetadataList'] = $triggerMetadataList;
        return $this;
    }

    /**
    * Gets tempDetail
    *  tempDetail
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\TempDetail|null
    */
    public function getTempDetail()
    {
        return $this->container['tempDetail'];
    }

    /**
    * Sets tempDetail
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\TempDetail|null $tempDetail tempDetail
    *
    * @return $this
    */
    public function setTempDetail($tempDetail)
    {
        $this->container['tempDetail'] = $tempDetail;
        return $this;
    }

    /**
    * Gets userData
    *  用户数据
    *
    * @return string|null
    */
    public function getUserData()
    {
        return $this->container['userData'];
    }

    /**
    * Sets userData
    *
    * @param string|null $userData 用户数据
    *
    * @return $this
    */
    public function setUserData($userData)
    {
        $this->container['userData'] = $userData;
        return $this;
    }

    /**
    * Gets encryptedUserData
    *  加密用户数据
    *
    * @return string|null
    */
    public function getEncryptedUserData()
    {
        return $this->container['encryptedUserData'];
    }

    /**
    * Sets encryptedUserData
    *
    * @param string|null $encryptedUserData 加密用户数据
    *
    * @return $this
    */
    public function setEncryptedUserData($encryptedUserData)
    {
        $this->container['encryptedUserData'] = $encryptedUserData;
        return $this;
    }

    /**
    * Gets dependencies
    *  模板所需依赖列表
    *
    * @return string[]|null
    */
    public function getDependencies()
    {
        return $this->container['dependencies'];
    }

    /**
    * Sets dependencies
    *
    * @param string[]|null $dependencies 模板所需依赖列表
    *
    * @return $this
    */
    public function setDependencies($dependencies)
    {
        $this->container['dependencies'] = $dependencies;
        return $this;
    }

    /**
    * Gets scene
    *  模板使用场景
    *
    * @return string|null
    */
    public function getScene()
    {
        return $this->container['scene'];
    }

    /**
    * Sets scene
    *
    * @param string|null $scene 模板使用场景
    *
    * @return $this
    */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;
        return $this;
    }

    /**
    * Gets service
    *  模板关联云服务
    *
    * @return string|null
    */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
    * Sets service
    *
    * @param string|null $service 模板关联云服务
    *
    * @return $this
    */
    public function setService($service)
    {
        $this->container['service'] = $service;
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

