<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVerifyDomainOwnerInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVerifyDomainOwnerInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dnsVerifyType  DNS解析类型。
    * dnsVerifyName  DNS解析主机记录名称。
    * fileVerifyUrl  文件校验URL地址。
    * domainName  加速域名。
    * verifyDomainName  校验域名。
    * fileVerifyFilename  文件校验的校验文件名。
    * verifyContent  校验值，解析值或者文件内容。
    * fileVerifyDomains  文件校验域名列表。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dnsVerifyType' => 'string',
            'dnsVerifyName' => 'string',
            'fileVerifyUrl' => 'string',
            'domainName' => 'string',
            'verifyDomainName' => 'string',
            'fileVerifyFilename' => 'string',
            'verifyContent' => 'string',
            'fileVerifyDomains' => 'string[]',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dnsVerifyType  DNS解析类型。
    * dnsVerifyName  DNS解析主机记录名称。
    * fileVerifyUrl  文件校验URL地址。
    * domainName  加速域名。
    * verifyDomainName  校验域名。
    * fileVerifyFilename  文件校验的校验文件名。
    * verifyContent  校验值，解析值或者文件内容。
    * fileVerifyDomains  文件校验域名列表。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dnsVerifyType' => null,
        'dnsVerifyName' => null,
        'fileVerifyUrl' => null,
        'domainName' => null,
        'verifyDomainName' => null,
        'fileVerifyFilename' => null,
        'verifyContent' => null,
        'fileVerifyDomains' => null,
        'xRequestId' => null
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
    * dnsVerifyType  DNS解析类型。
    * dnsVerifyName  DNS解析主机记录名称。
    * fileVerifyUrl  文件校验URL地址。
    * domainName  加速域名。
    * verifyDomainName  校验域名。
    * fileVerifyFilename  文件校验的校验文件名。
    * verifyContent  校验值，解析值或者文件内容。
    * fileVerifyDomains  文件校验域名列表。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dnsVerifyType' => 'dns_verify_type',
            'dnsVerifyName' => 'dns_verify_name',
            'fileVerifyUrl' => 'file_verify_url',
            'domainName' => 'domain_name',
            'verifyDomainName' => 'verify_domain_name',
            'fileVerifyFilename' => 'file_verify_filename',
            'verifyContent' => 'verify_content',
            'fileVerifyDomains' => 'file_verify_domains',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dnsVerifyType  DNS解析类型。
    * dnsVerifyName  DNS解析主机记录名称。
    * fileVerifyUrl  文件校验URL地址。
    * domainName  加速域名。
    * verifyDomainName  校验域名。
    * fileVerifyFilename  文件校验的校验文件名。
    * verifyContent  校验值，解析值或者文件内容。
    * fileVerifyDomains  文件校验域名列表。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'dnsVerifyType' => 'setDnsVerifyType',
            'dnsVerifyName' => 'setDnsVerifyName',
            'fileVerifyUrl' => 'setFileVerifyUrl',
            'domainName' => 'setDomainName',
            'verifyDomainName' => 'setVerifyDomainName',
            'fileVerifyFilename' => 'setFileVerifyFilename',
            'verifyContent' => 'setVerifyContent',
            'fileVerifyDomains' => 'setFileVerifyDomains',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dnsVerifyType  DNS解析类型。
    * dnsVerifyName  DNS解析主机记录名称。
    * fileVerifyUrl  文件校验URL地址。
    * domainName  加速域名。
    * verifyDomainName  校验域名。
    * fileVerifyFilename  文件校验的校验文件名。
    * verifyContent  校验值，解析值或者文件内容。
    * fileVerifyDomains  文件校验域名列表。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'dnsVerifyType' => 'getDnsVerifyType',
            'dnsVerifyName' => 'getDnsVerifyName',
            'fileVerifyUrl' => 'getFileVerifyUrl',
            'domainName' => 'getDomainName',
            'verifyDomainName' => 'getVerifyDomainName',
            'fileVerifyFilename' => 'getFileVerifyFilename',
            'verifyContent' => 'getVerifyContent',
            'fileVerifyDomains' => 'getFileVerifyDomains',
            'xRequestId' => 'getXRequestId'
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
        $this->container['dnsVerifyType'] = isset($data['dnsVerifyType']) ? $data['dnsVerifyType'] : null;
        $this->container['dnsVerifyName'] = isset($data['dnsVerifyName']) ? $data['dnsVerifyName'] : null;
        $this->container['fileVerifyUrl'] = isset($data['fileVerifyUrl']) ? $data['fileVerifyUrl'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['verifyDomainName'] = isset($data['verifyDomainName']) ? $data['verifyDomainName'] : null;
        $this->container['fileVerifyFilename'] = isset($data['fileVerifyFilename']) ? $data['fileVerifyFilename'] : null;
        $this->container['verifyContent'] = isset($data['verifyContent']) ? $data['verifyContent'] : null;
        $this->container['fileVerifyDomains'] = isset($data['fileVerifyDomains']) ? $data['fileVerifyDomains'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
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
    * Gets dnsVerifyType
    *  DNS解析类型。
    *
    * @return string|null
    */
    public function getDnsVerifyType()
    {
        return $this->container['dnsVerifyType'];
    }

    /**
    * Sets dnsVerifyType
    *
    * @param string|null $dnsVerifyType DNS解析类型。
    *
    * @return $this
    */
    public function setDnsVerifyType($dnsVerifyType)
    {
        $this->container['dnsVerifyType'] = $dnsVerifyType;
        return $this;
    }

    /**
    * Gets dnsVerifyName
    *  DNS解析主机记录名称。
    *
    * @return string|null
    */
    public function getDnsVerifyName()
    {
        return $this->container['dnsVerifyName'];
    }

    /**
    * Sets dnsVerifyName
    *
    * @param string|null $dnsVerifyName DNS解析主机记录名称。
    *
    * @return $this
    */
    public function setDnsVerifyName($dnsVerifyName)
    {
        $this->container['dnsVerifyName'] = $dnsVerifyName;
        return $this;
    }

    /**
    * Gets fileVerifyUrl
    *  文件校验URL地址。
    *
    * @return string|null
    */
    public function getFileVerifyUrl()
    {
        return $this->container['fileVerifyUrl'];
    }

    /**
    * Sets fileVerifyUrl
    *
    * @param string|null $fileVerifyUrl 文件校验URL地址。
    *
    * @return $this
    */
    public function setFileVerifyUrl($fileVerifyUrl)
    {
        $this->container['fileVerifyUrl'] = $fileVerifyUrl;
        return $this;
    }

    /**
    * Gets domainName
    *  加速域名。
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 加速域名。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets verifyDomainName
    *  校验域名。
    *
    * @return string|null
    */
    public function getVerifyDomainName()
    {
        return $this->container['verifyDomainName'];
    }

    /**
    * Sets verifyDomainName
    *
    * @param string|null $verifyDomainName 校验域名。
    *
    * @return $this
    */
    public function setVerifyDomainName($verifyDomainName)
    {
        $this->container['verifyDomainName'] = $verifyDomainName;
        return $this;
    }

    /**
    * Gets fileVerifyFilename
    *  文件校验的校验文件名。
    *
    * @return string|null
    */
    public function getFileVerifyFilename()
    {
        return $this->container['fileVerifyFilename'];
    }

    /**
    * Sets fileVerifyFilename
    *
    * @param string|null $fileVerifyFilename 文件校验的校验文件名。
    *
    * @return $this
    */
    public function setFileVerifyFilename($fileVerifyFilename)
    {
        $this->container['fileVerifyFilename'] = $fileVerifyFilename;
        return $this;
    }

    /**
    * Gets verifyContent
    *  校验值，解析值或者文件内容。
    *
    * @return string|null
    */
    public function getVerifyContent()
    {
        return $this->container['verifyContent'];
    }

    /**
    * Sets verifyContent
    *
    * @param string|null $verifyContent 校验值，解析值或者文件内容。
    *
    * @return $this
    */
    public function setVerifyContent($verifyContent)
    {
        $this->container['verifyContent'] = $verifyContent;
        return $this;
    }

    /**
    * Gets fileVerifyDomains
    *  文件校验域名列表。
    *
    * @return string[]|null
    */
    public function getFileVerifyDomains()
    {
        return $this->container['fileVerifyDomains'];
    }

    /**
    * Sets fileVerifyDomains
    *
    * @param string[]|null $fileVerifyDomains 文件校验域名列表。
    *
    * @return $this
    */
    public function setFileVerifyDomains($fileVerifyDomains)
    {
        $this->container['fileVerifyDomains'] = $fileVerifyDomains;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

