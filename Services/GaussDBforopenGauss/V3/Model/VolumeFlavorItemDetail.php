<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VolumeFlavorItemDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VolumeFlavorItemDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ioType  **参数解释**: IO类型。 **取值范围**: - ULTRAHIGH：超高IO。 - ESSD：极速型SSD。
    * mediaType  **参数解释**: 存储介质类型。 **取值范围**: - SAS：高IO云硬盘。 - SSD：超高IO云硬盘。 - ESSD：极速型SSD云硬盘。
    * azStatus  **参数解释**: 存储规格在各个可用区的状态。 **取值范围**: - normal：正常。 - sellout：已售罄。 - unknown：状态未知。 - unsupported：不支持。 - abandon：已废弃。
    * supportComputeGroupType  **参数解释**: 该存储规格支持的计算规格组类型列表。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ioType' => 'string',
            'mediaType' => 'string',
            'azStatus' => 'map[string,string]',
            'supportComputeGroupType' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ioType  **参数解释**: IO类型。 **取值范围**: - ULTRAHIGH：超高IO。 - ESSD：极速型SSD。
    * mediaType  **参数解释**: 存储介质类型。 **取值范围**: - SAS：高IO云硬盘。 - SSD：超高IO云硬盘。 - ESSD：极速型SSD云硬盘。
    * azStatus  **参数解释**: 存储规格在各个可用区的状态。 **取值范围**: - normal：正常。 - sellout：已售罄。 - unknown：状态未知。 - unsupported：不支持。 - abandon：已废弃。
    * supportComputeGroupType  **参数解释**: 该存储规格支持的计算规格组类型列表。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ioType' => null,
        'mediaType' => null,
        'azStatus' => null,
        'supportComputeGroupType' => null
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
    * ioType  **参数解释**: IO类型。 **取值范围**: - ULTRAHIGH：超高IO。 - ESSD：极速型SSD。
    * mediaType  **参数解释**: 存储介质类型。 **取值范围**: - SAS：高IO云硬盘。 - SSD：超高IO云硬盘。 - ESSD：极速型SSD云硬盘。
    * azStatus  **参数解释**: 存储规格在各个可用区的状态。 **取值范围**: - normal：正常。 - sellout：已售罄。 - unknown：状态未知。 - unsupported：不支持。 - abandon：已废弃。
    * supportComputeGroupType  **参数解释**: 该存储规格支持的计算规格组类型列表。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ioType' => 'io_type',
            'mediaType' => 'media_type',
            'azStatus' => 'az_status',
            'supportComputeGroupType' => 'support_compute_group_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ioType  **参数解释**: IO类型。 **取值范围**: - ULTRAHIGH：超高IO。 - ESSD：极速型SSD。
    * mediaType  **参数解释**: 存储介质类型。 **取值范围**: - SAS：高IO云硬盘。 - SSD：超高IO云硬盘。 - ESSD：极速型SSD云硬盘。
    * azStatus  **参数解释**: 存储规格在各个可用区的状态。 **取值范围**: - normal：正常。 - sellout：已售罄。 - unknown：状态未知。 - unsupported：不支持。 - abandon：已废弃。
    * supportComputeGroupType  **参数解释**: 该存储规格支持的计算规格组类型列表。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'ioType' => 'setIoType',
            'mediaType' => 'setMediaType',
            'azStatus' => 'setAzStatus',
            'supportComputeGroupType' => 'setSupportComputeGroupType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ioType  **参数解释**: IO类型。 **取值范围**: - ULTRAHIGH：超高IO。 - ESSD：极速型SSD。
    * mediaType  **参数解释**: 存储介质类型。 **取值范围**: - SAS：高IO云硬盘。 - SSD：超高IO云硬盘。 - ESSD：极速型SSD云硬盘。
    * azStatus  **参数解释**: 存储规格在各个可用区的状态。 **取值范围**: - normal：正常。 - sellout：已售罄。 - unknown：状态未知。 - unsupported：不支持。 - abandon：已废弃。
    * supportComputeGroupType  **参数解释**: 该存储规格支持的计算规格组类型列表。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'ioType' => 'getIoType',
            'mediaType' => 'getMediaType',
            'azStatus' => 'getAzStatus',
            'supportComputeGroupType' => 'getSupportComputeGroupType'
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
    const IO_TYPE_ULTRAHIGH = 'ULTRAHIGH';
    const IO_TYPE_ESSD = 'ESSD';
    const MEDIA_TYPE_SAS = 'SAS';
    const MEDIA_TYPE_SSD = 'SSD';
    const MEDIA_TYPE_ESSD = 'ESSD';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIoTypeAllowableValues()
    {
        return [
            self::IO_TYPE_ULTRAHIGH,
            self::IO_TYPE_ESSD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMediaTypeAllowableValues()
    {
        return [
            self::MEDIA_TYPE_SAS,
            self::MEDIA_TYPE_SSD,
            self::MEDIA_TYPE_ESSD,
        ];
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
        $this->container['ioType'] = isset($data['ioType']) ? $data['ioType'] : null;
        $this->container['mediaType'] = isset($data['mediaType']) ? $data['mediaType'] : null;
        $this->container['azStatus'] = isset($data['azStatus']) ? $data['azStatus'] : null;
        $this->container['supportComputeGroupType'] = isset($data['supportComputeGroupType']) ? $data['supportComputeGroupType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getIoTypeAllowableValues();
                if (!is_null($this->container['ioType']) && !in_array($this->container['ioType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ioType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMediaTypeAllowableValues();
                if (!is_null($this->container['mediaType']) && !in_array($this->container['mediaType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mediaType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets ioType
    *  **参数解释**: IO类型。 **取值范围**: - ULTRAHIGH：超高IO。 - ESSD：极速型SSD。
    *
    * @return string|null
    */
    public function getIoType()
    {
        return $this->container['ioType'];
    }

    /**
    * Sets ioType
    *
    * @param string|null $ioType **参数解释**: IO类型。 **取值范围**: - ULTRAHIGH：超高IO。 - ESSD：极速型SSD。
    *
    * @return $this
    */
    public function setIoType($ioType)
    {
        $this->container['ioType'] = $ioType;
        return $this;
    }

    /**
    * Gets mediaType
    *  **参数解释**: 存储介质类型。 **取值范围**: - SAS：高IO云硬盘。 - SSD：超高IO云硬盘。 - ESSD：极速型SSD云硬盘。
    *
    * @return string|null
    */
    public function getMediaType()
    {
        return $this->container['mediaType'];
    }

    /**
    * Sets mediaType
    *
    * @param string|null $mediaType **参数解释**: 存储介质类型。 **取值范围**: - SAS：高IO云硬盘。 - SSD：超高IO云硬盘。 - ESSD：极速型SSD云硬盘。
    *
    * @return $this
    */
    public function setMediaType($mediaType)
    {
        $this->container['mediaType'] = $mediaType;
        return $this;
    }

    /**
    * Gets azStatus
    *  **参数解释**: 存储规格在各个可用区的状态。 **取值范围**: - normal：正常。 - sellout：已售罄。 - unknown：状态未知。 - unsupported：不支持。 - abandon：已废弃。
    *
    * @return map[string,string]|null
    */
    public function getAzStatus()
    {
        return $this->container['azStatus'];
    }

    /**
    * Sets azStatus
    *
    * @param map[string,string]|null $azStatus **参数解释**: 存储规格在各个可用区的状态。 **取值范围**: - normal：正常。 - sellout：已售罄。 - unknown：状态未知。 - unsupported：不支持。 - abandon：已废弃。
    *
    * @return $this
    */
    public function setAzStatus($azStatus)
    {
        $this->container['azStatus'] = $azStatus;
        return $this;
    }

    /**
    * Gets supportComputeGroupType
    *  **参数解释**: 该存储规格支持的计算规格组类型列表。 **取值范围**: 不涉及。
    *
    * @return string[]|null
    */
    public function getSupportComputeGroupType()
    {
        return $this->container['supportComputeGroupType'];
    }

    /**
    * Sets supportComputeGroupType
    *
    * @param string[]|null $supportComputeGroupType **参数解释**: 该存储规格支持的计算规格组类型列表。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSupportComputeGroupType($supportComputeGroupType)
    {
        $this->container['supportComputeGroupType'] = $supportComputeGroupType;
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

