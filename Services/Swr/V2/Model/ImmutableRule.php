<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImmutableRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImmutableRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  不可变规则ID
    * namespaceId  namespaceId
    * namespaceName  namespaceName
    * priority  priority
    * disabled  不可变规则是否生效
    * action  预留字段，仅支持填immutable
    * template  预留字段，仅支持填immutable_template
    * tagSelectors  制品版本选择器，目前只支持长度为1
    * scopeSelectors  制品仓库选择器，目前只支持repository且长度为1
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'namespaceId' => 'int',
            'namespaceName' => 'string',
            'priority' => 'int',
            'disabled' => 'bool',
            'action' => 'string',
            'template' => 'string',
            'tagSelectors' => '\HuaweiCloud\SDK\Swr\V2\Model\RuleSelector[]',
            'scopeSelectors' => 'map[string,\HuaweiCloud\SDK\Swr\V2\Model\RuleSelector[]]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  不可变规则ID
    * namespaceId  namespaceId
    * namespaceName  namespaceName
    * priority  priority
    * disabled  不可变规则是否生效
    * action  预留字段，仅支持填immutable
    * template  预留字段，仅支持填immutable_template
    * tagSelectors  制品版本选择器，目前只支持长度为1
    * scopeSelectors  制品仓库选择器，目前只支持repository且长度为1
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'namespaceId' => null,
        'namespaceName' => null,
        'priority' => null,
        'disabled' => null,
        'action' => null,
        'template' => null,
        'tagSelectors' => null,
        'scopeSelectors' => null
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
    * id  不可变规则ID
    * namespaceId  namespaceId
    * namespaceName  namespaceName
    * priority  priority
    * disabled  不可变规则是否生效
    * action  预留字段，仅支持填immutable
    * template  预留字段，仅支持填immutable_template
    * tagSelectors  制品版本选择器，目前只支持长度为1
    * scopeSelectors  制品仓库选择器，目前只支持repository且长度为1
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'namespaceId' => 'namespace_id',
            'namespaceName' => 'namespace_name',
            'priority' => 'priority',
            'disabled' => 'disabled',
            'action' => 'action',
            'template' => 'template',
            'tagSelectors' => 'tag_selectors',
            'scopeSelectors' => 'scope_selectors'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  不可变规则ID
    * namespaceId  namespaceId
    * namespaceName  namespaceName
    * priority  priority
    * disabled  不可变规则是否生效
    * action  预留字段，仅支持填immutable
    * template  预留字段，仅支持填immutable_template
    * tagSelectors  制品版本选择器，目前只支持长度为1
    * scopeSelectors  制品仓库选择器，目前只支持repository且长度为1
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'namespaceId' => 'setNamespaceId',
            'namespaceName' => 'setNamespaceName',
            'priority' => 'setPriority',
            'disabled' => 'setDisabled',
            'action' => 'setAction',
            'template' => 'setTemplate',
            'tagSelectors' => 'setTagSelectors',
            'scopeSelectors' => 'setScopeSelectors'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  不可变规则ID
    * namespaceId  namespaceId
    * namespaceName  namespaceName
    * priority  priority
    * disabled  不可变规则是否生效
    * action  预留字段，仅支持填immutable
    * template  预留字段，仅支持填immutable_template
    * tagSelectors  制品版本选择器，目前只支持长度为1
    * scopeSelectors  制品仓库选择器，目前只支持repository且长度为1
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'namespaceId' => 'getNamespaceId',
            'namespaceName' => 'getNamespaceName',
            'priority' => 'getPriority',
            'disabled' => 'getDisabled',
            'action' => 'getAction',
            'template' => 'getTemplate',
            'tagSelectors' => 'getTagSelectors',
            'scopeSelectors' => 'getScopeSelectors'
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
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['namespaceName'] = isset($data['namespaceName']) ? $data['namespaceName'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['tagSelectors'] = isset($data['tagSelectors']) ? $data['tagSelectors'] : null;
        $this->container['scopeSelectors'] = isset($data['scopeSelectors']) ? $data['scopeSelectors'] : null;
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
    *  不可变规则ID
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
    * @param int|null $id 不可变规则ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets namespaceId
    *  namespaceId
    *
    * @return int|null
    */
    public function getNamespaceId()
    {
        return $this->container['namespaceId'];
    }

    /**
    * Sets namespaceId
    *
    * @param int|null $namespaceId namespaceId
    *
    * @return $this
    */
    public function setNamespaceId($namespaceId)
    {
        $this->container['namespaceId'] = $namespaceId;
        return $this;
    }

    /**
    * Gets namespaceName
    *  namespaceName
    *
    * @return string|null
    */
    public function getNamespaceName()
    {
        return $this->container['namespaceName'];
    }

    /**
    * Sets namespaceName
    *
    * @param string|null $namespaceName namespaceName
    *
    * @return $this
    */
    public function setNamespaceName($namespaceName)
    {
        $this->container['namespaceName'] = $namespaceName;
        return $this;
    }

    /**
    * Gets priority
    *  priority
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
    * @param int|null $priority priority
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
    *  不可变规则是否生效
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
    * @param bool|null $disabled 不可变规则是否生效
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
    *  预留字段，仅支持填immutable
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
    * @param string|null $action 预留字段，仅支持填immutable
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
    *  预留字段，仅支持填immutable_template
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
    * @param string|null $template 预留字段，仅支持填immutable_template
    *
    * @return $this
    */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;
        return $this;
    }

    /**
    * Gets tagSelectors
    *  制品版本选择器，目前只支持长度为1
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\RuleSelector[]|null
    */
    public function getTagSelectors()
    {
        return $this->container['tagSelectors'];
    }

    /**
    * Sets tagSelectors
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\RuleSelector[]|null $tagSelectors 制品版本选择器，目前只支持长度为1
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
    * @return map[string,\HuaweiCloud\SDK\Swr\V2\Model\RuleSelector[]]|null
    */
    public function getScopeSelectors()
    {
        return $this->container['scopeSelectors'];
    }

    /**
    * Sets scopeSelectors
    *
    * @param map[string,\HuaweiCloud\SDK\Swr\V2\Model\RuleSelector[]]|null $scopeSelectors 制品仓库选择器，目前只支持repository且长度为1
    *
    * @return $this
    */
    public function setScopeSelectors($scopeSelectors)
    {
        $this->container['scopeSelectors'] = $scopeSelectors;
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

