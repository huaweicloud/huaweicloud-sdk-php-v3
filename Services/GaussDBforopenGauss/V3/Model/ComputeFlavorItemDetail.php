<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComputeFlavorItemDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComputeFlavorItemDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**: 规格ID。 **取值范围**: 不涉及。
    * specCode  **参数解释**: 规格编码。 **取值范围**: 不涉及。
    * iaasCode  **参数解释**: IaaS规格编码。 **取值范围**: 不涉及。
    * vcpus  **参数解释**: CPU核数。 **取值范围**: 不涉及。
    * ram  **参数解释**: 内存大小，单位GB。 **取值范围**: 不涉及。
    * supportedIpv6  **参数解释**: 是否支持IPv6。 **取值范围**: - true：支持 - false：不支持
    * azStatus  **参数解释**: 规格在各个可用区的状态。 **取值范围**: - normal：正常。 - sellout：已售罄。 - unknown：状态未知。 - unsupported：不支持。 - abandon：已废弃。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'specCode' => 'string',
            'iaasCode' => 'string',
            'vcpus' => 'string',
            'ram' => 'string',
            'supportedIpv6' => 'bool',
            'azStatus' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**: 规格ID。 **取值范围**: 不涉及。
    * specCode  **参数解释**: 规格编码。 **取值范围**: 不涉及。
    * iaasCode  **参数解释**: IaaS规格编码。 **取值范围**: 不涉及。
    * vcpus  **参数解释**: CPU核数。 **取值范围**: 不涉及。
    * ram  **参数解释**: 内存大小，单位GB。 **取值范围**: 不涉及。
    * supportedIpv6  **参数解释**: 是否支持IPv6。 **取值范围**: - true：支持 - false：不支持
    * azStatus  **参数解释**: 规格在各个可用区的状态。 **取值范围**: - normal：正常。 - sellout：已售罄。 - unknown：状态未知。 - unsupported：不支持。 - abandon：已废弃。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'specCode' => null,
        'iaasCode' => null,
        'vcpus' => null,
        'ram' => null,
        'supportedIpv6' => null,
        'azStatus' => null
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
    * id  **参数解释**: 规格ID。 **取值范围**: 不涉及。
    * specCode  **参数解释**: 规格编码。 **取值范围**: 不涉及。
    * iaasCode  **参数解释**: IaaS规格编码。 **取值范围**: 不涉及。
    * vcpus  **参数解释**: CPU核数。 **取值范围**: 不涉及。
    * ram  **参数解释**: 内存大小，单位GB。 **取值范围**: 不涉及。
    * supportedIpv6  **参数解释**: 是否支持IPv6。 **取值范围**: - true：支持 - false：不支持
    * azStatus  **参数解释**: 规格在各个可用区的状态。 **取值范围**: - normal：正常。 - sellout：已售罄。 - unknown：状态未知。 - unsupported：不支持。 - abandon：已废弃。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'specCode' => 'spec_code',
            'iaasCode' => 'iaas_code',
            'vcpus' => 'vcpus',
            'ram' => 'ram',
            'supportedIpv6' => 'supported_ipv6',
            'azStatus' => 'az_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**: 规格ID。 **取值范围**: 不涉及。
    * specCode  **参数解释**: 规格编码。 **取值范围**: 不涉及。
    * iaasCode  **参数解释**: IaaS规格编码。 **取值范围**: 不涉及。
    * vcpus  **参数解释**: CPU核数。 **取值范围**: 不涉及。
    * ram  **参数解释**: 内存大小，单位GB。 **取值范围**: 不涉及。
    * supportedIpv6  **参数解释**: 是否支持IPv6。 **取值范围**: - true：支持 - false：不支持
    * azStatus  **参数解释**: 规格在各个可用区的状态。 **取值范围**: - normal：正常。 - sellout：已售罄。 - unknown：状态未知。 - unsupported：不支持。 - abandon：已废弃。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'specCode' => 'setSpecCode',
            'iaasCode' => 'setIaasCode',
            'vcpus' => 'setVcpus',
            'ram' => 'setRam',
            'supportedIpv6' => 'setSupportedIpv6',
            'azStatus' => 'setAzStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**: 规格ID。 **取值范围**: 不涉及。
    * specCode  **参数解释**: 规格编码。 **取值范围**: 不涉及。
    * iaasCode  **参数解释**: IaaS规格编码。 **取值范围**: 不涉及。
    * vcpus  **参数解释**: CPU核数。 **取值范围**: 不涉及。
    * ram  **参数解释**: 内存大小，单位GB。 **取值范围**: 不涉及。
    * supportedIpv6  **参数解释**: 是否支持IPv6。 **取值范围**: - true：支持 - false：不支持
    * azStatus  **参数解释**: 规格在各个可用区的状态。 **取值范围**: - normal：正常。 - sellout：已售罄。 - unknown：状态未知。 - unsupported：不支持。 - abandon：已废弃。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'specCode' => 'getSpecCode',
            'iaasCode' => 'getIaasCode',
            'vcpus' => 'getVcpus',
            'ram' => 'getRam',
            'supportedIpv6' => 'getSupportedIpv6',
            'azStatus' => 'getAzStatus'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['iaasCode'] = isset($data['iaasCode']) ? $data['iaasCode'] : null;
        $this->container['vcpus'] = isset($data['vcpus']) ? $data['vcpus'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['supportedIpv6'] = isset($data['supportedIpv6']) ? $data['supportedIpv6'] : null;
        $this->container['azStatus'] = isset($data['azStatus']) ? $data['azStatus'] : null;
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
    * Gets id
    *  **参数解释**: 规格ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**: 规格ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets specCode
    *  **参数解释**: 规格编码。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string|null $specCode **参数解释**: 规格编码。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets iaasCode
    *  **参数解释**: IaaS规格编码。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getIaasCode()
    {
        return $this->container['iaasCode'];
    }

    /**
    * Sets iaasCode
    *
    * @param string|null $iaasCode **参数解释**: IaaS规格编码。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setIaasCode($iaasCode)
    {
        $this->container['iaasCode'] = $iaasCode;
        return $this;
    }

    /**
    * Gets vcpus
    *  **参数解释**: CPU核数。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getVcpus()
    {
        return $this->container['vcpus'];
    }

    /**
    * Sets vcpus
    *
    * @param string|null $vcpus **参数解释**: CPU核数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setVcpus($vcpus)
    {
        $this->container['vcpus'] = $vcpus;
        return $this;
    }

    /**
    * Gets ram
    *  **参数解释**: 内存大小，单位GB。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
    * Sets ram
    *
    * @param string|null $ram **参数解释**: 内存大小，单位GB。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
        return $this;
    }

    /**
    * Gets supportedIpv6
    *  **参数解释**: 是否支持IPv6。 **取值范围**: - true：支持 - false：不支持
    *
    * @return bool|null
    */
    public function getSupportedIpv6()
    {
        return $this->container['supportedIpv6'];
    }

    /**
    * Sets supportedIpv6
    *
    * @param bool|null $supportedIpv6 **参数解释**: 是否支持IPv6。 **取值范围**: - true：支持 - false：不支持
    *
    * @return $this
    */
    public function setSupportedIpv6($supportedIpv6)
    {
        $this->container['supportedIpv6'] = $supportedIpv6;
        return $this;
    }

    /**
    * Gets azStatus
    *  **参数解释**: 规格在各个可用区的状态。 **取值范围**: - normal：正常。 - sellout：已售罄。 - unknown：状态未知。 - unsupported：不支持。 - abandon：已废弃。
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
    * @param map[string,string]|null $azStatus **参数解释**: 规格在各个可用区的状态。 **取值范围**: - normal：正常。 - sellout：已售罄。 - unknown：状态未知。 - unsupported：不支持。 - abandon：已废弃。
    *
    * @return $this
    */
    public function setAzStatus($azStatus)
    {
        $this->container['azStatus'] = $azStatus;
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

