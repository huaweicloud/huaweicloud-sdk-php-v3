<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateCertificateOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateCertificateOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * certificate  证书的内容。PEM编码格式。 最大长度65536字符。 支持证书链，最大11层(含证书和证书链)。
    * description  证书的描述。
    * name  证书的名称。
    * privateKey  服务器证书的私钥。PEM编码格式。 当type为client时，该参数被忽略，不影响证书的创建和使用。若传入不符合格式值，则会报错。 当type为server时，该字段必须符合格式要求，且私钥必须是有效的。 最大长度8192字符。
    * domain  服务器证书所签域名。该字段仅type为server时有效。  总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分割，不超过100个域名。  普通域名：由若干字符串组成，字符串间以\".\"分割，单个字符串长度不超过63个字符， 只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com；  泛域名：在普通域名的基础上仅允许首字母为\"*\"。例：*.test.com
    * encCertificate  HTTPS协议使用的SM加密证书内容。支持证书链，最大11层(含证书和证书链)。  取值：PEM编码格式。最大长度65536字符。  使用说明：仅type为server_sm时有效。
    * encPrivateKey  HTTPS协议使用的SM加密证书内容。  取值：PEM编码格式。最大长度8192字符。  使用说明：仅type为server_sm时有效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'certificate' => 'string',
            'description' => 'string',
            'name' => 'string',
            'privateKey' => 'string',
            'domain' => 'string',
            'encCertificate' => 'string',
            'encPrivateKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * certificate  证书的内容。PEM编码格式。 最大长度65536字符。 支持证书链，最大11层(含证书和证书链)。
    * description  证书的描述。
    * name  证书的名称。
    * privateKey  服务器证书的私钥。PEM编码格式。 当type为client时，该参数被忽略，不影响证书的创建和使用。若传入不符合格式值，则会报错。 当type为server时，该字段必须符合格式要求，且私钥必须是有效的。 最大长度8192字符。
    * domain  服务器证书所签域名。该字段仅type为server时有效。  总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分割，不超过100个域名。  普通域名：由若干字符串组成，字符串间以\".\"分割，单个字符串长度不超过63个字符， 只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com；  泛域名：在普通域名的基础上仅允许首字母为\"*\"。例：*.test.com
    * encCertificate  HTTPS协议使用的SM加密证书内容。支持证书链，最大11层(含证书和证书链)。  取值：PEM编码格式。最大长度65536字符。  使用说明：仅type为server_sm时有效。
    * encPrivateKey  HTTPS协议使用的SM加密证书内容。  取值：PEM编码格式。最大长度8192字符。  使用说明：仅type为server_sm时有效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'certificate' => null,
        'description' => null,
        'name' => null,
        'privateKey' => null,
        'domain' => null,
        'encCertificate' => null,
        'encPrivateKey' => null
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
    * certificate  证书的内容。PEM编码格式。 最大长度65536字符。 支持证书链，最大11层(含证书和证书链)。
    * description  证书的描述。
    * name  证书的名称。
    * privateKey  服务器证书的私钥。PEM编码格式。 当type为client时，该参数被忽略，不影响证书的创建和使用。若传入不符合格式值，则会报错。 当type为server时，该字段必须符合格式要求，且私钥必须是有效的。 最大长度8192字符。
    * domain  服务器证书所签域名。该字段仅type为server时有效。  总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分割，不超过100个域名。  普通域名：由若干字符串组成，字符串间以\".\"分割，单个字符串长度不超过63个字符， 只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com；  泛域名：在普通域名的基础上仅允许首字母为\"*\"。例：*.test.com
    * encCertificate  HTTPS协议使用的SM加密证书内容。支持证书链，最大11层(含证书和证书链)。  取值：PEM编码格式。最大长度65536字符。  使用说明：仅type为server_sm时有效。
    * encPrivateKey  HTTPS协议使用的SM加密证书内容。  取值：PEM编码格式。最大长度8192字符。  使用说明：仅type为server_sm时有效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'certificate' => 'certificate',
            'description' => 'description',
            'name' => 'name',
            'privateKey' => 'private_key',
            'domain' => 'domain',
            'encCertificate' => 'enc_certificate',
            'encPrivateKey' => 'enc_private_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * certificate  证书的内容。PEM编码格式。 最大长度65536字符。 支持证书链，最大11层(含证书和证书链)。
    * description  证书的描述。
    * name  证书的名称。
    * privateKey  服务器证书的私钥。PEM编码格式。 当type为client时，该参数被忽略，不影响证书的创建和使用。若传入不符合格式值，则会报错。 当type为server时，该字段必须符合格式要求，且私钥必须是有效的。 最大长度8192字符。
    * domain  服务器证书所签域名。该字段仅type为server时有效。  总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分割，不超过100个域名。  普通域名：由若干字符串组成，字符串间以\".\"分割，单个字符串长度不超过63个字符， 只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com；  泛域名：在普通域名的基础上仅允许首字母为\"*\"。例：*.test.com
    * encCertificate  HTTPS协议使用的SM加密证书内容。支持证书链，最大11层(含证书和证书链)。  取值：PEM编码格式。最大长度65536字符。  使用说明：仅type为server_sm时有效。
    * encPrivateKey  HTTPS协议使用的SM加密证书内容。  取值：PEM编码格式。最大长度8192字符。  使用说明：仅type为server_sm时有效。
    *
    * @var string[]
    */
    protected static $setters = [
            'certificate' => 'setCertificate',
            'description' => 'setDescription',
            'name' => 'setName',
            'privateKey' => 'setPrivateKey',
            'domain' => 'setDomain',
            'encCertificate' => 'setEncCertificate',
            'encPrivateKey' => 'setEncPrivateKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * certificate  证书的内容。PEM编码格式。 最大长度65536字符。 支持证书链，最大11层(含证书和证书链)。
    * description  证书的描述。
    * name  证书的名称。
    * privateKey  服务器证书的私钥。PEM编码格式。 当type为client时，该参数被忽略，不影响证书的创建和使用。若传入不符合格式值，则会报错。 当type为server时，该字段必须符合格式要求，且私钥必须是有效的。 最大长度8192字符。
    * domain  服务器证书所签域名。该字段仅type为server时有效。  总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分割，不超过100个域名。  普通域名：由若干字符串组成，字符串间以\".\"分割，单个字符串长度不超过63个字符， 只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com；  泛域名：在普通域名的基础上仅允许首字母为\"*\"。例：*.test.com
    * encCertificate  HTTPS协议使用的SM加密证书内容。支持证书链，最大11层(含证书和证书链)。  取值：PEM编码格式。最大长度65536字符。  使用说明：仅type为server_sm时有效。
    * encPrivateKey  HTTPS协议使用的SM加密证书内容。  取值：PEM编码格式。最大长度8192字符。  使用说明：仅type为server_sm时有效。
    *
    * @var string[]
    */
    protected static $getters = [
            'certificate' => 'getCertificate',
            'description' => 'getDescription',
            'name' => 'getName',
            'privateKey' => 'getPrivateKey',
            'domain' => 'getDomain',
            'encCertificate' => 'getEncCertificate',
            'encPrivateKey' => 'getEncPrivateKey'
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
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['encCertificate'] = isset($data['encCertificate']) ? $data['encCertificate'] : null;
        $this->container['encPrivateKey'] = isset($data['encPrivateKey']) ? $data['encPrivateKey'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) > 10000)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) < 0)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 0.";
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
    * Gets certificate
    *  证书的内容。PEM编码格式。 最大长度65536字符。 支持证书链，最大11层(含证书和证书链)。
    *
    * @return string|null
    */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
    * Sets certificate
    *
    * @param string|null $certificate 证书的内容。PEM编码格式。 最大长度65536字符。 支持证书链，最大11层(含证书和证书链)。
    *
    * @return $this
    */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;
        return $this;
    }

    /**
    * Gets description
    *  证书的描述。
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
    * @param string|null $description 证书的描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets name
    *  证书的名称。
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
    * @param string|null $name 证书的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets privateKey
    *  服务器证书的私钥。PEM编码格式。 当type为client时，该参数被忽略，不影响证书的创建和使用。若传入不符合格式值，则会报错。 当type为server时，该字段必须符合格式要求，且私钥必须是有效的。 最大长度8192字符。
    *
    * @return string|null
    */
    public function getPrivateKey()
    {
        return $this->container['privateKey'];
    }

    /**
    * Sets privateKey
    *
    * @param string|null $privateKey 服务器证书的私钥。PEM编码格式。 当type为client时，该参数被忽略，不影响证书的创建和使用。若传入不符合格式值，则会报错。 当type为server时，该字段必须符合格式要求，且私钥必须是有效的。 最大长度8192字符。
    *
    * @return $this
    */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;
        return $this;
    }

    /**
    * Gets domain
    *  服务器证书所签域名。该字段仅type为server时有效。  总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分割，不超过100个域名。  普通域名：由若干字符串组成，字符串间以\".\"分割，单个字符串长度不超过63个字符， 只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com；  泛域名：在普通域名的基础上仅允许首字母为\"*\"。例：*.test.com
    *
    * @return string|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string|null $domain 服务器证书所签域名。该字段仅type为server时有效。  总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分割，不超过100个域名。  普通域名：由若干字符串组成，字符串间以\".\"分割，单个字符串长度不超过63个字符， 只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com；  泛域名：在普通域名的基础上仅允许首字母为\"*\"。例：*.test.com
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets encCertificate
    *  HTTPS协议使用的SM加密证书内容。支持证书链，最大11层(含证书和证书链)。  取值：PEM编码格式。最大长度65536字符。  使用说明：仅type为server_sm时有效。
    *
    * @return string|null
    */
    public function getEncCertificate()
    {
        return $this->container['encCertificate'];
    }

    /**
    * Sets encCertificate
    *
    * @param string|null $encCertificate HTTPS协议使用的SM加密证书内容。支持证书链，最大11层(含证书和证书链)。  取值：PEM编码格式。最大长度65536字符。  使用说明：仅type为server_sm时有效。
    *
    * @return $this
    */
    public function setEncCertificate($encCertificate)
    {
        $this->container['encCertificate'] = $encCertificate;
        return $this;
    }

    /**
    * Gets encPrivateKey
    *  HTTPS协议使用的SM加密证书内容。  取值：PEM编码格式。最大长度8192字符。  使用说明：仅type为server_sm时有效。
    *
    * @return string|null
    */
    public function getEncPrivateKey()
    {
        return $this->container['encPrivateKey'];
    }

    /**
    * Sets encPrivateKey
    *
    * @param string|null $encPrivateKey HTTPS协议使用的SM加密证书内容。  取值：PEM编码格式。最大长度8192字符。  使用说明：仅type为server_sm时有效。
    *
    * @return $this
    */
    public function setEncPrivateKey($encPrivateKey)
    {
        $this->container['encPrivateKey'] = $encPrivateKey;
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

