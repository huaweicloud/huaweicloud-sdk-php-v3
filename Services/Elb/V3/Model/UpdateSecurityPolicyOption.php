<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSecurityPolicyOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSecurityPolicyOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  自定义安全策略的名称。
    * description  自定义安全策略的描述信息。
    * protocols  自定义安全策略选择的TLS协议列表。取值：TLSv1, TLSv1.1, TLSv1.2, TLSv1.3
    * ciphers  自定义安全策略的加密套件列表。支持以下加密套件：  ECDHE-RSA-AES256-GCM-SHA384,ECDHE-RSA-AES128-GCM-SHA256, ECDHE-ECDSA-AES256-GCM-SHA384,ECDHE-ECDSA-AES128-GCM-SHA256, AES128-GCM-SHA256,AES256-GCM-SHA384,ECDHE-ECDSA-AES128-SHA256, ECDHE-RSA-AES128-SHA256,AES128-SHA256,AES256-SHA256, ECDHE-ECDSA-AES256-SHA384,ECDHE-RSA-AES256-SHA384, ECDHE-ECDSA-AES128-SHA,ECDHE-RSA-AES128-SHA,ECDHE-RSA-AES256-SHA, ECDHE-ECDSA-AES256-SHA,AES128-SHA,AES256-SHA,CAMELLIA128-SHA, DES-CBC3-SHA,CAMELLIA256-SHA,ECDHE-RSA-CHACHA20-POLY1305, ECDHE-ECDSA-CHACHA20-POLY1305,TLS_AES_128_GCM_SHA256, TLS_AES_256_GCM_SHA384,TLS_CHACHA20_POLY1305_SHA256, TLS_AES_128_CCM_SHA256,TLS_AES_128_CCM_8_SHA256  使用说明： - 协议和加密套件必须匹配，即ciphers中必须至少有一种有与协议匹配的加密套件。  > 协议与加密套件的匹配关系可参考系统安全策略
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'protocols' => 'string[]',
            'ciphers' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  自定义安全策略的名称。
    * description  自定义安全策略的描述信息。
    * protocols  自定义安全策略选择的TLS协议列表。取值：TLSv1, TLSv1.1, TLSv1.2, TLSv1.3
    * ciphers  自定义安全策略的加密套件列表。支持以下加密套件：  ECDHE-RSA-AES256-GCM-SHA384,ECDHE-RSA-AES128-GCM-SHA256, ECDHE-ECDSA-AES256-GCM-SHA384,ECDHE-ECDSA-AES128-GCM-SHA256, AES128-GCM-SHA256,AES256-GCM-SHA384,ECDHE-ECDSA-AES128-SHA256, ECDHE-RSA-AES128-SHA256,AES128-SHA256,AES256-SHA256, ECDHE-ECDSA-AES256-SHA384,ECDHE-RSA-AES256-SHA384, ECDHE-ECDSA-AES128-SHA,ECDHE-RSA-AES128-SHA,ECDHE-RSA-AES256-SHA, ECDHE-ECDSA-AES256-SHA,AES128-SHA,AES256-SHA,CAMELLIA128-SHA, DES-CBC3-SHA,CAMELLIA256-SHA,ECDHE-RSA-CHACHA20-POLY1305, ECDHE-ECDSA-CHACHA20-POLY1305,TLS_AES_128_GCM_SHA256, TLS_AES_256_GCM_SHA384,TLS_CHACHA20_POLY1305_SHA256, TLS_AES_128_CCM_SHA256,TLS_AES_128_CCM_8_SHA256  使用说明： - 协议和加密套件必须匹配，即ciphers中必须至少有一种有与协议匹配的加密套件。  > 协议与加密套件的匹配关系可参考系统安全策略
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'protocols' => null,
        'ciphers' => null
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
    * name  自定义安全策略的名称。
    * description  自定义安全策略的描述信息。
    * protocols  自定义安全策略选择的TLS协议列表。取值：TLSv1, TLSv1.1, TLSv1.2, TLSv1.3
    * ciphers  自定义安全策略的加密套件列表。支持以下加密套件：  ECDHE-RSA-AES256-GCM-SHA384,ECDHE-RSA-AES128-GCM-SHA256, ECDHE-ECDSA-AES256-GCM-SHA384,ECDHE-ECDSA-AES128-GCM-SHA256, AES128-GCM-SHA256,AES256-GCM-SHA384,ECDHE-ECDSA-AES128-SHA256, ECDHE-RSA-AES128-SHA256,AES128-SHA256,AES256-SHA256, ECDHE-ECDSA-AES256-SHA384,ECDHE-RSA-AES256-SHA384, ECDHE-ECDSA-AES128-SHA,ECDHE-RSA-AES128-SHA,ECDHE-RSA-AES256-SHA, ECDHE-ECDSA-AES256-SHA,AES128-SHA,AES256-SHA,CAMELLIA128-SHA, DES-CBC3-SHA,CAMELLIA256-SHA,ECDHE-RSA-CHACHA20-POLY1305, ECDHE-ECDSA-CHACHA20-POLY1305,TLS_AES_128_GCM_SHA256, TLS_AES_256_GCM_SHA384,TLS_CHACHA20_POLY1305_SHA256, TLS_AES_128_CCM_SHA256,TLS_AES_128_CCM_8_SHA256  使用说明： - 协议和加密套件必须匹配，即ciphers中必须至少有一种有与协议匹配的加密套件。  > 协议与加密套件的匹配关系可参考系统安全策略
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'protocols' => 'protocols',
            'ciphers' => 'ciphers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  自定义安全策略的名称。
    * description  自定义安全策略的描述信息。
    * protocols  自定义安全策略选择的TLS协议列表。取值：TLSv1, TLSv1.1, TLSv1.2, TLSv1.3
    * ciphers  自定义安全策略的加密套件列表。支持以下加密套件：  ECDHE-RSA-AES256-GCM-SHA384,ECDHE-RSA-AES128-GCM-SHA256, ECDHE-ECDSA-AES256-GCM-SHA384,ECDHE-ECDSA-AES128-GCM-SHA256, AES128-GCM-SHA256,AES256-GCM-SHA384,ECDHE-ECDSA-AES128-SHA256, ECDHE-RSA-AES128-SHA256,AES128-SHA256,AES256-SHA256, ECDHE-ECDSA-AES256-SHA384,ECDHE-RSA-AES256-SHA384, ECDHE-ECDSA-AES128-SHA,ECDHE-RSA-AES128-SHA,ECDHE-RSA-AES256-SHA, ECDHE-ECDSA-AES256-SHA,AES128-SHA,AES256-SHA,CAMELLIA128-SHA, DES-CBC3-SHA,CAMELLIA256-SHA,ECDHE-RSA-CHACHA20-POLY1305, ECDHE-ECDSA-CHACHA20-POLY1305,TLS_AES_128_GCM_SHA256, TLS_AES_256_GCM_SHA384,TLS_CHACHA20_POLY1305_SHA256, TLS_AES_128_CCM_SHA256,TLS_AES_128_CCM_8_SHA256  使用说明： - 协议和加密套件必须匹配，即ciphers中必须至少有一种有与协议匹配的加密套件。  > 协议与加密套件的匹配关系可参考系统安全策略
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'protocols' => 'setProtocols',
            'ciphers' => 'setCiphers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  自定义安全策略的名称。
    * description  自定义安全策略的描述信息。
    * protocols  自定义安全策略选择的TLS协议列表。取值：TLSv1, TLSv1.1, TLSv1.2, TLSv1.3
    * ciphers  自定义安全策略的加密套件列表。支持以下加密套件：  ECDHE-RSA-AES256-GCM-SHA384,ECDHE-RSA-AES128-GCM-SHA256, ECDHE-ECDSA-AES256-GCM-SHA384,ECDHE-ECDSA-AES128-GCM-SHA256, AES128-GCM-SHA256,AES256-GCM-SHA384,ECDHE-ECDSA-AES128-SHA256, ECDHE-RSA-AES128-SHA256,AES128-SHA256,AES256-SHA256, ECDHE-ECDSA-AES256-SHA384,ECDHE-RSA-AES256-SHA384, ECDHE-ECDSA-AES128-SHA,ECDHE-RSA-AES128-SHA,ECDHE-RSA-AES256-SHA, ECDHE-ECDSA-AES256-SHA,AES128-SHA,AES256-SHA,CAMELLIA128-SHA, DES-CBC3-SHA,CAMELLIA256-SHA,ECDHE-RSA-CHACHA20-POLY1305, ECDHE-ECDSA-CHACHA20-POLY1305,TLS_AES_128_GCM_SHA256, TLS_AES_256_GCM_SHA384,TLS_CHACHA20_POLY1305_SHA256, TLS_AES_128_CCM_SHA256,TLS_AES_128_CCM_8_SHA256  使用说明： - 协议和加密套件必须匹配，即ciphers中必须至少有一种有与协议匹配的加密套件。  > 协议与加密套件的匹配关系可参考系统安全策略
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'protocols' => 'getProtocols',
            'ciphers' => 'getCiphers'
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
    const CIPHERS_ECDHE_RSA_AES256_GCM_SHA384 = 'ECDHE-RSA-AES256-GCM-SHA384';
    const CIPHERS_ECDHE_RSA_AES128_GCM_SHA256 = 'ECDHE-RSA-AES128-GCM-SHA256';
    const CIPHERS_ECDHE_ECDSA_AES256_GCM_SHA384 = 'ECDHE-ECDSA-AES256-GCM-SHA384';
    const CIPHERS_ECDHE_ECDSA_AES128_GCM_SHA256 = 'ECDHE-ECDSA-AES128-GCM-SHA256';
    const CIPHERS_AES128_GCM_SHA256 = 'AES128-GCM-SHA256';
    const CIPHERS_AES256_GCM_SHA384 = 'AES256-GCM-SHA384';
    const CIPHERS_ECDHE_ECDSA_AES128_SHA256 = 'ECDHE-ECDSA-AES128-SHA256';
    const CIPHERS_ECDHE_RSA_AES128_SHA256 = 'ECDHE-RSA-AES128-SHA256';
    const CIPHERS_AES128_SHA256 = 'AES128-SHA256';
    const CIPHERS_AES256_SHA256 = 'AES256-SHA256';
    const CIPHERS_ECDHE_ECDSA_AES256_SHA384 = 'ECDHE-ECDSA-AES256-SHA384';
    const CIPHERS_ECDHE_RSA_AES256_SHA384 = 'ECDHE-RSA-AES256-SHA384';
    const CIPHERS_ECDHE_ECDSA_AES128_SHA = 'ECDHE-ECDSA-AES128-SHA';
    const CIPHERS_ECDHE_RSA_AES128_SHA = 'ECDHE-RSA-AES128-SHA';
    const CIPHERS_ECDHE_RSA_AES256_SHA = 'ECDHE-RSA-AES256-SHA';
    const CIPHERS_ECDHE_ECDSA_AES256_SHA = 'ECDHE-ECDSA-AES256-SHA';
    const CIPHERS_AES128_SHA = 'AES128-SHA';
    const CIPHERS_AES256_SHA = 'AES256-SHA';
    const CIPHERS_CAMELLIA128_SHA = 'CAMELLIA128-SHA';
    const CIPHERS_DES_CBC3_SHA = 'DES-CBC3-SHA';
    const CIPHERS_CAMELLIA256_SHA = 'CAMELLIA256-SHA';
    const CIPHERS_ECDHE_RSA_CHACHA20_POLY1305 = 'ECDHE-RSA-CHACHA20-POLY1305';
    const CIPHERS_ECDHE_ECDSA_CHACHA20_POLY1305 = 'ECDHE-ECDSA-CHACHA20-POLY1305';
    const CIPHERS_TLS_AES_128_GCM_SHA256 = 'TLS_AES_128_GCM_SHA256';
    const CIPHERS_TLS_AES_256_GCM_SHA384 = 'TLS_AES_256_GCM_SHA384';
    const CIPHERS_TLS_CHACHA20_POLY1305_SHA256 = 'TLS_CHACHA20_POLY1305_SHA256';
    const CIPHERS_TLS_AES_128_CCM_SHA256 = 'TLS_AES_128_CCM_SHA256';
    const CIPHERS_TLS_AES_128_CCM_8_SHA256 = 'TLS_AES_128_CCM_8_SHA256';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCiphersAllowableValues()
    {
        return [
            self::CIPHERS_ECDHE_RSA_AES256_GCM_SHA384,
            self::CIPHERS_ECDHE_RSA_AES128_GCM_SHA256,
            self::CIPHERS_ECDHE_ECDSA_AES256_GCM_SHA384,
            self::CIPHERS_ECDHE_ECDSA_AES128_GCM_SHA256,
            self::CIPHERS_AES128_GCM_SHA256,
            self::CIPHERS_AES256_GCM_SHA384,
            self::CIPHERS_ECDHE_ECDSA_AES128_SHA256,
            self::CIPHERS_ECDHE_RSA_AES128_SHA256,
            self::CIPHERS_AES128_SHA256,
            self::CIPHERS_AES256_SHA256,
            self::CIPHERS_ECDHE_ECDSA_AES256_SHA384,
            self::CIPHERS_ECDHE_RSA_AES256_SHA384,
            self::CIPHERS_ECDHE_ECDSA_AES128_SHA,
            self::CIPHERS_ECDHE_RSA_AES128_SHA,
            self::CIPHERS_ECDHE_RSA_AES256_SHA,
            self::CIPHERS_ECDHE_ECDSA_AES256_SHA,
            self::CIPHERS_AES128_SHA,
            self::CIPHERS_AES256_SHA,
            self::CIPHERS_CAMELLIA128_SHA,
            self::CIPHERS_DES_CBC3_SHA,
            self::CIPHERS_CAMELLIA256_SHA,
            self::CIPHERS_ECDHE_RSA_CHACHA20_POLY1305,
            self::CIPHERS_ECDHE_ECDSA_CHACHA20_POLY1305,
            self::CIPHERS_TLS_AES_128_GCM_SHA256,
            self::CIPHERS_TLS_AES_256_GCM_SHA384,
            self::CIPHERS_TLS_CHACHA20_POLY1305_SHA256,
            self::CIPHERS_TLS_AES_128_CCM_SHA256,
            self::CIPHERS_TLS_AES_128_CCM_8_SHA256,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['protocols'] = isset($data['protocols']) ? $data['protocols'] : null;
        $this->container['ciphers'] = isset($data['ciphers']) ? $data['ciphers'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  自定义安全策略的名称。
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
    * @param string|null $name 自定义安全策略的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  自定义安全策略的描述信息。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 自定义安全策略的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets protocols
    *  自定义安全策略选择的TLS协议列表。取值：TLSv1, TLSv1.1, TLSv1.2, TLSv1.3
    *
    * @return string[]|null
    */
    public function getProtocols()
    {
        return $this->container['protocols'];
    }

    /**
    * Sets protocols
    *
    * @param string[]|null $protocols 自定义安全策略选择的TLS协议列表。取值：TLSv1, TLSv1.1, TLSv1.2, TLSv1.3
    *
    * @return $this
    */
    public function setProtocols($protocols)
    {
        $this->container['protocols'] = $protocols;
        return $this;
    }

    /**
    * Gets ciphers
    *  自定义安全策略的加密套件列表。支持以下加密套件：  ECDHE-RSA-AES256-GCM-SHA384,ECDHE-RSA-AES128-GCM-SHA256, ECDHE-ECDSA-AES256-GCM-SHA384,ECDHE-ECDSA-AES128-GCM-SHA256, AES128-GCM-SHA256,AES256-GCM-SHA384,ECDHE-ECDSA-AES128-SHA256, ECDHE-RSA-AES128-SHA256,AES128-SHA256,AES256-SHA256, ECDHE-ECDSA-AES256-SHA384,ECDHE-RSA-AES256-SHA384, ECDHE-ECDSA-AES128-SHA,ECDHE-RSA-AES128-SHA,ECDHE-RSA-AES256-SHA, ECDHE-ECDSA-AES256-SHA,AES128-SHA,AES256-SHA,CAMELLIA128-SHA, DES-CBC3-SHA,CAMELLIA256-SHA,ECDHE-RSA-CHACHA20-POLY1305, ECDHE-ECDSA-CHACHA20-POLY1305,TLS_AES_128_GCM_SHA256, TLS_AES_256_GCM_SHA384,TLS_CHACHA20_POLY1305_SHA256, TLS_AES_128_CCM_SHA256,TLS_AES_128_CCM_8_SHA256  使用说明： - 协议和加密套件必须匹配，即ciphers中必须至少有一种有与协议匹配的加密套件。  > 协议与加密套件的匹配关系可参考系统安全策略
    *
    * @return string[]|null
    */
    public function getCiphers()
    {
        return $this->container['ciphers'];
    }

    /**
    * Sets ciphers
    *
    * @param string[]|null $ciphers 自定义安全策略的加密套件列表。支持以下加密套件：  ECDHE-RSA-AES256-GCM-SHA384,ECDHE-RSA-AES128-GCM-SHA256, ECDHE-ECDSA-AES256-GCM-SHA384,ECDHE-ECDSA-AES128-GCM-SHA256, AES128-GCM-SHA256,AES256-GCM-SHA384,ECDHE-ECDSA-AES128-SHA256, ECDHE-RSA-AES128-SHA256,AES128-SHA256,AES256-SHA256, ECDHE-ECDSA-AES256-SHA384,ECDHE-RSA-AES256-SHA384, ECDHE-ECDSA-AES128-SHA,ECDHE-RSA-AES128-SHA,ECDHE-RSA-AES256-SHA, ECDHE-ECDSA-AES256-SHA,AES128-SHA,AES256-SHA,CAMELLIA128-SHA, DES-CBC3-SHA,CAMELLIA256-SHA,ECDHE-RSA-CHACHA20-POLY1305, ECDHE-ECDSA-CHACHA20-POLY1305,TLS_AES_128_GCM_SHA256, TLS_AES_256_GCM_SHA384,TLS_CHACHA20_POLY1305_SHA256, TLS_AES_128_CCM_SHA256,TLS_AES_128_CCM_8_SHA256  使用说明： - 协议和加密套件必须匹配，即ciphers中必须至少有一种有与协议匹配的加密套件。  > 协议与加密套件的匹配关系可参考系统安全策略
    *
    * @return $this
    */
    public function setCiphers($ciphers)
    {
        $this->container['ciphers'] = $ciphers;
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

