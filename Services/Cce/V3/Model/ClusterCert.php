<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterCert implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterCert';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * server  **参数解释**： 上下文user信息 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * certificateAuthorityData  **参数解释**： 证书授权数据 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * insecureSkipTlsVerify  **参数解释**： 不校验服务端证书 **约束限制**： 不涉及 **取值范围**： - true：跳过校验服务端证书 - false：校验服务端证书  **默认取值**： 在 cluster 类型为 externalCluster 时，该值为 true。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'server' => 'string',
            'certificateAuthorityData' => 'string',
            'insecureSkipTlsVerify' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * server  **参数解释**： 上下文user信息 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * certificateAuthorityData  **参数解释**： 证书授权数据 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * insecureSkipTlsVerify  **参数解释**： 不校验服务端证书 **约束限制**： 不涉及 **取值范围**： - true：跳过校验服务端证书 - false：校验服务端证书  **默认取值**： 在 cluster 类型为 externalCluster 时，该值为 true。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'server' => null,
        'certificateAuthorityData' => null,
        'insecureSkipTlsVerify' => null
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
    * server  **参数解释**： 上下文user信息 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * certificateAuthorityData  **参数解释**： 证书授权数据 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * insecureSkipTlsVerify  **参数解释**： 不校验服务端证书 **约束限制**： 不涉及 **取值范围**： - true：跳过校验服务端证书 - false：校验服务端证书  **默认取值**： 在 cluster 类型为 externalCluster 时，该值为 true。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'server' => 'server',
            'certificateAuthorityData' => 'certificate-authority-data',
            'insecureSkipTlsVerify' => 'insecure-skip-tls-verify'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * server  **参数解释**： 上下文user信息 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * certificateAuthorityData  **参数解释**： 证书授权数据 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * insecureSkipTlsVerify  **参数解释**： 不校验服务端证书 **约束限制**： 不涉及 **取值范围**： - true：跳过校验服务端证书 - false：校验服务端证书  **默认取值**： 在 cluster 类型为 externalCluster 时，该值为 true。
    *
    * @var string[]
    */
    protected static $setters = [
            'server' => 'setServer',
            'certificateAuthorityData' => 'setCertificateAuthorityData',
            'insecureSkipTlsVerify' => 'setInsecureSkipTlsVerify'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * server  **参数解释**： 上下文user信息 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * certificateAuthorityData  **参数解释**： 证书授权数据 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * insecureSkipTlsVerify  **参数解释**： 不校验服务端证书 **约束限制**： 不涉及 **取值范围**： - true：跳过校验服务端证书 - false：校验服务端证书  **默认取值**： 在 cluster 类型为 externalCluster 时，该值为 true。
    *
    * @var string[]
    */
    protected static $getters = [
            'server' => 'getServer',
            'certificateAuthorityData' => 'getCertificateAuthorityData',
            'insecureSkipTlsVerify' => 'getInsecureSkipTlsVerify'
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
        $this->container['server'] = isset($data['server']) ? $data['server'] : null;
        $this->container['certificateAuthorityData'] = isset($data['certificateAuthorityData']) ? $data['certificateAuthorityData'] : null;
        $this->container['insecureSkipTlsVerify'] = isset($data['insecureSkipTlsVerify']) ? $data['insecureSkipTlsVerify'] : null;
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
    * Gets server
    *  **参数解释**： 上下文user信息 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getServer()
    {
        return $this->container['server'];
    }

    /**
    * Sets server
    *
    * @param string|null $server **参数解释**： 上下文user信息 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setServer($server)
    {
        $this->container['server'] = $server;
        return $this;
    }

    /**
    * Gets certificateAuthorityData
    *  **参数解释**： 证书授权数据 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getCertificateAuthorityData()
    {
        return $this->container['certificateAuthorityData'];
    }

    /**
    * Sets certificateAuthorityData
    *
    * @param string|null $certificateAuthorityData **参数解释**： 证书授权数据 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setCertificateAuthorityData($certificateAuthorityData)
    {
        $this->container['certificateAuthorityData'] = $certificateAuthorityData;
        return $this;
    }

    /**
    * Gets insecureSkipTlsVerify
    *  **参数解释**： 不校验服务端证书 **约束限制**： 不涉及 **取值范围**： - true：跳过校验服务端证书 - false：校验服务端证书  **默认取值**： 在 cluster 类型为 externalCluster 时，该值为 true。
    *
    * @return bool|null
    */
    public function getInsecureSkipTlsVerify()
    {
        return $this->container['insecureSkipTlsVerify'];
    }

    /**
    * Sets insecureSkipTlsVerify
    *
    * @param bool|null $insecureSkipTlsVerify **参数解释**： 不校验服务端证书 **约束限制**： 不涉及 **取值范围**： - true：跳过校验服务端证书 - false：校验服务端证书  **默认取值**： 在 cluster 类型为 externalCluster 时，该值为 true。
    *
    * @return $this
    */
    public function setInsecureSkipTlsVerify($insecureSkipTlsVerify)
    {
        $this->container['insecureSkipTlsVerify'] = $insecureSkipTlsVerify;
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

