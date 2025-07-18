<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLtsLogsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLtsLogsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessStatus  **参数解释**： 日志开启状态。 **取值范围**： 不涉及。
    * ltsAccessList  **参数解释**： LTS日志列表。 **取值范围**： 不涉及。
    * count  **参数解释**： 总数量。 **取值范围**： 大于等于0。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessStatus' => 'string',
            'ltsAccessList' => '\HuaweiCloud\SDK\Dws\V2\Model\LtslogInfo[]',
            'count' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessStatus  **参数解释**： 日志开启状态。 **取值范围**： 不涉及。
    * ltsAccessList  **参数解释**： LTS日志列表。 **取值范围**： 不涉及。
    * count  **参数解释**： 总数量。 **取值范围**： 大于等于0。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessStatus' => null,
        'ltsAccessList' => null,
        'count' => null
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
    * accessStatus  **参数解释**： 日志开启状态。 **取值范围**： 不涉及。
    * ltsAccessList  **参数解释**： LTS日志列表。 **取值范围**： 不涉及。
    * count  **参数解释**： 总数量。 **取值范围**： 大于等于0。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessStatus' => 'access_status',
            'ltsAccessList' => 'lts_access_list',
            'count' => 'count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessStatus  **参数解释**： 日志开启状态。 **取值范围**： 不涉及。
    * ltsAccessList  **参数解释**： LTS日志列表。 **取值范围**： 不涉及。
    * count  **参数解释**： 总数量。 **取值范围**： 大于等于0。
    *
    * @var string[]
    */
    protected static $setters = [
            'accessStatus' => 'setAccessStatus',
            'ltsAccessList' => 'setLtsAccessList',
            'count' => 'setCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessStatus  **参数解释**： 日志开启状态。 **取值范围**： 不涉及。
    * ltsAccessList  **参数解释**： LTS日志列表。 **取值范围**： 不涉及。
    * count  **参数解释**： 总数量。 **取值范围**： 大于等于0。
    *
    * @var string[]
    */
    protected static $getters = [
            'accessStatus' => 'getAccessStatus',
            'ltsAccessList' => 'getLtsAccessList',
            'count' => 'getCount'
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
        $this->container['accessStatus'] = isset($data['accessStatus']) ? $data['accessStatus'] : null;
        $this->container['ltsAccessList'] = isset($data['ltsAccessList']) ? $data['ltsAccessList'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
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
    * Gets accessStatus
    *  **参数解释**： 日志开启状态。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getAccessStatus()
    {
        return $this->container['accessStatus'];
    }

    /**
    * Sets accessStatus
    *
    * @param string|null $accessStatus **参数解释**： 日志开启状态。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAccessStatus($accessStatus)
    {
        $this->container['accessStatus'] = $accessStatus;
        return $this;
    }

    /**
    * Gets ltsAccessList
    *  **参数解释**： LTS日志列表。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\LtslogInfo[]|null
    */
    public function getLtsAccessList()
    {
        return $this->container['ltsAccessList'];
    }

    /**
    * Sets ltsAccessList
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\LtslogInfo[]|null $ltsAccessList **参数解释**： LTS日志列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLtsAccessList($ltsAccessList)
    {
        $this->container['ltsAccessList'] = $ltsAccessList;
        return $this;
    }

    /**
    * Gets count
    *  **参数解释**： 总数量。 **取值范围**： 大于等于0。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count **参数解释**： 总数量。 **取值范围**： 大于等于0。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
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

