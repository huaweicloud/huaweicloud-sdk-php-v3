<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ElbConnectionResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ElbConnectionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * elbId  **参数解释：** 负载均衡器ID。 **约束限制：**  不涉及。 **取值范围：** 不涉及。 **默认取值：**  不涉及。
    * listenerId  **参数解释：** 负载均衡器的监听器ID。 **约束限制：**  不涉及。 **取值范围：** 不涉及。 **默认取值：**  不涉及。
    * mTls  **参数解释：** 负载均衡器的HTTPS监听器是否开启双向认证。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置为true，否则忽略该配置 **取值范围：** 不涉及。 **默认取值：** false
    * caCertId  **参数解释：** 负载均衡器的HTTPS监听器配置的客户端证书ID。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置，否则忽略该配置 **取值范围：** 不涉及。 **默认取值：**  不涉及。
    * serverCertId  **参数解释：** 负载均衡器的HTTPS监听器配置的服务端证书ID。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置，否则忽略该配置。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sniCertIds  **参数解释：** 负载均衡器的HTTPS监听器配置的SNI（服务器名称指示）证书ID列表。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置，否则忽略该配置。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * status  **参数解释：** ELB连接状态。 **约束限制：** 仅在响应中返回，请求中传入不生效。 **取值范围：** - CONNECTING：连接中。 - CONNECTED：已连接。 - CONNECT_FAILED：连接失败。 - DISCONNECTING：断开中 - DISCONNET_FAILED：断开失败 **默认取值：** 不涉及。
    * message  **参数解释：** ELB连接失败时的错误信息。 **约束限制：** 仅在响应中返回，请求中传入不生效；仅当ELB连接状态为CONNECT_FAILED时返回。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * residualResources  residualResources
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'elbId' => 'string',
            'listenerId' => 'string',
            'mTls' => 'bool',
            'caCertId' => 'string',
            'serverCertId' => 'string',
            'sniCertIds' => 'string[]',
            'status' => 'string',
            'message' => 'string',
            'residualResources' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ResidualResources'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * elbId  **参数解释：** 负载均衡器ID。 **约束限制：**  不涉及。 **取值范围：** 不涉及。 **默认取值：**  不涉及。
    * listenerId  **参数解释：** 负载均衡器的监听器ID。 **约束限制：**  不涉及。 **取值范围：** 不涉及。 **默认取值：**  不涉及。
    * mTls  **参数解释：** 负载均衡器的HTTPS监听器是否开启双向认证。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置为true，否则忽略该配置 **取值范围：** 不涉及。 **默认取值：** false
    * caCertId  **参数解释：** 负载均衡器的HTTPS监听器配置的客户端证书ID。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置，否则忽略该配置 **取值范围：** 不涉及。 **默认取值：**  不涉及。
    * serverCertId  **参数解释：** 负载均衡器的HTTPS监听器配置的服务端证书ID。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置，否则忽略该配置。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sniCertIds  **参数解释：** 负载均衡器的HTTPS监听器配置的SNI（服务器名称指示）证书ID列表。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置，否则忽略该配置。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * status  **参数解释：** ELB连接状态。 **约束限制：** 仅在响应中返回，请求中传入不生效。 **取值范围：** - CONNECTING：连接中。 - CONNECTED：已连接。 - CONNECT_FAILED：连接失败。 - DISCONNECTING：断开中 - DISCONNET_FAILED：断开失败 **默认取值：** 不涉及。
    * message  **参数解释：** ELB连接失败时的错误信息。 **约束限制：** 仅在响应中返回，请求中传入不生效；仅当ELB连接状态为CONNECT_FAILED时返回。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * residualResources  residualResources
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'elbId' => null,
        'listenerId' => null,
        'mTls' => null,
        'caCertId' => null,
        'serverCertId' => null,
        'sniCertIds' => null,
        'status' => null,
        'message' => null,
        'residualResources' => null
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
    * elbId  **参数解释：** 负载均衡器ID。 **约束限制：**  不涉及。 **取值范围：** 不涉及。 **默认取值：**  不涉及。
    * listenerId  **参数解释：** 负载均衡器的监听器ID。 **约束限制：**  不涉及。 **取值范围：** 不涉及。 **默认取值：**  不涉及。
    * mTls  **参数解释：** 负载均衡器的HTTPS监听器是否开启双向认证。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置为true，否则忽略该配置 **取值范围：** 不涉及。 **默认取值：** false
    * caCertId  **参数解释：** 负载均衡器的HTTPS监听器配置的客户端证书ID。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置，否则忽略该配置 **取值范围：** 不涉及。 **默认取值：**  不涉及。
    * serverCertId  **参数解释：** 负载均衡器的HTTPS监听器配置的服务端证书ID。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置，否则忽略该配置。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sniCertIds  **参数解释：** 负载均衡器的HTTPS监听器配置的SNI（服务器名称指示）证书ID列表。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置，否则忽略该配置。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * status  **参数解释：** ELB连接状态。 **约束限制：** 仅在响应中返回，请求中传入不生效。 **取值范围：** - CONNECTING：连接中。 - CONNECTED：已连接。 - CONNECT_FAILED：连接失败。 - DISCONNECTING：断开中 - DISCONNET_FAILED：断开失败 **默认取值：** 不涉及。
    * message  **参数解释：** ELB连接失败时的错误信息。 **约束限制：** 仅在响应中返回，请求中传入不生效；仅当ELB连接状态为CONNECT_FAILED时返回。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * residualResources  residualResources
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'elbId' => 'elb_id',
            'listenerId' => 'listener_id',
            'mTls' => 'm_tls',
            'caCertId' => 'ca_cert_id',
            'serverCertId' => 'server_cert_id',
            'sniCertIds' => 'sni_cert_ids',
            'status' => 'status',
            'message' => 'message',
            'residualResources' => 'residual_resources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * elbId  **参数解释：** 负载均衡器ID。 **约束限制：**  不涉及。 **取值范围：** 不涉及。 **默认取值：**  不涉及。
    * listenerId  **参数解释：** 负载均衡器的监听器ID。 **约束限制：**  不涉及。 **取值范围：** 不涉及。 **默认取值：**  不涉及。
    * mTls  **参数解释：** 负载均衡器的HTTPS监听器是否开启双向认证。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置为true，否则忽略该配置 **取值范围：** 不涉及。 **默认取值：** false
    * caCertId  **参数解释：** 负载均衡器的HTTPS监听器配置的客户端证书ID。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置，否则忽略该配置 **取值范围：** 不涉及。 **默认取值：**  不涉及。
    * serverCertId  **参数解释：** 负载均衡器的HTTPS监听器配置的服务端证书ID。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置，否则忽略该配置。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sniCertIds  **参数解释：** 负载均衡器的HTTPS监听器配置的SNI（服务器名称指示）证书ID列表。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置，否则忽略该配置。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * status  **参数解释：** ELB连接状态。 **约束限制：** 仅在响应中返回，请求中传入不生效。 **取值范围：** - CONNECTING：连接中。 - CONNECTED：已连接。 - CONNECT_FAILED：连接失败。 - DISCONNECTING：断开中 - DISCONNET_FAILED：断开失败 **默认取值：** 不涉及。
    * message  **参数解释：** ELB连接失败时的错误信息。 **约束限制：** 仅在响应中返回，请求中传入不生效；仅当ELB连接状态为CONNECT_FAILED时返回。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * residualResources  residualResources
    *
    * @var string[]
    */
    protected static $setters = [
            'elbId' => 'setElbId',
            'listenerId' => 'setListenerId',
            'mTls' => 'setMTls',
            'caCertId' => 'setCaCertId',
            'serverCertId' => 'setServerCertId',
            'sniCertIds' => 'setSniCertIds',
            'status' => 'setStatus',
            'message' => 'setMessage',
            'residualResources' => 'setResidualResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * elbId  **参数解释：** 负载均衡器ID。 **约束限制：**  不涉及。 **取值范围：** 不涉及。 **默认取值：**  不涉及。
    * listenerId  **参数解释：** 负载均衡器的监听器ID。 **约束限制：**  不涉及。 **取值范围：** 不涉及。 **默认取值：**  不涉及。
    * mTls  **参数解释：** 负载均衡器的HTTPS监听器是否开启双向认证。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置为true，否则忽略该配置 **取值范围：** 不涉及。 **默认取值：** false
    * caCertId  **参数解释：** 负载均衡器的HTTPS监听器配置的客户端证书ID。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置，否则忽略该配置 **取值范围：** 不涉及。 **默认取值：**  不涉及。
    * serverCertId  **参数解释：** 负载均衡器的HTTPS监听器配置的服务端证书ID。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置，否则忽略该配置。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * sniCertIds  **参数解释：** 负载均衡器的HTTPS监听器配置的SNI（服务器名称指示）证书ID列表。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置，否则忽略该配置。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * status  **参数解释：** ELB连接状态。 **约束限制：** 仅在响应中返回，请求中传入不生效。 **取值范围：** - CONNECTING：连接中。 - CONNECTED：已连接。 - CONNECT_FAILED：连接失败。 - DISCONNECTING：断开中 - DISCONNET_FAILED：断开失败 **默认取值：** 不涉及。
    * message  **参数解释：** ELB连接失败时的错误信息。 **约束限制：** 仅在响应中返回，请求中传入不生效；仅当ELB连接状态为CONNECT_FAILED时返回。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * residualResources  residualResources
    *
    * @var string[]
    */
    protected static $getters = [
            'elbId' => 'getElbId',
            'listenerId' => 'getListenerId',
            'mTls' => 'getMTls',
            'caCertId' => 'getCaCertId',
            'serverCertId' => 'getServerCertId',
            'sniCertIds' => 'getSniCertIds',
            'status' => 'getStatus',
            'message' => 'getMessage',
            'residualResources' => 'getResidualResources'
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
        $this->container['elbId'] = isset($data['elbId']) ? $data['elbId'] : null;
        $this->container['listenerId'] = isset($data['listenerId']) ? $data['listenerId'] : null;
        $this->container['mTls'] = isset($data['mTls']) ? $data['mTls'] : null;
        $this->container['caCertId'] = isset($data['caCertId']) ? $data['caCertId'] : null;
        $this->container['serverCertId'] = isset($data['serverCertId']) ? $data['serverCertId'] : null;
        $this->container['sniCertIds'] = isset($data['sniCertIds']) ? $data['sniCertIds'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['residualResources'] = isset($data['residualResources']) ? $data['residualResources'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['elbId'] === null) {
            $invalidProperties[] = "'elbId' can't be null";
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
    * Gets elbId
    *  **参数解释：** 负载均衡器ID。 **约束限制：**  不涉及。 **取值范围：** 不涉及。 **默认取值：**  不涉及。
    *
    * @return string
    */
    public function getElbId()
    {
        return $this->container['elbId'];
    }

    /**
    * Sets elbId
    *
    * @param string $elbId **参数解释：** 负载均衡器ID。 **约束限制：**  不涉及。 **取值范围：** 不涉及。 **默认取值：**  不涉及。
    *
    * @return $this
    */
    public function setElbId($elbId)
    {
        $this->container['elbId'] = $elbId;
        return $this;
    }

    /**
    * Gets listenerId
    *  **参数解释：** 负载均衡器的监听器ID。 **约束限制：**  不涉及。 **取值范围：** 不涉及。 **默认取值：**  不涉及。
    *
    * @return string|null
    */
    public function getListenerId()
    {
        return $this->container['listenerId'];
    }

    /**
    * Sets listenerId
    *
    * @param string|null $listenerId **参数解释：** 负载均衡器的监听器ID。 **约束限制：**  不涉及。 **取值范围：** 不涉及。 **默认取值：**  不涉及。
    *
    * @return $this
    */
    public function setListenerId($listenerId)
    {
        $this->container['listenerId'] = $listenerId;
        return $this;
    }

    /**
    * Gets mTls
    *  **参数解释：** 负载均衡器的HTTPS监听器是否开启双向认证。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置为true，否则忽略该配置 **取值范围：** 不涉及。 **默认取值：** false
    *
    * @return bool|null
    */
    public function getMTls()
    {
        return $this->container['mTls'];
    }

    /**
    * Sets mTls
    *
    * @param bool|null $mTls **参数解释：** 负载均衡器的HTTPS监听器是否开启双向认证。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置为true，否则忽略该配置 **取值范围：** 不涉及。 **默认取值：** false
    *
    * @return $this
    */
    public function setMTls($mTls)
    {
        $this->container['mTls'] = $mTls;
        return $this;
    }

    /**
    * Gets caCertId
    *  **参数解释：** 负载均衡器的HTTPS监听器配置的客户端证书ID。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置，否则忽略该配置 **取值范围：** 不涉及。 **默认取值：**  不涉及。
    *
    * @return string|null
    */
    public function getCaCertId()
    {
        return $this->container['caCertId'];
    }

    /**
    * Sets caCertId
    *
    * @param string|null $caCertId **参数解释：** 负载均衡器的HTTPS监听器配置的客户端证书ID。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置，否则忽略该配置 **取值范围：** 不涉及。 **默认取值：**  不涉及。
    *
    * @return $this
    */
    public function setCaCertId($caCertId)
    {
        $this->container['caCertId'] = $caCertId;
        return $this;
    }

    /**
    * Gets serverCertId
    *  **参数解释：** 负载均衡器的HTTPS监听器配置的服务端证书ID。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置，否则忽略该配置。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getServerCertId()
    {
        return $this->container['serverCertId'];
    }

    /**
    * Sets serverCertId
    *
    * @param string|null $serverCertId **参数解释：** 负载均衡器的HTTPS监听器配置的服务端证书ID。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置，否则忽略该配置。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setServerCertId($serverCertId)
    {
        $this->container['serverCertId'] = $serverCertId;
        return $this;
    }

    /**
    * Gets sniCertIds
    *  **参数解释：** 负载均衡器的HTTPS监听器配置的SNI（服务器名称指示）证书ID列表。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置，否则忽略该配置。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string[]|null
    */
    public function getSniCertIds()
    {
        return $this->container['sniCertIds'];
    }

    /**
    * Sets sniCertIds
    *
    * @param string[]|null $sniCertIds **参数解释：** 负载均衡器的HTTPS监听器配置的SNI（服务器名称指示）证书ID列表。 **约束限制：** 仅推理服务协议为HTTPS或WSS时可配置，否则忽略该配置。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setSniCertIds($sniCertIds)
    {
        $this->container['sniCertIds'] = $sniCertIds;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** ELB连接状态。 **约束限制：** 仅在响应中返回，请求中传入不生效。 **取值范围：** - CONNECTING：连接中。 - CONNECTED：已连接。 - CONNECT_FAILED：连接失败。 - DISCONNECTING：断开中 - DISCONNET_FAILED：断开失败 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释：** ELB连接状态。 **约束限制：** 仅在响应中返回，请求中传入不生效。 **取值范围：** - CONNECTING：连接中。 - CONNECTED：已连接。 - CONNECT_FAILED：连接失败。 - DISCONNECTING：断开中 - DISCONNET_FAILED：断开失败 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets message
    *  **参数解释：** ELB连接失败时的错误信息。 **约束限制：** 仅在响应中返回，请求中传入不生效；仅当ELB连接状态为CONNECT_FAILED时返回。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message **参数解释：** ELB连接失败时的错误信息。 **约束限制：** 仅在响应中返回，请求中传入不生效；仅当ELB连接状态为CONNECT_FAILED时返回。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets residualResources
    *  residualResources
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ResidualResources|null
    */
    public function getResidualResources()
    {
        return $this->container['residualResources'];
    }

    /**
    * Sets residualResources
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ResidualResources|null $residualResources residualResources
    *
    * @return $this
    */
    public function setResidualResources($residualResources)
    {
        $this->container['residualResources'] = $residualResources;
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

