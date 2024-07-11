<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResumePluginExtensionsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResumePluginExtensionsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pluginName  插件名称
    * dbList  数据库列表
    * extensionName  拓展模块名称
    * extensionAction  扩展开关。on表示开启，off表示关闭。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pluginName' => 'string',
            'dbList' => 'string[]',
            'extensionName' => 'string',
            'extensionAction' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pluginName  插件名称
    * dbList  数据库列表
    * extensionName  拓展模块名称
    * extensionAction  扩展开关。on表示开启，off表示关闭。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pluginName' => null,
        'dbList' => null,
        'extensionName' => null,
        'extensionAction' => null
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
    * pluginName  插件名称
    * dbList  数据库列表
    * extensionName  拓展模块名称
    * extensionAction  扩展开关。on表示开启，off表示关闭。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pluginName' => 'plugin_name',
            'dbList' => 'db_list',
            'extensionName' => 'extension_name',
            'extensionAction' => 'extension_action'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pluginName  插件名称
    * dbList  数据库列表
    * extensionName  拓展模块名称
    * extensionAction  扩展开关。on表示开启，off表示关闭。
    *
    * @var string[]
    */
    protected static $setters = [
            'pluginName' => 'setPluginName',
            'dbList' => 'setDbList',
            'extensionName' => 'setExtensionName',
            'extensionAction' => 'setExtensionAction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pluginName  插件名称
    * dbList  数据库列表
    * extensionName  拓展模块名称
    * extensionAction  扩展开关。on表示开启，off表示关闭。
    *
    * @var string[]
    */
    protected static $getters = [
            'pluginName' => 'getPluginName',
            'dbList' => 'getDbList',
            'extensionName' => 'getExtensionName',
            'extensionAction' => 'getExtensionAction'
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
        $this->container['pluginName'] = isset($data['pluginName']) ? $data['pluginName'] : null;
        $this->container['dbList'] = isset($data['dbList']) ? $data['dbList'] : null;
        $this->container['extensionName'] = isset($data['extensionName']) ? $data['extensionName'] : null;
        $this->container['extensionAction'] = isset($data['extensionAction']) ? $data['extensionAction'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['pluginName'] === null) {
            $invalidProperties[] = "'pluginName' can't be null";
        }
        if ($this->container['dbList'] === null) {
            $invalidProperties[] = "'dbList' can't be null";
        }
        if ($this->container['extensionName'] === null) {
            $invalidProperties[] = "'extensionName' can't be null";
        }
        if ($this->container['extensionAction'] === null) {
            $invalidProperties[] = "'extensionAction' can't be null";
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
    * Gets pluginName
    *  插件名称
    *
    * @return string
    */
    public function getPluginName()
    {
        return $this->container['pluginName'];
    }

    /**
    * Sets pluginName
    *
    * @param string $pluginName 插件名称
    *
    * @return $this
    */
    public function setPluginName($pluginName)
    {
        $this->container['pluginName'] = $pluginName;
        return $this;
    }

    /**
    * Gets dbList
    *  数据库列表
    *
    * @return string[]
    */
    public function getDbList()
    {
        return $this->container['dbList'];
    }

    /**
    * Sets dbList
    *
    * @param string[] $dbList 数据库列表
    *
    * @return $this
    */
    public function setDbList($dbList)
    {
        $this->container['dbList'] = $dbList;
        return $this;
    }

    /**
    * Gets extensionName
    *  拓展模块名称
    *
    * @return string
    */
    public function getExtensionName()
    {
        return $this->container['extensionName'];
    }

    /**
    * Sets extensionName
    *
    * @param string $extensionName 拓展模块名称
    *
    * @return $this
    */
    public function setExtensionName($extensionName)
    {
        $this->container['extensionName'] = $extensionName;
        return $this;
    }

    /**
    * Gets extensionAction
    *  扩展开关。on表示开启，off表示关闭。
    *
    * @return string
    */
    public function getExtensionAction()
    {
        return $this->container['extensionAction'];
    }

    /**
    * Sets extensionAction
    *
    * @param string $extensionAction 扩展开关。on表示开启，off表示关闭。
    *
    * @return $this
    */
    public function setExtensionAction($extensionAction)
    {
        $this->container['extensionAction'] = $extensionAction;
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

