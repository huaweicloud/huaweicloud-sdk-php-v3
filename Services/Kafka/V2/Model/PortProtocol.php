<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PortProtocol implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PortProtocol';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * privatePlainEnable  **参数解释**： 是否开启内网明文访问连接方式。 **约束限制**： 不涉及。 **取值范围**： - true：开启内网明文访问连接方式，连接地址：ip:9092，访问协议PLAINTEXT。 - false：关闭内网明文访问。 **默认取值**： false。
    * privateSaslSslEnable  **参数解释**： 是否开启安全协议为SASL_SSL的内网密文接入方式。 **约束限制**： [private_sasl_ssl_enable和private_sasl_plaintext_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[不涉及。](tag:hcs,ocb,hws_ocb) **取值范围**： - true：开启安全协议为SASL_SSL的内网密文接入方式。          - false：关闭安全协议为SASL_SSL的内网接入方式。 **默认取值**： false。
    * privateSaslPlaintextEnable  **参数解释**： 是否开启安全协议为SASL_PLAINTEXT的内网密文接入方式。 **约束限制**： [private_sasl_plaintext_enable和private_sasl_ssl_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[华为云Stack不支持此参数。](tag:hcs) **取值范围**： - true：开启安全协议为SASL_PLAINTEXT的内网密文接入方式，连接地址：ip:9093，访问协议SASL_PLAINTEXT。     - false：关闭安全协议为SASL_PLAINTEXT的内网密文接入方式。 **默认取值**： false。
    * publicPlainEnable  **参数解释**： 是否开启公网明文访问连接方式。 **约束限制**： 开启公网明文接入前，需要先开启公网访问功能。 **取值范围**： - true：开启公网明文访问连接方式，连接地址：ip:9094，访问协议PLAINTEXT。     - false：关闭公网明文接入方式。 **默认取值**： false。
    * publicSaslSslEnable  **参数解释**： 是否开启安全协议为SASL_SSL的公网密文接入。 **约束限制**： [public_sasl_ssl_enable和public_sasl_plaintext_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[不涉及。](tag:hcs) 为true时，需要实例开启公网。 **取值范围**： - true：开启安全协议为SASL_SSL的公网密文接入方式，连接地址：ip:9095，访问协议：SASL_SSL。 - false：关闭安全协议为SASL_SSL的公网密文接入方式。 **默认取值**： false。
    * publicSaslPlaintextEnable  **参数解释**： 是否开启安全协议为SASL_PLAINTEXT的公网密文接入方式。 **约束限制**： [public_sasl_plaintext_enable和public_sasl_ssl_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[华为云Stack不支持此参数。](tag:hcs) 为true时，需要实例开启公网。 **取值范围**： - true：开启安全协议为SASL_PLAINTEXT的公网密文接入方式，连接地址：ip:9095，访问协议：SASL_PLAINTEXT。           - false：关闭安全协议为SASL_PLAINTEXT的公网密文接入方式。 **默认取值**： false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'privatePlainEnable' => 'bool',
            'privateSaslSslEnable' => 'bool',
            'privateSaslPlaintextEnable' => 'bool',
            'publicPlainEnable' => 'bool',
            'publicSaslSslEnable' => 'bool',
            'publicSaslPlaintextEnable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * privatePlainEnable  **参数解释**： 是否开启内网明文访问连接方式。 **约束限制**： 不涉及。 **取值范围**： - true：开启内网明文访问连接方式，连接地址：ip:9092，访问协议PLAINTEXT。 - false：关闭内网明文访问。 **默认取值**： false。
    * privateSaslSslEnable  **参数解释**： 是否开启安全协议为SASL_SSL的内网密文接入方式。 **约束限制**： [private_sasl_ssl_enable和private_sasl_plaintext_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[不涉及。](tag:hcs,ocb,hws_ocb) **取值范围**： - true：开启安全协议为SASL_SSL的内网密文接入方式。          - false：关闭安全协议为SASL_SSL的内网接入方式。 **默认取值**： false。
    * privateSaslPlaintextEnable  **参数解释**： 是否开启安全协议为SASL_PLAINTEXT的内网密文接入方式。 **约束限制**： [private_sasl_plaintext_enable和private_sasl_ssl_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[华为云Stack不支持此参数。](tag:hcs) **取值范围**： - true：开启安全协议为SASL_PLAINTEXT的内网密文接入方式，连接地址：ip:9093，访问协议SASL_PLAINTEXT。     - false：关闭安全协议为SASL_PLAINTEXT的内网密文接入方式。 **默认取值**： false。
    * publicPlainEnable  **参数解释**： 是否开启公网明文访问连接方式。 **约束限制**： 开启公网明文接入前，需要先开启公网访问功能。 **取值范围**： - true：开启公网明文访问连接方式，连接地址：ip:9094，访问协议PLAINTEXT。     - false：关闭公网明文接入方式。 **默认取值**： false。
    * publicSaslSslEnable  **参数解释**： 是否开启安全协议为SASL_SSL的公网密文接入。 **约束限制**： [public_sasl_ssl_enable和public_sasl_plaintext_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[不涉及。](tag:hcs) 为true时，需要实例开启公网。 **取值范围**： - true：开启安全协议为SASL_SSL的公网密文接入方式，连接地址：ip:9095，访问协议：SASL_SSL。 - false：关闭安全协议为SASL_SSL的公网密文接入方式。 **默认取值**： false。
    * publicSaslPlaintextEnable  **参数解释**： 是否开启安全协议为SASL_PLAINTEXT的公网密文接入方式。 **约束限制**： [public_sasl_plaintext_enable和public_sasl_ssl_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[华为云Stack不支持此参数。](tag:hcs) 为true时，需要实例开启公网。 **取值范围**： - true：开启安全协议为SASL_PLAINTEXT的公网密文接入方式，连接地址：ip:9095，访问协议：SASL_PLAINTEXT。           - false：关闭安全协议为SASL_PLAINTEXT的公网密文接入方式。 **默认取值**： false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'privatePlainEnable' => null,
        'privateSaslSslEnable' => null,
        'privateSaslPlaintextEnable' => null,
        'publicPlainEnable' => null,
        'publicSaslSslEnable' => null,
        'publicSaslPlaintextEnable' => null
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
    * privatePlainEnable  **参数解释**： 是否开启内网明文访问连接方式。 **约束限制**： 不涉及。 **取值范围**： - true：开启内网明文访问连接方式，连接地址：ip:9092，访问协议PLAINTEXT。 - false：关闭内网明文访问。 **默认取值**： false。
    * privateSaslSslEnable  **参数解释**： 是否开启安全协议为SASL_SSL的内网密文接入方式。 **约束限制**： [private_sasl_ssl_enable和private_sasl_plaintext_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[不涉及。](tag:hcs,ocb,hws_ocb) **取值范围**： - true：开启安全协议为SASL_SSL的内网密文接入方式。          - false：关闭安全协议为SASL_SSL的内网接入方式。 **默认取值**： false。
    * privateSaslPlaintextEnable  **参数解释**： 是否开启安全协议为SASL_PLAINTEXT的内网密文接入方式。 **约束限制**： [private_sasl_plaintext_enable和private_sasl_ssl_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[华为云Stack不支持此参数。](tag:hcs) **取值范围**： - true：开启安全协议为SASL_PLAINTEXT的内网密文接入方式，连接地址：ip:9093，访问协议SASL_PLAINTEXT。     - false：关闭安全协议为SASL_PLAINTEXT的内网密文接入方式。 **默认取值**： false。
    * publicPlainEnable  **参数解释**： 是否开启公网明文访问连接方式。 **约束限制**： 开启公网明文接入前，需要先开启公网访问功能。 **取值范围**： - true：开启公网明文访问连接方式，连接地址：ip:9094，访问协议PLAINTEXT。     - false：关闭公网明文接入方式。 **默认取值**： false。
    * publicSaslSslEnable  **参数解释**： 是否开启安全协议为SASL_SSL的公网密文接入。 **约束限制**： [public_sasl_ssl_enable和public_sasl_plaintext_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[不涉及。](tag:hcs) 为true时，需要实例开启公网。 **取值范围**： - true：开启安全协议为SASL_SSL的公网密文接入方式，连接地址：ip:9095，访问协议：SASL_SSL。 - false：关闭安全协议为SASL_SSL的公网密文接入方式。 **默认取值**： false。
    * publicSaslPlaintextEnable  **参数解释**： 是否开启安全协议为SASL_PLAINTEXT的公网密文接入方式。 **约束限制**： [public_sasl_plaintext_enable和public_sasl_ssl_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[华为云Stack不支持此参数。](tag:hcs) 为true时，需要实例开启公网。 **取值范围**： - true：开启安全协议为SASL_PLAINTEXT的公网密文接入方式，连接地址：ip:9095，访问协议：SASL_PLAINTEXT。           - false：关闭安全协议为SASL_PLAINTEXT的公网密文接入方式。 **默认取值**： false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'privatePlainEnable' => 'private_plain_enable',
            'privateSaslSslEnable' => 'private_sasl_ssl_enable',
            'privateSaslPlaintextEnable' => 'private_sasl_plaintext_enable',
            'publicPlainEnable' => 'public_plain_enable',
            'publicSaslSslEnable' => 'public_sasl_ssl_enable',
            'publicSaslPlaintextEnable' => 'public_sasl_plaintext_enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * privatePlainEnable  **参数解释**： 是否开启内网明文访问连接方式。 **约束限制**： 不涉及。 **取值范围**： - true：开启内网明文访问连接方式，连接地址：ip:9092，访问协议PLAINTEXT。 - false：关闭内网明文访问。 **默认取值**： false。
    * privateSaslSslEnable  **参数解释**： 是否开启安全协议为SASL_SSL的内网密文接入方式。 **约束限制**： [private_sasl_ssl_enable和private_sasl_plaintext_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[不涉及。](tag:hcs,ocb,hws_ocb) **取值范围**： - true：开启安全协议为SASL_SSL的内网密文接入方式。          - false：关闭安全协议为SASL_SSL的内网接入方式。 **默认取值**： false。
    * privateSaslPlaintextEnable  **参数解释**： 是否开启安全协议为SASL_PLAINTEXT的内网密文接入方式。 **约束限制**： [private_sasl_plaintext_enable和private_sasl_ssl_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[华为云Stack不支持此参数。](tag:hcs) **取值范围**： - true：开启安全协议为SASL_PLAINTEXT的内网密文接入方式，连接地址：ip:9093，访问协议SASL_PLAINTEXT。     - false：关闭安全协议为SASL_PLAINTEXT的内网密文接入方式。 **默认取值**： false。
    * publicPlainEnable  **参数解释**： 是否开启公网明文访问连接方式。 **约束限制**： 开启公网明文接入前，需要先开启公网访问功能。 **取值范围**： - true：开启公网明文访问连接方式，连接地址：ip:9094，访问协议PLAINTEXT。     - false：关闭公网明文接入方式。 **默认取值**： false。
    * publicSaslSslEnable  **参数解释**： 是否开启安全协议为SASL_SSL的公网密文接入。 **约束限制**： [public_sasl_ssl_enable和public_sasl_plaintext_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[不涉及。](tag:hcs) 为true时，需要实例开启公网。 **取值范围**： - true：开启安全协议为SASL_SSL的公网密文接入方式，连接地址：ip:9095，访问协议：SASL_SSL。 - false：关闭安全协议为SASL_SSL的公网密文接入方式。 **默认取值**： false。
    * publicSaslPlaintextEnable  **参数解释**： 是否开启安全协议为SASL_PLAINTEXT的公网密文接入方式。 **约束限制**： [public_sasl_plaintext_enable和public_sasl_ssl_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[华为云Stack不支持此参数。](tag:hcs) 为true时，需要实例开启公网。 **取值范围**： - true：开启安全协议为SASL_PLAINTEXT的公网密文接入方式，连接地址：ip:9095，访问协议：SASL_PLAINTEXT。           - false：关闭安全协议为SASL_PLAINTEXT的公网密文接入方式。 **默认取值**： false。
    *
    * @var string[]
    */
    protected static $setters = [
            'privatePlainEnable' => 'setPrivatePlainEnable',
            'privateSaslSslEnable' => 'setPrivateSaslSslEnable',
            'privateSaslPlaintextEnable' => 'setPrivateSaslPlaintextEnable',
            'publicPlainEnable' => 'setPublicPlainEnable',
            'publicSaslSslEnable' => 'setPublicSaslSslEnable',
            'publicSaslPlaintextEnable' => 'setPublicSaslPlaintextEnable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * privatePlainEnable  **参数解释**： 是否开启内网明文访问连接方式。 **约束限制**： 不涉及。 **取值范围**： - true：开启内网明文访问连接方式，连接地址：ip:9092，访问协议PLAINTEXT。 - false：关闭内网明文访问。 **默认取值**： false。
    * privateSaslSslEnable  **参数解释**： 是否开启安全协议为SASL_SSL的内网密文接入方式。 **约束限制**： [private_sasl_ssl_enable和private_sasl_plaintext_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[不涉及。](tag:hcs,ocb,hws_ocb) **取值范围**： - true：开启安全协议为SASL_SSL的内网密文接入方式。          - false：关闭安全协议为SASL_SSL的内网接入方式。 **默认取值**： false。
    * privateSaslPlaintextEnable  **参数解释**： 是否开启安全协议为SASL_PLAINTEXT的内网密文接入方式。 **约束限制**： [private_sasl_plaintext_enable和private_sasl_ssl_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[华为云Stack不支持此参数。](tag:hcs) **取值范围**： - true：开启安全协议为SASL_PLAINTEXT的内网密文接入方式，连接地址：ip:9093，访问协议SASL_PLAINTEXT。     - false：关闭安全协议为SASL_PLAINTEXT的内网密文接入方式。 **默认取值**： false。
    * publicPlainEnable  **参数解释**： 是否开启公网明文访问连接方式。 **约束限制**： 开启公网明文接入前，需要先开启公网访问功能。 **取值范围**： - true：开启公网明文访问连接方式，连接地址：ip:9094，访问协议PLAINTEXT。     - false：关闭公网明文接入方式。 **默认取值**： false。
    * publicSaslSslEnable  **参数解释**： 是否开启安全协议为SASL_SSL的公网密文接入。 **约束限制**： [public_sasl_ssl_enable和public_sasl_plaintext_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[不涉及。](tag:hcs) 为true时，需要实例开启公网。 **取值范围**： - true：开启安全协议为SASL_SSL的公网密文接入方式，连接地址：ip:9095，访问协议：SASL_SSL。 - false：关闭安全协议为SASL_SSL的公网密文接入方式。 **默认取值**： false。
    * publicSaslPlaintextEnable  **参数解释**： 是否开启安全协议为SASL_PLAINTEXT的公网密文接入方式。 **约束限制**： [public_sasl_plaintext_enable和public_sasl_ssl_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[华为云Stack不支持此参数。](tag:hcs) 为true时，需要实例开启公网。 **取值范围**： - true：开启安全协议为SASL_PLAINTEXT的公网密文接入方式，连接地址：ip:9095，访问协议：SASL_PLAINTEXT。           - false：关闭安全协议为SASL_PLAINTEXT的公网密文接入方式。 **默认取值**： false。
    *
    * @var string[]
    */
    protected static $getters = [
            'privatePlainEnable' => 'getPrivatePlainEnable',
            'privateSaslSslEnable' => 'getPrivateSaslSslEnable',
            'privateSaslPlaintextEnable' => 'getPrivateSaslPlaintextEnable',
            'publicPlainEnable' => 'getPublicPlainEnable',
            'publicSaslSslEnable' => 'getPublicSaslSslEnable',
            'publicSaslPlaintextEnable' => 'getPublicSaslPlaintextEnable'
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
        $this->container['privatePlainEnable'] = isset($data['privatePlainEnable']) ? $data['privatePlainEnable'] : null;
        $this->container['privateSaslSslEnable'] = isset($data['privateSaslSslEnable']) ? $data['privateSaslSslEnable'] : null;
        $this->container['privateSaslPlaintextEnable'] = isset($data['privateSaslPlaintextEnable']) ? $data['privateSaslPlaintextEnable'] : null;
        $this->container['publicPlainEnable'] = isset($data['publicPlainEnable']) ? $data['publicPlainEnable'] : null;
        $this->container['publicSaslSslEnable'] = isset($data['publicSaslSslEnable']) ? $data['publicSaslSslEnable'] : null;
        $this->container['publicSaslPlaintextEnable'] = isset($data['publicSaslPlaintextEnable']) ? $data['publicSaslPlaintextEnable'] : null;
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
    * Gets privatePlainEnable
    *  **参数解释**： 是否开启内网明文访问连接方式。 **约束限制**： 不涉及。 **取值范围**： - true：开启内网明文访问连接方式，连接地址：ip:9092，访问协议PLAINTEXT。 - false：关闭内网明文访问。 **默认取值**： false。
    *
    * @return bool|null
    */
    public function getPrivatePlainEnable()
    {
        return $this->container['privatePlainEnable'];
    }

    /**
    * Sets privatePlainEnable
    *
    * @param bool|null $privatePlainEnable **参数解释**： 是否开启内网明文访问连接方式。 **约束限制**： 不涉及。 **取值范围**： - true：开启内网明文访问连接方式，连接地址：ip:9092，访问协议PLAINTEXT。 - false：关闭内网明文访问。 **默认取值**： false。
    *
    * @return $this
    */
    public function setPrivatePlainEnable($privatePlainEnable)
    {
        $this->container['privatePlainEnable'] = $privatePlainEnable;
        return $this;
    }

    /**
    * Gets privateSaslSslEnable
    *  **参数解释**： 是否开启安全协议为SASL_SSL的内网密文接入方式。 **约束限制**： [private_sasl_ssl_enable和private_sasl_plaintext_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[不涉及。](tag:hcs,ocb,hws_ocb) **取值范围**： - true：开启安全协议为SASL_SSL的内网密文接入方式。          - false：关闭安全协议为SASL_SSL的内网接入方式。 **默认取值**： false。
    *
    * @return bool|null
    */
    public function getPrivateSaslSslEnable()
    {
        return $this->container['privateSaslSslEnable'];
    }

    /**
    * Sets privateSaslSslEnable
    *
    * @param bool|null $privateSaslSslEnable **参数解释**： 是否开启安全协议为SASL_SSL的内网密文接入方式。 **约束限制**： [private_sasl_ssl_enable和private_sasl_plaintext_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[不涉及。](tag:hcs,ocb,hws_ocb) **取值范围**： - true：开启安全协议为SASL_SSL的内网密文接入方式。          - false：关闭安全协议为SASL_SSL的内网接入方式。 **默认取值**： false。
    *
    * @return $this
    */
    public function setPrivateSaslSslEnable($privateSaslSslEnable)
    {
        $this->container['privateSaslSslEnable'] = $privateSaslSslEnable;
        return $this;
    }

    /**
    * Gets privateSaslPlaintextEnable
    *  **参数解释**： 是否开启安全协议为SASL_PLAINTEXT的内网密文接入方式。 **约束限制**： [private_sasl_plaintext_enable和private_sasl_ssl_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[华为云Stack不支持此参数。](tag:hcs) **取值范围**： - true：开启安全协议为SASL_PLAINTEXT的内网密文接入方式，连接地址：ip:9093，访问协议SASL_PLAINTEXT。     - false：关闭安全协议为SASL_PLAINTEXT的内网密文接入方式。 **默认取值**： false。
    *
    * @return bool|null
    */
    public function getPrivateSaslPlaintextEnable()
    {
        return $this->container['privateSaslPlaintextEnable'];
    }

    /**
    * Sets privateSaslPlaintextEnable
    *
    * @param bool|null $privateSaslPlaintextEnable **参数解释**： 是否开启安全协议为SASL_PLAINTEXT的内网密文接入方式。 **约束限制**： [private_sasl_plaintext_enable和private_sasl_ssl_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[华为云Stack不支持此参数。](tag:hcs) **取值范围**： - true：开启安全协议为SASL_PLAINTEXT的内网密文接入方式，连接地址：ip:9093，访问协议SASL_PLAINTEXT。     - false：关闭安全协议为SASL_PLAINTEXT的内网密文接入方式。 **默认取值**： false。
    *
    * @return $this
    */
    public function setPrivateSaslPlaintextEnable($privateSaslPlaintextEnable)
    {
        $this->container['privateSaslPlaintextEnable'] = $privateSaslPlaintextEnable;
        return $this;
    }

    /**
    * Gets publicPlainEnable
    *  **参数解释**： 是否开启公网明文访问连接方式。 **约束限制**： 开启公网明文接入前，需要先开启公网访问功能。 **取值范围**： - true：开启公网明文访问连接方式，连接地址：ip:9094，访问协议PLAINTEXT。     - false：关闭公网明文接入方式。 **默认取值**： false。
    *
    * @return bool|null
    */
    public function getPublicPlainEnable()
    {
        return $this->container['publicPlainEnable'];
    }

    /**
    * Sets publicPlainEnable
    *
    * @param bool|null $publicPlainEnable **参数解释**： 是否开启公网明文访问连接方式。 **约束限制**： 开启公网明文接入前，需要先开启公网访问功能。 **取值范围**： - true：开启公网明文访问连接方式，连接地址：ip:9094，访问协议PLAINTEXT。     - false：关闭公网明文接入方式。 **默认取值**： false。
    *
    * @return $this
    */
    public function setPublicPlainEnable($publicPlainEnable)
    {
        $this->container['publicPlainEnable'] = $publicPlainEnable;
        return $this;
    }

    /**
    * Gets publicSaslSslEnable
    *  **参数解释**： 是否开启安全协议为SASL_SSL的公网密文接入。 **约束限制**： [public_sasl_ssl_enable和public_sasl_plaintext_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[不涉及。](tag:hcs) 为true时，需要实例开启公网。 **取值范围**： - true：开启安全协议为SASL_SSL的公网密文接入方式，连接地址：ip:9095，访问协议：SASL_SSL。 - false：关闭安全协议为SASL_SSL的公网密文接入方式。 **默认取值**： false。
    *
    * @return bool|null
    */
    public function getPublicSaslSslEnable()
    {
        return $this->container['publicSaslSslEnable'];
    }

    /**
    * Sets publicSaslSslEnable
    *
    * @param bool|null $publicSaslSslEnable **参数解释**： 是否开启安全协议为SASL_SSL的公网密文接入。 **约束限制**： [public_sasl_ssl_enable和public_sasl_plaintext_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[不涉及。](tag:hcs) 为true时，需要实例开启公网。 **取值范围**： - true：开启安全协议为SASL_SSL的公网密文接入方式，连接地址：ip:9095，访问协议：SASL_SSL。 - false：关闭安全协议为SASL_SSL的公网密文接入方式。 **默认取值**： false。
    *
    * @return $this
    */
    public function setPublicSaslSslEnable($publicSaslSslEnable)
    {
        $this->container['publicSaslSslEnable'] = $publicSaslSslEnable;
        return $this;
    }

    /**
    * Gets publicSaslPlaintextEnable
    *  **参数解释**： 是否开启安全协议为SASL_PLAINTEXT的公网密文接入方式。 **约束限制**： [public_sasl_plaintext_enable和public_sasl_ssl_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[华为云Stack不支持此参数。](tag:hcs) 为true时，需要实例开启公网。 **取值范围**： - true：开启安全协议为SASL_PLAINTEXT的公网密文接入方式，连接地址：ip:9095，访问协议：SASL_PLAINTEXT。           - false：关闭安全协议为SASL_PLAINTEXT的公网密文接入方式。 **默认取值**： false。
    *
    * @return bool|null
    */
    public function getPublicSaslPlaintextEnable()
    {
        return $this->container['publicSaslPlaintextEnable'];
    }

    /**
    * Sets publicSaslPlaintextEnable
    *
    * @param bool|null $publicSaslPlaintextEnable **参数解释**： 是否开启安全协议为SASL_PLAINTEXT的公网密文接入方式。 **约束限制**： [public_sasl_plaintext_enable和public_sasl_ssl_enable不能同时为true。](tag:hws,hws_eu,hws_hk,ocb,hws_ocb,ctc,g42,hk_g42,tm,hk_tm,dt,ax,sbc,hk_sbc,srg,fcs,cmcc)[华为云Stack不支持此参数。](tag:hcs) 为true时，需要实例开启公网。 **取值范围**： - true：开启安全协议为SASL_PLAINTEXT的公网密文接入方式，连接地址：ip:9095，访问协议：SASL_PLAINTEXT。           - false：关闭安全协议为SASL_PLAINTEXT的公网密文接入方式。 **默认取值**： false。
    *
    * @return $this
    */
    public function setPublicSaslPlaintextEnable($publicSaslPlaintextEnable)
    {
        $this->container['publicSaslPlaintextEnable'] = $publicSaslPlaintextEnable;
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

