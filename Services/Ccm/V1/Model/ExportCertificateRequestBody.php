<?php

namespace HuaweiCloud\SDK\Ccm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportCertificateRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportCertificateRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isCompressed  是否压缩。   - **true**   - **false**
    * type  根据服务器类型选择下载证书的形式，支持以下五种类型：   - **APACHE** : apache服务器推荐使用此参数；   - **NGINX** : nginx服务器推荐使用此参数；   - **IIS** : windows服务器推荐使用此参数；   - **TOMCAT** : tomcat服务器推荐使用此参数；   - **OTHER** : 下载PEM格式证书，推荐使用此参数。
    * isSmStandard  是否国密GMT0009标准规范和国密GMT0010标准规范。当证书算法为SM2时传入才有效，若不传入，则默认为false。   - **true**   - **false**
    * password  设置用于加密私钥的密码。支持使用英文大小写字母、数字、特殊字符（例如,.+-_#）等。最大长度为32字节，若不传入，则默认不使用加密导出。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isCompressed' => 'string',
            'type' => 'string',
            'isSmStandard' => 'string',
            'password' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isCompressed  是否压缩。   - **true**   - **false**
    * type  根据服务器类型选择下载证书的形式，支持以下五种类型：   - **APACHE** : apache服务器推荐使用此参数；   - **NGINX** : nginx服务器推荐使用此参数；   - **IIS** : windows服务器推荐使用此参数；   - **TOMCAT** : tomcat服务器推荐使用此参数；   - **OTHER** : 下载PEM格式证书，推荐使用此参数。
    * isSmStandard  是否国密GMT0009标准规范和国密GMT0010标准规范。当证书算法为SM2时传入才有效，若不传入，则默认为false。   - **true**   - **false**
    * password  设置用于加密私钥的密码。支持使用英文大小写字母、数字、特殊字符（例如,.+-_#）等。最大长度为32字节，若不传入，则默认不使用加密导出。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isCompressed' => null,
        'type' => null,
        'isSmStandard' => null,
        'password' => null
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
    * isCompressed  是否压缩。   - **true**   - **false**
    * type  根据服务器类型选择下载证书的形式，支持以下五种类型：   - **APACHE** : apache服务器推荐使用此参数；   - **NGINX** : nginx服务器推荐使用此参数；   - **IIS** : windows服务器推荐使用此参数；   - **TOMCAT** : tomcat服务器推荐使用此参数；   - **OTHER** : 下载PEM格式证书，推荐使用此参数。
    * isSmStandard  是否国密GMT0009标准规范和国密GMT0010标准规范。当证书算法为SM2时传入才有效，若不传入，则默认为false。   - **true**   - **false**
    * password  设置用于加密私钥的密码。支持使用英文大小写字母、数字、特殊字符（例如,.+-_#）等。最大长度为32字节，若不传入，则默认不使用加密导出。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isCompressed' => 'is_compressed',
            'type' => 'type',
            'isSmStandard' => 'is_sm_standard',
            'password' => 'password'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isCompressed  是否压缩。   - **true**   - **false**
    * type  根据服务器类型选择下载证书的形式，支持以下五种类型：   - **APACHE** : apache服务器推荐使用此参数；   - **NGINX** : nginx服务器推荐使用此参数；   - **IIS** : windows服务器推荐使用此参数；   - **TOMCAT** : tomcat服务器推荐使用此参数；   - **OTHER** : 下载PEM格式证书，推荐使用此参数。
    * isSmStandard  是否国密GMT0009标准规范和国密GMT0010标准规范。当证书算法为SM2时传入才有效，若不传入，则默认为false。   - **true**   - **false**
    * password  设置用于加密私钥的密码。支持使用英文大小写字母、数字、特殊字符（例如,.+-_#）等。最大长度为32字节，若不传入，则默认不使用加密导出。
    *
    * @var string[]
    */
    protected static $setters = [
            'isCompressed' => 'setIsCompressed',
            'type' => 'setType',
            'isSmStandard' => 'setIsSmStandard',
            'password' => 'setPassword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isCompressed  是否压缩。   - **true**   - **false**
    * type  根据服务器类型选择下载证书的形式，支持以下五种类型：   - **APACHE** : apache服务器推荐使用此参数；   - **NGINX** : nginx服务器推荐使用此参数；   - **IIS** : windows服务器推荐使用此参数；   - **TOMCAT** : tomcat服务器推荐使用此参数；   - **OTHER** : 下载PEM格式证书，推荐使用此参数。
    * isSmStandard  是否国密GMT0009标准规范和国密GMT0010标准规范。当证书算法为SM2时传入才有效，若不传入，则默认为false。   - **true**   - **false**
    * password  设置用于加密私钥的密码。支持使用英文大小写字母、数字、特殊字符（例如,.+-_#）等。最大长度为32字节，若不传入，则默认不使用加密导出。
    *
    * @var string[]
    */
    protected static $getters = [
            'isCompressed' => 'getIsCompressed',
            'type' => 'getType',
            'isSmStandard' => 'getIsSmStandard',
            'password' => 'getPassword'
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
        $this->container['isCompressed'] = isset($data['isCompressed']) ? $data['isCompressed'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['isSmStandard'] = isset($data['isSmStandard']) ? $data['isSmStandard'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['isCompressed'] === null) {
            $invalidProperties[] = "'isCompressed' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
    * Gets isCompressed
    *  是否压缩。   - **true**   - **false**
    *
    * @return string
    */
    public function getIsCompressed()
    {
        return $this->container['isCompressed'];
    }

    /**
    * Sets isCompressed
    *
    * @param string $isCompressed 是否压缩。   - **true**   - **false**
    *
    * @return $this
    */
    public function setIsCompressed($isCompressed)
    {
        $this->container['isCompressed'] = $isCompressed;
        return $this;
    }

    /**
    * Gets type
    *  根据服务器类型选择下载证书的形式，支持以下五种类型：   - **APACHE** : apache服务器推荐使用此参数；   - **NGINX** : nginx服务器推荐使用此参数；   - **IIS** : windows服务器推荐使用此参数；   - **TOMCAT** : tomcat服务器推荐使用此参数；   - **OTHER** : 下载PEM格式证书，推荐使用此参数。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 根据服务器类型选择下载证书的形式，支持以下五种类型：   - **APACHE** : apache服务器推荐使用此参数；   - **NGINX** : nginx服务器推荐使用此参数；   - **IIS** : windows服务器推荐使用此参数；   - **TOMCAT** : tomcat服务器推荐使用此参数；   - **OTHER** : 下载PEM格式证书，推荐使用此参数。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets isSmStandard
    *  是否国密GMT0009标准规范和国密GMT0010标准规范。当证书算法为SM2时传入才有效，若不传入，则默认为false。   - **true**   - **false**
    *
    * @return string|null
    */
    public function getIsSmStandard()
    {
        return $this->container['isSmStandard'];
    }

    /**
    * Sets isSmStandard
    *
    * @param string|null $isSmStandard 是否国密GMT0009标准规范和国密GMT0010标准规范。当证书算法为SM2时传入才有效，若不传入，则默认为false。   - **true**   - **false**
    *
    * @return $this
    */
    public function setIsSmStandard($isSmStandard)
    {
        $this->container['isSmStandard'] = $isSmStandard;
        return $this;
    }

    /**
    * Gets password
    *  设置用于加密私钥的密码。支持使用英文大小写字母、数字、特殊字符（例如,.+-_#）等。最大长度为32字节，若不传入，则默认不使用加密导出。
    *
    * @return string|null
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string|null $password 设置用于加密私钥的密码。支持使用英文大小写字母、数字、特殊字符（例如,.+-_#）等。最大长度为32字节，若不传入，则默认不使用加密导出。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
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

