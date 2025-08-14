<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateCertificateDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateCertificateDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * provisionEnable  是否开启自注册能力，当为true时该功能必须配合预调配功能使用，true：是，false：否。
    * templateId  预调配模板ID，该CA证书绑定的预调配模板id，当该字段传null时表示解除绑定关系。
    * ocspEnable  是否开启该CA证书下的设备证书OCSP校验，当为true且设备证书信息中包含OCSP url时则平台会校验证书的状态，当证书状态为revoked时平台会拒绝设备连接，true：开启，false：关闭。
    * ocspSslEnable  访问ocsp服务器是否开启SSL，开启后必须配置服务器CA证书校验。
    * ocspServerCaId  ocsp服务器端CA证书id，当ocsp服务器为https协议时需要配置，否则认证失败。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'provisionEnable' => 'bool',
            'templateId' => 'string',
            'ocspEnable' => 'bool',
            'ocspSslEnable' => 'bool',
            'ocspServerCaId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * provisionEnable  是否开启自注册能力，当为true时该功能必须配合预调配功能使用，true：是，false：否。
    * templateId  预调配模板ID，该CA证书绑定的预调配模板id，当该字段传null时表示解除绑定关系。
    * ocspEnable  是否开启该CA证书下的设备证书OCSP校验，当为true且设备证书信息中包含OCSP url时则平台会校验证书的状态，当证书状态为revoked时平台会拒绝设备连接，true：开启，false：关闭。
    * ocspSslEnable  访问ocsp服务器是否开启SSL，开启后必须配置服务器CA证书校验。
    * ocspServerCaId  ocsp服务器端CA证书id，当ocsp服务器为https协议时需要配置，否则认证失败。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'provisionEnable' => null,
        'templateId' => null,
        'ocspEnable' => null,
        'ocspSslEnable' => null,
        'ocspServerCaId' => null
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
    * provisionEnable  是否开启自注册能力，当为true时该功能必须配合预调配功能使用，true：是，false：否。
    * templateId  预调配模板ID，该CA证书绑定的预调配模板id，当该字段传null时表示解除绑定关系。
    * ocspEnable  是否开启该CA证书下的设备证书OCSP校验，当为true且设备证书信息中包含OCSP url时则平台会校验证书的状态，当证书状态为revoked时平台会拒绝设备连接，true：开启，false：关闭。
    * ocspSslEnable  访问ocsp服务器是否开启SSL，开启后必须配置服务器CA证书校验。
    * ocspServerCaId  ocsp服务器端CA证书id，当ocsp服务器为https协议时需要配置，否则认证失败。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'provisionEnable' => 'provision_enable',
            'templateId' => 'template_id',
            'ocspEnable' => 'ocsp_enable',
            'ocspSslEnable' => 'ocsp_ssl_enable',
            'ocspServerCaId' => 'ocsp_server_ca_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * provisionEnable  是否开启自注册能力，当为true时该功能必须配合预调配功能使用，true：是，false：否。
    * templateId  预调配模板ID，该CA证书绑定的预调配模板id，当该字段传null时表示解除绑定关系。
    * ocspEnable  是否开启该CA证书下的设备证书OCSP校验，当为true且设备证书信息中包含OCSP url时则平台会校验证书的状态，当证书状态为revoked时平台会拒绝设备连接，true：开启，false：关闭。
    * ocspSslEnable  访问ocsp服务器是否开启SSL，开启后必须配置服务器CA证书校验。
    * ocspServerCaId  ocsp服务器端CA证书id，当ocsp服务器为https协议时需要配置，否则认证失败。
    *
    * @var string[]
    */
    protected static $setters = [
            'provisionEnable' => 'setProvisionEnable',
            'templateId' => 'setTemplateId',
            'ocspEnable' => 'setOcspEnable',
            'ocspSslEnable' => 'setOcspSslEnable',
            'ocspServerCaId' => 'setOcspServerCaId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * provisionEnable  是否开启自注册能力，当为true时该功能必须配合预调配功能使用，true：是，false：否。
    * templateId  预调配模板ID，该CA证书绑定的预调配模板id，当该字段传null时表示解除绑定关系。
    * ocspEnable  是否开启该CA证书下的设备证书OCSP校验，当为true且设备证书信息中包含OCSP url时则平台会校验证书的状态，当证书状态为revoked时平台会拒绝设备连接，true：开启，false：关闭。
    * ocspSslEnable  访问ocsp服务器是否开启SSL，开启后必须配置服务器CA证书校验。
    * ocspServerCaId  ocsp服务器端CA证书id，当ocsp服务器为https协议时需要配置，否则认证失败。
    *
    * @var string[]
    */
    protected static $getters = [
            'provisionEnable' => 'getProvisionEnable',
            'templateId' => 'getTemplateId',
            'ocspEnable' => 'getOcspEnable',
            'ocspSslEnable' => 'getOcspSslEnable',
            'ocspServerCaId' => 'getOcspServerCaId'
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
        $this->container['provisionEnable'] = isset($data['provisionEnable']) ? $data['provisionEnable'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['ocspEnable'] = isset($data['ocspEnable']) ? $data['ocspEnable'] : null;
        $this->container['ocspSslEnable'] = isset($data['ocspSslEnable']) ? $data['ocspSslEnable'] : null;
        $this->container['ocspServerCaId'] = isset($data['ocspServerCaId']) ? $data['ocspServerCaId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['templateId']) && !preg_match("/^[a-fA-F0-9]{24}$/", $this->container['templateId'])) {
                $invalidProperties[] = "invalid value for 'templateId', must be conform to the pattern /^[a-fA-F0-9]{24}$/.";
            }
            if (!is_null($this->container['ocspServerCaId']) && !preg_match("/^[a-f0-9-]{1,36}$/", $this->container['ocspServerCaId'])) {
                $invalidProperties[] = "invalid value for 'ocspServerCaId', must be conform to the pattern /^[a-f0-9-]{1,36}$/.";
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
    * Gets provisionEnable
    *  是否开启自注册能力，当为true时该功能必须配合预调配功能使用，true：是，false：否。
    *
    * @return bool|null
    */
    public function getProvisionEnable()
    {
        return $this->container['provisionEnable'];
    }

    /**
    * Sets provisionEnable
    *
    * @param bool|null $provisionEnable 是否开启自注册能力，当为true时该功能必须配合预调配功能使用，true：是，false：否。
    *
    * @return $this
    */
    public function setProvisionEnable($provisionEnable)
    {
        $this->container['provisionEnable'] = $provisionEnable;
        return $this;
    }

    /**
    * Gets templateId
    *  预调配模板ID，该CA证书绑定的预调配模板id，当该字段传null时表示解除绑定关系。
    *
    * @return string|null
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string|null $templateId 预调配模板ID，该CA证书绑定的预调配模板id，当该字段传null时表示解除绑定关系。
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets ocspEnable
    *  是否开启该CA证书下的设备证书OCSP校验，当为true且设备证书信息中包含OCSP url时则平台会校验证书的状态，当证书状态为revoked时平台会拒绝设备连接，true：开启，false：关闭。
    *
    * @return bool|null
    */
    public function getOcspEnable()
    {
        return $this->container['ocspEnable'];
    }

    /**
    * Sets ocspEnable
    *
    * @param bool|null $ocspEnable 是否开启该CA证书下的设备证书OCSP校验，当为true且设备证书信息中包含OCSP url时则平台会校验证书的状态，当证书状态为revoked时平台会拒绝设备连接，true：开启，false：关闭。
    *
    * @return $this
    */
    public function setOcspEnable($ocspEnable)
    {
        $this->container['ocspEnable'] = $ocspEnable;
        return $this;
    }

    /**
    * Gets ocspSslEnable
    *  访问ocsp服务器是否开启SSL，开启后必须配置服务器CA证书校验。
    *
    * @return bool|null
    */
    public function getOcspSslEnable()
    {
        return $this->container['ocspSslEnable'];
    }

    /**
    * Sets ocspSslEnable
    *
    * @param bool|null $ocspSslEnable 访问ocsp服务器是否开启SSL，开启后必须配置服务器CA证书校验。
    *
    * @return $this
    */
    public function setOcspSslEnable($ocspSslEnable)
    {
        $this->container['ocspSslEnable'] = $ocspSslEnable;
        return $this;
    }

    /**
    * Gets ocspServerCaId
    *  ocsp服务器端CA证书id，当ocsp服务器为https协议时需要配置，否则认证失败。
    *
    * @return string|null
    */
    public function getOcspServerCaId()
    {
        return $this->container['ocspServerCaId'];
    }

    /**
    * Sets ocspServerCaId
    *
    * @param string|null $ocspServerCaId ocsp服务器端CA证书id，当ocsp服务器为https协议时需要配置，否则认证失败。
    *
    * @return $this
    */
    public function setOcspServerCaId($ocspServerCaId)
    {
        $this->container['ocspServerCaId'] = $ocspServerCaId;
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

