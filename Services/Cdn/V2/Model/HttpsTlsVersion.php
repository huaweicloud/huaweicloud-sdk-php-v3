<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HttpsTlsVersion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HttpsTlsVersion';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tlsVersion  **参数解释：** 传输层安全性协议，即TLS版本配置 **约束限制：** - 不可全部关闭 - 需开启连续或单个版本号，例：不可仅开启TLS1.0/1.2而关闭TLS1.1 - 多版本开启时，使用“,”拼接，例：TLSv1.1,TLSv1.2 - 配置TLS版本需要先开启HTTPS国际证书  **取值范围：** 目前支持TLSv1.0/1.1/1.2/1.3四个版本的协议  **默认取值：** 不涉及
    * cipherSuiteGroup  **参数解释：** 加密算法套件组 **约束限制：** TLS版本仅选择1.0和（或）1.1时，不支持选择强加密套件。 **取值范围：** - default: 默认加密套件 - general: 一般加密套件 - strict: 强加密套件 - custom: 自定义加密套件  **默认取值：** 不涉及
    * cipherSuite  **参数解释：** 加密套件 **约束限制：** - 当选择自定义加密套件时，必传 - 选择多个加密套件是以“,”分隔  **取值范围：** - ECDHE-ECDSA-AES128-GCM-SHA256 - ECDHE-ECDSA-AES256-GCM-SHA384 - ECDHE-RSA-AES128-GCM-SHA256 - ECDHE-RSA-AES256-GCM-SHA384 - DHE-RSA-AES128-GCM-SHA256 - DHE-RSA-AES256-GCM-SHA384 - ECDHE-ECDSA-AES128-SHA256 - ECDHE-ECDSA-AES256-SHA384 - ECDHE-RSA-AES128-SHA - ECDHE-RSA-AES128-SHA256 - ECDHE-RSA-AES256-SHA - ECDHE-RSA-AES256-SHA384 - DHE-RSA-AES128-SHA - DHE-RSA-AES128-SHA256 - DHE-RSA-AES256-SHA - DHE-RSA-AES256-SHA256 - AES128-GCM-SHA256 - AES256-GCM-SHA384 - AES128-SHA256 - AES256-SHA256 - ECDHE-ECDSA-CHACHA20-POLY1305 - ECDHE-RSA-CHACHA20-POLY1305 - DHE-RSA-CHACHA20-POLY1305 - ECDHE-ECDSA-AES128-SHA - ECDHE-ECDSA-AES256-SHA - AES128-SHA - AES256-SHA - DES-CBC3-SHA - RC4-SHA  **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tlsVersion' => 'string',
            'cipherSuiteGroup' => 'string',
            'cipherSuite' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tlsVersion  **参数解释：** 传输层安全性协议，即TLS版本配置 **约束限制：** - 不可全部关闭 - 需开启连续或单个版本号，例：不可仅开启TLS1.0/1.2而关闭TLS1.1 - 多版本开启时，使用“,”拼接，例：TLSv1.1,TLSv1.2 - 配置TLS版本需要先开启HTTPS国际证书  **取值范围：** 目前支持TLSv1.0/1.1/1.2/1.3四个版本的协议  **默认取值：** 不涉及
    * cipherSuiteGroup  **参数解释：** 加密算法套件组 **约束限制：** TLS版本仅选择1.0和（或）1.1时，不支持选择强加密套件。 **取值范围：** - default: 默认加密套件 - general: 一般加密套件 - strict: 强加密套件 - custom: 自定义加密套件  **默认取值：** 不涉及
    * cipherSuite  **参数解释：** 加密套件 **约束限制：** - 当选择自定义加密套件时，必传 - 选择多个加密套件是以“,”分隔  **取值范围：** - ECDHE-ECDSA-AES128-GCM-SHA256 - ECDHE-ECDSA-AES256-GCM-SHA384 - ECDHE-RSA-AES128-GCM-SHA256 - ECDHE-RSA-AES256-GCM-SHA384 - DHE-RSA-AES128-GCM-SHA256 - DHE-RSA-AES256-GCM-SHA384 - ECDHE-ECDSA-AES128-SHA256 - ECDHE-ECDSA-AES256-SHA384 - ECDHE-RSA-AES128-SHA - ECDHE-RSA-AES128-SHA256 - ECDHE-RSA-AES256-SHA - ECDHE-RSA-AES256-SHA384 - DHE-RSA-AES128-SHA - DHE-RSA-AES128-SHA256 - DHE-RSA-AES256-SHA - DHE-RSA-AES256-SHA256 - AES128-GCM-SHA256 - AES256-GCM-SHA384 - AES128-SHA256 - AES256-SHA256 - ECDHE-ECDSA-CHACHA20-POLY1305 - ECDHE-RSA-CHACHA20-POLY1305 - DHE-RSA-CHACHA20-POLY1305 - ECDHE-ECDSA-AES128-SHA - ECDHE-ECDSA-AES256-SHA - AES128-SHA - AES256-SHA - DES-CBC3-SHA - RC4-SHA  **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tlsVersion' => null,
        'cipherSuiteGroup' => null,
        'cipherSuite' => null
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
    * tlsVersion  **参数解释：** 传输层安全性协议，即TLS版本配置 **约束限制：** - 不可全部关闭 - 需开启连续或单个版本号，例：不可仅开启TLS1.0/1.2而关闭TLS1.1 - 多版本开启时，使用“,”拼接，例：TLSv1.1,TLSv1.2 - 配置TLS版本需要先开启HTTPS国际证书  **取值范围：** 目前支持TLSv1.0/1.1/1.2/1.3四个版本的协议  **默认取值：** 不涉及
    * cipherSuiteGroup  **参数解释：** 加密算法套件组 **约束限制：** TLS版本仅选择1.0和（或）1.1时，不支持选择强加密套件。 **取值范围：** - default: 默认加密套件 - general: 一般加密套件 - strict: 强加密套件 - custom: 自定义加密套件  **默认取值：** 不涉及
    * cipherSuite  **参数解释：** 加密套件 **约束限制：** - 当选择自定义加密套件时，必传 - 选择多个加密套件是以“,”分隔  **取值范围：** - ECDHE-ECDSA-AES128-GCM-SHA256 - ECDHE-ECDSA-AES256-GCM-SHA384 - ECDHE-RSA-AES128-GCM-SHA256 - ECDHE-RSA-AES256-GCM-SHA384 - DHE-RSA-AES128-GCM-SHA256 - DHE-RSA-AES256-GCM-SHA384 - ECDHE-ECDSA-AES128-SHA256 - ECDHE-ECDSA-AES256-SHA384 - ECDHE-RSA-AES128-SHA - ECDHE-RSA-AES128-SHA256 - ECDHE-RSA-AES256-SHA - ECDHE-RSA-AES256-SHA384 - DHE-RSA-AES128-SHA - DHE-RSA-AES128-SHA256 - DHE-RSA-AES256-SHA - DHE-RSA-AES256-SHA256 - AES128-GCM-SHA256 - AES256-GCM-SHA384 - AES128-SHA256 - AES256-SHA256 - ECDHE-ECDSA-CHACHA20-POLY1305 - ECDHE-RSA-CHACHA20-POLY1305 - DHE-RSA-CHACHA20-POLY1305 - ECDHE-ECDSA-AES128-SHA - ECDHE-ECDSA-AES256-SHA - AES128-SHA - AES256-SHA - DES-CBC3-SHA - RC4-SHA  **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tlsVersion' => 'tls_version',
            'cipherSuiteGroup' => 'cipher_suite_group',
            'cipherSuite' => 'cipher_suite'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tlsVersion  **参数解释：** 传输层安全性协议，即TLS版本配置 **约束限制：** - 不可全部关闭 - 需开启连续或单个版本号，例：不可仅开启TLS1.0/1.2而关闭TLS1.1 - 多版本开启时，使用“,”拼接，例：TLSv1.1,TLSv1.2 - 配置TLS版本需要先开启HTTPS国际证书  **取值范围：** 目前支持TLSv1.0/1.1/1.2/1.3四个版本的协议  **默认取值：** 不涉及
    * cipherSuiteGroup  **参数解释：** 加密算法套件组 **约束限制：** TLS版本仅选择1.0和（或）1.1时，不支持选择强加密套件。 **取值范围：** - default: 默认加密套件 - general: 一般加密套件 - strict: 强加密套件 - custom: 自定义加密套件  **默认取值：** 不涉及
    * cipherSuite  **参数解释：** 加密套件 **约束限制：** - 当选择自定义加密套件时，必传 - 选择多个加密套件是以“,”分隔  **取值范围：** - ECDHE-ECDSA-AES128-GCM-SHA256 - ECDHE-ECDSA-AES256-GCM-SHA384 - ECDHE-RSA-AES128-GCM-SHA256 - ECDHE-RSA-AES256-GCM-SHA384 - DHE-RSA-AES128-GCM-SHA256 - DHE-RSA-AES256-GCM-SHA384 - ECDHE-ECDSA-AES128-SHA256 - ECDHE-ECDSA-AES256-SHA384 - ECDHE-RSA-AES128-SHA - ECDHE-RSA-AES128-SHA256 - ECDHE-RSA-AES256-SHA - ECDHE-RSA-AES256-SHA384 - DHE-RSA-AES128-SHA - DHE-RSA-AES128-SHA256 - DHE-RSA-AES256-SHA - DHE-RSA-AES256-SHA256 - AES128-GCM-SHA256 - AES256-GCM-SHA384 - AES128-SHA256 - AES256-SHA256 - ECDHE-ECDSA-CHACHA20-POLY1305 - ECDHE-RSA-CHACHA20-POLY1305 - DHE-RSA-CHACHA20-POLY1305 - ECDHE-ECDSA-AES128-SHA - ECDHE-ECDSA-AES256-SHA - AES128-SHA - AES256-SHA - DES-CBC3-SHA - RC4-SHA  **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'tlsVersion' => 'setTlsVersion',
            'cipherSuiteGroup' => 'setCipherSuiteGroup',
            'cipherSuite' => 'setCipherSuite'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tlsVersion  **参数解释：** 传输层安全性协议，即TLS版本配置 **约束限制：** - 不可全部关闭 - 需开启连续或单个版本号，例：不可仅开启TLS1.0/1.2而关闭TLS1.1 - 多版本开启时，使用“,”拼接，例：TLSv1.1,TLSv1.2 - 配置TLS版本需要先开启HTTPS国际证书  **取值范围：** 目前支持TLSv1.0/1.1/1.2/1.3四个版本的协议  **默认取值：** 不涉及
    * cipherSuiteGroup  **参数解释：** 加密算法套件组 **约束限制：** TLS版本仅选择1.0和（或）1.1时，不支持选择强加密套件。 **取值范围：** - default: 默认加密套件 - general: 一般加密套件 - strict: 强加密套件 - custom: 自定义加密套件  **默认取值：** 不涉及
    * cipherSuite  **参数解释：** 加密套件 **约束限制：** - 当选择自定义加密套件时，必传 - 选择多个加密套件是以“,”分隔  **取值范围：** - ECDHE-ECDSA-AES128-GCM-SHA256 - ECDHE-ECDSA-AES256-GCM-SHA384 - ECDHE-RSA-AES128-GCM-SHA256 - ECDHE-RSA-AES256-GCM-SHA384 - DHE-RSA-AES128-GCM-SHA256 - DHE-RSA-AES256-GCM-SHA384 - ECDHE-ECDSA-AES128-SHA256 - ECDHE-ECDSA-AES256-SHA384 - ECDHE-RSA-AES128-SHA - ECDHE-RSA-AES128-SHA256 - ECDHE-RSA-AES256-SHA - ECDHE-RSA-AES256-SHA384 - DHE-RSA-AES128-SHA - DHE-RSA-AES128-SHA256 - DHE-RSA-AES256-SHA - DHE-RSA-AES256-SHA256 - AES128-GCM-SHA256 - AES256-GCM-SHA384 - AES128-SHA256 - AES256-SHA256 - ECDHE-ECDSA-CHACHA20-POLY1305 - ECDHE-RSA-CHACHA20-POLY1305 - DHE-RSA-CHACHA20-POLY1305 - ECDHE-ECDSA-AES128-SHA - ECDHE-ECDSA-AES256-SHA - AES128-SHA - AES256-SHA - DES-CBC3-SHA - RC4-SHA  **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'tlsVersion' => 'getTlsVersion',
            'cipherSuiteGroup' => 'getCipherSuiteGroup',
            'cipherSuite' => 'getCipherSuite'
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
        $this->container['tlsVersion'] = isset($data['tlsVersion']) ? $data['tlsVersion'] : null;
        $this->container['cipherSuiteGroup'] = isset($data['cipherSuiteGroup']) ? $data['cipherSuiteGroup'] : null;
        $this->container['cipherSuite'] = isset($data['cipherSuite']) ? $data['cipherSuite'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tlsVersion'] === null) {
            $invalidProperties[] = "'tlsVersion' can't be null";
        }
        if ($this->container['cipherSuiteGroup'] === null) {
            $invalidProperties[] = "'cipherSuiteGroup' can't be null";
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
    * Gets tlsVersion
    *  **参数解释：** 传输层安全性协议，即TLS版本配置 **约束限制：** - 不可全部关闭 - 需开启连续或单个版本号，例：不可仅开启TLS1.0/1.2而关闭TLS1.1 - 多版本开启时，使用“,”拼接，例：TLSv1.1,TLSv1.2 - 配置TLS版本需要先开启HTTPS国际证书  **取值范围：** 目前支持TLSv1.0/1.1/1.2/1.3四个版本的协议  **默认取值：** 不涉及
    *
    * @return string
    */
    public function getTlsVersion()
    {
        return $this->container['tlsVersion'];
    }

    /**
    * Sets tlsVersion
    *
    * @param string $tlsVersion **参数解释：** 传输层安全性协议，即TLS版本配置 **约束限制：** - 不可全部关闭 - 需开启连续或单个版本号，例：不可仅开启TLS1.0/1.2而关闭TLS1.1 - 多版本开启时，使用“,”拼接，例：TLSv1.1,TLSv1.2 - 配置TLS版本需要先开启HTTPS国际证书  **取值范围：** 目前支持TLSv1.0/1.1/1.2/1.3四个版本的协议  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTlsVersion($tlsVersion)
    {
        $this->container['tlsVersion'] = $tlsVersion;
        return $this;
    }

    /**
    * Gets cipherSuiteGroup
    *  **参数解释：** 加密算法套件组 **约束限制：** TLS版本仅选择1.0和（或）1.1时，不支持选择强加密套件。 **取值范围：** - default: 默认加密套件 - general: 一般加密套件 - strict: 强加密套件 - custom: 自定义加密套件  **默认取值：** 不涉及
    *
    * @return string
    */
    public function getCipherSuiteGroup()
    {
        return $this->container['cipherSuiteGroup'];
    }

    /**
    * Sets cipherSuiteGroup
    *
    * @param string $cipherSuiteGroup **参数解释：** 加密算法套件组 **约束限制：** TLS版本仅选择1.0和（或）1.1时，不支持选择强加密套件。 **取值范围：** - default: 默认加密套件 - general: 一般加密套件 - strict: 强加密套件 - custom: 自定义加密套件  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCipherSuiteGroup($cipherSuiteGroup)
    {
        $this->container['cipherSuiteGroup'] = $cipherSuiteGroup;
        return $this;
    }

    /**
    * Gets cipherSuite
    *  **参数解释：** 加密套件 **约束限制：** - 当选择自定义加密套件时，必传 - 选择多个加密套件是以“,”分隔  **取值范围：** - ECDHE-ECDSA-AES128-GCM-SHA256 - ECDHE-ECDSA-AES256-GCM-SHA384 - ECDHE-RSA-AES128-GCM-SHA256 - ECDHE-RSA-AES256-GCM-SHA384 - DHE-RSA-AES128-GCM-SHA256 - DHE-RSA-AES256-GCM-SHA384 - ECDHE-ECDSA-AES128-SHA256 - ECDHE-ECDSA-AES256-SHA384 - ECDHE-RSA-AES128-SHA - ECDHE-RSA-AES128-SHA256 - ECDHE-RSA-AES256-SHA - ECDHE-RSA-AES256-SHA384 - DHE-RSA-AES128-SHA - DHE-RSA-AES128-SHA256 - DHE-RSA-AES256-SHA - DHE-RSA-AES256-SHA256 - AES128-GCM-SHA256 - AES256-GCM-SHA384 - AES128-SHA256 - AES256-SHA256 - ECDHE-ECDSA-CHACHA20-POLY1305 - ECDHE-RSA-CHACHA20-POLY1305 - DHE-RSA-CHACHA20-POLY1305 - ECDHE-ECDSA-AES128-SHA - ECDHE-ECDSA-AES256-SHA - AES128-SHA - AES256-SHA - DES-CBC3-SHA - RC4-SHA  **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getCipherSuite()
    {
        return $this->container['cipherSuite'];
    }

    /**
    * Sets cipherSuite
    *
    * @param string|null $cipherSuite **参数解释：** 加密套件 **约束限制：** - 当选择自定义加密套件时，必传 - 选择多个加密套件是以“,”分隔  **取值范围：** - ECDHE-ECDSA-AES128-GCM-SHA256 - ECDHE-ECDSA-AES256-GCM-SHA384 - ECDHE-RSA-AES128-GCM-SHA256 - ECDHE-RSA-AES256-GCM-SHA384 - DHE-RSA-AES128-GCM-SHA256 - DHE-RSA-AES256-GCM-SHA384 - ECDHE-ECDSA-AES128-SHA256 - ECDHE-ECDSA-AES256-SHA384 - ECDHE-RSA-AES128-SHA - ECDHE-RSA-AES128-SHA256 - ECDHE-RSA-AES256-SHA - ECDHE-RSA-AES256-SHA384 - DHE-RSA-AES128-SHA - DHE-RSA-AES128-SHA256 - DHE-RSA-AES256-SHA - DHE-RSA-AES256-SHA256 - AES128-GCM-SHA256 - AES256-GCM-SHA384 - AES128-SHA256 - AES256-SHA256 - ECDHE-ECDSA-CHACHA20-POLY1305 - ECDHE-RSA-CHACHA20-POLY1305 - DHE-RSA-CHACHA20-POLY1305 - ECDHE-ECDSA-AES128-SHA - ECDHE-ECDSA-AES256-SHA - AES128-SHA - AES256-SHA - DES-CBC3-SHA - RC4-SHA  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCipherSuite($cipherSuite)
    {
        $this->container['cipherSuite'] = $cipherSuite;
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

