<?php

namespace HuaweiCloud\SDK\Css\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateClusterRolesBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateClusterRolesBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavorRef  实例规格名称。可以使用[获取实例规格列表](ListFlavors.xml)的name属性确认当前拥有的规格信息。
    * volume  volume
    * type  实例类型(选择实例类型时应至少选择一个ess类型)。例如，  - ess-master对应Master节点。 - ess-client对应clinet节点。 - ess-cold对应冷数据节点。 - ess对应数据节点。
    * instanceNum  实例个数。 - ess节点，选择范围：1~32个节点数量。   - 若同时选择ess和ess-master时，可以选择1~200个节点数量。    - 若同时选择ess和ess-client时，可以选择1~32个节点数量。    - 若同时选择ess和ess-cold时，可以选择1~32个节点数量。 - ess-master节点，选择范围：3~10内的奇数个节点数量。 - ess-client节点，选择范围：1~32个节点数量。 - ess-cold节点，选择范围：1~32个节点数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavorRef' => 'string',
            'volume' => '\HuaweiCloud\SDK\Css\V2\Model\CreateClusterInstanceVolumeBody',
            'type' => 'string',
            'instanceNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavorRef  实例规格名称。可以使用[获取实例规格列表](ListFlavors.xml)的name属性确认当前拥有的规格信息。
    * volume  volume
    * type  实例类型(选择实例类型时应至少选择一个ess类型)。例如，  - ess-master对应Master节点。 - ess-client对应clinet节点。 - ess-cold对应冷数据节点。 - ess对应数据节点。
    * instanceNum  实例个数。 - ess节点，选择范围：1~32个节点数量。   - 若同时选择ess和ess-master时，可以选择1~200个节点数量。    - 若同时选择ess和ess-client时，可以选择1~32个节点数量。    - 若同时选择ess和ess-cold时，可以选择1~32个节点数量。 - ess-master节点，选择范围：3~10内的奇数个节点数量。 - ess-client节点，选择范围：1~32个节点数量。 - ess-cold节点，选择范围：1~32个节点数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavorRef' => null,
        'volume' => null,
        'type' => null,
        'instanceNum' => null
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
    * flavorRef  实例规格名称。可以使用[获取实例规格列表](ListFlavors.xml)的name属性确认当前拥有的规格信息。
    * volume  volume
    * type  实例类型(选择实例类型时应至少选择一个ess类型)。例如，  - ess-master对应Master节点。 - ess-client对应clinet节点。 - ess-cold对应冷数据节点。 - ess对应数据节点。
    * instanceNum  实例个数。 - ess节点，选择范围：1~32个节点数量。   - 若同时选择ess和ess-master时，可以选择1~200个节点数量。    - 若同时选择ess和ess-client时，可以选择1~32个节点数量。    - 若同时选择ess和ess-cold时，可以选择1~32个节点数量。 - ess-master节点，选择范围：3~10内的奇数个节点数量。 - ess-client节点，选择范围：1~32个节点数量。 - ess-cold节点，选择范围：1~32个节点数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavorRef' => 'flavorRef',
            'volume' => 'volume',
            'type' => 'type',
            'instanceNum' => 'instanceNum'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavorRef  实例规格名称。可以使用[获取实例规格列表](ListFlavors.xml)的name属性确认当前拥有的规格信息。
    * volume  volume
    * type  实例类型(选择实例类型时应至少选择一个ess类型)。例如，  - ess-master对应Master节点。 - ess-client对应clinet节点。 - ess-cold对应冷数据节点。 - ess对应数据节点。
    * instanceNum  实例个数。 - ess节点，选择范围：1~32个节点数量。   - 若同时选择ess和ess-master时，可以选择1~200个节点数量。    - 若同时选择ess和ess-client时，可以选择1~32个节点数量。    - 若同时选择ess和ess-cold时，可以选择1~32个节点数量。 - ess-master节点，选择范围：3~10内的奇数个节点数量。 - ess-client节点，选择范围：1~32个节点数量。 - ess-cold节点，选择范围：1~32个节点数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'flavorRef' => 'setFlavorRef',
            'volume' => 'setVolume',
            'type' => 'setType',
            'instanceNum' => 'setInstanceNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavorRef  实例规格名称。可以使用[获取实例规格列表](ListFlavors.xml)的name属性确认当前拥有的规格信息。
    * volume  volume
    * type  实例类型(选择实例类型时应至少选择一个ess类型)。例如，  - ess-master对应Master节点。 - ess-client对应clinet节点。 - ess-cold对应冷数据节点。 - ess对应数据节点。
    * instanceNum  实例个数。 - ess节点，选择范围：1~32个节点数量。   - 若同时选择ess和ess-master时，可以选择1~200个节点数量。    - 若同时选择ess和ess-client时，可以选择1~32个节点数量。    - 若同时选择ess和ess-cold时，可以选择1~32个节点数量。 - ess-master节点，选择范围：3~10内的奇数个节点数量。 - ess-client节点，选择范围：1~32个节点数量。 - ess-cold节点，选择范围：1~32个节点数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'flavorRef' => 'getFlavorRef',
            'volume' => 'getVolume',
            'type' => 'getType',
            'instanceNum' => 'getInstanceNum'
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
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['instanceNum'] = isset($data['instanceNum']) ? $data['instanceNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['flavorRef'] === null) {
            $invalidProperties[] = "'flavorRef' can't be null";
        }
        if ($this->container['volume'] === null) {
            $invalidProperties[] = "'volume' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['instanceNum'] === null) {
            $invalidProperties[] = "'instanceNum' can't be null";
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
    * Gets flavorRef
    *  实例规格名称。可以使用[获取实例规格列表](ListFlavors.xml)的name属性确认当前拥有的规格信息。
    *
    * @return string
    */
    public function getFlavorRef()
    {
        return $this->container['flavorRef'];
    }

    /**
    * Sets flavorRef
    *
    * @param string $flavorRef 实例规格名称。可以使用[获取实例规格列表](ListFlavors.xml)的name属性确认当前拥有的规格信息。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets volume
    *  volume
    *
    * @return \HuaweiCloud\SDK\Css\V2\Model\CreateClusterInstanceVolumeBody
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\Css\V2\Model\CreateClusterInstanceVolumeBody $volume volume
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets type
    *  实例类型(选择实例类型时应至少选择一个ess类型)。例如，  - ess-master对应Master节点。 - ess-client对应clinet节点。 - ess-cold对应冷数据节点。 - ess对应数据节点。
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
    * @param string $type 实例类型(选择实例类型时应至少选择一个ess类型)。例如，  - ess-master对应Master节点。 - ess-client对应clinet节点。 - ess-cold对应冷数据节点。 - ess对应数据节点。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets instanceNum
    *  实例个数。 - ess节点，选择范围：1~32个节点数量。   - 若同时选择ess和ess-master时，可以选择1~200个节点数量。    - 若同时选择ess和ess-client时，可以选择1~32个节点数量。    - 若同时选择ess和ess-cold时，可以选择1~32个节点数量。 - ess-master节点，选择范围：3~10内的奇数个节点数量。 - ess-client节点，选择范围：1~32个节点数量。 - ess-cold节点，选择范围：1~32个节点数量。
    *
    * @return int
    */
    public function getInstanceNum()
    {
        return $this->container['instanceNum'];
    }

    /**
    * Sets instanceNum
    *
    * @param int $instanceNum 实例个数。 - ess节点，选择范围：1~32个节点数量。   - 若同时选择ess和ess-master时，可以选择1~200个节点数量。    - 若同时选择ess和ess-client时，可以选择1~32个节点数量。    - 若同时选择ess和ess-cold时，可以选择1~32个节点数量。 - ess-master节点，选择范围：3~10内的奇数个节点数量。 - ess-client节点，选择范围：1~32个节点数量。 - ess-cold节点，选择范围：1~32个节点数量。
    *
    * @return $this
    */
    public function setInstanceNum($instanceNum)
    {
        $this->container['instanceNum'] = $instanceNum;
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

