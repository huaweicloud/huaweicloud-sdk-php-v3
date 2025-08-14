<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CertificateDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CertificateDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * algorithm  证书生成算法
    * certificate  应用程序证书
    * certificateId  应用程序证书Id
    * expiryDate  证书过期时间
    * status  证书状态
    * keySize  密钥大小
    * issueDate  证书生成时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'algorithm' => 'string',
            'certificate' => 'string',
            'certificateId' => 'string',
            'expiryDate' => 'int',
            'status' => 'string',
            'keySize' => 'string',
            'issueDate' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * algorithm  证书生成算法
    * certificate  应用程序证书
    * certificateId  应用程序证书Id
    * expiryDate  证书过期时间
    * status  证书状态
    * keySize  密钥大小
    * issueDate  证书生成时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'algorithm' => null,
        'certificate' => null,
        'certificateId' => null,
        'expiryDate' => 'int64',
        'status' => null,
        'keySize' => null,
        'issueDate' => 'int64'
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
    * algorithm  证书生成算法
    * certificate  应用程序证书
    * certificateId  应用程序证书Id
    * expiryDate  证书过期时间
    * status  证书状态
    * keySize  密钥大小
    * issueDate  证书生成时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'algorithm' => 'algorithm',
            'certificate' => 'certificate',
            'certificateId' => 'certificate_id',
            'expiryDate' => 'expiry_date',
            'status' => 'status',
            'keySize' => 'key_size',
            'issueDate' => 'issue_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * algorithm  证书生成算法
    * certificate  应用程序证书
    * certificateId  应用程序证书Id
    * expiryDate  证书过期时间
    * status  证书状态
    * keySize  密钥大小
    * issueDate  证书生成时间
    *
    * @var string[]
    */
    protected static $setters = [
            'algorithm' => 'setAlgorithm',
            'certificate' => 'setCertificate',
            'certificateId' => 'setCertificateId',
            'expiryDate' => 'setExpiryDate',
            'status' => 'setStatus',
            'keySize' => 'setKeySize',
            'issueDate' => 'setIssueDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * algorithm  证书生成算法
    * certificate  应用程序证书
    * certificateId  应用程序证书Id
    * expiryDate  证书过期时间
    * status  证书状态
    * keySize  密钥大小
    * issueDate  证书生成时间
    *
    * @var string[]
    */
    protected static $getters = [
            'algorithm' => 'getAlgorithm',
            'certificate' => 'getCertificate',
            'certificateId' => 'getCertificateId',
            'expiryDate' => 'getExpiryDate',
            'status' => 'getStatus',
            'keySize' => 'getKeySize',
            'issueDate' => 'getIssueDate'
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
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_INACTIVE = 'INACTIVE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_INACTIVE,
        ];
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
        $this->container['algorithm'] = isset($data['algorithm']) ? $data['algorithm'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['certificateId'] = isset($data['certificateId']) ? $data['certificateId'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['keySize'] = isset($data['keySize']) ? $data['keySize'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['algorithm'] === null) {
            $invalidProperties[] = "'algorithm' can't be null";
        }
        if ($this->container['certificate'] === null) {
            $invalidProperties[] = "'certificate' can't be null";
        }
        if ($this->container['certificateId'] === null) {
            $invalidProperties[] = "'certificateId' can't be null";
        }
        if ($this->container['expiryDate'] === null) {
            $invalidProperties[] = "'expiryDate' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['keySize'] === null) {
            $invalidProperties[] = "'keySize' can't be null";
        }
        if ($this->container['issueDate'] === null) {
            $invalidProperties[] = "'issueDate' can't be null";
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
    * Gets algorithm
    *  证书生成算法
    *
    * @return string
    */
    public function getAlgorithm()
    {
        return $this->container['algorithm'];
    }

    /**
    * Sets algorithm
    *
    * @param string $algorithm 证书生成算法
    *
    * @return $this
    */
    public function setAlgorithm($algorithm)
    {
        $this->container['algorithm'] = $algorithm;
        return $this;
    }

    /**
    * Gets certificate
    *  应用程序证书
    *
    * @return string
    */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
    * Sets certificate
    *
    * @param string $certificate 应用程序证书
    *
    * @return $this
    */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;
        return $this;
    }

    /**
    * Gets certificateId
    *  应用程序证书Id
    *
    * @return string
    */
    public function getCertificateId()
    {
        return $this->container['certificateId'];
    }

    /**
    * Sets certificateId
    *
    * @param string $certificateId 应用程序证书Id
    *
    * @return $this
    */
    public function setCertificateId($certificateId)
    {
        $this->container['certificateId'] = $certificateId;
        return $this;
    }

    /**
    * Gets expiryDate
    *  证书过期时间
    *
    * @return int
    */
    public function getExpiryDate()
    {
        return $this->container['expiryDate'];
    }

    /**
    * Sets expiryDate
    *
    * @param int $expiryDate 证书过期时间
    *
    * @return $this
    */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;
        return $this;
    }

    /**
    * Gets status
    *  证书状态
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 证书状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets keySize
    *  密钥大小
    *
    * @return string
    */
    public function getKeySize()
    {
        return $this->container['keySize'];
    }

    /**
    * Sets keySize
    *
    * @param string $keySize 密钥大小
    *
    * @return $this
    */
    public function setKeySize($keySize)
    {
        $this->container['keySize'] = $keySize;
        return $this;
    }

    /**
    * Gets issueDate
    *  证书生成时间
    *
    * @return int
    */
    public function getIssueDate()
    {
        return $this->container['issueDate'];
    }

    /**
    * Sets issueDate
    *
    * @param int $issueDate 证书生成时间
    *
    * @return $this
    */
    public function setIssueDate($issueDate)
    {
        $this->container['issueDate'] = $issueDate;
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

