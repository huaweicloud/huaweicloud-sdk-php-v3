<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeconfigSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeconfigSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configs  **参数解释**： 节点自定义配置；当前支持节点绑核、是否启用缓存清理、是否启用透明大页。 \"configs\": {    \"cpu_manager\": {     \"mode\": \"static/none\" //static为启用绑核, none为不启用绑核    },    \"drop_cache\": {     \"mode\": \"enable/disable\" // enable启用缓存清理    },    \"transparent_hugepage\": {     \"mode\": \"always/madvise/never\" // always为启用透明大页，never为关闭透明大页，madvice交给系统选择。    } }
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configs' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configs  **参数解释**： 节点自定义配置；当前支持节点绑核、是否启用缓存清理、是否启用透明大页。 \"configs\": {    \"cpu_manager\": {     \"mode\": \"static/none\" //static为启用绑核, none为不启用绑核    },    \"drop_cache\": {     \"mode\": \"enable/disable\" // enable启用缓存清理    },    \"transparent_hugepage\": {     \"mode\": \"always/madvise/never\" // always为启用透明大页，never为关闭透明大页，madvice交给系统选择。    } }
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configs' => null
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
    * configs  **参数解释**： 节点自定义配置；当前支持节点绑核、是否启用缓存清理、是否启用透明大页。 \"configs\": {    \"cpu_manager\": {     \"mode\": \"static/none\" //static为启用绑核, none为不启用绑核    },    \"drop_cache\": {     \"mode\": \"enable/disable\" // enable启用缓存清理    },    \"transparent_hugepage\": {     \"mode\": \"always/madvise/never\" // always为启用透明大页，never为关闭透明大页，madvice交给系统选择。    } }
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configs' => 'configs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configs  **参数解释**： 节点自定义配置；当前支持节点绑核、是否启用缓存清理、是否启用透明大页。 \"configs\": {    \"cpu_manager\": {     \"mode\": \"static/none\" //static为启用绑核, none为不启用绑核    },    \"drop_cache\": {     \"mode\": \"enable/disable\" // enable启用缓存清理    },    \"transparent_hugepage\": {     \"mode\": \"always/madvise/never\" // always为启用透明大页，never为关闭透明大页，madvice交给系统选择。    } }
    *
    * @var string[]
    */
    protected static $setters = [
            'configs' => 'setConfigs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configs  **参数解释**： 节点自定义配置；当前支持节点绑核、是否启用缓存清理、是否启用透明大页。 \"configs\": {    \"cpu_manager\": {     \"mode\": \"static/none\" //static为启用绑核, none为不启用绑核    },    \"drop_cache\": {     \"mode\": \"enable/disable\" // enable启用缓存清理    },    \"transparent_hugepage\": {     \"mode\": \"always/madvise/never\" // always为启用透明大页，never为关闭透明大页，madvice交给系统选择。    } }
    *
    * @var string[]
    */
    protected static $getters = [
            'configs' => 'getConfigs'
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
        $this->container['configs'] = isset($data['configs']) ? $data['configs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['configs'] === null) {
            $invalidProperties[] = "'configs' can't be null";
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
    * Gets configs
    *  **参数解释**： 节点自定义配置；当前支持节点绑核、是否启用缓存清理、是否启用透明大页。 \"configs\": {    \"cpu_manager\": {     \"mode\": \"static/none\" //static为启用绑核, none为不启用绑核    },    \"drop_cache\": {     \"mode\": \"enable/disable\" // enable启用缓存清理    },    \"transparent_hugepage\": {     \"mode\": \"always/madvise/never\" // always为启用透明大页，never为关闭透明大页，madvice交给系统选择。    } }
    *
    * @return object
    */
    public function getConfigs()
    {
        return $this->container['configs'];
    }

    /**
    * Sets configs
    *
    * @param object $configs **参数解释**： 节点自定义配置；当前支持节点绑核、是否启用缓存清理、是否启用透明大页。 \"configs\": {    \"cpu_manager\": {     \"mode\": \"static/none\" //static为启用绑核, none为不启用绑核    },    \"drop_cache\": {     \"mode\": \"enable/disable\" // enable启用缓存清理    },    \"transparent_hugepage\": {     \"mode\": \"always/madvise/never\" // always为启用透明大页，never为关闭透明大页，madvice交给系统选择。    } }
    *
    * @return $this
    */
    public function setConfigs($configs)
    {
        $this->container['configs'] = $configs;
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

