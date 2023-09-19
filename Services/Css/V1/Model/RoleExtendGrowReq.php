<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RoleExtendGrowReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RoleExtendGrowReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  扩容实例类型。取值为ess、ess-master或ess-client，可以选择其中一个或多个之间的组合但不可以重复选择。  ess-master、ess-client节点只支持增加实例个数。
    * nodesize  扩容实例个数。集群已有实例个数和增加实例个数总和不能超过32。若无需扩容该参数将该参数设置为0即可。
    * disksize  扩容实例存储容量。集群原实例存储容量和扩容实例存储容量之和不能超过创建集群时对应默认实例存储容量上限。若无需扩容该参数将该参数设置为0即可。[当集群为包周期集群时不支持同时修改节点个数和磁盘容量。](tag: hc,tag: hws)  单位：GB。  - ess节点、ess-cold节点扩容步长为20。  - ess-master节点、ess-client节点不允许扩容存储。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'nodesize' => 'int',
            'disksize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  扩容实例类型。取值为ess、ess-master或ess-client，可以选择其中一个或多个之间的组合但不可以重复选择。  ess-master、ess-client节点只支持增加实例个数。
    * nodesize  扩容实例个数。集群已有实例个数和增加实例个数总和不能超过32。若无需扩容该参数将该参数设置为0即可。
    * disksize  扩容实例存储容量。集群原实例存储容量和扩容实例存储容量之和不能超过创建集群时对应默认实例存储容量上限。若无需扩容该参数将该参数设置为0即可。[当集群为包周期集群时不支持同时修改节点个数和磁盘容量。](tag: hc,tag: hws)  单位：GB。  - ess节点、ess-cold节点扩容步长为20。  - ess-master节点、ess-client节点不允许扩容存储。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'nodesize' => null,
        'disksize' => null
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
    * type  扩容实例类型。取值为ess、ess-master或ess-client，可以选择其中一个或多个之间的组合但不可以重复选择。  ess-master、ess-client节点只支持增加实例个数。
    * nodesize  扩容实例个数。集群已有实例个数和增加实例个数总和不能超过32。若无需扩容该参数将该参数设置为0即可。
    * disksize  扩容实例存储容量。集群原实例存储容量和扩容实例存储容量之和不能超过创建集群时对应默认实例存储容量上限。若无需扩容该参数将该参数设置为0即可。[当集群为包周期集群时不支持同时修改节点个数和磁盘容量。](tag: hc,tag: hws)  单位：GB。  - ess节点、ess-cold节点扩容步长为20。  - ess-master节点、ess-client节点不允许扩容存储。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'nodesize' => 'nodesize',
            'disksize' => 'disksize'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  扩容实例类型。取值为ess、ess-master或ess-client，可以选择其中一个或多个之间的组合但不可以重复选择。  ess-master、ess-client节点只支持增加实例个数。
    * nodesize  扩容实例个数。集群已有实例个数和增加实例个数总和不能超过32。若无需扩容该参数将该参数设置为0即可。
    * disksize  扩容实例存储容量。集群原实例存储容量和扩容实例存储容量之和不能超过创建集群时对应默认实例存储容量上限。若无需扩容该参数将该参数设置为0即可。[当集群为包周期集群时不支持同时修改节点个数和磁盘容量。](tag: hc,tag: hws)  单位：GB。  - ess节点、ess-cold节点扩容步长为20。  - ess-master节点、ess-client节点不允许扩容存储。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'nodesize' => 'setNodesize',
            'disksize' => 'setDisksize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  扩容实例类型。取值为ess、ess-master或ess-client，可以选择其中一个或多个之间的组合但不可以重复选择。  ess-master、ess-client节点只支持增加实例个数。
    * nodesize  扩容实例个数。集群已有实例个数和增加实例个数总和不能超过32。若无需扩容该参数将该参数设置为0即可。
    * disksize  扩容实例存储容量。集群原实例存储容量和扩容实例存储容量之和不能超过创建集群时对应默认实例存储容量上限。若无需扩容该参数将该参数设置为0即可。[当集群为包周期集群时不支持同时修改节点个数和磁盘容量。](tag: hc,tag: hws)  单位：GB。  - ess节点、ess-cold节点扩容步长为20。  - ess-master节点、ess-client节点不允许扩容存储。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'nodesize' => 'getNodesize',
            'disksize' => 'getDisksize'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['nodesize'] = isset($data['nodesize']) ? $data['nodesize'] : null;
        $this->container['disksize'] = isset($data['disksize']) ? $data['disksize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['nodesize'] === null) {
            $invalidProperties[] = "'nodesize' can't be null";
        }
        if ($this->container['disksize'] === null) {
            $invalidProperties[] = "'disksize' can't be null";
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
    * Gets type
    *  扩容实例类型。取值为ess、ess-master或ess-client，可以选择其中一个或多个之间的组合但不可以重复选择。  ess-master、ess-client节点只支持增加实例个数。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 扩容实例类型。取值为ess、ess-master或ess-client，可以选择其中一个或多个之间的组合但不可以重复选择。  ess-master、ess-client节点只支持增加实例个数。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets nodesize
    *  扩容实例个数。集群已有实例个数和增加实例个数总和不能超过32。若无需扩容该参数将该参数设置为0即可。
    *
    * @return int
    */
    public function getNodesize()
    {
        return $this->container['nodesize'];
    }

    /**
    * Sets nodesize
    *
    * @param int $nodesize 扩容实例个数。集群已有实例个数和增加实例个数总和不能超过32。若无需扩容该参数将该参数设置为0即可。
    *
    * @return $this
    */
    public function setNodesize($nodesize)
    {
        $this->container['nodesize'] = $nodesize;
        return $this;
    }

    /**
    * Gets disksize
    *  扩容实例存储容量。集群原实例存储容量和扩容实例存储容量之和不能超过创建集群时对应默认实例存储容量上限。若无需扩容该参数将该参数设置为0即可。[当集群为包周期集群时不支持同时修改节点个数和磁盘容量。](tag: hc,tag: hws)  单位：GB。  - ess节点、ess-cold节点扩容步长为20。  - ess-master节点、ess-client节点不允许扩容存储。
    *
    * @return int
    */
    public function getDisksize()
    {
        return $this->container['disksize'];
    }

    /**
    * Sets disksize
    *
    * @param int $disksize 扩容实例存储容量。集群原实例存储容量和扩容实例存储容量之和不能超过创建集群时对应默认实例存储容量上限。若无需扩容该参数将该参数设置为0即可。[当集群为包周期集群时不支持同时修改节点个数和磁盘容量。](tag: hc,tag: hws)  单位：GB。  - ess节点、ess-cold节点扩容步长为20。  - ess-master节点、ess-client节点不允许扩容存储。
    *
    * @return $this
    */
    public function setDisksize($disksize)
    {
        $this->container['disksize'] = $disksize;
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

