<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateServerCertificateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateServerCertificateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverCertificateId  唯一标识ID
    * commonName  **参数说明**：证书通用名
    * effectiveDate  证书生效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * expiryDate  证书失效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * certificateOwner  证书所有者。
    * certificateIssuer  证书颁发者。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverCertificateId' => 'string',
            'commonName' => 'string',
            'effectiveDate' => 'string',
            'expiryDate' => 'string',
            'certificateOwner' => 'string',
            'certificateIssuer' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverCertificateId  唯一标识ID
    * commonName  **参数说明**：证书通用名
    * effectiveDate  证书生效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * expiryDate  证书失效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * certificateOwner  证书所有者。
    * certificateIssuer  证书颁发者。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverCertificateId' => null,
        'commonName' => null,
        'effectiveDate' => null,
        'expiryDate' => null,
        'certificateOwner' => null,
        'certificateIssuer' => null
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
    * serverCertificateId  唯一标识ID
    * commonName  **参数说明**：证书通用名
    * effectiveDate  证书生效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * expiryDate  证书失效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * certificateOwner  证书所有者。
    * certificateIssuer  证书颁发者。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverCertificateId' => 'server_certificate_id',
            'commonName' => 'common_name',
            'effectiveDate' => 'effective_date',
            'expiryDate' => 'expiry_date',
            'certificateOwner' => 'certificate_owner',
            'certificateIssuer' => 'certificate_issuer'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverCertificateId  唯一标识ID
    * commonName  **参数说明**：证书通用名
    * effectiveDate  证书生效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * expiryDate  证书失效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * certificateOwner  证书所有者。
    * certificateIssuer  证书颁发者。
    *
    * @var string[]
    */
    protected static $setters = [
            'serverCertificateId' => 'setServerCertificateId',
            'commonName' => 'setCommonName',
            'effectiveDate' => 'setEffectiveDate',
            'expiryDate' => 'setExpiryDate',
            'certificateOwner' => 'setCertificateOwner',
            'certificateIssuer' => 'setCertificateIssuer'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverCertificateId  唯一标识ID
    * commonName  **参数说明**：证书通用名
    * effectiveDate  证书生效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * expiryDate  证书失效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    * certificateOwner  证书所有者。
    * certificateIssuer  证书颁发者。
    *
    * @var string[]
    */
    protected static $getters = [
            'serverCertificateId' => 'getServerCertificateId',
            'commonName' => 'getCommonName',
            'effectiveDate' => 'getEffectiveDate',
            'expiryDate' => 'getExpiryDate',
            'certificateOwner' => 'getCertificateOwner',
            'certificateIssuer' => 'getCertificateIssuer'
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
        $this->container['serverCertificateId'] = isset($data['serverCertificateId']) ? $data['serverCertificateId'] : null;
        $this->container['commonName'] = isset($data['commonName']) ? $data['commonName'] : null;
        $this->container['effectiveDate'] = isset($data['effectiveDate']) ? $data['effectiveDate'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['certificateOwner'] = isset($data['certificateOwner']) ? $data['certificateOwner'] : null;
        $this->container['certificateIssuer'] = isset($data['certificateIssuer']) ? $data['certificateIssuer'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['serverCertificateId']) && !preg_match("/^[a-fA-F0-9]{24}$/", $this->container['serverCertificateId'])) {
                $invalidProperties[] = "invalid value for 'serverCertificateId', must be conform to the pattern /^[a-fA-F0-9]{24}$/.";
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
    * Gets serverCertificateId
    *  唯一标识ID
    *
    * @return string|null
    */
    public function getServerCertificateId()
    {
        return $this->container['serverCertificateId'];
    }

    /**
    * Sets serverCertificateId
    *
    * @param string|null $serverCertificateId 唯一标识ID
    *
    * @return $this
    */
    public function setServerCertificateId($serverCertificateId)
    {
        $this->container['serverCertificateId'] = $serverCertificateId;
        return $this;
    }

    /**
    * Gets commonName
    *  **参数说明**：证书通用名
    *
    * @return string|null
    */
    public function getCommonName()
    {
        return $this->container['commonName'];
    }

    /**
    * Sets commonName
    *
    * @param string|null $commonName **参数说明**：证书通用名
    *
    * @return $this
    */
    public function setCommonName($commonName)
    {
        $this->container['commonName'] = $commonName;
        return $this;
    }

    /**
    * Gets effectiveDate
    *  证书生效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return string|null
    */
    public function getEffectiveDate()
    {
        return $this->container['effectiveDate'];
    }

    /**
    * Sets effectiveDate
    *
    * @param string|null $effectiveDate 证书生效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return $this
    */
    public function setEffectiveDate($effectiveDate)
    {
        $this->container['effectiveDate'] = $effectiveDate;
        return $this;
    }

    /**
    * Gets expiryDate
    *  证书失效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return string|null
    */
    public function getExpiryDate()
    {
        return $this->container['expiryDate'];
    }

    /**
    * Sets expiryDate
    *
    * @param string|null $expiryDate 证书失效日期。格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return $this
    */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;
        return $this;
    }

    /**
    * Gets certificateOwner
    *  证书所有者。
    *
    * @return string|null
    */
    public function getCertificateOwner()
    {
        return $this->container['certificateOwner'];
    }

    /**
    * Sets certificateOwner
    *
    * @param string|null $certificateOwner 证书所有者。
    *
    * @return $this
    */
    public function setCertificateOwner($certificateOwner)
    {
        $this->container['certificateOwner'] = $certificateOwner;
        return $this;
    }

    /**
    * Gets certificateIssuer
    *  证书颁发者。
    *
    * @return string|null
    */
    public function getCertificateIssuer()
    {
        return $this->container['certificateIssuer'];
    }

    /**
    * Sets certificateIssuer
    *
    * @param string|null $certificateIssuer 证书颁发者。
    *
    * @return $this
    */
    public function setCertificateIssuer($certificateIssuer)
    {
        $this->container['certificateIssuer'] = $certificateIssuer;
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

