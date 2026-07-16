<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlavorResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlavorResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * poolId  **参数解释**：训练作业选择的资源池ID。 **取值范围**：不涉及。
    * flavorId  资源规格的ID。
    * flavorName  资源规格的名称。
    * maxNum  资源规格的最大节点数。
    * flavorType  资源规格的类型。可选值如下： - CPU - GPU - [Ascend](tag:hc,hk,fcs_super)
    * billing  billing
    * flavorInfo  flavorInfo
    * attributes  其他规格属性。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'poolId' => 'string',
            'flavorId' => 'string',
            'flavorName' => 'string',
            'maxNum' => 'int',
            'flavorType' => 'string',
            'billing' => '\HuaweiCloud\SDK\ModelArts\V1\Model\BillingInfo',
            'flavorInfo' => '\HuaweiCloud\SDK\ModelArts\V1\Model\FlavorInfoResponse',
            'attributes' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * poolId  **参数解释**：训练作业选择的资源池ID。 **取值范围**：不涉及。
    * flavorId  资源规格的ID。
    * flavorName  资源规格的名称。
    * maxNum  资源规格的最大节点数。
    * flavorType  资源规格的类型。可选值如下： - CPU - GPU - [Ascend](tag:hc,hk,fcs_super)
    * billing  billing
    * flavorInfo  flavorInfo
    * attributes  其他规格属性。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'poolId' => null,
        'flavorId' => null,
        'flavorName' => null,
        'maxNum' => 'int32',
        'flavorType' => null,
        'billing' => null,
        'flavorInfo' => null,
        'attributes' => null
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
    * poolId  **参数解释**：训练作业选择的资源池ID。 **取值范围**：不涉及。
    * flavorId  资源规格的ID。
    * flavorName  资源规格的名称。
    * maxNum  资源规格的最大节点数。
    * flavorType  资源规格的类型。可选值如下： - CPU - GPU - [Ascend](tag:hc,hk,fcs_super)
    * billing  billing
    * flavorInfo  flavorInfo
    * attributes  其他规格属性。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'poolId' => 'pool_id',
            'flavorId' => 'flavor_id',
            'flavorName' => 'flavor_name',
            'maxNum' => 'max_num',
            'flavorType' => 'flavor_type',
            'billing' => 'billing',
            'flavorInfo' => 'flavor_info',
            'attributes' => 'attributes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * poolId  **参数解释**：训练作业选择的资源池ID。 **取值范围**：不涉及。
    * flavorId  资源规格的ID。
    * flavorName  资源规格的名称。
    * maxNum  资源规格的最大节点数。
    * flavorType  资源规格的类型。可选值如下： - CPU - GPU - [Ascend](tag:hc,hk,fcs_super)
    * billing  billing
    * flavorInfo  flavorInfo
    * attributes  其他规格属性。
    *
    * @var string[]
    */
    protected static $setters = [
            'poolId' => 'setPoolId',
            'flavorId' => 'setFlavorId',
            'flavorName' => 'setFlavorName',
            'maxNum' => 'setMaxNum',
            'flavorType' => 'setFlavorType',
            'billing' => 'setBilling',
            'flavorInfo' => 'setFlavorInfo',
            'attributes' => 'setAttributes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * poolId  **参数解释**：训练作业选择的资源池ID。 **取值范围**：不涉及。
    * flavorId  资源规格的ID。
    * flavorName  资源规格的名称。
    * maxNum  资源规格的最大节点数。
    * flavorType  资源规格的类型。可选值如下： - CPU - GPU - [Ascend](tag:hc,hk,fcs_super)
    * billing  billing
    * flavorInfo  flavorInfo
    * attributes  其他规格属性。
    *
    * @var string[]
    */
    protected static $getters = [
            'poolId' => 'getPoolId',
            'flavorId' => 'getFlavorId',
            'flavorName' => 'getFlavorName',
            'maxNum' => 'getMaxNum',
            'flavorType' => 'getFlavorType',
            'billing' => 'getBilling',
            'flavorInfo' => 'getFlavorInfo',
            'attributes' => 'getAttributes'
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
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['flavorId'] = isset($data['flavorId']) ? $data['flavorId'] : null;
        $this->container['flavorName'] = isset($data['flavorName']) ? $data['flavorName'] : null;
        $this->container['maxNum'] = isset($data['maxNum']) ? $data['maxNum'] : null;
        $this->container['flavorType'] = isset($data['flavorType']) ? $data['flavorType'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['flavorInfo'] = isset($data['flavorInfo']) ? $data['flavorInfo'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
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
    * Gets poolId
    *  **参数解释**：训练作业选择的资源池ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getPoolId()
    {
        return $this->container['poolId'];
    }

    /**
    * Sets poolId
    *
    * @param string|null $poolId **参数解释**：训练作业选择的资源池ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;
        return $this;
    }

    /**
    * Gets flavorId
    *  资源规格的ID。
    *
    * @return string|null
    */
    public function getFlavorId()
    {
        return $this->container['flavorId'];
    }

    /**
    * Sets flavorId
    *
    * @param string|null $flavorId 资源规格的ID。
    *
    * @return $this
    */
    public function setFlavorId($flavorId)
    {
        $this->container['flavorId'] = $flavorId;
        return $this;
    }

    /**
    * Gets flavorName
    *  资源规格的名称。
    *
    * @return string|null
    */
    public function getFlavorName()
    {
        return $this->container['flavorName'];
    }

    /**
    * Sets flavorName
    *
    * @param string|null $flavorName 资源规格的名称。
    *
    * @return $this
    */
    public function setFlavorName($flavorName)
    {
        $this->container['flavorName'] = $flavorName;
        return $this;
    }

    /**
    * Gets maxNum
    *  资源规格的最大节点数。
    *
    * @return int|null
    */
    public function getMaxNum()
    {
        return $this->container['maxNum'];
    }

    /**
    * Sets maxNum
    *
    * @param int|null $maxNum 资源规格的最大节点数。
    *
    * @return $this
    */
    public function setMaxNum($maxNum)
    {
        $this->container['maxNum'] = $maxNum;
        return $this;
    }

    /**
    * Gets flavorType
    *  资源规格的类型。可选值如下： - CPU - GPU - [Ascend](tag:hc,hk,fcs_super)
    *
    * @return string|null
    */
    public function getFlavorType()
    {
        return $this->container['flavorType'];
    }

    /**
    * Sets flavorType
    *
    * @param string|null $flavorType 资源规格的类型。可选值如下： - CPU - GPU - [Ascend](tag:hc,hk,fcs_super)
    *
    * @return $this
    */
    public function setFlavorType($flavorType)
    {
        $this->container['flavorType'] = $flavorType;
        return $this;
    }

    /**
    * Gets billing
    *  billing
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\BillingInfo|null
    */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
    * Sets billing
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\BillingInfo|null $billing billing
    *
    * @return $this
    */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;
        return $this;
    }

    /**
    * Gets flavorInfo
    *  flavorInfo
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\FlavorInfoResponse|null
    */
    public function getFlavorInfo()
    {
        return $this->container['flavorInfo'];
    }

    /**
    * Sets flavorInfo
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\FlavorInfoResponse|null $flavorInfo flavorInfo
    *
    * @return $this
    */
    public function setFlavorInfo($flavorInfo)
    {
        $this->container['flavorInfo'] = $flavorInfo;
        return $this;
    }

    /**
    * Gets attributes
    *  其他规格属性。
    *
    * @return map[string,string]|null
    */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
    * Sets attributes
    *
    * @param map[string,string]|null $attributes 其他规格属性。
    *
    * @return $this
    */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;
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

