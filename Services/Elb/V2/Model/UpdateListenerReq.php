<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateListenerReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateListenerReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  监听器名称。
    * description  监听器的描述信息
    * connectionLimit  监听器的最大连接数。该字段为预留字段，暂未启用。默认为-1。
    * http2Enable  HTTP2功能的开启状态。该字段只有当监听器的协议是TERMINATED_HTTPS时才有意义。
    * defaultPoolId  监听器的默认后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。当该字段为null时，表示监听器无默认的后端云服务器组。
    * defaultTlsContainerRef  监听器使用的服务器证书ID。当protocol参数为TERMINATED_HTTPS时，为必选字段
    * clientCaTlsContainerRef  监听器使用的CA证书ID。
    * sniContainerRefs  监听器使用的SNI证书（带域名的服务器证书）ID的列表。
    * insertHeaders  insertHeaders
    * tlsCiphersPolicy  监听器使用的安全策略，仅对TERMINATED_HTTPS协议类型的监听器有效。  取值包括：tls-1-0, tls-1-1, tls-1-2, tls-1-2-strict多种安全策略。  加密套件的排序为国密套件、ecc套件、rsa套件、tls1.3协议的套件（即支持ecc又支持rsa）
    * adminStateUp  监听器的管理状态。  该字段为预留字段，暂未启动。只支持设定为true
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'connectionLimit' => 'int',
            'http2Enable' => 'bool',
            'defaultPoolId' => 'string',
            'defaultTlsContainerRef' => 'string',
            'clientCaTlsContainerRef' => 'string',
            'sniContainerRefs' => 'string[]',
            'insertHeaders' => '\HuaweiCloud\SDK\Elb\V2\Model\InsertHeader',
            'tlsCiphersPolicy' => 'string',
            'adminStateUp' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  监听器名称。
    * description  监听器的描述信息
    * connectionLimit  监听器的最大连接数。该字段为预留字段，暂未启用。默认为-1。
    * http2Enable  HTTP2功能的开启状态。该字段只有当监听器的协议是TERMINATED_HTTPS时才有意义。
    * defaultPoolId  监听器的默认后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。当该字段为null时，表示监听器无默认的后端云服务器组。
    * defaultTlsContainerRef  监听器使用的服务器证书ID。当protocol参数为TERMINATED_HTTPS时，为必选字段
    * clientCaTlsContainerRef  监听器使用的CA证书ID。
    * sniContainerRefs  监听器使用的SNI证书（带域名的服务器证书）ID的列表。
    * insertHeaders  insertHeaders
    * tlsCiphersPolicy  监听器使用的安全策略，仅对TERMINATED_HTTPS协议类型的监听器有效。  取值包括：tls-1-0, tls-1-1, tls-1-2, tls-1-2-strict多种安全策略。  加密套件的排序为国密套件、ecc套件、rsa套件、tls1.3协议的套件（即支持ecc又支持rsa）
    * adminStateUp  监听器的管理状态。  该字段为预留字段，暂未启动。只支持设定为true
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'connectionLimit' => 'int32',
        'http2Enable' => null,
        'defaultPoolId' => null,
        'defaultTlsContainerRef' => null,
        'clientCaTlsContainerRef' => null,
        'sniContainerRefs' => null,
        'insertHeaders' => null,
        'tlsCiphersPolicy' => null,
        'adminStateUp' => null
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
    * name  监听器名称。
    * description  监听器的描述信息
    * connectionLimit  监听器的最大连接数。该字段为预留字段，暂未启用。默认为-1。
    * http2Enable  HTTP2功能的开启状态。该字段只有当监听器的协议是TERMINATED_HTTPS时才有意义。
    * defaultPoolId  监听器的默认后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。当该字段为null时，表示监听器无默认的后端云服务器组。
    * defaultTlsContainerRef  监听器使用的服务器证书ID。当protocol参数为TERMINATED_HTTPS时，为必选字段
    * clientCaTlsContainerRef  监听器使用的CA证书ID。
    * sniContainerRefs  监听器使用的SNI证书（带域名的服务器证书）ID的列表。
    * insertHeaders  insertHeaders
    * tlsCiphersPolicy  监听器使用的安全策略，仅对TERMINATED_HTTPS协议类型的监听器有效。  取值包括：tls-1-0, tls-1-1, tls-1-2, tls-1-2-strict多种安全策略。  加密套件的排序为国密套件、ecc套件、rsa套件、tls1.3协议的套件（即支持ecc又支持rsa）
    * adminStateUp  监听器的管理状态。  该字段为预留字段，暂未启动。只支持设定为true
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'connectionLimit' => 'connection_limit',
            'http2Enable' => 'http2_enable',
            'defaultPoolId' => 'default_pool_id',
            'defaultTlsContainerRef' => 'default_tls_container_ref',
            'clientCaTlsContainerRef' => 'client_ca_tls_container_ref',
            'sniContainerRefs' => 'sni_container_refs',
            'insertHeaders' => 'insert_headers',
            'tlsCiphersPolicy' => 'tls_ciphers_policy',
            'adminStateUp' => 'admin_state_up'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  监听器名称。
    * description  监听器的描述信息
    * connectionLimit  监听器的最大连接数。该字段为预留字段，暂未启用。默认为-1。
    * http2Enable  HTTP2功能的开启状态。该字段只有当监听器的协议是TERMINATED_HTTPS时才有意义。
    * defaultPoolId  监听器的默认后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。当该字段为null时，表示监听器无默认的后端云服务器组。
    * defaultTlsContainerRef  监听器使用的服务器证书ID。当protocol参数为TERMINATED_HTTPS时，为必选字段
    * clientCaTlsContainerRef  监听器使用的CA证书ID。
    * sniContainerRefs  监听器使用的SNI证书（带域名的服务器证书）ID的列表。
    * insertHeaders  insertHeaders
    * tlsCiphersPolicy  监听器使用的安全策略，仅对TERMINATED_HTTPS协议类型的监听器有效。  取值包括：tls-1-0, tls-1-1, tls-1-2, tls-1-2-strict多种安全策略。  加密套件的排序为国密套件、ecc套件、rsa套件、tls1.3协议的套件（即支持ecc又支持rsa）
    * adminStateUp  监听器的管理状态。  该字段为预留字段，暂未启动。只支持设定为true
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'connectionLimit' => 'setConnectionLimit',
            'http2Enable' => 'setHttp2Enable',
            'defaultPoolId' => 'setDefaultPoolId',
            'defaultTlsContainerRef' => 'setDefaultTlsContainerRef',
            'clientCaTlsContainerRef' => 'setClientCaTlsContainerRef',
            'sniContainerRefs' => 'setSniContainerRefs',
            'insertHeaders' => 'setInsertHeaders',
            'tlsCiphersPolicy' => 'setTlsCiphersPolicy',
            'adminStateUp' => 'setAdminStateUp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  监听器名称。
    * description  监听器的描述信息
    * connectionLimit  监听器的最大连接数。该字段为预留字段，暂未启用。默认为-1。
    * http2Enable  HTTP2功能的开启状态。该字段只有当监听器的协议是TERMINATED_HTTPS时才有意义。
    * defaultPoolId  监听器的默认后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。当该字段为null时，表示监听器无默认的后端云服务器组。
    * defaultTlsContainerRef  监听器使用的服务器证书ID。当protocol参数为TERMINATED_HTTPS时，为必选字段
    * clientCaTlsContainerRef  监听器使用的CA证书ID。
    * sniContainerRefs  监听器使用的SNI证书（带域名的服务器证书）ID的列表。
    * insertHeaders  insertHeaders
    * tlsCiphersPolicy  监听器使用的安全策略，仅对TERMINATED_HTTPS协议类型的监听器有效。  取值包括：tls-1-0, tls-1-1, tls-1-2, tls-1-2-strict多种安全策略。  加密套件的排序为国密套件、ecc套件、rsa套件、tls1.3协议的套件（即支持ecc又支持rsa）
    * adminStateUp  监听器的管理状态。  该字段为预留字段，暂未启动。只支持设定为true
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'connectionLimit' => 'getConnectionLimit',
            'http2Enable' => 'getHttp2Enable',
            'defaultPoolId' => 'getDefaultPoolId',
            'defaultTlsContainerRef' => 'getDefaultTlsContainerRef',
            'clientCaTlsContainerRef' => 'getClientCaTlsContainerRef',
            'sniContainerRefs' => 'getSniContainerRefs',
            'insertHeaders' => 'getInsertHeaders',
            'tlsCiphersPolicy' => 'getTlsCiphersPolicy',
            'adminStateUp' => 'getAdminStateUp'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['connectionLimit'] = isset($data['connectionLimit']) ? $data['connectionLimit'] : null;
        $this->container['http2Enable'] = isset($data['http2Enable']) ? $data['http2Enable'] : null;
        $this->container['defaultPoolId'] = isset($data['defaultPoolId']) ? $data['defaultPoolId'] : null;
        $this->container['defaultTlsContainerRef'] = isset($data['defaultTlsContainerRef']) ? $data['defaultTlsContainerRef'] : null;
        $this->container['clientCaTlsContainerRef'] = isset($data['clientCaTlsContainerRef']) ? $data['clientCaTlsContainerRef'] : null;
        $this->container['sniContainerRefs'] = isset($data['sniContainerRefs']) ? $data['sniContainerRefs'] : null;
        $this->container['insertHeaders'] = isset($data['insertHeaders']) ? $data['insertHeaders'] : null;
        $this->container['tlsCiphersPolicy'] = isset($data['tlsCiphersPolicy']) ? $data['tlsCiphersPolicy'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
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
            if (!is_null($this->container['connectionLimit']) && ($this->container['connectionLimit'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'connectionLimit', must be smaller than or equal to 2147483647.";
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
    *  监听器名称。
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
    * @param string|null $name 监听器名称。
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
    *  监听器的描述信息
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
    * @param string|null $description 监听器的描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets connectionLimit
    *  监听器的最大连接数。该字段为预留字段，暂未启用。默认为-1。
    *
    * @return int|null
    */
    public function getConnectionLimit()
    {
        return $this->container['connectionLimit'];
    }

    /**
    * Sets connectionLimit
    *
    * @param int|null $connectionLimit 监听器的最大连接数。该字段为预留字段，暂未启用。默认为-1。
    *
    * @return $this
    */
    public function setConnectionLimit($connectionLimit)
    {
        $this->container['connectionLimit'] = $connectionLimit;
        return $this;
    }

    /**
    * Gets http2Enable
    *  HTTP2功能的开启状态。该字段只有当监听器的协议是TERMINATED_HTTPS时才有意义。
    *
    * @return bool|null
    */
    public function getHttp2Enable()
    {
        return $this->container['http2Enable'];
    }

    /**
    * Sets http2Enable
    *
    * @param bool|null $http2Enable HTTP2功能的开启状态。该字段只有当监听器的协议是TERMINATED_HTTPS时才有意义。
    *
    * @return $this
    */
    public function setHttp2Enable($http2Enable)
    {
        $this->container['http2Enable'] = $http2Enable;
        return $this;
    }

    /**
    * Gets defaultPoolId
    *  监听器的默认后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。当该字段为null时，表示监听器无默认的后端云服务器组。
    *
    * @return string|null
    */
    public function getDefaultPoolId()
    {
        return $this->container['defaultPoolId'];
    }

    /**
    * Sets defaultPoolId
    *
    * @param string|null $defaultPoolId 监听器的默认后端云服务器组ID。当请求没有匹配的转发策略时，转发到默认后端云服务器上处理。当该字段为null时，表示监听器无默认的后端云服务器组。
    *
    * @return $this
    */
    public function setDefaultPoolId($defaultPoolId)
    {
        $this->container['defaultPoolId'] = $defaultPoolId;
        return $this;
    }

    /**
    * Gets defaultTlsContainerRef
    *  监听器使用的服务器证书ID。当protocol参数为TERMINATED_HTTPS时，为必选字段
    *
    * @return string|null
    */
    public function getDefaultTlsContainerRef()
    {
        return $this->container['defaultTlsContainerRef'];
    }

    /**
    * Sets defaultTlsContainerRef
    *
    * @param string|null $defaultTlsContainerRef 监听器使用的服务器证书ID。当protocol参数为TERMINATED_HTTPS时，为必选字段
    *
    * @return $this
    */
    public function setDefaultTlsContainerRef($defaultTlsContainerRef)
    {
        $this->container['defaultTlsContainerRef'] = $defaultTlsContainerRef;
        return $this;
    }

    /**
    * Gets clientCaTlsContainerRef
    *  监听器使用的CA证书ID。
    *
    * @return string|null
    */
    public function getClientCaTlsContainerRef()
    {
        return $this->container['clientCaTlsContainerRef'];
    }

    /**
    * Sets clientCaTlsContainerRef
    *
    * @param string|null $clientCaTlsContainerRef 监听器使用的CA证书ID。
    *
    * @return $this
    */
    public function setClientCaTlsContainerRef($clientCaTlsContainerRef)
    {
        $this->container['clientCaTlsContainerRef'] = $clientCaTlsContainerRef;
        return $this;
    }

    /**
    * Gets sniContainerRefs
    *  监听器使用的SNI证书（带域名的服务器证书）ID的列表。
    *
    * @return string[]|null
    */
    public function getSniContainerRefs()
    {
        return $this->container['sniContainerRefs'];
    }

    /**
    * Sets sniContainerRefs
    *
    * @param string[]|null $sniContainerRefs 监听器使用的SNI证书（带域名的服务器证书）ID的列表。
    *
    * @return $this
    */
    public function setSniContainerRefs($sniContainerRefs)
    {
        $this->container['sniContainerRefs'] = $sniContainerRefs;
        return $this;
    }

    /**
    * Gets insertHeaders
    *  insertHeaders
    *
    * @return \HuaweiCloud\SDK\Elb\V2\Model\InsertHeader|null
    */
    public function getInsertHeaders()
    {
        return $this->container['insertHeaders'];
    }

    /**
    * Sets insertHeaders
    *
    * @param \HuaweiCloud\SDK\Elb\V2\Model\InsertHeader|null $insertHeaders insertHeaders
    *
    * @return $this
    */
    public function setInsertHeaders($insertHeaders)
    {
        $this->container['insertHeaders'] = $insertHeaders;
        return $this;
    }

    /**
    * Gets tlsCiphersPolicy
    *  监听器使用的安全策略，仅对TERMINATED_HTTPS协议类型的监听器有效。  取值包括：tls-1-0, tls-1-1, tls-1-2, tls-1-2-strict多种安全策略。  加密套件的排序为国密套件、ecc套件、rsa套件、tls1.3协议的套件（即支持ecc又支持rsa）
    *
    * @return string|null
    */
    public function getTlsCiphersPolicy()
    {
        return $this->container['tlsCiphersPolicy'];
    }

    /**
    * Sets tlsCiphersPolicy
    *
    * @param string|null $tlsCiphersPolicy 监听器使用的安全策略，仅对TERMINATED_HTTPS协议类型的监听器有效。  取值包括：tls-1-0, tls-1-1, tls-1-2, tls-1-2-strict多种安全策略。  加密套件的排序为国密套件、ecc套件、rsa套件、tls1.3协议的套件（即支持ecc又支持rsa）
    *
    * @return $this
    */
    public function setTlsCiphersPolicy($tlsCiphersPolicy)
    {
        $this->container['tlsCiphersPolicy'] = $tlsCiphersPolicy;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  监听器的管理状态。  该字段为预留字段，暂未启动。只支持设定为true
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp 监听器的管理状态。  该字段为预留字段，暂未启动。只支持设定为true
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
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

