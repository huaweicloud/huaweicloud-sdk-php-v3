<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteDwsClusterRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteDwsClusterRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    * keepLastManualBackup  **参数解释**： 集群需要保留的快照数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    * releaseEipType  **参数解释**： 集群是否释放弹性公网IP，默认是NO_RELEASE，不释放绑定的弹性公网IP。 **约束限制**： 不涉及。 **取值范围**： - NO_RELEASE：不释放绑定的弹性公网IP； - RELEASE_BINDING：释放绑定的弹性公网IP；  **默认取值**： NO_RELEASE
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'keepLastManualBackup' => 'string',
            'releaseEipType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    * keepLastManualBackup  **参数解释**： 集群需要保留的快照数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    * releaseEipType  **参数解释**： 集群是否释放弹性公网IP，默认是NO_RELEASE，不释放绑定的弹性公网IP。 **约束限制**： 不涉及。 **取值范围**： - NO_RELEASE：不释放绑定的弹性公网IP； - RELEASE_BINDING：释放绑定的弹性公网IP；  **默认取值**： NO_RELEASE
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'keepLastManualBackup' => null,
        'releaseEipType' => null
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
    * clusterId  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    * keepLastManualBackup  **参数解释**： 集群需要保留的快照数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    * releaseEipType  **参数解释**： 集群是否释放弹性公网IP，默认是NO_RELEASE，不释放绑定的弹性公网IP。 **约束限制**： 不涉及。 **取值范围**： - NO_RELEASE：不释放绑定的弹性公网IP； - RELEASE_BINDING：释放绑定的弹性公网IP；  **默认取值**： NO_RELEASE
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'keepLastManualBackup' => 'keep_last_manual_backup',
            'releaseEipType' => 'release_eip_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    * keepLastManualBackup  **参数解释**： 集群需要保留的快照数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    * releaseEipType  **参数解释**： 集群是否释放弹性公网IP，默认是NO_RELEASE，不释放绑定的弹性公网IP。 **约束限制**： 不涉及。 **取值范围**： - NO_RELEASE：不释放绑定的弹性公网IP； - RELEASE_BINDING：释放绑定的弹性公网IP；  **默认取值**： NO_RELEASE
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'keepLastManualBackup' => 'setKeepLastManualBackup',
            'releaseEipType' => 'setReleaseEipType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    * keepLastManualBackup  **参数解释**： 集群需要保留的快照数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    * releaseEipType  **参数解释**： 集群是否释放弹性公网IP，默认是NO_RELEASE，不释放绑定的弹性公网IP。 **约束限制**： 不涉及。 **取值范围**： - NO_RELEASE：不释放绑定的弹性公网IP； - RELEASE_BINDING：释放绑定的弹性公网IP；  **默认取值**： NO_RELEASE
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'keepLastManualBackup' => 'getKeepLastManualBackup',
            'releaseEipType' => 'getReleaseEipType'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['keepLastManualBackup'] = isset($data['keepLastManualBackup']) ? $data['keepLastManualBackup'] : null;
        $this->container['releaseEipType'] = isset($data['releaseEipType']) ? $data['releaseEipType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
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
    * Gets clusterId
    *  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets keepLastManualBackup
    *  **参数解释**： 集群需要保留的快照数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    *
    * @return string|null
    */
    public function getKeepLastManualBackup()
    {
        return $this->container['keepLastManualBackup'];
    }

    /**
    * Sets keepLastManualBackup
    *
    * @param string|null $keepLastManualBackup **参数解释**： 集群需要保留的快照数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 0
    *
    * @return $this
    */
    public function setKeepLastManualBackup($keepLastManualBackup)
    {
        $this->container['keepLastManualBackup'] = $keepLastManualBackup;
        return $this;
    }

    /**
    * Gets releaseEipType
    *  **参数解释**： 集群是否释放弹性公网IP，默认是NO_RELEASE，不释放绑定的弹性公网IP。 **约束限制**： 不涉及。 **取值范围**： - NO_RELEASE：不释放绑定的弹性公网IP； - RELEASE_BINDING：释放绑定的弹性公网IP；  **默认取值**： NO_RELEASE
    *
    * @return string|null
    */
    public function getReleaseEipType()
    {
        return $this->container['releaseEipType'];
    }

    /**
    * Sets releaseEipType
    *
    * @param string|null $releaseEipType **参数解释**： 集群是否释放弹性公网IP，默认是NO_RELEASE，不释放绑定的弹性公网IP。 **约束限制**： 不涉及。 **取值范围**： - NO_RELEASE：不释放绑定的弹性公网IP； - RELEASE_BINDING：释放绑定的弹性公网IP；  **默认取值**： NO_RELEASE
    *
    * @return $this
    */
    public function setReleaseEipType($releaseEipType)
    {
        $this->container['releaseEipType'] = $releaseEipType;
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

