<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPrivateNetworkSegmentsVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPrivateNetworkSegmentsVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * privateNetworkList  **参数解释**： 私网网段列表 **取值范围**： 不涉及
    * total  **参数解释**： 总条数 **取值范围**： 不涉及
    * quota  **参数解释**： 私网网段配额 **取值范围**： 不涉及
    * supportAzList  **参数解释**： 支持的可用区列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'privateNetworkList' => '\HuaweiCloud\SDK\Cfw\V1\Model\PrivateNetworkSegmentVO[]',
            'total' => 'int',
            'quota' => 'int',
            'supportAzList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * privateNetworkList  **参数解释**： 私网网段列表 **取值范围**： 不涉及
    * total  **参数解释**： 总条数 **取值范围**： 不涉及
    * quota  **参数解释**： 私网网段配额 **取值范围**： 不涉及
    * supportAzList  **参数解释**： 支持的可用区列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'privateNetworkList' => null,
        'total' => 'int32',
        'quota' => 'int32',
        'supportAzList' => null
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
    * privateNetworkList  **参数解释**： 私网网段列表 **取值范围**： 不涉及
    * total  **参数解释**： 总条数 **取值范围**： 不涉及
    * quota  **参数解释**： 私网网段配额 **取值范围**： 不涉及
    * supportAzList  **参数解释**： 支持的可用区列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'privateNetworkList' => 'private_network_list',
            'total' => 'total',
            'quota' => 'quota',
            'supportAzList' => 'support_az_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * privateNetworkList  **参数解释**： 私网网段列表 **取值范围**： 不涉及
    * total  **参数解释**： 总条数 **取值范围**： 不涉及
    * quota  **参数解释**： 私网网段配额 **取值范围**： 不涉及
    * supportAzList  **参数解释**： 支持的可用区列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'privateNetworkList' => 'setPrivateNetworkList',
            'total' => 'setTotal',
            'quota' => 'setQuota',
            'supportAzList' => 'setSupportAzList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * privateNetworkList  **参数解释**： 私网网段列表 **取值范围**： 不涉及
    * total  **参数解释**： 总条数 **取值范围**： 不涉及
    * quota  **参数解释**： 私网网段配额 **取值范围**： 不涉及
    * supportAzList  **参数解释**： 支持的可用区列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'privateNetworkList' => 'getPrivateNetworkList',
            'total' => 'getTotal',
            'quota' => 'getQuota',
            'supportAzList' => 'getSupportAzList'
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
        $this->container['privateNetworkList'] = isset($data['privateNetworkList']) ? $data['privateNetworkList'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['quota'] = isset($data['quota']) ? $data['quota'] : null;
        $this->container['supportAzList'] = isset($data['supportAzList']) ? $data['supportAzList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['total']) && ($this->container['total'] > 300)) {
                $invalidProperties[] = "invalid value for 'total', must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] < 0)) {
                $invalidProperties[] = "invalid value for 'total', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['quota']) && ($this->container['quota'] > 256)) {
                $invalidProperties[] = "invalid value for 'quota', must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['quota']) && ($this->container['quota'] <= 0)) {
                $invalidProperties[] = "invalid value for 'quota', must be bigger than 0.";
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
    * Gets privateNetworkList
    *  **参数解释**： 私网网段列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\PrivateNetworkSegmentVO[]|null
    */
    public function getPrivateNetworkList()
    {
        return $this->container['privateNetworkList'];
    }

    /**
    * Sets privateNetworkList
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\PrivateNetworkSegmentVO[]|null $privateNetworkList **参数解释**： 私网网段列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPrivateNetworkList($privateNetworkList)
    {
        $this->container['privateNetworkList'] = $privateNetworkList;
        return $this;
    }

    /**
    * Gets total
    *  **参数解释**： 总条数 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total **参数解释**： 总条数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets quota
    *  **参数解释**： 私网网段配额 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getQuota()
    {
        return $this->container['quota'];
    }

    /**
    * Sets quota
    *
    * @param int|null $quota **参数解释**： 私网网段配额 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setQuota($quota)
    {
        $this->container['quota'] = $quota;
        return $this;
    }

    /**
    * Gets supportAzList
    *  **参数解释**： 支持的可用区列表 **取值范围**： 不涉及
    *
    * @return string[]|null
    */
    public function getSupportAzList()
    {
        return $this->container['supportAzList'];
    }

    /**
    * Sets supportAzList
    *
    * @param string[]|null $supportAzList **参数解释**： 支持的可用区列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSupportAzList($supportAzList)
    {
        $this->container['supportAzList'] = $supportAzList;
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

