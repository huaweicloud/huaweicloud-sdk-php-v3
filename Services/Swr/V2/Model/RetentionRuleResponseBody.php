<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RetentionRuleResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RetentionRuleResponseBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  镜像老化策略ID
    * priority  预留字段，目前只支持0
    * disabled  是否关闭此条规则
    * action  预留字段，目前只支持retain
    * template  规则模板类型，值为：latestPulledN，latestPushedK，nDaysSinceLastPush，nDaysSinceLastPull
    * params  保留方式的参数，配套template使用，可参考请求示例
    * tagSelectors  制品版本选择器，目前只支持长度为1
    * scopeSelectors  制品仓库选择器，目前只支持repository且长度为1
    * repoScopeMode  repo选择模式，前端使用，可选regular、selection
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'priority' => 'int',
            'disabled' => 'bool',
            'action' => 'string',
            'template' => 'string',
            'params' => 'map[string,object]',
            'tagSelectors' => '\HuaweiCloud\SDK\Swr\V2\Model\RetentionSelector[]',
            'scopeSelectors' => 'map[string,\HuaweiCloud\SDK\Swr\V2\Model\RetentionSelector[]]',
            'repoScopeMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  镜像老化策略ID
    * priority  预留字段，目前只支持0
    * disabled  是否关闭此条规则
    * action  预留字段，目前只支持retain
    * template  规则模板类型，值为：latestPulledN，latestPushedK，nDaysSinceLastPush，nDaysSinceLastPull
    * params  保留方式的参数，配套template使用，可参考请求示例
    * tagSelectors  制品版本选择器，目前只支持长度为1
    * scopeSelectors  制品仓库选择器，目前只支持repository且长度为1
    * repoScopeMode  repo选择模式，前端使用，可选regular、selection
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'priority' => null,
        'disabled' => null,
        'action' => null,
        'template' => null,
        'params' => null,
        'tagSelectors' => null,
        'scopeSelectors' => null,
        'repoScopeMode' => null
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
    * id  镜像老化策略ID
    * priority  预留字段，目前只支持0
    * disabled  是否关闭此条规则
    * action  预留字段，目前只支持retain
    * template  规则模板类型，值为：latestPulledN，latestPushedK，nDaysSinceLastPush，nDaysSinceLastPull
    * params  保留方式的参数，配套template使用，可参考请求示例
    * tagSelectors  制品版本选择器，目前只支持长度为1
    * scopeSelectors  制品仓库选择器，目前只支持repository且长度为1
    * repoScopeMode  repo选择模式，前端使用，可选regular、selection
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'priority' => 'priority',
            'disabled' => 'disabled',
            'action' => 'action',
            'template' => 'template',
            'params' => 'params',
            'tagSelectors' => 'tag_selectors',
            'scopeSelectors' => 'scope_selectors',
            'repoScopeMode' => 'repo_scope_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  镜像老化策略ID
    * priority  预留字段，目前只支持0
    * disabled  是否关闭此条规则
    * action  预留字段，目前只支持retain
    * template  规则模板类型，值为：latestPulledN，latestPushedK，nDaysSinceLastPush，nDaysSinceLastPull
    * params  保留方式的参数，配套template使用，可参考请求示例
    * tagSelectors  制品版本选择器，目前只支持长度为1
    * scopeSelectors  制品仓库选择器，目前只支持repository且长度为1
    * repoScopeMode  repo选择模式，前端使用，可选regular、selection
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'priority' => 'setPriority',
            'disabled' => 'setDisabled',
            'action' => 'setAction',
            'template' => 'setTemplate',
            'params' => 'setParams',
            'tagSelectors' => 'setTagSelectors',
            'scopeSelectors' => 'setScopeSelectors',
            'repoScopeMode' => 'setRepoScopeMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  镜像老化策略ID
    * priority  预留字段，目前只支持0
    * disabled  是否关闭此条规则
    * action  预留字段，目前只支持retain
    * template  规则模板类型，值为：latestPulledN，latestPushedK，nDaysSinceLastPush，nDaysSinceLastPull
    * params  保留方式的参数，配套template使用，可参考请求示例
    * tagSelectors  制品版本选择器，目前只支持长度为1
    * scopeSelectors  制品仓库选择器，目前只支持repository且长度为1
    * repoScopeMode  repo选择模式，前端使用，可选regular、selection
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'priority' => 'getPriority',
            'disabled' => 'getDisabled',
            'action' => 'getAction',
            'template' => 'getTemplate',
            'params' => 'getParams',
            'tagSelectors' => 'getTagSelectors',
            'scopeSelectors' => 'getScopeSelectors',
            'repoScopeMode' => 'getRepoScopeMode'
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
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
        $this->container['tagSelectors'] = isset($data['tagSelectors']) ? $data['tagSelectors'] : null;
        $this->container['scopeSelectors'] = isset($data['scopeSelectors']) ? $data['scopeSelectors'] : null;
        $this->container['repoScopeMode'] = isset($data['repoScopeMode']) ? $data['repoScopeMode'] : null;
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
    *  镜像老化策略ID
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 镜像老化策略ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets priority
    *  预留字段，目前只支持0
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority 预留字段，目前只支持0
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets disabled
    *  是否关闭此条规则
    *
    * @return bool|null
    */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
    * Sets disabled
    *
    * @param bool|null $disabled 是否关闭此条规则
    *
    * @return $this
    */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;
        return $this;
    }

    /**
    * Gets action
    *  预留字段，目前只支持retain
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 预留字段，目前只支持retain
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets template
    *  规则模板类型，值为：latestPulledN，latestPushedK，nDaysSinceLastPush，nDaysSinceLastPull
    *
    * @return string|null
    */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
    * Sets template
    *
    * @param string|null $template 规则模板类型，值为：latestPulledN，latestPushedK，nDaysSinceLastPush，nDaysSinceLastPull
    *
    * @return $this
    */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;
        return $this;
    }

    /**
    * Gets params
    *  保留方式的参数，配套template使用，可参考请求示例
    *
    * @return map[string,object]|null
    */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
    * Sets params
    *
    * @param map[string,object]|null $params 保留方式的参数，配套template使用，可参考请求示例
    *
    * @return $this
    */
    public function setParams($params)
    {
        $this->container['params'] = $params;
        return $this;
    }

    /**
    * Gets tagSelectors
    *  制品版本选择器，目前只支持长度为1
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\RetentionSelector[]|null
    */
    public function getTagSelectors()
    {
        return $this->container['tagSelectors'];
    }

    /**
    * Sets tagSelectors
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\RetentionSelector[]|null $tagSelectors 制品版本选择器，目前只支持长度为1
    *
    * @return $this
    */
    public function setTagSelectors($tagSelectors)
    {
        $this->container['tagSelectors'] = $tagSelectors;
        return $this;
    }

    /**
    * Gets scopeSelectors
    *  制品仓库选择器，目前只支持repository且长度为1
    *
    * @return map[string,\HuaweiCloud\SDK\Swr\V2\Model\RetentionSelector[]]|null
    */
    public function getScopeSelectors()
    {
        return $this->container['scopeSelectors'];
    }

    /**
    * Sets scopeSelectors
    *
    * @param map[string,\HuaweiCloud\SDK\Swr\V2\Model\RetentionSelector[]]|null $scopeSelectors 制品仓库选择器，目前只支持repository且长度为1
    *
    * @return $this
    */
    public function setScopeSelectors($scopeSelectors)
    {
        $this->container['scopeSelectors'] = $scopeSelectors;
        return $this;
    }

    /**
    * Gets repoScopeMode
    *  repo选择模式，前端使用，可选regular、selection
    *
    * @return string|null
    */
    public function getRepoScopeMode()
    {
        return $this->container['repoScopeMode'];
    }

    /**
    * Sets repoScopeMode
    *
    * @param string|null $repoScopeMode repo选择模式，前端使用，可选regular、selection
    *
    * @return $this
    */
    public function setRepoScopeMode($repoScopeMode)
    {
        $this->container['repoScopeMode'] = $repoScopeMode;
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

