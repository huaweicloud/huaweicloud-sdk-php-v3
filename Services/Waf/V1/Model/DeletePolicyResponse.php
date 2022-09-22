<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeletePolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeletePolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  防护策略id
    * name  防护策略名
    * level  Web基础防护等级   - 1 : 宽松，防护粒度较粗，只拦截攻击特征比较明显的请求。当误报情况较多的场景下，建议选择“宽松”模式。   - 2：中等，默认为“中等”防护模式，满足大多数场景下的Web防护需求。   - 3：严格，防护粒度最精细，可以拦截具有复杂的绕过特征的攻击请求，例如jolokia网络攻击、探测CGI漏洞、探测 Druid SQL注入攻击
    * fullDetection  精准防护中的检测模式。   - false：短路检测，当用户的请求符合精准防护中的拦截条件时，便立刻终止检测，进行拦截   - true ：全检测，请求符合精准防护中的拦截条件时，全检测不会立即拦截，会继续执行其他防护的检测，最后进行拦截。
    * robotAction  robotAction
    * action  action
    * options  options
    * modulexOptions  智能访问控制防护项相关配置信息，目前该特性还处于公测阶段，只有部分局点支持该特性
    * hosts  与防护策略绑定的防护的域名id数组
    * bindHost  与防护策略绑定的防护的域名信息数组，相对于hosts字段，包含更详细的域名信息
    * extend  扩展字段，用于存放Web基础防护中一些开关配置等信息
    * timestamp  创建防护策略的时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'level' => 'int',
            'fullDetection' => 'bool',
            'robotAction' => '\HuaweiCloud\SDK\Waf\V1\Model\Action',
            'action' => '\HuaweiCloud\SDK\Waf\V1\Model\PolicyAction',
            'options' => '\HuaweiCloud\SDK\Waf\V1\Model\PolicyOption',
            'modulexOptions' => 'map[string,object]',
            'hosts' => 'string[]',
            'bindHost' => '\HuaweiCloud\SDK\Waf\V1\Model\BindHost[]',
            'extend' => 'map[string,string]',
            'timestamp' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  防护策略id
    * name  防护策略名
    * level  Web基础防护等级   - 1 : 宽松，防护粒度较粗，只拦截攻击特征比较明显的请求。当误报情况较多的场景下，建议选择“宽松”模式。   - 2：中等，默认为“中等”防护模式，满足大多数场景下的Web防护需求。   - 3：严格，防护粒度最精细，可以拦截具有复杂的绕过特征的攻击请求，例如jolokia网络攻击、探测CGI漏洞、探测 Druid SQL注入攻击
    * fullDetection  精准防护中的检测模式。   - false：短路检测，当用户的请求符合精准防护中的拦截条件时，便立刻终止检测，进行拦截   - true ：全检测，请求符合精准防护中的拦截条件时，全检测不会立即拦截，会继续执行其他防护的检测，最后进行拦截。
    * robotAction  robotAction
    * action  action
    * options  options
    * modulexOptions  智能访问控制防护项相关配置信息，目前该特性还处于公测阶段，只有部分局点支持该特性
    * hosts  与防护策略绑定的防护的域名id数组
    * bindHost  与防护策略绑定的防护的域名信息数组，相对于hosts字段，包含更详细的域名信息
    * extend  扩展字段，用于存放Web基础防护中一些开关配置等信息
    * timestamp  创建防护策略的时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'level' => null,
        'fullDetection' => null,
        'robotAction' => null,
        'action' => null,
        'options' => null,
        'modulexOptions' => null,
        'hosts' => null,
        'bindHost' => null,
        'extend' => null,
        'timestamp' => 'int64'
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
    * id  防护策略id
    * name  防护策略名
    * level  Web基础防护等级   - 1 : 宽松，防护粒度较粗，只拦截攻击特征比较明显的请求。当误报情况较多的场景下，建议选择“宽松”模式。   - 2：中等，默认为“中等”防护模式，满足大多数场景下的Web防护需求。   - 3：严格，防护粒度最精细，可以拦截具有复杂的绕过特征的攻击请求，例如jolokia网络攻击、探测CGI漏洞、探测 Druid SQL注入攻击
    * fullDetection  精准防护中的检测模式。   - false：短路检测，当用户的请求符合精准防护中的拦截条件时，便立刻终止检测，进行拦截   - true ：全检测，请求符合精准防护中的拦截条件时，全检测不会立即拦截，会继续执行其他防护的检测，最后进行拦截。
    * robotAction  robotAction
    * action  action
    * options  options
    * modulexOptions  智能访问控制防护项相关配置信息，目前该特性还处于公测阶段，只有部分局点支持该特性
    * hosts  与防护策略绑定的防护的域名id数组
    * bindHost  与防护策略绑定的防护的域名信息数组，相对于hosts字段，包含更详细的域名信息
    * extend  扩展字段，用于存放Web基础防护中一些开关配置等信息
    * timestamp  创建防护策略的时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'level' => 'level',
            'fullDetection' => 'full_detection',
            'robotAction' => 'robot_action',
            'action' => 'action',
            'options' => 'options',
            'modulexOptions' => 'modulex_options',
            'hosts' => 'hosts',
            'bindHost' => 'bind_host',
            'extend' => 'extend',
            'timestamp' => 'timestamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  防护策略id
    * name  防护策略名
    * level  Web基础防护等级   - 1 : 宽松，防护粒度较粗，只拦截攻击特征比较明显的请求。当误报情况较多的场景下，建议选择“宽松”模式。   - 2：中等，默认为“中等”防护模式，满足大多数场景下的Web防护需求。   - 3：严格，防护粒度最精细，可以拦截具有复杂的绕过特征的攻击请求，例如jolokia网络攻击、探测CGI漏洞、探测 Druid SQL注入攻击
    * fullDetection  精准防护中的检测模式。   - false：短路检测，当用户的请求符合精准防护中的拦截条件时，便立刻终止检测，进行拦截   - true ：全检测，请求符合精准防护中的拦截条件时，全检测不会立即拦截，会继续执行其他防护的检测，最后进行拦截。
    * robotAction  robotAction
    * action  action
    * options  options
    * modulexOptions  智能访问控制防护项相关配置信息，目前该特性还处于公测阶段，只有部分局点支持该特性
    * hosts  与防护策略绑定的防护的域名id数组
    * bindHost  与防护策略绑定的防护的域名信息数组，相对于hosts字段，包含更详细的域名信息
    * extend  扩展字段，用于存放Web基础防护中一些开关配置等信息
    * timestamp  创建防护策略的时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'level' => 'setLevel',
            'fullDetection' => 'setFullDetection',
            'robotAction' => 'setRobotAction',
            'action' => 'setAction',
            'options' => 'setOptions',
            'modulexOptions' => 'setModulexOptions',
            'hosts' => 'setHosts',
            'bindHost' => 'setBindHost',
            'extend' => 'setExtend',
            'timestamp' => 'setTimestamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  防护策略id
    * name  防护策略名
    * level  Web基础防护等级   - 1 : 宽松，防护粒度较粗，只拦截攻击特征比较明显的请求。当误报情况较多的场景下，建议选择“宽松”模式。   - 2：中等，默认为“中等”防护模式，满足大多数场景下的Web防护需求。   - 3：严格，防护粒度最精细，可以拦截具有复杂的绕过特征的攻击请求，例如jolokia网络攻击、探测CGI漏洞、探测 Druid SQL注入攻击
    * fullDetection  精准防护中的检测模式。   - false：短路检测，当用户的请求符合精准防护中的拦截条件时，便立刻终止检测，进行拦截   - true ：全检测，请求符合精准防护中的拦截条件时，全检测不会立即拦截，会继续执行其他防护的检测，最后进行拦截。
    * robotAction  robotAction
    * action  action
    * options  options
    * modulexOptions  智能访问控制防护项相关配置信息，目前该特性还处于公测阶段，只有部分局点支持该特性
    * hosts  与防护策略绑定的防护的域名id数组
    * bindHost  与防护策略绑定的防护的域名信息数组，相对于hosts字段，包含更详细的域名信息
    * extend  扩展字段，用于存放Web基础防护中一些开关配置等信息
    * timestamp  创建防护策略的时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'level' => 'getLevel',
            'fullDetection' => 'getFullDetection',
            'robotAction' => 'getRobotAction',
            'action' => 'getAction',
            'options' => 'getOptions',
            'modulexOptions' => 'getModulexOptions',
            'hosts' => 'getHosts',
            'bindHost' => 'getBindHost',
            'extend' => 'getExtend',
            'timestamp' => 'getTimestamp'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['fullDetection'] = isset($data['fullDetection']) ? $data['fullDetection'] : null;
        $this->container['robotAction'] = isset($data['robotAction']) ? $data['robotAction'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['modulexOptions'] = isset($data['modulexOptions']) ? $data['modulexOptions'] : null;
        $this->container['hosts'] = isset($data['hosts']) ? $data['hosts'] : null;
        $this->container['bindHost'] = isset($data['bindHost']) ? $data['bindHost'] : null;
        $this->container['extend'] = isset($data['extend']) ? $data['extend'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
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
    *  防护策略id
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
    * @param string|null $id 防护策略id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  防护策略名
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
    * @param string|null $name 防护策略名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets level
    *  Web基础防护等级   - 1 : 宽松，防护粒度较粗，只拦截攻击特征比较明显的请求。当误报情况较多的场景下，建议选择“宽松”模式。   - 2：中等，默认为“中等”防护模式，满足大多数场景下的Web防护需求。   - 3：严格，防护粒度最精细，可以拦截具有复杂的绕过特征的攻击请求，例如jolokia网络攻击、探测CGI漏洞、探测 Druid SQL注入攻击
    *
    * @return int|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param int|null $level Web基础防护等级   - 1 : 宽松，防护粒度较粗，只拦截攻击特征比较明显的请求。当误报情况较多的场景下，建议选择“宽松”模式。   - 2：中等，默认为“中等”防护模式，满足大多数场景下的Web防护需求。   - 3：严格，防护粒度最精细，可以拦截具有复杂的绕过特征的攻击请求，例如jolokia网络攻击、探测CGI漏洞、探测 Druid SQL注入攻击
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets fullDetection
    *  精准防护中的检测模式。   - false：短路检测，当用户的请求符合精准防护中的拦截条件时，便立刻终止检测，进行拦截   - true ：全检测，请求符合精准防护中的拦截条件时，全检测不会立即拦截，会继续执行其他防护的检测，最后进行拦截。
    *
    * @return bool|null
    */
    public function getFullDetection()
    {
        return $this->container['fullDetection'];
    }

    /**
    * Sets fullDetection
    *
    * @param bool|null $fullDetection 精准防护中的检测模式。   - false：短路检测，当用户的请求符合精准防护中的拦截条件时，便立刻终止检测，进行拦截   - true ：全检测，请求符合精准防护中的拦截条件时，全检测不会立即拦截，会继续执行其他防护的检测，最后进行拦截。
    *
    * @return $this
    */
    public function setFullDetection($fullDetection)
    {
        $this->container['fullDetection'] = $fullDetection;
        return $this;
    }

    /**
    * Gets robotAction
    *  robotAction
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\Action|null
    */
    public function getRobotAction()
    {
        return $this->container['robotAction'];
    }

    /**
    * Sets robotAction
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\Action|null $robotAction robotAction
    *
    * @return $this
    */
    public function setRobotAction($robotAction)
    {
        $this->container['robotAction'] = $robotAction;
        return $this;
    }

    /**
    * Gets action
    *  action
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\PolicyAction|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\PolicyAction|null $action action
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets options
    *  options
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\PolicyOption|null
    */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
    * Sets options
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\PolicyOption|null $options options
    *
    * @return $this
    */
    public function setOptions($options)
    {
        $this->container['options'] = $options;
        return $this;
    }

    /**
    * Gets modulexOptions
    *  智能访问控制防护项相关配置信息，目前该特性还处于公测阶段，只有部分局点支持该特性
    *
    * @return map[string,object]|null
    */
    public function getModulexOptions()
    {
        return $this->container['modulexOptions'];
    }

    /**
    * Sets modulexOptions
    *
    * @param map[string,object]|null $modulexOptions 智能访问控制防护项相关配置信息，目前该特性还处于公测阶段，只有部分局点支持该特性
    *
    * @return $this
    */
    public function setModulexOptions($modulexOptions)
    {
        $this->container['modulexOptions'] = $modulexOptions;
        return $this;
    }

    /**
    * Gets hosts
    *  与防护策略绑定的防护的域名id数组
    *
    * @return string[]|null
    */
    public function getHosts()
    {
        return $this->container['hosts'];
    }

    /**
    * Sets hosts
    *
    * @param string[]|null $hosts 与防护策略绑定的防护的域名id数组
    *
    * @return $this
    */
    public function setHosts($hosts)
    {
        $this->container['hosts'] = $hosts;
        return $this;
    }

    /**
    * Gets bindHost
    *  与防护策略绑定的防护的域名信息数组，相对于hosts字段，包含更详细的域名信息
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\BindHost[]|null
    */
    public function getBindHost()
    {
        return $this->container['bindHost'];
    }

    /**
    * Sets bindHost
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\BindHost[]|null $bindHost 与防护策略绑定的防护的域名信息数组，相对于hosts字段，包含更详细的域名信息
    *
    * @return $this
    */
    public function setBindHost($bindHost)
    {
        $this->container['bindHost'] = $bindHost;
        return $this;
    }

    /**
    * Gets extend
    *  扩展字段，用于存放Web基础防护中一些开关配置等信息
    *
    * @return map[string,string]|null
    */
    public function getExtend()
    {
        return $this->container['extend'];
    }

    /**
    * Sets extend
    *
    * @param map[string,string]|null $extend 扩展字段，用于存放Web基础防护中一些开关配置等信息
    *
    * @return $this
    */
    public function setExtend($extend)
    {
        $this->container['extend'] = $extend;
        return $this;
    }

    /**
    * Gets timestamp
    *  创建防护策略的时间
    *
    * @return int|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int|null $timestamp 创建防护策略的时间
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
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

