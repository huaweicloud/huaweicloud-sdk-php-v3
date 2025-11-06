<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowFlavorDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowFlavorDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * strId  **参数解释**： 规格id。 **取值范围**： 不涉及
    * name  **参数解释**： 规格名称。 **取值范围**： 不涉及
    * condOperationStatus  **参数解释**： 此参数是Region级配置，某个AZ没有在condOperationAz参数中配置时默认使用此参数的取值。 **取值范围**：   - normal：正常商用。   - sellout：售罄。
    * condOperationAz  **参数解释**： 此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用condOperationAz参数的取值。此参数的配置格式“az(xx)”。()内为某个AZ的flavor状态，()内必须要填有状态，不填为无效配置。状态的取值范围与condOperationStatus参数相同。 **取值范围**： 不涉及
    * flavorDetail  **参数解释**： 规格属性信息。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'strId' => 'string',
            'name' => 'string',
            'condOperationStatus' => 'string',
            'condOperationAz' => 'string',
            'flavorDetail' => '\HuaweiCloud\SDK\Css\V1\Model\ShowFlavorDetailRspFlavorDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * strId  **参数解释**： 规格id。 **取值范围**： 不涉及
    * name  **参数解释**： 规格名称。 **取值范围**： 不涉及
    * condOperationStatus  **参数解释**： 此参数是Region级配置，某个AZ没有在condOperationAz参数中配置时默认使用此参数的取值。 **取值范围**：   - normal：正常商用。   - sellout：售罄。
    * condOperationAz  **参数解释**： 此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用condOperationAz参数的取值。此参数的配置格式“az(xx)”。()内为某个AZ的flavor状态，()内必须要填有状态，不填为无效配置。状态的取值范围与condOperationStatus参数相同。 **取值范围**： 不涉及
    * flavorDetail  **参数解释**： 规格属性信息。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'strId' => null,
        'name' => null,
        'condOperationStatus' => null,
        'condOperationAz' => null,
        'flavorDetail' => null
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
    * strId  **参数解释**： 规格id。 **取值范围**： 不涉及
    * name  **参数解释**： 规格名称。 **取值范围**： 不涉及
    * condOperationStatus  **参数解释**： 此参数是Region级配置，某个AZ没有在condOperationAz参数中配置时默认使用此参数的取值。 **取值范围**：   - normal：正常商用。   - sellout：售罄。
    * condOperationAz  **参数解释**： 此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用condOperationAz参数的取值。此参数的配置格式“az(xx)”。()内为某个AZ的flavor状态，()内必须要填有状态，不填为无效配置。状态的取值范围与condOperationStatus参数相同。 **取值范围**： 不涉及
    * flavorDetail  **参数解释**： 规格属性信息。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'strId' => 'str_id',
            'name' => 'name',
            'condOperationStatus' => 'condOperationStatus',
            'condOperationAz' => 'condOperationAz',
            'flavorDetail' => 'flavor_detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * strId  **参数解释**： 规格id。 **取值范围**： 不涉及
    * name  **参数解释**： 规格名称。 **取值范围**： 不涉及
    * condOperationStatus  **参数解释**： 此参数是Region级配置，某个AZ没有在condOperationAz参数中配置时默认使用此参数的取值。 **取值范围**：   - normal：正常商用。   - sellout：售罄。
    * condOperationAz  **参数解释**： 此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用condOperationAz参数的取值。此参数的配置格式“az(xx)”。()内为某个AZ的flavor状态，()内必须要填有状态，不填为无效配置。状态的取值范围与condOperationStatus参数相同。 **取值范围**： 不涉及
    * flavorDetail  **参数解释**： 规格属性信息。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'strId' => 'setStrId',
            'name' => 'setName',
            'condOperationStatus' => 'setCondOperationStatus',
            'condOperationAz' => 'setCondOperationAz',
            'flavorDetail' => 'setFlavorDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * strId  **参数解释**： 规格id。 **取值范围**： 不涉及
    * name  **参数解释**： 规格名称。 **取值范围**： 不涉及
    * condOperationStatus  **参数解释**： 此参数是Region级配置，某个AZ没有在condOperationAz参数中配置时默认使用此参数的取值。 **取值范围**：   - normal：正常商用。   - sellout：售罄。
    * condOperationAz  **参数解释**： 此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用condOperationAz参数的取值。此参数的配置格式“az(xx)”。()内为某个AZ的flavor状态，()内必须要填有状态，不填为无效配置。状态的取值范围与condOperationStatus参数相同。 **取值范围**： 不涉及
    * flavorDetail  **参数解释**： 规格属性信息。 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'strId' => 'getStrId',
            'name' => 'getName',
            'condOperationStatus' => 'getCondOperationStatus',
            'condOperationAz' => 'getCondOperationAz',
            'flavorDetail' => 'getFlavorDetail'
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
        $this->container['strId'] = isset($data['strId']) ? $data['strId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['condOperationStatus'] = isset($data['condOperationStatus']) ? $data['condOperationStatus'] : null;
        $this->container['condOperationAz'] = isset($data['condOperationAz']) ? $data['condOperationAz'] : null;
        $this->container['flavorDetail'] = isset($data['flavorDetail']) ? $data['flavorDetail'] : null;
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
    * Gets strId
    *  **参数解释**： 规格id。 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getStrId()
    {
        return $this->container['strId'];
    }

    /**
    * Sets strId
    *
    * @param string|null $strId **参数解释**： 规格id。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setStrId($strId)
    {
        $this->container['strId'] = $strId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 规格名称。 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**： 规格名称。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets condOperationStatus
    *  **参数解释**： 此参数是Region级配置，某个AZ没有在condOperationAz参数中配置时默认使用此参数的取值。 **取值范围**：   - normal：正常商用。   - sellout：售罄。
    *
    * @return string|null
    */
    public function getCondOperationStatus()
    {
        return $this->container['condOperationStatus'];
    }

    /**
    * Sets condOperationStatus
    *
    * @param string|null $condOperationStatus **参数解释**： 此参数是Region级配置，某个AZ没有在condOperationAz参数中配置时默认使用此参数的取值。 **取值范围**：   - normal：正常商用。   - sellout：售罄。
    *
    * @return $this
    */
    public function setCondOperationStatus($condOperationStatus)
    {
        $this->container['condOperationStatus'] = $condOperationStatus;
        return $this;
    }

    /**
    * Gets condOperationAz
    *  **参数解释**： 此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用condOperationAz参数的取值。此参数的配置格式“az(xx)”。()内为某个AZ的flavor状态，()内必须要填有状态，不填为无效配置。状态的取值范围与condOperationStatus参数相同。 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getCondOperationAz()
    {
        return $this->container['condOperationAz'];
    }

    /**
    * Sets condOperationAz
    *
    * @param string|null $condOperationAz **参数解释**： 此参数是AZ级配置，某个AZ没有在此参数中配置时默认使用condOperationAz参数的取值。此参数的配置格式“az(xx)”。()内为某个AZ的flavor状态，()内必须要填有状态，不填为无效配置。状态的取值范围与condOperationStatus参数相同。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setCondOperationAz($condOperationAz)
    {
        $this->container['condOperationAz'] = $condOperationAz;
        return $this;
    }

    /**
    * Gets flavorDetail
    *  **参数解释**： 规格属性信息。 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\ShowFlavorDetailRspFlavorDetail[]|null
    */
    public function getFlavorDetail()
    {
        return $this->container['flavorDetail'];
    }

    /**
    * Sets flavorDetail
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\ShowFlavorDetailRspFlavorDetail[]|null $flavorDetail **参数解释**： 规格属性信息。 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setFlavorDetail($flavorDetail)
    {
        $this->container['flavorDetail'] = $flavorDetail;
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

