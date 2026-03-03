<?php

namespace HuaweiCloud\SDK\Ccm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportCertificateAuthorityCsrResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportCertificateAuthorityCsrResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * csr  证书签名请求内容，有以下两种情况：   - 通过API请求本接口，证书签名请求中换行符已使用\"\\r\\n\"代替；   - 通过console端导出证书签名请求，将得到标准的PEM格式的证书签名请求文件。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'csr' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * csr  证书签名请求内容，有以下两种情况：   - 通过API请求本接口，证书签名请求中换行符已使用\"\\r\\n\"代替；   - 通过console端导出证书签名请求，将得到标准的PEM格式的证书签名请求文件。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'csr' => null
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
    * csr  证书签名请求内容，有以下两种情况：   - 通过API请求本接口，证书签名请求中换行符已使用\"\\r\\n\"代替；   - 通过console端导出证书签名请求，将得到标准的PEM格式的证书签名请求文件。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'csr' => 'csr'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * csr  证书签名请求内容，有以下两种情况：   - 通过API请求本接口，证书签名请求中换行符已使用\"\\r\\n\"代替；   - 通过console端导出证书签名请求，将得到标准的PEM格式的证书签名请求文件。
    *
    * @var string[]
    */
    protected static $setters = [
            'csr' => 'setCsr'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * csr  证书签名请求内容，有以下两种情况：   - 通过API请求本接口，证书签名请求中换行符已使用\"\\r\\n\"代替；   - 通过console端导出证书签名请求，将得到标准的PEM格式的证书签名请求文件。
    *
    * @var string[]
    */
    protected static $getters = [
            'csr' => 'getCsr'
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
        $this->container['csr'] = isset($data['csr']) ? $data['csr'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['csr']) && (mb_strlen($this->container['csr']) > 4096)) {
                $invalidProperties[] = "invalid value for 'csr', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['csr']) && (mb_strlen($this->container['csr']) < 1)) {
                $invalidProperties[] = "invalid value for 'csr', the character length must be bigger than or equal to 1.";
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
    * Gets csr
    *  证书签名请求内容，有以下两种情况：   - 通过API请求本接口，证书签名请求中换行符已使用\"\\r\\n\"代替；   - 通过console端导出证书签名请求，将得到标准的PEM格式的证书签名请求文件。
    *
    * @return string|null
    */
    public function getCsr()
    {
        return $this->container['csr'];
    }

    /**
    * Sets csr
    *
    * @param string|null $csr 证书签名请求内容，有以下两种情况：   - 通过API请求本接口，证书签名请求中换行符已使用\"\\r\\n\"代替；   - 通过console端导出证书签名请求，将得到标准的PEM格式的证书签名请求文件。
    *
    * @return $this
    */
    public function setCsr($csr)
    {
        $this->container['csr'] = $csr;
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

