<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Flag implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Flag';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pci3ds  是否开启pci_3ds合规认证   - true：开启   - false：不开启
    * pciDss  是否开启pci_dss合规认证   - true：开启   - false：不开启
    * cname  old：代表域名使用的老的cname，new：代表域名使用新的cname
    * isDualAz  域名是否开启ipv6   - true：开启   - false：不开启
    * ipv6  域名是否开启ipv6   - true：开启   - false：不开启
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pci3ds' => 'string',
            'pciDss' => 'string',
            'cname' => 'string',
            'isDualAz' => 'string',
            'ipv6' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pci3ds  是否开启pci_3ds合规认证   - true：开启   - false：不开启
    * pciDss  是否开启pci_dss合规认证   - true：开启   - false：不开启
    * cname  old：代表域名使用的老的cname，new：代表域名使用新的cname
    * isDualAz  域名是否开启ipv6   - true：开启   - false：不开启
    * ipv6  域名是否开启ipv6   - true：开启   - false：不开启
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pci3ds' => null,
        'pciDss' => null,
        'cname' => null,
        'isDualAz' => null,
        'ipv6' => null
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
    * pci3ds  是否开启pci_3ds合规认证   - true：开启   - false：不开启
    * pciDss  是否开启pci_dss合规认证   - true：开启   - false：不开启
    * cname  old：代表域名使用的老的cname，new：代表域名使用新的cname
    * isDualAz  域名是否开启ipv6   - true：开启   - false：不开启
    * ipv6  域名是否开启ipv6   - true：开启   - false：不开启
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pci3ds' => 'pci_3ds',
            'pciDss' => 'pci_dss',
            'cname' => 'cname',
            'isDualAz' => 'is_dual_az',
            'ipv6' => 'ipv6'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pci3ds  是否开启pci_3ds合规认证   - true：开启   - false：不开启
    * pciDss  是否开启pci_dss合规认证   - true：开启   - false：不开启
    * cname  old：代表域名使用的老的cname，new：代表域名使用新的cname
    * isDualAz  域名是否开启ipv6   - true：开启   - false：不开启
    * ipv6  域名是否开启ipv6   - true：开启   - false：不开启
    *
    * @var string[]
    */
    protected static $setters = [
            'pci3ds' => 'setPci3ds',
            'pciDss' => 'setPciDss',
            'cname' => 'setCname',
            'isDualAz' => 'setIsDualAz',
            'ipv6' => 'setIpv6'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pci3ds  是否开启pci_3ds合规认证   - true：开启   - false：不开启
    * pciDss  是否开启pci_dss合规认证   - true：开启   - false：不开启
    * cname  old：代表域名使用的老的cname，new：代表域名使用新的cname
    * isDualAz  域名是否开启ipv6   - true：开启   - false：不开启
    * ipv6  域名是否开启ipv6   - true：开启   - false：不开启
    *
    * @var string[]
    */
    protected static $getters = [
            'pci3ds' => 'getPci3ds',
            'pciDss' => 'getPciDss',
            'cname' => 'getCname',
            'isDualAz' => 'getIsDualAz',
            'ipv6' => 'getIpv6'
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
    const PCI3DS_TRUE = 'true';
    const PCI3DS_FALSE = 'false';
    const PCI_DSS_TRUE = 'true';
    const PCI_DSS_FALSE = 'false';
    const CNAME_OLD = 'old';
    const CNAME__NEW = 'new';
    const IS_DUAL_AZ_TRUE = 'true';
    const IS_DUAL_AZ_FALSE = 'false';
    const IPV6_TRUE = 'true';
    const IPV6_FALSE = 'false';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPci3dsAllowableValues()
    {
        return [
            self::PCI3DS_TRUE,
            self::PCI3DS_FALSE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPciDssAllowableValues()
    {
        return [
            self::PCI_DSS_TRUE,
            self::PCI_DSS_FALSE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCnameAllowableValues()
    {
        return [
            self::CNAME_OLD,
            self::CNAME__NEW,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIsDualAzAllowableValues()
    {
        return [
            self::IS_DUAL_AZ_TRUE,
            self::IS_DUAL_AZ_FALSE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIpv6AllowableValues()
    {
        return [
            self::IPV6_TRUE,
            self::IPV6_FALSE,
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
        $this->container['pci3ds'] = isset($data['pci3ds']) ? $data['pci3ds'] : null;
        $this->container['pciDss'] = isset($data['pciDss']) ? $data['pciDss'] : null;
        $this->container['cname'] = isset($data['cname']) ? $data['cname'] : null;
        $this->container['isDualAz'] = isset($data['isDualAz']) ? $data['isDualAz'] : null;
        $this->container['ipv6'] = isset($data['ipv6']) ? $data['ipv6'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPci3dsAllowableValues();
                if (!is_null($this->container['pci3ds']) && !in_array($this->container['pci3ds'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'pci3ds', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getPciDssAllowableValues();
                if (!is_null($this->container['pciDss']) && !in_array($this->container['pciDss'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'pciDss', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getCnameAllowableValues();
                if (!is_null($this->container['cname']) && !in_array($this->container['cname'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'cname', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getIsDualAzAllowableValues();
                if (!is_null($this->container['isDualAz']) && !in_array($this->container['isDualAz'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'isDualAz', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getIpv6AllowableValues();
                if (!is_null($this->container['ipv6']) && !in_array($this->container['ipv6'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ipv6', must be one of '%s'",
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
    * Gets pci3ds
    *  是否开启pci_3ds合规认证   - true：开启   - false：不开启
    *
    * @return string|null
    */
    public function getPci3ds()
    {
        return $this->container['pci3ds'];
    }

    /**
    * Sets pci3ds
    *
    * @param string|null $pci3ds 是否开启pci_3ds合规认证   - true：开启   - false：不开启
    *
    * @return $this
    */
    public function setPci3ds($pci3ds)
    {
        $this->container['pci3ds'] = $pci3ds;
        return $this;
    }

    /**
    * Gets pciDss
    *  是否开启pci_dss合规认证   - true：开启   - false：不开启
    *
    * @return string|null
    */
    public function getPciDss()
    {
        return $this->container['pciDss'];
    }

    /**
    * Sets pciDss
    *
    * @param string|null $pciDss 是否开启pci_dss合规认证   - true：开启   - false：不开启
    *
    * @return $this
    */
    public function setPciDss($pciDss)
    {
        $this->container['pciDss'] = $pciDss;
        return $this;
    }

    /**
    * Gets cname
    *  old：代表域名使用的老的cname，new：代表域名使用新的cname
    *
    * @return string|null
    */
    public function getCname()
    {
        return $this->container['cname'];
    }

    /**
    * Sets cname
    *
    * @param string|null $cname old：代表域名使用的老的cname，new：代表域名使用新的cname
    *
    * @return $this
    */
    public function setCname($cname)
    {
        $this->container['cname'] = $cname;
        return $this;
    }

    /**
    * Gets isDualAz
    *  域名是否开启ipv6   - true：开启   - false：不开启
    *
    * @return string|null
    */
    public function getIsDualAz()
    {
        return $this->container['isDualAz'];
    }

    /**
    * Sets isDualAz
    *
    * @param string|null $isDualAz 域名是否开启ipv6   - true：开启   - false：不开启
    *
    * @return $this
    */
    public function setIsDualAz($isDualAz)
    {
        $this->container['isDualAz'] = $isDualAz;
        return $this;
    }

    /**
    * Gets ipv6
    *  域名是否开启ipv6   - true：开启   - false：不开启
    *
    * @return string|null
    */
    public function getIpv6()
    {
        return $this->container['ipv6'];
    }

    /**
    * Sets ipv6
    *
    * @param string|null $ipv6 域名是否开启ipv6   - true：开启   - false：不开启
    *
    * @return $this
    */
    public function setIpv6($ipv6)
    {
        $this->container['ipv6'] = $ipv6;
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

