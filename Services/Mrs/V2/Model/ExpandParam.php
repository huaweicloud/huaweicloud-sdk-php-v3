<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExpandParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExpandParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeGroupName  节点组名称
    * count  扩容节点数量
    * skipBootstrapScripts  扩容时是否在新增节点上跳过执行创建集群时指定的引导操作。未填写时，默认不执行引导操作。
    * scaleWithoutStart  扩容后是否选择不启动扩容节点上的组件。未填写时，默认启动组件。  - true：扩容后不启动组件。 - false：扩容后启动组件。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeGroupName' => 'string',
            'count' => 'int',
            'skipBootstrapScripts' => 'bool',
            'scaleWithoutStart' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeGroupName  节点组名称
    * count  扩容节点数量
    * skipBootstrapScripts  扩容时是否在新增节点上跳过执行创建集群时指定的引导操作。未填写时，默认不执行引导操作。
    * scaleWithoutStart  扩容后是否选择不启动扩容节点上的组件。未填写时，默认启动组件。  - true：扩容后不启动组件。 - false：扩容后启动组件。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeGroupName' => null,
        'count' => null,
        'skipBootstrapScripts' => null,
        'scaleWithoutStart' => null
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
    * nodeGroupName  节点组名称
    * count  扩容节点数量
    * skipBootstrapScripts  扩容时是否在新增节点上跳过执行创建集群时指定的引导操作。未填写时，默认不执行引导操作。
    * scaleWithoutStart  扩容后是否选择不启动扩容节点上的组件。未填写时，默认启动组件。  - true：扩容后不启动组件。 - false：扩容后启动组件。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeGroupName' => 'node_group_name',
            'count' => 'count',
            'skipBootstrapScripts' => 'skip_bootstrap_scripts',
            'scaleWithoutStart' => 'scale_without_start'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeGroupName  节点组名称
    * count  扩容节点数量
    * skipBootstrapScripts  扩容时是否在新增节点上跳过执行创建集群时指定的引导操作。未填写时，默认不执行引导操作。
    * scaleWithoutStart  扩容后是否选择不启动扩容节点上的组件。未填写时，默认启动组件。  - true：扩容后不启动组件。 - false：扩容后启动组件。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeGroupName' => 'setNodeGroupName',
            'count' => 'setCount',
            'skipBootstrapScripts' => 'setSkipBootstrapScripts',
            'scaleWithoutStart' => 'setScaleWithoutStart'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeGroupName  节点组名称
    * count  扩容节点数量
    * skipBootstrapScripts  扩容时是否在新增节点上跳过执行创建集群时指定的引导操作。未填写时，默认不执行引导操作。
    * scaleWithoutStart  扩容后是否选择不启动扩容节点上的组件。未填写时，默认启动组件。  - true：扩容后不启动组件。 - false：扩容后启动组件。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeGroupName' => 'getNodeGroupName',
            'count' => 'getCount',
            'skipBootstrapScripts' => 'getSkipBootstrapScripts',
            'scaleWithoutStart' => 'getScaleWithoutStart'
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
        $this->container['nodeGroupName'] = isset($data['nodeGroupName']) ? $data['nodeGroupName'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['skipBootstrapScripts'] = isset($data['skipBootstrapScripts']) ? $data['skipBootstrapScripts'] : null;
        $this->container['scaleWithoutStart'] = isset($data['scaleWithoutStart']) ? $data['scaleWithoutStart'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeGroupName'] === null) {
            $invalidProperties[] = "'nodeGroupName' can't be null";
        }
            if ((mb_strlen($this->container['nodeGroupName']) > 64)) {
                $invalidProperties[] = "invalid value for 'nodeGroupName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['nodeGroupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'nodeGroupName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-z0-9A-Z_-]*$/", $this->container['nodeGroupName'])) {
                $invalidProperties[] = "invalid value for 'nodeGroupName', must be conform to the pattern /^[a-z0-9A-Z_-]*$/.";
            }
        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
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
    * Gets nodeGroupName
    *  节点组名称
    *
    * @return string
    */
    public function getNodeGroupName()
    {
        return $this->container['nodeGroupName'];
    }

    /**
    * Sets nodeGroupName
    *
    * @param string $nodeGroupName 节点组名称
    *
    * @return $this
    */
    public function setNodeGroupName($nodeGroupName)
    {
        $this->container['nodeGroupName'] = $nodeGroupName;
        return $this;
    }

    /**
    * Gets count
    *  扩容节点数量
    *
    * @return int
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int $count 扩容节点数量
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets skipBootstrapScripts
    *  扩容时是否在新增节点上跳过执行创建集群时指定的引导操作。未填写时，默认不执行引导操作。
    *
    * @return bool|null
    */
    public function getSkipBootstrapScripts()
    {
        return $this->container['skipBootstrapScripts'];
    }

    /**
    * Sets skipBootstrapScripts
    *
    * @param bool|null $skipBootstrapScripts 扩容时是否在新增节点上跳过执行创建集群时指定的引导操作。未填写时，默认不执行引导操作。
    *
    * @return $this
    */
    public function setSkipBootstrapScripts($skipBootstrapScripts)
    {
        $this->container['skipBootstrapScripts'] = $skipBootstrapScripts;
        return $this;
    }

    /**
    * Gets scaleWithoutStart
    *  扩容后是否选择不启动扩容节点上的组件。未填写时，默认启动组件。  - true：扩容后不启动组件。 - false：扩容后启动组件。
    *
    * @return bool|null
    */
    public function getScaleWithoutStart()
    {
        return $this->container['scaleWithoutStart'];
    }

    /**
    * Sets scaleWithoutStart
    *
    * @param bool|null $scaleWithoutStart 扩容后是否选择不启动扩容节点上的组件。未填写时，默认启动组件。  - true：扩容后不启动组件。 - false：扩容后启动组件。
    *
    * @return $this
    */
    public function setScaleWithoutStart($scaleWithoutStart)
    {
        $this->container['scaleWithoutStart'] = $scaleWithoutStart;
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

