<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UploadCertsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UploadCertsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucketName  证书文件存放的OBS桶（桶类型必须为标准存储或者低频存储，不支持归档存储）。
    * certsObject  证书文件对象。证书文件大小不能超过1M。证书名称在4位到32位之间，必须以字母开头，以（.cer|.crt|.rsa|.jks|.pem|.p10|.pfx|.p12|.csr|.der|.keystore）结尾，可以包含字母、数字、中划线、下划线或者小数点，不能包含其他的特殊字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucketName' => 'string',
            'certsObject' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucketName  证书文件存放的OBS桶（桶类型必须为标准存储或者低频存储，不支持归档存储）。
    * certsObject  证书文件对象。证书文件大小不能超过1M。证书名称在4位到32位之间，必须以字母开头，以（.cer|.crt|.rsa|.jks|.pem|.p10|.pfx|.p12|.csr|.der|.keystore）结尾，可以包含字母、数字、中划线、下划线或者小数点，不能包含其他的特殊字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucketName' => null,
        'certsObject' => null
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
    * bucketName  证书文件存放的OBS桶（桶类型必须为标准存储或者低频存储，不支持归档存储）。
    * certsObject  证书文件对象。证书文件大小不能超过1M。证书名称在4位到32位之间，必须以字母开头，以（.cer|.crt|.rsa|.jks|.pem|.p10|.pfx|.p12|.csr|.der|.keystore）结尾，可以包含字母、数字、中划线、下划线或者小数点，不能包含其他的特殊字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucketName' => 'bucket_name',
            'certsObject' => 'certs_object'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucketName  证书文件存放的OBS桶（桶类型必须为标准存储或者低频存储，不支持归档存储）。
    * certsObject  证书文件对象。证书文件大小不能超过1M。证书名称在4位到32位之间，必须以字母开头，以（.cer|.crt|.rsa|.jks|.pem|.p10|.pfx|.p12|.csr|.der|.keystore）结尾，可以包含字母、数字、中划线、下划线或者小数点，不能包含其他的特殊字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'bucketName' => 'setBucketName',
            'certsObject' => 'setCertsObject'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucketName  证书文件存放的OBS桶（桶类型必须为标准存储或者低频存储，不支持归档存储）。
    * certsObject  证书文件对象。证书文件大小不能超过1M。证书名称在4位到32位之间，必须以字母开头，以（.cer|.crt|.rsa|.jks|.pem|.p10|.pfx|.p12|.csr|.der|.keystore）结尾，可以包含字母、数字、中划线、下划线或者小数点，不能包含其他的特殊字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'bucketName' => 'getBucketName',
            'certsObject' => 'getCertsObject'
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
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['certsObject'] = isset($data['certsObject']) ? $data['certsObject'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['bucketName'] === null) {
            $invalidProperties[] = "'bucketName' can't be null";
        }
        if ($this->container['certsObject'] === null) {
            $invalidProperties[] = "'certsObject' can't be null";
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
    * Gets bucketName
    *  证书文件存放的OBS桶（桶类型必须为标准存储或者低频存储，不支持归档存储）。
    *
    * @return string
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string $bucketName 证书文件存放的OBS桶（桶类型必须为标准存储或者低频存储，不支持归档存储）。
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets certsObject
    *  证书文件对象。证书文件大小不能超过1M。证书名称在4位到32位之间，必须以字母开头，以（.cer|.crt|.rsa|.jks|.pem|.p10|.pfx|.p12|.csr|.der|.keystore）结尾，可以包含字母、数字、中划线、下划线或者小数点，不能包含其他的特殊字符。
    *
    * @return string
    */
    public function getCertsObject()
    {
        return $this->container['certsObject'];
    }

    /**
    * Sets certsObject
    *
    * @param string $certsObject 证书文件对象。证书文件大小不能超过1M。证书名称在4位到32位之间，必须以字母开头，以（.cer|.crt|.rsa|.jks|.pem|.p10|.pfx|.p12|.csr|.der|.keystore）结尾，可以包含字母、数字、中划线、下划线或者小数点，不能包含其他的特殊字符。
    *
    * @return $this
    */
    public function setCertsObject($certsObject)
    {
        $this->container['certsObject'] = $certsObject;
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

