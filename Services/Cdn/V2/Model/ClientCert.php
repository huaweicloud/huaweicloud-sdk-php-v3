<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClientCert implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClientCert';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  **参数解释：** 客户端证书配置开关 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * trustedCert  **参数解释：** 客户端CA证书的内容 **约束限制：** 仅支持PEM格式 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  **参数解释：** 客户端CA证书指定的域名 **约束限制：** - 如果不配置域名，则CDN会放行所有持有该CA证书的客户端请求 - 最多可配置100个域名 - 多个域名用“,”或“|”分隔  **取值范围：** 不涉及 **默认取值：** 不涉及
    * trustedCerts  **参数解释：** 多证书场景下客户端CA证书列表 **约束限制：** 不涉及
    * smTrustedCerts  **参数解释：** 国密证书场景下客户端CA证书列表 **约束限制：** - 开启国密证书后配置 - 仅支持PEM格式
    * smCertHosts  **参数解释：** 国密证书指定访问的客户端域名 **约束限制：** - 开启国密证书后配置 - 最多可配置100个域名 - 多个域名用“|”分隔  **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'trustedCert' => 'string',
            'hosts' => 'string',
            'trustedCerts' => '\HuaweiCloud\SDK\Cdn\V2\Model\ClientCertTrustedCerts[]',
            'smTrustedCerts' => '\HuaweiCloud\SDK\Cdn\V2\Model\ClientCertTrustedCerts[]',
            'smCertHosts' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  **参数解释：** 客户端证书配置开关 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * trustedCert  **参数解释：** 客户端CA证书的内容 **约束限制：** 仅支持PEM格式 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  **参数解释：** 客户端CA证书指定的域名 **约束限制：** - 如果不配置域名，则CDN会放行所有持有该CA证书的客户端请求 - 最多可配置100个域名 - 多个域名用“,”或“|”分隔  **取值范围：** 不涉及 **默认取值：** 不涉及
    * trustedCerts  **参数解释：** 多证书场景下客户端CA证书列表 **约束限制：** 不涉及
    * smTrustedCerts  **参数解释：** 国密证书场景下客户端CA证书列表 **约束限制：** - 开启国密证书后配置 - 仅支持PEM格式
    * smCertHosts  **参数解释：** 国密证书指定访问的客户端域名 **约束限制：** - 开启国密证书后配置 - 最多可配置100个域名 - 多个域名用“|”分隔  **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'trustedCert' => null,
        'hosts' => null,
        'trustedCerts' => null,
        'smTrustedCerts' => null,
        'smCertHosts' => null
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
    * status  **参数解释：** 客户端证书配置开关 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * trustedCert  **参数解释：** 客户端CA证书的内容 **约束限制：** 仅支持PEM格式 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  **参数解释：** 客户端CA证书指定的域名 **约束限制：** - 如果不配置域名，则CDN会放行所有持有该CA证书的客户端请求 - 最多可配置100个域名 - 多个域名用“,”或“|”分隔  **取值范围：** 不涉及 **默认取值：** 不涉及
    * trustedCerts  **参数解释：** 多证书场景下客户端CA证书列表 **约束限制：** 不涉及
    * smTrustedCerts  **参数解释：** 国密证书场景下客户端CA证书列表 **约束限制：** - 开启国密证书后配置 - 仅支持PEM格式
    * smCertHosts  **参数解释：** 国密证书指定访问的客户端域名 **约束限制：** - 开启国密证书后配置 - 最多可配置100个域名 - 多个域名用“|”分隔  **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'trustedCert' => 'trusted_cert',
            'hosts' => 'hosts',
            'trustedCerts' => 'trusted_certs',
            'smTrustedCerts' => 'sm_trusted_certs',
            'smCertHosts' => 'sm_cert_hosts'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  **参数解释：** 客户端证书配置开关 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * trustedCert  **参数解释：** 客户端CA证书的内容 **约束限制：** 仅支持PEM格式 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  **参数解释：** 客户端CA证书指定的域名 **约束限制：** - 如果不配置域名，则CDN会放行所有持有该CA证书的客户端请求 - 最多可配置100个域名 - 多个域名用“,”或“|”分隔  **取值范围：** 不涉及 **默认取值：** 不涉及
    * trustedCerts  **参数解释：** 多证书场景下客户端CA证书列表 **约束限制：** 不涉及
    * smTrustedCerts  **参数解释：** 国密证书场景下客户端CA证书列表 **约束限制：** - 开启国密证书后配置 - 仅支持PEM格式
    * smCertHosts  **参数解释：** 国密证书指定访问的客户端域名 **约束限制：** - 开启国密证书后配置 - 最多可配置100个域名 - 多个域名用“|”分隔  **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'trustedCert' => 'setTrustedCert',
            'hosts' => 'setHosts',
            'trustedCerts' => 'setTrustedCerts',
            'smTrustedCerts' => 'setSmTrustedCerts',
            'smCertHosts' => 'setSmCertHosts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  **参数解释：** 客户端证书配置开关 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    * trustedCert  **参数解释：** 客户端CA证书的内容 **约束限制：** 仅支持PEM格式 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  **参数解释：** 客户端CA证书指定的域名 **约束限制：** - 如果不配置域名，则CDN会放行所有持有该CA证书的客户端请求 - 最多可配置100个域名 - 多个域名用“,”或“|”分隔  **取值范围：** 不涉及 **默认取值：** 不涉及
    * trustedCerts  **参数解释：** 多证书场景下客户端CA证书列表 **约束限制：** 不涉及
    * smTrustedCerts  **参数解释：** 国密证书场景下客户端CA证书列表 **约束限制：** - 开启国密证书后配置 - 仅支持PEM格式
    * smCertHosts  **参数解释：** 国密证书指定访问的客户端域名 **约束限制：** - 开启国密证书后配置 - 最多可配置100个域名 - 多个域名用“|”分隔  **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'trustedCert' => 'getTrustedCert',
            'hosts' => 'getHosts',
            'trustedCerts' => 'getTrustedCerts',
            'smTrustedCerts' => 'getSmTrustedCerts',
            'smCertHosts' => 'getSmCertHosts'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['trustedCert'] = isset($data['trustedCert']) ? $data['trustedCert'] : null;
        $this->container['hosts'] = isset($data['hosts']) ? $data['hosts'] : null;
        $this->container['trustedCerts'] = isset($data['trustedCerts']) ? $data['trustedCerts'] : null;
        $this->container['smTrustedCerts'] = isset($data['smTrustedCerts']) ? $data['smTrustedCerts'] : null;
        $this->container['smCertHosts'] = isset($data['smCertHosts']) ? $data['smCertHosts'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
    * Gets status
    *  **参数解释：** 客户端证书配置开关 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status **参数解释：** 客户端证书配置开关 **约束限制：** 不涉及 **取值范围：** - on: 开启 - off: 关闭  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets trustedCert
    *  **参数解释：** 客户端CA证书的内容 **约束限制：** 仅支持PEM格式 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getTrustedCert()
    {
        return $this->container['trustedCert'];
    }

    /**
    * Sets trustedCert
    *
    * @param string|null $trustedCert **参数解释：** 客户端CA证书的内容 **约束限制：** 仅支持PEM格式 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTrustedCert($trustedCert)
    {
        $this->container['trustedCert'] = $trustedCert;
        return $this;
    }

    /**
    * Gets hosts
    *  **参数解释：** 客户端CA证书指定的域名 **约束限制：** - 如果不配置域名，则CDN会放行所有持有该CA证书的客户端请求 - 最多可配置100个域名 - 多个域名用“,”或“|”分隔  **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getHosts()
    {
        return $this->container['hosts'];
    }

    /**
    * Sets hosts
    *
    * @param string|null $hosts **参数解释：** 客户端CA证书指定的域名 **约束限制：** - 如果不配置域名，则CDN会放行所有持有该CA证书的客户端请求 - 最多可配置100个域名 - 多个域名用“,”或“|”分隔  **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setHosts($hosts)
    {
        $this->container['hosts'] = $hosts;
        return $this;
    }

    /**
    * Gets trustedCerts
    *  **参数解释：** 多证书场景下客户端CA证书列表 **约束限制：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\ClientCertTrustedCerts[]|null
    */
    public function getTrustedCerts()
    {
        return $this->container['trustedCerts'];
    }

    /**
    * Sets trustedCerts
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\ClientCertTrustedCerts[]|null $trustedCerts **参数解释：** 多证书场景下客户端CA证书列表 **约束限制：** 不涉及
    *
    * @return $this
    */
    public function setTrustedCerts($trustedCerts)
    {
        $this->container['trustedCerts'] = $trustedCerts;
        return $this;
    }

    /**
    * Gets smTrustedCerts
    *  **参数解释：** 国密证书场景下客户端CA证书列表 **约束限制：** - 开启国密证书后配置 - 仅支持PEM格式
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\ClientCertTrustedCerts[]|null
    */
    public function getSmTrustedCerts()
    {
        return $this->container['smTrustedCerts'];
    }

    /**
    * Sets smTrustedCerts
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\ClientCertTrustedCerts[]|null $smTrustedCerts **参数解释：** 国密证书场景下客户端CA证书列表 **约束限制：** - 开启国密证书后配置 - 仅支持PEM格式
    *
    * @return $this
    */
    public function setSmTrustedCerts($smTrustedCerts)
    {
        $this->container['smTrustedCerts'] = $smTrustedCerts;
        return $this;
    }

    /**
    * Gets smCertHosts
    *  **参数解释：** 国密证书指定访问的客户端域名 **约束限制：** - 开启国密证书后配置 - 最多可配置100个域名 - 多个域名用“|”分隔  **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getSmCertHosts()
    {
        return $this->container['smCertHosts'];
    }

    /**
    * Sets smCertHosts
    *
    * @param string|null $smCertHosts **参数解释：** 国密证书指定访问的客户端域名 **约束限制：** - 开启国密证书后配置 - 最多可配置100个域名 - 多个域名用“|”分隔  **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSmCertHosts($smCertHosts)
    {
        $this->container['smCertHosts'] = $smCertHosts;
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

