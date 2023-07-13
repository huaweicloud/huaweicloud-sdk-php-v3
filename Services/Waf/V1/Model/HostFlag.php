<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HostFlag implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HostFlag';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pci3ds  是否开启pci_3ds合规认证，该参数需要与tls和cipher参数同时使用，且tls参数值需要设置为TLS v1.2，cipher参数值设置为cipher_2。注：pci_3ds合规认证开启后不支持关闭，在开启pci_3ds合规认证前，请先阅读帮助中心Web应用防火墙WAF文档中关于pci_3ds合规认证的说明   - true：开启   - false：不开启
    * pciDss  是否开启pci_dss合规认证，该参数需要与tls和cipher参数同时使用，且tls参数值需要设置为TLS v1.2，cipher参数值设置为cipher_2。注：在开启pci_dss合规认证前，请先阅读帮助中心Web应用防火墙WAF文档中关于pci_dss合规认证的说明   - true：开启   - false：不开启
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pci3ds' => 'string',
            'pciDss' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pci3ds  是否开启pci_3ds合规认证，该参数需要与tls和cipher参数同时使用，且tls参数值需要设置为TLS v1.2，cipher参数值设置为cipher_2。注：pci_3ds合规认证开启后不支持关闭，在开启pci_3ds合规认证前，请先阅读帮助中心Web应用防火墙WAF文档中关于pci_3ds合规认证的说明   - true：开启   - false：不开启
    * pciDss  是否开启pci_dss合规认证，该参数需要与tls和cipher参数同时使用，且tls参数值需要设置为TLS v1.2，cipher参数值设置为cipher_2。注：在开启pci_dss合规认证前，请先阅读帮助中心Web应用防火墙WAF文档中关于pci_dss合规认证的说明   - true：开启   - false：不开启
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pci3ds' => null,
        'pciDss' => null
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
    * pci3ds  是否开启pci_3ds合规认证，该参数需要与tls和cipher参数同时使用，且tls参数值需要设置为TLS v1.2，cipher参数值设置为cipher_2。注：pci_3ds合规认证开启后不支持关闭，在开启pci_3ds合规认证前，请先阅读帮助中心Web应用防火墙WAF文档中关于pci_3ds合规认证的说明   - true：开启   - false：不开启
    * pciDss  是否开启pci_dss合规认证，该参数需要与tls和cipher参数同时使用，且tls参数值需要设置为TLS v1.2，cipher参数值设置为cipher_2。注：在开启pci_dss合规认证前，请先阅读帮助中心Web应用防火墙WAF文档中关于pci_dss合规认证的说明   - true：开启   - false：不开启
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pci3ds' => 'pci_3ds',
            'pciDss' => 'pci_dss'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pci3ds  是否开启pci_3ds合规认证，该参数需要与tls和cipher参数同时使用，且tls参数值需要设置为TLS v1.2，cipher参数值设置为cipher_2。注：pci_3ds合规认证开启后不支持关闭，在开启pci_3ds合规认证前，请先阅读帮助中心Web应用防火墙WAF文档中关于pci_3ds合规认证的说明   - true：开启   - false：不开启
    * pciDss  是否开启pci_dss合规认证，该参数需要与tls和cipher参数同时使用，且tls参数值需要设置为TLS v1.2，cipher参数值设置为cipher_2。注：在开启pci_dss合规认证前，请先阅读帮助中心Web应用防火墙WAF文档中关于pci_dss合规认证的说明   - true：开启   - false：不开启
    *
    * @var string[]
    */
    protected static $setters = [
            'pci3ds' => 'setPci3ds',
            'pciDss' => 'setPciDss'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pci3ds  是否开启pci_3ds合规认证，该参数需要与tls和cipher参数同时使用，且tls参数值需要设置为TLS v1.2，cipher参数值设置为cipher_2。注：pci_3ds合规认证开启后不支持关闭，在开启pci_3ds合规认证前，请先阅读帮助中心Web应用防火墙WAF文档中关于pci_3ds合规认证的说明   - true：开启   - false：不开启
    * pciDss  是否开启pci_dss合规认证，该参数需要与tls和cipher参数同时使用，且tls参数值需要设置为TLS v1.2，cipher参数值设置为cipher_2。注：在开启pci_dss合规认证前，请先阅读帮助中心Web应用防火墙WAF文档中关于pci_dss合规认证的说明   - true：开启   - false：不开启
    *
    * @var string[]
    */
    protected static $getters = [
            'pci3ds' => 'getPci3ds',
            'pciDss' => 'getPciDss'
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
    *  是否开启pci_3ds合规认证，该参数需要与tls和cipher参数同时使用，且tls参数值需要设置为TLS v1.2，cipher参数值设置为cipher_2。注：pci_3ds合规认证开启后不支持关闭，在开启pci_3ds合规认证前，请先阅读帮助中心Web应用防火墙WAF文档中关于pci_3ds合规认证的说明   - true：开启   - false：不开启
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
    * @param string|null $pci3ds 是否开启pci_3ds合规认证，该参数需要与tls和cipher参数同时使用，且tls参数值需要设置为TLS v1.2，cipher参数值设置为cipher_2。注：pci_3ds合规认证开启后不支持关闭，在开启pci_3ds合规认证前，请先阅读帮助中心Web应用防火墙WAF文档中关于pci_3ds合规认证的说明   - true：开启   - false：不开启
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
    *  是否开启pci_dss合规认证，该参数需要与tls和cipher参数同时使用，且tls参数值需要设置为TLS v1.2，cipher参数值设置为cipher_2。注：在开启pci_dss合规认证前，请先阅读帮助中心Web应用防火墙WAF文档中关于pci_dss合规认证的说明   - true：开启   - false：不开启
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
    * @param string|null $pciDss 是否开启pci_dss合规认证，该参数需要与tls和cipher参数同时使用，且tls参数值需要设置为TLS v1.2，cipher参数值设置为cipher_2。注：在开启pci_dss合规认证前，请先阅读帮助中心Web应用防火墙WAF文档中关于pci_dss合规认证的说明   - true：开启   - false：不开启
    *
    * @return $this
    */
    public function setPciDss($pciDss)
    {
        $this->container['pciDss'] = $pciDss;
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

