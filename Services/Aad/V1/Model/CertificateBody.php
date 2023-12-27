<?php

namespace HuaweiCloud\SDK\Aad\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CertificateBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CertificateBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * opType  操作类型。0 - 上传， 1 - 更换
    * certName  证书名称
    * certFile  证书文件。上传新证书(op_type为0)时必填，更换为已有证书(op_type为1)时置空
    * certKeyFile  私钥文件。上传新证书(op_type为0)时必填，更换为已有证书(op_type为1)时置空
    * domainId  域名id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'opType' => 'int',
            'certName' => 'string',
            'certFile' => 'string',
            'certKeyFile' => 'string',
            'domainId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * opType  操作类型。0 - 上传， 1 - 更换
    * certName  证书名称
    * certFile  证书文件。上传新证书(op_type为0)时必填，更换为已有证书(op_type为1)时置空
    * certKeyFile  私钥文件。上传新证书(op_type为0)时必填，更换为已有证书(op_type为1)时置空
    * domainId  域名id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'opType' => 'int32',
        'certName' => null,
        'certFile' => null,
        'certKeyFile' => null,
        'domainId' => null
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
    * opType  操作类型。0 - 上传， 1 - 更换
    * certName  证书名称
    * certFile  证书文件。上传新证书(op_type为0)时必填，更换为已有证书(op_type为1)时置空
    * certKeyFile  私钥文件。上传新证书(op_type为0)时必填，更换为已有证书(op_type为1)时置空
    * domainId  域名id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'opType' => 'op_type',
            'certName' => 'cert_name',
            'certFile' => 'cert_file',
            'certKeyFile' => 'cert_key_file',
            'domainId' => 'domain_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * opType  操作类型。0 - 上传， 1 - 更换
    * certName  证书名称
    * certFile  证书文件。上传新证书(op_type为0)时必填，更换为已有证书(op_type为1)时置空
    * certKeyFile  私钥文件。上传新证书(op_type为0)时必填，更换为已有证书(op_type为1)时置空
    * domainId  域名id
    *
    * @var string[]
    */
    protected static $setters = [
            'opType' => 'setOpType',
            'certName' => 'setCertName',
            'certFile' => 'setCertFile',
            'certKeyFile' => 'setCertKeyFile',
            'domainId' => 'setDomainId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * opType  操作类型。0 - 上传， 1 - 更换
    * certName  证书名称
    * certFile  证书文件。上传新证书(op_type为0)时必填，更换为已有证书(op_type为1)时置空
    * certKeyFile  私钥文件。上传新证书(op_type为0)时必填，更换为已有证书(op_type为1)时置空
    * domainId  域名id
    *
    * @var string[]
    */
    protected static $getters = [
            'opType' => 'getOpType',
            'certName' => 'getCertName',
            'certFile' => 'getCertFile',
            'certKeyFile' => 'getCertKeyFile',
            'domainId' => 'getDomainId'
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
        $this->container['opType'] = isset($data['opType']) ? $data['opType'] : null;
        $this->container['certName'] = isset($data['certName']) ? $data['certName'] : null;
        $this->container['certFile'] = isset($data['certFile']) ? $data['certFile'] : null;
        $this->container['certKeyFile'] = isset($data['certKeyFile']) ? $data['certKeyFile'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['opType'] === null) {
            $invalidProperties[] = "'opType' can't be null";
        }
        if ($this->container['certName'] === null) {
            $invalidProperties[] = "'certName' can't be null";
        }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
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
    * Gets opType
    *  操作类型。0 - 上传， 1 - 更换
    *
    * @return int
    */
    public function getOpType()
    {
        return $this->container['opType'];
    }

    /**
    * Sets opType
    *
    * @param int $opType 操作类型。0 - 上传， 1 - 更换
    *
    * @return $this
    */
    public function setOpType($opType)
    {
        $this->container['opType'] = $opType;
        return $this;
    }

    /**
    * Gets certName
    *  证书名称
    *
    * @return string
    */
    public function getCertName()
    {
        return $this->container['certName'];
    }

    /**
    * Sets certName
    *
    * @param string $certName 证书名称
    *
    * @return $this
    */
    public function setCertName($certName)
    {
        $this->container['certName'] = $certName;
        return $this;
    }

    /**
    * Gets certFile
    *  证书文件。上传新证书(op_type为0)时必填，更换为已有证书(op_type为1)时置空
    *
    * @return string|null
    */
    public function getCertFile()
    {
        return $this->container['certFile'];
    }

    /**
    * Sets certFile
    *
    * @param string|null $certFile 证书文件。上传新证书(op_type为0)时必填，更换为已有证书(op_type为1)时置空
    *
    * @return $this
    */
    public function setCertFile($certFile)
    {
        $this->container['certFile'] = $certFile;
        return $this;
    }

    /**
    * Gets certKeyFile
    *  私钥文件。上传新证书(op_type为0)时必填，更换为已有证书(op_type为1)时置空
    *
    * @return string|null
    */
    public function getCertKeyFile()
    {
        return $this->container['certKeyFile'];
    }

    /**
    * Sets certKeyFile
    *
    * @param string|null $certKeyFile 私钥文件。上传新证书(op_type为0)时必填，更换为已有证书(op_type为1)时置空
    *
    * @return $this
    */
    public function setCertKeyFile($certKeyFile)
    {
        $this->container['certKeyFile'] = $certKeyFile;
        return $this;
    }

    /**
    * Gets domainId
    *  域名id
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 域名id
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
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

